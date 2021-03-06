<?php defined('IN_IA') or exit('Access Denied');?><?php (!empty($this) && $this instanceof WeModuleSite || 0) ? (include $this->template('common/header-gw', TEMPLATE_INCLUDEPATH)) : (include template('common/header-gw', TEMPLATE_INCLUDEPATH));?>
	<style>
		.account-rank img{width:20px; height:20px;}
		.alert{color:#666;padding:10px}
		.text-strong{font-size:14px;font-weight:bold;}
		.popover{max-width: 450px}
		.popover-content{padding-top: 0;line-height: 30px}
		.popover-content h5{padding-bottom: 5px}
	</style>
	<ol class="breadcrumb">
		<li><a href="./?refresh"><i class="fa fa-home"></i></a></li>
		<li><a href="<?php  echo url('system/welcome');?>">系统</a></li>
		<li class="active">公众号列表</li>
	</ol>
	<div class="clearfix" style="margin-bottom:5em;">
		<?php  if(!$_W['isfounder']) { ?>
			<div class="alert alert-warning">
				温馨提示：
				<i class="fa fa-info-circle"></i>
				Hi，<span class="text-strong"><?php  echo $_W['username'];?></span>，您所在的会员组 <span class="text-strong"><?php  echo $stat['group_name'];?></span>，
				账号有效期限：<span class="text-strong"><?php  echo date('Y-m-d', $_W['user']['starttime'])?> ~~ <?php  if(empty($_W['user']['endtime'])) { ?>无限制<?php  } else { ?><?php  echo date('Y-m-d', $_W['user']['endtime'])?><?php  } ?></span>，
				可创建 <span class="text-strong"><?php  echo $stat['maxaccount'];?> </span>个公众号，已创建<span class="text-strong"> <?php  echo $stat['uniacid_num'];?> </span>个，还可创建 <span class="text-strong"><?php  echo $stat['uniacid_limit'];?> </span>个公众号。
			</div>
		<?php  } ?>
		<div class="input-group">
			<a class="btn btn-primary" href="<?php  echo url('account/post-step');?>"><i class="fa fa-plus"></i> 添加公众号</a>
		<!--	<?php  if($_W['setting']['platform']['authstate']) { ?><a  class="btn btn-success" style="margin-left:5px;" href="<?php  echo $authurl;?>"><i class="fa fa-weixin"></i> 授权登录添加公众号</a><?php  } ?>-->
		</div>
		<br>
		<div class="panel panel-info">
			<div class="panel-heading">筛选</div>
			<div class="panel-body">
				<form action="./index.php" method="get" role="form" class="form-horizontal">
					<input type="hidden" name="c" value="account">
					<input type="hidden" name="a" value="display">
					<div class="form-group" style="margin-left: 40px">
						<label class="col-xs-12 col-sm-2 col-md-2 col-lg-1 control-label">接入状态</label>
						<div class="col-sm-8 col-lg-10 col-xs-12">
							<div class="btn-group">
								<a href="<?php  echo url('account/display', array('type' => '', 's_uniacid' => $_GPC['s_uniacid'], 'keyword' => $_GPC['keyword'], 'expiretime' => $_GPC['expiretime']));?>"  class="btn <?php  if($_GPC['type'] == '') { ?>btn-primary<?php  } else { ?>btn-default<?php  } ?>" style="width: 80px">全部</a>
								<a href="<?php  echo url('account/display', array('type' => '1', 's_uniacid' => $_GPC['s_uniacid'], 'keyword' => $_GPC['keyword'], 'expiretime' => $_GPC['expiretime']));?>"  class="btn <?php  if($_GPC['type'] == '1') { ?>btn-primary<?php  } else { ?>btn-default<?php  } ?>">普通接入</a>
								<a href="<?php  echo url('account/display', array('type' => '3', 's_uniacid' => $_GPC['s_uniacid'], 'keyword' => $_GPC['keyword'], 'expiretime' => $_GPC['expiretime']));?>"  class="btn <?php  if($_GPC['type']== '3') { ?>btn-primary<?php  } else { ?>btn-default<?php  } ?>">登录授权</a>
							</div>
						</div>
					</div>
					<?php  if(!empty($_W['isfounder'])) { ?>
					<div class="form-group" style="margin-left: 40px">
						<label class="col-xs-12 col-sm-2 col-md-2 col-lg-1 control-label">过期时间</label>
						<div class="col-sm-8 col-lg-10 col-xs-12">
							<div class="btn-group">
								<a href="<?php  echo url('account/display', array('type' => $_GPC['type'], 's_uniacid' => $_GPC['s_uniacid'], 'keyword' => $_GPC['keyword']));?>"  class="btn <?php  if($_GPC['expiretime'] == '') { ?>btn-primary<?php  } else { ?>btn-default<?php  } ?>" style="width: 80px">不限</a>
								<a href="<?php  echo url('account/display', array('type' => $_GPC['type'], 's_uniacid' => $_GPC['s_uniacid'], 'keyword' => $_GPC['keyword'], 'expiretime' => '3'));?>"  class="btn <?php  if($_GPC['expiretime'] == '3') { ?>btn-primary<?php  } else { ?>btn-default<?php  } ?>" style="width: 80px">三天内</a>
								<a href="<?php  echo url('account/display', array('type' => $_GPC['type'], 's_uniacid' => $_GPC['s_uniacid'], 'keyword' => $_GPC['keyword'], 'expiretime' => '7'));?>"  class="btn <?php  if($_GPC['expiretime'] == '7') { ?>btn-primary<?php  } else { ?>btn-default<?php  } ?>">一周内</a>
								<a href="<?php  echo url('account/display', array('type' => $_GPC['type'], 's_uniacid' => $_GPC['s_uniacid'], 'keyword' => $_GPC['keyword'], 'expiretime' => '30'));?>"  class="btn <?php  if($_GPC['expiretime']== '30') { ?>btn-primary<?php  } else { ?>btn-default<?php  } ?>">一月内</a>
							</div>
						</div>
					</div>
					<?php  } ?>
					<div class="form-group" style="margin-top:20px;margin-left: 40px">
						<label class="col-xs-12 col-sm-2 col-md-2 col-lg-1 control-label">搜索</label>
						<div class="col-sm-8 col-lg-10 col-xs-12">
							<div class="input-group">
								<input type="hidden" name="type" value="<?php  echo $_GPC['type'];?>">
								<input type="hidden" name="expiretime" value="<?php  echo $_GPC['expiretime'];?>">
								<input type="text" class="form-control <?php  if(empty($_GPC['keyword']) && !empty($_GPC['s_uniacid'])) { ?>hide<?php  } ?>" placeholder="请输入微信公众号名称" name="keyword" id="s_keyword" value="<?php  echo $_GPC['keyword'];?>">
								<input type="text" class="form-control <?php  if(empty($_GPC['s_uniacid'])) { ?>hide<?php  } ?>" placeholder="请输入微信公众号ID" name="s_uniacid" id="s_uniacid" value="<?php  echo $_GPC['s_uniacid'];?>">
								<div class="input-group-btn">
									<button class="btn btn-default"><i class="fa fa-search"></i> 搜索</button>
									<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></button>
									<ul class="dropdown-menu dropdown-menu-right" role="menu">
										<li><a href="javascript:;" onclick="$('#s_uniacid').addClass('hide').val('');$('#s_keyword').removeClass('hide');">根据公众号名称搜索</a></li>
										<li><a href="javascript:;" onclick="$('#s_uniacid').removeClass('hide');$('#s_keyword').addClass('hide').val('');">根据公众号ID搜索</a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
		<div class="clearfix"><div class="pull-right"><?php  echo $pager;?></div></div>
		<ul class="list-unstyled account">
			<?php  if(is_array($list)) { foreach($list as $uni) { ?>
			<?php  $subaccount = count($uni['details']);?>
			<li>
				<div class="panel panel-default"   style="border-top:1px dashed #39B2A9;">
					<div class="panel-heading">
						<div class="row clearfix">
							<div class="col-xs-6" style="cursor:pointer; color:#999;">
								排序 : <span class="account-rank" data-account-id="<?php  echo $uni['uniacid'];?>" data-rank="<?php  echo $uni['rank'];?>"></span>
								<span class="setmeal-hover" style="margin-left:20px;" data-uid="<?php  echo $uni['setmeal']['uid'];?>"  data-uniacid="<?php  echo $uni['name'];?>" data-groupid="<?php  echo $uni['setmeal']['groupid'];?>">
									套餐 : <?php  echo $uni['setmeal']['groupname'];?>
								</span>
							</div>
							<div  class="pull-right" style="margin-right: 15px;">
								<a href="<?php  echo url('account/switch', array('uniacid' => $uni['uniacid']))?>" target="_blank" class="manage"><i class="fa fa-cog"></i>管理公众号</a>
							</div>
						</div>
					</div>
					<ul class="panel-body list-group">
						<?php  if(is_array($uni['details'])) { foreach($uni['details'] as $account) { ?>
						<li class="row list-group-item" style="line-height:60px;">
							<div class="col-xs-12 col-sm-12 col-md-2 col-lg-1">
								<img src="<?php  echo tomedia('headimg_'.$account['acid'].'.jpg');?>?time=<?php  echo time()?>" class="" width="50" height="50"  onerror="this.src='resource/images/gw-wx.gif'" />
							</div>
							<div class="col-xs-12 col-sm-12 col-md-4 col-lg-5 item" style="font-size:16px;">
								<?php  echo $account['name'];?>
							</div>
							<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 item text-right">
								<span style="width:80px; text-align:center; display:inline-block;"><?php  if($account['isconnect'] == 1) { ?><i class="fa fa-2x fa-check-circle text-success" style="position:absolute; top:15px;" data-toggle="tooltip" data-placement="top" title='接入状态 : <?php  if($account['type'] == 3) { ?>登录授权<?php  } else { ?>成功接入<?php  } ?>'></i><?php  echo $types[$account['type']]['title'];?><?php  } else { ?><i class="fa fa-2x fa-times-circle text-warning" style="position:absolute; top:15px;" data-toggle="tooltip" data-placement="top" title='<?php  if($account['type'] == 3) { ?>登录授权失败<?php  } else { ?>公众号接入状态显示“未接入”解决方案：进入微信公众平台，依次选择: 开发者中心 -> 修改配置，然后将对应公众号在
								平台的url和token复制到微信公众平台对应的选项，公众平台会自动进行检测<?php  } ?>'></i><?php  echo $types[$account['type']]['title'];?><?php  } ?></span>
								
								<?php  if($subaccount > 1 && $uni['role'] <> 'operator') { ?>
									<div style="display:inline-block; border-left:1px #DDD solid; padding-left:20px; margin-left:20px;">
									<?php  if($account['acid'] != $uni['default_acid']) { ?>
										<a data-toggle="tooltip" data-placement="top" title='设置为默认后，主公号与此子号绑定，后台一切接口权限将从此子号获取' href="<?php  echo url('account/default',  array('acid' => $account['acid'], 'uniacid' => $account['uniacid']))?>" class="btn btn-sm btn-primary" style="color:#fff;"><i class="fa fa-pencil"></i> 设为默认</a>
									<?php  } ?>
									<a href="<?php  echo url('account/summary', array('acid' => $account['acid'], 'uniacid' => $account['uniacid']))?>" class="btn btn-sm btn-default"><i class="fa fa-bar-chart-o"></i>详情</a>
									<?php  if($account['acid'] == $uni['default_acid']) { ?>
										<a href="<?php  echo url('account/post', array('uniacid' => $account['uniacid']))?>" class="btn btn-sm btn-default"><i class="fa fa-pencil"></i>编辑</a>
									<?php  } else { ?>
										<a href="<?php  echo url('account/post', array('acid' => $account['acid'], 'uniacid' => $account['uniacid']))?>" class="btn btn-sm btn-default"><i class="fa fa-pencil"></i>编辑</a>
									<?php  } ?>
									<?php  if($account['acid'] != $uni['default_acid']) { ?>
									<a href="<?php  echo url('account/display/delete', array('acid' => $account['acid']))?>" onclick="return confirm('确认放入回收站吗？');return false;" class="btn btn-sm btn-default"><i class="fa fa-times"></i>删除</a>
									<?php  } ?>
									</div>
								<?php  } ?>
							</div>
						</li>
						<?php  } } ?>
					</ul>
					<div class="list-group-bottom">
						<div class="col-xs-6 list-group-bottom-left">
							<span>服务有效期 : <?php  echo $uni['setmeal']['timelimit'];?></span>
						</div>
						<div class="col-xs-6 text-right list-group-bottom-right">
							<?php  if($uni['role'] == 'founder') { ?>
							<a href="<?php  echo url('account/post-step', array('step' => '3', 'uniacid' => $uni['uniacid'], 'from' => 'list'))?>"><i class="fa fa-key"></i>设置权限</a>
							<?php  } ?>
							<?php  if($uni['role'] == 'founder' || $uni['role'] == 'manager') { ?>
							<a href="<?php  echo url('account/permission', array('uniacid' => $uni['uniacid']))?>"><i class="fa fa-user"></i>操作员管理</a>
							<?php  if($subaccount == 1) { ?><a href="<?php  echo url('account/post', array('uniacid' => $uni['uniacid']))?>"><i class="fa fa-edit"></i>编辑</a><?php  } ?>
							<a href="<?php  echo url('account/display/delete', array('uniacid' => $uni['uniacid'], 'acid' => $uni['default_acid']))?>" onclick="return confirm('删除主公众号其所属的子公众号也会一起被放入回收站，确认吗？（可以在回收站中恢复公众号）');return false;"><i class="fa fa-times"></i>删除</a>
							<?php  } ?>
						</div>
					</div>
				</div>
			</li>
			<?php  } } ?>
		</ul>
	<div class="pull-right"><?php  echo $pager;?></div>
	</div>
<script type="text/javascript">
	require(['raty'], function(raty) {
		$('.account-rank').each(function(){
			var account = $(this);
			var id = account.data("account-id");
			var rank = account.data("rank");
			account.raty({
				cancel:!0,
				cancelOn:"../images/cancel-custom-on.png",
				cancelOff:"../images/cancel-custom-off.png",
				cancelPlace:"left",
				cancelHint:"重置",
				hints:["1","2","3","4","5"],
				number:6,
				path:"./resource/images/",
				starOff:"star-off-big.png",
				starOn:"star-on-big.png",
				starType:"img",
				size:16,
				score:rank,
				targetKeep:!0,
				click:function(account){$.post("./index.php?c=account&a=display&do=rank",{id:id,rank:account}, function(data){location.reload();},"json")}
			})
		});
	});
	require(['bootstrap'],function($){
		$('[data-toggle="tooltip"]').hover(function(){
			$(this).tooltip('show');
		},function(){
			$(this).tooltip('hide');
		});
		$('.setmeal-hover').hover(function(){
			var uid = $(this).data('uid');
			var groupid = $(this).data('groupid');
			var title = $(this).data('uniacid');
			var obj = $(this);
			if(groupid == -1) {
				obj.popover({
					'html':true,
					'placement':'right',
					'trigger':'manual',
					//'title':title,
					'content':'<h5>可用的服务套餐</h5><div style="margin-top: -15px"><span class="label label-success">所有服务</span></div>'
				});
				obj.popover('show');
			}else {
				$.post("<?php  echo url('account/display/package')?>", {uid:uid, groupid:groupid}, function(data){
					var data = $.parseJSON(data);
					var content = '';
					if(data.message.message.groupname.length > 0) {
						content += '<h5>可用的服务套餐</h5>';
						content += '<div style="margin-top: -15px">';
						$.each(data.message.message.groupname, function (i,val) {
								content += '<span class="label label-success">'+val.name+'</span> ';
						});
						content += '</div>';
					}
					if(data.message.message.modules && data.message.message.modules.length > 0) {
						content += '<h5>附加的模块权限</h5>';
						content += '<div style="margin-top: -15px">';
						$.each(data.message.message.modules, function (i,val) {
							content += '<span class="label label-success">'+val.title+'</span> ';
						});
						content += '</div>';
					}
					if(data.message.message.templates && data.message.message.templates.length > 0) {
						content += '<h5>附加的模板权限</h5>';
						content += '<div style="margin-top: -15px">';
						$.each(data.message.message.templates, function (i,val) {
							content += '<span class="label label-success">'+val.title+'</span> ';
						});
						content += '</div>';
					}
					obj.popover({
						'html':true,
						'placement':'right',
						'trigger':'manual',
						//'title':title,
						'content':content
					});
					obj.popover('show');
				});
			}
		}, function(){
			$(this).popover('hide');
		});
	});
</script><!--微橙微信商城系统-->
<?php (!empty($this) && $this instanceof WeModuleSite || 0) ? (include $this->template('common/footer-gw', TEMPLATE_INCLUDEPATH)) : (include template('common/footer-gw', TEMPLATE_INCLUDEPATH));?>