-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 26, 2013 at 04:06 PM
-- Server version: 5.5.24-log
-- PHP Version: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `tgs`
--

-- --------------------------------------------------------

--
-- Table structure for table `acl_classes`
--

DROP TABLE IF EXISTS `acl_classes`;
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

DROP TABLE IF EXISTS `acl_entries`;
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

DROP TABLE IF EXISTS `acl_object_identities`;
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

DROP TABLE IF EXISTS `acl_object_identity_ancestors`;
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

DROP TABLE IF EXISTS `acl_security_identities`;
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

DROP TABLE IF EXISTS `bannercontent_blocks`;
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
(1, 1),
(3, 4),
(5, 15);

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

DROP TABLE IF EXISTS `blogs`;
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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `author`, `introimage`, `bgimage`, `introvideo`, `date`, `title`, `alias`, `pageOrder`, `showPageTitle`, `publishState`, `pageclass`, `description`, `keywords`, `introtext`, `intromediasize`, `introclass`, `pagetype`) VALUES
(1, 5, NULL, NULL, NULL, '2013-11-20', 'Test Blog post', 'test-blog-post', 99, 1, 1, NULL, NULL, NULL, '<p>test blog post into text</p>', NULL, NULL, 'blog_article'),
(2, 5, NULL, NULL, NULL, '2013-11-21', 'Blog Homepage', 'articles', 99, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, 'blog_home');

-- --------------------------------------------------------

--
-- Table structure for table `blogs_categories`
--

