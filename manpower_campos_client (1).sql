-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 14, 2024 at 03:31 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `manpower_campos_client`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_jobs`
--

CREATE TABLE `admin_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `location` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin_jobs`
--

INSERT INTO `admin_jobs` (`id`, `location`, `title`, `created_at`, `updated_at`) VALUES
(1, 'MAKATI, NATIONAL CAPITAL REGION', 'HUMAN RESOURCES', '2024-07-11 10:22:37', '2024-08-06 09:16:38'),
(2, 'MAKATI, NATIONAL CAPITAL REGION', 'GENERAL ACCOUNTING', '2024-07-11 10:34:00', '2024-08-06 09:07:49'),
(3, 'MAKATI, NATIONAL CAPITAL REGION', 'ADMIN STAFF', '2024-07-11 10:34:10', '2024-08-06 09:08:10'),
(4, 'MAKATI, NATIONAL CAPITAL REGION', 'LIAISON ASSISTANT', '2024-07-11 10:34:44', '2024-07-11 10:34:44'),
(11, 'ORTIGAS, NATIONAL CAPITAL REGION', 'ELECTRICAL ENGINEER', '2024-08-06 09:09:07', '2024-08-06 09:09:07'),
(12, 'MAKATI, NATIONAL CAPITAL REGION', 'CERTIFIED PUBLIC ACCOUNTANT', '2024-08-06 09:13:01', '2024-08-06 09:13:01');

-- --------------------------------------------------------

--
-- Table structure for table `applications`
--

CREATE TABLE `applications` (
  `id` bigint UNSIGNED NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `position` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` datetime DEFAULT NULL,
  `interview_date` datetime DEFAULT NULL,
  `date_of_interview` datetime DEFAULT NULL,
  `resume` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Pending',
  `applicant_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Accepted',
  `attended` text COLLATE utf8mb4_unicode_ci,
  `new_date` date DEFAULT NULL,
  `phone` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `awards`
--

CREATE TABLE `awards` (
  `id` bigint UNSIGNED NOT NULL,
  `companyname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `companyimage` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `awards`
--

INSERT INTO `awards` (`id`, `companyname`, `description`, `companyimage`, `created_at`, `updated_at`) VALUES
(1, 'Mega Job Fair Activity ', 'appreciation', '1720810072.jpg', '2024-07-13 01:47:52', '2024-07-13 01:47:52'),
(2, 'Arriba Career Fair', 'participation', '1720810252.jpg', '2024-07-13 01:50:52', '2024-07-13 01:50:52'),
(3, 'Buhay at kabuhayan tungo sa Maringal na Maynila', 'participation', '1720810314.jpg', '2024-07-13 01:51:54', '2024-07-13 01:51:54'),
(4, 'Kalinga sa Maynila PESO Job Fair', 'participation', '1720810331.jpg', '2024-07-13 01:52:11', '2024-07-13 01:52:11'),
(5, 'Certificate of Accreditation', 'appreciation', '1720810348.jpg', '2024-07-13 01:52:28', '2024-07-13 01:52:28'),
(6, 'Certificate of Accreditation', 'accreditation', '1720810372.jpg', '2024-07-13 01:52:52', '2024-07-13 01:52:52'),
(7, '4th Quarter Mega Job Fair', 'appreciation', '1720810390.jpg', '2024-07-13 01:53:10', '2024-07-13 01:53:10'),
(8, 'Certification', 'certification', '1720810418.jpg', '2024-07-13 01:53:38', '2024-07-13 01:53:38'),
(9, 'Certificate of Accreditation', 'accreditation', '1720810656.jpg', '2024-07-13 01:57:36', '2024-07-13 01:57:36'),
(10, 'Certificate of Accreditation', 'accreditation', '1720810701.jpg', '2024-07-13 01:58:21', '2024-07-13 01:58:21'),
(11, 'T.I.P Career Fair 2024', 'participation', '1720810730.jpg', '2024-07-13 01:58:50', '2024-07-13 01:58:50'),
(12, 'Buhay at kabuhayan tungo sa Maringal na Maynila', 'appreciation', '1722402873.jpg', '2024-07-31 05:14:33', '2024-07-31 05:14:33'),
(13, 'Makati Job Fair', 'appreciation', '1722475335.jpg', '2024-08-01 01:22:15', '2024-08-01 01:22:15');

-- --------------------------------------------------------

--
-- Table structure for table `backends`
--

