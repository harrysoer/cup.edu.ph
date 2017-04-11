-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 11, 2017 at 09:21 PM
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
('fkfc7uief6fhmlkvpkspdo62v3dbiunk', '::1', 1491876410, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439313837363431303b6964656e746974797c733a31353a2261646d696e4061646d696e2e636f6d223b656d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b757365725f69647c733a313a2231223b6f6c645f6c6173745f6c6f67696e7c733a31303a2231343931383237373635223b6c6173745f636865636b7c693a313439313837363136333b6d6573736167657c733a31313a2247726f7570205361766564223b5f5f63695f766172737c613a313a7b733a373a226d657373616765223b733a333a226f6c64223b7d),
('7rujr031feroh0e0tbq2c9qqdmjpm7ec', '::1', 1491877196, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439313837373139363b6d6573736167657c733a32323a223c703e496e636f7272656374204c6f67696e3c2f703e223b5f5f63695f766172737c613a313a7b733a373a226d657373616765223b733a333a226f6c64223b7d),
('uth6vos1kaevtfmgd9hn3ouo6po81919', '::1', 1491877921, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439313837373932313b6964656e746974797c733a31353a2261646d696e4061646d696e2e636f6d223b656d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b757365725f69647c733a313a2231223b6f6c645f6c6173745f6c6f67696e7c733a31303a2231343931383737323435223b6c6173745f636865636b7c693a313439313837373239383b),
('i1tfmmgvtl76h4oua58l18jqn2b1snvi', '::1', 1491878503, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439313837383530333b6964656e746974797c733a31353a2261646d696e4061646d696e2e636f6d223b656d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b757365725f69647c733a313a2231223b6f6c645f6c6173745f6c6f67696e7c733a31303a2231343931383738313735223b6c6173745f636865636b7c693a313439313837383231353b),
('c2diel368085uav133o76h9d13fp41go', '::1', 1491881960, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439313838313936303b),
('onl65jj2r47eubc6d65aed1g6kqk2jtp', '::1', 1491882147, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439313838313936303b6964656e746974797c733a31353a2261646d696e4061646d696e2e636f6d223b656d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b757365725f69647c733a313a2231223b6f6c645f6c6173745f6c6f67696e7c733a31303a2231343931383738323135223b6c6173745f636865636b7c693a313439313838313937313b),
('1fdon6nuste1ac9aku6g9tu7mtnf9l9m', '::1', 1491882204, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439313838323230343b),
('or556c2vfeujas0ak503ops8053tafq7', '::1', 1491884812, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439313838343831323b),
('1arm4qnrngadge5hn56gtd5f0tce0h9q', '::1', 1491885068, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439313838343737353b),
('jre6gpa1fj5mt8ab9loe93ih8uqtnopj', '::1', 1491885278, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439313838353237383b),
('ks8ll2bdvkr6gu4akmd7nfknncttr3ke', '::1', 1491890851, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439313839303835313b6964656e746974797c733a31353a2261646d696e4061646d696e2e636f6d223b656d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b757365725f69647c733a313a2231223b6f6c645f6c6173745f6c6f67696e7c733a31303a2231343931383831393731223b6c6173745f636865636b7c693a313439313838353239363b),
('58nco7rmknvtjup6d8ocfpik9r6p2s9p', '::1', 1491890872, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439313839303835313b6964656e746974797c733a31353a2261646d696e4061646d696e2e636f6d223b656d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b757365725f69647c733a313a2231223b6f6c645f6c6173745f6c6f67696e7c733a31303a2231343931383831393731223b6c6173745f636865636b7c693a313439313838353239363b),
('gsmd6k7o6hm9a28dai8t7lbnntamarrl', '::1', 1491904724, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439313930343732343b6964656e746974797c733a31353a2261646d696e4061646d696e2e636f6d223b656d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b757365725f69647c733a313a2231223b6f6c645f6c6173745f6c6f67696e7c733a31303a2231343931383835323936223b6c6173745f636865636b7c693a313439313839393835333b),
('7nikhceh39humb4ugprcr291pvtc0bti', '::1', 1491905830, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439313930353833303b6964656e746974797c733a31353a2261646d696e4061646d696e2e636f6d223b656d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b757365725f69647c733a313a2231223b6f6c645f6c6173745f6c6f67696e7c733a31303a2231343931383835323936223b6c6173745f636865636b7c693a313439313839393835333b637372666b65797c733a383a224c4e564239645072223b5f5f63695f766172737c613a323a7b733a373a22637372666b6579223b733a333a226e6577223b733a393a226373726676616c7565223b733a333a226e6577223b7d6373726676616c75657c733a32303a22694e504f4144337259796b313676463973714757223b),
('r2cjrb957421fgc2egjg6rjqt6d3kel4', '::1', 1491908135, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439313930383133353b6964656e746974797c733a31353a2261646d696e4061646d696e2e636f6d223b656d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b757365725f69647c733a313a2231223b6f6c645f6c6173745f6c6f67696e7c733a31303a2231343931393036303038223b6c6173745f636865636b7c693a313439313930363233303b637372666b65797c733a383a224357495650317377223b5f5f63695f766172737c613a323a7b733a373a22637372666b6579223b733a333a226e6577223b733a393a226373726676616c7565223b733a333a226e6577223b7d6373726676616c75657c733a32303a22574132435253684f5a54796d6569584451477756223b),
('q2j763ebdk69sa7ok389t4v7lpcvjvai', '::1', 1491908143, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439313930383133353b6964656e746974797c733a31353a2261646d696e4061646d696e2e636f6d223b656d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b757365725f69647c733a313a2231223b6f6c645f6c6173745f6c6f67696e7c733a31303a2231343931393036303038223b6c6173745f636865636b7c693a313439313930363233303b),
('0c91el7mjp4k2ffmd59j8uqkpueoru22', '::1', 1491916161, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439313931363136313b6964656e746974797c733a31353a2261646d696e4061646d696e2e636f6d223b656d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b757365725f69647c733a313a2231223b6f6c645f6c6173745f6c6f67696e7c733a31303a2231343931393036323330223b6c6173745f636865636b7c693a313439313931353736393b),
('sjiqdr7j357039esgohpk5d0vrt6hv0f', '::1', 1491916708, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439313931363730383b6964656e746974797c733a31353a2261646d696e4061646d696e2e636f6d223b656d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b757365725f69647c733a313a2231223b6f6c645f6c6173745f6c6f67696e7c733a31303a2231343931393135373639223b6c6173745f636865636b7c693a313439313931363137353b),
('0ibatd5a4ar0l0lqvsd47a8nl1kgirg6', '::1', 1491918154, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439313931383135343b),
('d0jkve7flijguh8nfblmsj2fl27aune8', '::1', 1491920060, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439313932303036303b6964656e746974797c733a31353a2261646d696e4061646d696e2e636f6d223b656d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b757365725f69647c733a313a2231223b6f6c645f6c6173745f6c6f67696e7c733a31303a2231343931393137323037223b6c6173745f636865636b7c693a313439313931383237303b66697273745f6e616d657c733a383a22565041412044722e223b6c6173745f6e616d657c733a373a2245737475636865223b),
('kjeefcmt3m9gr19ru3qfc8ehti67bv9r', '::1', 1491926178, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439313932363137383b6964656e746974797c733a31353a2261646d696e4061646d696e2e636f6d223b656d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b757365725f69647c733a313a2231223b6f6c645f6c6173745f6c6f67696e7c733a31303a2231343931393137323037223b6c6173745f636865636b7c693a313439313931383237303b66697273745f6e616d657c733a383a22565041412044722e223b6c6173745f6e616d657c733a373a2245737475636865223b),
('b2kvi56enfi01p8gm537rhut30007jbl', '::1', 1491927259, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439313932373235393b6964656e746974797c733a31353a2261646d696e4061646d696e2e636f6d223b656d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b757365725f69647c733a313a2231223b6f6c645f6c6173745f6c6f67696e7c733a31303a2231343931393137323037223b6c6173745f636865636b7c693a313439313931383237303b66697273745f6e616d657c733a383a22565041412044722e223b6c6173745f6e616d657c733a373a2245737475636865223b),
('rmpep46po0sm2p1852dvvca6os2pbj31', '::1', 1491928320, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439313932383332303b6964656e746974797c733a31353a2261646d696e4061646d696e2e636f6d223b656d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b757365725f69647c733a313a2231223b6f6c645f6c6173745f6c6f67696e7c733a31303a2231343931393137323037223b6c6173745f636865636b7c693a313439313931383237303b66697273745f6e616d657c733a383a22565041412044722e223b6c6173745f6e616d657c733a373a2245737475636865223b),
('higl2f3klsoahl26uvrrjbahecejrlv8', '::1', 1491928696, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439313932383639363b6964656e746974797c733a31353a2261646d696e4061646d696e2e636f6d223b656d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b757365725f69647c733a313a2231223b6f6c645f6c6173745f6c6f67696e7c733a31303a2231343931393137323037223b6c6173745f636865636b7c693a313439313931383237303b66697273745f6e616d657c733a383a22565041412044722e223b6c6173745f6e616d657c733a373a2245737475636865223b),
('1ko95cvmgb4md72s0sb3nea5kugm4a7q', '::1', 1491929699, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439313932393639393b6964656e746974797c733a31353a2261646d696e4061646d696e2e636f6d223b656d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b757365725f69647c733a313a2231223b6f6c645f6c6173745f6c6f67696e7c733a31303a2231343931393137323037223b6c6173745f636865636b7c693a313439313931383237303b66697273745f6e616d657c733a383a22565041412044722e223b6c6173745f6e616d657c733a373a2245737475636865223b),
('e7vo4j09m72fb22l8htm6gt5fmtaov54', '::1', 1491930505, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439313933303530353b6964656e746974797c733a31353a2261646d696e4061646d696e2e636f6d223b656d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b757365725f69647c733a313a2231223b6f6c645f6c6173745f6c6f67696e7c733a31303a2231343931393137323037223b6c6173745f636865636b7c693a313439313931383237303b66697273745f6e616d657c733a383a22565041412044722e223b6c6173745f6e616d657c733a373a2245737475636865223b),
('mu9dk905l3mf1dbaoei3c97o60vgokk0', '::1', 1491931064, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439313933313036343b6964656e746974797c733a31353a2261646d696e4061646d696e2e636f6d223b656d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b757365725f69647c733a313a2231223b6f6c645f6c6173745f6c6f67696e7c733a31303a2231343931393137323037223b6c6173745f636865636b7c693a313439313931383237303b66697273745f6e616d657c733a383a22565041412044722e223b6c6173745f6e616d657c733a373a2245737475636865223b),
('6n3nsif3t7t1c2pskin7d82rk712kqc4', '::1', 1491931378, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439313933313337383b6964656e746974797c733a31353a2261646d696e4061646d696e2e636f6d223b656d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b757365725f69647c733a313a2231223b6f6c645f6c6173745f6c6f67696e7c733a31303a2231343931393137323037223b6c6173745f636865636b7c693a313439313931383237303b66697273745f6e616d657c733a383a22565041412044722e223b6c6173745f6e616d657c733a373a2245737475636865223b),
('n770r4su4afupeiad86ntp4lb8ntunsi', '::1', 1491931774, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439313933313737343b6964656e746974797c733a31353a2261646d696e4061646d696e2e636f6d223b656d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b757365725f69647c733a313a2231223b6f6c645f6c6173745f6c6f67696e7c733a31303a2231343931393137323037223b6c6173745f636865636b7c693a313439313931383237303b66697273745f6e616d657c733a383a22565041412044722e223b6c6173745f6e616d657c733a373a2245737475636865223b),
('a0shhcc9q8glt7imjq5kvunhg2dg0m9r', '::1', 1491932146, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439313933323134363b6964656e746974797c733a31353a2261646d696e4061646d696e2e636f6d223b656d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b757365725f69647c733a313a2231223b6f6c645f6c6173745f6c6f67696e7c733a31303a2231343931393137323037223b6c6173745f636865636b7c693a313439313931383237303b66697273745f6e616d657c733a383a22565041412044722e223b6c6173745f6e616d657c733a373a2245737475636865223b),
('kdq316ij4pkkkl877f5087kq0l4oguvf', '::1', 1491932492, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439313933323439323b6964656e746974797c733a31353a2261646d696e4061646d696e2e636f6d223b656d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b757365725f69647c733a313a2231223b6f6c645f6c6173745f6c6f67696e7c733a31303a2231343931393137323037223b6c6173745f636865636b7c693a313439313931383237303b66697273745f6e616d657c733a383a22565041412044722e223b6c6173745f6e616d657c733a373a2245737475636865223b),
('0kams77bqruudsc9k2qt5ptk1t73kmt7', '::1', 1491932807, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439313933323830373b6964656e746974797c733a31353a2261646d696e4061646d696e2e636f6d223b656d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b757365725f69647c733a313a2231223b6f6c645f6c6173745f6c6f67696e7c733a31303a2231343931393137323037223b6c6173745f636865636b7c693a313439313931383237303b66697273745f6e616d657c733a383a22565041412044722e223b6c6173745f6e616d657c733a373a2245737475636865223b),
('9sp13qjqcboc69ujuqe3alc003vnb6nf', '::1', 1491933122, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439313933333132323b6964656e746974797c733a31353a2261646d696e4061646d696e2e636f6d223b656d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b757365725f69647c733a313a2231223b6f6c645f6c6173745f6c6f67696e7c733a31303a2231343931393137323037223b6c6173745f636865636b7c693a313439313931383237303b66697273745f6e616d657c733a383a22565041412044722e223b6c6173745f6e616d657c733a373a2245737475636865223b),
('qv4lvpm1s17naiqm2ej04sa49iaibu00', '::1', 1491933545, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439313933333534353b6964656e746974797c733a31353a2261646d696e4061646d696e2e636f6d223b656d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b757365725f69647c733a313a2231223b6f6c645f6c6173745f6c6f67696e7c733a31303a2231343931393137323037223b6c6173745f636865636b7c693a313439313931383237303b66697273745f6e616d657c733a383a22565041412044722e223b6c6173745f6e616d657c733a373a2245737475636865223b),
('mad9om63bno6cldvothoplj40jooubg1', '::1', 1491934001, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439313933343030313b6964656e746974797c733a31353a2261646d696e4061646d696e2e636f6d223b656d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b757365725f69647c733a313a2231223b6f6c645f6c6173745f6c6f67696e7c733a31303a2231343931393137323037223b6c6173745f636865636b7c693a313439313931383237303b66697273745f6e616d657c733a383a22565041412044722e223b6c6173745f6e616d657c733a373a2245737475636865223b),
('3s98be45e9ptkbku458dd2h57q099p3m', '::1', 1491934352, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439313933343335323b6964656e746974797c733a31353a2261646d696e4061646d696e2e636f6d223b656d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b757365725f69647c733a313a2231223b6f6c645f6c6173745f6c6f67696e7c733a31303a2231343931393137323037223b6c6173745f636865636b7c693a313439313931383237303b66697273745f6e616d657c733a383a22565041412044722e223b6c6173745f6e616d657c733a373a2245737475636865223b),
('t30ol6vpt8tt6pd7i1amsupi8l2ovr74', '::1', 1491934687, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439313933343638373b6964656e746974797c733a31353a2261646d696e4061646d696e2e636f6d223b656d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b757365725f69647c733a313a2231223b6f6c645f6c6173745f6c6f67696e7c733a31303a2231343931393137323037223b6c6173745f636865636b7c693a313439313931383237303b66697273745f6e616d657c733a383a22565041412044722e223b6c6173745f6e616d657c733a373a2245737475636865223b),
('jrc493i16r8oj57mje30hhinee3lup9u', '::1', 1491935016, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439313933353031363b6964656e746974797c733a31353a2261646d696e4061646d696e2e636f6d223b656d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b757365725f69647c733a313a2231223b6f6c645f6c6173745f6c6f67696e7c733a31303a2231343931393137323037223b6c6173745f636865636b7c693a313439313931383237303b66697273745f6e616d657c733a383a22565041412044722e223b6c6173745f6e616d657c733a373a2245737475636865223b),
('frnesv8a1hucvhd2lchi37qoeb7aqch0', '::1', 1491935391, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439313933353339313b6964656e746974797c733a31353a2261646d696e4061646d696e2e636f6d223b656d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b757365725f69647c733a313a2231223b6f6c645f6c6173745f6c6f67696e7c733a31303a2231343931393137323037223b6c6173745f636865636b7c693a313439313931383237303b66697273745f6e616d657c733a383a22565041412044722e223b6c6173745f6e616d657c733a373a2245737475636865223b),
('uuelujknjqe6joc1rqt4gd29qpfov15k', '::1', 1491935719, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439313933353731393b6964656e746974797c733a31353a2261646d696e4061646d696e2e636f6d223b656d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b757365725f69647c733a313a2231223b6f6c645f6c6173745f6c6f67696e7c733a31303a2231343931393137323037223b6c6173745f636865636b7c693a313439313931383237303b66697273745f6e616d657c733a383a22565041412044722e223b6c6173745f6e616d657c733a373a2245737475636865223b),
('d27d2c76350lo3e724dhgbhoqek3chrb', '::1', 1491936359, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439313933363335393b6964656e746974797c733a32303a22746573745f656d61696c40656d61696c2e636f6d223b656d61696c7c733a32303a22746573745f656d61696c40656d61696c2e636f6d223b757365725f69647c733a313a2235223b6f6c645f6c6173745f6c6f67696e7c733a31303a2231343931393137323535223b6c6173745f636865636b7c693a313439313933363134373b66697273745f6e616d657c733a31343a2266697273742070616e67616c616e223b6c6173745f6e616d657c733a363a22536f626f6572223b),
('g9g83d3jcddsitnnv6qf3o7l5nqkv174', '::1', 1491937093, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439313933373039333b6964656e746974797c733a31353a2261646d696e4061646d696e2e636f6d223b656d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b757365725f69647c733a313a2231223b6f6c645f6c6173745f6c6f67696e7c733a31303a2231343931393138323730223b6c6173745f636865636b7c693a313439313933363438383b),
('7r9m0gu8529fsj7dbtmpf179tulvd84q', '::1', 1491937426, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439313933373432363b6964656e746974797c733a31353a2261646d696e4061646d696e2e636f6d223b656d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b757365725f69647c733a313a2231223b6f6c645f6c6173745f6c6f67696e7c733a31303a2231343931393138323730223b6c6173745f636865636b7c693a313439313933363438383b),
('oj9uohtviosjj7guho7gssp4be8ie82f', '::1', 1491937786, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439313933373738363b6964656e746974797c733a31353a2261646d696e4061646d696e2e636f6d223b656d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b757365725f69647c733a313a2231223b6f6c645f6c6173745f6c6f67696e7c733a31303a2231343931393138323730223b6c6173745f636865636b7c693a313439313933363438383b),
('0lp615abh6cpcioggjq6koioq5t47pho', '::1', 1491938123, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439313933383132333b6964656e746974797c733a31353a2261646d696e4061646d696e2e636f6d223b656d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b757365725f69647c733a313a2231223b6f6c645f6c6173745f6c6f67696e7c733a31303a2231343931393138323730223b6c6173745f636865636b7c693a313439313933363438383b),
('ipdc063ago5n70vkh7jtrd4egv5csg3l', '::1', 1491938424, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439313933383432343b6964656e746974797c733a31353a2261646d696e4061646d696e2e636f6d223b656d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b757365725f69647c733a313a2231223b6f6c645f6c6173745f6c6f67696e7c733a31303a2231343931393138323730223b6c6173745f636865636b7c693a313439313933363438383b),
('drfgs330pins337qk8nf6eee0kkam701', '::1', 1491938424, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439313933383432343b6964656e746974797c733a31353a2261646d696e4061646d696e2e636f6d223b656d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b757365725f69647c733a313a2231223b6f6c645f6c6173745f6c6f67696e7c733a31303a2231343931393138323730223b6c6173745f636865636b7c693a313439313933363438383b);

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
  `dates` date NOT NULL,
  `time` time NOT NULL,
  `text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `forum_comments`
--

INSERT INTO `forum_comments` (`id_comments`, `id_post`, `author`, `dates`, `time`, `text`) VALUES
(1, 1, 'VPAA Dr. Estuche', '2017-04-11', '00:00:00', 'texst'),
(2, 1, 'first pangalan Soboer', '2017-04-11', '00:00:00', 'maybe you can try my suggestion'),
(3, 2, ' Harry', '2017-04-11', '00:00:00', 'I guess you could always search on the deepweb part. Google.com doesn''t work like that, ofcourse google is trying to be a family friendly platform website. Try installing tor browser in you computer, there''s a lot of tutorials on the deepweb which can be only accessed using the tor browser');

-- --------------------------------------------------------

--
-- Table structure for table `forum_posts`
--

CREATE TABLE `forum_posts` (
  `id_posts` int(11) NOT NULL,
  `title` text NOT NULL,
  `text` text NOT NULL,
  `author` varchar(25) NOT NULL,
  `dates` date NOT NULL,
  `time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `forum_posts`
