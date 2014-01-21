-- phpMyAdmin SQL Dump
-- version 4.0.10
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 21, 2014 at 09:52 PM
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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=23 ;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `author`, `introimage`, `bgimage`, `introvideo`, `date`, `title`, `alias`, `pageOrder`, `showPageTitle`, `publishState`, `pageclass`, `description`, `keywords`, `introtext`, `intromediasize`, `introclass`, `pagetype`) VALUES
(15, 4, NULL, NULL, NULL, '2014-01-21', 'Blog Home', 'articles', 99, 1, 1, NULL, NULL, NULL, 'Lorem ipsum dolor sit amet, consectetur adipiscing eletra electrify denim vel ports.', NULL, NULL, 'blog_home'),
(16, 4, NULL, NULL, NULL, '2014-01-21', 'News', 'news', 99, 1, 1, NULL, NULL, NULL, 'Lorem ipsum dolor sit amet, consectetur adipiscing eletra electrify denim vel ports.', NULL, NULL, 'blog_cat_page'),
(17, 4, NULL, NULL, NULL, '2014-01-21', 'Events', 'events', 99, 1, 1, NULL, NULL, NULL, 'Lorem ipsum dolor sit amet, consectetur adipiscing eletra electrify denim vel ports.', NULL, NULL, 'blog_cat_page'),
(18, 4, NULL, NULL, NULL, '2014-01-21', 'Blog Filtered Listing', 'tagged', 99, 1, 1, NULL, NULL, NULL, 'Lorem ipsum dolor sit amet, consectetur adipiscing eletra electrify denim vel ports.', NULL, NULL, 'blog_filtered_list'),
(19, 4, 27, NULL, NULL, '2014-01-21', 'Test Blog Post 1', 'test-blog-post-1', 99, 1, 1, NULL, NULL, NULL, 'Lorem ipsum dolor sit amet, consectetur adipiscing eletra electrify denim vel ports.', NULL, NULL, 'blog_article'),
(20, 4, 28, NULL, NULL, '2014-01-21', 'Test Blog Post 2', 'test-blog-post-2', 99, 1, 1, NULL, NULL, NULL, 'Lorem ipsum dolor sit amet, consectetur adipiscing eletra electrify denim vel ports.', NULL, NULL, 'blog_article'),
(21, 4, 29, NULL, NULL, '2014-01-21', 'Test Blog Post 3', 'test-blog-post-3', 99, 1, 1, NULL, NULL, NULL, 'Lorem ipsum dolor sit amet, consectetur adipiscing eletra electrify denim vel ports.', NULL, NULL, 'blog_article'),
(22, 4, 30, NULL, NULL, '2014-01-21', 'Test Blog Post 4', 'test-blog-post-4', 99, 1, 1, NULL, NULL, NULL, 'Lorem ipsum dolor sit amet, consectetur adipiscing eletra electrify denim vel ports.', NULL, NULL, 'blog_article');

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
(19, 10),
(20, 11),
(21, 9),
(22, 9);

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
(19, 7),
(20, 8),
(21, 8),
(22, 7);

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
(19, 27);

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=13 ;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `title`, `categoryClass`, `categoryIcon`) VALUES
(9, 'Homepage', NULL, NULL),
(10, 'News', 'news', NULL),
(11, 'Events', 'events', NULL),
(12, 'Sample Category', 'featured-category', NULL);

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=10 ;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `blog_id`, `title`, `username`, `comment`, `approved`, `created`, `commentType`, `bottrap`) VALUES
(7, 19, 'Sample Comment 1', 'blogger1', 'To make a long story short. You can''t go wrong by choosing Symfony! And no one has ever been fired for using Symfony.', 1, '2014-01-21 21:51:05', 'Blog', NULL),
(8, 19, 'Sample Comment 2', 'blogger2', 'To make a long story short. You can''t go wrong by choosing Symfony! And no one has ever been fired for using Symfony 2.', 1, '2014-01-21 21:51:05', 'Blog', NULL),
(9, 19, 'Sample Comment 3', 'blogger3', 'To make a long story short. You can''t go wrong by choosing Symfony! And no one has ever been fired for using Symfony 3.', 1, '2014-01-21 21:51:05', 'Blog', NULL);

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=28 ;

--
-- Dumping data for table `content_blocks`
--

