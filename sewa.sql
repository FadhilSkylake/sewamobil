-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               8.0.30 - MySQL Community Server - GPL
-- Server OS:                    Win64
-- HeidiSQL Version:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for sewa
CREATE DATABASE IF NOT EXISTS `sewa` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `sewa`;

-- Dumping structure for table sewa.mobil
CREATE TABLE IF NOT EXISTS `mobil` (
  `id_mobil` int NOT NULL AUTO_INCREMENT,
  `merek` varchar(50) DEFAULT NULL,
  `model` varchar(50) DEFAULT NULL,
  `plat_nomor` varchar(50) DEFAULT NULL,
  `tarif` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_mobil`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table sewa.mobil: ~0 rows (approximately)

-- Dumping structure for table sewa.user
CREATE TABLE IF NOT EXISTS `user` (
  `id_user` int NOT NULL AUTO_INCREMENT,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `alamat` varchar(50) DEFAULT NULL,
  `no_telp` varchar(50) DEFAULT NULL,
  `no_sim` varchar(50) DEFAULT NULL,
  `role` varchar(50) DEFAULT NULL,
  `updated_at` varchar(50) DEFAULT NULL,
  `created_at` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table sewa.user: ~3 rows (approximately)
INSERT INTO `user` (`id_user`, `username`, `password`, `nama`, `alamat`, `no_telp`, `no_sim`, `role`, `updated_at`, `created_at`) VALUES
	(1, 'Admin', '$2y$10$seNCTlLGma33e.LrkFkK/ezN0o3g3zGhj.UMTJ6m1trk8mT3rJ5mm', NULL, NULL, NULL, NULL, 'admin', NULL, NULL),
	(2, 'fadhil', '$2y$10$seNCTlLGma33e.LrkFkK/ezN0o3g3zGhj.UMTJ6m1trk8mT3rJ5mm', NULL, NULL, NULL, NULL, 'user', '2024-04-30 08:46:30', '2024-04-30 08:46:30'),
	(3, 'riyadh', '$2y$10$seNCTlLGma33e.LrkFkK/ezN0o3g3zGhj.UMTJ6m1trk8mT3rJ5mm', 'riyadh', 'subang', '123', '123', 'user', '2024-04-30 08:49:12', '2024-04-30 08:49:12');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
