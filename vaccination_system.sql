-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 19, 2024 at 04:00 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vaccination_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(16) NOT NULL,
  `image` varchar(100) NOT NULL,
  `created_at` varchar(150) NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`id`, `name`, `email`, `password`, `image`, `created_at`) VALUES
(1, 'Abdul Moiz', 'abdulmoizforaptech@gmail.com', 'admin123', 'assests/dist/img/24 copy.jpg', 'current_timestamp()');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_appointment`
--

CREATE TABLE `tbl_appointment` (
  `id` int(11) NOT NULL,
  `p_id` int(11) NOT NULL,
  `h_id` int(11) NOT NULL,
  `date` varchar(20) NOT NULL,
  `time` varchar(20) NOT NULL,
  `v_id` int(11) NOT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'pending',
  `created_at` varchar(150) NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_appointment`
--

INSERT INTO `tbl_appointment` (`id`, `p_id`, `h_id`, `date`, `time`, `v_id`, `status`, `created_at`) VALUES
(1, 1, 2, '2024-07-01', '9-11', 2, 'pending', 'current_timestamp()'),
(2, 2, 1, '2024-06-30', '1-3', 4, 'pending', 'current_timestamp()'),
(3, 4, 4, '2024-07-13', '5pm-7pm', 2, 'pending', '2024-07-10 21:31:33'),
(4, 4, 1, '2024-07-19', '5pm-7pm', 2, 'pending', '2024-07-10 21:32:28');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_city`
--

CREATE TABLE `tbl_city` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `created_at` varchar(150) NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_city`
--

