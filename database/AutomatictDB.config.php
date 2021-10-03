<?php
/*
-- phpMyAdmin SQL Dump

-- Database: `dove_finance`
-- --------------------------------------------------------*/

$link = mysqli_connect('localhost', 'root', '');

$Mydatabase = "CREATE DATABASE IF NOT EXISTS dove_finance";
mysqli_query($link, $Mydatabase);

$useDB = "USE dove_finance";
mysqli_query($link, $useDB);
/*--
-- Table structure for table `aboutus`
--*/

$about = "CREATE TABLE IF NOT EXISTS `aboutus` (
  `abid` int(11) NOT NULL AUTO_INCREMENT,
  `about` text NOT NULL,
  PRIMARY KEY (`abid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ";
mysqli_query($link, $about);
/*/-- --------------------------------------------------------

-- Table structure for table `additional_fees`
--*/

 $add_fees = "CREATE TABLE IF NOT EXISTS `additional_fees` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `get_id` varchar(200) NOT NULL,
  `tid` varchar(200) NOT NULL,
  `fee` varchar(200) NOT NULL,
  `Amount` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=28 ";
mysqli_query($link, $add_fees);

/*-- Dumping data for table `additional_fees`
--*/

$insertAddfees = "INSERT INTO `additional_fees` (`id`, `get_id`, `tid`, `fee`, `Amount`) VALUES
(1, '1', '1023', 'Fine', '2500'),
(2, '2', '1002', 'Late Payment', '41000'),
(3, '3', '1002', 'Accumulated fines(3 Months)', '30000'),
(4, '5', '1002', 'Late Payment', '14000'),
(5, '6', '1002', 'Late Payment', '40000'),
(6, '4', '1000', 'Late Payment', '24000'),
(7, '6', '1002', 'Fine', '10000')";
mysqli_query($link, $insertAddfees);

/*-- --------------------------------------------------------
-- Table structure for table `attachment`
--*/

$attach = "CREATE TABLE IF NOT EXISTS `attachment` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `get_id` varchar(200) NOT NULL,
  `tid` varchar(200) NOT NULL,
  `attached_file` text NOT NULL,
  `date_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ";
mysqli_query($link, $attach);
/*
-- Dumping data for table `attachment`
--*/

$InsertAttach = "INSERT INTO `attachment` (`id`, `get_id`, `tid`, `attached_file`, `date_time`) VALUES
(1, '1', '1023', 'document/4887_File_cryptos documentation.docx', '2021-05-01 12:11:34'),
(2, '2', '1002', 'document/2782_File_Email.docx', '2021-05-10 16:56:55'),
(3, '5', '1002', 'document/2045_File_Marksheet Management System.docx', '2021-05-13 13:45:57')";
mysqli_query($link, $InsertAttach);
/*-- --------------------------------------------------------
-- Table structure for table `backup`
--*/

$backup = "CREATE TABLE IF NOT EXISTS `backup` (
  `id` int(200) NOT NULL AUTO_INCREMENT,
  `tracking_id` varchar(200) NOT NULL,
  `amount` varchar(200) NOT NULL,
  `address` text NOT NULL,
  `date_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ";
mysqli_query($link, $backup);

/*-- Dumping data for table `backup`
--*/
$InsertBack  = "INSERT INTO `backup` (`id`, `tracking_id`, `amount`, `address`, `date_time`) VALUES
(1, '1302', '0.1', 'Gulu-City12x39', '2021-07-07 14:37:40'),
(2, '1302', '0.15', 'Gulu-City12x39', '2021-07-07 16:59:36')";
mysqli_query($link, $InsertBack);
/*-- --------------------------------------------------------
-- Table structure for table `banner`
--*/

$banner = "CREATE TABLE IF NOT EXISTS `banner` (
  `banaid` int(11) NOT NULL AUTO_INCREMENT,
  `bannar` text NOT NULL,
  PRIMARY KEY (`banaid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4" ;
mysqli_query($link, $banner);
/*
-- Dumping data for table `banner`
--*/

$InsertBanner = "INSERT INTO `banner` (`banaid`, `bannar`) VALUES
(1, 'bannar/sld2.jpg')";
mysqli_query($link, $InsertBanner);
/*-- --------------------------------------------------------
-- Table structure for table `battachment`
--*/

$batch = "CREATE TABLE IF NOT EXISTS `battachment` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `get_id` varchar(200) NOT NULL,
  `tid` varchar(200) NOT NULL,
  `attached_file` text NOT NULL,
  `date_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ";
mysqli_query($link, $batch);
/*
-- Dumping data for table `battachment`
--*/

$InsertBatch = "INSERT INTO `battachment` (`id`, `get_id`, `tid`, `attached_file`, `date_time`) VALUES
(1, '1', '1023', 'bdocument/5605_File_Below is the screenshot of the welcome mail sent to me when I registered with namecheap.docx', '2021-05-01 17:30:28'),
(2, '1', '1023', 'bdocument/2630_File_Below is the screenshot of the welcome mail sent to me when I registered with namecheap.docx', '2021-05-01 17:32:52'),
(3, '2', '1023', 'bdocument/6815_File_cryptos documentation.docx', '2021-05-01 17:38:20'),
(4, '3', '1002', 'bdocument/2739_File_INTRODUCTION TO NIGERIA SOCIAL LIFE AND EARLY CIVILIZATION.docx', '2021-05-01 19:35:25'),
(5, '4', '1002', 'bdocument/4525_File_ESTHER.docx', '2021-05-13 13:32:51')";
mysqli_query($link, $InsertBatch);

/*-- --------------------------------------------------------
-- Table structure for table `borrowers`
--*/

$borrowers = "CREATE TABLE IF NOT EXISTS `borrowers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(200) NOT NULL,
  `lname` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `phone` varchar(200) NOT NULL,
  `addrs1` text NOT NULL,
  `addrs2` text NOT NULL,
  `city` varchar(200) NOT NULL,
  `state` varchar(200) NOT NULL,
  `nin` varchar(200) NOT NULL,
  `country` varchar(200) NOT NULL,
  `comment` text NOT NULL,
  `account` varchar(200) NOT NULL,
  `balance` varchar(200) NOT NULL,
  `image` varchar(200) NOT NULL,
  `date_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ";
mysqli_query($link, $borrowers);
/*--
-- Dumping data for table `borrowers`
--*/

$InsertBorrower = "INSERT INTO `borrowers` (`id`, `fname`, `lname`, `email`, `phone`, `addrs1`, `addrs2`, `city`, `state`, `nin`, `country`, `comment`, `account`, `balance`, `image`, `date_time`, `status`) VALUES
(1, 'Ongee', 'Patrick', 'patrick@gmail.com', '0703527716', 'KORO', 'Koro-Abili', 'Gulu', 'North', '110001', 'Uganda', 'Application for loan', '0134405601', '22000', 'img/stud3.jpg', '2021-07-06 18:26:11', 'Pending')";
mysqli_query($link, $InsertBorrower);
/*-- --------------------------------------------------------
-- Table structure for table `collateral`
--*/

$colla = "CREATE TABLE IF NOT EXISTS `collateral` (
  `id` int(20) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `idm` varchar(200) NOT NULL,
  `tid` varchar(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `type_of_collateral` varchar(200) NOT NULL,
  `model` varchar(200) NOT NULL,
  `make` varchar(200) NOT NULL,
  `serial_number` varchar(200) NOT NULL,
  `estimated_price` varchar(200) NOT NULL,
  `proof_of_ownership` text NOT NULL,
  `cimage` text NOT NULL,
  `observation` text NOT NULL,
  `status` text NOT NULL,
  `releasedate` text NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4";
mysqli_query($link, $colla);
/*--
-- Dumping data for table `collateral`
--*/
$insertColla = "INSERT INTO `collateral` (`id`, `idm`, `tid`, `name`, `type_of_collateral`, `model`, `make`, `serial_number`, `estimated_price`, `proof_of_ownership`, `cimage`, `observation`, `status`, `releasedate`) VALUES
(1, '1', '1023', 'Plot of land', 'Personal Land', 'Family origin', '5 Hectares', 'Plot-13 A1004G', '10000000', 'Patrict Ongee', 'img/bland.jpg', 'Verified', 'Contained', '2021-10-20'),
(2, '2', '1002', 'Bull/Cattle', 'Farm Cattle', 'personal', 'First Loan', 'CW0130001', '900000', 'Grace Abalo', 'img/bull.jpg', 'Good old bull', ' ', '0000-00-00'),
(3, '5', '1002', 'Plot of Land', 'Land', 'Land', 'Land', 'Plot-10 OLal104G', '2000000', 'Ajalo Florence', 'cimage/fair.png', 'Good for the application of the loan', 'Pending', '2021-11-17')";
mysqli_query($link, $insertColla);
/*-- --------------------------------------------------------
-- Table structure for table `countries`
--*/
$country = "CREATE TABLE IF NOT EXISTS `countries` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL DEFAULT '',
  `alpha_2` varchar(200) NOT NULL DEFAULT '',
  `alpha_3` varchar(200) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=250 ";
mysqli_query($link, $country);
/*--
-- Dumping data for table `countries`
--*/

$InsertCountry = "INSERT INTO `countries` (`id`, `name`, `alpha_2`, `alpha_3`) VALUES
(1, 'Afghanistan', 'fl', 'afg'),
(2, 'Algeria', 'dz', 'dza'),
(3, 'Angola', 'ao', 'ago'),
(4, 'Cameroon', 'cm', 'cmr'),
(4, 'Malawi', 'mw', 'mwi'),
(5, 'Nigeria', 'ng', 'nga'),
(6, 'Togo', 'tg', 'tgo'),
(7, 'Uganda', 'ug', 'uga'),
(8, 'Kenya', 'ky', 'ken'),
(9, 'United Arab Emirates', 'ae', 'are'),
(10, 'United Kingdom', 'gb', 'gbr'),
(11, 'United States', 'us', 'usa'),
(12, 'United States Minor Outlying Islands', 'um', 'umi'),
(13, 'Uruguay', 'uy', 'ury')
";
mysqli_query($link, $InsertCountry);
/*-- --------------------------------------------------------
-- Table structure for table `emp_permission`
-- */
$permission = "CREATE TABLE IF NOT EXISTS `emp_permission` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `tid` varchar(200) NOT NULL,
  `module_name` varchar(350) NOT NULL,
  `pcreate` varchar(20) NOT NULL,
  `pread` varchar(20) NOT NULL,
  `pupdate` varchar(20) NOT NULL,
  `pdelete` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=56";
mysqli_query($link, $permission);
/*--
-- Dumping data for table `emp_permission`
--*/

$InsertPermission = "INSERT INTO `emp_permission` (`id`, `tid`, `module_name`, `pcreate`, `pread`, `pupdate`, `pdelete`) VALUES
(1, '1000', 'General Dashboard', '1', '1', '1', '1'),
(2, '1302', 'Email Panel', '0', '0', '0', '0'),
(3, '1302', 'Borrower Details', '1', '0', '0', '0'),
(4, '1302', 'Member Account', '1', '1', '0', '0'),
(5, '1302', 'Loan Details', '0', '0', '0', '0'),
(6, '1302', 'Internal Message', '1', '1', '0', '0'),
(7, '1302', 'Missed Payment', '0', '0', '0', '0'),
(8, '1302', 'Payment', '1', '0', '0', '0'),
(9, '1302', 'Member Details', '0', '0', '0', '0'),
(10, '1302', 'Module Permission', '0', '0', '0', '0'),
(11, '1302', 'Savings Account', '1', '1', '0', '0'),
(12, '1302', 'General Settings', '0', '0', '0', '0'),
(13, '1002', 'Email Panel', '1', '1', '1', '1'),
(14, '1002', 'Borrower Details', '1', '1', '1', '1'),
(15, '1002', 'Member Account', '1', '1', '1', '1'),
(16, '1002', 'Loan Details', '1', '1', '1', '1'),
(17, '1002', 'Internal Message', '1', '1', '0', '0'),
(18, '1002', 'Missed Payment', '1', '1', '1', '1'),
(19, '1002', 'Employee Details', '1', '1', '1', '1'),
(20, '1002', 'Payment', '1', '1', '1', '1'),
(21, '1002', 'Member Details', '1', '1', '1', '1'),
(22, '1002', 'Module Permission', '1', '1', '1', '1'),
(23, '1002', 'Savings Account', '1', '1', '1', '1'),
(24, '1002', 'General Dashboard', '1', '1', '1', '1'),
(25, '1002', 'General Settings', '1', '1', '1', '0')";
mysqli_query($link, $InsertPermission);
/*-- --------------------------------------------------------
-- Table structure for table `emp_role`
--*/

$role = "CREATE TABLE IF NOT EXISTS `emp_role` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `role` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ";
mysqli_query($link, $role);
/*-- --------------------------------------------------------
-- Table structure for table `etemplates`
--*/
$template = "CREATE TABLE IF NOT EXISTS `etemplates` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sender` varchar(200) NOT NULL,
  `receiver_email` varchar(350) NOT NULL,
  `subject` varchar(350) NOT NULL,
  `msg` text NOT NULL,
  `time_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1" ;
mysqli_query($link, $template);
/*-- --------------------------------------------------------
-- Table structure for table `faqs`
--*/

$faqs = "CREATE TABLE IF NOT EXISTS `faqs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `topic` text NOT NULL,
  `content` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2" ;
mysqli_query($link, $faqs);
/*--
-- Dumping data for table `faqs`
--*/
$insertfaqs = "INSERT INTO `faqs` (`id`, `topic`, `content`) VALUES
(1, 'Please type the subject here', '<p>Please Update Faqs Here</p>\r\n')";
mysqli_query($link, $insertfaqs);

/*-- --------------------------------------------------------
-- Table structure for table `fin_info`
--*/

$fin = "CREATE TABLE IF NOT EXISTS `fin_info` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `get_id` varchar(200) NOT NULL,
  `tid` varchar(200) NOT NULL,
  `occupation` text NOT NULL,
  `mincome` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10" ;
mysqli_query($link, $fin);
/*--
-- Dumping data for table `fin_info`
--*/

$insertinfo = "INSERT INTO `fin_info` (`id`, `get_id`, `tid`, `occupation`, `mincome`) VALUES
(3, '1', '1023', '', ''),
(5, '2', '1023', 'Teacher', '4000000'),
(6, '3', '1002', 'Banker', '50000000'),
(7, '5', '1002', 'Teacher', '8700000'),
(8, '5', '1002', 'Computer Operator', '15000000'),
(9, '5', '1002', 'Trader', '6000000')";
mysqli_query($link, $insertinfo);
/*-- --------------------------------------------------------
-- Table structure for table `footer`
--*/

$foot = "CREATE TABLE IF NOT EXISTS `footer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(200) NOT NULL,
  `pho` varchar(200) NOT NULL,
  `face` varchar(200) NOT NULL,
  `webs` varchar(200) NOT NULL,
  `conh` varchar(200) NOT NULL,
  `twi` varchar(200) NOT NULL,
  `gplus` varchar(200) NOT NULL,
  `ins` varchar(200) NOT NULL,
  `yous` varchar(200) NOT NULL,
  `about` text NOT NULL,
  `apply` text NOT NULL,
  `mission` text NOT NULL,
  `objective` text NOT NULL,
  `map` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3" ;
mysqli_query($link, $foot);
/*--
-- Dumping data for table `footer`
--*/
$insertFoot = "INSERT INTO `footer` (`id`, `email`, `pho`, `face`, `webs`, `conh`, `twi`, `gplus`, `ins`, `yous`, `about`, `apply`, `mission`, `objective`, `map`) VALUES
(2, 'dovefinance@gmail.com', '+256393009970', 'www.facebook.com/dovefinance@gmail.com', 'www.dovefinace.com', 'Gulu UG', 'www.twitter.com/dovefinance@gmail.com', 'www.googleplus.com/odovefinance@gmail.com', 'www.in.com/dovefinance@gmail.com', 'www.youtube.com/dovefinance@gmail.com', 'About the system. 
Dove Finance Institution is one of the microfinance institutions with the biggest challenge in running its services to the general community of Gulu. This is because members could
 not come physically to the office to register their collateral securities and neither it was difficult for the associate loan guarantor to go and follow up with the Loan of
  all members who acquired loans.
', 'Who may apply here. Thabnks', 'Mission here. Thanks', 'System OBJECTIVE HERE. Thanks', '')";
mysqli_query($link, $insertFoot);
/*-- --------------------------------------------------------
-- Table structure for table `hiw`
--*/
$hiw = "CREATE TABLE IF NOT EXISTS `hiw` (
  `hid` int(11) NOT NULL AUTO_INCREMENT,
  `hiw` text NOT NULL,
  PRIMARY KEY (`hid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ";
mysqli_query($link, $hiw);
/*--
-- Dumping data for table `hiw`
--*/
$insertHiw = "INSERT INTO `hiw` (`hid`, `hiw`) VALUES
(1, '<p>We Provide Loans For Individual, Coperate and Many</p>\r\n')";
mysqli_query($link, $insertHiw);
/*-- --------------------------------------------------------
-- Table structure for table `loan_info`
--*/

$loanInfo = "CREATE TABLE IF NOT EXISTS `loan_info` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `borrower` varchar(200) NOT NULL,
  `baccount` varchar(200) NOT NULL,
  `desc` text NOT NULL,
  `amount` varchar(200) NOT NULL,
  `duration` varchar(200) NOT NULL,
  `date_release` varchar(200) NOT NULL,
  `agent` varchar(200) NOT NULL,
  `g_name` varchar(200) NOT NULL,
  `g_phone` varchar(200) NOT NULL,
  `g_address` text NOT NULL,
  `rela` varchar(200) NOT NULL,
  `g_image` varchar(200) NOT NULL,
  `status` varchar(200) NOT NULL,
  `remarks` text NOT NULL,
  `pay_date` varchar(200) NOT NULL,
  `amount_topay` varchar(200) NOT NULL,
  `teller` varchar(200) NOT NULL,
  `remark` text NOT NULL,
  `upstatus` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ";
mysqli_query($link, $loanInfo);
/*--
-- Dumping data for table `loan_info`
--*/

$infoLoanInfo = "INSERT INTO `loan_info` (`id`, `borrower`, `baccount`, `desc`, `amount`, `duration`, `date_release`, `agent`, `g_name`, `g_phone`, `g_address`, `rela`, `g_image`, `status`, `remarks`, `pay_date`, `amount_topay`, `teller`, `remark`, `upstatus`) VALUES
(1, '1', '0134405601', 'First Loan', '150000', '3 Months', '05/21/2021', 'Admin', 'Mr Obita', '09034543234', '4, ade', 'Sister', 'img/', 'Disapproved', 'good', '08/30/2021', '185000', 'Admin', 'First Loan', 'Pending')";
mysqli_query($link, $infoLoanInfo);
/*-- --------------------------------------------------------
-- Table structure for table `message`
--*/
$msge = "CREATE TABLE IF NOT EXISTS `message` (
  `id` int(200) NOT NULL AUTO_INCREMENT,
  `sender_id` varchar(200) NOT NULL,
  `sender_name` varchar(200) NOT NULL,
  `msg_to` varchar(200) NOT NULL,
  `subject` varchar(300) NOT NULL,
  `message` text NOT NULL,
  `date_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7" ;
mysqli_query($link, $msge);
/*--
-- Dumping data for table `message`
--*/
$Insertmsge = "INSERT INTO `message` (`id`, `sender_id`, `sender_name`, `msg_to`, `subject`, `message`, `date_time`) VALUES
(4, '1302', 'Abalo Florence', '1002', 'Hello', '<p>Good to see you</p>\r\n', '2021-05-01 18:46:57'),
(5, '1002', 'Admin', '1302', 'RE: Hello', '<p>Thanks<br />\r\n-------------------------</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Good to see you</p>\r\n\r\n<p>&nbsp;</p>\r\n', '2021-05-01 18:48:27'),
(6, '1302', 'Abalo Florence', '1002', 'RE: RE: Hello', '<p>Thanks&nbsp; you<br />\r\n-------------------------</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Thanks<br />\r\n-------------------------</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Good to see you</p>\r\n\r\n<p>&nbsp;</p>\r\n', '2021-05-01 18:49:18')";
mysqli_query($link, $Insertmsge);
/*-- --------------------------------------------------------
-- Table structure for table `mywallet`
--*/
$wallet = "CREATE TABLE IF NOT EXISTS `mywallet` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tid` varchar(200) NOT NULL,
  `t_to` varchar(200) NOT NULL,
  `Amount` varchar(200) NOT NULL,
  `Desc` varchar(200) NOT NULL,
  `wtype` varchar(200) NOT NULL,
  `tdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=69" ;
mysqli_query($link, $wallet);
/*--
-- Dumping data for table `mywallet`
---*/
$Insertwallet = "INSERT INTO `mywallet` (`id`, `tid`, `t_to`, `Amount`, `Desc`, `wtype`, `tdate`) VALUES
(1, '1023', 'NIL', '500000', 'Given Loan', 'credit', '2021-07-03 23:03:23'),
(2, '0911', 'NIL', '250000', 'Transfer to aa Partrick', 'transfer', '2021-07-03 23:03:19'),
(3, '0911', 'NIL', '300000', 'Reverse 300k back', 'transfer', '2021-07-03 23:03:14'),
(4, '0911', 'NIL', '150000', 'Additional payment', 'debit', '2021-07-03 23:03:08'),
(5, '0911', 'NIL', '2600000', 'Deposits by Florence', 'debit', '2021-07-03 23:03:02'),
(6, '1002', 'NIL', '100000', 'Loan Payment', 'credit', '2021-07-03 23:02:51'),
(7, '1002', '1302', '20000', 'Transfer to Florence', 'transfer', '2021-07-03 22:58:16'),
(8, '1002', '1302', '20000', 'Transfer to Florence', 'transfer', '2021-07-05 15:39:58')";
mysqli_query($link, $Insertwallet);
/*-- --------------------------------------------------------
-- Table structure for table `payments`
--*/
$payments = "CREATE TABLE IF NOT EXISTS `payments` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `tid` varchar(200) NOT NULL,
  `account` varchar(200) NOT NULL,
  `account_no` varchar(200) NOT NULL,
  `customer` varchar(200) NOT NULL,
  `loan` varchar(200) NOT NULL,
  `pay_date` varchar(200) NOT NULL,
  `amount_to_pay` varchar(200) NOT NULL,
  `remarks` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6";
mysqli_query($link, $payments);
/*--
-- Dumping data for table `payments`
--*/
$InsertPayment = "INSERT INTO `payments` (`id`, `tid`, `account`, `account_no`, `customer`, `loan`, `pay_date`, `amount_to_pay`, `remarks`) VALUES
(5, '1002', '199382731', '5', '5', '1000000', '05/30/2021', '3000000', 'Payment for Abalo Florence')";
mysqli_query($link, $InsertPayment);
/*-- --------------------------------------------------------
-- Table structure for table `payment_schedule`
--*/
$schedule = "CREATE TABLE IF NOT EXISTS `payment_schedule` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `idm` varchar(200) NOT NULL,
  `tid` varchar(200) NOT NULL,
  `term` varchar(200) NOT NULL,
  `day` varchar(200) NOT NULL,
  `schedule` varchar(200) NOT NULL,
  `interest` varchar(200) NOT NULL,
  `penalty` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11" ;
mysqli_query($link, $schedule);
/*--
-- Dumping data for table `payment_schedule`
--*/
$insertpay = "INSERT INTO `payment_schedule` (`id`, `idm`, `tid`, `term`, `day`, `schedule`, `interest`, `penalty`) VALUES
(1, '11', '1002', '02938', 'Week', 'Daily', '2', '5'),
(2, '5', '1023', '1234', 'Month', 'Weekly', '1', '3')";
mysqli_query($link, $insertpay);
/*-- --------------------------------------------------------
-- Table structure for table `pay_schedule`
--*/
$paySchedule = "CREATE TABLE IF NOT EXISTS `pay_schedule` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `get_id` varchar(200) NOT NULL,
  `tid` varchar(200) NOT NULL,
  `schedule` varchar(200) NOT NULL,
  `balance` varchar(200) NOT NULL,
  `interest` varchar(200) NOT NULL,
  `payment` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12" ;
mysqli_query($link, $paySchedule);
/*--
-- Dumping data for table `pay_schedule`
--*/
$insertpaySched = "INSERT INTO `pay_schedule` (`id`, `get_id`, `tid`, `schedule`, `balance`, `interest`, `payment`) VALUES
(1, '6', '1002', '05/30/2021', '20000', '2', '30000'),
(2, '4', '1023', '07/29/2021', '200000', '4', '350000')";
mysqli_query($link, $insertpaySched);
/*-- --------------------------------------------------------
-- Table structure for table `sms`
--*/
$sms = "CREATE TABLE IF NOT EXISTS `sms` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sms_gateway` text NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `api` text NOT NULL,
  `status` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2" ;
mysqli_query($link, $sms);
/*--
-- Dumping data for table `sms`
--*/
$insertSms = "INSERT INTO `sms` (`id`, `sms_gateway`, `username`, `password`, `api`, `status`) VALUES
(1, 'SMSTEAMS', 'optimum', 'optimum', 'http://smsteams.com/components/com_spc/smsapi.php?', 'NotActivated')";
mysqli_query($link, $insertSms);
/*-- --------------------------------------------------------
-- Table structure for table `systemset`
--*/
$system = "CREATE TABLE IF NOT EXISTS `systemset` (
  `sysid` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `footer` text NOT NULL,
  `abb` varchar(200) NOT NULL,
  `fax` text NOT NULL,
  `currency` text NOT NULL,
  `website` text NOT NULL,
  `mobile` text NOT NULL,
  `image` varchar(200) NOT NULL,
  `address` text NOT NULL,
  `email` text NOT NULL,
  `map` text NOT NULL,
  `stamp` varchar(350) NOT NULL,
  `timezone` text NOT NULL,
  `sms_charges` varchar(200) NOT NULL,
  PRIMARY KEY (`sysid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ";
mysqli_query($link, $system);
/*--
-- Dumping data for table `systemset`
--*/
$insertSystem = "INSERT INTO `systemset` (`sysid`, `title`, `name`, `footer`, `abb`, `fax`, `currency`, `website`, `mobile`, `image`, `address`, `email`, `map`, `stamp`, `timezone`, `sms_charges`) VALUES
(1, 'DFL | Loan Management System for Micro Finance Bank', 'Dove Finance Ltd Loan Management System', 'All Rights Reserved. 2021 (c)', 'DFL Loans', '4217', 'UGX', 
'https://www.dovefinaceltd.com', '+256398100845', 'logo.png', 'Uganda Currency', 'godfreyobita029@gmail.com', 'IATA code:ULU', 'stamp.png', '-10', '40')";
mysqli_query($link, $insertSystem);
/*-- --------------------------------------------------------
-- Table structure for table `transaction`
--*/
$transaction = "CREATE TABLE IF NOT EXISTS `transaction` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `TID` varchar(200) NOT NULL,
  `t_type` varchar(200) NOT NULL COMMENT 'Deposit OR Withdraw',
  `acctno` varchar(200) NOT NULL,
  `fn` varchar(200) NOT NULL,
  `ln` varchar(200) NOT NULL,
  `email` varchar(300) NOT NULL,
  `phone` varchar(200) NOT NULL,
  `amount` varchar(200) NOT NULL,
  `date_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20" ;
mysqli_query($link, $transaction);
/*--
-- Dumping data for table `transaction`
--*/
$insertTrans = "INSERT INTO `transaction` (`id`, `TID`, `t_type`, `acctno`, `fn`, `ln`, `email`, `phone`, `amount`, `date_time`) VALUES
(1, '35', 'Deposit', '0034445657', 'Ongee', 'Patrick', 'patrick@gmail.com', '08033527716', '20000', '2021-05-23 14:57:20'),
(2, '49', 'Deposit', '0034445650', 'Abalo ', 'Florence', 'segtism@gmail.com', '+1564783934', '15000', '2021-05-23 14:57:26'),
(3, '73', 'Deposit', '0034445657', 'Ongee', 'Patrick', 'patrick@gmail.com', '08033527716', '250000', '2021-05-23 14:57:31'),
(4, '94', 'Withdraw', '0034445657', 'Ongee', 'Patrick', 'patrick@gmail.com', '08033527716', '22000', '2021-05-23 15:46:34'),
(5, '50', 'Withdraw', '0034445650', 'Abalo', 'Florence', 'segtism@gmail.com', '+1564783934', '28000', '2021-05-23 16:02:16'),
(6, '38', 'Withdraw', '0034445657', 'Ongee', 'Patrick', 'patrick@gmail.com', '08033527716', '200000', '2021-05-23 16:31:34'),
(7, '45', 'Deposit', '0034445657', 'Ongee', 'Patrick', 'patrick@gmail.com', '08033527716', '55000', '2021-06-06 17:48:19'),
(8, '28', 'Withdraw', '0034445657', 'Ongee', 'Patrick', 'patrick@gmail.com', '08033527716', '50000', '2021-08-06 18:26:11')";
mysqli_query($link, $insertTrans);
/*-- --------------------------------------------------------
-- Table structure for table `twallet`
--*/
$twall = "CREATE TABLE IF NOT EXISTS `twallet` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `tid` varchar(200) NOT NULL,
  `Total` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13" ;
mysqli_query($link, $twall);
/*--
-- Dumping data for table `twallet`
--*/
$insertTwall = "INSERT INTO `twallet` (`id`, `tid`, `Total`) VALUES
(1, '1002', '3000000'),
(2, '1023', '6000000'),
(3, '1000', '5000000'),
(4, '1302', '10000000')";
mysqli_query($link, $insertTwall);
/*-- --------------------------------------------------------
-- Table structure for table `user`
--*/
$user = "CREATE TABLE IF NOT EXISTS `user` (
  `userid` int(11) NOT NULL AUTO_INCREMENT,
  `account_no` varchar(12) NOT NULL,
  `nin` varchar(15) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,

  `fname` varchar(200) NOT NULL,
  `lname` varchar(200) NOT NULL,
  `age` varchar(3) NOT NULL,
  `dob` date,
  `gender` varchar(6) NOT NULL,
  `marital` varchar(20) NOT NULL,
  `phone` varchar(200) NOT NULL,
  `addr1` text NOT NULL,
  `addr2` text NOT NULL,
  `city` varchar(200) NOT NULL,
  `state` varchar(200) NOT NULL,
  `country` varchar(200) NOT NULL,
  `comment` varchar(200) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `id` varchar(200) NOT NULL,
  `image` text NOT NULL,
  `role` varchar(200) NOT NULL,
  `reg_date` date, 
  PRIMARY KEY (`userid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=100 ";
mysqli_query($link, $user);
/*--
-- Dumping data for table `user`
--*/
$insertUser = "INSERT INTO `user` (`userid`,  `account_no`, `name`, `email`, `fname`,`lname`, `age`,`dob`,`gender`, `marital`, `phone`, `addr1`, `addr2`, `city`, `state`, `nin`, `country`, `comment`, `username`, `password`, `id`, `image`, `role`) VALUES
(1, '0130010003', 'Abalo Florence', 'florence@gmail.com', '', ' ',' ', '0000-00-00 00:00:00', '', '', '+256770757769', 'Gulu Main market', 'Holy-Rojary Parish', 'Gulu City', 'Nothern Uganda', 'CHK1128GJ790', 'UG', '  Good Â  Â  Â Â Â  Â Â Â', 'Abalo', 'YXQ=', '1302', 'img/bull.jpg', ''),
(2, '0134405601', 'Ongee Patrick', 'pato@gmail.com', '', ' ',' ', '0000-00-00 00:00:00', '', '', '+256770757789', 'Gulu Main market', 'Centinary', 'Gulu City', 'Nothern Uganda', 'DXY447Q99R97J', 'UG', '  Good Â  Â  Â Â Â  Â Â Â', 'Ongee P', 'YXQ=', '1023', 'img/stud3.jpg', ''),
(4, '0130000000', 'Admin', 'admin@admin.com', '', ' ',' ', '0000-00-00 00:00:00', '', '', '0398100845', 'Dove Finance', 'Gulu Main', 'Gulu city', 'North', 'CM44K49802KL12', 'UG', 'The General Administrator', 'admin', 'YWRtaW4=', '1002', 'img/owner.png', 'admin'),
(5, '0130000001', 'Obita', 'obita@gmail.com', '', ' ',' ', '0000-00-00 00:00:00', '', '', '+256772154012', 'Dove Finance', 'Kitgum Main', 'Kitgum Municipality', 'North', 'CMHK49892902KL', 'UG', 'Admin-Kitgum', 'Obita', 'YWRtaW4=', '1000', 'img/stud4.jpg', 'admin')";
mysqli_query($link, $insertUser);

#DELIMITER $$
/*--
-- Events
--*/
$limiter = "CREATE DEFINER=`root`@`localhost` EVENT `update_profit` ON SCHEDULE EVERY 1 DAY STARTS '2021-07-07 00:00:00' ON COMPLETION NOT PRESERVE ENABLE DO UPDATE ph_list SET Percentage = '727.2' WHERE tracking_id = '1302'$$
DELIMITER ";
mysqli_query($link, $limiter);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */
