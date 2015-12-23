
        <!--左侧导航start-->
        <div id="navbar" class="col-md-3" style="position:relative;background:#f5f5f5;padding:10px;height:100%;border-right:#ddd 1px solid;overflow-y:auto;">
            <div style="height:50px;font-size:30px;line-height:50px;">
                <a class="home" style="color:#000000;text-shadow:1px 0px 1px #666;text-decoration: none" href="/">
                    <span class="glyphicon glyphicon-random" aria-hidden="true" style="width:40px;"></span>&nbsp;
        <span style="position: relative;top:-3px;">爱个够API <span style="font-size:12px;position:relative;top:-13px;">&nbsp;v1.0</span>
                </a>
                </span>
            </div>
            <!--导航-->
    <div class="form-group">
        <input type="text" class="form-control" id="searchcate" onkeyup="search('cate',this)" placeholder="标题汉字或者拼音">
    </div>
    <div class="list">
        <ul class="list-unstyled">
        <?php foreach ($left as $key => $value) {?>
                <li class="menu" id="info_<?php echo $value['m_id'];?>">
                    <a href="<?php echo site_url('c=api&m=index&cid='.$value['m_id']);?>">
                        <?php echo $value['m_name'];?>                </a>
                    <br>
                    &nbsp;&nbsp;&nbsp;&nbsp;<?php echo $value['m_name'];?>接口文档<input type='hidden' name='aid' value='<?php echo $value['m_id'];?>'><?php if($this->session->userdata('level')==1){?><span style="color:#FF0000; cursor:pointer; float:right" onclick="deleteClass('<?php echo $value['m_id'];?>','<?php echo $value['m_id'];?>');">&nbsp;&nbsp;&nbsp;&nbsp;删除</span><?php }?> <br>
                                    <hr>
                </li>

                <!--接口分类关键字(js通过此关健字进行模糊查找)start-->
                <span class="keyword" id="<?php echo $value['m_id'];?>"><?php echo Pinyin($value['m_name']);?> <?php echo $value['m_name'];?>
                <?php
                 foreach ($value['get_list_info_title'] as $k => $v) {
                    echo $v['title']."&nbsp&nbsp;";
                }?><|-|><?php echo $value['m_name'];?>接口</span>
                    <!--接口关键字(js通过此关健字进行模糊查找)end-->
    <?php }?>
    </ul>
    </div>

    <form action="?act=cate" method="post">
            </form>
<!--jquery模糊查询start-->
<script>
    var $COOKIE_KEY = "API_NAVBAR_STATUS"; //记录左侧菜单栏的开打与关闭状态的cookie的值
    function search(type,obj){
        var $find = $.trim($(obj).val());//得到搜索内容
        if(type == 'cate'){//对接口分类进行搜索操作
            if($find != ''){
                $(".menu").hide();
                //找到符合关键字的对象
                var $keywordobj = $(".keyword:contains('"+$find+"')")
                $keywordobj.each(function(i) {
                    var menu_id = $($keywordobj[i]).attr('id');
                    $("#info_"+menu_id).show();
                });
            }else{
                $(".menu").show();//在没有搜索内容的情况下,左侧导航菜单 全部 显示
            }
        }else if(type == 'api'){//对接口进行搜索操作
            if($find != ''){
                $(".menu").hide();//左侧导航菜单隐藏
                $(".info_api").hide();
                //找到符合关键字的对象
                var $keywordobj = $(".keyword:contains('"+$find+"')")
                $keywordobj.each(function(i) {
                    var menu_id = $($keywordobj[i]).attr('id');
                    $("#api_"+menu_id).show();//左侧导航菜单 部份 隐藏
                    $("#info_api_"+menu_id).show();//接口详情 部份 隐藏
                });
            }else{
                $(".menu").show();//在没有搜索内容的情况下,左侧导航菜单 全部 显示
                $(".info_api").show();//在没有搜索内容的情况下,接口详情 全部 显示
            }
        }
    }

    window.onload=function(){
        //添加关闭,打开左侧菜单的功能
        var status_flg="&lt";var cursor="w-resize"
        var navbarButton = '<div onclick="navbar(this)" ' +
            'style="text-align:center;line-height:120px;border-bottom-right-radius:5px;cursor:'+cursor+';border-top-right-radius:5px;width:14px;height:120px;background: rgba(91,192,222, 0.8);position:fixed;left:0;top:260px;color:#fff">' +
            status_flg +
            '</div>'
        $('body').append(navbarButton);
    }
    // 全屏和normal
    function navbar(obj){
        if($('#mainwindow').hasClass('col-md-9')){
            $(obj).html('&gt;');
            $(obj).css("cursor","e-resize");
            $('#mainwindow').removeClass('col-md-9').addClass('col-md-12');
            $('#navbar').hide();
            $.cookie($COOKIE_KEY, '1');
        }else{
            $(obj).html('&lt;');
            $(obj).css("cursor","w-resize");
            $('#mainwindow').removeClass('col-md-12').addClass('col-md-9');
            $('#navbar').show();
            $.cookie($COOKIE_KEY, '0');
        }
    }
</script>
<!--jquery模糊查询end-->
<!--end-->        </div>
        <!--左侧导航end-->