-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 04, 2022 at 11:47 AM
-- Server version: 8.0.18
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ims`
--

-- --------------------------------------------------------

--
-- Table structure for table `bincard`
--

CREATE TABLE `bincard` (
  `Bin_Card` int(11) NOT NULL,
  `Stock_Num` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `Description` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `Location` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `Interchangeability` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `Model` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `Qty_per_box` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `Catagory` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `Condition` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `U/M` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `Light_Box_per_Stack` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `Date` date NOT NULL,
  `Vouch_No` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `Recived_from` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `Lot_No` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `Qty_Issued` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `Balance` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `Mo_of_Box` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `Posted_by` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `Department` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `Created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bincard`
--

INSERT INTO `bincard` (`Bin_Card`, `Stock_Num`, `Description`, `Location`, `Interchangeability`, `Model`, `Qty_per_box`, `Catagory`, `Condition`, `U/M`, `Light_Box_per_Stack`, `Date`, `Vouch_No`, `Recived_from`, `Lot_No`, `Qty_Issued`, `Balance`, `Mo_of_Box`, `Posted_by`, `Department`, `Created`) VALUES
(5, '5464', '', '', '', '', '', '', '', '', '', '2022-12-04', '', '', '', '', '', '', '', 'Spear', '2022-12-04 10:59:32');

-- --------------------------------------------------------

--
-- Table structure for table `model_1`
--

CREATE TABLE `model_1` (
  `No` int(11) NOT NULL,
  `Supplier` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `Category` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `Prnumber` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `Date` date NOT NULL,
  `InvoiceNo` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `MakerM` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `PO` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `Postedby` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `tNo` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `StockNo` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `Description` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `UN` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `Qty` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `UnitPrice` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `Amount` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `Location` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `Remark` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `Inspected` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `RecbyName` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `AUTHby` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `Position` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `Created` timestamp NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `model_1`
--

INSERT INTO `model_1` (`No`, `Supplier`, `Category`, `Prnumber`, `Date`, `InvoiceNo`, `MakerM`, `PO`, `Postedby`, `tNo`, `StockNo`, `Description`, `UN`, `Qty`, `UnitPrice`, `Amount`, `Location`, `Remark`, `Inspected`, `RecbyName`, `AUTHby`, `Position`, `Created`) VALUES
(4, 'Nahom', 'Nahom', 'Nahom', '2022-11-01', 'Nahom', 'NahomNahom', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'transit', '2022-11-14 07:24:21');

-- --------------------------------------------------------

--
-- Table structure for table `model_19`
--

CREATE TABLE `model_19` (
  `ID` int(11) NOT NULL,
  `Department` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `Item_NO` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `No_of_entry` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `Classification` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `Store_No` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `Shelf_No` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `Name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `Received` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `Day` date NOT NULL,
  `FromG` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `Serial_No` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `Description` mediumtext CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `Model` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `Series` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `Quantity` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `Unit_Price` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `Total_price` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `Deliverer_Donor` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `Deliverer_Receipient` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `model_19`
--

