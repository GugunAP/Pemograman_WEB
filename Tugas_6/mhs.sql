CREATE DATABASE mhs;

USE mhs;

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

CREATE TABLE `mhs` (
  `nama` VARCHAR(100) DEFAULT NULL,
  `npm` VARCHAR(20) NOT NULL PRIMARY KEY,
  `ttl` VARCHAR(100) DEFAULT NULL,
  `alamat` varchar(200) DEFAULT NULL,
  `jl` VARCHAR(10) DEFAULT NULL,
  `hobi` VARCHAR(20) DEFAULT NULL,
  `makan` VARCHAR(10) DEFAULT NULL,
  `status` VARCHAR(10) DEFAULT NULL,
  `agama` VARCHAR(10) DEFAULT NULL,
  `darah` VARCHAR(5) DEFAULT NULL,
  `cita` VARCHAR(10) DEFAULT NULL,
  `motto` VARCHAR(30) DEFAULT NULL,
  `email` VARCHAR(20) DEFAULT NULL,
  `hp` VARCHAR(15) DEFAULT NULL
  
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `mhs` (`nama`, `npm`, `ttl`, `alamat`, `jl`,  `hobi`, `makan`, `status`, `agama`, `darah`, `cita`, `motto`, `email`, `hp`)
VALUES ( 'Guntur Adhi Prasetya', '17081010043', 'Pasuruan, 25 Januari 1999', 'Jl. Sunan Ampel Selatan', 'Laki-laki', 'makan', 'nasgor', 'jomblo', 'islam', 'B', 'Astronot', 'Nggas Teross', 'gunturadhip06@gmail.com', '087853049029' );

INSERT INTO `mhs` (`nama`, `npm`, `ttl`, `alamat`, `jl`,  `hobi`, `makan`, `status`, `agama`, `darah`, `cita`, `motto`, `email`, `hp`)
VALUES ('Amir Muhammad Hakim', '17081010051', 'Surabaya, 12 Oktober 1999', 'Kampung Malang Kulon 1/38-A, Surabaya', 'Laki-laki', ' Nyapu ngepel resik2', 'nasgor', 'Pacaran', 'Islam', 'AB+', 'Software Engineer', 'Sukses dunia akhirat adalah jalan ninjaku', 'amir.rhythm@gmail.com', '087855777360' );