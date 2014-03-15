-- phpMyAdmin SQL Dump
-- version 4.0.10
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 16, 2014 at 02:43 AM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `tgs_cms`
--

-- --------------------------------------------------------

--
-- Table structure for table `acl_classes`
--

CREATE TABLE IF NOT EXISTS `acl_classes` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `class_type` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_69DD750638A36066` (`class_type`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `acl_entries`
--

CREATE TABLE IF NOT EXISTS `acl_entries` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `class_id` int(10) unsigned NOT NULL,
  `object_identity_id` int(10) unsigned DEFAULT NULL,
  `security_identity_id` int(10) unsigned NOT NULL,
  `field_name` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ace_order` smallint(5) unsigned NOT NULL,
  `mask` int(11) NOT NULL,
  `granting` tinyint(1) NOT NULL,
  `granting_strategy` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `audit_success` tinyint(1) NOT NULL,
  `audit_failure` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_46C8B806EA000B103D9AB4A64DEF17BCE4289BF4` (`class_id`,`object_identity_id`,`field_name`,`ace_order`),
  KEY `IDX_46C8B806EA000B103D9AB4A6DF9183C9` (`class_id`,`object_identity_id`,`security_identity_id`),
  KEY `IDX_46C8B806EA000B10` (`class_id`),
  KEY `IDX_46C8B8063D9AB4A6` (`object_identity_id`),
  KEY `IDX_46C8B806DF9183C9` (`security_identity_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `acl_object_identities`
--

CREATE TABLE IF NOT EXISTS `acl_object_identities` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `parent_object_identity_id` int(10) unsigned DEFAULT NULL,
  `class_id` int(10) unsigned NOT NULL,
  `object_identifier` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `entries_inheriting` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_9407E5494B12AD6EA000B10` (`object_identifier`,`class_id`),
  KEY `IDX_9407E54977FA751A` (`parent_object_identity_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `acl_object_identity_ancestors`
--

