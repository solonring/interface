/*
Navicat MySQL Data Transfer

Date: 2016-03-03 11:24:15
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `api_info`
-- ----------------------------
DROP TABLE IF EXISTS `api_info`;
CREATE TABLE `api_info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(200) NOT NULL,
  `return_info` text,
  `param_key` text COMMENT '参数名中用用 || 隔开 ',
  `param_value` text COMMENT '参数字中用用 || 隔开 ',
  `create_time` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `user_name` varchar(30) NOT NULL,
  `update_time` int(11) NOT NULL,
  `method` varchar(10) NOT NULL DEFAULT 'get' COMMENT '方法名称',
  `parent_id` int(11) NOT NULL,
  `urls` varchar(200) DEFAULT NULL,
  `param_type` text,
  `param_is` text,
  `param_default` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=336 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of api_info
-- ----------------------------
INSERT INTO `api_info` VALUES ('2', '地址添加', '{\r\n	\"code\":200,\r\n	\"hasmore\":false,\r\n	\"page_total\":1,\r\n	\"datas\":{\r\n		\"favorites_list\":[\r\n			{\r\n				\"goods_id\":\"10573\",\r\n				\"goods_name\":\"u54c6u5566au68a6u6b63u7248u516cu4ed4u6446u4ef6u4f34u6211u540cu884cu673au5668u732bu8f66u8f7du73a9u5177u73a9u5076u84ddu80d6u5b50u793cu7269\",\r\n				\"goods_price\":\"55.11\",\r\n				\"goods_marketprice\":\"600\",\r\n				\"goods_image\":\"2015/10/14/7541_04981392285978786.jpg\",\r\n				\"store_name\":\"u54c6u5566Au68a6\",\r\n				\"fav_id\":\"10573\",\r\n				\"id\":\"10573\",\r\n				\"goods_image_url\":\"http://img2.222.com/shop/store/goods/7541/2015/10/14/7541_04981392285978786.jpg?imageView2/1/w/240/h/240\"\r\n			}\r\n		]\r\n	}\r\n}\r\n\r\nddd\r\nfff\r\naaa', '[\"member_id\",\"key\",\"fav_type\"]', '[\"111\",\"7a3513e3f667149244410b7660a9f847\",\"1\"]', '1447640800', '1', 'admin', '1447742677', 'GET', '1', 'act=member_favorites&op=favorites_list', '[\"int\",\"varchar\",\"number\"]', '[\"\\u662f\",\"\\u662f\",\"\\u662f\"]', null);
INSERT INTO `api_info` VALUES ('3', '个人地址列表', '{\"code\":200,\"hasmore\":false,\"page_total\":1,\"datas\":{\"favorites_list\":[{\"goods_id\":\"10573\",\"goods_name\":\"\\u54c6\\u5566a\\u68a6\\u6b63\\u7248\\u516c\\u4ed4\\u6446\\u4ef6\\u4f34\\u6211\\u540c\\u884c\\u673a\\u5668\\u732b\\u8f66\\u8f7d\\u73a9\\u5177\\u73a9\\u5076\\u84dd\\u80d6\\u5b50\\u793c\\u7269\",\"goods_price\":\"55.55\",\"goods_marketprice\":\"60\",\"goods_image\":\"2015\\/10\\/14\\/7541_04981392285978786.jpg\",\"store_name\":\"\\u54c6\\u5566A\\u68a6\",\"fav_id\":\"10573\",\"id\":\"10573\",\"goods_image_url\":\"http:\\/\\/img2.222.com\\/shop\\/store\\/goods\\/7541\\/2015\\/10\\/14\\/7541_04981392285978786.jpg?imageView2\\/1\\/w\\/240\\/h\\/240\"}]}}', '[\"member_id\",\"key\",\"fav_type\"]', '[\"111\",\"7a3513e3f667149244410b7660a9f847\",\"1\"]', '1447410995', '3', 'admin', '1447410995', 'POST', '1', 'act=member_favorites&op=favorites_list', '[\"int\",\"varchar\",\"number\"]', '[\"\\u662f\",\"\\u662f\",\"\\u662f\"]', null);

-- ----------------------------
-- Table structure for `api_menu`
-- ----------------------------
DROP TABLE IF EXISTS `api_menu`;
CREATE TABLE `api_menu` (
  `m_id` int(11) NOT NULL AUTO_INCREMENT,
  `m_name` varchar(30) NOT NULL,
  `m_controllers_method` varchar(200) DEFAULT NULL,
  `m_parent_id` tinyint(4) DEFAULT '0',
  `m_del` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`m_id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of api_menu
-- ----------------------------
INSERT INTO `api_menu` VALUES ('1', '个人中心', '0', '0', '0');
INSERT INTO `api_menu` VALUES ('2', '日志类接口', null, '0', '0');
INSERT INTO `api_menu` VALUES ('4', '首页、商城、商家', null, '0', '0');
INSERT INTO `api_menu` VALUES ('7', '商户中心', null, '0', '0');
INSERT INTO `api_menu` VALUES ('8', '用户中心', null, '0', '1');
INSERT INTO `api_menu` VALUES ('9', '发现', null, '0', '1');
INSERT INTO `api_menu` VALUES ('14', '极光推送消息', null, '0', '1');
INSERT INTO `api_menu` VALUES ('15', '首页、商城、商家', null, '0', '1');
INSERT INTO `api_menu` VALUES ('16', '商户中心', null, '0', '1');
INSERT INTO `api_menu` VALUES ('17', '用户中心系统消息', null, '0', '1');
INSERT INTO `api_menu` VALUES ('18', '跑腿邦_用户端', null, '0', '1');
INSERT INTO `api_menu` VALUES ('19', '跑腿邦_商户端', null, '0', '1');
INSERT INTO `api_menu` VALUES ('20', '后台验证接口', null, '0', '1');
INSERT INTO `api_menu` VALUES ('21', '环信IM', null, '0', '1');
INSERT INTO `api_menu` VALUES ('22', '商城旧接口', null, '0', '1');

-- ----------------------------
-- Table structure for `api_user`
-- ----------------------------
DROP TABLE IF EXISTS `api_user`;
CREATE TABLE `api_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(30) NOT NULL,
  `pass_word` varchar(64) NOT NULL,
  `create_time` int(11) NOT NULL,
  `level` tinyint(1) NOT NULL DEFAULT '0' COMMENT '权限',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of api_user
-- ----------------------------
INSERT INTO `api_user` VALUES ('1', 'admin', '888888', '1447383184', '1');
INSERT INTO `api_user` VALUES ('9', 'solonring', '123456', '1447745894', '2');
