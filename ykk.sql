-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 14, 2016 at 03:38 PM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ykk`
--

-- --------------------------------------------------------

--
-- Table structure for table `inserttb`
--

CREATE TABLE IF NOT EXISTS `inserttb` (
  `triptypeid` int(100) NOT NULL,
  `packagename` varchar(100) NOT NULL,
  `description` varchar(5000) NOT NULL,
  `days` varchar(100) NOT NULL,
  `cover` varchar(50) NOT NULL,
  `price` int(255) NOT NULL,
  `dollar` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `packagetb`
--

CREATE TABLE IF NOT EXISTS `packagetb` (
  `packageid` int(100) NOT NULL AUTO_INCREMENT,
  `triptypeid` int(100) NOT NULL,
  `packagename` varchar(100) NOT NULL,
  `description` varchar(5000) NOT NULL,
  `days` varchar(100) NOT NULL,
  `cover` varchar(300) NOT NULL,
  `price` int(255) NOT NULL,
  `dollar` int(255) NOT NULL,
  `rate` varchar(100) NOT NULL,
  PRIMARY KEY (`packageid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `packagetb`
--

INSERT INTO `packagetb` (`packageid`, `triptypeid`, `packagename`, `description`, `days`, `cover`, `price`, `dollar`, `rate`) VALUES
(1, 1, 'Yangon-Ngwesaung-Yangon ', 'Day 1: Arrive Yangon - Ngwesaung<br>Day 2-3: Ngwesaung <br>Day 4: Ngwesaung - Yangon<br>Day 5: Yangon Departure<br>Can be visited all year round but beach trip is not recommended to travel during the monsoon season (from May through September).', '5 Days/ 4 Nights', 'ngwesaung1.jpg#ngwesaung2.jpg#ngwesaung.jpg#yangon1.jpeg', 420000, 200, '0'),
(2, 1, 'Yangon-Ngapali-Yangon', 'Day 1: Arrive Yango<br> Day 2: Yangon - Thandwe  - Ngapali<br>Day 3-4: Ngapali - Thandwe - Yangon<br> Day 5: Ngapali - Thandwe - Yangon<br>Day 6: Yangon Departure<br>\nCan be visited all year round but beach trip is not recommended to travel during the monsoon season (from May through September).', '6 Days / 5 Nights', 'Ngapali1.jpg#Ngapali.jpg#BURMA-Ngapali-Beach.jpeg#yangon2.jpeg', 300000, 250, '0'),
(3, 1, 'Yangon-Chaungthar-Yangon', 'Day 1: Arrive Yangon - Kyaungthar<br>Day 2-3: Kyaungthar<br>Day 4: Kyaungthar - Yangon<br>Day 5: Yangon Departure<br>Can be visited all year round but beach trip is not recommended to travel during the monsoon season (from May through September).', '5 Days / 4 Nights', 'Chaung_Thar5.jpg#ChaungTha.jpeg#ChaungThar3.jpg#yangon3.jpeg', 420000, 200, '0'),
(4, 2, 'Yangon-Inle-Mandalay-Bagan-Yangon', 'Day 1:  Arrive Yangon<br>Day 2: Yangon  Heho - Pindaya - Inle<br>Day 3: Inle<br>Day 4: Inle - Heho  Mandalay -Amarapura<br>Day 5: (Sunday):  Mandalay - Bagan (RV Paukan Cruise) <br>Day 6: (Monday): On Board <br>Day 7: (Tuesday): - Arrive Bagan<br>Day 8: Bagan   Yangon<br>Day 9: Yangon Departure<br>Can be visited from October through April.', '9 Days / 8 Nights', 'Inle2.jpeg#mandalay1.jpg#bagan1.jpg#yangon4.jpeg', 480000, 400, '0'),
(5, 2, 'Yangon-Myintkyina-Bhamo-Tagaung-Mandalay-Yangon', 'Day 1:Arrive Yangon <br>Day 2: Yangon  Myintkyina<br>Day 3: Myintkyina - Bhamo<br>Day 4: Depart Bhamo - (Amara River Cruise Trip)<br>Day 5: Bhamo - Shwegu<br>Day 6: Shwegu - Katha<br>Day 7: Katha - Tagaung<br>Day 8: Tagaung - Kyauk Myaung<br>Day 9: Kyauk Myaung - Mingun<br>Day 10: Mingun - Arrive ManDalay<br>Day 11: ManDalay - Amarapura -Sagaing<br>Day 12: ManDalay  Yangon<br>Day 13:Yangon Departure<br>Can be visited from October through April.<br>A special permit is required for all nationalities to visit the Kachin state.\n', '13 Days / 12 Nights', 'myitkyina1.jpg#Bhamo.jpg#mandalay2.jpg#yangon5.jpeg', 600000, 500, '0'),
(6, 3, 'Yangon-Thanlyin(Syriam)-Bago-Yangon', 'Day 1: - Arrive Yangon<br>Day 2: Yangon - Thanlyin - Yangon <br>Day 3: Yangon - Bago - Yangon<br>Day 4: Yangon - Departure<br>Can be visited all year round', '4 Days / 3 Nights', 'Thanlyin.jpg#KyaukTan.jpg#altyoung-monk-praying-taken-on-best-photo-tour-in-Myanmar.jpg#yangon6.jpeg', 120000, 100, '0'),
(7, 3, 'Yangon-Kyaikhtiyo-Bago-Yangon', 'Day 1: Arrive Yangon<br> Day 2: Yangon -  Kyaikhtiyo<br>Day 3: Kyaikhtiyo -  Bago  Yangon<br>Day 4: Yangon - Departure<br>Can be visited all year round but Kyaikhtiyo trip is not recommended to(from June through September).', '4 Days / 3 Nights', 'Kyaikhtiyo.jpg#IMG_25828633149074.jpeg#yangon7.jpg', 420000, 200, '0'),
(8, 3, 'Yangon-Mandalay-Bagan-Inle-Kakku-Yangon', 'Day 1: - Arrive Yangon<br>Day 2:Yangon - Mandalay  -Amarapura <br>Day 3: Mandalay - Bagan - (Shwe Keinnery (or) Malikha Boat) <br>Day 4: Bagan<br>Day 5: Bagan - Heho - Inle<br>Day 6: - Inle - Kakku - Taunggyi<br>Day 7: Taunggyi - Heho - Yangon<br>Day 8: Yangon Departure<br>Can be visited all year round', '8 Days / 7 Nights', 'mandalay3.jpeg#bagan6.jpeg#Inle2.jpeg#kekku.jpg#yangon8.jpg', 420000, 350, '0'),
(9, 4, 'Yangon-Bagan-Mindat-Kanpalet-Mt.Victoria-Bagan-Yangon', 'Day 1:  Arrive Yangon<br>Day 2: Yangon  Bagan  Mindat<br>Day 3: Mindat  Kanpalet<br>Day 4: Kanpalet Mt. Victoria (trekking)<br>Day 5: Kanpalet  Bagan<br>Day 6:  Bagan  Yangon<br>Day 7: Yangon Departure<br>Can be visited from October through April.<br>A special  permit is required for all nationalities to visit there and we require all client details latest 30 days prior to the tour start.', '7 Days / 6 Nights', 'chin-hills.jpg#kanpatlat.jpg#bagan3.jpg#yangon9.jpg', 360000, 300, '0'),
(10, 4, 'Yangon-Taungoo-Phyo Kyar Elephant Camp-Yangon', 'Day 1:  Arrive Yangon<br>Day 2:Yangon  Taungoo  Phyo Kyar Elephant Camp<br>Day 3: Phyo Kyar Elephant Camp  Yangon<br>Day 4:  Yangon Departure<br>Can be visited all year round', '4 Days/ 3 Nights', 'elephants2.jpg#taungoo.png#PhoeKyar.jpg#yangon10.jpg', 420000, 200, '0'),
(11, 4, 'Yangon-Mandalay-Monywa-Alaungdaw Kathapa (National Park)-Bagan-Yangon', 'Day 1:  Arrive Yangon<br>Day 2: Yangon  Mandalay Amarapura<br>Day 3: Mandalay  Monywa<br>Day 4: Monywa  Alaungdaw Kathapa  Monywa<br>Day 5:Monywa  Pakokku  Bagan<br>Day 6: Bagan  Yangon <br>Day 7: Yangon Departure<br>Can be visited all year round but Alaungdaw Kathapa can  be visited from January through March. 	      ', '7 Days / 6 Nights', 'hpowindaung.jpg#Alaungdawkathapa.jpg#mandalay2.jpg#yangon11.jpg', 360000, 300, '0'),
(12, 5, 'Yangon-Mandalay-Kyaingtong-Yangon', 'Day 1:  Arrive Yangon<br>Day 2: Yangon  Mandalay  Amarapura  Sagaing<br>Day 3: Mandalay   Mingun Mandalay<br>Day 4: Mandalay  Kyaingtong<br>Day 5: Kyaingtong(trekking)<br>Day 6:Kyaingtong (trekking)<br>Day 7:Kyaingtong   Yangon<br>Day 8:Yangon Departure<br>Can be visited all year round and trekking trip is not recommended to travel during the monsoon season (from June through September).', '8 Days / 7 Nights', 'KyaingTong.jpg#mandalay3.jpeg#yangon4.jpeg', 420000, 350, '0'),
(13, 5, 'Yangon-Kalaw-Inle-Yangon', 'Day 1:  Arrive Yangon<br>Day 2: Yangon  Heho  Kalaw<br>Day 3: Kalaw - Ywar Pu - Lut Pyin - La Mine (trekking<br>Day 4: La Mine  Kone Hla - Paut Tu Pauk - Htei Thein (trekking)<br>Day 5: Htei Thein - Nan Yoke - Thankha Mout - Indein(trekking)  Inle<br>Day 6: Inle<br>Day 7: Inle  Heho Yangon<br>Day 8: Yangon Departure<br>Can be visited from October through April.', '8 Days / 7 Nights', 'kalaw.jpg#kanpatlat1.jpg#Inle3.jpg#yangon5.jpeg', 420000, 350, '0');

