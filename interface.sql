/*
 Navicat Premium Data Transfer

 Source Server         : local
 Source Server Type    : MySQL
 Source Server Version : 50553
 Source Host           : localhost:3306
 Source Schema         : api

 Target Server Type    : MySQL
 Target Server Version : 50553
 File Encoding         : 65001

 Date: 16/07/2019 16:39:07
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for api_info
-- ----------------------------
DROP TABLE IF EXISTS `api_info`;
CREATE TABLE `api_info`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `return_info` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `param_key` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL COMMENT '参数名中用用 || 隔开 ',
  `param_value` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL COMMENT '参数字中用用 || 隔开 ',
  `create_time` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `user_name` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `update_time` int(11) NOT NULL,
  `method` varchar(10) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT 'get' COMMENT '方法名称',
  `parent_id` int(11) NOT NULL,
  `urls` varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `param_type` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `param_is` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `param_default` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `type` smallint(1) NULL DEFAULT 1,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of api_info
-- ----------------------------
INSERT INTO `api_info` VALUES (2, '地址添加', '{\r\n	\"code\":200,\r\n	\"hasmore\":false,\r\n	\"page_total\":1,\r\n	\"datas\":{\r\n		\"favorites_list\":[\r\n			{\r\n				\"goods_id\":\"10573\",\r\n				\"goods_name\":\"u54c6u5566au68a6u6b63u7248u516cu4ed4u6446u4ef6u4f34u6211u540cu884cu673au5668u732bu8f66u8f7du73a9u5177u73a9u5076u84ddu80d6u5b50u793cu7269\",\r\n				\"goods_price\":\"55.11\",\r\n				\"goods_marketprice\":\"600\",\r\n				\"goods_image\":\"2015/10/14/7541_04981392285978786.jpg\",\r\n				\"store_name\":\"u54c6u5566Au68a6\",\r\n				\"fav_id\":\"10573\",\r\n				\"id\":\"10573\",\r\n				\"goods_image_url\":\"http://img2.222.com/shop/store/goods/7541/2015/10/14/7541_04981392285978786.jpg?imageView2/1/w/240/h/240\"\r\n			}\r\n		]\r\n	}\r\n}\r\n\r\nddd\r\nfff\r\naaa', '[\"member_id\",\"key\",\"fav_type\"]', '[\"111\",\"7a3513e3f667149244410b7660a9f847\",\"1\"]', 1447640800, 1, 'admin', 1447742677, 'GET', 1, 'act=member_favorites&op=favorites_list', '[\"int\",\"varchar\",\"number\"]', '[\"\\u662f\",\"\\u662f\",\"\\u662f\"]', NULL, 1);
INSERT INTO `api_info` VALUES (3, '个人地址列表', '{\"code\":200,\"hasmore\":false,\"page_total\":1,\"datas\":{\"favorites_list\":[{\"goods_id\":\"10573\",\"goods_name\":\"\\u54c6\\u5566a\\u68a6\\u6b63\\u7248\\u516c\\u4ed4\\u6446\\u4ef6\\u4f34\\u6211\\u540c\\u884c\\u673a\\u5668\\u732b\\u8f66\\u8f7d\\u73a9\\u5177\\u73a9\\u5076\\u84dd\\u80d6\\u5b50\\u793c\\u7269\",\"goods_price\":\"55.55\",\"goods_marketprice\":\"60\",\"goods_image\":\"2015\\/10\\/14\\/7541_04981392285978786.jpg\",\"store_name\":\"\\u54c6\\u5566A\\u68a6\",\"fav_id\":\"10573\",\"id\":\"10573\",\"goods_image_url\":\"http:\\/\\/img2.222.com\\/shop\\/store\\/goods\\/7541\\/2015\\/10\\/14\\/7541_04981392285978786.jpg?imageView2\\/1\\/w\\/240\\/h\\/240\"}]}}', '[\"member_id\",\"key\",\"fav_type\"]', '[\"111\",\"7a3513e3f667149244410b7660a9f847\",\"1\"]', 1447410995, 3, 'admin', 1447410995, 'POST', 1, 'act=member_favorites&op=favorites_list', '[\"int\",\"varchar\",\"number\"]', '[\"\\u662f\",\"\\u662f\",\"\\u662f\"]', NULL, 1);
INSERT INTO `api_info` VALUES (4, '测试', '{\r\n    \"name\": \"BeJson\",\r\n    \"url\": \"http://www.bejson.com\",\r\n    \"page\": 88,\r\n    \"isNonProfit\": true,\r\n    \"address\": {\r\n        \"street\": \"科技园路.\",\r\n        \"city\": \"江苏苏州\",\r\n        \"country\": \"中国\"\r\n    },\r\n    \"links\": [\r\n        {\r\n            \"name\": \"Google\",\r\n            \"url\": \"http://www.google.com\"\r\n        },\r\n        {\r\n            \"name\": \"Baidu\",\r\n            \"url\": \"http://www.baidu.com\"\r\n        },\r\n        {\r\n            \"name\": \"SoSo\",\r\n            \"url\": \"http://www.SoSo.com\"\r\n        }\r\n    ]\r\n}', '[\"id\",\"yes\"]', '[\"\",\"\"]', 1563172535, 1, 'admin', 1563172535, 'GET', 1, 'act=member&yes=adfsfs', '[\"\",\"\"]', '[\"\\u662f\",\"\\u662f\"]', '[\"\",\"\"]', 1);

-- ----------------------------
-- Table structure for api_menu
-- ----------------------------
DROP TABLE IF EXISTS `api_menu`;
CREATE TABLE `api_menu`  (
  `m_id` int(11) NOT NULL AUTO_INCREMENT,
  `m_name` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `m_controllers_method` varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `m_parent_id` tinyint(4) NULL DEFAULT 0,
  `m_del` tinyint(1) NOT NULL DEFAULT 1,
  PRIMARY KEY (`m_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of api_menu
-- ----------------------------
INSERT INTO `api_menu` VALUES (1, '用户中心', NULL, 0, 1);

-- ----------------------------
-- Table structure for api_user
-- ----------------------------
DROP TABLE IF EXISTS `api_user`;
CREATE TABLE `api_user`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `pass_word` varchar(64) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `create_time` int(11) NOT NULL,
  `level` tinyint(1) NOT NULL DEFAULT 0 COMMENT '权限',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 10 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of api_user
-- ----------------------------
INSERT INTO `api_user` VALUES (1, 'admin', '888888', 1447383184, 1);
INSERT INTO `api_user` VALUES (9, 'solonring', '123456', 1447745894, 2);

SET FOREIGN_KEY_CHECKS = 1;
