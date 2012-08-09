# Temporary install sql file while migrations are not operationnal on applications

-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Ven 13 Juillet 2012 à 10:30
-- Version du serveur: 5.5.24-log
-- Version de PHP: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `nos_eat`
--

-- --------------------------------------------------------

--
-- Structure de la table `news_categories_news`
--

DROP TABLE IF EXISTS `news_categories_news`;
CREATE TABLE IF NOT EXISTS `news_categories_news` (
  `news_id` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `news_category`
--

DROP TABLE IF EXISTS `news_category`;
CREATE TABLE IF NOT EXISTS `news_category` (
  `cat_id` int(11) NOT NULL AUTO_INCREMENT,
  `cat_title` varchar(255) NOT NULL,
  `cat_parent_id` int(11) DEFAULT NULL,
  `cat_sort` float DEFAULT NULL,
  PRIMARY KEY (`cat_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

-- --------------------------------------------------------

--
-- Structure de la table `news_post`
--

DROP TABLE IF EXISTS `news_post`;
CREATE TABLE IF NOT EXISTS `news_post` (
  `news_id` int(8) unsigned NOT NULL AUTO_INCREMENT,
  `news_title` varchar(250) NOT NULL,
  `news_created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `news_updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `news_published` tinyint(1) NOT NULL,
  PRIMARY KEY (`news_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;