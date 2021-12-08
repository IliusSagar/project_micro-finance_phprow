-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 08, 2021 at 08:45 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `astha_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `bangla`
--

CREATE TABLE `bangla` (
  `id` int(11) NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `bangla`
--

INSERT INTO `bangla` (`id`, `content`) VALUES
(2, 'প্রাথমিকভাবে করোনার নতুন এ ধরনটির বৈজ্ঞানিক নাম বি.১.১.৫২৯। তবে গতকাল শুক্রবার এর নাম দেওয়া হয়েছে ‘ওমিক্রন’। এ নাম দিয়েই ধরনটিকে ‘উদ্বেগজনক’ বলে আখ্যায়িত করেছে বিশ্ব স্বাস্থ্য সংস্থা (ডব্লিউএইচও)। উদ্বেগজনক বলার কারণ হিসেবে সংস্থাটি এ ধরনটির বারবার জিনগত রূপ বদল এবং আগেও করোনায় আক্রান্ত হিসেবে শনাক্ত ব্যক্তিদের আবার এ ভাইরাসে আক্রান্ত হওয়ার ঝুঁকির বিষয়টিকেই সামনে তুলে এনেছে।');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kormione_rin_registration`
--

CREATE TABLE `tbl_kormione_rin_registration` (
  `id` int(11) NOT NULL,
  `kormionerinreghisab` varchar(200) NOT NULL,
  `kormionerinregno` float NOT NULL,
  `kormionerinreggrahoknam` varchar(200) NOT NULL,
  `kormionerinreggrahokpitarnam` varchar(200) NOT NULL,
  `kormionerinreggrahokmatarnam` varchar(200) NOT NULL,
  `kormionerinreggrahoksamirnam` varchar(200) NOT NULL,
  `kormionereggrahokmobile` varchar(200) NOT NULL,
  `kormionerinreggrahoknid` varchar(200) NOT NULL,
  `kormionerinreggrahokaddress` varchar(200) NOT NULL,
  `kormionerinregdate` date NOT NULL,
  `kormionerinregnomineernam` varchar(200) NOT NULL,
  `kormionerinregnomineerpitarnam` varchar(200) NOT NULL,
  `kormionesonchoyregnomineermatarnam` varchar(200) NOT NULL,
  `kormionerinregnomineersamirnam` varchar(200) NOT NULL,
  `kormionerinregnomineermobile` varchar(200) NOT NULL,
  `kormionerinregnomineernid` varchar(200) NOT NULL,
  `kormionerinregnomineeraddress` varchar(200) NOT NULL,
  `kormionerinregamount` int(11) NOT NULL,
  `kormionerinregimag` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_kormione_rin_registration`
--

INSERT INTO `tbl_kormione_rin_registration` (`id`, `kormionerinreghisab`, `kormionerinregno`, `kormionerinreggrahoknam`, `kormionerinreggrahokpitarnam`, `kormionerinreggrahokmatarnam`, `kormionerinreggrahoksamirnam`, `kormionereggrahokmobile`, `kormionerinreggrahoknid`, `kormionerinreggrahokaddress`, `kormionerinregdate`, `kormionerinregnomineernam`, `kormionerinregnomineerpitarnam`, `kormionesonchoyregnomineermatarnam`, `kormionerinregnomineersamirnam`, `kormionerinregnomineermobile`, `kormionerinregnomineernid`, `kormionerinregnomineeraddress`, `kormionerinregamount`, `kormionerinregimag`) VALUES
(1, 'সাপ্তাহিক হিসাব', 563436, 'Sabbir', 'Hossain', 'Amena', 'na', '0166745734', '345325232356', 'Mymensing', '2021-12-07', 'Asma', 'Khaled', 'Sokina', 'Hurram', '018435352', '3424353253', 'Tangail', 0, '61aef76e4b825.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kormione_sonchoy_collection`
--

CREATE TABLE `tbl_kormione_sonchoy_collection` (
  `id` int(11) NOT NULL,
  `kormi_name` varchar(200) NOT NULL,
  `date` varchar(200) NOT NULL,
  `grahok_hisab` varchar(200) NOT NULL,
  `reg_no` varchar(200) NOT NULL,
  `grahok_nam` varchar(200) NOT NULL,
  `mobile` varchar(200) NOT NULL,
  `amount_deposit` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_kormione_sonchoy_collection`
--

INSERT INTO `tbl_kormione_sonchoy_collection` (`id`, `kormi_name`, `date`, `grahok_hisab`, `reg_no`, `grahok_nam`, `mobile`, `amount_deposit`) VALUES
(9, 'Sagar', '2021-12-06', 'সাপ্তাহিক হিসাব', '1', 'Sagar', '01830596312', 200),
(10, 'Rabbi', '2021-12-06', 'মাসিক হিসাব', '5', 'Reza', '757858', 200),
(11, 'raz', '2021-12-06', 'দৈনিক হিসাব', '6', 'sarwar', '324125', 400),
(12, 'Salam', '2021-12-06', 'দৈনিক হিসাব', '6', 'sarwar', '324125', 230),
(13, 'Ridoy', '2021-12-07', 'সাপ্তাহিক হিসাব', '2', '214241', '345345235', 300),
(14, 'faysal', '2021-12-07', 'সাপ্তাহিক হিসাব', '1', 'Sagar', '01830596312', 400),
(15, 'Safa', '2021-12-07', 'সাপ্তাহিক হিসাব', '7', 'Salman', '0154557', 300),
(16, 'Rayhan', '2021-12-07', 'সাপ্তাহিক হিসাব', '4', 'ilius', '62436', 200),
(17, 'Rabbi', '2021-12-07', 'মাসিক হিসাব', '5', 'Reza', '757858', 200),
(18, 'Rabbi', '2021-12-07', 'মাসিক হিসাব', '5', 'Reza', '757858', 300);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kormione_sonchoy_registration`
--

CREATE TABLE `tbl_kormione_sonchoy_registration` (
  `id` int(11) NOT NULL,
  `kormionesonchoyreghisab` varchar(200) NOT NULL,
  `kormionesonchoyregno` float NOT NULL,
  `kormionesonchoyreggrahoknam` varchar(200) NOT NULL,
  `kormionesonchoyreggrahokpitarnam` varchar(200) NOT NULL,
  `kormionesonchoyreggrahokmatarnam` varchar(200) NOT NULL,
  `kormionesonchoyreggrahoksamirnam` varchar(200) NOT NULL,
  `kormionesonchoyreggrahokmobile` varchar(200) NOT NULL,
  `kormionesonchoyreggrahoknid` varchar(200) NOT NULL,
  `kormionesonchoyreggrahokaddress` varchar(200) NOT NULL,
  `kormioneregdate` date NOT NULL,
  `kormionesonchoyregnomineernam` varchar(200) NOT NULL,
  `kormionesonchoyregnomineerpitarnam` varchar(200) NOT NULL,
  `kormionesonchoyregnomineermatarnam` varchar(200) NOT NULL,
  `kormionesonchoyregnomineersamirnam` varchar(200) NOT NULL,
  `kormionesonchoyregnomineermobile` varchar(200) NOT NULL,
  `kormionesonchoyregnomineernid` varchar(200) NOT NULL,
  `kormionesonchoyregnomineeraddress` varchar(200) NOT NULL,
  `kormionesonchoyregamount` int(11) NOT NULL,
  `kormionesonchoyregimag` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_kormione_sonchoy_registration`
--

INSERT INTO `tbl_kormione_sonchoy_registration` (`id`, `kormionesonchoyreghisab`, `kormionesonchoyregno`, `kormionesonchoyreggrahoknam`, `kormionesonchoyreggrahokpitarnam`, `kormionesonchoyreggrahokmatarnam`, `kormionesonchoyreggrahoksamirnam`, `kormionesonchoyreggrahokmobile`, `kormionesonchoyreggrahoknid`, `kormionesonchoyreggrahokaddress`, `kormioneregdate`, `kormionesonchoyregnomineernam`, `kormionesonchoyregnomineerpitarnam`, `kormionesonchoyregnomineermatarnam`, `kormionesonchoyregnomineersamirnam`, `kormionesonchoyregnomineermobile`, `kormionesonchoyregnomineernid`, `kormionesonchoyregnomineeraddress`, `kormionesonchoyregamount`, `kormionesonchoyregimag`) VALUES
(1, 'সাপ্তাহিক হিসাব', 34256, 'Sagar', 'Islam', 'Hosneara', 'Sathi', '01830596312', '42684857983746', 'Gajipur', '2021-11-29', 'Razzak', 'Islam', 'Hosneara', 'na', '01756629426', '435734790285435', 'Mawna', 1000, '61a4def202a8c.jpg'),
(2, 'সাপ্তাহিক হিসাব', 214241, 'Rabbi', 'Islam', 'Hosneara', 'Sathi', '345345235', '436456745624', 'Gajipur', '2021-11-30', 'Razzak', 'Islam', 'Hosneara', 'na', '5474256', '5462474527', 'Mawna', 1000, '61a5c1a464125.jpg'),
(3, 'সাপ্তাহিক হিসাব', 3523, 'Razzak', 'Islam', 'Hosneara', 'Sathi', '45252', '534524352', 'Gajipur', '2021-11-30', 'Razzak', 'Islam', 'Hosneara', 'na', '453523', '4523454', 'Mawna', 500, '61a60d2975fa6.jpeg'),
(4, 'সাপ্তাহিক হিসাব', 5375670, 'ilius', 'hossain', 'Hosneara', 'Sathi', '62436', '436436', 'Gajipur', '2021-11-30', 'Razzak', 'Islam', 'Hosneara', 'na', '546546246', '456546256', 'Mawna', 300, '61a6132767ca7.png'),
(5, 'মাসিক হিসাব', 346, 'Reza', 'hossain', 'Hosneara', 'sawa', '757858', '567856245', 'Gajipur', '2021-12-06', 'Razzak', 'Islam', 'Hosneara', 'na', '5425462', '576576537', 'Mawna', 300, '61ad9b9ce815d.jpeg'),
(6, 'দৈনিক হিসাব', 32325, 'sarwar', 'Islam', 'Hosneara', 'Sathi', '324125', '3534623', 'Gajipur', '2021-12-06', 'Razzak', 'Islam', 'Hosneara', 'na', '4527457', '456456', 'Mawna', 0, '61adaec022c2b.png'),
(7, 'সাপ্তাহিক হিসাব', 3325350, 'Salman', 'hossain', 'Hosneara', 'sawa', '0154557', '36344567264', 'Gajipur', '2021-12-07', 'Razzak', 'Islam', 'Hosneara', 'na', '0164353634', '42546546', 'Jamalpur', 0, '61aede3984b02.png');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `userid` int(11) NOT NULL,
  `username` varchar(200) NOT NULL,
  `useremail` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `role` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`userid`, `username`, `useremail`, `password`, `role`) VALUES
(1, 'Admin', 'admin@gmail.com', '1234', 'Admin'),
(2, 'Kormochari One', 'one@gmail.com', '12345', 'Kormocharione'),
(3, 'Kormochari Two', 'two@gmail.com', '123456', 'Kormocharitwo'),
(4, 'Kormochari Three', 'three@gmail.com', '1234567', 'Kormocharithree'),
(5, 'Kormochari Four', 'four@gmail.com', '12345678', 'Kormocharifour');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bangla`
--
ALTER TABLE `bangla`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_kormione_rin_registration`
--
ALTER TABLE `tbl_kormione_rin_registration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_kormione_sonchoy_collection`
--
ALTER TABLE `tbl_kormione_sonchoy_collection`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_kormione_sonchoy_registration`
--
ALTER TABLE `tbl_kormione_sonchoy_registration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bangla`
--
ALTER TABLE `bangla`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_kormione_rin_registration`
--
ALTER TABLE `tbl_kormione_rin_registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_kormione_sonchoy_collection`
--
ALTER TABLE `tbl_kormione_sonchoy_collection`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `tbl_kormione_sonchoy_registration`
--
ALTER TABLE `tbl_kormione_sonchoy_registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
