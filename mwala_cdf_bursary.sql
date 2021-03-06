-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 21, 2022 at 10:21 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mwala_cdf_bursary`
--

-- --------------------------------------------------------

--
-- Table structure for table `application_details`
--

CREATE TABLE `application_details` (
  `id` int(11) NOT NULL,
  `application_serial_no` varchar(50) NOT NULL,
  `student_id` varchar(255) NOT NULL,
  `financial_year_id` varchar(20) NOT NULL,
  `date_of_application` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `application_details`
--

INSERT INTO `application_details` (`id`, `application_serial_no`, `student_id`, `financial_year_id`, `date_of_application`) VALUES
(1, '001', 'CIT/00046/019', 'Y001', '2022-06-21 23:08:41');

-- --------------------------------------------------------

--
-- Table structure for table `course_details`
--

CREATE TABLE `course_details` (
  `id` int(11) NOT NULL,
  `course_id` varchar(50) NOT NULL,
  `course_name` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `course_details`
--

INSERT INTO `course_details` (`id`, `course_id`, `course_name`) VALUES
(1, 'CRS001', 'Bachelor of Science(Information Technology)');

-- --------------------------------------------------------

--
-- Table structure for table `education_details`
--

CREATE TABLE `education_details` (
  `id` int(11) NOT NULL,
  `student_id` varchar(50) NOT NULL,
  `institution_id` varchar(20) NOT NULL,
  `course_id` varchar(50) NOT NULL,
  `course_duration` int(11) NOT NULL DEFAULT 0,
  `start_year` bigint(20) NOT NULL,
  `end_year` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `education_details`
--

INSERT INTO `education_details` (`id`, `student_id`, `institution_id`, `course_id`, `course_duration`, `start_year`, `end_year`) VALUES
(1, 'CIT/00046/019', 'IN001', 'CRS001', 4, 2019, 2023);

-- --------------------------------------------------------

--
-- Table structure for table `financial_year`
--

CREATE TABLE `financial_year` (
  `id` int(11) NOT NULL,
  `year_id` varchar(20) NOT NULL,
  `year` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `financial_year`
--

INSERT INTO `financial_year` (`id`, `year_id`, `year`) VALUES
(1, 'Y001', '2020_2021'),
(2, 'Y002', '2021_2022');

-- --------------------------------------------------------

--
-- Table structure for table `institution_details`
--

CREATE TABLE `institution_details` (
  `id` int(11) NOT NULL,
  `institution_id` varchar(20) NOT NULL,
  `insitution_name` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `institution_details`
--

INSERT INTO `institution_details` (`id`, `institution_id`, `insitution_name`) VALUES
(1, 'IN001', 'Maseno University'),
(2, 'IN002', 'Kenyatta University'),
(3, 'IN003', 'Kisii University');

-- --------------------------------------------------------

--
-- Table structure for table `student_details`
--

CREATE TABLE `student_details` (
  `id` int(11) NOT NULL,
  `kenyan_id` bigint(20) NOT NULL,
  `student_firstname` varchar(255) NOT NULL,
  `student_middlename` varchar(255) DEFAULT NULL,
  `student_lastname` varchar(255) NOT NULL,
  `student_email` varchar(50) NOT NULL,
  `student_phone` bigint(15) NOT NULL,
  `student_school_id` varchar(255) NOT NULL,
  `student_password` varchar(255) NOT NULL,
  `parent_phone` bigint(20) DEFAULT 0,
  `date_of_registration` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_details`
--

INSERT INTO `student_details` (`id`, `kenyan_id`, `student_firstname`, `student_middlename`, `student_lastname`, `student_email`, `student_phone`, `student_school_id`, `student_password`, `parent_phone`, `date_of_registration`) VALUES
(1, 37505349, 'Benson', 'Makau', 'Katumo', 'bensonmakau2000@gmail.com', 254758413462, 'CIT/00046/019', 'ebcfd5a11d7cf5ba89f838fc766be7a4', 254711512051, '2022-06-01 23:37:53');

-- --------------------------------------------------------

--
-- Table structure for table `student_ward_details`
--

