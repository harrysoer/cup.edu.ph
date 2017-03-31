-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 31, 2017 at 05:59 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

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
('gjg8965dm33f97u39nlbarv2gvtve3pg', '127.0.0.1', 1490716596, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439303731363439333b),
('1je2d08suad92hihphdsov8in0tmrj12', '127.0.0.1', 1490717119, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439303731373131393b),
('r5hmlogofiaa6kguu6indcdq64ri2o03', '127.0.0.1', 1490717577, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439303731373537353b),
('kg1a7iv9heor6sth1oe1i2dm2tf3stah', '127.0.0.1', 1490718034, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439303731373933373b),
('s60266n2unrio080gg64al0ssgbc7o0p', '127.0.0.1', 1490718400, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439303731383336373b),
('3gir85mjvupkd0inuqgtfbg5vgmh07ua', '127.0.0.1', 1490719603, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439303731393338393b),
('3ce3h893sp9efk5g1jog1t89q1763r05', '127.0.0.1', 1490719928, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439303731393731373b),
('30b00u4u0nce985pt88jgl9r6je26unj', '127.0.0.1', 1490720292, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439303732303034343b),
('9uh67lgrr7f1vg2rqf9p9e4kniunhsge', '127.0.0.1', 1490720674, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439303732303436363b),
('j2brqkeoj9tasb9uibu6rehvnk5si10c', '127.0.0.1', 1490720775, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439303732303737353b),
('n861jtb4k52ndval56mh4k3m6e3a3psd', '127.0.0.1', 1490721934, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439303732313835313b),
('jnnjrbge0cp83r30uh2qc0el4f26a405', '127.0.0.1', 1490728961, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439303732383733383b),
('lpkejnq25k2t24ctqjtgakogi9te3gho', '127.0.0.1', 1490729442, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439303732393139383b),
('gsc3p9rvs9d6du01aavqsgu9426k3e0b', '127.0.0.1', 1490729842, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439303732393630313b),
('gmmt6g2ndj32355rk3iciv41esgfe3se', '127.0.0.1', 1490730308, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439303733303330363b),
('41btqifqnovhe4jklbbomcsb3j3h27g6', '127.0.0.1', 1490732512, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439303733323234373b),
('8mmefsflddul6op37402e3a5cov2on1q', '127.0.0.1', 1490732780, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439303733323536393b),
('gk3keschp9k6s84cjn1uv3u7v97vbke6', '127.0.0.1', 1490733602, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439303733333332303b),
('ogl9kvt685t3mqbshmk52b06s10sejvg', '127.0.0.1', 1490733946, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439303733333639323b),
('lptpq2eerk9djk30353vp6msp7ul7kve', '127.0.0.1', 1490733998, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439303733333939383b),
('8j8jpatb64e8jvc7sbmnenvm7k8od1ko', '127.0.0.1', 1490734997, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439303733343933313b),
('gpttil3d07ina67spkhkh3obg3m30dkd', '127.0.0.1', 1490736257, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439303733363030343b),
('kfauh93ace42lv2sstn6kd69r9dnm99k', '127.0.0.1', 1490736488, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439303733363333323b),
('hab3qmorma57oo8tu8lqp4pabkr4gj9q', '127.0.0.1', 1490736784, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439303733363738313b),
('uuheem58v59p0gqu4m5c18rtcqnnn6k2', '127.0.0.1', 1490738710, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439303733383532353b),
('7uiiomr3jmgfpt579dihfsbeg7eosgif', '127.0.0.1', 1490739647, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439303733393437363b),
('ipsn0egp8nucu3mtevvlkeg98hnfk5qb', '127.0.0.1', 1490740160, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439303733393836353b),
('06c5qjpnj31cibvsaqk7b3q18ur6mfdn', '127.0.0.1', 1490740489, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439303734303230353b),
('iqbea4bmqcftj408gpvvn0o8to88ircp', '127.0.0.1', 1490740783, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439303734303531303b),
('brtqjrirlp2k8irml7uu7lgha8haomfb', '127.0.0.1', 1490741104, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439303734303833353b),
('f8dt9doiqg21jbnvg01olh4s78dmau9d', '127.0.0.1', 1490741486, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439303734313230393b),
('3t3a0mcgst4akp8g426ulrehtn95gpd4', '127.0.0.1', 1490742285, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439303734323033333b),
('34r0m68lq0vakhgdgvc4omhm419hvobb', '127.0.0.1', 1490742674, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439303734323436333b),
('jedmetng25du8hedfo2fm3lc9dl845cm', '127.0.0.1', 1490743067, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439303734323737333b),
('pf1epmopth0i6k5s48dim440f4i3h4i8', '127.0.0.1', 1490743284, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439303734333037343b),
('q9trkhlt320h680q02r2kg95lqgf7u3r', '127.0.0.1', 1490743570, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439303734333431393b),
('v07o99l2qai872l07qhr9icmvvcigbe1', '127.0.0.1', 1490768686, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439303736383635363b),
('nto5bm09pbhi91vrej7ue98v6p23lfef', '127.0.0.1', 1490768656, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439303736383635363b),
('c1dqos3feu6rro859iv6r1vm3rmkirqu', '127.0.0.1', 1490794045, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439303739343034353b),
('f5kvhp39mveo3k0ikfi09pvi1f268f10', '127.0.0.1', 1490794306, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439303739343034353b),
('7iim07kb8i487iprubto7gldkfa0fro9', '127.0.0.1', 1490794045, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439303739343034353b),
('3fl87usk5e3e4ideffphlthm5g6c0d1h', '127.0.0.1', 1490856879, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439303835363836313b),
('gbr2ug5k3lsgj9pn4dqs26fipr3hrno9', '127.0.0.1', 1490857575, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439303835373332303b),
('8bu85rtcrqf1minbmhnhurmvu2k3op69', '127.0.0.1', 1490858205, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439303835383139383b),
('t1hk0ndrbo4mngg8njd3rlis65t970ee', '127.0.0.1', 1490863543, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439303836333234393b),
('c81pka60jtgd3u3c2gmjlu0gltqfk04h', '127.0.0.1', 1490863811, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439303836333535383b),
('k1agmn96rpmlp5tl2l2dbv5nu77r4q3r', '127.0.0.1', 1490864125, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439303836343033313b),
('an5chdcmcmn81ahg39nfn43omgbttp81', '127.0.0.1', 1490926153, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439303932363030393b),
('gav6s1agfr4otchsljtflgbfmquirc9b', '127.0.0.1', 1490926599, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439303932363336373b),
('7l4r7ua3j36i0oq1hruvu08g68dm8o68', '127.0.0.1', 1490926757, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439303932363733373b),
('hvbi9j01pqri2hdkjfnokva1ee4nt4af', '127.0.0.1', 1490931673, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439303933313631393b);

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
  `album_name` varchar(30) NOT NULL
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
(2, 'members', 'General User');

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
(17, 'test', 'test', '0000-00-00', 'test', 'teslakjdfsType safdasdf asdfa sdfasd fasd fasdfas df asdf asf sfdas fasdf asdf asfasd fawregcfdsvsdc &nbsp;here'),
(18, 'test title', 'auth', '2017-03-31', 'test-title', '<p>test cont Type here lkajsd;fljasdl;kfja;sldkj al;skjdfl;ksdj;lfajsdf laksjd;flkajsd;lfjasd mca;smkv laejsd;fjavsl;fjgc&nbsp;</p><p>asgj l;adsjfgl asjflkg jad jbgd</p><p>sag adl jga;sj gl;kajdf g</p>');

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
(1, '127.0.0.1', 'administrator', '$2a$07$SeBknntpZror9uyftVopmu61qg0ms8Qv1yV6FG.kQOSM.9QhmTo36', '', 'admin@admin.com', '', NULL, NULL, NULL, 1268889823, 1490085270, 1, 'Admin', 'istrator', 'ADMIN', '0');

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
(2, 1, 2);

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
-- Indexes for table `gallery_album`
--
ALTER TABLE `gallery_album`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `gallery_album`
--
ALTER TABLE `gallery_album`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `gallery_images`
--
ALTER TABLE `gallery_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `login_attempts`
--
ALTER TABLE `login_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `users_groups`
--
ALTER TABLE `users_groups`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
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
