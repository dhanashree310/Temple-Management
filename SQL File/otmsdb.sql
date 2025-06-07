-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 09, 2022 at 11:49 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `otmsdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbladmin`
--

CREATE TABLE `tbladmin` (
  `ID` int(10) NOT NULL,
  `AdminName` varchar(120) DEFAULT NULL,
  `UserName` varchar(120) DEFAULT NULL,
  `MobileNumber` bigint(10) DEFAULT NULL,
  `Email` varchar(200) DEFAULT NULL,
  `Password` varchar(200) DEFAULT NULL,
  `AdminRegdate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbladmin`
--

INSERT INTO `tbladmin` (`ID`, `AdminName`, `UserName`, `MobileNumber`, `Email`, `Password`, `AdminRegdate`) VALUES
(1, 'Admin', 'admin', 1234567890, 'admin@gmail.com', '202cb962ac59075b964b07152d234b70', '2024-01-11 04:36:52');

-- --------------------------------------------------------

--
-- Table structure for table `tblbookdarshan`
--

CREATE TABLE `tblbookdarshan` (
  `ID` int(5) NOT NULL,
  `BookingNumber` int(10) DEFAULT NULL,
  `UserID` int(5) DEFAULT NULL,
  `TempleID` int(5) DEFAULT NULL,
  `DateofDarshan` date DEFAULT NULL,
  `TimeofDarshan` time DEFAULT NULL,
  `TotalMember` int(10) DEFAULT NULL,
  `City` varchar(250) DEFAULT NULL,
  `State` varchar(250) DEFAULT NULL,
  `Country` varchar(250) DEFAULT NULL,
  `IdentityProof` varchar(250) DEFAULT NULL,
  `IdentityProofnumber` int(10) DEFAULT NULL,
  `Message` mediumtext DEFAULT NULL,
  `BookingDate` timestamp NULL DEFAULT current_timestamp(),
  `Remark` varchar(250) DEFAULT NULL,
  `Status` varchar(250) DEFAULT NULL,
  `UpdationDate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblbookdarshan`
--

INSERT INTO `tblbookdarshan` (`ID`, `BookingNumber`, `UserID`, `TempleID`, `DateofDarshan`, `TimeofDarshan`, `TotalMember`, `City`, `State`, `Country`, `IdentityProof`, `IdentityProofnumber`, `Message`, `BookingDate`, `Remark`, `Status`, `UpdationDate`) VALUES
(1, 174264887, 1, 1, '2024-01-02', '09:00:00', 5, 'Ghaziabad', 'UP', 'India', 'Adhar Card', 45464646, ' Ghjgjheyruiery', '2022-03-26 12:10:22', '', 'Accepted', '2024-03-30 12:48:28'),
(2, 833719675, 1, 1, '2024-02-28', '18:45:00', 10, 'Allahabad', 'UP', 'India', 'Voter Card', 457956, ' yuhjbjgjesrt', '2022-03-26 12:24:31', '', 'Rejected', '2024-03-30 12:48:28'),
(3, 399004895, 2, 5, '2024-03-10', '18:41:00', 10, 'Mumbai', 'Maharastra', 'India', 'Voter Card', 0, ' Kindly provide dhramsala too', '2022-04-02 08:20:11', NULL, NULL, '2024-04-02 08:20:11'),
(4, 179174548, 3, 1, '2024-03-22', '18:35:00', 4, 'Noida', 'UP', 'INdia', 'Adhar Card', 2147483647, ' NA', '2022-04-09 08:59:30', '', 'Accepted', '2024-04-09 08:59:30');

-- --------------------------------------------------------

--
-- Table structure for table `tbldonation`
--

CREATE TABLE `tbldonation` (
  `ID` int(5) NOT NULL,
  `DonationNumber` int(10) DEFAULT NULL,
  `UserID` int(5) DEFAULT NULL,
  `TempleID` int(5) DEFAULT NULL,
  `City` varchar(250) DEFAULT NULL,
  `State` varchar(250) DEFAULT NULL,
  `Country` varchar(250) DEFAULT NULL,
  `PANNumber` varchar(200) DEFAULT NULL,
  `DonationAmount` decimal(10,0) DEFAULT NULL,
  `PaymentOption` varchar(50) DEFAULT NULL,
  `Message` mediumtext DEFAULT NULL,
  `DonationDate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbldonation`
--

INSERT INTO `tbldonation` (`ID`, `DonationNumber`, `UserID`, `TempleID`, `City`, `State`, `Country`, `PANNumber`, `DonationAmount`, `PaymentOption`, `Message`, `DonationDate`) VALUES
(1, 255885030, 1, 1, 'Allhabad', 'UP', 'India', 'jk789989iuo', '10000', 'Wallet', ' hkyiuewyruiwvbtiut', '2023-03-26 13:34:16'),
(2, 434774268, 1, 1, 'Allahabd', 'UP', 'India', 'hjg878979', '1200', 'UPI', ' khiuytuetgwqurcr4t', '2023-04-01 04:53:42'),
(3, 184472929, 1, 5, 'Allhabad', 'UP', 'INdia', 'iuyi78787', '4500', 'Wallet', ' iyuyiuywiucy biry4ct874t45', '2023-04-01 04:54:19'),
(4, 330480819, 2, 1, 'Mumbai', 'Maharastra', 'India', 'KI7877979', '10000', 'Wallet', ' Har Har Mahadev', '2023-04-02 06:07:34'),
(5, 978081478, 3, 1, 'Noida', 'UP', 'India', 'BSGHG1232H', '21000', 'Cash', ' NA', '2023-04-09 09:00:23');

-- --------------------------------------------------------

--
-- Table structure for table `tblfestivals`
--

CREATE TABLE `tblfestivals` (
  `ID` int(5) NOT NULL,
  `TempleID` int(5) DEFAULT NULL,
  `FestivalName` varchar(250) DEFAULT NULL,
  `Date` date DEFAULT NULL,
  `Day` varchar(250) DEFAULT NULL,
  `Description` mediumtext DEFAULT NULL,
  `TempleImage1` varchar(250) DEFAULT NULL,
  `CreationDate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblfestivals`
--

INSERT INTO `tblfestivals` (`ID`, `TempleID`, `FestivalName`, `Date`, `Day`, `Description`, `TempleImage1`, `CreationDate`) VALUES
(1, 1, 'Shri Ram Navami', '2024-04-17', 'Wednesday', 'It is believed that wherever and whenever irreligion takes birth and tries to decline the values of our religion, great Lord appears to kill the demons. This is the whole idea behind celebrating Ram Navami.', 'f6e5aee9a916d5877d79f4b54d32ac6e.png', '2023-12-15 05:31:39'),
(2, 2, 'Holi', '2024-03-25', 'Monday', 'Holi is a popular ancient Hindu festival, also known as the Festival of Spring, the Festival of Colours or the Festival of Love. The festival celebrates the eternal and divine love of Radha Krishna.', 'fcd7eb1985720aff1a447690088d902d.jpg', '2023-12-15 05:32:22'),
(4, 3, 'Krishn Janmashtami', '2024-08-26', 'Monday', 'The story of Janmashtami is the story of the Advent of Lord Krishna. It is celebrated each year on the eighth day of the Bhadrapada month. The Supreme Lord appeared in Mathura in a dungeon to Queen Devaki and King Vasudeva.', '5dfded56fa25a1deeb9d75266ad50ce5.jpg', '2023-12-15 05:31:39'),
(5, 4, 'Radhashtami', '2024-09-11', 'Wednesday', 'Radhashtami is a Hindu religious day commemorating the birth anniversary of the goddess Radha, the chief consort of the god Krishna. It is celebrated in her birthplace Barsana and the entire Braj region on the eighth day (ashtami) of the bright half of the lunar month of Bhadrapada (August - September).', '036b4a7f31979fb448320ca289997050.jpg', '2023-12-15 05:43:54');

-- --------------------------------------------------------

--
-- Table structure for table `tblpage`
--

CREATE TABLE `tblpage` (
  `ID` int(10) NOT NULL,
  `PageType` varchar(200) DEFAULT NULL,
  `PageTitle` mediumtext DEFAULT NULL,
  `PageDescription` mediumtext DEFAULT NULL,
  `Email` varchar(200) DEFAULT NULL,
  `MobileNumber` bigint(10) DEFAULT NULL,
  `UpdationDate` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblpage`
--

INSERT INTO `tblpage` (`ID`, `PageType`, `PageTitle`, `PageDescription`, `Email`, `MobileNumber`, `UpdationDate`) VALUES
(1, 'aboutus', 'About Us', '<div style=\"text-align: center;\"><b style=\"color: rgb(32, 33, 36); font-family: times new roman;\"><font size=\"6\">ISKCON</font></b></div><div style=\"text-align:justify;\"><span style=\"color: rgb(88, 89, 60); font-family: times new roman; text-align: justify; font-weight:normal;\"><font size=\"3\"><p>The International Society for Krishna Consciousness (ISKCON), otherwise known as the Hare Krishna movement, includes five hundred major centers, temples and rural communities, nearly one hundred affilated vegetarian restaurants, thousands of namahattas or local meeting groups, a wide variety of community projects, and millions of congregational members worldwide. Although less than fifty years on the global stage, ISKCON has expanded widely since its founding by His Divine Grace A. C. Bhaktivedanta Swami Prabhupada in New York City in 1966.</p><p>ISKCON belongs to the Gaudiya-Vaishnava sampradaya, a monotheistic tradition within the Vedic or Hindu culture. Philosophically it is based on the Sanskrit texts Bhagavad-gita and the Bhagavat Purana, or Srimad Bhagavatam. These are the historic texts of the devotional bhakti yoga tradition, which teaches that the ultimate goal for all living beings is to reawaken their love for God, or Lord Krishna, the “all-attractive one”.</p><p>God is known across the world by many names including Allah, Jehovah, Yahweh, Rama, etc. ISKCON devotees chant God’s names in the form of the maha-mantra, or the great prayer for deliverance: Hare Krishna, Hare Krishna, Krishna Krishna, Hare Hare/Hare Rama Hare Rama, Rama Rama, Hare Hare.</p></font></span></div><div style=\"text-align: justify;\"><font size=\"1em\"><span style=\"font-family: times new roman; color: rgb(32, 33, 36); font-weight:normal; text-align: start; margin-right:0px; margin-bottom:20px; margin-left:0px;\"></span></font></div>', NULL, NULL, NULL),
(2, 'contactus', 'Contact Us', 'Palghar,Maharashtra', 'test@gmail.com', 1234567890, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbltemple`
--

CREATE TABLE `tbltemple` (
  `ID` int(5) NOT NULL,
  `TempleName` varchar(250) DEFAULT NULL,
  `TempleLocation` varchar(250) DEFAULT NULL,
  `City` varchar(250) DEFAULT NULL,
  `State` varchar(250) DEFAULT NULL,
  `Country` varchar(250) DEFAULT NULL,
  `Description` mediumtext DEFAULT NULL,
  `TempleImage1` varchar(250) DEFAULT NULL,
  `TempleImage2` varchar(250) DEFAULT NULL,
  `TempleImage3` varchar(250) DEFAULT NULL,
  `CreationDate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbltemple`
--

INSERT INTO `tbltemple` (`ID`, `TempleName`, `TempleLocation`, `City`, `State`, `Country`, `Description`, `TempleImage1`, `TempleImage2`, `TempleImage3`, `CreationDate`) VALUES
(1, 'Govardhan Eco Village', 'Govardhan Ecovillage is located at Galtare, P.O. Hamrapur, Wada Taluka in Palghar Maharashtra.', 'Palghar', 'Maharashtra', 'India', 'GEV Expanded over 100 acres of area, Govardhan Ecovillage is a project of the International Society for Krishna Consciousness. The project is owned and managed by ISKCON Wada. It is the result of an ardent desire of Radhanatha Swami to fulfill the dream of his beloved guru, His Divine Grace A. C. Bhaktivedanta Swami Prabhupada–“To erect for the members and society at large, a holy place of transcendental pastimes, dedicated to the personality of Krishna.”Govardhan Ecovillage is not an overnight establishment, but shape formed over a century of toil, hardship and the constant passion of many. Govardhan Ecovillage is a place that houses several eco-friendly initiatives. Govardhan Ecovillage is implementing several rural development initiatives in many villages nearby with the help of Sri Chaitanya Seva Trust.', '27249634683fc329f9253e3b3fcc7bc1.png', '9e5e7fb384da8494ad0a4c3a5a9feafc.png', '6e8b414ee6563bb84fc777294497f3a1.png', '2023-12-24 11:10:07'),
(2, 'Sri Sri Radha Rasbihari Temple', 'Located in  Juhu, Mumbai', 'Thane', 'Maharashtra', 'India', 'ISKCON Juhu is one of the most visited and magnificent temple complex in the country. It is a spiritual basis in the dry and demanding material life of the financial capital of India.', 'ecc81d2a54d8b6e0c2a3e96880d8bb70.png', '14e752221c76d92a4f7828b7dc265417.png', '2288b41c0ad939223e8c9c881e11e068.png', '2023-12-24 11:24:57'),
(3, 'Sri Sri Jagannath Temple', 'Sri Sri Jagannath Temple, 1st Floor, Ashar Sapphire, Behind Vihangs Inn Hotel, Near D-Mart, Kolshet Road, Thane (W), Thane West, Maharashtra', 'Thane', 'Maharashtra', 'India', 'Shri Shri jagannath baladev and subhadra maharani Temple in Thane, Maharashtra.', '70c6af6506229884ce6417f097f25bbc.png','70c6af6506229884ce6417f097f25bbc.png','70c6af6506229884ce6417f097f25bbc.png', '2023-12-24 11:35:19'),
(4, 'Sri Sri Radha Giridhari Mandir',' Mira Road Hare Krishna Dham, Shristi, Sector 1, Near Royal Collage, Thane, Maharashtra','Mumbai','Maharashtra','India','ISKCON Mira Road was formerly in Bhayandar and by the end of 1996 it was changed to Mira. Their presiding deities are Sri Sri Radha Giridari, Jagganath, Baladev, Subhadra and Gaura Nithai.','852cbb68dfb7f27b715e8dddb04b51dc.png','852cbb68dfb7f27b715e8dddb04b51dc.png','852cbb68dfb7f27b715e8dddb04b51dc.png','2023-12-24 11:39:19'),
(5, 'Sri Sri Radha Gopinath Temple','K M Munshi Marg, Babulnath, Girgaon Chowpatty, Mumbai.','Mumbai','Maharashtra','India','Sri Sri Radha Gopinath Temple or ISKCON Chowpatty as it is more popularly known was built in the late 1980s and has gone through a series of renovation over the years to get its present look.','fa749cca6262ac2f6cfad90cdf28552c.png','fa749cca6262ac2f6cfad90cdf28552c.png','fa749cca6262ac2f6cfad90cdf28552c.png','2024-12-24 11:45:19'),
(6, 'Piramal Vaikunth','Old Mumbai-Agra Road, Bayer Near Shivaji Nagar, Ram Maruti Nagar, Balkum Naka, Thane West, Thane, Maharashtra 400607','Thane', 'Maharashtra', 'India','ISKCON Thane, a project inspired by teachings of Srila Prabhupada has metamorphosed and grown to become a mega platform for devotional service, devotee association, spiritual discourses, spiritual functions, and soul stirring kirtans. ISKCON thane Temple is currently under construction situated in Piramal Vaikunth residential complex in Kolshet, Thane spread over 32 acres. This development will also include an approx. 2.75-acre ISKCON temple complex.','9f12535ca4d74ed458b198272b2fc52e.jpg','2d5c69569bdbaa49a381262905749156.jpg','9f12535ca4d74ed458b198272b2fc52e.jpg','2023-12-24 11:10:07');
-- --------------------------------------------------------

--
-- Table structure for table `tbluser`
--

CREATE TABLE `tbluser` (
  `ID` int(10) NOT NULL,
  `FirstName` varchar(120) DEFAULT NULL,
  `LastName` varchar(120) DEFAULT NULL,
  `MobileNumber` bigint(10) DEFAULT NULL,
  `Email` varchar(120) DEFAULT NULL,
  `Password` varchar(120) DEFAULT NULL,
  `RegDate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbluser`
--

INSERT INTO `tbluser` (`ID`, `FirstName`, `LastName`, `MobileNumber`, `Email`, `Password`, `RegDate`) VALUES
(1, 'Reema', 'Sharma', 7987987897, 'reema@gmail.com', '202cb962ac59075b964b07152d234b70', '2023-11-26 05:49:10'),
(2, 'test', 'test1', 7979879878, 'test@gmail.com', '202cb962ac59075b964b07152d234b70', '2023-12-02 06:03:02'),
(3, 'Anuj', 'Kumar', 1212121212, 'ak@gmail.com', 'f925916e2754e5e03f75dd58a5733251', '2023-12-09 08:58:39');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbladmin`
--
ALTER TABLE `tbladmin`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblbookdarshan`
--
ALTER TABLE `tblbookdarshan`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbldonation`
--
ALTER TABLE `tbldonation`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblfestivals`
--
ALTER TABLE `tblfestivals`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblpage`
--
ALTER TABLE `tblpage`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbltemple`
--
ALTER TABLE `tbltemple`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbluser`
--
ALTER TABLE `tbluser`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `ID` (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbladmin`
--
ALTER TABLE `tbladmin`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tblbookdarshan`
--
ALTER TABLE `tblbookdarshan`
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbldonation`
--
ALTER TABLE `tbldonation`
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tblfestivals`
--
ALTER TABLE `tblfestivals`
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tblpage`
--
ALTER TABLE `tblpage`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbltemple`
--
ALTER TABLE `tbltemple`
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbluser`
--
ALTER TABLE `tbluser`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

ALTER TABLE `tbltemple`
ADD COLUMN `Latitude` DECIMAL(10, 8) DEFAULT NULL AFTER `TempleImage3`,
ADD COLUMN `Longitude` DECIMAL(11, 8) DEFAULT NULL AFTER `Latitude`;


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- CREATE TABLE tbltemplelocation (
--     ID INT AUTO_INCREMENT PRIMARY KEY,
--     TempleName VARCHAR(255) NOT NULL,
--     Latitude VARCHAR(20),
--     Longitude VARCHAR(20)
-- );

-- INSERT INTO tbltemplelocation (ID,TempleName, Latitude, Longitude) VALUES
-- (1,'Govardhan Eco Village', '19.655554907485264', '772.96518989551474'),
-- (2,'Sri Sri Radha Rasbihari Temple', '19.113218730054495', '72.82670474152172'),
-- (3,'Sri Sri Jagannath Temple', '19.274401720110333', '72.95578888603809'),
-- (4,'Sri Sri Radha Giridhari Mandir', '19.271063355843552', '72.87199240326242'),
-- (5,'Sri Sri Radha Gopinath Temple', '18.957822507571954', '72.80985613413505'),
-- (6,'Piramal Vaikunth','19.22397575882109', '72.98938434821147');

-- UPDATE `tbltemple`
-- SET `Latitude` = 19.655554907485264, `Longitude` = 72.96518989551474
-- WHERE `ID` = 1;

-- UPDATE `tbltemple`
-- SET `Latitude` = 19.113218730054495, `Longitude` = 72.82670474152172
-- WHERE `ID` = 2;

-- UPDATE `tbltemple`
-- SET `Latitude` = 19.274401720110333, `Longitude` = 72.95578888603809
-- WHERE `ID` = 3;

-- UPDATE `tbltemple`
-- SET `Latitude` = 19.271063355843552, `Longitude` = 72.87199240326242
-- WHERE `ID` = 4;

-- UPDATE `tbltemple`
-- SET `Latitude` = 18.957892966793818, `Longitude` = 72.80974258015617
-- WHERE `ID` = 5;

-- UPDATE `tbltemple`
-- SET `Latitude` = 19.22423915373441, `Longitude` = 72.9899744341418
-- WHERE `ID` = 6;
 

-- Govardhan Eco Village: https://maps.app.goo.gl/7saqNzvAEBG1atkQ8
-- Sri Sri Radha Rasbihari Temple: https://maps.app.goo.gl/EQMEa5ptAd4gx5RT6
-- Sri Sri Jagannath Temple: https://maps.app.goo.gl/siSbB7E47HMK5D4J7
-- Sri Sri Radha Giridhari Mandir: https://maps.app.goo.gl/gSrZ1TVLSq3GqMx78
-- Sri Sri Radha Gopinath Temple: https://maps.app.goo.gl/CHttQW7LktQZnPYm6
-- Piramal Vaikunth : https://maps.app.goo.gl/ns4TKTmueeAbMti57

-- ALTER TABLE `tbltemple`
-- DROP COLUMN `Latitude`,
-- DROP COLUMN `Longitude`;

-- ALTER TABLE `tbltemple`
-- ADD COLUMN `LocationLink` VARCHAR(255) AFTER `TempleImage3`;

-- UPDATE `tbltemple`
-- SET `LocationLink` = 'https://maps.app.goo.gl/7saqNzvAEBG1atkQ8'
-- WHERE `ID` = 1;

-- UPDATE `tbltemple`
-- SET `LocationLink` = 'https://maps.app.goo.gl/EQMEa5ptAd4gx5RT6'
-- WHERE `ID` = 2;

-- UPDATE `tbltemple`
-- SET `LocationLink` = 'https://maps.app.goo.gl/siSbB7E47HMK5D4J7'
-- WHERE `ID` = 3;

-- UPDATE `tbltemple`
-- SET `LocationLink` = 'https://maps.app.goo.gl/gSrZ1TVLSq3GqMx78'
-- WHERE `ID` = 4;

-- UPDATE `tbltemple`
-- SET `LocationLink` = 'https://maps.app.goo.gl/CHttQW7LktQZnPYm6'
-- WHERE `ID` = 5;

-- UPDATE `tbltemple`
-- SET `LocationLink` = 'https://maps.app.goo.gl/ns4TKTmueeAbMti57'
-- WHERE `ID` = 6;
