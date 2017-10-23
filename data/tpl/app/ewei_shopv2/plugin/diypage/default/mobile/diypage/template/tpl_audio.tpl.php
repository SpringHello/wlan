<?php defined('IN_IA') or exit('Access Denied');?><?php  if(!empty($diyitem['params']['audiourl'])) { ?>
    <?php  if(empty($diyitem['params']['playerstyle'])) { ?>
        <div class="fui-audio play-audio" style="background: <?php  echo $diyitem['style']['background'];?>; margin: <?php  echo $diyitem['style']['paddingtop'];?>px <?php  echo $diyitem['style']['paddingleft'];?>px; border-color: <?php  echo $diyitem['style']['bordercolor'];?>;"
             data-autoplay="<?php  echo $diyitem['params']['autoplay'];?>" data-pausestop="<?php  echo $diyitem['params']['pausestop'];?>"
        >
            <div class="horn"></div>
            <div class="center">
                <p style="color: <?php  echo $diyitem['style']['textcolor'];?>;"><?php echo !empty($diyitem['params']['title'])?$diyitem['params']['title']:"未定义音频信息"?></p>
                <?php  if(!empty($diyitem['params']['subtitle'])) { ?>
                <p style="color: <?php  echo $diyitem['style']['subtitlecolor'];?>; font-size: 0.65rem;"><?php  echo $diyitem['params']['subtitle'];?></p>
                <?php  } ?>
            </div>
            <div class="time" style="color: <?php  echo $diyitem['style']['timecolor'];?>; display: none;">0'0''</div>
            <div class="speed"></div>
            <audio <?php  if(!empty($diyitem['params']['loopplay'])) { ?>loop<?php  } ?> preload="auto">
                <source src="<?php  echo tomedia($diyitem['params']['audiourl'])?>" type="audio/mpeg" />
            </audio>
        </div>
    <?php  } else { ?>
        <div class="fui-chat-item <?php  echo $diyitem['params']['headalign'];?> play-audio"
             data-autoplay="<?php  echo $diyitem['params']['autoplay'];?>" data-pausestop="<?php  echo $diyitem['params']['pausestop'];?>"
        >
            <?php  if($diyitem['params']['headalign']=='left') { ?>
                <div class="face">
                    <img src="<?php echo !empty($diyitem['params']['headurl'])&&empty($diyitem['params']['headtype']) ? tomedia($diyitem['params']['headurl']) : tomedia($_W['shopset']['shop']['logo'])?>" />
                </div>
            <?php  } ?>
            <div class="msg" style="width: <?php  echo $diyitem['style']['width'];?>px;">
                <div class="horn"></div>
            </div>
            <?php  if($diyitem['params']['headalign']=='right') { ?>
                <div class="face">
                    <img src="<?php echo !empty($diyitem['params']['headurl'])&&empty($diyitem['params']['headtype']) ? tomedia($diyitem['params']['headurl']) : tomedia($_W['shopset']['shop']['logo'])?>" />
                </div>
            <?php  } ?>
            <audio <?php  if(!empty($diyitem['params']['loopplay'])) { ?>loop<?php  } ?> >
                <source src="<?php  echo tomedia($diyitem['params']['audiourl'])?>" type="audio/mpeg" />
            </audio>
        </div>
    <?php  } ?>
<?php  } ?>