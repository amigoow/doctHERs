-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 20, 2015 at 11:35 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `amigo`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(200) NOT NULL AUTO_INCREMENT,
  `username` varchar(200) NOT NULL,
  `pass` varchar(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `roles` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `pass`, `name`, `roles`, `email`) VALUES
(1, 'admin', 'admin', 'Daniyal', '1', ''),
(2, 'dasdasd', 'dasdas', 'asdsadas', 'full', 'dasda@gmail.com'),
(4, 'sdas', 'dasdas', 'aasdasd', 'err', 'dasdasd@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
  `id` int(200) NOT NULL AUTO_INCREMENT,
  `comment` varchar(200) NOT NULL,
  `postid` varchar(200) NOT NULL,
  `madeby` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `comment`, `postid`, `madeby`) VALUES
(19, 'greatt', '29', '03115009655'),
(20, 'ffffffffffffff', '29', '03115009644'),
(21, 'good bro :)', '33', '03115009655'),
(22, 'Goood', '35', '03115009644');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE IF NOT EXISTS `contacts` (
  `user` mediumtext NOT NULL,
  `contactname` mediumtext NOT NULL,
  `contactnumber` mediumtext NOT NULL,
  `id` int(200) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5287 ;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`user`, `contactname`, `contactnumber`, `id`) VALUES
