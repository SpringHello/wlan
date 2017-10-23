<?php defined('IN_IA') or exit('Access Denied');?><div class="fui-cell-group fui-cell-click" style="margin-top: <?php  echo $diyitem['style']['margintop'];?>px; background-color: <?php  echo $diyitem['style']['background'];?>;">
    <a class="fui-cell external" href="<?php  echo $diyitem['params']['bindurl'];?>">
        <div class="fui-cell-text" style="text-align: center; color: <?php  echo $diyitem['style']['textcolor'];?>;"><p>修改密码</p></div>
    </a>
    <a class="fui-cell external" href="<?php  echo $diyitem['params']['logouturl'];?>">
        <div class="fui-cell-text" style="text-align: center; color:<?php  echo $diyitem['style']['textcolor'];?>;"><p>退出登录</p></div>
    </a>
</div>