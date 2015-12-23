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
<form class="form-horizontal" action="<?php echo site_url('c=menu&m=add');?>" method="post">
  <div class="form-group form-group-lg">
    <label class="col-sm-2 control-label" for="formGroupInputLarge">分类名称</label>
    <div class="col-sm-10">
      <input class="form-control" type="text" name="m_name" id="formGroupInputLarge" placeholder="日志接口" required="required">
      <br>
     <button class="btn btn-success">submit</button>&nbsp;&nbsp;
    </div>
  </div>
 
  </div>
</form>


<!--欢迎页 end-->            </div>

            <!--主窗口end-->
        </div>
    </div>
</div>
<?php include_once('footer.php');?>