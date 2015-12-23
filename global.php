<?php
/**
 * 统一入口，进行初始化信息
 */
error_reporting(E_ALL & ~E_NOTICE);
define('BASE_ROOT_PATH',str_replace('\\','/',dirname(__FILE__)));
/**
 * 安装判断
 */
//change chenyifei
/* if (!is_file(BASE_ROOT_PATH."/shop/install/lock") && is_file(BASE_ROOT_PATH."/shop/install/index.php")){
    if (ProjectName != 'shop'){
        @header("location: ../shop/install/index.php");
    }else{
        @header("location: install/index.php");
    }
    exit;
} */

define('ADT_CARRIAGE',0.01);  //配送费
define('ADT_FREE_CARRIAGE_LEAVE',0.02);  //免运费金额
define('ADT_AVALIABLE_DISTANCE',5000);  //配送范围，单位米
define('ADT_NEARE_ADDRESS_DISTANCE',1000);  //查找附近的收货地址范围，单位米

define('BASE_CORE_PATH',BASE_ROOT_PATH.'/core');
define('BASE_DATA_PATH',BASE_ROOT_PATH.'/data');
define('DS','/');
define('emall',true);
define('StartTime',microtime(true));
define('TIMESTAMP',time());
define('DIR_SHOP','shop');
define('DIR_CMS','cms');
define('DIR_CIRCLE','circle');
define('DIR_MICROSHOP','microshop');
define('DIR_ADMIN','admin');
define('DIR_API','api');
define('DIR_MOBILE','mobile');
define('DIR_WAP','wap');

define('DIR_RESOURCE','data/resource');
define('DIR_UPLOAD','data/upload');

define('ATTACH_PATH','shop');
define('ATTACH_COMMON','shop/common');
define('ATTACH_AVATAR','shop/avatar');
define('ATTACH_EDITOR','shop/editor');
define('ATTACH_MEMBERTAG','shop/membertag');
define('ATTACH_STORE','shop/store');
define('ATTACH_GOODS','shop/store/goods');
define('ATTACH_STORE_DECORATION','shop/store/decoration');
define('ATTACH_LOGIN','shop/login');
define('ATTACH_WAYBILL','shop/waybill');
define('ATTACH_ARTICLE','shop/article');
define('ATTACH_BRAND','shop/brand');
define('ATTACH_ADV','shop/adv');
define('ATTACH_ACTIVITY','shop/activity');
define('ATTACH_WATERMARK','shop/watermark');
define('ATTACH_POINTPROD','shop/pointprod');
define('ATTACH_GROUPBUY','shop/groupbuy');
define('ATTACH_LIVE_GROUPBUY','shop/livegroupbuy');
define('ATTACH_SLIDE','shop/store/slide');
define('ATTACH_VOUCHER','shop/voucher');
define('ATTACH_STORE_JOININ','shop/store_joinin');
define('ATTACH_REC_POSITION','shop/rec_position');
define('ATTACH_MOBILE','mobile');
define('ATTACH_CIRCLE','circle');
define('ATTACH_CMS','cms');
define('ATTACH_LIVE','live');
define('ATTACH_MALBUM','shop/member');
define('ATTACH_MICROSHOP','microshop');
define('TPL_SHOP_NAME','default');
define('TPL_CIRCLE_NAME', 'default');
define('TPL_MICROSHOP_NAME', 'default');
define('TPL_CMS_NAME', 'default');
define('TPL_ADMIN_NAME', 'default');

/*
 * 商家入驻状态定义
 */
//新申请
define('STORE_JOIN_STATE_NEW', 10);
//完成付款
define('STORE_JOIN_STATE_PAY', 11);
//初审成功
define('STORE_JOIN_STATE_VERIFY_SUCCESS', 20);
//初审失败
define('STORE_JOIN_STATE_VERIFY_FAIL', 30);
//付款审核失败
define('STORE_JOIN_STATE_PAY_FAIL', 31);
//开店成功
define('STORE_JOIN_STATE_FINAL', 40);

//默认颜色规格id(前台显示图片的规格)
define('DEFAULT_SPEC_COLOR_ID', 1);

/**
 * 接口错误信息提示码
 */