-- --------------------------------------------------------

--
-- Table structure for table `triptb`
--

CREATE TABLE IF NOT EXISTS `triptb` (
  `tripid` int(100) NOT NULL AUTO_INCREMENT,
  `userid` int(100) NOT NULL,
  `packageid` int(10) NOT NULL,
  `numberofperson` int(255) NOT NULL,
  `amount` int(255) NOT NULL,
  PRIMARY KEY (`tripid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `triptb`
--

INSERT INTO `triptb` (`tripid`, `userid`, `packageid`, `numberofperson`, `amount`) VALUES
(1, 1, 1, 2, 200),
(2, 1, 1, 2, 200),
(3, 1, 1, 1, 100),
(4, 5, 4, 11, 4400),
(5, 5, 14, 1, 350),
(6, 1, 1, 7, 1400);

-- --------------------------------------------------------

--
-- Table structure for table `triptypetb`
--

CREATE TABLE IF NOT EXISTS `triptypetb` (
  `triptypeid` int(100) NOT NULL AUTO_INCREMENT,
  `triptypename` varchar(100) NOT NULL,
  PRIMARY KEY (`triptypeid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `triptypetb`
--

INSERT INTO `triptypetb` (`triptypeid`, `triptypename`) VALUES
(1, 'Beach'),
(2, 'Cruise'),
(3, 'Culture'),
(4, 'Eco'),
(5, 'Trekking');

-- --------------------------------------------------------

--
-- Table structure for table `usertb`
--

CREATE TABLE IF NOT EXISTS `usertb` (
  `userid` int(100) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `country` varchar(20) NOT NULL,
  `phno` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  PRIMARY KEY (`userid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `usertb`
--

INSERT INTO `usertb` (`userid`, `username`, `password`, `gender`, `country`, `phno`, `email`, `address`) VALUES
(1, 'Yu Kalyar Khine', '696969', 'Female', 'Myanmar', '09795522656', 'iamsorrybutiloveu007@gmail.com', 'Yangon'),
(2, 'Nay Chi', '999', 'Female', 'Astralian', '09450039909', 'violetsnow@facebook.com', 'Yangon'),
(5, 'May', '00000', 'Female', 'Myanmar', '0973105665', 'may9@gmail.com', 'Pyin Oo Lwin'),
(6, '', '', '', '', '', '', ''),
(7, 'Sue', '12345', 'Female', 'England', '0973105665', 'suelay@gmail.com', 'St.louis');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
