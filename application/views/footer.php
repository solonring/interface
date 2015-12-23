<script src="/static/jquery.min.js"></script>
<script src="/static/jquery.cookie.js"></script>
<script src="/static/bootstrap.min.js"></script>
<script src="/static/c.js"></script>
<div id="gotop" onclick="goTop()" style="z-index: 999999; display: block; color: rgb(230, 230, 230); cursor: pointer; width: 34px; height: 34px; border: 1px solid rgb(221, 221, 221); line-height: 35px; text-align: center; position: fixed; right: 1px; top: 200px; border-radius: 50%; background: rgba(91, 192, 222, 0.8);">
            T
        </div>
<!--接口详情返回顶部按钮end-->
                <script>
        //删除某个接口
        var $url = '<?php echo site_url("c=api&m=del");?>';
        function deleteApi(apiId,divId){
            if(confirm('是否确认删除此接口?')){
                $('#api_'+divId).html('    删除中...');
                $.post($url,{id:apiId},function(data){
                    if(data == '1'){
                        $('#api_'+divId).remove();//删除左侧菜单
                        $('#info_api_'+divId).remove();//删除接口详情
                    }
                    else
                    {
                        window.location.href=window.location.href;
                    }
                })
            }
        }

        //删除分类
        var $url = '<?php echo site_url("c=menu&m=del");?>';
        function deleteClass(apiId,divId){
            if(confirm('是否确认删除此分类?')){
                $('#info_'+divId).html('    删除中...');
                $.post($url,{id:apiId},function(data){
                    if(data == '1'){
                        $('#info_'+divId).remove();//删除左侧菜单
                        //$('#info_api_'+divId).remove();//删除接口详情
                    }
                    else
                    {
                        window.location.href=window.location.href;
                    }
                })
            }
        }
        //编辑某个接口
        function editApi(gourl){
            window.location.href=gourl;
        }

        //返回顶部
        function goTop(){
            $('#mainwindow').animate(
                { scrollTop: '0px' }, 200
            );
        }

        //检测滚动条,显示返回顶部按钮
        document.getElementById('mainwindow').onscroll = function () {
            if(document.getElementById('mainwindow').scrollTop > 100){
                document.getElementById('gotop').style.display='block';
                console.log('show');
            }
            console.log(document.getElementById('mainwindow').scrollTop);
        };
    </script></body>
</html>