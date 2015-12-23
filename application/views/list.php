<?php include_once('header.php');?>

<body style="height:100%">
<div class="container-fluid" style="background:white;height:100%;">
    <div class="row" style="height:100%;">
 	<?php include_once('left.php');?>
        <div id="mainwindow" class="col-md-9"   style="height:100%;background:white;margin:0px;overflow-y:auto;padding:0px;">
           <?php include_once('login_t.php');?>
            <!--主窗口start-->
             <div style="padding:16px;">
                <!--欢迎页-->
<!--info start-->

<!-- Indicates a successful or positive action -->
<?php
$count = count($user_list);
$array = array(1=>'success',2=>'primary',3=>'info');
$i = 1;
foreach ($user_list as $key => $value) {
?>
&nbsp;&nbsp;<button type="button" id="button<?php echo $value['id'];?>" onclick="shows('select<?php echo $i;?>');" class="btn btn-<?php echo $array[$value['level']];?>"> <?php echo $value['user_name'];?>
<select class="form-control" id="select<?php echo $i;?>" onchange="ajax_commit('<?php echo $value['id'];?>',this.value);" name="level" style="display:none;">
                <option value="1" <?php if($value['level'] == 1){?>selected<?php }?>>管理者</option>
                <option value="2" <?php if($value['level'] == 2){?>selected<?php }?>>开发者</option>
                <option value="3" <?php if($value['level'] == 3){?>selected<?php }?>>游客</option>
</select>
</button>&nbsp;&nbsp;&nbsp;&nbsp;
<?php 
if($i%8 == 0){echo "<br><br>";}
$i++;
}
?>


<!--欢迎页 end-->            </div>

            <!--主窗口end-->
        </div>
    </div>
</div>
<?php include_once('footer.php');?>
<script type="text/javascript">
function shows(id)
{
    $(".form-control").hide().siblings();
    $("#"+id).show();
}

function ajax_commit(id,e)
{
    var mycars= [];
    mycars[1] = "btn btn-success";
    mycars[2] = "btn btn-primary";
    mycars[3] = "btn btn-info";
    $.post("<?php echo site_url('c=main&m=change_level');?>",{id: id,level: e},function(result){
        //alert(result);
       if(result == 1)
       {
            $("#button"+id).attr('class',mycars[e]).show(600);
            alert('更改成功');
       }
       else
       {
            alert('更改失败。');
       }
    });
}
</script>