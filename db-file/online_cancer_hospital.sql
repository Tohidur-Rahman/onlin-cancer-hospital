-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 08, 2023 at 02:01 PM
-- Server version: 5.7.33
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `online_cancer_hospital`
--

-- --------------------------------------------------------

--
-- Table structure for table `bill_systems`
--

CREATE TABLE `bill_systems` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `patient_id` bigint(20) UNSIGNED NOT NULL,
  `tn_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pay_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bill_systems`
--

INSERT INTO `bill_systems` (`id`, `patient_id`, `tn_id`, `pay_no`, `created_at`, `updated_at`) VALUES
(2, 6, '9B8768HU', '01900000000', '2022-12-22 06:01:37', '2022-12-22 06:01:37'),
(3, 8, '3465626AD', '01922222222', '2022-12-22 10:25:34', '2022-12-22 10:25:34'),
(4, 8, '234562363', '019222222222', '2022-12-22 10:31:34', '2022-12-22 10:31:34'),
(5, 10, '2347ewsfddsa', '01711111111', '2023-01-04 03:39:53', '2023-01-04 03:39:53'),
(6, 11, 'Fhgt222', '01947823394', '2023-01-04 05:16:21', '2023-01-04 05:16:21'),
(7, 11, 'rtsdertswqa', '01938721194', '2023-01-04 06:02:26', '2023-01-04 06:02:26'),
(8, 11, 'fhfghdjh', '01948723394', '2023-01-04 06:04:13', '2023-01-04 06:04:13'),
(9, 11, 'hhhffdd', '01947523395', '2023-01-04 06:07:03', '2023-01-04 06:07:03'),
(10, 11, 'ghdsfgfg', '01947823394', '2023-01-04 06:07:53', '2023-01-04 06:07:53'),
(11, 11, 'ghdsfgfg', '01947823394', '2023-01-04 06:08:19', '2023-01-04 06:08:19'),
(12, 12, 'hgfhhhh', '01807821194', '2023-01-04 14:16:42', '2023-01-04 14:16:42'),
(13, 13, 'kfhggshg', '01726045801', '2023-01-04 14:42:11', '2023-01-04 14:42:11'),
(14, 14, '98kfgh', '01820654018', '2023-01-04 15:00:47', '2023-01-04 15:00:47'),
(15, 15, 'COB9hjjj', '01558675891', '2023-01-04 15:12:01', '2023-01-04 15:12:01'),
(16, 16, '9522dkEff', '01965751270', '2023-01-04 17:38:28', '2023-01-04 17:38:28'),
(18, 17, 'akhfikhwiehiuh', '01303291412', '2023-01-04 17:56:54', '2023-01-04 17:56:54'),
(19, 19, '95sd22dkEW', '01872711907', '2023-01-04 18:21:03', '2023-01-04 18:21:03'),
(20, 20, '9522dkEWd', '01918236600', '2023-01-04 18:30:13', '2023-01-04 18:30:13'),
(21, 21, '9522dkEff', '01965751270', '2023-01-04 18:44:38', '2023-01-04 18:44:38'),
(22, 22, '9522dkEffsas', '01924677720', '2023-01-04 18:57:37', '2023-01-04 18:57:37'),
(23, 23, '9522dkEffw', '01999212498', '2023-01-04 19:05:50', '2023-01-04 19:05:50'),
(24, 24, '9XE52dkEW', '01747040704', '2023-01-04 19:18:47', '2023-01-04 19:18:47'),
(25, 25, '8bhfgf', '01949872708', '2023-01-04 19:28:19', '2023-01-04 19:28:19'),
(26, 26, '9We22dkEffw', '01788299784', '2023-01-04 19:32:05', '2023-01-04 19:32:05'),
(27, 28, '8gdjhkgfjhk', '01839172708', '2023-01-04 19:39:38', '2023-01-04 19:39:38'),
(28, 29, 'aldkjflokjljldf', '01750924025', '2023-01-04 19:44:32', '2023-01-04 19:44:32'),
(29, 29, 'fadklsjjfhnlajdf', '01752857484', '2023-01-04 19:45:39', '2023-01-04 19:45:39'),
(30, 30, 'ASDFKJLKJ', '01741925402', '2023-01-04 19:50:38', '2023-01-04 19:50:38'),
(31, 31, '9hgfhfg', '01649170030', '2023-01-04 20:22:43', '2023-01-04 20:22:43'),
(32, 32, '6skhgsfjkhg', '01886528794', '2023-01-04 20:29:01', '2023-01-04 20:29:01'),
(33, 32, '88hdjkg', '01556938721', '2023-01-04 21:03:58', '2023-01-04 21:03:58'),
(34, 33, '89jgdfijg', '01553698514', '2023-01-04 21:06:41', '2023-01-04 21:06:41'),
(35, 34, '355hhfg', '01649100730', '2023-01-04 21:12:46', '2023-01-04 21:12:46'),
(36, 35, '33gdfhsgfh', '01776358971', '2023-01-04 21:18:07', '2023-01-04 21:18:07'),
(37, 36, '22GHFJH', '01985876942', '2023-01-04 21:25:47', '2023-01-04 21:25:47'),
(38, 37, '85SHGJKSDF', '01308579634', '2023-01-04 21:30:43', '2023-01-04 21:30:43'),
(39, 38, '58HFJKGHF', '01556987524', '2023-01-04 21:36:27', '2023-01-04 21:36:27'),
(40, 39, '89syrgtuiy', '01885897364', '2023-01-04 21:42:35', '2023-01-04 21:42:35'),
(41, 40, '5jhjf', '014058975842', '2023-01-04 21:49:58', '2023-01-04 21:49:58'),
(42, 41, '85iugrio', '01778936547', '2023-01-04 21:58:55', '2023-01-04 21:58:55'),
(43, 42, '88HDFGH', '01638952478', '2023-01-04 22:05:15', '2023-01-04 22:05:15'),
(44, 43, 'jhggfgfdfdtydftfdf', '01741321452', '2023-01-04 22:17:03', '2023-01-04 22:17:03'),
(45, 44, '93cop8eock', '01774543171', '2023-01-04 22:40:16', '2023-01-04 22:40:16'),
(46, 44, '9bcop8Eoch', '01774513171', '2023-01-04 22:42:18', '2023-01-04 22:42:18'),
(47, 45, '9BcoP8Eoch', '01312833041', '2023-01-04 23:25:50', '2023-01-04 23:25:50'),
(48, 46, '8Bco8Eocr', '01321096545', '2023-01-04 23:56:28', '2023-01-04 23:56:28'),
(49, 47, '6bcpoy9l8p', '01751040406', '2023-01-05 00:07:28', '2023-01-05 00:07:28'),
(50, 48, '9bvkd58op', '01321096544', '2023-01-05 00:19:28', '2023-01-05 00:19:28'),
(51, 49, 'apo5dktp6', '01751040403', '2023-01-05 00:26:46', '2023-01-05 00:26:46'),
(52, 50, 'ihf58kop69', '01321096544', '2023-01-05 00:42:42', '2023-01-05 00:42:42'),
(53, 51, 'huo69loP96', '01932342120', '2023-01-05 00:49:32', '2023-01-05 00:49:32'),
(54, 52, '01321096544', '01321096544', '2023-01-05 00:54:11', '2023-01-05 00:54:11'),
(55, 53, 'dhrkgigb58kt', '01918946568', '2023-01-05 01:04:29', '2023-01-05 01:04:29'),
(56, 55, '2347ewsfddsa', '01912345678', '2023-01-05 04:17:25', '2023-01-05 04:17:25');

-- --------------------------------------------------------

--
-- Table structure for table `cancer_types`
--

CREATE TABLE `cancer_types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `disease` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cancer_types`
--

INSERT INTO `cancer_types` (`id`, `disease`, `created_at`, `updated_at`) VALUES
(1, 'Bladder Cancer', '2022-11-21 17:24:41', '2022-11-21 17:24:41'),
(2, 'Kidney Cancer', '2022-11-21 17:25:54', '2022-11-21 17:25:54'),
(3, 'Liver Cancer', '2022-11-21 17:26:12', '2022-11-21 17:26:12'),
(4, 'Lung Cancer', '2022-11-21 17:27:02', '2022-11-21 17:27:02'),
(5, 'Blood Cancer', '2022-11-21 17:27:20', '2022-11-21 17:27:20'),
(6, 'Skin Cancer', '2022-11-21 17:27:35', '2022-11-21 17:27:35'),
(7, 'Brain Cancer', '2022-11-21 17:28:17', '2022-11-21 17:28:17');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `c_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `c_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `msg` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `c_name`, `c_email`, `phone`, `subject`, `msg`, `created_at`, `updated_at`) VALUES
(1, 'Tohidur', 'example@gmail.com', '01923456789', 'test', 'hello', '2022-11-26 07:47:12', '2022-11-26 07:47:12'),
(2, 'Tohidur', 'example@gmail.com', '17000000001', 'test', 'ghj', '2022-11-26 08:25:53', '2022-11-26 08:25:53'),
(3, 'Tohidur', 'example@gmail.com', '01700000000', 'ase', 'gshsg', '2022-11-26 08:29:39', '2022-11-26 08:29:39'),
(4, 'Tohidur', 'example@gmail.com', '17000000001', 'test', 'gfjff', '2022-11-27 05:57:53', '2022-11-27 05:57:53');

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE `doctors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cancer_id` bigint(20) UNSIGNED DEFAULT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `birth` date NOT NULL,
  `number` varchar(14) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `degree` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `specialist` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`id`, `cancer_id`, `first_name`, `last_name`, `gender`, `birth`, `number`, `image`, `address`, `degree`, `specialist`, `email`, `email_verified_at`, `password`, `created_at`, `updated_at`) VALUES