INSERT INTO `content_blocks` (`id`, `slide`, `vimeo`, `youtube`, `title`, `publishedState`, `availability`, `showTitle`, `ordering`, `className`, `sizeClass`, `mediaSize`, `idName`, `contentType`, `htmlText`, `fileFile`) VALUES
(23, NULL, NULL, NULL, 'Sample Content Home', 1, 'page', 1, 1, NULL, 'large-12', NULL, NULL, 'html', '<p>Quisque non arcu id ipsum imperdiet ultricies pharetra eu nibh. Etiam eros lectus, ullamcorper et congue in, lobortis sit amet lectus. In fermentum quam in arcu sodales, id varius est placerat. Fusce a dictum mi. Aliquam accumsan diam eget rutrum tincidunt. Nullam massa metus, placerat quis mattis nec</p>', NULL),
(24, NULL, NULL, NULL, 'Sample Content 1', 1, 'page', 1, 1, 'sampleClassname', 'large-12', NULL, 'sampleId', 'html', '<p>Quisque non arcu id ipsum imperdiet ultricies pharetra eu nibh. Etiam eros lectus, ullamcorper et congue in, lobortis sit amet lectus. In fermentum quam in arcu sodales, id varius est placerat. Fusce a dictum mi. Aliquam accumsan diam eget rutrum tincidunt. Nullam massa metus, placerat quis mattis nec</p>', NULL),
(25, NULL, NULL, NULL, 'Sample Content 2', 1, 'page', 1, 2, NULL, 'large-12', NULL, NULL, 'html', '<p>Quisque non arcu id ipsum imperdiet ultricies pharetra eu nibh. Etiam eros lectus, ullamcorper et congue in, lobortis sit amet lectus. In fermentum quam in arcu sodales, id varius est placerat. Fusce a dictum mi. Aliquam accumsan diam eget rutrum tincidunt. Nullam massa metus, placerat quis mattis nec</p>', NULL),
(26, NULL, NULL, NULL, 'Sample Contact Form', 1, 'page', 1, 1, NULL, 'large-12', NULL, NULL, 'contact', NULL, NULL),
(27, NULL, NULL, NULL, 'Sample Blog Content 1', 1, 'page', 1, 1, 'sampleClassname', 'large-12', NULL, 'sampleId', 'html', '<p>Quisque non arcu id ipsum imperdiet ultricies pharetra eu nibh. Etiam eros lectus, ullamcorper et congue in, lobortis sit amet lectus. In fermentum quam in arcu sodales, id varius est placerat. Fusce a dictum mi. Aliquam accumsan diam eget rutrum tincidunt. Nullam massa metus, placerat quis mattis nec</p>', NULL);

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

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
  `pageclass` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `keywords` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `introtext` longtext COLLATE utf8_unicode_ci,
  `summary` longtext COLLATE utf8_unicode_ci,
  `introclass` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pagetype` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `styleColor` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `directions` longtext COLLATE utf8_unicode_ci,
  `mapLatitude` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mapLongitude` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_2D3343C3E16C6B94` (`alias`),
  UNIQUE KEY `UNIQ_2D3343C3F3890D5F` (`introimage`),
  UNIQUE KEY `UNIQ_2D3343C397AB4E12` (`bgimage`),
  UNIQUE KEY `UNIQ_2D3343C335767543` (`destinationicon`),
  KEY `IDX_2D3343C3BDAFD8C8` (`author`),
  KEY `IDX_2D3343C3D2BBDDF7` (`spots`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=10 ;

--
-- Dumping data for table `destinations`
--

INSERT INTO `destinations` (`id`, `author`, `introimage`, `destinationicon`, `bgimage`, `spots`, `date`, `title`, `alias`, `pageOrder`, `showPageTitle`, `publishState`, `pageclass`, `description`, `keywords`, `introtext`, `summary`, `introclass`, `pagetype`, `styleColor`, `directions`, `mapLatitude`, `mapLongitude`) VALUES
(7, 4, NULL, NULL, NULL, NULL, '2014-01-21', 'Destinations', 'list', 99, 1, 1, NULL, NULL, NULL, 'Lorem ipsum dolor sit amet, consectetur adipiscing eletra electrify denim vel ports.', NULL, NULL, 'destination_home', NULL, NULL, NULL, NULL),
(8, 4, NULL, NULL, NULL, NULL, '2014-01-21', 'North Greece', 'north-greece', 99, 1, 1, NULL, NULL, NULL, 'Lorem ipsum dolor sit amet, consectetur adipiscing eletra electrify denim vel ports.', NULL, NULL, 'destination_cat_page', NULL, NULL, NULL, NULL),
(9, 4, NULL, NULL, NULL, NULL, '2014-01-21', 'Halkidiki', 'halkidiki', 99, 1, 1, NULL, NULL, NULL, 'Lorem ipsum dolor sit amet, consectetur adipiscing eletra electrify denim vel ports.', NULL, NULL, 'destination_article', NULL, NULL, NULL, NULL);

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
(8, 5),
(8, 6),
(9, 6);

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
(9, 3);

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
  `destinationCategoryIcon` int(11) DEFAULT NULL,
  `destinationListPage` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_67CADDDACEB1B078` (`destinationCategoryIcon`),
  KEY `IDX_67CADDDABD7209A` (`destinationListPage`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=7 ;

--
-- Dumping data for table `destination_categories`
--

INSERT INTO `destination_categories` (`id`, `title`, `class`, `destinationCategoryIcon`, `destinationListPage`) VALUES
(5, 'Destination Home', NULL, NULL, NULL),
(6, 'North Greece', 'north-greece', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `destination_extracontent_blocks`
--

CREATE TABLE IF NOT EXISTS `destination_extracontent_blocks` (
  `destination_id` int(11) NOT NULL,
  `contentblock_id` int(11) NOT NULL,
  PRIMARY KEY (`destination_id`,`contentblock_id`),
  KEY `IDX_B7B2267816C6140` (`destination_id`),
  KEY `IDX_B7B226742ADBAC2` (`contentblock_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

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

-- --------------------------------------------------------

--
-- Table structure for table `destination_tags`
--

CREATE TABLE IF NOT EXISTS `destination_tags` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tagCategory` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tagIcon` int(11) DEFAULT NULL,
  `styleColor` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_CC1D1D178913051D` (`tagIcon`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `destination_tags`
--

INSERT INTO `destination_tags` (`id`, `title`, `tagCategory`, `tagIcon`, `styleColor`) VALUES
(3, 'Surf', 'sports', NULL, 'green');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Dumping data for table `fos_user_user`
--

INSERT INTO `fos_user_user` (`id`, `username`, `username_canonical`, `email`, `email_canonical`, `enabled`, `salt`, `password`, `last_login`, `locked`, `expired`, `expires_at`, `confirmation_token`, `password_requested_at`, `roles`, `credentials_expired`, `credentials_expire_at`, `created_at`, `updated_at`, `date_of_birth`, `firstname`, `lastname`, `website`, `biography`, `gender`, `locale`, `timezone`, `phone`, `facebook_uid`, `facebook_name`, `facebook_data`, `twitter_uid`, `twitter_name`, `twitter_data`, `gplus_uid`, `gplus_name`, `gplus_data`, `token`, `two_step_code`, `bakeFrequency`, `sex`, `bakeChoises`, `age`, `children`, `campaign`) VALUES
(4, 'administrator', 'administrator', 'george@bardis.info', 'george@bardis.info', 1, '2du99w1t585c8ccwscc8sw4ggsocgk0', '2aZzKW2LYJDEOcvjg9zBkfdgIuqjCgkiH8JmyVwSun/isqRqBDCajQFdAHfmCPI6BUMsonj1u82pk+8MIqtRsw==', NULL, 0, 0, NULL, NULL, NULL, 'a:1:{i:0;s:16:"ROLE_SUPER_ADMIN";}', 0, NULL, '2014-01-21 21:51:05', '2014-01-21 21:51:05', NULL, NULL, NULL, NULL, NULL, 'u', NULL, NULL, NULL, NULL, NULL, 'null', NULL, NULL, 'null', NULL, NULL, 'null', NULL, NULL, NULL, NULL, 'N;', NULL, NULL, NULL);

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
(19, 23),
(23, 26),
(24, 24),
(24, 25);

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=31 ;

--
-- Dumping data for table `media__media`
--

INSERT INTO `media__media` (`id`, `name`, `description`, `enabled`, `provider_name`, `provider_status`, `provider_reference`, `provider_metadata`, `width`, `height`, `length`, `content_type`, `content_size`, `copyright`, `author_name`, `context`, `cdn_is_flushable`, `cdn_flush_at`, `cdn_status`, `updated_at`, `created_at`) VALUES
(23, 'sample_thumb.jpeg', NULL, 0, 'sonata.media.provider.image', 1, 'sample_thumb.jpeg', '{"filename":"sample_thumb.jpeg"}', 622, 415, NULL, 'image/jpeg', 8043, NULL, NULL, 'intro', NULL, NULL, NULL, '2014-01-21 21:51:05', '2014-01-21 21:51:05'),
(24, 'sample_thumb.jpeg', NULL, 0, 'sonata.media.provider.image', 1, 'sample_thumb.jpeg', '{"filename":"sample_thumb.jpeg"}', 622, 415, NULL, 'image/jpeg', 8043, NULL, NULL, 'intro', NULL, NULL, NULL, '2014-01-21 21:51:05', '2014-01-21 21:51:05'),
(25, 'sample_thumb.jpeg', NULL, 0, 'sonata.media.provider.image', 1, 'sample_thumb.jpeg', '{"filename":"sample_thumb.jpeg"}', 622, 415, NULL, 'image/jpeg', 8043, NULL, NULL, 'intro', NULL, NULL, NULL, '2014-01-21 21:51:05', '2014-01-21 21:51:05'),
(26, 'sample_thumb.jpeg', NULL, 0, 'sonata.media.provider.image', 1, 'sample_thumb.jpeg', '{"filename":"sample_thumb.jpeg"}', 622, 415, NULL, 'image/jpeg', 8043, NULL, NULL, 'intro', NULL, NULL, NULL, '2014-01-21 21:51:05', '2014-01-21 21:51:05'),
(27, 'sample_thumb.jpeg', NULL, 0, 'sonata.media.provider.image', 1, 'sample_thumb.jpeg', '{"filename":"sample_thumb.jpeg"}', 622, 415, NULL, 'image/jpeg', 8043, NULL, NULL, 'intro', NULL, NULL, NULL, '2014-01-21 21:51:05', '2014-01-21 21:51:05'),
(28, 'sample_thumb.jpeg', NULL, 0, 'sonata.media.provider.image', 1, 'sample_thumb.jpeg', '{"filename":"sample_thumb.jpeg"}', 622, 415, NULL, 'image/jpeg', 8043, NULL, NULL, 'intro', NULL, NULL, NULL, '2014-01-21 21:51:05', '2014-01-21 21:51:05'),
(29, 'sample_thumb.jpeg', NULL, 0, 'sonata.media.provider.image', 1, 'sample_thumb.jpeg', '{"filename":"sample_thumb.jpeg"}', 622, 415, NULL, 'image/jpeg', 8043, NULL, NULL, 'intro', NULL, NULL, NULL, '2014-01-21 21:51:05', '2014-01-21 21:51:05'),
(30, 'sample_thumb.jpeg', NULL, 0, 'sonata.media.provider.image', 1, 'sample_thumb.jpeg', '{"filename":"sample_thumb.jpeg"}', 622, 415, NULL, 'image/jpeg', 8043, NULL, NULL, 'intro', NULL, NULL, NULL, '2014-01-21 21:51:05', '2014-01-21 21:51:05');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=25 ;

--
-- Dumping data for table `menu_items`
--

INSERT INTO `menu_items` (`id`, `page`, `blog`, `destination`, `spot`, `title`, `menuType`, `route`, `externalUrl`, `accessLevel`, `parent`, `menuGroup`, `publishState`, `ordering`, `menuUrlExtras`, `menuImage`) VALUES
(17, 19, NULL, NULL, NULL, 'Homepage', 'Page', 'showPage', NULL, 0, '0', 'Main Menu', 1, 0, NULL, NULL),
(18, 24, NULL, NULL, NULL, 'Test Page 1', 'Page', 'showPage', NULL, 0, '0', 'Main Menu', 1, 1, NULL, NULL),
(19, NULL, NULL, 7, NULL, 'Destinations', 'Destination', 'showPage', NULL, 0, '0', 'Main Menu', 1, 1, NULL, NULL),
(20, NULL, NULL, NULL, 8, 'Spots', 'Spot', 'showPage', NULL, 0, '0', 'Main Menu', 1, 1, NULL, NULL),
(21, NULL, 16, NULL, NULL, 'News', 'Blog', 'showPage', NULL, 0, '0', 'Main Menu', 1, 1, NULL, NULL),
(22, NULL, 17, NULL, NULL, 'Events', 'Blog', 'showPage', NULL, 0, '0', 'Main Menu', 1, 1, NULL, NULL),
(23, 23, NULL, NULL, NULL, 'Contact Page', 'Page', 'showPage', NULL, 0, '0', 'Main Menu', 1, 5, NULL, NULL),
(24, 21, NULL, NULL, NULL, 'Sitemap', 'Page', 'showPage', NULL, 0, '0', 'Footer Menu', 1, 0, NULL, NULL);

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=28 ;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `author`, `introimage`, `bgimage`, `date`, `title`, `alias`, `pageOrder`, `showPageTitle`, `publishState`, `pageclass`, `description`, `keywords`, `introtext`, `intromediasize`, `introclass`, `pagetype`) VALUES
(19, 4, NULL, NULL, '2014-01-21', 'Home', 'index', 99, 1, 1, NULL, NULL, NULL, 'Lorem ipsum dolor sit amet, consectetur adipiscing eletra electrify denim vel ports.', NULL, NULL, 'homepage'),
(20, 4, NULL, NULL, '2014-01-21', '404 Error Page', '404', 99, 1, 1, NULL, NULL, NULL, '', NULL, NULL, '404'),
(21, 4, NULL, NULL, '2014-01-21', 'Sitemap', 'site-map', 99, 1, 1, NULL, NULL, NULL, '', NULL, NULL, 'sitemap'),
(22, 4, NULL, NULL, '2014-01-21', 'Page Filtered Listing', 'tagged', 99, 1, 1, NULL, NULL, NULL, 'Lorem ipsum dolor sit amet, consectetur adipiscing eletra electrify denim vel ports.', NULL, NULL, 'page_tag_list'),
(23, 4, NULL, NULL, '2014-01-21', 'Contact', 'contact', 99, 1, 1, NULL, NULL, NULL, '', NULL, NULL, 'contact'),
(24, 4, 23, NULL, '2014-01-21', 'Test Page 1', 'test-page-1', 99, 1, 1, NULL, NULL, NULL, 'Lorem ipsum dolor sit amet, consectetur adipiscing eletra electrify denim vel ports.', NULL, NULL, 'one_columned'),
(25, 4, 24, NULL, '2014-01-21', 'Test Page 2', 'test-page-2', 99, 1, 1, NULL, NULL, NULL, 'Lorem ipsum dolor sit amet, consectetur adipiscing eletra electrify denim vel ports.', NULL, NULL, 'two_columned'),
(26, 4, 25, NULL, '2014-01-21', 'Test Page 3', 'test-page-3', 99, 1, 1, NULL, NULL, NULL, 'Lorem ipsum dolor sit amet, consectetur adipiscing eletra electrify denim vel ports.', NULL, NULL, 'three_columned'),
(27, 4, 26, NULL, '2014-01-21', 'Test Page 4', 'test-page-4', 99, 1, 1, NULL, NULL, NULL, 'Lorem ipsum dolor sit amet, consectetur adipiscing eletra electrify denim vel ports.', NULL, NULL, 'one_columned');

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
(19, 9),
(22, 12),
(24, 9),
(24, 12),
(25, 12);

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
(22, 7),
(24, 7),
(25, 7),
(26, 7),
(27, 7);

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `metaDescription`, `metaKeywords`, `fromTitle`, `websiteTitle`, `websiteAuthor`, `useWebsiteAuthor`, `enableGoogleAnalytics`, `googleAnalyticsId`, `emailSender`, `emailRecepient`, `itemsPerPage`, `blogItemsPerPage`, `activateSettings`) VALUES
(4, 'Default Meta Description', 'Default Meta Keywords', 'Owner', 'Website Title', 'Author', 1, 0, 'UA-XXX-XXXXX', 'george@bardis.info', 'george@bardis.info', 2, 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `spots`
--

CREATE TABLE IF NOT EXISTS `spots` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `author` int(11) DEFAULT NULL,
  `introimage` int(11) DEFAULT NULL,
  `date` date NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `alias` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pageOrder` int(11) NOT NULL,
  `spotOrder` int(11) NOT NULL,
  `showPageTitle` int(11) DEFAULT NULL,
  `publishState` int(11) NOT NULL,
  `pageclass` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `keywords` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `introtext` longtext COLLATE utf8_unicode_ci,
  `introclass` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pagetype` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `summary` longtext COLLATE utf8_unicode_ci,
  `featuredSpot` int(11) NOT NULL,
  `spotattributes` int(11) DEFAULT NULL,
  `mapLatitude` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mapLongitude` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_D2BBDDF7E16C6B94` (`alias`),
  UNIQUE KEY `UNIQ_D2BBDDF7F3890D5F` (`introimage`),
  UNIQUE KEY `UNIQ_D2BBDDF73B6DB7D3` (`spotattributes`),
  KEY `IDX_D2BBDDF7BDAFD8C8` (`author`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=11 ;

--
-- Dumping data for table `spots`
--

INSERT INTO `spots` (`id`, `author`, `introimage`, `date`, `title`, `alias`, `pageOrder`, `spotOrder`, `showPageTitle`, `publishState`, `pageclass`, `description`, `keywords`, `introtext`, `introclass`, `pagetype`, `summary`, `featuredSpot`, `spotattributes`, `mapLatitude`, `mapLongitude`) VALUES
(8, 4, NULL, '2014-01-21', 'Spots', 'list', 99, 99, 1, 1, NULL, NULL, NULL, 'Lorem ipsum dolor sit amet, consectetur adipiscing eletra electrify denim vel ports.', NULL, 'spot_home', NULL, 0, NULL, NULL, NULL),
(9, 4, NULL, '2014-01-21', 'Test spot page 1', 'test-spot-page-1', 99, 99, 1, 1, NULL, 'Lorem ipsum dolor sit amet, consectetur adipiscing eletra electrify denim vel ports.', NULL, 'Lorem ipsum dolor sit amet', NULL, 'spot_article', NULL, 1, NULL, '52.1111', '31.1111'),
(10, 4, NULL, '2014-01-21', 'Test spot page 2', 'test-spot-page-2', 99, 99, 1, 1, NULL, 'Lorem ipsum dolor sit amet, consectetur adipiscing eletra electrify denim vel ports 2.', NULL, 'Lorem ipsum dolor sit amet 2', NULL, 'spot_article', NULL, 1, NULL, '52.1111', '31.1111');

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

-- --------------------------------------------------------

--
-- Table structure for table `spots_categories`
--

CREATE TABLE IF NOT EXISTS `spots_categories` (
  `spot_id` int(11) NOT NULL,
  `spotcategory_id` int(11) NOT NULL,
  PRIMARY KEY (`spot_id`,`spotcategory_id`),
  KEY `IDX_DDA6EF272DF1D37C` (`spot_id`),
  KEY `IDX_DDA6EF275D939999` (`spotcategory_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

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
(9, 3),
(10, 3);

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

-- --------------------------------------------------------

--
-- Table structure for table `spots_spotattributes`
--

CREATE TABLE IF NOT EXISTS `spots_spotattributes` (
  `spot_id` int(11) NOT NULL,
  `spotattribute_id` int(11) NOT NULL,
  PRIMARY KEY (`spot_id`,`spotattribute_id`),
  KEY `IDX_D711479D2DF1D37C` (`spot_id`),
  KEY `IDX_D711479D717E534A` (`spotattribute_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `spots_spotdestinations`
--

CREATE TABLE IF NOT EXISTS `spots_spotdestinations` (
  `spot_id` int(11) NOT NULL,
  `spotdestination_id` int(11) NOT NULL,
  PRIMARY KEY (`spot_id`,`spotdestination_id`),
  KEY `IDX_39EC42982DF1D37C` (`spot_id`),
  KEY `IDX_39EC42984B1D05E1` (`spotdestination_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

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
(9, 4),
(10, 4);

-- --------------------------------------------------------

--
-- Table structure for table `spots_tags`
--

CREATE TABLE IF NOT EXISTS `spots_tags` (
  `spot_id` int(11) NOT NULL,
  `spottag_id` int(11) NOT NULL,
  PRIMARY KEY (`spot_id`,`spottag_id`),
  KEY `IDX_66B6BF582DF1D37C` (`spot_id`),
  KEY `IDX_66B6BF5814AB11A5` (`spottag_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

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
  `experience` longtext COLLATE utf8_unicode_ci NOT NULL COMMENT '(DC2Type:array)',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=6 ;

-- --------------------------------------------------------

--
-- Table structure for table `spot_categories`
--

CREATE TABLE IF NOT EXISTS `spot_categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `categoryClass` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `categoryIcon` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_166DB26BAD0F3245` (`categoryIcon`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `spot_categories`
--

INSERT INTO `spot_categories` (`id`, `title`, `categoryClass`, `categoryIcon`) VALUES
(1, 'Homepage', NULL, NULL),
(2, 'Halkidiki', NULL, NULL);

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `spot_destinations`
--

INSERT INTO `spot_destinations` (`id`, `destination`, `title`, `class`, `spotDestinationFilterIcon`) VALUES
(3, 9, 'Halkidiki', NULL, NULL);

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Dumping data for table `spot_filters`
--

INSERT INTO `spot_filters` (`id`, `title`, `filterCategory`, `filterIcon`) VALUES
(4, 'Low Budjet', 'Budget', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `spot_tags`
--

CREATE TABLE IF NOT EXISTS `spot_tags` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tagCategory` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tagIcon` int(11) DEFAULT NULL,
  `smallIcon` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_9A811AD58913051D` (`tagIcon`),
  UNIQUE KEY `UNIQ_9A811AD58E1E1511` (`smallIcon`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `spot_tags`
--

INSERT INTO `spot_tags` (`id`, `title`, `tagCategory`, `tagIcon`, `smallIcon`) VALUES
(1, 'Test Spot Tag', 'spot_featured', NULL, NULL);

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=9 ;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`id`, `title`, `tagCategory`, `tagIcon`) VALUES
(7, 'Sample Tag 1', NULL, NULL),
(8, 'Sample Tag 2', 'blog', NULL);

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
-- Constraints for table `destination_extracontent_blocks`
--
ALTER TABLE `destination_extracontent_blocks`
  ADD CONSTRAINT `FK_B7B226742ADBAC2` FOREIGN KEY (`contentblock_id`) REFERENCES `content_blocks` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_B7B2267816C6140` FOREIGN KEY (`destination_id`) REFERENCES `destinations` (`id`) ON DELETE CASCADE;

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
-- Constraints for table `spots_categories`
--
ALTER TABLE `spots_categories`
  ADD CONSTRAINT `FK_DDA6EF272DF1D37C` FOREIGN KEY (`spot_id`) REFERENCES `spots` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_DDA6EF275D939999` FOREIGN KEY (`spotcategory_id`) REFERENCES `spot_categories` (`id`) ON DELETE CASCADE;

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
-- Constraints for table `spots_spotattributes`
--
ALTER TABLE `spots_spotattributes`
  ADD CONSTRAINT `FK_D711479D2DF1D37C` FOREIGN KEY (`spot_id`) REFERENCES `spots` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_D711479D717E534A` FOREIGN KEY (`spotattribute_id`) REFERENCES `spot_attributes` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `spots_spotdestinations`
--
ALTER TABLE `spots_spotdestinations`
  ADD CONSTRAINT `FK_39EC42982DF1D37C` FOREIGN KEY (`spot_id`) REFERENCES `spots` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_39EC42984B1D05E1` FOREIGN KEY (`spotdestination_id`) REFERENCES `spot_destinations` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `spots_spotfilters`
--
ALTER TABLE `spots_spotfilters`
  ADD CONSTRAINT `FK_525160C2251236D0` FOREIGN KEY (`spotfilter_id`) REFERENCES `spot_filters` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_525160C22DF1D37C` FOREIGN KEY (`spot_id`) REFERENCES `spots` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `spots_tags`
--
ALTER TABLE `spots_tags`
  ADD CONSTRAINT `FK_66B6BF5814AB11A5` FOREIGN KEY (`spottag_id`) REFERENCES `spot_tags` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_66B6BF582DF1D37C` FOREIGN KEY (`spot_id`) REFERENCES `spots` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `spot_categories`
--
ALTER TABLE `spot_categories`
  ADD CONSTRAINT `FK_166DB26BAD0F3245` FOREIGN KEY (`categoryIcon`) REFERENCES `media__media` (`id`);

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
-- Constraints for table `spot_tags`
--
ALTER TABLE `spot_tags`
  ADD CONSTRAINT `FK_9A811AD58913051D` FOREIGN KEY (`tagIcon`) REFERENCES `media__media` (`id`),
  ADD CONSTRAINT `FK_9A811AD58E1E1511` FOREIGN KEY (`smallIcon`) REFERENCES `media__media` (`id`);

--
-- Constraints for table `tags`
--
ALTER TABLE `tags`
  ADD CONSTRAINT `FK_6FBC94268913051D` FOREIGN KEY (`tagIcon`) REFERENCES `media__media` (`id`) ON DELETE SET NULL;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
