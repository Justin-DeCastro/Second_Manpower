-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 25, 2024 at 10:17 PM
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
-- Database: `second_manpower`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_jobs`
--

CREATE TABLE `admin_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `location` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin_jobs`
--

INSERT INTO `admin_jobs` (`id`, `location`, `title`, `created_at`, `updated_at`) VALUES
(1, 'MAKATI, NATIONAL CAPITAL REGION', 'HUMAN RESOURCES', '2024-07-11 10:22:37', '2024-07-11 10:22:37'),
(2, 'MAKATI, NATIONAL CAPITAL REGION', 'ACCOUNTING', '2024-07-11 10:34:00', '2024-07-11 10:34:00'),
(3, 'MAKATI, NATIONAL CAPITAL REGION', 'OFFICE SUPPORT', '2024-07-11 10:34:10', '2024-07-11 10:34:10'),
(4, 'MAKATI, NATIONAL CAPITAL REGION', 'LIAISON ASSISTANT', '2024-07-11 10:34:44', '2024-07-11 10:34:44');

-- --------------------------------------------------------

--
-- Table structure for table `applications`
--

CREATE TABLE `applications` (
  `id` bigint UNSIGNED NOT NULL,
  `name` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `position` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` datetime DEFAULT NULL,
  `interview_date` datetime DEFAULT NULL,
  `date_of_interview` datetime DEFAULT NULL,
  `resume` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Pending',
  `attended` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `phone` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `applications`
--

INSERT INTO `applications` (`id`, `name`, `position`, `message`, `email`, `address`, `date`, `interview_date`, `date_of_interview`, `resume`, `status`, `attended`, `phone`, `created_at`, `updated_at`) VALUES
(39, 'Justin De', 'ADMIN', 'Default Message', 'decastrojustin321@gmail.com', 'Oriental Mindoro', '2024-07-25 12:00:00', NULL, NULL, 'hiring/1721144410_1720924743_1720489237_1720429722_FOR HARD CODED (3).docx', 'For Interview', NULL, '09456754591', '2024-07-16 22:40:10', '2024-07-25 01:40:04'),
(40, 'moses', 'ADMIN Staff', 'Default Message', 'decastrojustin321@gmail.com', 'Oriental Mindoro', '2024-06-07 08:41:00', NULL, NULL, 'hiring/1721144452_1720924743_1720489237_1720429722_FOR HARD CODED (3).docx', 'For Pooling', NULL, '09456754591', '2024-07-16 22:40:53', '2024-07-16 22:42:25'),
(41, 'Justin', 'Admin', 'Applying', 'infinitech.justin2024@gmail.com', 'Makati Cityt', NULL, NULL, NULL, 'hiring/1721933406_UPDATED EMAIL DETAILS.docx', 'Pending', NULL, '09456754591', '2024-07-26 01:50:06', '2024-07-26 01:50:06'),
(42, 'Justin', 'Admin', 'Applying', 'infinitech.justin2024@gmail.com', 'Makati Cityt', NULL, NULL, NULL, 'hiring/1721933455_UPDATED EMAIL DETAILS.docx', 'Pending', NULL, '09456754591', '2024-07-26 01:50:55', '2024-07-26 01:50:55'),
(43, 'Justin', 'Admin', 'Applying', 'infinitech.justin2024@gmail.com', 'Makati Cityt', NULL, NULL, NULL, 'hiring/1721933675_UPDATED EMAIL DETAILS.docx', 'Pending', NULL, '09456754591', '2024-07-26 01:54:36', '2024-07-26 01:54:36'),
(44, 'Justin', 'Admin', 'Applying', 'infinitech.justin2024@gmail.com', 'Makati Cityt', NULL, NULL, NULL, 'hiring/1721933730_UPDATED EMAIL DETAILS.docx', 'Pending', NULL, '09456754591', '2024-07-26 01:55:30', '2024-07-26 01:55:30');

-- --------------------------------------------------------

--
-- Table structure for table `awards`
--

