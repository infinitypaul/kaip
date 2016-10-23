-- phpMyAdmin SQL Dump
-- version 4.5.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 21, 2016 at 11:14 AM
-- Server version: 5.7.11
-- PHP Version: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mlf`
--

-- --------------------------------------------------------

--
-- Table structure for table `codes`
--

CREATE TABLE `codes` (
  `id` int(10) UNSIGNED NOT NULL,
  `mobile_no` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `code` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `howmany` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `codes`
--

INSERT INTO `codes` (`id`, `mobile_no`, `code`, `howmany`, `created_at`, `updated_at`) VALUES
(7, '08170574789', 'vIki', 2, '2016-10-05 15:14:38', '2016-10-07 17:08:45'),
(8, '08134665041', 'CYKU', 0, '2016-10-07 17:11:38', '2016-10-07 17:11:38'),
(9, '081234445199', 'nO88', 0, '2016-10-09 17:46:18', '2016-10-09 17:46:18'),
(10, '08123445199', '97J9', 0, '2016-10-09 17:47:17', '2016-10-09 17:47:17');

-- --------------------------------------------------------

--
-- Table structure for table `levels`
--

CREATE TABLE `levels` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `rank` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2016_10_05_123342_create_codes_table', 1),
('2016_10_05_235335_create_testers_table', 2),
('2016_10_06_185018_create_r_e_f_e_r_r_a_l_s_table', 3),
('2016_10_06_193923_create_users_referrals_table', 3),
('2016_10_08_105000_create_levels_table', 4),
('2015_07_22_115516_create_ticketit_tables', 5),
('2015_07_22_123254_alter_users_table', 5),
('2015_09_29_123456_add_completed_at_column_to_ticketit_table', 5),
('2015_10_08_123457_create_settings_table', 5),
('2016_01_15_002617_add_htmlcontent_to_ticketit_and_comments', 5),
('2016_01_15_040207_enlarge_settings_columns', 5),
('2016_01_15_120557_add_indexes', 5);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `referrals`
--

CREATE TABLE `referrals` (
  `id` int(10) UNSIGNED NOT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `lft` int(11) DEFAULT NULL,
  `rgt` int(11) DEFAULT NULL,
  `depth` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `referrals`
--

INSERT INTO `referrals` (`id`, `parent_id`, `lft`, `rgt`, `depth`, `name`, `created_at`, `updated_at`) VALUES
(1, NULL, 1, 8, 0, 'Root category', '2016-10-07 09:16:40', '2016-10-09 19:06:54'),
(7, 1, 4, 5, 1, '3v9H4SQ', '2016-10-09 15:26:20', '2016-10-09 15:26:20'),
(8, 1, 6, 7, 1, '4X5jI9V', '2016-10-09 19:06:54', '2016-10-09 19:06:54');

-- --------------------------------------------------------

--
-- Table structure for table `referral_user`
--

CREATE TABLE `referral_user` (
  `user_id` int(11) NOT NULL,
  `referral_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `referral_user`
--