CREATE TABLE `backends` (
  `id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `companyname` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `position` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `companyimage` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `awards` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `number` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bulletins`
--

CREATE TABLE `bulletins` (
  `id` bigint UNSIGNED NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bulletins`
--

INSERT INTO `bulletins` (`id`, `title`, `description`, `link`, `created_at`, `updated_at`) VALUES
(1, 'DOUBLE PAY FOR EMPLOYEES WHO WILL WORK ON JUNE 12 – DOLE', 'MANILA – Private sector workers who will report for work on June 12, Independence Day, a regular holiday, are entitled to receive double pay or 200 percent of their salary for the day. In a labor advisory issued on May 29, Department of Labor and Employment (DOLE) Secretary Bienvenido Laguesma reminded employers to follow the pay rules for holidays under Proclamation 368, series of 2023, signed by President Ferdinand R. Marcos Jr.', 'https://beta.pna.gov.ph/articles/1226507', '2024-07-17 03:22:06', '2024-07-17 03:22:06'),
(2, 'DEPARTMENT OF LABOR AND EMPLOYMENT STATEMENT ON WAGE INCREASES', 'In the current system, Congress delegated the power to adjust minimum wages at the regional level with the participation of representatives of workers and employers to the Regional Tripartite Wages and Productivity Boards (RTWPBs). The process is under the supervision of the National Wages and Productivity Commission (NWPC), which is an agency attached to the Department of Labor and Employment (DOLE). In 2013, Congress passed Republic Act No. 10361, otherwise known as the Batas Kasambahay. Under this law, the RTWPBs now have the mandate to set minimum wages for domestic or household workers.', 'https://ils.dole.gov.ph/policy-advocacies/media-resources/news/department-of-labor-and-employment-statement-on-wage-increases', '2024-07-17 03:38:43', '2024-07-17 03:38:43'),
(3, 'CHANGES TO PHL STATUTORY CONTRIBUTIONS IN 2024', 'As the year draws to a close, employees and employers closely monitor the statutory contributions landscape that includes government agencies, such as the Social Security System (SSS), Philippine Health Insurance Corp. (PhilHealth) and Home Development Mutual Fund (Pag-IBIG), especially when it comes to changes in contribution rates and premiums.', 'https://kpmg.com/ph/en/home/insights/2023/12/changes-to-phl-statutory-contributions-in-2024.html', '2024-07-17 03:43:54', '2024-07-17 03:43:54'),
(4, 'COMPUTING OVERTIME PAY IN THE PHILIPPINES', 'Overtime pay is the compensation employers pay for any work beyond eight (8) hours a day or over 40 hours a week. However, work may be performed beyond the required hours. But employees who render more than 40 hours of work a week are entitled to a premium pay rate for the extra work.', 'https://www.eezi.com/calculating-overtime-pay-in-the-philippines/', '2024-07-17 03:44:15', '2024-07-17 03:44:15'),
(5, 'SCHEDULE OF SOCIAL SECURITY (SS), EMPLOYEES’ COMPENSATION (EC), AND WORKERS’ INVESTMENT AND SAVINGS PROGRAMS (WISP) CONTRIBUTIONS EFFECTIVE JANUARY 2023', 'Employer (ER) refers to the entity or individual who hires employees and is responsible for deducting SSS contributions from their employees’ salaries. Employee (EE) refers to the individual hired by an employer who contributes a portion of their salary to the SSS.', 'https://www.sss.gov.ph/sss/DownloadContent?fileName=2023-Schedule-of-Contributions.pdf', '2024-07-17 03:44:35', '2024-07-17 03:44:35'),
(6, 'DOUBLE PAY FOR EMPLOYEES WHO WILL WORK ON JUNE 12 – DOLE', 'MANILA – Private sector workers who will report for work on June 12, Independence Day, a regular holiday, are entitled to receive double pay or 200 percent of their salary for the day. In a labor advisory issued on May 29, Department of Labor and Employment (DOLE) Secretary Bienvenido Laguesma reminded employers to follow the pay rules for holidays under Proclamation 368, series of 2023, signed by President Ferdinand R. Marcos Jr.', 'https://beta.pna.gov.ph/articles/1226507', '2024-07-31 06:22:23', '2024-07-31 06:22:23'),
(7, 'DOUBLE PAY FOR EMPLOYEES WHO WILL WORK ON JUNE 12 – DOLE', 'MANILA – Private sector workers who will report for work on June 12, Independence Day, a regular holiday, are entitled to receive double pay or 200 percent of their salary for the day. In a labor advisory issued on May 29, Department of Labor and Employment (DOLE) Secretary Bienvenido Laguesma reminded employers to follow the pay rules for holidays under Proclamation 368, series of 2023, signed by President Ferdinand R. Marcos Jr.', 'https://beta.pna.gov.ph/articles/1226507', '2024-07-31 06:23:11', '2024-07-31 06:23:11'),
(8, 'DOUBLE PAY FOR EMPLOYEES WHO WILL WORK ON JUNE 12 – DOLE', 'MANILA – Private sector workers who will report for work on June 12, Independence Day, a regular holiday, are entitled to receive double pay or 200 percent of their salary for the day. In a labor advisory issued on May 29, Department of Labor and Employment (DOLE) Secretary Bienvenido Laguesma reminded employers to follow the pay rules for holidays under Proclamation 368, series of 2023, signed by President Ferdinand R. Marcos Jr.', 'https://beta.pna.gov.ph/articles/1226507', '2024-08-01 01:21:24', '2024-08-01 01:21:24');

-- --------------------------------------------------------

--
-- Table structure for table `career_updates`
--

CREATE TABLE `career_updates` (
  `id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `career_updates`
--

INSERT INTO `career_updates` (`id`, `created_at`, `updated_at`, `title`, `image`) VALUES
(1, '2024-07-31 11:58:05', '2024-08-06 09:00:11', 'HR Admin, HR Generalist, General Accounting, Electrical Engineering, Certified Public Accountant', 'images/careers/1722934811.png');

-- --------------------------------------------------------

--
-- Table structure for table `career_updatesss`
--

CREATE TABLE `career_updatesss` (
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL,
  `id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `career_updatesss`
--

INSERT INTO `career_updatesss` (`title`, `image`, `created_at`, `updated_at`, `id`) VALUES
('Justin', 'images/careers/1722425398.png', '2024-07-31 11:29:58', '2024-07-31 11:29:58', 1),
('Justinsss12', 'images/careers/1722425569.png', '2024-07-31 11:32:49', '2024-07-31 11:43:47', 2);

-- --------------------------------------------------------

--
-- Table structure for table `companies`
--

CREATE TABLE `companies` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `companies`
--

INSERT INTO `companies` (`id`, `name`, `image`, `created_at`, `updated_at`) VALUES
(6, 'BDO', 'acredited/1722397746.png', '2024-07-31 03:49:06', '2024-07-31 03:49:06'),
(7, 'BPI', 'acredited/1722397826.png', '2024-07-31 03:50:26', '2024-07-31 03:50:26');

-- --------------------------------------------------------

--
-- Table structure for table `contact_messages`
--

CREATE TABLE `contact_messages` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact_messages`
--

INSERT INTO `contact_messages` (`id`, `name`, `email`, `contact_number`, `country`, `subject`, `message`, `created_at`, `updated_at`) VALUES
(1, 'Justin De Castro', 'decastrojustin24@gmail.com', '09456754591', 'Philippines', 'Applicant-Inquiries', 'Hello', '2024-07-08 04:45:43', '2024-07-08 04:45:43'),
(2, 'Justin De Castro', 'decastrojustin24@gmail.com', '09456754591', 'Philippines', 'Applicant-Follow Up', 'hello', '2024-07-08 04:51:18', '2024-07-08 04:51:18'),
(3, 'Justin De Castro', 'decastrojustin24@gmail.com', '09456754591', 'Philippines', 'Applicant-Follow Up', 'hello', '2024-07-08 04:53:43', '2024-07-08 04:53:43'),
(4, 'Justin De Castro', 'decastrojustin321@gmail.com', '09456754591', 'Philippines', 'Applicant-Inquiries', 'follow up', '2024-07-08 04:55:38', '2024-07-08 04:55:38'),
(5, 'Justin De Castro', 'decastrojustin321@gmail.com', '09456754591', 'Philippines', 'Applicant-Inquiries', 'Omanfil Int\'l Manpower Dev\'t Corp. Rodeo Bldg.\r\n802 km 18 West Service Road South Super Highway\r\nParanaque City 1700 Metro Manila Philippines', '2024-07-08 05:02:52', '2024-07-08 05:02:52'),
(6, 'justin mangubat decastro', 'decastrojustin321@gmail.com', '09456754591', 'Philippines', 'Applicant-Inquiries', 'Hello i am applying for this job', '2024-07-08 23:40:49', '2024-07-08 23:40:49'),
(7, 'justin mangubat decastro', 'decastrojustin321@gmail.com', '09456754591', 'Philippines', 'Applicant-Follow Up', 'hello', '2024-07-08 23:45:47', '2024-07-08 23:45:47'),
(8, 'justin mangubat decastro', 'decastrojustin321@gmail.com', '09456754591', 'Philippines', 'Applicant-Follow Up', 'hello', '2024-07-08 23:48:40', '2024-07-08 23:48:40'),
(9, 'Justin', 'decastrojustin321@gmail.com', '09456754591', 'Philippines', 'Applicant-Inquiries', 'asd', '2024-07-17 07:10:19', '2024-07-17 07:10:19'),
(10, 'Justin', 'decastrojustin321@gmail.com', '09456754591', 'Philippines', 'Applicant-Follow Up', 'message', '2024-07-17 07:14:45', '2024-07-17 07:14:45'),
(11, 'Justin', 'decastrojustin321@gmail.com', '09456754591', 'Philippines', 'Applicant-Follow Up', 'Inquiries', '2024-07-26 23:16:52', '2024-07-26 23:16:52'),
(12, 'Infinitrade Corporation', 'infinitech.justin2024@gmail.com', '09456754591', 'Philippines', 'Applicant-Follow Up', 'hello', '2024-07-31 02:58:49', '2024-07-31 02:58:49'),
(13, 'ABIC Manpower Service Corp', 'infinitech.justin2024@gmail.com', '09456754591', 'Philippines', 'Applicant-Follow Up', 'hello', '2024-07-31 03:02:33', '2024-07-31 03:02:33'),
(14, 'ABIC Manpower Service Corp', 'infinitech.justin2024@gmail.com', '09456754591', 'Philippines', 'Applicant-Follow Up', 'hello', '2024-07-31 03:02:37', '2024-07-31 03:02:37'),
(15, 'ABIC Manpower Service Corp', 'infinitech.justin2024@gmail.com', '09456754591', 'Philippines', 'Applicant-Follow Up', 'hello', '2024-07-31 03:02:40', '2024-07-31 03:02:40'),
(16, 'ABIC Manpower Service Corp', 'infinitech.justin2024@gmail.com', '09456754591', 'Philippines', 'Applicant-Follow Up', 'hello', '2024-07-31 03:02:44', '2024-07-31 03:02:44'),
(17, 'ABIC Manpower Service Corp', 'infinitech.justin2024@gmail.com', '09456754591', 'Philippines', 'Applicant-Follow Up', 'hello', '2024-07-31 03:02:48', '2024-07-31 03:02:48'),
(18, 'ABIC Manpower Service Corp', 'infinitech.justin2024@gmail.com', '09456754591', 'Philippines', 'Applicant-Follow Up', 'hello', '2024-07-31 03:02:52', '2024-07-31 03:02:52'),
(19, 'ABIC Manpower Service Corp', 'infinitech.justin2024@gmail.com', '09456754591', 'Philippines', 'Applicant-Follow Up', 'hello', '2024-07-31 03:02:56', '2024-07-31 03:02:56'),
(20, 'ABIC Manpower Service Corp', 'infinitech.justin2024@gmail.com', '09456754591', 'Philippines', 'Applicant-Follow Up', 'hello', '2024-07-31 03:03:00', '2024-07-31 03:03:00'),
(21, 'ABIC Manpower Service Corp', 'infinitech.justin2024@gmail.com', '09456754591', 'Philippines', 'Applicant-Follow Up', 'hello', '2024-07-31 03:03:04', '2024-07-31 03:03:04'),
(22, 'ABIC Manpower Service Corp', 'infinitech.justin2024@gmail.com', '09456754591', 'Philippines', 'Applicant-Follow Up', 'hello', '2024-07-31 03:03:07', '2024-07-31 03:03:07'),
(23, 'ABIC Manpower Service Corp', 'infinitech.justin2024@gmail.com', '09456754591', 'Philippines', 'Applicant-Follow Up', 'hello', '2024-07-31 03:03:11', '2024-07-31 03:03:11'),
(24, 'ABIC Manpower Service Corp', 'infinitech.justin2024@gmail.com', '09456754591', 'Philippines', 'Applicant-Inquiries', 'Message', '2024-07-31 03:03:28', '2024-07-31 03:03:28'),
(25, 'ABIC Manpower Service Corp', 'infinitech.justin2024@gmail.com', '09456754591', 'Philippines', 'Employer-Inquiries', 'Messages', '2024-07-31 03:03:48', '2024-07-31 03:03:48'),
(26, 'ABIC Manpower Service Corp', 'admin@manpower.coms', '09456754591', 'Philippines', 'Applicant-Follow Up', 'asd', '2024-07-31 03:04:18', '2024-07-31 03:04:18'),
(27, 'ABIC Manpower Service Corp', 'admin@manpower.com', '09456754591', 'Philippines', 'Applicant-Inquiries', 'asd', '2024-07-31 03:04:57', '2024-07-31 03:04:57'),
(28, 'Justin', 'admin@manpower.coms', '09456754591', 'Philippines', 'Applicant-Follow Up', 'Hello', '2024-07-31 03:14:14', '2024-07-31 03:14:14'),
(29, 'Infinitrade Corporation', 'infinitech.justin2024@gmail.com', '09456754591', 'Philippines', 'Applicant-Inquiries', 'qwe', '2024-07-31 03:15:13', '2024-07-31 03:15:13'),
(30, 'Infinitrade Corporation', 'infinitech.justin2024@gmail.com', '09456754591', 'Philippines', 'Applicant-Inquiries', 'asd', '2024-07-31 03:16:52', '2024-07-31 03:16:52'),
(31, 'Infinitrade Corporation', 'infinitech.justin2024@gmail.com', '09456754591', 'Philippines', 'Applicant-Inquiries', 'asd', '2024-07-31 03:17:08', '2024-07-31 03:17:08'),
(32, 'ABIC Manpower Service Corp', 'admin@manpower.com', '09456754591', 'Philippines', 'Applicant-Inquiries', 'dasr', '2024-07-31 03:17:43', '2024-07-31 03:17:43'),
(33, 'ABIC Manpower Service Corp', 'admin@manpower.com', '09456754591', 'Philippines', 'Applicant-Inquiries', 'wqe', '2024-07-31 03:18:12', '2024-07-31 03:18:12'),
(34, 'Infinitrade Corporation', 'infinitech.justin2024@gmail.com', '09456754591', 'Philippines', 'Applicant-Inquiries', 'sa', '2024-07-31 03:42:27', '2024-07-31 03:42:27');

-- --------------------------------------------------------

--
-- Table structure for table `executives`
--

CREATE TABLE `executives` (
  `id` bigint UNSIGNED NOT NULL,
  `companyname` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `position` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `companyimage` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `executives`
--

INSERT INTO `executives` (`id`, `companyname`, `position`, `companyimage`, `created_at`, `updated_at`) VALUES
(118, 'Name', 'CEO', 'images/66ad9a2873406.jpg', '2024-08-03 02:47:04', '2024-08-03 02:47:04'),
(119, 'Name', 'President', 'images/66ad9a37e02bd.png', '2024-08-03 02:47:19', '2024-08-03 02:47:19'),
(120, 'Jhoenebelle D. Trinidad', 'GENERAL MANAGER', 'images/66ad9a7d3c656.jpg', '2024-08-03 02:48:29', '2024-08-06 06:44:08'),
(121, 'Mary Fe Natividad', 'BUSINESS LISCENSING MANAGER', 'images/66ad9ad0929d2.jpg', '2024-08-03 02:49:52', '2024-08-03 02:49:52'),
(122, 'Renato Ladrica', 'ACCOUNTING MANAGER', 'images/66ad9b129a584.jpg', '2024-08-03 02:50:58', '2024-08-03 02:50:58'),
(123, 'Jose Cacho', 'VISA PROCESSING MANAGER', 'images/66ad9b2c5e383.jpg', '2024-08-03 02:51:24', '2024-08-03 02:51:24'),
(124, 'Luis Tolentino Jr.', 'SENIOR LIAISON', 'images/66ad9b4a28adb.jpg', '2024-08-03 02:51:54', '2024-08-03 02:51:54'),
(127, 'Jaylord Haboc', 'BUSINESS LISCENSING ASSOCIATE', 'images/66ad9bc74702a.jpg', '2024-08-03 02:53:59', '2024-08-03 02:53:59'),
(128, 'Nouyi Wang', 'BUSINESS DEVELOPMENT SPECIALIST', 'images/66ad9bef30f6a.jpg', '2024-08-03 02:54:39', '2024-08-03 02:54:39'),
(129, 'Estela Orlanda', 'TAX SPECIALIST', 'images/66ad9c18ad031.jpg', '2024-08-03 02:55:20', '2024-08-03 02:55:20'),
(130, 'Christine Sonza', 'ACCOUNTS PAYABLE', 'images/66ad9c400f6e8.jpg', '2024-08-03 02:56:00', '2024-08-03 02:56:00'),
(131, 'Sean Louie Franco Ang', 'VISA ASSISTANT', 'images/66ad9c6673b8a.jpg', '2024-08-03 02:56:38', '2024-08-03 02:56:38'),
(133, 'Aiko Belvis', 'BUSINESS LISCENSING ASSISTANT', 'images/66ad9ceaaf93a.jpg', '2024-08-03 02:58:50', '2024-08-03 02:58:50'),
(134, 'Christian Armson Tomeldon', 'LIAISON ASSISTANT', 'images/66ad9d0a3701b.jpg', '2024-08-03 02:59:22', '2024-08-03 02:59:22'),
(135, 'Jerry Monte', 'RECRUITMENT SPECIALIST', 'images/66b1c555d48c7.jpg', '2024-08-06 06:40:21', '2024-08-06 06:40:21'),
(136, 'Julie Ann Carvajal', 'ADMIN ASSOCIATE', 'images/66b1c5ae4d713.jpg', '2024-08-06 06:41:50', '2024-08-06 06:41:50'),
(137, 'Kenneth Españo', 'RECRUITMENT SPECIALIST', 'images/66b1c5d80d08e.jpg', '2024-08-06 06:42:32', '2024-08-06 06:42:32');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `message`, `created_at`, `updated_at`) VALUES
(1, 'Justin', 'I recently interacted with Customer Service Representative\'s regarding some issue. I was impressed by their professionalism and quick response. They handled my concern efficiently and provided a clear solution.', '2024-07-14 08:26:43', '2024-07-14 08:26:43'),
(2, 'Moses', 'I wanted to take a moment to express my gratitude for the outstanding service I received. My recent experience was exceptional, and I am genuinely impressed. I am very satisfied with my experience and will definitely recommend your company.', '2024-07-14 08:29:53', '2024-07-14 08:29:53'),
(3, 'GIO', 'I can\'t say enough about the incredible service I received from Manpower. They truly went above and beyond to match me with a job that fits my skills and career goals perfectly. The entire process was smooth and efficient, and their team was so supportive throughout. ', '2024-07-15 23:24:19', '2024-07-15 23:24:19'),
(4, 'Darlene', 'I wanted to thank the ABIC MANPOWER SERVICE CORP. Website for the efficient service.', '2024-07-31 08:30:48', '2024-07-31 08:30:48'),
(5, 'Lyca May Nobleza', 'good', '2024-08-01 02:46:45', '2024-08-01 02:46:45'),
(6, 'Maria', 'Maganda ang serbisyo ng company, magagalang ang mga staffs', '2024-08-01 06:13:46', '2024-08-01 06:13:46');

-- --------------------------------------------------------

--
-- Table structure for table `jobfairs`
--

CREATE TABLE `jobfairs` (
  `id` bigint UNSIGNED NOT NULL,
  `companyname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `place` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `companyimage` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jobfairs`
--

INSERT INTO `jobfairs` (`id`, `companyname`, `link`, `place`, `companyimage`, `created_at`, `updated_at`) VALUES
(2, 'Manila City Job Fair', 'https://www.facebook.com/photo.php?fbid=165598909794059&set=pb.100090318514723.-2207520000&type=3', 'manila', '1720736208.jpg', '2024-07-12 05:16:48', '2024-07-12 05:16:48'),
(4, 'TIP JOB FAIR', 'https://www.facebook.com/profile.php?id=100090318514723', 'tip', '1721174273.jpg', '2024-07-17 06:57:53', '2024-07-17 06:57:53'),
(5, 'TIP JOB FAIR', 'https://www.facebook.com/profile.php?id=100090318514723', 'tip', '1721174460.jpg', '2024-07-17 07:01:00', '2024-07-17 07:01:00'),
(6, 'TIP JOB FAIR', 'https://www.facebook.com/profile.php?id=100090318514723', 'tip', '1721174470.jpg', '2024-07-17 07:01:10', '2024-07-17 07:01:10'),
(7, 'TIP JOB FAIR', 'https://www.facebook.com/profile.php?id=100090318514723', 'tip', '1721174480.jpg', '2024-07-17 07:01:20', '2024-07-17 07:01:20'),
(8, 'TIP JOB FAIR', 'https://www.facebook.com/profile.php?id=100090318514723', 'tip', '1721174489.jpg', '2024-07-17 07:01:29', '2024-07-17 07:01:29'),
(9, 'Letran Job Fair', 'https://www.facebook.com/profile.php?id=100090318514723', 'letran', '1721174624.jpg', '2024-07-17 07:03:44', '2024-07-17 07:03:44'),
(10, 'Letran Job Fair', 'https://www.facebook.com/profile.php?id=100090318514723', 'letran', '1721174640.jpg', '2024-07-17 07:04:00', '2024-07-17 07:04:00'),
(11, 'Letran Job Fair', 'https://www.facebook.com/profile.php?id=100090318514723', 'letran', '1721174650.jpg', '2024-07-17 07:04:10', '2024-07-17 07:04:10');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `companyname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `companyimage` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `manpower_reqs`
--

CREATE TABLE `manpower_reqs` (
  `id` bigint UNSIGNED NOT NULL,
  `company_name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_website` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_number` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `work_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vacant_position` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `job_category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_of_vacancy` int NOT NULL,
  `years_experience` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `working_location` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `working_schedule_hours` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `working_schedule_days` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `preferred_gender` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `job_requirements` text COLLATE utf8mb4_unicode_ci,
  `cpa` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payout_firstdate` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payout_seconddate` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `nationalcertificate` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `license` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `other_qualification` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `qualifications` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `other_requirements` text COLLATE utf8mb4_unicode_ci,
  `salary_from` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `salary_to` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `target_date` date DEFAULT NULL,
  `screening_method` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `job_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `manpower_reqs`
--

INSERT INTO `manpower_reqs` (`id`, `company_name`, `company_website`, `contact_name`, `contact_number`, `work_type`, `vacant_position`, `job_category`, `no_of_vacancy`, `years_experience`, `working_location`, `working_schedule_hours`, `working_schedule_days`, `preferred_gender`, `job_requirements`, `cpa`, `payout_firstdate`, `payout_seconddate`, `nationalcertificate`, `license`, `other_qualification`, `qualifications`, `other_requirements`, `salary_from`, `salary_to`, `target_date`, `screening_method`, `job_description`, `created_at`, `updated_at`) VALUES
(12, 'InfiniTrade', 'https://abicmanpower.com/', 'Justin', '09456754591', 'Full Time', 'Postion', 'Human Resources', 2, '2', 'Taguig', 'Hours', '2', 'Female', 'List', NULL, '5', '20', NULL, NULL, NULL, 'National Certificate, ', 'Specify', '10000', '20000', '2024-08-08', 'virtual', 'Hello', '2024-08-05 09:28:37', '2024-08-05 09:28:37');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_07_08_085805_create_applications_table', 2),
(6, '2024_07_08_123717_create_contact_messages_table', 3),
(7, '2024_07_09_000941_create_schedule_table', 4),
(8, '2024_07_09_035153_create_companies_table', 5),
(9, '2024_07_10_175731_create_jobs_table', 6),
(10, '2024_07_11_001919_create_ojts_table', 7),
(11, '2024_07_11_005515_create_profiles_table', 8),
(12, '2024_07_11_031149_create_admin_jobs_table', 9),
(13, '2024_07_11_220452_create_jobfairs_table', 10),
(14, '2024_07_11_121045_create_manpower_reqs_table', 11),
(15, '2024_07_12_183252_create_awards_table', 12),
(16, '2024_07_12_065408_create_executives_table', 13),
(17, '2024_07_14_010709_create_feedback_table', 13),
(18, '2024_07_16_201023_create_bulletins_table', 14),
(19, '2024_07_23_155856_create_backends_table', 15),
(20, '2024_07_31_114637_create_career_updates_table', 16),
(21, '2024_08_08_185811_create_resumes_table', 17);

-- --------------------------------------------------------

--
-- Table structure for table `ojts`
--

CREATE TABLE `ojts` (
  `id` bigint UNSIGNED NOT NULL,
  `fullname` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `school` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `course` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `ojt_hours` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `resume` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ojts`
--

INSERT INTO `ojts` (`id`, `fullname`, `email`, `school`, `course`, `phone`, `ojt_hours`, `resume`, `message`, `created_at`, `updated_at`) VALUES
(12, 'Angelica Llander Estoy', 'angelicaestoy01@gmail.com', 'University of Rizal System Binangonan', 'BSBA major in Human Resource Management', '91297629974', '300', 'public/resume/Estoy Angelica -Resume.pdf', 'with allowances?', '2024-08-06 10:06:36', '2024-08-06 10:06:36');

-- --------------------------------------------------------

--
-- Table structure for table `ojt_updates`
--

CREATE TABLE `ojt_updates` (
  `id` int NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `profession` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ojt_updates`
--

INSERT INTO `ojt_updates` (`id`, `title`, `description`, `profession`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Creating Futures Together', 'Internship program is designed to foster talent, drive innovation, and build mutually beneficial relationships with industry leaders, offering you the chance to shape future leaders, contribute to their professional development, and provide them with hands-on experience in our field.', 'Human Resources, Accounting, Electrical Engineer', 'images/ojt/1722433752.jpg', '2024-07-31 12:46:03', '2024-08-05 03:51:38');

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `profiles`
--

CREATE TABLE `profiles` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `website` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `position` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `person` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `profile_updates`
--

CREATE TABLE `profile_updates` (
  `id` int NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `profession` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `profile_updates`
--

INSERT INTO `profile_updates` (`id`, `title`, `description`, `profession`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Empower Success with the Right People', 'ABIC Manpower believes that collaboration is key to driving innovation and achieving exceptional results. By partnering with ABIC Manpower, we deliver outstanding talent to our clients.', 'Skilled Professionals, Manpower', 'images/profiles/1722439239.jpg', '2024-07-31 15:15:37', '2024-08-05 14:37:34');

-- --------------------------------------------------------

--
-- Table structure for table `resumes`
--

CREATE TABLE `resumes` (
  `id` bigint UNSIGNED NOT NULL,
  `profile_pic` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `objectives` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `degree` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `school` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `graduation-date` date NOT NULL,
  `job-title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `start-date` date NOT NULL,
  `end-date` date NOT NULL,
  `skills` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `certifications` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `resumes`
--

INSERT INTO `resumes` (`id`, `profile_pic`, `first_name`, `last_name`, `objectives`, `email`, `phone`, `address`, `degree`, `school`, `graduation-date`, `job-title`, `company`, `start-date`, `end-date`, `skills`, `certifications`, `created_at`, `updated_at`) VALUES
(1, '1723147876_burning.png', 'Moses', 'Alcan', 'qwed', 'adminm@manpower.com', '09456754591', 'Makati City', 'Bachelors Degree', 'DWCC', '2024-08-31', 'Senior Web Developer', 'Company Name', '2024-08-31', '2024-08-24', 'Active listeners, pickup test, Lets say test, Test again Again Test again', 'Java NCII, Java NCII, Java NCII, Java NCII, Java NCII, Java NCII, Java NCII', '2024-08-09 03:11:16', '2024-08-09 03:11:16');

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE `schedule` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `update_manpowers`
--

CREATE TABLE `update_manpowers` (
  `id` int NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `profession` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `update_manpowers`
--

INSERT INTO `update_manpowers` (`id`, `title`, `description`, `profession`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Empower Success with the Right People', 'Partnering with ABIC Manpower, we are dedicated to delivering not just manpower, but a partnership that drives growth and excellence. Our team is committed to providing ongoing support and adapting to evolving needs, ensuring that our clients receive the highest level of service and expertise.\r\nExperience the difference that true collaboration can make. Partner with ABIC Manpower to unlock the full potential of your team and achieve remarkable results.', 'Skilled Professionals, Human Resources, Electrical Engineer, Accounting Officer, IT Specialist, Operations Manager', 'images/manpowers/1722439980.jpg', '2024-07-31 15:33:00', '2024-08-06 08:32:52');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_admin` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `is_admin`, `remember_token`, `created_at`, `updated_at`) VALUES
(4, 'ABIC Manpower Service Corp', 'adminm@manpower.com', NULL, '$2y$12$Mg7gsijcrwooL5kqT2LY0Ouw7o1Fj1bHuiI6K2umcQJVdQESrMRmS', '0', NULL, '2024-07-30 08:46:47', '2024-07-30 08:46:47'),
(5, 'Infinitrade Corporation', 'admin@manpower.coms', NULL, '$2y$12$LG8AHbG3..Z8vRHxb7jTWuSo3jx0EYUzM3BFnQZRm.juz.sxddphe', '0', NULL, '2024-07-30 08:47:36', '2024-07-30 08:47:36');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_jobs`
--
ALTER TABLE `admin_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `applications`
--
ALTER TABLE `applications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `awards`
--
ALTER TABLE `awards`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `backends`
--
ALTER TABLE `backends`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bulletins`
--
ALTER TABLE `bulletins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `career_updates`
--
ALTER TABLE `career_updates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `career_updatesss`
--
ALTER TABLE `career_updatesss`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `companies`
--
ALTER TABLE `companies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_messages`
--
ALTER TABLE `contact_messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `executives`
--
ALTER TABLE `executives`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobfairs`
--
ALTER TABLE `jobfairs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `manpower_reqs`
--
ALTER TABLE `manpower_reqs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ojts`
--
ALTER TABLE `ojts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ojt_updates`
--
ALTER TABLE `ojt_updates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `profiles`
--
ALTER TABLE `profiles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profile_updates`
--
ALTER TABLE `profile_updates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `resumes`
--
ALTER TABLE `resumes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `resumes_email_unique` (`email`);

--
-- Indexes for table `schedule`
--
ALTER TABLE `schedule`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `schedule_email_unique` (`email`);

--
-- Indexes for table `update_manpowers`
--
ALTER TABLE `update_manpowers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_jobs`
--
ALTER TABLE `admin_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `applications`
--
ALTER TABLE `applications`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT for table `awards`
--
ALTER TABLE `awards`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `backends`
--
ALTER TABLE `backends`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `bulletins`
--
ALTER TABLE `bulletins`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `career_updates`
--
ALTER TABLE `career_updates`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `career_updatesss`
--
ALTER TABLE `career_updatesss`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `companies`
--
ALTER TABLE `companies`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `contact_messages`
--
ALTER TABLE `contact_messages`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `executives`
--
ALTER TABLE `executives`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=138;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `jobfairs`
--
ALTER TABLE `jobfairs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `manpower_reqs`
--
ALTER TABLE `manpower_reqs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `ojts`
--
ALTER TABLE `ojts`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `ojt_updates`
--
ALTER TABLE `ojt_updates`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `profiles`
--
ALTER TABLE `profiles`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `profile_updates`
--
ALTER TABLE `profile_updates`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `resumes`
--
ALTER TABLE `resumes`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `schedule`
--
ALTER TABLE `schedule`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `update_manpowers`
--
ALTER TABLE `update_manpowers`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
