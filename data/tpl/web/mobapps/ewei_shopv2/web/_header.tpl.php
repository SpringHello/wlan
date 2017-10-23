<?php defined('IN_IA') or exit('Access Denied');?><?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('_header_base', TEMPLATE_INCLUDEPATH)) : (include template('_header_base', TEMPLATE_INCLUDEPATH));?>
<style>
    .deg180{
        transform:rotate(180deg);
        -ms-transform:rotate(180deg); 	/* IE 9 */
        -moz-transform:rotate(180deg); 	/* Firefox */
        -webkit-transform:rotate(180deg); /* Safari 和 Chrome */
        -o-transform:rotate(180deg); 	/* Opera */
    }
</style>
<div class="navbar-collapse collapse" id="navbar">
    <?php  $routes = explode(".", $GLOBALS['_W']['routes']);?>
    <?php  if($routes['0'] != 'system' ) { ?>
    <ul class="nav navbar-nav gray-bg">

        <li <?php  if($_W['controller']=='shop') { ?> class="active"<?php  } ?>><a href="<?php  echo webUrl()?>">首页</a></li>
        <?php if(cv('goods')) { ?><li <?php  if($_W['controller']=='goods') { ?> class="active"<?php  } ?>><a href="<?php  echo webUrl('goods')?>"> 资源</a></li><?php  } ?>
        <?php if(cv('member')) { ?><li <?php  if($_W['controller']=='member') { ?> class="active"<?php  } ?>><a href="<?php  echo webUrl('scenic');?>"> 景区</a></li><?php  } ?>
        
        <?php if(cv('member')) { ?><li <?php  if($_W['controller']=='member') { ?> class="active"<?php  } ?>><a href="<?php  echo webUrl('member')?>"> 会员</a></li><?php  } ?>
        
        <?php if(cv('order')) { ?><li <?php  if($_W['controller']=='order') { ?> class="active"<?php  } ?>><a href="<?php  echo webUrl('order')?>"> 订单</a></li><?php  } ?>
        <?php  if(com('sale') || com('coupon')) { ?>
        <?php if(cv('sale')) { ?><li <?php  if($_W['controller']=='sale') { ?> class="active"<?php  } ?>><a href="<?php  echo webUrl('sale')?>">营销</a></li><?php  } ?>
        <?php  } ?>
        <?php if(cv('finance')) { ?><li <?php  if($_W['controller']=='finance') { ?> class="active"<?php  } ?>><a href="<?php  echo webUrl('finance/log/recharge')?>"> 财务</a></li><?php  } ?>

        <?php if(cv('statistics.sale')) { ?><li <?php  if($_W['controller']=='statistics') { ?> class="active"<?php  } ?>><a href="<?php  echo webUrl('statistics')?>">数据</a></li><?php  } ?>
        <?php if(cv($this->isOpenPlugin())) { ?><li <?php  if($_W['controller']=='plugins' || !empty($_W['plugin'])) { ?> class="active"<?php  } ?>><a href="<?php  echo webUrl('plugins')?>">应用</a></li><?php  } ?>

        <?php  if(p('diypage') && !empty($_W['shopset']['diypage']['setmenu'])) { ?><li><a href="<?php  echo webUrl('diypage')?>"> 页面</a></li><?php  } ?>


      	<?php if(cv('sysset')) { ?><li <?php  if($_W['controller']=='sysset') { ?> class="active"<?php  } ?>><a href="<?php  echo webUrl('sysset')?>"> 设置</a></li><?php  } ?>

    </ul>
	
	<?php  if($_W['shopset']['shop']['yingyong_flag']==0) { ?>
    
       
   
   
	<ul class="nav navbar-nav gray-bg"   style="position:fixed; left :20px; top:60px;border:1px solid #1AB394;width:131px;height:auto; text-align:center;">

       <div   style="background:#1AB394;width:131px;height:30px;"><a  style="color:#fff;width:131px;padding-top:10px;line-height:30px;">应用快捷进入</a></div></br>


	  <li  <?php  if($_W['controller']=='shop00') { ?> class="active"<?php  } ?>   style="margin-top:-15px;"     ><a   href="<?php  echo webUrl(commission)?>"><i class="fa fa-users"></i>分销设置</a></li></br>
        <?php if(cv('goods')) { ?><li <?php  if($_W['controller']=='goods00') { ?> class="active"<?php  } ?>><a href="<?php  echo webUrl('diypage')?>"><i class="fa fa-cog"></i>业务订制</a></li></br><?php  } ?>
        <?php if(cv('member')) { ?><li <?php  if($_W['controller']=='member00') { ?> class="active"<?php  } ?>><a href="<?php  echo webUrl('groups')?>"><i class="fa fa-credit-card"></i>拼团设置</a></li></br><?php  } ?>
		
		<?php if(cv($plugin['identity'])) { ?>
		 <?php if(cv('order')) { ?><li <?php  if($_W['controller']=='order00') { ?> class="active"<?php  } ?>><a href="<?php  echo webUrl('creditshop')?>"><i class="fa fa-gift"></i>积分商城</a></li></br><?php  } ?>
			<?php  } ?>
        <?php if(cv('order')) { ?><li <?php  if($_W['controller']=='order00') { ?> class="active"<?php  } ?>><a href="<?php  echo webUrl('poster')?>"><i class="fa fa-file-powerpoint-o"></i>超级海报</a></li></br><?php  } ?>
     
        <?php if(cv('sale')) { ?><li <?php  if($_W['controller']=='sale00') { ?> class="active"<?php  } ?>><a href="<?php  echo webUrl('postera')?>"><i class="fa fa-file-audio-o"></i>活动海报</a></li></br><?php  } ?>
    
        <?php if(cv('finance')) { ?><li <?php  if($_W['controller']=='finance00') { ?> class="active"<?php  } ?>><a href="<?php  echo webUrl('taobao')?>"><i class="fa fa-github-alt"></i>资源助手</a></li></br><?php  } ?>
		
		 <?php if(cv('member')) { ?><li <?php  if($_W['controller']=='member00') { ?> class="active"<?php  } ?>><a href="<?php  echo webUrl('merch')?>"><i class="fa fa-user-plus"></i>多 商 户</a></li></br><?php  } ?>
		 
		  <?php if(cv('member')) { ?><li <?php  if($_W['controller']=='member00') { ?> class="active"<?php  } ?>><a href="<?php  echo webUrl('globonus')?>"><i class="fa fa-skype"></i>全民股东</a></li></br><?php  } ?>
		

        <?php if(cv('statistics.sale')) { ?><li <?php  if($_W['controller']=='statistics00') { ?> class="active"<?php  } ?>><a href="<?php  echo webUrl('article')?>"><i class="fa fa-youtube-square"></i>文章营销</a></li></br><?php  } ?>
       <li <?php  if($_W['controller']=='plugins00') { ?> class="active"<?php  } ?>><a href="<?php  echo webUrl('exhelper')?>"><i class="fa fa-dropbox"></i>快递打印</a></li></br>

        <?php  if(p('diypage')) { ?><li><a href="<?php  echo webUrl('diyform')?>"><i class="fa fa-linkedin-square"></i>DIY 表单</a></li></br><?php  } ?>


      	<?php if(cv('sysset')) { ?><li <?php  if($_W['controller']=='sysset00') { ?> class="active"<?php  } ?>><a href="<?php  echo webUrl('qa')?>"><i class="fa fa-retweet"></i>帮助中心</a></li></br><?php  } ?>

    </ul>
	
	 <?php  } ?>
	
	
	
	
	
	
    <ul class="nav navbar-top-links navbar-right">
        <li class="dropdown">
            <a aria-expanded="false" role="button" href="#" class="dropdown-toggle" data-toggle="dropdown" style="position:relative;" onclick="$(this).find('span').toggleClass('deg180')">
                <name style="width: 80px;white-space:nowrap;overflow:hidden;text-overflow: ellipsis;display: block;text-align: center"><?php  echo $_W['uniaccount']['name'];?></name>
                <span class="caret" style="position: absolute;top: 22px;right: 12px;"></span></a>
            <ul role="menu" class="dropdown-menu">
                <li><a href="<?php  echo webUrl('sysset/account')?>"><i class="icon icon-similar"></i>  切换公众号</a></li>
                <?php  if($_W['role'] == 'manager' || $_W['role'] == 'founder') { ?>
                <li><a href="./index.php?c=account&a=post&uniacid=<?php  echo $GLOBALS['_W']['uniacid'];?>" target="_blank"><i class="icon icon-wechat"></i>  编辑公众号</a></li>
                <li><a href="./index.php?c=profile&a=payment&" target="_blank"><i class="icon icon-pay"></i>  支付参数</a></li>
                <?php  } ?>
             <!--   <li><a href="./index.php?c=utility&a=emulator&" target="_blank"><i class="icon icon-machinery"></i>  模拟测试</a></li>-->
		<?php if(cv('perm')) { ?>
		<li class="divider"></li>  
		<li><a href="<?php  echo webUrl('perm')?>"><i class="icon icon-person2"></i> 权限管理</a></li>
		<?php  } ?>
     <?php  if($_W['role'] == 'founder') { ?>
		<li class="divider"></li>  
	<li><a href="<?php  echo webUrl('system')?>"><i class="icon icon-settings"></i> 系统管理</a></li>
	<li><a href="<?php  echo webUrl('system/auth/upgrade')?>"><i class="icon icon-down"></i> 系统更新</a></li>
	<?php  } ?>
                <li><a href="./index.php?c=user&a=profile&" target="_blank"><i class="icon icon-lock"></i>  修改密码</a></li>
                <li><a href="./index.php?c=account&a=display&" target="_blank"><i class="icon icon-back"></i>  返回系统</a></li>
            </ul>
        </li>
    </ul>

    <?php  } else { ?>
    <ul class="nav navbar-nav    gray-bg">

        <!--<li <?php  if($_W['current_menu']=='') { ?> class="active"<?php  } ?>><a href="<?php  echo webUrl('system')?>"> 首页</a></li>-->
        <li <?php  if($_W['current_menu']=='plugin') { ?> class="active"<?php  } ?>><a href="<?php  echo webUrl('system/plugin')?>"> 应用</a></li>
        <li <?php  if($_W['current_menu']=='copyright') { ?> class="active"<?php  } ?>><a href="<?php  echo webUrl('system/copyright')?>">版权</a></li>
        <li <?php  if($_W['current_menu']=='data') { ?> class="active"<?php  } ?>><a href="<?php  echo webUrl('system/data')?>">数据</a></li>
        <li <?php  if($_W['current_menu']=='site') { ?> class="active"<?php  } ?>><a href="<?php  echo webUrl('system/site')?>">网站</a></li>
        <li <?php  if($_W['current_menu']=='auth') { ?> class="active"<?php  } ?>><a href="<?php  echo webUrl('system/auth')?>">授权</a></li>
    </ul>
    <ul class="nav navbar-top-links navbar-right">
        <li>
            <a  href="<?php  echo webUrl()?>" > 返回商城</a>
        </li>
    </ul>
    <?php  } ?>
</div>
</nav>				
</div> 
<div class='wrapper main-wrapper wrapper-content '>
<?php  if($no_left) { ?>
    <div class="page-content" style="width:1000px">
<?php  } else { ?>
    <div class="page-menubar">
<?php  echo $this->frame_menus()?>
    </div>
    <div class="page-content">
<?php  } ?>
        