--

INSERT INTO `forum_posts` (`id_posts`, `title`, `text`, `author`, `dates`, `time`) VALUES
(1, 'Lorem Ipsum?', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'VPAA Dr. Estuche', '2017-04-11', '00:00:00'),
(2, 'Can I kill myself just for fun?', 'I want to kill my self in a very easy and painless way, does any one have a link for any available tutorial? I can''t find anything on google. please help me', 'first pangalan Soboer', '2017-04-11', '00:00:00'),
(3, 'Today is the day', 'Today is the day where We will kill ourselves. Join us on this event we will give free kool aid juice with bleach flavor. This event will blow your mind like you are the star', ' ', '2017-04-11', '09:16:54');

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
(284, '_DSC6443.JPG', ' CUP ', 'cup'),
(285, '_DSC6444.JPG', ' CUP ', 'cup'),
(286, '_DSC6445.JPG', ' CUP ', 'cup'),
(287, '_DSC6447.JPG', ' CUP ', 'cup'),
(288, '_DSC6446.JPG', ' CUP ', 'cup'),
(289, '_DSC6448.JPG', ' CUP ', 'cup'),
(290, '_DSC6452.JPG', ' CUP ', 'cup'),
(291, '_DSC6453.JPG', ' CUP ', 'cup'),
(292, '_DSC6456.JPG', ' CUP ', 'cup');

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
(3, 'ceit', 'computer'),
(4, 'Deans_Office', 'Deans_Office'),
(5, 'Student', 'Students'),
(6, 'Professor', 'Professors');

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
-- Table structure for table `school_years`
--

