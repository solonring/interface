 <!--顶部导航start-->
            <div class="textshadow" style="font-size:16px;widht:100%;height:60px;line-height:60px;padding:0 16px 0 16px;;border-bottom:#ddd 1px solid; z-index:999">
                <span> <a class="home" href="<?php echo base_url();?>" title="返回主页面">首页</a>&nbsp;&nbsp; 
                <?php if($this->session->userdata('username')){?>当前用户：<a class="home" href="<?php echo site_url('c=login&m=my_self');?>" title="更改个人信息"><?php echo $this->session->userdata('username');?></a><?php }?>
<?php if($this->session->userdata('level') == 1){?>&nbsp&nbsp;【<a class="home" href="<?php echo site_url('c=main&m=get_list');?>" title="用户管理列表">用户管理</a>】<?php }?>
                </span>
        <?php if($this->session->userdata('username')){?>
        <span id="topbutton" style="float:right">
        <?php if($this->session->userdata('level') != 3){?>
		<a href="javascript:void(0);" onclick="editApi('<?php echo site_url('c=add');?>');">添加接口&nbsp;&nbsp;<span class="glyphicon glyphicon-log-in" aria-hidden="true"></span></a>
        <a href="javascript:void(0);" onclick="editApi('<?php echo site_url('c=menu');?>');">添加分类&nbsp;&nbsp;<span class="glyphicon glyphicon-log-in" aria-hidden="true"></span></a>
        <?php }?>
        <a href="javascript:void(0);" onclick="editApi('<?php echo site_url('c=login&m=out');?>');">退出&nbsp;&nbsp;<span class="glyphicon glyphicon-log-in" aria-hidden="true"></span></a>
            </span>
            <?php }?>
            </div>
            
            <!--顶部导航end-->