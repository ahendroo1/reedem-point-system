/*
SQLyog Ultimate v11.11 (64 bit)
MySQL - 5.5.5-10.4.11-MariaDB : Database - traderhu_xn2
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`traderhu_xn2` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

/*Table structure for table `xf_trophy` */

DROP TABLE IF EXISTS `xf_trophy`;

CREATE TABLE `xf_trophy` (
  `trophy_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `trophy_points` int(10) unsigned NOT NULL,
  `user_criteria` mediumblob NOT NULL,
  PRIMARY KEY (`trophy_id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4;

/*Data for the table `xf_trophy` */

insert  into `xf_trophy`(`trophy_id`,`trophy_points`,`user_criteria`) values (1,1,'[{\"rule\":\"messages_posted\",\"data\":{\"messages\":\"1\"}}]'),(2,5,'[{\"rule\":\"messages_posted\",\"data\":{\"messages\":\"5\"}}]'),(3,10,'[{\"rule\":\"messages_posted\",\"data\":{\"messages\":\"10\"}}]'),(4,20,'[{\"rule\":\"messages_posted\",\"data\":{\"messages\":\"100\"}}]'),(5,2,'[{\"rule\":\"reaction_score\",\"data\":{\"reactions\":\"1\"}}]'),(6,10,'[{\"rule\":\"reaction_score\",\"data\":{\"reactions\":\"25\"}}]'),(7,15,'[{\"rule\":\"reaction_score\",\"data\":{\"reactions\":\"100\"}}]'),(8,20,'[{\"rule\":\"reaction_score\",\"data\":{\"reactions\":\"250\"}}]'),(9,30,'[{\"rule\":\"reaction_score\",\"data\":{\"reactions\":\"500\"}}]'),(10,5,'[{\"rule\":\"birthday\",\"data\":[]}]'),(11,10,'[{\"rule\":\"reaction_ratio\",\"data\":{\"ratio\":\"1\"}}]');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
