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
/*Table structure for table `h_habits` */

DROP TABLE IF EXISTS `h_habits`;

CREATE TABLE `h_habits` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `h_habits` */

insert  into `h_habits`(`id`,`name`,`created_at`,`updated_at`,`deleted_at`) values (3,'Cigarettes','2021-01-30 05:31:58','2021-01-30 05:31:58',NULL);
insert  into `h_habits`(`id`,`name`,`created_at`,`updated_at`,`deleted_at`) values (4,'Pan','2021-01-30 05:32:09','2021-01-30 05:32:09',NULL);
insert  into `h_habits`(`id`,`name`,`created_at`,`updated_at`,`deleted_at`) values (5,'Gul','2021-01-30 05:32:18','2021-01-30 05:32:18',NULL);

/*Table structure for table `h_home_cares` */

DROP TABLE IF EXISTS `h_home_cares`;

CREATE TABLE `h_home_cares` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `h_home_cares` */

insert  into `h_home_cares`(`id`,`name`,`created_at`,`updated_at`,`deleted_at`) values (3,'Sufficient','2021-01-30 05:27:48','2021-01-30 05:27:48',NULL);
insert  into `h_home_cares`(`id`,`name`,`created_at`,`updated_at`,`deleted_at`) values (4,'Not Sufficient, Brushing','2021-01-30 05:28:08','2021-01-30 05:28:51',NULL);
insert  into `h_home_cares`(`id`,`name`,`created_at`,`updated_at`,`deleted_at`) values (5,'Adequate','2021-01-30 05:29:03','2021-01-30 05:29:03',NULL);
insert  into `h_home_cares`(`id`,`name`,`created_at`,`updated_at`,`deleted_at`) values (6,'Not Adequate','2021-01-30 05:29:22','2021-01-30 05:29:22',NULL);

/*Table structure for table `h_medical_histories` */

DROP TABLE IF EXISTS `h_medical_histories`;

CREATE TABLE `h_medical_histories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `h_medical_histories` */

insert  into `h_medical_histories`(`id`,`name`,`created_at`,`updated_at`,`deleted_at`) values (1,'Diabetes','2021-01-30 05:17:50','2021-01-30 05:17:50',NULL);
insert  into `h_medical_histories`(`id`,`name`,`created_at`,`updated_at`,`deleted_at`) values (2,'Blood Pressure','2021-01-30 05:18:07','2021-01-30 05:18:07',NULL);
insert  into `h_medical_histories`(`id`,`name`,`created_at`,`updated_at`,`deleted_at`) values (3,'Cardiac Disease','2021-01-30 05:18:41','2021-01-30 05:18:41',NULL);
insert  into `h_medical_histories`(`id`,`name`,`created_at`,`updated_at`,`deleted_at`) values (4,'Blood Disorder','2021-01-30 05:18:57','2021-01-30 05:18:57',NULL);
insert  into `h_medical_histories`(`id`,`name`,`created_at`,`updated_at`,`deleted_at`) values (5,'HIV','2021-01-30 05:19:08','2021-01-30 05:19:08',NULL);
insert  into `h_medical_histories`(`id`,`name`,`created_at`,`updated_at`,`deleted_at`) values (6,'Others','2021-01-30 05:19:14','2021-01-30 05:19:14',NULL);

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
alter table  `h_prescriptions`   add column `total_bill` decimal(16,2) DEFAULT '0' NULL after `any_special_issue`;
alter table  `h_prescriptions`   add column `payment_status` tinyint(3) DEFAULT '0' NULL after `any_special_issue`;


DROP TABLE IF EXISTS `h_payment_status`;

CREATE TABLE `h_payment_status` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `h_payment_status` */

insert  into `h_payment_status`(`id`,`name`,`created_at`,`updated_at`,`deleted_at`) values (0,'Unpaid',NULL,NULL,NULL);
insert  into `h_payment_status`(`id`,`name`,`created_at`,`updated_at`,`deleted_at`) values (1,'Partial payment',NULL,NULL,NULL);
insert  into `h_payment_status`(`id`,`name`,`created_at`,`updated_at`,`deleted_at`) values (2,'Paid',NULL,NULL,NULL);
insert  into `h_payment_status`(`id`,`name`,`created_at`,`updated_at`,`deleted_at`) values (3,'Refurn',NULL,NULL,NULL);
