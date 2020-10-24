-- Adminer 4.7.6 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

SET NAMES utf8mb4;

DROP TABLE IF EXISTS `packagist`;
CREATE TABLE `packagist` (
  `_id` int(11) NOT NULL AUTO_INCREMENT,
  `_name` text NOT NULL,
  `_address` text NOT NULL,
  `_email` text NOT NULL,
  `_card_type` text NOT NULL,
  `_card_number` text NOT NULL,
  `_uuid` text NOT NULL,
  PRIMARY KEY (`_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `packagist` (`_id`, `_name`, `_address`, `_email`, `_card_type`, `_card_number`, `_uuid`) VALUES
(1,	'Ardella Stamm MD',	'847 Benedict Mills Apt. 118\nLake Carolinebury, IL 49823-9218',	'veum.randy@torphy.org',	'MasterCard',	'6011817953855179',	'ec29def0-95ae-373d-ba9e-6734f73356c0'),
(2,	'Aaron Christiansen',	'807 Torphy Plaza\nJabaritown, MN 60800',	'feil.tracey@gmail.com',	'Visa',	'4916725000361532',	'e3b1c8c2-5047-3ba1-9d4b-9de630b6d8cb');

-- 2020-10-23 16:37:18