(18, 5, 'Dr. Md. Habibullah', 'Talukder Ruskin', 'Male', '1963-12-10', '01234567890', '1671635642.jpg', 'H # 2/8A,R # 3,Block - A, Lalmatia, Dhaka-1207', 'MBBS (DMC),Fellow WHO & JICA', 'Professor of Cancer Epidemiology\r\nHead, Department of Cancer Epidemiology\r\nNational Institute of Cancer Research and Hospital (NICRH)\r\n\r\nWorked as Medical Officer and Chief Medical Officer at NICRH 1993-2003\r\nAppointed as Assistant Professor through PSC in 2003\r\nPosted as Associate Professor (CC): 2004\r\nPromoted as Associate Professor (Regular): 2013\r\nCountry’s first cancer epidemiologist.\r\nPioneer in cancer awareness and screening. Worked in 58 districts.', 'doctor1@gmail.com', NULL, '$2y$10$vcpARyxaMcp2reaMc4jAUuat04.VUYRZ5RQTW80FghbZkQ0UqfjhO', '2022-12-21 15:14:03', '2022-12-22 11:33:15'),
(19, 1, 'Dr. Qazi Mushtaq', 'Hussain', 'Male', '1962-12-08', '01234567890', '1671636122.jpg', '26, Green Road, Dhaka', 'MBBS, M. Phil (Oncology), Training (India)', 'Higher Training at : Tata Memorial Cancer Hospital, Mumbai, India\r\nSt. Lukes Medical Centre Manila, Philippines\r\nCancer Specialist\r\nProfessor & Head, Radiotherapy Department\r\nDhaka Medical College Hospital', 'doctor2@gmail.com', NULL, '$2y$10$8Fhd5/y6MLPhV5LsIKa9ZuwhtpQX9WXAbb9m/KuHxkrA1Alv8Sd/O', '2022-12-21 15:22:02', '2022-12-21 15:22:02'),
(20, 2, 'Dr. Md. Hafizur', 'Rahman', 'Male', '1975-12-13', '01234567890', '1671639014.jpg', 'Mirpur-2, Dhaka-1216', 'MBBS, DIH, DMRT, WHO Fellow Oncologist', 'Former Director & Professor, Radiotherapy\r\nNational Institute of Cancer Research & Hospital\r\nFormer Head of the Department, Radiotherapy\r\nDhaka Medical College & Hospital, Dhaka.', 'doctor3@gmail.com', NULL, '$2y$10$.L46O6VMGAUZX3mI.Ghn0uAhc/5sYFdLcNwCvLiXX6DjUPi4giQkW', '2022-12-21 16:10:14', '2022-12-21 16:10:14'),
(21, 3, 'Dr. Md. Moarraf', 'Hossen', 'Male', '1978-01-30', '01234567890', '1672827461.jpg', '32, Bir Uttam Shafiullah Sarak (Green Road), Dhanmondi', 'MBBS, DMRT (BSMMU), FCPS (Radiotherapy), Fellowship Training (India, Singapore)', 'Prof. Dr. Md. Moarraf Hossen is a Oncologist in Dhaka. His qualification is MBBS, DMRT (BSMMU), FCPS (Radiotherapy), Fellowship Training (India, Singapore). He is a Former Director Cum Professor in the Department of Radiotherapy at National Institute of Cancer Research & Hospital. He regularly provides treatment to his patients at Evercare Hospital, Dhaka & Green Life Hospital, Dhaka. Practicing hour of Prof. Dr. Md. Moarraf Hossen at Evercare Hospital, Dhaka is 9am to 5pm (Sat to Thu).', 'doctor4@gmail.com', NULL, '$2y$10$H9vx0IU.LMvzcSSW0hNUWONYe0.CpaExZDUshpesrQX./xbSvALkS', '2023-01-04 21:17:41', '2023-01-04 21:17:41'),
(22, 6, 'Dr. Sura Jukrup', 'Momtahena', 'Female', '1970-06-04', '01234567890', '1672827769.jpg', 'Plot # 03, Embankment Drive Way, Sector # 10, Uttara', 'MBBS, FCPS (Radiotherapy), MCPS', 'Dr. Sura Jukrup Momtahena is a Oncologist in Dhaka. Her qualification is MBBS, FCPS (Radiotherapy), MCPS. She is a Consultant in the Department of Oncology at Ahsania Mission Cancer & General Hospital. She regularly provides treatment to her patients at Ahsania Mission Cancer & General Hospital. Practicing hour of Dr. Sura Jukrup Momtahena at Ahsania Mission Cancer & General Hospital is 10am to 5pm (Closed: Friday).', 'doctor5@gmail.com', NULL, '$2y$10$2CWhRBqHjKJ2M8olPCwfN./x0g44mqYaBzfxje63a4XsbXV3y.uOS', '2023-01-04 21:22:49', '2023-01-04 21:22:49'),
(23, 7, 'Dr. Md. Shah Jalalur', 'Rahman', 'Male', '1975-10-04', '01234567899', '1672828081.jpg', 'Plot # 03, Embankment Drive Way, Sector # 10, Uttara', 'MBBS (DMC), MCPS (Oncology), MPhil (Immunology)', 'Dr. Md. Shah Jalalur Rahman Shahi is a Oncologist in Dhaka. His qualification is MBBS (DMC), MCPS (Oncology), MPhil (Immunology). He is a Registrar in the Department of Oncology at Ahsania Mission Cancer & General Hospital. He regularly provides treatment to his patients at Ahsania Mission Cancer & General Hospital. Practicing hour of Dr. Md. Shah Jalalur Rahman Shahi at Ahsania Mission Cancer & General Hospital is 3pm to 10pm (Closed: Friday).', 'doctor6@gmail.com', NULL, '$2y$10$hbBmqGU7p/q3q/iMP0e4l.BOFF1DjyI6GFL3J6jdrj7K1jsl9YDai', '2023-01-04 21:28:01', '2023-01-04 21:28:01'),
(24, 4, 'Dr. Md. Shakhawat', 'Hossain', 'Male', '1977-07-04', '01234567893', '1672844181.jpg', 'MBBS, FCPS (Radiotherapy)', 'MBBS, FCPS (Radiotherapy)', 'Dr. Mirza Md. Shakhawat Hossain is a Oncologist in Dhaka. His qualification is MBBS, FCPS (Radiotherapy). He is a Senior Consultant in the Department of Oncology at Delta Hospital Limited. He regularly provides treatment to his patients at Labaid Cancer Hospital & Super Speciality Center. Practicing hour of Dr. Mirza Md. Shakhawat Hossain at Labaid Cancer Hospital & Super Speciality Center is 5pm to 8pm (Sun, Tue & Wed).', 'doctor7@gmail.com', NULL, '$2y$10$AaJAAOXAgOBQcLctlAmqf.o9TwGF3B7yVoIPEyK1Yo19zTw7i1pVa', '2023-01-04 21:33:20', '2023-01-05 01:56:21');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(10, '2022_11_09_200602_create_doctors_table', 3),
(18, '2022_11_21_215434_create_cancer_types_table', 6),
(22, '2022_11_02_055848_create_patients_table', 7),
(23, '2022_11_14_102033_create_patient_reports_table', 7),
(24, '2022_11_17_192745_create_patient_activites_table', 7),
(25, '2022_11_23_195249_create_prescriptions_table', 8),
(26, '2022_11_26_124038_create_contacts_table', 9),
(27, '2022_12_17_193648_create_bill_systems_table', 10);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('rajuahmed.cmt@gmail.com', '$2y$10$YkiWQP0Fxh/ANeEqsgaPJelZRbF/1tlmd/Jmmp4/o1Vj730Hgch2C', '2022-11-24 15:43:45');

-- --------------------------------------------------------

--
-- Table structure for table `patients`
--

CREATE TABLE `patients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `doctor_id` bigint(20) UNSIGNED DEFAULT NULL,
  `cancer_id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `age` int(11) NOT NULL,
  `blood` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `patients`
--

INSERT INTO `patients` (`id`, `doctor_id`, `cancer_id`, `first_name`, `last_name`, `gender`, `age`, `blood`, `number`, `image`, `address`, `description`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(6, 19, 6, 'Patient', 'Seven', 'Other', 50, 'O+', '01234567890', '1669835258.jpg', 'Mirpur-2, Dhaka-1216', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', 'patient7@gmail.com', NULL, '$2y$10$6xZbMp2CizBFYqGLaMFFXeKMZJVtFDOiY5tN.qDoSc1LutAOOjthS', NULL, '2022-11-30 19:07:38', '2022-12-21 16:01:02'),
(7, 18, 5, 'Md', 'Arif', 'Male', 9, 'B+', '01234567890', '1671701799.jpg', 'Mirpur-1, Dhaka-1216', 'Arif lives with his mother and a younger brother in a village of Barishal, while his father works in a restaurant in the capital, Dhaka.  \r\nIn December, 2022, Arif suddenly felt a severe pain in his ear. His mother, Mrs. Jinia, also noticed that her son had been looking very pale. They went to visit a doctor in their village, but there continued to be no improvement and Arif was getting sicker. \r\nArif was admitted to a nearby government hospital, where he was received a blood transfusion. It was then that he had a stroke and his right side became paralysed. Fortunately, with treatment he began to recover and his mother then brought him to DSH, supported by World Child Cancer. She knew about the hospital because they had successfully treated Arif for jaundice there when he was a baby.', 'patient1@gmail.com', NULL, '$2y$10$NKf0Ajy77dkc3gSKrbNrXe6uJcCU.5Z7YZ9SaD39wviyA2sH.C.Zi', NULL, '2022-12-22 09:36:40', '2022-12-22 11:35:23'),
(8, 18, 5, 'Sanjana', 'Akter', 'Female', 13, 'O+', '01234567890', '1671702810.jpg', 'Tengra Bazar, Moulvibazar, Bangladesh', 'The majority of blood cancers, also known as hematologic cancers, begin in the bone marrow, which produces blood. When abnormal blood cells begin to develop out of control, they disrupt the role of normal blood cells, which combat infection and create new blood cells.', 'patient2@gmail.com', NULL, '$2y$10$fSI596H6YB5hJBIMo.g9BurKqlOWvi2Arwg9IVB54dYRoFqU6X92K', NULL, '2022-12-22 09:53:30', '2022-12-22 11:35:44'),
(9, 20, 2, 'Md', 'Jamal', 'Male', 15, 'B+', '01234567890', '1672762505.jpg', 'Mirpur-2, Dhaka-1216', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', 'kidneycancer1@gmail.com', NULL, '$2y$10$oocGkgB0/w/TQcfC3w0Zm.VxStmVhzqk.hZL3ARUlcbyWpD5UWh0m', NULL, '2023-01-04 03:15:05', '2023-01-04 03:52:23'),
(10, 23, 7, 'Patient', '4', 'Female', 55, 'A+', '01234567890', '1672763899.jpg', 'Mirpur-2, Dhaka-1216', 'The majority of blood cancers, also known as hematologic cancers, begin in the bone marrow, which produces blood. When abnormal blood cells begin to develop out of control, they disrupt the role of normal blood cells, which combat infection and create new blood cells.', 'braincancer@gmail.com', NULL, '$2y$10$fgd2GLZlmS.9bYIv8y89SOBHMPlNMTfyhiSyPk3vqdVe5LoSx8f5K', NULL, '2023-01-04 03:38:19', '2023-01-05 00:59:18'),
(11, 23, 7, 'Hoksab', 'uddin', 'Male', 35, 'B+', '01978721193', '1672769572.jpg', 'Kustiya', 'Brain cancers include primary brain tumours, which start in the brain and almost never spread to other parts of the body, and secondary tumours (or metastases), which are caused by cancers that began in another part of the body.', 'braincancer1@gmail.com', NULL, '$2y$10$QQslGr5mZXoLUOYq7BYZ3uh.pgVIKzH81uy2V.PzGeM/ev2AYqCW6', '5xBHHFREWufog8JUsYi5gMskasgJgjAHdGXg7q1UpIasX6BkfW3qYZBoQM1p', '2023-01-04 05:12:52', '2023-01-05 00:59:36'),
(12, 23, 7, 'Didar', 'Hossain', 'Male', 45, 'B+', '01807821194', '1672802088.jpg', 'Chittagong', 'Primary brain tumors originate in the brain and occur as the result of abnormal changes to brain cells, known as mutations. These tumors may be malignant (cancerous) or benign (noncancerous). However, even benign tumors can damage normal brain tissue and cause serious problems.', 'braincancer2@gmail.com', NULL, '$2y$10$ZFZ2JaNXDNXFerhjamcn/e8c2AmHZ3Uh9vMBIuLc/DQpmI4Fs0bIq', NULL, '2023-01-04 14:14:48', '2023-01-05 00:59:57'),
(13, 23, 7, 'Azmir', 'hossain', 'Male', 68, 'O+', '01849725638', '1672803598.jpg', 'Mirpur-10', 'Benign tumors grow slowly and tend to respond more to surgical or other treatments. Malignant brain tumors are aggressive and grow faster. \r\nWhen cancer develops elsewhere in the body and spreads to the brain, it’s called a secondary brain tumor, or brain metastasis.', 'braincancer3@gmail.com', NULL, '$2y$10$XmibnjH2yz8huISd7EHZ/e9dVTwIx3SdejZYfscxZQi9cUFCo74S2', NULL, '2023-01-04 14:39:58', '2023-01-05 01:00:18'),
(14, 23, 7, 'Ema', 'Akter', 'Female', 50, 'AB+', '01750654801', '1672804779.jpg', 'Savar', '. Primary brain tumors originate in the brain and occur as the result of abnormal changes to brain cells, known as mutations. These tumors may be malignant (cancerous) or benign (noncancerous). However, even benign tumors can damage normal brain tissue and cause serious problems.', 'braincancer4@gmail.com', NULL, '$2y$10$w93SoOvUdlH1lFswPdaPS.yPDgKnCTzU2UO8nZQCnLxKvpL9sXggm', NULL, '2023-01-04 14:59:39', '2023-01-05 01:01:07'),
(15, 23, 7, 'Priti', 'Akter', 'Female', 63, 'A+', '01558936742', '1672805474.jpg', 'Pabna', 'Cancer is a disease caused when cells divide uncontrollably and spread into surrounding tissues. Cancer is caused by changes to dna . Most cancer-causing dna   changes occur in sections of DNA called genes. These changes are also called genetic changes.', 'braincancer5@gmail.com', NULL, '$2y$10$90pJcubI7..B13fnkfFB3.ESqadybSEhUvkIGRoEzFy3oKGlNtiOy', NULL, '2023-01-04 15:11:14', '2023-01-05 01:17:34'),
(16, 21, 3, 'Mrs.', 'Rupa Akter', 'Female', 34, 'B+', '01965751270', '1672814222.jpg', 'Chandra,Kaliakoi,Gazipur', 'Cancer that starts in the cells of your liver is known as liver cancer. The liver is a large organ that lies in the upper right part of your abdomen, under your diaphragm and above your stomach.\r\n\r\nA type of cancer that begins in the liver is known as primary liver cancer. Hepatoma and hepatocellular carcinoma are two other names for primary liver cancer.\r\n\r\nA type of cancer that begins elsewhere in the body and spreads to the liver is known as secondary liver cancer. Metastatic liver cancer is the medical term for a cancer that has spread, so secondary liver cancer is also known as metastatic liver cancer.', 'livercancer1@gmail.com', NULL, '$2y$10$seO..AjX9.o7TP2LN9m0peWtYWXWJFjFj7ih0T/pJWU6MMrGDPumS', NULL, '2023-01-04 17:37:02', '2023-01-05 01:02:22'),
(17, 20, 2, 'MD', 'ALAMIN', 'Male', 32, 'b+', '01303291412', '1672815245.png', 'Dhaka, Bangladesh', 'It is a long-established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text. A search for \'lorem Ipsum will uncover many websites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', 'alamin@gmail.com', NULL, '$2y$10$uukMLjTXXHrB4Bh66w.Ee.u0y5KYzJNQH35jqzMTJ0C2qXChF.yQe', NULL, '2023-01-04 17:54:05', '2023-01-04 19:36:36'),
(19, 21, 3, 'Israt', 'Begum', 'Female', 60, 'AB+', '01872711907', '1672816822.jpg', 'Savar,Dhaka', '1.My skin or the whites of my eyes turn yellow (jaundice), also have itchy skin, darker pee and paler poo than usual\r\n2.Loss of appetite or losing weight without trying to\r\n3.Feeling tired or having no energy\r\n4.Feeling generally unwell or having symptoms like flu\r\n5.A lump in the right side of your tummy', 'livercancer3@gmail.com', NULL, '$2y$10$hKc6LoHU5ISxQH3xqa3m0.7I9qIEAYUZds6TP62krFrG0Z1jzCtfe', NULL, '2023-01-04 18:20:22', '2023-01-05 01:06:38'),
(20, 21, 3, 'Shehnaz', 'Akter', 'Female', 57, 'A+', '01581265697', '1672817342.jpg', 'Ashulia,Savar,Dhaka', '1.Feeling tired or having no energy\r\n2.Feeling generally unwell or having symptoms like flu\r\n3.A lump in the right side of your tummy\r\n4.feeling or being sick\r\n5.Pain at the top right side of your tummy or in my right shoulder\r\nsymptoms of indigestion, such as feeling full very quickly when eating\r\na very swollen tummy that is not related to when I eat', 'livercancer4@gmail.com', NULL, '$2y$10$CvG2DZq9N2vM44P0FGcGguUobJ2U6KUiCekKbs2eKys3x821nvZTm', NULL, '2023-01-04 18:29:02', '2023-01-05 01:04:43'),
(21, 21, 3, 'Ankita', 'Das', 'Female', 12, 'B+', '01748872799', '1672818241.jpg', 'Savar,Dhaka', '1.Feeling tired or having no energy\r\n2.Feeling generally unwell or having symptoms like flu\r\n3.A lump in the right side of your tummy\r\n4.feeling or being sick\r\n5.Pain at the top right side of your tummy or in my right shoulder\r\nsymptoms of indigestion, such as feeling full very quickly when eating\r\na very swollen tummy that is not related to when I eat', 'livercancer5@gmail.com', NULL, '$2y$10$fciXaGyTq9sgBXg3N8hJ1enLaKaWJh2mnEix46mK03BaBEMvGqcey', NULL, '2023-01-04 18:44:01', '2023-01-05 01:05:10'),
(22, 21, 3, 'Ganesh', 'Prosad Sing', 'Male', 30, 'B+', '01924677720', '1672819010.jpg', 'Badda,Dhaka', '1.Feeling tired or having no energy\r\n2.Feeling generally unwell or having symptoms like flu\r\n3.A lump in the right side of your tummy\r\n4.feeling or being sick\r\n5.Pain at the top right side of your tummy or in my right shoulder\r\nsymptoms of indigestion, such as feeling full very quickly when eating\r\na very swollen tummy that is not related to when I eat', 'livercancer6@gmail.com', NULL, '$2y$10$1bMZgEag7eziUkcJyjrJseGezCBrplHjReN5k7XowDTJLuAtXzTYW', NULL, '2023-01-04 18:56:51', '2023-01-05 01:07:59'),
(23, 21, 3, 'Nasir', 'Hossain', 'Male', 75, 'O+', '01999212498', '1672819507.jpg', 'Khilgao,Dhaka', '1.Feeling tired or having no energy\r\n2.Feeling generally unwell or having symptoms like flu\r\n3.A lump in the right side of your tummy\r\n4.feeling or being sick\r\n5.Pain at the top right side of your tummy or in my right shoulder\r\nsymptoms of indigestion, such as feeling full very quickly when eating\r\na very swollen tummy that is not related to when I eat', 'livercancer7@gmail.com', NULL, '$2y$10$CMhINm70rHD6YIJkOUe4te1D2u.5we8HWDmo/PNnB3kWrUaGWEgBW', NULL, '2023-01-04 19:05:07', '2023-01-05 01:08:32'),
(24, 21, 3, 'Jeenat', 'Begum', 'Female', 62, 'A+', '01747040704', '1672820288.jpg', 'Mohakhali,Dhaka', '1.Feeling tired or having no energy\r\n2.Feeling generally unwell or having symptoms like flu\r\n3.A lump in the right side of your tummy\r\n4.feeling or being sick\r\n5.Pain at the top right side of your tummy or in my right shoulder\r\nsymptoms of indigestion, such as feeling full very quickly when eating\r\na very swollen tummy that is not related to when I eat', 'livercancer8@gmail.com', NULL, '$2y$10$RXKTZJCgEMhjY/prc8spfOCAXSchX1t1/YnURLTWCy9IQl193xWBq', NULL, '2023-01-04 19:18:08', '2023-01-05 01:11:46'),
(25, 23, 7, 'Sala', 'Uddin', 'Male', 60, 'AB+', '01939872708', '1672820839.jpg', 'Jessor', 'Cancer refers to any one of a large number of diseases characterized by the development of abnormal cells that divide uncontrollably and have the ability to infiltrate and destroy normal body tissue. Cancer often has the ability to spread throughout your body.', 'braincancer6@gmail.com', NULL, '$2y$10$Tpihd.s5CKLhMaicRix9IeAqUJe.xkxY8.udJ.FSKKl69p6ALx7NO', NULL, '2023-01-04 19:27:19', '2023-01-05 07:07:11'),
(26, 21, 3, 'Shamim', 'Ahmed', 'Male', 42, 'AB+', '01788299784', '1672821057.jpg', 'Sector-7, Uttara.Dhaka', '1.Feeling tired or having no energy\r\n2.Feeling generally unwell or having symptoms like flu\r\n3.A lump in the right side of your tummy\r\n4.feeling or being sick\r\n5.Pain at the top right side of your tummy or in my right shoulder\r\nsymptoms of indigestion, such as feeling full very quickly when eating\r\na very swollen tummy that is not related to when I eat', 'livercancer9@gmail.com', NULL, '$2y$10$kW61EzSEcjToVpoMmXzQ4ekaFXbuI1OcmcvpB4cZOQW.yYoWomvG6', NULL, '2023-01-04 19:30:57', '2023-01-05 03:42:31'),
(27, 21, 3, 'Rafikul', 'Islam Rofik', 'Male', 48, 'AB+', '01402103914', '1672821359.jpg', 'Bagha,Rajshahi', '1.Feeling tired or having no energy\r\n2.Feeling generally unwell or having symptoms like flu\r\n3.A lump in the right side of your tummy\r\n4.feeling or being sick\r\n5.Pain at the top right side of your tummy or in my right shoulder\r\nsymptoms of indigestion, such as feeling full very quickly when eating\r\na very swollen tummy that is not related to when I eat', 'livercancer10@gmail.com', NULL, '$2y$10$gbyWR0yZNACYyIv9jZ.EruIqQRUiQuqROg2O68oAaVYET4nnopb3O', NULL, '2023-01-04 19:35:59', '2023-01-05 01:12:17'),
(28, 23, 7, 'Salma', 'akter', 'Female', 45, 'O+', '01959872709', '1672821500.jpg', 'Khulna', 'Cancer is the second-leading cause of death in the world. But survival rates are improving for many types of cancer, thanks to improvements in cancer screening, treatment and prevention.', 'braincancer7@gmail.com', NULL, '$2y$10$GOMeBf0UdCixjOtsnYM61u.vesfVIypsVzPiCZ8GBL43Yb4yhBnwi', NULL, '2023-01-04 19:38:20', '2023-01-05 01:17:06'),
(29, 20, 2, 'md', 'Roktim', 'Male', 45, 'b+', '01741924025', '1672821510.jpg', 'Natore, Rajshahi', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', 'roktim@gmail.com', NULL, '$2y$10$l6A4ERQ1NaThrzunGoGWb.4yeQhOVQxpdnCFhzUoS7PBFHRo5061a', NULL, '2023-01-04 19:38:30', '2023-01-04 19:45:07'),
(30, 20, 2, 'Shawon', 'ali', 'Male', 50, 'a+', '01741925024', '1672822038.jpg', 'dhaka', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', 'shawon@gmail.com', NULL, '$2y$10$SzvJQ8eO/igFVE3JZ5yo5.BVKkax0bWGKxwGbH3PGGbVOEzFuAJFO', NULL, '2023-01-04 19:47:18', '2023-01-05 01:12:47'),
(31, 23, 7, 'Rakib', 'Uddin', 'Male', 58, 'A+', '01730645803', '1672824068.jpg', 'Chittagong', '. Cancer is a large group of diseases that can start in almost any organ or tissue of the body when abnormal cells grow uncontrollably, go beyond their usual boundaries to invade adjoining parts of the body and/or spread to other organs. The latter process is called .', 'braincancer9@gmail.com', NULL, '$2y$10$D4wDTOakjUgFUW55IJXlJ.2BNI5uAwJWhP2EciWDxM2u0EcItIJDS', NULL, '2023-01-04 20:21:08', '2023-01-05 01:17:58'),
(32, 23, 7, 'Rojina', 'Akter', 'Female', 50, 'B+', '01886512879', '1672824450.jpg', 'Pabna', 'Cancer is the second leading cause of death globally, accounting for an estimated 9.6 million deaths, or one in six deaths, in 2018. Lung, prostate, colorectal, stomach and liver cancer are the most common types of cancer in men, while breast, colorectal, lung, cervical and thyroid cancer are the most common among women.', 'braincancer10@gmail.com', NULL, '$2y$10$oHx78tz3cL26zvOX0yM0FupV3NoNI9BSEiKZnJ39yauzOgu/5xJfK', NULL, '2023-01-04 20:27:30', '2023-01-05 01:18:20'),
(33, 24, 4, 'Runa', 'Akter', 'Female', 40, 'A+', '01996872384', '1672826603.jpg', 'Khulna', 'Lung cancer is cancer that forms in tissues of the lung, usually in the cells that line the air passages. It is the leading cause of cancer death in both men and women. There are two main types: small cell lung cancer and non-small cell lung cancer. These two types grow differently and are treated differently', 'lungcancer1@gmail.com', NULL, '$2y$10$acyH27Vz.O90q/KRVwR6qOqu0FiyFbS7Ho.SZGIGr1Hxw8mfWPkky', NULL, '2023-01-04 21:03:23', '2023-01-05 01:13:10'),
(34, 24, 4, 'Fariya', 'Akter', 'Female', 50, 'B+', '01883567891', '1672827103.jpg', 'Jassor', 'Cancer is a disease in which cells in the body grow out of control. When cancer starts in the lungs, it is called lung cancer.\r\nLung cancer is the leading cause of cancer death. Not counting some kinds of skin cancer, lung cancer is the second most diagnosed cancer in both men and women in the United States. After increasing for decades,', 'lungcancer2@gmail.com', NULL, '$2y$10$Pom6g29KEG8GqmG/FEAIG.736UN79a3NLdL/ir4HYUrXWr6h32.qu', NULL, '2023-01-04 21:11:43', '2023-01-05 01:13:31'),
(35, 24, 4, 'Jabed', 'Hossain', 'Male', 50, 'AB+', '01806698735', '1672827430.jpg', 'Kustia', '.  Lung cancer screening is recommended only for adults who have no  Lung cancer is treated in several ways, depending on the type of lung cancer and how far it has spread.', 'lungcancer3@gmail.com', NULL, '$2y$10$927zvzhCrbmFMAE6iPW8T.t333WYmfkRmdv5ACqbYX8GUx/x4pgMO', NULL, '2023-01-04 21:17:10', '2023-01-05 01:14:00'),
(36, 24, 4, 'Josim', 'Uddin', 'Male', 60, 'O+', '01968571287', '1672827910.jpg', 'Barishal', 'People with non-small cell lung cancer can be treated with surgery, chemotherapy, radiation therapy, targeted therapy, or a combination of these treatments. People with small cell lung cancer are usually treated with radiation therapy and chemotherapy', 'lungcancer4@gmail.com', NULL, '$2y$10$CIbjZrOkosftmCWeDr.TsOVaoaPAucJZXb4drmBu/j.v7S75M0uD2', NULL, '2023-01-04 21:25:10', '2023-01-05 01:14:23'),
(37, 24, 4, 'Moriom', 'Begum', 'Female', 50, 'B+', '01305698487', '1672828206.jpg', 'Bhola', 'Lung cancer, also known as lung carcinoma[8] (since about 98–99% of all lung cancers are carcinomas), is a malignant lung tumor characterized by uncontrolled cell growth in tissues of the lung.[9] Lung carcinomas derive from transformed, malignant cells that originate as epithelial cells, or from tissues composed of epithelial cells. Other lung cancers, such as the rare sarcomas of the lung, are', 'lungcancer5@gmail.com', NULL, '$2y$10$tdqn5j1zf4QoU03cVfrrDekv2mT.NKSCYqAWD8nAcGsH23rCq7gHe', NULL, '2023-01-04 21:30:06', '2023-01-05 01:14:47'),
(38, 24, 4, 'Morjina', 'Begum', 'Female', 55, 'O+', '01778569427', '1672828548.jpg', 'Mirpur-10', 'Lung cancer rates are decreasing nationally, as fewer people smoke cigarettes and as lung cancer treatments improve. People with lung cancer are living longer after their diagnosis because more cases are found early, when treatment works best.', 'lungcancer6@gmail.com', NULL, '$2y$10$dUl5pMkch.BxXujGzpGUKudY.2iyIULgV2qBmlsC52qX39fTlmdKa', NULL, '2023-01-04 21:35:48', '2023-01-05 01:15:25'),
(39, 24, 4, 'Mushfiq', 'Rahman', 'Male', 60, 'O-', '01949872708', '1672828902.jpg', 'Khulna', 'The major method of prevention is the avoidance of risk factors, including smoking and air pollution.[15] Treatment and long-term outcomes depend on the type of cancer, the stage (degree of spread), and the person\'s overall health.[13] Most cases are not curable.[3] Common treatments include surgery, chemotherap', 'lungcancer7@gmail.com', NULL, '$2y$10$LDqvVA.iIW9ObwX0R0gw0egOSP5JYs8L8kpFLkE5eTBG3b2t4c9B6', NULL, '2023-01-04 21:41:42', '2023-01-05 01:15:55'),
(40, 24, 4, 'Kawser', 'Hossain', 'Male', 65, 'O+', '01405896725', '1672829306.jpg', 'Rajshahi', '.   lung cancer occurred in 2.2 million people and resulted in 1.8 million deaths.[6] It is the most common cause of cancer-related death in both men and women.[17][18] The average age at diagnosis is 71 years.[2] In most countries the five-year survival rate is around 10 to 20%,[6] while', 'lungcancer8@gmail.com', NULL, '$2y$10$Are.znFs5HUsKkbNH9saSe1b5MVTK//yxIex.ikPGsmxtgLOYjGlO', NULL, '2023-01-04 21:48:26', '2023-01-05 01:16:17'),
(41, 24, 4, 'Sumona', 'Akter', 'Female', 50, 'A+', '01995687537', '1672829898.jpg', 'Pabna', 'Lung tumors also often cause the release of body-altering hormones, which themselves cause unusual symptoms, called paraneoplastic syndromes.[22] Inappropriate hormone release can cause dramatic shifts in concentrations of blood minerals. Most common is hypercalcemia caused by over-production of parathyroid hormone-related protein or parathyroid hormone. Hypercalcemia can manifest as nausea,', 'lungcancer9@gmail.com', NULL, '$2y$10$33zC8A1aPneuKMIumdADsussbie94xGX1T/DpLt0BpyixCTcrCPgK', NULL, '2023-01-04 21:58:18', '2023-01-05 01:16:39'),
(42, NULL, 4, 'Jesmin', 'Akter', 'Female', 55, 'B+', '01698574256', '1672830272.jpg', 'Kustia', 'Lung cancer can often appear as a solitary pulmonary nodule on a chest radiograph. However, the differential diagnosis is wide and many other diseases can also give this appearance, including metastatic cancer, hamartomas, and infectious granulomas caused by tuberculosis, histoplasmosis, or coccidioidomycosis', 'lungcancer10@gmail.com', NULL, '$2y$10$E8ZaG1yJlIiO1tZPbE2N0.EVHycdtnJeBHw8qosKshTU9hnZ1A0a.', NULL, '2023-01-04 22:04:32', '2023-01-04 22:04:32'),
(43, 20, 2, 'Runa', 'Akter', 'Female', 50, 'b+', '01474369520', '1672830864.jpg', 'dhaka', 'runa akter', 'runa@gmail.com', NULL, '$2y$10$ZMlTQ7jqei2jBnOM4qvjuetjsulqjYHfJloZHhREHn5G32uzQ5cmS', NULL, '2023-01-04 22:14:24', '2023-01-04 22:20:21'),
(44, 22, 6, 'Iffat  Jahan', 'Urmi', 'Female', 30, 'A+', '01774543171', '1672832057.PNG', 'Dhaka Mirpur', 'A small rough spot on skin chronically exposed to the sun, precancerous, can develop into a skin cancer called squamous cell carcinoma, a process that typically takes years. Actinic keratoses occur most frequently in fair-skinned people. Common locations are the face, scalp, back of the neck, upper chest, forearm and back of the hand.\r\nPrevention is by minimizing sun exposure. Treatments include cryosurgery (freezing them with liquid nitrogen), cutting them away, burning them, putting 5-fluorouracil (5-FU) on them, and photodynamic therapy (which involves injecting into the bloodstream a chemical that collects in actinic keratoses and makes them more sensitive to exposure to a specialized form of light)', 'skincancer1@gmail.com', NULL, '$2y$10$v2WZgWkucptOudvam3uTWug4nWNBT/F/dYNgU4x7ReNPKH/CIFWnK', NULL, '2023-01-04 22:34:18', '2023-01-05 01:18:43'),
(45, 22, 6, 'Tania', 'Islam', 'Female', 35, 'A+', '01312833045', '1672835056.jpg', 'Rajshahi', 'Nevoid basal cell carcinoma syndrome affects many areas of the body and means you have an increased risk of developing various cancerous and noncancerous tumors. Also called Gorlin syndrome, patients typically begin developing basal cell carcinomas during adolescence or early adulthood on the back, chest and face. The number can vary per individual with some never developing any while others may develop thousands of these cancers.', 'skincancer2@gmail.com', NULL, '$2y$10$siZ.WpTu7/IOF8MiFDnjl.AtpTIAmtc6bkdNhr/oB9ShAAUgJN0z6', NULL, '2023-01-04 23:24:16', '2023-01-05 01:19:08'),
(46, 22, 6, 'Israt Jahan', 'Ontora', 'Female', 25, 'A-', '01321096545', '1672836923.jpeg', 'Dhaka', 'Nevoid basal cell carcinoma syndrome affects many areas of the body and means you have an increased risk of developing various cancerous and noncancerous tumors. Also called Gorlin syndrome, patients typically begin developing basal cell carcinomas during adolescence or early adulthood on the back, chest and face. The number can vary per individual with some never developing any while others may develop thousands of these cancers.', 'skincancer3@gmail.com', NULL, '$2y$10$mBueeB6/LEYV4zBoBxFKDeTYYLzuEZGjPxr64F87k4/WuWsND8tR.', NULL, '2023-01-04 23:55:23', '2023-01-05 01:25:50'),
(47, 22, 6, 'Abdullah Al', 'Shakil', 'Male', 40, 'B+', '01751040403', '1672837588.jpeg', 'Sirajgonj', 'Nevoid basal cell carcinoma syndrome affects many areas of the body and means you have an increased risk of developing various cancerous and noncancerous tumors. Also called Gorlin syndrome, patients typically begin developing basal cell carcinomas during adolescence or early adulthood on the back, chest and face. The number can vary per individual with some never developing any while others may develop thousands of these cancers.', 'skincancer4@gmail.com', NULL, '$2y$10$5bXGcqg37vdvB1mAIr2w0OllGY8j2uKXFw7TDbF64Tu.EmnpgJAgO', NULL, '2023-01-05 00:06:28', '2023-01-05 01:03:29'),
(48, 22, 6, 'Araddha Sorkar', 'Sathi', 'Female', 30, 'A-', '01729655523', '1672838319.PNG', 'Barisal', 'Basal-cell carcinomas are most commonly present on sun-exposed areas of the skin, especially the face. They rarely metastasize and rarely cause death. They are easily treated with surgery or radiation. Squamous-cell skin cancers are also common, but much less common than basal-cell cancers. They metastasize more frequently than BCCs. Even then, the metastasis rate is quite low, with the exception of SCC of the lip, ear, and in people who are immunosuppressed. Melanoma are the least frequent of the three common skin cancers. They frequently metastasize, and potentially cause death once they spread.', 'skincancer5@gmail.com', NULL, '$2y$10$YqgAJvqSWWKdr85JyZZiWusVGDlpRZlJfEoZXnjtfbxpfaWS4Ws8.', NULL, '2023-01-05 00:18:39', '2023-01-05 01:19:59'),
(49, 22, 6, 'Afsana', 'Tani', 'Female', 24, 'B-', '01321096545', '1672838752.jpg', 'Rangpur', 'Basal-cell carcinomas are most commonly present on sun-exposed areas of the skin, especially the face. They rarely metastasize and rarely cause death. They are easily treated with surgery or radiation. Squamous-cell skin cancers are also common, but much less common than basal-cell cancers. They metastasize more frequently than BCCs. Even then, the metastasis rate is quite low, with the exception of SCC of the lip, ear, and in people who are immunosuppressed. Melanoma are the least frequent of the three common skin cancers. They frequently metastasize, and potentially cause death once they spread.', 'skincancer6@gmail.com', NULL, '$2y$10$gP5FKrJdtCXe77Sx0glAyOA.sZcsKfiUd1jgAiToA8F3rxok0gmDC', NULL, '2023-01-05 00:25:52', '2023-01-05 01:33:38'),
(50, NULL, 6, 'Sabina Yesmin', 'Mitu', 'Female', 28, 'A+', '01918946569', '1672839716.jpg', 'Rajshahi Puthia', 'Basal-cell carcinomas are most commonly present on sun-exposed areas of the skin, especially the face. They rarely metastasize and rarely cause death. They are easily treated with surgery or radiation. Squamous-cell skin cancers are also common, but much less common than basal-cell cancers. They metastasize more frequently than BCCs. Even then, the metastasis rate is quite low, with the exception of SCC of the lip, ear, and in people who are immunosuppressed. Melanoma are the least frequent of the three common skin cancers. They frequently metastasize, and potentially cause death once they spread.', 'skincancer7@gmail.com', NULL, '$2y$10$DzSZeHMLfUezBcvpmd5wmunKbIXib4HANAk6T8qKFDU6EqVw8cFGm', NULL, '2023-01-05 00:41:57', '2023-01-05 00:41:57'),
(51, 22, 6, 'Md', 'Robiul', 'Male', 35, 'AB-', '01529653255', '1672840119.jpeg', 'Mymensingh', 'Basal-cell carcinomas are most commonly present on sun-exposed areas of the skin, especially the face. They rarely metastasize and rarely cause death. They are easily treated with surgery or radiation. Squamous-cell skin cancers are also common, but much less common than basal-cell cancers. They metastasize more frequently than BCCs. Even then, the metastasis rate is quite low, with the exception of SCC of the lip, ear, and in people who are immunosuppressed. Melanoma are the least frequent of the three common skin cancers. They frequently metastasize, and potentially cause death once they spread.', 'skincancer8@gmail.com', NULL, '$2y$10$sme.gc/zWICZCGyIFXyrnOoJbubvT7qMLztUco2vZpAc0sSLNEhPy', NULL, '2023-01-05 00:48:39', '2023-01-05 01:34:30'),
(52, NULL, 6, 'Faruk', 'Ahmed', 'Male', 50, 'A+', '01321096543', '1672840410.jpg', 'Sirajgonj', 'Basal-cell carcinomas are most commonly present on sun-exposed areas of the skin, especially the face. They rarely metastasize and rarely cause death. They are easily treated with surgery or radiation. Squamous-cell skin cancers are also common, but much less common than basal-cell cancers. They metastasize more frequently than BCCs. Even then, the metastasis rate is quite low, with the exception of SCC of the lip, ear, and in people who are immunosuppressed. Melanoma are the least frequent of the three common skin cancers. They frequently metastasize, and potentially cause death once they spread.', 'skincancer9@gmail.com', NULL, '$2y$10$IVU9/IknLxfq9cmhaamcZ.7uG0H7P9PN0YrSvMa4GMqkSjSTmLKNG', NULL, '2023-01-05 00:53:30', '2023-01-05 00:53:30'),
(53, 22, 6, 'Md Naimul', 'Islam', 'Male', 28, 'A-', '01623456985', '1672841016.jpg', 'Pabna', 'The first sign of non-melanoma skin cancer is usually the appearance of a lump or discoloured patch on the skin that persists after a few weeks and slowly progresses over months or sometimes years. This is the cancer, or tumour.In most cases, cancerous lumps are red and firm and sometimes turn into ulcers, while cancerous patches are usually flat and scaly.\r\n\r\nNon-melanoma skin cancer most often develops on areas of skin regularly exposed to the sun, such as the face, ears, hands, shoulders, upper chest and back.', 'skincancer10@gmail.com', NULL, '$2y$10$gJBg66j5RDQ.knws4xhYM.dvGwhRapTO5AOp/pMSdwcpM16kKV3Me', NULL, '2023-01-05 01:03:36', '2023-01-05 01:19:32'),
(54, NULL, 2, 'Test', 'Patient1', 'Male', 30, 'A+', '01234567890', '1672891928.jpeg', 'Mirpur-2, Dhaka-1216', 'dhjahsdjah', 'testpatient2@gmail.com', NULL, '$2y$10$6shtCuPABGrs7iVGkRm2gudKWYY0ru3lHHnVNL8VLJdo/Jxx1rTsS', NULL, '2023-01-05 04:12:08', '2023-01-05 04:12:08'),
(55, 21, 3, 'Test', 'Patient2', 'Male', 35, 'A+', '01234567890', '1672892175.jpeg', 'Mirpur-2, Dhaka-1216', 'Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.', 'testpatient3@gmail.com', NULL, '$2y$10$vkLqqO1lNu7qA5T5JCwIUOQy4FrIakUtSkBmdMq31w9ARY9YcmvUK', NULL, '2023-01-05 04:16:15', '2023-01-05 04:18:55');

-- --------------------------------------------------------

--
-- Table structure for table `patient_activites`
--

CREATE TABLE `patient_activites` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `patient_id` bigint(20) UNSIGNED NOT NULL,
  `heart_rate` int(11) NOT NULL,
  `fever` int(11) NOT NULL,
  `glucose` decimal(2,1) NOT NULL,
  `upperblood` int(11) NOT NULL,
  `lowerblood` int(11) NOT NULL,
  `bloodcount` decimal(8,3) NOT NULL,
  `weight` int(11) NOT NULL,
  `height` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `smoking` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lungs` int(11) NOT NULL,
  `stomach` int(11) NOT NULL,
  `liver` int(11) NOT NULL,
  `heart` int(11) NOT NULL,
  `brain` int(11) NOT NULL,
  `oxygen` int(11) NOT NULL,
  `carbon` int(11) NOT NULL,
  `hydrogen` int(11) NOT NULL,
  `nitrogen` int(11) NOT NULL,
  `calcium` int(11) NOT NULL,
  `other` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `patient_activites`
--

INSERT INTO `patient_activites` (`id`, `patient_id`, `heart_rate`, `fever`, `glucose`, `upperblood`, `lowerblood`, `bloodcount`, `weight`, `height`, `smoking`, `lungs`, `stomach`, `liver`, `heart`, `brain`, `oxygen`, `carbon`, `hydrogen`, `nitrogen`, `calcium`, `other`, `created_at`, `updated_at`) VALUES
(3, 8, 80, 98, '5.5', 120, 80, '9.456', 45, '4\'5\'\'', 'No Smoker', 80, 70, 70, 70, 70, 60, 40, 40, 30, 40, 45, '2022-12-22 11:00:59', '2022-12-22 11:00:59'),
(4, 9, 80, 98, '5.5', 120, 80, '9.450', 60, '5\'6\'\'', 'No Smoker', 40, 80, 70, 70, 80, 50, 20, 40, 20, 30, 50, '2023-01-04 03:24:28', '2023-01-04 03:24:28'),
(5, 10, 80, 94, '5.7', 120, 70, '9.550', 55, '5\'4\'\'', 'Smoker', 70, 80, 60, 70, 50, 70, 50, 30, 40, 50, 50, '2023-01-04 03:46:57', '2023-01-04 03:46:57'),
(6, 11, 80, 95, '5.5', 120, 70, '9.550', 60, '5.5\"', 'No Smoker', 95, 70, 55, 75, 85, 75, 45, 40, 35, 45, 50, '2023-01-04 05:28:16', '2023-01-04 05:28:16'),
(7, 12, 80, 94, '5.6', 125, 85, '9.550', 60, '5.5\"', 'No Smoker', 90, 75, 55, 60, 85, 75, 45, 40, 35, 40, 50, '2023-01-04 14:20:59', '2023-01-04 14:20:59'),
(8, 13, 90, 98, '5.6', 125, 85, '9.450', 60, '5.6\"', 'No Smoker', 75, 70, 65, 75, 85, 74, 45, 50, 35, 45, 50, '2023-01-04 14:46:40', '2023-01-04 14:46:40'),
(9, 14, 90, 103, '5.6', 130, 90, '9.450', 68, '5\'6', 'No Smoker', 95, 75, 55, 75, 90, 74, 45, 50, 35, 50, 60, '2023-01-04 15:03:37', '2023-01-04 15:03:37'),
(10, 15, 94, 110, '5.7', 135, 95, '10.500', 55, '5.5\"', 'No Smoker', 95, 74, 54, 65, 90, 74, 45, 50, 40, 50, 60, '2023-01-04 15:14:30', '2023-01-04 15:14:30'),
(11, 16, 80, 98, '5.1', 120, 75, '10.000', 49, '5\'2\"', 'No Smoker', 93, 75, 48, 86, 90, 76, 24, 10, 5, 25, 5, '2023-01-04 17:45:49', '2023-01-04 17:47:10'),
(13, 17, 82, 100, '5.5', 110, 70, '9.400', 54, '5.6', 'Smoker', 90, 70, 50, 70, 80, 70, 40, 45, 30, 40, 40, '2023-01-04 17:58:18', '2023-01-04 17:58:18'),
(14, 19, 80, 97, '6.0', 110, 70, '8.000', 42, '5\'1\"', 'No Smoker', 80, 70, 50, 80, 58, 60, 20, 10, 24, 30, 40, '2023-01-04 18:22:50', '2023-01-04 18:22:50'),
(15, 20, 80, 98, '5.0', 116, 80, '10.000', 46, '5\'2\"', 'No Smoker', 80, 70, 42, 70, 78, 60, 10, 5, 2, 13, 10, '2023-01-04 18:32:05', '2023-01-04 18:32:05'),
(16, 21, 80, 97, '5.6', 110, 70, '10.000', 25, '4\'2\"', 'No Smoker', 90, 85, 52, 95, 92, 75, 10, 5, 5, 3, 2, '2023-01-04 18:46:39', '2023-01-04 18:46:39'),
(17, 22, 78, 96, '6.0', 120, 80, '10.000', 58, '5\'6\"', 'Smoker', 80, 85, 58, 78, 80, 60, 10, 5, 10, 5, 10, '2023-01-04 18:59:08', '2023-01-04 18:59:08'),
(18, 23, 75, 97, '5.4', 120, 80, '8.000', 52, '5\'5\"', 'No Smoker', 80, 75, 50, 80, 90, 60, 10, 5, 10, 10, 15, '2023-01-04 19:07:28', '2023-01-04 19:07:28'),
(19, 24, 75, 95, '4.4', 118, 60, '8.000', 43, '5\'2\"', 'No Smoker', 80, 78, 42, 72, 78, 60, 10, 5, 5, 10, 10, '2023-01-04 19:20:28', '2023-01-04 19:20:28'),
(20, 25, 84, 98, '5.7', 135, 95, '10.600', 55, '5.4\"', 'No Smoker', 75, 65, 54, 65, 84, 68, 45, 55, 35, 55, 50, '2023-01-04 19:30:39', '2023-01-04 19:30:39'),
(21, 26, 80, 98, '5.0', 120, 76, '10.000', 60, '5\'6\"', 'No Smoker', 90, 84, 56, 70, 80, 68, 5, 10, 7, 5, 5, '2023-01-04 19:33:34', '2023-01-04 19:33:34'),
(22, 27, 80, 98, '6.0', 115, 70, '10.000', 53, '5\'6\"', 'No Smoker', 92, 78, 45, 80, 90, 60, 10, 5, 5, 10, 10, '2023-01-04 19:37:33', '2023-01-04 19:37:33'),
(23, 28, 75, 105, '6.5', 125, 85, '10.600', 55, '5.4\"', 'No Smoker', 75, 65, 68, 65, 90, 75, 50, 55, 40, 50, 60, '2023-01-04 19:41:41', '2023-01-04 19:41:41'),
(24, 29, 85, 105, '5.3', 120, 80, '9.450', 40, '5.1', 'No Smoker', 90, 70, 50, 70, 80, 50, 30, 40, 30, 40, 40, '2023-01-04 19:42:29', '2023-01-04 19:42:29'),
(25, 30, 23, 105, '6.5', 120, 80, '9.400', 65, '5.6', 'Smoker', 90, 70, 50, 70, 80, 70, 40, 45, 30, 40, 40, '2023-01-04 19:50:05', '2023-01-04 19:50:05'),
(26, 31, 85, 104, '5.5', 108, 90, '10.500', 60, '5.5\"', 'Smoker', 80, 65, 55, 75, 80, 65, 50, 45, 40, 50, 60, '2023-01-04 20:24:40', '2023-01-04 20:24:40'),
(27, 32, 85, 95, '5.4', 135, 90, '10.600', 50, '5.3\"', 'No Smoker', 80, 65, 50, 65, 90, 75, 50, 55, 40, 45, 60, '2023-01-04 20:30:56', '2023-01-04 20:30:56'),
(28, 33, 80, 105, '5.5', 120, 80, '9.500', 45, '5.4\"', 'No Smoker', 80, 65, 45, 60, 80, 70, 40, 45, 35, 45, 50, '2023-01-04 21:08:52', '2023-01-04 21:08:52'),
(29, 34, 85, 103, '5.4', 120, 85, '10.400', 45, '5.3\"', 'No Smoker', 80, 60, 55, 65, 87, 75, 45, 50, 45, 55, 50, '2023-01-04 21:14:33', '2023-01-04 21:14:33'),
(30, 35, 90, 104, '5.5', 125, 85, '9.450', 55, '5.6\"', 'No Smoker', 95, 75, 55, 75, 85, 80, 45, 50, 40, 45, 55, '2023-01-04 21:20:18', '2023-01-04 21:20:18'),
(31, 36, 90, 104, '5.4', 125, 90, '10.550', 60, '5.5\"', 'No Smoker', 90, 75, 45, 65, 70, 65, 50, 55, 40, 45, 50, '2023-01-04 21:27:36', '2023-01-04 21:27:36'),
(32, 37, 90, 102, '5.5', 130, 80, '9.450', 50, '5.3\"', 'No Smoker', 95, 65, 60, 75, 85, 65, 50, 55, 45, 45, 60, '2023-01-04 21:32:39', '2023-01-04 21:32:39'),
(33, 38, 95, 103, '5.4', 130, 85, '10.500', 50, '5.3\"', 'No Smoker', 85, 75, 65, 75, 80, 65, 70, 50, 45, 50, 60, '2023-01-04 21:38:21', '2023-01-04 21:38:21'),
(34, 39, 95, 95, '5.5', 130, 95, '1055.000', 45, '5.5', 'No Smoker', 88, 75, 56, 80, 95, 75, 45, 50, 60, 45, 60, '2023-01-04 21:44:41', '2023-01-04 21:44:41'),
(35, 40, 87, 107, '5.5', 110, 80, '9.340', 55, '5.7', 'No Smoker', 90, 80, 60, 70, 90, 60, 80, 67, 90, 49, 70, '2023-01-04 21:52:24', '2023-01-04 21:52:24'),
(36, 41, 88, 105, '5.5', 130, 85, '9.500', 50, '5.4', 'No Smoker', 95, 75, 55, 70, 85, 75, 50, 60, 40, 50, 60, '2023-01-04 22:01:50', '2023-01-04 22:01:50'),
(37, 42, 85, 140, '5.6', 1230, 85, '9.560', 50, '5.6\"', 'No Smoker', 85, 75, 55, 75, 80, 75, 50, 55, 40, 60, 65, '2023-01-04 22:07:15', '2023-01-04 22:07:15'),
(38, 43, 82, 1003, '5.5', 120, 80, '9.300', 55, '5.1', 'No Smoker', 90, 70, 50, 70, 80, 70, 40, 45, 30, 40, 30, '2023-01-04 22:15:59', '2023-01-04 22:15:59'),
(39, 44, 70, 80, '5.5', 115, 85, '9.456', 60, '5\'6', 'No Smoker', 40, 70, 50, 70, 80, 80, 50, 45, 35, 40, 50, '2023-01-04 23:12:15', '2023-01-04 23:12:15'),
(40, 45, 82, 70, '6.5', 120, 80, '9.450', 55, '5.5', 'No Smoker', 90, 70, 50, 70, 75, 85, 50, 45, 30, 50, 40, '2023-01-04 23:45:33', '2023-01-04 23:45:33'),
(41, 46, 83, 75, '5.5', 120, 80, '9.550', 65, '5.6', 'No Smoker', 90, 70, 50, 70, 80, 70, 40, 45, 30, 40, 40, '2023-01-04 23:59:57', '2023-01-04 23:59:57'),
(42, 47, 82, 75, '5.5', 120, 70, '9.650', 65, '5.8', 'Smoker', 90, 70, 50, 60, 50, 80, 60, 45, 30, 50, 40, '2023-01-05 00:10:20', '2023-01-05 00:10:20'),
(43, 48, 82, 75, '5.0', 120, 75, '9.500', 55, '5.0', 'No Smoker', 90, 70, 50, 65, 60, 80, 70, 50, 35, 40, 40, '2023-01-05 00:22:31', '2023-01-05 00:22:31'),
(44, 49, 82, 80, '5.0', 120, 65, '9.450', 58, '5.0', 'No Smoker', 90, 70, 45, 70, 80, 85, 60, 45, 30, 40, 45, '2023-01-05 00:28:48', '2023-01-05 00:28:48'),
(45, 50, 82, 80, '5.6', 120, 80, '9.650', 65, '5.6', 'No Smoker', 80, 70, 50, 70, 70, 90, 50, 45, 35, 55, 45, '2023-01-05 00:44:35', '2023-01-05 00:44:35'),
(46, 51, 82, 69, '5.6', 120, 75, '9.320', 65, '5.6', 'Smoker', 65, 55, 55, 60, 70, 80, 40, 45, 30, 50, 60, '2023-01-05 00:51:38', '2023-01-05 00:51:38'),
(47, 52, 80, 75, '6.5', 120, 65, '9.000', 70, '5.8', 'Smoker', 56, 60, 50, 70, 70, 70, 40, 75, 40, 50, 40, '2023-01-05 00:58:47', '2023-01-05 00:58:47'),
(48, 53, 82, 65, '5.5', 120, 70, '8.550', 75, '5.7', 'Smoker', 75, 70, 60, 70, 70, 85, 50, 60, 40, 50, 60, '2023-01-05 01:06:43', '2023-01-05 01:06:43');

-- --------------------------------------------------------

--
-- Table structure for table `patient_reports`
--

CREATE TABLE `patient_reports` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `patient_id` bigint(20) UNSIGNED NOT NULL,
  `r_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `patient_reports`
--

INSERT INTO `patient_reports` (`id`, `patient_id`, `r_image`, `created_at`, `updated_at`) VALUES
(3, 8, '1671705243.jpeg', '2022-12-22 10:34:03', '2022-12-22 10:34:03'),
(4, 8, '1671705263.jpeg', '2022-12-22 10:34:23', '2022-12-22 10:34:23'),
(5, 8, '1671705277.jpg', '2022-12-22 10:34:37', '2022-12-22 10:34:37'),
(6, 9, '1672762864.jpg', '2023-01-04 03:21:04', '2023-01-04 03:21:04'),
(7, 11, '1672770215.jpg', '2023-01-04 05:23:35', '2023-01-04 05:23:35'),
(8, 12, '1672802160.jpg', '2023-01-04 14:16:00', '2023-01-04 14:16:00'),
(9, 13, '1672803688.jpg', '2023-01-04 14:41:28', '2023-01-04 14:41:28'),
(10, 14, '1672804880.jpg', '2023-01-04 15:01:20', '2023-01-04 15:01:20'),
(11, 15, '1672805550.jpg', '2023-01-04 15:12:30', '2023-01-04 15:12:30'),
(12, 16, '1672815009.jpg', '2023-01-04 17:50:09', '2023-01-04 17:50:09'),
(13, 16, '1672815030.jpg', '2023-01-04 17:50:30', '2023-01-04 17:50:30'),
(14, 17, '1672815377.png', '2023-01-04 17:56:17', '2023-01-04 17:56:17'),
(17, 19, '1672817047.jpg', '2023-01-04 18:24:07', '2023-01-04 18:24:07'),
(18, 20, '1672817566.jpg', '2023-01-04 18:32:46', '2023-01-04 18:32:46'),
(19, 21, '1672818737.JPG', '2023-01-04 18:52:17', '2023-01-04 18:52:17'),
(20, 22, '1672819202.jpeg', '2023-01-04 19:00:02', '2023-01-04 19:00:02'),
(21, 23, '1672819702.jpg', '2023-01-04 19:08:22', '2023-01-04 19:08:22'),
(22, 24, '1672820481.jpeg', '2023-01-04 19:21:21', '2023-01-04 19:21:21'),
(23, 25, '1672820926.jpg', '2023-01-04 19:28:46', '2023-01-04 19:28:46'),
(24, 26, '1672821237.jpg', '2023-01-04 19:33:57', '2023-01-04 19:33:57'),
(25, 27, '1672821502.jpg', '2023-01-04 19:38:22', '2023-01-04 19:38:22'),
(26, 27, '1672821527.jpg', '2023-01-04 19:38:47', '2023-01-04 19:38:47'),
(27, 28, '1672821605.jpg', '2023-01-04 19:40:05', '2023-01-04 19:40:05'),
(28, 29, '1672821671.jpg', '2023-01-04 19:41:11', '2023-01-04 19:41:11'),
(29, 30, '1672822112.jpg', '2023-01-04 19:48:32', '2023-01-04 19:48:32'),
(30, 31, '1672824188.jpg', '2023-01-04 20:23:08', '2023-01-04 20:23:08'),
(31, 32, '1672824562.jpg', '2023-01-04 20:29:22', '2023-01-04 20:29:22'),
(32, 33, '1672826841.jpg', '2023-01-04 21:07:21', '2023-01-04 21:07:21'),
(33, 34, '1672827186.jpg', '2023-01-04 21:13:06', '2023-01-04 21:13:06'),
(34, 35, '1672827510.jpg', '2023-01-04 21:18:30', '2023-01-04 21:18:30'),
(35, 36, '1672827977.jpg', '2023-01-04 21:26:17', '2023-01-04 21:26:17'),
(36, 37, '1672828276.jpg', '2023-01-04 21:31:16', '2023-01-04 21:31:16'),
(37, 38, '1672828612.jpg', '2023-01-04 21:36:52', '2023-01-04 21:36:52'),
(38, 39, '1672828979.jpg', '2023-01-04 21:42:59', '2023-01-04 21:42:59'),
(39, 40, '1672829420.jpg', '2023-01-04 21:50:20', '2023-01-04 21:50:20'),
(40, 41, '1672829961.jpg', '2023-01-04 21:59:21', '2023-01-04 21:59:21'),
(41, 42, '1672830333.jpg', '2023-01-04 22:05:33', '2023-01-04 22:05:33'),
(42, 43, '1672830899.png', '2023-01-04 22:14:59', '2023-01-04 22:14:59'),
(43, 44, '1672833345.PNG', '2023-01-04 22:55:45', '2023-01-04 22:55:45'),
(44, 45, '1672836198.jpeg', '2023-01-04 23:43:18', '2023-01-04 23:43:18'),
(45, 46, '1672837011.jpg', '2023-01-04 23:56:51', '2023-01-04 23:56:51'),
(46, 47, '1672837674.jpg', '2023-01-05 00:07:54', '2023-01-05 00:07:54'),
(47, 48, '1672838435.jpg', '2023-01-05 00:20:35', '2023-01-05 00:20:35'),
(48, 49, '1672838824.jpg', '2023-01-05 00:27:04', '2023-01-05 00:27:04'),
(49, 50, '1672839791.jpg', '2023-01-05 00:43:11', '2023-01-05 00:43:11'),
(50, 51, '1672840202.jpeg', '2023-01-05 00:50:02', '2023-01-05 00:50:02'),
(51, 52, '1672840633.PNG', '2023-01-05 00:57:13', '2023-01-05 00:57:13'),
(52, 53, '1672841090.jpg', '2023-01-05 01:04:50', '2023-01-05 01:04:50');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `prescriptions`
--

CREATE TABLE `prescriptions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `patient_id` bigint(20) UNSIGNED NOT NULL,
  `medicine` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `strength` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dose` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `advice` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `duration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `prescriptions`
--

INSERT INTO `prescriptions` (`id`, `patient_id`, `medicine`, `strength`, `dose`, `advice`, `duration`, `created_at`, `updated_at`) VALUES
(7, 8, 'Napa', '655mg', '1+1+1', 'After Meal', '7days', '2022-12-22 12:19:38', '2022-12-22 12:19:38'),
(8, 8, 'sergel', '40mg', '1+0+1', 'Before Meal', '7days', '2022-12-22 12:19:38', '2022-12-22 12:19:38'),
(9, 6, 'Napa', '655mg', '1+1+1', 'After Meal', '7days', '2023-01-04 03:57:33', '2023-01-04 03:57:33'),
(10, 17, 'Napa', '655mg', '1+1+1', 'After Meal', '7days', '2023-01-05 01:41:39', '2023-01-05 01:41:39'),
(11, 17, 'sergel', '40mg', '1+0+1', 'Before Meal', '7days', '2023-01-05 01:41:39', '2023-01-05 01:41:39'),
(12, 17, 'Napa', '655mg', '1+1+1', 'After Meal', '7days', '2023-01-05 04:21:39', '2023-01-05 04:21:39'),
(13, 17, 'sergel', '40mg', '1+0+1', 'Before Meal', '7days', '2023-01-05 04:21:39', '2023-01-05 04:21:39');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Tohidur Rahman', 'admin@gmail.com', NULL, '$2y$10$Sl4QVCsAjFH8PJdi7IadeuARpJ8Ga1AWIYapU0exEciu0GRbxQSDq', NULL, '2022-10-31 09:54:07', '2022-10-31 09:54:07'),
(2, 'Liton Chandra Das', 'litonchandradas@gmail.com', NULL, '$2y$10$dBIjKLIHf71fC2aAlnENt.nitQXXKrpDnGCBc5lWEftsUn3QWsc1O', NULL, '2022-11-01 08:36:04', '2022-12-21 14:25:23'),
(3, 'Md Jewel Rana', 'jewel@gmail.com', NULL, '$2y$10$d2YKvEfZVYzxrWjK.RYuEuehK1onoCJNevQ6BuZNzWficA47d2ppW', 'cBgZJbjXMzpi7xrmMpBQqsThJgMGoYHkcDt8TyIJajAjGHUddbhgDRqgW6E8', '2022-11-02 09:48:55', '2022-12-21 14:26:29'),
(4, 'Raju Ahmed', 'rajuahmed.cmt@gmail.com', NULL, '$2y$10$AHR/5MuXqImND7MteZt3U.DBo3GdNAgRMMrGUqo0prM9btbKO9pVa', NULL, '2022-11-06 15:00:52', '2022-12-21 14:30:47'),
(8, 'Md Tutul Hossain', 'tutul@gmaill.com', NULL, '$2y$10$W6deN2tHqzrIRI2r7bPD9.JheFOkhHUb8AcWdsYwCeP5wLj9QB4oC', NULL, '2022-12-21 14:33:41', '2022-12-21 14:33:41');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bill_systems`
--
ALTER TABLE `bill_systems`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bill_systems_patient_id_foreign` (`patient_id`);

--
-- Indexes for table `cancer_types`
--
ALTER TABLE `cancer_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctors`
--
ALTER TABLE `doctors`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `doctors_email_unique` (`email`),
  ADD KEY `doctors_cancer_id_foreign` (`cancer_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `patients`
--
ALTER TABLE `patients`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `patients_email_unique` (`email`),
  ADD KEY `patients_cancer_id_foreign` (`cancer_id`),
  ADD KEY `patients_doctor_id_foreign` (`doctor_id`);

--
-- Indexes for table `patient_activites`
--
ALTER TABLE `patient_activites`
  ADD PRIMARY KEY (`id`),
  ADD KEY `patient_activites_patient_id_foreign` (`patient_id`);

--
-- Indexes for table `patient_reports`
--
ALTER TABLE `patient_reports`
  ADD PRIMARY KEY (`id`),
  ADD KEY `patient_reports_patient_id_foreign` (`patient_id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `prescriptions`
--
ALTER TABLE `prescriptions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `prescriptions_patient_id_foreign` (`patient_id`);

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
-- AUTO_INCREMENT for table `bill_systems`
--
ALTER TABLE `bill_systems`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `cancer_types`
--
ALTER TABLE `cancer_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `doctors`
--
ALTER TABLE `doctors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `patients`
--
ALTER TABLE `patients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `patient_activites`
--
ALTER TABLE `patient_activites`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `patient_reports`
--
ALTER TABLE `patient_reports`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `prescriptions`
--
ALTER TABLE `prescriptions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bill_systems`
--
ALTER TABLE `bill_systems`
  ADD CONSTRAINT `bill_systems_patient_id_foreign` FOREIGN KEY (`patient_id`) REFERENCES `patients` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `doctors`
--
ALTER TABLE `doctors`
  ADD CONSTRAINT `doctors_cancer_id_foreign` FOREIGN KEY (`cancer_id`) REFERENCES `cancer_types` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `patients`
--
ALTER TABLE `patients`
  ADD CONSTRAINT `patients_doctor_id_foreign` FOREIGN KEY (`doctor_id`) REFERENCES `doctors` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `patient_activites`
--
ALTER TABLE `patient_activites`
  ADD CONSTRAINT `patient_activites_patient_id_foreign` FOREIGN KEY (`patient_id`) REFERENCES `patients` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `patient_reports`
--
ALTER TABLE `patient_reports`
  ADD CONSTRAINT `patient_reports_patient_id_foreign` FOREIGN KEY (`patient_id`) REFERENCES `patients` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `prescriptions`
--
ALTER TABLE `prescriptions`
  ADD CONSTRAINT `prescriptions_patient_id_foreign` FOREIGN KEY (`patient_id`) REFERENCES `patients` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
