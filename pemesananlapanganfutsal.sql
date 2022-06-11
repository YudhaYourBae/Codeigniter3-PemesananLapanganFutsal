# Host: localhost  (Version 5.5.5-10.4.22-MariaDB)
# Date: 2022-06-11 23:44:48
# Generator: MySQL-Front 6.0  (Build 2.20)


#
# Structure for table "lapangan"
#

DROP TABLE IF EXISTS `lapangan`;
CREATE TABLE `lapangan` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `lnama` varchar(20) DEFAULT NULL,
  `lkode` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# Data for table "lapangan"
#


#
# Structure for table "pelanggan"
#

DROP TABLE IF EXISTS `pelanggan`;
CREATE TABLE `pelanggan` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `id_pelanggan` varchar(20) DEFAULT NULL,
  `nama_pelanggan` varchar(20) DEFAULT NULL,
  `alamat` varchar(20) DEFAULT NULL,
  `telp` varchar(20) DEFAULT NULL,
  `tgl_daftar` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# Data for table "pelanggan"
#


#
# Structure for table "pembayaran"
#

DROP TABLE IF EXISTS `pembayaran`;
CREATE TABLE `pembayaran` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `id_pembayaran` varchar(20) DEFAULT NULL,
  `tgl_bayar` varchar(20) DEFAULT NULL,
  `jum_bayar` varchar(20) DEFAULT NULL,
  `diskon` varchar(20) DEFAULT NULL,
  `id_sewa` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# Data for table "pembayaran"
#


#
# Structure for table "sewa"
#

DROP TABLE IF EXISTS `sewa`;
CREATE TABLE `sewa` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `id_sewa` varchar(20) DEFAULT NULL,
  `tanggal_booking` varchar(20) DEFAULT NULL,
  `waktu_booking` varchar(20) DEFAULT NULL,
  `uang_muka` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# Data for table "sewa"
#


#
# Structure for table "tarif"
#

DROP TABLE IF EXISTS `tarif`;
CREATE TABLE `tarif` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `kd_tarif` varchar(20) DEFAULT NULL,
  `mulai` varchar(20) DEFAULT NULL,
  `selesai` varchar(20) DEFAULT NULL,
  `perjam` varchar(20) DEFAULT NULL,
  `total` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# Data for table "tarif"
#


#
# Structure for table "user"
#

DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_lengkap` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `konfirpassword` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4;

#
# Data for table "user"
#

INSERT INTO `user` VALUES (9,'Fery Richardo','feryricardho@gmail.com','$2y$10$d92PUot55BwnQsC7Khl5nelfoI/F.mPxaxjylNq.yQko3Z10PDryi','$2y$10$bul6rrAE3RFNaniYOALXBO9HPkNUZ76GrnMVQp4R1.thsIMnh6T3W'),(10,'Iqbal Sonata','iqbalsonata2@gmail.com','$2y$10$qWNZH7TiQTrxCCraIEx10eLZk3Xt/NGFVGcm.yp0jjrq4/CqgpM0K','$2y$10$e7nOdwRMTQFRPZDFy7nzZerKznqbIrkBFzHhojsK0iQy9NdBRbLs2');