INSERT INTO `tbl_city` (`id`, `name`, `created_at`) VALUES
(1, 'Karachi', 'current_timestamp()'),
(2, 'Lahore', 'current_timestamp()'),
(3, 'Islamabad', 'current_timestamp()'),
(4, 'Abbaspur', '2024-07-19 18:49:59'),
(5, 'Abbottabad', '2024-07-19 18:49:59'),
(6, 'Abdul Hakim', '2024-07-19 18:49:59'),
(7, 'Adda Jahan Khan', '2024-07-19 18:49:59'),
(8, 'Adda Shaiwala', '2024-07-19 18:49:59'),
(9, 'Ahmadpur East', '2024-07-19 18:49:59'),
(10, 'Ahmed pur Sial', '2024-07-19 18:49:59'),
(11, 'Akhora Khattak', '2024-07-19 18:49:59'),
(12, 'Ali Chak', '2024-07-19 18:49:59'),
(13, 'Alipur', '2024-07-19 18:49:59'),
(14, 'Allahabad', '2024-07-19 18:49:59'),
(15, 'Amangarh', '2024-07-19 18:49:59'),
(16, 'Ambela', '2024-07-19 18:49:59'),
(17, 'Arifwala', '2024-07-19 18:49:59'),
(18, 'Astore', '2024-07-19 18:49:59'),
(19, 'Attock', '2024-07-19 18:49:59'),
(20, 'Babri Banda', '2024-07-19 18:49:59'),
(21, 'Badin', '2024-07-19 18:49:59'),
(22, 'Bagh', '2024-07-19 18:49:59'),
(23, 'Bahawalnagar', '2024-07-19 18:49:59'),
(24, 'Bahawalpur', '2024-07-19 18:49:59'),
(25, 'Bajaur', '2024-07-19 18:49:59'),
(26, 'Balakot', '2024-07-19 18:49:59'),
(27, 'Bannu', '2024-07-19 18:49:59'),
(28, 'Barbar Loi', '2024-07-19 18:49:59'),
(29, 'Barkhan', '2024-07-19 18:49:59'),
(30, 'Baroute', '2024-07-19 18:49:59'),
(31, 'Bat Khela', '2024-07-19 18:49:59'),
(32, 'Battagram', '2024-07-19 18:49:59'),
(33, 'Besham', '2024-07-19 18:49:59'),
(34, 'Bewal', '2024-07-19 18:49:59'),
(35, 'Bhakkar', '2024-07-19 18:49:59'),
(36, 'Bhalwal', '2024-07-19 18:49:59'),
(37, 'Bhan Saeedabad', '2024-07-19 18:49:59'),
(38, 'Bhara Kahu', '2024-07-19 18:49:59'),
(39, 'Bhera', '2024-07-19 18:49:59'),
(40, 'Bhimbar', '2024-07-19 18:49:59'),
(41, 'Bhirya Road', '2024-07-19 18:49:59'),
(42, 'Bhuawana', '2024-07-19 18:49:59'),
(43, 'Bisham', '2024-07-19 18:49:59'),
(44, 'Blitang', '2024-07-19 18:49:59'),
(45, 'Bolan', '2024-07-19 18:49:59'),
(46, 'Buchay Key', '2024-07-19 18:49:59'),
(47, 'Bunner', '2024-07-19 18:49:59'),
(48, 'Burewala', '2024-07-19 18:49:59'),
(49, 'Chacklala', '2024-07-19 18:49:59'),
(50, 'Chaghi', '2024-07-19 18:49:59'),
(51, 'Chaininda', '2024-07-19 18:49:59'),
(52, 'Chak 4 b c', '2024-07-19 18:49:59'),
(53, 'Chak 46', '2024-07-19 18:49:59'),
(54, 'Chak Jamal', '2024-07-19 18:49:59'),
(55, 'Chak Jhumra', '2024-07-19 18:49:59'),
(56, 'Chak Sawara', '2024-07-19 18:49:59'),
(57, 'Chak Sheza', '2024-07-19 18:49:59'),
(58, 'Chakwal', '2024-07-19 18:49:59'),
(59, 'Chaman', '2024-07-19 18:49:59'),
(60, 'Charsada', '2024-07-19 18:49:59'),
(61, 'Chashma', '2024-07-19 18:49:59'),
(62, 'Chawinda', '2024-07-19 18:49:59'),
(63, 'Cherat', '2024-07-19 18:49:59'),
(64, 'Chicha watni', '2024-07-19 18:49:59'),
(65, 'Chilas', '2024-07-19 18:49:59'),
(66, 'Chiniot', '2024-07-19 18:49:59'),
(67, 'Chishtian', '2024-07-19 18:49:59'),
(68, 'Chitral', '2024-07-19 18:49:59'),
(69, 'Choa Saiden Shah', '2024-07-19 18:49:59'),
(70, 'Chohar Jamali', '2024-07-19 18:49:59'),
(71, 'Choppar Hatta', '2024-07-19 18:49:59'),
(72, 'Chowk Azam', '2024-07-19 18:49:59'),
(73, 'Chowk Maitla', '2024-07-19 18:49:59'),
(74, 'Chowk Munda', '2024-07-19 18:49:59'),
(75, 'Chunian', '2024-07-19 18:49:59'),
(76, 'Dadakhel', '2024-07-19 18:49:59'),
(77, 'Dadu', '2024-07-19 18:49:59'),
(78, 'Daharki', '2024-07-19 18:49:59'),
(79, 'Dandot', '2024-07-19 18:49:59'),
(80, 'Dargai', '2024-07-19 18:49:59'),
(81, 'Darra Pezu', '2024-07-19 18:49:59'),
(82, 'Darya Khan', '2024-07-19 18:49:59'),
(83, 'Daska', '2024-07-19 18:49:59'),
(84, 'Dassu', '2024-07-19 18:49:59'),
(85, 'Daud Khel', '2024-07-19 18:49:59'),
(86, 'Daulat Pur', '2024-07-19 18:49:59'),
(87, 'Daur', '2024-07-19 18:50:00'),
(88, 'Deh Pathaan', '2024-07-19 18:50:00'),
(89, 'Depal Pur', '2024-07-19 18:50:00'),
(90, 'Dera Bugti', '2024-07-19 18:50:00'),
(91, 'Dera Ghazi Khan', '2024-07-19 18:50:00'),
(92, 'Dera Ismail Khan', '2024-07-19 18:50:00'),
(93, 'Dera Murad Jamali', '2024-07-19 18:50:00'),
(94, 'Dera Nawab Sahib', '2024-07-19 18:50:00'),
(95, 'Dhatmal', '2024-07-19 18:50:00'),
(96, 'Dhirkot', '2024-07-19 18:50:00'),
(97, 'Dhoun Kal', '2024-07-19 18:50:00'),
(98, 'Diamer', '2024-07-19 18:50:00'),
(99, 'Digri', '2024-07-19 18:50:00'),
(100, 'Dijkot', '2024-07-19 18:50:00'),
(101, 'Dina', '2024-07-19 18:50:00'),
(102, 'Dinga', '2024-07-19 18:50:00'),
(103, 'Dir', '2024-07-19 18:50:00'),
(104, 'Doaaba', '2024-07-19 18:50:00'),
(105, 'Doltala', '2024-07-19 18:50:00'),
(106, 'Domeli', '2024-07-19 18:50:00'),
(107, 'Dudial', '2024-07-19 18:50:00'),
(108, 'Dunyapur', '2024-07-19 18:50:00'),
(109, 'Eminabad', '2024-07-19 18:50:00'),
(110, 'Faisalabad', '2024-07-19 18:50:00'),
(111, 'Farooqabad', '2024-07-19 18:50:00'),
(112, 'Fateh Jang', '2024-07-19 18:50:00'),
(113, 'Fateh Pur', '2024-07-19 18:50:00'),
(114, 'Feroz Walla', '2024-07-19 18:50:00'),
(115, 'Feroz Watan', '2024-07-19 18:50:00'),
(116, 'Fizagat', '2024-07-19 18:50:00'),
(117, 'Fort Abbas', '2024-07-19 18:50:00'),
(118, 'FR Bannu', '2024-07-19 18:50:00'),
(119, 'FR Bannu / Lakki', '2024-07-19 18:50:00'),
(120, 'FR DI Khan', '2024-07-19 18:50:00'),
(121, 'FR Kohat', '2024-07-19 18:50:00'),
(122, 'FR Peshawar', '2024-07-19 18:50:00'),
(123, 'FR Peshawar / Kohat', '2024-07-19 18:50:00'),
(124, 'FR Tank / DI Khan', '2024-07-19 18:50:00'),
(125, 'Gadoon Amazai', '2024-07-19 18:50:00'),
(126, 'Gaggo Mandi', '2024-07-19 18:50:00'),
(127, 'Gakhar Mandi', '2024-07-19 18:50:00'),
(128, 'Gambet', '2024-07-19 18:50:00'),
(129, 'Garh Maharaja', '2024-07-19 18:50:00'),
(130, 'Garh More', '2024-07-19 18:50:00'),
(131, 'Gari Habibullah', '2024-07-19 18:50:00'),
(132, 'Gari Mori', '2024-07-19 18:50:00'),
(133, 'Ghari Dupatta', '2024-07-19 18:50:00'),
(134, 'Gharo', '2024-07-19 18:50:00'),
(135, 'Ghazi', '2024-07-19 18:50:00'),
(136, 'Ghizer', '2024-07-19 18:50:00'),
(137, 'Ghotki', '2024-07-19 18:50:00'),
(138, 'Ghuzdar', '2024-07-19 18:50:00'),
(139, 'Gilgit', '2024-07-19 18:50:00'),
(140, 'Gohar Ghoushti', '2024-07-19 18:50:00'),
(141, 'Gojra', '2024-07-19 18:50:00'),
(142, 'Goular Khel', '2024-07-19 18:50:00'),
(143, 'Guddu', '2024-07-19 18:50:00'),
(144, 'Gujar Khan', '2024-07-19 18:50:00'),
(145, 'Gujranwala', '2024-07-19 18:50:00'),
(146, 'Gujrat', '2024-07-19 18:50:00'),
(147, 'Gwadar', '2024-07-19 18:50:00'),
(148, 'Hafizabad', '2024-07-19 18:50:00'),
(149, 'Hala', '2024-07-19 18:50:00'),
(150, 'Hangu', '2024-07-19 18:50:00'),
(151, 'Hari Pur', '2024-07-19 18:50:00'),
(152, 'Hariwala', '2024-07-19 18:50:00'),
(153, 'Harnai', '2024-07-19 18:50:00'),
(154, 'Haroonabad', '2024-07-19 18:50:00'),
(155, 'Hasilpur', '2024-07-19 18:50:00'),
(156, 'Hassan Abdal', '2024-07-19 18:50:00'),
(157, 'Hattar', '2024-07-19 18:50:00'),
(158, 'Hattian', '2024-07-19 18:50:00'),
(159, 'Haveli Kahuta', '2024-07-19 18:50:00'),
(160, 'Haveli Lakha', '2024-07-19 18:50:00'),
(161, 'Havelian', '2024-07-19 18:50:00'),
(162, 'Hayatabad', '2024-07-19 18:50:00'),
(163, 'Hazro', '2024-07-19 18:50:00'),
(164, 'Head Marala', '2024-07-19 18:50:00'),
(165, 'Hub Chowki', '2024-07-19 18:50:00'),
(166, 'Hub Inds Estate', '2024-07-19 18:50:00'),
(167, 'Hujra Shah Muqeem', '2024-07-19 18:50:00'),
(168, 'Hunza Nagar', '2024-07-19 18:50:00'),
(169, 'Hyderabad', '2024-07-19 18:50:00'),
(170, 'Issa Khel', '2024-07-19 18:50:00'),
(171, 'Jacobabad', '2024-07-19 18:50:00'),
(172, 'Jaffarabad', '2024-07-19 18:50:00'),
(173, 'Jaja Abasian', '2024-07-19 18:50:00'),
(174, 'Jalal Pur Jatan', '2024-07-19 18:50:00'),
(175, 'Jalal Pur Priwala', '2024-07-19 18:50:00'),
(176, 'Jalozai', '2024-07-19 18:50:00'),
(177, 'Jampur', '2024-07-19 18:50:00'),
(178, 'Jamrud Road', '2024-07-19 18:50:00'),
(179, 'Jamshoro', '2024-07-19 18:50:00'),
(180, 'Jandanwala', '2024-07-19 18:50:00'),
(181, 'Jaranwala', '2024-07-19 18:50:00'),
(182, 'Jatoi', '2024-07-19 18:50:00'),
(183, 'Jauharabad', '2024-07-19 18:50:00'),
(184, 'Jehangira', '2024-07-19 18:50:00'),
(185, 'Jehanian', '2024-07-19 18:50:00'),
(186, 'Jhal Magsi', '2024-07-19 18:50:00'),
(187, 'Jhand', '2024-07-19 18:50:00'),
(188, 'Jhang', '2024-07-19 18:50:00'),
(189, 'Jhatta Bhutta', '2024-07-19 18:50:00'),
(190, 'Jhelum', '2024-07-19 18:50:00'),
(191, 'Jhudo', '2024-07-19 18:50:00'),
(192, 'Kabir Wala', '2024-07-19 18:50:00'),
(193, 'Kacha Khooh', '2024-07-19 18:50:00'),
(194, 'Kachhi/Bolan', '2024-07-19 18:50:00'),
(195, 'Kahror Pacca', '2024-07-19 18:50:00'),
(196, 'Kahuta', '2024-07-19 18:50:00'),
(197, 'Kakul', '2024-07-19 18:50:00'),
(198, 'Kakur Town', '2024-07-19 18:50:00'),
(199, 'Kala Bagh', '2024-07-19 18:50:00'),
(200, 'Kala Shah Kaku', '2024-07-19 18:50:00'),
(201, 'Kalam', '2024-07-19 18:50:00'),
(202, 'Kalar Syedian', '2024-07-19 18:50:00'),
(203, 'Kalaswala', '2024-07-19 18:50:00'),
(204, 'Kallat', '2024-07-19 18:50:00'),
(205, 'Kallur Kot', '2024-07-19 18:50:00'),
(206, 'Kamalia', '2024-07-19 18:50:00'),
(207, 'Kamalia Musa', '2024-07-19 18:50:00'),
(208, 'Kamber Ali Khan', '2024-07-19 18:50:00'),
(209, 'Kamokey', '2024-07-19 18:50:00'),
(210, 'Kamra', '2024-07-19 18:50:00'),
(211, 'Kandhkot', '2024-07-19 18:50:00'),
(212, 'Kandiaro', '2024-07-19 18:50:00'),
(213, 'Karak', '2024-07-19 18:50:00'),
(214, 'Karore Lalisan', '2024-07-19 18:50:00'),
(215, 'Kashmir', '2024-07-19 18:50:00'),
(216, 'Kashmore', '2024-07-19 18:50:00'),
(217, 'Kasur', '2024-07-19 18:50:00'),
(218, 'Kazi Ahmed', '2024-07-19 18:50:00'),
(219, 'Kech', '2024-07-19 18:50:00'),
(220, 'Khair Pur', '2024-07-19 18:50:00'),
(221, 'Khair Pur Mir', '2024-07-19 18:50:00'),
(222, 'Khairpur Nathan Shah', '2024-07-19 18:50:00'),
(223, 'Khanbela', '2024-07-19 18:50:00'),
(224, 'Khandabad', '2024-07-19 18:50:00'),
(225, 'Khanewal', '2024-07-19 18:50:00'),
(226, 'Khangarh', '2024-07-19 18:50:00'),
(227, 'Khanpur', '2024-07-19 18:50:00'),
(228, 'Khanqah Dogran', '2024-07-19 18:50:00'),
(229, 'Khanqah Sharif', '2024-07-19 18:50:00'),
(230, 'Kharan', '2024-07-19 18:50:00'),
(231, 'Kharian', '2024-07-19 18:50:00'),
(232, 'Khewra', '2024-07-19 18:50:00'),
(233, 'Khoski', '2024-07-19 18:50:01'),
(234, 'Khuiratta', '2024-07-19 18:50:01'),
(235, 'Khurian wala', '2024-07-19 18:50:01'),
(236, 'Khushab', '2024-07-19 18:50:01'),
(237, 'Khushal Kot', '2024-07-19 18:50:01'),
(238, 'Khuzdar', '2024-07-19 18:50:01'),
(239, 'Khyber Agency', '2024-07-19 18:50:01'),
(240, 'Killa Abdullah', '2024-07-19 18:50:01'),
(241, 'Killa Saifullah', '2024-07-19 18:50:01'),
(242, 'Kohat', '2024-07-19 18:50:01'),
(243, 'Kohistan', '2024-07-19 18:50:01'),
(244, 'Kohlu', '2024-07-19 18:50:01'),
(245, 'Kot Addu', '2024-07-19 18:50:01'),
(246, 'Kot Bunglow', '2024-07-19 18:50:01'),
(247, 'Kot Ghulam Mohd', '2024-07-19 18:50:01'),
(248, 'Kot Mithan', '2024-07-19 18:50:01'),
(249, 'Kot Radha Kishan', '2024-07-19 18:50:01'),
(250, 'Kotla', '2024-07-19 18:50:01'),
(251, 'Kotla Arab Ali Khan', '2024-07-19 18:50:01'),
(252, 'Kotla Jam', '2024-07-19 18:50:01'),
(253, 'Kotla Pathan', '2024-07-19 18:50:01'),
(254, 'Kotli', '2024-07-19 18:50:01'),
(255, 'Kotli Loharan', '2024-07-19 18:50:01'),
(256, 'Kotmomin', '2024-07-19 18:50:01'),
(257, 'Kotri', '2024-07-19 18:50:01'),
(258, 'Kumbh', '2024-07-19 18:50:01'),
(259, 'Kundina', '2024-07-19 18:50:01'),
(260, 'Kunjah', '2024-07-19 18:50:01'),
(261, 'Kunri', '2024-07-19 18:50:01'),
(262, 'Kurram', '2024-07-19 18:50:01'),
(263, 'Kurram Agency', '2024-07-19 18:50:01'),
(264, 'Lakimarwat', '2024-07-19 18:50:01'),
(265, 'Lakki Marwat', '2024-07-19 18:50:01'),
(266, 'Lala rukh', '2024-07-19 18:50:01'),
(267, 'Lalamusa', '2024-07-19 18:50:01'),
(268, 'Laliah', '2024-07-19 18:50:01'),
(269, 'Lalshanra', '2024-07-19 18:50:01'),
(270, 'Landi Kotal', '2024-07-19 18:50:01'),
(271, 'Larkana', '2024-07-19 18:50:01'),
(272, 'Lasbela', '2024-07-19 18:50:01'),
(273, 'Lawrence pur', '2024-07-19 18:50:01'),
(274, 'Layyah', '2024-07-19 18:50:01'),
(275, 'Leepa', '2024-07-19 18:50:01'),
(276, 'Liaquat Pur', '2024-07-19 18:50:01'),
(277, 'Lodhran', '2024-07-19 18:50:01'),
(278, 'Loralai', '2024-07-19 18:50:01'),
(279, 'Lower Dir', '2024-07-19 18:50:01'),
(280, 'Ludhan', '2024-07-19 18:50:01'),
(281, 'Machh', '2024-07-19 18:50:01'),
(282, 'Machi Goth', '2024-07-19 18:50:01'),
(283, 'Madinah', '2024-07-19 18:50:01'),
(284, 'Mailsi', '2024-07-19 18:50:01'),
(285, 'Makli', '2024-07-19 18:50:01'),
(286, 'Makran', '2024-07-19 18:50:01'),
(287, 'Malakand', '2024-07-19 18:50:01'),
(288, 'Malakwal', '2024-07-19 18:50:01'),
(289, 'Mamu kunjan', '2024-07-19 18:50:01'),
(290, 'Mandi Bahauddin', '2024-07-19 18:50:01'),
(291, 'Mandi Faizabad', '2024-07-19 18:50:01'),
(292, 'Mandra', '2024-07-19 18:50:01'),
(293, 'Manga Mandi', '2024-07-19 18:50:01'),
(294, 'Mangal Sada', '2024-07-19 18:50:01'),
(295, 'Mangi', '2024-07-19 18:50:01'),
(296, 'Mangla', '2024-07-19 18:50:01'),
(297, 'Mangowal', '2024-07-19 18:50:01'),
(298, 'Manoabad', '2024-07-19 18:50:01'),
(299, 'Mansehra', '2024-07-19 18:50:01'),
(300, 'Mardan', '2024-07-19 18:50:01'),
(301, 'Mari Indus', '2024-07-19 18:50:01'),
(302, 'Mastoi', '2024-07-19 18:50:01'),
(303, 'Matiari', '2024-07-19 18:50:01'),
(304, 'Matli', '2024-07-19 18:50:01'),
(305, 'Mehar', '2024-07-19 18:50:01'),
(306, 'Mehmood Kot', '2024-07-19 18:50:01'),
(307, 'Mehrab Pur', '2024-07-19 18:50:01'),
(308, 'Mian Chunnu', '2024-07-19 18:50:01'),
(309, 'Mian Walli', '2024-07-19 18:50:01'),
(310, 'Minchanabad', '2024-07-19 18:50:01'),
(311, 'Mingora', '2024-07-19 18:50:01'),
(312, 'Mir Ali', '2024-07-19 18:50:01'),
(313, 'Miran Shah', '2024-07-19 18:50:01'),
(314, 'Mirpur  (AJK)', '2024-07-19 18:50:01'),
(315, 'Mirpur Khas', '2024-07-19 18:50:01'),
(316, 'Mirpur Mathelo', '2024-07-19 18:50:01'),
(317, 'Mithi', '2024-07-19 18:50:01'),
(318, 'Mohen Jo Daro', '2024-07-19 18:50:01'),
(319, 'Mohmand', '2024-07-19 18:50:01'),
(320, 'More kunda', '2024-07-19 18:50:01'),
(321, 'Morgah', '2024-07-19 18:50:01'),
(322, 'Moro', '2024-07-19 18:50:01'),
(323, 'Mubarik Pur', '2024-07-19 18:50:01'),
(324, 'Multan', '2024-07-19 18:50:01'),
(325, 'Muridkay', '2024-07-19 18:50:01'),
(326, 'Murree', '2024-07-19 18:50:01'),
(327, 'Musafir Khana', '2024-07-19 18:50:01'),
(328, 'Musakhel', '2024-07-19 18:50:01'),
(329, 'Mustang', '2024-07-19 18:50:01'),
(330, 'Muzaffarabad', '2024-07-19 18:50:01'),
(331, 'Muzaffargarh', '2024-07-19 18:50:01'),
(332, 'Nankana Sahib', '2024-07-19 18:50:01'),
(333, 'Narang Mandi', '2024-07-19 18:50:01'),
(334, 'Narowal', '2024-07-19 18:50:01'),
(335, 'Naseerabad', '2024-07-19 18:50:01'),
(336, 'Naudero', '2024-07-19 18:50:01'),
(337, 'Naukot', '2024-07-19 18:50:01'),
(338, 'Naukundi', '2024-07-19 18:50:01'),
(339, 'Nawab Shah', '2024-07-19 18:50:01'),
(340, 'Neelam', '2024-07-19 18:50:01'),
(341, 'New Saeedabad', '2024-07-19 18:50:01'),
(342, 'Nilam', '2024-07-19 18:50:01'),
(343, 'Nilore', '2024-07-19 18:50:01'),
(344, 'Noor kot', '2024-07-19 18:50:01'),
(345, 'Nooriabad', '2024-07-19 18:50:01'),
(346, 'Noorpur nooranga', '2024-07-19 18:50:01'),
(347, 'North Wazirstan', '2024-07-19 18:50:01'),
(348, 'Noshki', '2024-07-19 18:50:01'),
(349, 'Nowshera', '2024-07-19 18:50:01'),
(350, 'Nowshera Cantt', '2024-07-19 18:50:01'),
(351, 'Nowshero Feroz', '2024-07-19 18:50:01'),
(352, 'Okara', '2024-07-19 18:50:01'),
(353, 'Orakzai', '2024-07-19 18:50:01'),
(354, 'Padidan', '2024-07-19 18:50:01'),
(355, 'Pak Pattan Sharif', '2024-07-19 18:50:01'),
(356, 'Panjan Kisan', '2024-07-19 18:50:01'),
(357, 'Panjgur', '2024-07-19 18:50:01'),
(358, 'Pannu aqil', '2024-07-19 18:50:01'),
(359, 'Parachinar', '2024-07-19 18:50:01'),
(360, 'Pasni', '2024-07-19 18:50:01'),
(361, 'Pasroor', '2024-07-19 18:50:01'),
(362, 'Patika', '2024-07-19 18:50:01'),
(363, 'Patoki', '2024-07-19 18:50:01'),
(364, 'Peshawar', '2024-07-19 18:50:01'),
(365, 'Phagwar', '2024-07-19 18:50:01'),
(366, 'Phalia', '2024-07-19 18:50:01'),
(367, 'Phool nagar', '2024-07-19 18:50:01'),
(368, 'Phoolnagar (Bhai Pheru)', '2024-07-19 18:50:01'),
(369, 'Piaro goth', '2024-07-19 18:50:01'),
(370, 'Pind Dadan Khan', '2024-07-19 18:50:01'),
(371, 'Pindi Bhattian', '2024-07-19 18:50:01'),
(372, 'Pindi bhohri', '2024-07-19 18:50:01'),
(373, 'Pindi gheb', '2024-07-19 18:50:01'),
(374, 'Piplan', '2024-07-19 18:50:01'),
(375, 'Pir Mahal', '2024-07-19 18:50:02'),
(376, 'Pirpai', '2024-07-19 18:50:02'),
(377, 'Pishin', '2024-07-19 18:50:02'),
(378, 'Poonch', '2024-07-19 18:50:02'),
(379, 'Punch', '2024-07-19 18:50:02'),
(380, 'Qalandarabad', '2024-07-19 18:50:02'),
(381, 'Qambar', '2024-07-19 18:50:02'),
(382, 'Qambar Shahdatkot', '2024-07-19 18:50:02'),
(383, 'Qasba Gujrat', '2024-07-19 18:50:02'),
(384, 'Qazi Ahmed', '2024-07-19 18:50:02'),
(385, 'Quaidabad', '2024-07-19 18:50:02'),
(386, 'Quetta', '2024-07-19 18:50:02'),
(387, 'Rabwah', '2024-07-19 18:50:02'),
(388, 'Rahimyar Khan', '2024-07-19 18:50:02'),
(389, 'Rahwali', '2024-07-19 18:50:02'),
(390, 'Raiwind', '2024-07-19 18:50:02'),
(391, 'Rajana', '2024-07-19 18:50:02'),
(392, 'Rajanpur', '2024-07-19 18:50:02'),
(393, 'Rangoo', '2024-07-19 18:50:02'),
(394, 'Ranipur', '2024-07-19 18:50:02'),
(395, 'Rashidabad', '2024-07-19 18:50:02'),
(396, 'Ratto Dero', '2024-07-19 18:50:02'),
(397, 'Rawala Kot', '2024-07-19 18:50:02'),
(398, 'Rawalpindi', '2024-07-19 18:50:02'),
(399, 'Rawat', '2024-07-19 18:50:02'),
(400, 'Renala Khurd', '2024-07-19 18:50:02'),
(401, 'Risalpur', '2024-07-19 18:50:02'),
(402, 'Rohri', '2024-07-19 18:50:02'),
(403, 'Sadiqabad', '2024-07-19 18:50:02'),
(404, 'Sagri', '2024-07-19 18:50:02'),
(405, 'Sahiwal', '2024-07-19 18:50:02'),
(406, 'Saidu Sharif', '2024-07-19 18:50:02'),
(407, 'Sajawal', '2024-07-19 18:50:02'),
(408, 'Sakardu', '2024-07-19 18:50:02'),
(409, 'Sakrand', '2024-07-19 18:50:02'),
(410, 'Sambrial', '2024-07-19 18:50:02'),
(411, 'Samma Satta', '2024-07-19 18:50:02'),
(412, 'Samundri', '2024-07-19 18:50:02'),
(413, 'Sanghar', '2024-07-19 18:50:02'),
(414, 'Sanghi', '2024-07-19 18:50:02'),
(415, 'Sangla Hill', '2024-07-19 18:50:02'),
(416, 'Sangote', '2024-07-19 18:50:02'),
(417, 'Sanjwal', '2024-07-19 18:50:02'),
(418, 'Sara e Naurang', '2024-07-19 18:50:02'),
(419, 'Sarai Alamgir', '2024-07-19 18:50:02'),
(420, 'Sargodha', '2024-07-19 18:50:02'),
(421, 'Satyana Bangla', '2024-07-19 18:50:02'),
(422, 'Sehar Baqlas', '2024-07-19 18:50:02'),
(423, 'Sehwan', '2024-07-19 18:50:02'),
(424, 'Shadiwal', '2024-07-19 18:50:02'),
(425, 'Shahdad Kot', '2024-07-19 18:50:02'),
(426, 'Shahdad Pur', '2024-07-19 18:50:02'),
(427, 'Shaheed Benazirabad', '2024-07-19 18:50:02'),
(428, 'Shahkot', '2024-07-19 18:50:02'),
(429, 'Shahpur Chakar', '2024-07-19 18:50:02'),
(430, 'Shakargarh', '2024-07-19 18:50:02'),
(431, 'Shamsabad', '2024-07-19 18:50:02'),
(432, 'Shangla', '2024-07-19 18:50:02'),
(433, 'Shankiari', '2024-07-19 18:50:02'),
(434, 'Shedani sharif', '2024-07-19 18:50:02'),
(435, 'Sheikhupura', '2024-07-19 18:50:02'),
(436, 'Shemier', '2024-07-19 18:50:02'),
(437, 'Sherani', '2024-07-19 18:50:02'),
(438, 'Shikarpur', '2024-07-19 18:50:02'),
(439, 'Shogram', '2024-07-19 18:50:02'),
(440, 'Shorkot', '2024-07-19 18:50:02'),
(441, 'Shujabad', '2024-07-19 18:50:02'),
(442, 'Sialkot', '2024-07-19 18:50:02'),
(443, 'Sibi', '2024-07-19 18:50:02'),
(444, 'Sidhnoti', '2024-07-19 18:50:02'),
(445, 'Sihala', '2024-07-19 18:50:02'),
(446, 'Sikandarabad', '2024-07-19 18:50:02'),
(447, 'Silanwala', '2024-07-19 18:50:02'),
(448, 'Sita Road', '2024-07-19 18:50:02'),
(449, 'Skardu', '2024-07-19 18:50:02'),
(450, 'Sohawa District Daska', '2024-07-19 18:50:02'),
(451, 'Sohawa District Jelum', '2024-07-19 18:50:02'),
(452, 'Sohbatpur', '2024-07-19 18:50:02'),
(453, 'South Wazirstan', '2024-07-19 18:50:02'),
(454, 'Sudhnoti', '2024-07-19 18:50:02'),
(455, 'Sukkur', '2024-07-19 18:50:02'),
(456, 'Swabi', '2024-07-19 18:50:02'),
(457, 'Swat', '2024-07-19 18:50:02'),
(458, 'Swatmingora', '2024-07-19 18:50:02'),
(459, 'Takhtbai', '2024-07-19 18:50:02'),
(460, 'Talagang', '2024-07-19 18:50:02'),
(461, 'Talamba', '2024-07-19 18:50:02'),
(462, 'Talhur', '2024-07-19 18:50:02'),
(463, 'Tall', '2024-07-19 18:50:02'),
(464, 'Tando Adam', '2024-07-19 18:50:02'),
(465, 'Tando Allahyar', '2024-07-19 18:50:02'),
(466, 'Tando Jam', '2024-07-19 18:50:02'),
(467, 'Tando Mohd Khan', '2024-07-19 18:50:02'),
(468, 'Tank', '2024-07-19 18:50:02'),
(469, 'Tarbela', '2024-07-19 18:50:02'),
(470, 'Tarmatan', '2024-07-19 18:50:02'),
(471, 'Tarnol', '2024-07-19 18:50:02'),
(472, 'Taunsa sharif', '2024-07-19 18:50:02'),
(473, 'Taxila', '2024-07-19 18:50:02'),
(474, 'Thana Bula Khan', '2024-07-19 18:50:02'),
(475, 'Thari Mirwah', '2024-07-19 18:50:02'),
(476, 'Tharo Shah', '2024-07-19 18:50:02'),
(477, 'Tharparkar', '2024-07-19 18:50:02'),
(478, 'Thatta', '2024-07-19 18:50:02'),
(479, 'Theing Jattan More', '2024-07-19 18:50:02'),
(480, 'Thul', '2024-07-19 18:50:02'),
(481, 'Tibba Sultanpur', '2024-07-19 18:50:02'),
(482, 'Timergara', '2024-07-19 18:50:02'),
(483, 'Tobatek Singh', '2024-07-19 18:50:02'),
(484, 'Topi', '2024-07-19 18:50:02'),
(485, 'Toru', '2024-07-19 18:50:02'),
(486, 'Trinda Mohd Pannah', '2024-07-19 18:50:02'),
(487, 'Turbat', '2024-07-19 18:50:02'),
(488, 'Ubaro', '2024-07-19 18:50:02'),
(489, 'Ugoki', '2024-07-19 18:50:02'),
(490, 'Ukba', '2024-07-19 18:50:02'),
(491, 'Umer Kot', '2024-07-19 18:50:02'),
(492, 'Upper Deval', '2024-07-19 18:50:02'),
(493, 'Upper Dir', '2024-07-19 18:50:02'),
(494, 'Usta Mohammad', '2024-07-19 18:50:02'),
(495, 'Utror', '2024-07-19 18:50:02'),
(496, 'Vehari', '2024-07-19 18:50:02'),
(497, 'Village Sunder', '2024-07-19 18:50:02'),
(498, 'Wah Cantt', '2024-07-19 18:50:02'),
(499, 'Wahi hassain', '2024-07-19 18:50:02'),
(500, 'Wan Radha Ram', '2024-07-19 18:50:02'),
(501, 'Wana', '2024-07-19 18:50:02'),
(502, 'Warah', '2024-07-19 18:50:02'),
(503, 'Warburton', '2024-07-19 18:50:02'),
(504, 'Washuk', '2024-07-19 18:50:02'),
(505, 'Wazirabad', '2024-07-19 18:50:02'),
(506, 'Yazman Mandi', '2024-07-19 18:50:02'),
(507, 'Zahir Pir', '2024-07-19 18:50:02'),
(508, 'Zhob', '2024-07-19 18:50:02'),
(509, 'Ziarat', '2024-07-19 18:50:02');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_feedback`
--

CREATE TABLE `tbl_feedback` (
  `id` int(11) NOT NULL,
  `p_id` int(11) NOT NULL,
  `message` varchar(350) NOT NULL,
  `status` varchar(10) NOT NULL DEFAULT 'hide',
  `created_at` varchar(150) NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_feedback`