DROP TABLE IF EXISTS `blogs_categories`;
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
(1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `blogs_tags`
--

DROP TABLE IF EXISTS `blogs_tags`;
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
(1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `blog_bannercontent_blocks`
--

DROP TABLE IF EXISTS `blog_bannercontent_blocks`;
CREATE TABLE IF NOT EXISTS `blog_bannercontent_blocks` (
  `blog_id` int(11) NOT NULL,
  `contentblock_id` int(11) NOT NULL,
  PRIMARY KEY (`blog_id`,`contentblock_id`),
  KEY `IDX_BBBD8485DAE07E97` (`blog_id`),
  KEY `IDX_BBBD848542ADBAC2` (`contentblock_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `blog_bannercontent_blocks`
--

INSERT INTO `blog_bannercontent_blocks` (`blog_id`, `contentblock_id`) VALUES
(2, 28);

-- --------------------------------------------------------

--
-- Table structure for table `blog_extracontent_blocks`
--

DROP TABLE IF EXISTS `blog_extracontent_blocks`;
CREATE TABLE IF NOT EXISTS `blog_extracontent_blocks` (
  `blog_id` int(11) NOT NULL,
  `contentblock_id` int(11) NOT NULL,
  PRIMARY KEY (`blog_id`,`contentblock_id`),
  KEY `IDX_D0FE99C6DAE07E97` (`blog_id`),
  KEY `IDX_D0FE99C642ADBAC2` (`contentblock_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `blog_extracontent_blocks`
--

INSERT INTO `blog_extracontent_blocks` (`blog_id`, `contentblock_id`) VALUES
(2, 29);

-- --------------------------------------------------------

--
-- Table structure for table `blog_maincontent_blocks`
--

DROP TABLE IF EXISTS `blog_maincontent_blocks`;
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
(1, 25),
(2, 27);

-- --------------------------------------------------------

--
-- Table structure for table `blog_modalcontent_blocks`
--

DROP TABLE IF EXISTS `blog_modalcontent_blocks`;
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

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `categoryClass` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `categoryIcon` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_3AF34668AD0F3245` (`categoryIcon`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `title`, `categoryClass`, `categoryIcon`) VALUES
(1, 'Homepage', 'featured-item', NULL),
(2, 'Sample Category', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

DROP TABLE IF EXISTS `comments`;
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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=9 ;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `blog_id`, `title`, `username`, `comment`, `approved`, `created`, `commentType`, `bottrap`) VALUES
(1, 1, 'Test comment', 'tester', '<p>test commentest commentest commentest commentest commentest commentest comment</p>', 1, '2013-11-20 00:00:00', 'Blog', ''),
(2, 1, 'Test comment 2', 'tester 2', '<p>tester 2vtester 2tester 2tester 2tester 2tester 2tester 2tester 2tester 2</p>', 1, '2013-11-26 00:00:00', 'Blog', '');

-- --------------------------------------------------------

--
-- Table structure for table `content_blocks`
--

DROP TABLE IF EXISTS `content_blocks`;
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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=30 ;

--
-- Dumping data for table `content_blocks`
--

INSERT INTO `content_blocks` (`id`, `slide`, `vimeo`, `youtube`, `title`, `publishedState`, `availability`, `showTitle`, `ordering`, `className`, `sizeClass`, `mediaSize`, `idName`, `contentType`, `htmlText`, `fileFile`) VALUES
(1, NULL, NULL, NULL, 'test', 1, 'page', 1, 1, NULL, 'twelve', 'original', NULL, 'image', NULL, NULL),
(2, NULL, NULL, NULL, 'Sample Homepage Top Content', 1, 'page', 1, 1, NULL, 'large-12', NULL, NULL, 'html', '<p>Quisque non arcu id ipsum imperdiet ultricies pharetra eu nibh. Etiam eros lectus, ullamcorper et congue in, lobortis sit amet lectus. In fermentum quam in arcu sodales, id varius est placerat. Fusce a dictum mi. Aliquam accumsan diam eget rutrum tincidunt. Nullam massa metus, placerat quis mattis nec</p>', NULL),
(3, NULL, NULL, NULL, 'fgfgsg', 1, 'page', 1, 1, NULL, 'twelve', NULL, NULL, 'html', 'ssfsdfsf', NULL),
(4, NULL, NULL, NULL, 'Sample Page Top Banner', 1, 'page', 1, 1, NULL, 'large-12', 'big', NULL, 'image', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam porttitor mattis turpis quis dignissim. Nunc eget mauris at urna sollicitudin facilisis vitae ut lacus. Aliquam malesuada quam sed turpis faucibus pharetra. Etiam vel pellentesque sem, vel dictum massa. Donec laoreet rhoncus velit, id accumsan purus molestie vehicula. Aliquam aliquet, erat eget condimentum ornare, sapien nisl hendrerit sapien, eget vulputate urna quam eget leo. Sed ligula dui, dignissim et neque eu, commodo elementum diam. Nunc massa leo, rhoncus eget gravida ut, malesuada vel massa. In et mauris sit amet nisi tempus malesuada. Mauris tempor, arcu ac hendrerit cursus, velit orci ullamcorper tellus, ut convallis est lorem eget tortor. Sed lobortis fringilla augue vitae tempor.</p>\r\n<p>Donec faucibus elementum laoreet. Duis malesuada massa justo, sed pellentesque tellus placerat a. Sed in vulputate odio. Quisque euismod eleifend ante in dictum. Fusce semper, arcu sit amet bibendum viverra, nulla quam pharetra ligula, in porta risus erat ac ipsum. Morbi ornare purus sed sapien tincidunt aliquet. Proin blandit sapien vitae est suscipit, nec pretium eros posuere. Proin ultricies purus sagittis risus rutrum, sed gravida felis sodales. Quisque elit diam, feugiat nec suscipit eget, tempor id odio. Curabitur fringilla suscipit metus eget molestie. Donec hendrerit posuere quam a congue. Maecenas consectetur turpis non magna luctus, et lacinia eros malesuada. Donec eu mattis lacus. Nam a quam adipiscing, sollicitudin dui non, fermentum nisl. Aenean eget mi enim. Fusce vitae purus magna.</p>', NULL),
(5, NULL, NULL, NULL, 'Sample Page Contents', 1, 'page', 1, 0, NULL, 'large-12', NULL, NULL, 'html', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam porttitor mattis turpis quis dignissim. Nunc eget mauris at urna sollicitudin facilisis vitae ut lacus. Aliquam malesuada quam sed turpis faucibus pharetra. Etiam vel pellentesque sem, vel dictum massa. Donec laoreet rhoncus velit, id accumsan purus molestie vehicula. Aliquam aliquet, erat eget condimentum ornare, sapien nisl hendrerit sapien, eget vulputate urna quam eget leo. Sed ligula dui, dignissim et neque eu, commodo elementum diam. Nunc massa leo, rhoncus eget gravida ut, malesuada vel massa. In et mauris sit amet nisi tempus malesuada. Mauris tempor, arcu ac hendrerit cursus, velit orci ullamcorper tellus, ut convallis est lorem eget tortor. Sed lobortis fringilla augue vitae tempor.</p>\r\n<p>Donec faucibus elementum laoreet. Duis malesuada massa justo, sed pellentesque tellus placerat a. Sed in vulputate odio. Quisque euismod eleifend ante in dictum. Fusce semper, arcu sit amet bibendum viverra, nulla quam pharetra ligula, in porta risus erat ac ipsum. Morbi ornare purus sed sapien tincidunt aliquet. Proin blandit sapien vitae est suscipit, nec pretium eros posuere. Proin ultricies purus sagittis risus rutrum, sed gravida felis sodales. Quisque elit diam, feugiat nec suscipit eget, tempor id odio. Curabitur fringilla suscipit metus eget molestie. Donec hendrerit posuere quam a congue. Maecenas consectetur turpis non magna luctus, et lacinia eros malesuada. Donec eu mattis lacus. Nam a quam adipiscing, sollicitudin dui non, fermentum nisl. Aenean eget mi enim. Fusce vitae purus magna.</p>', NULL),
(6, NULL, NULL, NULL, 'Sample Page Modal', 1, 'page', 1, 3, 'large', 'large-12', NULL, 'sampleModal', 'html', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam porttitor mattis turpis quis dignissim. Nunc eget mauris at urna sollicitudin facilisis vitae ut lacus. Aliquam malesuada quam sed turpis faucibus pharetra. Etiam vel pellentesque sem, vel dictum massa. Donec laoreet rhoncus velit, id accumsan purus molestie vehicula. Aliquam aliquet, erat eget condimentum ornare, sapien nisl hendrerit sapien, eget vulputate urna quam eget leo. Sed ligula dui, dignissim et neque eu, commodo elementum diam. Nunc massa leo, rhoncus eget gravida ut, malesuada vel massa. In et mauris sit amet nisi tempus malesuada. Mauris tempor, arcu ac hendrerit cursus, velit orci ullamcorper tellus, ut convallis est lorem eget tortor. Sed lobortis fringilla augue vitae tempor.</p>', NULL),
(7, NULL, NULL, NULL, 'Sample Modal Button', 1, 'page', 1, 1, NULL, 'large-4', NULL, NULL, 'html', '<p><a class="radius button" href="#" data-reveal-id="sampleModal">Example Modal</a></p>', NULL),
(8, NULL, NULL, NULL, 'Sample Image Carousel', 1, 'page', 1, 2, NULL, 'large-4', 'big', NULL, 'image', NULL, NULL),
(10, NULL, NULL, NULL, 'Sample Modal Image', 1, 'page', 1, 7, NULL, 'large-12', NULL, NULL, 'image', NULL, NULL),
(11, NULL, NULL, NULL, '404 - Page Not Found', 1, 'page', 0, 1, NULL, 'large-12', NULL, NULL, 'html', '<h3>We&rsquo;re sorry &mdash;\r\nsomething has gone wrong on our&nbsp;end.</h3>\r\n<h4>What could have caused this?</h4>\r\n<ul>\r\n<li>Well, something technical went wrong on our site.</li>\r\n<li>We might have removed the page when we redesigned our website.</li>\r\n<li>Or the link you clicked might be old and does not work anymore.</li>\r\n<li>Or you might have accidentally typed the wrong URL in the address bar.</li>\r\n</ul>\r\n<h4>What you can do?</h4>\r\n<ul>\r\n<li>You might try retyping the URL and trying again.</li>\r\n<li>Or we could take you back to the <a href="/">home page</a>.</li>\r\n<li>Or you could use the <a href="/sitemap">site map</a> to find what you&rsquo;re looking for.</li>\r\n</ul>', NULL),
(12, NULL, NULL, NULL, 'Sample Table', 1, 'page', 1, 1, NULL, 'large-12', NULL, NULL, 'html', '<table>\r\n<thead>\r\n<tr><th>Table Header</th><th>Table Header</th><th>Table Header</th><th>Table Header</th></tr>\r\n</thead>\r\n<tbody>\r\n<tr>\r\n<td>Content Goes Here</td>\r\n<td>This is longer content Donec id elit non mi porta gravida at eget metus.</td>\r\n<td>Content Goes Here</td>\r\n<td>Content Goes Here</td>\r\n</tr>\r\n<tr>\r\n<td>Content Goes Here</td>\r\n<td>This is longer Content Goes Here Donec id elit non mi porta gravida at eget metus.</td>\r\n<td>Content Goes Here</td>\r\n<td>Content Goes Here</td>\r\n</tr>\r\n<tr>\r\n<td>Content Goes Here</td>\r\n<td>This is longer Content Goes Here Donec id elit non mi porta gravida at eget metus.</td>\r\n<td>Content Goes Here</td>\r\n<td>Content Goes Here</td>\r\n</tr>\r\n</tbody>\r\n</table>', NULL),
(13, NULL, NULL, NULL, 'Sample List', 1, 'page', 1, 2, NULL, 'large-12', NULL, NULL, 'html', '<ul>\r\n<li>List item with a much longer description or more content.</li>\r\n<li>List item</li>\r\n<li>List item\r\n<ul>\r\n<li>Nested List Item</li>\r\n<li>Nested List Item</li>\r\n<li>Nested List Item</li>\r\n</ul>\r\n</li>\r\n<li>List item</li>\r\n<li>List item</li>\r\n<li>List item</li>\r\n</ul>', NULL),
(14, NULL, NULL, NULL, 'Sample Pricing Table', 1, 'page', 1, 1, NULL, 'large-12', NULL, NULL, 'html', '<ul class="pricing-table">\r\n<li class="title">Standard</li>\r\n<li class="price">$99.99</li>\r\n<li class="description">An awesome description</li>\r\n<li class="bullet-item">1 Database</li>\r\n<li class="bullet-item">5GB Storage</li>\r\n<li class="bullet-item">20 Users</li>\r\n<li class="cta-button"><a class="button" href="#">Buy Now</a></li>\r\n</ul>', NULL),
(15, NULL, NULL, NULL, 'Sample Top Banner', 1, 'page', 1, 1, NULL, 'large-12', 'original', NULL, 'image', NULL, NULL),
(16, NULL, NULL, NULL, 'Sample Panel', 1, 'page', 1, 3, 'panel', 'large-12', NULL, NULL, 'html', '<p>Proin pellentesque auctor mauris eu dictum. Aenean fermentum, velit non sollicitudin pellentesque, arcu augue hendrerit dolor, id accumsan libero lorem adipiscing urna. Aenean cursus nisl eget nunc mollis tempus.</p>', NULL),
(17, NULL, NULL, NULL, 'Sample Homepage Bellow Content', 1, 'page', 1, 2, NULL, 'large-12', NULL, NULL, 'html', '<p>Quisque non arcu id ipsum imperdiet ultricies pharetra eu nibh. Etiam eros lectus, ullamcorper et congue in, lobortis sit amet lectus. In fermentum quam in arcu sodales, id varius est placerat. Fusce a dictum mi. Aliquam accumsan diam eget rutrum tincidunt. Nullam massa metus, placerat quis mattis nec</p>', NULL),
(18, NULL, NULL, NULL, 'Sample Contact Form', 1, 'page', 1, 1, NULL, 'large-12', NULL, NULL, 'contact', NULL, NULL),
(20, NULL, NULL, NULL, 'decoupled text', 1, 'page', 1, 0, NULL, 'large-12', NULL, NULL, 'html', '<p>ghgdhgdgdhdhd</p>', NULL),
(21, NULL, NULL, NULL, 'decoupled image', 1, 'page', 1, 2, NULL, 'large-6', 'small', NULL, 'image', NULL, NULL),
(24, NULL, 28, NULL, 'decoupled vimoe', 1, 'page', 1, 3, NULL, 'large-12', 'original', NULL, 'vimeo', NULL, NULL),
(25, NULL, NULL, NULL, 'Text blog text', 1, 'page', 1, 1, NULL, 'large-12', NULL, NULL, 'html', '<p>test blog content text</p>\r\n<p>test blog content text</p>\r\n<p>test blog content text</p>\r\n<p>test blog content text</p>\r\n<p>test blog content text</p>\r\n<p>test blog content text</p>\r\n<p>test blog content text</p>', NULL),
(26, NULL, NULL, NULL, 'new test text', 1, 'page', 1, 5, NULL, 'large-6', NULL, NULL, 'html', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam porttitor mattis turpis quis dignissim. Nunc eget mauris at urna sollicitudin facilisis vitae ut lacus. Aliquam malesuada quam sed turpis faucibus pharetra. Etiam vel pellentesque sem, vel dictum massa. Donec laoreet rhoncus velit, id a.</p>', NULL),
(27, NULL, NULL, NULL, 'Test blog home text', 1, 'page', 1, 1, NULL, 'large-12', NULL, NULL, 'html', '<p>dfgfsgs dfgfsgsdfgfsgsdfgfsgsdfgfsgs dfgfsgs dfgfsgsdfgfsgsdfgfsgsdfgfsgdfgfsgs dfgfsgsdfgfsgsdfgfsgsdfgfsgs dfgfsgs dfgfsgsdfgfsgsdfgfsgsdfgfsgdfgfsgs dfgfsgsdfgfsgsdfgfsgsdfgfsgs dfgfsgs dfgfsgsdfgfsgsdfgfsgsdfgfsgdfgfsgs dfgfsgsdfgfsgsdfgfsgsdfgfsgs dfgfsgs dfgfsgsdfgfsgsdfgfsgsdfgfsgs</p>', NULL),
(28, NULL, NULL, NULL, 'text blog home below text', 1, 'page', 1, 2, NULL, 'large-12', NULL, NULL, 'html', '<p>dfgfsgs dfgfsgsdfgfsgsdfgfsgsdfgfsgs dfgfsgs dfgfsgsdfgfsgsdfgfsgsdfgfsgdfgfsgs dfgfsgsdfgfsgsdfgfsgsdfgfsgs dfgfsgs dfgfsgsdfgfsgsdfgfsgsdfgfsgdfgfsgs dfgfsgsdfgfsgsdfgfsgsdfgfsgs dfgfsgs dfgfsgsdfgfsgsdfgfsgsdfgfsgdfgfsgs dfgfsgsdfgfsgsdfgfsgsdfgfsgs dfgfsgs dfgfsgsdfgfsgsdfgfsgsdfgfsgs</p>', NULL),
(29, NULL, NULL, NULL, 'test below blog', 1, 'page', 1, 2, NULL, 'large-12', NULL, NULL, 'html', '<p>dfgfsgs dfgfsgsdfgfsgsdfgfsgsdfgfsgs dfgfsgs dfgfsgsdfgfsgsdfgfsgsdfgfsgdfgfsgs dfgfsgsdfgfsgsdfgfsgsdfgfsgs dfgfsgs dfgfsgsdfgfsgsdfgfsgsdfgfsgdfgfsgs dfgfsgsdfgfsgsdfgfsgsdfgfsgs dfgfsgs dfgfsgsdfgfsgsdfgfsgsdfgfsgdfgfsgs dfgfsgsdfgfsgsdfgfsgsdfgfsgs dfgfsgs dfgfsgsdfgfsgsdfgfsgsdfgfsgs</p>', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `content_blocks_images`
--

DROP TABLE IF EXISTS `content_blocks_images`;
CREATE TABLE IF NOT EXISTS `content_blocks_images` (
  `contentblock_id` int(11) NOT NULL,
  `contentimage_id` int(11) NOT NULL,
  PRIMARY KEY (`contentblock_id`,`contentimage_id`),
  KEY `IDX_960CFC1F42ADBAC2` (`contentblock_id`),
  KEY `IDX_960CFC1F96E51DA3` (`contentimage_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `content_blocks_images`
--

INSERT INTO `content_blocks_images` (`contentblock_id`, `contentimage_id`) VALUES
(4, 3),
(4, 4),
(8, 5),
(8, 6),
(15, 7),
(21, 8);

-- --------------------------------------------------------

--
-- Table structure for table `content_images`
--

DROP TABLE IF EXISTS `content_images`;
CREATE TABLE IF NOT EXISTS `content_images` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `imagefile` int(11) DEFAULT NULL,
  `imageOrder` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_8829CEC6991EFFB9` (`imagefile`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=9 ;

--
-- Dumping data for table `content_images`
--

INSERT INTO `content_images` (`id`, `imagefile`, `imageOrder`) VALUES
(3, 11, 1),
(4, 12, 2),
(5, 13, 1),
(6, 15, 2),
(7, 16, 1),
(8, NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `content_slides`
--

DROP TABLE IF EXISTS `content_slides`;
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
-- Table structure for table `extracontent_blocks`
--

DROP TABLE IF EXISTS `extracontent_blocks`;
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

DROP TABLE IF EXISTS `fos_user_group`;
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

DROP TABLE IF EXISTS `fos_user_user`;
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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=6 ;

--
-- Dumping data for table `fos_user_user`
--

INSERT INTO `fos_user_user` (`id`, `username`, `username_canonical`, `email`, `email_canonical`, `enabled`, `salt`, `password`, `last_login`, `locked`, `expired`, `expires_at`, `confirmation_token`, `password_requested_at`, `roles`, `credentials_expired`, `credentials_expire_at`, `created_at`, `updated_at`, `date_of_birth`, `firstname`, `lastname`, `website`, `biography`, `gender`, `locale`, `timezone`, `phone`, `facebook_uid`, `facebook_name`, `facebook_data`, `twitter_uid`, `twitter_name`, `twitter_data`, `gplus_uid`, `gplus_name`, `gplus_data`, `token`, `two_step_code`, `bakeFrequency`, `sex`, `bakeChoises`, `age`, `children`, `campaign`) VALUES
(5, 'administrator', 'administrator', 'sss@sss.fr', 'sss@sss.fr', 1, '9jhl6ucm3wo4w4kc80w4444kw08s4sg', 'gK/EOnx7yyY4iQTeta/8Pp87E6DW2IMmUe4fiweTZDQ7cjKSvZgeFtFQoNk3HHcGtXwDFzHbzujCu85mGeC1ww==', '2013-11-26 16:05:10', 0, 0, NULL, NULL, NULL, 'a:1:{i:0;s:16:"ROLE_SUPER_ADMIN";}', 0, NULL, '2013-08-16 23:14:39', '2013-11-26 16:05:10', NULL, NULL, NULL, NULL, NULL, 'u', NULL, NULL, NULL, NULL, NULL, 'null', NULL, NULL, 'null', NULL, NULL, 'null', NULL, NULL, NULL, NULL, 'N;', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `fos_user_user_group`
--

DROP TABLE IF EXISTS `fos_user_user_group`;
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

DROP TABLE IF EXISTS `maincontent_blocks`;
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
(1, 2),
(2, 11),
(3, 5),
(3, 7),
(3, 8),
(3, 26),
(4, 12),
(5, 14),
(10, 18),
(11, 20),
(11, 21),
(11, 24);

-- --------------------------------------------------------

--
-- Table structure for table `media__gallery`
--

DROP TABLE IF EXISTS `media__gallery`;
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

DROP TABLE IF EXISTS `media__gallery_media`;
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

DROP TABLE IF EXISTS `media__media`;
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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=29 ;

--
-- Dumping data for table `media__media`
--

INSERT INTO `media__media` (`id`, `name`, `description`, `enabled`, `provider_name`, `provider_status`, `provider_reference`, `provider_metadata`, `width`, `height`, `length`, `content_type`, `content_size`, `copyright`, `author_name`, `context`, `cdn_is_flushable`, `cdn_flush_at`, `cdn_status`, `updated_at`, `created_at`) VALUES
(8, '226628_557158640994305_1189139056_n.jpg', NULL, 0, 'sonata.media.provider.image', 1, '5d8377da17d2f2fc5c8afc5de2caa7ad667abc30.jpeg', '{"filename":"thumbnail-default.jpg"}', 622, 415, NULL, 'image/jpeg', 11072, NULL, NULL, 'intro', NULL, NULL, NULL, '2013-08-13 20:29:51', '2013-08-13 20:02:02'),
(9, '984024_557161917660644_1602760854_n.jpg', NULL, 0, 'sonata.media.provider.image', 1, 'c24d30290acdaf9fd5f455df627ac775bd483859.jpeg', '{"filename":"thumbnail-default.jpg"}', 622, 415, NULL, 'image/jpeg', 11072, NULL, NULL, 'intro', NULL, NULL, NULL, '2013-08-13 20:30:52', '2013-08-13 20:05:50'),
(10, 'thumbnail-default.jpg', NULL, 0, 'sonata.media.provider.image', 1, 'd18c6bda1ce1604d403580fcbeffe756086a4d32.jpeg', '{"filename":"thumbnail-default.jpg"}', 622, 415, NULL, 'image/jpeg', 11072, NULL, NULL, 'intro', NULL, NULL, NULL, '2013-08-13 20:29:08', '2013-08-13 20:29:08'),
(11, 'thumbnail-default.jpg', NULL, 0, 'sonata.media.provider.image', 1, '080bf8a02f1981541f9e121eb04ab8b098532124.jpeg', '{"filename":"thumbnail-default.jpg"}', 622, 415, NULL, 'image/jpeg', 11072, NULL, NULL, 'default', NULL, NULL, NULL, '2013-08-13 21:44:36', '2013-08-13 21:44:36'),
(12, 'thumbnail-default.jpg', NULL, 0, 'sonata.media.provider.image', 1, '6072f86cee8a629b3baa678cbf9e2803fc3907b6.jpeg', '{"filename":"thumbnail-default.jpg"}', 622, 415, NULL, 'image/jpeg', 11072, NULL, NULL, 'default', NULL, NULL, NULL, '2013-08-13 21:45:00', '2013-08-13 21:45:00'),
(13, 'thumbnail-default.jpg', NULL, 0, 'sonata.media.provider.image', 1, '79c42c6c6e3f856a84b48b6172b02b5da18ef93c.jpeg', '{"filename":"thumbnail-default.jpg"}', 622, 415, NULL, 'image/jpeg', 11072, NULL, NULL, 'default', NULL, NULL, NULL, '2013-08-14 21:06:53', '2013-08-14 21:06:53'),
(15, 'thumbnail-default.jpg', NULL, 0, 'sonata.media.provider.image', 1, 'cf2acdd9c58293c3b663dc38612449a3a7af988c.jpeg', '{"filename":"thumbnail-default.jpg"}', 622, 415, NULL, 'image/jpeg', 11072, NULL, NULL, 'default', NULL, NULL, NULL, '2013-08-14 21:10:36', '2013-08-14 21:10:36'),
(16, 'thumbnail-default.jpg', NULL, 0, 'sonata.media.provider.image', 1, '921b310c46e0d1797e15d1b6c4a55b87a66270cc.jpeg', '{"filename":"thumbnail-default.jpg"}', 622, 415, NULL, 'image/jpeg', 11072, NULL, NULL, 'default', NULL, NULL, NULL, '2013-08-14 21:31:20', '2013-08-14 21:31:20'),
(17, '226628_557158640994305_1189139056_n.jpg', NULL, 0, 'sonata.media.provider.image', 1, '114bbda44a79b7ca4994baadf77f462506f58884.jpeg', '{"filename":"226628_557158640994305_1189139056_n.jpg"}', 865, 575, NULL, 'image/jpeg', 74156, NULL, NULL, 'intro', NULL, NULL, NULL, '2013-08-16 21:10:38', '2013-08-16 21:10:38'),
(18, 'bardis.jpg', NULL, 0, 'sonata.media.provider.image', 1, 'def42e14b11c4b5489705ef1e79c89c5bb5305ce.jpeg', '{"filename":"bardis.jpg"}', 420, 420, NULL, 'image/jpeg', 47158, NULL, NULL, 'intro', NULL, NULL, NULL, '2013-11-15 15:32:14', '2013-11-15 15:32:14'),
(19, 'bardis.jpg', NULL, 0, 'sonata.media.provider.image', 1, '2e5f5465d73f191e96b7de909ef3ebd19531850e.jpeg', '{"filename":"cookie-monster-cupcake.jpg"}', 500, 333, NULL, 'image/jpeg', 115941, NULL, NULL, 'intro', NULL, NULL, NULL, '2013-11-15 16:03:31', '2013-11-15 16:01:54'),
(20, 'cookie-monster-cupcake.jpg', NULL, 0, 'sonata.media.provider.image', 1, 'c7f0dd5ca7c9311b567ba77b2cc1cddaa5861f83.jpeg', '{"filename":"bardis.jpg"}', 420, 420, NULL, 'image/jpeg', 47158, NULL, NULL, 'intro', NULL, NULL, NULL, '2013-11-15 16:03:48', '2013-11-15 16:03:31'),
(21, 'bardis.jpg', NULL, 0, 'sonata.media.provider.image', 1, 'd62231f29630670623bd22f1a93f67e13330d2bb.jpeg', '{"filename":"bardis.jpg"}', 420, 420, NULL, 'image/jpeg', 47158, NULL, NULL, 'intro', NULL, NULL, NULL, '2013-11-15 16:03:48', '2013-11-15 16:03:48'),
(22, 'thumb_8_intro_original.jpeg', NULL, 0, 'sonata.media.provider.image', 1, '3d6599532cdb652482d9525a1a0c039c42b58c7f.jpeg', '{"filename":"thumb_8_intro_original.jpeg"}', 622, 415, NULL, 'image/jpeg', 19140, NULL, NULL, 'intro', NULL, NULL, NULL, '2013-11-15 16:06:29', '2013-11-15 16:06:29'),
(23, 'Hydrangeas.jpg', NULL, 0, 'sonata.media.provider.image', 1, 'c9b12055a194e26bc553ca965766227c2bbf70dd.jpeg', '{"filename":"Hydrangeas.jpg"}', 1024, 768, NULL, 'image/jpeg', 595284, NULL, NULL, 'icons', NULL, NULL, NULL, '2013-11-15 17:51:11', '2013-11-15 17:51:11'),
(28, 'inFORM - Interacting With a Dynamic Shape Display', 'inFORM is a Dynamic Shape Display that can render 3D content physically, so users can interact with digital information in a tangible way. inFORM can also interact with the physical world around it, for example moving objects on the table''s surface. Remote participants in a video conference can be displayed physically, allowing for a strong sense of presence and the ability to interact physically at a distance. inFORM is a step toward our vision of Radical Atoms: http://tangible.media.mit.edu/vision/\n\nhttp://tangible.media.mit.edu/project/inform/', 0, 'sonata.media.provider.vimeo', 1, '79179138', '{"type":"video","version":"1.0","provider_name":"Vimeo","provider_url":"https:\\/\\/vimeo.com\\/","title":"inFORM - Interacting With a Dynamic Shape Display","author_name":"Tangible Media Group","author_url":"http:\\/\\/vimeo.com\\/tangiblemedia","is_plus":"1","html":"<iframe src=\\"\\/\\/player.vimeo.com\\/video\\/79179138\\" width=\\"1280\\" height=\\"720\\" frameborder=\\"0\\" title=\\"inFORM - Interacting With a Dynamic Shape Display\\" webkitallowfullscreen mozallowfullscreen allowfullscreen><\\/iframe>","width":1280,"height":720,"duration":221,"description":"inFORM is a Dynamic Shape Display that can render 3D content physically, so users can interact with digital information in a tangible way. inFORM can also interact with the physical world around it, for example moving objects on the table''s surface. Remote participants in a video conference can be displayed physically, allowing for a strong sense of presence and the ability to interact physically at a distance. inFORM is a step toward our vision of Radical Atoms: http:\\/\\/tangible.media.mit.edu\\/vision\\/\\n\\nhttp:\\/\\/tangible.media.mit.edu\\/project\\/inform\\/","thumbnail_url":"http:\\/\\/b.vimeocdn.com\\/ts\\/454\\/838\\/454838853_1280.jpg","thumbnail_width":1280,"thumbnail_height":720,"video_id":79179138}', 1280, 720, '221', 'video/x-flv', NULL, NULL, 'Tangible Media Group', 'default', NULL, NULL, NULL, '2013-11-18 13:57:29', '2013-11-18 13:57:29');

-- --------------------------------------------------------

--
-- Table structure for table `menu_items`
--

DROP TABLE IF EXISTS `menu_items`;
CREATE TABLE IF NOT EXISTS `menu_items` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `page` int(11) DEFAULT NULL,
  `blog` int(11) DEFAULT NULL,
  `recipe` int(11) DEFAULT NULL,
  `product` int(11) DEFAULT NULL,
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
  KEY `IDX_70B2CA2ADA88B137` (`recipe`),
  KEY `IDX_70B2CA2AD34A04AD` (`product`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=12 ;

--
-- Dumping data for table `menu_items`
--

INSERT INTO `menu_items` (`id`, `page`, `blog`, `recipe`, `product`, `title`, `menuType`, `route`, `externalUrl`, `accessLevel`, `parent`, `menuGroup`, `publishState`, `ordering`, `menuUrlExtras`, `menuImage`) VALUES
(1, 1, NULL, NULL, NULL, 'Home', 'Page', 'showPage', NULL, 0, '0', 'Main Menu', 1, 1, NULL, NULL),
(2, 3, NULL, NULL, NULL, 'Sample Page', 'Page', 'showPage', NULL, 0, '0', 'Main Menu', 1, 2, NULL, NULL),
(3, 4, NULL, NULL, NULL, 'Sample Page 2', 'Page', 'showPage', NULL, 0, '2', 'Main Menu', 1, 1, NULL, NULL),
(4, 5, NULL, NULL, NULL, 'Sample Page 3', 'Page', 'showPage', NULL, 0, '0', 'Footer Menu', 1, 99, NULL, NULL),
(5, 6, NULL, NULL, NULL, 'Sitemap', 'Page', 'showPage', NULL, 0, '0', 'Small Footer Menu', 1, 99, NULL, NULL),
(6, 7, NULL, NULL, NULL, 'Sample Category', 'Page', 'showPage', NULL, 0, '0', 'Main Menu', 1, 99, NULL, NULL),
(7, 8, NULL, NULL, NULL, 'Sample Tag List', 'Page', 'showPage', NULL, 0, '0', 'Footer Menu', 1, 99, NULL, NULL),
(8, 9, NULL, NULL, NULL, 'Sample Filter Page', 'Page', 'showPage', NULL, 0, '0', 'Footer Menu', 1, 99, NULL, NULL),
(9, 10, NULL, NULL, NULL, 'Sample Contact', 'Page', 'showPage', NULL, 0, '0', 'Main Menu', 1, 99, NULL, NULL),
(10, NULL, 1, NULL, NULL, 'Test Blog Post', 'Blog', 'showPage', NULL, 0, '0', 'Footer Menu', 1, 99, NULL, NULL),
(11, NULL, 2, NULL, NULL, 'Blog Home', 'Blog', 'showPage', NULL, 0, '0', 'Footer Menu', 1, 99, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `modalcontent_blocks`
--

DROP TABLE IF EXISTS `modalcontent_blocks`;
CREATE TABLE IF NOT EXISTS `modalcontent_blocks` (
  `page_id` int(11) NOT NULL,
  `contentblock_id` int(11) NOT NULL,
  PRIMARY KEY (`page_id`,`contentblock_id`),
  KEY `IDX_7074B397C4663E4` (`page_id`),
  KEY `IDX_7074B39742ADBAC2` (`contentblock_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `modalcontent_blocks`
--

INSERT INTO `modalcontent_blocks` (`page_id`, `contentblock_id`) VALUES
(3, 6);

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

DROP TABLE IF EXISTS `pages`;
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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=12 ;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `author`, `introimage`, `bgimage`, `date`, `title`, `alias`, `pageOrder`, `showPageTitle`, `publishState`, `pageclass`, `description`, `keywords`, `introtext`, `intromediasize`, `introclass`, `pagetype`) VALUES
(1, 5, NULL, NULL, '2013-08-09', 'Homepage', 'index', 99, 0, 1, NULL, 'description', 'keyword', NULL, 'original', NULL, 'homepage'),
(2, NULL, NULL, NULL, '2013-08-10', '404 - Page Not Found', '404', 99, 1, 1, NULL, NULL, NULL, NULL, 'original', NULL, 'one_columned'),
(3, 5, 22, NULL, '2013-08-12', 'Sample page', 'sample-page', 1, 1, 1, 'sample-page', NULL, NULL, '<p>Sample Intro Text Sample Intro Text Sample Intro Text Sample Intro Text</p>', 'original', NULL, 'one_columned'),
(4, NULL, 8, NULL, '2013-08-12', 'Sample Page Two Columns', 'sample-page-two-columns', 2, 1, 1, NULL, NULL, NULL, '<p>Sample Intro Text Sample Intro Text Sample Intro Text Sample Intro Text</p>', 'original', NULL, 'two_columned'),
(5, NULL, 9, NULL, '2013-08-13', 'Sample Page Three Columns', 'sample-page-three-columns', 3, 1, 1, NULL, NULL, NULL, '<p>Sample Intro Text Sample Intro Text Sample Intro Text Sample Intro Text</p>', 'original', NULL, 'three_columned'),
(6, NULL, NULL, NULL, '2013-08-14', 'Sitemap', 'site-map', 99, 1, 1, NULL, NULL, NULL, NULL, 'original', NULL, 'sitemap'),
(7, NULL, NULL, NULL, '2013-08-14', 'Sample Category Page', 'sample-category-page', 99, 1, 1, NULL, NULL, NULL, NULL, 'original', NULL, 'category_page'),
(8, NULL, NULL, NULL, '2013-08-15', 'Sample Tag Listing', 'sample-tag-listing', 99, 1, 1, NULL, NULL, NULL, NULL, 'original', NULL, 'category_page'),
(9, NULL, NULL, NULL, '2013-08-15', 'Filter Results', 'tagged', 99, 1, 1, NULL, NULL, NULL, NULL, 'original', NULL, 'page_tag_list'),
(10, NULL, NULL, NULL, '2013-08-15', 'Sample Contact Page', 'sample-contact-page', 99, 1, 1, NULL, NULL, NULL, NULL, 'original', NULL, 'contact'),
(11, 5, NULL, NULL, '2013-11-18', 'New test decoupled', 'new-test-decoupled', 99, 1, 1, NULL, NULL, NULL, NULL, 'original', NULL, 'one_columned');

-- --------------------------------------------------------

--
-- Table structure for table `pages_categories`
--

DROP TABLE IF EXISTS `pages_categories`;
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
(3, 1),
(3, 2),
(4, 1),
(4, 2),
(5, 1),
(7, 2);

-- --------------------------------------------------------

--
-- Table structure for table `pages_tags`
--

DROP TABLE IF EXISTS `pages_tags`;
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
(3, 1),
(4, 1),
(5, 1),
(8, 1);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `author` int(11) DEFAULT NULL,
  `introimage` int(11) DEFAULT NULL,
  `introvideo` int(11) DEFAULT NULL,
  `bgimage` int(11) DEFAULT NULL,
  `productimage` int(11) DEFAULT NULL,
  `productlistimage` int(11) DEFAULT NULL,
  `date` date NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `alias` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pageOrder` int(11) NOT NULL,
  `productOrder` int(11) NOT NULL,
  `showPageTitle` int(11) DEFAULT NULL,
  `publishState` int(11) NOT NULL,
  `pageclass` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `keywords` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `introtext` longtext COLLATE utf8_unicode_ci,
  `intromediasize` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `introclass` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pagetype` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `summary` longtext COLLATE utf8_unicode_ci,
  `productsRange` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `manufacturersPartNo1` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `manufacturersPartNo2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `manufacturersPartNo3` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `packageSize1` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `packageSize2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `packageSize3` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `topArrowText` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `displayFairtrade` int(11) DEFAULT NULL,
  `displayInRange` int(11) DEFAULT NULL,
  `featuredProduct` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_B3BA5A5AE16C6B94` (`alias`),
  UNIQUE KEY `UNIQ_B3BA5A5AF3890D5F` (`introimage`),
  UNIQUE KEY `UNIQ_B3BA5A5A4A73D32C` (`introvideo`),
  UNIQUE KEY `UNIQ_B3BA5A5A97AB4E12` (`bgimage`),
  UNIQUE KEY `UNIQ_B3BA5A5A15F056E5` (`productimage`),
  UNIQUE KEY `UNIQ_B3BA5A5A38A6845A` (`productlistimage`),
  KEY `IDX_B3BA5A5ABDAFD8C8` (`author`),
  KEY `IDX_B3BA5A5AF547E913` (`featuredProduct`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `author`, `introimage`, `introvideo`, `bgimage`, `productimage`, `productlistimage`, `date`, `title`, `alias`, `pageOrder`, `productOrder`, `showPageTitle`, `publishState`, `pageclass`, `description`, `keywords`, `introtext`, `intromediasize`, `introclass`, `pagetype`, `summary`, `productsRange`, `manufacturersPartNo1`, `manufacturersPartNo2`, `manufacturersPartNo3`, `packageSize1`, `packageSize2`, `packageSize3`, `topArrowText`, `displayFairtrade`, `displayInRange`, `featuredProduct`) VALUES
(1, NULL, NULL, NULL, NULL, NULL, NULL, '2013-08-10', 'sfgsfgsffsg', NULL, 99, 99, NULL, 2, NULL, NULL, NULL, NULL, NULL, NULL, 'product_article', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `products_categories`
--

DROP TABLE IF EXISTS `products_categories`;
CREATE TABLE IF NOT EXISTS `products_categories` (
  `product_id` int(11) NOT NULL,
  `productcategory_id` int(11) NOT NULL,
  PRIMARY KEY (`product_id`,`productcategory_id`),
  KEY `IDX_E8ACBE764584665A` (`product_id`),
  KEY `IDX_E8ACBE76E26A32B1` (`productcategory_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products_tags`
--

DROP TABLE IF EXISTS `products_tags`;
CREATE TABLE IF NOT EXISTS `products_tags` (
  `product_id` int(11) NOT NULL,
  `producttag_id` int(11) NOT NULL,
  PRIMARY KEY (`product_id`,`producttag_id`),
  KEY `IDX_E3AB5A2C4584665A` (`product_id`),
  KEY `IDX_E3AB5A2C91B6F4D1` (`producttag_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product_categories`
--

DROP TABLE IF EXISTS `product_categories`;
CREATE TABLE IF NOT EXISTS `product_categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `categoryClass` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `categoryIcon` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_A9941943AD0F3245` (`categoryIcon`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `product_maincontent_blocks`
--

DROP TABLE IF EXISTS `product_maincontent_blocks`;
CREATE TABLE IF NOT EXISTS `product_maincontent_blocks` (
  `product_id` int(11) NOT NULL,
  `contentblock_id` int(11) NOT NULL,
  PRIMARY KEY (`product_id`,`contentblock_id`),
  KEY `IDX_49F9931B4584665A` (`product_id`),
  KEY `IDX_49F9931B42ADBAC2` (`contentblock_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product_modalcontent_blocks`
--

DROP TABLE IF EXISTS `product_modalcontent_blocks`;
CREATE TABLE IF NOT EXISTS `product_modalcontent_blocks` (
  `product_id` int(11) NOT NULL,
  `contentblock_id` int(11) NOT NULL,
  PRIMARY KEY (`product_id`,`contentblock_id`),
  KEY `IDX_293558054584665A` (`product_id`),
  KEY `IDX_2935580542ADBAC2` (`contentblock_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product_secondarycontent_blocks`
--

DROP TABLE IF EXISTS `product_secondarycontent_blocks`;
CREATE TABLE IF NOT EXISTS `product_secondarycontent_blocks` (
  `product_id` int(11) NOT NULL,
  `contentblock_id` int(11) NOT NULL,
  PRIMARY KEY (`product_id`,`contentblock_id`),
  KEY `IDX_B19EEBCE4584665A` (`product_id`),
  KEY `IDX_B19EEBCE42ADBAC2` (`contentblock_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product_tags`
--

DROP TABLE IF EXISTS `product_tags`;
CREATE TABLE IF NOT EXISTS `product_tags` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tagCategory` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tagIcon` int(11) DEFAULT NULL,
  `smallIcon` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_E254B6878913051D` (`tagIcon`),
  UNIQUE KEY `UNIQ_E254B6878E1E1511` (`smallIcon`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `recipes`
--

DROP TABLE IF EXISTS `recipes`;
CREATE TABLE IF NOT EXISTS `recipes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `author` int(11) DEFAULT NULL,
  `introimage` int(11) DEFAULT NULL,
  `introvideo` int(11) DEFAULT NULL,
  `recipeimage` int(11) DEFAULT NULL,
  `bgimage` int(11) DEFAULT NULL,
  `product` int(11) DEFAULT NULL,
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
  `intromediasize` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `introclass` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `preperation` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cooking` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `servings` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pagetype` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_A369E2B5E16C6B94` (`alias`),
  UNIQUE KEY `UNIQ_A369E2B5F3890D5F` (`introimage`),
  UNIQUE KEY `UNIQ_A369E2B54A73D32C` (`introvideo`),
  UNIQUE KEY `UNIQ_A369E2B5E7032E9B` (`recipeimage`),
  UNIQUE KEY `UNIQ_A369E2B597AB4E12` (`bgimage`),
  KEY `IDX_A369E2B5BDAFD8C8` (`author`),
  KEY `IDX_A369E2B5D34A04AD` (`product`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `recipes`
--

INSERT INTO `recipes` (`id`, `author`, `introimage`, `introvideo`, `recipeimage`, `bgimage`, `product`, `date`, `title`, `alias`, `pageOrder`, `showPageTitle`, `publishState`, `pageclass`, `description`, `keywords`, `introtext`, `summary`, `intromediasize`, `introclass`, `preperation`, `cooking`, `servings`, `pagetype`) VALUES
(1, NULL, NULL, NULL, NULL, NULL, NULL, '2013-08-10', 'gffgfsdfdg', NULL, 99, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'recipe_article');

-- --------------------------------------------------------

--
-- Table structure for table `recipes_categories`
--

DROP TABLE IF EXISTS `recipes_categories`;
CREATE TABLE IF NOT EXISTS `recipes_categories` (
  `recipe_id` int(11) NOT NULL,
  `recipecategory_id` int(11) NOT NULL,
  PRIMARY KEY (`recipe_id`,`recipecategory_id`),
  KEY `IDX_90716E0D59D8A214` (`recipe_id`),
  KEY `IDX_90716E0D3873EBF9` (`recipecategory_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `recipes_tags`
--

DROP TABLE IF EXISTS `recipes_tags`;
CREATE TABLE IF NOT EXISTS `recipes_tags` (
  `recipe_id` int(11) NOT NULL,
  `recipetag_id` int(11) NOT NULL,
  PRIMARY KEY (`recipe_id`,`recipetag_id`),
  KEY `IDX_54E4F56F59D8A214` (`recipe_id`),
  KEY `IDX_54E4F56F26F95B92` (`recipetag_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `recipe_bannercontent_blocks`
--

DROP TABLE IF EXISTS `recipe_bannercontent_blocks`;
CREATE TABLE IF NOT EXISTS `recipe_bannercontent_blocks` (
  `recipe_id` int(11) NOT NULL,
  `contentblock_id` int(11) NOT NULL,
  PRIMARY KEY (`recipe_id`,`contentblock_id`),
  KEY `IDX_4722A03859D8A214` (`recipe_id`),
  KEY `IDX_4722A03842ADBAC2` (`contentblock_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `recipe_categories`
--

DROP TABLE IF EXISTS `recipe_categories`;
CREATE TABLE IF NOT EXISTS `recipe_categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `categoryClass` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `categoryIcon` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_738DC00BAD0F3245` (`categoryIcon`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `recipe_extracontent_blocks`
--

DROP TABLE IF EXISTS `recipe_extracontent_blocks`;
CREATE TABLE IF NOT EXISTS `recipe_extracontent_blocks` (
  `recipe_id` int(11) NOT NULL,
  `contentblock_id` int(11) NOT NULL,
  PRIMARY KEY (`recipe_id`,`contentblock_id`),
  KEY `IDX_F652589D59D8A214` (`recipe_id`),
  KEY `IDX_F652589D42ADBAC2` (`contentblock_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `recipe_maincontent_blocks`
--

DROP TABLE IF EXISTS `recipe_maincontent_blocks`;
CREATE TABLE IF NOT EXISTS `recipe_maincontent_blocks` (
  `recipe_id` int(11) NOT NULL,
  `contentblock_id` int(11) NOT NULL,
  PRIMARY KEY (`recipe_id`,`contentblock_id`),
  KEY `IDX_6A46387E59D8A214` (`recipe_id`),
  KEY `IDX_6A46387E42ADBAC2` (`contentblock_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `recipe_modalcontent_blocks`
--

DROP TABLE IF EXISTS `recipe_modalcontent_blocks`;
CREATE TABLE IF NOT EXISTS `recipe_modalcontent_blocks` (
  `recipe_id` int(11) NOT NULL,
  `contentblock_id` int(11) NOT NULL,
  PRIMARY KEY (`recipe_id`,`contentblock_id`),
  KEY `IDX_14CE727959D8A214` (`recipe_id`),
  KEY `IDX_14CE727942ADBAC2` (`contentblock_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `recipe_secondarycontent_blocks`
--

DROP TABLE IF EXISTS `recipe_secondarycontent_blocks`;
CREATE TABLE IF NOT EXISTS `recipe_secondarycontent_blocks` (
  `recipe_id` int(11) NOT NULL,
  `contentblock_id` int(11) NOT NULL,
  PRIMARY KEY (`recipe_id`,`contentblock_id`),
  KEY `IDX_A8D43BB59D8A214` (`recipe_id`),
  KEY `IDX_A8D43BB42ADBAC2` (`contentblock_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `recipe_tags`
--

DROP TABLE IF EXISTS `recipe_tags`;
CREATE TABLE IF NOT EXISTS `recipe_tags` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tagCategory` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tagIcon` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_10A7CEF98913051D` (`tagIcon`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `secondarycontent_blocks`
--

DROP TABLE IF EXISTS `secondarycontent_blocks`;
CREATE TABLE IF NOT EXISTS `secondarycontent_blocks` (
  `page_id` int(11) NOT NULL,
  `contentblock_id` int(11) NOT NULL,
  PRIMARY KEY (`page_id`,`contentblock_id`),
  KEY `IDX_F8B56AB4C4663E4` (`page_id`),
  KEY `IDX_F8B56AB442ADBAC2` (`contentblock_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `secondarycontent_blocks`
--

INSERT INTO `secondarycontent_blocks` (`page_id`, `contentblock_id`) VALUES
(1, 17),
(4, 13),
(5, 16);

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

DROP TABLE IF EXISTS `settings`;
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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `metaDescription`, `metaKeywords`, `fromTitle`, `websiteTitle`, `websiteAuthor`, `useWebsiteAuthor`, `enableGoogleAnalytics`, `googleAnalyticsId`, `emailSender`, `emailRecepient`, `itemsPerPage`, `blogItemsPerPage`, `activateSettings`) VALUES
(1, 'Default Meta Description', 'Default Meta Keywords', 'Owner', 'Website Title', 'Author', 1, 0, NULL, 'george@bardis.info', 'george@bardis.info', 2, 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

DROP TABLE IF EXISTS `tags`;
CREATE TABLE IF NOT EXISTS `tags` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tagCategory` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tagIcon` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_6FBC94268913051D` (`tagIcon`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`id`, `title`, `tagCategory`, `tagIcon`) VALUES
(1, 'test', 'blog', NULL);

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
  ADD CONSTRAINT `bannercontent_blocks_ibfk_5` FOREIGN KEY (`page_id`) REFERENCES `pages` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `bannercontent_blocks_ibfk_6` FOREIGN KEY (`contentblock_id`) REFERENCES `content_blocks` (`id`) ON DELETE CASCADE;

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
  ADD CONSTRAINT `FK_70B2CA2A9196AB0E` FOREIGN KEY (`menuImage`) REFERENCES `media__media` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `FK_70B2CA2AC0155143` FOREIGN KEY (`blog`) REFERENCES `blogs` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `FK_70B2CA2AD34A04AD` FOREIGN KEY (`product`) REFERENCES `products` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `FK_70B2CA2ADA88B137` FOREIGN KEY (`recipe`) REFERENCES `recipes` (`id`) ON DELETE SET NULL;

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
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `FK_B3BA5A5A15F056E5` FOREIGN KEY (`productimage`) REFERENCES `media__media` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `FK_B3BA5A5A38A6845A` FOREIGN KEY (`productlistimage`) REFERENCES `media__media` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `FK_B3BA5A5A4A73D32C` FOREIGN KEY (`introvideo`) REFERENCES `media__media` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `FK_B3BA5A5A97AB4E12` FOREIGN KEY (`bgimage`) REFERENCES `media__media` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `FK_B3BA5A5ABDAFD8C8` FOREIGN KEY (`author`) REFERENCES `fos_user_user` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `FK_B3BA5A5AF3890D5F` FOREIGN KEY (`introimage`) REFERENCES `media__media` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `FK_B3BA5A5AF547E913` FOREIGN KEY (`featuredProduct`) REFERENCES `products` (`id`) ON DELETE SET NULL;

--
-- Constraints for table `products_categories`
--
ALTER TABLE `products_categories`
  ADD CONSTRAINT `FK_E8ACBE764584665A` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_E8ACBE76E26A32B1` FOREIGN KEY (`productcategory_id`) REFERENCES `product_categories` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `products_tags`
--
ALTER TABLE `products_tags`
  ADD CONSTRAINT `FK_E3AB5A2C4584665A` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_E3AB5A2C91B6F4D1` FOREIGN KEY (`producttag_id`) REFERENCES `product_tags` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `product_categories`
--
ALTER TABLE `product_categories`
  ADD CONSTRAINT `FK_A9941943AD0F3245` FOREIGN KEY (`categoryIcon`) REFERENCES `media__media` (`id`);

--
-- Constraints for table `product_maincontent_blocks`
--
ALTER TABLE `product_maincontent_blocks`
  ADD CONSTRAINT `FK_49F9931B42ADBAC2` FOREIGN KEY (`contentblock_id`) REFERENCES `content_blocks` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_49F9931B4584665A` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `product_modalcontent_blocks`
--
ALTER TABLE `product_modalcontent_blocks`
  ADD CONSTRAINT `FK_2935580542ADBAC2` FOREIGN KEY (`contentblock_id`) REFERENCES `content_blocks` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_293558054584665A` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `product_secondarycontent_blocks`
--
ALTER TABLE `product_secondarycontent_blocks`
  ADD CONSTRAINT `FK_B19EEBCE42ADBAC2` FOREIGN KEY (`contentblock_id`) REFERENCES `content_blocks` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_B19EEBCE4584665A` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `product_tags`
--
ALTER TABLE `product_tags`
  ADD CONSTRAINT `FK_E254B6878913051D` FOREIGN KEY (`tagIcon`) REFERENCES `media__media` (`id`),
  ADD CONSTRAINT `FK_E254B6878E1E1511` FOREIGN KEY (`smallIcon`) REFERENCES `media__media` (`id`);

--
-- Constraints for table `recipes`
--
ALTER TABLE `recipes`
  ADD CONSTRAINT `FK_A369E2B54A73D32C` FOREIGN KEY (`introvideo`) REFERENCES `media__media` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `FK_A369E2B597AB4E12` FOREIGN KEY (`bgimage`) REFERENCES `media__media` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `FK_A369E2B5BDAFD8C8` FOREIGN KEY (`author`) REFERENCES `fos_user_user` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `FK_A369E2B5D34A04AD` FOREIGN KEY (`product`) REFERENCES `products` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `FK_A369E2B5E7032E9B` FOREIGN KEY (`recipeimage`) REFERENCES `media__media` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `FK_A369E2B5F3890D5F` FOREIGN KEY (`introimage`) REFERENCES `media__media` (`id`) ON DELETE SET NULL;

--
-- Constraints for table `recipes_categories`
--
ALTER TABLE `recipes_categories`
  ADD CONSTRAINT `FK_90716E0D3873EBF9` FOREIGN KEY (`recipecategory_id`) REFERENCES `recipe_categories` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_90716E0D59D8A214` FOREIGN KEY (`recipe_id`) REFERENCES `recipes` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `recipes_tags`
--
ALTER TABLE `recipes_tags`
  ADD CONSTRAINT `FK_54E4F56F26F95B92` FOREIGN KEY (`recipetag_id`) REFERENCES `recipe_tags` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_54E4F56F59D8A214` FOREIGN KEY (`recipe_id`) REFERENCES `recipes` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `recipe_bannercontent_blocks`
--
ALTER TABLE `recipe_bannercontent_blocks`
  ADD CONSTRAINT `FK_4722A03842ADBAC2` FOREIGN KEY (`contentblock_id`) REFERENCES `content_blocks` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_4722A03859D8A214` FOREIGN KEY (`recipe_id`) REFERENCES `recipes` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `recipe_categories`
--
ALTER TABLE `recipe_categories`
  ADD CONSTRAINT `FK_738DC00BAD0F3245` FOREIGN KEY (`categoryIcon`) REFERENCES `media__media` (`id`);

--
-- Constraints for table `recipe_extracontent_blocks`
--
ALTER TABLE `recipe_extracontent_blocks`
  ADD CONSTRAINT `FK_F652589D42ADBAC2` FOREIGN KEY (`contentblock_id`) REFERENCES `content_blocks` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_F652589D59D8A214` FOREIGN KEY (`recipe_id`) REFERENCES `recipes` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `recipe_maincontent_blocks`
--
ALTER TABLE `recipe_maincontent_blocks`
  ADD CONSTRAINT `FK_6A46387E42ADBAC2` FOREIGN KEY (`contentblock_id`) REFERENCES `content_blocks` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_6A46387E59D8A214` FOREIGN KEY (`recipe_id`) REFERENCES `recipes` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `recipe_modalcontent_blocks`
--
ALTER TABLE `recipe_modalcontent_blocks`
  ADD CONSTRAINT `FK_14CE727942ADBAC2` FOREIGN KEY (`contentblock_id`) REFERENCES `content_blocks` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_14CE727959D8A214` FOREIGN KEY (`recipe_id`) REFERENCES `recipes` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `recipe_secondarycontent_blocks`
--
ALTER TABLE `recipe_secondarycontent_blocks`
  ADD CONSTRAINT `FK_A8D43BB42ADBAC2` FOREIGN KEY (`contentblock_id`) REFERENCES `content_blocks` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_A8D43BB59D8A214` FOREIGN KEY (`recipe_id`) REFERENCES `recipes` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `recipe_tags`
--
ALTER TABLE `recipe_tags`
  ADD CONSTRAINT `FK_10A7CEF98913051D` FOREIGN KEY (`tagIcon`) REFERENCES `media__media` (`id`);

--
-- Constraints for table `secondarycontent_blocks`
--
ALTER TABLE `secondarycontent_blocks`
  ADD CONSTRAINT `FK_F8B56AB442ADBAC2` FOREIGN KEY (`contentblock_id`) REFERENCES `content_blocks` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_F8B56AB4C4663E4` FOREIGN KEY (`page_id`) REFERENCES `pages` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `tags`
--
ALTER TABLE `tags`
  ADD CONSTRAINT `FK_6FBC94268913051D` FOREIGN KEY (`tagIcon`) REFERENCES `media__media` (`id`) ON DELETE SET NULL;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
