-- MySQL Administrator dump 1.4
--
-- ------------------------------------------------------
-- Server version	5.0.67-community-nt


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


--
-- Create schema ci_cart
--

CREATE DATABASE IF NOT EXISTS ci_cart;
USE ci_cart;

--
-- Definition of table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE `products` (
  `id` int(128) NOT NULL auto_increment,
  `name` varchar(128) NOT NULL,
  `price` varchar(32) NOT NULL,
  `image` varchar(128) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` (`id`,`name`,`price`,`image`) VALUES 
 (1,'MacBook Pro','1199','macbookpro.jpg'),
 (2,'MacBook Air','1499','macbookair.jpg'),
 (3,'MacBook','999','macbook.jpg'),
 (4,'PenDrive','1','dafdasfas.jpg');
/*!40000 ALTER TABLE `products` ENABLE KEYS */;


--
-- Definition of table `tbl_department`
--

DROP TABLE IF EXISTS `tbl_department`;
CREATE TABLE `tbl_department` (
  `department_id` int(4) NOT NULL auto_increment,
  `department_name` varchar(80) NOT NULL,
  PRIMARY KEY  (`department_id`)
) ENGINE=MyISAM AUTO_INCREMENT=103 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_department`
--

/*!40000 ALTER TABLE `tbl_department` DISABLE KEYS */;
INSERT INTO `tbl_department` (`department_id`,`department_name`) VALUES 
 (1,'Finance'),
 (2,'HQ'),
 (3,'Operations'),
 (4,'Marketing'),
 (5,'Sales'),
 (12,'Ventas'),
 (13,'Produccion'),
 (35,'Ventas'),
 (24,'Laboratorio'),
 (100,'Negocios'),
 (102,'Prod');
/*!40000 ALTER TABLE `tbl_department` ENABLE KEYS */;


--
-- Definition of table `tbl_designation`
--

DROP TABLE IF EXISTS `tbl_designation`;
CREATE TABLE `tbl_designation` (
  `designation_id` int(4) NOT NULL auto_increment,
  `designation_name` varchar(50) NOT NULL,
  PRIMARY KEY  (`designation_id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_designation`
--

/*!40000 ALTER TABLE `tbl_designation` DISABLE KEYS */;
INSERT INTO `tbl_designation` (`designation_id`,`designation_name`) VALUES 
 (1,'VP'),
 (2,'Manager'),
 (3,'Executive'),
 (4,'Trainee'),
 (5,'Senior Executive');
/*!40000 ALTER TABLE `tbl_designation` ENABLE KEYS */;


--
-- Definition of table `tbl_employee`
--

DROP TABLE IF EXISTS `tbl_employee`;
CREATE TABLE `tbl_employee` (
  `employee_id` int(4) NOT NULL auto_increment,
  `employee_no` int(6) NOT NULL,
  `employee_name` varchar(60) NOT NULL,
  `department_id` int(4) NOT NULL,
  `designation_id` int(4) NOT NULL,
  `hired_date` date NOT NULL,
  `salary` int(10) NOT NULL,
  PRIMARY KEY  (`employee_id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_employee`
--

/*!40000 ALTER TABLE `tbl_employee` DISABLE KEYS */;
INSERT INTO `tbl_employee` (`employee_id`,`employee_no`,`employee_name`,`department_id`,`designation_id`,`hired_date`,`salary`) VALUES 
 (1,32343,'Alexis Flores',1,1,'0000-00-00',0),
 (2,34343,'Nicole Flores',2,1,'1969-12-31',100),
 (6,1,'Jose',2,1,'2015-05-01',5000),
 (7,44,'Juan F Gonzalez',3,4,'2015-05-08',230);
/*!40000 ALTER TABLE `tbl_employee` ENABLE KEYS */;




/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
