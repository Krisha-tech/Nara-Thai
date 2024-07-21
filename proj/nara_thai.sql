-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.4.28-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             12.5.0.6677
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for nara_thai
CREATE DATABASE IF NOT EXISTS `nara_thai` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */;
USE `nara_thai`;

-- Dumping structure for table nara_thai.cart
CREATE TABLE IF NOT EXISTS `cart` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `itemId` int(11) NOT NULL,
  `name` varbinary(50) NOT NULL DEFAULT '',
  `image` varchar(50) NOT NULL DEFAULT '',
  `qty` int(11) NOT NULL,
  `price` float NOT NULL DEFAULT 0,
  `totalPrice` float NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table nara_thai.cart: ~3 rows (approximately)
INSERT INTO `cart` (`id`, `itemId`, `name`, `image`, `qty`, `price`, `totalPrice`) VALUES
	(2, 1, _binary 0x636865636b2074686169206368697073, '1.jpg', 2, 350, 700),
	(3, 6, _binary 0x446565702046726965642077686f6c652054756e61, 'ss1.jpg', 1, 2500, 2500);

-- Dumping structure for table nara_thai.menu
CREATE TABLE IF NOT EXISTS `menu` (
  `itemId` int(11) NOT NULL AUTO_INCREMENT,
  `itemName` varchar(50) NOT NULL DEFAULT '',
  `itemImage` varchar(50) DEFAULT NULL,
  `itemPrice` float DEFAULT NULL,
  `itemDescription` varchar(50) DEFAULT NULL,
  `itemCategory` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`itemId`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table nara_thai.menu: ~9 rows (approximately)
INSERT INTO `menu` (`itemId`, `itemName`, `itemImage`, `itemPrice`, `itemDescription`, `itemCategory`) VALUES
	(1, 'check thai chips', '1.jpg', 350, 'chicken,butter', 'Best Selling Dishes and Appetizers'),
	(2, 'Thai pork soup', 's1.jpg', 400, 'Chicken,mutton,pasta', 'Soup & Curries'),
	(3, 'Checkn thai curry', 'm1.jpg', 1500, 'Chicken', 'Thai Chicken and Mutton Specials'),
	(4, 'Deep Fried whole Tuna', 'ss1.jpg', 2500, 'chicken,butter,tuna', 'Best Selling Sea Food Dishes'),
	(5, 'Deep Fried whole Tuna', 'ss1.jpg', 2500, 'chicken,butter,tuna', 'Best Selling Sea Food Dishes'),
	(6, 'Deep Fried whole Tuna', 'ss1.jpg', 2500, 'chicken,butter,tuna', 'Best Selling Sea Food Dishes'),
	(7, 'Deep Fried whole Tuna', 'ss1.jpg', 2500, 'chicken,butter,tuna', 'Best Selling Sea Food Dishes'),
	(8, 'Deep Fried whole Tuna', 'ss1.jpg', 2500, 'chicken,butter,tuna', 'Best Selling Sea Food Dishes'),
	(9, 'Deep Fried whole Tuna', 'ss1.jpg', 2500, 'chicken,butter,tuna', 'Best Selling Sea Food Dishes');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
