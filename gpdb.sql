-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 13, 2018 at 03:35 AM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gp_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `a_id` int(3) NOT NULL,
  `a_empNumber` int(4) NOT NULL,
  `a_name` varchar(70) NOT NULL,
  `a_number` varchar(10) NOT NULL,
  `a_email` varchar(70) NOT NULL,
  `a_password` varchar(30) NOT NULL,
  `a_em_name` varchar(90) NOT NULL,
  `a_em_number` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`a_id`, `a_empNumber`, `a_name`, `a_number`, `a_email`, `a_password`, `a_em_name`, `a_em_number`) VALUES
(1, 4451, 'Derek Miller', '0872553674', 'd.miller@gp.ie', 'dmiller10', 'Anne Miller', '0419855721'),
(2, 2, 'Simon Ferguson', '0878452541', 'sferguson@gp.ie', 'Simon123', 'Sharon Ferguson', '0856589654'),
(3, 3002, 'Mairead O\'Reilly', '0854254125', 'moreilly@gp.ie', 'mairead123', 'Liam O\'Reilly', '0874125893');

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

CREATE TABLE `appointments` (
  `app_id` int(3) NOT NULL,
  `p_id` int(3) NOT NULL,
  `ms_id` int(3) NOT NULL,
  `a_id` int(3) NOT NULL,
  `app_time` time NOT NULL,
  `app_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`app_id`, `p_id`, `ms_id`, `a_id`, `app_time`, `app_date`) VALUES
(1, 1, 1, 1, '07:10:00', '2018-12-14'),
(4, 3, 3, 1, '16:05:00', '2018-12-19'),
(5, 3, 3, 1, '16:05:00', '2018-12-19'),
(6, 3, 3, 1, '01:06:00', '2018-12-20');

-- --------------------------------------------------------

--
-- Table structure for table `appointment_requests`
--

CREATE TABLE `appointment_requests` (
  `ar_id` int(3) NOT NULL,
  `p_id` int(3) DEFAULT NULL,
  `p_name` varchar(70) NOT NULL,
  `ms_id` int(3) NOT NULL,
  `ms_name` varchar(70) NOT NULL,
  `ar_type` varchar(50) NOT NULL,
  `ar_number` varchar(10) NOT NULL,
  `ar_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appointment_requests`
--

INSERT INTO `appointment_requests` (`ar_id`, `p_id`, `p_name`, `ms_id`, `ms_name`, `ar_type`, `ar_number`, `ar_date`) VALUES
(22, 2, 'Sharon Fitzgerald', 1, 'Dr. Kevin O\'Connell', 'General Consultation', '0416852369', '2018-12-27'),
(25, 3, 'Steven Riordan', 2, 'Niamh O\'Rourke', 'General Consultation', '0860484129', '2018-12-24'),
(26, 1, 'Cian Tiernan', 3, 'Sandra Kelly', 'Flu Shot', '0879658523', '2018-12-21'),
(27, 1, 'Cian Tiernan', 1, 'Dr. Kevin O Connell', 'General Consultation', '0860303129', '2018-12-20');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `b_id` int(3) NOT NULL,
  `b_title` varchar(30) NOT NULL,
  `b_image` varchar(40) NOT NULL,
  `b_text` varchar(10000) NOT NULL,
  `b_date` date NOT NULL,
  `b_poster` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`b_id`, `b_title`, `b_image`, `b_text`, `b_date`, `b_poster`) VALUES
(1, 'What are cold sores?', 'blog1.jpg', 'Despite the name, when you get painful blisters called cold sores, don\'t blame your cold. Cold sores are caused by a virus, but not the kind that makes you sniffle and sneeze. Instead, they happen because of an infection with the herpes simplex virus (HSV).\r\n\r\nCold Sore Home Treatment\r\nDespite the name, when you get painful blisters called cold sores, don\'t blame your cold. Cold sores are caused by a virus, but not the kind that makes you sniffle and sneeze. Instead, they happen because of an infection with the herpes simplex virus (HSV).\r\n\r\nSymptoms\r\nCold sores, also called fever blisters, can show up anywhere on your body. They\'re most likely to appear on the outside of your mouth and lips, but you can also find them on your nose, cheeks, or fingers.\r\n\r\nAfter the blisters form, you may notice that they break and ooze. A yellow crust or a scab builds up and eventually falls off, revealing new skin underneath.\r\n\r\nThe sores usually last 7 to 10 days and can spread to other people until they crust over completely.', '2018-12-05', 'Dr Kevin O Connell'),
(2, 'Acne', 'blog5.jpg', 'Acne information', '2018-12-18', 'me');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `c_id` int(3) NOT NULL,
  `c_name` varchar(60) NOT NULL,
  `c_email` varchar(50) NOT NULL,
  `c_number` varchar(10) NOT NULL,
  `c_message` varchar(500) NOT NULL,
  `p_id` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`c_id`, `c_name`, `c_email`, `c_number`, `c_message`, `p_id`) VALUES
(3, 'cian tiernan', 'tiernoyt@gmail.com', '860303129', 'hello', 1),
(4, 'cian tiernan', 'tiernoyt@gmail.com', '860303129', 'bye', 1),
(5, 'cian tiernan', 'tiernoyt@gmail.com', '860303129', 'hi', 1);

-- --------------------------------------------------------

--
-- Table structure for table `medical_staff`
--

CREATE TABLE `medical_staff` (
  `ms_id` int(3) NOT NULL,
  `ms_empNumber` int(4) NOT NULL,
  `ms_name` varchar(70) NOT NULL,
  `ms_number` varchar(10) NOT NULL,
  `ms_address` varchar(200) NOT NULL,
  `ms_type` varchar(40) NOT NULL,
  `ms_email` varchar(70) NOT NULL,
  `ms_password` varchar(30) NOT NULL,
  `ms_em_name` varchar(90) NOT NULL,
  `ms_em_number` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `medical_staff`
--

INSERT INTO `medical_staff` (`ms_id`, `ms_empNumber`, `ms_name`, `ms_number`, `ms_address`, `ms_type`, `ms_email`, `ms_password`, `ms_em_name`, `ms_em_number`) VALUES
(1, 1111, 'Dr. Kevin O Connell', '0861234567', '123 fake St', 'GP', 'koc@gp.ie', 'bestgp2k18', 'ma', '7'),
(2, 222, 'Dr. Niamh O\'Rourke', '0874521254', 'Fair Street', 'Doctor', 'norourke@gp.ie', 'niamh123', 'Nora', '0857412563'),
(3, 333, 'Nurse Sandra Kelly', '0865236521', 'Gormanstown', 'Nurse', 'skelly@gp.ie', 'sandra123', 'Edward ', '0854125985'),
(4, 5555, 'Dr. Rachel Fitzgerald', '0856663232', '187 North Road Drogheda Co Louth', 'GP', 'rachelF@dhc.com', 'Rfitz888', 'Brian Fitzgerald', '9856301'),
(5, 7859, 'Dr. Robert Branigan', '0419855369', '17 Six Oaks, Dublin Road, Dublin', 'Nurse', 'brano@gp.ie', 'branos101', 'Dad', '0419822374');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `p_id` int(3) NOT NULL,
  `p_pps` varchar(10) NOT NULL,
  `p_name` varchar(70) NOT NULL,
  `p_address` varchar(200) NOT NULL,
  `p_number` varchar(10) NOT NULL,
  `p_dob` date NOT NULL,
  `p_email` varchar(70) NOT NULL,
  `p_password` varchar(30) NOT NULL,
  `p_medcard` varchar(30) NOT NULL,
  `p_em_name` varchar(90) NOT NULL,
  `p_em_number` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`p_id`, `p_pps`, `p_name`, `p_address`, `p_number`, `p_dob`, `p_email`, `p_password`, `p_medcard`, `p_em_name`, `p_em_number`) VALUES
(1, '2345467G', 'Cian Tiernan', 'Yellowbatter,', '0860303128', '0000-00-00', 'ciant@dkit.ie', 'cian1235', '', 'mam', '0860303129'),
(2, '8236523L', 'Sharon Fitzgerald', 'Donore Rd', '0419585236', '1990-12-27', 'sharonfitz@outlook.com', 'Sharon123', '123456789', 'Mary Murphy', '0867458796'),
(3, '8147598P', 'Steven Riordan', 'Clogherhead', '0854586321', '1990-06-09', 'steveriord@outlook.com', 'steven123', '', 'Sean Riordan', '0874521236');

-- --------------------------------------------------------

--
-- Table structure for table `patient_records`
--

CREATE TABLE `patient_records` (
  `pr_id` int(3) NOT NULL,
  `p_id` int(3) NOT NULL,
  `app_id` int(3) NOT NULL,
  `treatment` varchar(255) NOT NULL,
  `pres_name` varchar(60) DEFAULT NULL,
  `pres_dosage` varchar(20) DEFAULT NULL,
  `pres_duration` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient_records`
--

INSERT INTO `patient_records` (`pr_id`, `p_id`, `app_id`, `treatment`, `pres_name`, `pres_dosage`, `pres_duration`) VALUES
(1, 2, 1, 'Antibiotics', 'Narchoxicol', '75mg', '4 weeks'),
(2, 3, 4, 'Acne', 'Acne Tablets', '50mg', '4');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`app_id`),
  ADD KEY `p_id` (`p_id`),
  ADD KEY `a_id` (`a_id`),
  ADD KEY `ms_id` (`ms_id`);

