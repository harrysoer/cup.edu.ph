-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 16, 2017 at 07:32 PM
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
('tdhic8p0pbhcsa2pv0961v15tbpen184', '192.168.254.14', 1494632850, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439343633323835303b6964656e746974797c733a32323a2268617272795f736f6572406578616d706c652e636f6d223b656d61696c7c733a32323a2268617272795f736f6572406578616d706c652e636f6d223b757365725f69647c733a323a223138223b6f6c645f6c6173745f6c6f67696e7c733a31303a2231343934363234383035223b6c6173745f636865636b7c693a313439343632343836343b66697273745f6e616d657c733a31323a22486172727920416e67656c6f223b6c6173745f6e616d657c733a343a22536f6572223b636f6c6c6567655f646570747c733a33343a22436f6c6c656765206f6620427573696e6573732041646d696e697374726174696f6e223b7363686f6f6c5f796561727c733a393a22323031352d32303136223b73656d7c733a333a22317374223b),
('4mjbcm9b9urgbohumiv9b4647rbogiok', '192.168.254.4', 1494632844, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439343633323834343b6964656e746974797c733a31343a2263617374696c6c6f6e5f636f6e6d223b656d61696c7c733a31343a2263617374696c6c6f6e5f636f6e6d223b757365725f69647c733a323a223236223b6f6c645f6c6173745f6c6f67696e7c733a31303a2231343934363330313138223b6c6173745f636865636b7c693a313439343633323535313b66697273745f6e616d657c733a343a2249726973223b6c6173745f6e616d657c733a393a2243617374696c6c6f6e223b636f6c6c6567655f646570747c733a33323a22436f6c6c656765206f66204e757273696e6720616e64204d6964776966657279223b7363686f6f6c5f796561727c733a393a22323031352d32303136223b73656d7c733a333a22317374223b),
('bos08t1thlu4jsj6s8orhd5kaq2mlmbo', '192.168.254.14', 1494633302, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439343633333330323b6964656e746974797c733a32323a2268617272795f736f6572406578616d706c652e636f6d223b656d61696c7c733a32323a2268617272795f736f6572406578616d706c652e636f6d223b757365725f69647c733a323a223138223b6f6c645f6c6173745f6c6f67696e7c733a31303a2231343934363234383035223b6c6173745f636865636b7c693a313439343632343836343b66697273745f6e616d657c733a31323a22486172727920416e67656c6f223b6c6173745f6e616d657c733a343a22536f6572223b636f6c6c6567655f646570747c733a33343a22436f6c6c656765206f6620427573696e6573732041646d696e697374726174696f6e223b7363686f6f6c5f796561727c733a393a22323031352d32303136223b73656d7c733a333a22317374223b),
('4vanifup1i7k4s2gcf7rgk7quojjcfk0', '192.168.254.4', 1494633319, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439343633333331393b6964656e746974797c733a31333a22626172626569746f5f636f6564223b656d61696c7c733a31333a22626172626569746f5f636f6564223b757365725f69647c733a323a223234223b6f6c645f6c6173745f6c6f67696e7c733a31303a2231343934363332323136223b6c6173745f636865636b7c693a313439343633323932353b66697273745f6e616d657c733a393a22416e61204d61726961223b6c6173745f6e616d657c733a383a22426172626569746f223b636f6c6c6567655f646570747c733a32303a22436f6c6c656765206f6620456475636174696f6e223b7363686f6f6c5f796561727c733a393a22323031352d32303136223b73656d7c733a333a22317374223b),
('ip686pmeephsrm729pf2i7eicso8vafk', '192.168.254.14', 1494633630, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439343633333633303b6964656e746974797c733a32323a2268617272795f736f6572406578616d706c652e636f6d223b656d61696c7c733a32323a2268617272795f736f6572406578616d706c652e636f6d223b757365725f69647c733a323a223138223b6f6c645f6c6173745f6c6f67696e7c733a31303a2231343934363234383035223b6c6173745f636865636b7c693a313439343632343836343b66697273745f6e616d657c733a31323a22486172727920416e67656c6f223b6c6173745f6e616d657c733a343a22536f6572223b636f6c6c6567655f646570747c733a33343a22436f6c6c656765206f6620427573696e6573732041646d696e697374726174696f6e223b7363686f6f6c5f796561727c733a393a22323031352d32303136223b73656d7c733a333a22317374223b),
('mncsc9kda9uokqh6uv5kq156cgcvkr71', '192.168.254.14', 1494634434, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439343633343433343b6964656e746974797c733a32323a2268617272795f736f6572406578616d706c652e636f6d223b656d61696c7c733a32323a2268617272795f736f6572406578616d706c652e636f6d223b757365725f69647c733a323a223138223b6f6c645f6c6173745f6c6f67696e7c733a31303a2231343934363234383035223b6c6173745f636865636b7c693a313439343632343836343b66697273745f6e616d657c733a31323a22486172727920416e67656c6f223b6c6173745f6e616d657c733a343a22536f6572223b636f6c6c6567655f646570747c733a33343a22436f6c6c656765206f6620427573696e6573732041646d696e697374726174696f6e223b7363686f6f6c5f796561727c733a393a22323031352d32303136223b73656d7c733a333a22317374223b),
('nakl5utgkeb2cntrm68qnjd4lmng9nae', '192.168.254.4', 1494634021, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439343633343032313b6964656e746974797c733a31343a2263617374696c6c6f6e5f636f6e6d223b656d61696c7c733a31343a2263617374696c6c6f6e5f636f6e6d223b757365725f69647c733a323a223236223b6f6c645f6c6173745f6c6f67696e7c733a31303a2231343934363332353531223b6c6173745f636865636b7c693a313439343633333733373b66697273745f6e616d657c733a343a2249726973223b6c6173745f6e616d657c733a393a2243617374696c6c6f6e223b636f6c6c6567655f646570747c733a33323a22436f6c6c656765206f66204e757273696e6720616e64204d6964776966657279223b7363686f6f6c5f796561727c733a393a22323031352d32303136223b73656d7c733a333a22317374223b),
('4uff867hta1j9phh39cku1bb4o4uhbic', '192.168.254.4', 1494634450, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439343633343430393b),
('5r5i64iiop5qrnnhecq6229s9i1ge2bj', '192.168.254.14', 1494634739, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439343633343733393b6964656e746974797c733a32323a2268617272795f736f6572406578616d706c652e636f6d223b656d61696c7c733a32323a2268617272795f736f6572406578616d706c652e636f6d223b757365725f69647c733a323a223138223b6f6c645f6c6173745f6c6f67696e7c733a31303a2231343934363234383035223b6c6173745f636865636b7c693a313439343632343836343b66697273745f6e616d657c733a31323a22486172727920416e67656c6f223b6c6173745f6e616d657c733a343a22536f6572223b636f6c6c6567655f646570747c733a33343a22436f6c6c656765206f6620427573696e6573732041646d696e697374726174696f6e223b7363686f6f6c5f796561727c733a393a22323031352d32303136223b73656d7c733a333a22317374223b),
('h7g5omi5pm106rp9q8ht1ppdpvilj7i8', '192.168.254.14', 1494635613, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439343633353631333b6964656e746974797c733a32323a2268617272795f736f6572406578616d706c652e636f6d223b656d61696c7c733a32323a2268617272795f736f6572406578616d706c652e636f6d223b757365725f69647c733a323a223138223b6f6c645f6c6173745f6c6f67696e7c733a31303a2231343934363234383035223b6c6173745f636865636b7c693a313439343632343836343b66697273745f6e616d657c733a31323a22486172727920416e67656c6f223b6c6173745f6e616d657c733a343a22536f6572223b636f6c6c6567655f646570747c733a33343a22436f6c6c656765206f6620427573696e6573732041646d696e697374726174696f6e223b7363686f6f6c5f796561727c733a393a22323031352d32303136223b73656d7c733a333a22317374223b),
('kih1lijh6v52mrpak996igfr3eake4b1', '192.168.254.14', 1494636248, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439343633363234383b6964656e746974797c733a32323a2268617272795f736f6572406578616d706c652e636f6d223b656d61696c7c733a32323a2268617272795f736f6572406578616d706c652e636f6d223b757365725f69647c733a323a223138223b6f6c645f6c6173745f6c6f67696e7c733a31303a2231343934363234383035223b6c6173745f636865636b7c693a313439343632343836343b66697273745f6e616d657c733a31323a22486172727920416e67656c6f223b6c6173745f6e616d657c733a343a22536f6572223b636f6c6c6567655f646570747c733a33343a22436f6c6c656765206f6620427573696e6573732041646d696e697374726174696f6e223b7363686f6f6c5f796561727c733a393a22323031352d32303136223b73656d7c733a333a22317374223b),
('dc50jtsie1okr2fmhtcgsbdvdhm7k4ll', '192.168.254.14', 1494636568, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439343633363536383b6964656e746974797c733a32323a2268617272795f736f6572406578616d706c652e636f6d223b656d61696c7c733a32323a2268617272795f736f6572406578616d706c652e636f6d223b757365725f69647c733a323a223138223b6f6c645f6c6173745f6c6f67696e7c733a31303a2231343934363234383035223b6c6173745f636865636b7c693a313439343632343836343b66697273745f6e616d657c733a31323a22486172727920416e67656c6f223b6c6173745f6e616d657c733a343a22536f6572223b636f6c6c6567655f646570747c733a33343a22436f6c6c656765206f6620427573696e6573732041646d696e697374726174696f6e223b7363686f6f6c5f796561727c733a393a22323031352d32303136223b73656d7c733a333a22317374223b),
('nm2d823vl7grcc063qmh5ppmu7hlatvg', '192.168.254.14', 1494636348, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439343633363334383b),
('m6ge1bl2s67v6u81jijre4pk52scnqok', '192.168.254.14', 1494636915, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439343633363931353b6964656e746974797c733a32323a2268617272795f736f6572406578616d706c652e636f6d223b656d61696c7c733a32323a2268617272795f736f6572406578616d706c652e636f6d223b757365725f69647c733a323a223138223b6f6c645f6c6173745f6c6f67696e7c733a31303a2231343934363234383035223b6c6173745f636865636b7c693a313439343632343836343b66697273745f6e616d657c733a31323a22486172727920416e67656c6f223b6c6173745f6e616d657c733a343a22536f6572223b636f6c6c6567655f646570747c733a33343a22436f6c6c656765206f6620427573696e6573732041646d696e697374726174696f6e223b7363686f6f6c5f796561727c733a393a22323031352d32303136223b73656d7c733a333a22317374223b),
('f6v2ta0d8nt8us552b47col8abp3qtij', '192.168.254.14', 1494637219, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439343633373231393b6964656e746974797c733a32323a2268617272795f736f6572406578616d706c652e636f6d223b656d61696c7c733a32323a2268617272795f736f6572406578616d706c652e636f6d223b757365725f69647c733a323a223138223b6f6c645f6c6173745f6c6f67696e7c733a31303a2231343934363234383035223b6c6173745f636865636b7c693a313439343632343836343b66697273745f6e616d657c733a31323a22486172727920416e67656c6f223b6c6173745f6e616d657c733a343a22536f6572223b636f6c6c6567655f646570747c733a33343a22436f6c6c656765206f6620427573696e6573732041646d696e697374726174696f6e223b7363686f6f6c5f796561727c733a393a22323031352d32303136223b73656d7c733a333a22317374223b),
('frk05p32ajvrssli2d8r4dah5t0j6dli', '192.168.254.14', 1494639119, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439343633393131393b6964656e746974797c733a32323a2268617272795f736f6572406578616d706c652e636f6d223b656d61696c7c733a32323a2268617272795f736f6572406578616d706c652e636f6d223b757365725f69647c733a323a223138223b6f6c645f6c6173745f6c6f67696e7c733a31303a2231343934363234383035223b6c6173745f636865636b7c693a313439343632343836343b66697273745f6e616d657c733a31323a22486172727920416e67656c6f223b6c6173745f6e616d657c733a343a22536f6572223b636f6c6c6567655f646570747c733a33343a22436f6c6c656765206f6620427573696e6573732041646d696e697374726174696f6e223b7363686f6f6c5f796561727c733a393a22323031352d32303136223b73656d7c733a333a22317374223b),
('ticeaeij1pkfk3r4r4jphadhslgq1e70', '192.168.254.14', 1494639454, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439343633393435343b6964656e746974797c733a32323a2268617272795f736f6572406578616d706c652e636f6d223b656d61696c7c733a32323a2268617272795f736f6572406578616d706c652e636f6d223b757365725f69647c733a323a223138223b6f6c645f6c6173745f6c6f67696e7c733a31303a2231343934363234383035223b6c6173745f636865636b7c693a313439343632343836343b66697273745f6e616d657c733a31323a22486172727920416e67656c6f223b6c6173745f6e616d657c733a343a22536f6572223b636f6c6c6567655f646570747c733a33343a22436f6c6c656765206f6620427573696e6573732041646d696e697374726174696f6e223b7363686f6f6c5f796561727c733a393a22323031352d32303136223b73656d7c733a333a22317374223b),
('sjremo1pidekvp5j7n1suf0mkbppn6ed', '192.168.254.14', 1494639805, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439343633393830353b6964656e746974797c733a32323a2268617272795f736f6572406578616d706c652e636f6d223b656d61696c7c733a32323a2268617272795f736f6572406578616d706c652e636f6d223b757365725f69647c733a323a223138223b6f6c645f6c6173745f6c6f67696e7c733a31303a2231343934363234383035223b6c6173745f636865636b7c693a313439343632343836343b66697273745f6e616d657c733a31323a22486172727920416e67656c6f223b6c6173745f6e616d657c733a343a22536f6572223b636f6c6c6567655f646570747c733a33343a22436f6c6c656765206f6620427573696e6573732041646d696e697374726174696f6e223b7363686f6f6c5f796561727c733a393a22323031352d32303136223b73656d7c733a333a22317374223b),
('mtv53pphb2ckasn2tj2cr609sgumc4mj', '192.168.254.14', 1494640135, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439343634303133353b6964656e746974797c733a32323a2268617272795f736f6572406578616d706c652e636f6d223b656d61696c7c733a32323a2268617272795f736f6572406578616d706c652e636f6d223b757365725f69647c733a323a223138223b6f6c645f6c6173745f6c6f67696e7c733a31303a2231343934363234383035223b6c6173745f636865636b7c693a313439343632343836343b66697273745f6e616d657c733a31323a22486172727920416e67656c6f223b6c6173745f6e616d657c733a343a22536f6572223b636f6c6c6567655f646570747c733a33343a22436f6c6c656765206f6620427573696e6573732041646d696e697374726174696f6e223b7363686f6f6c5f796561727c733a393a22323031352d32303136223b73656d7c733a333a22317374223b),
('i29hkm6v1hrf2ohcmiecdkbkac7ggm18', '192.168.254.14', 1494641785, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439343634313738353b6964656e746974797c733a32323a2268617272795f736f6572406578616d706c652e636f6d223b656d61696c7c733a32323a2268617272795f736f6572406578616d706c652e636f6d223b757365725f69647c733a323a223138223b6f6c645f6c6173745f6c6f67696e7c733a31303a2231343934363234383035223b6c6173745f636865636b7c693a313439343632343836343b66697273745f6e616d657c733a31323a22486172727920416e67656c6f223b6c6173745f6e616d657c733a343a22536f6572223b636f6c6c6567655f646570747c733a33343a22436f6c6c656765206f6620427573696e6573732041646d696e697374726174696f6e223b7363686f6f6c5f796561727c733a393a22323031352d32303136223b73656d7c733a333a22317374223b),
('4tcclbuc3orp9hea1iucvcboamnhdkef', '192.168.254.14', 1494642810, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439343634323831303b6964656e746974797c733a32323a2268617272795f736f6572406578616d706c652e636f6d223b656d61696c7c733a32323a2268617272795f736f6572406578616d706c652e636f6d223b757365725f69647c733a323a223138223b6f6c645f6c6173745f6c6f67696e7c733a31303a2231343934363234383035223b6c6173745f636865636b7c693a313439343632343836343b66697273745f6e616d657c733a31323a22486172727920416e67656c6f223b6c6173745f6e616d657c733a343a22536f6572223b636f6c6c6567655f646570747c733a33343a22436f6c6c656765206f6620427573696e6573732041646d696e697374726174696f6e223b7363686f6f6c5f796561727c733a393a22323031352d32303136223b73656d7c733a333a22317374223b),
('682n2nniv2evbvbhp2bcg5dmca1slc7u', '192.168.254.14', 1494643112, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439343634333131323b6964656e746974797c733a32323a2268617272795f736f6572406578616d706c652e636f6d223b656d61696c7c733a32323a2268617272795f736f6572406578616d706c652e636f6d223b757365725f69647c733a323a223138223b6f6c645f6c6173745f6c6f67696e7c733a31303a2231343934363234383035223b6c6173745f636865636b7c693a313439343632343836343b66697273745f6e616d657c733a31323a22486172727920416e67656c6f223b6c6173745f6e616d657c733a343a22536f6572223b636f6c6c6567655f646570747c733a33343a22436f6c6c656765206f6620427573696e6573732041646d696e697374726174696f6e223b7363686f6f6c5f796561727c733a393a22323031352d32303136223b73656d7c733a333a22317374223b),
('0h2grn85each7dlcm6vlt2okejksglss', '192.168.254.14', 1494643510, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439343634333531303b6964656e746974797c733a32323a2268617272795f736f6572406578616d706c652e636f6d223b656d61696c7c733a32323a2268617272795f736f6572406578616d706c652e636f6d223b757365725f69647c733a323a223138223b6f6c645f6c6173745f6c6f67696e7c733a31303a2231343934363234383035223b6c6173745f636865636b7c693a313439343632343836343b66697273745f6e616d657c733a31323a22486172727920416e67656c6f223b6c6173745f6e616d657c733a343a22536f6572223b636f6c6c6567655f646570747c733a33343a22436f6c6c656765206f6620427573696e6573732041646d696e697374726174696f6e223b7363686f6f6c5f796561727c733a393a22323031352d32303136223b73656d7c733a333a22317374223b),
('m3h8vpq555kk7ddpma0cv6jd60q255ni', '192.168.254.14', 1494643944, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439343634333934343b6964656e746974797c733a31323a226765726f6e67615f63617373223b656d61696c7c733a31323a226765726f6e67615f63617373223b757365725f69647c733a323a223235223b6f6c645f6c6173745f6c6f67696e7c733a31303a2231343934363333343538223b6c6173745f636865636b7c693a313439343634333734323b66697273745f6e616d657c733a363a224d6172637573223b6c6173745f6e616d657c733a373a224765726f6e6761223b636f6c6c6567655f646570747c733a32383a22436f6c6c656765206f66204172747320616e6420536369656e636573223b7363686f6f6c5f796561727c733a393a22323031352d32303136223b73656d7c733a333a22317374223b),
('fldd6u31bl12m5p96t8d09cefkja0vug', '192.168.254.4', 1494643917, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439343634333931373b6964656e746974797c733a31333a22626172626569746f5f636f6564223b656d61696c7c733a31333a22626172626569746f5f636f6564223b757365725f69647c733a323a223234223b6f6c645f6c6173745f6c6f67696e7c733a31303a2231343934363332393235223b6c6173745f636865636b7c693a313439343634333637373b66697273745f6e616d657c733a393a22416e61204d61726961223b6c6173745f6e616d657c733a383a22426172626569746f223b636f6c6c6567655f646570747c733a32303a22436f6c6c656765206f6620456475636174696f6e223b7363686f6f6c5f796561727c733a393a22323031352d32303136223b73656d7c733a333a22317374223b),
('j5nda9klfu75geikvbn5qbvgk0srt2uu', '192.168.254.14', 1494643668, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439343634333635393b6964656e746974797c733a31353a2261646d696e4061646d696e2e636f6d223b656d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b757365725f69647c733a313a2231223b6f6c645f6c6173745f6c6f67696e7c733a31303a2231343934363233373639223b6c6173745f636865636b7c693a313439343634333636353b66697273745f6e616d657c733a383a22565041412044722e223b6c6173745f6e616d657c733a373a2245737475636865223b7363686f6f6c5f796561727c733a393a22323031352d32303136223b73656d7c733a333a22317374223b),
('os1a9itv89o62b71v4cg8bp362r7fjb4', '192.168.254.14', 1494644269, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439343634343236393b6964656e746974797c733a31323a226765726f6e67615f63617373223b656d61696c7c733a31323a226765726f6e67615f63617373223b757365725f69647c733a323a223235223b6f6c645f6c6173745f6c6f67696e7c733a31303a2231343934363333343538223b6c6173745f636865636b7c693a313439343634333734323b66697273745f6e616d657c733a363a224d6172637573223b6c6173745f6e616d657c733a373a224765726f6e6761223b636f6c6c6567655f646570747c733a32383a22436f6c6c656765206f66204172747320616e6420536369656e636573223b7363686f6f6c5f796561727c733a393a22323031352d32303136223b73656d7c733a333a22317374223b),
('1n84u08sg4n42ltp1u4qjg9fub2i6el5', '192.168.254.4', 1494645831, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439343634353833313b6964656e746974797c733a31343a2263617374696c6c6f6e5f636f6e6d223b656d61696c7c733a31343a2263617374696c6c6f6e5f636f6e6d223b757365725f69647c733a323a223236223b6f6c645f6c6173745f6c6f67696e7c733a31303a2231343934363333373337223b6c6173745f636865636b7c693a313439343634343139313b66697273745f6e616d657c733a343a2249726973223b6c6173745f6e616d657c733a393a2243617374696c6c6f6e223b636f6c6c6567655f646570747c733a33323a22436f6c6c656765206f66204e757273696e6720616e64204d6964776966657279223b7363686f6f6c5f796561727c733a393a22323031352d32303136223b73656d7c733a333a22317374223b),
('fjo4eue7v0nrb58feq47lslajhrjkuqq', '192.168.254.14', 1494644650, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439343634343336323b),
('3mkiq9687i5d09u9jcdo4pk2ms0e3ogi', '192.168.254.4', 1494645832, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439343634353833313b6964656e746974797c733a31343a2263617374696c6c6f6e5f636f6e6d223b656d61696c7c733a31343a2263617374696c6c6f6e5f636f6e6d223b757365725f69647c733a323a223236223b6f6c645f6c6173745f6c6f67696e7c733a31303a2231343934363333373337223b6c6173745f636865636b7c693a313439343634343139313b66697273745f6e616d657c733a343a2249726973223b6c6173745f6e616d657c733a393a2243617374696c6c6f6e223b636f6c6c6567655f646570747c733a33323a22436f6c6c656765206f66204e757273696e6720616e64204d6964776966657279223b7363686f6f6c5f796561727c733a393a22323031352d32303136223b73656d7c733a333a22317374223b);

