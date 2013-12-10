-- phpMyAdmin SQL Dump
-- version 3.5.5
-- http://www.phpmyadmin.net
--
-- Darbinė stotis: localhost
-- Atlikimo laikas: 2013 m. Spa 07 d. 17:36
-- Serverio versija: 5.5.24-log
-- PHP versija: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Duomenų bazė: `zwazaaz`
--

-- --------------------------------------------------------

--
-- Sukurta duomenų struktūra lentelei `contacts`
--

CREATE TABLE IF NOT EXISTS `contacts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `owner_id` int(10) unsigned NOT NULL DEFAULT '0',
  `friend_id` int(10) unsigned NOT NULL DEFAULT '0',
  `created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `fk_contacts_owner_users` (`owner_id`),
  KEY `fk_contacts_friend_users` (`friend_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Sukurta duomenų struktūra lentelei `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` char(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=107 ;

--
-- Sukurta duomenų kopija lentelei `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `name`, `last_name`, `updated_at`, `created_at`) VALUES
(97, 'jonauskas', '$2y$08$dpZ29O3wj4uy31MglKyLW.UR9', 'jonas@opa.lt', 'Jonas', 'Opauskas', '2013-10-07 17:34:05', '2013-10-07 13:46:36'),
(98, 'juliauskas', '$2y$08$dpZ29O3wj4uy31MglKyLW.UR9', 'julius@opa.lt', 'Julius', 'Opauskas', '2013-10-07 17:35:50', '2013-10-07 13:48:49'),
(99, 'mariauskas', '$2y$08$dpZ29O3wj4uy31MglKyLW.UR9', 'marius@opa.lt', 'Marius', 'Opauskas', '2013-10-07 17:35:55', '2013-10-07 13:57:20'),
(100, 'onauskas', '$2y$08$dpZ29O3wj4uy31MglKyLW.UR9', 'onute@opa.lt', 'Onute', 'Opauskaite', '2013-10-07 17:36:00', '2013-10-07 14:04:07'),
(101, 'linauskas', '$2y$08$dpZ29O3wj4uy31MglKyLW.UR9', 'linas@opa.lt', 'Linas', 'Opauskas', '2013-10-07 17:36:11', '2013-10-07 14:07:08');

--
-- Apribojimai eksportuotom lentelėm
--

CREATE TABLE IF NOT EXISTS `blocks` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `user_id` int(10) NOT NULL,
  `blocked_id` int(10) NOT NULL,
  `created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Apribojimai lentelei `contacts`
--
ALTER TABLE `contacts`
  ADD CONSTRAINT `fk_contacts_friend_users` FOREIGN KEY (`friend_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `fk_contacts_owner_users` FOREIGN KEY (`owner_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
