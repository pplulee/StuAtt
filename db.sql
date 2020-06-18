/*
SQLyog Ultimate v12.08 (64 bit)
MySQL - 5.7.26 : Database - bdk
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`bdk` /*!40100 DEFAULT CHARACTER SET utf8 */;

USE `bdk`;

/*Table structure for table `classes` */

DROP TABLE IF EXISTS `classes`;

CREATE TABLE `classes` (
  `stuid` int(11) NOT NULL,
  `classnumber` varchar(10) NOT NULL,
  `teacherid` int(11) NOT NULL,
  KEY `stuid` (`stuid`),
  KEY `tracherid` (`teacherid`),
  CONSTRAINT `classes_ibfk_1` FOREIGN KEY (`stuid`) REFERENCES `user` (`userid`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `classes_ibfk_2` FOREIGN KEY (`teacherid`) REFERENCES `user` (`userid`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `classes` */

insert  into `classes`(`stuid`,`classnumber`,`teacherid`) values (3,'101',2),(4,'102',5);

/*Table structure for table `participation_total` */

DROP TABLE IF EXISTS `participation_total`;

CREATE TABLE `participation_total` (
  `recordid` int(11) NOT NULL AUTO_INCREMENT,
  `stuid` int(11) NOT NULL,
  `date` datetime NOT NULL,
  `score1` int(11) NOT NULL,
  `score2` int(11) NOT NULL,
  `score3` int(11) NOT NULL,
  `teacherid` int(11) NOT NULL,
  `remark` varchar(128) DEFAULT NULL,
  PRIMARY KEY (`recordid`),
  KEY `stuid` (`stuid`),
  KEY `teacher` (`teacherid`),
  CONSTRAINT `participation_total_ibfk_1` FOREIGN KEY (`stuid`) REFERENCES `user` (`userid`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `participation_total_ibfk_2` FOREIGN KEY (`teacherid`) REFERENCES `user` (`userid`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

/*Data for the table `participation_total` */

insert  into `participation_total`(`recordid`,`stuid`,`date`,`score1`,`score2`,`score3`,`teacherid`,`remark`) values (1,3,'2020-06-18 15:48:55',5,5,5,2,'好'),(2,4,'2020-06-18 16:22:08',5,4,4,5,'OK');

/*Table structure for table `user` */

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `userid` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(16) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `permission` int(3) NOT NULL,
  PRIMARY KEY (`userid`,`username`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

/*Data for the table `user` */

insert  into `user`(`userid`,`username`,`email`,`password`,`permission`) values (1,'admin','admin@example.com','123456',3),(2,'teacher1','admin@ex.com','123456',2),(3,'student1','bdk@aa.com','123456',1),(4,'student2','bdk@bb.com','123456',1),(5,'teacher2','admin2@ex.com','123456',2);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