--
-- Indexes for table `appointment_requests`
--
ALTER TABLE `appointment_requests`
  ADD PRIMARY KEY (`ar_id`),
  ADD KEY `p_id` (`p_id`),
  ADD KEY `ms_id` (`ms_id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`b_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`c_id`),
  ADD KEY `p_id` (`p_id`);

--
-- Indexes for table `medical_staff`
--
ALTER TABLE `medical_staff`
  ADD PRIMARY KEY (`ms_id`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `patient_records`
--
ALTER TABLE `patient_records`
  ADD PRIMARY KEY (`pr_id`),
  ADD KEY `p_id` (`p_id`),
  ADD KEY `app_id` (`app_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `a_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `appointments`
--
ALTER TABLE `appointments`
  MODIFY `app_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `appointment_requests`
--
ALTER TABLE `appointment_requests`
  MODIFY `ar_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `b_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `c_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `medical_staff`
--
ALTER TABLE `medical_staff`
  MODIFY `ms_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `p_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `patient_records`
--
ALTER TABLE `patient_records`
  MODIFY `pr_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `appointments`
--
ALTER TABLE `appointments`
  ADD CONSTRAINT `appointments_ibfk_1` FOREIGN KEY (`p_id`) REFERENCES `patient` (`p_id`),
  ADD CONSTRAINT `appointments_ibfk_2` FOREIGN KEY (`a_id`) REFERENCES `admin` (`a_id`),
  ADD CONSTRAINT `appointments_ibfk_3` FOREIGN KEY (`ms_id`) REFERENCES `medical_staff` (`ms_id`);

--
-- Constraints for table `appointment_requests`
--
ALTER TABLE `appointment_requests`
  ADD CONSTRAINT `appointment_requests_ibfk_1` FOREIGN KEY (`p_id`) REFERENCES `patient` (`p_id`),
  ADD CONSTRAINT `appointment_requests_ibfk_2` FOREIGN KEY (`ms_id`) REFERENCES `medical_staff` (`ms_id`);

--
-- Constraints for table `contact`
--
ALTER TABLE `contact`
  ADD CONSTRAINT `contact_ibfk_1` FOREIGN KEY (`p_id`) REFERENCES `patient` (`p_id`);

--
-- Constraints for table `patient_records`
--
ALTER TABLE `patient_records`
  ADD CONSTRAINT `patient_records_ibfk_1` FOREIGN KEY (`p_id`) REFERENCES `patient` (`p_id`),
  ADD CONSTRAINT `patient_records_ibfk_2` FOREIGN KEY (`app_id`) REFERENCES `appointments` (`app_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
