<?php include_once('header.php');?>
<link rel="stylesheet" type="text/css" href="/static/s.css">
<body style="height:100%">
<div class="container-fluid" style="background:white;height:100%;">
    <div class="row" style="height:100%;">
 	

        <!--左侧导航start-->
        <div id="navbar" class="col-md-3" style="position:relative;background:#f5f5f5;padding:10px;height:100%;border-right:#ddd 1px solid;overflow-y:auto;">
            <div style="height:50px;font-size:30px;line-height:50px;">
                <a class="home" style="color:#000000;text-shadow:1px 0px 1px #666;text-decoration: none" href="/">
                    <span class="glyphicon glyphicon-random" aria-hidden="true" style="width:40px;"></span>&nbsp;
        <span style="position: relative;top:-3px;">爱个购API <span style="font-size:12px;position:relative;top:-13px;">&nbsp;v1.0</span>
                </a>
                </span>
            </div>
            <!--导航-->
<div style="margin:0px 0px 0px 30px;">
<h3> 相关参数 <small>【<?php echo $param['title'];?>】</small></h3>
  <!--h4><small><?php echo $urls.$param['urls'];?></small></h4-->
<?php 
    $param_key = json_decode($param['param_key']);
    $param_default = json_decode($param['param_default']);
    //print_r($param_default);
    foreach ($param_key as $key => $value) {
?>
<div class="row form-group">
  <div class="col-xs-4">
    <input type="text" class="form-control param_key" placeholder="参数" value="<?php echo $value;?>" readonly="readonly">
  </div>
  <div class="col-xs-8">
    <input type="text" class="form-control param_value" value="<?php echo $param_default[$key];?>" placeholder="默认值">
  </div>
</div>
<?php }?>
&nbsp;&nbsp;&nbsp;&nbsp;<button type="button" class="btn btn-info" onclick="onlineDebug();">在线调试</button>&nbsp;&nbsp;<button type="button" class="btn" onclick="javascript:history.go(-1);">返回</button>

</div>
<!--end-->        </div>
        <!--左侧导航end-->

        <div id="mainwindow" class="col-md-9"   style="height:100%;background:white;margin:0px;overflow-y:auto;padding:0px;">
           <?php include_once('login_t.php');?>
            <!--主窗口start-->
             <div style="padding:16px;">
                <!--欢迎页-->
<!--info start-->


<div class="info_api" style="border:1px solid #ddd;margin-bottom:20px;" id="info_api_<?php echo $id;?>">
<div id="after_urls" style="color: #AA00AA; text-align: center; width: 100%; line-height: 30px; background: #DEDEDE">点击 在线调试 按钮在此显示详细远程链接地址</div>

        <div style="background:#ffffff;padding:20px;">

               
<div class="topBar" style="display:none;">
    <div class="title">待格式化JSON：</div>
    <textarea name="json" id="RawJson" style="resize:none;" class="resizable"></textarea>
</div>
                     
<div class="operateTB form-inline">
    <label for="TabSize">缩进量：</label>
    <select id="TabSize" onchange="TabSizeChanged()" class="span1">
      <option value="1">1</option>
      <option value="2" selected="true">2</option>
      <option value="3">3</option>
      <option value="4">4</option>
      <option value="5">5</option>
      <option value="6">6</option>
    </select>
    <label for="QuoteKeys" class="checkbox">
        <input type="checkbox" id="QuoteKeys" onclick="QuoteKeysClicked()" checked="true">引号
    </label>
    <span id="CollapsibleViewHolder">
      <label for="CollapsibleView"  class="checkbox">
        <input type="checkbox" id="CollapsibleView" onclick="CollapsibleViewClicked()" checked="true">显示控制
      </label>
  </span>
  <span id="CollapsibleViewDetail" style="visibility: visible;margin-right:10px; ">
    <a href="javascript:void(0);" onclick="ExpandAllClicked()">展开</a>
    <a href="javascript:void(0);" onclick="CollapseAllClicked()">叠起</a>
    <a href="javascript:void(0);" onclick="CollapseLevel(3)">2级</a>
    <a href="javascript:void(0);" onclick="CollapseLevel(4)">3级</a>
    <a href="javascript:void(0);" onclick="CollapseLevel(5)">4级</a>
    <a href="javascript:void(0);" onclick="CollapseLevel(6)">5级</a>
    <a href="javascript:void(0);" onclick="CollapseLevel(7)">6级</a>
    <a href="javascript:void(0);" onclick="CollapseLevel(8)">7级</a>
    <a href="javascript:void(0);" onclick="CollapseLevel(9)">8级</a>
  </span>
  <!--input class="btn btn-small btn-primary" data-loading-text="正在格式化json..." id="format"  type="button" onclick="Process()" value="格式化"/-->
</div>
<div class="bottomBar">
    <div class="title">格式化JSON：</div>
    <div id="Canvas" class="Canvas well resizable" style="overflow:auto;margin-bottom:0px;"></div>
</div>      

            </div>             </div>
    </div>
</div>
<!--欢迎页 end-->            </div>

            <!--主窗口end-->
        </div>
    </div>





</div>
<?php include_once('footer.php');?>

<script type="text/javascript">
   function onlineDebug()
    {
      $(".btn-info").html('正在加载数据......');
      $(".btn-info").attr('onclick','');
      var str = '';
      var param_key = $(".param_key").length;
      var param = $(".param_key");
      var param_value = $(".param_value");
      for (var i = 0; i < param_key; i++) {
          str += param.eq(i).val()+'='+param_value.eq(i).val()+'&';
      };
      var url = str.substr(0,(str.length-1));

      $.ajax({
              url:'<?php echo $urls.$param["urls"]?>&'+url,
              type:"get",
              dataType:"jsonp",
              jsonp:"callback",  
              //data:{url},
              success: function( data ) {
                $(".btn-info").attr("onclick","onlineDebug()");
                $(".btn-info").html('在线调试');
                $("#RawJson").html(JSON.stringify(data));
                Process();
              }
            });
      $("#after_urls").html('API远程地址：<?php echo $urls.$param["urls"]?>&'+url);
    }
</script>