-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 24, 2022 at 04:32 PM
-- Server version: 5.7.36
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `amna`
--

-- --------------------------------------------------------

--
-- Table structure for table `address`
--

DROP TABLE IF EXISTS `address`;
CREATE TABLE IF NOT EXISTS `address` (
  `add_id` varchar(5) NOT NULL,
  `house_no` int(4) NOT NULL,
  `street_no` int(4) NOT NULL,
  `city` char(20) NOT NULL,
  `zip_code` int(5) NOT NULL,
  PRIMARY KEY (`add_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `address`
--

INSERT INTO `address` (`add_id`, `house_no`, `street_no`, `city`, `zip_code`) VALUES
('DA01', 22, 12, 'Rawalpindi', 24578),
('DA02', 12, 3, 'Islamabad', 23435),
('DA03', 12, 22, 'Lahore', 10002),
('DA04', 133, 34, 'Karachi', 12345),
('DA05', 12, 34, 'Rawalpindi', 23454),
('DA06', 12, 56, 'Islamabad', 34561),
('DA07', 45, 12, 'Karachi', 24546),
('DA08', 123, 678, 'Peshawar', 13345),
('DA09', 123, 678, 'Lahore', 35678),
('DA10', 456, 25, 'Rawalpindi', 84566),
('OA01', 23, 2, 'Islamabad', 45000),
('OA02', 23, 56, 'Rawalpindi', 23490),
('OA03', 31, 34, 'Lahore', 10002),
('SA01', 123, 455, 'Rawalpindi', 3445),
('SA02', 345, 2345, 'Lahore', 2456),
('SA03', 234, 3, 'Karachi', 77777),
('SA04', 345, 77, 'Islamabad', 34567),
('SA05', 667, 7, 'Lahore', 7545),
('SA06', 66, 7, 'Lahore', 77788),
('SA07', 558, 48, 'Rawalpindi', 6677),
('SA08', 569, 34, 'Islamabad', 12344),
('SA09', 56, 77, 'Peshawar', 7778),
('SA10', 344, 77, 'Islamabad', 3452),
('SA100', 32982, 8909, 'mianwali', 2333),
('SA11', 557, 34, 'Karachi', 7777),
('SA12', 87, 23, 'Lahore', 7778),
('SA13', 456, 32, 'Rawalpindi', 6666),
('SA14', 344, 77, 'Karachi', 4455),
('SA15', 797, 34, 'Peshawar', 6677),
('SA16', 888, 54, 'Lahore', 4444),
('SA17', 55, 77, 'Quetta', 7777),
('SA18', 555, 45, 'Peshawar', 8886),
('SA19', 88, 21, 'Islamabad', 7475),
('SA20', 772, 12, 'Rawalpindi', 8485),
('SA21', 352, 34, 'Lahore', 7463),
('SA22', 32987, 488, 'jhelum', 4397),
('SA23', 54737, 62, 'karachi', 5264),
('SA24', 52753, 54, 'Bahawalpur', 7467),
('SA25', 8656, 98, 'peshawar', 9089),
('SA26', 16534, 63, 'islamabad', 8467),
('SA27', 1538, 45, 'faislabad', 8467),
('SA28', 439, 275, 'mardan', 2386),
('SA29', 3753, 874, 'rawalpindi', 2352),
('SA30', 5478, 784, 'karachi', 4355),
('SA31', 7589, 544, 'hyderabad', 4846),
('SA32', 6328, 369, 'lahore', 890),
('SA33', 9074, 378, 'multan', 939),
('SA34', 2745, 194, 'mardan', 823),
('SA35', 934, 487, 'quetta', 9324),
('SA36', 5005, 5892, 'sukkhur', 390),
('SA37', 2768, 970, 'jhang', 2387),
('SA38', 8632, 4087, 'sahiwal', 3468),
('SA39', 4368, 509, 'mangla', 3872),
('SA40', 3268, 7048, 'sialkot', 32476),
('SA41', 74832, 498, 'multan', 4398),
('SA42', 37863, 387, 'hyedrabad', 4298),
('SA43', 49378, 3084, 'lahore', 3984),
('SA44', 43978, 4089, 'karachi', 5980),
('SA45', 387, 1893, 'sahiwal', 8732),
('SA46', 3728, 2078, 'gujranwala', 34908),
('SA47', 2837, 3989, 'mianwali', 3298),
('SA48', 3972, 342, 'mirpur', 3982),
('SA49', 3293, 1843, 'peshawar', 2989),
('SA50', 3879, 273, 'islamabad', 4983),
('SA51', 3874, 674, 'sibbi', 3876),
('SA52', 8734, 744, 'Lahore', 9473),
('SA53', 86967, 576, 'karachi', 3892),
('SA54', 2376, 73426, 'Bahawalpur', 2387),
('SA55', 3287, 2782, 'peshawar', 432),
('SA56', 86474, 4632, 'multan', 3722),
('SA57', 29234, 9764, 'mardan', 8722),
('SA58', 9764, 444, 'hyderabad', 9787),
('SA59', 8792, 1652, 'lahore', 872),
('SA60', 7833, 6567, 'jhelum', 98298),
('SA61', 2987, 8478, 'Rawalpindi', 836),
('SA62', 9823, 54554, 'Peshawar', 978),
('SA63', 9823, 2635, 'Lahore', 9746),
('SA64', 9832, 643, 'mangla', 7833),
('SA65', 923, 5898, 'islamabad', 9333),
('SA66', 9209, 490, 'mardan', 490),
('SA67', 3492, 3499, 'Karachi', 897),
('SA68', 9222, 4930, 'rawalpindi', 6788),
('SA69', 7338, 333, 'jhelum', 222),
('SA70', 9789, 555, 'sahiwal', 333),
('SA71', 8673, 5436, 'lahore', 3834),
('SA72', 9474, 4048, 'mianwali', 3737),
('SA73', 2092, 445, 'mardan', 4874),
('SA74', 9222, 408, 'quetta', 3939),
('SA75', 2922, 6757, 'sukkhur', 3983),
('SA76', 3872, 2022, 'lahore', 3939),
('SA77', 3981, 147, 'mardan', 8198),
('SA78', 2922, 8575, 'mianwali', 3033),
('SA79', 29002, 5506, 'islamabad', 3),
('SA80', 89393, 7422, 'peshawar', 4999),
('SA81', 2022, 43834, 'Rawalpindi', 292),
('SA82', 3982, 689, 'Peshawar', 388),
('SA83', 9333, 6869, 'sahiwal', 4949),
('SA84', 4933, 777, 'Islamabad', 934),
('SA85', 3992, 48885, 'Rawalpindi', 8884),
('SA86', 8348, 1735, 'mardan', 7777),
('SA87', 84845, 95759, 'Karachi', 3900),
('SA88', 4893, 8888, 'rawalpindi', 9875),
('SA89', 39933, 8598, 'Lahore', 3939),
('SA90', 3983, 8464, 'sahiwal', 3838),
('SA91', 38998, 48943, 'lahore', 933),
('SA92', 3938, 3030, 'peshawar', 3993),
('SA93', 38838, 1010, 'mirpur', 392),
('SA94', 39829, 6567, 'quetta', 9298),
('SA95', 29239, 8948, 'islamabad', 2029),
('SA96', 18298, 23938, 'lahore', 32992),
('SA97', 23892, 2092, 'karachi', 29020),
('SA98', 2922, 4849, 'faislabad', 3945),
('SA99', 38787, 83454, 'islamabad', 9333),
('UA01', 25, 3, 'Islamabad', 45000),
('UA02', 56, 2, 'Peshawar', 23490),
('UA03', 33, 12, 'Lahore', 10002),
('UA04', 12, 3, 'Islamabad', 45000),
('UA05', 12, 3, 'Lahore', 10001),
('UA06', 23, 5, 'Rawalpindi', 23456),
('UA07', 1, 34, 'Karachi', 73657);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

DROP TABLE IF EXISTS `contact`;
CREATE TABLE IF NOT EXISTS `contact` (
  `con_id` varchar(5) NOT NULL,
  `phone_no` int(13) NOT NULL,
  `email_id` varchar(35) NOT NULL,
  PRIMARY KEY (`con_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`con_id`, `phone_no`, `email_id`) VALUES
('DC01', 364786878, 'akmal@gami.com'),
('DC02', 8138785, 'samia@gmail.com'),
('DC03', 8237746, 'amina@gmail.com'),
('DC04', 82837475, 'sohaib@gmail.com'),
('DC05', 82387475, 'Soban@gmail.com'),
('DC06', 8276543, 'nirma@gmail.com'),
('DC07', 7866543, 'akram@gamil.com'),
('DC08', 6544566, 'abeer@gmail.com'),
('DC09', 8748755, 'sobia@gmail.com'),
('DC10', 92474757, 'aehan@gmail.com'),
('OC01', 52774756, 'hec@edu.pk'),
('OC02', 87247658, 'wapda@pk'),
('OC03', 82747577, 'ispr@funds.pk'),
('SC01', 354546670, 'amna@gmail.com'),
('SC02', 354656580, 'nimra@gmail.com'),
('SC03', 347476672, 'maria@gmail.com'),
('SC04', 385846768, 'farhat@gmail.com'),
('SC05', 284837358, 'muzaffar@gmail.com'),
('SC06', 337647567, 'safoora@gmail.com'),
('SC07', 33675766, 'tanveer@gmail.com'),
('SC08', 356456666, 'tayyab@gmail.com'),
('SC09', 354656757, 'ruba@gmail.com'),
('SC10', 34654676, 'wasay@gmail.com'),
('SC100', 321788731, 'vehan@gmail.com'),
('SC11', 38475365, 'zobi@gmail.com'),
('SC12', 384758766, 'hamna@gmail.com'),
('SC13', 374647657, 'maira@gmail.com'),
('SC14', 97346745, 'rayan@gmail.com'),
('SC15', 27467465, 'sumaira@gmail.com'),
('SC16', 323646555, 'imran@gmail.com'),
('SC17', 348858678, 'rizwan@gmail.com'),
('SC18', 384768764, 'fariha@gmail.com'),
('SC19', 346577667, 'irfan@gmail.com'),
('SC20', 374775766, 'abdullah@gmail.com'),
('SC21', 37768777, 'hania@gmail.com'),
('SC22', 26345677, 'mahrukh@gmail.com'),
('SC23', 37454855, 'laiba@gmail.com'),
('SC24', 374844433, 'malaika@gmail.com'),
('SC25', 34252678, 'mahnoor@gmail.com'),
('SC26', 36796447, 'tayyaba@gmail.com'),
('SC27', 32527891, 'neha@gmail.com'),
('SC28', 35372878, 'umaima@gmail.com'),
('SC29', 3872837, 'hooria@gmail.com'),
('SC30', 37892387, 'palwasha'),
('SC31', 22276268, 'jaweria@gmail.com'),
('SC32', 265222221, 'noora@gmail.com'),
('SC33', 36725288, 'hala@gmail.com'),
('SC34', 321583908, 'dashab@gmail.com'),
('SC35', 324398368, 'ayesha@gmail.com'),
('SC36', 378376788, 'meerab@gmail.com'),
('SC37', 35825729, 'naina@gmail.com'),
('SC38', 32183637, 'rubab@gmail.com'),
('SC39', 32826383, 'sawera@gamiil.com'),
('SC40', 27253782, 'umer@gmail.com'),
('SC41', 2622772, 'haider@gmail.com'),
('SC42', 36282638, 'ali@gmail.com'),
('SC43', 32733433, 'salman@gmail.com'),
('SC44', 36382628, 'maham@gmail.com'),
('SC45', 363936888, 'kaira@gmail.com'),
('SC46', 37262728, 'yumna@gmail.com'),
('SC47', 33736288, 'arsalan@gmail.com'),
('SC48', 372281366, 'ishan@gmail.com'),
('SC49', 38263828, 'durad@gmail.com'),
('SC50', 37268292, 'hamza@gmail.com'),
('SC51', 37527338, 'hassan@gmail.com'),
('SC52', 3726288, 'eman@gmail.com'),
('SC53', 372628363, 'minahil@gmail.com'),
('SC54', 29028201, 'khadijah@gmail.com'),
('SC55', 327129383, 'muneeb@gmail.com'),
('SC56', 37897286, 'ahsan@gmail.com'),
('SC57', 37762722, 'mahad@gmail.com'),
('SC58', 20289022, 'naira@gmail.com'),
('SC59', 32837488, 'mehak@gmail.com'),
('SC60', 37865546, 'fatima@gmail.com'),
('SC61', 32717882, 'khansa@gmail.com'),
('SC62', 318763555, 'zainab@gmail.com'),
('SC63', 28273333, 'ruqia@gmail.com'),
('SC64', 347728264, 'abdul hadi@gmail.com'),
('SC65', 367273662, 'irum@gmail.com'),
('SC66', 38287262, 'farah@gmail.com'),
('SC67', 367171638, 'mehmoona2gmail.com'),
('SC68', 362181263, 'moiz@gmail.com'),
('SC69', 378238782, 'maida@gmail.com'),
('SC70', 278288775, 'farhan@gmail.com'),
('SC71', 26327288, 'falak@gmail.com'),
('SC72', 252728111, 'farhad@gmail.com'),
('SC73', 372826383, 'kanwal@gmail.com'),
('SC74', 293737332, 'faisal@gmail.com'),
('SC75', 38263846, 'moona@gmail.com'),
('SC76', 322836389, 'abdullah@gmail.com'),
('SC77', 38373622, 'zahra@gmail.com'),
('SC78', 318373864, 'hoorain@gmail.com'),
('SC79', 374647837, 'kiran@gmail.com'),
('SC80', 383766883, 'irfan2gmail.com'),
('SC81', 3827628, 'hussain@gmail.com'),
('SC82', 27352827, 'misbah@gmail.com'),
('SC83', 37262896, 'usama@gmail.com'),
('SC84', 37352728, 'yusra@gmail.com'),
('SC85', 37624728, 'sehar@gmail.com'),
('SC86', 37253637, 'alishba@gmail.com'),
('SC87', 37252722, 'saima@gmail.com'),
('SC88', 321173666, 'wania@gmail.com'),
('SC89', 37263568, 'aleeza@gmail.com'),
('SC90', 27253772, 'zunaira@gmail.com'),
('SC91', 28337289, 'hamad@gmail.com'),
('SC92', 292736822, 'rania@gmail.com'),
('SC93', 304847622, 'esha@gmail.com'),
('SC94', 292736345, 'ubaid@gmail.com'),
('SC95', 325382911, 'tahir@gmail.com'),
('SC96', 321726772, 'yumna@gmail.com'),
('SC97', 38261864, 'minal@gmail.com'),
('SC98', 37263828, 'komal@gmail.com'),
('SC99', 374528222, 'sahil@gmail.com'),
('UC01', 518738455, 'qau@edu.pk'),
('UC02', 518747587, 'iiui@edu.pk'),
('UC03', 517374852, 'fast@edu.pk'),
('UC04', 517827475, 'comsats@edu.pk'),
('UC05', 72645668, 'ucp@edu.pk'),
('UC06', 517375686, 'fjwu@edu.pk'),
('UC07', 826467562, 'nust@edu.pk');

-- --------------------------------------------------------

--
-- Stand-in structure for view `counteconomicsstudents`
-- (See below for the actual view)
--
DROP VIEW IF EXISTS `counteconomicsstudents`;
CREATE TABLE IF NOT EXISTS `counteconomicsstudents` (
`uni_id` varchar(5)
,`uni_name` char(100)
,`dept_id` varchar(5)
,`dept_name` char(40)
,`total_students` bigint(21)
,`total_amount_given_to_univerity` double
);

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

DROP TABLE IF EXISTS `course`;
CREATE TABLE IF NOT EXISTS `course` (
  `crs_id` varchar(5) NOT NULL,
  `crs_name` char(40) NOT NULL,
  `crs_credit_hrs` int(1) NOT NULL,
  PRIMARY KEY (`crs_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`crs_id`, `crs_name`, `crs_credit_hrs`) VALUES
('CR01', 'English', 3),
('CR02', 'Maths', 3),
('CR03', 'Data structures', 4),
('CR04', 'OOP', 4),
('CR05', 'Physics', 3),
('CR06', 'DSS', 3),
('CR07', 'Psychology', 4),
('CR08', 'Database Systems', 4),
('CR09', 'Organic Chemistry', 3),
('CR10', 'Current Affairs', 3),
('CR11', 'International affairs', 3),
('CR12', 'Economics', 4),
('CR13', 'English Literacture', 4),
('CR14', 'Linear algebra', 4),
('CR15', 'ADSS', 4),
('CR16', 'Assembly Language', 4),
('CR17', 'Statistics', 4),
('CR18', 'Differential Equations', 3),
('CR19', 'paksitan studies', 4),
('CR20', 'Geography pf Pakistan', 4);

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

DROP TABLE IF EXISTS `department`;
CREATE TABLE IF NOT EXISTS `department` (
  `dept_id` varchar(5) NOT NULL,
  `dept_name` char(40) NOT NULL,
  `dept_head` char(50) NOT NULL,
  `uni_id` varchar(5) NOT NULL,
  PRIMARY KEY (`dept_id`),
  KEY `uni_id` (`uni_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`dept_id`, `dept_name`, `dept_head`, `uni_id`) VALUES
('D101', 'Computer Science', 'Dr Rabeeh Ayyaz', 'UN01'),
('D102', 'Statistics', 'Dr Akmal Khan', 'UN01'),
('D103', 'English', 'Dr Samina Maqbool', 'UN01'),
('D104', 'Economics', 'Dr Khalid Bajwa', 'UN01'),
('D105', 'BBA', 'Dr Samia Nameem', 'UN01'),
('D201', 'Economics', 'Dr Asma Batool', 'UN02'),
('D202', 'Computer Science', 'Dr Ali Naqi', 'UN02'),
('D203', 'BBA', 'Dr Anam Maqbool', 'UN02'),
('D204', 'International relations', 'Dr Sana Javed', 'UN02'),
('D205', 'English', 'Dr Khurram Khan', 'UN02'),
('D301', 'International Relations', 'Dr Khattak Junjua', 'UN03'),
('D302', 'Economics', 'Dr Aslam Baig', 'UN03'),
('D303', 'English', 'Dr Amna Khan', 'UN03'),
('D304', 'Computer science', 'Dr Nobia Zada', 'UN03'),
('D305', 'BBA', 'Dr Imran Akram', 'UN03'),
('D401', 'Economics', 'Dr Amina Khan', 'UN04'),
('D402', 'Computer Science', 'Dr Nimra Aslam', 'UN04'),
('D403', 'BBA', 'Dr Muzaffar Baig', 'UN04'),
('D404', 'International relations', 'Dr Amir Khan', 'UN04'),
('D405', 'English', 'Dr Samia batool', 'UN04'),
('D501', 'Mathematics', 'Dr Sumaira Batool', 'UN05'),
('D502', 'English', 'Dr Maira Imran', 'UN05'),
('D503', 'Computer science', 'Dr Hamna Imran', 'UN05'),
('D601', 'BBA', 'Dr Fatima Amjad', 'UN06'),
('D602', 'Internaltional relations', 'Dr Sania Amir', 'UN06'),
('D701', 'English', 'Dr Farhat Batool', 'UN07'),
('D702', 'Economics', 'Dr Tahira Khan', 'UN07'),
('D703', 'BBA', 'Dr Nazir Amir', 'UN07'),
('D704', 'International relations', 'Dr Waheed Ahmed', 'UN07'),
('D705', 'Computer Science', 'Dr Amjad Nazir', 'UN07');

-- --------------------------------------------------------

--
-- Stand-in structure for view `disbalestudentsselected`
-- (See below for the actual view)
--
DROP VIEW IF EXISTS `disbalestudentsselected`;
CREATE TABLE IF NOT EXISTS `disbalestudentsselected` (
`ss_id` varchar(5)
,`std_name` char(20)
,`CGPA` float
,`dept_id` varchar(5)
,`dept_name` char(40)
,`uni_id` varchar(5)
,`uni_name` char(100)
,`schl_id` varchar(5)
,`ist_id` varchar(5)
,`ist_amount` float
,`ist_type` char(20)
);

-- --------------------------------------------------------

--
-- Table structure for table `donor`
--

DROP TABLE IF EXISTS `donor`;
CREATE TABLE IF NOT EXISTS `donor` (
  `donor_id` varchar(5) NOT NULL,
  `donor_name` char(20) NOT NULL,
  `org_id` varchar(5) NOT NULL,
  `con_id` varchar(5) NOT NULL,
  `add_id` varchar(5) NOT NULL,
  PRIMARY KEY (`donor_id`),
  UNIQUE KEY `con_id` (`con_id`),
  UNIQUE KEY `add_id` (`add_id`),
  KEY `org_id` (`org_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `donor`
--

INSERT INTO `donor` (`donor_id`, `donor_name`, `org_id`, `con_id`, `add_id`) VALUES
('DO01', 'Akmal Khan', 'OR01', 'DC01', 'DA01'),
('DO02', 'Sania Imran', 'OR01', 'DC02', 'DA02'),
('DO03', 'Amina Mehmod', 'OR01', 'DC03', 'DA03'),
('DO04', 'Sohaib Malik', 'OR01', 'DC04', 'DA04'),
('DO05', 'Soban Khan', 'OR01', 'DC05', 'DA05'),
('DO06', 'Nirma Khan', 'OR02', 'DC06', 'DA06'),
('DO07', 'Akram Khan', 'OR02', 'DC07', 'DA07'),
('DO08', 'Abeer Niazai', 'OR02', 'DC08', 'DA08'),
('DO09', 'Sobia Arshad', 'OR03', 'DC09', 'DA09'),
('DO10', 'Aehan Amjad', 'OR03', 'DC10', 'DA10');

-- --------------------------------------------------------

--
-- Stand-in structure for view `donordetailsofraising`
-- (See below for the actual view)
--
DROP VIEW IF EXISTS `donordetailsofraising`;
CREATE TABLE IF NOT EXISTS `donordetailsofraising` (
`donor_id` varchar(5)
,`donor_name` char(20)
,`total_donations` bigint(21)
,`Maximum_donation` float
,`Minimum_donation` float
,`total_amount_of_donation` double
,`average_of_donations` double
);

-- --------------------------------------------------------

--
-- Table structure for table `enrolled_students`
--

DROP TABLE IF EXISTS `enrolled_students`;
CREATE TABLE IF NOT EXISTS `enrolled_students` (
  `std_id` varchar(5) NOT NULL,
  `crs_id` varchar(5) NOT NULL,
  PRIMARY KEY (`std_id`,`crs_id`),
  KEY `crs_id` (`crs_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `enrolled_students`
--

INSERT INTO `enrolled_students` (`std_id`, `crs_id`) VALUES
('ST24', 'CR01'),
('ST01', 'CR02'),
('ST11', 'CR02'),
('ST17', 'CR02'),
('ST38', 'CR02'),
('ST39', 'CR02'),
('ST41', 'CR02'),
('ST31', 'CR03'),
('ST33', 'CR03'),
('ST03', 'CR04'),
('ST26', 'CR04'),
('ST39', 'CR04'),
('ST50', 'CR04'),
('ST01', 'CR05'),
('ST11', 'CR05'),
('ST19', 'CR05'),
('ST24', 'CR05'),
('ST27', 'CR05'),
('ST01', 'CR06'),
('ST12', 'CR06'),
('ST14', 'CR06'),
('ST22', 'CR06'),
('ST34', 'CR06'),
('ST46', 'CR06'),
('ST12', 'CR07'),
('ST13', 'CR07'),
('ST16', 'CR07'),
('ST25', 'CR07'),
('ST01', 'CR08'),
('ST08', 'CR08'),
('ST26', 'CR08'),
('ST35', 'CR08'),
('ST06', 'CR09'),
('ST10', 'CR10'),
('ST18', 'CR10'),
('ST29', 'CR10'),
('ST36', 'CR10'),
('ST45', 'CR10'),
('ST02', 'CR11'),
('ST03', 'CR11'),
('ST24', 'CR11'),
('ST28', 'CR11'),
('ST32', 'CR11'),
('ST34', 'CR11'),
('ST02', 'CR12'),
('ST22', 'CR12'),
('ST31', 'CR12'),
('ST38', 'CR12'),
('ST02', 'CR13'),
('ST03', 'CR13'),
('ST23', 'CR13'),
('ST25', 'CR13'),
('ST28', 'CR13'),
('ST35', 'CR13'),
('ST03', 'CR14'),
('ST04', 'CR14'),
('ST05', 'CR14'),
('ST10', 'CR14'),
('ST24', 'CR14'),
('ST26', 'CR14'),
('ST31', 'CR14'),
('ST33', 'CR14'),
('ST39', 'CR14'),
('ST41', 'CR14'),
('ST45', 'CR14'),
('ST47', 'CR14'),
('ST50', 'CR14'),
('ST03', 'CR15'),
('ST06', 'CR15'),
('ST13', 'CR15'),
('ST31', 'CR15'),
('ST46', 'CR15'),
('ST06', 'CR16'),
('ST13', 'CR16'),
('ST16', 'CR16'),
('ST24', 'CR16'),
('ST27', 'CR16'),
('ST34', 'CR16'),
('ST36', 'CR16'),
('ST03', 'CR17'),
('ST04', 'CR17'),
('ST08', 'CR17'),
('ST24', 'CR17'),
('ST32', 'CR17'),
('ST46', 'CR17'),
('ST04', 'CR18'),
('ST07', 'CR18'),
('ST16', 'CR18'),
('ST27', 'CR18'),
('ST29', 'CR18'),
('ST37', 'CR18'),
('ST39', 'CR18'),
('ST42', 'CR18'),
('ST06', 'CR19'),
('ST14', 'CR19'),
('ST15', 'CR19'),
('ST18', 'CR19'),
('ST02', 'CR20'),
('ST21', 'CR20'),
('ST29', 'CR20'),
('ST31', 'CR20'),
('ST41', 'CR20');

-- --------------------------------------------------------

--
-- Table structure for table `funds`
--

DROP TABLE IF EXISTS `funds`;
CREATE TABLE IF NOT EXISTS `funds` (
  `fund_id` varchar(5) NOT NULL,
  `fund_type` char(20) NOT NULL,
  `donor_id` varchar(5) NOT NULL,
  `schl_id` varchar(5) NOT NULL,
  PRIMARY KEY (`fund_id`),
  UNIQUE KEY `schl_id` (`schl_id`),
  UNIQUE KEY `schl_id_2` (`schl_id`),
  KEY `donor_id` (`donor_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `funds`
--

INSERT INTO `funds` (`fund_id`, `fund_type`, `donor_id`, `schl_id`) VALUES
('FN01', 'Mutual Funds', 'DO01', 'SH01'),
('FN02', 'Educational Funds', 'DO09', 'SH02'),
('FN03', 'Specialized Funds', 'DO03', 'SH03'),
('FN04', 'Mutual Funds', 'DO04', 'SH04'),
('FN05', 'Educational Funds', 'DO07', 'SH05'),
('FN06', 'Mutual Funds', 'DO04', 'SH06'),
('FN07', 'Educational Funds', 'DO05', 'SH07'),
('FN08', 'Specialized Funds', 'DO03', 'SH08'),
('FN09', 'Mutual Funds', 'DO10', 'SH09'),
('FN10', 'Educational Funds', 'DO03', 'SH10'),
('FN11', 'Mutual Funds', 'DO05', 'SH11'),
('FN12', 'Educational Funds', 'DO09', 'SH12'),
('FN13', 'Specialized Funds', 'DO09', 'SH13'),
('FN14', 'Mutual Funds', 'DO05', 'SH14'),
('FN15', 'Educational Funds', 'DO01', 'SH15'),
('FN16', 'Mutual Funds', 'DO06', 'SH16'),
('FN17', 'Educational Funds', 'DO04', 'SH17'),
('FN18', 'Specialized Funds', 'DO06', 'SH18'),
('FN19', 'Mutual Funds', 'DO05', 'SH19'),
('FN20', 'Educational Funds', 'DO02', 'SH20'),
('FN21', 'Mutual Funds', 'DO03', 'SH21'),
('FN22', 'Educational Funds', 'DO08', 'SH22'),
('FN23', 'Specialized Funds', 'DO04', 'SH23'),
('FN24', 'Mutual Funds', 'DO04', 'SH24'),
('FN25', 'Educational Funds', 'DO02', 'SH25'),
('FN26', 'Mutual Funds', 'DO09', 'SH26'),
('FN27', 'Mutual Funds', 'DO06', 'SH27'),
('FN28', 'Specialized funds', 'DO03', 'SH28'),
('FN29', 'Mutual Funds', 'DO05', 'SH29'),
('FN30', 'Educational Funds', 'DO03', 'SH30'),
('FN31', 'Mutual Funds', 'DO04', 'SH31'),
('FN32', 'Educational Funds', 'DO01', 'SH32'),
('FN33', 'Specialized Funds', 'DO03', 'SH33'),
('FN34', 'Mutual Funds', 'DO06', 'SH34'),
('FN35', 'Educational Funds', 'DO10', 'SH35');

-- --------------------------------------------------------

--
-- Table structure for table `installment`
--

DROP TABLE IF EXISTS `installment`;
CREATE TABLE IF NOT EXISTS `installment` (
  `ist_id` varchar(5) NOT NULL,
  `ist_amount` float NOT NULL,
  `ist_type` char(20) NOT NULL,
  `ss_id` varchar(5) NOT NULL,
  `schl_id` varchar(5) DEFAULT NULL,
  `status` char(10) NOT NULL,
  PRIMARY KEY (`ist_id`),
  UNIQUE KEY `ss_id` (`ss_id`),
  UNIQUE KEY `ss_id_2` (`ss_id`),
  KEY `schl_id` (`schl_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `installment`
--

INSERT INTO `installment` (`ist_id`, `ist_amount`, `ist_type`, `ss_id`, `schl_id`, `status`) VALUES
('IS01', 2000, 'Monthly', 'ST01', 'SH01', 'Paid'),
('IS02', 50000, 'Yearly', 'ST05', 'SH02', 'paid'),
('IS03', 25000, 'Quarterly', 'ST06', 'SH05', 'Not Paid'),
('IS04', 40000, 'Yearly', 'ST07', 'SH04', 'Not Paid'),
('IS05', 40000, 'SemiAnnually', 'ST09', 'SH01', 'Paid'),
('IS06', 4000, 'Monthly', 'ST11', 'SH07', 'Paid'),
('IS07', 50000, 'Yearly', 'ST13', 'SH08', 'Not Paid'),
('IS08', 100000, 'Yearly', 'ST14', 'SH09', 'Not Paid'),
('IS09', 5000, 'Quarterly', 'ST17', 'SH08', 'Paid'),
('IS10', 25000, 'SemiAnnually', 'ST18', 'SH10', 'Paid'),
('IS11', 10000, 'Monthly', 'ST19', 'SH06', 'Paid'),
('IS12', 40000, 'Yearly', 'ST22', 'SH12', 'Paid'),
('IS13', 1000, 'Monthly', 'ST23', 'SH15', 'Not Paid'),
('IS14', 20000, 'Quarterly', 'ST25', 'SH14', 'Not Paid'),
('IS15', 4000, 'Monthly', 'ST28', 'SH15', 'Paid'),
('IS16', 1000, 'Monthly', 'ST45', 'SH30', 'Paid'),
('IS17', 25000, 'SemiAnnually', 'ST35', 'SH17', 'Paid'),
('IS18', 50000, 'Yearly', 'ST38', 'SH25', 'Not Paid'),
('IS19', 40000, 'Yearly', 'ST39', 'SH23', 'Paid'),
('IS20', 20000, 'Quarterly', 'ST42', 'SH28', 'Paid'),
('IS21', 70000, 'Yearly', 'ST46', 'SH33', 'Paid'),
('IS22', 3000, 'Monthly', 'ST47', 'SH34', 'Paid'),
('IS23', 25000, 'Quarterly', 'ST49', 'SH35', 'Not Paid');

-- --------------------------------------------------------

--
-- Stand-in structure for view `notselectedqau`
-- (See below for the actual view)
--
DROP VIEW IF EXISTS `notselectedqau`;
CREATE TABLE IF NOT EXISTS `notselectedqau` (
`std_id` varchar(5)
,`std_name` char(20)
,`std_cnic` bigint(13)
,`CGPA` float
,`father_salary` float
,`siblings` int(2)
,`Quota` char(20)
,`uni_id` varchar(5)
,`dept_id` varchar(5)
,`con_id` varchar(5)
,`add_id` varchar(5)
,`program` char(10)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `not_paid_students_in_karachi`
-- (See below for the actual view)
--
DROP VIEW IF EXISTS `not_paid_students_in_karachi`;
CREATE TABLE IF NOT EXISTS `not_paid_students_in_karachi` (
`ss_id` varchar(5)
,`std_name` char(20)
,`CGPA` float
,`city` char(20)
,`schl_id` varchar(5)
,`schl_name` char(20)
,`dept_name` char(40)
,`uni_name` char(100)
,`ist_id` varchar(5)
,`ist_amount` float
);

-- --------------------------------------------------------

--
-- Table structure for table `organization`
--

DROP TABLE IF EXISTS `organization`;
CREATE TABLE IF NOT EXISTS `organization` (
  `org_id` varchar(5) NOT NULL,
  `org_name` char(50) NOT NULL,
  `add_id` varchar(5) NOT NULL,
  `con_id` varchar(5) NOT NULL,
  PRIMARY KEY (`org_id`),
  UNIQUE KEY `add_id` (`add_id`),
  UNIQUE KEY `con_id` (`con_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `organization`
--

INSERT INTO `organization` (`org_id`, `org_name`, `add_id`, `con_id`) VALUES
('OR01', 'Higher Education Commission pakistan', 'OA01', 'OC01'),
('OR02', 'Wapda Services', 'OA02', 'OC02'),
('OR03', 'ISPR Officials', 'OA03', 'OC03');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

DROP TABLE IF EXISTS `payment`;
CREATE TABLE IF NOT EXISTS `payment` (
  `pay_id` varchar(5) NOT NULL,
  `pay_type` char(20) NOT NULL,
  `pay_data` date NOT NULL,
  `schl_id` varchar(5) NOT NULL,
  PRIMARY KEY (`pay_id`),
  UNIQUE KEY `schl_id` (`schl_id`),
  UNIQUE KEY `schl_id_2` (`schl_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`pay_id`, `pay_type`, `pay_data`, `schl_id`) VALUES
('PA01', 'Cash', '2021-03-09', 'SH01'),
('PA02', 'Credit Card', '2021-11-25', 'SH02'),
('PA03', 'Debit Card', '2019-03-13', 'SH03'),
('PA04', 'Bank Transfer', '2022-02-11', 'SH04'),
('PA05', 'Bank Transfer', '2022-02-12', 'SH05'),
('PA06', 'Cash', '2022-01-19', 'SH06'),
('PA07', 'Cheque Payment', '2022-04-21', 'SH07'),
('PA08', 'Bank Transfer', '2021-10-14', 'SH08'),
('PA09', 'Credit Card', '2021-02-17', 'SH09'),
('PA10', 'Debit Card', '2021-12-17', 'SH10'),
('PA11', 'Bank Transfer', '2021-12-24', 'SH11'),
('PA12', 'Cheque Payment', '2022-03-10', 'SH12'),
('PA13', 'Cash', '2021-11-24', 'SH13'),
('PA14', 'Credit Card', '2021-06-15', 'SH14'),
('PA15', 'Debit Card', '2021-06-18', 'SH15'),
('PA16', 'Bank transfer', '2022-05-09', 'SH16'),
('PA17', 'Debit Card', '2021-06-09', 'SH17'),
('PA18', 'Cheque payment', '2022-02-09', 'SH18'),
('PA19', 'Cash', '2021-08-21', 'SH19'),
('PA20', 'Debit Card', '2022-04-13', 'SH20'),
('PA21', 'Credit Card', '2021-02-02', 'SH21'),
('PA22', 'Cheque payment', '2021-09-14', 'SH22'),
('PA23', 'Bank Transfer', '2022-02-09', 'SH23'),
('PA24', 'Cash', '2021-07-09', 'SH24'),
('PA25', 'Credit card', '2022-04-14', 'SH25'),
('PA26', 'Debit Card', '2022-03-16', 'SH26'),
('PA27', 'Cheque payment', '2021-01-15', 'SH27'),
('PA28', 'Cash', '2021-11-17', 'SH28'),
('PA29', 'Debit Card', '2022-01-13', 'SH29'),
('PA30', 'Bank Transfer', '2022-03-09', 'SH30'),
('PA31', 'Bank Transfer', '2022-01-12', 'SH31'),
('PA32', 'Cheque Payment', '2021-10-22', 'SH32'),
('PA33', 'Cash', '2022-04-12', 'SH33'),
('PA34', 'Credit Card', '2021-12-22', 'SH34'),
('PA35', 'Debit Card', '2021-07-07', 'SH35');

-- --------------------------------------------------------

--
-- Table structure for table `scholarship`
--

DROP TABLE IF EXISTS `scholarship`;
CREATE TABLE IF NOT EXISTS `scholarship` (
  `schl_id` varchar(5) NOT NULL,
  `schl_name` char(20) NOT NULL,
  `schl_amount` float NOT NULL,
  `schl_duration_yrs` int(2) NOT NULL,
  `uni_id` varchar(5) NOT NULL,
  PRIMARY KEY (`schl_id`),
  KEY `uni_id` (`uni_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `scholarship`
--

INSERT INTO `scholarship` (`schl_id`, `schl_name`, `schl_amount`, `schl_duration_yrs`, `uni_id`) VALUES
('SH01', 'Merit', 200000, 3, 'UN01'),
('SH02', 'Need Based', 500000, 2, 'UN01'),
('SH03', 'Sports', 10000000, 1, 'UN01'),
('SH04', 'Disable Students', 10000000, 2, 'UN01'),
('SH05', 'Orphan', 2000000, 2, 'UN01'),
('SH06', 'Merit', 1200000, 1, 'UN02'),
('SH07', 'Orphan', 3400000, 2, 'UN02'),
('SH08', 'Need Based', 2300000, 3, 'UN02'),
('SH09', 'Sports', 12000000, 2, 'UN02'),
('SH10', 'Disable Students', 3500000, 1, 'UN02'),
('SH11', 'Merit', 250000, 2, 'UN03'),
('SH12', 'Need Based', 1000000, 2, 'UN03'),
('SH13', 'Sports', 160000, 1, 'UN03'),
('SH14', 'Disable Students', 460000, 3, 'UN03'),
('SH15', 'Orphan', 57002400, 2, 'UN03'),
('SH16', 'Merit', 1200000, 2, 'UN04'),
('SH17', 'Disable Students', 4500000, 2, 'UN04'),
('SH18', 'Sports', 270000, 2, 'UN04'),
('SH19', 'Orphan', 2300040, 1, 'UN04'),
('SH20', 'Need Based', 2000000, 2, 'UN04'),
('SH21', 'Need Based', 2300000, 1, 'UN05'),
('SH22', 'Merit', 345500, 2, 'UN05'),
('SH23', 'Orphan', 100000, 1, 'UN05'),
('SH24', 'Sports', 100000, 1, 'UN05'),
('SH25', 'Disable Students', 1000000, 2, 'UN05'),
('SH26', 'Merit', 1000000, 2, 'UN06'),
('SH27', 'Orphan', 100000, 3, 'UN06'),
('SH28', 'Disable Students', 2400000, 2, 'UN06'),
('SH29', 'Sports', 3500000, 2, 'UN06'),
('SH30', 'Need Based', 2345000, 3, 'UN06'),
('SH31', 'Merit', 1000000, 2, 'UN07'),
('SH32', 'Need Based', 200000, 2, 'UN07'),
('SH33', 'Sports', 3400000, 1, 'UN07'),
('SH34', 'Disable Students', 2300000, 3, 'UN07'),
('SH35', 'Orphan', 3400000, 3, 'UN07');

-- --------------------------------------------------------

--
-- Stand-in structure for view `selectedmeritstd`
-- (See below for the actual view)
--
DROP VIEW IF EXISTS `selectedmeritstd`;
CREATE TABLE IF NOT EXISTS `selectedmeritstd` (
`std_name` char(20)
,`cgpa` float
,`dept_name` char(40)
,`uni_name` char(100)
);

-- --------------------------------------------------------

--
-- Table structure for table `selected_students`
--

DROP TABLE IF EXISTS `selected_students`;
CREATE TABLE IF NOT EXISTS `selected_students` (
  `ss_id` varchar(5) NOT NULL,
  `std_name` char(20) NOT NULL,
  `CGPA` float NOT NULL,
  `father_salary` float NOT NULL,
  `Siblings` int(2) NOT NULL,
  `Quota` char(30) NOT NULL,
  `add_id` varchar(5) NOT NULL,
  `con_id` varchar(5) NOT NULL,
  `schl_id` varchar(5) NOT NULL,
  `dept_id` varchar(5) NOT NULL,
  `uni_id` varchar(5) NOT NULL,
  PRIMARY KEY (`ss_id`),
  UNIQUE KEY `add_id` (`add_id`),
  UNIQUE KEY `con_id` (`con_id`),
  KEY `schl_id` (`schl_id`,`dept_id`,`uni_id`),
  KEY `uni_id` (`uni_id`),
  KEY `dept_id` (`dept_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `selected_students`
--

INSERT INTO `selected_students` (`ss_id`, `std_name`, `CGPA`, `father_salary`, `Siblings`, `Quota`, `add_id`, `con_id`, `schl_id`, `dept_id`, `uni_id`) VALUES
('ST01', 'Amna Muzaffar', 3.93, 15000, 3, 'Merit', 'SA01', 'SC01', 'SH01', 'D101', 'UN01'),
('ST05', 'Muzaffar Abbass', 3.56, 25000, 3, 'Need Based', 'SA05', 'SC05', 'SH02', 'D102', 'UN01'),
('ST06', 'Safoora Anjum', 3.98, 0, 3, 'Orphan', 'SA06', 'SC06', 'SH05', 'D103', 'UN01'),
('ST07', 'Tanveer Hussain', 3.76, 23000, 6, 'Disable Students', 'SA07', 'SC07', 'SH04', 'D103', 'UN01'),
('ST09', 'Rubaisha Tanveer', 3.88, 40000, 2, 'Merit', 'SA09', 'SC09', 'SH01', 'D103', 'UN01'),
('ST11', 'Zobia Batool', 3.67, 0, 4, 'Orphan', 'SA11', 'SC11', 'SH07', 'D103', 'UN02'),
('ST13', 'Maira Arshad', 3.65, 0, 4, 'Need Based', 'SA13', 'SC13', 'SH08', 'D104', 'UN02'),
('ST14', 'Rayan Khan', 3.67, 35000, 4, 'Sports', 'SA14', 'SC14', 'SH09', 'D104', 'UN02'),
('ST17', 'Rizwan Ahmed', 3.66, 24000, 4, 'Need Based', 'SA17', 'SC17', 'SH08', 'D105', 'UN02'),
('ST18', 'Fariha Naz', 3.56, 10000, 3, 'Disable Students', 'SA18', 'SC18', 'SH10', 'D105', 'UN02'),
('ST19', 'Irfan Khan', 3.88, 23000, 2, 'Merit', 'SA19', 'SC19', 'SH06', 'D105', 'UN02'),
('ST22', 'Mahruk Abbas', 3.66, 23000, 4, 'Need Based', 'SA22', 'SC22', 'SH12', 'D302', 'UN03'),
('ST23', 'Laiba Masood', 3.44, 45000, 4, 'Orphan', 'SA23', 'SC23', 'SH15', 'D302', 'UN03'),
('ST25', 'Mahnoor Ali', 3.56, 12450, 2, 'Disable Students', 'SA25', 'SC25', 'SH14', 'D304', 'UN03'),
('ST28', 'Tayyaba anam', 3.66, 230000, 4, 'Orphan', 'SA28', 'SC28', 'SH15', 'D302', 'UN03'),
('ST35', 'Ayesha Baig', 3.22, 23000, 3, 'Disable Students', 'SA35', 'SC35', 'SH17', 'D404', 'UN04'),
('ST38', 'Rubab Ali', 3.4, 12000, 3, 'Disable students', 'SA38', 'SC38', 'SH25', 'D501', 'UN05'),
('ST39', 'Sawera Aslam', 3.56, 0, 7, 'Orphan', 'SA39', 'SC39', 'SH23', 'D502', 'UN05'),
('ST42', 'Ali Khan', 3.67, 12000, 3, 'Disable students', 'SA42', 'SC42', 'SH28', 'D602', 'UN06'),
('ST45', 'Kaira Baig', 3.5, 13000, 3, 'Need BAsed', 'SA45', 'SC45', 'SH30', 'D602', 'UN06'),
('ST46', 'Yumna Zaidi', 3.45, 12000, 4, 'Sports', 'SA46', 'SC46', 'SH33', 'D702', 'UN07'),
('ST47', 'Arsalan Baig', 3.67, 12000, 6, 'Disable students', 'SA47', 'SC47', 'SH34', 'D701', 'UN07'),
('ST49', 'Duarad Akrram', 3.55, 0, 3, 'Orphan', 'SA49', 'SC49', 'SH35', 'D703', 'UN07');

-- --------------------------------------------------------

--
-- Stand-in structure for view `sportsselectedstudents`
-- (See below for the actual view)
--
DROP VIEW IF EXISTS `sportsselectedstudents`;
CREATE TABLE IF NOT EXISTS `sportsselectedstudents` (
`ss_id` varchar(5)
,`std_name` char(20)
,`CGPA` float
,`uni_name` char(100)
,`dept_name` char(40)
,`fund_type` char(20)
,`donor_name` char(20)
,`org_name` char(50)
);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

DROP TABLE IF EXISTS `student`;
CREATE TABLE IF NOT EXISTS `student` (
  `std_id` varchar(5) NOT NULL,
  `std_name` char(20) NOT NULL,
  `std_cnic` bigint(13) NOT NULL,
  `CGPA` float NOT NULL,
  `father_salary` float NOT NULL,
  `siblings` int(2) NOT NULL,
  `Quota` char(20) NOT NULL,
  `uni_id` varchar(5) NOT NULL,
  `dept_id` varchar(5) NOT NULL,
  `con_id` varchar(5) NOT NULL,
  `add_id` varchar(5) NOT NULL,
  `program` char(10) NOT NULL,
  PRIMARY KEY (`std_id`),
  UNIQUE KEY `con_id` (`con_id`),
  UNIQUE KEY `add_id` (`add_id`),
  KEY `student_ibfk_3` (`uni_id`,`dept_id`),
  KEY `dept_id` (`dept_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`std_id`, `std_name`, `std_cnic`, `CGPA`, `father_salary`, `siblings`, `Quota`, `uni_id`, `dept_id`, `con_id`, `add_id`, `program`) VALUES
('ST01', 'Amna Muzaffar', 36375678, 3.93, 15000, 3, 'Merit', 'UN01', 'D101', 'SC01', 'SA01', 'BS'),
('ST02', 'Nimra Muzaffar', 2874758687967, 3.45, 75000, 4, 'Merit', 'UN01', 'D101', 'SC02', 'SA02', 'BS'),
('ST03', 'Maria Muzaffar', 2838945674838, 3.78, 100000, 6, 'Sports', 'UN01', 'D101', 'SC03', 'SA03', 'MSC'),
('ST04', 'Farhat Khan', 7264757676778, 3.45, 150000, 3, 'Need Based', 'UN01', 'D102', 'SC04', 'SA04', 'Phd'),
('ST05', 'Muzaffar Abbass', 8247845748374, 3.56, 25000, 3, 'Need Based', 'UN01', 'D102', 'SC05', 'SA05', 'BS lateral'),
('ST06', 'Safoora Anjum', 2536879764678, 3.98, 0, 3, 'Orphan', 'UN01', 'D103', 'SC06', 'SA06', 'BS'),
('ST07', 'Tanveer Hussain', 3648584657687, 3.76, 23000, 6, 'Disable Students', 'UN01', 'D103', 'SC07', 'SA07', 'Phd'),
('ST08', 'tayyab', 3745868664853, 3.67, 0, 3, '', 'UN01', 'D102', 'SC08', 'SA08', 'MS'),
('ST09', 'Rubaisha Tanveer', 529527593658, 3.88, 40000, 2, 'Merit', 'UN01', 'D103', 'SC09', 'SA09', 'BS'),
('ST10', 'Abdul Wasay Hussain', 3759623576423, 3.56, 50000, 3, 'Need Based', 'UN01', 'D103', 'SC10', 'SA10', 'BS'),
('ST11', 'Zobia Batool', 47586836475863, 3.67, 0, 4, 'Orphan', 'UN02', 'D103', 'SC11', 'SA11', 'Phd'),
('ST12', 'Hamna Arshad', 46576823456783, 3.45, 15000, 4, 'Merit', 'UN02', 'D104', 'SC12', 'SA12', 'BS'),
('ST13', 'Maira Arshad', 56384957386954, 3.65, 0, 4, 'Need Based', 'UN02', 'D104', 'SC13', 'SA13', 'BS Lateral'),
('ST14', 'Rayan Khan', 4586939586745, 3.67, 35000, 4, 'Sports', 'UN02', 'D104', 'SC14', 'SA14', 'BS'),
('ST15', 'Sumaira Irfan', 46586978374658, 3.67, 100000, 3, 'Sports', 'UN02', 'D104', 'SC15', 'SA15', 'Phd'),
('ST16', 'Imran Zafar', 46576857463547, 3.56, 78000, 4, 'Merit', 'UN02', 'D105', 'SC16', 'SA16', 'MS'),
('ST17', 'Rizwan Ahmed', 2634569876143, 3.66, 24000, 4, 'Need Based', 'UN02', 'D105', 'SC17', 'SA17', 'BS lateral'),
('ST18', 'Fariha Naz', 3748596534865, 3.56, 10000, 3, 'Disable Students', 'UN02', 'D105', 'SC18', 'SA18', 'MS'),
('ST19', 'Irfan Khan', 3457623909475, 3.88, 23000, 2, 'Merit', 'UN02', 'D105', 'SC19', 'SA19', 'PHD'),
('ST20', 'Abdullah Nawaz', 2345678765432, 3.23, 120000, 2, 'Sports', 'UN02', 'D105', 'SC20', 'SA20', 'BS'),
('ST21', 'Hania Irfan', 7564637485864, 3.89, 140000, 3, 'Merit', 'UN03', 'D303', 'SC21', 'SA21', 'BS'),
('ST22', 'Mahruk Abbas', 2537586540385, 3.66, 23000, 4, 'Need Based', 'UN03', 'D302', 'SC22', 'SA22', 'BS'),
('ST23', 'Laiba Masood', 6475869394857, 3.44, 45000, 4, 'Orphan', 'UN03', 'D302', 'SC23', 'SA23', 'MSC'),
('ST24', 'Malaika Aroj', 6574829364576, 3.1, 120000, 3, 'Sports', 'UN03', 'D304', 'SC24', 'SA24', 'BS lateral'),
('ST25', 'Mahnoor Ali', 25375869795747, 3.56, 12450, 2, 'Disable Students', 'UN03', 'D304', 'SC25', 'SA25', 'BS'),
('ST26', 'Umaima Khan', 74574838495838, 3.34, 23000, 2, 'Merit', 'UN03', 'D302', 'SC26', 'SA26', 'Phd'),
('ST27', 'Neha Kakar', 75668697675848, 2.5, 300000, 4, 'Need Based', 'UN03', 'D305', 'SC27', 'SA27', 'BS'),
('ST28', 'Tayyaba anam', 7685737485737, 3.66, 230000, 4, 'Orphan', 'UN03', 'D302', 'SC28', 'SA28', 'BS'),
('ST29', 'Hooria Abbas', 6574938475768, 2.88, 100000, 2, 'Sports', 'UN03', 'D303', 'SC29', 'SA29', 'Phd'),
('ST30', 'Palwasha Abbas', 3747576797968, 3.55, 2300000, 3, 'Disable Students', 'UN03', 'D304', 'SC30', 'SA30', ''),
('ST31', 'Jaweria Amjad', 3768594857643, 3.89, 70000, 3, 'Merit', 'UN04', 'D401', 'SC31', 'SA31', 'MS'),
('ST32', 'Noora aslam', 75646576838475, 3.2, 70590, 3, 'Need based', 'UN04', 'D402', 'SC32', 'SA32', 'Phd'),
('ST33', 'Hala Khan', 37687904857643, 2.33, 0, 3, 'Orphan', 'UN04', 'D404', 'SC33', 'SA33', 'BS lateral'),
('ST34', 'Dashab Abbas', 12756347896038, 2.5, 12000, 3, 'Sports', 'UN04', 'D405', 'SC34', 'SA34', 'MS'),
('ST35', 'Ayesha Baig', 7578687768576, 3.22, 23000, 3, 'Disable Students', 'UN04', 'D404', 'SC35', 'SA35', 'Phd'),
('ST36', 'Meerab Ali', 8796875674857, 2.9, 12000, 7, 'Merit', 'UN05', 'D502', 'SC36', 'SA36', 'BS'),
('ST37', 'Naina Aslam', 7465879087563, 2.55, 30000, 4, 'Need Based', 'UN05', 'D503', 'SC37', 'SA37', 'BS Lateral'),
('ST38', 'Rubab Ali', 65749087654378, 3.4, 12000, 3, 'Disable students', 'UN05', 'D501', 'SC38', 'SA38', 'MSC'),
('ST39', 'Sawera Aslam', 6677879885867, 3.56, 0, 7, 'Orphan', 'UN05', 'D502', 'SC39', 'SA39', 'MS'),
('ST40', 'Umer Ali', 5678364576879, 4, 120000, 2, 'Sports', 'UN05', 'D501', 'SC40', 'SA40', 'BS'),
('ST41', 'Haider Khan', 364758674657686, 3.45, 140000, 3, 'Sports', 'UN06', 'D601', 'SC41', 'SA41', 'BS Lateral'),
('ST42', 'Ali Khan', 4354758696868, 3.67, 12000, 3, 'Disable students', 'UN06', 'D602', 'SC42', 'SA42', 'MSC'),
('ST43', 'Salman Ayazz', 1234567887654, 3.56, 20000, 4, 'Merit', 'UN06', 'D601', 'SC43', 'SA43', 'Phd'),
('ST44', 'Maham khan', 6574890234567, 3.66, 70000, 4, 'Sports', 'UN06', 'D602', 'SC44', 'SA44', 'BS'),
('ST45', 'Kaira Baig', 5678445683947, 3.5, 13000, 3, 'Need BAsed', 'UN06', 'D602', 'SC45', 'SA45', 'BS lateral'),
('ST46', 'Yumna Zaidi', 4567876455768, 3.45, 12000, 4, 'Sports', 'UN07', 'D702', 'SC46', 'SA46', 'BS Lateral'),
('ST47', 'Arsalan Baig', 7685736456757, 3.67, 12000, 6, 'Disable students', 'UN07', 'D701', 'SC47', 'SA47', 'Phd'),
('ST48', 'Ishan Ali', 25364758697857, 2.3, 120000, 3, 'Merit', 'UN07', 'D704', 'SC48', 'SA48', 'Phd'),
('ST49', 'Duarad Akrram', 576878787856454, 3.55, 0, 3, 'Orphan', 'UN07', 'D703', 'SC49', 'SA49', 'BS lateral'),
('ST50', 'Hamza Aslam', 65748494857675, 3.88, 30000, 4, 'Need Based', 'UN07', 'D704', 'SC50', 'SA50', 'MS');

-- --------------------------------------------------------

--
-- Stand-in structure for view `students taking scholarship`
-- (See below for the actual view)
--
DROP VIEW IF EXISTS `students taking scholarship`;
CREATE TABLE IF NOT EXISTS `students taking scholarship` (
`ss_id` varchar(5)
,`std_name` char(20)
,`CGPA` float
,`father_salary` float
,`Siblings` int(2)
,`Quota` char(30)
,`add_id` varchar(5)
,`con_id` varchar(5)
,`schl_id` varchar(5)
,`dept_id` varchar(5)
,`uni_id` varchar(5)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `top3_students_getting_quarterly_installments`
-- (See below for the actual view)
--
DROP VIEW IF EXISTS `top3_students_getting_quarterly_installments`;
CREATE TABLE IF NOT EXISTS `top3_students_getting_quarterly_installments` (
`ss_id` varchar(5)
,`std_name` char(20)
,`CGPA` float
,`dept_id` varchar(5)
,`dept_name` char(40)
,`uni_id` varchar(5)
,`uni_name` char(100)
,`ist_id` varchar(5)
,`ist_type` char(20)
,`ist_amount` float
,`schl_id` varchar(5)
,`schl_name` char(20)
,`pay_id` varchar(5)
,`pay_type` char(20)
,`fund_type` char(20)
);

-- --------------------------------------------------------

--
-- Table structure for table `university`
--

DROP TABLE IF EXISTS `university`;
CREATE TABLE IF NOT EXISTS `university` (
  `uni_id` varchar(5) NOT NULL,
  `uni_name` char(100) NOT NULL,
  `uni_type` char(20) NOT NULL,
  `add_id` varchar(5) NOT NULL,
  `con_id` varchar(5) NOT NULL,
  PRIMARY KEY (`uni_id`),
  KEY `add_id` (`add_id`),
  KEY `con_id` (`con_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `university`
--

INSERT INTO `university` (`uni_id`, `uni_name`, `uni_type`, `add_id`, `con_id`) VALUES
('UN01', 'Quaid-i-Azam University', 'Public', 'UA01', 'UC01'),
('UN02', 'International Islamic University', 'Public', 'UA02', 'UC02'),
('UN03', 'Fast University', 'Private', 'UA03', 'UC03'),
('UN04', 'Comsats University', 'private', 'UA04', 'UC04'),
('UN05', 'University of Centra Punjab', 'Public', 'UA05', 'UC05'),
('UN06', 'Fatima Jinnah women University', 'Public', 'UA06', 'UC06'),
('UN07', 'National University of Science and Technology', 'Public', 'UA07', 'UC07');

-- --------------------------------------------------------

--
-- Stand-in structure for view `universityview`
-- (See below for the actual view)
--
DROP VIEW IF EXISTS `universityview`;
CREATE TABLE IF NOT EXISTS `universityview` (
`uni_id` varchar(5)
,`uni_name` char(100)
,`Total_Scholarships_recieving` bigint(21)
,`Highest_amount_recieved` float
,`By_Donor` char(20)
,`In_Organzation` char(50)
,`Total_Amount_recieved` double
);

-- --------------------------------------------------------

--
-- Structure for view `counteconomicsstudents`
--
DROP TABLE IF EXISTS `counteconomicsstudents`;

DROP VIEW IF EXISTS `counteconomicsstudents`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `counteconomicsstudents`  AS SELECT `s`.`uni_id` AS `uni_id`, `u`.`uni_name` AS `uni_name`, `d`.`dept_id` AS `dept_id`, `d`.`dept_name` AS `dept_name`, count(`s`.`ss_id`) AS `total_students`, sum(`sc`.`schl_amount`) AS `total_amount_given_to_univerity` FROM (((`selected_students` `s` join `department` `d`) join `scholarship` `sc`) join `university` `u`) WHERE (`s`.`dept_id` in (select `d`.`dept_id` from DUAL where (`d`.`dept_name` = 'Economics')) AND (`s`.`uni_id` = `u`.`uni_id`) AND (`s`.`schl_id` = `sc`.`schl_id`) AND (`sc`.`schl_name` = 'Need Based')) GROUP BY `s`.`uni_id` ;

-- --------------------------------------------------------

--
-- Structure for view `disbalestudentsselected`
--
DROP TABLE IF EXISTS `disbalestudentsselected`;

DROP VIEW IF EXISTS `disbalestudentsselected`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `disbalestudentsselected`  AS SELECT `s`.`ss_id` AS `ss_id`, `s`.`std_name` AS `std_name`, `s`.`CGPA` AS `CGPA`, `d`.`dept_id` AS `dept_id`, `d`.`dept_name` AS `dept_name`, `u`.`uni_id` AS `uni_id`, `u`.`uni_name` AS `uni_name`, `sc`.`schl_id` AS `schl_id`, `i`.`ist_id` AS `ist_id`, `i`.`ist_amount` AS `ist_amount`, `i`.`ist_type` AS `ist_type` FROM ((((`selected_students` `s` join `university` `u`) join `department` `d`) join `installment` `i`) join `scholarship` `sc`) WHERE ((`s`.`schl_id` = `sc`.`schl_id`) AND (`sc`.`schl_name` = 'Disable Students') AND (`s`.`dept_id` = `d`.`dept_id`) AND (`s`.`uni_id` = `u`.`uni_id`) AND (`s`.`schl_id` = `i`.`schl_id`)) ORDER BY `i`.`ist_amount` DESC, `s`.`CGPA` DESC ;

-- --------------------------------------------------------

--
-- Structure for view `donordetailsofraising`
--
DROP TABLE IF EXISTS `donordetailsofraising`;

DROP VIEW IF EXISTS `donordetailsofraising`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `donordetailsofraising`  AS SELECT `f`.`donor_id` AS `donor_id`, `d`.`donor_name` AS `donor_name`, count(`f`.`donor_id`) AS `total_donations`, max(`sc`.`schl_amount`) AS `Maximum_donation`, min(`sc`.`schl_amount`) AS `Minimum_donation`, sum(`sc`.`schl_amount`) AS `total_amount_of_donation`, avg(`sc`.`schl_amount`) AS `average_of_donations` FROM ((`donor` `d` join `funds` `f`) join `scholarship` `sc`) WHERE ((`d`.`donor_id` = `f`.`donor_id`) AND (`f`.`schl_id` = `sc`.`schl_id`)) GROUP BY `d`.`donor_id` ORDER BY sum(`sc`.`schl_amount`) DESC ;

-- --------------------------------------------------------

--
-- Structure for view `notselectedqau`
--
DROP TABLE IF EXISTS `notselectedqau`;

DROP VIEW IF EXISTS `notselectedqau`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `notselectedqau`  AS SELECT DISTINCT `s`.`std_id` AS `std_id`, `s`.`std_name` AS `std_name`, `s`.`std_cnic` AS `std_cnic`, `s`.`CGPA` AS `CGPA`, `s`.`father_salary` AS `father_salary`, `s`.`siblings` AS `siblings`, `s`.`Quota` AS `Quota`, `s`.`uni_id` AS `uni_id`, `s`.`dept_id` AS `dept_id`, `s`.`con_id` AS `con_id`, `s`.`add_id` AS `add_id`, `s`.`program` AS `program` FROM ((`student` `s` join `selected_students` `c`) join `university` `u`) WHERE ((`s`.`std_id` <> `c`.`ss_id`) AND (`s`.`uni_id` = `u`.`uni_id`) AND (`u`.`uni_name` = 'Quaid-i-Azam University')) ORDER BY `s`.`CGPA` ASC ;

-- --------------------------------------------------------

--
-- Structure for view `not_paid_students_in_karachi`
--
DROP TABLE IF EXISTS `not_paid_students_in_karachi`;

DROP VIEW IF EXISTS `not_paid_students_in_karachi`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `not_paid_students_in_karachi`  AS SELECT `s`.`ss_id` AS `ss_id`, `s`.`std_name` AS `std_name`, `s`.`CGPA` AS `CGPA`, `a`.`city` AS `city`, `s`.`schl_id` AS `schl_id`, `sc`.`schl_name` AS `schl_name`, `d`.`dept_name` AS `dept_name`, `u`.`uni_name` AS `uni_name`, `i`.`ist_id` AS `ist_id`, `i`.`ist_amount` AS `ist_amount` FROM (((((`selected_students` `s` join `university` `u`) join `department` `d`) join `address` `a`) join `installment` `i`) join `scholarship` `sc`) WHERE ((`s`.`schl_id` = `sc`.`schl_id`) AND (`s`.`dept_id` = `d`.`dept_id`) AND (`s`.`uni_id` = `u`.`uni_id`) AND (`s`.`add_id` = `a`.`add_id`) AND (`a`.`city` = 'Karachi') AND (`s`.`schl_id` = `i`.`schl_id`) AND (`i`.`status` = 'Not Paid')) ;

-- --------------------------------------------------------

--
-- Structure for view `selectedmeritstd`
--
DROP TABLE IF EXISTS `selectedmeritstd`;

DROP VIEW IF EXISTS `selectedmeritstd`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `selectedmeritstd`  AS SELECT `s`.`std_name` AS `std_name`, `s`.`CGPA` AS `cgpa`, `d`.`dept_name` AS `dept_name`, `u`.`uni_name` AS `uni_name` FROM (((`selected_students` `s` join `scholarship` `sc`) join `university` `u`) join `department` `d`) WHERE ((`s`.`schl_id` = `sc`.`schl_id`) AND (`sc`.`schl_name` = 'Merit') AND (`s`.`uni_id` = `u`.`uni_id`) AND (`s`.`dept_id` = `d`.`dept_id`)) ;

-- --------------------------------------------------------

--
-- Structure for view `sportsselectedstudents`
--
DROP TABLE IF EXISTS `sportsselectedstudents`;

DROP VIEW IF EXISTS `sportsselectedstudents`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `sportsselectedstudents`  AS SELECT `s`.`ss_id` AS `ss_id`, `s`.`std_name` AS `std_name`, `s`.`CGPA` AS `CGPA`, `u`.`uni_name` AS `uni_name`, `d`.`dept_name` AS `dept_name`, `f`.`fund_type` AS `fund_type`, `dd`.`donor_name` AS `donor_name`, `o`.`org_name` AS `org_name` FROM ((((((`selected_students` `s` join `funds` `f`) join `donor` `dd`) join `scholarship` `sc`) join `organization` `o`) join `university` `u`) join `department` `d`) WHERE ((`s`.`schl_id` = `sc`.`schl_id`) AND (`sc`.`schl_name` = 'Sports') AND (`s`.`uni_id` = `u`.`uni_id`) AND (`s`.`dept_id` = `d`.`dept_id`) AND (`f`.`schl_id` = `sc`.`schl_id`) AND (`f`.`donor_id` = `dd`.`donor_id`) AND (`o`.`org_id` = `dd`.`org_id`)) ORDER BY `s`.`CGPA` ASC ;

-- --------------------------------------------------------

--
-- Structure for view `students taking scholarship`
--
DROP TABLE IF EXISTS `students taking scholarship`;

DROP VIEW IF EXISTS `students taking scholarship`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `students taking scholarship`  AS SELECT `selected_students`.`ss_id` AS `ss_id`, `selected_students`.`std_name` AS `std_name`, `selected_students`.`CGPA` AS `CGPA`, `selected_students`.`father_salary` AS `father_salary`, `selected_students`.`Siblings` AS `Siblings`, `selected_students`.`Quota` AS `Quota`, `selected_students`.`add_id` AS `add_id`, `selected_students`.`con_id` AS `con_id`, `selected_students`.`schl_id` AS `schl_id`, `selected_students`.`dept_id` AS `dept_id`, `selected_students`.`uni_id` AS `uni_id` FROM `selected_students` ;

-- --------------------------------------------------------

--
-- Structure for view `top3_students_getting_quarterly_installments`
--
DROP TABLE IF EXISTS `top3_students_getting_quarterly_installments`;

DROP VIEW IF EXISTS `top3_students_getting_quarterly_installments`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `top3_students_getting_quarterly_installments`  AS SELECT `s`.`ss_id` AS `ss_id`, `s`.`std_name` AS `std_name`, `s`.`CGPA` AS `CGPA`, `s`.`dept_id` AS `dept_id`, `d`.`dept_name` AS `dept_name`, `s`.`uni_id` AS `uni_id`, `u`.`uni_name` AS `uni_name`, `i`.`ist_id` AS `ist_id`, `i`.`ist_type` AS `ist_type`, `i`.`ist_amount` AS `ist_amount`, `s`.`schl_id` AS `schl_id`, `sc`.`schl_name` AS `schl_name`, `p`.`pay_id` AS `pay_id`, `p`.`pay_type` AS `pay_type`, `f`.`fund_type` AS `fund_type` FROM ((((((`selected_students` `s` join `university` `u`) join `department` `d`) join `installment` `i`) join `scholarship` `sc`) join `payment` `p`) join `funds` `f`) WHERE ((`s`.`ss_id` = `i`.`ss_id`) AND (`s`.`schl_id` = `i`.`schl_id`) AND (`i`.`ist_type` = 'Quarterly') AND (`s`.`dept_id` = `d`.`dept_id`) AND (`s`.`uni_id` = `u`.`uni_id`) AND (`s`.`schl_id` = `sc`.`schl_id`) AND (`sc`.`schl_id` = `p`.`schl_id`) AND (`sc`.`schl_id` = `f`.`schl_id`)) ORDER BY `s`.`CGPA` DESC LIMIT 0, 3 ;

-- --------------------------------------------------------

--
-- Structure for view `universityview`
--
DROP TABLE IF EXISTS `universityview`;

DROP VIEW IF EXISTS `universityview`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `universityview`  AS SELECT DISTINCT `u`.`uni_id` AS `uni_id`, `u`.`uni_name` AS `uni_name`, count(`s`.`ss_id`) AS `Total_Scholarships_recieving`, max(`sc`.`schl_amount`) AS `Highest_amount_recieved`, `d`.`donor_name` AS `By_Donor`, `o`.`org_name` AS `In_Organzation`, sum(distinct `sc`.`schl_amount`) AS `Total_Amount_recieved` FROM (((((`university` `u` join `scholarship` `sc`) join `donor` `d`) join `organization` `o`) join `selected_students` `s`) join `funds` `f`) WHERE ((`s`.`uni_id` = `u`.`uni_id`) AND (`s`.`schl_id` = `sc`.`schl_id`) AND (`sc`.`schl_amount` = (select max(`sc`.`schl_amount`))) AND (`s`.`schl_id` = `f`.`schl_id`) AND (`f`.`donor_id` = `d`.`donor_id`) AND (`d`.`org_id` = `o`.`org_id`)) GROUP BY `s`.`uni_id` ORDER BY sum(distinct `sc`.`schl_amount`) DESC ;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `department`
--
ALTER TABLE `department`
  ADD CONSTRAINT `department_ibfk_1` FOREIGN KEY (`uni_id`) REFERENCES `university` (`uni_id`);

--
-- Constraints for table `donor`
--
ALTER TABLE `donor`
  ADD CONSTRAINT `donor_ibfk_1` FOREIGN KEY (`org_id`) REFERENCES `organization` (`org_id`),
  ADD CONSTRAINT `donor_ibfk_2` FOREIGN KEY (`add_id`) REFERENCES `address` (`add_id`),
  ADD CONSTRAINT `donor_ibfk_3` FOREIGN KEY (`con_id`) REFERENCES `contact` (`con_id`);

--
-- Constraints for table `enrolled_students`
--
ALTER TABLE `enrolled_students`
  ADD CONSTRAINT `enrolled_students_ibfk_1` FOREIGN KEY (`crs_id`) REFERENCES `course` (`crs_id`),
  ADD CONSTRAINT `enrolled_students_ibfk_2` FOREIGN KEY (`std_id`) REFERENCES `student` (`std_id`);

--
-- Constraints for table `funds`
--
ALTER TABLE `funds`
  ADD CONSTRAINT `funds_ibfk_1` FOREIGN KEY (`donor_id`) REFERENCES `donor` (`donor_id`),
  ADD CONSTRAINT `funds_ibfk_2` FOREIGN KEY (`schl_id`) REFERENCES `scholarship` (`schl_id`);

--
-- Constraints for table `installment`
--
ALTER TABLE `installment`
  ADD CONSTRAINT `installment_ibfk_1` FOREIGN KEY (`ss_id`) REFERENCES `selected_students` (`ss_id`),
  ADD CONSTRAINT `installment_ibfk_2` FOREIGN KEY (`schl_id`) REFERENCES `scholarship` (`schl_id`);

--
-- Constraints for table `organization`
--
ALTER TABLE `organization`
  ADD CONSTRAINT `organization_ibfk_1` FOREIGN KEY (`add_id`) REFERENCES `address` (`add_id`),
  ADD CONSTRAINT `organization_ibfk_2` FOREIGN KEY (`con_id`) REFERENCES `contact` (`con_id`);

--
-- Constraints for table `payment`
--
ALTER TABLE `payment`
  ADD CONSTRAINT `payment_ibfk_1` FOREIGN KEY (`schl_id`) REFERENCES `scholarship` (`schl_id`);

--
-- Constraints for table `scholarship`
--
ALTER TABLE `scholarship`
  ADD CONSTRAINT `scholarship_ibfk_2` FOREIGN KEY (`uni_id`) REFERENCES `university` (`uni_id`);

--
-- Constraints for table `selected_students`
--
ALTER TABLE `selected_students`
  ADD CONSTRAINT `selected_students_ibfk_1` FOREIGN KEY (`uni_id`) REFERENCES `university` (`uni_id`),
  ADD CONSTRAINT `selected_students_ibfk_2` FOREIGN KEY (`add_id`) REFERENCES `address` (`add_id`),
  ADD CONSTRAINT `selected_students_ibfk_3` FOREIGN KEY (`con_id`) REFERENCES `contact` (`con_id`),
  ADD CONSTRAINT `selected_students_ibfk_4` FOREIGN KEY (`dept_id`) REFERENCES `department` (`dept_id`);

--
-- Constraints for table `student`
--
ALTER TABLE `student`
  ADD CONSTRAINT `student_ibfk_1` FOREIGN KEY (`uni_id`) REFERENCES `university` (`uni_id`),
  ADD CONSTRAINT `student_ibfk_2` FOREIGN KEY (`dept_id`) REFERENCES `department` (`dept_id`),
  ADD CONSTRAINT `student_ibfk_3` FOREIGN KEY (`con_id`) REFERENCES `contact` (`con_id`),
  ADD CONSTRAINT `student_ibfk_4` FOREIGN KEY (`add_id`) REFERENCES `address` (`add_id`);

--
-- Constraints for table `university`
--
ALTER TABLE `university`
  ADD CONSTRAINT `university_ibfk_1` FOREIGN KEY (`add_id`) REFERENCES `address` (`add_id`),
  ADD CONSTRAINT `university_ibfk_2` FOREIGN KEY (`con_id`) REFERENCES `contact` (`con_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
