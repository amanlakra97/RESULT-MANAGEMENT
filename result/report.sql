-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 22, 2021 at 01:14 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `report`
--

-- --------------------------------------------------------

--
-- Table structure for table `1sem`
--

CREATE TABLE `1sem` (
  `regno` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `il_theory` varchar(255) NOT NULL,
  `il_internal` varchar(255) NOT NULL,
  `english_theory` varchar(255) NOT NULL,
  `english_internal` varchar(255) NOT NULL,
  `c_programming_theory` varchar(255) NOT NULL,
  `c_programming_internal` varchar(255) NOT NULL,
  `de_theory` varchar(255) NOT NULL,
  `de_internal` varchar(255) NOT NULL,
  `dm_theory` varchar(255) NOT NULL,
  `dm_internal` varchar(255) NOT NULL,
  `c_lab_theory` varchar(255) NOT NULL,
  `c_lab_internal` varchar(255) NOT NULL,
  `de_lab_theory` varchar(255) NOT NULL,
  `de_lab_internal` varchar(255) NOT NULL,
  `eph_theory` varchar(255) NOT NULL,
  `eph_internal` varchar(255) NOT NULL,
  `ccec` varchar(255) NOT NULL,
  `total_theory` varchar(255) NOT NULL,
  `total_internal` varchar(255) NOT NULL,
  `gpa` varchar(255) NOT NULL,
  `grade` varchar(255) NOT NULL,
  `result` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `1sem`
--

INSERT INTO `1sem` (`regno`, `name`, `il_theory`, `il_internal`, `english_theory`, `english_internal`, `c_programming_theory`, `c_programming_internal`, `de_theory`, `de_internal`, `dm_theory`, `dm_internal`, `c_lab_theory`, `c_lab_internal`, `de_lab_theory`, `de_lab_internal`, `eph_theory`, `eph_internal`, `ccec`, `total_theory`, `total_internal`, `gpa`, `grade`, `result`) VALUES
('16CQSB7111', 'AMAN LAKRA', '45', '30', '55', '25', '45', '23', '45', '20', '66', '40', '30', '12', '28', '13', '25', '30', '40', '450', '160', '7.1', 'A', 'FC'),
('16CQSB7112', 'MANAV PAWHA', '65', '25', '60', '30', '60', '30', '30', '30', '30', '60', '30', '15', '30', '15', '60', '20', '33', '389', '170', '6.3', 'A', 'FC'),
('16CQSB7113', 'TUSHAR C', '63', '28', '48', '27', '55', '25', '65', '22', '65', '45', '28', '14', '22', '14', '65', '25', '45', '456', '123', '7.7', 'A', 'FC'),
('16CQSB7114', 'TUSHAR SHARMA', '65', '22', '54', '25', '65', '23', '68', '25', '65', '36', '27', '15', '25', '12', '62', '24', '49', '320', '175', '6.7', 'A', 'FC'),
('16CQSB7115', 'PRAVIN RANJAN', '46', '23', '65', '24', '45', '28', '45', '24', '68', '48', '26', '12', '24', '13', '55', '28', '25', '501', '159', '8.7', 'A+', 'D'),
('16CQSB7116', 'SABYASACHI PRUSTY', '22', '12', '69', '28', '65', '26', '65', '28', '48', '35', '24', '13', '27', '11', '54', '24', '35', '472', '165', '8.2', 'A+', 'D'),
('16CQSB7117', 'SUBHAM SAHA', '32', '24', '68', '23', '45', '22', '47', '26', '45', '36', '26', '14', '26', '12', '45', '26', '34', '413', '129', '7.6', 'A', 'FC'),
('16CQSB7118', 'UTKARSH SINGH', '35', '3', '65', '22', '66', '28', '48', '27', '70', '38', '28', '15', '28', '14', '53', '24', '37', '456', '220', '6.5', 'A', 'FC'),
('16CQSB7119', 'AMAN TANEJA', '45', '20', '64', '25', '48', '25', '35', '19', '65', '42', '26', '15', '22', '12', '48', '23', '39', '365', '198', '5.6', 'B', 'SC'),
('16CQSB7120', 'SHIVANI SRIVASTAVA', '25', '15', '63', '24', '55', '29', '38', '22', '62', '46', '24', '14', '24', '14', '49', '22', '42', '266', '146', '8.6', 'A+', 'D'),
('16CQSB7121', 'SAHANASHREE B.A.', '62', '25', '62', '22', '52', '22', '42', '25', '55', '35', '25', '12', '22', '12', '45', '28', '43', '298', '150', '7.7', 'A', 'FC'),
('16CQSB7122', 'PRATYAY RAJ', '65', '25', '65', '26', '53', '24', '49', '26', '56', '37', '26', '13', '25', '13', '37', '27', '35', '369', '200', '6.2', 'A', 'FC'),
('16CQSB7123', 'SHIVAM RAJ', '68', '26', '65', '22', '54', '25', '45', '28', '53', '32', '27', '12', '26', '11', '34', '26', '46', '357', '145', '5.8', 'B', 'SC'),
('16CQSB7124', 'ROHIT HALLIKHEDE', '70', '29', '66', '24', '65', '26', '65', '29', '54', '42', '22', '11', '24', '12', '42', '22', '37', '321', '156', '7.5', 'A', 'FC'),
('16CQSB7125', 'PRINCE JAIN', '69', '27', '45', '27', '68', '27', '67', '21', '69', '46', '24', '15', '27', '14', '43', '21', '39', '512', '123', '6.5', 'A', 'FC');

-- --------------------------------------------------------

--
-- Table structure for table `2sem`
--

CREATE TABLE `2sem` (
  `regno` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `il_theory` varchar(255) NOT NULL,
  `il_internal` varchar(255) NOT NULL,
  `english_theory` varchar(255) NOT NULL,
  `english_internal` varchar(255) NOT NULL,
  `ds_theory` varchar(255) NOT NULL,
  `ds_internal` varchar(255) NOT NULL,
  `dbms_theory` varchar(255) NOT NULL,
  `dbms_internal` varchar(255) NOT NULL,
  `nsm_theory` varchar(255) NOT NULL,
  `nsm_internal` varchar(255) NOT NULL,
  `ds_lab_theory` varchar(255) NOT NULL,
  `ds_lab_internal` varchar(255) NOT NULL,
  `dbms_lab_theory` varchar(255) NOT NULL,
  `dbms_lab_internal` varchar(255) NOT NULL,
  `ichr_theory` varchar(255) NOT NULL,
  `ichr_internal` varchar(255) NOT NULL,
  `ccec` varchar(255) NOT NULL,
  `total_theory` varchar(255) NOT NULL,
  `total_internal` varchar(255) NOT NULL,
  `gpa` varchar(255) NOT NULL,
  `grade` varchar(255) NOT NULL,
  `result` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `2sem`
--

INSERT INTO `2sem` (`regno`, `name`, `il_theory`, `il_internal`, `english_theory`, `english_internal`, `ds_theory`, `ds_internal`, `dbms_theory`, `dbms_internal`, `nsm_theory`, `nsm_internal`, `ds_lab_theory`, `ds_lab_internal`, `dbms_lab_theory`, `dbms_lab_internal`, `ichr_theory`, `ichr_internal`, `ccec`, `total_theory`, `total_internal`, `gpa`, `grade`, `result`) VALUES
('16CQSB7111', 'AMAN LAKRA', '45', '30', '55', '25', '45', '23', '45', '20', '66', '40', '30', '12', '28', '13', '25', '30', '40', '450', '160', '7.1', 'A', 'FC'),
('16CQSB7112', 'MANAV PAWHA', '65', '25', '60', '30', '60', '30', '30', '30', '30', '60', '30', '15', '30', '15', '60', '20', '33', '389', '170', '6.3', 'A', 'FC'),
('16CQSB7113', 'TUSHAR C', '63', '28', '48', '27', '55', '25', '65', '22', '65', '45', '28', '14', '22', '14', '65', '25', '45', '456', '123', '7.7', 'A', 'FC'),
('16CQSB7114', 'TUSHAR SHARMA', '65', '22', '54', '25', '65', '23', '68', '25', '65', '36', '27', '15', '25', '12', '62', '24', '49', '320', '175', '6.7', 'A', 'FC'),
('16CQSB7115', 'PRAVIN RANJAN', '46', '23', '65', '24', '45', '28', '45', '24', '68', '48', '26', '12', '24', '13', '55', '28', '25', '501', '159', '8.7', 'A+', 'D'),
('16CQSB7116', 'SABYASACHI PRUSTY', '22', '12', '69', '28', '65', '26', '65', '28', '48', '35', '24', '13', '27', '11', '54', '24', '35', '472', '165', '8.2', 'A+', 'D'),
('16CQSB7117', 'SUBHAM SAHA', '32', '24', '68', '23', '45', '22', '47', '26', '45', '36', '26', '14', '26', '12', '45', '26', '34', '413', '129', '7.6', 'A', 'FC'),
('16CQSB7118', 'UTKARSH SINGH', '35', '3', '65', '22', '66', '28', '48', '27', '70', '38', '28', '15', '28', '14', '53', '24', '37', '456', '220', '6.5', 'A', 'FC'),
('16CQSB7119', 'AMAN TANEJA', '45', '20', '64', '25', '48', '25', '35', '19', '65', '42', '26', '15', '22', '12', '48', '23', '39', '365', '198', '5.6', 'B', 'SC'),
('16CQSB7120', 'SHIVANI SRIVASTAVA', '25', '15', '63', '24', '55', '29', '38', '22', '62', '46', '24', '14', '24', '14', '49', '22', '42', '266', '146', '8.6', 'A+', 'D'),
('16CQSB7121', 'SAHANASHREE B.A.', '62', '25', '62', '22', '52', '22', '42', '25', '55', '35', '25', '12', '22', '12', '45', '28', '43', '298', '150', '7.7', 'A', 'FC'),
('16CQSB7122', 'PRATYAY RAJ', '65', '25', '65', '26', '53', '24', '49', '26', '56', '37', '26', '13', '25', '13', '37', '27', '35', '369', '200', '6.2', 'A', 'FC'),
('16CQSB7123', 'SHIVAM RAJ', '68', '26', '65', '22', '54', '25', '45', '28', '53', '32', '27', '12', '26', '11', '34', '26', '46', '357', '145', '5.8', 'B', 'SC'),
('16CQSB7124', 'ROHIT HALLIKHEDE', '70', '29', '66', '24', '65', '26', '65', '29', '54', '42', '22', '11', '24', '12', '42', '22', '37', '321', '156', '7.5', 'A', 'FC'),
('16CQSB7125', 'PRINCE JAIN', '69', '27', '45', '27', '68', '27', '67', '21', '69', '46', '24', '15', '27', '14', '43', '21', '39', '512', '123', '6.5', 'A', 'FC');

-- --------------------------------------------------------

--
-- Table structure for table `3sem`
--

CREATE TABLE `3sem` (
  `regno` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `il_theory` varchar(255) NOT NULL,
  `il_internal` varchar(255) NOT NULL,
  `english_theory` varchar(255) NOT NULL,
  `english_internal` varchar(255) NOT NULL,
  `cpp_theory` varchar(255) NOT NULL,
  `cpp_internal` varchar(255) NOT NULL,
  `afm_theory` varchar(255) NOT NULL,
  `afm_internal` varchar(255) NOT NULL,
  `os_theory` varchar(255) NOT NULL,
  `os_internal` varchar(255) NOT NULL,
  `cpp_lab_theory` varchar(255) NOT NULL,
  `cpp_lab_internal` varchar(255) NOT NULL,
  `afm_lab_theory` varchar(255) NOT NULL,
  `afm_lab_internal` varchar(255) NOT NULL,
  `cds_theory` varchar(255) NOT NULL,
  `cds_internal` varchar(255) NOT NULL,
  `ccec` varchar(255) NOT NULL,
  `total_theory` varchar(255) NOT NULL,
  `total_internal` varchar(255) NOT NULL,
  `gpa` varchar(255) NOT NULL,
  `grade` varchar(255) NOT NULL,
  `result` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `3sem`
--

INSERT INTO `3sem` (`regno`, `name`, `il_theory`, `il_internal`, `english_theory`, `english_internal`, `cpp_theory`, `cpp_internal`, `afm_theory`, `afm_internal`, `os_theory`, `os_internal`, `cpp_lab_theory`, `cpp_lab_internal`, `afm_lab_theory`, `afm_lab_internal`, `cds_theory`, `cds_internal`, `ccec`, `total_theory`, `total_internal`, `gpa`, `grade`, `result`) VALUES
('16CQSB7111', 'AMAN LAKRA', '45', '30', '55', '25', '45', '23', '45', '20', '66', '40', '30', '12', '28', '13', '25', '30', '40', '450', '160', '7.1', 'A', 'FC'),
('16CQSB7112', 'MANAV PAWHA', '65', '25', '60', '30', '60', '30', '30', '30', '30', '60', '30', '15', '30', '15', '60', '20', '33', '389', '170', '6.3', 'A', 'FC'),
('16CQSB7113', 'TUSHAR C', '63', '28', '48', '27', '55', '25', '65', '22', '65', '45', '28', '14', '22', '14', '65', '25', '45', '456', '123', '7.7', 'A', 'FC'),
('16CQSB7114', 'TUSHAR SHARMA', '65', '22', '54', '25', '65', '23', '68', '25', '65', '36', '27', '15', '25', '12', '62', '24', '49', '320', '175', '6.7', 'A', 'FC'),
('16CQSB7115', 'PRAVIN RANJAN', '46', '23', '65', '24', '45', '28', '45', '24', '68', '48', '26', '12', '24', '13', '55', '28', '25', '501', '159', '8.7', 'A+', 'D'),
('16CQSB7116', 'SABYASACHI PRUSTY', '22', '12', '69', '28', '65', '26', '65', '28', '48', '35', '24', '13', '27', '11', '54', '24', '35', '472', '165', '8.2', 'A+', 'D'),
('16CQSB7117', 'SUBHAM SAHA', '32', '24', '68', '23', '45', '22', '47', '26', '45', '36', '26', '14', '26', '12', '45', '26', '34', '413', '129', '7.6', 'A', 'FC'),
('16CQSB7118', 'UTKARSH SINGH', '35', '3', '65', '22', '66', '28', '48', '27', '70', '38', '28', '15', '28', '14', '53', '24', '37', '456', '220', '6.5', 'A', 'FC'),
('16CQSB7119', 'AMAN TANEJA', '45', '20', '64', '25', '48', '25', '35', '19', '65', '42', '26', '15', '22', '12', '48', '23', '39', '365', '198', '5.6', 'B', 'SC'),
('16CQSB7120', 'SHIVANI SRIVASTAVA', '25', '15', '63', '24', '55', '29', '38', '22', '62', '46', '24', '14', '24', '14', '49', '22', '42', '266', '146', '8.6', 'A+', 'D'),
('16CQSB7121', 'SAHANASHREE B.A.', '62', '25', '62', '22', '52', '22', '42', '25', '55', '35', '25', '12', '22', '12', '45', '28', '43', '298', '150', '7.7', 'A', 'FC'),
('16CQSB7122', 'PRATYAY RAJ', '65', '25', '65', '26', '53', '24', '49', '26', '56', '37', '26', '13', '25', '13', '37', '27', '35', '369', '200', '6.2', 'A', 'FC'),
('16CQSB7123', 'SHIVAM RAJ', '68', '26', '65', '22', '54', '25', '45', '28', '53', '32', '27', '12', '26', '11', '34', '26', '46', '357', '145', '5.8', 'B', 'SC'),
('16CQSB7124', 'ROHIT HALLIKHEDE', '70', '29', '66', '24', '65', '26', '65', '29', '54', '42', '22', '11', '24', '12', '42', '22', '37', '321', '156', '7.5', 'A', 'FC'),
('16CQSB7125', 'PRINCE JAIN', '69', '27', '45', '27', '68', '27', '67', '21', '69', '46', '24', '15', '27', '14', '43', '21', '39', '512', '123', '6.5', 'A', 'FC');

-- --------------------------------------------------------

--
-- Table structure for table `4sem`
--

CREATE TABLE `4sem` (
  `regno` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `il_theory` varchar(255) NOT NULL,
  `il_internal` varchar(255) NOT NULL,
  `english_theory` varchar(255) NOT NULL,
  `english_internal` varchar(255) NOT NULL,
  `vp_theory` varchar(255) NOT NULL,
  `vp_internal` varchar(255) NOT NULL,
  `unix_theory` varchar(255) NOT NULL,
  `unix_internal` varchar(255) NOT NULL,
  `or_theory` varchar(255) NOT NULL,
  `or_internal` varchar(255) NOT NULL,
  `vp_lab_theory` varchar(255) NOT NULL,
  `vp_lab_internal` varchar(255) NOT NULL,
  `unix_lab_theory` varchar(255) NOT NULL,
  `unix_lab_internal` varchar(255) NOT NULL,
  `sdc_theory` varchar(255) NOT NULL,
  `sdc_internal` varchar(255) NOT NULL,
  `ccec` varchar(255) NOT NULL,
  `total_theory` varchar(255) NOT NULL,
  `total_internal` varchar(255) NOT NULL,
  `gpa` varchar(255) NOT NULL,
  `grade` varchar(255) NOT NULL,
  `result` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `4sem`
--

INSERT INTO `4sem` (`regno`, `name`, `il_theory`, `il_internal`, `english_theory`, `english_internal`, `vp_theory`, `vp_internal`, `unix_theory`, `unix_internal`, `or_theory`, `or_internal`, `vp_lab_theory`, `vp_lab_internal`, `unix_lab_theory`, `unix_lab_internal`, `sdc_theory`, `sdc_internal`, `ccec`, `total_theory`, `total_internal`, `gpa`, `grade`, `result`) VALUES
('16CQSB7111', 'AMAN LAKRA', '45', '30', '55', '25', '45', '23', '45', '20', '66', '40', '30', '12', '28', '13', '25', '30', '40', '450', '160', '7.1', 'A', 'FC'),
('16CQSB7112', 'MANAV PAWHA', '65', '25', '60', '30', '60', '30', '30', '30', '30', '60', '30', '15', '30', '15', '60', '20', '33', '389', '170', '6.3', 'A', 'FC'),
('16CQSB7113', 'TUSHAR C', '63', '28', '48', '27', '55', '25', '65', '22', '65', '45', '28', '14', '22', '14', '65', '25', '45', '456', '123', '7.7', 'A', 'FC'),
('16CQSB7114', 'TUSHAR SHARMA', '65', '22', '54', '25', '65', '23', '68', '25', '65', '36', '27', '15', '25', '12', '62', '24', '49', '320', '175', '6.7', 'A', 'FC'),
('16CQSB7115', 'PRAVIN RANJAN', '46', '23', '65', '24', '45', '28', '45', '24', '68', '48', '26', '12', '24', '13', '55', '28', '25', '501', '159', '8.7', 'A+', 'D'),
('16CQSB7116', 'SABYASACHI PRUSTY', '22', '12', '69', '28', '65', '26', '65', '28', '48', '35', '24', '13', '27', '11', '54', '24', '35', '472', '165', '8.2', 'A+', 'D'),
('16CQSB7117', 'SUBHAM SAHA', '32', '24', '68', '23', '45', '22', '47', '26', '45', '36', '26', '14', '26', '12', '45', '26', '34', '413', '129', '7.6', 'A', 'FC'),
('16CQSB7118', 'UTKARSH SINGH', '35', '3', '65', '22', '66', '28', '48', '27', '70', '38', '28', '15', '28', '14', '53', '24', '37', '456', '220', '6.5', 'A', 'FC'),
('16CQSB7119', 'AMAN TANEJA', '45', '20', '64', '25', '48', '25', '35', '19', '65', '42', '26', '15', '22', '12', '48', '23', '39', '365', '198', '5.6', 'B', 'SC'),
('16CQSB7120', 'SHIVANI SRIVASTAVA', '25', '15', '63', '24', '55', '29', '38', '22', '62', '46', '24', '14', '24', '14', '49', '22', '42', '266', '146', '8.6', 'A+', 'D'),
('16CQSB7121', 'SAHANASHREE B.A.', '62', '25', '62', '22', '52', '22', '42', '25', '55', '35', '25', '12', '22', '12', '45', '28', '43', '298', '150', '7.7', 'A', 'FC'),
('16CQSB7122', 'PRATYAY RAJ', '65', '25', '65', '26', '53', '24', '49', '26', '56', '37', '26', '13', '25', '13', '37', '27', '35', '369', '200', '6.2', 'A', 'FC'),
('16CQSB7123', 'SHIVAM RAJ', '68', '26', '65', '22', '54', '25', '45', '28', '53', '32', '27', '12', '26', '11', '34', '26', '46', '357', '145', '5.8', 'B', 'SC'),
('16CQSB7124', 'ROHIT HALLIKHEDE', '70', '29', '66', '24', '65', '26', '65', '29', '54', '42', '22', '11', '24', '12', '42', '22', '37', '321', '156', '7.5', 'A', 'FC'),
('16CQSB7125', 'PRINCE JAIN', '69', '27', '45', '27', '68', '27', '67', '21', '69', '46', '24', '15', '27', '14', '43', '21', '39', '512', '123', '6.5', 'A', 'FC');

-- --------------------------------------------------------

--
-- Table structure for table `5sem`
--

CREATE TABLE `5sem` (
  `regno` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `dcn_theory` varchar(255) NOT NULL,
  `dcn_internal` varchar(255) NOT NULL,
  `se_theory` varchar(255) NOT NULL,
  `se_internal` varchar(255) NOT NULL,
  `ca_theory` varchar(255) NOT NULL,
  `ca_internal` varchar(255) NOT NULL,
  `java_theory` varchar(255) NOT NULL,
  `java_internal` varchar(255) NOT NULL,
  `alp_theory` varchar(255) NOT NULL,
  `alp_internal` varchar(255) NOT NULL,
  `java_lab_theory` varchar(255) NOT NULL,
  `java_lab_internal` varchar(255) NOT NULL,
  `alp_lab_theory` varchar(255) NOT NULL,
  `alp_lab_internal` varchar(255) NOT NULL,
  `project_theory` varchar(255) NOT NULL,
  `project_internal` varchar(255) NOT NULL,
  `bf_theory` varchar(255) NOT NULL,
  `bf_internal` varchar(255) NOT NULL,
  `total_theory` varchar(255) NOT NULL,
  `total_internal` varchar(255) NOT NULL,
  `gpa` varchar(255) NOT NULL,
  `grade` varchar(255) NOT NULL,
  `result` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `5sem`
--

INSERT INTO `5sem` (`regno`, `name`, `dcn_theory`, `dcn_internal`, `se_theory`, `se_internal`, `ca_theory`, `ca_internal`, `java_theory`, `java_internal`, `alp_theory`, `alp_internal`, `java_lab_theory`, `java_lab_internal`, `alp_lab_theory`, `alp_lab_internal`, `project_theory`, `project_internal`, `bf_theory`, `bf_internal`, `total_theory`, `total_internal`, `gpa`, `grade`, `result`) VALUES
('15CQSB7116', 'MOHIT', '56', '66', '65', '65', '65', '65', '65', '66', '5', '55', '55', '55', '55', '55', '55', '5', '5', '65', '555', '565', '5.5', 'A', 'FC'),
('16CQSB7111', 'AMAN LAKRA', '55', '25', '69', '45', '86', '25', '67', '26', '66', '30', '35', '15', '35', '15', '100', '50', '65', '30', '560', '250', '7.9', 'A+', 'FC'),
('16CQSB7120', 'MANAV PAHWA', '55', '23', '45', '35', '44', '35', '45', '45', '55', '55', '33', '8', '12', '7', '35', '55', '75', '75', '450', '330', '6.1', 'AA', 'DFC');

-- --------------------------------------------------------

--
-- Table structure for table `6sem`
--

CREATE TABLE `6sem` (
  `regno` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `toc_theory` varchar(255) NOT NULL,
  `toc_internal` varchar(255) NOT NULL,
  `sp_theory` varchar(255) NOT NULL,
  `sp_internal` varchar(255) NOT NULL,
  `cns_theory` varchar(255) NOT NULL,
  `cns_internal` varchar(255) NOT NULL,
  `wp_theory` varchar(255) NOT NULL,
  `wp_internal` varchar(255) NOT NULL,
  `wp_lab_theory` varchar(255) NOT NULL,
  `wp_lab_internal` varchar(255) NOT NULL,
  `project_theory` varchar(255) NOT NULL,
  `project_internal` varchar(255) NOT NULL,
  `ei_theory` varchar(255) NOT NULL,
  `ei_internal` varchar(255) NOT NULL,
  `total_theory` varchar(255) NOT NULL,
  `total_internal` varchar(255) NOT NULL,
  `gpa` varchar(255) NOT NULL,
  `grade` varchar(255) NOT NULL,
  `result` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `6sem`
--

INSERT INTO `6sem` (`regno`, `name`, `toc_theory`, `toc_internal`, `sp_theory`, `sp_internal`, `cns_theory`, `cns_internal`, `wp_theory`, `wp_internal`, `wp_lab_theory`, `wp_lab_internal`, `project_theory`, `project_internal`, `ei_theory`, `ei_internal`, `total_theory`, `total_internal`, `gpa`, `grade`, `result`) VALUES
('16CQSB7111', 'AMAN LAKRA', '85', '45', '45', '50', '56', '43', '67', '45', '30', '15', '165', '85', '66', '25', '612', '260', '7.1', 'A+', 'D');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(1, 'tushar', 'tushar@gmail.com', 'tushar'),
(2, 'manav', 'pahwamanav1@gmail.com', 'manav'),
(3, 'Aman Lakra', 'aman@gmail.com', 'aman'),
(4, 'Admin', 'admin@gmail.com', 'admin'),
(5, 'nilesh', 'nilest123@gmail.com', 'nilesh');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `1sem`
--
ALTER TABLE `1sem`
  ADD PRIMARY KEY (`regno`);

--
-- Indexes for table `2sem`
--
ALTER TABLE `2sem`
  ADD PRIMARY KEY (`regno`);

--
-- Indexes for table `3sem`
--
ALTER TABLE `3sem`
  ADD PRIMARY KEY (`regno`);

--
-- Indexes for table `4sem`
--
ALTER TABLE `4sem`
  ADD PRIMARY KEY (`regno`);

--
-- Indexes for table `5sem`
--
ALTER TABLE `5sem`
  ADD PRIMARY KEY (`regno`);

--
-- Indexes for table `6sem`
--
ALTER TABLE `6sem`
  ADD PRIMARY KEY (`regno`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
