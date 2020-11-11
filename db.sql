/*
SQLyog Ultimate v12.08 (64 bit)
MySQL - 5.7.26 : Database - output
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
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

/*Table structure for table `user` */

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `userid` int(11) NOT NULL AUTO_INCREMENT COMMENT 'UID',
  `username` varchar(16) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `permission` int(3) NOT NULL,
  `class` varchar(10) DEFAULT NULL COMMENT 'Only for STU',
  `year` int(11) DEFAULT NULL COMMENT 'Only for STU',
  PRIMARY KEY (`userid`,`username`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

/*Data for the table `user` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