--

INSERT INTO `tbl_feedback` (`id`, `p_id`, `message`, `status`, `created_at`) VALUES
(1, 2, 'Testing feedback', 'show', 'current_timestamp()');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_hospital`
--

CREATE TABLE `tbl_hospital` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `c_id` int(11) NOT NULL,
  `address` varchar(150) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(16) NOT NULL,
  `image` varchar(100) NOT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'deactivate',
  `created_at` varchar(150) NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_hospital`
--

INSERT INTO `tbl_hospital` (`id`, `name`, `phone`, `c_id`, `address`, `email`, `password`, `image`, `status`, `created_at`) VALUES
(1, 'Abbasi Shaheed Hospital', '02139926030', 2, 'Khilafat Chowk, Nazimabad, Karachi.', 'info@kmc.com', 'abbassi', 'assests/dist/img/mart.png', '', 'current_timestamp()'),
(2, 'Shed Hospital', '02136407011', 1, 'Plot No. ST 1/2-A Sector 11-C-2 North Karachi, Karachi', 'info@shedfoundation.org.pk', 'shed123', 'assests/dist/img/2016-04-12 23.49.59.png', 'deactivate', 'current_timestamp()'),
(3, 'Hamdard Hospital', '02137654321', 3, 'Nazimabad #3, Karachi', 'info@hamdard.com', 'hamdard', 'assests/dist/img/logo maahad.png', 'deactivate', '2024-06-24 00:20:16'),
(4, 'Baqai Hospital', '02134567890', 2, 'B-Block, Nazimabad #3, Karachi', 'info@baqai.com', 'baqai', 'assests/dist/img/hospital/2016-04-12 23.49.59.png', 'activate', '2024-06-24 17:47:38'),
(5, 'Saifee Hospital', '03468229956', 1, 'ST-1, Block-F, North Nazimabad, Karachi-74700 (Pakistan)', 'saifee@gmail.com', 'saifee', 'assests/dist/img/Saifee Hospital.jpg', 'deactivate', '2024-07-10 22:25:13');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_patient`
--

CREATE TABLE `tbl_patient` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `cnic` varchar(13) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(16) NOT NULL,
  `c_id` int(11) NOT NULL,
  `address` varchar(150) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `image` varchar(100) NOT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'activate',
  `created_at` varchar(150) NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_patient`
