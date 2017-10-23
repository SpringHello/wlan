 <?php defined('IN_IA') or exit('Access Denied');?><?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('_header', TEMPLATE_INCLUDEPATH)) : (include template('_header', TEMPLATE_INCLUDEPATH));?>
<style type='text/css'>
	.feed-activity-list {
		width: 100%;
		overflow: hidden;
		padding-top: 10px;
		padding-bottom: 10px;
		border-bottom: 1px solid #f2f2f2
	}
	
	.feed-element {
		float: left;
		cursor: pointer;
		width: 400px;
		padding: 10px;
		margin: 0;
		margin-right: 10px;
		margin-left: 10px;
		border: none;
	}
	
	.feed-element::after {
		display: none
	}
	
	.feed-element .title {
		font-size: 14px;
		font-weight: bold;
		height: 32px;
		margin-top: 10px; margin-left:15px;color:#666;
	}
	
	.feed-activity-list .feed-element {
		border: none;
		border-right: 1px solid #f2f2f2;
	}
	
	.feed-element img.img-circle,
	.dropdown-messages-box img.img-circle {
		width: 60px;
		height: 60px;
		border-radius: 10px;
	}
	
	.media-body {
		margin-top: 20px;
	}
</style>
<div class="page-heading">
	<h2>我的应用</h2> 
</div>


