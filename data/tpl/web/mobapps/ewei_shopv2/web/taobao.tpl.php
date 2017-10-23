<?php defined('IN_IA') or exit('Access Denied');?><?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('_header', TEMPLATE_INCLUDEPATH)) : (include template('_header', TEMPLATE_INCLUDEPATH));?>
<div class="page-heading"> <h2>淘宝宝贝助手</h2> </div>
<div class='alert alert-danger'>尽量在服务器空闲时间来操作，会占用大量内存与带宽，在获取过程中，请不要进行任何操作!</div>
     
    <form id="dataform" action="" method="post" class="form-horizontal form">

                <div class="form-group">
                    <label class="col-sm-2 control-label must">链接 或 itemId</label>
                    <div class="col-sm-9">
                        <textarea style="width:600px;height:200px" id="url" name="url" class="form-control"></textarea>
                        <span class="help-block">例如资源链接为: http://item.taobao.com/item.htm?id=522155891308</span>
                        <span class="help-block">或:http://detail.tmall.com/item.htm?id=522155891308</span>
                        <span class="help-block">直接输入资源链接或输入资源ID:522155891308  </span>
                        <span class="help-block">每行仅限输入一个链接或一个资源ID，可多行输入</span>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">设置分类</label>

                    <div class="col-sm-9">
                           <?php  if($shopset['catlevel']==3) { ?>
        <?php  echo tpl_form_field_category_3level('category', $parent, $children,0,0,0)?>
        <?php  } else { ?>
        <?php  echo tpl_form_field_category_2level('category', $parent, $children,0,0)?>
        <?php  } ?>
                    </div>

                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label"> </label>
                    <div class="col-sm-9">
                        <span class="help-block">此分类读取的是商城的资源分类, 设置默认抓取资源的分类</span>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label"> </label>
                    <div class="col-sm-9">
                        <input id="btn_submit" type="button"  value="立即获取" class="btn btn-primary col-lg-12"  onclick="formcheck()"/>
                    </div>
                </div>
    
    </form>
 
<script type="text/javascript">
 
    var category = <?php  echo json_encode($children)?>;

    var len = 0;
    var urls = [];
    var total = 0;
    function formcheck() {
      
        if ($(":input[name='url']").val() == '') {
            tip.msgbox.err("请输入资源链接或itemId!");
            $(":input[name='url']").focus();
            return;
        }
        $("#dataform").attr("disabled", "true");
        $("#btn_submit").val("正在获取中...").removeClass("btn-primary").attr("disabled", "true");

        urls = $("#url").val().split('\n');
        total = urls.length;
        $("#btn_submit").val("检测到需要获取 " + total + " 个宝贝, 请等待开始....");
        fetch_next();
        return;
    }
    function fetch_next() {
        var postdata =  {
                    url: urls[len],
                    pcate: $("select[name='category[parentid]']").val(),
                    ccate: $("select[name='category[childid]']").val()
                };
               <?php  if($shopset['catlevel']==3) { ?>
                  postdata.tcate = $("select[name='category[thirdid]']").val();
               <?php  } ?>
        $.post("<?php  echo webUrl('taobao/fetch')?>",
               postdata,
        function (data) {
            len++;
            $("#btn_submit").val("已经获取  " + len + " / " + total + " 个宝贝, 请等待....");

            if (len >= total) {
                $("#btn_submit").val("立即获取").addClass("btn-primary").removeAttr("disabled");
                if (confirm('资源已经获取成功, 是否跳转到资源管理?')) {
                      location.href = "<?php  echo webUrl('goods' ,array('goodsfrom'=>stock))?>";
                }
                else {
                     location.reload();
                }
            }
            else {
                fetch_next();
            }

        }, "json");
    }
</script>

<?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('_footer', TEMPLATE_INCLUDEPATH)) : (include template('_footer', TEMPLATE_INCLUDEPATH));?>
