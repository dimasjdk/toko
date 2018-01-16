# Host: localhost  (Version 5.5.5-10.1.19-MariaDB)
# Date: 2018-01-16 02:11:18
# Generator: MySQL-Front 6.0  (Build 2.20)


#
# Structure for table "bukutamu"
#

DROP TABLE IF EXISTS `bukutamu`;
CREATE TABLE `bukutamu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `pesan` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

#
# Data for table "bukutamu"
#

INSERT INTO `bukutamu` VALUES (6,'Taqin','taqinjunior56@gmail.com','bismillah iso'),(7,'tiflah','qwerty@gmail.com','good'),(8,'Erna Rosalina','erna@gmail.com','aku bisa'),(9,'sojikuh','soji@gmail.com','josss');

#
# Structure for table "user"
#

DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `tgl_daftar` date DEFAULT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# Data for table "user"
#

INSERT INTO `user` VALUES (1,'2018-01-15','aku','aku123@gmail.com','aku','e172dd95f4feb21412a692e73929961e');
