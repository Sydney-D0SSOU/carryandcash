


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
SET NAMES utf8mb4;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table reduction_rates
# ------------------------------------------------------------

DROP TABLE IF EXISTS `reduction_rates`;

CREATE TABLE `reduction_rates` (
  `id` int NOT NULL AUTO_INCREMENT,
  `rate` decimal(5,2) NOT NULL DEFAULT '0.70',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

LOCK TABLES `reduction_rates` WRITE;
/*!40000 ALTER TABLE `reduction_rates` DISABLE KEYS */;

INSERT INTO `reduction_rates` (`id`, `rate`) VALUES
	(1, 0.40);

/*!40000 ALTER TABLE `reduction_rates` ENABLE KEYS */;
UNLOCK TABLES;



# Dump of table ventes_credits
# ------------------------------------------------------------

DROP TABLE IF EXISTS `ventes_credits`;

CREATE TABLE `ventes_credits` (
  `id` int NOT NULL AUTO_INCREMENT,
  `montant` decimal(15,2) DEFAULT NULL,
  `cash_possible` decimal(10,2) NOT NULL,
  `network` varchar(50) NOT NULL,
  `personal_number` varchar(20) NOT NULL,
  `reception_number` varchar(20) NOT NULL,
  `sim_holder` varchar(100) NOT NULL,
  `transaction_id` varchar(50) NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `statut` varchar(50) DEFAULT 'En cours',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

LOCK TABLES `ventes_credits` WRITE;
/*!40000 ALTER TABLE `ventes_credits` DISABLE KEYS */;

INSERT INTO `ventes_credits` (`cash_possible`, `id`, `montant`, `network`, `personal_number`, `reception_number`, `sim_holder`, `statut`, `transaction_id`) VALUES
	(869.40, 1, 1242.00, 'celtis', '3424', '3434', 'arr', 'traité', '2344'),
	(869.40, 2, 1242.00, 'celtis', '3424', '3434', 'arr', 'traité', '2344'),
	(68900.30, 3, 98429.00, 'moov', '8709', '7778', 'ghh', 'traité', '8778'),
	(9.10, 4, 13.00, 'mtn', '2324', '2342', 'add', 'traité', '324'),
	(31.50, 5, 45.00, 'celtis', '345', '3535', 'sfeg', 'traité', '245653'),
	(2417.10, 6, 3453.00, 'celtis', '435', '14343', 'wrww', 'traité', '2445');

/*!40000 ALTER TABLE `ventes_credits` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;


