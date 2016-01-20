-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 14, 2015 at 04:03 PM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sergei_events`
--

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE IF NOT EXISTS `events` (
  `id_event` int(11) NOT NULL,
  `name_eventR` varchar(20) NOT NULL,
  `short_desc_eventR` varchar(40) NOT NULL,
  `description_eventR` varchar(500) NOT NULL,
  `sponsor_event` varchar(50) NOT NULL,
  `date_event` date NOT NULL,
  `time_start` time NOT NULL,
  `time_stop` time NOT NULL,
  `image_logo` varchar(100) NOT NULL,
  `flag` bit(1) NOT NULL DEFAULT b'0'
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id_event`, `name_eventR`, `short_desc_eventR`, `description_eventR`, `sponsor_event`, `date_event`, `time_start`, `time_stop`, `image_logo`, `flag`) VALUES
(1, 'Старт проекта', 'Запуск первого проекта', 'Запуск проекта с названием "Регистрация на мероприятие" в тестовом режиме', 'IVKHK', '2015-12-15', '11:18:00', '17:23:00', 'ivkhk_logo.png', b'1'),
(2, 'Карнавал', 'Вечерний карнавал', 'В ближайщее время состоится вечерний карнавал, приглашаем всех!', 'VKG Oil', '2015-12-18', '09:00:00', '22:00:00', 'ivkhk_logo.png', b'1'),
(3, 'Спектакль', 'Лучшие актеры страны', 'У нас выступаю лучшие актеры страны, Сергей Безруков и Иван Охлабыстин', 'Remeksi Keskus AS', '2015-12-16', '04:00:00', '16:00:00', 'ivkhk_logo.png', b'1');

-- --------------------------------------------------------

--
-- Table structure for table `pupils`
--

CREATE TABLE IF NOT EXISTS `pupils` (
  `id_pupil` int(11) NOT NULL,
  `name_pupil` text NOT NULL,
  `mail_pupil` text NOT NULL,
  `organization` text NOT NULL,
  `group_pupil` text NOT NULL,
  `class_pupil` int(11) NOT NULL,
  `id_events` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id_event`);

--
-- Indexes for table `pupils`
--
ALTER TABLE `pupils`
  ADD PRIMARY KEY (`id_pupil`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id_event` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `pupils`
--
ALTER TABLE `pupils`
  MODIFY `id_pupil` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
