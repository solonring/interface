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
<div style="font-size:18px;">
    <div class="info" style="font-size:14px;">
        <span style="font-size:30px;" class="glyphicon glyphicon-grain" aria-hidden="true"></span> <span style="font-size:16px;">欢迎使用接口管理工具 v1.0版</span><br>
        <pre class="info" style="margin:10px 34px 10px 34px">
什么是接口文档管理工具?
&nbsp;&nbsp;&nbsp;&nbsp;是一个在线API文档系统；其致力于快速解决团队内部接口文档的编写、维护、存档，和减少团队协作开发的沟通成本。
        </pre>
    </div>
</div>
<!--欢迎页 end-->            </div>

            <!--主窗口end-->
        </div>
    </div>
</div>
<?php include_once('footer.php');?>