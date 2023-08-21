-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 19, 2021 at 05:13 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gcc`
--

-- --------------------------------------------------------

--
-- Table structure for table `accreditations`
--

CREATE TABLE `accreditations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `details` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `accreditations`
--

INSERT INTO `accreditations` (`id`, `name`, `image`, `details`, `status`, `created_at`, `updated_at`) VALUES
(5, NULL, 'public/upload/accreditation-1.png', NULL, 1, NULL, NULL),
(6, NULL, 'public/upload/accreditation-2.png', NULL, 1, NULL, NULL),
(7, NULL, 'public/upload/accreditation-3.png', NULL, 1, NULL, NULL),
(8, NULL, 'public/upload/accreditation-6.png', NULL, 1, NULL, NULL),
(9, NULL, 'public/upload/accreditation-111.png', NULL, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` int(11) NOT NULL,
  `sortname` varchar(3) NOT NULL,
  `con_name` varchar(150) NOT NULL,
  `phonecode` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `sortname`, `con_name`, `phonecode`) VALUES
(1, 'AF', 'Afghanistan', 93),
(2, 'AL', 'Albania', 355),
(3, 'DZ', 'Algeria', 213),
(4, 'AS', 'American Samoa', 1684),
(5, 'AD', 'Andorra', 376),
(6, 'AO', 'Angola', 244),
(7, 'AI', 'Anguilla', 1264),
(8, 'AQ', 'Antarctica', 0),
(9, 'AG', 'Antigua And Barbuda', 1268),
(10, 'AR', 'Argentina', 54),
(11, 'AM', 'Armenia', 374),
(12, 'AW', 'Aruba', 297),
(13, 'AU', 'Australia', 61),
(14, 'AT', 'Austria', 43),
(15, 'AZ', 'Azerbaijan', 994),
(16, 'BS', 'Bahamas The', 1242),
(17, 'BH', 'Bahrain', 973),
(18, 'BD', 'Bangladesh', 880),
(19, 'BB', 'Barbados', 1246),
(20, 'BY', 'Belarus', 375),
(21, 'BE', 'Belgium', 32),
(22, 'BZ', 'Belize', 501),
(23, 'BJ', 'Benin', 229),
(24, 'BM', 'Bermuda', 1441),
(25, 'BT', 'Bhutan', 975),
(26, 'BO', 'Bolivia', 591),
(27, 'BA', 'Bosnia and Herzegovina', 387),
(28, 'BW', 'Botswana', 267),
(29, 'BV', 'Bouvet Island', 0),
(30, 'BR', 'Brazil', 55),
(31, 'IO', 'British Indian Ocean Territory', 246),
(32, 'BN', 'Brunei', 673),
(33, 'BG', 'Bulgaria', 359),
(34, 'BF', 'Burkina Faso', 226),
(35, 'BI', 'Burundi', 257),
(36, 'KH', 'Cambodia', 855),
(37, 'CM', 'Cameroon', 237),
(38, 'CA', 'Canada', 1),
(39, 'CV', 'Cape Verde', 238),
(40, 'KY', 'Cayman Islands', 1345),
(41, 'CF', 'Central African Republic', 236),
(42, 'TD', 'Chad', 235),
(43, 'CL', 'Chile', 56),
(44, 'CN', 'China', 86),
(45, 'CX', 'Christmas Island', 61),
(46, 'CC', 'Cocos (Keeling) Islands', 672),
(47, 'CO', 'Colombia', 57),
(48, 'KM', 'Comoros', 269),
(49, 'CG', 'Congo', 242),
(50, 'CD', 'Congo The Democratic Republic Of The', 242),
(51, 'CK', 'Cook Islands', 682),
(52, 'CR', 'Costa Rica', 506),
(53, 'CI', 'Cote D\'Ivoire (Ivory Coast)', 225),
(54, 'HR', 'Croatia (Hrvatska)', 385),
(55, 'CU', 'Cuba', 53),
(56, 'CY', 'Cyprus', 357),
(57, 'CZ', 'Czech Republic', 420),
(58, 'DK', 'Denmark', 45),
(59, 'DJ', 'Djibouti', 253),
(60, 'DM', 'Dominica', 1767),
(61, 'DO', 'Dominican Republic', 1809),
(62, 'TP', 'East Timor', 670),
(63, 'EC', 'Ecuador', 593),
(64, 'EG', 'Egypt', 20),
(65, 'SV', 'El Salvador', 503),
(66, 'GQ', 'Equatorial Guinea', 240),
(67, 'ER', 'Eritrea', 291),
(68, 'EE', 'Estonia', 372),
(69, 'ET', 'Ethiopia', 251),
(70, 'XA', 'External Territories of Australia', 61),
(71, 'FK', 'Falkland Islands', 500),
(72, 'FO', 'Faroe Islands', 298),
(73, 'FJ', 'Fiji Islands', 679),
(74, 'FI', 'Finland', 358),
(75, 'FR', 'France', 33),
(76, 'GF', 'French Guiana', 594),
(77, 'PF', 'French Polynesia', 689),
(78, 'TF', 'French Southern Territories', 0),
(79, 'GA', 'Gabon', 241),
(80, 'GM', 'Gambia The', 220),
(81, 'GE', 'Georgia', 995),
(82, 'DE', 'Germany', 49),
(83, 'GH', 'Ghana', 233),
(84, 'GI', 'Gibraltar', 350),
(85, 'GR', 'Greece', 30),
(86, 'GL', 'Greenland', 299),
(87, 'GD', 'Grenada', 1473),
(88, 'GP', 'Guadeloupe', 590),
(89, 'GU', 'Guam', 1671),
(90, 'GT', 'Guatemala', 502),
(91, 'XU', 'Guernsey and Alderney', 44),
(92, 'GN', 'Guinea', 224),
(93, 'GW', 'Guinea-Bissau', 245),
(94, 'GY', 'Guyana', 592),
(95, 'HT', 'Haiti', 509),
(96, 'HM', 'Heard and McDonald Islands', 0),
(97, 'HN', 'Honduras', 504),
(98, 'HK', 'Hong Kong S.A.R.', 852),
(99, 'HU', 'Hungary', 36),
(100, 'IS', 'Iceland', 354),
(101, 'IN', 'India', 91),
(102, 'ID', 'Indonesia', 62),
(103, 'IR', 'Iran', 98),
(104, 'IQ', 'Iraq', 964),
(105, 'IE', 'Ireland', 353),
(106, 'IL', 'Israel', 972),
(107, 'IT', 'Italy', 39),
(108, 'JM', 'Jamaica', 1876),
(109, 'JP', 'Japan', 81),
(110, 'XJ', 'Jersey', 44),
(111, 'JO', 'Jordan', 962),
(112, 'KZ', 'Kazakhstan', 7),
(113, 'KE', 'Kenya', 254),
(114, 'KI', 'Kiribati', 686),
(115, 'KP', 'Korea North', 850),
(116, 'KR', 'Korea South', 82),
(117, 'KW', 'Kuwait', 965),
(118, 'KG', 'Kyrgyzstan', 996),
(119, 'LA', 'Laos', 856),
(120, 'LV', 'Latvia', 371),
(121, 'LB', 'Lebanon', 961),
(122, 'LS', 'Lesotho', 266),
(123, 'LR', 'Liberia', 231),
(124, 'LY', 'Libya', 218),
(125, 'LI', 'Liechtenstein', 423),
(126, 'LT', 'Lithuania', 370),
(127, 'LU', 'Luxembourg', 352),
(128, 'MO', 'Macau S.A.R.', 853),
(129, 'MK', 'Macedonia', 389),
(130, 'MG', 'Madagascar', 261),
(131, 'MW', 'Malawi', 265),
(132, 'MY', 'Malaysia', 60),
(133, 'MV', 'Maldives', 960),
(134, 'ML', 'Mali', 223),
(135, 'MT', 'Malta', 356),
(136, 'XM', 'Man (Isle of)', 44),
(137, 'MH', 'Marshall Islands', 692),
(138, 'MQ', 'Martinique', 596),
(139, 'MR', 'Mauritania', 222),
(140, 'MU', 'Mauritius', 230),
(141, 'YT', 'Mayotte', 269),
(142, 'MX', 'Mexico', 52),
(143, 'FM', 'Micronesia', 691),
(144, 'MD', 'Moldova', 373),
(145, 'MC', 'Monaco', 377),
(146, 'MN', 'Mongolia', 976),
(147, 'MS', 'Montserrat', 1664),
(148, 'MA', 'Morocco', 212),
(149, 'MZ', 'Mozambique', 258),
(150, 'MM', 'Myanmar', 95),
(151, 'NA', 'Namibia', 264),
(152, 'NR', 'Nauru', 674),
(153, 'NP', 'Nepal', 977),
(154, 'AN', 'Netherlands Antilles', 599),
(155, 'NL', 'Netherlands The', 31),
(156, 'NC', 'New Caledonia', 687),
(157, 'NZ', 'New Zealand', 64),
(158, 'NI', 'Nicaragua', 505),
(159, 'NE', 'Niger', 227),
(160, 'NG', 'Nigeria', 234),
(161, 'NU', 'Niue', 683),
(162, 'NF', 'Norfolk Island', 672),
(163, 'MP', 'Northern Mariana Islands', 1670),
(164, 'NO', 'Norway', 47),
(165, 'OM', 'Oman', 968),
(166, 'PK', 'Pakistan', 92),
(167, 'PW', 'Palau', 680),
(168, 'PS', 'Palestinian Territory Occupied', 970),
(169, 'PA', 'Panama', 507),
(170, 'PG', 'Papua new Guinea', 675),
(171, 'PY', 'Paraguay', 595),
(172, 'PE', 'Peru', 51),
(173, 'PH', 'Philippines', 63),
(174, 'PN', 'Pitcairn Island', 0),
(175, 'PL', 'Poland', 48),
(176, 'PT', 'Portugal', 351),
(177, 'PR', 'Puerto Rico', 1787),
(178, 'QA', 'Qatar', 974),
(179, 'RE', 'Reunion', 262),
(180, 'RO', 'Romania', 40),
(181, 'RU', 'Russia', 70),
(182, 'RW', 'Rwanda', 250),
(183, 'SH', 'Saint Helena', 290),
(184, 'KN', 'Saint Kitts And Nevis', 1869),
(185, 'LC', 'Saint Lucia', 1758),
(186, 'PM', 'Saint Pierre and Miquelon', 508),
(187, 'VC', 'Saint Vincent And The Grenadines', 1784),
(188, 'WS', 'Samoa', 684),
(189, 'SM', 'San Marino', 378),
(190, 'ST', 'Sao Tome and Principe', 239),
(191, 'SA', 'Saudi Arabia', 966),
(192, 'SN', 'Senegal', 221),
(193, 'RS', 'Serbia', 381),
(194, 'SC', 'Seychelles', 248),
(195, 'SL', 'Sierra Leone', 232),
(196, 'SG', 'Singapore', 65),
(197, 'SK', 'Slovakia', 421),
(198, 'SI', 'Slovenia', 386),
(199, 'XG', 'Smaller Territories of the UK', 44),
(200, 'SB', 'Solomon Islands', 677),
(201, 'SO', 'Somalia', 252),
(202, 'ZA', 'South Africa', 27),
(203, 'GS', 'South Georgia', 0),
(204, 'SS', 'South Sudan', 211),
(205, 'ES', 'Spain', 34),
(206, 'LK', 'Sri Lanka', 94),
(207, 'SD', 'Sudan', 249),
(208, 'SR', 'Suriname', 597),
(209, 'SJ', 'Svalbard And Jan Mayen Islands', 47),
(210, 'SZ', 'Swaziland', 268),
(211, 'SE', 'Sweden', 46),
(212, 'CH', 'Switzerland', 41),
(213, 'SY', 'Syria', 963),
(214, 'TW', 'Taiwan', 886),
(215, 'TJ', 'Tajikistan', 992),
(216, 'TZ', 'Tanzania', 255),
(217, 'TH', 'Thailand', 66),
(218, 'TG', 'Togo', 228),
(219, 'TK', 'Tokelau', 690),
(220, 'TO', 'Tonga', 676),
(221, 'TT', 'Trinidad And Tobago', 1868),
(222, 'TN', 'Tunisia', 216),
(223, 'TR', 'Turkey', 90),
(224, 'TM', 'Turkmenistan', 7370),
(225, 'TC', 'Turks And Caicos Islands', 1649),
(226, 'TV', 'Tuvalu', 688),
(227, 'UG', 'Uganda', 256),
(228, 'UA', 'Ukraine', 380),
(229, 'AE', 'United Arab Emirates', 971),
(230, 'GB', 'United Kingdom', 44),
(231, 'US', 'United States', 1),
(232, 'UM', 'United States Minor Outlying Islands', 1),
(233, 'UY', 'Uruguay', 598),
(234, 'UZ', 'Uzbekistan', 998),
(235, 'VU', 'Vanuatu', 678),
(236, 'VA', 'Vatican City State (Holy See)', 39),
(237, 'VE', 'Venezuela', 58),
(238, 'VN', 'Vietnam', 84),
(239, 'VG', 'Virgin Islands (British)', 1284),
(240, 'VI', 'Virgin Islands (US)', 1340),
(241, 'WF', 'Wallis And Futuna Islands', 681),
(242, 'EH', 'Western Sahara', 212),
(243, 'YE', 'Yemen', 967),
(244, 'YU', 'Yugoslavia', 38),
(245, 'ZM', 'Zambia', 260),
(246, 'ZW', 'Zimbabwe', 263);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `lavels`
--

CREATE TABLE `lavels` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `lavels`
--

INSERT INTO `lavels` (`id`, `name`, `status`, `created_at`, `updated_at`) VALUES
(2, 'Nigel Copeland', NULL, NULL, NULL),
(3, 'Wendy Thompson ff', NULL, NULL, NULL),
(4, 'Nigel Copeland', 1, NULL, NULL),
(5, 'Nigel Copeland', 1, NULL, NULL),
(6, 'Nigel Copeland', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_02_19_040502_create_role_permissions_table', 1),
(5, '2020_09_06_064224_create_suppliers_table', 1),
(6, '2020_09_26_061536_create_buyers_table', 2),
(7, '2020_09_27_043948_create_items_table', 3),
(8, '2020_09_27_044228_create_grades_table', 3),
(9, '2020_09_29_051344_create_bank_accounts_table', 4),
(10, '2020_09_30_091528_create_modules_table', 5),
(11, '2020_09_30_100024_create_role_permissions_table', 6),
(12, '2021_01_12_061551_create_students_table', 7),
(13, '2021_01_12_090510_create_payments_table', 8),
(14, '2021_06_05_143012_create_pages_table', 9),
(15, '2021_06_10_043041_create_lavels_table', 10),
(16, '2021_06_10_045710_create_subjects_table', 11),
(17, '2021_06_10_055651_create_schools_table', 12),
(18, '2021_06_18_173817_create_our_people_table', 13),
(19, '2021_06_19_094824_create_accreditations_table', 14);

-- --------------------------------------------------------

--
-- Table structure for table `our_people`
--

CREATE TABLE `our_people` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `designation` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nationality` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `website` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fb` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `details` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `our_people`
--

INSERT INTO `our_people` (`id`, `name`, `image`, `designation`, `nationality`, `email`, `phone`, `website`, `fb`, `twitter`, `details`, `status`, `created_at`, `updated_at`) VALUES
(3, 'Robi Khan', 'public/upload/people-teacher-1.jpg', 'Lecturer', 'Indian', 'robi @gmail.com', NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL),
(4, 'Jui Khan', 'public/upload/people-teacher-2.jpg', 'Lecturer', 'Bangladeshi', 'Jui@admin.com', NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL),
(5, 'Fawd Khan', 'public/upload/people-teacher-4.jpg', 'Lecturer', 'USA', 'fawd@admin.com', NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL),
(6, 'Fawd Khan', 'public/upload/people-teacher-5.jpg', 'Lecturer', 'pakistani', 'khan@admin.com', NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL),
(7, 'Jui Khan', 'public/upload/people-teacher-3.jpg', 'Lecturer', 'Bangladeshi', 'Jui.Khan@gmail.com', NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `title`, `slug`, `image`, `content`, `created_at`, `updated_at`) VALUES
(1, 'Prerequisites to study abroad', 'prerequisites_to_study_abroad', 'public/upload/pages-testi-b2.jpg', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>\r\n\r\n<p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet,</p>\r\n\r\n<p>Quisquam porro quisquam est, olorem ipsum quia dolor sit amet,</p>\r\n\r\n<p>Es eos qui ratione voluptatem sequi nesciunt. Neque porro</p>\r\n\r\n<p>Ratione voluptatem sequi nesciunt. Neque porro quisquam</p>\r\n\r\n<p>Esos qui ratione voluptatem sequi nesciunt. Neque</p>\r\n\r\n<p>Voluptatem qui ratione voluptatem sequi nesciunt. Neque porro</p>\r\n\r\n<p>Sequi ratione voluptatem sequi nesciunt. Neque porro quisquam</p>', NULL, NULL),
(2, 'Free Online Video Counselling', 'free_online_video_counselling', 'public/upload/pages-testi-b4.jpg', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation. . Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, . Quisquam porro quisquam est, olorem ipsum quia dolor sit amet, . Es eos qui ratione voluptatem sequi nesciunt. Neque porro . Ratione voluptatem sequi nesciunt. Neque porro quisquam . Esos qui ratione voluptatem sequi nesciunt. Neque . Voluptatem qui ratione voluptatem sequi nesciunt. Neque porro . Sequi ratione voluptatem sequi nesciunt. Neque porro quisquam</p>', NULL, NULL),
(3, 'Career Guidance', 'career_guidance', NULL, '\r\n                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>\r\n                            <blockquote>\r\n                                <i class=\"quote-top fa fa-quote-left\"></i>\r\n                                Lorem ipsum dolor sit amet, conse ctetur adipi sicing elit, sed do eiusm od tempor incidi dunt ut labore et dolore magna aliqua. Ut enim  fugiat nulla pariaatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit \r\n                                <i class=\"quote-bottom fa fa-quote-right\"></i>\r\n                            </blockquote>\r\n                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>\r\n                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>\r\n                            <blockquote>\r\n                                <i class=\"quote-top fa fa-quote-left\"></i>\r\n                                Lorem ipsum dolor sit amet, conse ctetur adipi sicing elit, sed do eiusm od tempor incidi dunt ut labore et dolore magna aliqua. Ut enim  fugiat nulla pariaatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit \r\n                                <i class=\"quote-bottom fa fa-quote-right\"></i>\r\n                            </blockquote>\r\n                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>\r\n                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>\r\n                            <blockquote>\r\n                                <i class=\"quote-top fa fa-quote-left\"></i>\r\n                                Lorem ipsum dolor sit amet, conse ctetur adipi sicing elit, sed do eiusm od tempor incidi dunt ut labore et dolore magna aliqua. Ut enim  fugiat nulla pariaatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit \r\n                                <i class=\"quote-bottom fa fa-quote-right\"></i>\r\n                            </blockquote>\r\n                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>', NULL, NULL),
(4, 'CV Guidance', 'cv_guidance', NULL, '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p><br><br>\r\n                            <p><b>CV Guidance Steps:</b><br>\r\n                            1. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.<br><br> \r\n\r\n                            2. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.<br><br> \r\n\r\n                            3. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. <br><br>\r\n\r\n                            4. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. <br><br>\r\n\r\n                            5. Sed ut perspiciatis unde omnis iste natus error sit voluptatem magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet.</p>', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_id` int(11) NOT NULL,
  `payment_method` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount` double(14,2) NOT NULL,
  `card_no` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cvc_no` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `student_id`, `payment_method`, `amount`, `card_no`, `cvc_no`, `created_at`, `updated_at`) VALUES