('03115009644', 'Pakistan', '(922)929-2929', 5104),
('03115009644', 'Janwar', '(929)292-929', 5105),
('03115009644', 'daniyalahmed', '03115009655', 5106),
('03115009655', 'Sherry Cousin', '+1(647)784-4163', 5107),
('03115009655', 'ADSPACE', '+16264000110', 5108),
('03115009655', 'End Time Media', '+1775-455-4386', 5109),
('03115009655', 'ADSPACE', '+183174341', 5110),
('03115009655', 'Jesse Zagorsky', '+18585252991', 5111),
('03115009655', 'Todd Matherne', '+19852263403', 5112),
('03115009655', 'McWilton Chikwenengere', '+263736923643', 5113),
('03115009655', 'Wilsin Lee', '+34691920662', 5114),
('03115009655', 'Josh Carter', '+61421004120', 5115),
('03115009655', 'Josh Carter', '+61731712282', 5116),
('03115009655', 'Khopchi', '03135481233', 5117),
('03115009655', 'Wajhat Abbasi', '03152520352', 5118),
('03115009655', 'Afridi', '03315120435', 5119),
('03115009655', 'Syed Fawad', '03315303010', 5120),
('03115009655', 'abdul ghafar b', '0331530301044', 5121),
('03115009655', 'Abrar Mustafa', '03415171398', 5122),
('03115009655', 'Daniyal Khawaja', '03455412306', 5123),
('03115009655', 'QMobile Support', '021111225563', 5124),
('03115009655', 'rehan bhati', '03005109589', 5125),
('03115009655', 'cl', '03008822145', 5126),
('03115009655', 'sir altaf', '03009021208', 5127),
('03115009655', 'salo', '03009102241', 5128),
('03115009655', 'bilal shab', '03015520564', 5129),
('03115009655', 'zeshan rafiq', '03026778167', 5130),
('03115009655', 'Arslan', '03028936568', 5131),
('03115009655', 'Zain', '03052056368', 5132),
('03115009655', 'waqas jutt', '03056892887', 5133),
('03115009655', 'syed fawad2', '03075160944', 5134),
('03115009655', 'Fadi Cuzn', '03088071699', 5135),
('03115009655', 'shella', '03111545745', 5136),
('03115009655', 'ffaaadddiii', '03121506763', 5137),
('03115009655', 'ammar mujeeb', '03125065044', 5138),
('03115009655', 'ehtsaam bus', '03125232895', 5139),
('03115009655', 'rizwan kiki', '03125764109', 5140),
('03115009655', 'umer faroq cls', '03135036740', 5141),
('03115009655', 'ahsaan', '03135103076', 5142),
('03115009655', 'naveed', '03135284952', 5143),
('03115009655', 'usman akbar', '03135342496', 5144),
('03115009655', 'Zaigham Raza', '03136101493', 5145),
('03115009655', 'zeshan iqbal', '03145202132', 5146),
('03115009655', 'Afzal', '03145859843', 5147),
('03115009655', 'vicky', '03149160068', 5148),
('03115009655', 'zohaib bablo', '03155200935', 5149),
('03115009655', 'bilal student', '03155872123', 5150),
('03115009655', 'sir rehman gul', '03156542748', 5151),
('03115009655', 'ahsan bus', '03209343677', 5152),
('03115009655', 'mudasir 8', '03222138250', 5153),
('03115009655', 'nawaz city', '03225184800', 5154),
('03115009655', 'umer nawaz', '03235090495', 5155),
('03115009655', 'faizan', '03235815253', 5156),
('03115009655', 'Amna', '03245486679', 5157),
('03115009655', 'Qasim sch', '03315166951', 5158),
('03115009655', 'waqas schoo', '03315333186', 5159),
('03115009655', 'ahmed 2', '03315367828', 5160),
('03115009655', 'shela', '03315545745', 5161),
('03115009655', 'umair ali', '03315673557', 5162),
('03115009655', 'naveed wp', '03319324371', 5163),
('03115009655', 'zain', '03320300206', 5164),
('03115009655', 'waled', '03325201984', 5165),
('03115009655', 'ahsan minhas', '03325410178', 5166),
('03115009655', 'atif bus wala', '03325897592', 5167),
('03115009655', 'Zaheer Bahi', '03335237827', 5168),
('03115009655', 'uzair quershi', '03335297903', 5169),
('03115009655', 'umer-ul-aziz', '03335411271', 5170),
('03115009655', 'mateen', '03335667433', 5171),
('03115009655', 'ali salman', '03336897979', 5172),
('03115009655', 'komal', '03338934445', 5173),
('03115009655', 'orang zeb', '03339408381', 5174),
('03115009655', 'awais bsec', '03339834678', 5175),
('03115009655', 'Alley', '03341055660', 5176),
('03115009655', 'Arif acdmy', '03345358571', 5177),
('03115009655', 'omer sham', '03345406869', 5178),
('03115009655', 'zia gari', '03345523657', 5179),
('03115009655', 'tooba', '03345854811', 5180),
('03115009655', 'Dr. Alina', '03348503394', 5181),
('03115009655', 'shery', '03348522375', 5182),
('03115009655', 'madiya', '03355217215', 5183),
('03115009655', 'hassan shah B', '03358405864', 5184),
('03115009655', 'rashid softwar', '03363881164', 5185),
('03115009655', 'Sherry', '03368861884', 5186),
('03115009655', 'Ahmed Hassan', '03405180383', 5187),
('03115009655', 'Aalay', '03418800456', 5188),
('03115009655', 'farhan', '03435306207', 5189),
('03115009655', 'ousama', '03455951498', 5190),
('03115009655', 'asad', '03456747728', 5191),
('03115009655', 'waji', '03459626676', 5192),
('03115009655', 'Mirza Toquer', '03465124625', 5193),
('03115009655', 'moon', '03465339238', 5194),
('03115009655', 'Affan b', '03468105597', 5195),
('03115009655', 'sharif', '03475029614', 5196),
('03115009655', 'Skrill', '00442035145562', 5197),
('03115009655', 'Amana austarla', '0061403494530', 5198),
('03115009655', 'HBL', '021111111425', 5199),
('03115009655', '0300', '0300', 5200),
('03115009655', 'Papa', '03000520381', 5201),
('03115009655', 'daddy je', '03000520381', 5202),
('03115009655', 'khan uni dri', '03005331039', 5203),
('03115009655', 'di', '03009778694', 5204),
('03115009655', 'raja driver', '03015246714', 5205),
('03115009655', 'Arslan', '03028936568', 5206),
('03115009655', 'fida bhai', '03025006893', 5207),
('03115009655', 'cacha', '03025340803', 5208),
('03115009655', 'home3', '03025466596', 5209),
('03115009655', 'rehan', '03035107586', 5210),
('03115009655', 'pa', '03045741461', 5211),
('03115009655', 'home2', '03105003723', 5212),
('03115009655', 'Laptop', '03115009644', 5213),
('03115009655', 'Daddy Jan', '03115009655', 5214),
('03115009655', 'Asif pti mpa', '03125114491', 5215),
('03115009655', 'rhean', '03125364774', 5216),
('03115009655', 'waled jan', '03125641736', 5217),
('03115009655', 'hasseb bahi', '03125925420', 5218),
('03115009655', 'me', '03129026287', 5219),
('03115009655', 'shabo khala', '03129089294', 5220),
('03115009655', 'home', '03132111090', 5221),
('03115009655', 'saqib', '03135131263', 5222),
('03115009655', 'zeshan r', '03135481233', 5223),
('03115009655', 'Zaigham Raza', '03136101493', 5224),
('03115009655', 'hafiz shab', '03155138545', 5225),
('03115009655', 'zavin', '03155369193', 5226),
('03115009655', 'irfan ghafar', '03155619400', 5227),
('03115009655', 'flah case', '03215014169', 5228),
('03115009655', 'uzair', '03215595017', 5229),
('03115009655', 'tai', '03235437920', 5230),
('03115009655', 'zeshan', '03245720060', 5231),
('03115009655', 'afridi', '03315120435', 5232),
('03115009655', 'ousama uzair', '03315275456', 5233),
('03115009655', 'Syed Fawad', '03315303010', 5234),
('03115009655', 'ahmed', '03315367827', 5235),
('03115009655', 'ali bahi', '03315532321', 5236),
('03115009655', 'naveed bhai', '03315673062', 5237),
('03115009655', 'Anis', '03325122591', 5238),
('03115009655', 'Owais Hanif', '03339834678', 5239),
('03115009655', 'sir ahmed', '03335140505', 5240),
('03115009655', 'hafiz rao', '03335332924', 5241),
('03115009655', 'bhati', '03335375751', 5242),
('03115009655', 'hamid', '03335428623', 5243),
('03115009655', 'sir zafari', '03335859331', 5244),
('03115009655', 'wqas bhae', '03345351746', 5245),
('03115009655', 'zia bus', '03345523657', 5246),
('03115009655', 'abdul rehman', '03345879720', 5247),
('03115009655', 'Usman wahid', '03348601475', 5248),
('03115009655', 'faisal ishfaq', '03348991420', 5249),
('03115009655', 'faizan bhatti', '03365138613', 5250),
('03115009655', 'zain ki ami', '03365266155', 5251),
('03115009655', 'Jawad', '03365604560', 5252),
('03115009655', 'faizan hashmi', '03425016403', 5253),
('03115009655', 'umer', '03425546511', 5254),
('03115009655', 'hassan gilani', '03435484756', 5255),
('03115009655', 'hamza stud', '03445146889', 5256),
('03115009655', 'bilal khan', '03445154543', 5257),
('03115009655', 'm0si', '03445395177', 5258),
('03115009655', 'driver', '03445424865', 5259),
('03115009655', 'shaikar bhai', '03445449863', 5260),
('03115009655', 'hamid gcs', '03445873080', 5261),
('03115009655', 'Asif', '03448818206', 5262),
('03115009655', 'hafiz shoail', '03450753626', 5263),
('03115009655', 'abdul ghafar b', '03452982911', 5264),
('03115009655', 'hafiz shoial', '03454248719', 5265),
('03115009655', 'fahad', '03455220558', 5266),
('03115009655', 'Danyl khawaja', '03455412306', 5267),
('03115009655', 'Shahed 8173', '03456092096', 5268),
('03115009655', 'Card Load Urdu', '100', 5269),
('03115009655', 'Card Load Eng', '101', 5270),
('03115009655', 'PIA Inquiry', '114', 5271),
('03115009655', 'Edhi Center', '115', 5272),
('03115009655', 'Rail Inquiry', '117', 5273),
('03115009655', 'PTCL Inquiry', '1217', 5274),
('03115009655', 'PoliceHelpline', '15', 5275),
('03115009655', 'Fire Brigade', '16', 5276),
('03115009655', 'Bal Check Urdu', '200', 5277),
('03115009655', 'Bal Check Eng', '222', 5278),
('03115009655', 'Voice Mail', '300', 5279),
('03115009655', 'Call Center', '310', 5280),
('03115009655', 'H', '3115009655', 5281),
('03115009655', 'facebook', '32665', 5282),
('03115009655', 'tweets', '40404', 5283),
('03115009655', 'new york', '5163809086', 5284),
('03115009655', 'bank', '5393', 5285),
('03115009655', 'PTI', '80022', 5286);

