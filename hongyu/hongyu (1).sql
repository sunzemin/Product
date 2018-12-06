-- phpMyAdmin SQL Dump
-- version phpStudy 2014
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2018 �?12 �?06 �?07:57
-- 服务器版本: 5.5.53
-- PHP 版本: 5.6.27

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `hongyu`
--

-- --------------------------------------------------------

--
-- 表的结构 `hy_admin`
--

CREATE TABLE IF NOT EXISTS `hy_admin` (
  `aid` int(10) NOT NULL AUTO_INCREMENT COMMENT '管理员ID',
  `aname` varchar(100) NOT NULL COMMENT '管理员名称',
  `apwd` varchar(255) NOT NULL COMMENT '管理员密码',
  `aip` varchar(100) NOT NULL COMMENT '登录ip',
  `asort` int(10) NOT NULL COMMENT '排序',
  PRIMARY KEY (`aid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='管理员信息表' AUTO_INCREMENT=6 ;

--
-- 转存表中的数据 `hy_admin`
--

INSERT INTO `hy_admin` (`aid`, `aname`, `apwd`, `aip`, `asort`) VALUES
(1, 'admin', 'a66abb5684c45962d887564f08346e8d', '127.0.0.1', 0),
(4, 'lan', '4773974dcb4c111ef3d206659dbaf646', '127.0.0.1', 0),
(5, 'lalla', 'e10adc3949ba59abbe56e057f20f883e', '127.0.0.1', 0);

-- --------------------------------------------------------

--
-- 表的结构 `hy_admin_config`
--

CREATE TABLE IF NOT EXISTS `hy_admin_config` (
  `ac_id` int(10) NOT NULL AUTO_INCREMENT COMMENT '登录记录ip',
  `ac_name` varchar(100) NOT NULL COMMENT '管理员名称',
  `ac_ip` varchar(100) NOT NULL COMMENT '登录ip',
  `ac_sort` int(10) NOT NULL COMMENT '排序',
  `ac_time` varchar(100) NOT NULL COMMENT '登陆时间',
  PRIMARY KEY (`ac_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='登录记录信息表' AUTO_INCREMENT=50 ;

--
-- 转存表中的数据 `hy_admin_config`
--

INSERT INTO `hy_admin_config` (`ac_id`, `ac_name`, `ac_ip`, `ac_sort`, `ac_time`) VALUES
(1, 'sun', '127.0.0.1', 0, '1541487793'),
(2, 'sun', '127.0.0.1', 0, '1541487876'),
(3, 'admin', '127.0.0.1', 0, '1541556269'),
(4, 'admin', '127.0.0.1', 0, '1541556486'),
(5, 'admin', '127.0.0.1', 0, '1541556598'),
(6, 'admin', '127.0.0.1', 0, '1541556793'),
(7, 'admin', '127.0.0.1', 0, '1541556985'),
(8, 'admin', '127.0.0.1', 0, '1541557669'),
(9, 'link', '127.0.0.1', 0, '1541557785'),
(10, 'link', '127.0.0.1', 0, '1541557936'),
(11, 'admin', '127.0.0.1', 0, '1541558138'),
(12, 'admin', '127.0.0.1', 0, '1541558370'),
(13, 'lan', '127.0.0.1', 0, '1541558427'),
(14, 'admin', '127.0.0.1', 0, '1541640055'),
(15, 'admin', '127.0.0.1', 0, '1541647858'),
(16, 'admin', '127.0.0.1', 0, '1541659551'),
(17, 'admin', '127.0.0.1', 0, '1541668348'),
(18, 'admin', '127.0.0.1', 0, '1541726134'),
(19, 'admin', '127.0.0.1', 0, '1541734821'),
(20, 'admin', '127.0.0.1', 0, '1541735595'),
(21, 'admin', '127.0.0.1', 0, '1541992174'),
(22, 'admin', '127.0.0.1', 0, '1541994824'),
(23, 'admin', '127.0.0.1', 0, '1542016169'),
(24, 'admin', '127.0.0.1', 0, '1542072573'),
(25, 'admin', '127.0.0.1', 0, '1542076625'),
(26, 'admin', '127.0.0.1', 0, '1542087696'),
(27, 'admin', '127.0.0.1', 0, '1542090741'),
(28, 'admin', '127.0.0.1', 0, '1542158318'),
(29, 'admin', '127.0.0.1', 0, '1542162264'),
(30, 'admin', '127.0.0.1', 0, '1542265795'),
(31, 'admin', '127.0.0.1', 0, '1542335415'),
(32, 'admin', '127.0.0.1', 0, '1542354918'),
(33, 'admin', '127.0.0.1', 0, '1543288762'),
(34, 'admin', '127.0.0.1', 0, '1543288896'),
(35, 'admin', '127.0.0.1', 0, '1543298941'),
(36, 'admin', '127.0.0.1', 0, '1543371619'),
(37, 'admin', '127.0.0.1', 0, '1543372602'),
(38, 'admin', '127.0.0.1', 0, '1543455781'),
(39, 'admin', '127.0.0.1', 0, '1543803062'),
(40, 'admin', '127.0.0.1', 0, '1543804548'),
(41, 'admin', '127.0.0.1', 0, '1543813537'),
(42, 'admin', '127.0.0.1', 0, '1543830826'),
(43, 'admin', '127.0.0.1', 0, '1543888865'),
(44, 'admin', '127.0.0.1', 0, '1543905609'),
(45, 'admin', '127.0.0.1', 0, '1543908440'),
(46, 'admin', '127.0.0.1', 0, '1543908621'),
(47, 'admin', '127.0.0.1', 0, '1543978682'),
(48, 'admin', '127.0.0.1', 0, '1543980952'),
(49, 'admin', '127.0.0.1', 0, '1544063780');

-- --------------------------------------------------------

--
-- 表的结构 `hy_all_classify`
--

CREATE TABLE IF NOT EXISTS `hy_all_classify` (
  `ac_id` int(10) NOT NULL AUTO_INCREMENT COMMENT '分类ID',
  `ac_name` varchar(100) NOT NULL COMMENT '分类名称',
  `ac_sort` int(10) NOT NULL COMMENT '排序',
  `ac_flag` int(10) NOT NULL COMMENT '0-不推荐到首页，1-推荐到首页',
  `nav_id` int(10) NOT NULL COMMENT '导航ID',
  PRIMARY KEY (`ac_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='总的分类ID' AUTO_INCREMENT=5 ;

--
-- 转存表中的数据 `hy_all_classify`
--

INSERT INTO `hy_all_classify` (`ac_id`, `ac_name`, `ac_sort`, `ac_flag`, `nav_id`) VALUES
(1, '新闻资讯', 0, 1, 5),
(2, '活动策划案例', 0, 1, 4),
(3, '活动现场', 0, 1, 1),
(4, '文艺演出', 0, 0, 3);

-- --------------------------------------------------------

--
-- 表的结构 `hy_all_head`
--

CREATE TABLE IF NOT EXISTS `hy_all_head` (
  `ah_id` int(10) NOT NULL AUTO_INCREMENT COMMENT '头部管理ID',
  `ah_title1` varchar(255) NOT NULL COMMENT '头部标题1',
  `ah_image` varchar(255) NOT NULL COMMENT '图标',
  `ah_hideimage` varchar(255) NOT NULL COMMENT '隐藏图片',
  `ah_sort` int(10) NOT NULL COMMENT '排序',
  PRIMARY KEY (`ah_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='头部管理' AUTO_INCREMENT=5 ;

--
-- 转存表中的数据 `hy_all_head`
--

INSERT INTO `hy_all_head` (`ah_id`, `ah_title1`, `ah_image`, `ah_hideimage`, `ah_sort`) VALUES
(1, '精心策划', '/Public/editor/attached/image/20181204/20181204033135_27322.png', '/Public/editor/attached/image/20181204/20181204034040_88195.png', 0),
(2, '专业团队', '/Public/editor/attached/image/20181204/20181204033148_13254.png', '/Public/editor/attached/image/20181204/20181204034054_59680.png', 0),
(3, '创新创意', '/Public/editor/attached/image/20181204/20181204033201_79007.png', '/Public/editor/attached/image/20181204/20181204034108_48619.png', 0);

-- --------------------------------------------------------

--
-- 表的结构 `hy_article`
--

CREATE TABLE IF NOT EXISTS `hy_article` (
  `id` int(10) NOT NULL AUTO_INCREMENT COMMENT '案例ID',
  `content` text NOT NULL COMMENT '内容',
  `title` varchar(255) NOT NULL COMMENT '标题',
  `sort` int(10) NOT NULL COMMENT '排序',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='案例信息表' AUTO_INCREMENT=13 ;

--
-- 转存表中的数据 `hy_article`
--

INSERT INTO `hy_article` (`id`, `content`, `title`, `sort`) VALUES
(1, '<p>\r\n	任务HETARJYM&nbsp; &nbsp; wqfegwrhetryjd\r\n</p>\r\n<p>\r\n	<img src="/Public/editor/attached/image/20181205/20181205033909_38844.png" alt="" />\r\n</p>', '我是公认的', 0);

-- --------------------------------------------------------

--
-- 表的结构 `hy_background_image`
--

CREATE TABLE IF NOT EXISTS `hy_background_image` (
  `bi_id` int(10) NOT NULL AUTO_INCREMENT COMMENT '背景图片ID',
  `bi_image` varchar(255) NOT NULL COMMENT '背景图片',
  `bi_title` varchar(255) NOT NULL COMMENT '背景标题',
  `bi_sort` int(10) NOT NULL COMMENT '排序',
  `nav_id` int(10) NOT NULL COMMENT '导航ID',
  PRIMARY KEY (`bi_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='背景图信息表' AUTO_INCREMENT=15 ;

--
-- 转存表中的数据 `hy_background_image`
--

INSERT INTO `hy_background_image` (`bi_id`, `bi_image`, `bi_title`, `bi_sort`, `nav_id`) VALUES
(1, '/Public/editor/attached/image/20181204/20181204061523_70433.png', '', 0, 4),
(12, '/Public/editor/attached/image/20181204/20181204074748_52750.png', '', 0, 3),
(13, '/Public/editor/attached/image/20181204/20181204075109_56939.png', '', 0, 5),
(14, '/Public/editor/attached/image/20181205/20181205054756_45812.png', '', 0, 6);

-- --------------------------------------------------------

--
-- 表的结构 `hy_classify_article`
--

CREATE TABLE IF NOT EXISTS `hy_classify_article` (
  `ca_id` int(10) NOT NULL AUTO_INCREMENT COMMENT '分类文章',
  `ca_image` varchar(255) NOT NULL COMMENT '图片',
  `ca_content` text NOT NULL COMMENT '文章内容',
  `ca_sort` int(10) NOT NULL COMMENT '排序',
  `lc_id` int(10) NOT NULL COMMENT '二级分类ID',
  `ca_title` varchar(255) NOT NULL COMMENT '标题',
  `ca_time` varchar(100) NOT NULL COMMENT '发表时间',
  `ca_min` varchar(50) NOT NULL COMMENT '动画时间',
  PRIMARY KEY (`ca_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='分类文章表' AUTO_INCREMENT=38 ;

--
-- 转存表中的数据 `hy_classify_article`
--

INSERT INTO `hy_classify_article` (`ca_id`, `ca_image`, `ca_content`, `ca_sort`, `lc_id`, `ca_title`, `ca_time`, `ca_min`) VALUES
(1, '/Public/editor/attached/image/20181204/20181204054841_35683.png', '<span style="vertical-align:inherit;"><span style="vertical-align:inherit;">高信隆西安分公司开业高信隆西安分公司开业西安分公司开业...</span></span>', 0, 1, '大唐芙蓉园冰激凌节大唐芙蓉园冰...', '1543902631', ''),
(2, '/Public/editor/attached/image/20181204/20181204025414_47556.png', '', 0, 7, 'FAD会议策划', '1544066258', ''),
(3, '/Public/editor/attached/image/20181204/20181204025504_54750.png', '', 0, 17, '	晚宴', '1544066288', ''),
(4, '/Public/editor/attached/image/20181204/20181204025526_68298.png', '', 0, 16, '培训会', '1544066336', ''),
(5, '/Public/editor/attached/image/20181204/20181204025550_78417.png', '', 0, 15, '	年会', '1544066369', ''),
(6, '/Public/editor/attached/image/20181204/20181204025619_95050.png', '', 0, 14, '	南门灯光舞美', '1544066389', ''),
(7, '/Public/editor/attached/image/20181204/20181204025652_74846.png', '', 0, 13, '	开业庆典', '1544066412', ''),
(8, '/Public/editor/attached/image/20181204/20181204025715_38020.png', '', 0, 12, '	婚礼', '1544066432', ''),
(9, '/Public/editor/attached/image/20181204/20181204025743_53876.png', '', 0, 11, '	高信隆西安分公司开业', '1544066457', ''),
(10, '/Public/editor/attached/image/20181204/20181204025804_35062.png', '', 0, 10, '封顶仪式', '1544066475', ''),
(11, '/Public/editor/attached/image/20181204/20181204025831_37333.png', '', 0, 9, '	地产活动', '1544066492', ''),
(12, '/Public/editor/attached/image/20181204/20181204025908_43175.png', '', 0, 8, '大唐芙蓉园冰激凌节', '1544066732', ''),
(13, '/Public/editor/attached/image/20181204/20181204025942_56595.png', '', 0, 18, '	舞蹈', '1544066753', ''),
(14, '/Public/editor/attached/image/20181204/20181204032431_43338.png', '', 0, 19, '', '1543893883', ''),
(15, '/Public/editor/attached/image/20181204/20181204032506_88387.png', '', 0, 29, '', '1543893908', ''),
(16, '/Public/editor/attached/image/20181204/20181204032525_83567.png', '', 0, 28, '', '1543893926', ''),
(17, '/Public/editor/attached/image/20181204/20181204032549_99082.png', '', 0, 27, '', '1543893950', ''),
(18, '/Public/editor/attached/image/20181204/20181204032613_44021.png', '', 0, 26, '', '1543893975', ''),
(19, '/Public/editor/attached/image/20181204/20181204032639_97890.png', '', 0, 25, '', '1543894000', ''),
(20, '/Public/editor/attached/image/20181204/20181204032706_73500.png', '', 0, 24, '', '1543894028', ''),
(21, '/Public/editor/attached/image/20181204/20181204032727_95462.png', '', 0, 23, '', '1543894048', ''),
(22, '/Public/editor/attached/image/20181204/20181204032747_73767.png', '', 0, 22, '', '1543894069', ''),
(23, '/Public/editor/attached/image/20181204/20181204032809_86085.png', '', 0, 21, '', '1543894090', ''),
(24, '/Public/editor/attached/image/20181204/20181204032832_85368.png', '', 0, 20, '', '1543894113', ''),
(25, '/Public/editor/attached/image/20181204/20181204032850_20516.png', '', 0, 30, '', '1543894131', ''),
(26, '/Public/editor/attached/image/20181204/20181204051657_53500.png', 'e3qwretgrhtjym,j', 0, 2, 'wefsrg', '1543900624', ''),
(27, '/Public/editor/attached/image/20181204/20181204051725_60556.png', 'aestrytuyu', 0, 2, 'QTwerytrytuy', '1543900646', ''),
(28, '/Public/editor/attached/image/20181204/20181204051800_12727.png', 'wtarseryhtjuykj', 0, 3, 'teryjukhjl.k', '1543900682', ''),
(29, '/Public/editor/attached/image/20181204/20181204051819_67642.png', 'erytryjtuykjl.k', 0, 3, 'drytuyiuli;', '1543900702', ''),
(30, '/Public/editor/attached/image/20181204/20181204054856_62816.png', '<span style="vertical-align:inherit;"><span style="vertical-align:inherit;">高信隆西安分公司开业高信隆西安分公司开业西安分公司开业...</span></span>', 0, 1, '大唐芙蓉园冰激凌节大唐芙蓉园冰...', '1543902651', ''),
(31, '/Public/editor/attached/image/20181204/20181204054921_66291.png', '<span style="vertical-align:inherit;"><span style="vertical-align:inherit;">高信隆西安分公司开业高信隆西安分公司开业西安分公司开业...</span></span>', 0, 1, '大唐芙蓉园冰激凌节大唐芙蓉园冰...', '1543902673', ''),
(32, '/Public/editor/attached/image/20181206/20181206030422_19255.png', '', 0, 31, 'FAD会议策划', '1544065463', ''),
(33, '/Public/editor/attached/image/20181206/20181206030510_28127.jpg', '', 0, 32, '大唐芙蓉园冰激凌节', '1544065511', ''),
(34, '/Public/editor/attached/image/20181206/20181206030711_45035.jpg', '', 0, 33, '地产活动', '1544065632', ''),
(35, '/Public/editor/attached/image/20181206/20181206030742_82765.jpg', '', 0, 34, '封顶仪式', '1544065662', ''),
(36, '/Public/editor/attached/image/20181206/20181206030824_99189.jpg', '', 0, 35, '高信隆西安分公司开业', '1544065705', ''),
(37, '/Public/editor/attached/image/20181206/20181206030853_80361.jpg', '', 0, 36, '婚礼', '1544065734', '');

-- --------------------------------------------------------

--
-- 表的结构 `hy_company_introduce`
--

CREATE TABLE IF NOT EXISTS `hy_company_introduce` (
  `ci_id` int(10) NOT NULL AUTO_INCREMENT COMMENT '公司简介',
  `ci_content` text NOT NULL COMMENT '公司简介',
  `ci_logo` varchar(255) NOT NULL COMMENT '公司logo',
  `ci_name` varchar(255) NOT NULL COMMENT '公司名称',
  `ci_title` varchar(255) NOT NULL COMMENT '标题',
  `ci_image` varchar(255) NOT NULL COMMENT '背景图片',
  PRIMARY KEY (`ci_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='公司简介信息表' AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `hy_company_introduce`
--

INSERT INTO `hy_company_introduce` (`ci_id`, `ci_content`, `ci_logo`, `ci_name`, `ci_title`, `ci_image`) VALUES
(1, '<p>\r\n	<span style="vertical-align:inherit;"><span style="vertical-align:inherit;"><span style="vertical-align:inherit;"><span style="vertical-align:inherit;">“不积硅步，无以致千里；不积小流，无以成江海。”公司成立八年 来，从点点滴滴做起，凭借专业的团队、敬业的精神、宽阔的视野、独到 的思想，先后成功策划组织了企业开业大典、楼盘奠基仪式、政府机关文 艺演出、产品促销及新闻发布会等大型活动。得到了中大国际、陕汽集团 中国电信、海尔、格力、大明宫建材市场等知名企业的认可和青睐。特别 是成功策划实施了“中国东西部经贸洽谈会”第一届至第七届的开幕式庆 典活动，陕西国税局、公安局文艺晚会，受到政府机关领导的高度评价和 赞扬。</span></span></span></span>\r\n</p>\r\n<p>\r\n	<span style="vertical-align:inherit;"><span style="vertical-align:inherit;"><span style="vertical-align:inherit;"><span style="vertical-align:inherit;">“至真至诚，服务客户”是红雨人不懈的追求，“把最简单的 做好就是不简单”，几年的风雨兼程，几年的拼搏进取......<br />\r\n</span></span></span></span>\r\n</p>', '/Public/editor/attached/image/20181203/20181203095424_29245.png', '陕西红玉文化传播有限公司', '物权法额外热构图', '/Public/editor/attached/image/20181204/20181204035012_15229.png');

-- --------------------------------------------------------

--
-- 表的结构 `hy_footer`
--

CREATE TABLE IF NOT EXISTS `hy_footer` (
  `id` int(10) NOT NULL AUTO_INCREMENT COMMENT '底部信息id',
  `telephone` varchar(100) NOT NULL COMMENT '热线电话',
  `telephone1` varchar(50) NOT NULL COMMENT '电话2',
  `mobile` varchar(50) NOT NULL COMMENT '电话',
  `mobile1` varchar(50) NOT NULL COMMENT '手机1',
  `qq` varchar(50) NOT NULL COMMENT '客服1',
  `qq1` varchar(50) NOT NULL COMMENT '客服2',
  `wx_erweima` varchar(255) NOT NULL COMMENT '微信二维码',
  `address` varchar(255) NOT NULL COMMENT '地址',
  `copyright` varchar(255) NOT NULL COMMENT '版权',
  `record` varchar(255) NOT NULL COMMENT '备案',
  `introduce` text NOT NULL COMMENT '底部说明',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='底部信息表' AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `hy_footer`
--

INSERT INTO `hy_footer` (`id`, `telephone`, `telephone1`, `mobile`, `mobile1`, `qq`, `qq1`, `wx_erweima`, `address`, `copyright`, `record`, `introduce`) VALUES
(1, '029-82095999', '029-88867843', '13892801850', '13709115428', '277159984', '277159984', '/Public/editor/attached/image/20181203/20181203095922_89683.png', '西安市西高新开发区博文路9号', 'Copyright © 2018 陕西红雨文化传播有限公司 版权所有', '陕ICP备16015959号-1', '<span style="vertical-align:inherit;"><span style="vertical-align:inherit;"><span style="color:#FFFFFF;font-family:" text-align:center;white-space:normal;"=""><span style="color:#64451D;"><span style="color:#FFFFFF;font-family:" text-align:center;white-space:normal;"=""><span style="color:#64451D;"><span style="vertical-align:inherit;"><span style="vertical-align:inherit;"><span style="color:#FFFFFF;">专注于创意活动策划执行[新闻发布会策划|年会策划|周年庆典策划|会议策划]，凭借自己专业的素养，前瞻的活动创意，打造可持续发展的一站式活动策划执行服务，为客户全方位提供活动</span></span></span><span style="color:#FFFFFF;font-family:" text-align:center;white-space:normal;"="">策划传播解决方案。</span></span></span></span><span style="color:#64451D;"></span></span></span></span>');

-- --------------------------------------------------------

--
-- 表的结构 `hy_home_classify`
--

CREATE TABLE IF NOT EXISTS `hy_home_classify` (
  `hc_id` int(10) NOT NULL AUTO_INCREMENT COMMENT '首页分类id',
  `hc_name` varchar(255) NOT NULL COMMENT '分类ID',
  `hc_titleimage` varchar(255) NOT NULL COMMENT '分类图标',
  `hc_sort` int(10) NOT NULL COMMENT '排序',
  PRIMARY KEY (`hc_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='首页分类信息表' AUTO_INCREMENT=8 ;

--
-- 转存表中的数据 `hy_home_classify`
--

INSERT INTO `hy_home_classify` (`hc_id`, `hc_name`, `hc_titleimage`, `hc_sort`) VALUES
(1, '发布会策划', '/Public/editor/attached/image/20181204/20181204022402_61558.png', 0),
(2, '庆典活动', '/Public/editor/attached/image/20181204/20181204022414_18333.png', 0),
(3, '年会策划', '/Public/editor/attached/image/20181204/20181204022429_44296.png', 0),
(4, '灯光舞美', '/Public/editor/attached/image/20181204/20181204022512_29665.png', 0),
(5, '大型活动策划', '/Public/editor/attached/image/20181204/20181204022537_11334.png', 0),
(6, '媒体传播', '/Public/editor/attached/image/20181204/20181204022558_28742.png', 0),
(7, '气球布置', '/Public/editor/attached/image/20181204/20181204022619_32950.png', 0);

-- --------------------------------------------------------

--
-- 表的结构 `hy_home_little_classify`
--

CREATE TABLE IF NOT EXISTS `hy_home_little_classify` (
  `hlc_id` int(10) NOT NULL AUTO_INCREMENT COMMENT '二级分类',
  `hlc_name` varchar(255) NOT NULL COMMENT '分类名称',
  `hc_id` int(10) NOT NULL COMMENT '父级ID',
  `hlc_sort` int(10) NOT NULL COMMENT '排序',
  PRIMARY KEY (`hlc_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='手机二级分类信息表' AUTO_INCREMENT=23 ;

--
-- 转存表中的数据 `hy_home_little_classify`
--

INSERT INTO `hy_home_little_classify` (`hlc_id`, `hlc_name`, `hc_id`, `hlc_sort`) VALUES
(1, '新闻发布会', 1, 0),
(2, '新品特效', 1, 0),
(3, '烟火表演', 1, 0),
(4, '周年庆', 2, 0),
(5, '开业庆典', 2, 0),
(6, '年会策划', 3, 0),
(7, '签约仪式', 2, 0),
(8, '晚会晚宴', 2, 0),
(9, '亲子活动', 3, 0),
(10, '鲜花绿植', 3, 0),
(11, '路演巡演', 4, 0),
(12, '新闻发布会', 4, 0),
(13, '地产活动', 5, 0),
(14, '体育赛事', 5, 0),
(15, '新品特效', 5, 0),
(16, '舞龙舞狮', 5, 0),
(17, '媒体邀请', 6, 0),
(18, '宣传片拍摄', 6, 0),
(19, '开工奠基', 6, 0),
(20, '礼仪模特', 7, 0),
(21, '楼盘封顶', 7, 0),
(22, '摄影摄像', 7, 0);

-- --------------------------------------------------------

--
-- 表的结构 `hy_little_classify`
--

CREATE TABLE IF NOT EXISTS `hy_little_classify` (
  `lc_id` int(10) NOT NULL AUTO_INCREMENT COMMENT '小分类ID',
  `lc_name` varchar(100) NOT NULL COMMENT '分类名称',
  `lc_sort` int(10) NOT NULL COMMENT '排序',
  `ac_id` int(11) NOT NULL COMMENT '总分类id',
  PRIMARY KEY (`lc_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='小分类信息表' AUTO_INCREMENT=37 ;

--
-- 转存表中的数据 `hy_little_classify`
--

INSERT INTO `hy_little_classify` (`lc_id`, `lc_name`, `lc_sort`, `ac_id`) VALUES
(1, '最新资讯', 0, 1),
(2, '发布会咨讯', 0, 1),
(3, '年会资讯', 0, 1),
(4, '庆典资讯', 0, 1),
(5, '会议资讯', 0, 1),
(6, '其他咨询', 0, 1),
(7, '活动策划案例', 0, 2),
(8, '大唐芙蓉园冰激凌节', 0, 2),
(9, '地产活动', 0, 2),
(10, '封顶仪式', 0, 2),
(11, '高信隆西安分公司开业', 0, 2),
(12, '婚礼', 0, 2),
(13, '开业庆典', 0, 2),
(14, '南门灯光舞美', 0, 2),
(15, '年会', 0, 2),
(16, '培训会', 0, 2),
(17, '活动策划案例', 0, 2),
(18, '舞蹈', 0, 2),
(19, '西凤酒', 0, 3),
(20, '西洽会', 0, 3),
(21, '杨凌乡村音乐节', 0, 3),
(22, '原点新闻发布会', 0, 3),
(23, '中法文化论坛', 0, 3),
(24, '中医开幕式', 0, 3),
(25, '地产活动', 0, 3),
(26, '封顶仪式', 0, 3),
(27, 'FAD会议策划', 0, 3),
(28, '大唐芙蓉园冰激凌节', 0, 3),
(29, '南门灯光舞美', 0, 3),
(30, '西凤酒', 0, 3),
(31, '文艺演出', 0, 4),
(32, '文艺演出', 0, 4),
(33, '	文艺演出', 0, 4),
(34, '	文艺演出', 0, 4),
(35, '	文艺演出', 0, 4),
(36, '	文艺演出', 0, 4);

-- --------------------------------------------------------

--
-- 表的结构 `hy_lunbo`
--

CREATE TABLE IF NOT EXISTS `hy_lunbo` (
  `lb_id` int(10) NOT NULL AUTO_INCREMENT COMMENT '轮播ID',
  `lb_image` varchar(255) NOT NULL COMMENT '轮播图片',
  `lb_sort` int(10) NOT NULL COMMENT '排序',
  `lb_title` varchar(255) NOT NULL COMMENT '轮播标题',
  `lb_title_english` varchar(255) NOT NULL COMMENT '英文标题',
  `lb_url` varchar(255) NOT NULL COMMENT '跳转路径',
  `nav_id` int(10) NOT NULL COMMENT '导航ID',
  PRIMARY KEY (`lb_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='轮播信息表' AUTO_INCREMENT=5 ;

--
-- 转存表中的数据 `hy_lunbo`
--

INSERT INTO `hy_lunbo` (`lb_id`, `lb_image`, `lb_sort`, `lb_title`, `lb_title_english`, `lb_url`, `nav_id`) VALUES
(1, '/Public/editor/attached/image/20181204/20181204020138_12466.png', 0, 'hahha', 'hahha', '', 1),
(2, '/Public/editor/attached/image/20181204/20181204020201_39523.png', 0, 'kaka', 'kaka', '', 1),
(3, '/Public/editor/attached/image/20181204/20181204020224_45370.png', 0, '', '', '', 1),
(4, '/Public/editor/attached/image/20181204/20181204020238_81287.png', 0, '', '', '', 1);

-- --------------------------------------------------------

--
-- 表的结构 `hy_map`
--

CREATE TABLE IF NOT EXISTS `hy_map` (
  `id` int(10) NOT NULL AUTO_INCREMENT COMMENT '地图id',
  `heng` varchar(255) NOT NULL COMMENT '横坐标',
  `zong` varchar(255) NOT NULL COMMENT '纵坐标',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='地图信息表' AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `hy_map`
--

INSERT INTO `hy_map` (`id`, `heng`, `zong`) VALUES
(1, '108.975211', '34.278332');

-- --------------------------------------------------------

--
-- 表的结构 `hy_nav`
--

CREATE TABLE IF NOT EXISTS `hy_nav` (
  `nav_id` int(10) NOT NULL AUTO_INCREMENT COMMENT '导航id',
  `nav_name` varchar(255) NOT NULL COMMENT '导航名称',
  `nav_url` varchar(255) NOT NULL COMMENT '导航链接',
  `nav_sort` int(10) NOT NULL COMMENT '排序',
  `nav_fid` int(11) NOT NULL COMMENT '父级导航ID',
  PRIMARY KEY (`nav_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='导航信息表' AUTO_INCREMENT=15 ;

--
-- 转存表中的数据 `hy_nav`
--

INSERT INTO `hy_nav` (`nav_id`, `nav_name`, `nav_url`, `nav_sort`, `nav_fid`) VALUES
(1, '首页', '/index.php/Home/Index/index', 0, 0),
(2, '庆典活动', '/index.php/Home/Index/text', 0, 0),
(3, '文艺演出', '/index.php/Home/Index/wenyiyanchu', 0, 0),
(4, '大型活动策划', '/index.php/Home/Index/huodongcehua', 0, 0),
(5, '新闻中心', '/index.php/Home/Index/xinwen', 0, 0),
(6, '联系我们', '/index.php/Home/Index/lianxiwomen', 0, 0),
(11, '开业庆典', '/index.php/Home/Index/text', 0, 2),
(12, '周年庆', '/index.php/Home/Index/text', 0, 2),
(13, '开工奠基', '/index.php/Home/Index/text', 0, 2),
(14, '乔迁庆典', '/index.php/Home/Index/text', 0, 2);

-- --------------------------------------------------------

--
-- 表的结构 `hy_scene`
--

CREATE TABLE IF NOT EXISTS `hy_scene` (
  `id` int(10) NOT NULL AUTO_INCREMENT COMMENT '场景ID',
  `image` varchar(255) NOT NULL COMMENT '场景图片',
  `sort` int(10) NOT NULL COMMENT '排序',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='场景信息表' AUTO_INCREMENT=5 ;

--
-- 转存表中的数据 `hy_scene`
--

INSERT INTO `hy_scene` (`id`, `image`, `sort`) VALUES
(1, '/Public/editor/attached/image/20181108/20181108081608_48515.jpg', 0),
(2, '/Public/editor/attached/image/20181108/20181108081632_88110.jpg', 0),
(3, '/Public/editor/attached/image/20181108/20181108081742_27907.png', 0),
(4, '/Public/editor/attached/image/20181108/20181108081804_15188.png', 0);

-- --------------------------------------------------------

--
-- 表的结构 `hy_user`
--

CREATE TABLE IF NOT EXISTS `hy_user` (
  `id` int(10) NOT NULL AUTO_INCREMENT COMMENT '用户ID',
  `name` varchar(255) NOT NULL COMMENT '用户名称',
  `content` text NOT NULL COMMENT '备注内容',
  `sort` int(10) NOT NULL COMMENT '排序',
  `telephone` varchar(100) NOT NULL COMMENT '电话',
  `wx_telephone` varchar(255) NOT NULL COMMENT '微信号码',
  `email` varchar(255) NOT NULL COMMENT '邮箱',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='用户信息表' AUTO_INCREMENT=25 ;

--
-- 转存表中的数据 `hy_user`
--

INSERT INTO `hy_user` (`id`, `name`, `content`, `sort`, `telephone`, `wx_telephone`, `email`) VALUES
(24, 'dasgdaf', '', 0, '', 'xsDAFDSG', 'qwewretrhy');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
