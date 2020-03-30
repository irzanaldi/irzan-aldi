/*
SQLyog Community v13.1.1 (32 bit)
MySQL - 10.4.8-MariaDB : Database - db_berita
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`db_berita` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `db_berita`;

/*Table structure for table `artikel` */

DROP TABLE IF EXISTS `artikel`;

CREATE TABLE `artikel` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `artikel_tanggal` datetime NOT NULL,
  `artikel_judul` varchar(125) NOT NULL,
  `artikel_slug` varchar(125) NOT NULL,
  `artikel_konten` longtext NOT NULL,
  `artikel_sampul` varchar(225) NOT NULL,
  `artikel_author` varchar(125) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

/*Data for the table `artikel` */

insert  into `artikel`(`id`,`artikel_tanggal`,`artikel_judul`,`artikel_slug`,`artikel_konten`,`artikel_sampul`,`artikel_author`) values 
(2,'2020-03-16 12:11:07','Pelajaran','pelajaran','<p>aku adalah</p>\r\n','tenda.jpg','admin');

/*Table structure for table `user` */

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `date_created` int(11) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

/*Data for the table `user` */

insert  into `user`(`user_id`,`name`,`email`,`image`,`password`,`date_created`) values 
(1,'admin','admin@gmail.com','default.jpg','$2y$10$2PF4DIO6mBiz4tjhCHMb1.LlEUBOy5Oq7QWoymVWXLTbr4DiTzjWK',1584195850);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