INSERT INTO `model_19` (`ID`, `Department`, `Item_NO`, `No_of_entry`, `Classification`, `Store_No`, `Shelf_No`, `Name`, `Received`, `Day`, `FromG`, `Serial_No`, `Description`, `Model`, `Series`, `Quantity`, `Unit_Price`, `Total_price`, `Deliverer_Donor`, `Deliverer_Receipient`) VALUES
(11, 'Spear', 'bngn', 'dfhdfhhdh', 'dfhdfhhdh', 'dfhdfhhdh', 'dfhdfhhdh', 'dfhdfhhdhdfhdfhhdh', 'dfhdfhhdh', '2022-12-02', 'dfhdfhhdh', 'dfhdfhhdh', 'dfhdfhhdh', 'dfhdfhhdh', 'dfhdfhhdh', 'dfhdfhhdh', 'dfhdfhhdh', 'v', 'dfhdfhhdh', 'dfhdfhhdh'),
(12, 'Spear', '65', '65', 'computer', '6', '23', 'Gen Nahom Mekonen', 'xsxsx', '2022-12-04', 'gofa', '00001900', 'copmuter', 'hp', '12', '02', '50', '20', 'micheal', 'yohatane');

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE `user_info` (
  `ID` int(11) NOT NULL,
  `UserName` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `Full_Name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `Phone` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `Position` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `Pword` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`ID`, `UserName`, `Full_Name`, `Phone`, `Position`, `Pword`, `created`) VALUES
(30, '@YoniMac', 'Addisu Afework', '+2511195747474', 'Transit', '81dd6f9df4c6b7ac9141d05265229bdb845827b1', '2022-11-27 12:11:41'),
(32, '@Nahoo', 'Anbassa Bemnet', '+2511195747474', 'Admin', 'b1fccfc7962abc4caf9267deecceb4601245e675', '2022-11-27 12:27:06'),
(33, '@Biruk', 'Biruk Cherenet', '+2514584845121', 'HF', 'f6b6f6b9c1180a222e1d3eb08f9763b4d8a71c45', '2022-11-29 10:24:25'),
(36, '@Hirut', 'Hirut Yidnekachew', '+2519451251510', 'Electronics', '79875972431180be142619eca1d48f6d427ccec8', '2022-11-29 10:31:01'),
(37, '@EskenderFikru', 'Eskender Fikru', '+251458475542', 'Power', '558b9790f6fe50b34c14e83df9665f3ad1e8fbb5', '2022-11-29 11:05:35'),
(38, '@Mikael', 'Mikiael Kebede', '+251954746652', 'Transit', '35faac0b17474a2b8a7aa4513d541471a68b31a8', '2022-12-04 09:59:09'),
(39, '@NahooMacm', 'Yonatan Mekonnen Debebe', '+251982004856', 'Spear', 'ff13a5a6883e8bfc48365b537dbdbf27ec20640b', '2022-12-04 10:48:07'),
(40, '@micheal', 'micheal Abebayehu', '+251095446633', 'HF', '4cd88e344f94e8113dcfce1990383e79df8b64d0', '2022-12-04 11:45:06');

-- --------------------------------------------------------

--
-- Table structure for table `user_profile`
--

CREATE TABLE `user_profile` (
  `Photo_ID` int(11) NOT NULL,
  `filename` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `size` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `UserName` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_profile`
--

INSERT INTO `user_profile` (`Photo_ID`, `filename`, `type`, `size`, `UserName`, `created`) VALUES
(13, 'R (2).jfif', 'image/jpeg', '204388', '@Biruk', '2022-11-29 10:33:07'),
(14, 'unnamed (1).jpg', 'image/jpeg', '65405', '@YoniMac', '2022-11-29 10:35:33'),
(15, 'OIP.jfif', 'image/jpeg', '15713', '@NahooMac', '2022-11-29 10:36:23'),
(16, 'R (1).jfif', 'image/jpeg', '372343', '@Hirut', '2022-11-29 10:39:58'),
(17, 'OIP (1).jfif', 'image/jpeg', '5563', '@Eskender', '2022-11-29 11:02:53'),
(18, 'Mamadou Barry.jpg', 'image/jpeg', '8988', '@Nahoo', '2022-11-29 11:03:37'),
(19, 'J6wz2Md5_400x400.jpg', 'image/jpeg', '15203', '@EskenderFikru', '2022-11-29 11:05:57'),
(20, 'Mamadou Barry.jpg', 'image/jpeg', '8988', '@Nahoo', '2022-11-29 11:06:56'),
(21, 'Mamadou Barry.jpg', 'image/jpeg', '8988', '@Nahoo', '2022-11-29 11:07:14'),
(22, 'R (1).jfif', 'image/jpeg', '372343', '@Hirut', '2022-11-30 09:42:16'),
(23, 'R (1).jfif', 'image/jpeg', '372343', '@Hirut', '2022-11-30 09:42:42'),
(24, 'u.jpg', 'image/jpeg', '21651', '@NahooMac', '2022-12-02 10:25:21');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bincard`
--
ALTER TABLE `bincard`
  ADD PRIMARY KEY (`Bin_Card`);

--
-- Indexes for table `model_1`
--
ALTER TABLE `model_1`
  ADD PRIMARY KEY (`No`);

--
-- Indexes for table `model_19`
--
ALTER TABLE `model_19`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `user_info`
--
ALTER TABLE `user_info`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `user_profile`
--
ALTER TABLE `user_profile`
  ADD PRIMARY KEY (`Photo_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bincard`
--
ALTER TABLE `bincard`
  MODIFY `Bin_Card` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `model_1`
--
ALTER TABLE `model_1`
  MODIFY `No` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `model_19`
--
ALTER TABLE `model_19`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `user_info`
--
ALTER TABLE `user_info`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `user_profile`
--
ALTER TABLE `user_profile`
  MODIFY `Photo_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