CREATE TABLE `student_ward_details` (
  `sno` int(11) NOT NULL,
  `ward_id` varchar(20) NOT NULL,
  `student_kenyan_id` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_ward_details`
--

INSERT INTO `student_ward_details` (`sno`, `ward_id`, `student_kenyan_id`) VALUES
(1, 'MWALA001', 37505349);

-- --------------------------------------------------------

--
-- Table structure for table `study_years`
--

CREATE TABLE `study_years` (
  `id` int(11) NOT NULL,
  `year_no_id` varchar(20) NOT NULL,
  `number_of_years` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `study_years`
--

INSERT INTO `study_years` (`id`, `year_no_id`, `number_of_years`) VALUES
(1, '1YR', 1),
(2, '2YR', 2),
(3, '3YR', 3),
(4, '4YR', 4),
(5, '5YR', 5),
(6, '6YR', 6),
(7, '7YR', 7);

-- --------------------------------------------------------

--
-- Table structure for table `wards_details`
--

CREATE TABLE `wards_details` (
  `sno` int(11) NOT NULL,
  `ward_id` varchar(20) NOT NULL,
  `ward_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `wards_details`
--

INSERT INTO `wards_details` (`sno`, `ward_id`, `ward_name`) VALUES
(1, 'MWALA001', 'Wamunyu'),
(1, 'MWALA002', 'Yathui');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `application_details`
--
ALTER TABLE `application_details`
  ADD PRIMARY KEY (`application_serial_no`),
  ADD KEY `id` (`id`),
  ADD KEY `student_id` (`student_id`),
  ADD KEY `financial_year_id` (`financial_year_id`);

--
-- Indexes for table `course_details`
--
ALTER TABLE `course_details`
  ADD PRIMARY KEY (`course_id`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `education_details`
--
ALTER TABLE `education_details`
  ADD PRIMARY KEY (`student_id`),
  ADD KEY `id` (`id`),
  ADD KEY `institution_id` (`institution_id`),
  ADD KEY `course_id` (`course_id`),
  ADD KEY `course_duration` (`course_duration`),
  ADD KEY `start_year` (`start_year`),
  ADD KEY `end_year` (`end_year`);

--
-- Indexes for table `financial_year`
--
ALTER TABLE `financial_year`
  ADD PRIMARY KEY (`year_id`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `institution_details`
--
ALTER TABLE `institution_details`
  ADD PRIMARY KEY (`institution_id`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `student_details`
--
ALTER TABLE `student_details`
  ADD PRIMARY KEY (`kenyan_id`),
  ADD KEY `sno` (`id`),
  ADD KEY `student_school_id` (`student_school_id`);

--
-- Indexes for table `student_ward_details`
--
ALTER TABLE `student_ward_details`
  ADD PRIMARY KEY (`sno`),
  ADD KEY `student_ward` (`ward_id`),
  ADD KEY `kenyan_id` (`student_kenyan_id`);

--
-- Indexes for table `study_years`
--
ALTER TABLE `study_years`
  ADD PRIMARY KEY (`year_no_id`),
  ADD KEY `id` (`id`),
  ADD KEY `number_of_years` (`number_of_years`);

--
-- Indexes for table `wards_details`
--
ALTER TABLE `wards_details`
  ADD PRIMARY KEY (`ward_id`),
  ADD KEY `sno` (`sno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `application_details`
--
ALTER TABLE `application_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `course_details`
--
ALTER TABLE `course_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `education_details`
--
ALTER TABLE `education_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `financial_year`
--
ALTER TABLE `financial_year`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `institution_details`
--
ALTER TABLE `institution_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `student_details`
--
ALTER TABLE `student_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `student_ward_details`
--
ALTER TABLE `student_ward_details`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `study_years`
--
ALTER TABLE `study_years`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `wards_details`
--
ALTER TABLE `wards_details`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `application_details`
--
ALTER TABLE `application_details`
  ADD CONSTRAINT `financial_year_id` FOREIGN KEY (`financial_year_id`) REFERENCES `financial_year` (`year_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `student_school_id` FOREIGN KEY (`student_id`) REFERENCES `student_details` (`student_school_id`) ON UPDATE CASCADE;

--
-- Constraints for table `education_details`
--
ALTER TABLE `education_details`
  ADD CONSTRAINT `course_id` FOREIGN KEY (`course_id`) REFERENCES `course_details` (`course_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `insititution_rel` FOREIGN KEY (`institution_id`) REFERENCES `institution_details` (`institution_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `student_id` FOREIGN KEY (`student_id`) REFERENCES `student_details` (`student_school_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `study_years` FOREIGN KEY (`course_duration`) REFERENCES `study_years` (`number_of_years`) ON UPDATE CASCADE;

--
-- Constraints for table `student_ward_details`
--
ALTER TABLE `student_ward_details`
  ADD CONSTRAINT `kenyan_id` FOREIGN KEY (`student_kenyan_id`) REFERENCES `student_details` (`kenyan_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `student_ward` FOREIGN KEY (`ward_id`) REFERENCES `wards_details` (`ward_id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
