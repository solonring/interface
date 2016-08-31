<?php include_once('header.php');?>
<body style="height:100%">
<div class="container-fluid" style="background:white;height:100%;">
    <div class="row" style="height:100%;">
 	<!--?php include_once('left.php');?-->
        <div id="mainwindow" class="col-md-12"   style="height:100%;background:white;margin:0px;overflow-y:auto;padding:0px;">
           <?php include_once('login_t.php');?>
            <!--主窗口start-->
            <div style="padding:16px;">
                <!--登录与退出start-->
<div style="border:1px solid #ddd; width:50%; margin:0 auto;">
    <div style="background:#f5f5f5;padding:20px;position:relative;">
        <h4>登录</h4>
        <div>
          <span style="color:#EE4000"><?php echo validation_errors(); ?></span>
        <?php echo form_open('c=login&m=signin&go_url='.$go_url); ?>
                <div class="form-group">
                    <input type="text" class="form-control" name="user_name" value="游客" placeholder="登录名" required="required">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" name="pass_word" value="" placeholder="密码" required="required">
                </div>
                <button class="btn btn-success">sign in</button>&nbsp;&nbsp;<a href="<?php echo site_url('c=login&m=register');?>">register</a>
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