-- --------------------------------------------------------

--
-- Table structure for table `error_reports`
--

CREATE TABLE IF NOT EXISTS `error_reports` (
  `reporterror` varchar(200) NOT NULL,
  `status` varchar(200) NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `madeby` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `likes`
--

CREATE TABLE IF NOT EXISTS `likes` (
  `userid` varchar(200) NOT NULL,
  `postid` varchar(200) NOT NULL,
  `id` int(200) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=43 ;

--
-- Dumping data for table `likes`
--

INSERT INTO `likes` (`userid`, `postid`, `id`) VALUES
('03115009655', '29', 35),
('03115009644', '30', 36),
('03115009655', '33', 37),
('03115009655', '31', 38),
('03115009644', '32', 39),
('03115009644', '34', 40),
('03115009644', '35', 41),
('03115009644', '36', 42);

-- --------------------------------------------------------

--
-- Table structure for table `locations`
--

CREATE TABLE IF NOT EXISTS `locations` (
  `lat` varchar(200) NOT NULL,
  `lng` varchar(200) NOT NULL,
  `usernumber` varchar(200) NOT NULL,
  PRIMARY KEY (`usernumber`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `locations`
--

INSERT INTO `locations` (`lat`, `lng`, `usernumber`) VALUES
('33.5822924', '73.0346828', '03115009655');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE IF NOT EXISTS `messages` (
  `sendby` varchar(200) NOT NULL,
  `sendto` varchar(200) NOT NULL,
  `message` varchar(200) NOT NULL,
  `id` int(200) NOT NULL AUTO_INCREMENT,
  `type` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=573 ;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`sendby`, `sendto`, `message`, `id`, `type`) VALUES
('03115009655', '03115009644', 'lol', 512, 'text'),
('03115009655', '03115009644', '', 511, 'text'),
('03115009655', '03115009644', 'ahhahahahah', 510, 'text'),
('03115009655', '03115009644', 'hahahaha', 509, 'text'),
('03115009655', '03115009644', 'ikat ', 508, 'text'),
('03115009655', '03115009644', 'uploadedimages/ae0a9abcd8364ab148486157cb90cbb7551e9c1ac9bf5.png', 507, 'image'),
('03115009655', '03115009644', 'uploadedimages/8ec355f390c8b889fef80a42edf8f75b551e9c038e6d3.jpg', 506, 'image'),
('03115009655', '03115009644', 'hahahahah', 505, 'text'),
('03115009655', '03115009644', 'ok focya', 504, 'text'),
('03115009644', '03115009655', 'dddsadas', 503, 'text'),
('03115009644', '03115009655', 'reertertert', 502, 'text'),
('03115009644', '03115009655', 'uploadedimages/daa8f13c9d65da091604a1c944e47f3b551d33da4b7a2.jpg', 501, 'image'),
('03115009644', '03115009655', 'fjlkjklwejrjkewkwekjrjkwerkwek', 500, 'text'),
('03115009644', '03115009655', 'Okc:D', 499, 'text'),
('03115009655', '03115009644', 'hahahahah alla hai', 498, 'text'),
('03115009655', '03115009644', 'uploadedimages/44de7308f64f098e9a079f513709e733551c6842d1478.jpg', 497, 'image'),
('03115009655', '03115009644', 'perfext', 496, 'text'),
('03115009655', '03115009644', 'works', 495, 'text'),
('03115009655', '03115009644', 'good', 494, 'text'),
('03115009655', '03115009644', 'foo', 493, 'text'),
('03115009655', '03115009644', 'not teally', 492, 'text'),
('03115009655', '03115009644', 'hmm', 491, 'text'),
('03115009655', '03115009644', 'lol', 490, 'text'),
('03115009644', '03115009655', 'lklkkl', 489, 'text'),
('03115009655', '03115009644', 'k', 488, 'text'),
('03115009644', '03115009655', 'lol', 487, 'text'),
('03115009655', '03115009644', '', 486, 'text'),
('03115009644', '03115009655', 'lol', 485, 'text'),
('03115009655', '03115009644', 'okkk', 484, 'text'),
('03115009655', '03115009644', 'gggg', 483, 'text'),
('03115009655', '03115009644', 'jjj', 482, 'text'),
('03115009655', '03115009644', 'hahahah', 481, 'text'),
('03115009655', '03115009644', 'okk', 480, 'text'),
('03115009655', '03115009644', 'g', 479, 'text'),
('03115009655', '03115009644', 'ok', 478, 'text'),
('03115009655', '03115009644', 'hahahahahah', 477, 'text'),
('03115009655', '03115009644', 'hajahaj', 476, 'text'),
('03115009655', '03115009644', 'Bas ?', 475, 'text'),
('03115009655', '03115009644', '?', 474, 'text'),
('03115009655', '03115009644', 'wah jee', 473, 'text'),
('03115009655', '03115009644', 'na kar ?', 472, 'text'),
('03115009655', '03115009644', 'ggg', 471, 'text'),
('03115009655', '03115009644', 'hhh', 470, 'text'),
('03115009655', '03115009644', 'hhu', 469, 'text'),
('03115009655', '03115009644', 'ffff', 468, 'text'),
('03115009644', '03115009655', 'lol', 467, 'text'),
('03115009655', '03115009644', 'okki', 466, 'text'),
('03115009655', '03115009644', 'lol', 465, 'text'),
('03115009655', '03115009644', 'seriouslt ?', 464, 'text'),
('03115009655', '03115009644', '', 463, 'text'),
('03115009655', '03115009644', 'na kar', 462, 'text'),
('03115009644', '03115009655', 'look', 461, 'text'),
('03115009655', '03115009644', 'lil', 460, 'text'),
('03115009655', '03115009644', 'oj', 459, 'text'),
('03115009655', '03115009644', 'nai kar yara', 513, 'text'),
('03115009655', '03115009644', 'ahahahahah', 514, 'text'),
('03115009655', '03115009644', 'okkjjjj', 515, 'text'),
('03115009655', '03115009644', 'hahahahahahahahahahagagagagagagavagavavagah', 516, 'text'),
('03115009655', '03115009644', 'Polk', 517, 'text'),
('03115009655', '03115009644', 'gagagagagagaggaa', 518, 'text'),
('03115009655', '03115009644', 'jajsjsjhzzhzhshsh', 519, 'text'),
('03115009644', '03115009655', 'dwfdfdsfdsfdsfsdfsfdfsdfs', 520, 'text'),
('03115009655', '03115009644', 'ijhh', 521, 'text'),
('03115009644', '03115009655', 'dkjakdjaskjd', 522, 'text'),
('03115009644', '03115009655', 'jsjlkajsail', 523, 'text'),
('03115009644', '03115009655', 'jjhjjhjjh', 524, 'text'),
('03115009644', '03115009655', 'jjk', 525, 'text'),
('03115009655', '03115009644', 'hshahahahahagsg', 526, 'text'),
('03115009655', '03115009644', 'afagagag', 527, 'text'),
('03115009655', '03115009644', 'vagahag', 528, 'text'),
('03115009644', '03115009655', 'isfhsfhsjdfjhdsjfdsjkf', 529, 'text'),
('03115009655', '03115009644', 'ahahha', 530, 'text'),
('03115009655', '03115009644', 'ahahahah', 531, 'text'),
('03115009655', '03115009644', 'ahhahaha', 532, 'text'),
('03115009655', '03115009644', 'ok', 533, 'text'),
('03115009644', '03115009655', 'uploadedimages/dfc0e642be3044e9f018c2ad5b9216b3551fb74636bea.jpg', 534, 'image'),
('03115009644', '03115009655', 'OKKK', 535, 'text'),
('03115009644', '03115009655', 'Lol', 536, 'text'),
('03115009644', '03115009655', 'kkk', 537, 'text'),
('03115009655', '03115009655', 'gagaga', 538, 'text'),
('03115009655', '03115009644', 'qg', 539, 'text'),
('03115009655', '03115009655', 't', 540, 'text'),
('03115009644', '03115009655', 'dasdasdasd', 541, 'text'),
('03115009644', '03115009655', 'lol', 542, 'text'),
('03115009655', '03115009644', 'okk', 543, 'text'),
('03115009655', '03115009644', 'kool', 544, 'text'),
('03115009655', '03115009644', 'hahaah', 545, 'text'),
('03115009655', '03115009644', 'hahahahabahahahahahahahahahah', 546, 'text'),
('03115009655', '03115009644', 'gagagagagagagagagahahahagagagavagagagavagavacafafafafagagavagagag', 547, 'text'),
('03115009655', '03115009644', 'dha', 548, 'text'),
('03115009655', '03115009644', 'harflj  h h', 549, 'text'),
('03115009655', '03115009644', '', 550, 'text'),
('03115009655', '03115009644', 'nxnxndndndndndnsns', 551, 'text'),
('03115009655', '03115009644', 'mxmxnxjd', 552, 'text'),
('03115009655', '03115009644', 'okk', 553, 'text'),
('03115009644', '03115009655', 'ok', 554, 'text'),
('03115009644', '03115009655', 'Lol :P', 555, 'text'),
('03115009644', '03115009655', 'lol', 556, 'text'),
('03115009655', '03115009644', 'sagi hai', 557, 'text'),
('03115009655', '03115009644', 'aur sunaa', 558, 'text'),
('03115009644', '03115009655', 'yes\n', 559, 'text'),
('03115009655', '03115009644', 'uploadedimages/4e4dfcbd56bb93a4bff2a0607d5c5c8455266f44bff87.jpg', 560, 'image'),
('03115009655', '03115009644', 'lolll', 561, 'text'),
('03115009644', '03115009655', 'hey\n', 562, 'text'),
('03115009644', '03115009655', 'dani\n', 563, 'text'),
('03115009644', '03115009655', 'lol', 564, 'text'),
('03115009655', '03115009644', 'ik', 565, 'text'),
('03115009655', '03115009644', 'not', 566, 'text'),
('03115009644', '03115009655', 'hi\n', 567, 'text'),
('03115009644', '03115009655', 'ok', 568, 'text'),
('03115009655', '03115009644', 'hhhhh', 569, 'text'),
('03115009655', '03115009644', '', 570, 'text'),
('03115009655', '03115009644', 'uploadedimages/f6b71ca007364dabec9fcac99976e8cb5526787408b1b.png', 571, 'image'),
('03115009644', '03115009655', 'uploadedimages/dfc0e642be3044e9f018c2ad5b9216b35526788ad6ffa.jpg', 572, 'image');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
  `status` varchar(200) NOT NULL,
  `postedby` varchar(200) NOT NULL,
  `id` int(200) NOT NULL AUTO_INCREMENT,
  `likes` int(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=37 ;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`status`, `postedby`, `id`, `likes`) VALUES
('LOOK', '03115009644', 30, 1),
('kkk', '03115009644', 32, 1),
('heloo its new post', '03115009655', 33, 1),
('hello', '03115009644', 35, 1),
('Hello how are you.', '03115009644', 36, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `id` int(200) NOT NULL AUTO_INCREMENT,
  `Name` varchar(200) NOT NULL,
  `picture` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=69 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`email`, `password`, `id`, `Name`, `picture`) VALUES
('03115009655', 'qwe', 68, '', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