(1, 6, 'card', 410.00, '171.151.80784', '679', '2021-01-12 03:50:42', '2021-01-12 03:50:42'),
(2, 7, 'paypal', 410.00, NULL, NULL, '2021-01-12 03:53:18', '2021-01-12 03:53:18'),
(3, 8, 'card', 410.00, '171.151.80784', '679', '2021-01-12 04:35:42', '2021-01-12 04:35:42'),
(4, 9, 'card', 410.00, '171.151.80784', '679', '2021-01-18 05:24:50', '2021-01-18 05:24:50'),
(5, 10, 'paypal', 410.00, NULL, NULL, '2021-01-18 05:25:48', '2021-01-18 05:25:48'),
(6, 11, 'card', 510.00, '424242424', '4242', '2021-01-20 01:12:46', '2021-01-20 01:12:46');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role_name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `type` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT 'custom',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `role_name`, `type`, `created_at`, `updated_at`) VALUES
(1, 'Super Admin', 'system', NULL, '2021-01-04 00:38:36'),
(2, 'Employee', 'system', NULL, '2020-09-27 04:10:53');

-- --------------------------------------------------------

--
-- Table structure for table `schools`
--

CREATE TABLE `schools` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `details` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `schools`
--

INSERT INTO `schools` (`id`, `name`, `country_id`, `image`, `details`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Wendy Thompson', NULL, 'public/upload/schools-abc.jpg', '<p>Sit molestiae ducimu.</p>', 1, NULL, NULL),
(2, 'Nigel Copeland', NULL, 'public/upload/pages-52047735_2017997981833947_5859655742000201728_n.jpg', '<p>fdsfdsfdsfcxvxcv</p>', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'md5',
  `active` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `name`, `email`, `phone`, `address`, `password`, `active`, `created_at`, `updated_at`) VALUES
(1, 'Mr Perfect', 'shagor@example.com', '01515672776', 'Dhaka', 'e10adc3949ba59abbe56e057f20f883e', 1, '2021-06-01 21:46:24', '2021-06-01 21:46:24'),
(2, 'Toukir', 'admin@gmail.com', '01723545164', 'toukir@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 1, '2021-06-09 14:04:51', '2021-06-09 14:04:51');

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`id`, `name`, `status`, `created_at`, `updated_at`) VALUES
(4, 'Accounting and Finance', 1, NULL, NULL),
(5, 'Aerospace and Manufacturing Engineering', 1, NULL, NULL),
(6, 'Agriculture', 1, NULL, NULL),
(7, ' Forestry and Food', 1, NULL, NULL),
(8, 'American Studies', 1, NULL, NULL),
(9, 'Anatomy and Physiology', 1, NULL, NULL),
(10, 'Anthropology', 1, NULL, NULL),
(11, 'Architecture', 1, NULL, NULL),
(12, 'Art', 1, NULL, NULL),
(13, 'Art History', 1, NULL, NULL),
(14, 'Biosciences', 1, NULL, NULL),
(15, 'Building and Town and Country Planning', 1, NULL, NULL),
(16, 'Business and Management', 1, NULL, NULL),
(17, 'Chemical Engineering', 1, NULL, NULL),
(18, 'Chemistry', 1, NULL, NULL),
(19, 'Civil Engineering', 1, NULL, NULL),
(20, 'Classics and Ancient History', 1, NULL, NULL),
(21, 'Computer Science', 1, NULL, NULL),
(22, 'Criminology', 1, NULL, NULL),
(23, 'Dentistry', 1, NULL, NULL),
(24, 'Design and Crafts', 1, NULL, NULL),
(25, 'Development Studies', 1, NULL, NULL),
(26, 'Drama and Dance', 1, NULL, NULL),
(27, 'Earth and Marine Science', 1, NULL, NULL),
(28, 'Economics', 1, NULL, NULL),
(29, 'Education', 1, NULL, NULL),
(30, 'Electrical Engineering', 1, NULL, NULL),
(31, 'English and Creative Writing', 1, NULL, NULL),
(32, 'Fashion and Textiles', 1, NULL, NULL),
(33, 'Film Production', 1, NULL, NULL),
(34, 'Forensic Science and Archaeology', 1, NULL, NULL),
(35, 'General Engineering', 1, NULL, NULL),
(36, 'Geography and Environmental Studies', 1, NULL, NULL),
(37, 'Health', 1, NULL, NULL),
(38, 'History', 1, NULL, NULL),
(39, 'Hospitality', 1, NULL, NULL),
(40, ' Event Management and Tourism', 1, NULL, NULL),
(41, 'International Relations', 1, NULL, NULL),
(42, 'Journalism', 1, NULL, NULL),
(43, ' Publishing and Public Relations', 1, NULL, NULL),
(44, 'Law', 1, NULL, NULL),
(45, 'Linguistics', 1, NULL, NULL),
(46, 'Marketing', 1, NULL, NULL),
(47, 'Material Engineering', 1, NULL, NULL),
(48, 'Mathematics', 1, NULL, NULL),
(49, 'MBA', 1, NULL, NULL),
(50, 'Mechanical Engineering', 1, NULL, NULL),
(51, 'Media Studies', 1, NULL, NULL),
(52, 'Music', 1, NULL, NULL),
(53, 'Nursing and Midwifery', 1, NULL, NULL),
(54, 'Pharmacy', 1, NULL, NULL),
(55, 'Philosophy', 1, NULL, NULL),
(56, 'Physics', 1, NULL, NULL),
(57, 'Politics', 1, NULL, NULL),
(58, 'Psychology', 1, NULL, NULL),
(59, 'Religious Studies', 1, NULL, NULL),
(60, 'Social Policy and Administration', 1, NULL, NULL),
(61, 'Social Work', 1, NULL, NULL),
(62, 'Sociology', 1, NULL, NULL),
(63, 'Sports Science', 1, NULL, NULL),
(64, 'Veterinary Science', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_about`
--

CREATE TABLE `tbl_about` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `photo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_about`
--

INSERT INTO `tbl_about` (`id`, `title`, `description`, `photo`) VALUES
(1, 'Brit Skills & Training', '<p><strong>We are a team of experienced professional with over 50 years&rsquo; experience in the public and private sectors, voluntary and third sector, media and education dedicated to training, skill up people who are unemployed and wish to apply for a job, or simply looking to change careers or prepare for ever changing dynamic workplace.</strong><br />\r\n&nbsp;</p>\r\n\r\n<h1>The all-in-one solution for security employers</h1>\r\n\r\n<p>Streamline your training, vetting and hiring with our complete all-in-one platform. Open your account today to get started.<br />\r\n<br />\r\nChoose from thousands of qualified and vetted security professionals to perfectly suit your position. Find shift cover or permanent placements nationwide</p>', 'public/about/about.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_album`
--

CREATE TABLE `tbl_album` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `photo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_album`
--

INSERT INTO `tbl_album` (`id`, `title`, `photo`) VALUES
(1, 'GECC-Summer courses for Bangladesh government staff', 'public/albumImage/fol.ico'),
(2, 'GECC-Summer courses for Bangladesh government staff', 'public/albumImage/fol.ico');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contact`
--

CREATE TABLE `tbl_contact` (
  `id` int(11) NOT NULL,
  `name` varchar(55) NOT NULL,
  `email` varchar(55) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_contact`
--

INSERT INTO `tbl_contact` (`id`, `name`, `email`, `phone`, `message`) VALUES
(1, 'Shagor', 'shagor@gmail.com', '01814944730', 'hello');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_course`
--

CREATE TABLE `tbl_course` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `duration` varchar(100) NOT NULL,
  `country` varchar(191) DEFAULT NULL,
  `fee` varchar(100) NOT NULL,
  `waiver` varchar(191) DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  `option_id` int(50) DEFAULT NULL,
  `subject_id` int(50) DEFAULT NULL,
  `university_id` int(50) DEFAULT NULL,
  `month` varchar(255) DEFAULT NULL,
  `details` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_course`
--

INSERT INTO `tbl_course` (`id`, `title`, `duration`, `country`, `fee`, `waiver`, `type`, `option_id`, `subject_id`, `university_id`, `month`, `details`) VALUES
(2, 'M.Sc. in Biology', '24 Months', 'AF', '28726', 'Running', 'full', 1, 1, 1, 'January', NULL),
(3, 'B.Sc in CSE', '24 Months', 'AF', '5000', 'Running', 'full', 1, 1, 1, 'February', NULL),
(4, 'M.Sc. in Biology', '24 Months', 'UK', '28726', 'Running', NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_event`
--

CREATE TABLE `tbl_event` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `time` varchar(100) NOT NULL,
  `date` varchar(100) NOT NULL,
  `location` varchar(191) DEFAULT NULL,
  `details` text NOT NULL,
  `image` varchar(100) NOT NULL,
  `status` tinyint(4) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_event`
--

INSERT INTO `tbl_event` (`id`, `title`, `time`, `date`, `location`, `details`, `image`, `status`) VALUES
(3, 'GECC Education Fair 2021', '14:40', '2021-06-12', 'Dhaka, Bangladesh', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dorepre enderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accu antium dolorem laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo en ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem snesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>', 'public/eventImage/e-1.png', 1),
(6, 'Pre Masters', '15:43', '2021-06-16', 'London', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dorepre enderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accu antium dolorem laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo en ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem snesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>', 'public/eventImage/event-1.jpg', 1),
(7, 'Under Graduate', '05:07', '2021-06-24', 'London', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dorepre enderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accu antium dolorem laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo en ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem snesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>', 'public/eventImage/event-2.jpg', 1),
(8, 'Post Graduate', '15:56', '2021-06-02', 'USA', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dorepre enderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accu antium dolorem laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo en ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem snesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>', 'public/eventImage/event-3.jpg', 1),
(9, 'Graduate', '17:06', '2021-06-30', 'England', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dorepre enderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accu antium dolorem laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo en ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem snesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>', 'public/eventImage/event-6.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_gallery`
--

CREATE TABLE `tbl_gallery` (
  `id` int(11) NOT NULL,
  `album_id` int(11) NOT NULL,
  `photo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_gallery`
--

INSERT INTO `tbl_gallery` (`id`, `album_id`, `photo`) VALUES
(1, 1, 'public/galleryImage/g-1.jpeg'),
(2, 1, 'public/galleryImage/g-2.jpeg'),
(3, 1, 'public/galleryImage/g-3.jpeg'),
(5, 2, 'public/galleryImage/g-4.jpeg'),
(6, 2, 'public/galleryImage/g-5.jpg'),
(7, 1, 'public/galleryImage/g-6.jpg'),
(8, 1, 'public/galleryImage/g-7.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_news`
--

CREATE TABLE `tbl_news` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `time` varchar(100) NOT NULL,
  `date` varchar(100) NOT NULL,
  `location` varchar(191) DEFAULT NULL,
  `details` text NOT NULL,
  `image` varchar(100) NOT NULL,
  `status` tinyint(4) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_news`
--

INSERT INTO `tbl_news` (`id`, `title`, `time`, `date`, `location`, `details`, `image`, `status`) VALUES
(3, 'Education Fair News', '14:40', '2021-06-12', 'Dhaka', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dorepre enderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accu antium dolorem laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo en ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem snesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>', 'public/newsImage/event-1.jpg', 1),
(5, 'Midware Course Results', '14:31', '2021-05-31', 'London', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dorepre enderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accu antium dolorem laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo en ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem snesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>', 'public/newsImage/event-2.jpg', 1),
(6, 'Certification farewell', '16:56', '2021-06-30', 'UK', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dorepre enderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accu antium dolorem laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo en ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem snesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>', 'public/newsImage/event-3.jpg', 1),
(7, 'Elementary Program', '18:57', '2021-06-24', 'India', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dorepre enderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accu antium dolorem laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo en ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem snesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>', 'public/newsImage/event-5.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_office_address`
--

CREATE TABLE `tbl_office_address` (
  `id` int(9) NOT NULL,
  `office_location` varchar(191) NOT NULL,
  `office_address` text NOT NULL,
  `map` text DEFAULT NULL,
  `code` varchar(10) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `is_default` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_office_address`
--

INSERT INTO `tbl_office_address` (`id`, `office_location`, `office_address`, `map`, `code`, `email`, `phone`, `is_default`) VALUES
(1, 'UK (Birmingham) london', '<p>81 Caldmore Road, Walsall, WS13NR</p>', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2424.4483985930883!2d-1.9838682847526348!3d52.57958583956488!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4870a20cae8c3221%3A0x8f15372ad9e9736f!2s81%20Caldmore%20Rd%2C%20Walsall%20WS1%203DE%2C%20UK!5e0!3m2!1sen!2sbd!4v1620549585705!5m2!1sen!2sbd\" width=\"100%\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\"></iframe>', 'GBRl', 'imran@gecconsultant.co.uk', '+44 7506 166199', 1),
(2, 'Bangladesh (Dhaka)', '<p>Flat A5 (1st&nbsp;floor), House 37, Road 7,Sector 3, Uttara , Dhaka-1230, Bangladesh.</p>\r\n\r\n<p>&nbsp;</p>', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3648.590980364773!2d90.38445241429933!3d23.868653790166913!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c41a61db3b0f%3A0xc4aa3c1a91664556!2s63%20Rd%20-19%2C%20Dhaka%201230!5e0!3m2!1sen!2sbd!4v1620549878976!5m2!1sen!2sbd\" width=\"100%\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\"></iframe>', 'BD', 'gecc.dhk@gecconsultant.co.uk', '+88 (0) 1611-503146', 0),
(3, 'Pakistan (Rawalpindi)', '<p>First floor, Plot 73, Chaklala Scheme 3, Rawalpindi.</p>', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13294.747934850284!2d73.08956072333895!3d33.587475566997384!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38dfedec23b045e7%3A0x2c0a4bd34d0a7e36!2sCareers%20Direct!5e0!3m2!1sen!2sbd!4v1620589297403!5m2!1sen!2sbd\" width=\"100%\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\"></iframe>', 'PAK', 'info@gecconsultant.co.uk', '+92 300 5074776', 0),
(4, 'India (Pune)', '<p>Indrayani Group, Dhandekar nagar Yewalewadi, Kondhwa (BK), Pune 411048</p>', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3784.9635248034997!2d73.89072841420288!3d18.439965176448776!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc2eb723555b67b%3A0x26e51acfd75ecf0!2sIndrayani%20tours%20%26%20travels!5e0!3m2!1sen!2sbd!4v1620550353252!5m2!1sen!2sbd\" width=\"100%\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\"></iframe>', 'IND', 'gecc.india@gecconsultant.co.uk', '+91 98232 76076', 0),
(5, 'Morocco (Casablanca)', '<p>21 Lot Proovince, Oasis, Casablanca</p>', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3325.0174650331664!2d-7.635185785459278!3d33.55292255132595!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xda62d367a38ec6b%3A0x30fe939d6a67cebe!2sRoute%20de%20l\'Oasis%2C%20Casablanca%2C%20Morocco!5e0!3m2!1sen!2sbd!4v1620550642828!5m2!1sen!2sbd\" width=\"100%\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\"></iframe>', 'MAR', 'morocco.gecc@gecconsultant.co.uk', '+212661384025', 0),
(6, 'Nigeria', '<p>Email: anthony.a@gecconsultant.co.uk</p>', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d8070159.95304742!2d4.176639151015652!3d9.01735600935614!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x104e0baf7da48d0d%3A0x99a8fe4168c50bc8!2sNigeria!5e0!3m2!1sen!2sbd!4v1620550749705!5m2!1sen!2sbd\" width=\"100%\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\"></iframe>', 'NGA', 'anthony.a@gecconsultant.co.uk', '+', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_prerequisites_counselling`
--

CREATE TABLE `tbl_prerequisites_counselling` (
  `id` int(9) NOT NULL,
  `type` varchar(191) NOT NULL,
  `title` varchar(191) NOT NULL,
  `details` text NOT NULL,
  `photo` varchar(191) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_prerequisites_counselling`
--

INSERT INTO `tbl_prerequisites_counselling` (`id`, `type`, `title`, `details`, `photo`) VALUES
(1, 'Prerequisites', 'Prerequisites to study abroad', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>\r\n\r\n<p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet,</p>\r\n\r\n<p>Quisquam porro quisquam est, olorem ipsum quia dolor sit amet,</p>\r\n\r\n<p>Es eos qui ratione voluptatem sequi nesciunt. Neque porro</p>\r\n\r\n<p>Ratione voluptatem sequi nesciunt. Neque porro quisquam</p>\r\n\r\n<p>Esos qui ratione voluptatem sequi nesciunt. Neque</p>\r\n\r\n<p>Voluptatem qui ratione voluptatem sequi nesciunt. Neque porro</p>\r\n\r\n<p>Sequi ratione voluptatem sequi nesciunt. Neque porro quisquam</p>', 'public/upload/testi-b2.jpg'),
(2, 'Counselling', 'Free Online Video Counselling', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation. . Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, . Quisquam porro quisquam est, olorem ipsum quia dolor sit amet, . Es eos qui ratione voluptatem sequi nesciunt. Neque porro . Ratione voluptatem sequi nesciunt. Neque porro quisquam . Esos qui ratione voluptatem sequi nesciunt. Neque . Voluptatem qui ratione voluptatem sequi nesciunt. Neque porro . Sequi ratione voluptatem sequi nesciunt. Neque porro quisquam</p>', 'public/upload/testi-b4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_slider`
--

CREATE TABLE `tbl_slider` (
  `id` int(9) NOT NULL,
  `title` varchar(191) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `image` varchar(191) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_slider`
--

INSERT INTO `tbl_slider` (`id`, `title`, `description`, `image`, `created_at`) VALUES
(1, 'Join the Largest UK Education Expo 2021 in Bangladesh', '<p>Don&#39;t miss this unique opportunity!</p>', 'public/upload/slider-slider-1.jpg', '2021-05-31 08:23:20'),
(3, 'Admission Open for September 2021 Intake', '<p>100% FREE Career Counselling and Admission Processing</p>', 'public/upload/slider-slider-2.jpg', '2021-06-09 15:22:26');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_study_option`
--

CREATE TABLE `tbl_study_option` (
  `id` int(9) NOT NULL,
  `course_name` varchar(191) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `total_student` varchar(191) DEFAULT NULL,
  `course_duration` varchar(191) DEFAULT NULL,
  `course_credit` varchar(191) DEFAULT NULL,
  `total_semester` varchar(191) DEFAULT NULL,
  `image` varchar(191) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_study_option`
--

INSERT INTO `tbl_study_option` (`id`, `course_name`, `description`, `total_student`, `course_duration`, `course_credit`, `total_semester`, `image`, `created_at`) VALUES
(1, 'Undergraduate', '<p>magna aliqua. Ut enim ad minim veniam, nisi ut aliquiptempor incid.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi m aperiam, eaque ipsa quae abaspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>', '50', '4 years', '125', '12', 'public/upload/course-slider-3.jpg', '2021-06-07 20:53:56'),
(3, 'Pre-Masters', '<p>magna aliqua. Ut enim ad minim veniam, nisi ut aliquiptempor incid.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi m aperiam, eaque ipsa quae abaspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>', '50', '4 years', '125', '12', 'public/upload/course-slider-4.jpg', '2021-06-07 20:55:51'),
(4, 'Post Graduate', '<p>magna aliqua. Ut enim ad minim veniam, nisi ut aliquiptempor incid.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi m aperiam, eaque ipsa quae abaspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>', '50', '4 years', '125', '12', 'public/upload/course-slider-5.jpg', '2021-06-07 20:56:42'),
(5, 'Foundation', '<p>magna aliqua. Ut enim ad minim veniam, nisi ut aliquiptempor incid.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi m aperiam, eaque ipsa quae abaspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>', '50', '4 years', '125', '12', 'public/upload/course-slider-bg.jpg', '2021-06-07 20:57:23'),
(6, 'Short Course', '<p>magna aliqua. Ut enim ad minim veniam, nisi ut aliquiptempor incid.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi m aperiam, eaque ipsa quae abaspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>', '3124', '4 years', '200', '12', 'public/upload/course-event-6.jpg', '2021-06-09 18:05:42');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_testimonial`
--

CREATE TABLE `tbl_testimonial` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `university` varchar(191) DEFAULT NULL,
  `details` text NOT NULL,
  `photo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_testimonial`
--

INSERT INTO `tbl_testimonial` (`id`, `name`, `university`, `details`, `photo`) VALUES
(1, 'Natasha', 'LLb,UoP', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s</p>', 'public/testimonial/127087979_1217433368631518_469749455127800111_o.jpg'),
(2, 'Mr Perfect', 'CSE,DIU', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s</p>', 'public/testimonial/35750758_2032418940165702_8366007040274857984_o.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_university`
--

CREATE TABLE `tbl_university` (
  `id` int(9) NOT NULL,
  `university_name` varchar(191) DEFAULT NULL,
  `address` varchar(191) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `total_student` varchar(191) DEFAULT NULL,
  `course_duration` varchar(191) DEFAULT NULL,
  `course_credit` varchar(191) DEFAULT NULL,
  `total_semester` varchar(191) DEFAULT NULL,
  `logo` varchar(191) DEFAULT NULL,
  `image` varchar(191) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_university`
--

INSERT INTO `tbl_university` (`id`, `university_name`, `address`, `description`, `total_student`, `course_duration`, `course_credit`, `total_semester`, `logo`, `image`, `created_at`) VALUES
(1, 'GBS', 'London', '<p>magna aliqua. Ut enim ad minim veniam, nisi ut aliquiptempor incid.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi m aperiam, eaque ipsa quae abaspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>', '50', '4 years', '125', '12', 'public/upload/logo-77.png', 'public/upload/uni-77.png', '2021-06-07 21:01:03'),
(2, 'A R U', 'London', '<p>magna aliqua. Ut enim ad minim veniam, nisi ut aliquiptempor incid.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi m aperiam, eaque ipsa quae abaspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>', '50', '4 years', '125', '12', 'public/upload/logo-88.png', 'public/upload/uni-88.png', '2021-06-07 21:02:06'),
(3, 'On Campus', 'U S A', '<p>magna aliqua. Ut enim ad minim veniam, nisi ut aliquiptempor incid.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi m aperiam, eaque ipsa quae abaspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>', '50', '4 years', '125', '12', 'public/upload/logo-99.png', 'public/upload/uni-99.png', '2021-06-07 21:03:04'),
(4, 'Birmingham City University', 'London', '<p>magna aliqua. Ut enim ad minim veniam, nisi ut aliquiptempor incid.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi m aperiam, eaque ipsa quae abaspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>', '500', '4 years', '125', '5', 'public/upload/logo-111.png', 'public/upload/uni-111.png', '2021-06-07 21:04:06'),
(5, 'Oxford International', 'London', '<p>magna aliqua. Ut enim ad minim veniam, nisi ut aliquiptempor incid.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi m aperiam, eaque ipsa quae abaspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>', '346', '3 years', '123', '12', 'public/upload/logo-222.png', 'public/upload/uni-222.png', '2021-06-07 21:05:05'),
(6, 'Navitas', 'USA', '<p>magna aliqua. Ut enim ad minim veniam, nisi ut aliquiptempor incid.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi m aperiam, eaque ipsa quae abaspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>', '3214', '3 years', '123', '9', 'public/upload/logo-333.png', 'public/upload/uni-333.png', '2021-06-07 21:05:59'),
(7, 'UK College', 'UK', '<p>magna aliqua. Ut enim ad minim veniam, nisi ut aliquiptempor incid.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi m aperiam, eaque ipsa quae abaspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>', '312', '4 years', '234', '12', 'public/upload/logo-444.png', 'public/upload/uni-444.png', '2021-06-07 21:06:49'),
(8, 'University for the creative arts', 'USA', '<p>magna aliqua. Ut enim ad minim veniam, nisi ut aliquiptempor incid.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi m aperiam, eaque ipsa quae abaspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>', '1321', '3 years', '231', '12', 'public/upload/logo-555.png', 'public/upload/uni-555.png', '2021-06-07 21:07:45'),
(9, 'Anglia Ruskin University', 'England', '<p>magna aliqua. Ut enim ad minim veniam, nisi ut aliquiptempor incid.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi m aperiam, eaque ipsa quae abaspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>', '452', '3 years', '123', '12', 'public/upload/logo-666.png', 'public/upload/uni-666.png', '2021-06-07 21:08:46'),
(10, 'Coventry University', 'London', '<p>magna aliqua. Ut enim ad minim veniam, nisi ut aliquiptempor incid.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi m aperiam, eaque ipsa quae abaspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>', '4323', '3 years', '123', '12', 'public/upload/logo-777.png', 'public/upload/uni-777.png', '2021-06-07 21:09:37'),
(11, 'Durham University', 'USA', '<p>magna aliqua. Ut enim ad minim veniam, nisi ut aliquiptempor incid.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi m aperiam, eaque ipsa quae abaspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>', '1234', '4 years', '122', '12', 'public/upload/logo-888.png', 'public/upload/uni-888.png', '2021-06-07 21:10:19'),
(12, 'Kensington College of business', 'USA', '<p>magna aliqua. Ut enim ad minim veniam, nisi ut aliquiptempor incid.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi m aperiam, eaque ipsa quae abaspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>', '1243', '4 years', '324', '12', 'public/upload/logo-999.png', 'public/upload/uni-999.png', '2021-06-07 21:11:22'),
(13, 'Newcastle University', 'USA', '<p>magna aliqua. Ut enim ad minim veniam, nisi ut aliquiptempor incid.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi m aperiam, eaque ipsa quae abaspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>', '23542', '3 years', '234', '12', 'public/upload/logo-1111.png', 'public/upload/uni-1111.png', '2021-06-07 21:12:16'),
(14, 'UCLAN University', 'England', '<p>magna aliqua. Ut enim ad minim veniam, nisi ut aliquiptempor incid.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi m aperiam, eaque ipsa quae abaspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>', '2542', '3 years', '423', '12', 'public/upload/logo-2222.png', 'public/upload/uni-2222.png', '2021-06-07 21:13:15'),
(15, 'University of Dundee', 'England', '<p>magna aliqua. Ut enim ad minim veniam, nisi ut aliquiptempor incid.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi m aperiam, eaque ipsa quae abaspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>', '23452', '4 years', '133', '12', 'public/upload/logo-3333.png', 'public/upload/uni-3333.png', '2021-06-07 21:14:12'),
(16, 'University of Essex', 'London', '<p>magna aliqua. Ut enim ad minim veniam, nisi ut aliquiptempor incid.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi m aperiam, eaque ipsa quae abaspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>', '2342', '5 years', '234', '12', 'public/upload/logo-4444.png', 'public/upload/uni-4444.png', '2021-06-07 21:14:59'),
(17, 'University of Hertfordshire', 'London', '<p>magna aliqua. Ut enim ad minim veniam, nisi ut aliquiptempor incid.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi m aperiam, eaque ipsa quae abaspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>', '42354', '4 years', '123', '12', 'public/upload/logo-5555.png', 'public/upload/uni-5555.png', '2021-06-07 21:15:48'),
(18, 'University of Greenwich', 'London', '<p>magna aliqua. Ut enim ad minim veniam, nisi ut aliquiptempor incid.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi m aperiam, eaque ipsa quae abaspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>', '2323', '4 years', '132', '12', 'public/upload/logo-6666.png', 'public/upload/uni-6666.png', '2021-06-07 21:16:38'),
(19, 'University of Portsmouth', 'London', '<p>magna aliqua. Ut enim ad minim veniam, nisi ut aliquiptempor incid.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi m aperiam, eaque ipsa quae abaspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>', '32143', '4 years', '123', '12', 'public/upload/logo-7777.png', 'public/upload/uni-7777.png', '2021-06-07 21:17:22'),
(20, 'University of south wales', 'London', '<p>magna aliqua. Ut enim ad minim veniam, nisi ut aliquiptempor incid.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi m aperiam, eaque ipsa quae abaspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>', '12341', '4 years', '122', '12', 'public/upload/logo-8888.png', 'public/upload/uni-8888.png', '2021-06-07 21:18:05'),
(21, 'Swansea University', 'London', '<p>magna aliqua. Ut enim ad minim veniam, nisi ut aliquiptempor incid.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi m aperiam, eaque ipsa quae abaspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>', '1234', '4 years', '123', '12', 'public/upload/logo-9999.png', 'public/upload/uni-9999.png', '2021-06-07 21:18:49'),
(22, 'Prifysgol Bangor University', 'UK', '<p>magna aliqua. Ut enim ad minim veniam, nisi ut aliquiptempor incid.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi m aperiam, eaque ipsa quae abaspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>', '323', '4 years', '123', '12', 'public/upload/logo-11.png', 'public/upload/uni-11.png', '2021-06-07 21:20:09'),
(23, 'University of bedfordshire', 'UK', '<p>magna aliqua. Ut enim ad minim veniam, nisi ut aliquiptempor incid.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi m aperiam, eaque ipsa quae abaspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>', '23423', '4 years', '321', '12', 'public/upload/logo-22.png', 'public/upload/uni-22.png', '2021-06-07 21:20:59'),
(24, 'University of bolton', 'London', '<p>magna aliqua. Ut enim ad minim veniam, nisi ut aliquiptempor incid.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi m aperiam, eaque ipsa quae abaspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>', '3124', '4 years', '123', '12', 'public/upload/logo-33.png', 'public/upload/uni-33.png', '2021-06-07 21:21:54'),
(25, 'Uni of Glauchestershire', 'London', '<p>magna aliqua. Ut enim ad minim veniam, nisi ut aliquiptempor incid.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi m aperiam, eaque ipsa quae abaspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>', '234521', '4 years', '123', '12', 'public/upload/logo-44.png', 'public/upload/uni-44.png', '2021-06-07 21:22:46'),
(26, 'Solent', 'USA', '<p>magna aliqua. Ut enim ad minim veniam, nisi ut aliquiptempor incid.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi m aperiam, eaque ipsa quae abaspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>', '23452', '4 years', '123', '12', 'public/upload/logo-55.png', 'public/upload/uni-55.png', '2021-06-07 21:23:21'),
(27, 'Study Group', 'London', '<p>magna aliqua. Ut enim ad minim veniam, nisi ut aliquiptempor incid.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi m aperiam, eaque ipsa quae abaspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>', '12445', '5 years', '12', '9', 'public/upload/logo-66.png', 'public/upload/uni-66.png', '2021-06-07 21:24:21');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) CHARACTER SET utf8 NOT NULL,
  `phone` varchar(191) CHARACTER SET utf8 NOT NULL,
  `role_id` int(11) NOT NULL,
  `email` varchar(191) CHARACTER SET utf8 NOT NULL,
  `password` varchar(191) CHARACTER SET utf8 NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `image` mediumtext CHARACTER SET utf8 DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `phone`, `role_id`, `email`, `password`, `status`, `image`, `created_at`, `updated_at`) VALUES
(1, 'User', '0123456789', 1, 'admin@gmail.com', '$2y$10$XFR80XRwTjdnwPKfA.bqlOKGQSFhZPd/EVtVHu/FIIagSPrYgHbAa', 1, 'public/userImage/gallery-1.png', '2020-09-27 11:16:35', '2020-09-27 11:16:35'),
(3, 'Employee 2', '0123456789', 1, 'employee2@gmail.com', '$2y$10$83ZWuIXCqrx6z1.ZXFb5Tu.gcvsiJQquSlxGbYqEciXyULaNimu6y', 0, NULL, '2020-10-05 09:32:58', '2020-10-05 09:32:58');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accreditations`
--
ALTER TABLE `accreditations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lavels`
--
ALTER TABLE `lavels`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `our_people`
--
ALTER TABLE `our_people`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `schools`
--
ALTER TABLE `schools`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_about`
--
ALTER TABLE `tbl_about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_album`
--
ALTER TABLE `tbl_album`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_course`
--
ALTER TABLE `tbl_course`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_event`
--
ALTER TABLE `tbl_event`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_gallery`
--
ALTER TABLE `tbl_gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_news`
--
ALTER TABLE `tbl_news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_office_address`
--
ALTER TABLE `tbl_office_address`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_prerequisites_counselling`
--
ALTER TABLE `tbl_prerequisites_counselling`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_slider`
--
ALTER TABLE `tbl_slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_study_option`
--
ALTER TABLE `tbl_study_option`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_testimonial`
--
ALTER TABLE `tbl_testimonial`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_university`
--
ALTER TABLE `tbl_university`
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
-- AUTO_INCREMENT for table `accreditations`
--
ALTER TABLE `accreditations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=247;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `lavels`
--
ALTER TABLE `lavels`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `our_people`
--
ALTER TABLE `our_people`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `schools`
--
ALTER TABLE `schools`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `subjects`
--
ALTER TABLE `subjects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `tbl_about`
--
ALTER TABLE `tbl_about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_album`
--
ALTER TABLE `tbl_album`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_course`
--
ALTER TABLE `tbl_course`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_event`
--
ALTER TABLE `tbl_event`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_gallery`
--
ALTER TABLE `tbl_gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_news`
--
ALTER TABLE `tbl_news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_office_address`
--
ALTER TABLE `tbl_office_address`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_prerequisites_counselling`
--
ALTER TABLE `tbl_prerequisites_counselling`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_slider`
--
ALTER TABLE `tbl_slider`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_study_option`
--
ALTER TABLE `tbl_study_option`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_testimonial`
--
ALTER TABLE `tbl_testimonial`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_university`
--
ALTER TABLE `tbl_university`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
