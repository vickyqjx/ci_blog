-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 27, 2013 at 10:27 AM
-- Server version: 5.1.44
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ci_blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE IF NOT EXISTS `admins` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `password`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE IF NOT EXISTS `articles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `title`, `content`, `time`) VALUES
(9, 'Cake', 'Cupcake ipsum dolor sit amet. Tootsie roll carrot cake cotton candy gummies. Wafer danish jelly-o topping. Unerdwear.com halvah candy canes unerdwear.com fruitcake cupcake. Macaroon bonbon chocolate cake tootsie roll candy candy. Tart jelly beans pastry cheesecake fruitcake. Lemon drops jelly beans chocolate brownie I love. Pastry muffin donut cupcake pastry I love soufflé gummi bears candy canes.\nCroissant donut wafer I love I love tart. Jelly marshmallow lollipop cotton candy soufflé icing pastry jujubes carrot cake. Sugar plum liquorice gingerbread topping topping candy canes macaroon. Carrot cake chocolate bar croissant soufflé I love marzipan ice cream tootsie roll gummi bears. Wafer unerdwear.com fruitcake cake gingerbread dessert lollipop I love gummi bears. Tiramisu cookie I love. Sesame snaps candy canes I love I love applicake chupa chups ice cream fruitcake. Tart bonbon dessert. Candy canes jujubes I love tart tootsie roll dragée dragée chocolate cake.\nCookie jelly I love I love. I love brownie topping I love marzipan gummies. Ice cream topping I love marshmallow pie topping chupa chups. Sesame snaps jelly beans cheesecake pie chupa chups carrot cake pudding I love I love. Jelly beans jelly marzipan. Chupa chups oat cake I love sweet roll brownie jelly tiramisu I love. Bonbon jelly tiramisu chocolate.', '2013-07-25 14:03:53'),
(2, 'Food', 'Apple pie topping tart gummies I love sweet roll carrot cake. I love pudding cake. Gummi bears macaroon caramels pastry lemon drops. Liquorice pudding oat cake. Jujubes donut chupa chups brownie. Cheesecake sweet roll sesame snaps topping ice cream I love sugar plum icing unerdwear.com. Tiramisu icing gummi bears caramels powder. Ice cream icing liquorice gingerbread. Ice cream marshmallow cotton candy biscuit. Icing candy sesame snaps caramels oat cake. Cheesecake jujubes chupa chups soufflé pudding I love powder sesame snaps jelly. Soufflé unerdwear.com sweet I love applicake danish croissant gummies. Macaroon sweet roll cotton candy jelly beans cotton candy I love I love bonbon. Bonbon liquorice jujubes I love.\nLollipop pie biscuit donut. Gummies cupcake cotton candy lemon drops tart jujubes jelly-o jelly-o fruitcake. Chocolate bar jelly-o fruitcake. Liquorice danish gingerbread powder cotton candy I love. Liquorice dessert halvah. Fruitcake jelly beans I love apple pie cupcake. Candy carrot cake dragée bonbon dessert. Dragée dragée apple pie fruitcake apple pie gingerbread donut sweet cupcake. Jelly beans I love caramels powder wafer I love. Tiramisu I love tart. Gummi bears gummi bears croissant carrot cake caramels I love jelly halvah I love. Wafer carrot cake marshmallow liquorice.', '2013-07-24 23:06:46'),
(13, 'This QJX''s first article', 'Marzipan cookie gummies carrot cake sesame snaps danish halvah cake pudding. Icing cake dragée cotton candy unerdwear.com muffin macaroon cookie. Jelly macaroon marzipan. Tiramisu marzipan muffin toffee pastry marzipan. Biscuit danish sweet roll jujubes sweet sweet roll. Pastry powder danish sesame snaps jelly-o. Sweet pie jelly-o halvah dessert lemon drops sweet roll. Sweet pie wafer dessert sesame snaps chupa chups tiramisu. Toffee halvah topping sugar plum liquorice tiramisu. Chocolate cake danish candy canes chocolate cake tootsie roll chupa chups sweet roll wafer. Chocolate bar toffee halvah sugar plum. Icing caramels toffee icing marzipan jujubes donut. Carrot cake dessert powder tiramisu pudding chupa chups. Cookie cake donut cake caramels danish croissant topping.\nPudding lollipop muffin cheesecake sugar plum. Bear claw cupcake chocolate carrot cake cupcake gummi bears dragée gummi bears jelly-o. Liquorice muffin lollipop toffee candy apple pie. Chupa chups icing ice cream icing. Tiramisu sugar plum dragée chupa chups caramels jelly beans jelly-o gingerbread. Soufflé gummies gummi bears muffin halvah. Cake pudding cotton candy. Dessert wafer applicake liquorice jelly beans sweet carrot cake lemon drops cupcake. Jujubes danish sweet candy canes bonbon toffee pudding candy canes. Bear claw sugar plum toffee icing unerdwear.com chocolate bar. Dessert sweet roll powder gummi bears tart. Pie wafer cupcake carrot cake liquorice brownie.', '2013-07-27 06:08:48');

-- --------------------------------------------------------

--
-- Table structure for table `article_category`
--

CREATE TABLE IF NOT EXISTS `article_category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `article_id` varchar(255) NOT NULL,
  `category_id` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `article_category`
--

INSERT INTO `article_category` (`id`, `article_id`, `category_id`) VALUES
(9, '9', '4'),
(2, '2', '2'),
(13, '13', '6');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(1, 'IT'),
(2, 'Traveling'),
(3, 'Cooking'),
(4, 'Photographing'),
(5, 'Sport'),
(6, 'Comic');

-- --------------------------------------------------------

--
-- Table structure for table `temp_users`
--

CREATE TABLE IF NOT EXISTS `temp_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `key` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `temp_users`
--


-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `username`, `password`) VALUES
(1, 'vickyqjx@gmail.com', 'vicky', '7cfe24b3b1262a733583f0172e3a1aea'),
(10, 'vickuqjx.student@sina.com', 'lovelyQQ', 'e10adc3949ba59abbe56e057f20f883e');

-- --------------------------------------------------------

--
-- Table structure for table `user_article`
--

CREATE TABLE IF NOT EXISTS `user_article` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `article_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `user_article`
--

INSERT INTO `user_article` (`id`, `user_id`, `article_id`) VALUES
(9, 1, 9),
(2, 1, 2),
(13, 10, 13);
