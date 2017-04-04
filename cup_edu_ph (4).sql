-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 04, 2017 at 08:24 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cup.edu.ph`
--

-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

CREATE TABLE `ci_sessions` (
  `id` varchar(128) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `data` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ci_sessions`
--

INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES
('ag05597tgr65ei28o7bvcpitur82q39d', '::1', 1491227210, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439313232373231303b6964656e746974797c733a31353a2261646d696e4061646d696e2e636f6d223b656d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b757365725f69647c733a313a2231223b6f6c645f6c6173745f6c6f67696e7c733a31303a2231343931313433333937223b6c6173745f636865636b7c693a313439313232363531333b),
('lku5vatuh4q7l0bnfq29kku6767j62m6', '::1', 1491228026, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439313232383032363b6964656e746974797c733a31353a2261646d696e4061646d696e2e636f6d223b656d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b757365725f69647c733a313a2231223b6f6c645f6c6173745f6c6f67696e7c733a31303a2231343931313433333937223b6c6173745f636865636b7c693a313439313232363531333b),
('f52ebbl96687cbrnolcqhia76nmeo4af', '::1', 1491228960, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439313232383936303b6964656e746974797c733a31353a2261646d696e4061646d696e2e636f6d223b656d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b757365725f69647c733a313a2231223b6f6c645f6c6173745f6c6f67696e7c733a31303a2231343931323236353133223b6c6173745f636865636b7c693a313439313232383131313b),
('sskdri17fret1mapa6evrsc26vdsmi22', '::1', 1491229358, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439313232393335383b6964656e746974797c733a31353a2261646d696e4061646d696e2e636f6d223b656d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b757365725f69647c733a313a2231223b6f6c645f6c6173745f6c6f67696e7c733a31303a2231343931323236353133223b6c6173745f636865636b7c693a313439313232383131313b),
('mdkdmnkk2dc0s7sa5q3ct6t20r737vav', '::1', 1491229727, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439313232393732373b6964656e746974797c733a31353a2261646d696e4061646d696e2e636f6d223b656d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b757365725f69647c733a313a2231223b6f6c645f6c6173745f6c6f67696e7c733a31303a2231343931323236353133223b6c6173745f636865636b7c693a313439313232383131313b),
('bd1vii4k4mhg1fb4dqv5pe6emh80dq18', '::1', 1491231288, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439313233313238383b6964656e746974797c733a31353a2261646d696e4061646d696e2e636f6d223b656d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b757365725f69647c733a313a2231223b6f6c645f6c6173745f6c6f67696e7c733a31303a2231343931323236353133223b6c6173745f636865636b7c693a313439313232383131313b),
('88hc5ldrdu61rrclgk126u4elm9hjn4m', '::1', 1491231565, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439313233313238383b6964656e746974797c733a31353a2261646d696e4061646d696e2e636f6d223b656d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b757365725f69647c733a313a2231223b6f6c645f6c6173745f6c6f67696e7c733a31303a2231343931323236353133223b6c6173745f636865636b7c693a313439313232383131313b),
('u92cmj18fhoeile9m1e0nceailqss1lj', '::1', 1491272562, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439313237323536323b),
('tooagemadgsi76v0191c4ohi2vmn2sdq', '::1', 1491323010, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439313332333031303b6964656e746974797c733a31353a2261646d696e4061646d696e2e636f6d223b656d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b757365725f69647c733a313a2231223b6f6c645f6c6173745f6c6f67696e7c733a31303a2231343931323238313131223b6c6173745f636865636b7c693a313439313332323631383b),
('4hge9jbq1p4mqh9596n93anv37c1cjl9', '::1', 1491323345, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439313332333334353b6964656e746974797c733a31353a2261646d696e4061646d696e2e636f6d223b656d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b757365725f69647c733a313a2231223b6f6c645f6c6173745f6c6f67696e7c733a31303a2231343931323238313131223b6c6173745f636865636b7c693a313439313332323631383b),
('jsbh6ihugtl047p93d1sagmj9n78jd5o', '::1', 1491323691, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439313332333639313b6964656e746974797c733a31353a2261646d696e4061646d696e2e636f6d223b656d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b757365725f69647c733a313a2231223b6f6c645f6c6173745f6c6f67696e7c733a31303a2231343931323238313131223b6c6173745f636865636b7c693a313439313332323631383b),
('6kpc2ko5tofrn0rqbch1n69ul3cvhulj', '::1', 1491324060, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439313332343036303b6964656e746974797c733a31353a2261646d696e4061646d696e2e636f6d223b656d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b757365725f69647c733a313a2231223b6f6c645f6c6173745f6c6f67696e7c733a31303a2231343931323238313131223b6c6173745f636865636b7c693a313439313332323631383b),
('jgtfg2uom50s019deumcmcbt482mlh9f', '::1', 1491324963, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439313332343936333b6964656e746974797c733a31353a2261646d696e4061646d696e2e636f6d223b656d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b757365725f69647c733a313a2231223b6f6c645f6c6173745f6c6f67696e7c733a31303a2231343931323238313131223b6c6173745f636865636b7c693a313439313332323631383b),
('pfllgara2nk4cskgdgntra3klhfti9n9', '::1', 1491325269, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439313332353236393b6964656e746974797c733a31353a2261646d696e4061646d696e2e636f6d223b656d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b757365725f69647c733a313a2231223b6f6c645f6c6173745f6c6f67696e7c733a31303a2231343931323238313131223b6c6173745f636865636b7c693a313439313332323631383b),
('169kvljvmm2jqt7g0aajcr8dim5u8dj2', '::1', 1491325935, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439313332353933353b6964656e746974797c733a31353a2261646d696e4061646d696e2e636f6d223b656d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b757365725f69647c733a313a2231223b6f6c645f6c6173745f6c6f67696e7c733a31303a2231343931323238313131223b6c6173745f636865636b7c693a313439313332323631383b),
('dlpodbu3ccnp04qi8p6chqv656hls1cj', '::1', 1491326246, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439313332363234363b6964656e746974797c733a31353a2261646d696e4061646d696e2e636f6d223b656d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b757365725f69647c733a313a2231223b6f6c645f6c6173745f6c6f67696e7c733a31303a2231343931323238313131223b6c6173745f636865636b7c693a313439313332323631383b),
('nkid8pjp3hrleskn79kojutq2dhou89i', '::1', 1491326504, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439313332363234363b6964656e746974797c733a31353a2261646d696e4061646d696e2e636f6d223b656d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b757365725f69647c733a313a2231223b6f6c645f6c6173745f6c6f67696e7c733a31303a2231343931323238313131223b6c6173745f636865636b7c693a313439313332323631383b),
('9cdp040elqgdh0i1c4pg1r0l1k0sl7oo', '::1', 1491327223, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439313332373232333b),
('u5lkmrgoo5dncq345rgivqqf26qo1lsq', '::1', 1491327533, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439313332373533333b),
('jshhsqv2ene3n81cdimlplukkne8tnoq', '::1', 1491327650, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439313332373533333b);

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

