SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

CREATE DATABASE `learning` COLLATE 'utf8_general_ci';

USE learning;

DROP TABLE IF EXISTS `goals`;
CREATE TABLE `goals` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category` varchar(255) NOT NULL,
  `goal` varchar(255) NOT NULL,
  `complete` tinyint(1) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `category` (`category`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `goals` (`id`, `category`, `goal`, `complete`, `created`, `modified`) VALUES
(1,	'School',	'Plan',	0,	'2016-02-24 19:44:06',	'2016-02-24 21:49:49'),
(2,	'School',	'Complete Coursework',	0,	'2016-02-24 19:44:19',	'2016-02-24 21:49:53'),
(3,	'Church',	'Paper 3',	1,	'2016-02-24 19:44:28',	'2016-02-24 15:08:52'),
(4,	'Church',	'Paper 4',	0,	'2016-02-24 19:44:35',	'2016-02-24 21:44:31');

DROP TABLE IF EXISTS `notes`;
CREATE TABLE `notes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `note` text NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `notes` (`id`, `note`, `created`, `modified`) VALUES
(1,	'Here are some notes and stuff.',	'2016-02-24 21:57:20',	'2016-02-24 15:12:31');

DROP TABLE IF EXISTS `phinxlog`;
CREATE TABLE `phinxlog` (
  `version` bigint(20) NOT NULL,
  `start_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `end_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `phinxlog` (`version`, `start_time`, `end_time`) VALUES
(20160222222333,	'2016-02-24 19:43:43',	'2016-02-24 19:43:43'),
(20160224215420,	'2016-02-24 21:55:22',	'2016-02-24 21:55:22');

-- 2016-02-24 22:13:11
