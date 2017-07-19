-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 29, 2017 at 08:16 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mcq_test`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `id` int(5) NOT NULL,
  `admin_username` text NOT NULL,
  `admin_password` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `question_ans_table`
--

CREATE TABLE `question_ans_table` (
  `question` varchar(2000) CHARACTER SET utf8 DEFAULT NULL,
  `option_a` text CHARACTER SET utf8 COLLATE utf8_bin,
  `option_b` text CHARACTER SET utf8 COLLATE utf8_bin,
  `option_c` text CHARACTER SET utf8 COLLATE utf8_bin,
  `answer` text CHARACTER SET utf8 COLLATE utf8_bin,
  `id` int(5) NOT NULL,
  `date1` text NOT NULL,
  `start_exam` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `question_ans_table`
--

INSERT INTO `question_ans_table` (`question`, `option_a`, `option_b`, `option_c`, `answer`, `id`, `date1`, `start_exam`) VALUES
('भारतीय अर्थिक परिषदेच्या अध्यक्षपदी सन 2012 या वर्षी कोणाची निवड झाली', 'aa', 'bb', 'cc', 'cc', 58, '', 0),
('दक्षिण सुदान या नवीन देशाची निर्मिती केव्हा करण्यात आली', 'qq', 'ww', 'ee', 'ww', 59, '', 0),
('खालीलपौकी कोणते शहर बावन्न दरवाजांचे शहर म्हणून ओळखले जाते.', 'tt', 'rr', 'ee', 'ee', 60, '', 0),
('कोणत्या दोन नेत्यांमध्ये लाहोर वार्तालाप झाला.', 'kk', 'jj', 'ff', 'jj', 61, '', 0),
('खालीलपौकी भारतीय रिझव्र्ह बँकेचे गव्हर्नर कोण नव्हते.', 'aa', 'dd', 'ee', 'ii', 62, '', 0),
('पुढील समाजांना त्याच्या संख्येनुसार चढत्या क्रमात लावा.', 'oo', 'oo', 'oo', 'oo', 63, '', 0),
('दक्षिण सुदान या नवीन देशाची निर्मिती केव्हा करण्यात आली', 'xx', 'cc', 'vv', 'vv', 64, '', 0),
('सिखों के अन्तिम गुरु कौन थे ?', 'll', 'kk', 'jj', 'kk', 65, '', 0),
('ज्ञानेश्वरांनी ज्ञानेश्वरी वयाच्या कितव्या वर्षी लिहिली?', 'rr', 'ee', 'ww', 'rr', 66, '', 0),
('सर्वप्रथम 1957 मध्ये वृध्दांच्या निवृत्तीवेतनाचा कायदा कोणत्या राज्यानी संमत केला ?', 'e', 'r', 't', 'e', 67, '', 0),
('मुंबईच्या नगरपालाचा (शेरीफ) कालावधी किती ?', 'q', 'w', 'e', 'e', 68, '', 0),
('जस्ट-इन-टाई ( JIT ) तंत्र प्रथम कोणी अमलात आणले ?', 'y', 'u', 'i', 'y', 69, '', 0),
('भारतात कोणत्या साली आपत्ती व्यवस्थापन कायदा पारित करण्यात आला ?', 'z', 'x', 'c', 'c', 70, '25/12/2017', 0),
('महाराष्ट्रातील जागतिक दर्जाचे ढग संशोधन केंद्र कोणते आहे ?', 'aaa', 'bbb', 'ccc', 'bbb', 71, '28/04/2017', 0),
('राज्यपाल राजीनामा कोणाकडे देतात?', 'dd', 'ff', 'gg', 'ff', 72, '26/12/2017', 0),
('२ वाजून ३० मिनिटांनी घड्याळाच्या २ काट्यात किती अंशाचा कोण होईल ?', 'tt', 'rr', 'yy', 'yy', 73, '26/12/2017', 0),
('भारताचे सर्वात दीर्घ पल्ल्याचे क्षेपणास्त्र कोणते ?', 'qq', 'ww', 'ee', 'ww', 74, '26/12/2017', 0),
('जेजुरी हे देवस्थान महाराष्ट्रामध्ये कोणत्या जिल्ह्यामध्ये येते?', 'pp', 'oo', 'ii', 'ii', 75, '28/04/2017', 0),
('jain d s  sbi', 'sbi', 'mahabank', 'bak of baroda', 'sbi', 76, '29/04/2017', 1),
('pushpak tcs', 'tcs', 'wipro', 'dart', 'tcs', 78, '29/04/2017', 1),
('santosh', 'govt', 'maha', 'central', 'govt', 79, '29/04/2017', 1);

-- --------------------------------------------------------

--
-- Table structure for table `start_end_status`
--

CREATE TABLE `start_end_status` (
  `start_status` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `start_end_status`
--

INSERT INTO `start_end_status` (`start_status`) VALUES
(1);

-- --------------------------------------------------------

--
-- Table structure for table `userlogin`
--

CREATE TABLE `userlogin` (
  `id` int(5) NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `status` int(2) NOT NULL,
  `marks` text NOT NULL,
  `result_status` int(2) NOT NULL,
  `date1` text NOT NULL,
  `time1` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userlogin`
--

INSERT INTO `userlogin` (`id`, `username`, `password`, `status`, `marks`, `result_status`, `date1`, `time1`) VALUES
(1, 'dsjain', '989060298551', 0, '', 1, '29/04/2017', '09:46:46am'),
(2, 'pushpak', '1234567890', 0, '00', 1, '29/04/2017', '09:47:27am'),
(3, 'pushpak', '9404181767', 0, '00', 1, '29/04/2017', '09:47:56am'),
(4, 'jainpushpakja@gmail.com', '940418176788', 0, '', 1, '29/04/2017', '01:10:57pm'),
(5, 'pushpak', '94041817677', 0, '00', 1, '29/04/2017', '08:12:26pm'),
(6, 'dhanyakumar', '8888888888', 1, '02', 1, '29/04/2017', '10:33:04pm'),
(7, 'dhanyakumar', '7777777777', 1, '02', 1, '29/04/2017', '11:35:02pm'),
(8, 'dhanyakumar', '77777777777', 1, '02', 0, '29/04/2017', '11:44:00pm');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `question_ans_table`
--
ALTER TABLE `question_ans_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userlogin`
--
ALTER TABLE `userlogin`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `question_ans_table`
--
ALTER TABLE `question_ans_table`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;
--
-- AUTO_INCREMENT for table `userlogin`
--
ALTER TABLE `userlogin`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
