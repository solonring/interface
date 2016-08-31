<?php include_once('header.php');?>
<body style="height:100%">
<div class="container-fluid" style="background:white;height:100%;">
    <div class="row" style="height:100%;">
 	<?php include_once('left_info.php');?>
        <div id="mainwindow" class="col-md-9"   style="height:100%;background:white;margin:0px;overflow-y:auto;padding:0px;">
           <?php include_once('login_t.php');?>
            <!--主窗口start-->
             <div style="padding:16px;">
                <!--欢迎页-->
<!--info start-->
<?php foreach ($left as $key => $value) {?>

<div class="info_api" style="border:1px solid #ddd;margin-bottom:20px;" id="info_api_<?php echo $value['id'];?>">
            <div style="background:#f5f5f5;padding:20px;position:relative">
                <div class="textshadow" style="position: absolute;right:0;top:4px;right:8px;">
                    最后修改者: <?php echo $value['user_name'];?> &nbsp;<?php echo date("Y-m-d H:i:s",$value['update_time']);?>&nbsp;
                                    </div>
                <h4 class="textshadow"><?php echo $value['title'];?></h4>
                <p>
                    <b>编号&nbsp;&nbsp;:&nbsp;&nbsp;<span style="color:red">0<?php echo $value['id'];?></span></b>
                </p>
                <div>
                                        <kbd style="color:red"><?php echo $value['method'];?></kbd> - <kbd><?php if(stripos($value['urls'],"aigegou.com")>0){echo $value['urls'];}else{
                                        $url = $this->config->item('go_url');
                                        $new_url = $url[$value['type']];
                                        echo $new_url.$value['urls'];}?></kbd>
                &nbsp;&nbsp;<button type="button" class="btn btn-primary" data-toggle="button" aria-pressed="false" autocomplete="off" onclick="editApi('<?php echo site_url('c=debug&m=index&id='.$value['id'].'');?>');">在线调试</button>
                </div>
            </div>
                        <div style="background:#ffffff;padding:20px;">
                <h5 class="textshadow">请求参数</h5>
                <table class="table">
                    <thead>
                    <tr>
                        <th class="col-md-3">参数名</th>
                        <th class="col-md-2">类型</th>
                        <th class="col-md-2">必传</th>
                        <th class="col-md-4">说明</th>
                        <th class="col-md-4">缺省默认值</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php 
                    $param_key = json_decode($value['param_key']);
                    $param_value = json_decode($value['param_value']);
                    $param_type = json_decode($value['param_type']);
                    $param_is = json_decode($value['param_is']);
                    $param_default = json_decode($value['param_default']);
                    foreach ($param_key as $k => $v) {
                    ?>
                    <tr>
                        <td><?php echo $param_key[$k];?></td>
                        <td><?php echo $param_type[$k];?></td>
                        <td><span style="color:red"><?php echo $param_is[$k];?><span></span></span></td>
                        <td><?php echo $param_value[$k];?></td>
                        <td><?php echo $param_default[$k];?></td>
                    </tr>
                    <?php }?>
                    
                    </tbody>
                </table>
            </div>

        <div style="background:#ffffff;padding:20px;">
                <h5 class="textshadow">返回值&nbsp;&nbsp;&nbsp;<a href="javascript:void(#);" class="haha" id="a<?php echo $value['id'];?>" onclick="showa('<?php echo $value['id'];?>');" title="点击显示或者隐藏滚动条">显示全部</a></h5>
                <pre class="show" id="show<?php echo $value['id'];?>">
<?php if($value['create_time'] === $value['update_time']){echo indent(stripslashes($value['return_info']));}else{ echo stripslashes($value['return_info']);};?>
               </pre>
            </div>             </div>
                                <?php }?>
<!--欢迎页 end-->            </div>

            <!--主窗口end-->
        </div>
    </div>
</div>
<?php include_once('footer.php');?>
<script type="text/javascript">
    $(function(){
        var c = $(".show").length;
        for (var i = 0; i < c; i++) {
            var h = $(".show").eq(i);
            $(".show").eq(i).css("height", "100%");
            if($(".show").eq(i).height()>500)
            {
                 $(".show").eq(i).css("height", "500");
            }
            else
            {
                $(".haha").eq(i).hide();
            }
        };
       
    })
   
   function showa(id)
   {
    var h = $("#show"+id).height();
        if(h>500)
        {
            $("#a"+id).html('显示全部');
            $("#show"+id).css("height", "500");
        }
        else
        {
            $("#a"+id).html('隐藏部分');
            $("#show"+id).css("height", "100%");
        }
   }
</script>