-- --------------------------------------------------------

--
-- Table structure for table `do_accounts`
--

CREATE TABLE `do_accounts` (
  `id` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `college_dept` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `do_accounts`
--

INSERT INTO `do_accounts` (`id`, `username`, `first_name`, `last_name`, `college_dept`) VALUES
(19, 'harry_soer@example.com', 'Harry Angelo', 'Soer', 'College of Business Administration'),
(20, 'barbeito_coed', 'Ana Maria', 'Barbeito', 'College of Education'),
(21, 'geronga_cass', 'Marcus', 'Geronga', 'College of Arts and Sciences'),
(22, 'castillon_conm', 'Iris', 'Castillon', 'College of Nursing and Midwifery'),
(23, 'gandia_coact', 'Marcedes', 'Gandia', 'College of Office Administration and Computer Technology');

-- --------------------------------------------------------

--
-- Table structure for table `faculty_users`
--

CREATE TABLE `faculty_users` (
  `faculty_id` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `mi` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `college_dept` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faculty_users`
--

INSERT INTO `faculty_users` (`faculty_id`, `username`, `first_name`, `mi`, `last_name`, `college_dept`) VALUES
(1, 'prof-201300165', 'Kuposky Morriss', 'G', 'Esguerra\r\n', 'College of Business Administration'),
(2, 'prof-201300167', 'Harry Angelo', 'L', 'Soer', 'College of Business Administration'),
(5, 'prof-201200024', 'Cedric', 'A', 'Castilllo', 'College of Arts and Sciences'),
(6, 'prof-201090021', 'Rosalinda', 'M', 'Llamas', 'College of Education'),
(7, 'prof-201104013', 'Robert', 'G.', 'Magdalao', 'College of Education'),
(9, 'prof-201209023', 'Erlinda', 'P', 'Gahoy', 'College of Education'),
(10, 'prof-201001024', 'Eroll', 'A', 'Beja', 'College of Arts and Sciences'),
(11, 'prof-200910026', 'Gloria', 'Y', 'Yan', 'College of Arts and Sciences'),
(12, 'prof-201200019', 'Susan', 'U', 'Espadon', 'College of Nursing and Midwifery'),
(13, 'prof-201110125', 'Araceli', 'S', 'Francisco', 'College of Nursing and Midwifery'),
(14, 'prof-200900509', 'Marlon', 'V', 'Duque', 'College of Nursing and Midwifery'),
(15, 'prof-2011010122', 'Mariel', 'F', 'Carpio', 'College of Education'),
(16, 'prof-201000910', 'Samuel', 'S', 'Natividad', 'College of Education'),
(17, 'prof-200901224', 'Richard', 'M', 'Bersamira', 'College of Arts and Sciences'),
(18, 'prof-201401028', 'Marvin', 'G', 'De Jesus', 'College of Arts and Sciences'),
(19, 'prof-200800516', 'Dianne', 'H', 'Gelbolingo', 'College of Nursing and Midwifery'),
(20, 'prof-201200909', 'Franceska', 'P', 'Dela Cruz', 'College of Nursing and Midwifery'),
(21, 'prof-201000619', 'Merly', 'F', 'Asuncion', 'College of Education'),
(22, 'prof-201300012', 'Jeremiah', 'D', 'Maranan', 'College of Education'),
(23, 'prof-201301026', 'Rommel', 'D', 'Hernandez', 'College of Arts and Sciences'),
(24, 'prof-200900323', 'Rosvibeth', 'F', 'Ablon', 'College of Arts and Sciences'),
(25, 'prof-201400110', 'Jerome', 'F', 'Mangubat', 'College of Nursing and Midwifery'),
(26, 'prof-201000901', 'Paula', 'G', 'Santos', 'College of Nursing and Midwifery'),
(27, '201300164', 'Harry Angelo', 'L.', 'Soer', '201300164');

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

CREATE TABLE `files` (
  `id` int(11) NOT NULL,
  `file_name` varchar(100) NOT NULL,
  `file_description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `files`
--

INSERT INTO `files` (`id`, `file_name`, `file_description`) VALUES
(1, 'First_Form.PDF', 'First Form PDF');

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
(3, 2, 'VPAA Dr. Estuche', '2017-05-12', '08:30:06', 'Testing my comment here without noticing'),
(4, 2, 'Harry Angelo Soer', '2017-05-12', '09:41:51', 'trying comment'),
(5, 1, 'Harry Angelo Soer', '2017-05-12', '09:45:34', 'try comment');

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
(2, 'test lorem topic', '<div>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</div><div>tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</div><div>quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</div><div>consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse</div><div>cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non</div><div>proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>', 'Harry Angelo Soer', '2017-05-12', '03:39:07');

-- --------------------------------------------------------

--
-- Table structure for table `gallery_album`
--

CREATE TABLE `gallery_album` (
  `id` int(11) NOT NULL,
  `album_name` varchar(20) NOT NULL,
  `slug` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
(5, 'Student', 'Student'),
(6, 'Professor', 'Professor');

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
-- Table structure for table `portal_courses`
--

CREATE TABLE `portal_courses` (
  `course_id` int(255) NOT NULL,
  `course_name` varchar(255) NOT NULL,
  `abbrv` varchar(255) NOT NULL,
  `college_dept` varchar(255) NOT NULL,
  `years` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `portal_courses`
--

INSERT INTO `portal_courses` (`course_id`, `course_name`, `abbrv`, `college_dept`, `years`) VALUES
(4, 'Bachelor of Science in Business Administration Major in Marketing Management', 'BSBA-MM', 'College of Business Administration', 4),
(5, 'Bachelor of Science in Business Administration Major in Operations Management', 'BSBA-MOM', 'College of Business Administration', 4),
(9, 'Bachelor of Elementary Education', 'BSEE', 'College of Education', 4),
(10, 'Bachelor in Secondary Education Major in English', 'BSEME', 'College of Education', 4),
(11, 'Bachelor in Secondary Education Major in Filipino', 'BSEMF', 'College of Education', 4),
(12, 'Bachelor of Science in Nursing', 'BSN', 'College of Nursing and Midwifery', 4),
(13, 'Bachelor in Public Governance', 'BPG', 'College of Arts and Sciences', 4);

-- --------------------------------------------------------

--
-- Table structure for table `portal_curriculums`
--

CREATE TABLE `portal_curriculums` (
  `course_id` int(255) NOT NULL,
  `curriculum_id` int(5) NOT NULL,
  `curriculum_name` varchar(255) NOT NULL,
  `college_dept` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `portal_curriculums`
--

INSERT INTO `portal_curriculums` (`course_id`, `curriculum_id`, `curriculum_name`, `college_dept`) VALUES
(4, 2, 'BSBA-MM Curriculum 1', 'College of Business Administration'),
(5, 3, 'BSBA-OM Curriculum 1', 'College of Business Administration'),
(9, 8, 'BSEE Curriculum 1', 'College of Education'),
(10, 9, 'BSEME Curriculum 1', 'College of Education'),
(11, 10, 'BSEMF Curriculum 1', 'College of Education');

-- --------------------------------------------------------

--
-- Table structure for table `portal_schedules`
--

CREATE TABLE `portal_schedules` (
  `id_sched` int(255) NOT NULL,
  `year` int(255) NOT NULL,
  `subject_code` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `days` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL,
  `section` varchar(255) NOT NULL,
  `course_id` varchar(255) NOT NULL,
  `college_dept` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `portal_schedules`
--

INSERT INTO `portal_schedules` (`id_sched`, `year`, `subject_code`, `description`, `days`, `time`, `section`, `course_id`, `college_dept`) VALUES
(1, 1, 'ENG 1', 'Study and Thinking Skills', 'Monday / Thursday', '9:00-10:30', '1a', '4', 'College of Business Administration'),
(2, 1, 'FIL 1', 'Sining ng Pakikipagtalastasan', 'Monday / Thursday', '10:30-12:00', '1a', '4', 'College of Business Administration'),
(3, 1, 'MATH 1', 'Basic Mathematics', 'Monday / Thursday', '1:30-3:00', '1a', '4', 'College of Business Administration'),
(4, 1, 'NS 1', 'Intro. To Biological Science', 'Monday / Thursday', '3:00-4:30', '1a', '4', 'College of Business Administration'),
(5, 1, 'SOC SCI 1', 'Philippine History', 'Monday / Thursday', '4:30-6:00', '1a', '4', 'College of Business Administration'),
(6, 1, 'PSYCH 1', 'General Psychology', 'Wednesday / Saturday', '1:30-3:00', '1a', '4', 'College of Business Administration'),
(7, 1, 'BBC 1 / MGT 1', 'Principles of Management ', 'Wednesday / Saturday', '3:00-4:30', '1a', '4', 'College of Business Administration'),
(8, 1, 'PE 1', 'Gymnastics', 'Wednesday / Saturday', '4:30-6:00', '1a', '4', 'College of Business Administration'),
(9, 1, 'NSTP 1 ', 'Nat''l Service Training Prog. 1', 'Saturday', '9:00-12:00', '1a', '4', 'College of Business Administration'),
(10, 1, 'ENG 1', 'Study and Thinking Skills', 'Monday / Thursday', '4:30-6:00', '1b', '4', 'College of Business Administration'),
(11, 1, 'FIL 1', 'Sining ng Pakikipagtalastasan', 'Monday / Thursday', '3:00-4:30', '1b', '4', 'College of Business Administration'),
(12, 1, 'MATH 1', 'Basic Mathematics', 'Monday / Thursday', '1:30-3:00', '1b', '4', 'College of Business Administration'),
(13, 1, 'NS 1', 'Intro. To Biological Science', 'Monday / Thursday', '10:30-12:00', '1b', '4', 'College of Business Administration'),
(14, 1, 'SOC SCI 1', 'Philippine History', 'Monday / Thursday', '9:00-10:30', '1b', '4', 'College of Business Administration'),
(15, 1, 'PSYCH 1', 'General Psychology', 'Wednesday / Saturday', '4:30-6:00', '1b', '4', 'College of Business Administration'),
(16, 1, 'BBC 1 / MGT 1', 'Principles of Management ', 'Wednesday / Saturday', '3:00-4:30', '1b', '4', 'College of Business Administration'),
(17, 1, 'PE 1', 'Gymnastics', 'Wednesday / Saturday', '1:30-3:00', '1b', '4', 'College of Business Administration'),
(18, 1, 'NSTP 1 ', 'Nat''l Service Training Prog. 1', 'Saturday', '9:00-12:00', '1b', '4', 'College of Business Administration'),
(19, 2, 'BBC 3 / ENG 6', 'Business Communication', 'Monday / Thursday', '4:30-6:00', '2a', '4', 'College of Business Administration'),
(20, 2, 'BBC4 / ACCTG 1', 'Single Proprietorship-Service', 'Monday / Thursday', '3:00-4:30', '2a', '4', 'College of Business Administration'),
(21, 2, 'CS 1', 'Introduction to Computer', 'Monday / Thursday', '1:30-3:00', '2a', '4', 'College of Business Administration'),
(22, 2, 'HUM 1', 'Introduction to Humanities', 'Monday / Thursday', '10:30-12:00', '2a', '4', 'College of Business Administration'),
(23, 2, 'SOC SCI 2', 'Philippine Constitution', 'Monday / Thursday', '9:00-10:30', '2a', '4', 'College of Business Administration'),
(24, 2, 'SOC SCI 3', 'Principles of Economics w/ LRT', 'Wednesday / Saturday', '4:30-6:00', '2a', '4', 'College of Business Administration'),
(25, 2, 'SOC SCI 4 ', 'Society and Culture', 'Wednesday / Saturday', '3:00-4:30', '2a', '4', 'College of Business Administration'),
(26, 2, 'MATH 4', 'Business Mathematics', 'Wednesday / Saturday', '1:30-3:00', '2a', '4', 'College of Business Administration'),
(27, 2, 'PE 3', 'Individual / Dual Sports', 'Saturday', '9:00-12:00', '2a', '4', 'College of Business Administration'),
(28, 2, 'BBC 3 / ENG 6', 'Business Communication', 'Monday / Thursday', '9:00-10:30', '2b', '4', 'College of Business Administration'),
(29, 2, 'BBC4 / ACCTG 1', 'Single Proprietorship-Service', 'Monday / Thursday', '10:30-12:00', '2b', '4', 'College of Business Administration'),
(30, 2, 'CS 1', 'Introduction to Computer', 'Monday / Thursday', '1:30-3:00', '2b', '4', 'College of Business Administration'),
(31, 2, 'HUM 1', 'Introduction to Humanities', 'Monday / Thursday', '3:00-4:30', '2b', '4', 'College of Business Administration'),
(32, 2, 'SOC SCI 2', 'Philippine Constitution', 'Monday / Thursday', '4:30-6:00', '2b', '4', 'College of Business Administration'),
(33, 2, 'SOC SCI 3', 'Principles of Economics w/ LRT', 'Wednesday / Saturday', '1:30-3:00', '2b', '4', 'College of Business Administration'),
(34, 2, 'SOC SCI 4 ', 'Society and Culture', 'Wednesday / Saturday', '3:00-4:30', '2b', '4', 'College of Business Administration'),
(35, 2, 'MATH 4', 'Business Mathematics', 'Wednesday / Saturday', '4:30-6:00', '2b', '4', 'College of Business Administration'),
(36, 2, 'PE 3', 'Individual / Dual Sports', 'Saturday', '9:00-12:00', '2b', '4', 'College of Business Administration'),
(37, 3, 'MATH 10', 'Business Statistics', 'Monday / Thursday', '4:30-6:00', '3a', '4', 'College of Business Administration'),
(38, 3, 'BBC 7', 'Money, Credit and Banking', 'Monday / Thursday', '3:00-4:30', '3a', '4', 'College of Business Administration'),
(39, 3, 'BEC 4', 'Obligations and Contracts', 'Monday / Thursday', '1:30-3:00', '3a', '4', 'College of Business Administration'),
(40, 3, 'BEC 5', 'Income Taxation', 'Monday / Thursday', '10:30-12:00', '3a', '4', 'College of Business Administration'),
(41, 3, 'BEC 6', 'Human Resource Management', 'Monday / Thursday', '9:00-10:30', '3a', '4', 'College of Business Administration'),
(42, 3, 'ACCTG 3', 'Partnership Accounting', 'Wednesday / Saturday', '4:30-6:00', '3a', '4', 'College of Business Administration'),
(43, 3, 'EMM 1', 'Entrepreneurship Management', 'Wednesday / Saturday', '3:00-4:30', '3a', '4', 'College of Business Administration'),
(44, 3, 'PMM 1', 'Professional Salesmanship', 'Wednesday / Saturday', '1:30-3:00', '3a', '4', 'College of Business Administration'),
(45, 3, 'MATH 10', 'Business Statistics', 'Monday / Thursday', '9:00-10:30', '3b', '4', 'College of Business Administration'),
(46, 3, 'BBC 7', 'Money, Credit and Banking', 'Monday / Thursday', '10:30-12:00', '3b', '4', 'College of Business Administration'),
(47, 3, 'BEC 4', 'Obligations and Contracts', 'Monday / Thursday', '1:30-3:00', '3b', '4', 'College of Business Administration'),
(48, 3, 'BEC 5', 'Income Taxation', 'Monday / Thursday', '3:00-4:30', '3b', '4', 'College of Business Administration'),
(49, 3, 'BEC 6', 'Human Resource Management', 'Monday / Thursday', '4:30-6:00', '3b', '4', 'College of Business Administration'),
(50, 3, 'ACCTG 3', 'Partnership Accounting', 'Wednesday / Saturday', '1:30-3:00', '3b', '4', 'College of Business Administration'),
(51, 3, 'EMM 1', 'Entrepreneurship Management', 'Wednesday / Saturday', '3:00-4:30', '3b', '4', 'College of Business Administration'),
(52, 3, 'PMM 1', 'Professional Salesmanship', 'Wednesday / Saturday', '4:30-6:00', '3b', '4', 'College of Business Administration'),
(53, 4, 'PMM 5', 'Advertising', 'Monday / Thursday', '9:00-10:30', '4a', '4', 'College of Business Administration'),
(54, 4, 'PMM 6 ', 'Product Management', 'Monday / Thursday', '10:30-12:00', '4a', '4', 'College of Business Administration'),
(55, 4, 'PMM 7 ', 'Retail Management', 'Monday / Thursday', '1:30-3:00', '4a', '4', 'College of Business Administration'),
(56, 4, 'EMM 3', 'Service Management', 'Monday / Thursday', '3:00-4:30', '4a', '4', 'College of Business Administration'),
(57, 4, 'EMM 4', 'Consumer Behavior', 'Monday / Thursday', '4:30-6:00', '4a', '4', 'College of Business Administration'),
(58, 4, 'EMM 5', 'Feasibility Study', 'Wednesday / Saturday', '1:30-3:00', '4a', '4', 'College of Business Administration'),
(59, 4, 'EMM 2 ', 'Franchising', 'Wednesday / Saturday', '3:00-4:30', '4a', '4', 'College of Business Administration'),
(60, 4, 'Ethics', 'Business Ethics', 'Wednesday / Saturday', '4:30-6:00', '4a', '4', 'College of Business Administration'),
(61, 4, 'PMM 5', 'Advertising', 'Monday / Thursday', '4:30-6:00', '4b', '4', 'College of Business Administration'),
(62, 4, 'PMM 6 ', 'Product Management', 'Monday / Thursday', '3:00-4:30', '4b', '4', 'College of Business Administration'),
(63, 4, 'PMM 7 ', 'Retail Management', 'Monday / Thursday', '1:30-3:00', '4b', '4', 'College of Business Administration'),
(64, 4, 'EMM 3', 'Service Management', 'Monday / Thursday', '10:30-12:00', '4b', '4', 'College of Business Administration'),
(65, 4, 'EMM 4', 'Consumer Behavior', 'Monday / Thursday', '9:00-10:30', '4b', '4', 'College of Business Administration'),
(66, 4, 'EMM 5', 'Feasibility Study', 'Wednesday / Saturday', '4:30-6:00', '4b', '4', 'College of Business Administration'),
(67, 4, 'EMM 2 ', 'Franchising', 'Wednesday / Saturday', '3:00-4:30', '4b', '4', 'College of Business Administration'),
(68, 4, 'Ethics', 'Business Ethics', 'Wednesday / Saturday', '1:30-3:00', '4b', '4', 'College of Business Administration'),
(69, 1, 'ENG 101', 'Study and Thinking Skills', 'Monday / Thursday', '9:00-10:30', '1a', '5', 'College of Business Administration'),
(70, 1, 'FIL 101', 'Sining ng Pakikipagtalastasan', 'Monday / Thursday', '10:30-12:00', '1a', '5', 'College of Business Administration'),
(71, 1, 'MAT 101 ', 'Basic Mathematics', 'Monday / Thursday', '1:30-3:00', '1a', '5', 'College of Business Administration'),
(72, 1, 'NSC 101', 'Intro. to Biological Science', 'Monday / Thursday', '3:00-4:30', '1a', '5', 'College of Business Administration'),
(73, 1, 'Hty 101 ', 'Philippine History', 'Monday / Thursday', '4:30-6:00', '1a', '5', 'College of Business Administration'),
(74, 1, 'Psy 101', 'General Psychology', 'Wednesday / Saturday', '1:30-3:00', '1a', '5', 'College of Business Administration'),
(75, 1, 'MGT 101', 'Principles of Management', 'Wednesday / Saturday', '3:00-4:30', '1a', '5', 'College of Business Administration'),
(76, 1, 'Phe 101', 'Gymnastics', 'Wednesday / Saturday', '4:30-6:00', '1a', '5', 'College of Business Administration'),
(77, 1, 'CWT 101', 'Civic Welfare Training Program I', 'Saturday', '9:00-12:00', '1a', '5', 'College of Business Administration'),
(78, 1, 'ENG 101', 'Study and Thinking Skills', 'Monday / Thursday', '4:30-6:00', '1b', '5', 'College of Business Administration'),
(79, 1, 'FIL 101', 'Sining ng Pakikipagtalastasan', 'Monday / Thursday', '3:00-4:30', '1b', '5', 'College of Business Administration'),
(80, 1, 'MAT 101 ', 'Basic Mathematics', 'Monday / Thursday', '1:30-3:00', '1b', '5', 'College of Business Administration'),
(81, 1, 'NSC 101', 'Intro. to Biological Science', 'Monday / Thursday', '10:30-12:00', '1b', '5', 'College of Business Administration'),
(82, 1, 'Hty 101 ', 'Philippine History', 'Monday / Thursday', '9:00-10:30', '1b', '5', 'College of Business Administration'),
(83, 1, 'Psy 101', 'General Psychology', 'Wednesday / Saturday', '4:30-6:00', '1b', '5', 'College of Business Administration'),
(84, 1, 'MGT 101', 'Principles of Management', 'Wednesday / Saturday', '3:00-4:30', '1b', '5', 'College of Business Administration'),
(85, 1, 'Phe 101', 'Gymnastics', 'Wednesday / Saturday', '1:30-3:00', '1b', '5', 'College of Business Administration'),
(86, 1, 'CWT 101', 'Civic Welfare Training Program I', 'Saturday', '9:00-12:00', '1b', '5', 'College of Business Administration'),
(87, 2, 'Eng 206 ', 'Business Communication', 'Monday / Thursday', '4:30-6:00', '2a', '5', 'College of Business Administration'),
(88, 2, 'ACT 201', 'Single Proprietorship Service', 'Monday / Thursday', '3:00-4:30', '2a', '5', 'College of Business Administration'),
(89, 2, 'CSC 202', 'Introduction to Computer', 'Monday / Thursday', '1:30-3:00', '2a', '5', 'College of Business Administration'),
(90, 2, 'Hum 201', 'Introduction to Humanities', 'Monday / Thursday', '10:30-12:00', '2a', '5', 'College of Business Administration'),
(91, 2, 'Soc 201', 'Philippine Constitution', 'Monday / Thursday', '9:00-10:30', '2a', '5', 'College of Business Administration'),
(92, 2, 'ECO 101', 'Principles of Economics with LRT', 'Wednesday / Saturday', '4:30-6:00', '2a', '5', 'College of Business Administration'),
(93, 2, 'Soc 202', 'Society and Culture', 'Wednesday / Saturday', '3:00-4:30', '2a', '5', 'College of Business Administration'),
(94, 2, 'Mat 205', 'Business Mathematics', 'Wednesday / Saturday', '1:30-3:00', '2a', '5', 'College of Business Administration'),
(95, 2, 'Phe 208 ', 'Individual / Dual Sports', 'Saturday', '9:00-12:00', '2a', '5', 'College of Business Administration'),
(96, 2, 'Eng 206 ', 'Business Communication', 'Monday / Thursday', '9:00-10:30', '2b', '5', 'College of Business Administration'),
(97, 2, 'ACT 201', 'Single Proprietorship Service', 'Monday / Thursday', '10:30-12:00', '2b', '5', 'College of Business Administration'),
(98, 2, 'CSC 202', 'Introduction to Computer', 'Monday / Thursday', '1:30-3:00', '2b', '5', 'College of Business Administration'),
(99, 2, 'Hum 201', 'Introduction to Humanities', 'Monday / Thursday', '3:00-4:30', '2b', '5', 'College of Business Administration'),
(100, 2, 'Soc 201', 'Philippine Constitution', 'Monday / Thursday', '4:30-6:00', '2b', '5', 'College of Business Administration'),
(101, 2, 'ECO 101', 'Principles of Economics with LRT', 'Wednesday / Saturday', '1:30-3:00', '2b', '5', 'College of Business Administration'),
(102, 2, 'Soc 202', 'Society and Culture', 'Wednesday / Saturday', '3:00-4:30', '2b', '5', 'College of Business Administration'),
(103, 2, 'Mat 205', 'Business Mathematics', 'Wednesday / Saturday', '4:30-6:00', '2b', '5', 'College of Business Administration'),
(104, 2, 'Phe 208 ', 'Individual / Dual Sports', 'Saturday', '9:00-12:00', '2b', '5', 'College of Business Administration'),
(105, 3, 'FIN 301', 'Money, Credit And Banking', 'Monday / Thursday', '4:30-6:00', '3a', '5', 'College of Business Administration'),
(106, 3, 'MAT 308 ', 'Business Statistics', 'Monday / Thursday', '3:00-4:30', '3a', '5', 'College of Business Administration'),
(107, 3, 'ACT 303', 'Partnership Accounting', 'Monday / Thursday', '1:30-3:00', '3a', '5', 'College of Business Administration'),
(108, 3, 'LAW 301', 'Obligation and Contracts', 'Monday / Thursday', '10:30-12:00', '3a', '5', 'College of Business Administration'),
(109, 3, 'TAX 301', 'Income Taxation', 'Monday / Thursday', '9:00-10:30', '3a', '5', 'College of Business Administration'),
(110, 3, 'MGT 304', 'Human Resource Management', 'Wednesday / Saturday', '4:30-6:00', '3a', '5', 'College of Business Administration'),
(111, 3, 'MGT 316 ', 'Feasibility Study', 'Wednesday / Saturday', '3:00-4:30', '3a', '5', 'College of Business Administration'),
(112, 3, 'MGT 305', 'Operations Management', 'Wednesday / Saturday', '1:30-3:00', '3a', '5', 'College of Business Administration'),
(113, 3, 'FIN 301', 'Money, Credit And Banking', 'Monday / Thursday', '9:00-10:30', '3b', '5', 'College of Business Administration'),
(114, 3, 'MAT 308 ', 'Business Statistics', 'Monday / Thursday', '10:30-12:00', '3b', '5', 'College of Business Administration'),
(115, 3, 'ACT 303', 'Partnership Accounting', 'Monday / Thursday', '1:30-3:00', '3b', '5', 'College of Business Administration'),
(116, 3, 'LAW 301', 'Obligation and Contracts', 'Monday / Thursday', '3:00-4:30', '3b', '5', 'College of Business Administration'),
(117, 3, 'TAX 301', 'Income Taxation', 'Monday / Thursday', '4:30-6:00', '3b', '5', 'College of Business Administration'),
(118, 3, 'MGT 304', 'Human Resource Management', 'Wednesday / Saturday', '1:30-3:00', '3b', '5', 'College of Business Administration'),
(119, 3, 'MGT 316 ', 'Feasibility Study', 'Wednesday / Saturday', '3:00-4:30', '3b', '5', 'College of Business Administration'),
(120, 3, 'MGT 305', 'Operations Management', 'Wednesday / Saturday', '4:30-6:00', '3b', '5', 'College of Business Administration'),
(121, 4, 'MGT 410 ', 'Inventory Mgt and Control', 'Monday / Thursday', '9:00-10:30', '4a', '5', 'College of Business Administration'),
(122, 4, 'MGT 411 ', 'Logistics Management', 'Monday / Thursday', '10:30-12:00', '4a', '5', 'College of Business Administration'),
(123, 4, 'MGT 412', 'Productivity and Quality Mgt', 'Monday / Thursday', '1:30-3:00', '4a', '5', 'College of Business Administration'),
(124, 4, 'MGT 413', 'Global / International Trade', 'Monday / Thursday', '3:00-4:30', '4a', '5', 'College of Business Administration'),
(125, 4, 'ACT 307', 'Cost Accounting', 'Monday / Thursday', '4:30-6:00', '4a', '5', 'College of Business Administration'),
(126, 4, 'M 415', 'Business Ethics', 'Wednesday / Saturday', '1:30-3:00', '4a', '5', 'College of Business Administration'),
(127, 4, 'MGT 414', 'Marketing Management', 'Wednesday / Saturday', '3:00-4:30', '4a', '5', 'College of Business Administration'),
(128, 4, 'MGT 421 ', 'Prac. / Work Integrated Learning', 'Wednesday / Saturday', '4:30-6:00', '4a', '5', 'College of Business Administration'),
(129, 4, 'MGT 410 ', 'Inventory Mgt and Control', 'Monday / Thursday', '4:30-6:00', '4b', '5', 'College of Business Administration'),
(130, 4, 'MGT 411 ', 'Logistics Management', 'Monday / Thursday', '3:00-4:30', '4b', '5', 'College of Business Administration'),
(131, 4, 'MGT 412', 'Productivity and Quality Mgt', 'Monday / Thursday', '1:30-3:00', '4b', '5', 'College of Business Administration'),
(132, 4, 'MGT 413', 'Global / International Trade', 'Monday / Thursday', '10:30-12:00', '4b', '5', 'College of Business Administration'),
(133, 4, 'ACT 307', 'Cost Accounting', 'Monday / Thursday', '9:00-10:30', '4b', '5', 'College of Business Administration'),
(134, 4, 'M 415', 'Business Ethics', 'Wednesday / Saturday', '4:30-6:00', '4b', '5', 'College of Business Administration'),
(135, 4, 'MGT 414', 'Marketing Management', 'Wednesday / Saturday', '3:00-4:30', '4b', '5', 'College of Business Administration'),
(136, 4, 'MGT 421 ', 'Prac. / Work Integrated Learning', 'Wednesday / Saturday', '1:30-3:00', '4b', '5', 'College of Business Administration'),
(157, 1, 'ENG 101', 'Study and Thinking Skills', 'Monday / Thursday', '7:30-9:00', '1a', '9', 'College of Education'),
(158, 1, 'FIL 101', 'Komunikasyon sa Akademikong Filipino', 'Monday / Thursday', '9:00-10:30', '1a', '9', 'College of Education'),
(159, 1, 'MAT 101', 'Basic Mathematics', 'Monday / Thursday', '10:30-12:00', '1a', '9', 'College of Education'),
(160, 1, 'HTY 101', 'Phil. History', 'Monday / Thursday', '1:30-3:00', '1a', '9', 'College of Education'),
(161, 1, 'PSY 101', 'Gen. Psychology', 'Monday / Thursday', '3:00-4:30', '1a', '9', 'College of Education'),
(162, 1, 'SOC 201', 'Society and Culture', 'Monday / Thursday', '4:30-6:00', '1a', '9', 'College of Education'),
(163, 1, 'LIT 102', 'Phil. Literature in English', 'Wednesday / Friday', '1:30-3:00', '1a', '9', 'College of Education'),
(164, 1, 'PED 101', 'The Teaching Profession', 'Friday', '9:00-12:00', '1a', '9', 'College of Education'),
(165, 1, 'PHE 101', 'Gymnastics', 'Wednesday   ', '9:00-12:00', '1a', '9', 'College of Education'),
(166, 1, 'NST 101', 'Nat''l Service Training Prog. 1', 'Saturday', '9:00-12:00', '1a', '9', 'College of Education'),
(167, 1, 'ENG 101', 'Study and Thinking Skills', 'Monday / Thursday', '4:30-6:00', '1b', '9', 'College of Education'),
(168, 1, 'FIL 101', 'Komunikasyon sa Akademikong Filipino', 'Monday / Thursday', '3:00-4:30', '1b', '9', 'College of Education'),
(169, 1, 'MAT 101', 'Basic Mathematics', 'Monday / Thursday', '1:30-3:00', '1b', '9', 'College of Education'),
(170, 1, 'HTY 101', 'Phil. History', 'Monday / Thursday', '10:30-12:00', '1b', '9', 'College of Education'),
(171, 1, 'PSY 101', 'Gen. Psychology', 'Monday / Thursday', '9:00-10:30', '1b', '9', 'College of Education'),
(172, 1, 'SOC 201', 'Society and Culture', 'Monday / Thursday', '7:30-9:00', '1b', '9', 'College of Education'),
(173, 1, 'LIT 102', 'Phil. Literature in English', 'Wednesday / Saturday', '1:30-3:00', '1b', '9', 'College of Education'),
(174, 1, 'PED 101', 'The Teaching Profession', 'Saturday', '3:00-6:00', '1b', '9', 'College of Education'),
(175, 1, 'PHE 101', 'Gymnastics', 'Wednesday   ', '9:00-12:00', '1b', '9', 'College of Education'),
(176, 1, 'NST 101', 'Nat''l Service Training Prog. 1', 'Saturday', '9:00-12:00', '1b', '9', 'College of Education'),
(177, 2, 'PED 104', 'Social Dimension of Education', 'Monday / Thursday', '7:30-9:00', '2a', '9', 'College of Education'),
(178, 2, 'ENG 203', 'Speech and Oral Communication', 'Monday / Thursday', '9:00-10:30', '2a', '9', 'College of Education'),
(179, 2, 'FIL 203', 'Malikhang Pagsulat', 'Monday / Thursday', '10:30-12:00', '2a', '9', 'College of Education'),
(180, 2, 'PED 105', 'Principles of Teaching 1', 'Monday / Thursday', '1:30-3:00', '2a', '9', 'College of Education'),
(181, 2, 'CSC 102', 'Intro to Information Technology', 'Monday / Thursday', '3:00-4:30', '2a', '9', 'College of Education'),
(182, 2, 'CCE 118', 'Rat., Prin., Goals and Obj. of Early Childhood', 'Monday / Thursday', '4:30-6:00', '2a', '9', 'College of Education'),
(183, 2, 'PED 106', 'Educational Technology', 'Wednesday / Friday', '1:30-3:00', '2a', '9', 'College of Education'),
(184, 2, 'CCE 105', 'Trigonometry', 'Friday', '9:00-12:00', '2a', '9', 'College of Education'),
(185, 2, 'NSC 102', 'Intro to Physical Science', 'Wednesday   ', '9:00-12:00', '2a', '9', 'College of Education'),
(186, 2, 'PHE 103', 'Individual/Dual Sports', 'Saturday', '9:00-12:00', '2a', '9', 'College of Education'),
(187, 2, 'PED 104', 'Social Dimension of Education', 'Monday / Thursday', '4:30-6:00', '2b', '9', 'College of Education'),
(188, 2, 'ENG 203', 'Speech and Oral Communication', 'Monday / Thursday', '3:00-4:30', '2b', '9', 'College of Education'),
(189, 2, 'FIL 203', 'Malikhang Pagsulat', 'Monday / Thursday', '1:30-3:00', '2b', '9', 'College of Education'),
(190, 2, 'PED 105', 'Principles of Teaching 1', 'Monday / Thursday', '10:30-12:00', '2b', '9', 'College of Education'),
(191, 2, 'CSC 102', 'Intro to Information Technology', 'Monday / Thursday', '9:00-10:30', '2b', '9', 'College of Education'),
(192, 2, 'CCE 118', 'Rat., Prin., Goals and Obj. of Early Childhood', 'Monday / Thursday', '7:30-9:00', '2b', '9', 'College of Education'),
(193, 2, 'PED 106', 'Educational Technology', 'Wednesday / Saturday', '1:30-3:00', '2b', '9', 'College of Education'),
(194, 2, 'CCE 105', 'Trigonometry', 'Saturday', '3:00-6:00', '2b', '9', 'College of Education'),
(195, 2, 'NSC 102', 'Intro to Physical Science', 'Wednesday   ', '9:00-12:00', '2b', '9', 'College of Education'),
(196, 2, 'PHE 103', 'Individual/Dual Sports', 'Saturday', '9:00-12:00', '2b', '9', 'College of Education'),
(197, 3, 'PED 110', 'Development Reading 1', 'Monday / Thursday', '7:30-9:00', '3a', '9', 'College of Education'),
(198, 3, 'PED 111', 'Assessment of Learning 1', 'Monday / Thursday', '9:00-10:30', '3a', '9', 'College of Education'),
(199, 3, 'PED 109', 'Curriculum Development', 'Monday / Thursday', '10:30-12:00', '3a', '9', 'College of Education'),
(200, 3, 'CCE 103', 'General Chemistry', 'Monday / Thursday', '1:30-3:00', '3a', '9', 'College of Education'),
(201, 3, 'CCE 107', 'Plane Geometry', 'Monday / Thursday', '3:00-4:30', '3a', '9', 'College of Education'),
(202, 3, 'CCE 113', 'Geography', 'Monday / Thursday', '4:30-6:00', '3a', '9', 'College of Education'),
(203, 3, 'CCE 110', 'Advanced Grammar', 'Wednesday / Saturday', '1:30-3:00', '3a', '9', 'College of Education'),
(204, 3, 'CCE 120', 'The Pre-school Curriculum', 'Wednesday / Saturday', '10:30-12:00', '3a', '9', 'College of Education'),
(205, 3, 'CCE 111', 'Children''s Literature', 'Wednesday / Saturday', '9:00-10:30', '3a', '9', 'College of Education'),
(206, 3, 'PED 110', 'Development Reading 1', 'Monday / Thursday', '4:30-6:00', '3b', '9', 'College of Education'),
(207, 3, 'PED 111', 'Assessment of Learning 1', 'Monday / Thursday', '3:00-4:30', '3b', '9', 'College of Education'),
(208, 3, 'PED 109', 'Curriculum Development', 'Monday / Thursday', '1:30-3:00', '3b', '9', 'College of Education'),
(209, 3, 'CCE 103', 'General Chemistry', 'Monday / Thursday', '10:30-12:00', '3b', '9', 'College of Education'),
(210, 3, 'CCE 107', 'Plane Geometry', 'Monday / Thursday', '9:00-10:30', '3b', '9', 'College of Education'),
(211, 3, 'CCE 113', 'Geography', 'Monday / Thursday', '7:30-9:00', '3b', '9', 'College of Education'),
(212, 3, 'CCE 110', 'Advanced Grammar', 'Wednesday / Saturday', '9:00-10:30', '3b', '9', 'College of Education'),
(213, 3, 'CCE 120', 'The Pre-school Curriculum', 'Wednesday / Saturday', '10:30-12:00', '3b', '9', 'College of Education'),
(214, 3, 'CCE 111', 'Children''s Literature', 'Wednesday / Saturday', '1:30-3:00', '3b', '9', 'College of Education'),
(215, 4, 'CCE 123', 'Origin and Management of Pre School', 'Monday / Thursday', '7:30-9:00', '4a', '9', 'College of Education'),
(216, 4, 'CCE 109', 'Teaching Problem Solving', 'Monday / Thursday', '9:00-10:30', '4a', '9', 'College of Education'),
(217, 4, 'RIZ 101', 'Life and Works of Rizal', 'Monday / Thursday', '10:30-12:00', '4a', '9', 'College of Education'),
(218, 4, 'PED 114', 'Research Education', 'Monday / Thursday', '1:30-3:00', '4a', '9', 'College of Education'),
(219, 4, 'CCE 125', 'Values Education for Teachers', 'Monday / Thursday', '3:00-4:30', '4a', '9', 'College of Education'),
(220, 4, 'FSC 104', 'Exploring the Curriculum', 'Monday / Thursday', '4:30-6:00', '4a', '9', 'College of Education'),
(221, 4, 'FSC 105', 'Learning Assessment and Strategies', 'Wednesday / Saturday', '1:30-3:00', '4a', '9', 'College of Education'),
(222, 4, 'FSC 106', 'On Becoming a Teacher', 'Wednesday / Saturday', '10:30-12:00', '4a', '9', 'College of Education'),
(223, 4, 'PED 115', 'LET Review 1 (Prof Education)', 'Wednesday / Saturday', '9:00-10:30', '4a', '9', 'College of Education'),
(224, 4, 'CCE 123', 'Origin and Management of Pre School', 'Monday / Thursday', '4:30-6:00', '4b', '9', 'College of Education'),
(225, 4, 'CCE 109', 'Teaching Problem Solving', 'Monday / Thursday', '3:00-4:30', '4b', '9', 'College of Education'),
(226, 4, 'RIZ 101', 'Life and Works of Rizal', 'Monday / Thursday', '1:30-3:00', '4b', '9', 'College of Education'),
(227, 4, 'PED 114', 'Research Education', 'Monday / Thursday', '10:30-12:00', '4b', '9', 'College of Education'),
(228, 4, 'CCE 125', 'Values Education for Teachers', 'Monday / Thursday', '9:00-10:30', '4b', '9', 'College of Education'),
(229, 4, 'FSC 104', 'Exploring the Curriculum', 'Monday / Thursday', '7:30-9:00', '4b', '9', 'College of Education'),
(230, 4, 'FSC 105', 'Learning Assessment and Strategies', 'Wednesday / Saturday', '9:00-10:30', '4b', '9', 'College of Education'),
(231, 4, 'FSC 106', 'On Becoming a Teacher', 'Wednesday / Saturday', '10:30-12:00', '4b', '9', 'College of Education'),
(232, 4, 'PED 115', 'LET Review 1 (Prof Education)', 'Wednesday / Saturday', '1:30-3:00', '4b', '9', 'College of Education'),
(233, 1, 'ENG 101', 'Study and Thinking Skills', 'Monday / Thursday', '7:30-9:00', '1a', '10', 'College of Education'),
(234, 1, 'FIL 101', 'Komunikasyon sa Akademikong Filipino', 'Monday / Thursday', '9:00-10:30', '1a', '10', 'College of Education'),
(235, 1, 'MAT 101', 'Basic Mathematics', 'Monday / Thursday', '10:30-12:00', '1a', '10', 'College of Education'),
(236, 1, 'HTY 101', 'Phil History', 'Monday / Thursday', '1:30-3:00', '1a', '10', 'College of Education'),
(237, 1, 'PSY 101', 'General Psychology', 'Monday / Thursday', '3:00-4:30', '1a', '10', 'College of Education'),
(238, 1, 'SOC 201', 'Society and Culture', 'Monday / Thursday', '4:30-6:00', '1a', '10', 'College of Education'),
(239, 1, 'LIT 102', 'Phil Literature in English', 'Wednesday / Friday', '1:30-3:00', '1a', '10', 'College of Education'),
(240, 1, 'PED 101', 'The Teaching Profession', 'Friday', '9:00-12:00', '1a', '10', 'College of Education'),
(241, 1, 'PHE 101', 'Gymnastics', 'Wednesday   ', '9:00-12:00', '1a', '10', 'College of Education'),
(242, 1, 'NST 101', 'Nat''l Service Training Prog. 1', 'Saturday', '9:00-12:00', '1a', '10', 'College of Education'),
(243, 1, 'ENG 101', 'Study and Thinking Skills', 'Monday / Thursday', '4:30-6:00', '1b', '10', 'College of Education'),
(244, 1, 'FIL 101', 'Komunikasyon sa Akademikong Filipino', 'Monday / Thursday', '3:00-4:30', '1b', '10', 'College of Education'),
(245, 1, 'MAT 101', 'Basic Mathematics', 'Monday / Thursday', '1:30-3:00', '1b', '10', 'College of Education'),
(246, 1, 'HTY 101', 'Phil History', 'Monday / Thursday', '10:30-12:00', '1b', '10', 'College of Education'),
(247, 1, 'PSY 101', 'General Psychology', 'Monday / Thursday', '9:00-10:30', '1b', '10', 'College of Education'),
(248, 1, 'SOC 201', 'Society and Culture', 'Monday / Thursday', '7:30-9:00', '1b', '10', 'College of Education'),
(249, 1, 'LIT 102', 'Phil Literature in English', 'Wednesday / Saturday', '1:30-3:00', '1b', '10', 'College of Education'),
(250, 1, 'PED 101', 'The Teaching Profession', 'Saturday', '3:00-6:00', '1b', '10', 'College of Education'),
(251, 1, 'PHE 101', 'Gymnastics', 'Wednesday   ', '9:00-12:00', '1b', '10', 'College of Education'),
(252, 1, 'NST 101', 'Nat''l Service Training Prog. 1', 'Saturday', '9:00-12:00', '1b', '10', 'College of Education'),
(253, 2, 'PED 104', 'Social Dimension of Education', 'Monday / Thursday', '7:30-9:00', '2a', '10', 'College of Education'),
(254, 2, 'ENG 203', 'Speech and Oral Communication', 'Monday / Thursday', '9:00-10:30', '2a', '10', 'College of Education'),
(255, 2, 'FIL 203', 'Malikhaing Pagsulat', 'Monday / Thursday', '10:30-12:00', '2a', '10', 'College of Education'),
(256, 2, 'PED 105', 'Principles of Teaching 1', 'Monday / Thursday', '1:30-3:00', '2a', '10', 'College of Education'),
(257, 2, 'EMJ 101', 'Creative Writing', 'Monday / Thursday', '3:00-4:30', '2a', '10', 'College of Education'),
(258, 2, 'EMJ 102', 'English & American Lit', 'Monday / Thursday', '4:30-6:00', '2a', '10', 'College of Education'),
(259, 2, 'PED 106', 'Educational Technology 1', 'Wednesday / Friday', '1:30-3:00', '2a', '10', 'College of Education'),
(260, 2, 'CSC 102', 'Intro to Information Tech', 'Friday', '9:00-12:00', '2a', '10', 'College of Education'),
(261, 2, 'NSC 102', 'Intro to Physical Science', 'Wednesday   ', '9:00-12:00', '2a', '10', 'College of Education'),
(262, 2, 'PHE 103', 'Individual/Dual Sports', 'Saturday', '9:00-12:00', '2a', '10', 'College of Education'),
(263, 2, 'PED 104', 'Social Dimension of Education', 'Monday / Thursday', '4:30-6:00', '2b', '10', 'College of Education'),
(264, 2, 'ENG 203', 'Speech and Oral Communication', 'Monday / Thursday', '3:00-4:30', '2b', '10', 'College of Education'),
(265, 2, 'FIL 203', 'Malikhaing Pagsulat', 'Monday / Thursday', '1:30-3:00', '2b', '10', 'College of Education'),
(266, 2, 'PED 105', 'Principles of Teaching 1', 'Monday / Thursday', '10:30-12:00', '2b', '10', 'College of Education'),
(267, 2, 'EMJ 101', 'Creative Writing', 'Monday / Thursday', '9:00-10:30', '2b', '10', 'College of Education'),
(268, 2, 'EMJ 102', 'English & American Lit', 'Monday / Thursday', '7:30-9:00', '2b', '10', 'College of Education'),
(269, 2, 'PED 106', 'Educational Technology 1', 'Wednesday / Saturday', '1:30-3:00', '2b', '10', 'College of Education'),
(270, 2, 'CSC 102', 'Intro to Information Tech', 'Saturday', '3:00-6:00', '2b', '10', 'College of Education'),
(271, 2, 'NSC 102', 'Intro to Physical Science', 'Wednesday   ', '9:00-12:00', '2b', '10', 'College of Education'),
(272, 2, 'PHE 103', 'Individual/Dual Sports', 'Saturday', '9:00-12:00', '2b', '10', 'College of Education'),
(273, 3, 'PED 110', 'Developmental Reading 1', 'Monday / Thursday', '7:30-9:00', '3a', '10', 'College of Education'),
(274, 3, 'PED 111', 'Assessment of Learning 1', 'Monday / Thursday', '9:00-10:30', '3a', '10', 'College of Education'),
(275, 3, 'EMJ 105', 'Intro to Linguistics', 'Monday / Thursday', '10:30-12:00', '3a', '10', 'College of Education'),
(276, 3, 'EMJ 106', 'Literary Criticism', 'Monday / Thursday', '1:30-3:00', '3a', '10', 'College of Education'),
(277, 3, 'EMJ 107', 'Remedial Instruction to English', 'Monday / Thursday', '3:00-4:30', '3a', '10', 'College of Education'),
(278, 3, 'EMJ 108', 'Advance Grammar', 'Monday / Thursday', '4:30-6:00', '3a', '10', 'College of Education'),
(279, 3, 'EMJ 109', 'Mythology & Folklore', 'Wednesday / Friday', '1:30-3:00', '3a', '10', 'College of Education'),
(280, 3, 'EMJ 110', 'Campus Journalism', 'Friday', '9:00-12:00', '3a', '10', 'College of Education'),
(281, 3, 'PED 110', 'Developmental Reading 1', 'Monday / Thursday', '4:30-6:00', '3b', '10', 'College of Education'),
(282, 3, 'PED 111', 'Assessment of Learning 1', 'Monday / Thursday', '3:00-4:30', '3b', '10', 'College of Education'),
(283, 3, 'EMJ 105', 'Intro to Linguistics', 'Monday / Thursday', '1:30-3:00', '3b', '10', 'College of Education'),
(284, 3, 'EMJ 106', 'Literary Criticism', 'Monday / Thursday', '10:30-12:00', '3b', '10', 'College of Education'),
(285, 3, 'EMJ 107', 'Remedial Instruction to English', 'Monday / Thursday', '9:00-10:30', '3b', '10', 'College of Education'),
(286, 3, 'EMJ 108', 'Advance Grammar', 'Monday / Thursday', '7:30-9:00', '3b', '10', 'College of Education'),
(287, 3, 'EMJ 109', 'Mythology & Folklore', 'Wednesday / Saturday', '1:30-3:00', '3b', '10', 'College of Education'),
(288, 3, 'EMJ 110', 'Campus Journalism', 'Saturday', '3:00-6:00', '3b', '10', 'College of Education'),
(289, 4, 'FSC 104', 'Exploring the Curriculum', 'Monday / Thursday', '7:30-9:00', '4a', '10', 'College of Education'),
(290, 4, 'FSC 105', 'Learning Assessment Strategies', 'Monday / Thursday', '9:00-10:30', '4a', '10', 'College of Education'),
(291, 4, 'FSC 106', 'On Becoming a Teacher', 'Monday / Thursday', '10:30-12:00', '4a', '10', 'College of Education'),
(292, 4, 'EMJ 117', 'Language & Literature Assessment', 'Monday / Thursday', '1:30-3:00', '4a', '10', 'College of Education'),
(293, 4, 'EMJ 118', 'English for Special Purpose', 'Monday / Thursday', '3:00-4:30', '4a', '10', 'College of Education'),
(294, 4, 'EMJ 119', 'Intro to Stylistics', 'Monday / Thursday', '4:30-6:00', '4a', '10', 'College of Education'),
(295, 4, 'PED 114', 'Research in Education', 'Wednesday / Friday', '1:30-3:00', '4a', '10', 'College of Education'),
(296, 4, 'EMJ 120', 'Translation & Editing of Text', 'Friday', '9:00-12:00', '4a', '10', 'College of Education'),
(297, 4, 'FSC 104', 'Exploring the Curriculum', 'Monday / Thursday', '4:30-6:00', '4b', '10', 'College of Education'),
(298, 4, 'FSC 105', 'Learning Assessment Strategies', 'Monday / Thursday', '3:00-4:30', '4b', '10', 'College of Education'),
(299, 4, 'FSC 106', 'On Becoming a Teacher', 'Monday / Thursday', '1:30-3:00', '4b', '10', 'College of Education'),
(300, 4, 'EMJ 117', 'Language & Literature Assessment', 'Monday / Thursday', '10:30-12:00', '4b', '10', 'College of Education'),
(301, 4, 'EMJ 118', 'English for Special Purpose', 'Monday / Thursday', '9:00-10:30', '4b', '10', 'College of Education'),
(302, 4, 'EMJ 119', 'Intro to Stylistics', 'Monday / Thursday', '7:30-9:00', '4b', '10', 'College of Education'),
(303, 4, 'PED 114', 'Research in Education', 'Wednesday / Saturday', '1:30-3:00', '4b', '10', 'College of Education'),
(304, 4, 'EMJ 120', 'Translation & Editing of Text', 'Saturday', '3:00-6:00', '4b', '10', 'College of Education'),
(305, 1, 'ENG 101', 'Study and Thinking Skills', 'Monday / Thursday', '7:30-9:00', '1a', '11', 'College of Education'),
(306, 1, 'FIL 101', 'Komunikasyon sa Akademikong Filipino', 'Monday / Thursday', '9:00-10:30', '1a', '11', 'College of Education'),
(307, 1, 'MAT 101', 'Basic Mathematics', 'Monday / Thursday', '10:30-12:00', '1a', '11', 'College of Education'),
(308, 1, 'HTY 101', 'Phil History', 'Monday / Thursday', '1:30-3:00', '1a', '11', 'College of Education'),
(309, 1, 'PSY 101', 'Gen Psychology', 'Monday / Thursday', '3:00-4:30', '1a', '11', 'College of Education'),
(310, 1, 'SOC 201', 'Society and Culture', 'Monday / Thursday', '4:30-6:00', '1a', '11', 'College of Education'),
(311, 1, 'LIT 102', 'Phil Literature in English', 'Wednesday / Friday', '1:30-3:00', '1a', '11', 'College of Education'),
(312, 1, 'PED 101', 'The Teaching Profession', 'Friday', '9:00-12:00', '1a', '11', 'College of Education'),
(313, 1, 'PHE 101', 'Gymnastics', 'Wednesday   ', '9:00-12:00', '1a', '11', 'College of Education'),
(314, 1, 'NST 101', 'Nat''l Service Training Prog. 1', 'Saturday', '9:00-12:00', '1a', '11', 'College of Education'),
(315, 1, 'ENG 101', 'Study and Thinking Skills', 'Monday / Thursday', '4:30-6:00', '1b', '11', 'College of Education'),
(316, 1, 'FIL 101', 'Komunikasyon sa Akademikong Filipino', 'Monday / Thursday', '3:00-4:30', '1b', '11', 'College of Education'),
(317, 1, 'MAT 101', 'Basic Mathematics', 'Monday / Thursday', '1:30-3:00', '1b', '11', 'College of Education'),
(318, 1, 'HTY 101', 'Phil History', 'Monday / Thursday', '10:30-12:00', '1b', '11', 'College of Education'),
(319, 1, 'PSY 101', 'Gen Psychology', 'Monday / Thursday', '9:00-10:30', '1b', '11', 'College of Education'),
(320, 1, 'SOC 201', 'Society and Culture', 'Monday / Thursday', '7:30-9:00', '1b', '11', 'College of Education'),
(321, 1, 'LIT 102', 'Phil Literature in English', 'Wednesday / Saturday', '1:30-3:00', '1b', '11', 'College of Education'),
(322, 1, 'PED 101', 'The Teaching Profession', 'Saturday', '3:00-6:00', '1b', '11', 'College of Education'),
(323, 1, 'PHE 101', 'Gymnastics', 'Wednesday   ', '9:00-12:00', '1b', '11', 'College of Education'),
(324, 1, 'NST 101', 'Nat''l Service Training Prog. 1', 'Saturday', '9:00-12:00', '1b', '11', 'College of Education'),
(325, 2, 'PED 104', 'Social Dimension of Education', 'Monday / Thursday', '7:30-9:00', '2a', '11', 'College of Education'),
(326, 2, 'ENG 203', 'Speech and Oral Communication', 'Monday / Thursday', '9:00-10:30', '2a', '11', 'College of Education'),
(327, 2, 'FIL 203', 'Malikhaing Pagsulat', 'Monday / Thursday', '10:30-12:00', '2a', '11', 'College of Education'),
(328, 2, 'PED 105', 'Principles of Teaching 1', 'Monday / Thursday', '1:30-3:00', '2a', '11', 'College of Education'),
(329, 2, 'FMJ 101', 'Intro sa Pag-aaral ng Wika', 'Monday / Thursday', '3:00-4:30', '2a', '11', 'College of Education'),
(330, 2, 'FMJ 102', 'Panimulang Lingwistika', 'Monday / Thursday', '4:30-6:00', '2a', '11', 'College of Education'),
(331, 2, 'PED 106', 'Educational Technology 1', 'Wednesday / Friday', '1:30-3:00', '2a', '11', 'College of Education'),
(332, 2, 'CSC 102', 'Intro to Information Tech', 'Friday', '9:00-12:00', '2a', '11', 'College of Education'),
(333, 2, 'NSC 102', 'Intro to Physical Science', 'Wednesday   ', '9:00-12:00', '2a', '11', 'College of Education'),
(334, 2, 'PHE 103', 'Individual/Dual Sports', 'Saturday', '9:00-12:00', '2a', '11', 'College of Education'),
(335, 2, 'PED 104', 'Social Dimension of Education', 'Monday / Thursday', '4:30-6:00', '2b', '11', 'College of Education'),
(336, 2, 'ENG 203', 'Speech and Oral Communication', 'Monday / Thursday', '3:00-4:30', '2b', '11', 'College of Education'),
(337, 2, 'FIL 203', 'Malikhaing Pagsulat', 'Monday / Thursday', '1:30-3:00', '2b', '11', 'College of Education'),
(338, 2, 'PED 105', 'Principles of Teaching 1', 'Monday / Thursday', '10:30-12:00', '2b', '11', 'College of Education'),
(339, 2, 'FMJ 101', 'Intro sa Pag-aaral ng Wika', 'Monday / Thursday', '9:00-10:30', '2b', '11', 'College of Education'),
(340, 2, 'FMJ 102', 'Panimulang Lingwistika', 'Monday / Thursday', '7:30-9:00', '2b', '11', 'College of Education'),
(341, 2, 'PED 106', 'Educational Technology 1', 'Wednesday / Saturday', '1:30-3:00', '2b', '11', 'College of Education'),
(342, 2, 'CSC 102', 'Intro to Information Tech', 'Saturday', '3:00-6:00', '2b', '11', 'College of Education'),
(343, 2, 'NSC 102', 'Intro to Physical Science', 'Wednesday   ', '9:00-12:00', '2b', '11', 'College of Education'),
(344, 2, 'PHE 103', 'Individual/Dual Sports', 'Saturday', '9:00-12:00', '2b', '11', 'College of Education'),
(345, 3, 'PED 110', 'Developmental Reading 1', 'Monday / Thursday', '7:30-9:00', '3a', '11', 'College of Education'),
(346, 3, 'PED 111', 'Assessment of Learning 1', 'Monday / Thursday', '9:00-10:30', '3a', '11', 'College of Education'),
(347, 3, 'FMJ 105', 'Pagtuturo at Pagtatayasa Pakikinig at Pagsasalita', 'Monday / Thursday', '10:30-12:00', '3a', '11', 'College of Education'),
(348, 3, 'FMJ 106', 'Pagtuturo at Pagtatayasa Pagbasa at Pagsulat', 'Monday / Thursday', '1:30-3:00', '3a', '11', 'College of Education'),
(349, 3, 'FMJ 107', 'Paghahanda at Ebalwasyon ng Kagamitang Panturo', 'Monday / Thursday', '3:00-4:30', '3a', '11', 'College of Education'),
(350, 3, 'FMJ 108', 'Intro saPagsasalin', 'Monday / Thursday', '4:30-6:00', '3a', '11', 'College of Education'),
(351, 3, 'FMJ 109', 'Intro sa Pananaliksik-Wika at Panitikan', 'Wednesday / Friday', '1:30-3:00', '3a', '11', 'College of Education'),
(352, 3, 'FMJ 110', 'Panitikan ng Rehiyon', 'Friday', '9:00-12:00', '3a', '11', 'College of Education'),
(353, 3, 'CCE 125', 'Values Education for Teachers', 'Wednesday   ', '9:00-12:00', '3a', '11', 'College of Education'),
(354, 3, 'PED 110', 'Developmental Reading 1', 'Monday / Thursday', '4:30-6:00', '3b', '11', 'College of Education'),
(355, 3, 'PED 111', 'Assessment of Learning 1', 'Monday / Thursday', '3:00-4:30', '3b', '11', 'College of Education'),
(356, 3, 'FMJ 105', 'Pagtuturo at Pagtatayasa Pakikinig at Pagsasalita', 'Monday / Thursday', '1:30-3:00', '3b', '11', 'College of Education'),
(357, 3, 'FMJ 106', 'Pagtuturo at Pagtatayasa Pagbasa at Pagsulat', 'Monday / Thursday', '10:30-12:00', '3b', '11', 'College of Education'),
(358, 3, 'FMJ 107', 'Paghahanda at Ebalwasyon ng Kagamitang Panturo', 'Monday / Thursday', '9:00-10:30', '3b', '11', 'College of Education'),
(359, 3, 'FMJ 108', 'Intro saPagsasalin', 'Monday / Thursday', '7:30-9:00', '3b', '11', 'College of Education'),
(360, 3, 'FMJ 109', 'Intro sa Pananaliksik-Wika at Panitikan', 'Wednesday / Saturday', '1:30-3:00', '3b', '11', 'College of Education'),
(361, 3, 'FMJ 110', 'Panitikan ng Rehiyon', 'Saturday', '3:00-6:00', '3b', '11', 'College of Education'),
(362, 3, 'CCE 125', 'Values Education for Teachers', 'Wednesday   ', '9:00-12:00', '3b', '11', 'College of Education'),
(363, 4, 'FMJ 117', 'Maikling Kwento', 'Monday / Thursday', '7:30-9:00', '4a', '11', 'College of Education'),
(364, 4, 'FMJ 118', 'Panulaang Filipino', 'Monday / Thursday', '9:00-10:30', '4a', '11', 'College of Education'),
(365, 4, 'FMJ 119', 'Pagpapahalagang Panitikan', 'Monday / Thursday', '10:30-12:00', '4a', '11', 'College of Education'),
(366, 4, 'FMJ 120', 'Dula at Nobelang Filipino', 'Monday / Thursday', '1:30-3:00', '4a', '11', 'College of Education'),
(367, 4, 'PED 114', 'Research in Education', 'Wednesday / Friday', '7:30-9:00', '4a', '11', 'College of Education'),
(368, 4, 'FSC 104', 'Exploring the Curriculum', 'Wednesday / Friday', '9:00-10:30', '4a', '11', 'College of Education'),
(369, 4, 'FSC 105', 'Learning Assessment Strategies', 'Wednesday / Friday', '10:30-12:00', '4a', '11', 'College of Education'),
(370, 4, 'FSC 106', 'On Becoming a Teacher', 'Wednesday / Friday', '1:30-3:00', '4a', '11', 'College of Education'),
(371, 4, 'FMJ 117', 'Maikling Kwento', 'Monday / Thursday', '7:30-9:00', '4b', '11', 'College of Education'),
(372, 4, 'FMJ 118', 'Panulaang Filipino', 'Monday / Thursday', '9:00-10:30', '4b', '11', 'College of Education'),
(373, 4, 'FMJ 119', 'Pagpapahalagang Panitikan', 'Monday / Thursday', '10:30-12:00', '4b', '11', 'College of Education'),
(374, 4, 'FMJ 120', 'Dula at Nobelang Filipino', 'Monday / Thursday', '1:30-3:00', '4b', '11', 'College of Education'),
(375, 4, 'PED 114', 'Research in Education', 'Wednesday / Friday', '3:00-4:30', '4b', '11', 'College of Education'),
(376, 4, 'FSC 104', 'Exploring the Curriculum', 'Wednesday / Friday', '1:30-3:00', '4b', '11', 'College of Education'),
(377, 4, 'FSC 105', 'Learning Assessment Strategies', 'Wednesday / Friday', '10:30-12:00', '4b', '11', 'College of Education'),
(378, 4, 'FSC 106', 'On Becoming a Teacher', 'Wednesday / Friday', '9:00-10:30', '4b', '11', 'College of Education'),
(379, 1, 'Eng 1', 'Communication Skills 1 (Study and Thinking Skills)', 'Monday / Wednesday', '9:00-10:30', '1a', '12', 'College of Nursing and Midwifery'),
(380, 1, 'Fil 1', 'Sining ng Pakikipagtalastasan / Komunikasyon sa Akademikong Filipino', 'Monday / Wednesday', '10:30-12:00', '1a', '12', 'College of Nursing and Midwifery'),
(381, 1, 'Chem 1', 'General Chemistry-Inorganic (Lec=3 units/Lab=2 units)', 'Monday / Wednesday', '1:30-3:00', '1a', '12', 'College of Nursing and Midwifery'),
(382, 1, 'Math 1', 'College Algebra', 'Monday / Wednesday', '3:00-4:30', '1a', '12', 'College of Nursing and Midwifery'),
(383, 1, 'Psych 1', 'General Zoology (Lec=3 units/Lab=2 units)', 'Tuesday / Thursday', '9:00-10:30', '1a', '12', 'College of Nursing and Midwifery'),
(384, 1, 'TFN', 'Foundation of Nursing Practice', 'Tuesday / Thursday', '10:30-12:00', '1a', '12', 'College of Nursing and Midwifery'),
(385, 1, 'PE 1', 'Gymnastics / Physical Fitness', 'Tuesday / Thursday', '1:30-3:00', '1a', '12', 'College of Nursing and Midwifery'),
(386, 1, 'NSTP 1', 'Civic Welfare Training Service 1 (CWTS)', 'Friday', '9:00-12:00', '1a', '12', 'College of Nursing and Midwifery'),
(387, 1, 'Eng 1', 'Communication Skills 1 (Study and Thinking Skills)', 'Monday / Wednesday', '1:30-3:00', '1b', '12', 'College of Nursing and Midwifery'),
(388, 1, 'Fil 1', 'Sining ng Pakikipagtalastasan / Komunikasyon sa Akademikong Filipino', 'Monday / Wednesday', '10:30-12:00', '1b', '12', 'College of Nursing and Midwifery'),
(389, 1, 'Chem 1', 'General Chemistry-Inorganic (Lec=3 units/Lab=2 units)', 'Monday / Wednesday', '9:00-10:30', '1b', '12', 'College of Nursing and Midwifery'),
(390, 1, 'Math 1', 'College Algebra', 'Monday / Wednesday', '10:30-12:00', '1b', '12', 'College of Nursing and Midwifery'),
(391, 1, 'Psych 1', 'General Zoology (Lec=3 units/Lab=2 units)', 'Tuesday / Thursday', '9:00-10:30', '1b', '12', 'College of Nursing and Midwifery'),
(392, 1, 'TFN', 'Foundation of Nursing Practice', 'Tuesday / Thursday', '1:30-3:00', '1b', '12', 'College of Nursing and Midwifery'),
(393, 1, 'PE 1', 'Gymnastics / Physical Fitness', 'Tuesday / Thursday', '10:30-12:00', '1b', '12', 'College of Nursing and Midwifery'),
(394, 1, 'NSTP 1', 'Civic Welfare Training Service 1 (CWTS)', 'Friday', '9:00-12:00', '1b', '12', 'College of Nursing and Midwifery'),
(395, 2, 'NCM 101', 'Care of Mother, Child and Family (Lec=4 units/RLE=3 units/SL=0.5 unit)', 'Monday / Wednesday', '1:30-3:00', '2a', '12', 'College of Nursing and Midwifery'),
(396, 2, 'CHN', 'Community Health Nursing (Lec=3 units/RLE=1.5 units/SL=0.5 unit)', 'Monday / Wednesday', '10:30-12:00', '2a', '12', 'College of Nursing and Midwifery'),
(397, 2, 'Micro/Para', 'Microbiology and Parasitology (Lec=3 units/Lab=1 unit)', 'Monday / Wednesday', '9:00-10:30', '2a', '12', 'College of Nursing and Midwifery'),
(398, 2, 'Philo 1', 'Philosophy of Man', 'Monday / Wednesday', '10:30-12:00', '2a', '12', 'College of Nursing and Midwifery'),
(399, 2, 'Rizal', 'Life, Works and Writings of Rizal', 'Tuesday / Thursday', '9:00-10:30', '2a', '12', 'College of Nursing and Midwifery'),
(400, 2, 'HECO', 'Health Economics (with Taxation & Land Reform)', 'Tuesday / Thursday', '1:30-3:00', '2a', '12', 'College of Nursing and Midwifery'),
(401, 2, 'PE 3', 'Individual and Dual Sports', 'Tuesday / Thursday', '10:30-12:00', '2a', '12', 'College of Nursing and Midwifery'),
(402, 2, 'NCM 101', 'Care of Mother, Child and Family (Lec=4 units/RLE=3 units/SL=0.5 unit)', 'Monday / Wednesday', '9:00-10:30', '2b', '12', 'College of Nursing and Midwifery'),
(403, 2, 'CHN', 'Community Health Nursing (Lec=3 units/RLE=1.5 units/SL=0.5 unit)', 'Monday / Wednesday', '10:30-12:00', '2b', '12', 'College of Nursing and Midwifery'),
(404, 2, 'Micro/Para', 'Microbiology and Parasitology (Lec=3 units/Lab=1 unit)', 'Monday / Wednesday', '1:30-3:00', '2b', '12', 'College of Nursing and Midwifery'),
(405, 2, 'Philo 1', 'Philosophy of Man', 'Monday / Wednesday', '3:00-4:30', '2b', '12', 'College of Nursing and Midwifery'),
(406, 2, 'Rizal', 'Life, Works and Writings of Rizal', 'Tuesday / Thursday', '9:00-10:30', '2b', '12', 'College of Nursing and Midwifery'),
(407, 2, 'HECO', 'Health Economics (with Taxation & Land Reform)', 'Tuesday / Thursday', '10:30-12:00', '2b', '12', 'College of Nursing and Midwifery'),
(408, 2, 'PE 3', 'Individual and Dual Sports', 'Tuesday / Thursday', '1:30-3:00', '2b', '12', 'College of Nursing and Midwifery'),
(409, 3, 'NCM 103', 'Care of Clients with Problem in Oxygenation, Fluid and Electrolyte Balance, Metabolism and Endocrine (Lec=8 units/RLE=5 units/SL=1 unit)', 'Monday / Wednesday', '1:30-3:00', '3a', '12', 'College of Nursing and Midwifery'),
(410, 3, 'SOC SCI 2a', 'Sociology and Anthropology (with Family Planning)', 'Monday / Wednesday', '10:30-12:00', '3a', '12', 'College of Nursing and Midwifery'),
(411, 3, 'Biostat', 'Biostatistics', 'Monday / Wednesday', '9:00-10:30', '3a', '12', 'College of Nursing and Midwifery'),
(412, 3, 'Hum 3', 'Humanities (World Civilization and Literature', 'Monday / Wednesday', '10:30-12:00', '3a', '12', 'College of Nursing and Midwifery'),
(413, 3, 'NPEP', 'Nursing Personality Enhancement Program', 'Tuesday / Thursday', '9:00-10:30', '3a', '12', 'College of Nursing and Midwifery'),
(414, 3, 'NCM 103', 'Care of Clients with Problem in Oxygenation, Fluid and Electrolyte Balance, Metabolism and Endocrine (Lec=8 units/RLE=5 units/SL=1 unit)', 'Monday / Wednesday', '9:00-10:30', '3b', '12', 'College of Nursing and Midwifery'),
(415, 3, 'SOC SCI 2a', 'Sociology and Anthropology (with Family Planning)', 'Monday / Wednesday', '10:30-12:00', '3b', '12', 'College of Nursing and Midwifery'),
(416, 3, 'Biostat', 'Biostatistics', 'Monday / Wednesday', '1:30-3:00', '3b', '12', 'College of Nursing and Midwifery'),
(417, 3, 'Hum 3', 'Humanities (World Civilization and Literature', 'Monday / Wednesday', '3:00-4:30', '3b', '12', 'College of Nursing and Midwifery'),
(418, 3, 'NPEP', 'Nursing Personality Enhancement Program', 'Tuesday / Thursday', '9:00-10:30', '3b', '12', 'College of Nursing and Midwifery'),
(419, 4, 'NCM 106', 'Care of Clients with Problem in Cellular Aberration, Acute Biologic Crisis Including Emergency and Disaster Nursing(Lec=6 units/RLE=3 units/SL=1 unit)', 'Monday / Wednesday', '1:30-3:00', '4a', '12', 'College of Nursing and Midwifery'),
(420, 4, 'NCM 107', 'Nursing Leadership and Management (Lecture)', 'Monday / Wednesday', '10:30-12:00', '4a', '12', 'College of Nursing and Midwifery'),
(421, 4, 'INRES 2', 'Nursing Research 2', 'Monday / Wednesday', '9:00-10:30', '4a', '12', 'College of Nursing and Midwifery'),
(422, 4, 'ELective 2', 'Elective Course 2', 'Monday / Wednesday', '10:30-12:00', '4a', '12', 'College of Nursing and Midwifery');
INSERT INTO `portal_schedules` (`id_sched`, `year`, `subject_code`, `description`, `days`, `time`, `section`, `course_id`, `college_dept`) VALUES
(423, 4, 'CA 1', 'Competency Appraisal 1', 'Tuesday / Thursday', '9:00-10:30', '4a', '12', 'College of Nursing and Midwifery'),
(424, 4, 'NCM 106', 'Care of Clients with Problem in Cellular Aberration, Acute Biologic Crisis Including Emergency and Disaster Nursing(Lec=6 units/RLE=3 units/SL=1 unit)', 'Monday / Wednesday', '9:00-10:30', '4b', '12', 'College of Nursing and Midwifery'),
(425, 4, 'NCM 107', 'Nursing Leadership and Management (Lecture)', 'Monday / Wednesday', '10:30-12:00', '4b', '12', 'College of Nursing and Midwifery'),
(426, 4, 'INRES 2', 'Nursing Research 2', 'Monday / Wednesday', '1:30-3:00', '4b', '12', 'College of Nursing and Midwifery'),
(427, 4, 'ELective 2', 'Elective Course 2', 'Monday / Wednesday', '3:00-4:30', '4b', '12', 'College of Nursing and Midwifery'),
(428, 4, 'CA 1', 'Competency Appraisal 1', 'Tuesday / Thursday', '9:00-10:30', '4b', '12', 'College of Nursing and Midwifery'),
(429, 1, 'ENG 101', 'Study and Thinking Skills', 'Monday / Tuesday', '9:00-10:30', '1a', '13', 'College of Arts and Sciences'),
(430, 1, 'FIL 101', 'Komunikasyon sa Akademikong Filipino', 'Monday / Tuesday', '10:30-12:00', '1a', '13', 'College of Arts and Sciences'),
(431, 1, 'MAT 101', 'Basic Math', 'Monday / Tuesday', '1:30-3:00', '1a', '13', 'College of Arts and Sciences'),
(432, 1, 'NSC 101', 'Physical Science', 'Monday / Tuesday', '3:00-4:30', '1a', '13', 'College of Arts and Sciences'),
(433, 1, 'PHI 101', 'Philosophy of Man', 'Wednesday / Friday', '4:30-6:00', '1a', '13', 'College of Arts and Sciences'),
(434, 1, 'ACT 105', 'Application Integration Software', 'Wednesday / Friday', '1:30-3:00', '1a', '13', 'College of Arts and Sciences'),
(435, 1, 'BPG 101', 'Intro to Public Administration', 'Wednesday / Friday', '3:00-4:30', '1a', '13', 'College of Arts and Sciences'),
(436, 1, 'PHE 101', 'Gymnastics', 'Wednesday / Friday', '4:30-6:00', '1a', '13', 'College of Arts and Sciences'),
(437, 1, 'CWT 101', 'CWTS/ROTC', 'Saturday', '9:00-12:00', '1a', '13', 'College of Arts and Sciences'),
(438, 1, 'ENG 101', 'Study and Thinking Skills', 'Monday / Tuesday', '4:30-6:00', '1b', '13', 'College of Arts and Sciences'),
(439, 1, 'FIL 101', 'Komunikasyon sa Akademikong Filipino', 'Monday / Tuesday', '3:00-4:30', '1b', '13', 'College of Arts and Sciences'),
(440, 1, 'MAT 101', 'Basic Math', 'Monday / Tuesday', '1:30-3:00', '1b', '13', 'College of Arts and Sciences'),
(441, 1, 'NSC 101', 'Physical Science', 'Monday / Tuesday', '10:30-12:00', '1b', '13', 'College of Arts and Sciences'),
(442, 1, 'PHI 101', 'Philosophy of Man', 'Wednesday / Friday', '9:00-10:30', '1b', '13', 'College of Arts and Sciences'),
(443, 1, 'ACT 105', 'Application Integration Software', 'Wednesday / Friday', '4:30-6:00', '1b', '13', 'College of Arts and Sciences'),
(444, 1, 'BPG 101', 'Intro to Public Administration', 'Wednesday / Friday', '3:00-4:30', '1b', '13', 'College of Arts and Sciences'),
(445, 1, 'PHE 101', 'Gymnastics', 'Wednesday / Friday', '1:30-3:00', '1b', '13', 'College of Arts and Sciences'),
(446, 1, 'CWT 101', 'CWTS/ROTC', 'Saturday', '9:00-12:00', '1b', '13', 'College of Arts and Sciences'),
(447, 2, 'ENG 203', 'Speech & Oral Communication', 'Monday / Tuesday', '9:00-10:30', '2a', '13', 'College of Arts and Sciences'),
(448, 2, 'MAT 308', 'Business Statistics', 'Monday / Tuesday', '10:30-12:00', '2a', '13', 'College of Arts and Sciences'),
(449, 2, 'BPG 201', 'Organization and Mgmt. of Brgy.', 'Monday / Tuesday', '1:30-3:00', '2a', '13', 'College of Arts and Sciences'),
(450, 2, 'ELE', 'Record & Property Mgmt.', 'Monday / Tuesday', '3:00-4:30', '2a', '13', 'College of Arts and Sciences'),
(451, 2, 'BPG 202', 'Ethics and Accountability', 'Wednesday / Friday', '4:30-6:00', '2a', '13', 'College of Arts and Sciences'),
(452, 2, 'BPG 203', 'Brgy. Justice System', 'Wednesday / Friday', '1:30-3:00', '2a', '13', 'College of Arts and Sciences'),
(453, 2, 'PSY 101', 'General Psychology', 'Wednesday / Friday', '3:00-4:30', '2a', '13', 'College of Arts and Sciences'),
(454, 2, 'PHE 202', 'Individual Sports', 'Wednesday / Friday', '4:30-6:00', '2a', '13', 'College of Arts and Sciences'),
(455, 2, 'ELE 201', 'Intro to Political Law', 'Saturday', '9:00-12:00', '2a', '13', 'College of Arts and Sciences'),
(456, 2, 'ENG 203', 'Speech & Oral Communication', 'Monday / Tuesday', '4:30-6:00', '2b', '13', 'College of Arts and Sciences'),
(457, 2, 'MAT 308', 'Business Statistics', 'Monday / Tuesday', '3:00-4:30', '2b', '13', 'College of Arts and Sciences'),
(458, 2, 'BPG 201', 'Organization and Mgmt. of Brgy.', 'Monday / Tuesday', '1:30-3:00', '2b', '13', 'College of Arts and Sciences'),
(459, 2, 'ELE', 'Record & Property Mgmt.', 'Monday / Tuesday', '10:30-12:00', '2b', '13', 'College of Arts and Sciences'),
(460, 2, 'BPG 202', 'Ethics and Accountability', 'Wednesday / Friday', '9:00-10:30', '2b', '13', 'College of Arts and Sciences'),
(461, 2, 'BPG 203', 'Brgy. Justice System', 'Wednesday / Friday', '4:30-6:00', '2b', '13', 'College of Arts and Sciences'),
(462, 2, 'PSY 101', 'General Psychology', 'Wednesday / Friday', '3:00-4:30', '2b', '13', 'College of Arts and Sciences'),
(463, 2, 'PHE 202', 'Individual Sports', 'Wednesday / Friday', '1:30-3:00', '2b', '13', 'College of Arts and Sciences'),
(464, 2, 'ELE 201', 'Intro to Political Law', 'Saturday', '9:00-12:00', '2b', '13', 'College of Arts and Sciences'),
(465, 3, 'BPG 308', 'Administrative Law', 'Monday / Tuesday', '9:00-10:30', '3a', '13', 'College of Arts and Sciences'),
(466, 3, 'BPG 309', 'Legal Aspect of Public Admin', 'Monday / Tuesday', '10:30-12:00', '3a', '13', 'College of Arts and Sciences'),
(467, 3, 'BPG 310', 'Corporate Governance', 'Monday / Tuesday', '1:30-3:00', '3a', '13', 'College of Arts and Sciences'),
(468, 3, 'BPG 311', 'Leadership and Decision Making', 'Monday / Tuesday', '3:00-4:30', '3a', '13', 'College of Arts and Sciences'),
(469, 3, 'ELE 301', 'Intro. To Civil Law', 'Wednesday / Friday', '4:30-6:00', '3a', '13', 'College of Arts and Sciences'),
(470, 3, 'ELE 302', 'Public Speaking & Arguments', 'Wednesday / Friday', '1:30-3:00', '3a', '13', 'College of Arts and Sciences'),
(471, 3, 'EKE', 'Envi. Resource Mgt.', 'Wednesday / Friday', '3:00-4:30', '3a', '13', 'College of Arts and Sciences'),
(472, 3, 'BPG 308', 'Administrative Law', 'Monday / Tuesday', '4:30-6:00', '3b', '13', 'College of Arts and Sciences'),
(473, 3, 'BPG 309', 'Legal Aspect of Public Admin', 'Monday / Tuesday', '3:00-4:30', '3b', '13', 'College of Arts and Sciences'),
(474, 3, 'BPG 310', 'Corporate Governance', 'Monday / Tuesday', '1:30-3:00', '3b', '13', 'College of Arts and Sciences'),
(475, 3, 'BPG 311', 'Leadership and Decision Making', 'Monday / Tuesday', '10:30-12:00', '3b', '13', 'College of Arts and Sciences'),
(476, 3, 'ELE 301', 'Intro. To Civil Law', 'Wednesday / Friday', '9:00-10:30', '3b', '13', 'College of Arts and Sciences'),
(477, 3, 'ELE 302', 'Public Speaking & Arguments', 'Wednesday / Friday', '4:30-6:00', '3b', '13', 'College of Arts and Sciences'),
(478, 3, 'EKE', 'Envi. Resource Mgt.', 'Wednesday / Friday', '3:00-4:30', '3b', '13', 'College of Arts and Sciences'),
(479, 4, 'BPG 419', 'Intro to International Law', 'Monday / Tuesday', '9:00-10:30', '4a', '13', 'College of Arts and Sciences'),
(480, 4, 'BPG 420', 'Mgt. Information System', 'Monday / Tuesday', '10:30-12:00', '4a', '13', 'College of Arts and Sciences'),
(481, 4, 'BPG 421', 'Research Method 2 THESIS', 'Monday / Tuesday', '1:30-3:00', '4a', '13', 'College of Arts and Sciences'),
(482, 4, 'ELE 401', 'Persons & Family Relations', 'Monday / Tuesday', '3:00-4:30', '4a', '13', 'College of Arts and Sciences'),
(483, 4, 'RIZ 201', 'Rizal''s Life, Works & Writings', 'Wednesday', '10:30-12:00', '4a', '13', 'College of Arts and Sciences'),
(484, 4, 'BPG 419', 'Intro to International Law', 'Monday / Tuesday', '4:30-6:00', '4a', '13', 'College of Arts and Sciences'),
(485, 4, 'BPG 420', 'Mgt. Information System', 'Monday / Tuesday', '3:00-4:30', '4a', '13', 'College of Arts and Sciences'),
(486, 4, 'BPG 421', 'Research Method 2 THESIS', 'Monday / Tuesday', '1:30-3:00', '4a', '13', 'College of Arts and Sciences'),
(487, 4, 'ELE 401', 'Persons & Family Relations', 'Monday / Tuesday', '10:30-12:00', '4a', '13', 'College of Arts and Sciences'),
(488, 4, 'RIZ 201', 'Rizal''s Life, Works & Writings', 'Wednesday', '7:30-10:30', '4a', '13', 'College of Arts and Sciences');

-- --------------------------------------------------------

--
-- Table structure for table `portal_schedules_assigned`
--

CREATE TABLE `portal_schedules_assigned` (
  `id_sched_assigned` int(255) NOT NULL,
  `faculty_id` int(255) NOT NULL,
  `id_sched` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `portal_subjects`
--

CREATE TABLE `portal_subjects` (
  `id` int(255) NOT NULL,
  `subj_code` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `year` varchar(255) NOT NULL,
  `sem` varchar(255) NOT NULL,
  `no_units` int(255) NOT NULL,
  `college_dept` varchar(255) NOT NULL,
  `course_id` int(5) NOT NULL,
  `curriculum_id` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `portal_subjects`
--

INSERT INTO `portal_subjects` (`id`, `subj_code`, `description`, `year`, `sem`, `no_units`, `college_dept`, `course_id`, `curriculum_id`) VALUES
(25, 'ENG 1', 'Study and Thinking Skills', '1', '1', 3, 'College of Business Administration', 4, 2),
(26, 'FIL 1', 'Sining ng Pakikipagtalastasan', '1', '1', 3, 'College of Business Administration', 4, 2),
(27, 'MATH 1', 'Basic Mathematics', '1', '1', 3, 'College of Business Administration', 4, 2),
(28, 'NS 1', 'Intro. To Biological Science', '1', '1', 3, 'College of Business Administration', 4, 2),
(29, 'SOC SCI 1', 'Philippine History', '1', '1', 3, 'College of Business Administration', 4, 2),
(30, 'PSYCH 1', 'General Psychology', '1', '1', 3, 'College of Business Administration', 4, 2),
(31, 'BBC 1 / MGT 1', 'Principles of Management ', '1', '1', 3, 'College of Business Administration', 4, 2),
(32, 'PE 1', 'Gymnastics', '1', '1', 3, 'College of Business Administration', 4, 2),
(33, 'NSTP 1 ', 'Nat''l Service Training Prog. 1', '1', '1', 3, 'College of Business Administration', 4, 2),
(34, 'ENG 2', 'Reading and Writing in the Discipline', '1', '2', 3, 'College of Business Administration', 4, 2),
(35, 'FIL 2', 'Pagbasa at Pagsulat tungo sa Pananaliksik', '1', '2', 3, 'College of Business Administration', 4, 2),
(36, 'MATH 2', 'College Algebra', '1', '2', 3, 'College of Business Administration', 4, 2),
(37, 'NS 2', 'Intro. To Physical Science', '1', '2', 3, 'College of Business Administration', 4, 2),
(38, 'BBC 2 / MKTG', 'Principles of Marketing', '1', '2', 3, 'College of Business Administration', 4, 2),
(39, 'PHILO 1', 'Philosophy of Man', '1', '2', 3, 'College of Business Administration', 4, 2),
(40, 'PSYCH 2 ', 'Business Psychology', '1', '2', 3, 'College of Business Administration', 4, 2),
(41, 'PE 2', 'Rhytmic Activities', '1', '2', 3, 'College of Business Administration', 4, 2),
(42, 'NSTP 2 ', 'Nat''l Service Training Prog.II', '1', '2', 3, 'College of Business Administration', 4, 2),
(43, 'BBC 3 / ENG 6', 'Business Communication', '2', '1', 3, 'College of Business Administration', 4, 2),
(44, 'BBC4 / ACCTG 1', 'Single Proprietorship-Service', '2', '1', 3, 'College of Business Administration', 4, 2),
(45, 'CS 1', 'Introduction to Computer', '2', '1', 3, 'College of Business Administration', 4, 2),
(46, 'HUM 1', 'Introduction to Humanities', '2', '1', 3, 'College of Business Administration', 4, 2),
(47, 'SOC SCI 2', 'Philippine Constitution', '2', '1', 3, 'College of Business Administration', 4, 2),
(48, 'SOC SCI 3', 'Principles of Economics w/ LRT', '2', '1', 3, 'College of Business Administration', 4, 2),
(49, 'SOC SCI 4 ', 'Society and Culture', '2', '1', 3, 'College of Business Administration', 4, 2),
(50, 'MATH 4', 'Business Mathematics', '2', '1', 3, 'College of Business Administration', 4, 2),
(51, 'PE 3', 'Individual / Dual Sports', '2', '1', 3, 'College of Business Administration', 4, 2),
(52, 'BEC 1', 'Microeconomics', '2', '2', 3, 'College of Business Administration', 4, 2),
(53, 'BEC 2', 'Social Resp. & Good Governance', '2', '2', 3, 'College of Business Administration', 4, 2),
(54, 'BEC 3 / ACCTG 2', 'Single Proprietorship-Merchandising', '2', '2', 3, 'College of Business Administration', 4, 2),
(55, 'MATH 9', 'Math of Investment', '2', '2', 3, 'College of Business Administration', 4, 2),
(56, 'LIT ', 'Philippine Literature', '2', '2', 3, 'College of Business Administration', 4, 2),
(57, 'MC ', 'Life and Works of Rizal', '2', '2', 3, 'College of Business Administration', 4, 2),
(58, 'BBC 5', 'Human Behavior in Organization', '2', '2', 3, 'College of Business Administration', 4, 2),
(59, 'BBC 6 / CS 4', 'Integrated Application Software', '2', '2', 3, 'College of Business Administration', 4, 2),
(60, 'PE 4', 'Team Sports', '2', '2', 3, 'College of Business Administration', 4, 2),
(61, 'MATH 10', 'Business Statistics', '3', '1', 3, 'College of Business Administration', 4, 2),
(62, 'BBC 7', 'Money, Credit and Banking', '3', '1', 3, 'College of Business Administration', 4, 2),
(63, 'BEC 4', 'Obligations and Contracts', '3', '1', 3, 'College of Business Administration', 4, 2),
(64, 'BEC 5', 'Income Taxation', '3', '1', 3, 'College of Business Administration', 4, 2),
(65, 'BEC 6', 'Human Resource Management', '3', '1', 3, 'College of Business Administration', 4, 2),
(66, 'ACCTG 3', 'Partnership Accounting', '3', '1', 3, 'College of Business Administration', 4, 2),
(67, 'EMM 1', 'Entrepreneurship Management', '3', '1', 3, 'College of Business Administration', 4, 2),
(68, 'PMM 1', 'Professional Salesmanship', '3', '1', 3, 'College of Business Administration', 4, 2),
(69, 'TAX 2', 'Transfer Business Taxation', '3', '2', 3, 'College of Business Administration', 4, 2),
(70, 'ACCTG 4', 'Corporation Accounting', '3', '2', 3, 'College of Business Administration', 4, 2),
(71, 'MATH 11', 'Quantitative Techniques', '3', '2', 3, 'College of Business Administration', 4, 2),
(72, 'PMM 2', 'Marketing Management', '3', '2', 3, 'College of Business Administration', 4, 2),
(73, 'PMM 3', 'Distribution Management', '3', '2', 3, 'College of Business Administration', 4, 2),
(74, 'PMM 4', 'Marketing Research', '3', '2', 3, 'College of Business Administration', 4, 2),
(75, 'BEC 7 ', 'Total Quality Management', '3', '2', 3, 'College of Business Administration', 4, 2),
(76, 'LAW 2', 'Law on Partnership & Corporation', '3', '2', 3, 'College of Business Administration', 4, 2),
(77, 'PMM 5', 'Advertising', '4', '1', 3, 'College of Business Administration', 4, 2),
(78, 'PMM 6 ', 'Product Management', '4', '1', 3, 'College of Business Administration', 4, 2),
(79, 'PMM 7 ', 'Retail Management', '4', '1', 3, 'College of Business Administration', 4, 2),
(80, 'EMM 3', 'Service Management', '4', '1', 3, 'College of Business Administration', 4, 2),
(81, 'EMM 4', 'Consumer Behavior', '4', '1', 3, 'College of Business Administration', 4, 2),
(82, 'EMM 5', 'Feasibility Study', '4', '1', 3, 'College of Business Administration', 4, 2),
(83, 'EMM 2 ', 'Franchising', '4', '1', 3, 'College of Business Administration', 4, 2),
(84, 'Ethics', 'Business Ethics', '4', '1', 3, 'College of Business Administration', 4, 2),
(85, 'EMM 7', 'Environmental Marketing', '4', '2', 3, 'College of Business Administration', 4, 2),
(86, 'EMM 8 ', 'Direct Marketing', '4', '2', 3, 'College of Business Administration', 4, 2),
(87, 'EMM 9', 'International Marketing', '4', '2', 3, 'College of Business Administration', 4, 2),
(88, 'LAW 4', 'Negotiable Instruments', '4', '2', 3, 'College of Business Administration', 4, 2),
(89, 'OJT', 'Pract/Work Integrated Training', '4', '2', 6, 'College of Business Administration', 4, 2),
(90, 'EMM 6', 'Cooperative Marketing', '4', '2', 3, 'College of Business Administration', 4, 2),
(91, 'PMM 8', 'Strategic Marketing Management', '4', '2', 3, 'College of Business Administration', 4, 2),
(92, 'ENG 101', 'Study and Thinking Skills', '1', '1', 3, 'College of Business Administration', 5, 3),
(93, 'FIL 101', 'Sining ng Pakikipagtalastasan', '1', '1', 3, 'College of Business Administration', 5, 3),
(94, 'MAT 101 ', 'Basic Mathematics', '1', '1', 3, 'College of Business Administration', 5, 3),
(95, 'NSC 101', 'Intro. to Biological Science', '1', '1', 3, 'College of Business Administration', 5, 3),
(96, 'Hty 101 ', 'Philippine History', '1', '1', 3, 'College of Business Administration', 5, 3),
(97, 'Psy 101', 'General Psychology', '1', '1', 3, 'College of Business Administration', 5, 3),
(98, 'MGT 101', 'Principles of Management', '1', '1', 3, 'College of Business Administration', 5, 3),
(99, 'Phe 101', 'Gymnastics', '1', '1', 3, 'College of Business Administration', 5, 3),
(100, 'CWT 101', 'Civic Welfare Training Program I', '1', '1', 3, 'College of Business Administration', 5, 3),
(101, 'Eng 202', 'Reading and Writing in the Discipline', '1', '2', 3, 'College of Business Administration', 5, 3),
(102, 'Fil 102', 'Pagbasa at Pagsulat tungo sa Pananaliksik', '1', '2', 3, 'College of Business Administration', 5, 3),
(103, 'Mat 102 ', 'College Algebra', '1', '2', 3, 'College of Business Administration', 5, 3),
(104, 'Nsc 102 ', 'Intro. to Physical Science', '1', '2', 3, 'College of Business Administration', 5, 3),
(105, 'MKT 101 ', 'Principles of Marketing', '1', '2', 3, 'College of Business Administration', 5, 3),
(106, 'Phil 101', 'Philosophy of Man', '1', '2', 3, 'College of Business Administration', 5, 3),
(107, 'Psy 102', 'Business Psychology', '1', '2', 3, 'College of Business Administration', 5, 3),
(108, 'Phe 102', 'Rhytmic Activities', '1', '2', 3, 'College of Business Administration', 5, 3),
(109, 'CWT 102', 'Civic Welfare Training Program II', '1', '2', 3, 'College of Business Administration', 5, 3),
(110, 'Eng 206 ', 'Business Communication', '2', '1', 3, 'College of Business Administration', 5, 3),
(111, 'ACT 201', 'Single Proprietorship Service', '2', '1', 3, 'College of Business Administration', 5, 3),
(112, 'CSC 202', 'Introduction to Computer', '2', '1', 3, 'College of Business Administration', 5, 3),
(113, 'Hum 201', 'Introduction to Humanities', '2', '1', 3, 'College of Business Administration', 5, 3),
(114, 'Soc 201', 'Philippine Constitution', '2', '1', 3, 'College of Business Administration', 5, 3),
(115, 'ECO 101', 'Principles of Economics with LRT', '2', '1', 3, 'College of Business Administration', 5, 3),
(116, 'Soc 202', 'Society and Culture', '2', '1', 3, 'College of Business Administration', 5, 3),
(117, 'Mat 205', 'Business Mathematics', '2', '1', 3, 'College of Business Administration', 5, 3),
(118, 'Phe 208 ', 'Individual / Dual Sports', '2', '1', 3, 'College of Business Administration', 5, 3),
(119, 'ECO 202', 'Microeconomics', '2', '2', 3, 'College of Business Administration', 5, 3),
(120, 'MGT 202', 'Social Responsibility Good Governance', '2', '2', 3, 'College of Business Administration', 5, 3),
(121, 'ACT 202', 'Single Proprietorship Merchandise', '2', '2', 3, 'College of Business Administration', 5, 3),
(122, 'MAT 206', 'Math of Investment', '2', '2', 3, 'College of Business Administration', 5, 3),
(123, 'Lit 202', 'Philippine Literatures', '2', '2', 3, 'College of Business Administration', 5, 3),
(124, 'Hty 204', 'Life and Works of Rizal', '2', '2', 3, 'College of Business Administration', 5, 3),
(125, 'MGT 303', 'Human Behavior in Organization', '2', '2', 3, 'College of Business Administration', 5, 3),
(126, 'CSC 205', 'Integrated Application Software', '2', '2', 3, 'College of Business Administration', 5, 3),
(127, 'Phe 204', 'Team Sports', '2', '2', 3, 'College of Business Administration', 5, 3),
(128, 'FIN 301', 'Money, Credit And Banking', '3', '1', 3, 'College of Business Administration', 5, 3),
(129, 'MAT 308 ', 'Business Statistics', '3', '1', 3, 'College of Business Administration', 5, 3),
(130, 'ACT 303', 'Partnership Accounting', '3', '1', 3, 'College of Business Administration', 5, 3),
(131, 'LAW 301', 'Obligation and Contracts', '3', '1', 3, 'College of Business Administration', 5, 3),
(132, 'TAX 301', 'Income Taxation', '3', '1', 3, 'College of Business Administration', 5, 3),
(133, 'MGT 304', 'Human Resource Management', '3', '1', 3, 'College of Business Administration', 5, 3),
(134, 'MGT 316 ', 'Feasibility Study', '3', '1', 3, 'College of Business Administration', 5, 3),
(135, 'MGT 305', 'Operations Management', '3', '1', 3, 'College of Business Administration', 5, 3),
(136, 'MGT 308 ', 'Management Information System', '3', '2', 3, 'College of Business Administration', 5, 3),
(137, 'MGT 309', 'Entrepreneurial Management', '3', '2', 3, 'College of Business Administration', 5, 3),
(138, 'MGT 306', 'Operation Research', '3', '2', 3, 'College of Business Administration', 5, 3),
(139, 'TAX 202', 'Business Taxation', '3', '2', 3, 'College of Business Administration', 5, 3),
(140, 'ACT 304 ', 'Corporation Accounting', '3', '2', 3, 'College of Business Administration', 5, 3),
(141, 'MAT 310', 'Quantitative Techniques', '3', '2', 3, 'College of Business Administration', 5, 3),
(142, 'MGT 307', 'Project Management', '3', '2', 3, 'College of Business Administration', 5, 3),
(143, 'LAW 302', 'Law on Partnership and Corporation', '3', '2', 3, 'College of Business Administration', 5, 3),
(144, 'MGT 410 ', 'Inventory Mgt and Control', '4', '1', 3, 'College of Business Administration', 5, 3),
(145, 'MGT 411 ', 'Logistics Management', '4', '1', 3, 'College of Business Administration', 5, 3),
(146, 'MGT 412', 'Productivity and Quality Mgt', '4', '1', 3, 'College of Business Administration', 5, 3),
(147, 'MGT 413', 'Global / International Trade', '4', '1', 3, 'College of Business Administration', 5, 3),
(148, 'ACT 307', 'Cost Accounting', '4', '1', 3, 'College of Business Administration', 5, 3),
(149, 'M 415', 'Business Ethics', '4', '1', 3, 'College of Business Administration', 5, 3),
(150, 'MGT 414', 'Marketing Management', '4', '1', 3, 'College of Business Administration', 5, 3),
(151, 'MGT 421 ', 'Prac. / Work Integrated Learning', '4', '1', 6, 'College of Business Administration', 5, 3),
(152, 'MGT 417', 'Financial Management', '4', '2', 3, 'College of Business Administration', 5, 3),
(153, 'MGT 418 ', 'Environmental Management', '4', '2', 3, 'College of Business Administration', 5, 3),
(154, 'MGT 419', 'Facilities Management', '4', '2', 3, 'College of Business Administration', 5, 3),
(155, 'ACT 408', 'Management Accounting', '4', '2', 3, 'College of Business Administration', 5, 3),
(156, 'LAW 404', 'Negotiable Instrument', '4', '2', 3, 'College of Business Administration', 5, 3),
(157, 'MGT 421', 'Total Quality Management', '4', '2', 3, 'College of Business Administration', 5, 3),
(158, 'MGT 420', 'Strategic Operations Management', '4', '2', 3, 'College of Business Administration', 5, 3),
(159, 'MGT 421', 'Prac. / Work Integrated Learning', '4', '2', 6, 'College of Business Administration', 5, 3),
(400, 'ENG 101', 'Study and Thinking Skills', '1', '1', 3, 'College of Education', 9, 8),
(401, 'FIL 101', 'Komunikasyon sa Akademikong Filipino', '1', '1', 3, 'College of Education', 9, 8),
(402, 'MAT 101', 'Basic Mathematics', '1', '1', 3, 'College of Education', 9, 8),
(403, 'HTY 101', 'Phil. History', '1', '1', 3, 'College of Education', 9, 8),
(404, 'PSY 101', 'Gen. Psychology', '1', '1', 3, 'College of Education', 9, 8),
(405, 'SOC 201', 'Society and Culture', '1', '1', 3, 'College of Education', 9, 8),
(406, 'LIT 102', 'Phil. Literature in English', '1', '1', 3, 'College of Education', 9, 8),
(407, 'PED 101', 'The Teaching Profession', '1', '1', 3, 'College of Education', 9, 8),
(408, 'PHE 101', 'Gymnastics', '1', '1', 2, 'College of Education', 9, 8),
(409, 'NST 101', 'Nat''l Service Training Prog. 1', '1', '1', 3, 'College of Education', 9, 8),
(410, 'ENG 102', 'Reading & Writing Discipline', '1', '2', 3, 'College of Education', 9, 8),
(411, 'FIL 102', 'Pagbasa at Pagsulat tungo sa Pananaliksik', '1', '2', 3, 'College of Education', 9, 8),
(412, 'MAT 102', 'College Algebra', '1', '2', 3, 'College of Education', 9, 8),
(413, 'PED 102', 'Child & Adolescent Development', '1', '2', 3, 'College of Education', 9, 8),
(414, 'SOC 101', 'Phil. Constitution', '1', '2', 3, 'College of Education', 9, 8),
(415, 'HUM 201', 'Intro to Humanities', '1', '2', 3, 'College of Education', 9, 8),
(416, 'PED 103', 'Facilitating Human Learning', '1', '2', 3, 'College of Education', 9, 8),
(417, 'NSC 101', 'Intro to Biological Science', '1', '2', 3, 'College of Education', 9, 8),
(418, 'PHE 102', 'Rhythmic Activities', '1', '2', 2, 'College of Education', 9, 8),
(419, 'NST 102', 'Nat''l Service Training Prog. 2', '1', '2', 3, 'College of Education', 9, 8),
(420, 'PED 104', 'Social Dimension of Education', '2', '1', 3, 'College of Education', 9, 8),
(421, 'ENG 203', 'Speech and Oral Communication', '2', '1', 3, 'College of Education', 9, 8),
(422, 'FIL 203', 'Malikhang Pagsulat', '2', '1', 3, 'College of Education', 9, 8),
(423, 'PED 105', 'Principles of Teaching 1', '2', '1', 3, 'College of Education', 9, 8),
(424, 'CSC 102', 'Intro to Information Technology', '2', '1', 3, 'College of Education', 9, 8),
(425, 'CCE 118', 'Rat., Prin., Goals and Obj. of Early Childhood', '2', '1', 3, 'College of Education', 9, 8),
(426, 'PED 106', 'Educational Technology', '2', '1', 3, 'College of Education', 9, 8),
(427, 'CCE 105', 'Trigonometry', '2', '1', 3, 'College of Education', 9, 8),
(428, 'NSC 102', 'Intro to Physical Science', '2', '1', 3, 'College of Education', 9, 8),
(429, 'PHE 103', 'Individual/Dual Sports', '2', '1', 2, 'College of Education', 9, 8),
(430, 'ECO 101', 'Principles of Economics w/ LRT', '2', '2', 3, 'College of Education', 9, 8),
(431, 'PED 107', 'Principles of Teaching 2', '2', '2', 3, 'College of Education', 9, 8),
(432, 'CCE 116', 'Music, Arts and P.E', '2', '2', 3, 'College of Education', 9, 8),
(433, 'CCE 106', 'Contemporary Math', '2', '2', 3, 'College of Education', 9, 8),
(434, 'PED 108', 'Educ. Technology 2', '2', '2', 3, 'College of Education', 9, 8),
(435, 'LIT 203', 'World Literature', '2', '2', 3, 'College of Education', 9, 8),
(436, 'CCE 119', 'The Pre-School Child', '2', '2', 3, 'College of Education', 9, 8),
(437, 'CCE 101', 'Environmental Science', '2', '2', 3, 'College of Education', 9, 8),
(438, 'CCE 102', 'Astronomy', '2', '2', 2, 'College of Education', 9, 8),
(439, 'PHE 104', 'Team Sports', '2', '2', 2, 'College of Education', 9, 8),
(440, 'PED 110', 'Development Reading 1', '3', '1', 3, 'College of Education', 9, 8),
(441, 'PED 111', 'Assessment of Learning 1', '3', '1', 3, 'College of Education', 9, 8),
(442, 'PED 109', 'Curriculum Development', '3', '1', 3, 'College of Education', 9, 8),
(443, 'CCE 103', 'General Chemistry', '3', '1', 3, 'College of Education', 9, 8),
(444, 'CCE 107', 'Plane Geometry', '3', '1', 3, 'College of Education', 9, 8),
(445, 'CCE 113', 'Geography', '3', '1', 3, 'College of Education', 9, 8),
(446, 'CCE 110', 'Advanced Grammar', '3', '1', 3, 'College of Education', 9, 8),
(447, 'CCE 120', 'The Pre-school Curriculum', '3', '1', 3, 'College of Education', 9, 8),
(448, 'CCE 111', 'Children''s Literature', '3', '1', 3, 'College of Education', 9, 8),
(449, 'PED 112', 'Assessment of Learning 2', '3', '2', 3, 'College of Education', 9, 8),
(450, 'CCE 114', 'World History and Culture', '3', '2', 3, 'College of Education', 9, 8),
(451, 'CCE 104', 'General Physics', '3', '2', 3, 'College of Education', 9, 8),
(452, 'CCE 112', 'Panitikang Filipino', '3', '2', 3, 'College of Education', 9, 8),
(453, 'CCE 117', 'Home Economic and Livelihood Education', '3', '2', 3, 'College of Education', 9, 8),
(454, 'PED 120', 'Developmental Reading 2', '3', '2', 3, 'College of Education', 9, 8),
(455, 'CCE 121', 'Creative Arts, Music & Drama for Young Children', '3', '2', 3, 'College of Education', 9, 8),
(456, 'CCE 108', 'Analytical Geometry', '3', '2', 3, 'College of Education', 9, 8),
(457, 'FSC 103', 'Learner''s Development & Environment', '3', '2', 1, 'College of Education', 9, 8),
(458, 'FSC 102', 'Experiencing Teaching Learning Process', '3', '2', 1, 'College of Education', 9, 8),
(459, 'FSC 103', 'Technology in the Learning Environment', '3', '2', 1, 'College of Education', 9, 8),
(460, 'CCE 112', 'Personal and Social Dev''t, Play and Social Living and Experiencing', '4', '1', 3, 'College of Education', 9, 8),
(461, 'CCE 123', 'Origin and Management of Pre School', '4', '1', 3, 'College of Education', 9, 8),
(462, 'CCE 109', 'Teaching Problem Solving', '4', '1', 3, 'College of Education', 9, 8),
(463, 'RIZ 101', 'Life and Works of Rizal', '4', '1', 3, 'College of Education', 9, 8),
(464, 'PED 114', 'Research Education', '4', '1', 3, 'College of Education', 9, 8),
(465, 'CCE 125', 'Values Education for Teachers', '4', '1', 3, 'College of Education', 9, 8),
(466, 'FSC 104', 'Exploring the Curriculum', '4', '1', 1, 'College of Education', 9, 8),
(467, 'FSC 105', 'Learning Assessment and Strategies', '4', '1', 1, 'College of Education', 9, 8),
(468, 'FSC 106', 'On Becoming a Teacher', '4', '1', 1, 'College of Education', 9, 8),
(469, 'PED 115', 'LET Review 1 (Prof Education)', '4', '1', 3, 'College of Education', 9, 8),
(470, 'PED 113', 'Special Topics in Education', '4', '2', 3, 'College of Education', 9, 8),
(471, 'PED 116', 'Thesis Writing', '4', '2', 3, 'College of Education', 9, 8),
(472, 'CCE 115', 'Bldg. Bridges Across Soc. Sci. Disciplines', '4', '2', 3, 'College of Education', 9, 8),
(473, 'PED 117', 'Student Teaching', '4', '2', 6, 'College of Education', 9, 8),
(474, 'PED 118', 'LET Review 2 (Gen Education)', '4', '2', 3, 'College of Education', 9, 8),
(475, 'CCE 124', 'Science and Health, Nature Study and Numeracy for Young Children', '4', '2', 3, 'College of Education', 9, 8),
(476, 'ENG 101', 'Study and Thinking Skills', '1', '1', 3, 'College of Education', 10, 9),
(477, 'FIL 101', 'Komunikasyon sa Akademikong Filipino', '1', '1', 3, 'College of Education', 10, 9),
(478, 'MAT 101', 'Basic Mathematics', '1', '1', 3, 'College of Education', 10, 9),
(479, 'HTY 101', 'Phil History', '1', '1', 3, 'College of Education', 10, 9),
(480, 'PSY 101', 'General Psychology', '1', '1', 3, 'College of Education', 10, 9),
(481, 'SOC 201', 'Society and Culture', '1', '1', 3, 'College of Education', 10, 9),
(482, 'LIT 102', 'Phil Literature in English', '1', '1', 3, 'College of Education', 10, 9),
(483, 'PED 101', 'The Teaching Profession', '1', '1', 3, 'College of Education', 10, 9),
(484, 'PHE 101', 'Gymnastics', '1', '1', 2, 'College of Education', 10, 9),
(485, 'NST 101', 'Nat''l Service Training Prog. 1', '1', '1', 3, 'College of Education', 10, 9),
(486, 'ENG 102', 'Reading & Writing Discipline', '1', '2', 3, 'College of Education', 10, 9),
(487, 'FIL 102', 'Pagbasa at Pagsulat tungo sa Pananaliksik', '1', '2', 3, 'College of Education', 10, 9),
(488, 'MAT 102', 'College Algebra', '1', '2', 3, 'College of Education', 10, 9),
(489, 'PED 102', 'Child & Adolescent Development', '1', '2', 3, 'College of Education', 10, 9),
(490, 'SOC 101', 'Phil Constitution', '1', '2', 3, 'College of Education', 10, 9),
(491, 'HUM 201', 'Intro to Humanities', '1', '2', 3, 'College of Education', 10, 9),
(492, 'PED 103', 'Facilitating Human Learning', '1', '2', 3, 'College of Education', 10, 9),
(493, 'NSC 101', 'Intro to Biological Science', '1', '2', 3, 'College of Education', 10, 9),
(494, 'PHE 102', 'Rhythmic Activities', '1', '2', 2, 'College of Education', 10, 9),
(495, 'NST 102', 'Nat''l Service Training Prog. 2', '1', '2', 3, 'College of Education', 10, 9),
(496, 'PED 104', 'Social Dimension of Education', '2', '1', 3, 'College of Education', 10, 9),
(497, 'ENG 203', 'Speech and Oral Communication', '2', '1', 3, 'College of Education', 10, 9),
(498, 'FIL 203', 'Malikhaing Pagsulat', '2', '1', 3, 'College of Education', 10, 9),
(499, 'PED 105', 'Principles of Teaching 1', '2', '1', 3, 'College of Education', 10, 9),
(500, 'EMJ 101', 'Creative Writing', '2', '1', 3, 'College of Education', 10, 9),
(501, 'EMJ 102', 'English & American Lit', '2', '1', 3, 'College of Education', 10, 9),
(502, 'PED 106', 'Educational Technology 1', '2', '1', 3, 'College of Education', 10, 9),
(503, 'CSC 102', 'Intro to Information Tech', '2', '1', 3, 'College of Education', 10, 9),
(504, 'NSC 102', 'Intro to Physical Science', '2', '1', 3, 'College of Education', 10, 9),
(505, 'PHE 103', 'Individual/Dual Sports', '2', '1', 2, 'College of Education', 10, 9),
(506, 'ECO 101', 'Principles of Economics w/ LRT', '2', '2', 3, 'College of Education', 10, 9),
(507, 'PED 107', 'Principles of Teaching 2', '2', '2', 3, 'College of Education', 10, 9),
(508, 'EMJ 103', 'Afro-Asian Literature', '2', '2', 3, 'College of Education', 10, 9),
(509, 'EMJ 104', 'Speech & Stage Arts', '2', '2', 3, 'College of Education', 10, 9),
(510, 'PED 108', 'Educ Technology 2', '2', '2', 3, 'College of Education', 10, 9),
(511, 'LIT 203', 'World Literature', '2', '2', 3, 'College of Education', 10, 9),
(512, 'RIZ 101', 'Life Works & Writings of Rizal', '2', '2', 3, 'College of Education', 10, 9),
(513, 'CCE 106', 'Contemporary Math', '2', '2', 3, 'College of Education', 10, 9),
(514, 'PED 109', 'Curriculum Development', '2', '2', 3, 'College of Education', 10, 9),
(515, 'PHE 104', 'Team Sports', '2', '2', 2, 'College of Education', 10, 9),
(516, 'PED 110', 'Developmental Reading 1', '3', '1', 3, 'College of Education', 10, 9),
(517, 'PED 111', 'Assessment of Learning 1', '3', '1', 3, 'College of Education', 10, 9),
(518, 'EMJ 105', 'Intro to Linguistics', '3', '1', 3, 'College of Education', 10, 9),
(519, 'EMJ 106', 'Literary Criticism', '3', '1', 3, 'College of Education', 10, 9),
(520, 'EMJ 107', 'Remedial Instruction to English', '3', '1', 3, 'College of Education', 10, 9),
(521, 'EMJ 108', 'Advance Grammar', '3', '1', 3, 'College of Education', 10, 9),
(522, 'EMJ 109', 'Mythology & Folklore', '3', '1', 3, 'College of Education', 10, 9),
(523, 'EMJ 110', 'Campus Journalism', '3', '1', 3, 'College of Education', 10, 9),
(524, 'CCE 125', 'Values Education for Teachers', '3', '1', 3, 'College of Education', 10, 9),
(525, 'PED 112', 'Assessment of Learning', '3', '2', 3, 'College of Education', 10, 9),
(526, 'PED 113', 'Special Topics in Education', '3', '2', 3, 'College of Education', 10, 9),
(527, 'EMJ 111', 'Structure in English', '3', '2', 3, 'College of Education', 10, 9),
(528, 'EMJ 112', 'Teaching of Literature', '3', '2', 3, 'College of Education', 10, 9),
(529, 'EMJ 113', 'Preparation & Evaluation of Instructional Materials', '3', '2', 3, 'College of Education', 10, 9),
(530, 'EMJ 114', 'Language Research', '3', '2', 3, 'College of Education', 10, 9),
(531, 'EMJ 115', 'The Teaching of Speaking', '3', '2', 3, 'College of Education', 10, 9),
(532, 'EMJ 116', 'The Teaching of Listening and Reading', '3', '2', 3, 'College of Education', 10, 9),
(533, 'FSC 101', 'Learner’s Development & Environment', '3', '2', 1, 'College of Education', 10, 9),
(534, 'FSC 102', 'Experiencing Teaching Learning Process', '3', '2', 1, 'College of Education', 10, 9),
(535, 'FSC 103', 'Technology in the Learning Environment', '3', '2', 1, 'College of Education', 10, 9),
(536, 'FSC 104', 'Exploring the Curriculum', '4', '1', 1, 'College of Education', 10, 9),
(537, 'FSC 105', 'Learning Assessment Strategies', '4', '1', 1, 'College of Education', 10, 9),
(538, 'FSC 106', 'On Becoming a Teacher', '4', '1', 1, 'College of Education', 10, 9),
(539, 'EMJ 117', 'Language & Literature Assessment', '4', '1', 3, 'College of Education', 10, 9),
(540, 'EMJ 118', 'English for Special Purpose', '4', '1', 3, 'College of Education', 10, 9),
(541, 'EMJ 119', 'Intro to Stylistics', '4', '1', 3, 'College of Education', 10, 9),
(542, 'PED 114', 'Research in Education', '4', '1', 3, 'College of Education', 10, 9),
(543, 'EMJ 120', 'Translation & Editing of Text', '4', '1', 3, 'College of Education', 10, 9),
(544, 'PED 115', 'LET Review 1 (Prof Education)', '4', '2', 3, 'College of Education', 10, 9),
(545, 'PED 116', 'Thesis Writing', '4', '2', 3, 'College of Education', 10, 9),
(546, 'PED 117', 'Practice Teaching', '4', '2', 6, 'College of Education', 10, 9),
(547, 'PED 118', 'LET Review 1 (Prof Education)', '4', '2', 3, 'College of Education', 10, 9),
(548, 'PED 119', 'LET Review (Majors)', '4', '2', 3, 'College of Education', 10, 9);

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
  `section` varchar(255) DEFAULT NULL,
  `year` varchar(10) DEFAULT NULL,
  `college_dept` varchar(100) NOT NULL,
  `status` varchar(15) NOT NULL,
  `enrolled` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students_informations`
--

INSERT INTO `students_informations` (`id`, `first_name`, `last_name`, `middle_initial`, `course`, `section`, `year`, `college_dept`, `status`, `enrolled`) VALUES
(20145926, 'Raphael', 'Crisostomo', 'J.', 'Bachelor of Science in Nursing', '3b', '3', 'College of Nursing and Midwifery', '', 0),
(201000150, 'Jake', 'Bonggo', 'G.', 'Bachelor in Public Governance', '1b', '1', 'College of Arts and Sciences', '', 0),
(201300151, 'Cedric', 'Carpio', 'B.', 'Bachelor in Public Governance', '1b', '1', 'College of Arts and Sciences', '', 0),
(201300167, 'Harry Angelo', 'Soer', 'L.', 'Bachelor of Science in Business Administration Maj', '1b', '1', 'College of Business Administration', '', 0),
(201300192, 'Lorica', 'Sela', 'S.', 'Bachelor of Science in Nursing', '4a', '4', 'College of Nursing and Midwifery', '', 0),
(201300229, 'Narazeno', 'Lorenzo', 'K.', 'Bachelor of Elementary Education', '4b', '4', 'College of Education', '', 0),
(201300555, 'Jonathan', 'De Castro', 'M.', 'Bachelor in Public Governance', '1b', '1', 'College of Arts and Sciences', '', 0),
(201301129, 'Joanne', 'Lupao', 'S.', 'Bachelor in Secondary Education Major in Filipino', '4b', '4', 'College of Education', '', 0),
(201301220, 'Patrick', 'Carpio', 'J.', 'Bachelor in Secondary Education Major in English', '4a', '4', 'College of Education', '', 0),
(201400505, 'James', 'Hernandez', 'L.', 'Bachelor of Elementary Education', '3b', '3', 'College of Education', '', 0),
(201401025, 'Christine', 'Sanchez', 'M.', 'Bachelor in Secondary Education Major in Filipino', '3b', '3', 'College of Education', '', 0),
(201401026, 'Danica', 'Yu', 'R.', 'Bachelor of Elementary Education', '3a', '3', 'College of Education', '', 0),
(201402019, 'Maverick', 'Mangubat', 'M.', 'Bachelor in Secondary Education Major in English', '2b', '2', 'College of Education', '', 0),
(201405905, 'Simon', 'Rada', 'R.', 'Bachelor of Science in Nursing', '3a', '3', 'College of Nursing and Midwifery', '', 0),
(201500219, 'Jerome', 'Dinglasan', 'M.', 'Bachelor of Elementary Education', '2a', '2', 'College of Education', '', 0),
(201500323, 'Rommel', 'Rubio', 'R.', 'Bachelor in Secondary Education Major in English', '2a', '2', 'College of Education', '', 0),
(201500515, 'Lawrence', 'Estrada', 'P.', 'Bachelor of Science in Nursing', '2a', '2', 'College of Nursing and Midwifery', '', 0),
(201500789, 'Joseph Nathan', 'Tan', 'B.', 'Bachelor in Public Governance', '1b', '1', 'College of Arts and Sciences', '', 0),
(201600825, 'Angelo', 'Tolentino', 'S.', 'Bachelor in Secondary Education Major in English', '1b', '1', 'College of Education', '', 0),
(201654202, 'Richard', 'Esteban', 'F.', 'Bachelor of Science in Nursing', '1b', '1', 'College of Nursing and Midwifery', '', 0),
(201700500, 'Joseph', 'Onyente', 'T.', 'Bachelor in Public Governance', '1b', '1', 'College of Arts and Sciences', '', 0),
(201700501, 'Gabriel Jacob', 'Constantino', 'C.', 'Bachelor in Public Governance', '2a', '2', 'College of Arts and Sciences', '', 0),
(201700502, 'Jepo', 'Yulo', 'T.', 'Bachelor in Public Governance', '2a', '2', 'College of Arts and Sciences', '', 0),
(201700503, 'Pia', 'Aquipel', 'B.', 'Bachelor in Public Governance', '2a', '2', 'College of Arts and Sciences', '', 0),
(201700504, 'Nina', 'Bantas', 'J.', 'Bachelor in Public Governance', '2a', '2', 'College of Arts and Sciences', '', 0),
(201700505, 'Nicole', 'Lareza', 'J.', 'Bachelor in Public Governance', '2a', '2', 'College of Arts and Sciences', '', 0);

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
(1, '127.0.0.1', 'administrator', '$2a$07$SeBknntpZror9uyftVopmu61qg0ms8Qv1yV6FG.kQOSM.9QhmTo36', '', 'admin@admin.com', '', NULL, NULL, NULL, 1268889823, 1494643665, 1, 'VPAA Dr.', 'Estuche', 'ADMIN', '0'),
(2, '::1', 'jack@gmail.com', '$2y$08$UEnOBhXdt0FTgWlEZvzuuODFJq.gVpUCGuZ43p.vfMH9pz7u6mYcG', NULL, 'jack@gmail.com', NULL, NULL, NULL, NULL, 1490968491, NULL, 1, 'ahrry', 'lober', 'compant name', '09123123'),
(3, '::1', 'asfasdfar', '$2y$08$GJVGIN6rKtd/dmG8tN/9oueyLVj2mWJj.nzNpuFytlic2b1.Kpf52', NULL, 'asfasdfar', NULL, NULL, NULL, NULL, 1490972030, NULL, 1, 'test', 'test', 'test', '12315135'),
(5, '::1', 'test_email@email.com', '$2y$08$df6pMOX1mXla7uN8s/kl5eZUzPKEO5kQFSywa6i9Qd2q9.L4Ak0wO', NULL, 'test_email@email.com', NULL, NULL, NULL, NULL, 1491878503, 1491936147, 1, 'first pangalan', 'Soboer', 'none', '123414141'),
(18, '::1', 'harry_soer@example.com', '$2y$08$ldHLBiLjQEg.dadOkbh8d.RAf1DpOfi7xHTrdWZmPigC2WwewLpKu', NULL, 'harry_soer@example.com', NULL, NULL, NULL, NULL, 1494379361, 1494624864, 1, NULL, NULL, NULL, NULL),
(20, '::1', 'prof-201300165', '$2y$08$zlCdBjbC2KCiSmPqy9lqmeAmYz2EAda..QrKLv2aFa9CATcrDIcSS', NULL, 'prof-201300165', NULL, NULL, NULL, NULL, 1494576461, NULL, 1, NULL, NULL, NULL, NULL),
(21, '::1', 'prof-201300167', '$2y$08$P/aub4LLvkOVOFExk6HIJOti6fOFmzSwyRjzho6uJdANvL1OVITce', NULL, 'prof-201300167', NULL, NULL, NULL, NULL, 1494581944, 1494616880, 1, NULL, NULL, NULL, NULL),
(24, '192.168.254.4', 'barbeito_coed', '$2y$08$3c45fsG2R5Ou8isteWFZ6.RZNN4ID7ADjaBd3Qw2ItMU7eGViFd3y', NULL, 'barbeito_coed', NULL, NULL, NULL, NULL, 1494623953, 1494643677, 1, NULL, NULL, NULL, NULL),
(25, '192.168.254.4', 'geronga_cass', '$2y$08$D2uuLFYkXeYkbmufDKB.sulceUwDKyeRm0qOrH0.9NE1bhCLuujE6', NULL, 'geronga_cass', NULL, NULL, NULL, NULL, 1494623993, 1494643742, 1, NULL, NULL, NULL, NULL),
(26, '192.168.254.4', 'castillon_conm', '$2y$08$Q7ZVylz3Qo3lxdOc2rq7quKFk6QeTOZLUM7sMPPvDoMNiWXLrUgF2', NULL, 'castillon_conm', NULL, NULL, NULL, NULL, 1494624048, 1494644191, 1, NULL, NULL, NULL, NULL),
(27, '192.168.254.14', 'gandia_coact', '$2y$08$KH1UE2No.u.4R.6urF4PO.DmsYMu/pvbnM2s7o8gr8guPxFX7E.SC', NULL, 'gandia_coact', NULL, NULL, NULL, NULL, 1494624082, NULL, 1, NULL, NULL, NULL, NULL),
(28, '192.168.254.4', 'prof-201200024', '$2y$08$3qeSydsbCZeLJfutZU3UqeuW91j186gdZzLG5bi0rOcjtkxTttijG', NULL, 'prof-201200024', NULL, NULL, NULL, NULL, 1494626914, NULL, 1, NULL, NULL, NULL, NULL),
(29, '192.168.254.4', 'prof-201090021', '$2y$08$RVxVUO.oll/RhV9P7aAHVeWusK3SYMBcvL5L9CMtdTi.2m5D5ABLi', NULL, 'prof-201090021', NULL, NULL, NULL, NULL, 1494629357, NULL, 1, NULL, NULL, NULL, NULL),
(30, '192.168.254.4', 'prof-201104013', '$2y$08$PDXkuxsbRgp.AgsgdcF.g.LdSAXILXW4bU82JwSuwyCX..HOAEr7i', NULL, 'prof-201104013', NULL, NULL, NULL, NULL, 1494629476, NULL, 1, NULL, NULL, NULL, NULL),
(32, '192.168.254.4', 'prof-201209023', '$2y$08$H6.NiMKFL2dgLp81cq3mA.gIXasdS57Xg19Gy5bSurmX4IrVEpS92', NULL, 'prof-201209023', NULL, NULL, NULL, NULL, 1494629964, NULL, 1, NULL, NULL, NULL, NULL),
(33, '192.168.254.4', 'prof-201001024', '$2y$08$yN2UBpiGZaOEfmL26whYAOnsX2ZyOtEw2wPt4T1AbdKcWy8UfrdQG', NULL, 'prof-201001024', NULL, NULL, NULL, NULL, 1494630031, NULL, 1, NULL, NULL, NULL, NULL),
(34, '192.168.254.4', 'prof-200910026', '$2y$08$wIKMOC..s8a2kG7FdeVmCuCoXbnqHrNWVPQiW1S.eqmhkdnpz02em', NULL, 'prof-200910026', NULL, NULL, NULL, NULL, 1494630095, NULL, 1, NULL, NULL, NULL, NULL),
(35, '192.168.254.4', 'prof-201200019', '$2y$08$SRqQoYDeZYrZc9RU7J6QiOcmyFbftQvsRblIkG/1S4n996pfR1lEe', NULL, 'prof-201200019', NULL, NULL, NULL, NULL, 1494630723, NULL, 1, NULL, NULL, NULL, NULL),
(36, '192.168.254.4', 'prof-201110125', '$2y$08$QVwjXMvKE0mVQbJYNb3F2eL95wM1AjTwIuCgm/pVFr25hM4FZoWIi', NULL, 'prof-201110125', NULL, NULL, NULL, NULL, 1494630767, NULL, 1, NULL, NULL, NULL, NULL),
(37, '192.168.254.4', 'prof-200900509', '$2y$08$HsYwOzkQo7zpXeFpnEyxKeW4F4TFGXiQsVf8HHIh1/yUkXV9qt/Du', NULL, 'prof-200900509', NULL, NULL, NULL, NULL, 1494631997, NULL, 1, NULL, NULL, NULL, NULL),
(38, '192.168.254.4', 'prof-2011010122', '$2y$08$IXGbX0vsALhI9BVv7m.ZAOmYJ13CEGcETE7Tt2n0mn.sEy9B6yPvi', NULL, 'prof-2011010122', NULL, NULL, NULL, NULL, 1494632278, NULL, 1, NULL, NULL, NULL, NULL),
(39, '192.168.254.4', 'prof-201000910', '$2y$08$NHZAh1gn4PJWekndSBF.RO7a72qv7TbIKiqjF8FLo.ewi3AzqElhu', NULL, 'prof-201000910', NULL, NULL, NULL, NULL, 1494632339, NULL, 1, NULL, NULL, NULL, NULL),
(40, '192.168.254.4', 'prof-200901224', '$2y$08$WRTAkcXy14J5fCoRvTDCrO2j8NuGtmNEo5wJmNMFOiTVrWyZeAeuS', NULL, 'prof-200901224', NULL, NULL, NULL, NULL, 1494632435, NULL, 1, NULL, NULL, NULL, NULL),
(41, '192.168.254.4', 'prof-201401028', '$2y$08$Qqy0E.hyHA99G5ew3YJLN.jLVMgLkeIRJ4dncF3UafBmgCvkdQvze', NULL, 'prof-201401028', NULL, NULL, NULL, NULL, 1494632529, NULL, 1, NULL, NULL, NULL, NULL),
(42, '192.168.254.4', 'prof-200800516', '$2y$08$J.GSYnvCwCAE2u5C6AU0yef31r691cZKvKJJbN8YeMevb4UaOstJS', NULL, 'prof-200800516', NULL, NULL, NULL, NULL, 1494632665, NULL, 1, NULL, NULL, NULL, NULL),
(43, '192.168.254.4', 'prof-201200909', '$2y$08$e0S.yiT8E.LFcZHQ9g/8i.cqxg706RcVQi4HCIFBO6zNrA0QxpmwO', NULL, 'prof-201200909', NULL, NULL, NULL, NULL, 1494632879, NULL, 1, NULL, NULL, NULL, NULL),
(44, '192.168.254.4', 'prof-201000619', '$2y$08$4pim/FXhs67AWbx5DfmdwOo6Sp2LaFppQMTXpC1jNvBzXohcCjZXO', NULL, 'prof-201000619', NULL, NULL, NULL, NULL, 1494633180, NULL, 1, NULL, NULL, NULL, NULL),
(45, '192.168.254.4', 'prof-201300012', '$2y$08$pyEQGwP5RFip6yXcYzT6WOGmBG8ymb2skF0hh/DU/pE.pQ6zrZMsu', NULL, 'prof-201300012', NULL, NULL, NULL, NULL, 1494633386, NULL, 1, NULL, NULL, NULL, NULL),
(46, '192.168.254.4', 'prof-201301026', '$2y$08$ixtZJLRue/C6co5cZIJpC.T8/XVxlfKDex4ElcvUxclzDzpnwJIhu', NULL, 'prof-201301026', NULL, NULL, NULL, NULL, 1494633592, NULL, 1, NULL, NULL, NULL, NULL),
(47, '192.168.254.4', 'prof-200900323', '$2y$08$XYzrEzrKU4y3MRnag20HM.Dunh6.RojR//hOKhudzNqUztyvgz3gu', NULL, 'prof-200900323', NULL, NULL, NULL, NULL, 1494633659, NULL, 1, NULL, NULL, NULL, NULL),
(48, '192.168.254.4', 'prof-201400110', '$2y$08$YGBFduDedZ2K2D1udRFfZO5bzym1NFVU/XZdJWIAPgoVjYQ7PU.LS', NULL, 'prof-201400110', NULL, NULL, NULL, NULL, 1494633854, NULL, 1, NULL, NULL, NULL, NULL),
(49, '192.168.254.4', 'prof-201000901', '$2y$08$5aRosOGmNrbwn99vgwpYj.AxMELfr74Pg/Ir1/BO2QonXBlFEbtDO', NULL, 'prof-201000901', NULL, NULL, NULL, NULL, 1494634021, NULL, 1, NULL, NULL, NULL, NULL),
(55, '192.168.254.14', '201300167', '$2y$08$WL5EG89PcI6G9zBflxSzvuSFROWQOQ37Md7czyjARVTvCKDs8lFx.', NULL, '201300167', NULL, NULL, NULL, NULL, 1494643531, NULL, 1, NULL, NULL, NULL, NULL),
(56, '192.168.254.4', '201500219', '$2y$08$rsYbqxK8z9rAc6tgLbPICuxH/clryOckgNZiRkeJwnKe/4bCaUthe', NULL, '201500219', NULL, NULL, NULL, NULL, 1494643722, NULL, 1, NULL, NULL, NULL, NULL),
(57, '192.168.254.4', '201500323', '$2y$08$VSw06DqMFOrHxnBNJJeEj.wKJJtyyUiY.lz1sXYqm5SmvTIIXDDl2', NULL, '201500323', NULL, NULL, NULL, NULL, 1494643770, NULL, 1, NULL, NULL, NULL, NULL),
(58, '192.168.254.4', '201401025', '$2y$08$xDHjUnnUT0Y4Sl/f.AR3TOGkil1k0Z67064AnVnR./ch.Ss2weEBW', NULL, '201401025', NULL, NULL, NULL, NULL, 1494643803, NULL, 1, NULL, NULL, NULL, NULL),
(59, '192.168.254.14', '201000150', '$2y$08$EG19HOAsNZ0sI2MI9Svya.ENZho1B1BaDR4m20Weodqx89dGWdCkK', NULL, '201000150', NULL, NULL, NULL, NULL, 1494643821, NULL, 1, NULL, NULL, NULL, NULL),
(60, '192.168.254.4', '201301220', '$2y$08$rjgLQU7sTnNaA1r8LI4nqOKQLA5RG5WYBSj6MGEQKUAGIAfE/B51a', NULL, '201301220', NULL, NULL, NULL, NULL, 1494643917, NULL, 1, NULL, NULL, NULL, NULL),
(61, '192.168.254.14', '201300151', '$2y$08$Kza4llHESlUGvUpLD0vLCOu33s6fiwpCMpXOCC3xr1QjhualQRqvO', NULL, '201300151', NULL, NULL, NULL, NULL, 1494643944, NULL, 1, NULL, NULL, NULL, NULL),
(62, '192.168.254.4', '201300229', '$2y$08$uxN7r2E6DtoUFhlVKJ7uNOZaKo5T1r3ySlKi1iFP1Eh9rJGLaxevW', NULL, '201300229', NULL, NULL, NULL, NULL, 1494643949, NULL, 1, NULL, NULL, NULL, NULL),
(63, '192.168.254.4', '201402019', '$2y$08$Tdl5gCq/Qn8fH97hpRhFaeYQ4tjGOc8CQr9tRpFY135xFrQp/YOpK', NULL, '201402019', NULL, NULL, NULL, NULL, 1494643983, NULL, 1, NULL, NULL, NULL, NULL),
(64, '192.168.254.14', '201700500', '$2y$08$QIb0oHm5ERp5R4ijFCuawexlXMThIhX6B8eoZfXVLzVBVEYK6FfFC', NULL, '201700500', NULL, NULL, NULL, NULL, 1494644005, NULL, 1, NULL, NULL, NULL, NULL),
(65, '192.168.254.4', '201600825', '$2y$08$GMyrX6VaaRzuSsMRiiEb9uOv2I2esPQREe9SwRRFjoiUKqar8ElJK', NULL, '201600825', NULL, NULL, NULL, NULL, 1494644038, NULL, 1, NULL, NULL, NULL, NULL),
(66, '192.168.254.14', '201500789', '$2y$08$UgTLGxurkTiIh6YRsbzZqO/yIlQUV/jhzRhFq12YPaX38GKJJc..i', NULL, '201500789', NULL, NULL, NULL, NULL, 1494644050, NULL, 1, NULL, NULL, NULL, NULL),
(67, '192.168.254.14', '201300555', '$2y$08$SQaf9.otnw1C0.RrIZlTcey554LNvjgFLXL9QYRS4sJMENzIOyqOi', NULL, '201300555', NULL, NULL, NULL, NULL, 1494644092, NULL, 1, NULL, NULL, NULL, NULL),
(68, '192.168.254.4', '201401026', '$2y$08$szRT68hA3C3fP3E1rLPty.87UduMeM9pTzVeFmfPph2XZIV6w8aNC', NULL, '201401026', NULL, NULL, NULL, NULL, 1494644097, NULL, 1, NULL, NULL, NULL, NULL),
(69, '192.168.254.4', '201301129', '$2y$08$A5EUtxwtjBPo0L3UfqTtFuAYklHh6ysL5jqcKbE6OwFsnapqAsiFG', NULL, '201301129', NULL, NULL, NULL, NULL, 1494644128, NULL, 1, NULL, NULL, NULL, NULL),
(70, '192.168.254.14', '201700501', '$2y$08$idt6ZthPrvR.o0RjidsUT.Uynd/3piDFoaveba59pYyHfypRT8h8m', NULL, '201700501', NULL, NULL, NULL, NULL, 1494644132, NULL, 1, NULL, NULL, NULL, NULL),
(71, '192.168.254.4', '201400505', '$2y$08$ecPZ1z5rvsD5bTbAlUT7cuELktRekcjPT/cIOgZiDQxXijNkRJX4.', NULL, '201400505', NULL, NULL, NULL, NULL, 1494644156, NULL, 1, NULL, NULL, NULL, NULL),
(72, '192.168.254.14', '201700502', '$2y$08$N5XeitRO9ZYGiFKZfmtfwuKJoFQ/kIH0ZxeEhwPIpQLm.MTnm60lG', NULL, '201700502', NULL, NULL, NULL, NULL, 1494644170, NULL, 1, NULL, NULL, NULL, NULL),
(73, '192.168.254.4', '201300192', '$2y$08$6u5h7C3oH5oDEHRN9lw39.rZExKlJjkVweIcVkZifbQf/RM7fwyRe', NULL, '201300192', NULL, NULL, NULL, NULL, 1494644221, NULL, 1, NULL, NULL, NULL, NULL),
(74, '192.168.254.14', '201700503', '$2y$08$TdTPC/PTD528Cc1F1/Ok3OFS76m3ijolEWDf7J.RT5t2kYPRy0CZe', NULL, '201700503', NULL, NULL, NULL, NULL, 1494644229, NULL, 1, NULL, NULL, NULL, NULL),
(75, '192.168.254.14', '201700504', '$2y$08$JqyNLSUWUSR6zcLK5KLd.es3Qm6zJwsG7eOwlvpspNa8AR.dzczb2', NULL, '201700504', NULL, NULL, NULL, NULL, 1494644269, NULL, 1, NULL, NULL, NULL, NULL),
(76, '192.168.254.4', '20145926', '$2y$08$BrG/iS4ZAfnsR5S8NqNkgO79k.Qwftf/yqs3Naz42V88luq7PEhky', NULL, '20145926', NULL, NULL, NULL, NULL, 1494644301, NULL, 1, NULL, NULL, NULL, NULL),
(77, '192.168.254.4', '201405905', '$2y$08$FR1DfmDUk6ckWb65NgdCA.exbqPcxfJ9QLn6s6UIixsoAeHMsxqIS', NULL, '201405905', NULL, NULL, NULL, NULL, 1494644333, NULL, 1, NULL, NULL, NULL, NULL),
(78, '192.168.254.14', '201700505', '$2y$08$qgxaZ3Irxx3R9NW2HD6EmeTtR/M3dRjiq6Lz6YpsJ1ra17DceNGcG', NULL, '201700505', NULL, NULL, NULL, NULL, 1494644352, NULL, 1, NULL, NULL, NULL, NULL),
(79, '192.168.254.4', '201500515', '$2y$08$vHqDqmWNkOXYCN3Lle3GoO5NnJH.8fh6TteYbdc0aFn.0Pcuc3YaO', NULL, '201500515', NULL, NULL, NULL, NULL, 1494644381, NULL, 1, NULL, NULL, NULL, NULL),
(80, '192.168.254.4', '201654202', '$2y$08$.zA7tLUTNjfq.gxAjZlI/ODLO.ZKxJdI.toQnXzWBzVqi68vZy14G', NULL, '201654202', NULL, NULL, NULL, NULL, 1494644415, NULL, 1, NULL, NULL, NULL, NULL);

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
(17, 5, 2),
(33, 18, 4),
(35, 20, 6),
(36, 21, 6),
(39, 24, 4),
(40, 25, 4),
(41, 26, 4),
(42, 27, 4),
(43, 28, 6),
(44, 29, 6),
(45, 30, 6),
(47, 32, 6),
(48, 33, 6),
(49, 34, 6),
(50, 35, 6),
(51, 36, 6),
(52, 37, 6),
(53, 38, 6),
(54, 39, 6),
(55, 40, 6),
(56, 41, 6),
(57, 42, 6),
(58, 43, 6),
(59, 44, 6),
(60, 45, 6),
(61, 46, 6),
(62, 47, 6),
(63, 48, 6),
(64, 49, 6),
(70, 55, 5),
(71, 56, 5),
(72, 57, 5),
(73, 58, 5),
(74, 59, 5),
(75, 60, 5),
(76, 61, 5),
(77, 62, 5),
(78, 63, 5),
(79, 64, 5),
(80, 65, 5),
(81, 66, 5),
(82, 67, 5),
(83, 68, 5),
(84, 69, 5),
(85, 70, 5),
(86, 71, 5),
(87, 72, 5),
(88, 73, 5),
(89, 74, 5),
(90, 75, 5),
(91, 76, 5),
(92, 77, 5),
(93, 78, 5),
(94, 79, 5),
(95, 80, 5);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ci_sessions`
--
ALTER TABLE `ci_sessions`
  ADD KEY `ci_sessions_timestamp` (`timestamp`);

--
-- Indexes for table `do_accounts`
--
ALTER TABLE `do_accounts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `faculty_users`
--
ALTER TABLE `faculty_users`
  ADD PRIMARY KEY (`faculty_id`);

--
-- Indexes for table `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `forum_comments`
--
ALTER TABLE `forum_comments`
  ADD PRIMARY KEY (`id_comments`),
  ADD KEY `id_post` (`id_post`);

--
-- Indexes for table `forum_posts`
--
ALTER TABLE `forum_posts`
  ADD PRIMARY KEY (`id_posts`);

--
-- Indexes for table `gallery_album`
--
ALTER TABLE `gallery_album`
  ADD PRIMARY KEY (`slug`);

--
-- Indexes for table `gallery_images`
--
ALTER TABLE `gallery_images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `slug` (`slug`);

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
-- Indexes for table `portal_courses`
--
ALTER TABLE `portal_courses`
  ADD PRIMARY KEY (`course_id`);

--
-- Indexes for table `portal_curriculums`
--
ALTER TABLE `portal_curriculums`
  ADD PRIMARY KEY (`curriculum_id`),
  ADD KEY `course_id` (`course_id`);

--
-- Indexes for table `portal_schedules`
--
ALTER TABLE `portal_schedules`
  ADD PRIMARY KEY (`id_sched`);

--
-- Indexes for table `portal_schedules_assigned`
--
ALTER TABLE `portal_schedules_assigned`
  ADD PRIMARY KEY (`id_sched_assigned`),
  ADD KEY `faculty_id` (`faculty_id`);

--
-- Indexes for table `portal_subjects`
--
ALTER TABLE `portal_subjects`
  ADD PRIMARY KEY (`id`),
  ADD KEY `curriculum_id` (`curriculum_id`),
  ADD KEY `curriculum_id_2` (`curriculum_id`),
  ADD KEY `curriculum_id_3` (`curriculum_id`);

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
-- AUTO_INCREMENT for table `do_accounts`
--
ALTER TABLE `do_accounts`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `faculty_users`
--
ALTER TABLE `faculty_users`
  MODIFY `faculty_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `files`
--
ALTER TABLE `files`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `forum_comments`
--
ALTER TABLE `forum_comments`
  MODIFY `id_comments` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `forum_posts`
--
ALTER TABLE `forum_posts`
  MODIFY `id_posts` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `gallery_images`
--
ALTER TABLE `gallery_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
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
-- AUTO_INCREMENT for table `portal_courses`
--
ALTER TABLE `portal_courses`
  MODIFY `course_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `portal_curriculums`
--
ALTER TABLE `portal_curriculums`
  MODIFY `curriculum_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `portal_schedules`
--
ALTER TABLE `portal_schedules`
  MODIFY `id_sched` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=489;
--
-- AUTO_INCREMENT for table `portal_subjects`
--
ALTER TABLE `portal_subjects`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=549;
--
-- AUTO_INCREMENT for table `school_years`
--
ALTER TABLE `school_years`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;
--
-- AUTO_INCREMENT for table `users_groups`
--
ALTER TABLE `users_groups`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=96;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `forum_comments`
--
ALTER TABLE `forum_comments`
  ADD CONSTRAINT `forum_comments_ibfk_1` FOREIGN KEY (`id_post`) REFERENCES `forum_posts` (`id_posts`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `gallery_images`
--
ALTER TABLE `gallery_images`
  ADD CONSTRAINT `gallery_images_ibfk_1` FOREIGN KEY (`slug`) REFERENCES `gallery_album` (`slug`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `portal_curriculums`
--
ALTER TABLE `portal_curriculums`
  ADD CONSTRAINT `portal_curriculums_ibfk_1` FOREIGN KEY (`course_id`) REFERENCES `portal_courses` (`course_id`) ON DELETE CASCADE;

--
-- Constraints for table `portal_subjects`
--
ALTER TABLE `portal_subjects`
  ADD CONSTRAINT `portal_subjects_ibfk_1` FOREIGN KEY (`curriculum_id`) REFERENCES `portal_curriculums` (`curriculum_id`) ON DELETE CASCADE;

--
-- Constraints for table `users_groups`
--
ALTER TABLE `users_groups`
  ADD CONSTRAINT `fk_users_groups_groups1` FOREIGN KEY (`group_id`) REFERENCES `groups` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_users_groups_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