--

INSERT INTO `tbl_patient` (`id`, `name`, `cnic`, `phone`, `email`, `password`, `c_id`, `address`, `gender`, `image`, `status`, `created_at`) VALUES
(1, 'Patient 1', '1234567890123', '03123456789', 'patient1@gmail.com', 'patient1', 3, 'Nazimabad,', 'Male', '', 'activate', 'current_timestamp()'),
(2, 'Patient 2', '4220109876543', '03071234567', 'patient2@gmail.com', 'patient2', 1, 'Khilafat Chowk, Nazimabad, Karachi', 'Female', 'assests/dist/img/patient/1.jpg', 'activate', '2024-06-24 22:07:04'),
(3, 'Patient 3', '3234567890123', '03121234567', 'patient3@gmail.com', 'patient3', 3, 'Khilafat Chowk, Nazimabad, Karachi', 'Other', 'assests/dist/img/patient/2.jpg', 'deactivate', '2024-06-24 22:14:31'),
(4, 'Abdul Moiz', '1234567890123', '03463224382', 'abdulmoizforaptech@gmail.com', '123', 3, 'Nazimabad #3, Karachi', 'Male', 'assests/dist/img/ mart.png', 'activate', '2024-07-07 20:47:59');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_test`
--

CREATE TABLE `tbl_test` (
  `id` int(11) NOT NULL,
  `p_id` int(11) NOT NULL,
  `h_id` int(11) NOT NULL,
  `date` varchar(20) NOT NULL,
  `time` varchar(20) NOT NULL,
  `result` varchar(50) NOT NULL DEFAULT 'process',
  `created_at` varchar(150) NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_test`
