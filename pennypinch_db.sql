-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 09, 2018 at 05:00 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pennypinch_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `createloantab`
--

CREATE TABLE `createloantab` (
  `cr_id` bigint(20) NOT NULL,
  `clientapp_id` bigint(20) NOT NULL,
  `crloan_name` varchar(10000) NOT NULL,
  `interest` int(10) NOT NULL,
  `duration` int(10) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `date_created` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `createloantab`
--

INSERT INTO `createloantab` (`cr_id`, `clientapp_id`, `crloan_name`, `interest`, `duration`, `status`, `date_created`) VALUES
(1, 1, 'Longterm', 5, 10, 1, '2018-08-09'),
(2, 1, 'Shortterm', 7, 5, 1, '2018-08-09'),
(3, 1, 'commodity', 10, 12, 1, '2018-08-09');

-- --------------------------------------------------------

--
-- Table structure for table `loantab`
--

CREATE TABLE `loantab` (
  `loan_id` bigint(20) NOT NULL,
  `clientapp_id` bigint(20) NOT NULL,
  `mem_id` bigint(20) NOT NULL,
  `mem_coopno` varchar(500) NOT NULL,
  `mem_ippis` varchar(10) NOT NULL,
  `date` varchar(10) NOT NULL,
  `loan_month` varchar(20) NOT NULL,
  `loan_type` varchar(30) NOT NULL,
  `amount` decimal(15,3) NOT NULL,
  `interest` int(10) NOT NULL,
  `purpose` varchar(5000) NOT NULL,
  `surety1_name` varchar(500) NOT NULL,
  `surety1_address` varchar(1000) NOT NULL,
  `surety1_phone` varchar(50) NOT NULL,
  `surety1_salary` decimal(15,3) NOT NULL,
  `surety1_dept` varchar(500) NOT NULL,
  `surety2_name` varchar(500) NOT NULL,
  `surety2_address` varchar(1000) NOT NULL,
  `surety2_phone` varchar(50) NOT NULL,
  `surety2_salary` decimal(15,3) NOT NULL,
  `surety2_dept` varchar(500) NOT NULL,
  `loanstatus` tinyint(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `loantab`
--

INSERT INTO `loantab` (`loan_id`, `clientapp_id`, `mem_id`, `mem_coopno`, `mem_ippis`, `date`, `loan_month`, `loan_type`, `amount`, `interest`, `purpose`, `surety1_name`, `surety1_address`, `surety1_phone`, `surety1_salary`, `surety1_dept`, `surety2_name`, `surety2_address`, `surety2_phone`, `surety2_salary`, `surety2_dept`, `loanstatus`) VALUES
(35, 1, 1, '0001', '090380380', '09-06-2018', 'June', 'Shortterm', '200000.000', 7, 'vdbiudbudbviabd', 'hoiboidnn', 'oidsncosono', '8383838', '20000.000', '20coisnoicnsoi', 'dndnscn', 'oisjdoicd0h', '9004044', '20000.000', '0osdnodnoin', 0),
(34, 1, 1, '0001', '090380380', '09-07-2018', 'July', 'Longterm', '20.000', 5, 'oindcxoinin', 'oishsxh', 'idsiocnnn', '74747477', '7688.000', 'ncdion', 'nscoucbobn', 'ioibbobbn', '7387348743', '77333.000', '83sdkcbib', 1);

-- --------------------------------------------------------

--
-- Table structure for table `memstab`
--

CREATE TABLE `memstab` (
  `mem_id` bigint(20) NOT NULL,
  `clientapp_id` bigint(20) NOT NULL,
  `mem_surname` varchar(500) NOT NULL,
  `mem_fname` varchar(500) NOT NULL,
  `mem_oname` varchar(500) NOT NULL,
  `mem_sex` varchar(20) NOT NULL,
  `mem_title` varchar(20) NOT NULL,
  `mem_phone` varchar(50) NOT NULL,
  `mem_dob` varchar(20) NOT NULL,
  `mem_email` varchar(1000) NOT NULL,
  `mem_dept` varchar(1000) NOT NULL,
  `mem_coopno` varchar(100) NOT NULL,
  `mem_ippis` varchar(100) NOT NULL,
  `mem_bank` varchar(500) NOT NULL,
  `mem_acctno` varchar(50) NOT NULL,
  `mem_pass` varchar(10000) NOT NULL,
  `mem_nation` varchar(500) NOT NULL,
  `mem_state` varchar(500) NOT NULL,
  `mem_address` varchar(5000) NOT NULL,
  `nok_name` varchar(500) NOT NULL,
  `nok_rel` varchar(500) NOT NULL,
  `nok_email` varchar(5000) NOT NULL,
  `nok_phone` varchar(50) NOT NULL,
  `nok_address` varchar(5000) NOT NULL,
  `path` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `memstab`
--

INSERT INTO `memstab` (`mem_id`, `clientapp_id`, `mem_surname`, `mem_fname`, `mem_oname`, `mem_sex`, `mem_title`, `mem_phone`, `mem_dob`, `mem_email`, `mem_dept`, `mem_coopno`, `mem_ippis`, `mem_bank`, `mem_acctno`, `mem_pass`, `mem_nation`, `mem_state`, `mem_address`, `nok_name`, `nok_rel`, `nok_email`, `nok_phone`, `nok_address`, `path`) VALUES
(1, 1, 'Adeniran', 'Adeyinka', 'Nathaniel', 'Male', 'Mr', '08168905925', '2018-08-07', 'nathanieladeniran@gmail.com', 'Agric', '0001', '090380380', 'GTBank', '0049408859', '$2y$10$Czk8E4op8yG51V6f8V5DEOsYCv2TMNbWqQCaCkrRUjdwQINOA8Z2i', 'Nigeria', 'Oyo', 'Precious lodge', 'Adeniran Bolu', 'Brother', 'bolu@yahoo.com', '08054291827', 'Precious Lodge', 'memimage/myself1.jpg'),
(2, 1, 'Adeniran', 'Babajide', '', 'Male', 'Mr', '07088683944', '2018-08-02', 'jidor@yahoo.com', 'Works', '0002', '0229292929', 'Access Bank', '0707979779', '$2y$10$R0aVSmBZlP9KsO3jr7N6xuC7DrJC7r2/7p7eEC4CMyqELRfo/XDki', 'Nigeria', 'Ogun', 'kjsdkjfjkfkjfjk', 'kjcvknvdno onoinoin', 'knnn', 'n@m.com', '030303', 'dssdvdsvfdfdfd', 'memimage/562563_426803460672505_554200673_n.jpg'),
(3, 1, 'Kcn xknno', 'nioboi', 'iiob', 'Male', 'Mr', '88943838', '2018-08-07', 'n@u.com', 'djdjscjjk', '0003', '83838383', 'Diamond Bank', '993399393', '$2y$10$p8fVCk26buIxGnL62V0StOW9mTVtHYYarPTr2xypueCv4.TqYlDR6', 'Namibia', 'Caprivi', 'ldsoisoichpoihcp', 'ischioho ninobn', 'ksacoicin', 'oioinoi@m.com', '9993399', 'oinion', 'memimage/IMG-20161203-WA0001.jpg'),
(4, 1, 'Adedotun', 'Olu', 'Michael', 'Female', 'Mr', '0809487566', '20/12/1990', 'nathanieladeniran@live.com', 'health', '100', '08080', 'Eco Bank', '0087675643', '$2y$10$B0ahrOqNIpifZHXp6Vpva.GjFYw.gx/WUmHCWQpCzgypAxev0ciAe', '', '', 'kjsdhodshoishop', 'Adeniran Jide', 'bro', '', '08083303108', 'ldfjodfpupo', 'memimage/a00458be2f325153c4dc104f8a17aa12faf30544.jpg'),
(5, 1, 'Akapa', 'Alero', 'Adetutu', 'Female', 'Miss', '08126094642', '2017/02/13', 'alero@yahoo.com', 'Communication', '200', '081881', 'IBTC Bank', '0005154356', '$2y$10$nfgXEHQQYJjND9dyvtIgf.q5vZN3xtvkscEVLdVF.QVoQYeaUqvly', '', '', 'Eleyele Ibadan', 'Adeniran Yinka', 'Bro', '', '08054291827', 'apena', 'memimage/IMG-20150821-WA0001.jpg'),
(6, 1, 'Akinwumi', 'Samuel', 'kjfhui', 'male', 'mr', '648686', '2017/02/14', 's@m.com', ',nfgkjgfio', '657', '67767', 'Access Bank', '57877885', '$2y$10$xUokExmZ/VAXU0OtN5GXx..sa01p8ExZUxtmUMeLHD.tLpk0bQQ.K', '', '', 'jh vhjvhvh', 'lkfvklnhl', 'jhdfbudfui', '', '686877', 'hjvkvvbu', 'memimage/IMG-20150414-WA0001.jpg'),
(7, 1, 'Adewale', 'Tosin', 'Samuel', 'male', 'mr', '779797', '2017/02/13', 'tosin@yahoo.com', 'udsgdsigi', '5555', '66666', 'Access Bank', '676686', '$2y$10$65aUfVGTdpwWSMbX7h4EGOhdMUK4fQl9e2eBhsgN5I9ouKMgVT5DW', '', '', 'lknclhcilhcvhcvicv', ',kcnxlhcxi', 'jhdsb', '', '\\8777', 'ldhflfdlhdfih', 'memimage/images-4.jpeg'),
(8, 1, 'Adekola', 'Muyiwa', 'longman', 'male', 'mr', '67668686', '2017/02/13', 'l@m.com', 'gguyguf', '4546', '67775', 'Keystone Bank', '557755', '$2y$10$ogrUQqUD/dWfPgcYJ2MW8.h4dOkvVrcVTquB7PLIcGzSZA738HoSa', '', '', 'knlknkhlk;h;o', 'jhgckugku', 'kjbkbjk', '', '556565', 'jbvkgjjg', 'memimage/cotton6.jpg'),
(9, 1, 'Adeoye', 'Pamilerin', 'Mary', 'female', 'miss', '78686868', '2017/02/14', 'pam@yahoo.com', 'jsjbjkjjkb', '500', '6453', 'Diamond Bank', '8598598488', '$2y$10$9n/0QfC3qQdb1zFi38rc..NGHzgsC7nGQM1vtC7viMlupBGyguEfy', '', '', 'kjbkbkjb', 'kjdbdisug', 'giuiug', '', '99989879', 'jvkjvkjvkv', 'memimage/cotton1.jpg'),
(10, 1, 'Arowolo', 'Afeez', 'Olalekan', 'male', 'mr', '7477489489', '2017/02/10', 'fizzy@yahoo.com', 'lkflinlbl', '600', '8787', 'FCMB', '8568956898', '$2y$10$BQRvJ0J43QTQhftTt8BHTOFT9yqC4YjJjyLeGUM0Co8Gx984hgQJO', '', '', 'kjdfkfidblb', 'lkloho', 'lihilhg', '', '878999789', 'kjhlilgbi;i', 'memimage/images-5.jpeg'),
(11, 1, 'AKPA', 'WILLIE', 'THERESA', 'female', 'mr', '08038398511', '20/12/1990', 's@m.com', 'Medical', '3', '14207', 'U.B.A', '2011049755', '$2y$10$E8ltk95ntsdrzpZEhjy9geN1Z1Fkk6nW8.k1MWP8kQLQDwQALoYC.', '', '', 'kjbkicvcvbcv', 'lknlvh', 'klblg', '', '08054291827', 'dfvdf', 'memimage/mumariyo2.jpg'),
(12, 1, 'Olatigbe', 'Thompson', 'Taiwl', 'male', 'mr', '0808089767', '20/12/1980', 'taiwo@yahoo.com', 'Health', '10', '14480', 'Eco Bank', '0004940885', '$2y$10$JpAlVcCQ0XU5PWMhnSfTwuR6KNkImgNkYsD0lOCH8KQ3R10sUDY/a', '', '', 'Abuja', 'Olatigbe Kehinde', 'Brother', '', '0898767757', 'Abuja', 'memimage/866b7d158fcf1108ddddea7a3cbaf60757d14840.jpg'),
(13, 1, 'Abdullahi', 'Zakari', '', 'male', 'mr', '7787636377', '20/12/1980', 'zak@gmail.com', 'Health', '13', '24953', 'FCMB', '0006164356', '$2y$10$5icUirCMYzJ/zBCr9MIGLu2CKhidYuMHSL0PJA9gFotGsBSELdGWu', '', '', 'Abuja', 'Adullahi Mohammed', 'Brother', '', '6366355266', 'abuja', 'memimage/mumariyo.jpg'),
(14, 1, 'Olusanmi', 'Mercy', 'Funmilayo', 'female', 'mrs', '53452677363', '1989/01/03', 'mercyu@gmail.com', 'Health', '788', '16665', 'Diamond Bank', '098753625', '$2y$10$AYv36P8Mjr7JWtR4j9OjKukOKSpOqBY4zXvhzzGuFz27Q4NX71qYG', '', '', 'Abuja', 'Olusanmi Mathew', 'Husband', '', '08987766755', 'Abuja', 'memimage/06a253c90b386367fd339755a7b28d6134405762.jpg'),
(15, 1, 'Borogo', 'Vera', 'Iveren', 'female', 'mr', '0999388399', '20/12/1980', 'vera@yahoo.com', 'Health', '1212', '158586', 'First Bank', '9888282722', '$2y$10$C7tWAOnwqu5AVymmEwa8TOj2Lu9wMhqSbqpjtc0LwZsJOzB/xtkAi', '', '', 'Abuja', 'borogovera', 'brother', '', '0898767757', 'Abuja', 'memimage/e1f76e192d9514f49f0421543e2806a0588a0b85.jpg'),
(16, 1, 'Anavberokhai', 'salamat', '', 'male', 'mr', '033556774', '1989/01/03', 'salam@gmail.com', 'Health', '604', '206959', 'IBTC Bank', '2324553432', '$2y$10$CiB0PwUYX6d8mm1CrSisXOnw9iPNYcA9/A4mHJhQqa71qaZ5VQCYO', '', '', 'Abuja', 'Anavberokhai H', 'Brother', '', '323441241', 'Abuja', 'memimage/eb67c28d014d106a876182c2c395dadababa1635.jpg'),
(17, 1, 'Wilson', 'Helen', 'Amina', 'female', 'mrs', '0887366377', '20/12/1980', 'helen@live.com', 'Health', '614', 'ST000485', 'Eco Bank', '8874777477', '$2y$10$5lTc85W52xK.GdvtrZPmqeFfpTz3XpjIiqsbG8Mrq2Wk1wymE1g8G', '', '', 'Abuja', 'Wilson Arthor', 'Husband', '', '0898767757', 'Auja', 'memimage/1ec4917af1891ab4fc119659c889613eb7171289.jpg'),
(18, 1, 'Jaiyesimi', 'Abimbola', '', 'female', 'miss', '0283763666', '20/12/1980', 'jaiye@liva.com', 'Health', '639', '29453', 'Access Bank', '6635552666', '$2y$10$66WFINLk2wTyx4rHkhyJgO1v8xAW4tdwHux70jitQyaDg.hSlZcUO', '', '', 'Abuja', 'Adeniran Nathaniel', 'Friend', '', '83837377', 'Abuja', 'memimage/IMG-20150309-WA0002.jpg'),
(19, 1, 'Usman', 'Galio', 'Adamu', 'male', 'mr', '972627777', '20/12/1980', 'galo@gmail.com', 'Health', '642', 'ST000682', 'Wema Bank', '6677665555', '$2y$10$XQogdMhXsk39xobjY00i6esYb/0ZltPPYQCOYADmNDSfAqerWDz0i', '', '', 'Abuja', 'Galio Aisha', 'Wife', '', '7968686', 'Abuja', 'memimage/IMG-20150310-WA0001.jpg'),
(20, 1, 'Umar Lau', 'Tawakailtu', '', 'female', 'mrs', '62277228888', '1989/01/03', 'lau@yahoo.com', 'Health', '654', '24925', 'Keystone Bank', '326443787', '$2y$10$qBCFUWiC8QZ/QK3G2Cj0oOnM8NBPcF3vhUZA6CPcnydSvGiCZEOZK', '', '', 'Abuja', 'Umar ', 'Husband', '', '777377', 'Abuja', 'memimage/IMG-20150403-WA0001.jpg'),
(21, 1, 'ADENIRAN', 'Olumide', 'Ezekiel', 'Male', 'Mr', '088733778', '2018-08-10', 'olumideadeniran@gmail.com', 'Works', '0021', '098487499', 'U.B.A', '84847474848', '$2y$10$YSP0vCOALsn5Ok/CN8pDEer0knE8QeO5x7lmzBinLyh7YazuNpsGm', 'South Africa', 'Free State', 'No 39, Mydrecht Street, Bothasig milnerton', 'xs;cmspamo kjbvkjbvxkb', 'kjdsbvksbkbj', 'n@o.com', '83888338', 'kudsuvbukvds', 'memimage/logo.png');

-- --------------------------------------------------------

--
-- Table structure for table `pennyadmintab`
--

CREATE TABLE `pennyadmintab` (
  `admin_id` int(10) NOT NULL,
  `clientapp_id` bigint(20) NOT NULL,
  `role` varchar(500) NOT NULL,
  `username` varchar(500) NOT NULL,
  `password` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `savingtab`
--

CREATE TABLE `savingtab` (
  `saving_id` int(10) NOT NULL,
  `clientapp_id` bigint(20) NOT NULL,
  `mem_id` int(6) NOT NULL,
  `saving_dr` decimal(15,3) NOT NULL,
  `saving_cr` decimal(15,3) NOT NULL,
  `ippis_cr` decimal(15,3) NOT NULL,
  `date` varchar(10) NOT NULL,
  `saving_month` varchar(10) NOT NULL,
  `nature_of_debit` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `createloantab`
--
ALTER TABLE `createloantab`
  ADD PRIMARY KEY (`cr_id`);

--
-- Indexes for table `loantab`
--
ALTER TABLE `loantab`
  ADD PRIMARY KEY (`loan_id`);

--
-- Indexes for table `memstab`
--
ALTER TABLE `memstab`
  ADD PRIMARY KEY (`mem_id`);

--
-- Indexes for table `pennyadmintab`
--
ALTER TABLE `pennyadmintab`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `savingtab`
--
ALTER TABLE `savingtab`
  ADD PRIMARY KEY (`saving_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `createloantab`
--
ALTER TABLE `createloantab`
  MODIFY `cr_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `loantab`
--
ALTER TABLE `loantab`
  MODIFY `loan_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT for table `memstab`
--
ALTER TABLE `memstab`
  MODIFY `mem_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `pennyadmintab`
--
ALTER TABLE `pennyadmintab`
  MODIFY `admin_id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `savingtab`
--
ALTER TABLE `savingtab`
  MODIFY `saving_id` int(10) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