INSERT INTO `referral_user` (`user_id`, `referral_id`, `created_at`, `updated_at`) VALUES
(1, 1, NULL, NULL),
(4, 8, NULL, NULL),
(3, 7, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ticketit`
--

CREATE TABLE `ticketit` (
  `id` int(10) UNSIGNED NOT NULL,
  `subject` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8_unicode_ci NOT NULL,
  `html` longtext COLLATE utf8_unicode_ci,
  `status_id` int(10) UNSIGNED NOT NULL,
  `priority_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `agent_id` int(10) UNSIGNED NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `completed_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `ticketit`
--

INSERT INTO `ticketit` (`id`, `subject`, `content`, `html`, `status_id`, `priority_id`, `user_id`, `agent_id`, `category_id`, `created_at`, `updated_at`, `completed_at`) VALUES
(1, 'payment not confirmed', 'please help me look into me case', 'please help me look into me case', 1, 1, 3, 3, 1, '2016-10-09 12:52:43', '2016-10-09 13:25:31', NULL),
(2, 'payment not confirmed', 'please help me look into me case', 'please help me look into me case', 1, 1, 3, 3, 1, '2016-10-09 12:54:13', '2016-10-09 12:54:13', NULL),
(3, 'Your account is temporarily disabled', 'Your account is temporarily disabled and please dont come', 'Your account is temporarily disabled and please dont come', 1, 1, 3, 3, 1, '2016-10-09 13:09:19', '2016-10-09 13:09:19', NULL),
(4, 'Your account is temporarily disabled', 'Your account is temporarily disabled and please dont come', 'Your account is temporarily disabled and please dont come', 1, 1, 3, 3, 1, '2016-10-09 13:10:33', '2016-10-09 13:10:33', NULL),
(5, 'Your account is temporarily disabled', 'how do i explain this whole shit', '<p>how do i explain this whole shit<br /></p>', 1, 1, 3, 3, 1, '2016-10-09 13:22:12', '2016-10-09 13:22:12', NULL),
(6, 'payment not confirmed', 'i am jdhd  ', '<p>i am jdhd  <br /></p>', 1, 1, 4, 3, 1, '2016-10-09 20:05:40', '2016-10-09 20:06:45', '2016-10-09 20:06:43');

-- --------------------------------------------------------

--
-- Table structure for table `ticketit_audits`
--

CREATE TABLE `ticketit_audits` (
  `id` int(10) UNSIGNED NOT NULL,
  `operation` text COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `ticket_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ticketit_categories`
--

CREATE TABLE `ticketit_categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `color` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `ticketit_categories`
--

INSERT INTO `ticketit_categories` (`id`, `name`, `color`) VALUES
(1, 'Payment', '#8000ff'),
(2, 'Complain', '#000000');

-- --------------------------------------------------------

--
-- Table structure for table `ticketit_categories_users`
--

CREATE TABLE `ticketit_categories_users` (
  `category_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ticketit_comments`
--

CREATE TABLE `ticketit_comments` (
  `id` int(10) UNSIGNED NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `html` longtext COLLATE utf8_unicode_ci,
  `user_id` int(10) UNSIGNED NOT NULL,
  `ticket_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `ticketit_comments`
--

INSERT INTO `ticketit_comments` (`id`, `content`, `html`, `user_id`, `ticket_id`, `created_at`, `updated_at`) VALUES
(1, 'okay', '<p>okay<br /></p>', 3, 1, '2016-10-09 13:25:31', '2016-10-09 13:25:31');

-- --------------------------------------------------------

--
-- Table structure for table `ticketit_priorities`
--

CREATE TABLE `ticketit_priorities` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `color` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `ticketit_priorities`
--

INSERT INTO `ticketit_priorities` (`id`, `name`, `color`) VALUES
(1, 'High', '#0080c0'),
(2, 'low', '#008000'),
(3, 'medium', '#000000');

-- --------------------------------------------------------

--
-- Table structure for table `ticketit_settings`
--

CREATE TABLE `ticketit_settings` (
  `id` int(10) UNSIGNED NOT NULL,
  `lang` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `value` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `default` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `ticketit_settings`
--

INSERT INTO `ticketit_settings` (`id`, `lang`, `slug`, `value`, `default`, `created_at`, `updated_at`) VALUES
(1, NULL, 'main_route', 'tickets', 'tickets', '2016-10-09 11:20:23', '2016-10-09 11:20:23'),
(2, NULL, 'main_route_path', 'tickets', 'tickets', '2016-10-09 11:20:23', '2016-10-09 11:20:23'),
(3, NULL, 'admin_route', 'tickets-admin', 'tickets-admin', '2016-10-09 11:20:23', '2016-10-09 11:20:23'),
(4, NULL, 'admin_route_path', 'tickets-admin', 'tickets-admin', '2016-10-09 11:20:23', '2016-10-09 11:20:23'),
(5, NULL, 'master_template', 'support', 'support', '2016-10-09 11:20:23', '2016-10-09 11:20:23'),
(6, NULL, 'email.template', 'ticketit::emails.templates.ticketit', 'ticketit::emails.templates.ticketit', '2016-10-09 11:20:23', '2016-10-09 11:20:23'),
(7, NULL, 'email.header', 'Ticket Update', 'Ticket Update', '2016-10-09 11:20:23', '2016-10-09 11:20:23'),
(8, NULL, 'email.signoff', 'Thank you for your patience!', 'Thank you for your patience!', '2016-10-09 11:20:23', '2016-10-09 11:20:23'),
(9, NULL, 'email.signature', 'Your friends', 'Your friends', '2016-10-09 11:20:23', '2016-10-09 11:20:23'),
(10, NULL, 'email.dashboard', 'My Dashboard', 'My Dashboard', '2016-10-09 11:20:24', '2016-10-09 11:20:24'),
(11, NULL, 'email.google_plus_link', '#', '#', '2016-10-09 11:20:24', '2016-10-09 11:20:24'),
(12, NULL, 'email.facebook_link', '#', '#', '2016-10-09 11:20:24', '2016-10-09 11:20:24'),
(13, NULL, 'email.twitter_link', '#', '#', '2016-10-09 11:20:24', '2016-10-09 11:20:24'),
(14, NULL, 'email.footer', 'Powered by My Liberty Family', 'Powered by Ticketit', '2016-10-09 11:20:24', '2016-10-09 13:24:08'),
(15, NULL, 'email.footer_link', 'https://mylibertyfamily.com', 'https://github.com/thekordy/ticketit', '2016-10-09 11:20:24', '2016-10-09 13:24:38'),
(16, NULL, 'email.color_body_bg', '#FFFFFF', '#FFFFFF', '2016-10-09 11:20:24', '2016-10-09 11:20:24'),
(17, NULL, 'email.color_header_bg', '#44B7B7', '#44B7B7', '2016-10-09 11:20:24', '2016-10-09 11:20:24'),
(18, NULL, 'email.color_content_bg', '#F46B45', '#F46B45', '2016-10-09 11:20:24', '2016-10-09 11:20:24'),
(19, NULL, 'email.color_footer_bg', '#414141', '#414141', '2016-10-09 11:20:24', '2016-10-09 11:20:24'),
(20, NULL, 'email.color_button_bg', '#AC4D2F', '#AC4D2F', '2016-10-09 11:20:24', '2016-10-09 11:20:24'),
(21, NULL, 'default_status_id', '1', '1', '2016-10-09 11:20:24', '2016-10-09 11:20:24'),
(22, NULL, 'default_close_status_id', '0', '0', '2016-10-09 11:20:24', '2016-10-09 11:20:24'),
(23, NULL, 'default_reopen_status_id', '0', '0', '2016-10-09 11:20:24', '2016-10-09 11:20:24'),
(24, NULL, 'paginate_items', '10', '10', '2016-10-09 11:20:24', '2016-10-09 11:20:24'),
(25, NULL, 'length_menu', 'a:2:{i:0;a:3:{i:0;i:10;i:1;i:50;i:2;i:100;}i:1;a:3:{i:0;i:10;i:1;i:50;i:2;i:100;}}', 'a:2:{i:0;a:3:{i:0;i:10;i:1;i:50;i:2;i:100;}i:1;a:3:{i:0;i:10;i:1;i:50;i:2;i:100;}}', '2016-10-09 11:20:24', '2016-10-09 11:20:24'),
(26, NULL, 'status_notification', '1', '1', '2016-10-09 11:20:24', '2016-10-09 11:20:24'),
(27, NULL, 'comment_notification', '1', '1', '2016-10-09 11:20:24', '2016-10-09 11:20:24'),
(28, NULL, 'queue_emails', '0', '0', '2016-10-09 11:20:24', '2016-10-09 11:20:24'),
(29, NULL, 'assigned_notification', '1', '1', '2016-10-09 11:20:24', '2016-10-09 11:20:24'),
(30, NULL, 'agent_restrict', '0', '0', '2016-10-09 11:20:24', '2016-10-09 11:20:24'),
(31, NULL, 'close_ticket_perm', 'a:3:{s:5:"owner";b:1;s:5:"agent";b:1;s:5:"admin";b:1;}', 'a:3:{s:5:"owner";b:1;s:5:"agent";b:1;s:5:"admin";b:1;}', '2016-10-09 11:20:24', '2016-10-09 11:20:24'),
(32, NULL, 'reopen_ticket_perm', 'a:3:{s:5:"owner";b:1;s:5:"agent";b:1;s:5:"admin";b:1;}', 'a:3:{s:5:"owner";b:1;s:5:"agent";b:1;s:5:"admin";b:1;}', '2016-10-09 11:20:24', '2016-10-09 11:20:24'),
(33, NULL, 'delete_modal_type', 'builtin', 'builtin', '2016-10-09 11:20:24', '2016-10-09 11:20:24'),
(34, NULL, 'editor_enabled', '1', '1', '2016-10-09 11:20:24', '2016-10-09 11:20:24'),
(35, NULL, 'include_font_awesome', '1', '1', '2016-10-09 11:20:24', '2016-10-09 11:20:24'),
(36, NULL, 'summernote_locale', 'en', 'en', '2016-10-09 11:20:24', '2016-10-09 11:20:24'),
(37, NULL, 'editor_html_highlighter', '1', '1', '2016-10-09 11:20:24', '2016-10-09 11:20:24'),
(38, NULL, 'codemirror_theme', 'monokai', 'monokai', '2016-10-09 11:20:24', '2016-10-09 11:20:24'),
(39, NULL, 'summernote_options_json_file', 'vendor/kordy/ticketit/src/JSON/summernote_init.json', 'vendor/kordy/ticketit/src/JSON/summernote_init.json', '2016-10-09 11:20:24', '2016-10-09 11:20:24'),
(40, NULL, 'purifier_config', 'a:3:{s:15:"HTML.SafeIframe";s:4:"true";s:20:"URI.SafeIframeRegexp";s:72:"%^(http://|https://|//)(www.youtube.com/embed/|player.vimeo.com/video/)%";s:18:"URI.AllowedSchemes";a:5:{s:4:"data";b:1;s:4:"http";b:1;s:5:"https";b:1;s:6:"mailto";b:1;s:3:"ftp";b:1;}}', 'a:3:{s:15:"HTML.SafeIframe";s:4:"true";s:20:"URI.SafeIframeRegexp";s:72:"%^(http://|https://|//)(www.youtube.com/embed/|player.vimeo.com/video/)%";s:18:"URI.AllowedSchemes";a:5:{s:4:"data";b:1;s:4:"http";b:1;s:5:"https";b:1;s:6:"mailto";b:1;s:3:"ftp";b:1;}}', '2016-10-09 11:20:24', '2016-10-09 11:20:24');

-- --------------------------------------------------------

--
-- Table structure for table `ticketit_statuses`
--

CREATE TABLE `ticketit_statuses` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `color` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `ticketit_statuses`
--

INSERT INTO `ticketit_statuses` (`id`, `name`, `color`) VALUES
(1, 'Submited', '#ff0000'),
(2, 'Answered', '#008000');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `firstname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `lastname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `aoi` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `dob` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `gender` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mobile` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nok_fn` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nok_ln` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nok_pn` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nok_add` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `bank_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `bank_account` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `account_no` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_code` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `active` int(11) NOT NULL DEFAULT '0',
  `ip` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ban` int(11) DEFAULT '0',
  `refer` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `whorefer` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `wallet` varchar(255) COLLATE utf8_unicode_ci DEFAULT '0',
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ticketit_admin` tinyint(1) NOT NULL DEFAULT '0',
  `ticketit_agent` tinyint(1) NOT NULL DEFAULT '0',
  `location` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'http://placehold.it/150x150'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `aoi`, `dob`, `gender`, `email`, `mobile`, `password`, `nok_fn`, `nok_ln`, `nok_pn`, `nok_add`, `bank_name`, `bank_account`, `account_no`, `user_code`, `remember_token`, `created_at`, `updated_at`, `active`, `ip`, `ban`, `refer`, `whorefer`, `wallet`, `name`, `ticketit_admin`, `ticketit_agent`, `location`) VALUES
(1, 'eddyy', 'paul', 'e', 'e', 'e', 'e', 'e', 'e', 'e', 'e', 'e', 'e', 'e', 'e', 'e', '12345', 'e', NULL, NULL, 0, NULL, 0, NULL, NULL, '0', NULL, 0, 0, 'http://placehold.it/150x150'),
(3, 'Edward', 'Paul', 'Farming', '12/25/1983', 'm', 'infinitypaul@live.com', '08170574789', '$2y$10$rEJ6Icnnogbr2AElHASe8.VNujRY2Yyk6XavGjBxYTuJU34xE4qgW', 'Kenneth', 'James', '08170574789', 'lagos nigeria', 'gtb', 'Edward Paul', '1234567890', '3v9H4SQ', 'VeJ3VhL4JIWLYXzinxAezOzE8u4SXqMs3dYhBj1CMm5oSWUZTaO7pfCGDWbg', '2016-10-08 09:01:10', '2016-10-09 17:42:21', 1, '::1', 0, '12345', '1', '0', 'infinitypaul', 1, 0, 'https://ucarecdn.com/054f7947-0df7-4bd8-b279-4d65b4a72f1e/-/crop/1446x1928/1670,7/-/preview/'),
(4, 'Olaitan', 'Oladele', 'Farming', '12/25/1983', 'm', 'oladeleolaitan@gmail.com', '08123445199', '$2y$10$TTY/nJfj3g6kYvxpNYJAqOpPb4pEXA9ekKkVpAAmEwT9l6ElI2DUa', '0la', 'ola', '1000094412', 'Binmpe Joke SDtreet', 'gtb', 'ola ola', '1000944321', '4X5jI9V', 'bi63TXuUWpPs1TguvoR2TqX6R4H5bzQXbMlFU15PjCuX9B16ZqPTNWnmkV54', '2016-10-09 17:55:02', '2016-10-09 21:23:04', 1, '::1', 0, '12345', '1', '0', NULL, 0, 0, 'https://ucarecdn.com/fb774e55-ea08-4511-82de-5de446b50c13/-/crop/1378x1838/1670,45/-/preview/');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `codes`
--
ALTER TABLE `codes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `levels`
--
ALTER TABLE `levels`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `referrals`
--
ALTER TABLE `referrals`
  ADD PRIMARY KEY (`id`),
  ADD KEY `referrals_parent_id_index` (`parent_id`),
  ADD KEY `referrals_lft_index` (`lft`),
  ADD KEY `referrals_rgt_index` (`rgt`);

--
-- Indexes for table `referral_user`
--
ALTER TABLE `referral_user`
  ADD PRIMARY KEY (`user_id`,`referral_id`);

--
-- Indexes for table `ticketit`
--
ALTER TABLE `ticketit`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ticketit_subject_index` (`subject`),
  ADD KEY `ticketit_status_id_index` (`status_id`),
  ADD KEY `ticketit_priority_id_index` (`priority_id`),
  ADD KEY `ticketit_user_id_index` (`user_id`),
  ADD KEY `ticketit_agent_id_index` (`agent_id`),
  ADD KEY `ticketit_category_id_index` (`category_id`),
  ADD KEY `ticketit_completed_at_index` (`completed_at`);

--
-- Indexes for table `ticketit_audits`
--
ALTER TABLE `ticketit_audits`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ticketit_categories`
--
ALTER TABLE `ticketit_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ticketit_comments`
--
ALTER TABLE `ticketit_comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ticketit_comments_user_id_index` (`user_id`),
  ADD KEY `ticketit_comments_ticket_id_index` (`ticket_id`);

--
-- Indexes for table `ticketit_priorities`
--
ALTER TABLE `ticketit_priorities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ticketit_settings`
--
ALTER TABLE `ticketit_settings`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `ticketit_settings_slug_unique` (`slug`),
  ADD UNIQUE KEY `ticketit_settings_lang_unique` (`lang`),
  ADD KEY `ticketit_settings_lang_index` (`lang`),
  ADD KEY `ticketit_settings_slug_index` (`slug`);

--
-- Indexes for table `ticketit_statuses`
--
ALTER TABLE `ticketit_statuses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_mobile_unique` (`mobile`),
  ADD UNIQUE KEY `users_account_no_unique` (`account_no`),
  ADD UNIQUE KEY `users_user_code_unique` (`user_code`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `codes`
--
ALTER TABLE `codes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `levels`
--
ALTER TABLE `levels`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `referrals`
--
ALTER TABLE `referrals`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `ticketit`
--
ALTER TABLE `ticketit`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `ticketit_audits`
--
ALTER TABLE `ticketit_audits`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `ticketit_categories`
--
ALTER TABLE `ticketit_categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `ticketit_comments`
--
ALTER TABLE `ticketit_comments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `ticketit_priorities`
--
ALTER TABLE `ticketit_priorities`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `ticketit_settings`
--
ALTER TABLE `ticketit_settings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
--
-- AUTO_INCREMENT for table `ticketit_statuses`
--
ALTER TABLE `ticketit_statuses`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