--

INSERT INTO `tbl_test` (`id`, `p_id`, `h_id`, `date`, `time`, `result`, `created_at`) VALUES
(1, 3, 2, '2024-07-01', '', 'process', 'current_timestamp()'),
(2, 1, 4, '2024-06-30', '', 'process', 'current_timestamp()'),
(3, 2, 1, '2024-07-20', '', 'process', 'current_timestamp()'),
(4, 1, 4, '', '', 'process', '2024-07-09 21:51:18'),
(5, 2, 4, '', '', 'process', '2024-07-09 21:51:55'),
(6, 4, 4, '', '', 'process', '2024-07-09 21:52:17'),
(7, 4, 1, '', '', 'process', '2024-07-09 21:53:50');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_vaccine`
--

CREATE TABLE `tbl_vaccine` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'available',
  `created_at` varchar(150) NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_vaccine`
--

INSERT INTO `tbl_vaccine` (`id`, `name`, `status`, `created_at`) VALUES
(1, 'Moderna Spikevax', 'available', 'current_timestamp()'),
(2, 'Pfizer/BioNTech Comirnaty', 'available', 'current_timestamp()'),
(3, 'CanSino Convidecia', 'unavailable', 'current_timestamp()'),
(4, 'Gamaleya Sputnik V', 'unavailable', 'current_timestamp()'),
(5, 'Oxford/AstraZeneca Vaxzevria', 'unavailable', 'current_timestamp()'),
(6, 'Sinopharm (Beijing) Covilo', 'available', 'current_timestamp()'),
(7, 'Sinovac CoronaVac', 'available', 'current_timestamp()');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_appointment`
--
ALTER TABLE `tbl_appointment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `p_id` (`p_id`),
  ADD KEY `h_id` (`h_id`),
  ADD KEY `v_id` (`v_id`);

