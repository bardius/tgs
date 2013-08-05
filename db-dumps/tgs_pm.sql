-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 05, 2013 at 07:48 PM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `tgs_pm`
--

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

DROP TABLE IF EXISTS `chat`;
CREATE TABLE IF NOT EXISTS `chat` (
  `ID` int(10) NOT NULL AUTO_INCREMENT,
  `time` varchar(255) NOT NULL DEFAULT '',
  `ufrom` varchar(255) NOT NULL DEFAULT '',
  `ufrom_id` int(10) NOT NULL DEFAULT '0',
  `userto` varchar(255) NOT NULL DEFAULT '',
  `userto_id` int(10) NOT NULL DEFAULT '0',
  `text` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

DROP TABLE IF EXISTS `company`;
CREATE TABLE IF NOT EXISTS `company` (
  `ID` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL DEFAULT '',
  `email` varchar(255) NOT NULL DEFAULT '',
  `phone` varchar(255) NOT NULL DEFAULT '',
  `address1` varchar(255) NOT NULL DEFAULT '',
  `address2` varchar(255) NOT NULL DEFAULT '',
  `state` varchar(255) NOT NULL DEFAULT '',
  `country` varchar(255) NOT NULL DEFAULT '',
  `logo` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`ID`),
  KEY `name` (`name`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `company_assigned`
--

DROP TABLE IF EXISTS `company_assigned`;
CREATE TABLE IF NOT EXISTS `company_assigned` (
  `ID` int(10) NOT NULL AUTO_INCREMENT,
  `user` int(10) NOT NULL DEFAULT '0',
  `company` int(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`ID`),
  KEY `company` (`company`),
  KEY `user` (`user`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

DROP TABLE IF EXISTS `files`;
CREATE TABLE IF NOT EXISTS `files` (
  `ID` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL DEFAULT '',
  `desc` varchar(255) NOT NULL DEFAULT '',
  `project` int(10) NOT NULL DEFAULT '0',
  `milestone` int(10) NOT NULL DEFAULT '0',
  `user` int(10) NOT NULL DEFAULT '0',
  `tags` varchar(255) NOT NULL DEFAULT '',
  `added` varchar(255) NOT NULL DEFAULT '',
  `datei` varchar(255) NOT NULL DEFAULT '',
  `type` varchar(255) NOT NULL DEFAULT '',
  `title` varchar(255) NOT NULL DEFAULT '',
  `folder` int(10) NOT NULL,
  `visible` text NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `name` (`name`),
  KEY `datei` (`datei`),
  KEY `added` (`added`),
  KEY `project` (`project`),
  KEY `tags` (`tags`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `files_attached`
--

DROP TABLE IF EXISTS `files_attached`;
CREATE TABLE IF NOT EXISTS `files_attached` (
  `ID` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `file` int(10) unsigned NOT NULL DEFAULT '0',
  `message` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`ID`),
  KEY `file` (`file`,`message`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `log`
--

DROP TABLE IF EXISTS `log`;
CREATE TABLE IF NOT EXISTS `log` (
  `ID` int(10) NOT NULL AUTO_INCREMENT,
  `user` int(10) NOT NULL DEFAULT '0',
  `username` varchar(255) NOT NULL DEFAULT '',
  `name` varchar(255) NOT NULL DEFAULT '',
  `type` varchar(255) NOT NULL DEFAULT '',
  `action` int(1) NOT NULL DEFAULT '0',
  `project` int(10) NOT NULL DEFAULT '0',
  `datum` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`ID`),
  KEY `datum` (`datum`),
  KEY `type` (`type`),
  KEY `action` (`action`),
  FULLTEXT KEY `username` (`username`),
  FULLTEXT KEY `name` (`name`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `log`
--

INSERT INTO `log` (`ID`, `user`, `username`, `name`, `type`, `action`, `project`, `datum`) VALUES
(1, 0, '', 'bardius', 'user', 1, 0, '1375731635'),
(2, 1, 'bardius', 'TGS', 'projekt', 1, 1, '1375731697'),
(3, 1, 'bardius', 'bardius', 'user', 6, 1, '1375731697'),
(4, 1, 'bardius', 'bardius', 'user', 2, 0, '1375731752'),
(5, 1, 'bardius', 'bardius', 'user', 2, 0, '1375731757'),
(6, 1, 'bardius', 'bardius', 'user', 2, 0, '1375731863'),
(7, 1, 'bardius', 'bardius', 'user', 2, 0, '1375732041');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

DROP TABLE IF EXISTS `messages`;
CREATE TABLE IF NOT EXISTS `messages` (
  `ID` int(10) NOT NULL AUTO_INCREMENT,
  `project` int(10) NOT NULL DEFAULT '0',
  `title` varchar(255) NOT NULL DEFAULT '',
  `text` text NOT NULL,
  `tags` varchar(255) NOT NULL,
  `posted` varchar(255) NOT NULL DEFAULT '',
  `user` int(10) NOT NULL DEFAULT '0',
  `username` varchar(255) NOT NULL DEFAULT '',
  `replyto` int(11) NOT NULL DEFAULT '0',
  `milestone` int(10) NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `project` (`project`),
  KEY `user` (`user`),
  KEY `replyto` (`replyto`),
  KEY `tags` (`tags`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `milestones`
--

DROP TABLE IF EXISTS `milestones`;
CREATE TABLE IF NOT EXISTS `milestones` (
  `ID` int(10) NOT NULL AUTO_INCREMENT,
  `project` int(10) NOT NULL DEFAULT '0',
  `name` varchar(255) NOT NULL DEFAULT '',
  `desc` text NOT NULL,
  `start` varchar(255) NOT NULL DEFAULT '',
  `end` varchar(255) NOT NULL DEFAULT '',
  `status` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`ID`),
  KEY `name` (`name`),
  KEY `end` (`end`),
  KEY `project` (`project`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `milestones_assigned`
--

DROP TABLE IF EXISTS `milestones_assigned`;
CREATE TABLE IF NOT EXISTS `milestones_assigned` (
  `ID` int(10) NOT NULL AUTO_INCREMENT,
  `user` int(10) NOT NULL DEFAULT '0',
  `milestone` int(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`ID`),
  KEY `user` (`user`),
  KEY `milestone` (`milestone`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `projectfolders`
--

DROP TABLE IF EXISTS `projectfolders`;
CREATE TABLE IF NOT EXISTS `projectfolders` (
  `ID` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `parent` int(10) unsigned NOT NULL DEFAULT '0',
  `project` int(11) NOT NULL DEFAULT '0',
  `name` text NOT NULL,
  `description` varchar(255) NOT NULL,
  `visible` text NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `project` (`project`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `projekte`
--

DROP TABLE IF EXISTS `projekte`;
CREATE TABLE IF NOT EXISTS `projekte` (
  `ID` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL DEFAULT '',
  `desc` text NOT NULL,
  `start` varchar(255) NOT NULL DEFAULT '',
  `end` varchar(255) NOT NULL DEFAULT '',
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `budget` float NOT NULL DEFAULT '0',
  PRIMARY KEY (`ID`),
  KEY `status` (`status`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `projekte`
--

INSERT INTO `projekte` (`ID`, `name`, `desc`, `start`, `end`, `status`, `budget`) VALUES
(1, 'TGS', '', '1375731697', '0', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `projekte_assigned`
--

DROP TABLE IF EXISTS `projekte_assigned`;
CREATE TABLE IF NOT EXISTS `projekte_assigned` (
  `ID` int(10) NOT NULL AUTO_INCREMENT,
  `user` int(10) NOT NULL DEFAULT '0',
  `projekt` int(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`ID`),
  KEY `user` (`user`),
  KEY `projekt` (`projekt`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `projekte_assigned`
--

INSERT INTO `projekte_assigned` (`ID`, `user`, `projekt`) VALUES
(1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
CREATE TABLE IF NOT EXISTS `roles` (
  `ID` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `projects` text NOT NULL,
  `tasks` text NOT NULL,
  `milestones` text NOT NULL,
  `messages` text NOT NULL,
  `files` text NOT NULL,
  `chat` text NOT NULL,
  `timetracker` text NOT NULL,
  `admin` text NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`ID`, `name`, `projects`, `tasks`, `milestones`, `messages`, `files`, `chat`, `timetracker`, `admin`) VALUES
(1, 'Admin', 'a:5:{s:3:"add";i:1;s:4:"edit";i:1;s:3:"del";i:1;s:5:"close";i:1;s:4:"view";i:1;}', 'a:5:{s:3:"add";i:1;s:4:"edit";i:1;s:3:"del";i:1;s:5:"close";i:1;s:4:"view";i:1;}', 'a:5:{s:3:"add";i:1;s:4:"edit";i:1;s:3:"del";i:1;s:5:"close";i:1;s:4:"view";i:1;}', 'a:5:{s:3:"add";i:1;s:4:"edit";i:1;s:3:"del";i:1;s:5:"close";i:1;s:4:"view";i:1;}', 'a:4:{s:3:"add";i:1;s:4:"edit";i:1;s:3:"del";i:1;s:4:"view";i:1;}', 'a:1:{s:3:"add";i:1;}', 'a:5:{s:3:"add";i:1;s:4:"edit";i:1;s:3:"del";i:1;s:4:"read";i:1;s:4:"view";i:1;}', 'a:1:{s:3:"add";i:1;}'),
(2, 'User', 'a:5:{s:3:"add";i:1;s:4:"edit";i:1;s:3:"del";i:0;s:5:"close";i:0;s:4:"view";i:1;}', 'a:5:{s:3:"add";i:1;s:4:"edit";i:1;s:3:"del";i:0;s:5:"close";i:1;s:4:"view";i:1;}', 'a:5:{s:3:"add";i:1;s:4:"edit";i:1;s:3:"del";i:1;s:5:"close";i:1;s:4:"view";i:1;}', 'a:5:{s:3:"add";i:1;s:4:"edit";i:1;s:3:"del";i:1;s:5:"close";i:1;s:4:"view";i:1;}', 'a:4:{s:3:"add";i:1;s:4:"edit";i:1;s:3:"del";i:1;s:4:"view";i:1;}', 'a:1:{s:3:"add";i:1;}', 'a:5:{s:3:"add";i:1;s:4:"edit";i:1;s:3:"del";i:1;s:4:"read";i:0;s:4:"view";i:1;}', 'a:1:{s:3:"add";i:0;}'),
(3, 'Client', 'a:4:{s:3:"add";i:0;s:4:"edit";i:0;s:3:"del";i:0;s:5:"close";i:0;}', 'a:4:{s:3:"add";i:0;s:4:"edit";i:0;s:3:"del";i:0;s:5:"close";i:0;}', 'a:4:{s:3:"add";i:0;s:4:"edit";i:0;s:3:"del";i:0;s:5:"close";i:0;}', 'a:4:{s:3:"add";i:0;s:4:"edit";i:0;s:3:"del";i:0;s:5:"close";i:0;}', 'a:3:{s:3:"add";i:0;s:4:"edit";i:0;s:3:"del";i:0;}', 'a:1:{s:3:"add";i:0;}', 'a:4:{s:3:"add";i:0;s:4:"edit";i:0;s:3:"del";i:0;s:4:"read";i:0;}', 'a:1:{s:3:"add";i:0;}');

-- --------------------------------------------------------

--
-- Table structure for table `roles_assigned`
--

DROP TABLE IF EXISTS `roles_assigned`;
CREATE TABLE IF NOT EXISTS `roles_assigned` (
  `ID` int(10) NOT NULL AUTO_INCREMENT,
  `user` int(10) NOT NULL,
  `role` int(10) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `roles_assigned`
--

INSERT INTO `roles_assigned` (`ID`, `user`, `role`) VALUES
(1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

DROP TABLE IF EXISTS `settings`;
CREATE TABLE IF NOT EXISTS `settings` (
  `ID` int(10) NOT NULL AUTO_INCREMENT,
  `settingsKey` varchar(50) NOT NULL,
  `settingsValue` varchar(50) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`ID`, `settingsKey`, `settingsValue`) VALUES
(1, 'name', 'TGS'),
(2, 'subtitle', 'Project Management'),
(3, 'locale', 'en'),
(4, 'timezone', 'UTC'),
(5, 'dateformat', 'd.m.Y'),
(6, 'template', 'standard'),
(7, 'mailnotify', '1'),
(8, 'mailfrom', 'pm@tgs.com'),
(9, 'mailfromname', 'TGS Project Management'),
(10, 'mailmethod', 'mail'),
(11, 'mailhost', ''),
(12, 'mailuser', ''),
(13, 'mailpass', ''),
(14, 'rssuser', ''),
(15, 'rsspass', '');

-- --------------------------------------------------------

--
-- Table structure for table `tasklist`
--

DROP TABLE IF EXISTS `tasklist`;
CREATE TABLE IF NOT EXISTS `tasklist` (
  `ID` int(10) NOT NULL AUTO_INCREMENT,
  `project` int(10) NOT NULL DEFAULT '0',
  `name` varchar(255) NOT NULL DEFAULT '',
  `desc` text NOT NULL,
  `start` varchar(255) NOT NULL DEFAULT '',
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `access` tinyint(4) NOT NULL DEFAULT '0',
  `milestone` int(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`ID`),
  KEY `status` (`status`),
  KEY `milestone` (`milestone`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tasks`
--

DROP TABLE IF EXISTS `tasks`;
CREATE TABLE IF NOT EXISTS `tasks` (
  `ID` int(10) NOT NULL AUTO_INCREMENT,
  `start` varchar(255) NOT NULL DEFAULT '',
  `end` varchar(255) NOT NULL DEFAULT '',
  `title` varchar(255) NOT NULL DEFAULT '',
  `text` text NOT NULL,
  `liste` int(10) NOT NULL DEFAULT '0',
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `project` int(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`ID`),
  KEY `liste` (`liste`),
  KEY `status` (`status`),
  KEY `end` (`end`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tasks_assigned`
--

DROP TABLE IF EXISTS `tasks_assigned`;
CREATE TABLE IF NOT EXISTS `tasks_assigned` (
  `ID` int(10) NOT NULL AUTO_INCREMENT,
  `user` int(10) NOT NULL DEFAULT '0',
  `task` int(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`ID`),
  KEY `user` (`user`),
  KEY `task` (`task`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `timetracker`
--

DROP TABLE IF EXISTS `timetracker`;
CREATE TABLE IF NOT EXISTS `timetracker` (
  `ID` int(10) NOT NULL AUTO_INCREMENT,
  `user` int(10) NOT NULL DEFAULT '0',
  `project` int(10) NOT NULL DEFAULT '0',
  `task` int(10) NOT NULL DEFAULT '0',
  `comment` text NOT NULL,
  `started` varchar(255) NOT NULL DEFAULT '',
  `ended` varchar(255) NOT NULL DEFAULT '',
  `hours` float NOT NULL DEFAULT '0',
  `pstatus` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`ID`),
  KEY `user` (`user`,`project`,`task`),
  KEY `started` (`started`),
  KEY `ended` (`ended`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `ID` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT '',
  `email` varchar(255) DEFAULT '',
  `tel1` varchar(255) DEFAULT NULL,
  `tel2` varchar(255) DEFAULT NULL,
  `pass` varchar(255) DEFAULT '',
  `company` varchar(255) DEFAULT '',
  `lastlogin` varchar(255) DEFAULT '',
  `zip` varchar(10) DEFAULT NULL,
  `gender` char(1) DEFAULT '',
  `url` varchar(255) DEFAULT '',
  `adress` varchar(255) DEFAULT '',
  `adress2` varchar(255) DEFAULT '',
  `state` varchar(255) DEFAULT '',
  `country` varchar(255) DEFAULT '',
  `tags` varchar(255) DEFAULT '',
  `locale` varchar(6) DEFAULT '',
  `avatar` varchar(255) DEFAULT '',
  `rate` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`ID`),
  UNIQUE KEY `name` (`name`),
  KEY `pass` (`pass`),
  KEY `locale` (`locale`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`ID`, `name`, `email`, `tel1`, `tel2`, `pass`, `company`, `lastlogin`, `zip`, `gender`, `url`, `adress`, `adress2`, `state`, `country`, `tags`, `locale`, `avatar`, `rate`) VALUES
(1, 'bardius', 'george@bardis.info', '', '07766837365', '9de9d984325e5627192ce3721295f741313969e9', '0', '1375732075', '', 'm', 'http://www.bardis.info', '', '', '', '', '', 'en', 'b65c2c2fe7be0c37b7f8834602b8d5c7_748504.jpg', '0');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
