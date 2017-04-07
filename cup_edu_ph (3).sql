-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 07, 2017 at 09:22 AM
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
('ua4hcj7b4e59vdvba33rqhh28efe0r5r', '::1', 1491535995, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439313533353939333b6964656e746974797c733a31353a2261646d696e4061646d696e2e636f6d223b656d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b757365725f69647c733a313a2231223b6f6c645f6c6173745f6c6f67696e7c733a31303a2231343931343932383433223b6c6173745f636865636b7c693a313439313532383636393b),
('n5qa87uvvfgupbu2d1ce4dgqcqo0ua5u', '::1', 1491536378, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439313533363337383b6964656e746974797c733a31353a2261646d696e4061646d696e2e636f6d223b656d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b757365725f69647c733a313a2231223b6f6c645f6c6173745f6c6f67696e7c733a31303a2231343931343932383433223b6c6173745f636865636b7c693a313439313532383636393b),
('rp07ths3j1k7q0s15kt3duh298j005l2', '::1', 1491538211, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439313533383231313b6964656e746974797c733a31353a2261646d696e4061646d696e2e636f6d223b656d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b757365725f69647c733a313a2231223b6f6c645f6c6173745f6c6f67696e7c733a31303a2231343931343932383433223b6c6173745f636865636b7c693a313439313532383636393b),
('09b4kule5fugrt16ijrnbaeh78u3r880', '::1', 1491539669, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439313533393636393b6964656e746974797c733a31353a2261646d696e4061646d696e2e636f6d223b656d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b757365725f69647c733a313a2231223b6f6c645f6c6173745f6c6f67696e7c733a31303a2231343931343932383433223b6c6173745f636865636b7c693a313439313532383636393b),
('s83lqj9901m1ar2nm0op3ekqbeqsg62h', '::1', 1491540910, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439313534303931303b6964656e746974797c733a31353a2261646d696e4061646d696e2e636f6d223b656d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b757365725f69647c733a313a2231223b6f6c645f6c6173745f6c6f67696e7c733a31303a2231343931343932383433223b6c6173745f636865636b7c693a313439313532383636393b),
('7d26mr7cufn26o6mabepc02u7krpm178', '::1', 1491540509, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439313534303530373b6964656e746974797c733a31353a2261646d696e4061646d696e2e636f6d223b656d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b757365725f69647c733a313a2231223b6f6c645f6c6173745f6c6f67696e7c733a31303a2231343931343932383433223b6c6173745f636865636b7c693a313439313532383636393b),
('mr031q1i948ng7fv8m7o2jel9vm5jktc', '::1', 1491541291, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439313534313239313b6964656e746974797c733a31353a2261646d696e4061646d696e2e636f6d223b656d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b757365725f69647c733a313a2231223b6f6c645f6c6173745f6c6f67696e7c733a31303a2231343931343932383433223b6c6173745f636865636b7c693a313439313532383636393b),
('ib0qnnpms3khku1kpli2p58ia1ue50rl', '::1', 1491541832, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439313534313833323b6964656e746974797c733a31353a2261646d696e4061646d696e2e636f6d223b656d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b757365725f69647c733a313a2231223b6f6c645f6c6173745f6c6f67696e7c733a31303a2231343931343932383433223b6c6173745f636865636b7c693a313439313532383636393b),
('jv9c0qk9o9gubuq0qjnakcabi82tnnri', '::1', 1491542206, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439313534323230363b6964656e746974797c733a31353a2261646d696e4061646d696e2e636f6d223b656d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b757365725f69647c733a313a2231223b6f6c645f6c6173745f6c6f67696e7c733a31303a2231343931343932383433223b6c6173745f636865636b7c693a313439313532383636393b),
('2m7um28baijj9n4no1gllvcdr5f5b6kj', '::1', 1491542530, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439313534323533303b6964656e746974797c733a31353a2261646d696e4061646d696e2e636f6d223b656d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b757365725f69647c733a313a2231223b6f6c645f6c6173745f6c6f67696e7c733a31303a2231343931343932383433223b6c6173745f636865636b7c693a313439313532383636393b),
('d2le5ue62ihda0vj3oq3fsus32odsp8g', '::1', 1491543181, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439313534333138313b6964656e746974797c733a31353a2261646d696e4061646d696e2e636f6d223b656d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b757365725f69647c733a313a2231223b6f6c645f6c6173745f6c6f67696e7c733a31303a2231343931343932383433223b6c6173745f636865636b7c693a313439313532383636393b),
('vphoa0fknu9m6pps7hjie2kh14cij2kn', '::1', 1491543482, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439313534333438323b6964656e746974797c733a31353a2261646d696e4061646d696e2e636f6d223b656d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b757365725f69647c733a313a2231223b6f6c645f6c6173745f6c6f67696e7c733a31303a2231343931343932383433223b6c6173745f636865636b7c693a313439313532383636393b),
('cevb31d8ji0pig60c6ekrjtl8uudukks', '::1', 1491543873, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439313534333837333b6964656e746974797c733a31353a2261646d696e4061646d696e2e636f6d223b656d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b757365725f69647c733a313a2231223b6f6c645f6c6173745f6c6f67696e7c733a31303a2231343931343932383433223b6c6173745f636865636b7c693a313439313532383636393b),
('ec6v1r7fd10r93tav5aaeelje2h1saed', '::1', 1491544247, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439313534343234373b6964656e746974797c733a31353a2261646d696e4061646d696e2e636f6d223b656d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b757365725f69647c733a313a2231223b6f6c645f6c6173745f6c6f67696e7c733a31303a2231343931343932383433223b6c6173745f636865636b7c693a313439313532383636393b),
('613vspjf2eqpjhqusd8i5heqeiub5tp0', '::1', 1491544599, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439313534343539393b6964656e746974797c733a31353a2261646d696e4061646d696e2e636f6d223b656d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b757365725f69647c733a313a2231223b6f6c645f6c6173745f6c6f67696e7c733a31303a2231343931343932383433223b6c6173745f636865636b7c693a313439313532383636393b),
('tjjiqnn9ppr9vq326o1lis5a5bdkfidc', '::1', 1491544933, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439313534343933333b6964656e746974797c733a31353a2261646d696e4061646d696e2e636f6d223b656d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b757365725f69647c733a313a2231223b6f6c645f6c6173745f6c6f67696e7c733a31303a2231343931343932383433223b6c6173745f636865636b7c693a313439313532383636393b),
('c8a10o54e0kdc7kuh7kdes5mo7vj3fmr', '::1', 1491545268, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439313534353236383b6964656e746974797c733a31353a2261646d696e4061646d696e2e636f6d223b656d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b757365725f69647c733a313a2231223b6f6c645f6c6173745f6c6f67696e7c733a31303a2231343931343932383433223b6c6173745f636865636b7c693a313439313532383636393b),
('90t15bo2s8t7lk7hks9733c4kvejntt7', '::1', 1491545640, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439313534353634303b6964656e746974797c733a31353a2261646d696e4061646d696e2e636f6d223b656d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b757365725f69647c733a313a2231223b6f6c645f6c6173745f6c6f67696e7c733a31303a2231343931343932383433223b6c6173745f636865636b7c693a313439313532383636393b),
('8biseg39d7bt32bsq8vhfsam1qtllf5q', '::1', 1491546183, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439313534363138333b6964656e746974797c733a31353a2261646d696e4061646d696e2e636f6d223b656d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b757365725f69647c733a313a2231223b6f6c645f6c6173745f6c6f67696e7c733a31303a2231343931343932383433223b6c6173745f636865636b7c693a313439313532383636393b),
('eama548flh0lgs955m8jmimu2vjaam8j', '::1', 1491546754, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439313534363735343b6964656e746974797c733a31353a2261646d696e4061646d696e2e636f6d223b656d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b757365725f69647c733a313a2231223b6f6c645f6c6173745f6c6f67696e7c733a31303a2231343931343932383433223b6c6173745f636865636b7c693a313439313532383636393b),
('aoiu5f37u4eaqqfud5vdcspe8kvcceps', '::1', 1491547138, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439313534373133383b6964656e746974797c733a31353a2261646d696e4061646d696e2e636f6d223b656d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b757365725f69647c733a313a2231223b6f6c645f6c6173745f6c6f67696e7c733a31303a2231343931343932383433223b6c6173745f636865636b7c693a313439313532383636393b),
('0ies1d9m79fi6t1kui1n9kb6u0l3k7u8', '::1', 1491548202, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439313534383230323b6964656e746974797c733a31353a2261646d696e4061646d696e2e636f6d223b656d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b757365725f69647c733a313a2231223b6f6c645f6c6173745f6c6f67696e7c733a31303a2231343931343932383433223b6c6173745f636865636b7c693a313439313532383636393b),
('vhf9ol5hcp075j5p9kari14slcbcp0gp', '::1', 1491548774, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439313534383737343b6964656e746974797c733a31353a2261646d696e4061646d696e2e636f6d223b656d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b757365725f69647c733a313a2231223b6f6c645f6c6173745f6c6f67696e7c733a31303a2231343931343932383433223b6c6173745f636865636b7c693a313439313532383636393b),
('ersi22td2en248ecos2aqd8k3da9u0n6', '::1', 1491549105, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439313534393130353b6964656e746974797c733a31353a2261646d696e4061646d696e2e636f6d223b656d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b757365725f69647c733a313a2231223b6f6c645f6c6173745f6c6f67696e7c733a31303a2231343931343932383433223b6c6173745f636865636b7c693a313439313532383636393b),
('nsakcrppacm1vsbb499knr8aur4r6b67', '::1', 1491549473, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439313534393437333b6964656e746974797c733a31353a2261646d696e4061646d696e2e636f6d223b656d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b757365725f69647c733a313a2231223b6f6c645f6c6173745f6c6f67696e7c733a31303a2231343931343932383433223b6c6173745f636865636b7c693a313439313532383636393b),
('e1rev3lg694r13jka7s3u0bvjkek1g5p', '::1', 1491549541, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439313534393437333b6964656e746974797c733a31353a2261646d696e4061646d696e2e636f6d223b656d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b757365725f69647c733a313a2231223b6f6c645f6c6173745f6c6f67696e7c733a31303a2231343931343932383433223b6c6173745f636865636b7c693a313439313532383636393b);

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
  `album_name` varchar(30) NOT NULL,
  `slug` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gallery_images`
--

INSERT INTO `gallery_images` (`id`, `file_name`, `album_name`, `slug`) VALUES
(274, '_DSC4953.JPG', ' CUP ', 'cup'),
(275, '_DSC4958.JPG', ' CUP ', 'cup'),
(276, '_DSC4965.JPG', ' CUP ', 'cup'),
(277, '_DSC5067.JPG', ' CUP ', 'cup'),
(278, '_DSC5277.JPG', ' CUP ', 'cup'),
(279, '_DSC6429.JPG', ' CUP ', 'cup'),
(280, '_DSC6433.JPG', ' CUP ', 'cup'),
(281, '_DSC6436.JPG', ' CUP ', 'cup'),
(282, '_DSC6438.JPG', ' CUP ', 'cup'),
(283, '_DSC6439.JPG', ' CUP ', 'cup'),
(284, '_DSC6443.JPG', ' CUP ', 'cup'),
(285, '_DSC6444.JPG', ' CUP ', 'cup'),
(286, '_DSC6445.JPG', ' CUP ', 'cup'),
(287, '_DSC6447.JPG', ' CUP ', 'cup'),
(288, '_DSC6446.JPG', ' CUP ', 'cup'),
(289, '_DSC6448.JPG', ' CUP ', 'cup'),
(290, '_DSC6452.JPG', ' CUP ', 'cup'),
(291, '_DSC6453.JPG', ' CUP ', 'cup'),
(292, '_DSC6456.JPG', ' CUP ', 'cup'),
(293, '_DSC6458.JPG', ' CUP ', 'cup'),
(294, '_DSC6466.JPG', ' CUP ', 'cup'),
(295, '_DSC6463.JPG', ' CUP ', 'cup'),
(296, '_DSC6467.JPG', ' CUP ', 'cup');

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
(33, 'CUP Celebrates CUPASKUHAN', 'Angeline Guerrero, BSE IV-1 English', '2017-04-06', 'cup-celebrates-cupaskuhan', '<p style="text-align: justify; ">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;<span style="font-family: Arial, sans-serif; font-size: 16px; text-align: justify;">CUPaskuhan 2016, 3rd Edition, sponsored by the CUP Faculty Association held on December 7 at the Cuneta Astrodome-Pasay, was the source of the great joy and excitement of the students, professors and guests present on the occasion. This significant joyous event was filled with important messages starting with the welcome remarks of Prof. Marcos B. Geronga, CUP Faculty Association President, followed by the message of Dr. Concepcion C. Libuit, CUP President.</span></p><p style="text-align: justify; ">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;<span style="font-family: Arial, sans-serif; font-size: 16px; text-align: justify;">Honorable Antonio G. Calixto, Pasay City Mayor gave an inspirational message. Ms. Jing del Rosario read the message of Hon. Noel del Rosario, Vice Mayor of Pasay City. The message of Hon. Imelda C. Rubiano, Pasay City Congresswoman was read by Mr. Luigi Rubiano. The Christmas message of Councilor Mark Anthony Calixto was also read by Ms. Jing del Rosario. Councilors Joey Isidro, Ricardo Santos, Edith Manguera, and former Councilor Ian Vendivel representing Councilor Donna Vendivel gave their messages.</span></p><p style="text-align: justify; ">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;<span style="font-family: Arial, sans-serif; font-size: 16px; text-align: justify;">The dome was filled with loud cheers as the deans and professors showcased their talents in dancing, singing, and acting. Students gave their best yells to show support to their respective colleges.</span></p><p style="text-align: justify; ">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;<span style="font-family: Arial, sans-serif; font-size: 16px; text-align: justify;">Added to the excitement of the students is the raffle draw where cash prizes, tablets and cell phones were given. At the end of the competition, financial reward was handed to the winners: COEd Faculty, 3rd place; COBA, 2nd place; Champion, the COACT Faculty. Financial reward was also given to the Chorale Competition winners: COEd, 3rd place; COBA, 2nd place and COACT, 1st place.</span></p><p><span style="font-family: Arial, sans-serif; font-size: 16px; text-align: justify;"><div style="text-align: justify;"><span style="font-family: Nunito, sans-serif; font-size: 14px;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</span>2016 CUPaskuhan 3rd edition left everyone the true value of joy and the genuine spirit of Christmas.</div></span></p>');

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
(1, '127.0.0.1', 'administrator', '$2a$07$SeBknntpZror9uyftVopmu61qg0ms8Qv1yV6FG.kQOSM.9QhmTo36', '', 'admin@admin.com', '', NULL, NULL, NULL, 1268889823, 1491528669, 1, 'Admin', 'istrator', 'ADMIN', '0'),
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=300;
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
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
