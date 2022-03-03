/*
SQLyog Enterprise - MySQL GUI v8.14 
MySQL - 5.7.28-log : Database - l7
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
/*Table structure for table `habit_patient` */

DROP TABLE IF EXISTS `habit_patient`;

CREATE TABLE `habit_patient` (
  `patient_id` bigint(10) DEFAULT NULL,
  `habit_id` bigint(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `habit_patient` */

insert  into `habit_patient`(`patient_id`,`habit_id`) values (11,3);
insert  into `habit_patient`(`patient_id`,`habit_id`) values (11,4);

/*Table structure for table `home_care_patient` */

DROP TABLE IF EXISTS `home_care_patient`;

CREATE TABLE `home_care_patient` (
  `patient_id` bigint(10) DEFAULT NULL,
  `home_care_id` bigint(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `home_care_patient` */

insert  into `home_care_patient`(`patient_id`,`home_care_id`) values (11,3);
insert  into `home_care_patient`(`patient_id`,`home_care_id`) values (11,4);

/*Table structure for table `medical_history_patient` */

DROP TABLE IF EXISTS `medical_history_patient`;

CREATE TABLE `medical_history_patient` (
  `patient_id` bigint(10) DEFAULT NULL,
  `medical_history_id` bigint(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `medical_history_patient` */

insert  into `medical_history_patient`(`patient_id`,`medical_history_id`) values (10,1);
insert  into `medical_history_patient`(`patient_id`,`medical_history_id`) values (10,2);
insert  into `medical_history_patient`(`patient_id`,`medical_history_id`) values (10,3);
insert  into `medical_history_patient`(`patient_id`,`medical_history_id`) values (11,1);
insert  into `medical_history_patient`(`patient_id`,`medical_history_id`) values (11,2);
insert  into `medical_history_patient`(`patient_id`,`medical_history_id`) values (11,3);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
