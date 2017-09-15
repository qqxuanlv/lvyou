# Host: localhost  (Version: 5.5.53)
# Date: 2017-06-15 16:51:21
# Generator: MySQL-Front 5.3  (Build 4.234)

/*!40101 SET NAMES utf8 */;

#
# Structure for table "dd"
#

CREATE TABLE `dd` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `uname` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '' COMMENT '订单用户名',
  `time` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '' COMMENT '订单时间',
  `count` int(11) NOT NULL DEFAULT '1' COMMENT '订单人数',
  `price` int(11) NOT NULL DEFAULT '0' COMMENT '订单价格',
  `ddbh` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '' COMMENT '订单编号',
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

#
# Data for table "dd"
#


#
# Structure for table "img"
#

CREATE TABLE `img` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `key` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '路线key',
  `path` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '' COMMENT '图片路径',
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

#
# Data for table "img"
#


#
# Structure for table "luxian"
#

CREATE TABLE `luxian` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `key` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '' COMMENT '产品标识',
  `title` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '' COMMENT '产品标题',
  `title2` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '' COMMENT '副标题',
  `price` int(11) NOT NULL DEFAULT '0' COMMENT '产品单价',
  `count` int(11) NOT NULL DEFAULT '0' COMMENT '产品剩余',
  `img` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '' COMMENT '图片路径',
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

#
# Data for table "luxian"
#

INSERT INTO `luxian` VALUES (1,'sss','日本大阪+京都+箱根+东京7日6晚跟团游(4钻)','·7月升级五星 2天自由 双园自选 城堡温泉',6950,111,'../../img/list/p1.jpg'),(2,'FDDDD','日本大阪+京都+箱根+富士山+东京8日7晚半自助游(4钻)·','【新干线】和服体验 露天温泉 岚山小火车',16497,2,'../../img/list/p2.jpg'),(3,'EEEEE','北海道5日4晚私家团(4钻)','喜乐乐度假②晚·蜜月亲子 神威岬 八音盒堂\r\n喜乐乐度假②晚·蜜月亲子 神威岬 八音盒堂\r\n喜乐乐度假②晚·蜜月亲子 神威岬 八音盒堂\r\n喜乐乐度假②晚·蜜月亲子 神威岬 八音盒堂\r\n喜乐乐度假②晚·蜜月亲子 神威岬 八音盒堂',13912,3,'../../img/list/p3.jpg'),(4,'AAAAA','日本东京+富士山+箱根5日4晚半自助游(4钻)','【私家团】富士薰衣草·箱根温泉·晴空塔',11123,4,'../../img/list/p4.jpg');

#
# Structure for table "lxmx"
#

CREATE TABLE `lxmx` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `key` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '' COMMENT '订单编号',
  `uname` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '' COMMENT '用户名',
  `price` int(11) NOT NULL DEFAULT '0' COMMENT '订单价格',
  `count` int(11) NOT NULL DEFAULT '0' COMMENT '订单人数',
  `timer` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' COMMENT '订单日期',
  `title` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '' COMMENT '产品名称',
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

#
# Data for table "lxmx"
#

INSERT INTO `lxmx` VALUES (1,'3232','',0,0,'0000-00-00 00:00:00','');

#
# Structure for table "user"
#

CREATE TABLE `user` (
  `Id` int(11) NOT NULL AUTO_INCREMENT COMMENT '1900',
  `uname` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `phone` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `ICard` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `hangye` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `upass` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  PRIMARY KEY (`Id`),
  KEY `uname` (`uname`)
) ENGINE=MyISAM AUTO_INCREMENT=1913 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

#
# Data for table "user"
#

INSERT INTO `user` VALUES (1912,'admin','admin','admin','admin','admin');
