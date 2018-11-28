-- phpMyAdmin SQL Dump
-- version phpStudy 2014
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2018 �?11 �?20 �?08:03
-- 服务器版本: 5.5.47
-- PHP 版本: 7.0.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `weila`
--

-- --------------------------------------------------------

--
-- 表的结构 `wl_active`
--

CREATE TABLE IF NOT EXISTS `wl_active` (
  `aid` int(10) NOT NULL AUTO_INCREMENT COMMENT '特惠ID',
  `aimage` varchar(255) NOT NULL COMMENT '照片',
  `acontent` text NOT NULL COMMENT '内容',
  `atime` varchar(100) NOT NULL COMMENT '时间',
  `atitle` varchar(100) NOT NULL COMMENT '标题',
  `asort` int(10) NOT NULL COMMENT '排序',
  PRIMARY KEY (`aid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='特惠信息表' AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `wl_active`
--

INSERT INTO `wl_active` (`aid`, `aimage`, `acontent`, `atime`, `atitle`, `asort`) VALUES
(1, '/Public/editor/attached/image/20181030/20181030065722_34082.png', '曲蔚然儿童节虽然有空调', '1541381646', ' 只有旅行照片', 1);

-- --------------------------------------------------------

--
-- 表的结构 `wl_admin`
--

CREATE TABLE IF NOT EXISTS `wl_admin` (
  `aid` int(10) NOT NULL AUTO_INCREMENT COMMENT '管理员ID',
  `aname` varchar(100) NOT NULL COMMENT '管理员名称',
  `apwd` varchar(255) NOT NULL COMMENT '管理员密码',
  `aip` varchar(100) NOT NULL COMMENT '登录ip',
  `asort` int(10) NOT NULL COMMENT '排序',
  PRIMARY KEY (`aid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='管理员信息表' AUTO_INCREMENT=4 ;

--
-- 转存表中的数据 `wl_admin`
--

INSERT INTO `wl_admin` (`aid`, `aname`, `apwd`, `aip`, `asort`) VALUES
(1, 'admin', 'e10adc3949ba59abbe56e057f20f883e', '127.0.0.1', 0),
(3, 'sun', 'a66abb5684c45962d887564f08346e8d', '127.0.0.1', 0);

-- --------------------------------------------------------

--
-- 表的结构 `wl_admin_config`
--

CREATE TABLE IF NOT EXISTS `wl_admin_config` (
  `ac_id` int(10) NOT NULL AUTO_INCREMENT COMMENT '记录ID',
  `ac_name` varchar(100) NOT NULL COMMENT '管理员名称',
  `ac_ip` varchar(100) NOT NULL COMMENT '登录ip',
  `ac_time` varchar(100) NOT NULL COMMENT '登录时间',
  PRIMARY KEY (`ac_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='记录管理员登录信息表' AUTO_INCREMENT=18 ;

--
-- 转存表中的数据 `wl_admin_config`
--

INSERT INTO `wl_admin_config` (`ac_id`, `ac_name`, `ac_ip`, `ac_time`) VALUES
(1, 'admin', '127.0.0.1', '1540865932'),
(2, 'admin', '127.0.0.1', '1540866111'),
(3, 'sun', '127.0.0.1', '1540866721'),
(4, 'sun', '127.0.0.1', '1540948803'),
(5, 'sun', '127.0.0.1', '1540951298'),
(6, 'sun', '127.0.0.1', '1540962195'),
(7, 'sun', '127.0.0.1', '1540973712'),
(8, 'sun', '127.0.0.1', '1541035268'),
(9, 'sun', '127.0.0.1', '1541121491'),
(10, 'sun', '127.0.0.1', '1541146717'),
(11, 'sun', '127.0.0.1', '1541381169'),
(12, 'sun', '127.0.0.1', '1541469771'),
(13, 'admin', '192.168.0.107', '1541741656'),
(14, 'admin', '127.0.0.1', '1541750327'),
(15, 'admin', '127.0.0.1', '1541987612'),
(16, 'admin', '127.0.0.1', '1542605904'),
(17, 'admin', '127.0.0.1', '1542695357');

-- --------------------------------------------------------

--
-- 表的结构 `wl_background_image`
--

CREATE TABLE IF NOT EXISTS `wl_background_image` (
  `bi_id` int(10) NOT NULL AUTO_INCREMENT COMMENT '背景图片ID',
  `bi_image` varchar(255) NOT NULL COMMENT '背景图片',
  `nav_id` int(10) NOT NULL COMMENT '导航ID',
  `bi_sort` int(10) NOT NULL COMMENT '排序',
  PRIMARY KEY (`bi_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='背景图片信息表' AUTO_INCREMENT=7 ;

--
-- 转存表中的数据 `wl_background_image`
--

INSERT INTO `wl_background_image` (`bi_id`, `bi_image`, `nav_id`, `bi_sort`) VALUES
(1, '/Public/editor/attached/image/20181031/20181031060035_53390.png', 2, 0),
(2, '/Public/editor/attached/image/20181031/20181031061531_96124.png', 2, 0),
(3, '/Public/editor/attached/image/20181031/20181031073052_68444.jpg', 0, 0),
(4, '/Public/editor/attached/image/20181101/20181101013549_25257.png', 0, 0),
(5, '/Public/editor/attached/image/20181101/20181101013607_22392.png', 0, 0),
(6, '/Public/editor/attached/image/20181101/20181101013631_73731.png', 0, 0);

-- --------------------------------------------------------

--
-- 表的结构 `wl_basedata`
--

CREATE TABLE IF NOT EXISTS `wl_basedata` (
  `id` int(10) NOT NULL AUTO_INCREMENT COMMENT '基本信息ID',
  `title1` varchar(255) NOT NULL COMMENT '标题一',
  `title2` varchar(255) NOT NULL COMMENT '标题二',
  `title3` varchar(255) NOT NULL COMMENT '标题三',
  `title4` varchar(255) NOT NULL COMMENT '标题四',
  `title5` text NOT NULL COMMENT '标题五',
  `sort` int(11) NOT NULL COMMENT '排序',
  `nav_id` int(10) NOT NULL COMMENT '导航ID',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='基本信息表' AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `wl_basedata`
--

INSERT INTO `wl_basedata` (`id`, `title1`, `title2`, `title3`, `title4`, `title5`, `sort`, `nav_id`) VALUES
(1, '薇拉公馆婚纱摄影', '500+', 'Filming', 'locations', 'We are committed to simplicity and happiness, to record love with truth, to capture happiness with。attitude, to be free to frame, light and scene, to use our exquisite documentary to cherish your exclusive moments.2&nbsp; &nbsp; ewqretry', 0, 2);

-- --------------------------------------------------------

--
-- 表的结构 `wl_case`
--

CREATE TABLE IF NOT EXISTS `wl_case` (
  `id` int(10) NOT NULL AUTO_INCREMENT COMMENT '样片ID',
  `image` varchar(255) NOT NULL COMMENT '客样图片',
  `title` varchar(100) NOT NULL COMMENT '客样标题',
  `author` varchar(100) NOT NULL COMMENT '作者',
  `sort` int(10) NOT NULL COMMENT '排序',
  `imagetitle` varchar(100) NOT NULL COMMENT '图片标题',
  `c_content` text NOT NULL COMMENT '详细介绍',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='客样信息表' AUTO_INCREMENT=4 ;

--
-- 转存表中的数据 `wl_case`
--

INSERT INTO `wl_case` (`id`, `image`, `title`, `author`, `sort`, `imagetitle`, `c_content`) VALUES
(1, '/Public/editor/attached/image/20181030/20181030091350_48218.jpg', '三亚湾 - 繁花眷美 ', '维拉旅行婚纱摄影', 0, 'travel the world', '请问我哥他忽然已截图可以了'),
(2, '/Public/editor/attached/image/20181030/20181030060530_71913.png', '三亚湾 - 繁花眷美 ', '维拉旅行婚纱摄影', 0, 'travel the world', '请问YHAEJTRSYTKDULYF'),
(3, '/Public/editor/attached/image/20181116/20181116091650_13545.png', 'qewtrytrjy', 'grehtrjyt', 0, 'fgrehrhm', 'grthn');

-- --------------------------------------------------------

--
-- 表的结构 `wl_company_introduce`
--

CREATE TABLE IF NOT EXISTS `wl_company_introduce` (
  `ci_id` int(10) NOT NULL AUTO_INCREMENT COMMENT '简介ID',
  `ci_name` varchar(100) NOT NULL COMMENT '公司名称',
  `ci_logo` varchar(255) NOT NULL COMMENT 'logo图片',
  `ci_content` text NOT NULL COMMENT '公司简介',
  `nav_id` int(10) NOT NULL COMMENT '导航信息',
  `ci_logotitle` varchar(100) NOT NULL COMMENT 'logo名称',
  `ci_url` varchar(255) NOT NULL COMMENT '官网地址',
  `ci_logotitle_english` varchar(255) NOT NULL COMMENT 'logo英文名称',
  `ci_content_english` text NOT NULL COMMENT '英文简介',
  `ci_year` varchar(50) NOT NULL COMMENT '周年',
  PRIMARY KEY (`ci_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='公司简介信息表' AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `wl_company_introduce`
--

INSERT INTO `wl_company_introduce` (`ci_id`, `ci_name`, `ci_logo`, `ci_content`, `nav_id`, `ci_logotitle`, `ci_url`, `ci_logotitle_english`, `ci_content_english`, `ci_year`) VALUES
(1, ' 维拉旅行婚纱摄影', '/Public/editor/attached/image/20181030/20181030052146_11172.png', '咸阳薇拉婚纱摄影服务中心咸阳薇拉婚纱摄影服务中心咸阳薇拉婚纱摄影服务中心咸阳薇拉婚纱摄影服务中心咸阳薇拉婚纱摄影服务中心咸阳薇拉婚纱摄影服务中心咸阳薇拉婚纱摄影服务中心咸阳薇拉婚纱摄影服务中心咸阳薇拉婚纱摄影服务中心咸阳薇拉婚纱摄影服务中心<br />', 2, '薇拉公馆', '1243565yu', 'Vera Mansion', '<p>\r\n	rhtqrtwehtrjytu,\r\n</p>', '5');

-- --------------------------------------------------------

--
-- 表的结构 `wl_custom_image`
--

CREATE TABLE IF NOT EXISTS `wl_custom_image` (
  `ci_id` int(10) NOT NULL AUTO_INCREMENT COMMENT '照片ID',
  `ci_name` varchar(255) NOT NULL COMMENT '照片名称',
  `ci_sort` int(10) NOT NULL COMMENT '排序',
  `cw_id` int(10) NOT NULL COMMENT '用户ID',
  PRIMARY KEY (`ci_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='客户照片信息表' AUTO_INCREMENT=6 ;

--
-- 转存表中的数据 `wl_custom_image`
--

INSERT INTO `wl_custom_image` (`ci_id`, `ci_name`, `ci_sort`, `cw_id`) VALUES
(1, '/Public/editor/attached/image/20181101/20181101070331_20527.png', 0, 1),
(2, '/Public/editor/attached/image/20181101/20181101070348_65961.png', 0, 1),
(3, '/Public/editor/attached/image/20181101/20181101085048_71251.png', 0, 2),
(4, '/Public/editor/attached/image/20181101/20181101085105_64146.png', 0, 2),
(5, '/Public/editor/attached/image/20181101/20181101085204_88132.png', 0, 3);

-- --------------------------------------------------------

--
-- 表的结构 `wl_custom_word`
--

CREATE TABLE IF NOT EXISTS `wl_custom_word` (
  `cw_id` int(10) NOT NULL AUTO_INCREMENT COMMENT '客户评论id',
  `cw_content` text NOT NULL COMMENT '客户评论内容',
  `cw_time` varchar(100) NOT NULL COMMENT '评论时间',
  `cw_sort` int(10) NOT NULL COMMENT '排序',
  `cwc_id` int(11) NOT NULL COMMENT '客户评论分类ID',
  `cw_name` varchar(100) NOT NULL COMMENT '评论者名称',
  `cw_image` varchar(255) NOT NULL COMMENT '用户头像',
  `cw_word_rank` int(10) NOT NULL COMMENT '评论等级',
  `cw_flag` int(10) NOT NULL COMMENT '0-普通用户，1-VIP用户',
  `cw_user_rank` varchar(50) NOT NULL COMMENT '用户等级',
  `cw_kind` varchar(100) NOT NULL COMMENT '手机类型',
  PRIMARY KEY (`cw_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='客户评论信息表' AUTO_INCREMENT=14 ;

--
-- 转存表中的数据 `wl_custom_word`
--

INSERT INTO `wl_custom_word` (`cw_id`, `cw_content`, `cw_time`, `cw_sort`, `cwc_id`, `cw_name`, `cw_image`, `cw_word_rank`, `cw_flag`, `cw_user_rank`, `cw_kind`) VALUES
(1, '汪峰安慰过生日好多个', '1541063441', 0, 2, '孙泽敏', '/Public/editor/attached/image/20181101/20181101075241_85912.png', 5, 0, 'Lv4', 'oppoA59m'),
(2, '完成VB儿童内容', '1541063426', 0, 3, '红红', '/Public/editor/attached/image/20181101/20181101085012_51410.png', 3, 1, 'Lv5', '华为'),
(3, '生日当天发一个叫，好', '1541063406', 0, 4, '兰兰', '/Public/editor/attached/image/20181101/20181101085133_40797.png', 6, 1, 'Lv2', 'vivox9'),
(4, 'berightberightberightberightberight', '1541469874', 0, 2, 'beright', '/Public/editor/attached/image/20181106/20181106020403_73739.png', 2, 0, '', '华为'),
(5, 'berightberightberightberightberightberightberightberightberight', '1541469894', 9, 2, 'beright2017', '/Public/editor/attached/image/20181106/20181106020446_46864.png', 4, 0, '', '华为'),
(6, 'berightberightberight', '1541469912', 231, 2, 'beright2018', '/Public/editor/attached/image/20181106/20181106020505_88274.png', 1, 0, '', '321'),
(7, 'berightberightberight', '1541469981', 0, 3, 'beright111', '/Public/editor/attached/image/20181106/20181106020616_33274.png', 3, 0, '', ''),
(8, 'berightberightberight', '1541469994', 0, 3, 'beright222', '/Public/editor/attached/image/20181106/20181106020632_77623.png', 1, 0, '', ''),
(9, 'berightberightberight', '1541470006', 0, 3, 'beright333', '/Public/editor/attached/image/20181106/20181106020644_30871.png', 1, 0, '', ''),
(10, 'berightberightberight', '1541470024', 0, 4, 'beright555', '/Public/editor/attached/image/20181106/20181106020702_62533.png', 1, 0, '', ''),
(11, 'berightberightberight', '1541470036', 0, 4, 'beright666', '/Public/editor/attached/image/20181106/20181106020714_14614.png', 1, 0, '', ''),
(12, 'berightberightberight', '1541470049', 0, 4, 'beright999', '/Public/editor/attached/image/20181106/20181106020727_31577.png', 1, 0, '', ''),
(13, 'rggbvdegrgrtftrf', '1541741683', 0, 4, '999', '/Public/editor/attached/image/20181109/20181109053435_74360.png', 1, 0, '', '');

-- --------------------------------------------------------

--
-- 表的结构 `wl_custom_word_classify`
--

CREATE TABLE IF NOT EXISTS `wl_custom_word_classify` (
  `cwc_id` int(10) NOT NULL AUTO_INCREMENT COMMENT '客户评论分类ID',
  `cwc_name` varchar(100) NOT NULL COMMENT '分类名称',
  `cwc_sort` int(10) NOT NULL COMMENT '排序',
  PRIMARY KEY (`cwc_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='客户评论分类信息表' AUTO_INCREMENT=5 ;

--
-- 转存表中的数据 `wl_custom_word_classify`
--

INSERT INTO `wl_custom_word_classify` (`cwc_id`, `cwc_name`, `cwc_sort`) VALUES
(2, '微信平台', 0),
(3, '大众平台', 0),
(4, '美团平台', 0);

-- --------------------------------------------------------

--
-- 表的结构 `wl_footer`
--

CREATE TABLE IF NOT EXISTS `wl_footer` (
  `id` int(10) NOT NULL AUTO_INCREMENT COMMENT '底部ID',
  `address` varchar(255) NOT NULL COMMENT '地址',
  `telephone` varchar(50) NOT NULL COMMENT '热线电话',
  `wx_erweima` varchar(255) NOT NULL COMMENT '微信二维码',
  `wb_erweima` varchar(255) NOT NULL COMMENT '微博二维码',
  `copyright` varchar(100) NOT NULL COMMENT '版权',
  `record` varchar(100) NOT NULL COMMENT '备案号',
  `copyright_english` varchar(255) NOT NULL COMMENT '版权英文名称',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='底部信息表' AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `wl_footer`
--

INSERT INTO `wl_footer` (`id`, `address`, `telephone`, `wx_erweima`, `wb_erweima`, `copyright`, `record`, `copyright_english`) VALUES
(1, '陕西省咸阳市渭城区乐育南路', '123456123', '/Public/editor/attached/image/20181030/20181030035135_66370.png', '/Public/editor/attached/image/20181030/20181030035144_73597.png', '版权所有2018咸阳薇拉婚纱摄影服务中心', '陕ICP备12007852号-2', 'Copyright 2018 Xianyang Weila Wedding Photography Service Center');

-- --------------------------------------------------------

--
-- 表的结构 `wl_footer_nav`
--

CREATE TABLE IF NOT EXISTS `wl_footer_nav` (
  `fn_id` int(10) NOT NULL AUTO_INCREMENT COMMENT '底部导航ID',
  `fn_nav_name` varchar(255) NOT NULL COMMENT '底部导航名称',
  `fn_url` varchar(255) NOT NULL COMMENT '底部导航链接',
  `fn_sort` int(10) NOT NULL COMMENT '排序',
  `fn_fid` int(11) NOT NULL COMMENT '父级导航ID',
  `fn_english_name` varchar(255) NOT NULL COMMENT '导航英文名称',
  PRIMARY KEY (`fn_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='底部导航信息表' AUTO_INCREMENT=10 ;

--
-- 转存表中的数据 `wl_footer_nav`
--

INSERT INTO `wl_footer_nav` (`fn_id`, `fn_nav_name`, `fn_url`, `fn_sort`, `fn_fid`, `fn_english_name`) VALUES
(1, '薇拉公馆', '/index.php/Home/Index/index', 0, 0, 'Vera Mansion'),
(2, '客样欣赏', '/index.php/Home/Index/keyangxinshang', 0, 1, ''),
(3, '最新特惠', '/index.php/Home/Index/zuixintehui', 0, 1, ''),
(4, '精彩花絮', '/index.php/Home/Index/jingcaihuaxu', 0, 1, ''),
(5, '客户评价', '/index.php/Home/Index/kehupingjia', 0, 1, ''),
(6, '作品展示', '', 0, 0, 'Gallery'),
(7, '内景作品', '', 0, 6, ''),
(8, '外景作品', '', 0, 6, ''),
(9, '关于我们', '/index.php/Home/Index/aboutUs', 0, 0, 'About');

-- --------------------------------------------------------

--
-- 表的结构 `wl_home_base`
--

CREATE TABLE IF NOT EXISTS `wl_home_base` (
  `id` int(10) NOT NULL AUTO_INCREMENT COMMENT '基础信息ID',
  `title1` varchar(50) NOT NULL COMMENT '标题1',
  `title2` varchar(50) NOT NULL COMMENT '标题2',
  `title3` varchar(50) NOT NULL COMMENT '标题3',
  `sort` int(10) NOT NULL COMMENT '排序',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='首页基础信息' AUTO_INCREMENT=5 ;

--
-- 转存表中的数据 `wl_home_base`
--

INSERT INTO `wl_home_base` (`id`, `title1`, `title2`, `title3`, `sort`) VALUES
(1, '18', 'th', '周年', 0),
(2, '134256', '', '客户', 0),
(3, '20', '+', '位置基地', 0),
(4, '8', '', '内部基地', 0);

-- --------------------------------------------------------

--
-- 表的结构 `wl_home_news`
--

CREATE TABLE IF NOT EXISTS `wl_home_news` (
  `hn_id` int(10) NOT NULL AUTO_INCREMENT COMMENT '新闻ID',
  `hn_title` varchar(100) NOT NULL COMMENT '标题',
  `hn_short_title1` varchar(100) NOT NULL COMMENT '小标题1',
  `hn_short_title2` varchar(100) NOT NULL COMMENT '小标题2',
  `hn_short_title3` varchar(100) NOT NULL COMMENT '小标题3',
  `hn_sort` int(10) NOT NULL COMMENT '排序',
  `hn_image` varchar(255) NOT NULL COMMENT '图片',
  PRIMARY KEY (`hn_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='首页新闻信息表' AUTO_INCREMENT=3 ;

--
-- 转存表中的数据 `wl_home_news`
--

INSERT INTO `wl_home_news` (`hn_id`, `hn_title`, `hn_short_title1`, `hn_short_title2`, `hn_short_title3`, `hn_sort`, `hn_image`) VALUES
(1, '秋冬上新重新定义', '秋冬新品上市', '量大潮流风格', '重新定义婚照新方向', 0, '/Public/editor/attached/image/20181101/20181101054734_39586.png'),
(2, '哈哈哈哈', '啦啦啦', '', '', 0, '/Public/editor/attached/image/20181101/20181101060437_24883.png');

-- --------------------------------------------------------

--
-- 表的结构 `wl_home_url`
--

CREATE TABLE IF NOT EXISTS `wl_home_url` (
  `hu_id` int(10) NOT NULL AUTO_INCREMENT COMMENT '公众链接ID',
  `hu_wburl` varchar(255) NOT NULL COMMENT '微博链接',
  `hu_gifurl` varchar(255) NOT NULL COMMENT '礼物链接',
  `hu_wxerweima` varchar(255) NOT NULL COMMENT '微信二维码',
  `hu_telephone` varchar(255) NOT NULL COMMENT '在线咨询链接',
  `hu_producturl` varchar(255) NOT NULL COMMENT '最新作品链接',
  PRIMARY KEY (`hu_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='首页公众链接' AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `wl_home_url`
--

INSERT INTO `wl_home_url` (`hu_id`, `hu_wburl`, `hu_gifurl`, `hu_wxerweima`, `hu_telephone`, `hu_producturl`) VALUES
(1, 'https://weibo.com/2875256714/profile?topnav=1&amp;wvr=6', 'https://jinshuju.net/f/DnxTHN', '/Public/editor/attached/image/20181109/20181109083020_65887.jpg', 'http://tb.53kf.com/webCompany.php?arg=10084728&amp;style=1]', '');

-- --------------------------------------------------------

--
-- 表的结构 `wl_jingcai`
--

CREATE TABLE IF NOT EXISTS `wl_jingcai` (
  `jc_id` int(10) NOT NULL AUTO_INCREMENT COMMENT '首页精彩花絮ID',
  `jc_url` varchar(255) NOT NULL COMMENT '链接',
  `jc_sort` int(10) NOT NULL COMMENT '排序',
  `jc_title` varchar(255) NOT NULL COMMENT '标题',
  `jc_title_english` varchar(255) NOT NULL COMMENT '英文标题',
  PRIMARY KEY (`jc_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='首页精彩花絮信息表' AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `wl_jingcai`
--

INSERT INTO `wl_jingcai` (`jc_id`, `jc_url`, `jc_sort`, `jc_title`, `jc_title_english`) VALUES
(1, 'http://cloud.video.taobao.com//play/u/1910949384/p/2/e/6/t/1/50076176739.mp4', 0, '我们拍的不只是婚纱照,还有微电影,为您拍一段故事,记录穿着婚纱的旅行', 'We are not only taking wedding photos, but also micro-movies, taking a story for you and recording the trip in a wedding dress.');

-- --------------------------------------------------------

--
-- 表的结构 `wl_lunbo`
--

CREATE TABLE IF NOT EXISTS `wl_lunbo` (
  `lb_id` int(10) NOT NULL AUTO_INCREMENT COMMENT '轮播ID',
  `lb_image` varchar(255) NOT NULL COMMENT '轮播图片',
  `lb_sort` int(10) NOT NULL COMMENT '排序',
  `nav_id` int(10) NOT NULL COMMENT '导航ID',
  `lb_title` varchar(100) NOT NULL COMMENT '轮播图片标题',
  `lb_time` varchar(100) NOT NULL COMMENT '发表时间',
  PRIMARY KEY (`lb_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='轮播信息表' AUTO_INCREMENT=12 ;

--
-- 转存表中的数据 `wl_lunbo`
--

INSERT INTO `wl_lunbo` (`lb_id`, `lb_image`, `lb_sort`, `nav_id`, `lb_title`, `lb_time`) VALUES
(2, '/Public/editor/attached/image/20181030/20181030042928_92987.png', 0, 0, '城市旅拍1', '1540889867'),
(3, '/Public/editor/attached/image/20181030/20181030050007_56812.png', 0, 0, '城市旅拍2', '1540889880'),
(4, '/Public/editor/attached/image/20181030/20181030050023_91315.png', 0, 0, '城市旅拍3', '1540889888'),
(5, '/Public/editor/attached/image/20181030/20181030090151_53692.png', 0, 0, '城市旅拍4', '1540890112'),
(6, '/Public/editor/attached/image/20181031/20181031013316_72742.png', 0, 3, '城市旅拍1', '1540949602'),
(7, '/Public/editor/attached/image/20181031/20181031013340_66593.png', 0, 3, '城市旅拍2', '1540949626'),
(8, '/Public/editor/attached/image/20181031/20181031020853_81611.png', 0, 2, '城市旅拍1', '1540951734'),
(9, '/Public/editor/attached/image/20181031/20181031020908_69760.png', 0, 4, '城市旅拍1', '1540951756'),
(10, '/Public/editor/attached/image/20181031/20181031020940_48811.png', 0, 5, '城市旅拍1', '1540951787'),
(11, '/Public/editor/attached/image/20181031/20181031021006_93765.png', 0, 6, '城市旅拍1', '1540951810');

-- --------------------------------------------------------

--
-- 表的结构 `wl_nav`
--

CREATE TABLE IF NOT EXISTS `wl_nav` (
  `nav_id` int(10) NOT NULL AUTO_INCREMENT COMMENT '导航ID',
  `nav_name` varchar(100) NOT NULL COMMENT '导航名称',
  `nav_english_name` varchar(100) NOT NULL COMMENT '导航英文名称',
  `fid` int(10) NOT NULL COMMENT '父级导航ID',
  `nav_sort` int(10) NOT NULL COMMENT '排序',
  `nav_url` varchar(255) NOT NULL COMMENT '导航链接',
  PRIMARY KEY (`nav_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='导航信息表' AUTO_INCREMENT=8 ;

--
-- 转存表中的数据 `wl_nav`
--

INSERT INTO `wl_nav` (`nav_id`, `nav_name`, `nav_english_name`, `fid`, `nav_sort`, `nav_url`) VALUES
(2, '关于薇拉', 'ABOUT VELA', 0, 0, '/index.php/Home/Index/aboutUs'),
(3, '客样欣赏', 'GUEST SHOW', 0, 0, '/index.php/Home/Index/keyangxinshang'),
(4, '精彩花絮', 'WONDERFUL TIDBITS', 0, 0, '/index.php/Home/Index/jingcaihuaxu'),
(5, '最新特惠', 'SPECIAL OFFER', 0, 0, '/index.php/Home/Index/zuixintehui'),
(6, '客户评价', 'CUSTOMER REVIEWS', 0, 0, '/index.php/Home/Index/kehupingjia');

-- --------------------------------------------------------

--
-- 表的结构 `wl_room_scenery`
--

CREATE TABLE IF NOT EXISTS `wl_room_scenery` (
  `rs_id` int(10) NOT NULL AUTO_INCREMENT COMMENT '内景内容ID',
  `rs_image` varchar(255) NOT NULL COMMENT '内景图片',
  `rs_name` varchar(100) NOT NULL COMMENT '内景名称',
  `rsc_id` int(10) NOT NULL COMMENT '内景分类id',
  `rs_score` float NOT NULL COMMENT '内景分数',
  `rs_introduce` text NOT NULL COMMENT '内景分类',
  `rs_sort` int(10) NOT NULL COMMENT '排序',
  `rs_blacktitle1` varchar(255) NOT NULL COMMENT '标题',
  `rs_blackauthor` varchar(255) NOT NULL COMMENT '作者',
  `rs_flag` int(10) NOT NULL COMMENT '0-不推荐到首页吧，1-推荐到首页',
  PRIMARY KEY (`rs_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='内景内容管理' AUTO_INCREMENT=5 ;

--
-- 转存表中的数据 `wl_room_scenery`
--

INSERT INTO `wl_room_scenery` (`rs_id`, `rs_image`, `rs_name`, `rsc_id`, `rs_score`, `rs_introduce`, `rs_sort`, `rs_blacktitle1`, `rs_blackauthor`, `rs_flag`) VALUES
(1, '/Public/editor/attached/image/20181101/20181101032926_39306.png', 'Rose', 1, 9.1, '而天涯海角', 0, 'travel the world', '哈哈哈', 0),
(2, '/Public/editor/attached/image/20181101/20181101034022_17687.png', '婚纱', 1, 7.1, '额外热构图很容易就涂口红', 0, 'travel the world', '维权人防', 0),
(3, '/Public/editor/attached/image/20181120/20181120065358_56035.png', 'efh4g3', 1, 0, '', 0, '', '', 1),
(4, '/Public/editor/attached/image/20181120/20181120065423_63539.jpg', 'redfnrgh', 1, 0, '', 0, '', '', 1);

-- --------------------------------------------------------

--
-- 表的结构 `wl_room_scenery_classify`
--

CREATE TABLE IF NOT EXISTS `wl_room_scenery_classify` (
  `rsc_id` int(10) NOT NULL AUTO_INCREMENT COMMENT '内景分类ID',
  `rsc_name` varchar(100) NOT NULL COMMENT '内景分类名称',
  `rsc_sort` int(10) NOT NULL COMMENT '排序',
  PRIMARY KEY (`rsc_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='内景分类ID' AUTO_INCREMENT=6 ;

--
-- 转存表中的数据 `wl_room_scenery_classify`
--

INSERT INTO `wl_room_scenery_classify` (`rsc_id`, `rsc_name`, `rsc_sort`) VALUES
(1, '精致公主', 0),
(2, '法式轻奢', 0),
(3, '弥花典藏', 0),
(4, '名流国际', 0),
(5, '经典尊荣', 0);

-- --------------------------------------------------------

--
-- 表的结构 `wl_short_video`
--

CREATE TABLE IF NOT EXISTS `wl_short_video` (
  `sv_id` int(10) NOT NULL AUTO_INCREMENT COMMENT '精彩花絮ID',
  `sv_title` varchar(100) NOT NULL COMMENT '标题',
  `sv_short_title1` varchar(100) NOT NULL COMMENT '小标题1',
  `sv_short_title2` varchar(100) NOT NULL COMMENT '小标题2',
  `sv_sort` int(10) NOT NULL COMMENT '排序',
  `sv_time` varchar(100) NOT NULL COMMENT '拍摄时间',
  `sv_url` varchar(255) NOT NULL COMMENT '路径',
  `sv_image` varchar(255) NOT NULL COMMENT '背景图片',
  PRIMARY KEY (`sv_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='精彩花絮信息表' AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `wl_short_video`
--

INSERT INTO `wl_short_video` (`sv_id`, `sv_title`, `sv_short_title1`, `sv_short_title2`, `sv_sort`, `sv_time`, `sv_url`, `sv_image`) VALUES
(1, '《你是所有美好的起因》薇拉-微电影', 'Travel is More Meaningful', 'Travel Around The World', 0, '1540980518', 'https://v.qq.com/txp/iframe/player.html?vid=c0354abrb1k&amp;auto=1', '/Public/editor/attached/image/20181031/20181031100837_50863.png');

-- --------------------------------------------------------

--
-- 表的结构 `wl_user`
--

CREATE TABLE IF NOT EXISTS `wl_user` (
  `id` int(10) NOT NULL AUTO_INCREMENT COMMENT '用户ID',
  `name` varchar(100) NOT NULL COMMENT '姓名',
  `telephone` varchar(50) NOT NULL COMMENT '电话',
  `QQ` varchar(50) NOT NULL COMMENT 'QQ ',
  `wechat` varchar(50) NOT NULL COMMENT '微信',
  `sort` int(10) NOT NULL COMMENT '排序',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='新用户信息表' AUTO_INCREMENT=9 ;

--
-- 转存表中的数据 `wl_user`
--

INSERT INTO `wl_user` (`id`, `name`, `telephone`, `QQ`, `wechat`, `sort`) VALUES
(2, '', '', '123456', '', 0),
(3, '111', '15339292939', '601632309', '', 0),
(4, '999', '15339292939', '', '123456', 0),
(5, '999', '15339292939', '', '123456', 0),
(6, '789', '15339292939', '', '21561651', 0),
(7, 'xxx', '15339292939', '', '1231321', 0),
(8, '156421', '15235654585', '', '7857178+*9', 0);

-- --------------------------------------------------------

--
-- 表的结构 `wl_view`
--

CREATE TABLE IF NOT EXISTS `wl_view` (
  `id` int(10) NOT NULL AUTO_INCREMENT COMMENT '图片ID',
  `image` varchar(255) NOT NULL COMMENT '图片',
  `sort` int(10) NOT NULL COMMENT '排序',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='薇拉视觉信息表' AUTO_INCREMENT=4 ;

--
-- 转存表中的数据 `wl_view`
--

INSERT INTO `wl_view` (`id`, `image`, `sort`) VALUES
(1, '/Public/editor/attached/image/20181101/20181101015903_49017.png', 0),
(2, '/Public/editor/attached/image/20181101/20181101015916_45312.png', 0),
(3, '/Public/editor/attached/image/20181101/20181101015934_16523.png', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
