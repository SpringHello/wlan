<?php defined('IN_IA') or exit('Access Denied');?><?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('_header', TEMPLATE_INCLUDEPATH)) : (include template('_header', TEMPLATE_INCLUDEPATH));?>

<style type='text/css' xmlns="http://www.w3.org/1999/html">
    .dd-handle { height: 40px; line-height: 30px}
    .dd-list { width:860px;}
</style>


<div class="page-heading"> 
    <span class="pull-right">
        <?php if(cv('sysset.category')) { ?>
        <a href="<?php  echo webUrl('sysset/category')?>" class="btn btn-warning"> 设置分类层级</a>
        <?php  } ?>
        <button type="button" id='btnExpand' class="btn btn-default" data-action='expand'><i class='fa fa-angle-up'></i> 折叠所有</button>  
        <?php if(cv('goods.category.add')) { ?>
        <a href="<?php  echo webUrl('goods/category/add')?>" class="btn btn-primary"><i class="fa fa-plus"></i> 添加新分类</a>
        <?php  } ?>

    </span>
    <h2>资源分类</h2>
</div>
<form action="" method="post" class="form-validate">

    <div class="dd" id="div_nestable">
        <ol class="dd-list">

            <?php  if(is_array($category)) { foreach($category as $row) { ?>
            <?php  if(empty($row['parentid'])) { ?>
            <li class="dd-item full" data-id="<?php  echo $row['id'];?>">

                <div class="dd-handle" >
                    [ID: <?php  echo $row['id'];?>] <?php  echo $row['name'];?>
                    <span class="pull-right">

                        <div class='label <?php  if($row['enabled']==1) { ?>label-success<?php  } else { ?>label-default<?php  } ?>'
                             <?php if(cv('goods.category.edit')) { ?>
                             data-toggle='ajaxSwitch'
                             data-switch-value='<?php  echo $row['enabled'];?>'
                             data-switch-value0='0|隐藏|label label-default|<?php  echo webUrl('goods/category/enabled',array('enabled'=>1,'id'=>$row['id']))?>'
                             data-switch-value1='1|显示|label label-success|<?php  echo webUrl('goods/category/enabled',array('enabled'=>0,'id'=>$row['id']))?>'
                             <?php  } ?>
                             >
                             <?php  if($row['enabled']==1) { ?>显示<?php  } else { ?>隐藏<?php  } ?></div>

                               <?php  if(intval($_W['shopset']['category']['level'])>1 ) { ?><?php if(cv('goods.category.add')) { ?><a class='btn btn-default btn-sm' href="<?php  echo webUrl('goods/category/add', array('parentid' => $row['id']))?>" title='添加子分类' ><i class="fa fa-plus"></i></a><?php  } ?><?php  } ?>
                               <?php if(cv('goods.category.edit|goods.category.view')) { ?>
                               <a class='btn btn-default btn-sm' href="<?php  echo webUrl('goods/category/edit', array('id' => $row['id']))?>" title="<?php if(cv('goods.category.edit')) { ?>修改<?php  } else { ?>查看<?php  } ?>" ><i class="fa fa-edit"></i></a>
                               <?php  } ?>
                               <?php if(cv('goods.category.delete')) { ?><a class='btn btn-default btn-sm' data-toggle='ajaxPost' href="<?php  echo webUrl('goods/category/delete', array('id' => $row['id']))?>" data-confirm='确认删除此分类吗？'><i class="fa fa-remove"></i></a><?php  } ?>
                        </span>
                    </div>
                    <?php  if(count($children[$row['id']])>0) { ?>

                    <ol class="dd-list">
                        <?php  if(is_array($children[$row['id']])) { foreach($children[$row['id']] as $child) { ?>
                        <li class="dd-item full" data-id="<?php  echo $child['id'];?>">
                            <div class="dd-handle" style="width:100%;">
                                <img src="<?php  echo tomedia($child['thumb']);?>" width='30' height="30" onerror="$(this).remove()" style='padding:1px;border: 1px solid #ccc;float:left;' /> &nbsp;
                                [ID: <?php  echo $child['id'];?>] <?php  echo $child['name'];?>
                                <span class="pull-right">
                                    <div class='label <?php  if($child['enabled']==1) { ?>label-success<?php  } else { ?>label-default<?php  } ?>'
                                         <?php if(cv('goods.category.edit')) { ?>
                                         data-toggle='ajaxSwitch'
                                         data-switch-value='<?php  echo $child['enabled'];?>'
                                         data-switch-value0='0|隐藏|label label-default|<?php  echo webUrl('goods/category/enabled',array('enabled'=>1,'id'=>$child['id']))?>'
                                         data-switch-value1='1|显示|label label-success|<?php  echo webUrl('goods/category/enabled',array('enabled'=>0,'id'=>$child['id']))?>'
                                         <?php  } ?>
                                         >
                                         <?php  if($child['enabled']==1) { ?>显示<?php  } else { ?>隐藏<?php  } ?></div>

                                           <?php  if(intval($_W['shopset']['category']['level'])>2) { ?>
                                           <?php if(cv('goods.category.add')) { ?><a class='btn btn-default btn-sm' href="<?php  echo webUrl('goods/category/add', array('parentid' => $child['id']))?>" title='添加子分类' ><i class="fa fa-plus"></i></a><?php  } ?>
                                           <?php  } ?>
                                           <?php if(cv('goods.category.edit|goods.category.view')) { ?><a class='btn btn-default btn-sm' href="<?php  echo webUrl('goods/category/edit', array('id' => $child['id']))?>" title="<?php if(cv('goods.category.edit')) { ?>修改<?php  } else { ?>查看<?php  } ?>" ><i class="fa fa-edit"></i></a><?php  } ?>
                                           <?php if(cv('goods.category.delete')) { ?> <a class='btn btn-default btn-sm'  data-toggle='ajaxPost'  href="<?php  echo webUrl('goods/category/delete', array('id' => $child['id']))?>" data-confirm="确认删除此分类吗？"><i class="fa fa-remove"></i></a><?php  } ?>
                                    </span>
                                </div>
                                <?php  if(count($children[$child['id']])>0 && intval($_W['shopset']['category']['level'])==3) { ?>

                                <ol class="dd-list"  style='width:100%;'>
                                    <?php  if(is_array($children[$child['id']])) { foreach($children[$child['id']] as $third) { ?>
                                    <li class="dd-item" data-id="<?php  echo $third['id'];?>">
                                        <div class="dd-handle">
                                            <img src="<?php  echo tomedia($third['thumb']);?>" width='30' height="30" onerror="$(this).remove()" style='padding:1px;border: 1px solid #ccc;float:left;' /> &nbsp;
                                            [ID: <?php  echo $third['id'];?>] <?php  echo $third['name'];?>
                                            <span class="pull-right">
						 <div class='label <?php  if($third['enabled']==1) { ?>label-success<?php  } else { ?>label-default<?php  } ?>'
											<?php if(cv('goods.category.edit')) { ?>
											data-toggle='ajaxSwitch'
											data-switch-value='<?php  echo $third['enabled'];?>'
											data-switch-value0='0|隐藏|label label-default|<?php  echo webUrl('goods/category/enabled',array('enabled'=>1,'id'=>$third['id']))?>'
											data-switch-value1='1|显示|label label-success|<?php  echo webUrl('goods/category/enabled',array('enabled'=>0,'id'=>$third['id']))?>'
											<?php  } ?>
											>
											<?php  if($third['enabled']==1) { ?>显示<?php  } else { ?>隐藏<?php  } ?></div>
												
                                                <?php if(cv('goods.category.edit|goods.category.view')) { ?><a class='btn btn-default btn-sm' href="<?php  echo webUrl('goods/category/edit', array('id' => $third['id']))?>" title="<?php if(cv('goods.category.edit')) { ?>修改<?php  } else { ?>查看<?php  } ?>" ><i class="fa fa-edit"></i></a><?php  } ?>
                                                <?php if(cv('goods.category.delete')) { ?><a class='btn btn-default btn-sm'  data-toggle='ajaxPost'  href="<?php  echo webUrl('goods/category/delete', array('id' => $third['id']))?>" data-confirm="确认删除此分类吗？"><i class="fa fa-remove"></i></a><?php  } ?>
                                            </span>
                                        </div>
                                    </li>
                                    <?php  } } ?>
                                </ol>
                                <?php  } ?>
                            </li>
                            <?php  } } ?>
                        </ol>
                        <?php  } ?>

                    </li>
                    <?php  } ?>
                    <?php  } } ?>

        </ol>
        <table class='table'>
            <tr>
                <td>

                    <?php if(cv('goods.category.edit')) { ?>
                    <input id="save_category" type="submit" class="btn btn-primary" value="保存">
                    <?php  } ?>
                    <input type="hidden" name="token" value="<?php  echo $_W['token'];?>" />
                    <input type="hidden" name="datas" value="" />
                </td>
            </tr>
            </tbody>
        </table>
    </div>


