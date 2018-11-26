/*
SQLyog Community v12.5.1 (64 bit)
MySQL - 10.1.30-MariaDB : Database - coba
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`coba` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `coba`;

/*Table structure for table `migrations` */

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `migrations` */

insert  into `migrations`(`id`,`migration`,`batch`) values 
(1,'2014_10_12_000000_create_users_table',1),
(2,'2014_10_12_100000_create_password_resets_table',1),
(3,'2018_11_19_021842_coba',1),
(4,'2018_11_19_022236_coba',2),
(5,'2018_11_19_022504_asal',3),
(6,'2018_11_19_022744_lol',4),
(7,'2018_11_19_123419_trip',5),
(8,'2018_11_23_030819_create_request_models_table',6),
(9,'2018_11_26_015932_create_requests_table',7);

/*Table structure for table `password_resets` */

DROP TABLE IF EXISTS `password_resets`;

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `password_resets` */

/*Table structure for table `requests` */

DROP TABLE IF EXISTS `requests`;

CREATE TABLE `requests` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_barang` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga_barang` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `requests` */

insert  into `requests`(`id`,`nama`,`nama_barang`,`harga_barang`,`deskripsi`,`created_at`,`updated_at`) values 
(1,'Gabriel Benni Pernadi Panjaitan','Sepatu Futsal','500.000,00','Warna Merah, merek Specs',NULL,NULL),
(2,'Gabriel Panbers','Sepatu Futsal','500.000,00','Warna Merah, merek Specs','2018-11-26 02:34:07','2018-11-26 02:34:07');

/*Table structure for table `trip` */

DROP TABLE IF EXISTS `trip`;

CREATE TABLE `trip` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tujuan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_pergi` datetime NOT NULL,
  `tanggal_kembali` datetime NOT NULL,
  `Kecamatan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `trip` */

insert  into `trip`(`id`,`nama`,`tujuan`,`tanggal_pergi`,`tanggal_kembali`,`Kecamatan`,`created_at`,`updated_at`) values 
(1,'Gabriel Benni Pernadi Panjaitan','Medan','2018-12-01 00:00:00','2018-12-03 00:00:00','Balige','2018-11-20 15:33:02','2018-11-20 15:33:02'),
(2,'Andre Deberva Sipayung','Bandung','2018-08-01 00:00:00','2018-08-04 00:00:00','Laguboti','2018-11-20 15:40:25','2018-11-20 15:40:25'),
(3,'Gabriel Benni Pernadi Panjaitan','Medan','2018-12-02 00:00:00','2018-12-04 00:00:00','Balige','2018-11-21 06:20:30','2018-11-21 06:20:30'),
(4,'Gabriel Benni Pernadi Panjaitan','Medan','2018-12-01 00:00:00','2018-12-04 00:00:00','Balige','2018-11-22 03:45:39','2018-11-22 03:45:39'),
(5,'Apriyanti Sijabat','Samosir','2018-12-01 00:00:00','2018-12-05 00:00:00','Laguboti','2018-11-22 13:27:52','2018-11-22 13:27:52'),
(6,'Mariana Sinaga','Bandung','2018-11-21 00:00:00','2018-11-24 00:00:00','Tarutung','2018-11-22 13:29:59','2018-11-22 13:29:59'),
(7,'Gabriel Benni Pernadi Panjaitan','Medan','2018-12-01 00:00:00','2018-12-01 00:00:00','Tarutung','2018-11-22 13:30:47','2018-11-22 13:30:47');

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `users` */

insert  into `users`(`id`,`name`,`email`,`email_verified_at`,`password`,`remember_token`,`created_at`,`updated_at`) values 
(1,'Gabriel Benni Pernadi Panjaitan','if417017@del.ac.id',NULL,'$2y$10$RiNpzjZ51IgFGtZu4jOJkeHrsM3QYi1XAVaFyC34ufDZ5oNdJd.w6','GTdkbGfRMA0NByChpbouOZU58MAt6EhQNHRWQ9U7HdOrQg3uUpkE9KpDuqI1','2018-11-19 02:25:58','2018-11-19 02:25:58'),
(2,'Gabriel Panbers','benni.pernadi@gmail.com',NULL,'$2y$10$OIf85Tk8LDldIs0ReupQH.jgcXOMZZyaZiaIE0iwz/DaMJcA9R3ta','JBoF7cwdcFrCXBcRFLyq90z4tS7Bhs9MO4DN7jt5JUjXGGV5HIWM9EQuidfg','2018-11-19 03:34:25','2018-11-19 03:34:25'),
(3,'Andre Sipayung','if41701@del.ac.id',NULL,'$2y$10$9vwZtd21yptbCoe306g.WOqkxVUIITmiXrAQOQ6mh/cmSNPr18BoC','qqunBLt4nEenQKjncUoFpQAOnIDNP341TYdCAXawl3ftfOpeBIlRDYb2eW0t','2018-11-22 07:42:19','2018-11-22 07:42:19');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