define('ERROR_CODE_ARG', 80000);    //参数错误
define('ERROR_CODE_AUTH', 80001);    //授权错误（如：签名不正确、请求过期等、授权失败）
define('ERROR_CODE_SELLER_AUTH', 8000101);    //商户授权错误（如：签名不正确、请求过期等、授权失败）
define('ERROR_CODE_OPERATE', 80002);    //操作错误（说明：该有的信息，却没有，或者操作失败等)
define('ERROR_CODE_DATABASE', 80004);    //数据库异常错误
define('ERROR_CODE_SYSTEM', 80005);    // 服务器错误

/**
 * 商品图片
 */
define('GOODS_IMAGES_WIDTH', '60,240,360,1280');
define('GOODS_IMAGES_HEIGHT', '60,240,360,12800');
define('GOODS_IMAGES_EXT', '_60,_240,_360,_1280');


/**
 * 订单状态
 */
//已取消
define('ORDER_STATE_CANCEL', 0);
//已产生但未支付
define('ORDER_STATE_NEW', 10);
//已支付
define('ORDER_STATE_PAY', 20);
//已发货
define('ORDER_STATE_SEND', 30);
//配送中
define('ORDER_STATE_SENDING', 35);
//已收货，交易成功
define('ORDER_STATE_SUCCESS', 40);

//待评价，交易成功（模拟出的订单状态）
define('ORDER_STATE_VALUATION', 41);
//已完成，交易成功（模拟出的订单状态）
define('ORDER_STATE_FINISH', 42);
//本土订单删除
define('ORDER_STATE_OFFLINE', 51);


/**
 * 订单自动处理市场 
 */
//未支付关闭订单 单位天
define('ORDER_AUTO_CANCEL_DAY', 3);
//发货后确认收货时间 单位天
define('ORDER_AUTO_RECEIVE_DAY', 15);
//收货后返利时间 单位天
define('ORDER_RECEIVE_REBATE_DAY', 7);


/**
 * 订单退货天数
 */
//买家不收货也没退款时自动完成订单 单位天
define('ORDER_CONFIRM_DAY', 10);
//收货完成后可以申请退款退货 单位天
define('ORDER_REFUND_DAY', 15);
//卖家不处理退款退货申请时按同意处理 单位天
define('ORDER_REFUND_CONFIRM_DAY', 7);
//卖家不处理收货时按弃货处理 单位天
define('ORDER_RETURN_CONFIRM_DAY', 7);
//退货的商品发货多少天以后才可以选择没收到 单位天
define('ORDER_RETURN_DELAY_DAY', 5);




/** 
 * 订单删除状态 
 */
//默认未删除
define('ORDER_DEL_STATE_DEFAULT', 0);
//已删除
define('ORDER_DEL_STATE_DELETE', 1);
//彻底删除
define('ORDER_DEL_STATE_DROP', 2);
//订单结束后可评论时间，15天，60*60*24*15
define('ORDER_EVALUATE_TIME', 1296000);
/**  团购订单状态 */
define('OFFLINE_ORDER_CANCEL_TIME', 3);//单位为天

/** 
 * 返利比率设定 
 */
define('REBATE_BUY_USER', 18);  //买家返佣比率
define('REBATE_FIREST_INVITER', 18);   //一级邀请人返佣比率
define('REBATE_SECOND_INVITER', 18);   // 二级邀请人返佣比率
define('REBATE_PLATFORM', 10);     //平台返佣比率
define('REBATE_TWO_AGENCY', 18);    //旧模式二级代理返佣比率
define('REBATE_OLD_COUNTY_AGENCY', 18);   //旧模式区代理返佣比率
define('REBATE_COUNTY_AGENCY', 18);     //新模式区域代理返佣比率
define('REBATE_CITY_AGENCY', 10);   //新模式市级代理返佣比率
define('REBATE_PROVINCE_AGENCY', 8);      //新模式省级代理返佣比率


define('UPGRADE_FIRST_DISTRIBUTION', 2888);

/**短信息模板 */

define('MOBILE_AUTH_CODE_TEMPLATE', 9619);  //短信验证码发送模板

/**
 * 交易密码设置
 */
define('PAYPWD_LIMIT_COUNT', 3);  // 交易密码限制次数 
define('PAYPWD_LIMIT_TIME', 300); // 交易密码限制时长 单位 秒
define('PAYPWD_LIMIT_TIME_TIP', '5分钟'); // 交易密码限制时长提示