CREATE TABLE IF NOT EXISTS `acl_object_identity_ancestors` (
  `object_identity_id` int(10) unsigned NOT NULL,
  `ancestor_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`object_identity_id`,`ancestor_id`),
  KEY `IDX_825DE2993D9AB4A6` (`object_identity_id`),
  KEY `IDX_825DE299C671CEA1` (`ancestor_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `acl_security_identities`
--

CREATE TABLE IF NOT EXISTS `acl_security_identities` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `identifier` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `username` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_8835EE78772E836AF85E0677` (`identifier`,`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `bannercontent_blocks`
--

CREATE TABLE IF NOT EXISTS `bannercontent_blocks` (
  `page_id` int(11) NOT NULL,
  `contentblock_id` int(11) NOT NULL,
  PRIMARY KEY (`page_id`,`contentblock_id`),
  KEY `IDX_F4D586C4663E4` (`page_id`),
  KEY `IDX_F4D58642ADBAC2` (`contentblock_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `bannercontent_blocks`
--

INSERT INTO `bannercontent_blocks` (`page_id`, `contentblock_id`) VALUES
(91, 64),
(91, 65);

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE IF NOT EXISTS `blogs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `author` int(11) DEFAULT NULL,
  `introimage` int(11) DEFAULT NULL,
  `bgimage` int(11) DEFAULT NULL,
  `introvideo` int(11) DEFAULT NULL,
  `date` date NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `alias` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pageOrder` int(11) NOT NULL,
  `showPageTitle` int(11) NOT NULL,
  `publishState` int(11) NOT NULL,
  `pageclass` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `keywords` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `introtext` longtext COLLATE utf8_unicode_ci,
  `intromediasize` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `introclass` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pagetype` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_F41BCA70E16C6B94` (`alias`),
  UNIQUE KEY `UNIQ_F41BCA70F3890D5F` (`introimage`),
  UNIQUE KEY `UNIQ_F41BCA7097AB4E12` (`bgimage`),
  UNIQUE KEY `UNIQ_F41BCA704A73D32C` (`introvideo`),
  KEY `IDX_F41BCA70BDAFD8C8` (`author`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=89 ;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `author`, `introimage`, `bgimage`, `introvideo`, `date`, `title`, `alias`, `pageOrder`, `showPageTitle`, `publishState`, `pageclass`, `description`, `keywords`, `introtext`, `intromediasize`, `introclass`, `pagetype`) VALUES
(81, 13, NULL, NULL, NULL, '2014-02-04', 'Blog Home', 'articles', 99, 1, 1, NULL, NULL, NULL, 'Lorem ipsum dolor sit amet, consectetur adipiscing eletra electrify denim vel ports.', NULL, NULL, 'blog_home'),
(82, 13, NULL, NULL, NULL, '2014-02-04', 'News', 'news', 99, 1, 1, NULL, NULL, NULL, 'Lorem ipsum dolor sit amet, consectetur adipiscing eletra electrify denim vel ports.', NULL, NULL, 'blog_cat_page'),
(83, 13, NULL, NULL, NULL, '2014-02-04', 'Events', 'events', 99, 1, 1, NULL, NULL, NULL, 'Lorem ipsum dolor sit amet, consectetur adipiscing eletra electrify denim vel ports.', NULL, NULL, 'blog_cat_page'),
(84, 13, NULL, NULL, NULL, '2014-02-04', 'Blog Filtered Listing', 'tagged', 99, 1, 1, NULL, NULL, NULL, 'Lorem ipsum dolor sit amet, consectetur adipiscing eletra electrify denim vel ports.', NULL, NULL, 'blog_filtered_list'),
(85, 13, 142, NULL, NULL, '2014-02-04', 'Test Blog Post 1', 'test-blog-post-1', 99, 1, 1, NULL, NULL, NULL, 'Lorem ipsum dolor sit amet, consectetur adipiscing eletra electrify denim vel ports.', NULL, NULL, 'blog_article'),
(86, 13, 143, NULL, NULL, '2014-02-04', 'Test Blog Post 2', 'test-blog-post-2', 99, 1, 1, NULL, NULL, NULL, 'Lorem ipsum dolor sit amet, consectetur adipiscing eletra electrify denim vel ports.', NULL, NULL, 'blog_article'),
(87, 13, 144, NULL, NULL, '2014-02-04', 'Test Blog Post 3', 'test-blog-post-3', 99, 1, 1, NULL, NULL, NULL, 'Lorem ipsum dolor sit amet, consectetur adipiscing eletra electrify denim vel ports.', NULL, NULL, 'blog_article'),
(88, 13, 145, NULL, NULL, '2014-02-04', 'Test Blog Post 4', 'test-blog-post-4', 99, 1, 1, NULL, NULL, NULL, 'Lorem ipsum dolor sit amet, consectetur adipiscing eletra electrify denim vel ports.', NULL, NULL, 'blog_article');

-- --------------------------------------------------------

--
-- Table structure for table `blogs_categories`
--

CREATE TABLE IF NOT EXISTS `blogs_categories` (
  `blog_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  PRIMARY KEY (`blog_id`,`category_id`),
  KEY `IDX_9DB3BC97DAE07E97` (`blog_id`),
  KEY `IDX_9DB3BC9712469DE2` (`category_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `blogs_categories`
--

INSERT INTO `blogs_categories` (`blog_id`, `category_id`) VALUES
(85, 50),
(86, 51),
(87, 50),
(88, 51);

-- --------------------------------------------------------

--
-- Table structure for table `blogs_tags`
--

CREATE TABLE IF NOT EXISTS `blogs_tags` (
  `blog_id` int(11) NOT NULL,
  `tag_id` int(11) NOT NULL,
  PRIMARY KEY (`blog_id`,`tag_id`),
  KEY `IDX_B21862B8DAE07E97` (`blog_id`),
  KEY `IDX_B21862B8BAD26311` (`tag_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `blogs_tags`
--

INSERT INTO `blogs_tags` (`blog_id`, `tag_id`) VALUES
(85, 25),
(86, 26),
(87, 26),
(88, 25);

-- --------------------------------------------------------

--
-- Table structure for table `blog_bannercontent_blocks`
--

CREATE TABLE IF NOT EXISTS `blog_bannercontent_blocks` (
  `blog_id` int(11) NOT NULL,
  `contentblock_id` int(11) NOT NULL,
  PRIMARY KEY (`blog_id`,`contentblock_id`),
  KEY `IDX_BBBD8485DAE07E97` (`blog_id`),
  KEY `IDX_BBBD848542ADBAC2` (`contentblock_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `blog_extracontent_blocks`
--

CREATE TABLE IF NOT EXISTS `blog_extracontent_blocks` (
  `blog_id` int(11) NOT NULL,
  `contentblock_id` int(11) NOT NULL,
  PRIMARY KEY (`blog_id`,`contentblock_id`),
  KEY `IDX_D0FE99C6DAE07E97` (`blog_id`),
  KEY `IDX_D0FE99C642ADBAC2` (`contentblock_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `blog_maincontent_blocks`
--

CREATE TABLE IF NOT EXISTS `blog_maincontent_blocks` (
  `blog_id` int(11) NOT NULL,
  `contentblock_id` int(11) NOT NULL,
  PRIMARY KEY (`blog_id`,`contentblock_id`),
  KEY `IDX_1FB7CF4EDAE07E97` (`blog_id`),
  KEY `IDX_1FB7CF4E42ADBAC2` (`contentblock_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `blog_maincontent_blocks`
--

INSERT INTO `blog_maincontent_blocks` (`blog_id`, `contentblock_id`) VALUES
(85, 63);

-- --------------------------------------------------------

--
-- Table structure for table `blog_modalcontent_blocks`
--

CREATE TABLE IF NOT EXISTS `blog_modalcontent_blocks` (
  `blog_id` int(11) NOT NULL,
  `contentblock_id` int(11) NOT NULL,
  PRIMARY KEY (`blog_id`,`contentblock_id`),
  KEY `IDX_3262B322DAE07E97` (`blog_id`),
  KEY `IDX_3262B32242ADBAC2` (`contentblock_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `categoryClass` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `categoryIcon` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_3AF34668AD0F3245` (`categoryIcon`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=53 ;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `title`, `categoryClass`, `categoryIcon`) VALUES
(49, 'Homepage', NULL, NULL),
(50, 'News', 'news', NULL),
(51, 'Events', 'events', NULL),
(52, 'Sample Category', 'featured-category', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `blog_id` int(11) DEFAULT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `comment` longtext COLLATE utf8_unicode_ci NOT NULL,
  `approved` tinyint(1) NOT NULL,
  `created` datetime NOT NULL,
  `commentType` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `bottrap` varchar(1) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_5F9E962ADAE07E97` (`blog_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=34 ;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `blog_id`, `title`, `username`, `comment`, `approved`, `created`, `commentType`, `bottrap`) VALUES
(31, 85, 'Sample Comment 1', 'blogger1', 'To make a long story short. You can''t go wrong by choosing Symfony! And no one has ever been fired for using Symfony.', 1, '2014-02-04 23:43:20', 'Blog', NULL),
(32, 85, 'Sample Comment 2', 'blogger2', 'To make a long story short. You can''t go wrong by choosing Symfony! And no one has ever been fired for using Symfony 2.', 1, '2014-02-04 23:43:20', 'Blog', NULL),
(33, 85, 'Sample Comment 3', 'blogger3', 'To make a long story short. You can''t go wrong by choosing Symfony! And no one has ever been fired for using Symfony 3.', 1, '2014-02-04 23:43:20', 'Blog', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `content_blocks`
--

CREATE TABLE IF NOT EXISTS `content_blocks` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `slide` int(11) DEFAULT NULL,
  `vimeo` int(11) DEFAULT NULL,
  `youtube` int(11) DEFAULT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `publishedState` int(11) NOT NULL,
  `availability` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `showTitle` int(11) NOT NULL,
  `ordering` int(11) NOT NULL,
  `className` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sizeClass` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mediaSize` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `idName` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `contentType` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `htmlText` longtext COLLATE utf8_unicode_ci,
  `fileFile` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_A6DBE5D472EFEE62` (`slide`),
  UNIQUE KEY `UNIQ_A6DBE5D44E850E4D` (`fileFile`),
  UNIQUE KEY `UNIQ_A6DBE5D47316E1A3` (`vimeo`),
  UNIQUE KEY `UNIQ_A6DBE5D4F0789934` (`youtube`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=76 ;

--
-- Dumping data for table `content_blocks`
--

INSERT INTO `content_blocks` (`id`, `slide`, `vimeo`, `youtube`, `title`, `publishedState`, `availability`, `showTitle`, `ordering`, `className`, `sizeClass`, `mediaSize`, `idName`, `contentType`, `htmlText`, `fileFile`) VALUES
(59, NULL, NULL, NULL, 'Sample Content Home', 1, 'page', 1, 1, NULL, 'large-12', NULL, NULL, 'html', '<p>Quisque non arcu id ipsum imperdiet ultricies pharetra eu nibh. Etiam eros lectus, ullamcorper et congue in, lobortis sit amet lectus. In fermentum quam in arcu sodales, id varius est placerat. Fusce a dictum mi. Aliquam accumsan diam eget rutrum tincidunt. Nullam massa metus, placerat quis mattis nec</p>', NULL),
(60, NULL, NULL, NULL, 'Sample Content 1', 1, 'page', 1, 1, 'sampleClassname', 'large-12', NULL, 'sampleId', 'html', '<p>Quisque non arcu id ipsum imperdiet ultricies pharetra eu nibh. Etiam eros lectus, ullamcorper et congue in, lobortis sit amet lectus. In fermentum quam in arcu sodales, id varius est placerat. Fusce a dictum mi. Aliquam accumsan diam eget rutrum tincidunt. Nullam massa metus, placerat quis mattis nec</p>', NULL),
(61, NULL, NULL, NULL, 'Sample Content 2', 1, 'page', 1, 2, NULL, 'large-12', NULL, NULL, 'html', '<p>Quisque non arcu id ipsum imperdiet ultricies pharetra eu nibh. Etiam eros lectus, ullamcorper et congue in, lobortis sit amet lectus. In fermentum quam in arcu sodales, id varius est placerat. Fusce a dictum mi. Aliquam accumsan diam eget rutrum tincidunt. Nullam massa metus, placerat quis mattis nec</p>', NULL),
(62, NULL, NULL, NULL, 'Sample Contact Form', 1, 'page', 1, 1, NULL, 'large-12', NULL, NULL, 'contact', NULL, NULL),
(63, NULL, NULL, NULL, 'Sample Blog Content 1', 1, 'page', 1, 1, 'sampleClassname', 'large-12', NULL, 'sampleId', 'html', '<p>Quisque non arcu id ipsum imperdiet ultricies pharetra eu nibh. Etiam eros lectus, ullamcorper et congue in, lobortis sit amet lectus. In fermentum quam in arcu sodales, id varius est placerat. Fusce a dictum mi. Aliquam accumsan diam eget rutrum tincidunt. Nullam massa metus, placerat quis mattis nec</p>', NULL),
(64, 9, NULL, NULL, 'Home Top Banner Slide 1', 1, 'page', 0, 1, NULL, 'large-12', NULL, NULL, 'slide', NULL, NULL),
(65, 10, NULL, NULL, 'Home Top Banner Slide 2', 1, 'page', 0, 2, NULL, 'large-12', NULL, NULL, 'slide', NULL, NULL),
(66, NULL, NULL, NULL, 'Sample Content Destinations', 1, 'page', 1, 1, NULL, 'large-12', NULL, NULL, 'html', '<p>Quisque non arcu id ipsum imperdiet ultricies pharetra eu nibh. Etiam eros lectus, ullamcorper et congue in, lobortis sit amet lectus. In fermentum quam in arcu sodales, id varius est placerat. Fusce a dictum mi. Aliquam accumsan diam eget rutrum tincidunt. Nullam massa metus, placerat quis mattis nec</p>', NULL),
(67, NULL, NULL, NULL, 'Sample Content North Greece', 1, 'page', 1, 1, NULL, 'large-12', NULL, NULL, 'html', '<p>Quisque non arcu id ipsum imperdiet ultricies pharetra eu nibh. Etiam eros lectus, ullamcorper et congue in, lobortis sit amet lectus. In fermentum quam in arcu sodales, id varius est placerat. Fusce a dictum mi. Aliquam accumsan diam eget rutrum tincidunt. Nullam massa metus, placerat quis mattis nec</p>', NULL),
(68, NULL, NULL, NULL, 'Sample Content North Greece', 1, 'page', 1, 2, NULL, 'large-12', NULL, NULL, 'html', '<p>Quisque non arcu id ipsum imperdiet ultricies pharetra eu nibh. Etiam eros lectus, ullamcorper et congue in, lobortis sit amet lectus. In fermentum quam in arcu sodales, id varius est placerat. Fusce a dictum mi. Aliquam accumsan diam eget rutrum tincidunt. Nullam massa metus, placerat quis mattis nec</p>', NULL),
(69, NULL, NULL, NULL, 'HOW TO GET THERE', 1, 'page', 1, 1, NULL, 'large-12', NULL, NULL, 'html', '<p>The term "surfing" refers to the act of riding a wave, regardless of whether the wave is ridden with a board or without a board, and regardless of the stance used. For instance, the native peoples of the Pacific surfed waves on alaia, paipo, and other such crafts, and did so on their bellies, knees, and However, the modern day definition of surfing most often refers to a surfer riding a wave standing up on a surfboard, and this is also referred to as stand-up surfing.</p>', NULL),
(70, NULL, NULL, NULL, 'gdfgdfg', 1, 'page', 1, 1, NULL, 'large-12', NULL, NULL, 'html', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing eletra electrify denim vel ports.Lorem ipsum dolor sit amet, consectetur adipiscing eletra electrify denim vel ports.Lorem ipsum dolor sit amet, consectetur adipiscing eletra electrify denim vel ports.Lorem ipsum dolor sit amet, consectetur adipiscing eletra electrify denim vel ports.</p>', NULL),
(71, NULL, NULL, NULL, 'thdhd', 1, 'page', 1, 1, NULL, 'large-12', NULL, NULL, 'html', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing eletra electrify denim vel ports.Lorem ipsum dolor sit amet, consectetur adipiscing eletra electrify denim vel ports.Lorem ipsum dolor sit amet, consectetur adipiscing eletra electrify denim vel ports.Lorem ipsum dolor sit amet, consectetur adipiscing eletra electrify denim vel ports.</p>', NULL),
(72, NULL, NULL, NULL, 'sssss s sss', 1, 'page', 1, 1, NULL, 'large-12', NULL, NULL, 'html', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing eletra electrify denim vel ports.Lorem ipsum dolor sit amet, consectetur adipiscing eletra electrify denim vel ports.Lorem ipsum dolor sit amet, consectetur adipiscing eletra electrify denim vel ports.Lorem ipsum dolor sit amet, consectetur adipiscing eletra electrify denim vel ports.</p>', NULL),
(73, NULL, NULL, NULL, 'gdfgdfdg fgg sfgs s', 1, 'page', 1, 2, NULL, 'large-12', NULL, NULL, 'html', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing eletra electrify denim vel ports.Lorem ipsum dolor sit amet, consectetur adipiscing eletra electrify denim vel ports.Lorem ipsum dolor sit amet, consectetur adipiscing eletra electrify denim vel ports.Lorem ipsum dolor sit amet, consectetur adipiscing eletra electrify denim vel ports.</p>', NULL),
(74, 11, NULL, NULL, 'f  xfgvsx', 1, 'page', 0, 1, NULL, 'large-12', 'original', NULL, 'slide', NULL, NULL),
(75, 12, NULL, NULL, 'gg sgsg sgs', 1, 'page', 0, 2, NULL, 'large-12', NULL, NULL, 'slide', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `content_blocks_images`
--

CREATE TABLE IF NOT EXISTS `content_blocks_images` (
  `contentblock_id` int(11) NOT NULL,
  `contentimage_id` int(11) NOT NULL,
  PRIMARY KEY (`contentblock_id`,`contentimage_id`),
  KEY `IDX_960CFC1F42ADBAC2` (`contentblock_id`),
  KEY `IDX_960CFC1F96E51DA3` (`contentimage_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `content_images`
--

CREATE TABLE IF NOT EXISTS `content_images` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `imagefile` int(11) DEFAULT NULL,
  `imageOrder` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_8829CEC6991EFFB9` (`imagefile`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

-- --------------------------------------------------------

--
-- Table structure for table `content_slides`
--

CREATE TABLE IF NOT EXISTS `content_slides` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `imagefile` int(11) DEFAULT NULL,
  `imageLinkTitle` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `imageLinkURL` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_D0F6503D991EFFB9` (`imagefile`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=13 ;

--
-- Dumping data for table `content_slides`
--

INSERT INTO `content_slides` (`id`, `imagefile`, `imageLinkTitle`, `imageLinkURL`) VALUES
(9, 147, 'Stay Salty', '/stay-salty'),
(10, 148, 'Stay Salty 2', NULL),
(11, 155, NULL, NULL),
(12, 156, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `destinations`
--

CREATE TABLE IF NOT EXISTS `destinations` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `author` int(11) DEFAULT NULL,
  `introimage` int(11) DEFAULT NULL,
  `destinationicon` int(11) DEFAULT NULL,
  `bgimage` int(11) DEFAULT NULL,
  `spots` int(11) DEFAULT NULL,
  `date` date NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `alias` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pageOrder` int(11) NOT NULL,
  `showPageTitle` int(11) DEFAULT NULL,
  `publishState` int(11) NOT NULL,
  `pageClass` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `keywords` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `introText` longtext COLLATE utf8_unicode_ci,
  `summary` longtext COLLATE utf8_unicode_ci,
  `directions` longtext COLLATE utf8_unicode_ci,
  `mapLatitude` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mapLongitude` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `introClass` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pageType` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `styleColor` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_2D3343C3E16C6B94` (`alias`),
  UNIQUE KEY `UNIQ_2D3343C3F3890D5F` (`introimage`),
  UNIQUE KEY `UNIQ_2D3343C335767543` (`destinationicon`),
  UNIQUE KEY `UNIQ_2D3343C397AB4E12` (`bgimage`),
  KEY `IDX_2D3343C3BDAFD8C8` (`author`),
  KEY `IDX_2D3343C3D2BBDDF7` (`spots`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=37 ;

--
-- Dumping data for table `destinations`
--

INSERT INTO `destinations` (`id`, `author`, `introimage`, `destinationicon`, `bgimage`, `spots`, `date`, `title`, `alias`, `pageOrder`, `showPageTitle`, `publishState`, `pageClass`, `description`, `keywords`, `introText`, `summary`, `directions`, `mapLatitude`, `mapLongitude`, `introClass`, `pageType`, `styleColor`) VALUES
(31, 13, NULL, NULL, NULL, NULL, '2014-02-04', 'Destinations', 'list', 99, 1, 1, NULL, NULL, NULL, '<p>Lorem ipsum dolor sit amet, consectetur adipiscing eletra electrify denim vel ports.</p>', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing eletra electrify denim vel ports.Lorem ipsum dolor sit amet, consectetur adipiscing eletra electrify denim vel ports.Lorem ipsum dolor sit amet, consectetur adipiscing eletra electrify denim vel ports.Lorem ipsum dolor sit amet, consectetur adipiscing eletra electrify denim vel ports.</p>', NULL, NULL, NULL, NULL, 'destination_home', 'default'),
(32, 13, 150, NULL, NULL, NULL, '2014-02-04', 'North Greece', 'north-greece', 99, 1, 1, NULL, NULL, NULL, '<p>Lorem ipsum dolor sit amet, consectetur adipiscing eletra electrify denim vel ports.</p>', '<p>Quisque non arcu id ipsum imperdiet ultricies pharetra eu nibh. Etiam eros lectus, ullamcorper et congue in, lobortis sit amet lectus. In fermentum quam in arcu sodales, id varius est placerat. Fusce a dictum mi. Aliquam accumsan diam eget rutrum tincidunt. Nullam massa metus, placerat quis mattis nec</p>', NULL, NULL, NULL, NULL, 'destination_cat_page', 'default'),
(33, 13, NULL, NULL, NULL, NULL, '2014-02-04', 'Halkidiki', 'halkidiki', 99, 1, 1, NULL, NULL, NULL, '<p>Lorem ipsum dolor sit amet, consectetur adipiscing eletra electrify denim vel ports.</p>', '<p>The term "surfing" refers to the act of riding a wave, regardless of whether the wave is ridden with a board or without a board, and regardless of the stance used. For instance, the native peoples of the Pacific surfed waves on alaia, paipo, and other such crafts, and did so on their bellies, knees, and However, the modern day definition of surfing most often refers to a surfer riding a wave standing up on a surfboard, and this is also referred to as stand-up surfing.</p>', '<p>The term "surfing" refers to the act of riding a wave, regardless of whether the wave is ridden with a board or without a board, and regardless of the stance used. For instance, the native peoples of the Pacific surfed waves on alaia, paipo, and other such crafts, and did so on their bellies, knees, and However, the modern day definition of surfing most often refers to a surfer riding a wave standing up on a surfboard, and this is also referred to as stand-up surfing.</p>', NULL, NULL, NULL, 'destination_article', 'default'),
(34, 13, NULL, NULL, NULL, NULL, '2014-02-05', 'South Greece', 'south-greece', 99, NULL, 1, NULL, NULL, NULL, '<p>Lorem ipsum dolor sit amet, consectetur adipiscing eletra electrify denim vel ports.</p>', NULL, NULL, NULL, NULL, NULL, 'destination_cat_page', NULL),
(35, 13, NULL, NULL, NULL, NULL, '2014-02-05', 'Halkidiki Clone', 'halkidiki-clone', 99, NULL, 1, NULL, NULL, NULL, '<p>Lorem ipsum dolor sit amet, consectetur adipiscing eletra electrify denim vel ports.</p>', NULL, NULL, NULL, NULL, NULL, 'destination_article', NULL),
(36, 13, NULL, NULL, NULL, NULL, '2014-02-05', 'South Greece Clone', 'south-greece-clone', 99, 1, 1, NULL, NULL, NULL, '<p>Lorem ipsum dolor sit amet, consectetur adipiscing eletra electrify denim vel ports.</p>', NULL, NULL, NULL, NULL, NULL, 'destination_cat_page', 'default');

-- --------------------------------------------------------

--
-- Table structure for table `destinations_categories`
--

CREATE TABLE IF NOT EXISTS `destinations_categories` (
  `destination_id` int(11) NOT NULL,
  `destinationcategory_id` int(11) NOT NULL,
  PRIMARY KEY (`destination_id`,`destinationcategory_id`),
  KEY `IDX_61B1CB52816C6140` (`destination_id`),
  KEY `IDX_61B1CB522C34F628` (`destinationcategory_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `destinations_categories`
--

INSERT INTO `destinations_categories` (`destination_id`, `destinationcategory_id`) VALUES
(32, 21),
(32, 22),
(33, 22),
(34, 21),
(34, 23),
(35, 22),
(36, 21),
(36, 23);

-- --------------------------------------------------------

--
-- Table structure for table `destinations_tags`
--

CREATE TABLE IF NOT EXISTS `destinations_tags` (
  `destination_id` int(11) NOT NULL,
  `destinationtag_id` int(11) NOT NULL,
  PRIMARY KEY (`destination_id`,`destinationtag_id`),
  KEY `IDX_138A80C3816C6140` (`destination_id`),
  KEY `IDX_138A80C361972E3E` (`destinationtag_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `destinations_tags`
--

INSERT INTO `destinations_tags` (`destination_id`, `destinationtag_id`) VALUES
(33, 11),
(33, 12),
(33, 13),
(33, 14),
(33, 15),
(35, 11);

-- --------------------------------------------------------

--
-- Table structure for table `destination_bannercontent_blocks`
--

CREATE TABLE IF NOT EXISTS `destination_bannercontent_blocks` (
  `destination_id` int(11) NOT NULL,
  `contentblock_id` int(11) NOT NULL,
  PRIMARY KEY (`destination_id`,`contentblock_id`),
  KEY `IDX_1AB79240816C6140` (`destination_id`),
  KEY `IDX_1AB7924042ADBAC2` (`contentblock_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `destination_categories`
--

CREATE TABLE IF NOT EXISTS `destination_categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `class` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `destinationListPage` int(11) DEFAULT NULL,
  `destinationCategoryIcon` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_67CADDDACEB1B078` (`destinationCategoryIcon`),
  KEY `IDX_67CADDDABD7209A` (`destinationListPage`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=24 ;

--
-- Dumping data for table `destination_categories`
--

INSERT INTO `destination_categories` (`id`, `title`, `class`, `destinationListPage`, `destinationCategoryIcon`) VALUES
(21, 'Destination Home', NULL, NULL, NULL),
(22, 'North Greece', 'north-greece', 32, NULL),
(23, 'South Greece', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `destination_maincontent_blocks`
--

CREATE TABLE IF NOT EXISTS `destination_maincontent_blocks` (
  `destination_id` int(11) NOT NULL,
  `contentblock_id` int(11) NOT NULL,
  PRIMARY KEY (`destination_id`,`contentblock_id`),
  KEY `IDX_21C5B864816C6140` (`destination_id`),
  KEY `IDX_21C5B86442ADBAC2` (`contentblock_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `destination_modalcontent_blocks`
--

CREATE TABLE IF NOT EXISTS `destination_modalcontent_blocks` (
  `destination_id` int(11) NOT NULL,
  `contentblock_id` int(11) NOT NULL,
  PRIMARY KEY (`destination_id`,`contentblock_id`),
  KEY `IDX_E9E70883816C6140` (`destination_id`),
  KEY `IDX_E9E7088342ADBAC2` (`contentblock_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `destination_secondarycontent_blocks`
--

CREATE TABLE IF NOT EXISTS `destination_secondarycontent_blocks` (
  `destination_id` int(11) NOT NULL,
  `contentblock_id` int(11) NOT NULL,
  PRIMARY KEY (`destination_id`,`contentblock_id`),
  KEY `IDX_3D7A49B4816C6140` (`destination_id`),
  KEY `IDX_3D7A49B442ADBAC2` (`contentblock_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `destination_secondarycontent_blocks`
--

INSERT INTO `destination_secondarycontent_blocks` (`destination_id`, `contentblock_id`) VALUES
(31, 66),
(32, 68);

-- --------------------------------------------------------

--
-- Table structure for table `destination_tags`
--

CREATE TABLE IF NOT EXISTS `destination_tags` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tagCategory` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `styleColor` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tagIcon` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_CC1D1D178913051D` (`tagIcon`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=16 ;

--
-- Dumping data for table `destination_tags`
--

INSERT INTO `destination_tags` (`id`, `title`, `tagCategory`, `styleColor`, `tagIcon`) VALUES
(11, 'Surf', 'sports', 'green', 151),
(12, 'Kite Surf', 'sports', 'purple', NULL),
(13, 'Wake Board', 'sports', 'orange', NULL),
(14, 'Surf', 'sports', 'default', NULL),
(15, 'Water Ski', 'sports', 'pink', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `extracontent_blocks`
--

CREATE TABLE IF NOT EXISTS `extracontent_blocks` (
  `page_id` int(11) NOT NULL,
  `contentblock_id` int(11) NOT NULL,
  PRIMARY KEY (`page_id`,`contentblock_id`),
  KEY `IDX_92E89973C4663E4` (`page_id`),
  KEY `IDX_92E8997342ADBAC2` (`contentblock_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fos_user_group`
--

CREATE TABLE IF NOT EXISTS `fos_user_group` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `roles` longtext COLLATE utf8_unicode_ci NOT NULL COMMENT '(DC2Type:array)',
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_583D1F3E5E237E06` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `fos_user_user`
--

CREATE TABLE IF NOT EXISTS `fos_user_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `username_canonical` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email_canonical` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `enabled` tinyint(1) NOT NULL,
  `salt` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_login` datetime DEFAULT NULL,
  `locked` tinyint(1) NOT NULL,
  `expired` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL,
  `confirmation_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password_requested_at` datetime DEFAULT NULL,
  `roles` longtext COLLATE utf8_unicode_ci NOT NULL COMMENT '(DC2Type:array)',
  `credentials_expired` tinyint(1) NOT NULL,
  `credentials_expire_at` datetime DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `date_of_birth` datetime DEFAULT NULL,
  `firstname` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `lastname` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `website` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `biography` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `gender` varchar(1) COLLATE utf8_unicode_ci DEFAULT NULL,
  `locale` varchar(8) COLLATE utf8_unicode_ci DEFAULT NULL,
  `timezone` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `facebook_uid` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `facebook_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `facebook_data` longtext COLLATE utf8_unicode_ci COMMENT '(DC2Type:json)',
  `twitter_uid` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `twitter_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `twitter_data` longtext COLLATE utf8_unicode_ci COMMENT '(DC2Type:json)',
  `gplus_uid` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `gplus_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `gplus_data` longtext COLLATE utf8_unicode_ci COMMENT '(DC2Type:json)',
  `token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `two_step_code` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `bakeFrequency` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sex` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `bakeChoises` longtext COLLATE utf8_unicode_ci COMMENT '(DC2Type:array)',
  `age` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `children` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `campaign` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_C560D76192FC23A8` (`username_canonical`),
  UNIQUE KEY `UNIQ_C560D761A0D96FBF` (`email_canonical`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=14 ;

--
-- Dumping data for table `fos_user_user`
--

INSERT INTO `fos_user_user` (`id`, `username`, `username_canonical`, `email`, `email_canonical`, `enabled`, `salt`, `password`, `last_login`, `locked`, `expired`, `expires_at`, `confirmation_token`, `password_requested_at`, `roles`, `credentials_expired`, `credentials_expire_at`, `created_at`, `updated_at`, `date_of_birth`, `firstname`, `lastname`, `website`, `biography`, `gender`, `locale`, `timezone`, `phone`, `facebook_uid`, `facebook_name`, `facebook_data`, `twitter_uid`, `twitter_name`, `twitter_data`, `gplus_uid`, `gplus_name`, `gplus_data`, `token`, `two_step_code`, `bakeFrequency`, `sex`, `bakeChoises`, `age`, `children`, `campaign`) VALUES
(13, 'administrator', 'administrator', 'george@bardis.info', 'george@bardis.info', 1, 'brys9cc04t4cs0gk40k4cgsggkskcws', '0ANGjUZ51MFVKewONAjFbQhoaQ5HHypCO7Urck2l5MMduKJASx0/mkCf/5cVm/9RoiH7JzQ2BLumtd382CPJAg==', '2014-02-15 22:09:26', 0, 0, NULL, NULL, NULL, 'a:1:{i:0;s:16:"ROLE_SUPER_ADMIN";}', 0, NULL, '2014-02-04 23:43:19', '2014-02-15 22:09:26', NULL, NULL, NULL, NULL, NULL, 'u', NULL, NULL, NULL, NULL, NULL, 'null', NULL, NULL, 'null', NULL, NULL, 'null', NULL, NULL, NULL, NULL, 'N;', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `fos_user_user_group`
--

CREATE TABLE IF NOT EXISTS `fos_user_user_group` (
  `user_id` int(11) NOT NULL,
  `group_id` int(11) NOT NULL,
  PRIMARY KEY (`user_id`,`group_id`),
  KEY `IDX_B3C77447A76ED395` (`user_id`),
  KEY `IDX_B3C77447FE54D947` (`group_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `maincontent_blocks`
--

CREATE TABLE IF NOT EXISTS `maincontent_blocks` (
  `page_id` int(11) NOT NULL,
  `contentblock_id` int(11) NOT NULL,
  PRIMARY KEY (`page_id`,`contentblock_id`),
  KEY `IDX_BB2F1667C4663E4` (`page_id`),
  KEY `IDX_BB2F166742ADBAC2` (`contentblock_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `maincontent_blocks`
--

INSERT INTO `maincontent_blocks` (`page_id`, `contentblock_id`) VALUES
(91, 59),
(95, 62),
(96, 60),
(96, 61);

-- --------------------------------------------------------

--
-- Table structure for table `media__gallery`
--

CREATE TABLE IF NOT EXISTS `media__gallery` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `context` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `default_format` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `enabled` tinyint(1) NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `media__gallery_media`
--

CREATE TABLE IF NOT EXISTS `media__gallery_media` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `gallery_id` int(11) DEFAULT NULL,
  `media_id` int(11) DEFAULT NULL,
  `position` int(11) NOT NULL,
  `enabled` tinyint(1) NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_80D4C5414E7AF8F` (`gallery_id`),
  KEY `IDX_80D4C541EA9FDD75` (`media_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `media__media`
--

CREATE TABLE IF NOT EXISTS `media__media` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `enabled` tinyint(1) NOT NULL,
  `provider_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `provider_status` int(11) NOT NULL,
  `provider_reference` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `provider_metadata` longtext COLLATE utf8_unicode_ci COMMENT '(DC2Type:json)',
  `width` int(11) DEFAULT NULL,
  `height` int(11) DEFAULT NULL,
  `length` decimal(10,0) DEFAULT NULL,
  `content_type` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `content_size` int(11) DEFAULT NULL,
  `copyright` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `author_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `context` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cdn_is_flushable` tinyint(1) DEFAULT NULL,
  `cdn_flush_at` datetime DEFAULT NULL,
  `cdn_status` int(11) DEFAULT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=157 ;

--
-- Dumping data for table `media__media`
--

INSERT INTO `media__media` (`id`, `name`, `description`, `enabled`, `provider_name`, `provider_status`, `provider_reference`, `provider_metadata`, `width`, `height`, `length`, `content_type`, `content_size`, `copyright`, `author_name`, `context`, `cdn_is_flushable`, `cdn_flush_at`, `cdn_status`, `updated_at`, `created_at`) VALUES
(138, 'sample_thumb.jpeg', NULL, 0, 'sonata.media.provider.image', 1, 'sample_thumb.jpeg', '{"filename":"sample_thumb.jpeg"}', 622, 415, NULL, 'image/jpeg', 8043, NULL, NULL, 'intro', NULL, NULL, NULL, '2014-02-04 23:43:20', '2014-02-04 23:43:20'),
(139, 'sample_thumb.jpeg', NULL, 0, 'sonata.media.provider.image', 1, 'sample_thumb.jpeg', '{"filename":"sample_thumb.jpeg"}', 622, 415, NULL, 'image/jpeg', 8043, NULL, NULL, 'intro', NULL, NULL, NULL, '2014-02-04 23:43:20', '2014-02-04 23:43:20'),
(140, 'sample_thumb.jpeg', NULL, 0, 'sonata.media.provider.image', 1, 'sample_thumb.jpeg', '{"filename":"sample_thumb.jpeg"}', 622, 415, NULL, 'image/jpeg', 8043, NULL, NULL, 'intro', NULL, NULL, NULL, '2014-02-04 23:43:20', '2014-02-04 23:43:20'),
(141, 'sample_thumb.jpeg', NULL, 0, 'sonata.media.provider.image', 1, 'sample_thumb.jpeg', '{"filename":"sample_thumb.jpeg"}', 622, 415, NULL, 'image/jpeg', 8043, NULL, NULL, 'intro', NULL, NULL, NULL, '2014-02-04 23:43:20', '2014-02-04 23:43:20'),
(142, 'sample_thumb.jpeg', NULL, 0, 'sonata.media.provider.image', 1, 'sample_thumb.jpeg', '{"filename":"sample_thumb.jpeg"}', 622, 415, NULL, 'image/jpeg', 8043, NULL, NULL, 'intro', NULL, NULL, NULL, '2014-02-04 23:43:20', '2014-02-04 23:43:20'),
(143, 'sample_thumb.jpeg', NULL, 0, 'sonata.media.provider.image', 1, 'sample_thumb.jpeg', '{"filename":"sample_thumb.jpeg"}', 622, 415, NULL, 'image/jpeg', 8043, NULL, NULL, 'intro', NULL, NULL, NULL, '2014-02-04 23:43:20', '2014-02-04 23:43:20'),
(144, 'sample_thumb.jpeg', NULL, 0, 'sonata.media.provider.image', 1, 'sample_thumb.jpeg', '{"filename":"sample_thumb.jpeg"}', 622, 415, NULL, 'image/jpeg', 8043, NULL, NULL, 'intro', NULL, NULL, NULL, '2014-02-04 23:43:20', '2014-02-04 23:43:20'),
(145, 'sample_thumb.jpeg', NULL, 0, 'sonata.media.provider.image', 1, 'sample_thumb.jpeg', '{"filename":"sample_thumb.jpeg"}', 622, 415, NULL, 'image/jpeg', 8043, NULL, NULL, 'intro', NULL, NULL, NULL, '2014-02-04 23:43:20', '2014-02-04 23:43:20'),
(146, 'sample_thumb.jpeg', NULL, 0, 'sonata.media.provider.image', 1, 'sample_thumb.jpeg', '[]', 622, 415, NULL, 'image/jpeg', 8043, NULL, NULL, 'spotlist', NULL, NULL, NULL, '2014-02-04 23:43:20', '2014-02-04 23:43:20'),
(147, 'sample_thumb.jpeg', NULL, 0, 'sonata.media.provider.image', 1, 'sample_thumb.jpeg', '{"filename":"sample_thumb.jpeg"}', 622, 415, NULL, 'image/jpeg', 8043, NULL, NULL, 'bgimage', NULL, NULL, NULL, '2014-02-04 23:43:20', '2014-02-04 23:43:20'),
(148, 'sample_thumb.jpeg', NULL, 0, 'sonata.media.provider.image', 1, 'sample_thumb.jpeg', '{"filename":"sample_thumb.jpeg"}', 622, 415, NULL, 'image/jpeg', 8043, NULL, NULL, 'bgimage', NULL, NULL, NULL, '2014-02-04 23:43:20', '2014-02-04 23:43:20'),
(149, 'sample_thumb.jpeg', NULL, 0, 'sonata.media.provider.image', 1, '43413f4e9533109b5637c9d279a58af4a7791f6c.jpeg', '{"filename":"sample_thumb.jpeg"}', 622, 415, NULL, 'image/jpeg', 8043, NULL, NULL, 'icons', NULL, NULL, NULL, '2014-02-05 19:49:52', '2014-02-05 19:49:52'),
(150, 'sample_thumb.jpeg', NULL, 0, 'sonata.media.provider.image', 1, 'a8905877d9a4c41ac236dfb3d96a6103c3b5b8ee.jpeg', '{"filename":"sample_thumb.jpeg"}', 622, 415, NULL, 'image/jpeg', 8043, NULL, NULL, 'intro', NULL, NULL, NULL, '2014-02-05 19:50:56', '2014-02-05 19:50:56'),
(151, 'surfIcon.png', NULL, 0, 'sonata.media.provider.image', 1, '0d2db9e5a6147c9522b73e6631b33c618e8eb1c4.png', '{"filename":"surfIcon.png"}', 85, 85, NULL, 'image/png', 724, NULL, NULL, 'icons', NULL, NULL, NULL, '2014-02-10 23:20:19', '2014-02-10 23:20:19'),
(152, 'sample_thumb.jpeg', NULL, 0, 'sonata.media.provider.image', 1, '71c245a82b7c5b357fb91f9f729375f07e8a1383.jpeg', '{"filename":"sample_thumb.jpeg"}', 622, 415, NULL, 'image/jpeg', 8043, NULL, NULL, 'spotlist', NULL, NULL, NULL, '2014-02-15 22:12:11', '2014-02-15 22:12:11'),
(155, 'sample_thumb.jpeg', NULL, 0, 'sonata.media.provider.image', 1, 'd9e9a243de3798d68fb983f27432d9a7356e408c.jpeg', '{"filename":"sample_thumb.jpeg"}', 622, 415, NULL, 'image/jpeg', 8043, NULL, NULL, 'bgimage', NULL, NULL, NULL, '2014-02-16 01:32:34', '2014-02-16 01:32:34'),
(156, 'sample_thumb.jpeg', NULL, 0, 'sonata.media.provider.image', 1, '8f2ba80970d13f4b81818ac15d08b3e15abf646a.jpeg', '{"filename":"sample_thumb.jpeg"}', 622, 415, NULL, 'image/jpeg', 8043, NULL, NULL, 'bgimage', NULL, NULL, NULL, '2014-02-16 01:33:26', '2014-02-16 01:33:26');

-- --------------------------------------------------------

--
-- Table structure for table `menu_items`
--

CREATE TABLE IF NOT EXISTS `menu_items` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `page` int(11) DEFAULT NULL,
  `blog` int(11) DEFAULT NULL,
  `destination` int(11) DEFAULT NULL,
  `spot` int(11) DEFAULT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `menuType` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `route` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `externalUrl` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `accessLevel` int(11) NOT NULL,
  `parent` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `menuGroup` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `publishState` int(11) NOT NULL,
  `ordering` int(11) NOT NULL,
  `menuUrlExtras` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `menuImage` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_70B2CA2A9196AB0E` (`menuImage`),
  KEY `IDX_70B2CA2A140AB620` (`page`),
  KEY `IDX_70B2CA2AC0155143` (`blog`),
  KEY `IDX_70B2CA2A3EC63EAA` (`destination`),
  KEY `IDX_70B2CA2AB9327A73` (`spot`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=90 ;

--
-- Dumping data for table `menu_items`
--

INSERT INTO `menu_items` (`id`, `page`, `blog`, `destination`, `spot`, `title`, `menuType`, `route`, `externalUrl`, `accessLevel`, `parent`, `menuGroup`, `publishState`, `ordering`, `menuUrlExtras`, `menuImage`) VALUES
(81, 91, NULL, NULL, NULL, 'Homepage', 'Page', 'showPage', NULL, 0, '0', 'Main Menu', 1, 0, NULL, NULL),
(82, NULL, NULL, 31, NULL, 'Destinations', 'Destination', 'showPage', NULL, 0, '0', 'Main Menu', 1, 1, NULL, NULL),
(83, NULL, NULL, NULL, 31, 'Spots', 'Spot', 'showPage', NULL, 0, '0', 'Main Menu', 1, 2, NULL, NULL),
(84, NULL, 83, NULL, NULL, 'Events', 'Blog', 'showPage', NULL, 0, '0', 'Main Menu', 1, 3, NULL, NULL),
(85, NULL, 82, NULL, NULL, 'News', 'Blog', 'showPage', NULL, 0, '0', 'Main Menu', 1, 4, NULL, NULL),
(86, 97, NULL, NULL, NULL, 'Sports', 'Page', 'showPage', NULL, 0, '0', 'Main Menu', 1, 5, NULL, NULL),
(87, 96, NULL, NULL, NULL, 'E-Magazine', 'Page', 'showPage', NULL, 0, '0', 'Main Menu', 1, 6, NULL, NULL),
(88, 95, NULL, NULL, NULL, 'Contact Us', 'Page', 'showPage', NULL, 0, '0', 'Main Menu', 1, 7, NULL, NULL),
(89, 93, NULL, NULL, NULL, 'Sitemap', 'Page', 'showPage', NULL, 0, '0', 'Footer Menu', 1, 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `modalcontent_blocks`
--

CREATE TABLE IF NOT EXISTS `modalcontent_blocks` (
  `page_id` int(11) NOT NULL,
  `contentblock_id` int(11) NOT NULL,
  PRIMARY KEY (`page_id`,`contentblock_id`),
  KEY `IDX_7074B397C4663E4` (`page_id`),
  KEY `IDX_7074B39742ADBAC2` (`contentblock_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE IF NOT EXISTS `pages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `author` int(11) DEFAULT NULL,
  `introimage` int(11) DEFAULT NULL,
  `bgimage` int(11) DEFAULT NULL,
  `date` date NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `alias` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pageOrder` int(11) NOT NULL,
  `showPageTitle` int(11) NOT NULL,
  `publishState` int(11) NOT NULL,
  `pageclass` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `keywords` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `introtext` longtext COLLATE utf8_unicode_ci,
  `intromediasize` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `introclass` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pagetype` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_2074E575E16C6B94` (`alias`),
  UNIQUE KEY `UNIQ_2074E575F3890D5F` (`introimage`),
  UNIQUE KEY `UNIQ_2074E57597AB4E12` (`bgimage`),
  KEY `IDX_2074E575BDAFD8C8` (`author`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=100 ;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `author`, `introimage`, `bgimage`, `date`, `title`, `alias`, `pageOrder`, `showPageTitle`, `publishState`, `pageclass`, `description`, `keywords`, `introtext`, `intromediasize`, `introclass`, `pagetype`) VALUES
(91, 13, NULL, NULL, '2014-02-04', 'The Greek Spots', 'index', 99, 1, 1, NULL, NULL, NULL, 'Lorem ipsum dolor sit amet, consectetur adipiscing eletra electrify denim vel ports.', NULL, NULL, 'homepage'),
(92, 13, NULL, NULL, '2014-02-04', '404 Error Page', '404', 99, 1, 1, NULL, NULL, NULL, '', NULL, NULL, '404'),
(93, 13, NULL, NULL, '2014-02-04', 'Sitemap', 'site-map', 99, 1, 1, NULL, NULL, NULL, '', NULL, NULL, 'sitemap'),
(94, 13, NULL, NULL, '2014-02-04', 'Page Filtered Listing', 'tagged', 99, 1, 1, NULL, NULL, NULL, 'Lorem ipsum dolor sit amet, consectetur adipiscing eletra electrify denim vel ports.', NULL, NULL, 'page_tag_list'),
(95, 13, NULL, NULL, '2014-02-04', 'Contact', 'contact', 99, 1, 1, NULL, NULL, NULL, '', NULL, NULL, 'contact'),
(96, 13, 138, NULL, '2014-02-04', 'E-Magazine', 'e-magazine', 99, 1, 1, NULL, NULL, NULL, 'Lorem ipsum dolor sit amet, consectetur adipiscing eletra electrify denim vel ports.', NULL, NULL, 'one_columned'),
(97, 13, 139, NULL, '2014-02-04', 'Sports', 'sports', 99, 1, 1, NULL, NULL, NULL, 'Lorem ipsum dolor sit amet, consectetur adipiscing eletra electrify denim vel ports.', NULL, NULL, 'two_columned'),
(98, 13, 140, NULL, '2014-02-04', 'Test Page 3', 'test-page-3', 99, 1, 1, NULL, NULL, NULL, 'Lorem ipsum dolor sit amet, consectetur adipiscing eletra electrify denim vel ports.', NULL, NULL, 'three_columned'),
(99, 13, 141, NULL, '2014-02-04', 'Test Page 4', 'test-page-4', 99, 1, 1, NULL, NULL, NULL, 'Lorem ipsum dolor sit amet, consectetur adipiscing eletra electrify denim vel ports.', NULL, NULL, 'one_columned');

-- --------------------------------------------------------

--
-- Table structure for table `pages_categories`
--

CREATE TABLE IF NOT EXISTS `pages_categories` (
  `page_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  PRIMARY KEY (`page_id`,`category_id`),
  KEY `IDX_533F7E1BC4663E4` (`page_id`),
  KEY `IDX_533F7E1B12469DE2` (`category_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `pages_categories`
--

INSERT INTO `pages_categories` (`page_id`, `category_id`) VALUES
(91, 49),
(94, 52);

-- --------------------------------------------------------

--
-- Table structure for table `pages_tags`
--

CREATE TABLE IF NOT EXISTS `pages_tags` (
  `page_id` int(11) NOT NULL,
  `tag_id` int(11) NOT NULL,
  PRIMARY KEY (`page_id`,`tag_id`),
  KEY `IDX_2476DEA6C4663E4` (`page_id`),
  KEY `IDX_2476DEA6BAD26311` (`tag_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `pages_tags`
--

INSERT INTO `pages_tags` (`page_id`, `tag_id`) VALUES
(94, 25),
(98, 25),
(99, 25);

-- --------------------------------------------------------

--
-- Table structure for table `secondarycontent_blocks`
--

CREATE TABLE IF NOT EXISTS `secondarycontent_blocks` (
  `page_id` int(11) NOT NULL,
  `contentblock_id` int(11) NOT NULL,
  PRIMARY KEY (`page_id`,`contentblock_id`),
  KEY `IDX_F8B56AB4C4663E4` (`page_id`),
  KEY `IDX_F8B56AB442ADBAC2` (`contentblock_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE IF NOT EXISTS `settings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `metaDescription` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `metaKeywords` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `fromTitle` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `websiteTitle` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `websiteAuthor` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `useWebsiteAuthor` tinyint(1) NOT NULL,
  `enableGoogleAnalytics` tinyint(1) NOT NULL,
  `googleAnalyticsId` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `emailSender` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `emailRecepient` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `itemsPerPage` int(11) NOT NULL,
  `blogItemsPerPage` int(11) NOT NULL,
  `activateSettings` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=14 ;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `metaDescription`, `metaKeywords`, `fromTitle`, `websiteTitle`, `websiteAuthor`, `useWebsiteAuthor`, `enableGoogleAnalytics`, `googleAnalyticsId`, `emailSender`, `emailRecepient`, `itemsPerPage`, `blogItemsPerPage`, `activateSettings`) VALUES
(13, 'Default Meta Description', 'Default Meta Keywords', 'Owner', 'Website Title', 'Author', 1, 0, 'UA-XXX-XXXXX', 'george@bardis.info', 'george@bardis.info', 2, 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `spots`
--

CREATE TABLE IF NOT EXISTS `spots` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `author` int(11) DEFAULT NULL,
  `introimage` int(11) DEFAULT NULL,
  `spotattributes` int(11) DEFAULT NULL,
  `date` date NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `alias` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pageOrder` int(11) NOT NULL,
  `spotOrder` int(11) NOT NULL,
  `showPageTitle` int(11) DEFAULT NULL,
  `publishState` int(11) NOT NULL,
  `featuredSpot` int(11) NOT NULL,
  `pageclass` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mapLatitude` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mapLongitude` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `keywords` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `introtext` longtext COLLATE utf8_unicode_ci,
  `introclass` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pagetype` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `summary` longtext COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_D2BBDDF7E16C6B94` (`alias`),
  UNIQUE KEY `UNIQ_D2BBDDF7F3890D5F` (`introimage`),
  UNIQUE KEY `UNIQ_D2BBDDF73B6DB7D3` (`spotattributes`),
  KEY `IDX_D2BBDDF7BDAFD8C8` (`author`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=35 ;

--
-- Dumping data for table `spots`
--

INSERT INTO `spots` (`id`, `author`, `introimage`, `spotattributes`, `date`, `title`, `alias`, `pageOrder`, `spotOrder`, `showPageTitle`, `publishState`, `featuredSpot`, `pageclass`, `mapLatitude`, `mapLongitude`, `description`, `keywords`, `introtext`, `introclass`, `pagetype`, `summary`) VALUES
(31, 13, 146, NULL, '2014-02-04', 'Spots', 'list', 99, 99, 1, 1, 0, NULL, NULL, NULL, NULL, NULL, '<p>Lorem ipsum dolor sit amet, consectetur adipiscing eletra electrify denim vel ports.</p>', NULL, 'spot_home', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing eletra electrify denim vel ports.Lorem ipsum dolor sit amet, consectetur adipiscing eletra electrify denim vel ports.Lorem ipsum dolor sit amet, consectetur adipiscing eletra electrify denim vel ports.Lorem ipsum dolor sit amet, consectetur adipiscing eletra electrify denim vel ports.</p>'),
(32, 13, 152, 1, '2014-02-04', 'Test spot page 1', 'test-spot-page-1', 99, 99, 1, 1, 1, NULL, '52.1111', '31.1111', 'Lorem ipsum dolor sit amet, consectetur adipiscing eletra electrify denim vel ports.', NULL, '<p>Lorem ipsum dolor sit amet</p>', NULL, 'spot_article', '<p>The term "surfing" refers to the act of riding a wave, regardless of whether the wave is ridden with a board or without a board, and regardless of the stance used. For instance, the native peoples of the Pacific surfed waves on alaia, paipo, and other such crafts, and did so on their bellies, knees, and However, the modern day definition of surfing most often refers to a surfer riding a wave standing up on a surfboard, and this is also referred to as stand-up surfing.</p>'),
(33, 13, NULL, NULL, '2014-02-04', 'Test spot page 2', 'test-spot-page-2', 99, 99, 1, 1, 1, NULL, '52.1111', '31.1111', 'Lorem ipsum dolor sit amet, consectetur adipiscing eletra electrify denim vel ports 2.', NULL, 'Lorem ipsum dolor sit amet 2', NULL, 'spot_article', NULL),
(34, 13, NULL, NULL, '2014-02-15', 'Test spot page 2 Clone', 'test-spot-page-2-clone', 99, 99, 1, 1, 0, NULL, NULL, NULL, 'Lorem ipsum dolor sit amet, consectetur adipiscing eletra electrify denim vel ports 2.', NULL, '<p>Lorem ipsum dolor sit amet 2</p>', NULL, 'spot_article', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `spots_bannercontent_blocks`
--

CREATE TABLE IF NOT EXISTS `spots_bannercontent_blocks` (
  `spot_id` int(11) NOT NULL,
  `contentblock_id` int(11) NOT NULL,
  PRIMARY KEY (`spot_id`,`contentblock_id`),
  KEY `IDX_FC83D8272DF1D37C` (`spot_id`),
  KEY `IDX_FC83D82742ADBAC2` (`contentblock_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `spots_bannercontent_blocks`
--

INSERT INTO `spots_bannercontent_blocks` (`spot_id`, `contentblock_id`) VALUES
(32, 74),
(32, 75);

-- --------------------------------------------------------

--
-- Table structure for table `spots_destinationfilters`
--

CREATE TABLE IF NOT EXISTS `spots_destinationfilters` (
  `spot_id` int(11) NOT NULL,
  `spotdestinationfilter_id` int(11) NOT NULL,
  PRIMARY KEY (`spot_id`,`spotdestinationfilter_id`),
  KEY `IDX_3744DBEE2DF1D37C` (`spot_id`),
  KEY `IDX_3744DBEE52ACF0A6` (`spotdestinationfilter_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `spots_destinationfilters`
--

INSERT INTO `spots_destinationfilters` (`spot_id`, `spotdestinationfilter_id`) VALUES
(32, 11),
(33, 11),
(34, 11);

-- --------------------------------------------------------

--
-- Table structure for table `spots_maincontent_blocks`
--

CREATE TABLE IF NOT EXISTS `spots_maincontent_blocks` (
  `spot_id` int(11) NOT NULL,
  `contentblock_id` int(11) NOT NULL,
  PRIMARY KEY (`spot_id`,`contentblock_id`),
  KEY `IDX_5F16D2102DF1D37C` (`spot_id`),
  KEY `IDX_5F16D21042ADBAC2` (`contentblock_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `spots_maincontent_blocks`
--

INSERT INTO `spots_maincontent_blocks` (`spot_id`, `contentblock_id`) VALUES
(31, 71),
(32, 72);

-- --------------------------------------------------------

--
-- Table structure for table `spots_modalcontent_blocks`
--

CREATE TABLE IF NOT EXISTS `spots_modalcontent_blocks` (
  `spot_id` int(11) NOT NULL,
  `contentblock_id` int(11) NOT NULL,
  PRIMARY KEY (`spot_id`,`contentblock_id`),
  KEY `IDX_BEF16ECC2DF1D37C` (`spot_id`),
  KEY `IDX_BEF16ECC42ADBAC2` (`contentblock_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `spots_secondarycontent_blocks`
--

CREATE TABLE IF NOT EXISTS `spots_secondarycontent_blocks` (
  `spot_id` int(11) NOT NULL,
  `contentblock_id` int(11) NOT NULL,
  PRIMARY KEY (`spot_id`,`contentblock_id`),
  KEY `IDX_5BC0C7CD2DF1D37C` (`spot_id`),
  KEY `IDX_5BC0C7CD42ADBAC2` (`contentblock_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `spots_secondarycontent_blocks`
--

INSERT INTO `spots_secondarycontent_blocks` (`spot_id`, `contentblock_id`) VALUES
(31, 70),
(32, 73);

-- --------------------------------------------------------

--
-- Table structure for table `spots_spotfilters`
--

CREATE TABLE IF NOT EXISTS `spots_spotfilters` (
  `spot_id` int(11) NOT NULL,
  `spotfilter_id` int(11) NOT NULL,
  PRIMARY KEY (`spot_id`,`spotfilter_id`),
  KEY `IDX_525160C22DF1D37C` (`spot_id`),
  KEY `IDX_525160C2251236D0` (`spotfilter_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `spots_spotfilters`
--

INSERT INTO `spots_spotfilters` (`spot_id`, `spotfilter_id`) VALUES
(32, 11),
(32, 12),
(33, 11),
(34, 11);

-- --------------------------------------------------------

--
-- Table structure for table `spot_attributes`
--

CREATE TABLE IF NOT EXISTS `spot_attributes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nearestAirport` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nearestTown` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `publicTransportation` tinyint(1) NOT NULL,
  `accessProblem` tinyint(1) NOT NULL,
  `surfClub` tinyint(1) NOT NULL,
  `lessons` tinyint(1) NOT NULL,
  `rental` tinyint(1) NOT NULL,
  `storage` tinyint(1) NOT NULL,
  `repair` tinyint(1) NOT NULL,
  `gearshop` tinyint(1) NOT NULL,
  `rescue` tinyint(1) NOT NULL,
  `snacksAndDrinks` tinyint(1) NOT NULL,
  `parking` tinyint(1) NOT NULL,
  `toilets` tinyint(1) NOT NULL,
  `showers` tinyint(1) NOT NULL,
  `accommodation` longtext COLLATE utf8_unicode_ci NOT NULL COMMENT '(DC2Type:array)',
  `budget` longtext COLLATE utf8_unicode_ci NOT NULL COMMENT '(DC2Type:array)',
  `spotType` longtext COLLATE utf8_unicode_ci NOT NULL COMMENT '(DC2Type:array)',
  `shoreType` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `bottom` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sports` longtext COLLATE utf8_unicode_ci NOT NULL COMMENT '(DC2Type:array)',
  `experience` longtext COLLATE utf8_unicode_ci NOT NULL COMMENT '(DC2Type:array)',
  `style` longtext COLLATE utf8_unicode_ci NOT NULL COMMENT '(DC2Type:array)',
  `crowded` longtext COLLATE utf8_unicode_ci NOT NULL COMMENT '(DC2Type:array)',
  `dangers` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `windDirection` longtext COLLATE utf8_unicode_ci NOT NULL COMMENT '(DC2Type:array)',
  `bestWindDirection` longtext COLLATE utf8_unicode_ci NOT NULL COMMENT '(DC2Type:array)',
  `windForce` longtext COLLATE utf8_unicode_ci NOT NULL COMMENT '(DC2Type:array)',
  `relative` longtext COLLATE utf8_unicode_ci NOT NULL COMMENT '(DC2Type:array)',
  `blowingTime` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `seaState` longtext COLLATE utf8_unicode_ci NOT NULL COMMENT '(DC2Type:array)',
  `swellType` longtext COLLATE utf8_unicode_ci NOT NULL COMMENT '(DC2Type:array)',
  `swellDirection` longtext COLLATE utf8_unicode_ci NOT NULL COMMENT '(DC2Type:array)',
  `swellLength` longtext COLLATE utf8_unicode_ci NOT NULL COMMENT '(DC2Type:array)',
  `pointBreak` longtext COLLATE utf8_unicode_ci NOT NULL COMMENT '(DC2Type:array)',
  `tide` longtext COLLATE utf8_unicode_ci NOT NULL COMMENT '(DC2Type:array)',
  `waterQuality` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `season` longtext COLLATE utf8_unicode_ci NOT NULL COMMENT '(DC2Type:array)',
  `seaTemperature` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nightlife` tinyint(1) NOT NULL,
  `family` tinyint(1) NOT NULL,
  `restaurants` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `spot_attributes`
--

INSERT INTO `spot_attributes` (`id`, `nearestAirport`, `nearestTown`, `publicTransportation`, `accessProblem`, `surfClub`, `lessons`, `rental`, `storage`, `repair`, `gearshop`, `rescue`, `snacksAndDrinks`, `parking`, `toilets`, `showers`, `accommodation`, `budget`, `spotType`, `shoreType`, `bottom`, `sports`, `experience`, `style`, `crowded`, `dangers`, `windDirection`, `bestWindDirection`, `windForce`, `relative`, `blowingTime`, `seaState`, `swellType`, `swellDirection`, `swellLength`, `pointBreak`, `tide`, `waterQuality`, `season`, `seaTemperature`, `nightlife`, `family`, `restaurants`) VALUES
(1, NULL, NULL, 1, 0, 1, 0, 1, 0, 1, 0, 1, 0, 1, 1, 0, 'a:1:{i:0;s:5:"Hotel";}', 'a:2:{i:0;s:6:"Medium";i:1;s:4:"High";}', 'a:1:{i:0;s:5:"Beach";}', NULL, NULL, 'a:3:{i:0;s:8:"Windsurf";i:1;s:8:"Kitesurf";i:2;s:9:"Wakeboard";}', 'a:1:{i:0;s:9:"Advanced ";}', 'a:3:{i:0;s:9:"Freestyle";i:1;s:9:"Big Jumps";i:2;s:7:"Formula";}', 'a:3:{i:0;s:17:"Sometimes crowded";i:1;s:7:"Crowded";i:2;s:11:"Too crowded";}', 'None', 'a:4:{i:0;s:1:"S";i:1;s:3:"SSW";i:2;s:1:"W";i:3;s:2:"NW";}', 'a:4:{i:0;s:2:"SE";i:1;s:3:"SSW";i:2;s:3:"WNW";i:3;s:2:"NW";}', 'a:0:{}', 'a:0:{}', 'All day', 'a:2:{i:0;s:6:"Choppy";i:1;s:4:"Flat";}', 'a:2:{i:0;s:5:"Mixed";i:1;s:11:"Wind swells";}', 'a:5:{i:0;s:2:"NE";i:1;s:2:"SW";i:2;s:3:"WSW";i:3;s:3:"WNW";i:4;s:2:"NW";}', 'a:2:{i:0;s:5:"Short";i:1;s:6:"Medium";}', 'a:1:{i:0;s:4:"Left";}', 'a:2:{i:0;s:4:"High";i:1;s:3:"Low";}', 'Salty', 'a:3:{i:0;s:6:"Automn";i:1;s:6:"Spring";i:2;s:3:"All";}', '20', 1, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `spot_destinations`
--

CREATE TABLE IF NOT EXISTS `spot_destinations` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `destination` int(11) DEFAULT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `class` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `spotDestinationFilterIcon` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_BCCE0A9B46B7BA9` (`spotDestinationFilterIcon`),
  KEY `IDX_BCCE0A9B3EC63EAA` (`destination`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=13 ;

--
-- Dumping data for table `spot_destinations`
--

INSERT INTO `spot_destinations` (`id`, `destination`, `title`, `class`, `spotDestinationFilterIcon`) VALUES
(11, 33, 'Halkidiki', NULL, NULL),
(12, NULL, 'destin', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `spot_filters`
--

CREATE TABLE IF NOT EXISTS `spot_filters` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `filterCategory` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `filterIcon` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_329D53256F191ECD` (`filterIcon`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=15 ;

--
-- Dumping data for table `spot_filters`
--

INSERT INTO `spot_filters` (`id`, `title`, `filterCategory`, `filterIcon`) VALUES
(11, 'Low Budjet', 'Budget', NULL),
(12, 'Wind Surf', 'sport', NULL),
(13, 'Winter', 'season', NULL),
(14, 'Surd', 'sport', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE IF NOT EXISTS `tags` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tagCategory` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tagIcon` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_6FBC94268913051D` (`tagIcon`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=27 ;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`id`, `title`, `tagCategory`, `tagIcon`) VALUES
(25, 'Sample Tag 1', NULL, NULL),
(26, 'Sample Tag 2', 'blog', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `timeline__action`
--

CREATE TABLE IF NOT EXISTS `timeline__action` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `verb` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status_current` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status_wanted` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `duplicate_key` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `duplicate_priority` int(11) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=63 ;

--
-- Dumping data for table `timeline__action`
--

INSERT INTO `timeline__action` (`id`, `verb`, `status_current`, `status_wanted`, `duplicate_key`, `duplicate_priority`, `created_at`) VALUES
(4, 'sonata.admin.update', 'published', 'frozen', NULL, NULL, '2014-02-05 19:49:53'),
(5, 'sonata.admin.update', 'published', 'frozen', NULL, NULL, '2014-02-05 19:50:34'),
(6, 'sonata.admin.update', 'published', 'frozen', NULL, NULL, '2014-02-05 19:50:56'),
(7, 'sonata.admin.create', 'published', 'frozen', NULL, NULL, '2014-02-05 20:03:04'),
(8, 'sonata.admin.create', 'published', 'frozen', NULL, NULL, '2014-02-05 20:03:57'),
(9, 'sonata.admin.create', 'published', 'frozen', NULL, NULL, '2014-02-05 20:11:23'),
(10, 'sonata.admin.create', 'published', 'frozen', NULL, NULL, '2014-02-05 20:11:42'),
(11, 'sonata.admin.update', 'published', 'frozen', NULL, NULL, '2014-02-05 20:11:52'),
(12, 'sonata.admin.update', 'published', 'frozen', NULL, NULL, '2014-02-05 20:28:45'),
(13, 'sonata.admin.update', 'published', 'frozen', NULL, NULL, '2014-02-05 20:28:56'),
(14, 'sonata.admin.update', 'published', 'frozen', NULL, NULL, '2014-02-05 20:30:09'),
(15, 'sonata.admin.update', 'published', 'frozen', NULL, NULL, '2014-02-05 20:32:15'),
(16, 'sonata.admin.update', 'published', 'frozen', NULL, NULL, '2014-02-10 20:39:14'),
(17, 'sonata.admin.update', 'published', 'frozen', NULL, NULL, '2014-02-10 20:39:35'),
(18, 'sonata.admin.update', 'published', 'frozen', NULL, NULL, '2014-02-10 21:47:12'),
(19, 'sonata.admin.update', 'published', 'frozen', NULL, NULL, '2014-02-10 21:47:39'),
(20, 'sonata.admin.update', 'published', 'frozen', NULL, NULL, '2014-02-10 21:48:19'),
(21, 'sonata.admin.update', 'published', 'frozen', NULL, NULL, '2014-02-10 21:48:36'),
(22, 'sonata.admin.update', 'published', 'frozen', NULL, NULL, '2014-02-10 21:48:59'),
(23, 'sonata.admin.update', 'published', 'frozen', NULL, NULL, '2014-02-10 21:49:28'),
(24, 'sonata.admin.update', 'published', 'frozen', NULL, NULL, '2014-02-10 21:53:56'),
(25, 'sonata.admin.create', 'published', 'frozen', NULL, NULL, '2014-02-10 21:57:06'),
(26, 'sonata.admin.create', 'published', 'frozen', NULL, NULL, '2014-02-10 21:57:28'),
(27, 'sonata.admin.create', 'published', 'frozen', NULL, NULL, '2014-02-10 21:57:47'),
(28, 'sonata.admin.create', 'published', 'frozen', NULL, NULL, '2014-02-10 21:58:07'),
(29, 'sonata.admin.update', 'published', 'frozen', NULL, NULL, '2014-02-10 21:59:42'),
(30, 'sonata.admin.update', 'published', 'frozen', NULL, NULL, '2014-02-10 21:59:55'),
(31, 'sonata.admin.update', 'published', 'frozen', NULL, NULL, '2014-02-10 22:43:03'),
(32, 'sonata.admin.update', 'published', 'frozen', NULL, NULL, '2014-02-10 22:48:03'),
(33, 'sonata.admin.update', 'published', 'frozen', NULL, NULL, '2014-02-10 22:48:14'),
(34, 'sonata.admin.update', 'published', 'frozen', NULL, NULL, '2014-02-10 22:48:55'),
(35, 'sonata.admin.update', 'published', 'frozen', NULL, NULL, '2014-02-10 22:49:05'),
(36, 'sonata.admin.update', 'published', 'frozen', NULL, NULL, '2014-02-10 23:20:20'),
(37, 'sonata.admin.update', 'published', 'frozen', NULL, NULL, '2014-02-15 00:23:02'),
(38, 'sonata.admin.update', 'published', 'frozen', NULL, NULL, '2014-02-15 00:37:29'),
(39, 'sonata.admin.update', 'published', 'frozen', NULL, NULL, '2014-02-15 00:37:39'),
(40, 'sonata.admin.update', 'published', 'frozen', NULL, NULL, '2014-02-15 00:37:51'),
(41, 'sonata.admin.update', 'published', 'frozen', NULL, NULL, '2014-02-15 00:38:02'),
(42, 'sonata.admin.create', 'published', 'frozen', NULL, NULL, '2014-02-15 00:50:38'),
(43, 'sonata.admin.create', 'published', 'frozen', NULL, NULL, '2014-02-15 00:52:02'),
(44, 'sonata.admin.create', 'published', 'frozen', NULL, NULL, '2014-02-15 01:15:29'),
(45, 'sonata.admin.create', 'published', 'frozen', NULL, NULL, '2014-02-15 03:13:49'),
(46, 'sonata.admin.create', 'published', 'frozen', NULL, NULL, '2014-02-15 03:53:44'),
(47, 'sonata.admin.update', 'published', 'frozen', NULL, NULL, '2014-02-15 22:12:11'),
(48, 'sonata.admin.update', 'published', 'frozen', NULL, NULL, '2014-02-15 22:12:35'),
(49, 'sonata.admin.update', 'published', 'frozen', NULL, NULL, '2014-02-15 22:13:44'),
(50, 'sonata.admin.update', 'published', 'frozen', NULL, NULL, '2014-02-16 01:22:49'),
(51, 'sonata.admin.update', 'published', 'frozen', NULL, NULL, '2014-02-16 01:23:06'),
(52, 'sonata.admin.update', 'published', 'frozen', NULL, NULL, '2014-02-16 01:23:22'),
(53, 'sonata.admin.update', 'published', 'frozen', NULL, NULL, '2014-02-16 01:23:35'),
(54, 'sonata.admin.update', 'published', 'frozen', NULL, NULL, '2014-02-16 01:26:19'),
(55, 'sonata.admin.update', 'published', 'frozen', NULL, NULL, '2014-02-16 01:27:35'),
(56, 'sonata.admin.update', 'published', 'frozen', NULL, NULL, '2014-02-16 01:27:58'),
(57, 'sonata.admin.update', 'published', 'frozen', NULL, NULL, '2014-02-16 01:28:48'),
(58, 'sonata.admin.update', 'published', 'frozen', NULL, NULL, '2014-02-16 01:31:55'),
(59, 'sonata.admin.update', 'published', 'frozen', NULL, NULL, '2014-02-16 01:32:12'),
(60, 'sonata.admin.update', 'published', 'frozen', NULL, NULL, '2014-02-16 01:32:35'),
(61, 'sonata.admin.update', 'published', 'frozen', NULL, NULL, '2014-02-16 01:33:07'),
(62, 'sonata.admin.update', 'published', 'frozen', NULL, NULL, '2014-02-16 01:33:27');

-- --------------------------------------------------------

--
-- Table structure for table `timeline__action_component`
--

CREATE TABLE IF NOT EXISTS `timeline__action_component` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `action_id` int(11) DEFAULT NULL,
  `component_id` int(11) DEFAULT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `text` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_6ACD1B169D32F035` (`action_id`),
  KEY `IDX_6ACD1B16E2ABAFFF` (`component_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=187 ;

--
-- Dumping data for table `timeline__action_component`
--

INSERT INTO `timeline__action_component` (`id`, `action_id`, `component_id`, `type`, `text`) VALUES
(10, 4, 9, 'target', NULL),
(11, 4, NULL, 'target_text', 'North Greece'),
(12, 4, 8, 'subject', NULL),
(13, 5, 9, 'target', NULL),
(14, 5, NULL, 'target_text', 'North Greece'),
(15, 5, 8, 'subject', NULL),
(16, 6, 9, 'target', NULL),
(17, 6, NULL, 'target_text', 'North Greece'),
(18, 6, 8, 'subject', NULL),
(19, 7, 10, 'target', NULL),
(20, 7, NULL, 'target_text', 'South Greece'),
(21, 7, 8, 'subject', NULL),
(22, 8, 11, 'target', NULL),
(23, 8, NULL, 'target_text', 'South Greece'),
(24, 8, 8, 'subject', NULL),
(25, 9, 12, 'target', NULL),
(26, 9, NULL, 'target_text', 'Halkidiki Clone'),
(27, 9, 8, 'subject', NULL),
(28, 10, 13, 'target', NULL),
(29, 10, NULL, 'target_text', 'South Greece Clone'),
(30, 10, 8, 'subject', NULL),
(31, 11, 13, 'target', NULL),
(32, 11, NULL, 'target_text', 'South Greece Clone'),
(33, 11, 8, 'subject', NULL),
(34, 12, 14, 'target', NULL),
(35, 12, NULL, 'target_text', 'Events'),
(36, 12, 8, 'subject', NULL),
(37, 13, 14, 'target', NULL),
(38, 13, NULL, 'target_text', 'Events'),
(39, 13, 8, 'subject', NULL),
(40, 14, 15, 'target', NULL),
(41, 14, NULL, 'target_text', 'North Greece'),
(42, 14, 8, 'subject', NULL),
(43, 15, 15, 'target', NULL),
(44, 15, NULL, 'target_text', 'North Greece'),
(45, 15, 8, 'subject', NULL),
(46, 16, 16, 'target', NULL),
(47, 16, NULL, 'target_text', 'Destinations'),
(48, 16, 8, 'subject', NULL),
(49, 17, 16, 'target', NULL),
(50, 17, NULL, 'target_text', 'Destinations'),
(51, 17, 8, 'subject', NULL),
(52, 18, 9, 'target', NULL),
(53, 18, NULL, 'target_text', 'North Greece'),
(54, 18, 8, 'subject', NULL),
(55, 19, 9, 'target', NULL),
(56, 19, NULL, 'target_text', 'North Greece'),
(57, 19, 8, 'subject', NULL),
(58, 20, 9, 'target', NULL),
(59, 20, NULL, 'target_text', 'North Greece'),
(60, 20, 8, 'subject', NULL),
(61, 21, 9, 'target', NULL),
(62, 21, NULL, 'target_text', 'North Greece'),
(63, 21, 8, 'subject', NULL),
(64, 22, 9, 'target', NULL),
(65, 22, NULL, 'target_text', 'North Greece'),
(66, 22, 8, 'subject', NULL),
(67, 23, 9, 'target', NULL),
(68, 23, NULL, 'target_text', 'North Greece'),
(69, 23, 8, 'subject', NULL),
(70, 24, 16, 'target', NULL),
(71, 24, NULL, 'target_text', 'Destinations'),
(72, 24, 8, 'subject', NULL),
(73, 25, 17, 'target', NULL),
(74, 25, NULL, 'target_text', 'Kite Surf'),
(75, 25, 8, 'subject', NULL),
(76, 26, 18, 'target', NULL),
(77, 26, NULL, 'target_text', 'Wake Board'),
(78, 26, 8, 'subject', NULL),
(79, 27, 19, 'target', NULL),
(80, 27, NULL, 'target_text', 'Surf'),
(81, 27, 8, 'subject', NULL),
(82, 28, 20, 'target', NULL),
(83, 28, NULL, 'target_text', 'Water Ski'),
(84, 28, 8, 'subject', NULL),
(85, 29, 18, 'target', NULL),
(86, 29, NULL, 'target_text', 'Wake Board'),
(87, 29, 8, 'subject', NULL),
(88, 30, 21, 'target', NULL),
(89, 30, NULL, 'target_text', 'Halkidiki'),
(90, 30, 8, 'subject', NULL),
(91, 31, 21, 'target', NULL),
(92, 31, NULL, 'target_text', 'Halkidiki'),
(93, 31, 8, 'subject', NULL),
(94, 32, 21, 'target', NULL),
(95, 32, NULL, 'target_text', 'Halkidiki'),
(96, 32, 8, 'subject', NULL),
(97, 33, 21, 'target', NULL),
(98, 33, NULL, 'target_text', 'Halkidiki'),
(99, 33, 8, 'subject', NULL),
(100, 34, 21, 'target', NULL),
(101, 34, NULL, 'target_text', 'Halkidiki'),
(102, 34, 8, 'subject', NULL),
(103, 35, 21, 'target', NULL),
(104, 35, NULL, 'target_text', 'Halkidiki'),
(105, 35, 8, 'subject', NULL),
(106, 36, 22, 'target', NULL),
(107, 36, NULL, 'target_text', 'Surf'),
(108, 36, 8, 'subject', NULL),
(109, 37, 23, 'target', NULL),
(110, 37, NULL, 'target_text', 'Spots'),
(111, 37, 8, 'subject', NULL),
(112, 38, 23, 'target', NULL),
(113, 38, NULL, 'target_text', 'Spots'),
(114, 38, 8, 'subject', NULL),
(115, 39, 23, 'target', NULL),
(116, 39, NULL, 'target_text', 'Spots'),
(117, 39, 8, 'subject', NULL),
(118, 40, 23, 'target', NULL),
(119, 40, NULL, 'target_text', 'Spots'),
(120, 40, 8, 'subject', NULL),
(121, 41, 23, 'target', NULL),
(122, 41, NULL, 'target_text', 'Spots'),
(123, 41, 8, 'subject', NULL),
(124, 42, 24, 'target', NULL),
(125, 42, NULL, 'target_text', 'Wind Surf'),
(126, 42, 8, 'subject', NULL),
(127, 43, 25, 'target', NULL),
(128, 43, NULL, 'target_text', 'Winter'),
(129, 43, 8, 'subject', NULL),
(130, 44, 26, 'target', NULL),
(131, 44, NULL, 'target_text', 'Surd'),
(132, 44, 8, 'subject', NULL),
(133, 45, 27, 'target', NULL),
(134, 45, NULL, 'target_text', 'Test spot page 2 Clone'),
(135, 45, 8, 'subject', NULL),
(136, 46, 28, 'target', NULL),
(137, 46, NULL, 'target_text', 'destin'),
(138, 46, 8, 'subject', NULL),
(139, 47, 29, 'target', NULL),
(140, 47, NULL, 'target_text', 'Test spot page 1'),
(141, 47, 8, 'subject', NULL),
(142, 48, 29, 'target', NULL),
(143, 48, NULL, 'target_text', 'Test spot page 1'),
(144, 48, 8, 'subject', NULL),
(145, 49, 29, 'target', NULL),
(146, 49, NULL, 'target_text', 'Test spot page 1'),
(147, 49, 8, 'subject', NULL),
(148, 50, 29, 'target', NULL),
(149, 50, NULL, 'target_text', 'Test spot page 1'),
(150, 50, 8, 'subject', NULL),
(151, 51, 29, 'target', NULL),
(152, 51, NULL, 'target_text', 'Test spot page 1'),
(153, 51, 8, 'subject', NULL),
(154, 52, 29, 'target', NULL),
(155, 52, NULL, 'target_text', 'Test spot page 1'),
(156, 52, 8, 'subject', NULL),
(157, 53, 29, 'target', NULL),
(158, 53, NULL, 'target_text', 'Test spot page 1'),
(159, 53, 8, 'subject', NULL),
(160, 54, 29, 'target', NULL),
(161, 54, NULL, 'target_text', 'Test spot page 1'),
(162, 54, 8, 'subject', NULL),
(163, 55, 29, 'target', NULL),
(164, 55, NULL, 'target_text', 'Test spot page 1'),
(165, 55, 8, 'subject', NULL),
(166, 56, 29, 'target', NULL),
(167, 56, NULL, 'target_text', 'Test spot page 1'),
(168, 56, 8, 'subject', NULL),
(169, 57, 29, 'target', NULL),
(170, 57, NULL, 'target_text', 'Test spot page 1'),
(171, 57, 8, 'subject', NULL),
(172, 58, 29, 'target', NULL),
(173, 58, NULL, 'target_text', 'Test spot page 1'),
(174, 58, 8, 'subject', NULL),
(175, 59, 29, 'target', NULL),
(176, 59, NULL, 'target_text', 'Test spot page 1'),
(177, 59, 8, 'subject', NULL),
(178, 60, 29, 'target', NULL),
(179, 60, NULL, 'target_text', 'Test spot page 1'),
(180, 60, 8, 'subject', NULL),
(181, 61, 29, 'target', NULL),
(182, 61, NULL, 'target_text', 'Test spot page 1'),
(183, 61, 8, 'subject', NULL),
(184, 62, 29, 'target', NULL),
(185, 62, NULL, 'target_text', 'Test spot page 1'),
(186, 62, 8, 'subject', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `timeline__component`
--

CREATE TABLE IF NOT EXISTS `timeline__component` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `model` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `identifier` longtext COLLATE utf8_unicode_ci NOT NULL COMMENT '(DC2Type:array)',
  `hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_1B2F01CDD1B862B8` (`hash`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=30 ;

--
-- Dumping data for table `timeline__component`
--

INSERT INTO `timeline__component` (`id`, `model`, `identifier`, `hash`) VALUES
(8, 'Application\\Sonata\\UserBundle\\Entity\\User', 's:2:"13";', 'Application\\Sonata\\UserBundle\\Entity\\User#s:2:"13";'),
(9, 'BardisCMS\\DestinationBundle\\Entity\\Destination', 's:2:"32";', 'BardisCMS\\DestinationBundle\\Entity\\Destination#s:2:"32";'),
(10, 'BardisCMS\\DestinationBundle\\Entity\\DestinationCategory', 's:2:"23";', 'BardisCMS\\DestinationBundle\\Entity\\DestinationCategory#s:2:"23";'),
(11, 'BardisCMS\\DestinationBundle\\Entity\\Destination', 's:2:"34";', 'BardisCMS\\DestinationBundle\\Entity\\Destination#s:2:"34";'),
(12, 'BardisCMS\\DestinationBundle\\Entity\\Destination', 's:2:"35";', 'BardisCMS\\DestinationBundle\\Entity\\Destination#s:2:"35";'),
(13, 'BardisCMS\\DestinationBundle\\Entity\\Destination', 's:2:"36";', 'BardisCMS\\DestinationBundle\\Entity\\Destination#s:2:"36";'),
(14, 'BardisCMS\\MenuBundle\\Entity\\Menu', 's:2:"84";', 'BardisCMS\\MenuBundle\\Entity\\Menu#s:2:"84";'),
(15, 'BardisCMS\\DestinationBundle\\Entity\\DestinationCategory', 's:2:"22";', 'BardisCMS\\DestinationBundle\\Entity\\DestinationCategory#s:2:"22";'),
(16, 'BardisCMS\\DestinationBundle\\Entity\\Destination', 's:2:"31";', 'BardisCMS\\DestinationBundle\\Entity\\Destination#s:2:"31";'),
(17, 'BardisCMS\\DestinationBundle\\Entity\\DestinationTag', 's:2:"12";', 'BardisCMS\\DestinationBundle\\Entity\\DestinationTag#s:2:"12";'),
(18, 'BardisCMS\\DestinationBundle\\Entity\\DestinationTag', 's:2:"13";', 'BardisCMS\\DestinationBundle\\Entity\\DestinationTag#s:2:"13";'),
(19, 'BardisCMS\\DestinationBundle\\Entity\\DestinationTag', 's:2:"14";', 'BardisCMS\\DestinationBundle\\Entity\\DestinationTag#s:2:"14";'),
(20, 'BardisCMS\\DestinationBundle\\Entity\\DestinationTag', 's:2:"15";', 'BardisCMS\\DestinationBundle\\Entity\\DestinationTag#s:2:"15";'),
(21, 'BardisCMS\\DestinationBundle\\Entity\\Destination', 's:2:"33";', 'BardisCMS\\DestinationBundle\\Entity\\Destination#s:2:"33";'),
(22, 'BardisCMS\\DestinationBundle\\Entity\\DestinationTag', 's:2:"11";', 'BardisCMS\\DestinationBundle\\Entity\\DestinationTag#s:2:"11";'),
(23, 'BardisCMS\\SpotBundle\\Entity\\Spot', 's:2:"31";', 'BardisCMS\\SpotBundle\\Entity\\Spot#s:2:"31";'),
(24, 'BardisCMS\\SpotBundle\\Entity\\SpotFilter', 's:2:"12";', 'BardisCMS\\SpotBundle\\Entity\\SpotFilter#s:2:"12";'),
(25, 'BardisCMS\\SpotBundle\\Entity\\SpotFilter', 's:2:"13";', 'BardisCMS\\SpotBundle\\Entity\\SpotFilter#s:2:"13";'),
(26, 'BardisCMS\\SpotBundle\\Entity\\SpotFilter', 's:2:"14";', 'BardisCMS\\SpotBundle\\Entity\\SpotFilter#s:2:"14";'),
(27, 'BardisCMS\\SpotBundle\\Entity\\Spot', 's:2:"34";', 'BardisCMS\\SpotBundle\\Entity\\Spot#s:2:"34";'),
(28, 'BardisCMS\\SpotBundle\\Entity\\SpotDestinationFilter', 's:2:"12";', 'BardisCMS\\SpotBundle\\Entity\\SpotDestinationFilter#s:2:"12";'),
(29, 'BardisCMS\\SpotBundle\\Entity\\Spot', 's:2:"32";', 'BardisCMS\\SpotBundle\\Entity\\Spot#s:2:"32";');

-- --------------------------------------------------------

--
-- Table structure for table `timeline__timeline`
--

CREATE TABLE IF NOT EXISTS `timeline__timeline` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `action_id` int(11) DEFAULT NULL,
  `subject_id` int(11) DEFAULT NULL,
  `context` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_FFBC6AD59D32F035` (`action_id`),
  KEY `IDX_FFBC6AD523EDC87` (`subject_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=125 ;

--
-- Dumping data for table `timeline__timeline`
--

INSERT INTO `timeline__timeline` (`id`, `action_id`, `subject_id`, `context`, `type`, `created_at`) VALUES
(7, 4, 8, 'GLOBAL', 'timeline', '2014-02-05 19:49:53'),
(8, 4, 8, 'SONATA_ADMIN', 'timeline', '2014-02-05 19:49:53'),
(9, 5, 8, 'GLOBAL', 'timeline', '2014-02-05 19:50:34'),
(10, 5, 8, 'SONATA_ADMIN', 'timeline', '2014-02-05 19:50:34'),
(11, 6, 8, 'GLOBAL', 'timeline', '2014-02-05 19:50:56'),
(12, 6, 8, 'SONATA_ADMIN', 'timeline', '2014-02-05 19:50:56'),
(13, 7, 8, 'GLOBAL', 'timeline', '2014-02-05 20:03:04'),
(14, 7, 8, 'SONATA_ADMIN', 'timeline', '2014-02-05 20:03:04'),
(15, 8, 8, 'GLOBAL', 'timeline', '2014-02-05 20:03:57'),
(16, 8, 8, 'SONATA_ADMIN', 'timeline', '2014-02-05 20:03:57'),
(17, 9, 8, 'GLOBAL', 'timeline', '2014-02-05 20:11:23'),
(18, 9, 8, 'SONATA_ADMIN', 'timeline', '2014-02-05 20:11:23'),
(19, 10, 8, 'GLOBAL', 'timeline', '2014-02-05 20:11:42'),
(20, 10, 8, 'SONATA_ADMIN', 'timeline', '2014-02-05 20:11:42'),
(21, 11, 8, 'GLOBAL', 'timeline', '2014-02-05 20:11:52'),
(22, 11, 8, 'SONATA_ADMIN', 'timeline', '2014-02-05 20:11:52'),
(23, 12, 8, 'GLOBAL', 'timeline', '2014-02-05 20:28:45'),
(24, 12, 8, 'SONATA_ADMIN', 'timeline', '2014-02-05 20:28:45'),
(25, 13, 8, 'GLOBAL', 'timeline', '2014-02-05 20:28:56'),
(26, 13, 8, 'SONATA_ADMIN', 'timeline', '2014-02-05 20:28:56'),
(27, 14, 8, 'GLOBAL', 'timeline', '2014-02-05 20:30:10'),
(28, 14, 8, 'SONATA_ADMIN', 'timeline', '2014-02-05 20:30:10'),
(29, 15, 8, 'GLOBAL', 'timeline', '2014-02-05 20:32:15'),
(30, 15, 8, 'SONATA_ADMIN', 'timeline', '2014-02-05 20:32:15'),
(31, 16, 8, 'GLOBAL', 'timeline', '2014-02-10 20:39:14'),
(32, 16, 8, 'SONATA_ADMIN', 'timeline', '2014-02-10 20:39:14'),
(33, 17, 8, 'GLOBAL', 'timeline', '2014-02-10 20:39:35'),
(34, 17, 8, 'SONATA_ADMIN', 'timeline', '2014-02-10 20:39:35'),
(35, 18, 8, 'GLOBAL', 'timeline', '2014-02-10 21:47:12'),
(36, 18, 8, 'SONATA_ADMIN', 'timeline', '2014-02-10 21:47:12'),
(37, 19, 8, 'GLOBAL', 'timeline', '2014-02-10 21:47:39'),
(38, 19, 8, 'SONATA_ADMIN', 'timeline', '2014-02-10 21:47:39'),
(39, 20, 8, 'GLOBAL', 'timeline', '2014-02-10 21:48:19'),
(40, 20, 8, 'SONATA_ADMIN', 'timeline', '2014-02-10 21:48:19'),
(41, 21, 8, 'GLOBAL', 'timeline', '2014-02-10 21:48:36'),
(42, 21, 8, 'SONATA_ADMIN', 'timeline', '2014-02-10 21:48:36'),
(43, 22, 8, 'GLOBAL', 'timeline', '2014-02-10 21:48:59'),
(44, 22, 8, 'SONATA_ADMIN', 'timeline', '2014-02-10 21:48:59'),
(45, 23, 8, 'GLOBAL', 'timeline', '2014-02-10 21:49:28'),
(46, 23, 8, 'SONATA_ADMIN', 'timeline', '2014-02-10 21:49:28'),
(47, 24, 8, 'GLOBAL', 'timeline', '2014-02-10 21:53:56'),
(48, 24, 8, 'SONATA_ADMIN', 'timeline', '2014-02-10 21:53:56'),
(49, 25, 8, 'GLOBAL', 'timeline', '2014-02-10 21:57:06'),
(50, 25, 8, 'SONATA_ADMIN', 'timeline', '2014-02-10 21:57:06'),
(51, 26, 8, 'GLOBAL', 'timeline', '2014-02-10 21:57:28'),
(52, 26, 8, 'SONATA_ADMIN', 'timeline', '2014-02-10 21:57:28'),
(53, 27, 8, 'GLOBAL', 'timeline', '2014-02-10 21:57:47'),
(54, 27, 8, 'SONATA_ADMIN', 'timeline', '2014-02-10 21:57:47'),
(55, 28, 8, 'GLOBAL', 'timeline', '2014-02-10 21:58:07'),
(56, 28, 8, 'SONATA_ADMIN', 'timeline', '2014-02-10 21:58:07'),
(57, 29, 8, 'GLOBAL', 'timeline', '2014-02-10 21:59:42'),
(58, 29, 8, 'SONATA_ADMIN', 'timeline', '2014-02-10 21:59:42'),
(59, 30, 8, 'GLOBAL', 'timeline', '2014-02-10 21:59:55'),
(60, 30, 8, 'SONATA_ADMIN', 'timeline', '2014-02-10 21:59:55'),
(61, 31, 8, 'GLOBAL', 'timeline', '2014-02-10 22:43:03'),
(62, 31, 8, 'SONATA_ADMIN', 'timeline', '2014-02-10 22:43:03'),
(63, 32, 8, 'GLOBAL', 'timeline', '2014-02-10 22:48:03'),
(64, 32, 8, 'SONATA_ADMIN', 'timeline', '2014-02-10 22:48:03'),
(65, 33, 8, 'GLOBAL', 'timeline', '2014-02-10 22:48:14'),
(66, 33, 8, 'SONATA_ADMIN', 'timeline', '2014-02-10 22:48:14'),
(67, 34, 8, 'GLOBAL', 'timeline', '2014-02-10 22:48:55'),
(68, 34, 8, 'SONATA_ADMIN', 'timeline', '2014-02-10 22:48:55'),
(69, 35, 8, 'GLOBAL', 'timeline', '2014-02-10 22:49:05'),
(70, 35, 8, 'SONATA_ADMIN', 'timeline', '2014-02-10 22:49:06'),
(71, 36, 8, 'GLOBAL', 'timeline', '2014-02-10 23:20:20'),
(72, 36, 8, 'SONATA_ADMIN', 'timeline', '2014-02-10 23:20:20'),
(73, 37, 8, 'GLOBAL', 'timeline', '2014-02-15 00:23:02'),
(74, 37, 8, 'SONATA_ADMIN', 'timeline', '2014-02-15 00:23:02'),
(75, 38, 8, 'GLOBAL', 'timeline', '2014-02-15 00:37:29'),
(76, 38, 8, 'SONATA_ADMIN', 'timeline', '2014-02-15 00:37:29'),
(77, 39, 8, 'GLOBAL', 'timeline', '2014-02-15 00:37:39'),
(78, 39, 8, 'SONATA_ADMIN', 'timeline', '2014-02-15 00:37:39'),
(79, 40, 8, 'GLOBAL', 'timeline', '2014-02-15 00:37:51'),
(80, 40, 8, 'SONATA_ADMIN', 'timeline', '2014-02-15 00:37:51'),
(81, 41, 8, 'GLOBAL', 'timeline', '2014-02-15 00:38:02'),
(82, 41, 8, 'SONATA_ADMIN', 'timeline', '2014-02-15 00:38:02'),
(83, 42, 8, 'GLOBAL', 'timeline', '2014-02-15 00:50:38'),
(84, 42, 8, 'SONATA_ADMIN', 'timeline', '2014-02-15 00:50:38'),
(85, 43, 8, 'GLOBAL', 'timeline', '2014-02-15 00:52:02'),
(86, 43, 8, 'SONATA_ADMIN', 'timeline', '2014-02-15 00:52:02'),
(87, 44, 8, 'GLOBAL', 'timeline', '2014-02-15 01:15:29'),
(88, 44, 8, 'SONATA_ADMIN', 'timeline', '2014-02-15 01:15:29'),
(89, 45, 8, 'GLOBAL', 'timeline', '2014-02-15 03:13:49'),
(90, 45, 8, 'SONATA_ADMIN', 'timeline', '2014-02-15 03:13:49'),
(91, 46, 8, 'GLOBAL', 'timeline', '2014-02-15 03:53:44'),
(92, 46, 8, 'SONATA_ADMIN', 'timeline', '2014-02-15 03:53:44'),
(93, 47, 8, 'GLOBAL', 'timeline', '2014-02-15 22:12:11'),
(94, 47, 8, 'SONATA_ADMIN', 'timeline', '2014-02-15 22:12:11'),
(95, 48, 8, 'GLOBAL', 'timeline', '2014-02-15 22:12:35'),
(96, 48, 8, 'SONATA_ADMIN', 'timeline', '2014-02-15 22:12:35'),
(97, 49, 8, 'GLOBAL', 'timeline', '2014-02-15 22:13:44'),
(98, 49, 8, 'SONATA_ADMIN', 'timeline', '2014-02-15 22:13:44'),
(99, 50, 8, 'GLOBAL', 'timeline', '2014-02-16 01:22:49'),
(100, 50, 8, 'SONATA_ADMIN', 'timeline', '2014-02-16 01:22:49'),
(101, 51, 8, 'GLOBAL', 'timeline', '2014-02-16 01:23:06'),
(102, 51, 8, 'SONATA_ADMIN', 'timeline', '2014-02-16 01:23:06'),
(103, 52, 8, 'GLOBAL', 'timeline', '2014-02-16 01:23:22'),
(104, 52, 8, 'SONATA_ADMIN', 'timeline', '2014-02-16 01:23:22'),
(105, 53, 8, 'GLOBAL', 'timeline', '2014-02-16 01:23:35'),
(106, 53, 8, 'SONATA_ADMIN', 'timeline', '2014-02-16 01:23:35'),
(107, 54, 8, 'GLOBAL', 'timeline', '2014-02-16 01:26:19'),
(108, 54, 8, 'SONATA_ADMIN', 'timeline', '2014-02-16 01:26:19'),
(109, 55, 8, 'GLOBAL', 'timeline', '2014-02-16 01:27:35'),
(110, 55, 8, 'SONATA_ADMIN', 'timeline', '2014-02-16 01:27:35'),
(111, 56, 8, 'GLOBAL', 'timeline', '2014-02-16 01:27:58'),
(112, 56, 8, 'SONATA_ADMIN', 'timeline', '2014-02-16 01:27:58'),
(113, 57, 8, 'GLOBAL', 'timeline', '2014-02-16 01:28:48'),
(114, 57, 8, 'SONATA_ADMIN', 'timeline', '2014-02-16 01:28:48'),
(115, 58, 8, 'GLOBAL', 'timeline', '2014-02-16 01:31:56'),
(116, 58, 8, 'SONATA_ADMIN', 'timeline', '2014-02-16 01:31:56'),
(117, 59, 8, 'GLOBAL', 'timeline', '2014-02-16 01:32:12'),
(118, 59, 8, 'SONATA_ADMIN', 'timeline', '2014-02-16 01:32:12'),
(119, 60, 8, 'GLOBAL', 'timeline', '2014-02-16 01:32:35'),
(120, 60, 8, 'SONATA_ADMIN', 'timeline', '2014-02-16 01:32:35'),
(121, 61, 8, 'GLOBAL', 'timeline', '2014-02-16 01:33:07'),
(122, 61, 8, 'SONATA_ADMIN', 'timeline', '2014-02-16 01:33:07'),
(123, 62, 8, 'GLOBAL', 'timeline', '2014-02-16 01:33:27'),
(124, 62, 8, 'SONATA_ADMIN', 'timeline', '2014-02-16 01:33:27');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `acl_entries`
--
ALTER TABLE `acl_entries`
  ADD CONSTRAINT `FK_46C8B8063D9AB4A6` FOREIGN KEY (`object_identity_id`) REFERENCES `acl_object_identities` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_46C8B806DF9183C9` FOREIGN KEY (`security_identity_id`) REFERENCES `acl_security_identities` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_46C8B806EA000B10` FOREIGN KEY (`class_id`) REFERENCES `acl_classes` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `acl_object_identities`
--
ALTER TABLE `acl_object_identities`
  ADD CONSTRAINT `FK_9407E54977FA751A` FOREIGN KEY (`parent_object_identity_id`) REFERENCES `acl_object_identities` (`id`);

--
-- Constraints for table `acl_object_identity_ancestors`
--
ALTER TABLE `acl_object_identity_ancestors`
  ADD CONSTRAINT `FK_825DE2993D9AB4A6` FOREIGN KEY (`object_identity_id`) REFERENCES `acl_object_identities` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_825DE299C671CEA1` FOREIGN KEY (`ancestor_id`) REFERENCES `acl_object_identities` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `bannercontent_blocks`
--
ALTER TABLE `bannercontent_blocks`
  ADD CONSTRAINT `FK_F4D58642ADBAC2` FOREIGN KEY (`contentblock_id`) REFERENCES `content_blocks` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_F4D586C4663E4` FOREIGN KEY (`page_id`) REFERENCES `pages` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `blogs`
--
ALTER TABLE `blogs`
  ADD CONSTRAINT `FK_F41BCA704A73D32C` FOREIGN KEY (`introvideo`) REFERENCES `media__media` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `FK_F41BCA7097AB4E12` FOREIGN KEY (`bgimage`) REFERENCES `media__media` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `FK_F41BCA70BDAFD8C8` FOREIGN KEY (`author`) REFERENCES `fos_user_user` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `FK_F41BCA70F3890D5F` FOREIGN KEY (`introimage`) REFERENCES `media__media` (`id`) ON DELETE SET NULL;

--
-- Constraints for table `blogs_categories`
--
ALTER TABLE `blogs_categories`
  ADD CONSTRAINT `FK_9DB3BC9712469DE2` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_9DB3BC97DAE07E97` FOREIGN KEY (`blog_id`) REFERENCES `blogs` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `blogs_tags`
--
ALTER TABLE `blogs_tags`
  ADD CONSTRAINT `FK_B21862B8BAD26311` FOREIGN KEY (`tag_id`) REFERENCES `tags` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_B21862B8DAE07E97` FOREIGN KEY (`blog_id`) REFERENCES `blogs` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `blog_bannercontent_blocks`
--
ALTER TABLE `blog_bannercontent_blocks`
  ADD CONSTRAINT `FK_BBBD848542ADBAC2` FOREIGN KEY (`contentblock_id`) REFERENCES `content_blocks` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_BBBD8485DAE07E97` FOREIGN KEY (`blog_id`) REFERENCES `blogs` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `blog_extracontent_blocks`
--
ALTER TABLE `blog_extracontent_blocks`
  ADD CONSTRAINT `FK_D0FE99C642ADBAC2` FOREIGN KEY (`contentblock_id`) REFERENCES `content_blocks` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_D0FE99C6DAE07E97` FOREIGN KEY (`blog_id`) REFERENCES `blogs` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `blog_maincontent_blocks`
--
ALTER TABLE `blog_maincontent_blocks`
  ADD CONSTRAINT `FK_1FB7CF4E42ADBAC2` FOREIGN KEY (`contentblock_id`) REFERENCES `content_blocks` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_1FB7CF4EDAE07E97` FOREIGN KEY (`blog_id`) REFERENCES `blogs` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `blog_modalcontent_blocks`
--
ALTER TABLE `blog_modalcontent_blocks`
  ADD CONSTRAINT `FK_3262B32242ADBAC2` FOREIGN KEY (`contentblock_id`) REFERENCES `content_blocks` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_3262B322DAE07E97` FOREIGN KEY (`blog_id`) REFERENCES `blogs` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `categories`
--
ALTER TABLE `categories`
  ADD CONSTRAINT `FK_3AF34668AD0F3245` FOREIGN KEY (`categoryIcon`) REFERENCES `media__media` (`id`) ON DELETE SET NULL;

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `FK_5F9E962ADAE07E97` FOREIGN KEY (`blog_id`) REFERENCES `blogs` (`id`);

--
-- Constraints for table `content_blocks`
--
ALTER TABLE `content_blocks`
  ADD CONSTRAINT `FK_A6DBE5D44E850E4D` FOREIGN KEY (`fileFile`) REFERENCES `media__media` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_A6DBE5D472EFEE62` FOREIGN KEY (`slide`) REFERENCES `content_slides` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_A6DBE5D47316E1A3` FOREIGN KEY (`vimeo`) REFERENCES `media__media` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_A6DBE5D4F0789934` FOREIGN KEY (`youtube`) REFERENCES `media__media` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `content_blocks_images`
--
ALTER TABLE `content_blocks_images`
  ADD CONSTRAINT `FK_960CFC1F42ADBAC2` FOREIGN KEY (`contentblock_id`) REFERENCES `content_blocks` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_960CFC1F96E51DA3` FOREIGN KEY (`contentimage_id`) REFERENCES `content_images` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `content_images`
--
ALTER TABLE `content_images`
  ADD CONSTRAINT `FK_8829CEC6991EFFB9` FOREIGN KEY (`imagefile`) REFERENCES `media__media` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `content_slides`
--
ALTER TABLE `content_slides`
  ADD CONSTRAINT `FK_D0F6503D991EFFB9` FOREIGN KEY (`imagefile`) REFERENCES `media__media` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `destinations`
--
ALTER TABLE `destinations`
  ADD CONSTRAINT `FK_2D3343C335767543` FOREIGN KEY (`destinationicon`) REFERENCES `media__media` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `FK_2D3343C397AB4E12` FOREIGN KEY (`bgimage`) REFERENCES `media__media` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `FK_2D3343C3BDAFD8C8` FOREIGN KEY (`author`) REFERENCES `fos_user_user` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `FK_2D3343C3D2BBDDF7` FOREIGN KEY (`spots`) REFERENCES `spots` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `FK_2D3343C3F3890D5F` FOREIGN KEY (`introimage`) REFERENCES `media__media` (`id`) ON DELETE SET NULL;

--
-- Constraints for table `destinations_categories`
--
ALTER TABLE `destinations_categories`
  ADD CONSTRAINT `FK_61B1CB522C34F628` FOREIGN KEY (`destinationcategory_id`) REFERENCES `destination_categories` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_61B1CB52816C6140` FOREIGN KEY (`destination_id`) REFERENCES `destinations` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `destinations_tags`
--
ALTER TABLE `destinations_tags`
  ADD CONSTRAINT `FK_138A80C361972E3E` FOREIGN KEY (`destinationtag_id`) REFERENCES `destination_tags` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_138A80C3816C6140` FOREIGN KEY (`destination_id`) REFERENCES `destinations` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `destination_bannercontent_blocks`
--
ALTER TABLE `destination_bannercontent_blocks`
  ADD CONSTRAINT `FK_1AB7924042ADBAC2` FOREIGN KEY (`contentblock_id`) REFERENCES `content_blocks` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_1AB79240816C6140` FOREIGN KEY (`destination_id`) REFERENCES `destinations` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `destination_categories`
--
ALTER TABLE `destination_categories`
  ADD CONSTRAINT `FK_67CADDDABD7209A` FOREIGN KEY (`destinationListPage`) REFERENCES `destinations` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `FK_67CADDDACEB1B078` FOREIGN KEY (`destinationCategoryIcon`) REFERENCES `media__media` (`id`);

--
-- Constraints for table `destination_maincontent_blocks`
--
ALTER TABLE `destination_maincontent_blocks`
  ADD CONSTRAINT `FK_21C5B86442ADBAC2` FOREIGN KEY (`contentblock_id`) REFERENCES `content_blocks` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_21C5B864816C6140` FOREIGN KEY (`destination_id`) REFERENCES `destinations` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `destination_modalcontent_blocks`
--
ALTER TABLE `destination_modalcontent_blocks`
  ADD CONSTRAINT `FK_E9E7088342ADBAC2` FOREIGN KEY (`contentblock_id`) REFERENCES `content_blocks` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_E9E70883816C6140` FOREIGN KEY (`destination_id`) REFERENCES `destinations` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `destination_secondarycontent_blocks`
--
ALTER TABLE `destination_secondarycontent_blocks`
  ADD CONSTRAINT `FK_3D7A49B442ADBAC2` FOREIGN KEY (`contentblock_id`) REFERENCES `content_blocks` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_3D7A49B4816C6140` FOREIGN KEY (`destination_id`) REFERENCES `destinations` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `destination_tags`
--
ALTER TABLE `destination_tags`
  ADD CONSTRAINT `FK_CC1D1D178913051D` FOREIGN KEY (`tagIcon`) REFERENCES `media__media` (`id`);

--
-- Constraints for table `extracontent_blocks`
--
ALTER TABLE `extracontent_blocks`
  ADD CONSTRAINT `FK_92E8997342ADBAC2` FOREIGN KEY (`contentblock_id`) REFERENCES `content_blocks` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_92E89973C4663E4` FOREIGN KEY (`page_id`) REFERENCES `pages` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `fos_user_user_group`
--
ALTER TABLE `fos_user_user_group`
  ADD CONSTRAINT `FK_B3C77447A76ED395` FOREIGN KEY (`user_id`) REFERENCES `fos_user_user` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_B3C77447FE54D947` FOREIGN KEY (`group_id`) REFERENCES `fos_user_group` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `maincontent_blocks`
--
ALTER TABLE `maincontent_blocks`
  ADD CONSTRAINT `FK_BB2F166742ADBAC2` FOREIGN KEY (`contentblock_id`) REFERENCES `content_blocks` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_BB2F1667C4663E4` FOREIGN KEY (`page_id`) REFERENCES `pages` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `media__gallery_media`
--
ALTER TABLE `media__gallery_media`
  ADD CONSTRAINT `FK_80D4C5414E7AF8F` FOREIGN KEY (`gallery_id`) REFERENCES `media__gallery` (`id`),
  ADD CONSTRAINT `FK_80D4C541EA9FDD75` FOREIGN KEY (`media_id`) REFERENCES `media__media` (`id`);

--
-- Constraints for table `menu_items`
--
ALTER TABLE `menu_items`
  ADD CONSTRAINT `FK_70B2CA2A140AB620` FOREIGN KEY (`page`) REFERENCES `pages` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `FK_70B2CA2A3EC63EAA` FOREIGN KEY (`destination`) REFERENCES `destinations` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `FK_70B2CA2A9196AB0E` FOREIGN KEY (`menuImage`) REFERENCES `media__media` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `FK_70B2CA2AB9327A73` FOREIGN KEY (`spot`) REFERENCES `spots` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `FK_70B2CA2AC0155143` FOREIGN KEY (`blog`) REFERENCES `blogs` (`id`) ON DELETE SET NULL;

--
-- Constraints for table `modalcontent_blocks`
--
ALTER TABLE `modalcontent_blocks`
  ADD CONSTRAINT `FK_7074B39742ADBAC2` FOREIGN KEY (`contentblock_id`) REFERENCES `content_blocks` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_7074B397C4663E4` FOREIGN KEY (`page_id`) REFERENCES `pages` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `pages`
--
ALTER TABLE `pages`
  ADD CONSTRAINT `FK_2074E57597AB4E12` FOREIGN KEY (`bgimage`) REFERENCES `media__media` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `FK_2074E575BDAFD8C8` FOREIGN KEY (`author`) REFERENCES `fos_user_user` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `FK_2074E575F3890D5F` FOREIGN KEY (`introimage`) REFERENCES `media__media` (`id`) ON DELETE SET NULL;

--
-- Constraints for table `pages_categories`
--
ALTER TABLE `pages_categories`
  ADD CONSTRAINT `FK_533F7E1B12469DE2` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_533F7E1BC4663E4` FOREIGN KEY (`page_id`) REFERENCES `pages` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `pages_tags`
--
ALTER TABLE `pages_tags`
  ADD CONSTRAINT `FK_2476DEA6BAD26311` FOREIGN KEY (`tag_id`) REFERENCES `tags` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_2476DEA6C4663E4` FOREIGN KEY (`page_id`) REFERENCES `pages` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `secondarycontent_blocks`
--
ALTER TABLE `secondarycontent_blocks`
  ADD CONSTRAINT `FK_F8B56AB442ADBAC2` FOREIGN KEY (`contentblock_id`) REFERENCES `content_blocks` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_F8B56AB4C4663E4` FOREIGN KEY (`page_id`) REFERENCES `pages` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `spots`
--
ALTER TABLE `spots`
  ADD CONSTRAINT `FK_D2BBDDF73B6DB7D3` FOREIGN KEY (`spotattributes`) REFERENCES `spot_attributes` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `FK_D2BBDDF7BDAFD8C8` FOREIGN KEY (`author`) REFERENCES `fos_user_user` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `FK_D2BBDDF7F3890D5F` FOREIGN KEY (`introimage`) REFERENCES `media__media` (`id`) ON DELETE SET NULL;

--
-- Constraints for table `spots_bannercontent_blocks`
--
ALTER TABLE `spots_bannercontent_blocks`
  ADD CONSTRAINT `FK_FC83D8272DF1D37C` FOREIGN KEY (`spot_id`) REFERENCES `spots` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_FC83D82742ADBAC2` FOREIGN KEY (`contentblock_id`) REFERENCES `content_blocks` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `spots_destinationfilters`
--
ALTER TABLE `spots_destinationfilters`
  ADD CONSTRAINT `FK_3744DBEE2DF1D37C` FOREIGN KEY (`spot_id`) REFERENCES `spots` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_3744DBEE52ACF0A6` FOREIGN KEY (`spotdestinationfilter_id`) REFERENCES `spot_destinations` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `spots_maincontent_blocks`
--
ALTER TABLE `spots_maincontent_blocks`
  ADD CONSTRAINT `FK_5F16D2102DF1D37C` FOREIGN KEY (`spot_id`) REFERENCES `spots` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_5F16D21042ADBAC2` FOREIGN KEY (`contentblock_id`) REFERENCES `content_blocks` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `spots_modalcontent_blocks`
--
ALTER TABLE `spots_modalcontent_blocks`
  ADD CONSTRAINT `FK_BEF16ECC2DF1D37C` FOREIGN KEY (`spot_id`) REFERENCES `spots` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_BEF16ECC42ADBAC2` FOREIGN KEY (`contentblock_id`) REFERENCES `content_blocks` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `spots_secondarycontent_blocks`
--
ALTER TABLE `spots_secondarycontent_blocks`
  ADD CONSTRAINT `FK_5BC0C7CD2DF1D37C` FOREIGN KEY (`spot_id`) REFERENCES `spots` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_5BC0C7CD42ADBAC2` FOREIGN KEY (`contentblock_id`) REFERENCES `content_blocks` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `spots_spotfilters`
--
ALTER TABLE `spots_spotfilters`
  ADD CONSTRAINT `FK_525160C2251236D0` FOREIGN KEY (`spotfilter_id`) REFERENCES `spot_filters` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_525160C22DF1D37C` FOREIGN KEY (`spot_id`) REFERENCES `spots` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `spot_destinations`
--
ALTER TABLE `spot_destinations`
  ADD CONSTRAINT `FK_BCCE0A9B3EC63EAA` FOREIGN KEY (`destination`) REFERENCES `destinations` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `FK_BCCE0A9B46B7BA9` FOREIGN KEY (`spotDestinationFilterIcon`) REFERENCES `media__media` (`id`);

--
-- Constraints for table `spot_filters`
--
ALTER TABLE `spot_filters`
  ADD CONSTRAINT `FK_329D53256F191ECD` FOREIGN KEY (`filterIcon`) REFERENCES `media__media` (`id`);

--
-- Constraints for table `tags`
--
ALTER TABLE `tags`
  ADD CONSTRAINT `FK_6FBC94268913051D` FOREIGN KEY (`tagIcon`) REFERENCES `media__media` (`id`) ON DELETE SET NULL;

--
-- Constraints for table `timeline__action_component`
--
ALTER TABLE `timeline__action_component`
  ADD CONSTRAINT `FK_6ACD1B169D32F035` FOREIGN KEY (`action_id`) REFERENCES `timeline__action` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_6ACD1B16E2ABAFFF` FOREIGN KEY (`component_id`) REFERENCES `timeline__component` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `timeline__timeline`
--
ALTER TABLE `timeline__timeline`
  ADD CONSTRAINT `FK_FFBC6AD523EDC87` FOREIGN KEY (`subject_id`) REFERENCES `timeline__component` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_FFBC6AD59D32F035` FOREIGN KEY (`action_id`) REFERENCES `timeline__action` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