--
-- Indexes for table `tbl_city`
--
ALTER TABLE `tbl_city`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_feedback`
--
ALTER TABLE `tbl_feedback`
  ADD PRIMARY KEY (`id`),
  ADD KEY `p_id` (`p_id`);

--
-- Indexes for table `tbl_hospital`
--
ALTER TABLE `tbl_hospital`
  ADD PRIMARY KEY (`id`),
  ADD KEY `c_id` (`c_id`);

--
-- Indexes for table `tbl_patient`
--
ALTER TABLE `tbl_patient`
  ADD PRIMARY KEY (`id`),
  ADD KEY `c_id` (`c_id`);

--
-- Indexes for table `tbl_test`
--
ALTER TABLE `tbl_test`
  ADD PRIMARY KEY (`id`),
  ADD KEY `p_id` (`p_id`),
  ADD KEY `h_id` (`h_id`);

--
-- Indexes for table `tbl_vaccine`
--
ALTER TABLE `tbl_vaccine`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_appointment`
--
ALTER TABLE `tbl_appointment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_city`
--
ALTER TABLE `tbl_city`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=510;

--
-- AUTO_INCREMENT for table `tbl_feedback`
--
ALTER TABLE `tbl_feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_hospital`
--
ALTER TABLE `tbl_hospital`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_patient`
--
ALTER TABLE `tbl_patient`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_test`
--
ALTER TABLE `tbl_test`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_vaccine`
--
ALTER TABLE `tbl_vaccine`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_appointment`
--
ALTER TABLE `tbl_appointment`
  ADD CONSTRAINT `tbl_appointment_ibfk_1` FOREIGN KEY (`p_id`) REFERENCES `tbl_patient` (`id`),
  ADD CONSTRAINT `tbl_appointment_ibfk_2` FOREIGN KEY (`h_id`) REFERENCES `tbl_hospital` (`id`),
  ADD CONSTRAINT `tbl_appointment_ibfk_3` FOREIGN KEY (`v_id`) REFERENCES `tbl_vaccine` (`id`);

--
-- Constraints for table `tbl_feedback`
--
ALTER TABLE `tbl_feedback`
  ADD CONSTRAINT `tbl_feedback_ibfk_1` FOREIGN KEY (`p_id`) REFERENCES `tbl_patient` (`id`);

--
-- Constraints for table `tbl_hospital`
--
ALTER TABLE `tbl_hospital`
  ADD CONSTRAINT `tbl_hospital_ibfk_1` FOREIGN KEY (`c_id`) REFERENCES `tbl_city` (`id`);

--
-- Constraints for table `tbl_patient`
--
ALTER TABLE `tbl_patient`
  ADD CONSTRAINT `tbl_patient_ibfk_1` FOREIGN KEY (`c_id`) REFERENCES `tbl_city` (`id`);

--
-- Constraints for table `tbl_test`
--
ALTER TABLE `tbl_test`
  ADD CONSTRAINT `tbl_test_ibfk_1` FOREIGN KEY (`p_id`) REFERENCES `tbl_patient` (`id`),
  ADD CONSTRAINT `tbl_test_ibfk_2` FOREIGN KEY (`h_id`) REFERENCES `tbl_hospital` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