CREATE TABLE `files` (
  `id` int(11) NOT NULL,
  `file_name` varchar(100) NOT NULL,
  `file_description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `forum_comments`
--

CREATE TABLE `forum_comments` (
  `id_comments` int(11) NOT NULL,
  `id_post` int(11) NOT NULL,
  `author` varchar(25) NOT NULL,
  `text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `forum_posts`
--

CREATE TABLE `forum_posts` (
  `id_posts` int(11) NOT NULL,
  `text` text NOT NULL,
  `author` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `gallery_album`
--

CREATE TABLE `gallery_album` (
  `id` int(11) NOT NULL,
  `album_name` varchar(20) NOT NULL,
  `slug` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gallery_album`
--

INSERT INTO `gallery_album` (`id`, `album_name`, `slug`) VALUES
(0, 'CUP', 'cup');

-- --------------------------------------------------------

--
-- Table structure for table `gallery_images`
--

CREATE TABLE `gallery_images` (
  `id` int(11) NOT NULL,
  `file_name` varchar(30) NOT NULL,
  `album_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gallery_images`
--

INSERT INTO `gallery_images` (`id`, `file_name`, `album_name`) VALUES
(66, '_DSC4953.JPG', ' CUP '),
(67, '_DSC4958.JPG', ' CUP '),
(68, '_DSC4965.JPG', ' CUP '),
(69, '_DSC5067.JPG', ' CUP '),
(70, '_DSC5277.JPG', ' CUP '),
(71, '_DSC6429.JPG', ' CUP '),
(72, '_DSC6433.JPG', ' CUP '),
(73, '_DSC6436.JPG', ' CUP '),
(74, '_DSC6438.JPG', ' CUP '),
(75, '_DSC6439.JPG', ' CUP '),
(76, '_DSC6443.JPG', ' CUP '),
(77, '_DSC6444.JPG', ' CUP '),
(78, '_DSC6445.JPG', ' CUP '),
(79, '_DSC6446.JPG', ' CUP '),
(80, '_DSC6447.JPG', ' CUP '),
(81, '_DSC6448.JPG', ' CUP '),
(82, '_DSC6452.JPG', ' CUP '),
(83, '_DSC6453.JPG', ' CUP '),
(84, '_DSC6456.JPG', ' CUP '),
(85, '_DSC6458.JPG', ' CUP '),
(86, '_DSC6463.JPG', ' CUP '),
(87, '_DSC6466.JPG', ' CUP '),
(88, '_DSC6467.JPG', ' CUP '),
(89, '_DSC6471.JPG', ' CUP '),
(90, '_DSC6475.JPG', ' CUP '),
(91, '_DSC6494.JPG', ' CUP '),
(92, '_DSC6500.JPG', ' CUP '),
(93, '_DSC6503.JPG', ' CUP '),
(94, '_DSC6505.JPG', ' CUP '),
(95, '_DSC6521.JPG', ' CUP '),
(96, '_DSC6529.JPG', ' CUP '),
(97, '_DSC6535.JPG', ' CUP '),
(98, '_DSC6536.JPG', ' CUP '),
(99, '_DSC6541.JPG', ' CUP '),
(100, '_DSC6547.JPG', ' CUP '),
(101, '_DSC6548.JPG', ' CUP '),
(102, '_DSC6551.JPG', ' CUP '),
(103, '_DSC6552.JPG', ' CUP '),
(104, '_DSC6555.JPG', ' CUP '),
(105, '_DSC6556.JPG', ' CUP '),
(106, '_DSC6557.JPG', ' CUP '),
(107, '_DSC6560.JPG', ' CUP '),
(108, '_DSC6561.JPG', ' CUP '),
(109, '_DSC6562.JPG', ' CUP '),
(110, '_DSC6563.JPG', ' CUP '),
(111, '_DSC6564.JPG', ' CUP '),
(112, '_DSC6565.JPG', ' CUP '),
(113, '_DSC6566.JPG', ' CUP '),
(114, '_DSC6567.JPG', ' CUP '),
(115, '_DSC6570.JPG', ' CUP '),
(116, '_DSC6576.JPG', ' CUP '),
(117, '_DSC6580.JPG', ' CUP '),
(118, '_DSC6581.JPG', ' CUP '),
(119, '_DSC6582.JPG', ' CUP '),
(120, '_DSC6583.JPG', ' CUP '),
(121, '_DSC6586.JPG', ' CUP '),
(122, '_DSC6587.JPG', ' CUP '),
(123, '_DSC6588.JPG', ' CUP '),
(124, '_DSC6589.JPG', ' CUP '),
(125, '_DSC6590.JPG', ' CUP '),
(126, '_DSC6647.JPG', ' CUP '),
(127, '_DSC6757.JPG', ' CUP '),
(128, '_DSC6806.JPG', ' CUP '),
(129, '_DSC7023.JPG', ' CUP '),
(130, '_DSC9186.JPG', ' CUP '),
(131, 'DSC_0378.JPG', ' CUP '),
(132, 'DSC_0379.JPG', ' CUP '),
(133, 'DSC_0380.JPG', ' CUP '),
(134, 'DSC_0381.JPG', ' CUP '),
(135, 'DSC_0384.JPG', ' CUP '),
(136, 'DSC_0386.JPG', ' CUP '),
(137, 'DSC_0394.JPG', ' CUP '),
(138, 'DSC_0387.JPG', ' CUP '),
(139, 'DSC_0395.JPG', ' CUP '),
(140, 'DSC_0400.JPG', ' CUP '),
(141, 'DSC6558.JPG', ' CUP '),
(142, 'DSC6591.JPG', ' CUP ');

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE `groups` (
  `id` mediumint(8) UNSIGNED NOT NULL,
  `name` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `name`, `description`) VALUES
(1, 'admin', 'Administrator'),
(2, 'members', 'General User'),
(3, 'ceit', 'computer');

-- --------------------------------------------------------

--
-- Table structure for table `login_attempts`
--

CREATE TABLE `login_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(15) NOT NULL,
  `login` varchar(100) NOT NULL,
  `time` int(11) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `author` varchar(120) NOT NULL,
  `dates` date NOT NULL,
  `slug` varchar(128) NOT NULL,
  `text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `author`, `dates`, `slug`, `text`) VALUES
(19, 'Print Not: Dead', 'Mark Henry Z. Tiongson, BEED III-1', '2017-04-04', 'print-not-dead', '<p class="MsoNormal" style="text-align: justify; "><span lang="EN-US" style="font-size:12.0pt;line-height:115%;\r\nfont-family:&quot;Arial&quot;,sans-serif">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Magazines, newspapers and advertisement\r\nleaflets are some of the few examples of print. Print media has been one of\r\nman''s most reliable sources of information. From the hottest news of the day to\r\nthe coolest fashion statements of the year, almost everything can be seen in a\r\nprint. however, when advanced technology made its way to conquer the world,\r\nprint media appeared to be left aside.</span></p><p class="MsoNormal" style="text-align: justify; "><span lang="EN-US" style="font-size:12.0pt;line-height:115%;\r\nfont-family:&quot;Arial&quot;,sans-serif">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Some people still prefer reading materials\r\nwhile turning the pages in a magazine instead of sliding fingers on a screen.\r\nAmong the reasons why many people prefer printed materials has something to do\r\nwith the feel of the paper. Touching it using their fingertips mean that the\r\ncontest is real. It exists. Print media is unique in its capability to trigger\r\na number of senses, aside from of course, the feeling of paper and the smell of\r\nthe ink. papers can also be fastened to(when a clip is added). According to\r\nstudies people believe in something when it appeals to at least three senses.\r\nWhen social media popped-up suddenly, prints seemed to lose their place in\r\nsociety. This is very evident with teenagers that instead of turning the pages\r\nof the newspaper early in the morning, is surfing his or her hand over the\r\nscreen for an iPad. Was the phenomenon confined to the children born with a golden\r\nspoon, or would the development of our own children be curbed in this fashion.</span></p><p class="MsoNormal" style="text-align: justify; "><span lang="EN-US" style="font-size:12.0pt;line-height:115%;\r\nfont-family:&quot;Arial&quot;,sans-serif">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;More importantly, was this the evidence that\r\npaper''s media time was coming to an end? Are we right to worry, or must we\r\nlearn to accept this change is inevitable and all habits and media will die? Do\r\nwe know if this is to be true print? Many people predicted the eventual demise\r\nof the printed word; some say it''s happening right before our eyes. Are we\r\nright to say that the life of print media is coming to an end or is it just the\r\ntechnology based minds that are saying this? In the end, it''s all about\r\nadaptation. We should all just embrace reality that nothing in this world will\r\nremain the same and will stay permanently. <o:p></o:p></span></p><p class="MsoNormal">\r\n\r\n</p><p class="MsoNormal" style="text-align: justify; "><span lang="EN-US" style="font-size:12.0pt;mso-bidi-font-size:\r\n11.0pt;line-height:115%;font-family:&quot;Arial&quot;,sans-serif"><o:p>&nbsp;</o:p></span></p>'),
(20, 'How to be in control of our lives', 'Danielle Joy L. Pugay, BSE III-1 English', '2017-04-04', 'how-to-be-in-control-of-our-lives', '<p class="MsoNormal"><span lang="EN-US" style="font-size:12.0pt;line-height:115%;\r\nfont-family:&quot;Arial&quot;,sans-serif">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;We are the authors of our own life stories. In\r\nevery second, minute, hours and days of our lives, we see ourselves\r\noccasionally stumbling on a few rocky roads- but what is it that keeps us\r\ngoing?</span></p><p class="MsoNormal"><span lang="EN-US" style="font-size:12.0pt;line-height:115%;\r\nfont-family:&quot;Arial&quot;,sans-serif">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Our youth is our golden age. This is the stage\r\nwherein we rediscover our inner self and we start to see things in a more\r\nmatured perspective. it is in the nature of humans to be curios and to be full\r\nof questions and often, our curiosity helps us unravel the potentials we have\r\nthat we never knew existed. Before we were even born in this world, our creator\r\nshowered us with multiple talents and abilities. We are born with our very own\r\nunique color and talent. It is up to us if we want to use our blessings or\r\nthrow them away and put them to waste. If we believe in something and have the\r\nheart to achieve our goals, then nothing is too big or too small. Nothing is\r\nimpossible. Our potentials once unlocked and will let us see and view things in\r\na positive way. It gives us hope that there is more of us than what we are right\r\nnow. We are now at the crossroads. This is our opportunity to make the most\r\nimportant decision in our lives. <o:p></o:p></span></p><p class="MsoNormal">\r\n\r\n</p><p class="MsoNormal"><span lang="EN-US" style="font-size:12.0pt;line-height:115%;\r\nfont-family:&quot;Arial&quot;,sans-serif">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; At\r\nthe end of the day, every decision would still be up to us. One life is a blank\r\nbook and each page is a day in our lives and the words written inside are\r\nwritten by our own very hands. We have to unleash our potentials. And if we do\r\nthat, we are in control of our lives. If not, then life controls us.<o:p></o:p></span></p>'),
(21, 'Business Lecture  Effective Management', 'Ansensia D. Bravo, CBA Professor', '2017-04-04', 'business-lecture-effective-management', '<p class="MsoNormal" style="text-align: justify; "><span lang="EN-US" style="font-size:12.0pt;mso-bidi-font-size:\r\n11.0pt;line-height:115%;font-family:&quot;Arial&quot;,sans-serif">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Management is defined\r\nas the process of planning, organizing, directing and controlling forming an\r\norganization which needs a comprehensive planning especially in a big\r\norganization.<o:p></o:p></span></p>\r\n\r\n<p class="MsoNormal" style="text-align: justify;"><span lang="EN-US" style="font-size:12.0pt;mso-bidi-font-size:\r\n11.0pt;line-height:115%;font-family:&quot;Arial&quot;,sans-serif">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Strategic planning done for a long period of time to\r\ncombat one''s competitor is also the as what we call long-range planning. It\r\nalso will set the vision, mission, goals and objectives that the organization\r\nwants to achieve. It will also set the top priority and least priorities of an\r\norganization. Planning, indeed sets the organization in the path of direction\r\nwhere they want to go.<o:p></o:p></span></p>\r\n\r\n<p class="MsoNormal" style="text-align: justify;"><span lang="EN-US" style="font-size:12.0pt;mso-bidi-font-size:\r\n11.0pt;line-height:115%;font-family:&quot;Arial&quot;,sans-serif">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; If the organization failed in the process of planning it\r\nwill be chaotic because there is no direction for what they want to achieve\r\nOrganizing is giving direction by putting people according to their functions\r\nand specialization, instruction and necessary policies.<o:p></o:p></span></p>\r\n\r\n<p class="MsoNormal" style="text-align: justify;"><span lang="EN-US" style="font-size:12.0pt;mso-bidi-font-size:\r\n11.0pt;line-height:115%;font-family:&quot;Arial&quot;,sans-serif">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Directing people is not easy. We need to motivate them\r\nwhen we are giving instructions, policies, functions and responsibilities.\r\nGiving rewards recognition, incentives and monetary rewards are examples of\r\npositive motivation, but we need to give sanction and punishment for those\r\npeople who are lazy and time-watcher employees. Controlling people in terms of\r\nimplementation policy, controlling like checking financial status of the\r\norganization, and implementing of the proper and wise allocations of budget.<o:p></o:p></span></p>\r\n\r\n<p class="MsoNormal" style="text-align: justify; "><span lang="EN-US" style="font-size:12.0pt;mso-bidi-font-size:\r\n11.0pt;line-height:115%;font-family:&quot;Arial&quot;,sans-serif">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Planning, organizing, directing and controlling are the\r\nessentials of managing an organization that an effective manager should\r\nconducts.<o:p></o:p></span></p>'),
(22, 'EDITORIAL LINER: Teaching as a PASSION', 'Danielle Joy L. Pugay, BSE III-1 English', '2017-04-04', 'editorial-liner-teaching-as-a-passion', '<p class="MsoNormal" style="text-align: justify; "><span lang="EN-US" style="font-size:12.0pt;mso-bidi-font-size:\r\n11.0pt;line-height:115%;font-family:&quot;Arial&quot;,sans-serif">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"Teaching creates\r\nall professions." Teaching is not all about trying to make someone learn,\r\nbut it is where in every lesson taught, where a legacy is left behind that is\r\nworth remembering.<o:p></o:p></span></p>\r\n\r\n<p class="MsoNormal" style="text-align: justify;"><span lang="EN-US" style="font-size:12.0pt;mso-bidi-font-size:\r\n11.0pt;line-height:115%;font-family:&quot;Arial&quot;,sans-serif">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; As future educators, it is our main goal that we are\r\ntrained to become responsible teachers in the near future. It should never be\r\nforgotten that the art of teaching is found within the passionate heart of a\r\nteacher. They are very behind every miraculous hand of a doctor, every pillar\r\nbuilt by an engineer, and behind every flight of a pilot. It is in the heart of\r\na teacher to always care for his students, to equally give each child a chance\r\nto unlock his potential. <o:p></o:p></span></p>\r\n\r\n<p class="MsoNormal" style="text-align: justify;"><span lang="EN-US" style="font-size:12.0pt;mso-bidi-font-size:\r\n11.0pt;line-height:115%;font-family:&quot;Arial&quot;,sans-serif">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; There are no perfect persons. We may occasionally commit\r\nmistakes and error but what matters most is that we would never give up on our\r\nchallenges as teachers. We should take all the chances to be victorious in all\r\nour endeavors whatever risks it may take.<o:p></o:p></span></p>\r\n\r\n<p class="MsoNormal" style="text-align: justify;"><span lang="EN-US" style="font-size:12.0pt;mso-bidi-font-size:\r\n11.0pt;line-height:115%;font-family:&quot;Arial&quot;,sans-serif">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Teaching requires passion. It is the passion inside that\r\ngives out burning motivation to mold each student in to the perfect future they\r\nwish to achieve. The key to a powerful teaching is to teach from the heart and\r\nto give our trust. To trust the surroundings and to trust oneself as well.<o:p></o:p></span></p>\r\n\r\n<p class="MsoNormal" style="text-align: justify; "><span lang="EN-US" style="font-size:12.0pt;mso-bidi-font-size:\r\n11.0pt;line-height:115%;font-family:&quot;Arial&quot;,sans-serif">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; As educators, we pilot our students to the right path -\r\nto the right decisions in life. As we are like parents to them, we should treat\r\nthem like our very own and treat them with all our hearts. For in our hands\r\nwill hundreds of little hearts pass through - and it is in our hands to\r\npotentially create a much better future, not just for ourselves but for the\r\nsake of everyone else.<o:p></o:p></span></p>'),
(23, 'COEd Student Council awards Dean''s Listers', 'Zayke Jade Ugay, BSE III-2', '2017-04-04', 'coed-student-council-awards-deans-listers', '<p class="MsoNormal" style="text-align: justify; "><span lang="EN-US" style="font-size:12.0pt;mso-bidi-font-size:\r\n11.0pt;line-height:115%;font-family:&quot;Arial&quot;,sans-serif">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Valuing the hardship\r\nand striving for academic excellence of BEED and BSE students, the College of\r\nEducation Student Council awarded the dean''s listers of this semester last\r\nOctober 26-28, 2016.<o:p></o:p></span></p>\r\n\r\n<p class="MsoNormal" style="text-align: justify;"><span lang="EN-US" style="font-size:12.0pt;mso-bidi-font-size:\r\n11.0pt;line-height:115%;font-family:&quot;Arial&quot;,sans-serif">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; With the untiring support of the sponsors, the COEd-SC\r\nPresident, Jomar Reyes was able to fulfill one of his party''s platforms--the\r\ngiving of medals and certificates to the top 10 of each year''s dean''s listers.<o:p></o:p></span></p>\r\n\r\n<p class="MsoNormal" style="text-align: justify;"><span lang="EN-US" style="font-size:12.0pt;mso-bidi-font-size:\r\n11.0pt;line-height:115%;font-family:&quot;Arial&quot;,sans-serif">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; The recognition was done room to room, and the professor\r\nwho was teaching would be the person in charge of the awarding ceremony.<o:p></o:p></span></p>\r\n\r\n<p class="MsoNormal" style="text-align: justify; "><span lang="EN-US" style="font-size:12.0pt;mso-bidi-font-size:\r\n11.0pt;line-height:115%;font-family:&quot;Arial&quot;,sans-serif">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Mr. Reyes assured the students that this was just the\r\nbeginning of a gradual change in the system of the college council; as he\r\ndeclared, "<i>Greater things are yet to\r\ncome future educators!"</i><o:p></o:p></span></p>'),
(24, 'CUP 22nd Intramurals', 'Aljo B. Dais, BSE III-1 English', '2017-04-04', 'cup-22nd-intramurals', '<p class="MsoNormal" style="text-align: justify; "><span lang="EN-US" style="font-size:12.0pt;mso-bidi-font-size:\r\n11.0pt;line-height:115%;font-family:&quot;Arial&quot;,sans-serif">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The most awaited CUP\r\n22nd Intramurals 2016 was officially opened, headed by the Pasay City Mayor\r\nAntonio Calixto and the president of City University of Pasay, Dr. Concepcion\r\nC. Libuit. They did the ceremonial toss with the basketball players of CAS and\r\nCOACT on September 13, 2016 at Cuneta Astrodome.<o:p></o:p></span></p>\r\n\r\n<p class="MsoNormal" style="text-align: justify;"><span lang="EN-US" style="font-size:12.0pt;mso-bidi-font-size:\r\n11.0pt;line-height:115%;font-family:&quot;Arial&quot;,sans-serif">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Honourable guests from the local government of Pasay,\r\nespecially Congresswoman Emi Calixto-Rubiano were these to give an\r\ninspirational message about sportsmanship. Also there were the Deans of every\r\ncolleges in CUP. Their respective staff and faculty members participated and\r\ngave their support to every player who completed in different sports through\r\nthe week.<o:p></o:p></span></p>\r\n\r\n<p class="MsoNormal" style="text-align: justify; "><span lang="EN-US" style="font-size:12.0pt;mso-bidi-font-size:\r\n11.0pt;line-height:115%;font-family:&quot;Arial&quot;,sans-serif">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; As expected, the presence of students from all colleges\r\nmade the opening of the CUP 22nd Intramurals alive and vibrant.<o:p></o:p></span></p>'),
(25, 'Alvarez Wins Ms. Intrams 2016', 'Kassandra Ena E. Buenafe, BSE III-1 English', '2017-04-04', 'alvarez-wins-ms-intrams-2016', '<p><span lang="EN-US" style="font-size:12.0pt;mso-bidi-font-size:\r\n11.0pt;line-height:115%;font-family:&quot;Arial&quot;,sans-serif;mso-fareast-font-family:\r\nCalibri;mso-fareast-theme-font:minor-latin;mso-ansi-language:EN-US;mso-fareast-language:\r\nEN-US;mso-bidi-language:AR-SA">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Kamille Rose Alvarez a second-year BEED II-3\r\nstudent was proclaimed Miss Intramurals 2016.</span></p><p class="MsoNormal"><span lang="EN-US" style="font-size:12.0pt;mso-bidi-font-size:\r\n11.0pt;line-height:115%;font-family:&quot;Arial&quot;,sans-serif">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Together with other\r\ncollege muses, Alvarez showed her poise and elegance as she performed her best\r\nin their production number. She then set the crowd wild as she flaunts her\r\nbeauty and wowed the judges themselves on the opening of the 22nd CUP\r\nIntramurals at Cuneta Astrodome, September 13, 2016. In the end, Alvarez\r\nsurpasses the beauty of other candidates which made her the winner of Miss\r\nIntramurals, giving the College of Education a solid point that has been added\r\nto the colleges collaborative points. <o:p></o:p></span></p><p><span lang="EN-US" style="font-size:12.0pt;mso-bidi-font-size:\r\n11.0pt;line-height:115%;font-family:&quot;Arial&quot;,sans-serif;mso-fareast-font-family:\r\nCalibri;mso-fareast-theme-font:minor-latin;mso-ansi-language:EN-US;mso-fareast-language:\r\nEN-US;mso-bidi-language:AR-SA">\r\n\r\n<span lang="EN-US" style="font-size: 12pt; line-height: 115%;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; The College of\r\nEducation has been succesful for winning the title of Ms. Intramurals for three\r\nconsecutive years. Ms Paula Mabute, BEED III-I in 2014 and Ms. Jonalyn Loterte,\r\nBSE IV-II (Math) in 2015. With the success of every COEd muse, all female\r\nstudents from the College of Education are motivated to stay strong and\r\nbeautiful to vie for their athletic beauty title.</span><br></span></p>'),
(26, 'CUP Participates in Drug Awareness Program', 'Noel Gabio, BSE III-1 English', '2017-04-04', 'cup-participates-in-drug-awareness-program', '<p class="MsoNormal"><span lang="EN-US" style="font-size:12.0pt;mso-bidi-font-size:\r\n11.0pt;line-height:115%;font-family:&quot;Arial&quot;,sans-serif">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;With the theme "<i>Batang CUP: Droga ay labanan para sa\r\nKinabukasan"</i>, the City University of Pasay in cooperation with the\r\nCity Anti-Drug Council of Pasay successfully held the Drug Awareness Seminar\r\nsponsored by the Office of Student Affairs at Cuneta Astrodome September 9,\r\n2016.<o:p></o:p></span></p>\r\n\r\n<p class="MsoNormal"><span lang="EN-US" style="font-size:12.0pt;mso-bidi-font-size:\r\n11.0pt;line-height:115%;font-family:&quot;Arial&quot;,sans-serif">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; There were three (3) speakers who gave their lectures\r\nabout the adverse effects of harmful drugs to an individual, family and in the\r\nsociety.<o:p></o:p></span></p>\r\n\r\n<p class="MsoNormal"><span lang="EN-US" style="font-size:12.0pt;mso-bidi-font-size:\r\n11.0pt;line-height:115%;font-family:&quot;Arial&quot;,sans-serif">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; The highlight of this seminar was for the CUP students to\r\nbe aware and be fully informed of the perilous effects of drugs such as <i>Shabu, Marijuana, Cocaine </i>and <i>Ecstasy</i> which are now in tablet form and\r\nbeing patronized by party-goers.<o:p></o:p></span></p>\r\n\r\n<p class="MsoNormal"><span lang="EN-US" style="font-size:12.0pt;mso-bidi-font-size:\r\n11.0pt;line-height:115%;font-family:&quot;Arial&quot;,sans-serif">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Discussions were conducted about mental health, wherein\r\nthe persons who would engage themselves in these drugs learned their bad\r\neffects to one''s health, mentally and physically. The statistical research\r\nshowing the gradual decrease in the age of drug dependents in society as young\r\nas 14-15 year old teenager was also discussed. There are government agencies or\r\ninstitutions and associations that could help the young and adult drug\r\ndepndents to seek consultations and even rehabilitation. <o:p></o:p></span></p>\r\n\r\n<p class="MsoNormal" style="text-align:justify"><span lang="EN-US" style="font-size:12.0pt;mso-bidi-font-size:11.0pt;line-height:115%;font-family:\r\n&quot;Arial&quot;,sans-serif">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; The\r\nprogram was ended by the commendation of Dr. Rosanie F. Estuche, the Associate\r\nVice-President for Academic Affairs in her message, "<i>Let us celebrate a life without drugs!"</i><o:p></o:p></span></p>'),
(27, 'OSA conducts Leadership Training Seminar', 'Kassandra Ena E. Buenafe, BSE III-1 English', '2017-04-04', 'osa-conducts-leadership-training-seminar', '<p class="MsoNormal" style="text-align: justify;"><span lang="EN-US" style="font-size:12.0pt;mso-bidi-font-size:\r\n11.0pt;line-height:115%;font-family:&quot;Arial&quot;,sans-serif">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The Office of the\r\nStudent Affairs conducted the annual leadership training for college student\r\ncouncils and officers of recognized campus organizations last August 16, 2016\r\nat the Function Hall of Cuneta Astrodome.<o:p></o:p></span></p>\r\n\r\n<p class="MsoNormal" style="text-align: justify;"><span lang="EN-US" style="font-size:12.0pt;mso-bidi-font-size:\r\n11.0pt;line-height:115%;font-family:&quot;Arial&quot;,sans-serif">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; The seminar was organized by the Dean of the Office of\r\nStudent Affairs, Prof. Melvin M. Crisostomo who poured out all his hard work\r\nand time to make the said event successful. <o:p></o:p></span></p>\r\n\r\n<p class="MsoNormal" style="text-align: justify;"><span lang="EN-US" style="font-size:12.0pt;mso-bidi-font-size:\r\n11.0pt;line-height:115%;font-family:&quot;Arial&quot;,sans-serif">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; The seminar began with a prayer from the CSC President,\r\nMs. Reysie Ann Poblador. As the programme continued, the first resource\r\nspeaker, Dr. Estrellita Puti-an gave a very important message regarding Roles,\r\nResponsibilities and Practices in Handling Student Governance. Later on that\r\nday, the second resource speaker Prof. Eroll A. Beja discussed about the value\r\nof Leadership SAtrategies as student leaders. During the second half of the\r\nday, the next resource speaker, Dr. Maribel R. Gabuat discussed her lesson\r\nregarding Dynamic leadership, Communication and Influencing Style. It was then\r\nfollowed by the last resource speaker Prof. Marcos B. Geronga with his topic\r\nSolution Focused Coaching for Leaders.</span></p><p class="MsoNormal" style="text-align: justify;"><span lang="EN-US" style="font-size:12.0pt;mso-bidi-font-size:\r\n11.0pt;line-height:115%;font-family:&quot;Arial&quot;,sans-serif"><o:p></o:p></span></p>\r\n\r\n<span lang="EN-US" style="font-size:12.0pt;mso-bidi-font-size:11.0pt;line-height:\r\n115%;font-family:&quot;Arial&quot;,sans-serif;mso-fareast-font-family:Calibri;mso-fareast-theme-font:\r\nminor-latin;mso-ansi-language:EN-US;mso-fareast-language:EN-US;mso-bidi-language:\r\nAR-SA"><div style="text-align: justify;"><span style="font-size: 12pt;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</span><span style="font-size: 12pt;">As the day came to an\r\nend, the closing remarks was given by VPAd, Martin Elwood S. Rivera. The\r\ndifferent student leaders went home with plenty of knowledge in stock for their\r\nleadership roles.</span></div></span>'),
(28, 'English Circle showcases Spoken Word Poetry', 'Maria Theresa G. Salera, BSE III-1 English', '2017-04-04', 'english-circle-showcases-spoken-word-poetry', '<p class="MsoNormal" style="text-align: justify; "><span lang="EN-US" style="font-size:12.0pt;mso-bidi-font-size:\r\n11.0pt;line-height:115%;font-family:&quot;Arial&quot;,sans-serif">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;With the theme,\r\nEnglish: The Language of the Global Society, the English Circle initiated the\r\ncelebration of the English Week as they brought a new avenue of performing\r\narts-the Spoken Word Poetry on December 9, 2016 at the CUP Library.<o:p></o:p></span></p>\r\n\r\n<p class="MsoNormal" style="text-align: justify;"><span lang="EN-US" style="font-size:12.0pt;mso-bidi-font-size:\r\n11.0pt;line-height:115%;font-family:&quot;Arial&quot;,sans-serif">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Different students from the College of Education\r\nshowcased their talents in this art as they performed their very own piece. Before\r\nthe said program, the committee requested some professors to choose literary\r\npieces that they will read to the students. These professors gladly agreed and\r\nhappily read their chosen pieces before the audience. They were Dr. Lurida\r\nRamos, Dr. Rosalinda Llamas, Dr. Remedios Bal''Oro, Prof. Melvin Crisostomo,\r\nProf. Eroll Beja and Prof. Emmanuel Luna who showed their love and passion for\r\nthis art presentation.<o:p></o:p></span></p>\r\n\r\n<p class="MsoNormal" style="text-align: justify;"><span lang="EN-US" style="font-size:12.0pt;mso-bidi-font-size:\r\n11.0pt;line-height:115%;font-family:&quot;Arial&quot;,sans-serif">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; The Spoken Word Society is one of the highlights of the\r\ncelebration which is a contemporary way of expressive poetry performed in\r\ndifferent places like faces, restaurants and even in some schools. Nowadays,\r\nthis new trend inspires teenagers especially college students around Metro\r\nManila to write poems and to express themselves through this stage arts.<o:p></o:p></span></p>\r\n\r\n<p class="MsoNormal" style="text-align: justify; "><span lang="EN-US" style="font-size:12.0pt;mso-bidi-font-size:\r\n11.0pt;line-height:115%;font-family:&quot;Arial&quot;,sans-serif">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Overall, the event was done successfully with the efforts\r\nof the BSE IV-1 major in English. Dr. Rosalinda Llamas gave her closing remarks\r\nas she motivates each of the students specifically those budding writers to\r\nnever give up their dreams and continue their passion in writing.<o:p></o:p></span></p>'),
(29, 'Buwan ng Wika 2016 Celebrated', 'Ricarose C. Borromeo, BSE III-1 English', '2017-04-04', 'buwan-ng-wika-2016-celebrated', '<p class="MsoNormal" style="text-align: justify; "><span lang="EN-US" style="font-size:12.0pt;mso-bidi-font-size:\r\n11.0pt;line-height:115%;font-family:&quot;Arial&quot;,sans-serif">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The City University of\r\nPasay celebrated one of the most anticipated events among the students, the\r\n"Buwan ng Wika" or National Language Month from August 24-26 at the\r\nuniversity ground floor with the theme, <i>"Filipino:\r\nWika ng Karunungan."<o:p></o:p></i></span></p>\r\n\r\n<p class="MsoNormal" style="text-align: justify;"><i><span lang="EN-US" style="font-size:12.0pt;mso-bidi-font-size:11.0pt;line-height:115%;font-family:\r\n&quot;Arial&quot;,sans-serif">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></i><span lang="EN-US" style="font-size:12.0pt;mso-bidi-font-size:11.0pt;line-height:115%;\r\nfont-family:&quot;Arial&quot;,sans-serif">A mass was held on the first day of the said\r\nevent. It was then followed by the speeches from our beloved professors,\r\nProfessor Eligia T. Lopena the Filipino Adviser and Dr. Ana Marie V. Barbieto,\r\nthe College of Education, Dean. After that, the Filipino major students\r\nperformed a remarkable play of the most significant part of Ibong Adarna, Florante\r\nat Laura, El Filibusterismo and Noli Me Tangere. The second day was quite more\r\nexciting because of the different competitions like <i>Pagsulat ng Sanaysay</i>, <i>Masining\r\nPagkukwento</i> and <i>Sayawit</i>. The\r\nspeakers for that day were Dr. Concepcion C. Libuit -CUP President, Dr. Rosanie\r\nF. Estuche - Associate VP for Academics and Professor Erlinda R. Miranda -\r\nFilipino Professor. The search for Malakas and Maganda was the last event that\r\noccurred on the third day.<o:p></o:p></span></p>\r\n\r\n<p class="MsoNormal"><div style="text-align: justify;"><span style="font-family: Arial, sans-serif; font-size: 12pt;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</span><span style="font-family: Arial, sans-serif; font-size: 12pt;">Winners in the respective competitions were announced at\r\nthe latter part of the program.</span></div><span lang="EN-US" style="line-height: 115%;"><div style="text-align: justify;"><span style="font-family: Arial, sans-serif; font-size: 16px;"><br></span></div>\r\n<!--[if !supportLineBreakNewLine]-->\r\n<!--[endif]--><span style="font-family: Arial, sans-serif; font-size: 12pt;"><o:p></o:p></span></span></p>'),
(30, 'CUP holds 1st Organizational Fair', 'Danielle Joy L. Pugay, BSE III-1 English', '2017-04-04', 'cup-holds-1st-organizational-fair', '<p class="MsoNormal"><span lang="EN-US" style="font-size:12.0pt;mso-bidi-font-size:\r\n11.0pt;line-height:115%;font-family:&quot;Arial&quot;,sans-serif">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The City University of\r\nPasay begins another breakthrough as they officially held their very first\r\nOrganization Fair on July 14-15, 2016 which was done at the school grounds.<o:p></o:p></span></p>\r\n\r\n<p class="MsoNormal"><span lang="EN-US" style="font-size:12.0pt;mso-bidi-font-size:\r\n11.0pt;line-height:115%;font-family:&quot;Arial&quot;,sans-serif">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; With their hardworking effort and passion to make a\r\nchange, the different organizations within the university cooperatively made\r\nthis event possible. All with one goal: to discover and give each student a\r\nchance to be part of what they love most.<o:p></o:p></span></p>\r\n\r\n<p class="MsoNormal"><span lang="EN-US" style="font-size:12.0pt;mso-bidi-font-size:\r\n11.0pt;line-height:115%;font-family:&quot;Arial&quot;,sans-serif">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; On the first day, July 14, 2016, at exactly 9:00 in the\r\nmorning the event began. The opening message was given by the Associate VPAA\r\nDr. Rosanie F. Estuche followed by the CUP President Dr. Concepcion C. Libuit\r\nfor her inspirational message. After the special messages, the induction of\r\nofficers for every college and every organization was held, followed by the\r\nribbon cutting, then the official opening of each booth presented by the\r\ndifferent organizations. For the rest of the day and the following days (July\r\n15, 2016), all the students of the university were allowed to look into the\r\nbooths and join different organizations they were interested in.<o:p></o:p></span></p>\r\n\r\n<span lang="EN-US" style="font-size:12.0pt;mso-bidi-font-size:11.0pt;line-height:\r\n115%;font-family:&quot;Arial&quot;,sans-serif;mso-fareast-font-family:Calibri;mso-fareast-theme-font:\r\nminor-latin;mso-ansi-language:EN-US;mso-fareast-language:EN-US;mso-bidi-language:\r\nAR-SA">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Thus, this concludes\r\nthe very first organization fair for the City University of Pasay. What a pleasure\r\nit is to witness something new to be written down in the history of the\r\nuniversity.</span>'),
(31, 'CUP Celebrates CUPASKUHAN', 'Angeline Guerrero, BSE IV-1 English', '2017-04-04', 'cup-celebrates-cupaskuhan', '<p class="MsoNormal" style="text-align: justify; "><span lang="EN-US" style="font-size:12.0pt;mso-bidi-font-size:\r\n11.0pt;line-height:115%;font-family:&quot;Arial&quot;,sans-serif">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CUPaskuhan 2016, 3rd\r\nEdition, sponsored by the CUP Faculty Association held on December 7 at the\r\nCuneta Astrodome-Pasay, was the source of the great joy and excitement of the\r\nstudents, professors and guests present on the occasion. This significant\r\njoyous event was filled with important messages starting with the welcome\r\nremarks of Prof. Marcos B. Geronga, CUP Faculty Association President, followed\r\nby the message of Dr. Concepcion C. Libuit, CUP President.<o:p></o:p></span></p>\r\n\r\n<p class="MsoNormal" style="text-align: justify; "><span lang="EN-US" style="font-size:12.0pt;mso-bidi-font-size:\r\n11.0pt;line-height:115%;font-family:&quot;Arial&quot;,sans-serif">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Honorable Antonio G. Calixto, Pasay City Mayor gave an\r\ninspirational message. Ms. Jing del Rosario read the message of Hon. Noel del\r\nRosario, Vice Mayor of Pasay City. The message of Hon. Imelda C. Rubiano, Pasay\r\nCity Congresswoman was read by Mr. Luigi Rubiano. The Christmas message of\r\nCouncilor Mark Anthony Calixto was also read by Ms. Jing del Rosario.\r\nCouncilors Joey Isidro, Ricardo Santos, Edith Manguera, and former Councilor\r\nIan Vendivel representing Councilor Donna Vendivel gave their messages. <o:p></o:p></span></p>\r\n\r\n<p class="MsoNormal" style="text-align: justify;"><span lang="EN-US" style="font-size:12.0pt;mso-bidi-font-size:\r\n11.0pt;line-height:115%;font-family:&quot;Arial&quot;,sans-serif">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; The dome was filled with loud cheers as the deans and\r\nprofessors showcased their talents in dancing, singing, and acting. Students\r\ngave their best yells to show support to their respective colleges.<o:p></o:p></span></p>\r\n\r\n<p class="MsoNormal" style="text-align: justify;"><span lang="EN-US" style="font-size:12.0pt;mso-bidi-font-size:\r\n11.0pt;line-height:115%;font-family:&quot;Arial&quot;,sans-serif">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Added to the excitement of the students is the raffle\r\ndraw where cash prizes, tablets and cell phones were given. At the end of the\r\ncompetition, financial reward was handed to the winners: COEd Faculty, 3rd place;\r\nCOBA, 2nd place; Champion, the COACT Faculty. Financial reward was also given\r\nto the Chorale Competition winners: COEd, 3rd place; COBA, 2nd place and COACT,\r\n1st place.<o:p></o:p></span></p>\r\n\r\n<p class="MsoNormal" style="text-align: justify; "><span lang="EN-US" style="font-size:12.0pt;mso-bidi-font-size:\r\n11.0pt;line-height:115%;font-family:&quot;Arial&quot;,sans-serif">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 2016 CUPaskuhan 3rd edition left everyone the true value\r\nof joy and the genuine spirit of Christmas.<o:p></o:p></span></p>');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `salt` varchar(255) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `activation_code` varchar(40) DEFAULT NULL,
  `forgotten_password_code` varchar(40) DEFAULT NULL,
  `forgotten_password_time` int(11) UNSIGNED DEFAULT NULL,
  `remember_code` varchar(40) DEFAULT NULL,
  `created_on` int(11) UNSIGNED NOT NULL,
  `last_login` int(11) UNSIGNED DEFAULT NULL,
  `active` tinyint(1) UNSIGNED DEFAULT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `company` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `ip_address`, `username`, `password`, `salt`, `email`, `activation_code`, `forgotten_password_code`, `forgotten_password_time`, `remember_code`, `created_on`, `last_login`, `active`, `first_name`, `last_name`, `company`, `phone`) VALUES
(1, '127.0.0.1', 'administrator', '$2a$07$SeBknntpZror9uyftVopmu61qg0ms8Qv1yV6FG.kQOSM.9QhmTo36', '', 'admin@admin.com', '', NULL, NULL, NULL, 1268889823, 1491322618, 1, 'Admin', 'istrator', 'ADMIN', '0'),
(2, '::1', 'jack@gmail.com', '$2y$08$UEnOBhXdt0FTgWlEZvzuuODFJq.gVpUCGuZ43p.vfMH9pz7u6mYcG', NULL, 'jack@gmail.com', NULL, NULL, NULL, NULL, 1490968491, NULL, 1, 'ahrry', 'lober', 'compant name', '09123123'),
(3, '::1', 'asfasdfar', '$2y$08$GJVGIN6rKtd/dmG8tN/9oueyLVj2mWJj.nzNpuFytlic2b1.Kpf52', NULL, 'asfasdfar', NULL, NULL, NULL, NULL, 1490972030, NULL, 1, 'test', 'test', 'test', '12315135');

-- --------------------------------------------------------

--
-- Table structure for table `users_groups`
--

CREATE TABLE `users_groups` (
  `id` int(11) UNSIGNED NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `group_id` mediumint(8) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users_groups`
--

INSERT INTO `users_groups` (`id`, `user_id`, `group_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(4, 2, 3),
(5, 3, 2);

-- --------------------------------------------------------

--
-- Table structure for table `user_students`
--

CREATE TABLE `user_students` (
  `studentID` int(12) NOT NULL,
  `password` varchar(40) NOT NULL,
  `FirstName` varchar(20) NOT NULL,
  `MiddleName` varchar(20) NOT NULL,
  `LastName` varchar(15) NOT NULL,
  `Course` varchar(20) NOT NULL,
  `Year` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_students`
--

INSERT INTO `user_students` (`studentID`, `password`, `FirstName`, `MiddleName`, `LastName`, `Course`, `Year`) VALUES
(201300167, '$2y$10$Cp7vwj820VTeuo7lBPFWc.65DBjPeZVBy', 'Harry Angelo', 'Lareza', 'Soer', 'B.S.-I.T.', '45t');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ci_sessions`
--
ALTER TABLE `ci_sessions`
  ADD KEY `ci_sessions_timestamp` (`timestamp`);

--
-- Indexes for table `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `forum_comments`
--
ALTER TABLE `forum_comments`
  ADD PRIMARY KEY (`id_comments`);

--
-- Indexes for table `forum_posts`
--
ALTER TABLE `forum_posts`
  ADD PRIMARY KEY (`id_posts`);

--
-- Indexes for table `gallery_album`
--
ALTER TABLE `gallery_album`
  ADD PRIMARY KEY (`album_name`);

--
-- Indexes for table `gallery_images`
--
ALTER TABLE `gallery_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login_attempts`
--
ALTER TABLE `login_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`),
  ADD KEY `slug` (`slug`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users_groups`
--
ALTER TABLE `users_groups`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uc_users_groups` (`user_id`,`group_id`),
  ADD KEY `fk_users_groups_users1_idx` (`user_id`),
  ADD KEY `fk_users_groups_groups1_idx` (`group_id`);

--
-- Indexes for table `user_students`
--
ALTER TABLE `user_students`
  ADD PRIMARY KEY (`studentID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `files`
--
ALTER TABLE `files`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `forum_comments`
--
ALTER TABLE `forum_comments`
  MODIFY `id_comments` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `forum_posts`
--
ALTER TABLE `forum_posts`
  MODIFY `id_posts` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `gallery_images`
--
ALTER TABLE `gallery_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=143;
--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `login_attempts`
--
ALTER TABLE `login_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `users_groups`
--
ALTER TABLE `users_groups`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `users_groups`
--
ALTER TABLE `users_groups`
  ADD CONSTRAINT `fk_users_groups_groups1` FOREIGN KEY (`group_id`) REFERENCES `groups` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_users_groups_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
