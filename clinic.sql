/*
SQLyog Ultimate v11.11 (64 bit)
MySQL - 5.7.9 : Database - clinic_management
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`clinic_management` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `clinic_management`;

/*Table structure for table `booking` */

DROP TABLE IF EXISTS `booking`;

CREATE TABLE `booking` (
  `booking_id` int(11) NOT NULL AUTO_INCREMENT,
  `schedule_id` int(11) DEFAULT NULL,
  `patient_id` int(11) DEFAULT NULL,
  `status` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`booking_id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*Data for the table `booking` */

insert  into `booking`(`booking_id`,`schedule_id`,`patient_id`,`status`) values (1,2,1,'Payment Completed'),(2,4,1,'Payment Completed'),(3,2,1,'Payment Completed'),(4,1,1,'Payment Completed'),(5,3,1,'rejected by staff'),(6,6,1,'pending');

/*Table structure for table `complaint` */

DROP TABLE IF EXISTS `complaint`;

CREATE TABLE `complaint` (
  `complaint_id` int(11) NOT NULL AUTO_INCREMENT,
  `patient_id` int(11) DEFAULT NULL,
  `complaint` varchar(100) DEFAULT NULL,
  `reply` varchar(100) DEFAULT NULL,
  `date` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`complaint_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `complaint` */

insert  into `complaint`(`complaint_id`,`patient_id`,`complaint`,`reply`,`date`) values (1,1,'gdgd','i will call you soon!!!','2022-11-02'),(2,1,'s','reply pending','2022-11-03'),(3,1,'','reply pending','2022-11-03');

/*Table structure for table `laboratory` */

DROP TABLE IF EXISTS `laboratory`;

CREATE TABLE `laboratory` (
  `lab_id` int(11) NOT NULL AUTO_INCREMENT,
  `login_id` int(11) DEFAULT NULL,
  `labname` varchar(100) DEFAULT NULL,
  `phone` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`lab_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `laboratory` */

insert  into `laboratory`(`lab_id`,`login_id`,`labname`,`phone`,`email`) values (3,13,'Ayur','06238526459','sankarb.b00@gmail.com'),(4,17,'san','06238526459','sankarb.b00@gmail.com');

/*Table structure for table `labtests` */

DROP TABLE IF EXISTS `labtests`;

CREATE TABLE `labtests` (
  `lab_test_id` int(11) NOT NULL AUTO_INCREMENT,
  `lab_id` int(11) DEFAULT NULL,
  `test_name` varbinary(100) DEFAULT NULL,
  `desc` varchar(100) DEFAULT NULL,
  `rate` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`lab_test_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `labtests` */

insert  into `labtests`(`lab_test_id`,`lab_id`,`test_name`,`desc`,`rate`) values (1,3,'costly','for locals','3000'),(2,3,'local','for someonr','200'),(3,3,'anyo','any','11');

/*Table structure for table `login` */

DROP TABLE IF EXISTS `login`;

CREATE TABLE `login` (
  `login_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `usertype` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`login_id`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

/*Data for the table `login` */

insert  into `login`(`login_id`,`username`,`password`,`usertype`) values (9,'admin','admin','admin'),(8,'arjun','arjun','staff'),(13,'lab','lab','lab'),(11,'pt','pt','patient'),(14,'pharm','pharm','pharmacy'),(15,'st','st','staff'),(16,'sadsad','dasdad','staff'),(17,'lab2','lab2','lab'),(18,'ph','ph','pharmacy');

/*Table structure for table `medicineprescription` */

DROP TABLE IF EXISTS `medicineprescription`;

CREATE TABLE `medicineprescription` (
  `med_pres_id` int(11) NOT NULL AUTO_INCREMENT,
  `book_id` int(11) DEFAULT NULL,
  `medicine_id` int(11) DEFAULT NULL,
  `datetime` varchar(100) DEFAULT NULL,
  `med_pres_desc` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`med_pres_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `medicineprescription` */

insert  into `medicineprescription`(`med_pres_id`,`book_id`,`medicine_id`,`datetime`,`med_pres_desc`) values (1,2,7,'2022-11-02','dsad'),(2,2,8,'2022-11-02','dsad');

/*Table structure for table `medicines` */

DROP TABLE IF EXISTS `medicines`;

CREATE TABLE `medicines` (
  `medicine_id` int(11) NOT NULL AUTO_INCREMENT,
  `pharma_id` int(11) DEFAULT NULL,
  `medicinename` varchar(100) DEFAULT NULL,
  `desc` varchar(100) DEFAULT NULL,
  `expirydate` varchar(100) DEFAULT NULL,
  `rate` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`medicine_id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

/*Data for the table `medicines` */

insert  into `medicines`(`medicine_id`,`pharma_id`,`medicinename`,`desc`,`expirydate`,`rate`) values (1,NULL,'sadsad',NULL,NULL,NULL),(2,NULL,'dsadas',NULL,NULL,NULL),(3,NULL,'dasdsa',NULL,NULL,NULL),(4,NULL,'dsa',NULL,NULL,NULL),(5,NULL,'dsadsa',NULL,NULL,NULL),(6,NULL,'dasds',NULL,NULL,NULL),(8,4,'locals','for local use','2022-09-28','1000');

/*Table structure for table `patients` */

DROP TABLE IF EXISTS `patients`;

CREATE TABLE `patients` (
  `patient_id` int(11) NOT NULL AUTO_INCREMENT,
  `login_id` int(11) DEFAULT NULL,
  `firstname` varchar(100) DEFAULT NULL,
  `lastname` varchar(100) DEFAULT NULL,
  `phone` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `housename` varchar(100) DEFAULT NULL,
  `place` varchar(100) DEFAULT NULL,
  `gender` varchar(100) DEFAULT NULL,
  `bloodgroup` varchar(100) DEFAULT NULL,
  `dob` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`patient_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `patients` */

insert  into `patients`(`patient_id`,`login_id`,`firstname`,`lastname`,`phone`,`email`,`housename`,`place`,`gender`,`bloodgroup`,`dob`) values (1,11,'sadad','san kar','06238526459','sankarb.b00@gmail.com','near thammanam junction','kochi','male','ab+','2022-11-17');

/*Table structure for table `payments` */

DROP TABLE IF EXISTS `payments`;

CREATE TABLE `payments` (
  `pay_id` int(11) NOT NULL AUTO_INCREMENT,
  `book_id` int(11) DEFAULT NULL,
  `amount` varchar(100) DEFAULT NULL,
  `paymentdate` varchar(100) DEFAULT NULL,
  `paymenttype` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`pay_id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

/*Data for the table `payments` */

insert  into `payments`(`pay_id`,`book_id`,`amount`,`paymentdate`,`paymenttype`) values (8,2,' 3000','2022-11-02','test payment'),(6,2,'210','2022-11-02','booking'),(7,2,' 3000','2022-11-02','booking'),(9,2,' 32','2022-11-02','medicine payment'),(10,2,' fee','2022-11-03','booking'),(11,1,' fee','2022-11-03','booking');

/*Table structure for table `pharmacy` */

DROP TABLE IF EXISTS `pharmacy`;

CREATE TABLE `pharmacy` (
  `pharma_id` int(11) NOT NULL AUTO_INCREMENT,
  `login_id` int(11) DEFAULT NULL,
  `pharmacyname` varchar(100) DEFAULT NULL,
  `phone` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`pharma_id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `pharmacy` */

insert  into `pharmacy`(`pharma_id`,`login_id`,`pharmacyname`,`phone`,`email`) values (4,14,'clinic','06238526459','sankarb.b00@gmail.com'),(5,18,'san','06238526459','sankarb.b00@gmail.com');

/*Table structure for table `request` */

DROP TABLE IF EXISTS `request`;

CREATE TABLE `request` (
  `request_id` int(11) NOT NULL AUTO_INCREMENT,
  `patient_id` int(11) DEFAULT NULL,
  `date` varchar(100) DEFAULT NULL,
  `time` varchar(100) DEFAULT NULL,
  `status` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`request_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Data for the table `request` */

/*Table structure for table `schedule` */

DROP TABLE IF EXISTS `schedule`;

CREATE TABLE `schedule` (
  `schedule_id` int(11) NOT NULL AUTO_INCREMENT,
  `doctor_id` int(11) DEFAULT NULL,
  `starttime` varchar(100) DEFAULT NULL,
  `endtime` varchar(100) DEFAULT NULL,
  `date` varchar(100) DEFAULT NULL,
  `feeamount` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`schedule_id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*Data for the table `schedule` */

insert  into `schedule`(`schedule_id`,`doctor_id`,`starttime`,`endtime`,`date`,`feeamount`) values (1,0,'22','22','2022-11-02','fee'),(2,0,'22','22','2022-11-02','fee'),(3,0,'22','22','2022-11-02','fee'),(4,0,'12:57','11:00','2022-11-02','fee'),(5,0,'11:23','11:27','2022-11-03','200'),(6,0,'19:49','17:49','2022-11-03','249');

/*Table structure for table `staff` */

DROP TABLE IF EXISTS `staff`;

CREATE TABLE `staff` (
  `staff_id` int(11) NOT NULL AUTO_INCREMENT,
  `login_id` int(11) DEFAULT NULL,
  `firstname` varchar(100) DEFAULT NULL,
  `lastname` varchar(100) DEFAULT NULL,
  `phone` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `place` varchar(100) DEFAULT NULL,
  `qualification` varchar(100) DEFAULT NULL,
  `gender` varchar(100) DEFAULT NULL,
  `dob` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`staff_id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*Data for the table `staff` */

insert  into `staff`(`staff_id`,`login_id`,`firstname`,`lastname`,`phone`,`email`,`place`,`qualification`,`gender`,`dob`) values (5,15,'ss','san kar','06238526459','sankarb.b00@gmail.com','alpy','','male','2022-11-16'),(4,8,'Arjun','kk','06238526459','sankarb.b00@gmail.com','kochi','basic','male','2022-11-10'),(6,16,'sadad','san kar','06238526459','sankarb.b00@gmail.com','dasd','Post graduation','male','2022-11-20');

/*Table structure for table `testprescription` */

DROP TABLE IF EXISTS `testprescription`;

CREATE TABLE `testprescription` (
  `test_pres_id` int(11) NOT NULL AUTO_INCREMENT,
  `book_id` int(11) DEFAULT NULL,
  `lab_test_id` int(11) DEFAULT NULL,
  `lab_pres_desc` varchar(100) DEFAULT NULL,
  `report_desc` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`test_pres_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `testprescription` */

insert  into `testprescription`(`test_pres_id`,`book_id`,`lab_test_id`,`lab_pres_desc`,`report_desc`) values (1,2,1,'need help','i will arrage soon'),(2,2,1,'can i call you','NO!');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
