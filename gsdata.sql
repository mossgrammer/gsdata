-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 27, 2018 at 04:48 AM
-- Server version: 5.7.17-log
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gsdata`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_computer`
--

CREATE TABLE `tbl_computer` (
  `ComputerID` int(10) NOT NULL,
  `ComName` tinytext NOT NULL,
  `ComUser` tinytext NOT NULL,
  `ComPO` tinytext NOT NULL,
  `ComIV` tinytext NOT NULL,
  `ComService` tinytext NOT NULL,
  `ComMonitor` tinytext NOT NULL,
  `ComMouse` tinytext NOT NULL,
  `ComKeyboard` tinytext NOT NULL,
  `ComDate` date NOT NULL,
  `ComBranch` tinytext NOT NULL,
  `ComNote` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_computer`
--

INSERT INTO `tbl_computer` (`ComputerID`, `ComName`, `ComUser`, `ComPO`, `ComIV`, `ComService`, `ComMonitor`, `ComMouse`, `ComKeyboard`, `ComDate`, `ComBranch`, `ComNote`) VALUES
(1, 'OptiPlex 3050 Micro', 'IT-Chatchalit / Chatchalit Chunak', '4500037136', 'SR60-0497', '1R46GH2', 'CN0JF27GFCC0077EAUDB', 'CN0NRG41PRC0076M0417', '', '2017-11-15', 'HM', ''),
(2, 'OptiPlex 3050 Micro', 'IB-Angkana.wan / Angkana Wangvanitchakorn', '4500037136', 'SR60-0497', '26TJGH2', 'CN0JF27GFCC0077EAM9B', 'CN0NRG41PRC0076M03ZY', '', '0000-00-00', 'HM', ''),
(3, 'OptiPlex 3050 Small', 'IB-Papisar / Papisar Luenam', '4500037136', 'SR60-0497', '3JMJGH2', '', 'CN0NRG41PRC0076M040C', '', '2017-10-20', 'HM', ''),
(4, 'OptiPlex 3050 Small', 'OT-Kamthorn  Kamthorn Patanakaeo', '4500037136', 'SR60-0497', '3WZJGH2', '', 'CN0NRG41PRC0076M041J', '', '2017-01-11', 'RS', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_login`
--

CREATE TABLE `tbl_login` (
  `UserID` int(10) NOT NULL,
  `Username` tinytext NOT NULL,
  `Password` tinytext NOT NULL,
  `Name` text NOT NULL,
  `LoginStatus` int(1) NOT NULL,
  `LastUpdate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_login`
--

INSERT INTO `tbl_login` (`UserID`, `Username`, `Password`, `Name`, `LoginStatus`, `LastUpdate`) VALUES
(1, 'Admin', '12345678', '', 0, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_notebook`
--

CREATE TABLE `tbl_notebook` (
  `NotebookID` int(10) NOT NULL,
  `NoteName` tinytext NOT NULL,
  `NoteUser` tinytext NOT NULL,
  `NoteService` tinytext NOT NULL,
  `NoteMonitor` tinytext NOT NULL,
  `NoteMouse` tinytext NOT NULL,
  `NoteKeyboard` tinytext NOT NULL,
  `NoteBranch` tinytext NOT NULL,
  `NoteDocking` tinytext NOT NULL,
  `NoteDate` date NOT NULL,
  `NotePO` tinytext NOT NULL,
  `NoteIV` tinytext NOT NULL,
  `NoteNote` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Note';

--
-- Dumping data for table `tbl_notebook`
--

INSERT INTO `tbl_notebook` (`NotebookID`, `NoteName`, `NoteUser`, `NoteService`, `NoteMonitor`, `NoteMouse`, `NoteKeyboard`, `NoteBranch`, `NoteDocking`, `NoteDate`, `NotePO`, `NoteIV`, `NoteNote`) VALUES
(1, 'Latitude 5480', 'IT-Chatchalit / Chatchalit Chunak', '1R46GH2', '', 'CN0NRG41PRC0076M0417', '', 'HM', '', '2017-11-15', '4500037136', 'SR60-0497', ''),
(2, 'Latitude 7480', 'MGT-Sarayut / Sarayut Chirasavinuprapand', '16JQGH2', 'CN0NRG41PRC0076M03V6', 'CN0JF27GFCC0077EAWLB', 'CN062VYNLO30078B0GC6', 'HM', 'HC752L2', '2017-01-11', '4500037136', 'SR60-0497', ''),
(3, 'Latitude 7480', 'MGT-Supadej / Supadej Chirasavinuprapand', '1WPQGH2', 'CN0JF27GFCC0077EAWMB', 'CN0NRG41PRC0076M03V2', 'CN062VYNLO30078B0GCC', 'RS', 'BC752L2', '2017-09-11', '4500037136', 'SR60-0497', ''),
(4, 'Latitude 7480', 'MGT-Jaraspong / Jaraspong Hutasingh', '4TBQGH2', 'CN0JF27GFCC0077EAWGB', 'CN0NRG41PRC0076M03V3', 'CN062VYNLO30078B0GCA', 'HM', 'BG752L2', '2017-02-11', '4500037136', 'SR60-0497', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_printer`
--

CREATE TABLE `tbl_printer` (
  `PrinterID` int(10) NOT NULL,
  `PrintName` tinytext NOT NULL,
  `PrintPO` tinytext NOT NULL,
  `PrintIV` tinytext NOT NULL,
  `PrintService` tinytext NOT NULL,
  `PrintBranch` tinytext NOT NULL,
  `PrintDepart` tinytext NOT NULL,
  `PrintDate` date NOT NULL,
  `PrintNote` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_projector`
--

CREATE TABLE `tbl_projector` (
  `ProjectorID` int(10) NOT NULL,
  `ProName` tinytext NOT NULL,
  `ProPO` tinytext NOT NULL,
  `ProIV` tinytext NOT NULL,
  `ProService` tinytext NOT NULL,
  `ProBranch` tinytext NOT NULL,
  `ProRoom` tinytext NOT NULL,
  `ProDate` date NOT NULL,
  `ProNote` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_computer`
--
ALTER TABLE `tbl_computer`
  ADD PRIMARY KEY (`ComputerID`);

--
-- Indexes for table `tbl_login`
--
ALTER TABLE `tbl_login`
  ADD PRIMARY KEY (`UserID`);

--
-- Indexes for table `tbl_notebook`
--
ALTER TABLE `tbl_notebook`
  ADD PRIMARY KEY (`NotebookID`);

--
-- Indexes for table `tbl_printer`
--
ALTER TABLE `tbl_printer`
  ADD PRIMARY KEY (`PrinterID`);

--
-- Indexes for table `tbl_projector`
--
ALTER TABLE `tbl_projector`
  ADD PRIMARY KEY (`ProjectorID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_computer`
--
ALTER TABLE `tbl_computer`
  MODIFY `ComputerID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tbl_login`
--
ALTER TABLE `tbl_login`
  MODIFY `UserID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_notebook`
--
ALTER TABLE `tbl_notebook`
  MODIFY `NotebookID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tbl_printer`
--
ALTER TABLE `tbl_printer`
  MODIFY `PrinterID` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_projector`
--
ALTER TABLE `tbl_projector`
  MODIFY `ProjectorID` int(10) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
