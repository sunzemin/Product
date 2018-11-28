-- phpMyAdmin SQL Dump
-- version phpStudy 2014
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2018 �?11 �?28 �?08:03
-- 服务器版本: 5.5.53
-- PHP 版本: 5.6.27

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `zhinengjiaju`
--

-- --------------------------------------------------------

--
-- 表的结构 `zn_admin`
--

CREATE TABLE IF NOT EXISTS `zn_admin` (
  `aid` int(10) NOT NULL AUTO_INCREMENT COMMENT '管理员ID',
  `aname` varchar(100) NOT NULL COMMENT '管理员名称',
  `apwd` varchar(255) NOT NULL COMMENT '管理员密码',
  `aip` varchar(100) NOT NULL COMMENT '登录ip',
  `asort` int(10) NOT NULL COMMENT '排序',
  PRIMARY KEY (`aid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='管理员信息表' AUTO_INCREMENT=5 ;

--
-- 转存表中的数据 `zn_admin`
--

INSERT INTO `zn_admin` (`aid`, `aname`, `apwd`, `aip`, `asort`) VALUES
(1, 'admin', 'a66abb5684c45962d887564f08346e8d', '127.0.0.1', 0),
(4, 'lan', '4773974dcb4c111ef3d206659dbaf646', '127.0.0.1', 0);

-- --------------------------------------------------------

--
-- 表的结构 `zn_admin_config`
--

CREATE TABLE IF NOT EXISTS `zn_admin_config` (
  `ac_id` int(10) NOT NULL AUTO_INCREMENT COMMENT '登录记录ip',
  `ac_name` varchar(100) NOT NULL COMMENT '管理员名称',
  `ac_ip` varchar(100) NOT NULL COMMENT '登录ip',
  `ac_sort` int(10) NOT NULL COMMENT '排序',
  `ac_time` varchar(100) NOT NULL COMMENT '登陆时间',
  PRIMARY KEY (`ac_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='登录记录信息表' AUTO_INCREMENT=45 ;

--
-- 转存表中的数据 `zn_admin_config`
--

INSERT INTO `zn_admin_config` (`ac_id`, `ac_name`, `ac_ip`, `ac_sort`, `ac_time`) VALUES
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
(30, 'admin', '127.0.0.1', 0, '1542266145'),
(31, 'admin', '127.0.0.1', 0, '1542331097'),
(32, 'admin', '127.0.0.1', 0, '1542331173'),
(33, 'admin', '127.0.0.1', 0, '1542334490'),
(34, 'admin', '127.0.0.1', 0, '1542339049'),
(35, 'admin', '127.0.0.1', 0, '1542351403'),
(36, 'admin', '127.0.0.1', 0, '1542589853'),
(37, 'admin', '127.0.0.1', 0, '1542683668'),
(38, 'admin', '127.0.0.1', 0, '1542793611'),
(39, 'admin', '127.0.0.1', 0, '1542851406'),
(40, 'admin', '127.0.0.1', 0, '1542965277'),
(41, 'admin', '127.0.0.1', 0, '1543196988'),
(42, 'admin', '127.0.0.1', 0, '1543289729'),
(43, 'admin', '127.0.0.1', 0, '1543369627'),
(44, 'admin', '127.0.0.1', 0, '1543385215');

-- --------------------------------------------------------

--
-- 表的结构 `zn_all_classify`
--

CREATE TABLE IF NOT EXISTS `zn_all_classify` (
  `ac_id` int(10) NOT NULL AUTO_INCREMENT COMMENT '分类ID',
  `ac_name` varchar(100) NOT NULL COMMENT '分类名称',
  `ac_sort` int(10) NOT NULL COMMENT '排序',
  `ac_flag` int(10) NOT NULL COMMENT '0-不推荐到首页，1-推荐到首页',
  `nav_id` int(10) NOT NULL COMMENT '导航ID',
  `ac_content` text NOT NULL COMMENT '分类简介',
  PRIMARY KEY (`ac_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='总的分类ID' AUTO_INCREMENT=11 ;

--
-- 转存表中的数据 `zn_all_classify`
--

INSERT INTO `zn_all_classify` (`ac_id`, `ac_name`, `ac_sort`, `ac_flag`, `nav_id`, `ac_content`) VALUES
(1, '品牌简介', 0, 0, 2, ''),
(2, '案例展示', 0, 0, 7, ''),
(4, '全屋集成整装', 0, 0, 4, ''),
(5, '最新资讯', 0, 1, 8, ''),
(6, '全屋智能', 0, 0, 5, ''),
(7, '房间分类', 0, 0, 1, ''),
(8, '加盟中心', 0, 0, 10, ''),
(9, '场景体验中心', 0, 0, 6, '<h1>\r\n</h1>\r\n<h1 style="white-space:normal;">\r\n	随心所欲&nbsp; &nbsp;自由组合&nbsp; &nbsp;一键调控\r\n</h1>\r\n<p style="white-space:normal;">\r\n	提供多种场景选择，用户可以根据自身需要和生活习惯，配置相应的场景，满足高端定制需求\r\n</p>\r\n<br />');

-- --------------------------------------------------------

--
-- 表的结构 `zn_all_head`
--

CREATE TABLE IF NOT EXISTS `zn_all_head` (
  `ah_id` int(10) NOT NULL AUTO_INCREMENT COMMENT '头部管理ID',
  `ah_title1` varchar(255) NOT NULL COMMENT '头部标题1',
  `ah_title2` varchar(255) NOT NULL COMMENT '头部标题2',
  `ah_title3` text NOT NULL COMMENT '头部标题3',
  `ah_title4` varchar(255) NOT NULL COMMENT '标题四',
  `ah_sort` int(10) NOT NULL COMMENT '排序',
  `nav_id` int(10) NOT NULL COMMENT '导航ID',
  PRIMARY KEY (`ah_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='头部管理' AUTO_INCREMENT=4 ;

--
-- 转存表中的数据 `zn_all_head`
--

INSERT INTO `zn_all_head` (`ah_id`, `ah_title1`, `ah_title2`, `ah_title3`, `ah_title4`, `ah_sort`, `nav_id`) VALUES
(1, '博越智能家居', '给生活带来无限可能', '四大场景：卧室、客厅、厨房、洗手间四大区域', '', 0, 5),
(2, '博越全屋智能整装', '客户的满意是我们较大的追求', '我们不断对家装行业进行探索与尝试，解决行业弊端和消费者痛点，是 我们前进的本质。我们始终秉承“爱与责任”的核心理念，以“健康生活服务商“为品牌定位，共筑生 活家高品质健康整装体系。我们进行产品升级，努力把健康做到更佳，为更多人打造健康的环境，让每个人都享受健康家居。', 'Intelligent self-assembly', 0, 1),
(3, '随心所欲   自由组合   一键调控', '为儿童公园', '<p style="box-sizing:border-box;margin-top:0px;margin-bottom:0px;padding:0px;border:0px;font-size:14px;vertical-align:baseline;-webkit-tap-highlight-color:rgba(0, 0, 0, 0);color:#FFFFFF;font-family:" text-align:center;white-space:normal;"=""><span style="vertical-align:inherit;color:#FFFFFF;"><span style="vertical-align:inherit;color:#FFFFFF;"><span style="color:#FFFFFF;"><span style="vertical-align:inherit;"><span style="vertical-align:inherit;">吃饭都不问题是的法人VB他</span></span></span></span></span> \r\n	</p>', '', 0, 6);

-- --------------------------------------------------------

--
-- 表的结构 `zn_background_image`
--

CREATE TABLE IF NOT EXISTS `zn_background_image` (
  `bi_id` int(10) NOT NULL AUTO_INCREMENT COMMENT '背景图片ID',
  `bi_image` varchar(255) NOT NULL COMMENT '背景图片',
  `bi_title` varchar(255) NOT NULL COMMENT '背景标题',
  `bi_sort` int(10) NOT NULL COMMENT '排序',
  `nav_id` int(10) NOT NULL COMMENT '导航ID',
  PRIMARY KEY (`bi_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='背景图信息表' AUTO_INCREMENT=12 ;

--
-- 转存表中的数据 `zn_background_image`
--

INSERT INTO `zn_background_image` (`bi_id`, `bi_image`, `bi_title`, `bi_sort`, `nav_id`) VALUES
(1, '/Public/editor/attached/image/20181107/20181107034235_68079.png', '', 0, 1),
(2, '/Public/editor/attached/image/20181109/20181109035506_88593.png', '', 0, 2),
(3, '/Public/editor/attached/image/20181108/20181108095702_29330.png', '', 0, 7),
(4, '/Public/editor/attached/image/20181109/20181109035807_65148.png', '', 0, 2),
(5, '/Public/editor/attached/image/20181109/20181109055929_90106.png', '', 0, 4),
(6, '/Public/editor/attached/image/20181113/20181113051127_70812.png', '', 0, 8),
(7, '/Public/editor/attached/image/20181113/20181113054738_84572.png', '', 0, 5),
(8, '/Public/editor/attached/image/20181113/20181113062742_67323.png', '', 0, 3),
(9, '/Public/editor/attached/image/20181113/20181113095619_54475.png', '', 0, 10),
(10, '/Public/editor/attached/image/20181114/20181114013947_24584.png', '', 0, 10),
(11, '/Public/editor/attached/image/20181114/20181114014356_54195.png', '', 0, 10);

-- --------------------------------------------------------

--
-- 表的结构 `zn_case`
--

CREATE TABLE IF NOT EXISTS `zn_case` (
  `id` int(10) NOT NULL AUTO_INCREMENT COMMENT '案例ID',
  `image` varchar(255) NOT NULL COMMENT '图片',
  `content` text NOT NULL COMMENT '内容',
  `title` varchar(255) NOT NULL COMMENT '标题',
  `sort` int(10) NOT NULL COMMENT '排序',
  `url` varchar(255) NOT NULL COMMENT '连接',
  `productimage` varchar(255) NOT NULL COMMENT '产品图片',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='案例信息表' AUTO_INCREMENT=4 ;

--
-- 转存表中的数据 `zn_case`
--

INSERT INTO `zn_case` (`id`, `image`, `content`, `title`, `sort`, `url`, `productimage`) VALUES
(1, '/Public/editor/attached/image/20181120/20181120031500_56702.png', '任务HETARJYM', '我是公认的', 0, '', '/Public/editor/attached/image/20181121/20181121095332_64486.jpg'),
(2, '/Public/editor/attached/image/20181120/20181120031517_52462.png', '', '高的的非官方', 0, '', '/Public/editor/attached/image/20181121/20181121095352_15913.jpg'),
(3, '/Public/editor/attached/image/20181120/20181120031538_43626.png', '', 'nbfjdbfkdjfdjkgvfokvg', 0, '', '/Public/editor/attached/image/20181121/20181121095406_22799.jpg');

-- --------------------------------------------------------

--
-- 表的结构 `zn_classify_article`
--

CREATE TABLE IF NOT EXISTS `zn_classify_article` (
  `ca_id` int(10) NOT NULL AUTO_INCREMENT COMMENT '分类文章',
  `ca_image` varchar(255) NOT NULL COMMENT '图片',
  `ca_content` text NOT NULL COMMENT '文章内容',
  `ca_sort` int(10) NOT NULL COMMENT '排序',
  `lc_id` int(10) NOT NULL COMMENT '二级分类ID',
  `ca_title` varchar(255) NOT NULL COMMENT '标题',
  `ca_time` varchar(100) NOT NULL COMMENT '发表时间',
  `ca_min` varchar(50) NOT NULL COMMENT '动画时间',
  `ca_hideimage` varchar(255) NOT NULL COMMENT '隐藏图片',
  PRIMARY KEY (`ca_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='分类文章表' AUTO_INCREMENT=68 ;

--
-- 转存表中的数据 `zn_classify_article`
--

INSERT INTO `zn_classify_article` (`ca_id`, `ca_image`, `ca_content`, `ca_sort`, `lc_id`, `ca_title`, `ca_time`, `ca_min`, `ca_hideimage`) VALUES
(1, '/Public/editor/attached/image/20181107/20181107082609_33403.png', '否(ノ｀Д)ノ35\\(^o^)/~6＋7k67', 0, 2, '2018获得奖项', '1542339263', '1s', ''),
(2, '/Public/editor/attached/image/20181114/20181114022559_73956.png', '其二个人和他人经营痛苦与', 1, 4, '啦啦hh', '1542162361', '', ''),
(3, '/Public/editor/attached/image/20181114/20181114022615_37578.png', '为锁万人被谈话人那样', 0, 4, '问过他如何', '1542162376', '', ''),
(4, '/Public/editor/attached/image/20181114/20181114022535_88390.png', '似懂非懂那个符号吗', 0, 5, '水电费宝德股份你还干嘛', '1542162337', '', ''),
(5, '/Public/editor/attached/image/20181112/20181112035559_74259.png', '', 0, 6, 'lalal', '1542592369', '0.5s', ''),
(6, '/Public/editor/attached/image/20181114/20181114022635_58131.png', 'wegrhstjdykfuliu', 0, 7, '娃娃人核桃仁省', '1542162396', '', ''),
(7, '/Public/editor/attached/image/20181108/20181108091515_72729.png', '全方位各位RHAETRSYTDY，', 0, 8, '安徽数据库的能力方面', '1542602984', '0.5s', ''),
(8, '/Public/editor/attached/image/20181108/20181108091651_46216.jpg', '企鹅服务隔热条让你', 0, 9, '3全家人我可以他', '1542603025', '1s', ''),
(9, '/Public/editor/attached/image/20181109/20181109051251_46979.png', '', 0, 10, '', '1541740372', '', ''),
(10, '/Public/editor/attached/image/20181109/20181109051310_38814.png', '', 0, 10, '', '1541740391', '', ''),
(11, '/Public/editor/attached/image/20181109/20181109052230_13905.jpg', '', 0, 10, '', '1541740952', '', ''),
(12, '/Public/editor/attached/image/20181112/20181112035539_12241.png', '', 0, 6, '', '1541994941', '', ''),
(13, '/Public/editor/attached/image/20181112/20181112035635_65447.jpg', '', 0, 11, '', '1542592407', '1s', ''),
(14, '/Public/editor/attached/image/20181112/20181112035648_95264.jpg', '', 0, 11, '', '1541995010', '', ''),
(15, '/Public/editor/attached/image/20181112/20181112053646_56845.png', '<h4>\r\n	<span style="vertical-align:inherit;color:#FFFFFF;"><span style="vertical-align:inherit;color:#FFFFFF;"><span style="vertical-align:inherit;color:#FFFFFF;"><span style="vertical-align:inherit;color:#FFFFFF;">儿童早教机器人</span></span></span></span> \r\n</h4>\r\n<p>\r\n	<span style="vertical-align:inherit;"><span style="vertical-align:inherit;"><span style="vertical-align:inherit;"><span style="vertical-align:inherit;">单向+双向视频，AI智能语音交互</span></span></span></span> \r\n</p>\r\n<p>\r\n	<span style="vertical-align:inherit;"><span style="vertical-align:inherit;"><span style="vertical-align:inherit;"><span style="vertical-align:inherit;">故事机，教育娱乐</span></span></span></span> \r\n</p>\r\n<p>\r\n	<span style="vertical-align:inherit;"><span style="vertical-align:inherit;"><span style="vertical-align:inherit;"><span style="vertical-align:inherit;">幼儿园，小学同步课程，AR学习课程</span></span></span></span> \r\n</p>\r\n<p>\r\n	<span style="vertical-align:inherit;"><span style="vertical-align:inherit;"><span style="vertical-align:inherit;"><span style="vertical-align:inherit;">米林客智能家居操控系统</span></span></span></span> \r\n</p>\r\n<h4>\r\n	<span style="vertical-align:inherit;color:#FFFFFF;"><span style="vertical-align:inherit;color:#FFFFFF;"><span style="vertical-align:inherit;color:#FFFFFF;"><span style="vertical-align:inherit;color:#FFFFFF;">智意扫地机V5</span></span></span></span><span style="vertical-align:inherit;"></span> \r\n</h4>\r\n<p>\r\n	<span style="vertical-align:inherit;"><span style="vertical-align:inherit;"><span style="vertical-align:inherit;"><span style="vertical-align:inherit;">扫吸拖滤四位一体</span></span></span></span> \r\n</p>\r\n<p>\r\n	<span style="vertical-align:inherit;"><span style="vertical-align:inherit;"><span style="vertical-align:inherit;"><span style="vertical-align:inherit;">自动回充，定时清扫，重点清扫，沿边清扫，OBS全地形侦测系统</span></span></span></span> \r\n</p>\r\n<p>\r\n	<span style="vertical-align:inherit;"><span style="vertical-align:inherit;"><span style="vertical-align:inherit;"><span style="vertical-align:inherit;">超强吸力600Pa，超长续航为2600mAh，非常静音55分贝</span></span><br />\r\n</span></span> \r\n</p>', 0, 12, 'living room', '1542006006', '0.5s', ''),
(16, '/Public/editor/attached/image/20181112/20181112054244_22205.jpg', '<h4>\r\n	<span style="color:#FFFFFF;">智意扫地机X750</span>\r\n</h4>\r\n<p>\r\n	原装进口NIDEC无刷电机、气泵水箱结构\r\n</p>\r\n<p>\r\n	铝合金面盖、抽屉式750ML超大尘盒\r\n</p>\r\n<p>\r\n	自动回充、定时清扫、重点清扫、沿边清扫、路劲规划、扫地功能\r\n</p>\r\n<p>\r\n	OBS全地形侦测系统\r\n</p>\r\n<h4>\r\n	<span style="color:#FFFFFF;">TCL智能锁MR-znms-12</span>\r\n</h4>\r\n<p>\r\n	多种开门方式（指纹、密码、机械）\r\n</p>\r\n<p>\r\n	USB应急供电、半导体指纹头、把手读取模式\r\n</p>\r\n<p>\r\n	游离执手、B级锁芯、防撬报警\r\n</p>\r\n<h4>\r\n	<span style="color:#FFFFFF;">摩纳速热净饮机MN-BRT02</span>\r\n</h4>\r\n<p>\r\n	可移动、免安装、3秒速热、4挡水量、5级温控、4+1重精细过滤\r\n</p>\r\n<p>\r\n	RO反渗透滤芯（进口滤芯）、G.UV深紫外线杀菌、DIY自动换芯\r\n</p>\r\n<p>\r\n	4:1废水比（全球最强）、智能大屏（高端柔性PCB显示）、儿童防烫设计\r\n</p>', 0, 13, 'bedroom', '1543369783', '1s', ''),
(17, '/Public/editor/attached/image/20181112/20181112064258_35680.png', '<h4>\r\n	<span style="vertical-align:inherit;"><span style="vertical-align:inherit;"><span style="color:#FFFFFF;">巴玛厨房凉霸Z1812</span></span></span><span style="vertical-align:inherit;"></span><br />\r\n</h4>\r\n<p>\r\n	<span style="vertical-align:inherit;"><span style="vertical-align:inherit;">抗油污，杀菌</span></span> \r\n</p>\r\n<p>\r\n	<span style="vertical-align:inherit;"><span style="vertical-align:inherit;">空气检测，健康换气</span></span> \r\n</p>\r\n<p>\r\n	<span style="vertical-align:inherit;"><span style="vertical-align:inherit;">调速，照明，定时，风摆</span></span> \r\n</p>\r\n<h4>\r\n	<span style="vertical-align:inherit;"><span style="vertical-align:inherit;"><span style="color:#FFFFFF;">欧琳智能净水水槽（整套</span><span style="color:#FFFFFF;">）</span></span></span> \r\n</h4>\r\n<p>\r\n	<span style="vertical-align:inherit;"><span style="vertical-align:inherit;">手机远程开启净水器，随时随地保护家中水源</span></span> \r\n</p>\r\n<p>\r\n	<span style="vertical-align:inherit;"><span style="vertical-align:inherit;">二代四功能双出水嘴龙头，智能触控屏，多功能移动水槽<br />\r\n</span></span> \r\n</p>\r\n<p>\r\n	<span style="vertical-align:inherit;"><span style="vertical-align:inherit;">水电分离净水器<br />\r\n</span></span> \r\n</p>', 0, 14, 'kitchen', '1542005951', '1.5s', ''),
(18, '/Public/editor/attached/image/20181112/20181112064807_75580.png', '<h4>\r\n	<span style="vertical-align:inherit;"><span style="vertical-align:inherit;"><span style="color:#FFFFFF;">巴玛浴室浴霸Z1812</span></span></span> \r\n</h4>\r\n<p>\r\n	<span style="vertical-align:inherit;"><span style="vertical-align:inherit;">抗油污，杀菌</span></span> \r\n</p>\r\n<p>\r\n	空气检测、健康换气、取暖\r\n</p>\r\n<p>\r\n	调速、照明、定时、风摆\r\n</p>\r\n<h4>\r\n	<span style="color:#FFFFFF;">美观智能互动触摸浴室镜</span> \r\n</h4>\r\n<p>\r\n	安装智能APP，控制摄像头、窗帘、灯光、门锁、空调、电视\r\n</p>\r\n<p>\r\n	安装家庭健康app、测量家人的血压、心率、血氧、血糖、血脂\r\n</p>\r\n<p>\r\n	肺活量...新闻、电视、音乐、天气、交通、等等应有尽有\r\n</p>\r\n<p>\r\n	<br />\r\n</p>', 0, 15, 'living room', '1542005985', '2s', ''),
(19, '/Public/editor/attached/image/20181112/20181112083142_24122.jpg', 'dfewgrhtrt', 0, 8, '1234', '1542602978', '1s', ''),
(20, '/Public/editor/attached/image/20181113/20181113013239_88121.png', '', 0, 16, '', '1542072761', '', ''),
(21, '/Public/editor/attached/image/20181113/20181113013251_39067.jpg', '', 0, 16, '', '1542072772', '', ''),
(22, '/Public/editor/attached/image/20181113/20181113013310_69913.jpg', '', 0, 16, '', '1542072792', '', ''),
(23, '/Public/editor/attached/image/20181113/20181113014940_24139.jpg', '', 0, 17, '', '1542073781', '', ''),
(24, '/Public/editor/attached/image/20181113/20181113014955_56290.jpg', '', 0, 17, '', '1542073796', '', ''),
(25, '/Public/editor/attached/image/20181113/20181113015023_92466.jpg', '', 0, 17, '', '1542073825', '', ''),
(26, '/Public/editor/attached/image/20181113/20181113015046_50166.jpg', '', 0, 18, '', '1542073847', '', ''),
(27, '/Public/editor/attached/image/20181113/20181113015109_51874.jpg', '', 0, 18, '', '1542073871', '', ''),
(28, '/Public/editor/attached/image/20181113/20181113015124_34337.jpg', '', 0, 18, '', '1542073886', '', ''),
(29, '/Public/editor/attached/image/20181113/20181113031658_94885.png', '', 0, 8, 'qrwteryt', '1542602995', '1.5s', ''),
(30, '/Public/editor/attached/image/20181113/20181113100758_39278.png', '', 0, 19, '十几年一直专注智能家居行业', '1542103679', '1.5s', ''),
(31, '/Public/editor/attached/image/20181113/20181113100814_24414.png', '', 0, 19, '十几年一直专注智能家居行业', '1542103695', '2s', ''),
(32, '/Public/editor/attached/image/20181113/20181113100828_43241.png', '', 0, 19, '十几年一直专注智能家居行业', '1542103710', '2.5s', ''),
(33, '/Public/editor/attached/image/20181113/20181113100844_24960.png', '', 0, 19, '十几年一直专注智能家居行业', '1542103725', '3s', ''),
(34, '', '<p>\r\n	（1）有良好的合作意愿，能提供优质的商品，良好的售后服务并保证合作的顺利开展。\r\n</p>\r\n<p>\r\n	（2）有良好的合作意愿，能提供优质的商品，良好的售后服务并保证合作的顺利开展。\r\n</p>\r\n<p>\r\n	（3）有良好的合作意愿，能提供优质的商品，良好的售后服务并保证合作的顺利开展。\r\n</p>\r\n<p>\r\n	（4）有良好的合作意愿，能提供优质的商品，良好的售后服务并保证合作的顺利开展。\r\n</p>', 0, 20, '有良好的合作意愿，能提供优质的商品，良好的售后服务并保证合作的顺利开展。', '1542103824', '4s', ''),
(35, '', '<p>\r\n	（1）有良好的合作意愿，能提供优质的商品，良好的售后服务并保证合作的顺利开展。\r\n</p>\r\n<p>\r\n	（2）有良好的合作意愿，能提供优质的商品，良好的售后服务并保证合作的顺利开展。\r\n</p>\r\n<p>\r\n	（3）有良好的合作意愿，能提供优质的商品，良好的售后服务并保证合作的顺利开展。\r\n</p>\r\n<p>\r\n	（4）有良好的合作意愿，能提供优质的商品，良好的售后服务并保证合作的顺利开展。\r\n</p>', 0, 20, '	有良好的合作意愿，能提供优质的商品，良好的售后服务并保证合作的顺利开展。', '1542103834', '4.5s', ''),
(36, '', '<p>\r\n	（1）有良好的合作意愿，能提供优质的商品，良好的售后服务并保证合作的顺利开展。\r\n</p>\r\n<p>\r\n	（2）有良好的合作意愿，能提供优质的商品，良好的售后服务并保证合作的顺利开展。\r\n</p>\r\n<p>\r\n	（3）有良好的合作意愿，能提供优质的商品，良好的售后服务并保证合作的顺利开展。\r\n</p>\r\n<p>\r\n	（4）有良好的合作意愿，能提供优质的商品，良好的售后服务并保证合作的顺利开展。\r\n</p>', 0, 20, '	有良好的合作意愿，能提供优质的商品，良好的售后服务并保证合作的顺利开展。', '1542103840', '5s', ''),
(37, '/Public/editor/attached/image/20181114/20181114012103_80370.png', '', 0, 21, '联系招商专员', '1543376584', '6s', '/Public/editor/attached/image/20181128/20181128034302_44755.png'),
(38, '/Public/editor/attached/image/20181114/20181114012151_22436.png', '', 0, 21, '填写申请表', '1543376601', '6.5s', '/Public/editor/attached/image/20181128/20181128034320_70067.png'),
(39, '/Public/editor/attached/image/20181114/20181114012233_21293.png', '', 0, 21, '签订合同协议', '1543376615', '7s', '/Public/editor/attached/image/20181128/20181128034334_94570.png'),
(40, '/Public/editor/attached/image/20181114/20181114012317_72462.png', '', 0, 21, '缴纳费用', '1543376628', '7.5s', '/Public/editor/attached/image/20181128/20181128034346_38135.png'),
(41, '/Public/editor/attached/image/20181114/20181114012459_56106.png', '', 0, 21, '加盟成功', '1543376641', '8s', '/Public/editor/attached/image/20181128/20181128034400_33280.png'),
(42, '/Public/editor/attached/image/20181116/20181116012106_30269.jpg', '', 0, 22, '客厅体验中心', '1542331268', '', ''),
(43, '/Public/editor/attached/image/20181116/20181116020803_85239.png', '', 0, 22, '客厅体验中心', '1542334084', '', ''),
(44, '/Public/editor/attached/image/20181116/20181116020823_69839.jpg', '', 0, 22, '客厅体验中心', '1542334104', '', ''),
(45, '/Public/editor/attached/image/20181116/20181116021532_44546.jpg', '', 0, 23, '卧室体验中心', '1542334534', '', ''),
(46, '/Public/editor/attached/image/20181116/20181116021742_88958.jpg', '', 0, 24, '厕所体验中心', '1542334663', '', ''),
(47, '/Public/editor/attached/image/20181116/20181116030908_19898.png', '', 0, 4, 'hfhfhhg', '1542337749', '', ''),
(48, '/Public/editor/attached/image/20181116/20181116030923_69633.png', '', 0, 4, 'fgdrgdgbvcb', '1542337765', '', ''),
(49, '/Public/editor/attached/image/20181116/20181116033134_97783.jpg', '', 0, 2, '2018获得奖项', '1542339271', '1.5s', ''),
(50, '/Public/editor/attached/image/20181116/20181116033214_95643.jpg', '', 0, 2, '2018获得奖项', '1542339205', '2s', ''),
(51, '/Public/editor/attached/image/20181116/20181116033258_60550.png', '', 0, 2, '2018获得奖项', '1542339183', '2.5s', ''),
(52, '/Public/editor/attached/image/20181116/20181116033502_24169.png', '', 0, 2, '2018获得奖项', '1542339308', '3s', ''),
(53, '/Public/editor/attached/image/20181116/20181116033617_82314.png', '', 0, 2, '2018获得奖项', '1542339383', '3.5s', ''),
(56, '/Public/editor/attached/image/20181116/20181116065135_44983.png', '', 0, 4, '家用防盗门锁', '1542351096', '', ''),
(57, '/Public/editor/attached/image/20181116/20181116065858_30173.png', '', 0, 4, '智能锁', '1542351540', '', ''),
(58, '/Public/editor/attached/image/20181116/20181116065927_74456.png', '', 0, 4, '智能锁', '1542351568', '', ''),
(59, '/Public/editor/attached/image/20181116/20181116065954_98082.png', '', 0, 4, '智能锁', '1542351595', '', ''),
(60, '/Public/editor/attached/image/20181128/20181128071151_21412.jpg', '', 0, 27, '认为内容', '1543389112', '2s', ''),
(61, '/Public/editor/attached/image/20181116/20181116104122_19335.jpg', '', 0, 28, '认为他', '1542592439', '2.5s', ''),
(62, 'https://f11.baidu.com/it/u=642753244,1588215304&amp;fm=72', '', 0, 29, 'hgjghjgh', '1543387008', '', ''),
(63, 'https://f11.baidu.com/it/u=3087422712,1174175413&amp;fm=72', '', 0, 30, 'dvbfdvdfsv', '1543387047', '', ''),
(64, 'https://f11.baidu.com/it/u=3001915256,970479921&amp;fm=72', '', 0, 31, 'vdsv', '1543389824', '', ''),
(65, 'http://img2.imgtn.bdimg.com/it/u=2315191085,1038988107&amp;fm=200&amp;gp=0.jpg', '', 0, 32, 'dsvdsvdv', '1543387173', '', ''),
(66, 'http://img2.imgtn.bdimg.com/it/u=2315191085,1038988107&amp;fm=200&amp;gp=0.jpg', '', 0, 33, 'dvbfdvds', '1543387223', '', ''),
(67, 'http://img2.imgtn.bdimg.com/it/u=2315191085,1038988107&amp;fm=200&amp;gp=0.jpg', '', 0, 34, 'dvsdvsd', '1543387242', '', '');

-- --------------------------------------------------------

--
-- 表的结构 `zn_company_introduce`
--

CREATE TABLE IF NOT EXISTS `zn_company_introduce` (
  `ci_id` int(10) NOT NULL AUTO_INCREMENT COMMENT '公司简介',
  `ci_content` text NOT NULL COMMENT '公司简介',
  `ci_logo` varchar(255) NOT NULL COMMENT '公司logo',
  `ci_name` varchar(255) NOT NULL COMMENT '公司名称',
  `ci_title` varchar(255) NOT NULL COMMENT '标题',
  `ci_image` varchar(255) NOT NULL COMMENT '背景图片',
  PRIMARY KEY (`ci_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='公司简介信息表' AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `zn_company_introduce`
--

INSERT INTO `zn_company_introduce` (`ci_id`, `ci_content`, `ci_logo`, `ci_name`, `ci_title`, `ci_image`) VALUES
(1, '我VR恶不突然那一条木有问过我热图内容页面图问问吧而你他妈，㔿<span>我VR恶不突然那一条木有问过我热图内容页面图问问吧而你他妈，㔿</span><span>我VR恶不突然那一条木有问过我热图内容页面图问问吧而你他妈，㔿</span><span>我VR恶不突然那一条木有问过我热图内容页面图问问吧而你他妈，㔿</span><span>我VR恶不突然那一条木有问过我热图内容页面图问问吧而你他妈，㔿</span><span>我VR恶不突然了健康啦啦啦</span>', '/Public/editor/attached/image/20181108/20181108093609_69087.png', 'xxx某公司', '物权法额外热构图', '/Public/editor/attached/image/20181109/20181109052740_69900.png');

-- --------------------------------------------------------

--
-- 表的结构 `zn_footer`
--

CREATE TABLE IF NOT EXISTS `zn_footer` (
  `id` int(10) NOT NULL AUTO_INCREMENT COMMENT '底部信息id',
  `telephone` varchar(100) NOT NULL COMMENT '热线电话',
  `wx_erweima` varchar(255) NOT NULL COMMENT '微信二维码',
  `wb_erweima` varchar(255) NOT NULL COMMENT '微博二维码',
  `address` varchar(255) NOT NULL COMMENT '地址',
  `copyright` varchar(255) NOT NULL COMMENT '版权',
  `record` varchar(255) NOT NULL COMMENT '备案',
  `map` text NOT NULL COMMENT '地图',
  `email` varchar(255) NOT NULL COMMENT '邮箱',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='底部信息表' AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `zn_footer`
--

INSERT INTO `zn_footer` (`id`, `telephone`, `wx_erweima`, `wb_erweima`, `address`, `copyright`, `record`, `map`, `email`) VALUES
(1, '12345645', '/Public/editor/attached/image/20181107/20181107050943_29055.png', '/Public/editor/attached/image/20181107/20181107050951_32769.png', '陕西省西安市浐灞生态区欧亚大道西段欧亚国际A座1227', 'wevraebtnsrymtu', '的深V都不过分呢', '<img src="http://api.map.baidu.com/staticimage?center=109.015007%2C34.339284&zoom=12&width=558&height=360&markers=109.015007%2C34.339284&markerStyles=l%2CA" alt="" />', '123456789@qq.com');

-- --------------------------------------------------------

--
-- 表的结构 `zn_home_decorate_title`
--

CREATE TABLE IF NOT EXISTS `zn_home_decorate_title` (
  `hdt_id` int(10) NOT NULL AUTO_INCREMENT COMMENT '全屋整装分类ID',
  `hdt_image` varchar(255) NOT NULL COMMENT '图标',
  `hdt_sort` int(10) NOT NULL COMMENT '排序',
  `hdt_title` varchar(255) NOT NULL COMMENT '标题',
  PRIMARY KEY (`hdt_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='全屋整装信息表' AUTO_INCREMENT=7 ;

--
-- 转存表中的数据 `zn_home_decorate_title`
--

INSERT INTO `zn_home_decorate_title` (`hdt_id`, `hdt_image`, `hdt_sort`, `hdt_title`) VALUES
(1, '/Public/editor/attached/image/20181112/20181112095040_71616.png', 0, '硬装'),
(2, '/Public/editor/attached/image/20181112/20181112095109_67299.png', 0, '硬装'),
(3, '/Public/editor/attached/image/20181112/20181112095135_47913.png', 0, '硬装'),
(4, '/Public/editor/attached/image/20181112/20181112095159_84643.png', 0, '硬装'),
(5, '/Public/editor/attached/image/20181112/20181112095224_23897.png', 0, '硬装'),
(6, '/Public/editor/attached/image/20181112/20181112095243_89455.png', 0, '硬装');

-- --------------------------------------------------------

--
-- 表的结构 `zn_little_classify`
--

CREATE TABLE IF NOT EXISTS `zn_little_classify` (
  `lc_id` int(10) NOT NULL AUTO_INCREMENT COMMENT '小分类ID',
  `lc_name` varchar(100) NOT NULL COMMENT '分类名称',
  `lc_sort` int(10) NOT NULL COMMENT '排序',
  `ac_id` int(11) NOT NULL COMMENT '总分类id',
  `nav_id` int(10) NOT NULL COMMENT '导航id',
  PRIMARY KEY (`lc_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='小分类信息表' AUTO_INCREMENT=35 ;

--
-- 转存表中的数据 `zn_little_classify`
--

INSERT INTO `zn_little_classify` (`lc_id`, `lc_name`, `lc_sort`, `ac_id`, `nav_id`) VALUES
(2, '品牌荣誉', 0, 1, 12),
(4, '智能锁', 0, 3, 0),
(5, '智能灯泡', 0, 3, 0),
(6, '欧式', 0, 4, 0),
(7, '云门铃', 0, 3, 0),
(8, '企业新闻', 0, 5, 0),
(9, '最新资讯', 0, 5, 0),
(10, '品牌介绍', 1, 1, 11),
(11, '日式', 0, 4, 0),
(12, '客厅', 0, 6, 0),
(13, '卧室', 0, 6, 0),
(14, '厨房', 0, 6, 0),
(15, '洗手间', 0, 6, 0),
(16, '舒适卧室', 0, 7, 0),
(17, '简约客厅', 0, 7, 0),
(18, '开放厨房', 0, 7, 0),
(19, '我们的优势', 0, 8, 0),
(20, '加盟政策', 0, 8, 0),
(21, '加盟流程', 0, 8, 0),
(22, '客厅', 0, 9, 0),
(23, '卧室', 0, 9, 0),
(24, '厕所', 0, 9, 0),
(25, '厨房', 0, 0, 0),
(26, '厨房', 1, 9, 0),
(27, '美式', 0, 4, 0),
(28, '到达利亚', 0, 4, 0),
(29, '23113223132', 0, 4, 4),
(30, 'vbvb', 0, 4, 4),
(31, 'ghtfgh', 0, 4, 4),
(32, 'dvsdvds', 0, 10, 4),
(33, 'xczvsdfvfdvsdvsdvs', 0, 4, 4),
(34, ' vbdfbdfb', 0, 4, 4);

-- --------------------------------------------------------

--
-- 表的结构 `zn_lunbo`
--

CREATE TABLE IF NOT EXISTS `zn_lunbo` (
  `lb_id` int(10) NOT NULL AUTO_INCREMENT COMMENT '轮播ID',
  `lb_image` varchar(255) NOT NULL COMMENT '轮播图片',
  `lb_sort` int(10) NOT NULL COMMENT '排序',
  `lb_title` varchar(255) NOT NULL COMMENT '轮播标题',
  `lb_url` varchar(255) NOT NULL COMMENT '跳转路径',
  `nav_id` int(10) NOT NULL COMMENT '导航ID',
  PRIMARY KEY (`lb_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='轮播信息表' AUTO_INCREMENT=4 ;

--
-- 转存表中的数据 `zn_lunbo`
--

INSERT INTO `zn_lunbo` (`lb_id`, `lb_image`, `lb_sort`, `lb_title`, `lb_url`, `nav_id`) VALUES
(1, '/Public/editor/attached/image/20181127/20181127083228_58100.png', 0, 'hahha', '', 1),
(2, '/Public/editor/attached/image/20181108/20181108033259_99859.png', 0, 'kaka', '', 2),
(3, '/Public/editor/attached/image/20181127/20181127083205_32318.png', 0, 'fff', '', 1);

-- --------------------------------------------------------

--
-- 表的结构 `zn_nav`
--

CREATE TABLE IF NOT EXISTS `zn_nav` (
  `nav_id` int(10) NOT NULL AUTO_INCREMENT COMMENT '导航id',
  `nav_name` varchar(255) NOT NULL COMMENT '导航名称',
  `nav_url` varchar(255) NOT NULL COMMENT '导航链接',
  `nav_sort` int(10) NOT NULL COMMENT '排序',
  `nav_fid` int(11) NOT NULL COMMENT '父级导航ID',
  PRIMARY KEY (`nav_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='导航信息表' AUTO_INCREMENT=15 ;

--
-- 转存表中的数据 `zn_nav`
--

INSERT INTO `zn_nav` (`nav_id`, `nav_name`, `nav_url`, `nav_sort`, `nav_fid`) VALUES
(1, '首页', '/index.php/Home/Index/index', 0, 0),
(2, '品牌简介', '/index.php/Home/Index/pinpaijianjie', 0, 0),
(3, '产品中心', '/index.php/Home/Index/chanpinzhongxin', 0, 0),
(4, '全屋集成整装', '/index.php/Home/Index/quanwujichengzhengzhuang', 0, 0),
(5, '全屋智能', '/index.php/Home/Index/quanwuzhineng', 0, 0),
(6, '场景体验中心', '/index.php/Home/Index/changjingtiyanzhongxin', 0, 0),
(7, '案例展示', '/index.php/Home/Index/anlizhanshi', 0, 0),
(8, '最新资讯', '/index.php/Home/Index/zuixinzixun', 0, 0),
(9, '联系我们', '/index.php/Home/Index/lianxiwomen', 0, 0),
(10, '加盟中心', '/index.php/Home/Index/jiamengzhongxin', 0, 0),
(11, '品牌介绍', '/index.php/Home/Index/pinpaijianjie', 0, 2),
(12, '品牌荣誉', '/index.php/Home/Index/pinpairongyu', 0, 2),
(13, '智能锁', '', 0, 3),
(14, '智能门铃', '', 0, 3);

-- --------------------------------------------------------

--
-- 表的结构 `zn_product`
--

CREATE TABLE IF NOT EXISTS `zn_product` (
  `pid` int(10) NOT NULL AUTO_INCREMENT COMMENT '产品ID',
  `pc_id` int(10) NOT NULL COMMENT '分类id',
  `pname` varchar(255) NOT NULL COMMENT '产品名称',
  `ptime` varchar(100) NOT NULL COMMENT '发布时间',
  `pprice` float NOT NULL COMMENT '产品价格',
  `pintroduce` text NOT NULL COMMENT '产品介绍',
  `psort` int(10) NOT NULL COMMENT '排序',
  `pimage` varchar(255) NOT NULL COMMENT '产品图片',
  PRIMARY KEY (`pid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='产品信息表' AUTO_INCREMENT=4 ;

--
-- 转存表中的数据 `zn_product`
--

INSERT INTO `zn_product` (`pid`, `pc_id`, `pname`, `ptime`, `pprice`, `pintroduce`, `psort`, `pimage`) VALUES
(2, 2, '家用防盗门锁', '1542700402', 72.6, 'r djngrtk7jk', 0, '/Public/editor/attached/image/20181120/20181120075321_62852.jpg'),
(3, 3, '家用防盗门锁', '1542709625', 0, '若干个感叹号关于加快', 0, '/Public/editor/attached/image/20181120/20181120085439_82765.png');

-- --------------------------------------------------------

--
-- 表的结构 `zn_product_classify`
--

CREATE TABLE IF NOT EXISTS `zn_product_classify` (
  `pc_id` int(10) NOT NULL AUTO_INCREMENT COMMENT '产品分类ID',
  `pc_name` varchar(255) NOT NULL COMMENT '产品分类名称',
  `pc_sort` int(10) NOT NULL COMMENT '排序',
  `nav_id` int(10) NOT NULL COMMENT '导航ID',
  PRIMARY KEY (`pc_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='产品分类信息表' AUTO_INCREMENT=4 ;

--
-- 转存表中的数据 `zn_product_classify`
--

INSERT INTO `zn_product_classify` (`pc_id`, `pc_name`, `pc_sort`, `nav_id`) VALUES
(3, '智能门铃', 0, 14),
(2, '智能锁', 1, 13);

-- --------------------------------------------------------

--
-- 表的结构 `zn_scene`
--

CREATE TABLE IF NOT EXISTS `zn_scene` (
  `id` int(10) NOT NULL AUTO_INCREMENT COMMENT '场景ID',
  `image` varchar(255) NOT NULL COMMENT '场景图片',
  `sort` int(10) NOT NULL COMMENT '排序',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='场景信息表' AUTO_INCREMENT=5 ;

--
-- 转存表中的数据 `zn_scene`
--

INSERT INTO `zn_scene` (`id`, `image`, `sort`) VALUES
(1, '/Public/editor/attached/image/20181108/20181108081608_48515.jpg', 0),
(2, '/Public/editor/attached/image/20181108/20181108081632_88110.jpg', 0),
(3, '/Public/editor/attached/image/20181108/20181108081742_27907.png', 0),
(4, '/Public/editor/attached/image/20181108/20181108081804_15188.png', 0);

-- --------------------------------------------------------

--
-- 表的结构 `zn_user`
--

CREATE TABLE IF NOT EXISTS `zn_user` (
  `id` int(10) NOT NULL AUTO_INCREMENT COMMENT '用户ID',
  `name` varchar(255) NOT NULL COMMENT '用户名称',
  `content` text NOT NULL COMMENT '备注内容',
  `sort` int(10) NOT NULL COMMENT '排序',
  `telephone` varchar(100) NOT NULL COMMENT '电话',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='用户信息表' AUTO_INCREMENT=24 ;

--
-- 转存表中的数据 `zn_user`
--

INSERT INTO `zn_user` (`id`, `name`, `content`, `sort`, `telephone`) VALUES
(3, '', '', 0, ''),
(4, '', '', 0, ''),
(5, '', '', 0, ''),
(6, '', '', 0, ''),
(7, '', '', 0, ''),
(8, '', '', 0, ''),
(9, '', '', 0, ''),
(10, '', '', 0, ''),
(11, '', '', 0, ''),
(12, '', '', 0, ''),
(13, '', '', 0, ''),
(14, '', '', 0, ''),
(15, '', '', 0, ''),
(16, '', '', 0, ''),
(17, '', '', 0, ''),
(18, '', '', 0, ''),
(19, '', '', 0, ''),
(20, '', '', 0, ''),
(21, '', '', 0, ''),
(22, 'qwe', 'sadaf', 0, '123'),
(23, 'qwe', 'sdfr', 0, '123');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
