-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 15, 2020 at 06:55 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


--
--

-- --------------------------------------------------------

--

CREATE TABLE `admin` (
  `Admin_Id` int(11) NOT NULL,
  `Admin_Username` varchar(50) NOT NULL,
  `Admin_Password` varchar(100) NOT NULL,
  `Last_Login` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--

CREATE TABLE `course` (
  `Course_Id` int(11) NOT NULL,
  `Course_Name` varchar(50) NOT NULL,
  `Uni_Id` int(11) NOT NULL,
  `Course_Type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--

CREATE TABLE `enroll` (
  `Student_Id` int(11) NOT NULL,
  `Course_Id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--

CREATE TABLE `offer` (
  `Offer_Id` int(11) NOT NULL,
  `Course_Id` int(11) NOT NULL,
  `Offer_Type` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
--

CREATE TABLE `student` (
  `Student_Id` int(11) NOT NULL,
  `Student_Name` varchar(60) NOT NULL,
  `Student_Phone` varchar(20) NOT NULL,
  `Student_Email` varchar(80) NOT NULL,
  `Student_Password` varchar(80) NOT NULL,
  `Student_Location` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--

CREATE TABLE `university` (
  `Uni_Id` int(11) NOT NULL,
  `Uni_Name` varchar(50) NOT NULL,
  `Uni_Address` varchar(40) NOT NULL,
  `Uni_Contact` varchar(20) NOT NULL,
  `Uni_Status` varchar(30) NOT NULL DEFAULT 'Pending',
  `Uni_Logo` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

------
--

--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`Admin_Id`);

------
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`Course_Id`),
  ADD KEY `Uni_Id` (`Uni_Id`);

--

--
ALTER TABLE `enroll`
  ADD KEY `Student_Id` (`Student_Id`),
  ADD KEY `Course_Id` (`Course_Id`);

--

--
ALTER TABLE `offer`
  ADD PRIMARY KEY (`Offer_Id`),
  ADD KEY `Course_Id` (`Course_Id`);

--

--
ALTER TABLE `student`
  ADD PRIMARY KEY (`Student_Id`);

--

--
ALTER TABLE `university`
  ADD PRIMARY KEY (`Uni_Id`);

--

--

--

--
ALTER TABLE `admin`
  MODIFY `Admin_Id` int(11) NOT NULL AUTO_INCREMENT;

--

--
ALTER TABLE `course`
  MODIFY `Course_Id` int(11) NOT NULL AUTO_INCREMENT;

--
--
ALTER TABLE `offer`
  MODIFY `Offer_Id` int(11) NOT NULL AUTO_INCREMENT;

--
--
ALTER TABLE `student`
  MODIFY `Student_Id` int(11) NOT NULL AUTO_INCREMENT;

--
--
ALTER TABLE `university`
  MODIFY `Uni_Id` int(11) NOT NULL AUTO_INCREMENT;

----

--
--
ALTER TABLE `course`
  ADD CONSTRAINT `course_ibfk_1` FOREIGN KEY (`Uni_Id`) REFERENCES `university` (`Uni_Id`);

----
ALTER TABLE `enroll`
  ADD CONSTRAINT `enroll_ibfk_1` FOREIGN KEY (`Student_Id`) REFERENCES `student` (`Student_Id`),
  ADD CONSTRAINT `enroll_ibfk_2` FOREIGN KEY (`Course_Id`) REFERENCES `course` (`Course_Id`);

--

--
ALTER TABLE `offer`
  ADD CONSTRAINT `offer_ibfk_1` FOREIGN KEY (`Course_Id`) REFERENCES `course` (`Course_Id`);
COMMIT;
