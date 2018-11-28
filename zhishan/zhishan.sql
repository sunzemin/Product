-- phpMyAdmin SQL Dump
-- version phpStudy 2014
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2018 �?10 �?30 �?01:44
-- 服务器版本: 5.5.53
-- PHP 版本: 5.6.27

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `zhishan`
--

-- --------------------------------------------------------

--
-- 表的结构 `zs_about_article`
--

CREATE TABLE IF NOT EXISTS `zs_about_article` (
  `aa_id` int(10) NOT NULL AUTO_INCREMENT COMMENT '文章ID',
  `aa_content` text NOT NULL COMMENT '文章内容',
  `aa_image` varchar(255) NOT NULL COMMENT '文章图片',
  `aa_name` varchar(255) NOT NULL COMMENT '文章名称',
  `aa_image1` varchar(255) NOT NULL COMMENT '文章图片2',
  `aa_image2` varchar(255) NOT NULL COMMENT '文章图片3',
  `aa_name1` varchar(255) NOT NULL COMMENT '文章名称2',
  `aa_name2` varchar(255) NOT NULL COMMENT '文章名称3',
  `auc_id` int(10) NOT NULL COMMENT '分类ID',
  `aa_sort` int(10) NOT NULL COMMENT '排序',
  PRIMARY KEY (`aa_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='关于我们文章信息表' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `zs_about_us_classify`
--

CREATE TABLE IF NOT EXISTS `zs_about_us_classify` (
  `auc_id` int(10) NOT NULL AUTO_INCREMENT COMMENT '分类ID',
  `auc_name` varchar(255) NOT NULL COMMENT '分类名称',
  `auc_sort` int(11) NOT NULL COMMENT '排序',
  `nav_id` int(11) NOT NULL COMMENT '导航',
  PRIMARY KEY (`auc_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- 转存表中的数据 `zs_about_us_classify`
--

INSERT INTO `zs_about_us_classify` (`auc_id`, `auc_name`, `auc_sort`, `nav_id`) VALUES
(1, '公司简介', 0, 12),
(2, '企业文化', 0, 13),
(3, '荣誉资质', 0, 14),
(4, '领导致辞', 0, 15),
(5, '服务优势', 0, 16),
(6, '联系我们', 0, 17),
(7, '公司与团队', 0, 28);

-- --------------------------------------------------------

--
-- 表的结构 `zs_admin`
--

CREATE TABLE IF NOT EXISTS `zs_admin` (
  `aid` int(10) NOT NULL AUTO_INCREMENT COMMENT '管理员ID',
  `aname` varchar(100) NOT NULL COMMENT '管理员名称',
  `apwd` varchar(255) NOT NULL COMMENT '管理员密码',
  `aip` varchar(100) NOT NULL COMMENT '登录IP',
  `asort` int(10) NOT NULL COMMENT '排序',
  PRIMARY KEY (`aid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='管理员信息表' AUTO_INCREMENT=3 ;

--
-- 转存表中的数据 `zs_admin`
--

INSERT INTO `zs_admin` (`aid`, `aname`, `apwd`, `aip`, `asort`) VALUES
(1, 'admin', 'e10adc3949ba59abbe56e057f20f883e', '127.0.0.1', 0),
(2, 'sun', 'e10adc3949ba59abbe56e057f20f883e', '127.0.0.1', 0);

-- --------------------------------------------------------

--
-- 表的结构 `zs_admin_config`
--

CREATE TABLE IF NOT EXISTS `zs_admin_config` (
  `ac_id` int(10) NOT NULL AUTO_INCREMENT COMMENT '记录ID',
  `ac_aid` int(10) NOT NULL COMMENT '管理员ID',
  `ac_name` varchar(100) NOT NULL COMMENT '管理员名称',
  `ac_ip` varchar(100) NOT NULL COMMENT '登录IP',
  `ac_time` varchar(100) NOT NULL COMMENT '登录时间戳',
  `ac_sort` int(10) NOT NULL COMMENT '排序',
  PRIMARY KEY (`ac_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='记录管理员登录信息表' AUTO_INCREMENT=29 ;

--
-- 转存表中的数据 `zs_admin_config`
--

INSERT INTO `zs_admin_config` (`ac_id`, `ac_aid`, `ac_name`, `ac_ip`, `ac_time`, `ac_sort`) VALUES
(1, 0, 'admin', '127.0.0.1', '1539313577', 0),
(2, 0, 'admin', '127.0.0.1', '1539314096', 0),
(3, 1, 'admin', '127.0.0.1', '1539314452', 0),
(4, 1, 'admin', '127.0.0.1', '1539325815', 0),
(5, 1, 'admin', '127.0.0.1', '1539326235', 0),
(6, 1, 'admin', '127.0.0.1', '1539326388', 0),
(7, 1, 'admin', '127.0.0.1', '1539566222', 0),
(8, 1, 'admin', '127.0.0.1', '1539652217', 0),
(9, 1, 'admin', '127.0.0.1', '1539738476', 0),
(10, 1, 'admin', '127.0.0.1', '1539824946', 0),
(11, 1, 'admin', '127.0.0.1', '1539847881', 0),
(12, 1, 'admin', '127.0.0.1', '1539911524', 0),
(13, 1, 'admin', '127.0.0.1', '1540170519', 0),
(14, 1, 'admin', '127.0.0.1', '1540189455', 0),
(15, 1, 'admin', '127.0.0.1', '1540258951', 0),
(16, 1, 'admin', '127.0.0.1', '1540274107', 0),
(17, 1, 'admin', '127.0.0.1', '1540343434', 0),
(18, 1, 'admin', '127.0.0.1', '1540371883', 0),
(19, 1, 'admin', '127.0.0.1', '1540438760', 0),
(20, 1, 'admin', '127.0.0.1', '1540449065', 0),
(21, 1, 'admin', '127.0.0.1', '1540455719', 0),
(22, 1, 'admin', '127.0.0.1', '1540516715', 0),
(23, 1, 'admin', '127.0.0.1', '1540518308', 0),
(24, 1, 'admin', '127.0.0.1', '1540540725', 0),
(25, 1, 'admin', '127.0.0.1', '1540542956', 0),
(26, 1, 'admin', '192.168.0.111', '1540777864', 0),
(27, 1, 'admin', '192.168.0.111', '1540777944', 0),
(28, 1, 'admin', '127.0.0.1', '1540862459', 0);

-- --------------------------------------------------------

--
-- 表的结构 `zs_background_image`
--

CREATE TABLE IF NOT EXISTS `zs_background_image` (
  `bi_id` int(10) NOT NULL AUTO_INCREMENT COMMENT '背景图片ID',
  `bi_image` varchar(255) NOT NULL COMMENT '背景图片',
  `bi_sort` int(10) NOT NULL COMMENT '排序',
  `bi_flag` int(10) NOT NULL COMMENT '页面标志',
  PRIMARY KEY (`bi_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='背景图片标志' AUTO_INCREMENT=26 ;

--
-- 转存表中的数据 `zs_background_image`
--

INSERT INTO `zs_background_image` (`bi_id`, `bi_image`, `bi_sort`, `bi_flag`) VALUES
(2, '/Public/editor/attached/image/20181018/20181018030128_37883.jpg', 0, 0),
(3, '/Public/editor/attached/image/20181018/20181018030226_69570.jpg', 0, 0),
(4, '/Public/editor/attached/image/20181018/20181018030257_42025.jpg', 0, 0),
(5, '/Public/editor/attached/image/20181022/20181022092841_99502.jpg', 0, 0),
(6, '/Public/editor/attached/image/20181023/20181023061502_42720.jpg', 0, 2),
(8, '/Public/editor/attached/image/20181023/20181023064242_93987.jpg', 0, 3),
(9, '/Public/editor/attached/image/20181023/20181023070209_47694.jpg', 0, 4),
(10, '/Public/editor/attached/image/20181023/20181023070502_34653.jpg', 0, 5),
(11, '/Public/editor/attached/image/20181023/20181023070528_99881.jpg', 0, 6),
(12, '/Public/editor/attached/image/20181023/20181023070718_53121.png', 0, 7),
(13, '/Public/editor/attached/image/20181023/20181023071051_59413.jpg', 0, 8),
(14, '/Public/editor/attached/image/20181023/20181023072328_74385.jpg', 0, 9),
(15, '/Public/editor/attached/image/20181023/20181023072420_15748.jpg', 0, 9),
(16, '/Public/editor/attached/image/20181023/20181023073237_38916.jpg', 0, 10),
(17, '/Public/editor/attached/image/20181023/20181023074055_65409.jpg', 0, 11),
(18, '/Public/editor/attached/image/20181023/20181023090123_48169.jpg', 0, 0),
(20, '/Public/editor/attached/image/20181026/20181026015402_41110.jpg', 0, 2),
(21, '/Public/editor/attached/image/20181026/20181026020319_18723.jpg', 0, 3),
(22, '/Public/editor/attached/image/20181026/20181026021024_57839.jpg', 0, 11),
(23, '/Public/editor/attached/image/20181026/20181026021221_82402.jpg', 0, 10),
(24, '/Public/editor/attached/image/20181026/20181026021320_80241.jpg', 0, 8),
(25, '/Public/editor/attached/image/20181026/20181026021437_72959.jpg', 0, 7);

-- --------------------------------------------------------

--
-- 表的结构 `zs_certificate`
--

CREATE TABLE IF NOT EXISTS `zs_certificate` (
  `id` int(10) NOT NULL AUTO_INCREMENT COMMENT '荣誉证书ID',
  `title` varchar(100) NOT NULL COMMENT '证书名称',
  `image` varchar(255) NOT NULL COMMENT '证书照片',
  `update` varchar(100) NOT NULL COMMENT '更新时间',
  `click` int(10) NOT NULL COMMENT '点击数',
  `sort` int(11) NOT NULL COMMENT '排序',
  `nav_id` int(10) NOT NULL COMMENT '导航ID',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='荣誉证书信息表' AUTO_INCREMENT=5 ;

--
-- 转存表中的数据 `zs_certificate`
--

INSERT INTO `zs_certificate` (`id`, `title`, `image`, `update`, `click`, `sort`, `nav_id`) VALUES
(2, 'cet-4', '/Public/editor/attached/image/20181015/20181015070814_13326.jpg', '1540199302', 0, 0, 14),
(3, 'wethjy', '/Public/editor/attached/image/20181016/20181016055724_25542.jpg', '1539680752', 0, 0, 14),
(4, 'werehtrjy', '/Public/editor/attached/image/20181019/20181019023847_17934.png', '1539916757', 0, 0, 14);

-- --------------------------------------------------------

--
-- 表的结构 `zs_company_culture`
--

CREATE TABLE IF NOT EXISTS `zs_company_culture` (
  `cc_id` int(10) NOT NULL AUTO_INCREMENT COMMENT '文化ID',
  `cc_content` text NOT NULL COMMENT '企业文化内容',
  `cc_sort` int(10) NOT NULL COMMENT '排序',
  `nav_id` int(10) NOT NULL COMMENT '导航ID',
  PRIMARY KEY (`cc_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='企业文化信息表' AUTO_INCREMENT=3 ;

--
-- 转存表中的数据 `zs_company_culture`
--

INSERT INTO `zs_company_culture` (`cc_id`, `cc_content`, `cc_sort`, `nav_id`) VALUES
(1, '温哥华突然一天地方不给你', 0, 13);

-- --------------------------------------------------------

--
-- 表的结构 `zs_company_introduce`
--

CREATE TABLE IF NOT EXISTS `zs_company_introduce` (
  `ci_id` int(10) NOT NULL AUTO_INCREMENT COMMENT '公司简介ID',
  `ci_name` varchar(100) NOT NULL COMMENT '公司名称',
  `ci_content` text NOT NULL COMMENT '公司简介',
  `ci_logo` varchar(255) NOT NULL COMMENT 'logo',
  `ci_sort` int(10) NOT NULL COMMENT '排序',
  `ci_telephone` varchar(100) NOT NULL COMMENT '热心电话',
  `nav_id` int(10) NOT NULL COMMENT '导航ID',
  PRIMARY KEY (`ci_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='公司简介信息表' AUTO_INCREMENT=3 ;

--
-- 转存表中的数据 `zs_company_introduce`
--

INSERT INTO `zs_company_introduce` (`ci_id`, `ci_name`, `ci_content`, `ci_logo`, `ci_sort`, `ci_telephone`, `nav_id`) VALUES
(1, '西安至善人力资源有限公司', '东北师范你们， 问5k76l', '/Public/editor/attached/image/20181017/20181017090333_32093.png', 0, '123455', 2);

-- --------------------------------------------------------

--
-- 表的结构 `zs_company_team`
--

CREATE TABLE IF NOT EXISTS `zs_company_team` (
  `ct_id` int(10) NOT NULL AUTO_INCREMENT COMMENT '公司与团队ID',
  `ct_content` text NOT NULL COMMENT '详情内容',
  `ct_sort` int(11) NOT NULL COMMENT '排序',
  `ct_title` varchar(255) NOT NULL COMMENT '标题',
  `ct_image` varchar(255) NOT NULL COMMENT '图片',
  `nav_id` int(11) NOT NULL COMMENT '导航id',
  PRIMARY KEY (`ct_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='公司与团队' AUTO_INCREMENT=3 ;

--
-- 转存表中的数据 `zs_company_team`
--

INSERT INTO `zs_company_team` (`ct_id`, `ct_content`, `ct_sort`, `ct_title`, `ct_image`, `nav_id`) VALUES
(1, '<p>\r\n	dsfbgnrthm\r\n</p>\r\n<p>\r\n	<br />\r\n</p>', 1, '违法如果', '/Public/editor/attached/image/20181017/20181017103230_28838.jpg', 28);

-- --------------------------------------------------------

--
-- 表的结构 `zs_cooperate_company`
--

CREATE TABLE IF NOT EXISTS `zs_cooperate_company` (
  `cc_id` int(10) NOT NULL AUTO_INCREMENT COMMENT '合作公司ID',
  `cc_name` varchar(100) NOT NULL COMMENT '公司名称',
  `cc_image` varchar(255) NOT NULL COMMENT 'logo图片',
  `cc_author` varchar(100) NOT NULL COMMENT '作者',
  `cc_origin` varchar(100) NOT NULL COMMENT '来源',
  `cc_update` varchar(100) NOT NULL COMMENT '更新时间',
  `cc_click` int(10) NOT NULL COMMENT '点击数',
  `cc_sort` int(10) NOT NULL COMMENT '排序',
  PRIMARY KEY (`cc_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='合作企业信息表' AUTO_INCREMENT=5 ;

--
-- 转存表中的数据 `zs_cooperate_company`
--

INSERT INTO `zs_cooperate_company` (`cc_id`, `cc_name`, `cc_image`, `cc_author`, `cc_origin`, `cc_update`, `cc_click`, `cc_sort`) VALUES
(2, '风', '/Public/editor/attached/image/20181015/20181015023221_81026.jpg', '凡人歌', '五个人和', '1539570747', 0, 0),
(3, '3546u5i6', '/Public/editor/attached/image/20181016/20181016054134_69688.jpg', '465', '35465', '1539668497', 0, 0),
(4, '单方事故', '/Public/editor/attached/image/20181017/20181017092235_44038.jpg', '二哥', '请问', '1539768160', 0, 0);

-- --------------------------------------------------------

--
-- 表的结构 `zs_employee`
--

CREATE TABLE IF NOT EXISTS `zs_employee` (
  `tid` int(10) NOT NULL AUTO_INCREMENT COMMENT '人才ID',
  `tname` varchar(100) NOT NULL COMMENT '姓名',
  `tsex` varchar(50) NOT NULL COMMENT '性别',
  `tage` int(10) NOT NULL COMMENT '年龄',
  `ttelephone` varchar(100) NOT NULL COMMENT '电话',
  `temail` varchar(100) NOT NULL COMMENT '邮箱',
  `taddress` varchar(255) NOT NULL COMMENT '地址',
  `teducation` text NOT NULL COMMENT '教育经历',
  `tworking` text NOT NULL COMMENT '工作经历',
  `tmessage` text NOT NULL COMMENT '其他信息',
  `tsort` int(10) NOT NULL COMMENT '排序',
  `nav_id` int(10) NOT NULL COMMENT '导航ID',
  PRIMARY KEY (`tid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='雇员信息表' AUTO_INCREMENT=25 ;

--
-- 转存表中的数据 `zs_employee`
--

INSERT INTO `zs_employee` (`tid`, `tname`, `tsex`, `tage`, `ttelephone`, `temail`, `taddress`, `teducation`, `tworking`, `tmessage`, `tsort`, `nav_id`) VALUES
(2, '孙泽敏', '1', 24, '13484601422', '123445@qq.com', '', 'wbretryui', 'retnrymtu,', 'wretryhtj', 0, 2),
(3, '哈哈哈', 'on', 123, '', '', '', '					', '					', '					', 0, 0),
(4, 'r6t7y87;9', 'on', 23, '', '', '', '			ryituoyipu;o		', '		weretyhj			', '					qwewrety', 0, 0),
(5, 'waegr', 'on', 0, '12345678901', '', 'wqfegrhtrjyt', '					', '					', '					', 0, 0),
(6, 'esrgdthyjte', 'on', 0, '', '', 'rjytu', '					', '					', '					', 0, 0),
(7, 'qewret', 'on', 11, '', '', '', '					', '					', '					', 0, 0),
(8, '孙泽敏', '0', 22, '12345678901', '', '污染和投入与腿部', '', '', '', 0, 0),
(9, '孙泽敏', '0', 22, '12345678901', '', '污染和投入与腿部', '', '', '', 0, 0),
(10, '孙泽敏', '0', 22, '12345678901', '', '污染和投入与腿部', '', '', '', 0, 0),
(11, '孙泽敏', '0', 11, '12345678901', '', '', '', '', '', 0, 0),
(12, '', '0', 0, '', '', '', '', '', '', 0, 0),
(13, 'ffff', '0', 11, '15339292939', '看，见面会那个部分', '地方换个环境可以退货人沟通会尽快，还没有听过吧', '', '', '', 0, 0),
(14, '孙泽敏', '0', 23, '12345678901', '1234567', '挖人和他人手一件痛苦与', '', '', '', 0, 0),
(15, '孙泽敏', '0', 23, '12345678901', '1234567', '挖人和他人手一件痛苦与', '', '', '', 0, 0),
(16, '孙泽敏', '0', 23, '12345678901', '1234567', '挖人和他人手一件痛苦与', '', '', '', 0, 0),
(17, '哈哈哈', '0', 11, '12345678901', '12345678', '热条件与哦', '', '', '', 0, 0),
(18, '哈哈哈', '0', 11, '12345678901', '12345678', '热条件与哦', '', '', '', 0, 0),
(19, '网', '0', 34, '12345678901', '', '', '', '', '', 0, 0),
(20, 'WEGERHATRYJT', 'on', 11, '', '', '', '', '', '', 0, 0),
(21, 'akvsucj,', 'on', 0, '', '', '', '', '', '', 0, 0),
(22, '哈哈哈', 'on', 0, '', '', '', '', '', '', 0, 0),
(23, '我让儿童会死人复活吗', 'on', 0, '', '', '', '', '', '', 0, 0),
(24, '请额外热太热', 'on', 0, '', '', '', '', '', '', 0, 0);

-- --------------------------------------------------------

--
-- 表的结构 `zs_footer`
--

CREATE TABLE IF NOT EXISTS `zs_footer` (
  `fid` int(10) NOT NULL AUTO_INCREMENT COMMENT '底部信息ID',
  `ftelephone` varchar(100) NOT NULL COMMENT '热线电话',
  `faddress` varchar(255) NOT NULL COMMENT '地址',
  `ffax` varchar(100) NOT NULL COMMENT '传真号码',
  `femail` varchar(255) NOT NULL COMMENT 'E-mail',
  `frecord` varchar(100) NOT NULL COMMENT '备案号',
  `ferweima` varchar(255) NOT NULL COMMENT '二维码',
  `fsort` int(10) NOT NULL COMMENT '排序',
  PRIMARY KEY (`fid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='底部信息' AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `zs_footer`
--

INSERT INTO `zs_footer` (`fid`, `ftelephone`, `faddress`, `ffax`, `femail`, `frecord`, `ferweima`, `fsort`) VALUES
(1, '1234567', '挨个送人的汇添富', '阿道夫', '1234', '1232435', '/Public/editor/attached/image/20181012/20181012090106_81919.jpg', 0);

-- --------------------------------------------------------

--
-- 表的结构 `zs_friend_url`
--

CREATE TABLE IF NOT EXISTS `zs_friend_url` (
  `fu_id` int(10) NOT NULL AUTO_INCREMENT COMMENT '友情链接ID',
  `fu_image` varchar(255) NOT NULL COMMENT '链接图片',
  `fu_url` varchar(255) NOT NULL COMMENT '链接路径',
  `fu_sort` int(10) NOT NULL COMMENT '排序',
  PRIMARY KEY (`fu_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='友情链接表' AUTO_INCREMENT=5 ;

--
-- 转存表中的数据 `zs_friend_url`
--

INSERT INTO `zs_friend_url` (`fu_id`, `fu_image`, `fu_url`, `fu_sort`) VALUES
(1, '/Public/editor/attached/image/20181017/20181017061210_14216.jpg', '问题', 0),
(2, '/Public/editor/attached/image/20181017/20181017104151_65483.png', '回家问问热共同', 0),
(3, '/Public/editor/attached/image/20181018/20181018014943_64503.jpg', 'wert', 0),
(4, '/Public/editor/attached/image/20181018/20181018014957_21011.jpg', 'wret', 0);

-- --------------------------------------------------------

--
-- 表的结构 `zs_job`
--

CREATE TABLE IF NOT EXISTS `zs_job` (
  `jid` int(10) NOT NULL AUTO_INCREMENT COMMENT '职位ID',
  `jname` varchar(100) NOT NULL COMMENT '招聘人姓名',
  `jjob` varchar(100) NOT NULL COMMENT '招聘职位',
  `jnum` varchar(100) NOT NULL COMMENT '招聘人数',
  `jrequire` text NOT NULL COMMENT '招聘要求',
  `jmethod` text NOT NULL COMMENT '应聘方式',
  `jresponsible` text NOT NULL COMMENT '主要任务',
  `jsort` int(10) NOT NULL COMMENT '排序',
  `nav_id` int(11) NOT NULL COMMENT '导航ID',
  PRIMARY KEY (`jid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='招聘职位信息' AUTO_INCREMENT=4 ;

--
-- 转存表中的数据 `zs_job`
--

INSERT INTO `zs_job` (`jid`, `jname`, `jjob`, `jnum`, `jrequire`, `jmethod`, `jresponsible`, `jsort`, `nav_id`) VALUES
(1, '哈哈哈', '数学', '2', '4玩意儿就容易', '沃尔特人没有的头发就会', '污染和投入你还没', 0, 0),
(3, '头发韩国就很难看', '分开了', '2', 'tffuygiuijokpl', '他要和你节开幕', '如何不救你', 0, 2);

-- --------------------------------------------------------

--
-- 表的结构 `zs_leader_speech`
--

CREATE TABLE IF NOT EXISTS `zs_leader_speech` (
  `ls_id` int(10) NOT NULL AUTO_INCREMENT COMMENT '致辞ID',
  `ls_content` text NOT NULL COMMENT '致辞内容',
  `ls_sort` int(10) NOT NULL COMMENT '排序',
  `nav_id` int(10) NOT NULL COMMENT '导航ID',
  PRIMARY KEY (`ls_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='领导致辞表' AUTO_INCREMENT=3 ;

--
-- 转存表中的数据 `zs_leader_speech`
--

INSERT INTO `zs_leader_speech` (`ls_id`, `ls_content`, `ls_sort`, `nav_id`) VALUES
(1, '纬二路', 0, 15);

-- --------------------------------------------------------

--
-- 表的结构 `zs_link_us`
--

CREATE TABLE IF NOT EXISTS `zs_link_us` (
  `lu_id` int(10) NOT NULL AUTO_INCREMENT COMMENT '联系我们ID',
  `lu_sort` int(10) NOT NULL COMMENT '排序',
  `lu_map` text NOT NULL COMMENT '地图',
  `lu_qq` varchar(100) NOT NULL COMMENT 'QQ',
  `lu_erweima` varchar(255) NOT NULL COMMENT '微信',
  `lu_telephone` varchar(100) NOT NULL COMMENT '热线电话',
  `nav_id` int(11) NOT NULL COMMENT '导航ID',
  PRIMARY KEY (`lu_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='联系我们信息表' AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `zs_link_us`
--

INSERT INTO `zs_link_us` (`lu_id`, `lu_sort`, `lu_map`, `lu_qq`, `lu_erweima`, `lu_telephone`, `nav_id`) VALUES
(1, 0, '<iframe src="http://127.0.0.1/Public/editor/plugins/baidumap/index.html?center=108.954344%2C34.239189&zoom=13&width=558&height=360&markers=108.954344%2C34.239189&markerStyles=l%2CA" frameborder="0" style="width:560px;height:362px;">\r\n</iframe>', '1232453', '/Public/editor/attached/image/20181026/20181026083829_22249.jpg', '1234', 11);

-- --------------------------------------------------------

--
-- 表的结构 `zs_lunbo`
--

CREATE TABLE IF NOT EXISTS `zs_lunbo` (
  `lb_id` int(10) NOT NULL AUTO_INCREMENT COMMENT '轮播ID',
  `lb_image` varchar(255) NOT NULL COMMENT '轮播图片',
  `lb_url` varchar(255) NOT NULL COMMENT '轮播链接',
  `lb_sort` int(10) NOT NULL COMMENT '排序',
  `lb_flag` int(10) NOT NULL COMMENT '0-代表手机，1-代表PC，2-代表手机和PC端',
  `nav_id` int(10) NOT NULL COMMENT '导航ID',
  PRIMARY KEY (`lb_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='轮播信息表' AUTO_INCREMENT=8 ;

--
-- 转存表中的数据 `zs_lunbo`
--

INSERT INTO `zs_lunbo` (`lb_id`, `lb_image`, `lb_url`, `lb_sort`, `lb_flag`, `nav_id`) VALUES
(1, '/Public/editor/attached/image/20181012/20181012070912_52536.jpg', 'fwretryt', 0, 0, 0),
(3, '/Public/editor/attached/image/20181012/20181012073756_64786.jpg', 'grhtyjrtuky', 0, 0, 0),
(4, '/Public/editor/attached/image/20181012/20181012073817_68719.jpg', '', 0, 0, 0),
(5, '/Public/editor/attached/image/20181012/20181012073833_55104.jpg', '', 0, 0, 0);

-- --------------------------------------------------------

--
-- 表的结构 `zs_nav`
--

CREATE TABLE IF NOT EXISTS `zs_nav` (
  `nav_id` int(10) NOT NULL AUTO_INCREMENT COMMENT '导航ID',
  `nav_name` varchar(100) NOT NULL COMMENT '导航名称',
  `nav_url` varchar(255) NOT NULL COMMENT '导航链接',
  `nav_sort` int(10) NOT NULL COMMENT '排序',
  `nav_state` int(10) NOT NULL COMMENT '0-不推荐到首页，1-推荐到首页',
  `fid` int(10) NOT NULL COMMENT '父级导航ID',
  PRIMARY KEY (`nav_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='导航信息表' AUTO_INCREMENT=30 ;

--
-- 转存表中的数据 `zs_nav`
--

INSERT INTO `zs_nav` (`nav_id`, `nav_name`, `nav_url`, `nav_sort`, `nav_state`, `fid`) VALUES
(2, '关于我们', '/index.php/Home/Index/aboutUs', 0, 1, 0),
(3, '主营业务', '/index.php/Home/Index/primarywork', 0, 0, 0),
(4, '劳务派遣', '/index.php/Home/Index/business', 0, 0, 0),
(5, '招聘外包', '/index.php/Home/Index/business', 0, 0, 0),
(6, '社保代理', '/index.php/Home/Index/business', 0, 0, 0),
(7, '企业培训', '/index.php/Home/Index/business', 0, 0, 0),
(8, '新闻资讯', '/index.php/Home/Index/news', 0, 0, 0),
(9, '政策法规', '/index.php/Home/Index/policy', 0, 0, 0),
(10, '人才招聘', '/index.php/Home/Index/recruit', 0, 0, 0),
(11, '联系我们', '/index.php/Home/Index/contact', 0, 0, 0),
(12, '公司简介', '/index.php/Home/Index/introduction', 0, 0, 2),
(13, '企业文化', '/index.php/Home/Index/Culture', 0, 0, 2),
(14, '资质荣誉', '/index.php/Home/Index/Qualifications', 0, 0, 2),
(15, '领导致辞', '/index.php/Home/Index/Speech', 0, 0, 2),
(16, '服务优势', '/index.php/Home/Index/advantage', 0, 0, 2),
(17, '联系我们', '/index.php/Home/Index/lianxi', 0, 0, 2),
(18, '人力资源外包', '/index.php/Home/Index/business', 0, 0, 3),
(19, '人事代理', '/index.php/Home/Index/business', 0, 0, 3),
(20, '业务流程外包', '/index.php/Home/Index/business', 0, 0, 3),
(21, '企业培训', '/index.php/Home/Index/business', 0, 0, 3),
(22, '行业资讯', '/index.php/Home/Index/news', 0, 0, 8),
(23, '企业新闻', '/index.php/Home/Index/news', 0, 0, 8),
(24, '政策法规', '/index.php/Home/Index/questions2', 0, 0, 9),
(25, '常见问题', '/index.php/Home/Index/questions1', 0, 0, 9),
(28, '公司与团队', '/index.php/Home/Index/team', 0, 1, 2);

-- --------------------------------------------------------

--
-- 表的结构 `zs_news_article`
--

CREATE TABLE IF NOT EXISTS `zs_news_article` (
  `na_id` int(10) NOT NULL AUTO_INCREMENT COMMENT '新闻Id',
  `na_title` varchar(255) NOT NULL COMMENT '新闻标题',
  `na_content` text NOT NULL COMMENT '新闻内容',
  `na_update` int(10) NOT NULL COMMENT '更新时间',
  `na_click` int(10) NOT NULL COMMENT '点击数量',
  `na_image` varchar(255) NOT NULL COMMENT '图片',
  `na_sort` int(10) NOT NULL COMMENT '排序',
  `nc_id` int(10) NOT NULL COMMENT '分类ID',
  PRIMARY KEY (`na_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='新闻文章信息表' AUTO_INCREMENT=10 ;

--
-- 转存表中的数据 `zs_news_article`
--

INSERT INTO `zs_news_article` (`na_id`, `na_title`, `na_content`, `na_update`, `na_click`, `na_image`, `na_sort`, `nc_id`) VALUES
(1, '额五个人和', '管委会&lt;img src=&quot;/Public/editor/attached/image/20181015/20181015035813_69026.jpg&quot; alt=&quot;&quot; /&gt;', 1539669976, 0, '/Public/editor/attached/image/20181015/20181015035830_63031.jpg', 0, 1),
(2, '好的头发就赶快', '和突然间', 1539579904, 0, '/Public/editor/attached/image/20181015/20181015040328_30937.jpg', 0, 1),
(4, '4tytu', '5rtykuiu', 1539670355, 0, '/Public/editor/attached/image/20181016/20181016061232_23548.jpg', 0, 1),
(7, 'gwhej5ky', 'efgq3h54w6je57k6riq&nbsp; &nbsp; w4e5rj6ty', 1539826914, 0, '/Public/editor/attached/image/20181018/20181018014153_69716.jpg', 0, 2),
(8, 'ewtrytyiy', 'ewrehtrjytkulyhetrjytiu', 1539825397, 0, '/Public/editor/attached/image/20181018/20181018011634_93784.jpg', 0, 2),
(9, 'wreutryitkuyli', 'qwEUARITLUY;IRUTO/', 1539939496, 0, '/Public/editor/attached/image/20181019/20181019085815_90458.jpg', 0, 2);

-- --------------------------------------------------------

--
-- 表的结构 `zs_news_classify`
--

CREATE TABLE IF NOT EXISTS `zs_news_classify` (
  `nc_id` int(10) NOT NULL AUTO_INCREMENT COMMENT '新闻分类ID',
  `nc_name` varchar(100) NOT NULL COMMENT '分类名称',
  `nc_sort` int(10) NOT NULL COMMENT '排序',
  `nav_id` int(11) NOT NULL COMMENT '导航ID',
  PRIMARY KEY (`nc_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='新闻分类信息表' AUTO_INCREMENT=5 ;

--
-- 转存表中的数据 `zs_news_classify`
--

INSERT INTO `zs_news_classify` (`nc_id`, `nc_name`, `nc_sort`, `nav_id`) VALUES
(1, '行业资讯', 0, 22),
(2, '企业新闻', 0, 23);

-- --------------------------------------------------------

--
-- 表的结构 `zs_policy_article`
--

CREATE TABLE IF NOT EXISTS `zs_policy_article` (
  `pa_id` int(10) NOT NULL AUTO_INCREMENT COMMENT '政策文章id',
  `pa_title` varchar(255) NOT NULL COMMENT '文章标题',
  `pa_content` text NOT NULL COMMENT '文章内容',
  `pa_update` varchar(100) NOT NULL COMMENT '更新时间',
  `pa_click` int(10) NOT NULL COMMENT '点击数',
  `pa_sort` int(11) NOT NULL COMMENT '排序',
  `pc_id` int(10) NOT NULL COMMENT '分类ID',
  PRIMARY KEY (`pa_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='政策文章' AUTO_INCREMENT=6 ;

--
-- 转存表中的数据 `zs_policy_article`
--

INSERT INTO `zs_policy_article` (`pa_id`, `pa_title`, `pa_content`, `pa_update`, `pa_click`, `pa_sort`, `pc_id`) VALUES
(1, '如委托人交', '围绕投入使用体育刘', '1540526052', 0, 1, 1),
(2, 'hetrytu', '645786i7o', '1539673937', 0, 0, 1),
(3, 'ewrethryjt', 'wretrytuy', '1539827219', 0, 0, 2),
(4, '覅属于两个地块', '大为儿童生日与建议可，&nbsp;', '1539827920', 0, 0, 2),
(5, '围绕儿童授人予鱼', '媳妇乖【破从TV回家', '1539827959', 0, 0, 2);

-- --------------------------------------------------------

--
-- 表的结构 `zs_policy_classify`
--

CREATE TABLE IF NOT EXISTS `zs_policy_classify` (
  `pc_id` int(10) NOT NULL AUTO_INCREMENT COMMENT '政策分类ID',
  `pc_name` varchar(100) NOT NULL COMMENT '政策分类名称',
  `pc_sort` int(11) NOT NULL COMMENT '排序',
  `nav_id` int(10) NOT NULL COMMENT '导航ID',
  PRIMARY KEY (`pc_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='政策分类信息表' AUTO_INCREMENT=3 ;

--
-- 转存表中的数据 `zs_policy_classify`
--

INSERT INTO `zs_policy_classify` (`pc_id`, `pc_name`, `pc_sort`, `nav_id`) VALUES
(1, '政策法规', 0, 9),
(2, '常见问题', 0, 25);

-- --------------------------------------------------------

--
-- 表的结构 `zs_primary_article`
--

CREATE TABLE IF NOT EXISTS `zs_primary_article` (
  `pa_id` int(10) NOT NULL AUTO_INCREMENT COMMENT '业务文章ID',
  `pa_content` text NOT NULL COMMENT '业务文章内容',
  `pa_sort` int(10) NOT NULL COMMENT '排序',
  `pw_id` int(11) NOT NULL COMMENT '所属分类ID',
  PRIMARY KEY (`pa_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='主营业务内容信息表' AUTO_INCREMENT=15 ;

--
-- 转存表中的数据 `zs_primary_article`
--

INSERT INTO `zs_primary_article` (`pa_id`, `pa_content`, `pa_sort`, `pw_id`) VALUES
(4, '安慰人HETJYR', 0, 2),
(5, 'R3T4YJUKTBRNETMR', 0, 3),
(6, 'Q4W354J6YRKTU,Y', 0, 4),
(7, '情歌王和健康', 0, 1),
(8, '&nbsp; &nbsp; 个人合同人员每天，u2', 0, 5),
(9, 'qGEWRHAETJRYT', 0, 6),
(10, 'WEraehtjsryktduyl,', 0, 7),
(11, '却WETANRYMT', 0, 8),
(12, 'WRBETNRYMT,Y', 0, 9),
(13, 'y4wa5eusr6ydtkuylfiu', 0, 11),
(14, 'werezthrxyjyukhjlk', 0, 10);

-- --------------------------------------------------------

--
-- 表的结构 `zs_primary_work`
--

CREATE TABLE IF NOT EXISTS `zs_primary_work` (
  `pw_id` int(10) NOT NULL AUTO_INCREMENT COMMENT '主营业务ID',
  `pw_name` varchar(100) NOT NULL COMMENT '主营业务名称',
  `pw_sort` int(10) NOT NULL COMMENT '排序',
  `pw_image` varchar(255) NOT NULL COMMENT '图标',
  `pw_flag` int(10) NOT NULL COMMENT '0-不推荐到首页，1-推荐到首页',
  `pwc_id` int(10) NOT NULL COMMENT '主营业务分类ID',
  PRIMARY KEY (`pw_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='主营业务信息表' AUTO_INCREMENT=12 ;

--
-- 转存表中的数据 `zs_primary_work`
--

INSERT INTO `zs_primary_work` (`pw_id`, `pw_name`, `pw_sort`, `pw_image`, `pw_flag`, `pwc_id`) VALUES
(1, '劳务派遣', 1, '/Public/editor/attached/image/20181017/20181017073908_69021.png', 1, 1),
(2, '社保代理', 0, '/Public/editor/attached/image/20181018/20181018093311_29033.png', 1, 2),
(3, '住房公积金代缴', 0, '/Public/editor/attached/image/20181018/20181018093333_67041.png', 0, 2),
(4, '薪酬管理', 0, '/Public/editor/attached/image/20181018/20181018093352_85794.png', 0, 2),
(5, '薪酬管理', 0, '/Public/editor/attached/image/20181018/20181018103026_68856.png', 0, 1),
(6, '岗位外包', 0, '/Public/editor/attached/image/20181018/20181018103622_52239.png', 1, 3),
(7, '生产线外包', 0, '/Public/editor/attached/image/20181018/20181018103704_14551.png', 0, 3),
(8, '综合素质培养', 0, '/Public/editor/attached/image/20181018/20181018104424_12189.png', 0, 4),
(9, '专业技能培养', 0, '/Public/editor/attached/image/20181018/20181018104453_18951.png', 0, 4),
(10, '招聘外包', 0, '/Public/editor/attached/image/20181022/20181022052948_58411.png', 1, 1),
(11, 'qWYREHTJ', 0, '/Public/editor/attached/image/20181022/20181022103543_68205.png', 0, 1);

-- --------------------------------------------------------

--
-- 表的结构 `zs_primary_work_classify`
--

CREATE TABLE IF NOT EXISTS `zs_primary_work_classify` (
  `pwc_id` int(10) NOT NULL AUTO_INCREMENT COMMENT '主营业务分类ID',
  `pwc_name` varchar(100) NOT NULL COMMENT '主营业务分类名称',
  `pwc_sort` int(11) NOT NULL COMMENT '排序',
  `pwc_image` varchar(255) NOT NULL COMMENT '图标',
  `nav_id` int(10) NOT NULL COMMENT '所属导航ID',
  `pwc_flag` int(10) NOT NULL COMMENT '0-不推送导航，1-推送到导航',
  PRIMARY KEY (`pwc_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='主营业务分类信息表' AUTO_INCREMENT=5 ;

--
-- 转存表中的数据 `zs_primary_work_classify`
--

INSERT INTO `zs_primary_work_classify` (`pwc_id`, `pwc_name`, `pwc_sort`, `pwc_image`, `nav_id`, `pwc_flag`) VALUES
(1, '人力资源外包', 0, '/Public/editor/attached/image/20181017/20181017073756_65670.png', 18, 0),
(2, '人事代理', 0, '/Public/editor/attached/image/20181017/20181017073813_20327.png', 19, 0),
(3, '业务流程外包', 0, '/Public/editor/attached/image/20181017/20181017073828_50111.png', 20, 0),
(4, '企业培训', 0, '/Public/editor/attached/image/20181017/20181017073843_14446.png', 21, 0);

-- --------------------------------------------------------

--
-- 表的结构 `zs_proper_bussiness`
--

CREATE TABLE IF NOT EXISTS `zs_proper_bussiness` (
  `pb_id` int(10) NOT NULL AUTO_INCREMENT COMMENT '适用行业ID',
  `pb_name` varchar(100) NOT NULL COMMENT '行业名称',
  `pb_image` varchar(255) NOT NULL COMMENT '图片',
  `pb_sort` int(10) NOT NULL COMMENT '排序',
  `nav_id` int(10) NOT NULL COMMENT '导航ID',
  PRIMARY KEY (`pb_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='适合行业信息表' AUTO_INCREMENT=5 ;

--
-- 转存表中的数据 `zs_proper_bussiness`
--

INSERT INTO `zs_proper_bussiness` (`pb_id`, `pb_name`, `pb_image`, `pb_sort`, `nav_id`) VALUES
(1, '才能', '/Public/editor/attached/image/20181017/20181017083826_62594.jpg', 1, 0),
(3, 'wreytr', '/Public/editor/attached/image/20181018/20181018011254_83685.jpg', 0, 0),
(4, 'rt4yhnm', '/Public/editor/attached/image/20181018/20181018011309_13716.jpg', 0, 0);

-- --------------------------------------------------------

--
-- 表的结构 `zs_service_advantage`
--

CREATE TABLE IF NOT EXISTS `zs_service_advantage` (
  `sa_id` int(10) NOT NULL AUTO_INCREMENT COMMENT '服务优势ID',
  `sa_advantage_classify` varchar(255) NOT NULL COMMENT '优势分类',
  `sa_advantage_title` varchar(255) NOT NULL COMMENT '优势标题',
  `sa_advantage_content` text NOT NULL COMMENT '优势介绍',
  `sa_image` varchar(255) NOT NULL COMMENT '优势图片',
  `sa_sort` int(10) NOT NULL COMMENT '排序',
  PRIMARY KEY (`sa_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='服务优势信息表' AUTO_INCREMENT=3 ;

--
-- 转存表中的数据 `zs_service_advantage`
--

INSERT INTO `zs_service_advantage` (`sa_id`, `sa_advantage_classify`, `sa_advantage_title`, `sa_advantage_content`, `sa_image`, `sa_sort`) VALUES
(1, '以内45', '3546576UI', '31日4题5有6乛', '/Public/editor/attached/image/20181015/20181015015158_64555.jpg', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