CREATE TABLE `school_years` (
  `id` int(11) NOT NULL,
  `school_year` varchar(10) NOT NULL,
  `sem` varchar(5) NOT NULL,
  `active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `school_years`
--

INSERT INTO `school_years` (`id`, `school_year`, `sem`, `active`) VALUES
(3, '2012-2013', '1st', 0),
(4, '2015-2016', '1st', 1);

-- --------------------------------------------------------

--
-- Table structure for table `students_informations`
--

CREATE TABLE `students_informations` (
  `id` int(10) NOT NULL,
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `middle_initial` varchar(5) NOT NULL,
  `course` varchar(50) NOT NULL,
  `year` varchar(10) NOT NULL,
  `section` varchar(10) NOT NULL,
  `status` varchar(15) NOT NULL,
  `enrolled` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students_informations`
--

INSERT INTO `students_informations` (`id`, `first_name`, `last_name`, `middle_initial`, `course`, `year`, `section`, `status`, `enrolled`) VALUES
(201700001, 'Harry Angelo', 'Soer', 'L.', 'B.S. - Information Technology', '4th', '13A', 'regular', 1);

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
(1, '127.0.0.1', 'administrator', '$2a$07$SeBknntpZror9uyftVopmu61qg0ms8Qv1yV6FG.kQOSM.9QhmTo36', '', 'admin@admin.com', '', NULL, NULL, NULL, 1268889823, 1491936488, 1, 'VPAA Dr.', 'Estuche', 'ADMIN', '0'),
(2, '::1', 'jack@gmail.com', '$2y$08$UEnOBhXdt0FTgWlEZvzuuODFJq.gVpUCGuZ43p.vfMH9pz7u6mYcG', NULL, 'jack@gmail.com', NULL, NULL, NULL, NULL, 1490968491, NULL, 1, 'ahrry', 'lober', 'compant name', '09123123'),
(3, '::1', 'asfasdfar', '$2y$08$GJVGIN6rKtd/dmG8tN/9oueyLVj2mWJj.nzNpuFytlic2b1.Kpf52', NULL, 'asfasdfar', NULL, NULL, NULL, NULL, 1490972030, NULL, 1, 'test', 'test', 'test', '12315135'),
(5, '::1', 'test_email@email.com', '$2y$08$df6pMOX1mXla7uN8s/kl5eZUzPKEO5kQFSywa6i9Qd2q9.L4Ak0wO', NULL, 'test_email@email.com', NULL, NULL, NULL, NULL, 1491878503, 1491936147, 1, 'first pangalan', 'Soboer', 'none', '123414141');

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
(14, 1, 1),
(4, 2, 3),
(5, 3, 2),
(16, 5, 1),
(17, 5, 2);

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
-- Indexes for table `school_years`
--
ALTER TABLE `school_years`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students_informations`
--
ALTER TABLE `students_informations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

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
  MODIFY `id_comments` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `forum_posts`
--
ALTER TABLE `forum_posts`
  MODIFY `id_posts` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `gallery_images`
--
ALTER TABLE `gallery_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=300;
--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
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
-- AUTO_INCREMENT for table `school_years`
--
ALTER TABLE `school_years`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `users_groups`
--
ALTER TABLE `users_groups`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
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
