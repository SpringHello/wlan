<?php defined('IN_IA') or exit('Access Denied');?>

<style>
    .fui-cell-group{width:100%;}
</style>
<meta charset="utf-8">
<div class='fui-page fui-page-current  page-goods-detail' id='page-goods-detail-index'>
    <?php  $this->followBar()?>

    <?php  if(empty($err)) { ?>
    <div class="fui-header">
        <div class="fui-header-left">
            <a class="back" id="btn-back"></a>
        </div>
        <div class="title">
            <div id="tab" class="fui-tab fui-tab-danger">
                <a data-tab="tab1" class="tab active">资11源</a>
                <a data-tab="tab2" class="tab">详情</a>

                <a data-tab="tab3" class="tab">参数</a>

                
            </div>
        </div>
        <div class="fui-header-right"></div>
    </div>
    <?php  } else { ?>
    <div class="fui-header ">
        <div class="fui-header-left">
            <a class="back" id="btn-back"></a>
        </div>
        <div class="title">
            找不到宝贝
        </div>
    </div>
    <?php  } ?>
    <div class="fui-content param-block  <?php  if(!$goods['canbuy']) { ?>notbuy<?php  } ?>">
        <div class="fui-cell-group">
           
            <div class="fui-cell">
                <div class="fui-cell-label" ><?php  echo $scenic['jingquname'];?></div>
                <div class="fui-cell-info overflow"><?php  echo $scenic['jingqugonglue'];?></div>
            </div>
            
        </div>
    </div>




<?php (!empty($this) && $this instanceof WeModuleSite) ? (include $this->template('scenic/picker', TEMPLATE_INCLUDEPATH)) : (include template('scenic/picker', TEMPLATE_INCLUDEPATH));?>


</div>

<style type="text/css">
    .share-text1{text-align: center;padding:0.5rem 0.5rem 0;font-size:0.6rem;color:#666;line-height: 1rem;}
    .share-text2{text-align: center;padding:0 0.5rem 0.5rem;font-size:0.6rem;color:#666;line-height: 1rem;}
</style>

<?php (!empty($this) && $this instanceof WeModuleSite) ? (include $this->template('_footer', TEMPLATE_INCLUDEPATH)) : (include template('_footer', TEMPLATE_INCLUDEPATH));?>