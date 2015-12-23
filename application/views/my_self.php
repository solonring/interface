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
        <h4>更改密码</h4>
        <div>
        <span style="color:#EE4000"><?php echo validation_errors(); ?></span>
        
        <?php echo form_open('c=login&=my_self'); ?>
                <div class="form-group">
                    <input type="text" class="form-control" value="<?php echo $this->session->userdata('username');?>" name="user_name" placeholder="登录名" required="required" disabled>
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" name="pass_word" placeholder="密码" required="required">
                </div>
                </div>
                
                <button class="btn btn-success">更改</button>&nbsp;&nbsp;<a href="<?php echo site_url('c=login&m=index');?>">sign in</a>
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