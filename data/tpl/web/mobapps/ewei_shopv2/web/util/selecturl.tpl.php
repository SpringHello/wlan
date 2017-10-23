<?php defined('IN_IA') or exit('Access Denied');?><div class="modal-dialog">
	<style>
		#selectUrl .modal-body {padding: 10px 15px;}
		#selectUrl .tab-pane {margin-top: 5px; min-height: 350px; max-height: 350px; overflow-y: auto;}
		#selectUrl .page-header {padding: 9px 0; margin-bottom: 8px;}
		#selectUrl .page-header h4 {margin: 0;}
		#selectUrl .btn {margin-bottom: 3px;}
		#selectUrl .modal-dialog {width: 880px;}
		#selectUrl .line {border-bottom: 1px dashed #ddd; color: #999; height: 36px; line-height: 36px;}
		#selectUrl .line .icon {height: 35px; width: 30px; position: relative; float: left;}
		#selectUrl .line .icon.icon-1:before {content: ""; width: 10px; height: 10px; border: 1px dashed #ccc; position: absolute; top: 12px; left: 10px;}
		#selectUrl .line .icon.icon-2 {width: 50px;}
		#selectUrl .line .icon.icon-2:before {content: ""; width: 10px; height: 10px; border-left: 1px dashed #ccc; border-bottom: 1px dashed #ccc; position: absolute; top: 12px; left: 20px;}
		#selectUrl .line .icon.icon-3 {width: 60px;}
		#selectUrl .line .icon.icon-3:before {content: ""; width: 10px; height: 10px; border-left: 1px dashed #ccc; border-bottom: 1px dashed #ccc; position: absolute; top: 12px; left: 30px;}
		#selectUrl .line .btn-sm {float: right; margin-top: 5px; margin-right: 5px; height: 24px; line-height: 24px; padding: 0 10px;}
		#selectUrl .line .text {display: block;}
		#selectUrl .line .label-sm {padding: 2px 5px;}
		#selectUrl .line.good {height: 60px; padding: 4px 0;}
		#selectUrl .line.good .image {height: 50px; width: 50px; border: 1px solid #ccc; float: left;}
		#selectUrl .line.good .image img {height: 100%; width: 100%;}
		#selectUrl .line.good .text {padding-left: 60px; height: 52px;}
		#selectUrl .line.good .text p {padding: 0; margin: 0;}
		#selectUrl .line.good .text .name {font-size: 15px; line-height: 32px; height: 28px;}
		#selectUrl .line.good .text .price {font-size: 12px; line-height: 18px; height: 18px;}
		#selectUrl .line.good .btn-sm {height: 32px; padding: 5px 10px; line-height: 22px; margin-top: 9px;}
		#selectUrl .tip {line-height: 250px; text-align: center;}
		#selectUrl .nav-tabs > li > a {padding: 8px 20px;}
	</style>
    <div class="modal-content">
        <div class="modal-header">
            <button data-dismiss="modal" class="close" type="button">×</button>
            <h4 class="modal-title">选择链接</h4>
        </div>
        <div class="modal-body">
        	<ul class="nav nav-tabs" id="selectUrlTab">
				<li class="active"><a href="#sut_shop">商城</a></li>
				<li class=""><a href="#sut_good">资源</a></li>
				<li class=""><a href="#sut_scenic">景区</a></li>
				<?php  if($syscate['level']!=-1 && !empty($categorys)) { ?>
					<li class=""><a href="#sut_cate">资源分类</a></li>
				<?php  } ?>
				<?php  if(p('article')) { ?>
					<li class=""><a href="#sut_article"><?php  echo m('plugin')->getName('article')?></a></li>
				<?php  } ?>
				<?php  if(com('coupon')) { ?>
					<li class=""><a href="#sut_coupon">超级券</a></li>
				<?php  } ?>
				<?php  if(p('diypage')) { ?>
					<li class=""><a href="#sut_diypage"><?php  echo m('plugin')->getName('diypage')?></a></li>
				<?php  } ?>
				<?php  if(p('groups')) { ?>
					<li class=""><a href="#sut_groups"><?php  echo m('plugin')->getName('groups')?></a></li>
				<?php  } ?>
				<?php  if(p('sns')) { ?>
					<li class=""><a href="#sut_sns"><?php  echo m('plugin')->getName('sns')?></a></li>
				<?php  } ?>
				<?php  if(p('creditshop')) { ?>
					<li class=""><a href="#sut_creditshop"><?php  echo m('plugin')->getName('creditshop')?></a></li>
				<?php  } ?>
			</ul>
			<div class="tab-content ">
				
				<div class="tab-pane active" id="sut_shop">
					
					<div class="page-header"><h4><i class="fa fa-folder-open-o"></i> 商城页面</h4></div>
					<nav data-href="<?php  echo mobileUrl(null, null, $full)?>" class="btn btn-default btn-sm" title="商城首页">商城首页</nav>
					<nav data-href="<?php  echo mobileUrl('shop/category', null, $full)?>" class="btn btn-default btn-sm" title="分类导航">分类导航</nav>
					<nav data-href="<?php  echo mobileUrl('goods', null, $full)?>" class="btn btn-default btn-sm" title="全部资源">全部资源</nav>
					<nav data-href="<?php  echo mobileUrl('shop/notice', null, $full)?>" class="btn btn-default btn-sm" title="公告页面">公告页面</nav>
					<nav data-href="<?php  echo mobileUrl('member/cart', null, $full)?>" class="btn btn-default btn-sm" title="购物车">购物车</nav>

					<div class="page-header"><h4><i class="fa fa-folder-open-o"></i> 资源属性</h4></div>
					<nav data-href="<?php  echo mobileUrl(goods, array('isrecommand'=>1), $full)?>" class="btn btn-default btn-sm" title="推荐资源">推荐资源</nav>
					<nav data-href="<?php  echo mobileUrl(goods, array('isnew'=>1), $full)?>" class="btn btn-default btn-sm" title="新品上市">新品上市</nav>
					<nav data-href="<?php  echo mobileUrl(goods, array('ishot'=>1), $full)?>" class="btn btn-default btn-sm" title="热卖资源">热卖资源</nav>
					<nav data-href="<?php  echo mobileUrl(goods, array('isdiscount'=>1), $full)?>" class="btn btn-default btn-sm" title="促销资源">促销资源</nav>
					<nav data-href="<?php  echo mobileUrl(goods, array('issendfree'=>1), $full)?>" class="btn btn-default btn-sm" title="卖家包邮">卖家包邮</nav>
					<nav data-href="<?php  echo mobileUrl(goods, array('istime'=>1), $full)?>" class="btn btn-default btn-sm" title="显示抢购">限时抢购</nav>

					<div class="page-header"><h4><i class="fa fa-folder-open-o"></i> 会员中心</h4></div>
					<nav data-href="<?php  echo mobileUrl('member', null, $full)?>" class="btn btn-default btn-sm" title="会员中心">会员中心</nav>
					<nav data-href="<?php  echo mobileUrl('order', null, $full)?>" class="btn btn-default btn-sm" title="我的订单(全部)">我的订单(全部)</nav>
					<nav data-href="<?php  echo mobileUrl('order', array('status'=>0), $full)?>" class="btn btn-default btn-sm" title="待付款订单">待付款订单</nav>
					<nav data-href="<?php  echo mobileUrl('order', array('status'=>1), $full)?>" class="btn btn-default btn-sm" title="待发货订单">待发货订单</nav>
					<nav data-href="<?php  echo mobileUrl('order', array('status'=>2), $full)?>" class="btn btn-default btn-sm" title="待收货订单">待收货订单</nav>
					<nav data-href="<?php  echo mobileUrl('order', array('status'=>4), $full)?>" class="btn btn-default btn-sm" title="退换货订单">退换货订单</nav>
					<nav data-href="<?php  echo mobileUrl('order', array('status'=>3), $full)?>" class="btn btn-default btn-sm" title="已完成订单">已完成订单</nav>
					<nav data-href="<?php  echo mobileUrl('member/favorite', null, $full)?>" class="btn btn-default btn-sm" title="我的收藏">我的收藏</nav>
					<nav data-href="<?php  echo mobileUrl('member/history', null, $full)?>" class="btn btn-default btn-sm" title="我的足迹">我的足迹</nav>
					<nav data-href="<?php  echo mobileUrl('member/recharge', null, $full)?>" class="btn btn-default btn-sm" title="会员充值">会员充值</nav>
					<nav data-href="<?php  echo mobileUrl('member/log', null, $full)?>" class="btn btn-default btn-sm" title="余额明细">余额明细</nav>
					<nav data-href="<?php  echo mobileUrl('member/withdraw', null, $full)?>" class="btn btn-default btn-sm" title="余额提现">余额提现</nav>
					<nav data-href="<?php  echo mobileUrl('member/address', null, $full)?>" class="btn btn-default btn-sm" title="收货地址">收货地址</nav>
					<nav data-href="<?php  echo mobileUrl('member/info', null, $full)?>" class="btn btn-default btn-sm" title="我的资料">我的资料</nav>
					<nav data-href="<?php  echo mobileUrl('member/rank', null, $full)?>" class="btn btn-default btn-sm" title="积分排行">积分排行</nav>
					<nav data-href="<?php  echo mobileUrl('member/rank/order_rank', null, $full)?>" class="btn btn-default btn-sm" title="消费排行">消费排行</nav>
					<nav data-href="<?php  echo mobileUrl('member/notice', null, $full)?>" class="btn btn-default btn-sm" title="消息提醒设置">消息提醒设置</nav>
					<nav data-href="<?php  echo mobileUrl('member/address', null, $full)?>" class="btn btn-default btn-sm" title="收货地址管理">收货地址管理</nav>
					<?php  if(p('commission')) { ?>
						<div class="page-header"><h4><i class="fa fa-folder-open-o"></i> <?php  echo m('plugin')->getName('commission')?></h4></div>
						<nav data-href="<?php  echo mobileUrl('commission', null, $full)?>" class="btn btn-default btn-sm" title="分销中心">分销中心</nav>
						<nav data-href="<?php  echo mobileUrl('commission/register', null, $full)?>" class="btn btn-default btn-sm" title="成为分销商">成为分销商</nav>
						<nav data-href="<?php  echo mobileUrl('commission/myshop', null, $full)?>" class="btn btn-default btn-sm" title="我的小店">我的小店</nav>
						<nav data-href="<?php  echo mobileUrl('commission/withdraw', null, $full)?>" class="btn btn-default btn-sm" title="分销佣金/佣金提现">分销佣金/佣金提现</nav>
						<nav data-href="<?php  echo mobileUrl('commission/order', null, $full)?>" class="btn btn-default btn-sm" title="分销订单">分销订单</nav>
						<nav data-href="<?php  echo mobileUrl('commission/down', null, $full)?>" class="btn btn-default btn-sm" title="我的下线">我的下线</nav>
						<nav data-href="<?php  echo mobileUrl('commission/log', null, $full)?>" class="btn btn-default btn-sm" title="提现明细">提现明细</nav>
						<nav data-href="<?php  echo mobileUrl('commission/qrcode', null, $full)?>" class="btn btn-default btn-sm" title="推广二维码">推广二维码</nav>
						<nav data-href="<?php  echo mobileUrl('commission/myshop/set',null, $full)?>" class="btn btn-default btn-sm" title="小店设置">小店设置</nav>
						<nav data-href="<?php  echo mobileUrl('commission/rank',null, $full)?>" class="btn btn-default btn-sm" title="佣金排名">佣金排名</nav>
						<nav data-href="<?php  echo mobileUrl('commission/myshop/select',null, $full)?>" class="btn btn-default btn-sm" title="自选资源">自选资源</nav>
					<?php  } ?>
					<?php  if(p('article')) { ?>
						<div class="page-header"><h4><i class="fa fa-folder-open-o"></i> <?php  echo m('plugin')->getName('article')?></h4></div>
						<nav data-href="<?php  echo mobileUrl('article/list', null, $full)?>" class="btn btn-default btn-sm" title="文章列表页面">文章列表页面</nav>
					<?php  } ?>
					<div class="page-header"><h4><i class="fa fa-folder-open-o"></i> 超级券</h4></div>
					<nav data-href="<?php  echo mobileUrl('sale/coupon', null, $full)?>" class="btn btn-default btn-sm" title="领取优惠券">领取优惠券</nav>
					<nav data-href="<?php  echo mobileUrl('sale/coupon/my', null, $full)?>" class="btn btn-default btn-sm" title="我的优惠券">我的优惠券</nav>
					<?php  if(p('groups')) { ?>
						<div class="page-header"><h4><i class="fa fa-folder-open-o"></i> <?php  echo m('plugin')->getName('groups')?></h4></div>
						<nav data-href="<?php  echo mobileUrl('groups', null, $full)?>" class="btn btn-default btn-sm" title="首页">首页</nav>
						<nav data-href="<?php  echo mobileUrl('groups/category', null, $full)?>" class="btn btn-default btn-sm" title="活动列表">活动列表</nav>
						<nav data-href="<?php  echo mobileUrl('groups/orders', null, $full)?>" class="btn btn-default btn-sm" title="我的订单">我的订单</nav>
						<nav data-href="<?php  echo mobileUrl('groups/team', null, $full)?>" class="btn btn-default btn-sm" title="我的团">我的团</nav>
					<?php  } ?>
					<?php  if(p('mr')) { ?>
						<div class="page-header"><h4><i class="fa fa-folder-open-o"></i> <?php  echo m('plugin')->getName('mr')?></h4></div>
						<nav data-href="<?php  echo mobileUrl('mr', null, $full)?>" class="btn btn-default btn-sm" title="充值页面">充值页面</nav>
						<nav data-href="<?php  echo mobileUrl('mr/order', null, $full)?>" class="btn btn-default btn-sm" title="充值页面">充值记录</nav>
					<?php  } ?>
					<?php  if(p('sns')) { ?>
						<div class="page-header"><h4><i class="fa fa-folder-open-o"></i> <?php  echo m('plugin')->getName('sns')?></h4></div>
						<nav data-href="<?php  echo mobileUrl('sns', null, $full)?>" class="btn btn-default btn-sm" title="社区首页">社区首页</nav>
						<nav data-href="<?php  echo mobileUrl('sns/board/lists', null, $full)?>" class="btn btn-default btn-sm" title="全部板块">全部板块</nav>
						<nav data-href="<?php  echo mobileUrl('sns/user', null, $full)?>" class="btn btn-default btn-sm" title="我的社区">我的社区</nav>
					<?php  } ?>
					<?php  if(p('sign')) { ?>
						<div class="page-header"><h4><i class="fa fa-folder-open-o"></i> <?php  echo m('plugin')->getName('sign')?></h4></div>
						<nav data-href="<?php  echo mobileUrl('sign', null, $full)?>" class="btn btn-default btn-sm" title="首页">首页</nav>
						<nav data-href="<?php  echo mobileUrl('sign/rank', null, $full)?>" class="btn btn-default btn-sm" title="全部分类">排行</nav>
					<?php  } ?>
					<?php  if(p('qa')) { ?>
						<div class="page-header"><h4><i class="fa fa-folder-open-o"></i> <?php  echo m('plugin')->getName('qa')?></h4></div>
						<nav data-href="<?php  echo mobileUrl('qa', null, $full)?>" class="btn btn-default btn-sm" title="商城首页">帮助首页</nav>
						<nav data-href="<?php  echo mobileUrl('qa/category', null, $full)?>" class="btn btn-default btn-sm" title="全部分类">全部分类</nav>
						<nav data-href="<?php  echo mobileUrl('qa/question', null, $full)?>" class="btn btn-default btn-sm" title="全部问题">全部问题</nav>
					<?php  } ?>
					<?php  if(p('bargain')) { ?>
						<div class="page-header"><h4><i class="fa fa-folder-open-o"></i> <?php  echo m('plugin')->getName('bargain')?></h4></div>
						<nav data-href="<?php  echo mobileUrl('bargain', null, $full)?>" class="btn btn-default btn-sm" title="砍价首页">砍价首页</nav>
					<?php  } ?>
					<?php  if(p('task')) { ?>
						<div class="page-header"><h4><i class="fa fa-folder-open-o"></i> <?php  echo m('plugin')->getName('task')?></h4></div>
						<nav data-href="<?php  echo mobileUrl('task', null, $full)?>" class="btn btn-default btn-sm" title="任务中心">任务中心</nav>
					<?php  } ?>
					<?php  if(p('creditshop')) { ?>
						<div class="page-header"><h4><i class="fa fa-folder-open-o"></i> <?php  echo m('plugin')->getName('creditshop')?></h4></div>
						<nav data-href="<?php  echo mobileUrl('creditshop', null, $full)?>" class="btn btn-default btn-sm" title="商城首页">商城首页</nav>
						<nav data-href="<?php  echo mobileUrl('creditshop/lists', null, $full)?>" class="btn btn-default btn-sm" title="全部资源">全部资源</nav>
						<nav data-href="<?php  echo mobileUrl('creditshop/log', null, $full)?>" class="btn btn-default btn-sm" title="我的">我的</nav>
						<nav data-href="<?php  echo mobileUrl('creditshop/creditlog', null, $full)?>" class="btn btn-default btn-sm" title="参与记录">参与记录</nav>
					<?php  } ?>
					<?php  if(p('seckill')) { ?>
						<div class="page-header"><h4><i class="fa fa-folder-open-o"></i> <?php  echo m('plugin')->getName('seckill')?></h4></div>
						<nav data-href="<?php  echo mobileUrl('seckill', null, $full)?>" class="btn btn-default btn-sm" title="秒杀首页">秒杀首页</nav>
					<?php  } ?>
				</div>
				
				<div class="tab-pane" id="sut_good">
					<div class="input-group">
						<input type="text" placeholder="请输入资源名称进行搜索" id="select-good-kw" value="" class="form-control">
							<span class="input-group-addon btn btn-default select-btn" data-type="good">搜索</span>
					</div>
					<div id="select-good-list"></div>
				</div>
				
				<!-- 搜索景区 -->
				<div class="tab-pane" id="sut_scenic">
					<div class="input-group">
						<input type="text" placeholder="请输入景区关键字进行搜索" id="select-scenic-kw" value="" class="form-control">
							<span class="input-group-addon btn btn-default select-btn" data-type="scenic">搜索</span>
					</div>
					<div id="select-scenic-list"></div>
				</div>
				<div class="tab-pane" id="sut_cate">
					<?php  if(is_array($categorys)) { foreach($categorys as $category) { ?>
						 <?php  if(empty($category['parentid'])) { ?>
							<div class="line">
								<div class="icon icon-1"></div>
								<nav title="选择" class="btn btn-default btn-sm" data-href="<?php  echo mobileUrl('goods',array('cate'=>$category['id']), $full)?>">选择</nav>
								<div class="text"><?php  echo $category['name'];?></div>
							</div>
							 <?php  if(is_array($categorys)) { foreach($categorys as $category2) { ?>
							 	<?php  if($category2['parentid']==$category['id']) { ?>
								 	<div class="line">
										<div class="icon icon-2"></div>
										<nav title="选择" class="btn btn-default btn-sm" data-href="<?php  echo mobileUrl('goods',array('cate'=>$category2['id']), $full)?>">选择</nav>
										<div class="text"><?php  echo $category2['name'];?></div>
									</div>
									<?php  if(is_array($categorys)) { foreach($categorys as $category3) { ?>
										 <?php  if($category3['parentid']==$category2['id']) { ?>
											 <div class="line">
												<div class="icon icon-3"></div>
												<nav title="选择" class="btn btn-default btn-sm" data-href="<?php  echo mobileUrl('goods',array('cate'=>$category3['id']), $full)?>">选择</nav>
												<div class="text"><?php  echo $category3['name'];?></div>
											</div>
										 <?php  } ?>
									<?php  } } ?>
							 	<?php  } ?>
							 <?php  } } ?>
						<?php  } ?>
					<?php  } } ?>
				</div>
			
			<?php  if(p('article')) { ?>
				<div class="tab-pane" id="sut_article">
					<div class="input-group">
						<input type="text" placeholder="请输入文章名称进行搜索" id="select-article-kw" value="" class="form-control">
							<span class="input-group-addon btn btn-default select-btn" data-type="article">搜索</span>
					</div>
					<div id="select-article-list"></div>
				</div>
			<?php  } ?>
			
				<div class="tab-pane" id="sut_coupon">
					<div class="input-group">
						<input type="text" placeholder="请输入优惠券名称进行搜索" id="select-coupon-kw" value="" class="form-control">
							<span class="input-group-addon btn btn-default select-btn" data-type="coupon">搜索</span>
					</div> 
					<div id="select-coupon-list"></div>
				</div>

			<?php  if(p('diypage')) { ?>
				<div class="tab-pane" id="sut_diypage">
					<?php  if(!empty($diypage['list'])) { ?>
						<?php  if(is_array($diypage['list'])) { foreach($diypage['list'] as $item) { ?>
							<?php  if($item['type']!=5 && $item['type']!=7) { ?>
								<div class="line">
									<nav title="选择" class="btn btn-default btn-sm" data-href="<?php  echo mobileUrl('diypage',array('id'=>$item['id']))?>">选择</nav>
									<div class="text"><span class="label label-<?php  echo $allpagetype[$item['type']]['class'];?> label-sm"><?php  echo $allpagetype[$item['type']]['name'];?></span> <?php  echo $item['name'];?></div>
								</div>
							<?php  } ?>
						<?php  } } ?>
					<?php  } else { ?>
						<div class="tip">抱歉！未查询到DIY页面。</div>
					<?php  } ?>
				</div>
			<?php  } ?>

			<?php  if(p('groups')) { ?>
				<div class="tab-pane" id="sut_groups">
					<div class="input-group">
						<input type="text" placeholder="请输入资源名称进行搜索" id="select-groups-kw" value="" class="form-control">
						<span class="input-group-addon btn btn-default select-btn" data-type="groups">搜索</span>
					</div>
					<div id="select-groups-list"></div>
				</div>
			<?php  } ?>

			<?php  if(p('sns')) { ?>
				<div class="tab-pane" id="sut_sns">
					<div class="input-group">
						<input type="text" placeholder="请输入板块名称、帖子标题进行搜索" id="select-sns-kw" value="" class="form-control">
						<span class="input-group-addon btn btn-default select-btn" data-type="sns">搜索</span>
					</div>
					<div id="select-sns-list"></div>
				</div>
			<?php  } ?>

			<?php  if(p('groups')) { ?>
				<div class="tab-pane" id="sut_creditshop">
					<div class="input-group">
						<input type="text" placeholder="请输入资源名称进行搜索" id="select-creditshop-kw" value="" class="form-control">
						<span class="input-group-addon btn btn-default select-btn" data-type="creditshop">搜索</span>
					</div>
					<div id="select-creditshop-list"></div>
				</div>
			<?php  } ?>

			</div>
        </div>
        <div class="modal-footer">
            <button data-dismiss="modal" class="btn btn-default" type="button">关闭</button>
        </div>
        <script>
        	$(function(){
        		$("#selectUrl").find('#selectUrlTab a').click(function(e) {
						$('#tab').val($(this).attr('href'));
						e.preventDefault();
						$(this).tab('show');
				});
        		$(".select-btn").click(function(){
        			var type = $(this).data("type");
        			var kw = $.trim($("#select-"+type+"-kw").val());
        			if(!kw){
        				tip.msgbox.err("请输入搜索关键字！");
        				return;
        			}
        			$("#select-"+type+"-list").html('<div class="tip">正在进行搜索...</div>');
        			$.ajax("<?php  echo webUrl('util/selecturl/query', array('full'=>$full))?>", {
		      			type: "get",
		      			dataType: "html",
		      			cache: false,
		      			data: {kw:kw, type:type}
		      		}).done(function (html) {
		      			$("#select-"+type+"-list").html(html);
		      		});
        		});
        	});
        </script>
    </div>

 