</form>

        <script language='javascript'>
            myrequire(['jquery.nestable'], function () {

                $('#btnExpand').click(function () {
                    var action = $(this).data('action');
                    if (action === 'expand') {
                        $('#div_nestable').nestable('collapseAll');
                        $(this).data('action', 'collapse').html('<i class="fa fa-angle-up"></i> 展开所有');

                    } else {
                        $('#div_nestable').nestable('expandAll');
                        $(this).data('action', 'expand').html('<i class="fa fa-angle-down"></i> 折叠所有');
                    }
                })
                var depth = <?php  echo intval($_W['shopset']['category']['level'])?>;
                if (depth <= 0) {
                    depth = 2;
                }
                $('#div_nestable').nestable({maxDepth: depth});

                $('.dd-item').addClass('full');

                $(".dd-handle a,.dd-handle div").mousedown(function (e) {

                    e.stopPropagation();
                });
                var $expand = false;
                $('#nestableMenu').on('click', function (e)
                {
                    if ($expand) {
                        $expand = false;
                        $('.dd').nestable('expandAll');
                    } else {
                        $expand = true;
                        $('.dd').nestable('collapseAll');
                    }
                });

                $('form').submit(function(){
                    var json = window.JSON.stringify($('#div_nestable').nestable("serialize"));
                    $(':input[name=datas]').val(json);
                });

            })
        </script>

        <?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('_footer', TEMPLATE_INCLUDEPATH)) : (include template('_footer', TEMPLATE_INCLUDEPATH));?>
