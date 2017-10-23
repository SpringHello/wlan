<?php
if (!(defined('IN_IA'))) 
{
	exit('Access Denied');
}
class Detail_EweiShopV2Page extends MobilePage 
{
	public function main() 
	{
	    
	 
		global $_W;
		global $_GPC;
		$openid = $_W['openid'];
		$uniacid = $_W['uniacid'];
		$id = intval($_GPC['id']);
		$rank = intval($_GPC['rank']);
		$join_id = intval($_GPC['join_id']);
        
        
		
		if (!(empty($join_id))) 
		{
			$_SESSION[$id . '_rank'] = $rank;
			$_SESSION[$id . '_join_id'] = $join_id;
		}
		$err = false;
		
		
		$scenic = pdo_fetch('select * from ' . tablename('ajingqu') . ' where id=:id and uniacid=:uniacid limit 1', array(':id' => $id, ':uniacid' => $_W['uniacid']));
	
		
		$seckillinfo = false;
		$seckill = p('seckill');
		if ($seckill) 
		{
			$time = time();
			$seckillinfo = $seckill->getSeckill($scenic['id'], 0, false);
			if (!(empty($seckillinfo))) 
			{
				if (($seckillinfo['starttime'] <= $time) && ($time < $seckillinfo['endtime'])) 
				{
					$seckillinfo['status'] = 0;
				}
				else if ($time < $seckillinfo['starttime']) 
				{
					$seckillinfo['status'] = 1;
				}
				else 
				{
					$seckillinfo['status'] = -1;
				}
			}
		}
		include $this->template();
		
	
	    
	}
	
	
	public function querygift() 
	{
		global $_W;
		global $_GPC;
		$uniacid = $_W['uniacid'];
		$giftid = $_GPC['id'];
		$gift = pdo_fetch('select * from ' . tablename('ewei_shop_gift') . ' where uniacid = ' . $uniacid . ' and status = 1 and id = ' . $giftid . ' ');
		show_json(1, $gift);
	}
	protected function getGoodsDispatchPrice($goods) 
	{
		if (!(empty($goods['issendfree']))) 
		{
			return 0;
		}
		if (($goods['type'] == 2) || ($goods['type'] == 3) || ($goods['type'] == 20)) 
		{
			return 0;
		}
		if ($goods['dispatchtype'] == 1) 
		{
			return $goods['dispatchprice'];
		}
		if (empty($goods['dispatchid'])) 
		{
			$dispatch = m('dispatch')->getDefaultDispatch($goods['merchid']);
		}
		else 
		{
			$dispatch = m('dispatch')->getOneDispatch($goods['dispatchid']);
		}
		if (empty($dispatch)) 
		{
			$dispatch = m('dispatch')->getNewDispatch($goods['merchid']);
		}
		$areas = iunserializer($dispatch['areas']);
		if (!(empty($areas)) && is_array($areas)) 
		{
			$firstprice = array();
			foreach ($areas as $val ) 
			{
				$firstprice[] = $val['firstprice'];
			}
			array_push($firstprice, m('dispatch')->getDispatchPrice(1, $dispatch));
			$ret = array('min' => round(min($firstprice), 2), 'max' => round(max($firstprice), 2));
		}
		else 
		{
			$ret = m('dispatch')->getDispatchPrice(1, $dispatch);
		}
		return $ret;
	}
	public function get_detail() 
	{
		global $_W;
		global $_GPC;
		$id = intval($_GPC['id']);
		$goods = pdo_fetch('select * from ' . tablename('ewei_shop_goods') . ' where id=:id and uniacid=:uniacid limit 1', array(':id' => $id, ':uniacid' => $_W['uniacid']));
		exit(m('ui')->lazy($goods['content']));
	}
	public function get_comments() 
	{
		global $_W;
		global $_GPC;
		$id = intval($_GPC['id']);
		$percent = 100;
		$params = array(':goodsid' => $id, ':uniacid' => $_W['uniacid']);
		$count = array('all' => pdo_fetchcolumn('select count(*) from ' . tablename('ewei_shop_order_comment') . ' where goodsid=:goodsid and level>=0 and deleted=0 and checked=0 and uniacid=:uniacid', $params), 'good' => pdo_fetchcolumn('select count(*) from ' . tablename('ewei_shop_order_comment') . ' where goodsid=:goodsid and level>=5 and deleted=0 and checked=0 and uniacid=:uniacid', $params), 'normal' => pdo_fetchcolumn('select count(*) from ' . tablename('ewei_shop_order_comment') . ' where goodsid=:goodsid and level>=2 and level<=4 and deleted=0 and checked=0 and uniacid=:uniacid', $params), 'bad' => pdo_fetchcolumn('select count(*) from ' . tablename('ewei_shop_order_comment') . ' where goodsid=:goodsid and level<=1 and deleted=0 and checked=0 and uniacid=:uniacid', $params), 'pic' => pdo_fetchcolumn('select count(*) from ' . tablename('ewei_shop_order_comment') . ' where goodsid=:goodsid and ifnull(images,\'a:0:{}\')<>\'a:0:{}\' and deleted=0 and checked=0 and uniacid=:uniacid', $params));
		$list = array();
		if (0 < $count['all']) 
		{
			$percent = intval(($count['good'] / ((empty($count['all']) ? 1 : $count['all']))) * 100);
			$list = pdo_fetchall('select nickname,level,content,images,createtime from ' . tablename('ewei_shop_order_comment') . ' where goodsid=:goodsid and deleted=0 and checked=0 and uniacid=:uniacid order by istop desc, createtime desc, id desc limit 2', array(':goodsid' => $id, ':uniacid' => $_W['uniacid']));
			foreach ($list as &$row ) 
			{
				$row['createtime'] = date('Y-m-d H:i', $row['createtime']);
				$row['images'] = set_medias(iunserializer($row['images']));
				$row['nickname'] = cut_str($row['nickname'], 1, 0) . '**' . cut_str($row['nickname'], 1, -1);
			}
			unset($row);
		}
		show_json(1, array('count' => $count, 'percent' => $percent, 'list' => $list));
	}
	public function get_comment_list() 
	{
		global $_W;
		global $_GPC;
		$id = intval($_GPC['id']);
		$level = trim($_GPC['level']);
		$params = array(':goodsid' => $id, ':uniacid' => $_W['uniacid']);
		$pindex = max(1, intval($_GPC['page']));
		$psize = 10;
		$condition = '';
		if ($level == 'good') 
		{
			$condition = ' and level=5';
		}
		else if ($level == 'normal') 
		{
			$condition = ' and level>=2 and level<=4';
		}
		else if ($level == 'bad') 
		{
			$condition = ' and level<=1';
		}
		else if ($level == 'pic') 
		{
			$condition = ' and ifnull(images,\'a:0:{}\')<>\'a:0:{}\'';
		}
		$list = pdo_fetchall('select * from ' . tablename('ewei_shop_order_comment') . ' ' . '  where goodsid=:goodsid and uniacid=:uniacid and deleted=0 and checked=0 ' . $condition . ' order by istop desc, createtime desc, id desc LIMIT ' . (($pindex - 1) * $psize) . ',' . $psize, $params);
		foreach ($list as &$row ) 
		{
			$row['headimgurl'] = tomedia($row['headimgurl']);
			$row['createtime'] = date('Y-m-d H:i', $row['createtime']);
			$row['images'] = set_medias(iunserializer($row['images']));
			$row['reply_images'] = set_medias(iunserializer($row['reply_images']));
			$row['append_images'] = set_medias(iunserializer($row['append_images']));
			$row['append_reply_images'] = set_medias(iunserializer($row['append_reply_images']));
			$row['nickname'] = cut_str($row['nickname'], 1, 0) . '**' . cut_str($row['nickname'], 1, -1);
		}
		unset($row);
		$total = pdo_fetchcolumn('select count(*) from ' . tablename('ewei_shop_order_comment') . ' where goodsid=:goodsid  and uniacid=:uniacid and deleted=0 and checked=0 ' . $condition, $params);
		show_json(1, array('list' => $list, 'total' => $total, 'pagesize' => $psize));
	}
	public function qrcode() 
	{
		global $_W;
		global $_GPC;
		$url = $_W['root'];
		show_json(1, array('url' => m('qrcode')->createQrcode($url)));
	}
}
?>