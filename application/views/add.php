<?php include_once('header.php');?>
<body style="height:100%">
<div class="container-fluid" style="background:white;height:100%;">
    <div class="row" style="height:100%;">
    <?php include_once('left.php');?>
        <div id="mainwindow" class="col-md-9"   style="height:100%;background:white;margin:0px;overflow-y:auto;padding:0px;">
           <?php include_once('login_t.php');?>
            <!--主窗口start-->
            <div style="padding:16px;">
                <!--登录与退出start-->
<div style="border:1px solid #ddd; width:100%; margin:0 auto;">
    <div style="background:#f5f5f5;padding:20px;position:relative;">
        <h4>添加接口列表</h4>
        <div>
        <span style="color:#EE4000"><?php echo validation_errors(); ?></span>
        <?php echo form_open('c=add&m=add'); ?>
                <div class="form-group">
                    <input type="text" class="form-control" name="title" placeholder="接口名称" required="required">
                </div>
                <div class="form-group">
                 <select class="form-control" name="method">
                  <option value="GET">GET</option>
                  <option value="POST">POST</option>
                </select>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="urls" placeholder="act=member_index&op=index">
                </div>
                <div class="form-group">
                <select class="form-control" name="parent_id">
                <?php foreach ($list as $key => $value) {?>
                  <option value="<?php echo $value['m_id'];?>"><?php echo $value['m_name'];?></option>
                <?php }?>
                </select>
                </div>
                <div class="aab">
                <div class="row form-group">
                  <div class="col-xs-2">
                    <input type="text" name="param_key[]" class="form-control" placeholder="参数: id">
                  </div>
                   <!--div class="col-xs-1">
                    <input type="text" name="param_is[]" value="是" class="form-control" placeholder="必传: 是" title="是否必传"  data-toggle="tooltip" data-placement="top">
                  </div-->
                  <div class="col-xs-1">
                  <select class="col-xs-1 form-control" style="width:70px;" name="param_is[]">
                  <option value="是">是</option>
                  <option value="否">否</option>
                  </select>
                  </div>
                  <div class="col-xs-1">
                    <input type="text" name="param_type[]" class="form-control" placeholder="类型: int">
                  </div>
                  <div class="col-xs-4">
                    <input type="text" name="param_value[]" class="form-control" placeholder="说明: 参数说明">
                  </div>
                  <div class="col-xs-2">
                    <input type="text" name="param_default[]" class="form-control" placeholder="缺省值: 100">
                  </div>
                   <button class="btn btn-default add" type="button">添加一列</button>
                </div>
                </div>
                <div class="form-group">
                <textarea class="form-control" name="return_info" rows="20" placeholder="返回的数据未格式化的JSON" required="required"></textarea>
                </div>
                <button class="btn btn-success">submit</button>&nbsp;&nbsp;
            </form>
        </div>
    </div>
</div>
<!--登录与退出end-->            </div>
            <!--主窗口end-->
        </div>
    </div>
</div>

<?php include_once('footer.php');?>
<script type="text/javascript">
$(function () {
    $(".add").click(function(event) {
        var str = '<div class="row form-group">';
            str += '<div class="col-xs-2">';
            str += '<input type="text" name="param_key[]" class="form-control" placeholder="参数: id">';
            str += '</div>';
            str += '<div class="col-xs-1"><select class="col-xs-1 form-control" style="width:70px;" name="param_is[]">';
            str += '<option value="是">是</option><option value="否">否</option></select>';
            str += '</div>';
            str += '<div class="col-xs-1">';
            str += '<input type="text" name="param_type[]" class="form-control" placeholder="类型: int">';
            str += '</div>';
            str += '<div class="col-xs-4">';
            str += '<input type="text" name="param_value[]" class="form-control" placeholder="说明：参数说明">';
            str += '</div>';
            str += '<div class="col-xs-2"><input type="text" name="param_default[]" class="form-control" placeholder="缺省值: 100">';
            str += '</div>';
            str += '<button class="btn btn-default" onclick="del(this);" type="button">删除此列</button>';
            str += '</div>';
        $(".aab").append(str);
    });

})
function del(e)
{
    $(e).parent().remove();
}
</script>