CREATE TABLE `awards` (
  `id` bigint UNSIGNED NOT NULL,
  `companyname` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `companyimage` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `awards`
--

INSERT INTO `awards` (`id`, `companyname`, `description`, `companyimage`, `created_at`, `updated_at`) VALUES
(1, 'Certificate of Appreciation', 'appreciation', '1720810072.jpg', '2024-07-13 01:47:52', '2024-07-13 01:47:52'),
(2, 'Certificate of Participation', 'participation', '1720810252.jpg', '2024-07-13 01:50:52', '2024-07-13 01:50:52'),
(3, 'Certificate of Participation', 'participation', '1720810314.jpg', '2024-07-13 01:51:54', '2024-07-13 01:51:54'),
(4, 'Certificate of Participation', 'participation', '1720810331.jpg', '2024-07-13 01:52:11', '2024-07-13 01:52:11'),
(5, 'Certificate of Appreciation', 'appreciation', '1720810348.jpg', '2024-07-13 01:52:28', '2024-07-13 01:52:28'),
(6, 'Certificate of Accreditation', 'accreditation', '1720810372.jpg', '2024-07-13 01:52:52', '2024-07-13 01:52:52'),
(7, 'Certificate of Appreciation', 'appreciation', '1720810390.jpg', '2024-07-13 01:53:10', '2024-07-13 01:53:10'),
(8, 'Certification', 'certification', '1720810418.jpg', '2024-07-13 01:53:38', '2024-07-13 01:53:38'),
(9, 'Certificate of Accreditation', 'accreditation', '1720810656.jpg', '2024-07-13 01:57:36', '2024-07-13 01:57:36'),
(10, 'Certificate of Accreditation', 'accreditation', '1720810701.jpg', '2024-07-13 01:58:21', '2024-07-13 01:58:21'),
(11, 'Certificate of Participation', 'participation', '1720810730.jpg', '2024-07-13 01:58:50', '2024-07-13 01:58:50');

-- --------------------------------------------------------

--
-- Table structure for table `backends`
--

CREATE TABLE `backends` (
  `id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `companyname` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `position` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `companyimage` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `awards` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `number` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bulletins`
--

CREATE TABLE `bulletins` (
  `id` bigint UNSIGNED NOT NULL,
  `title` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
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
(5, 'SCHEDULE OF SOCIAL SECURITY (SS), EMPLOYEES’ COMPENSATION (EC), AND WORKERS’ INVESTMENT AND SAVINGS PROGRAMS (WISP) CONTRIBUTIONS EFFECTIVE JANUARY 2023', 'Employer (ER) refers to the entity or individual who hires employees and is responsible for deducting SSS contributions from their employees’ salaries. Employee (EE) refers to the individual hired by an employer who contributes a portion of their salary to the SSS.', 'https://www.sss.gov.ph/sss/DownloadContent?fileName=2023-Schedule-of-Contributions.pdf', '2024-07-17 03:44:35', '2024-07-17 03:44:35');

-- --------------------------------------------------------

--
-- Table structure for table `companies`
--

CREATE TABLE `companies` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `companies`
--

INSERT INTO `companies` (`id`, `name`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Solution Recruitment International Inc', 'acredited/1720497454.png', '2024-07-08 19:57:34', '2024-07-08 19:57:34'),
(2, 'Global Talent Professionals', 'acredited/1720499252.png', '2024-07-08 20:27:32', '2024-07-08 20:27:32'),
(3, 'Hyundai Engineering & Construction', 'acredited/1720499293.jpg', '2024-07-08 20:28:13', '2024-07-08 20:28:13'),
(4, 'Talent Angels Pte. Ltd.', 'acredited/1720499329.jpeg', '2024-07-08 20:28:49', '2024-07-08 20:28:49'),
(5, 'Triple J', 'acredited/1720499356.png', '2024-07-08 20:29:16', '2024-07-08 20:29:16');

-- --------------------------------------------------------

--
-- Table structure for table `contact_messages`
--

CREATE TABLE `contact_messages` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_number` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
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
(10, 'Justin', 'decastrojustin321@gmail.com', '09456754591', 'Philippines', 'Applicant-Follow Up', 'message', '2024-07-17 07:14:45', '2024-07-17 07:14:45');

-- --------------------------------------------------------

--
-- Table structure for table `executives`
--

CREATE TABLE `executives` (
  `id` bigint UNSIGNED NOT NULL,
  `companyname` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `awards` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `position` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `companyimage` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `executives`
--

INSERT INTO `executives` (`id`, `companyname`, `awards`, `position`, `companyimage`, `created_at`, `updated_at`) VALUES
(3, 'John Kenneth P. Españo', 'Recruitment  Specialist', 'Recruitment  Specialist', '1721693024.jpg', '2024-07-23 07:03:44', '2024-07-23 07:03:44'),
(4, 'Jerryfer M. Monte', 'Recruitment  Specialist', 'Recruitment  Specialist', '1721693071.jpg', '2024-07-23 07:04:31', '2024-07-23 07:04:31'),
(5, 'Julie Ann A. Carvajal', 'Admin Associate', '	\r\nAdmin Associate', '1721693117.jpg', '2024-07-23 07:05:17', '2024-07-23 07:05:17'),
(7, 'Jhoenebelle D. Trinidad', 'General Manager', 'General Manager', '1721694373.jpg', '2024-07-23 07:26:13', '2024-07-23 07:26:13'),
(16, 'ZHENRONG LI', 'Philippine Women`s University', 'CEO', '1721942510.jpg', '2024-07-26 04:21:50', '2024-07-26 04:21:50');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `message`, `created_at`, `updated_at`) VALUES
(1, 'Justin', 'I recently interacted with Customer Service Representative\'s regarding some issue. I was impressed by their professionalism and quick response. They handled my concern efficiently and provided a clear solution.', '2024-07-14 08:26:43', '2024-07-14 08:26:43'),
(2, 'Moses', 'I wanted to take a moment to express my gratitude for the outstanding service I received. My recent experience was exceptional, and I am genuinely impressed. I am very satisfied with my experience and will definitely recommend your company.', '2024-07-14 08:29:53', '2024-07-14 08:29:53'),
(3, 'GIO', 'I can\'t say enough about the incredible service I received from Manpower. They truly went above and beyond to match me with a job that fits my skills and career goals perfectly. The entire process was smooth and efficient, and their team was so supportive throughout. ', '2024-07-15 23:24:19', '2024-07-15 23:24:19');

-- --------------------------------------------------------

--
-- Table structure for table `jobfairs`
--

CREATE TABLE `jobfairs` (
  `id` bigint UNSIGNED NOT NULL,
  `companyname` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `place` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `companyimage` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
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
  `companyname` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `companyimage` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `manpower_reqs`
--

CREATE TABLE `manpower_reqs` (
  `id` bigint UNSIGNED NOT NULL,
  `work_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `vacant_position` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `job_category` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_of_vacancy` int NOT NULL,
  `years_experience` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `working_location` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `working_schedule_hours` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `working_schedule_days` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `preferred_gender` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `job_requirements` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `cpa` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payout_firstdate` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payout_seconddate` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `nationalcertificate` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `license` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `other_qualification` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `qualifications` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `other_requirements` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `salary_from` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `salary_to` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `target_date` date DEFAULT NULL,
  `screening_method` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `job_description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `manpower_reqs`
--

INSERT INTO `manpower_reqs` (`id`, `work_type`, `vacant_position`, `job_category`, `no_of_vacancy`, `years_experience`, `working_location`, `working_schedule_hours`, `working_schedule_days`, `preferred_gender`, `job_requirements`, `cpa`, `payout_firstdate`, `payout_seconddate`, `nationalcertificate`, `license`, `other_qualification`, `qualifications`, `other_requirements`, `salary_from`, `salary_to`, `target_date`, `screening_method`, `job_description`, `created_at`, `updated_at`) VALUES
(4, 'Contractual', 'Admin Staff', 'Electrical Engineer', 2, '2', 'Calamba', '8', '5', 'Male', 'Resume', NULL, '5 of the month', '20 of the month', 'National Certificate', NULL, NULL, '', 'picture', '10000', '20000', '2024-07-13', 'Virtual', 'Hello', '2024-07-11 04:34:26', '2024-07-11 04:34:26'),
(5, 'Project Based', 'Laborer', 'Machine Operators', 3, '2', 'Manila', '8', '5', 'Male', 'Resume and government id', NULL, '5 of the month', '20 of the month', NULL, NULL, NULL, '', 'picture', '10000', '20000', '2024-07-20', 'Virtual', 'hi', '2024-07-11 04:53:53', '2024-07-11 04:53:53'),
(6, 'Project Based', 'Admin Staff', 'Machine Operators', 3, '2', 'Laguna', '8', '5', 'Female', 'no', NULL, '5 of the month', '20 of the month', NULL, NULL, NULL, 'CPA License', 'no', '10000', '20000', '2024-07-24', 'Virtual', 'no', '2024-07-11 05:01:52', '2024-07-11 05:01:52'),
(7, 'Full Time', 'Vacant', 'Electrical Engineer', 3, '2', 'Taguig', '5', '8', 'Female', 'JOB REQ', NULL, '5', '20', NULL, NULL, NULL, 'National Certificate, ', 'Req', '10000', '20000', '2024-07-13', 'Face-to-Face', 'Job Desc', '2024-07-16 22:56:53', '2024-07-16 22:56:53'),
(8, 'Part Time', 'Vacant', 'Electrical Engineer', 5, '5', 'Batangas', '5', '8', 'Female', 'Requirements', NULL, '5', '20', NULL, NULL, NULL, 'Registered Nurse', 'Req', '10000', '20000', '2024-07-26', 'Face-to-Face', 'DESC', '2024-07-16 22:57:57', '2024-07-16 22:57:57');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
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
(19, '2024_07_23_155856_create_backends_table', 15);

-- --------------------------------------------------------

--
-- Table structure for table `ojts`
--

CREATE TABLE `ojts` (
  `id` bigint UNSIGNED NOT NULL,
  `fullname` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `school` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `course` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `ojt_hours` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `resume` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ojts`
--

INSERT INTO `ojts` (`id`, `fullname`, `email`, `school`, `course`, `phone`, `ojt_hours`, `resume`, `message`, `created_at`, `updated_at`) VALUES
(1, 'Justin Mangubat De Castro', 'decastrojustin321@gmail.com', 'MINSU', 'BSIT', '09456754591', '396', 'resumes/g5YRfygNtoE2iTTIbkrq5oFUBTd5rxjCa6srFuum.pptx', 'hello', '2024-07-11 07:33:46', '2024-07-11 07:33:46'),
(2, 'Justin Mangubat De Castro', 'decastrojustin321@gmail.com', 'MINSU', 'BSIT', '09456754591', '396', 'resumes/5Tq2tf5GDVDgeQdtxCPfy4yfo0toZ7BSvmg7X89R.pptx', 'hello', '2024-07-11 07:38:42', '2024-07-11 07:38:42'),
(3, 'Justin Mangubat De Castro', 'decastrojustin321@gmail.com', 'MINSU', 'BSIT', '09456754591', '396', 'resumes/5tolfQpH8Bh8xVkUyhwO1HSCKgZxWaPT9CDQo79E.pptx', 'asdasd', '2024-07-11 07:40:42', '2024-07-11 07:40:42'),
(4, 'Justin Mangubat De Castro', 'decastrojustin321@gmail.com', 'MINSU', 'BSIT', '09456754591', '396', 'resumes/ME9nXLx4bP3O2GuaSUqHTb2qRHetr4wSpUMuLJRR.pptx', 'hello', '2024-07-11 07:42:17', '2024-07-11 07:42:17'),
(5, 'Justin Mangubat De Castro', 'decastrojustin321@gmail.com', 'MINSU', 'BSIT', '09456754591', '396', 'resumes/DdE7CqlMEtouuPrbKrbDXEWE8cp3TbnUUjZ5vTQa.pptx', 'qwe', '2024-07-11 07:45:14', '2024-07-11 07:45:14'),
(6, 'Mangubat Decastro Justin', 'user@test.com', 'MINSCAT', 'BSIT', '09456754591', '390', 'public/resume/Huanying.png', 'Hello', '2024-07-11 05:54:39', '2024-07-11 05:54:39'),
(7, 'Mangubat Decastro Justin', 'admin@admin.com', 'MINSCAT', 'BSIT', '09456754591', '390', 'public/resume/logo.jpg', 'qwe', '2024-07-11 06:00:38', '2024-07-11 06:00:38'),
(8, 'Moses Alcantara', 'decastrojustin24@gmail.com', 'MINSU', 'Bachelor of Science in Information Technology', '09456754591', '400', 'public/resume/1720489237_1720429722_FOR HARD CODED.docx', 'Hello', '2024-07-13 01:23:32', '2024-07-13 01:23:32');

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
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
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `website` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(11) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `position` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `person` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `sec_certificate` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `business_permit` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `profiles`
--

INSERT INTO `profiles` (`id`, `name`, `website`, `phone`, `position`, `email`, `person`, `sec_certificate`, `business_permit`, `created_at`, `updated_at`) VALUES
(8, 'Cal Cheese', 'https://www.calcheese.com', '09456754591', 'Head', 'cocacola@gmail.com', 'Justin', '14.jpg', 'avatar.png', '2024-07-11 05:41:24', '2024-07-11 05:41:24'),
(9, 'ABIC MANPOWER SERVICE CORP', 'https://www.COMPANY.com', '09456754591', 'Executive Assistant of the CEO', 'decastrojustin24@gmail.com', 'Justin De Castro', '1721427221.jpg', '1721427247.jpg', '2024-07-24 22:36:27', '2024-07-24 22:36:27');

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE `schedule` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `status` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Indexes for table `schedule`
--
ALTER TABLE `schedule`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `schedule_email_unique` (`email`);

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
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `applications`
--
ALTER TABLE `applications`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `awards`
--
ALTER TABLE `awards`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `backends`
--
ALTER TABLE `backends`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `bulletins`
--
ALTER TABLE `bulletins`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `companies`
--
ALTER TABLE `companies`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `contact_messages`
--
ALTER TABLE `contact_messages`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `executives`
--
ALTER TABLE `executives`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `jobfairs`
--
ALTER TABLE `jobfairs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `manpower_reqs`
--
ALTER TABLE `manpower_reqs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `ojts`
--
ALTER TABLE `ojts`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `profiles`
--
ALTER TABLE `profiles`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `schedule`
--
ALTER TABLE `schedule`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