<div class="panel panel-default" style="border:none;">
	 
		 
		<div class="panel-heading" style="background:none;border:none;">
			业务类		</div>
		<div class="feed-activity-list">
																<div class="feed-element"><a href="<?php  echo webUrl('commission')?>">
						<span class="pull-left">
							<img src="../addons/ewei_shopv2/static/images/commission.jpg" class="img-circle" alt="image">
						</span>
						<div class="media-body ">
							<span class="title">分销设置</span>
							<br>
							<small class="text-muted"></small>
						</div></a>
					</div>
																								<div class="feed-element"><a href="<?php  echo webUrl('creditshop')?>">
						<span class="pull-left">
							<img src="../addons/ewei_shopv2/static/images/creditshop.jpg" class="img-circle" alt="image">
						</span>
						<div class="media-body ">
							<span class="title">积分商城</span>
							<br>
							<small class="text-muted"></small>
						</div></a>
					</div>
																								<div class="feed-element"><a href="<?php  echo webUrl('groups')?>">
						<span class="pull-left">
							<img src="../addons/ewei_shopv2/static/images/groups.jpg" class="img-circle" alt="image">
						</span>
						<div class="media-body ">
							<span class="title">拼团设置</span>
							<br>
							<small class="text-muted"></small>
						</div></a>
					</div>
																								<div class="feed-element"><a href="<?php  echo webUrl('merch')?>">
						<span class="pull-left">
							<img src="../addons/ewei_shopv2/static/images/merch.jpg" class="img-circle" alt="image">
						</span>
						<div class="media-body ">
							<span class="title">多商户</span>
							<br>
							<small class="text-muted"></small>
						</div></a>
					</div>
																								<div class="feed-element"><a href="<?php  echo webUrl('globonus')?>">
						<span class="pull-left">
							<img src="../addons/ewei_shopv2/static/images/globonus.jpg" class="img-circle" alt="image">
						</span>
						<div class="media-body ">
							<span class="title">全民股东</span>
							<br>
							<small class="text-muted"></small>
						</div></a>
					</div>
					
					<div class="feed-element"><a href="<?php  echo webUrl('abonus')?>">
						<span class="pull-left">
							<img src="../addons/ewei_shopv2/static/images/abonus.jpg" class="img-circle" alt="image">
						</span>
						<div class="media-body ">
							<span class="title">区域代理</span>
							<br>
							<small class="text-muted"></small>
						</div></a>
					</div>
					
					<div class="feed-element"><a href="<?php  echo webUrl('cashier')?>">
						<span class="pull-left">
							<img src="../addons/ewei_shopv2/static/images/cashier.jpg" class="img-circle" alt="image">
						</span>
						<div class="media-body ">
							<span class="title">收银台</span>
							<br>
							<small class="text-muted"></small>
						</div></a>
					</div>
					
					
					<div class="feed-element"><a href="<?php  echo webUrl('exchange')?>">
						<span class="pull-left">
							<img src="../addons/ewei_shopv2/static/images/exchange.jpg" class="img-circle" alt="image">
						</span>
						<div class="media-body ">
							<span class="title">兑换中心</span>
							<br>
							<small class="text-muted"></small>
						</div></a>
					</div>
					
					
					
					
					
					
					
					
													</div>
	 
		 
		<div class="panel-heading" style="background:none;border:none;">
			营销类		</div>
		<div class="feed-activity-list">
																<div class="feed-element"><a href="<?php  echo webUrl('poster')?>">
						<span class="pull-left">
							<img src="../addons/ewei_shopv2/static/images/poster.jpg" class="img-circle" alt="image">
						</span>
						<div class="media-body ">
							<span class="title">超级海报</span>
							<br>
							<small class="text-muted"></small>
						</div></a>
					</div>
																								<div class="feed-element"><a href="<?php  echo webUrl('postera')?>">
						<span class="pull-left">
							<img src="../addons/ewei_shopv2/static/images/postera.jpg" class="img-circle" alt="image">
						</span>
						<div class="media-body ">
							<span class="title">活动海报</span>
							<br>
							<small class="text-muted"></small>
						</div></a>
					</div>
					
					
					<div class="feed-element"><a href="<?php  echo webUrl('sns')?>">
						<span class="pull-left">
							<img src="../addons/ewei_shopv2/static/images/sns.jpg" class="img-circle" alt="image">
						</span>
						<div class="media-body ">
							<span class="title">活动社区</span>
							<br>
							<small class="text-muted"></small>
						</div></a>
					</div>
					
					
					<div class="feed-element"><a href="<?php  echo webUrl('task')?>">
						<span class="pull-left">
							<img src="../addons/ewei_shopv2/static/images/task.jpg" class="img-circle" alt="image">
						</span>
						<div class="media-body ">
							<span class="title">任务中心</span>
							<br>
							<small class="text-muted"></small>
						</div></a>
					</div>
					
					
					<div class="feed-element"><a href="<?php  echo webUrl('seckill')?>">
						<span class="pull-left">
							<img src="../addons/ewei_shopv2/static/images/seckill.jpg" class="img-circle" alt="image">
						</span>
						<div class="media-body ">
							<span class="title">整点秒杀</span>
							<br>
							<small class="text-muted"></small>
						</div></a>
					</div>
					
					
					
					
													</div>
	 
		 
		<div class="panel-heading" style="background:none;border:none;">
			工具类		</div>
		<div class="feed-activity-list">
																<div class="feed-element"><a href="<?php  echo webUrl('taobao')?>">
						<span class="pull-left">
							<img src="../addons/ewei_shopv2/static/images/taobao.jpg" class="img-circle" alt="image">
						</span>
						<div class="media-body ">
							<span class="title">资源助手</span>
							<br>
							<small class="text-muted"></small>
						</div></a>
					</div>
					
					
					<div class="feed-element"><a href="<?php  echo webUrl('sign')?>">
						<span class="pull-left">
							<img src="../addons/ewei_shopv2/static/images/sign.jpg" class="img-circle" alt="image">
						</span>
						<div class="media-body ">
							<span class="title">积分签到</span>
							<br>
							<small class="text-muted"></small>
						</div></a>
					</div>
					
					
					<div class="feed-element"><a href="<?php  echo webUrl('bargain')?>">
						<span class="pull-left">
							<img src="../addons/ewei_shopv2/static/images/bargain.jpg" class="img-circle" alt="image">
						</span>
						<div class="media-body ">
							<span class="title">砍价活动</span>
							<br>
							<small class="text-muted"></small>
						</div></a>
					</div>
					
					
					
					<div class="feed-element"><a href="<?php  echo webUrl('exhelper')?>">
						<span class="pull-left">
							<img src="../addons/ewei_shopv2/static/images/exhelper.jpg" class="img-circle" alt="image">
						</span>
						<div class="media-body ">
							<span class="title">快递打印</span>
							<br>
							<small class="text-muted"></small>
						</div></a>
					</div>
					
					
					<div class="feed-element"><a href="<?php  echo webUrl('sysset/printer/printer_list')?>">
						<span class="pull-left">
							<img src="../addons/ewei_shopv2/static/images/pr.jpg" class="img-circle" alt="image">
						</span>
						<div class="media-body ">
							<span class="title">小票打印</span>
							<br>
							<small class="text-muted"></small>
						</div></a>
					</div>
					
					
					
					
				
					
					
				<!--	<div class="feed-element"><a href="<?php  echo webUrl('teegonpay')?>">
						<span class="pull-left">
							<img src="../addons/ewei_shopv2/static/images/tg.jpg" class="img-circle" alt="image">
						</span>
						<div class="media-body ">
							<span class="title">天工支付</span>
							<br>
							<small class="text-muted"></small>
						</div></a>
					</div>-->
					
					
					<div class="feed-element"><a href="<?php  echo webUrl('messages')?>">
						<span class="pull-left">
							<img src="../addons/ewei_shopv2/static/images/messages.jpg" class="img-circle" alt="image">
						</span>
						<div class="media-body ">
							<span class="title">消息群发</span>
							<br>
							<small class="text-muted"></small>
						</div></a>
					</div>
					
				
					
					
					
					
					
				
				
													</div>
			
			
		<div class="panel-heading" style="background:none;border:none;">
			辅助类		</div>
		<div class="feed-activity-list">
																<div class="feed-element"><a href="<?php  echo webUrl('article')?>">
						<span class="pull-left">
							<img src="../addons/ewei_shopv2/static/images/article.jpg" class="img-circle" alt="image">
						</span>
						<div class="media-body ">
							<span class="title">文章营销</span>
							<br>
							<small class="text-muted"></small>
						</div></a>
					</div>
																								<div class="feed-element"><a href="<?php  echo webUrl('diyform')?>">
						<span class="pull-left">
							<img src="../addons/ewei_shopv2/static/images/diyform.jpg" class="img-circle" alt="image">
						</span>
						<div class="media-body ">
							<span class="title">自定义表单</span>
							<br>
							<small class="text-muted"></small>
						</div></a>
					</div>
																								
																								<div class="feed-element"><a href="<?php  echo webUrl('diypage')?>">
						<span class="pull-left">
							<img src="../addons/ewei_shopv2/static/images/designer.jpg" class="img-circle" alt="image">
						</span>
						<div class="media-body ">
							<span class="title">PortalONE</span>
							<br>
							<small class="text-muted"></small>
						</div></a>
					</div>
																								<div class="feed-element"><a href="<?php  echo webUrl('qa')?>">
						<span class="pull-left">
							<img src="../addons/ewei_shopv2/static/images/qa.jpg" class="img-circle" alt="image">
						</span>
						<div class="media-body ">
							<span class="title">帮助中心</span>
							<br>
							<small class="text-muted"></small>
						</div></a>
					</div>
													</div>
	</div>






<script>
	$(document).ready(function () {
		$('.feed-activity-list,.plugin_tabs').each(function(){
			if($(this).children().length<=0){
				$(this).prev().remove();
				$(this).remove();
			}
		});
	})
</script>
<?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('_footer', TEMPLATE_INCLUDEPATH)) : (include template('_footer', TEMPLATE_INCLUDEPATH));?>