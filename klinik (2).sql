-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 26, 2018 at 05:47 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `klinik`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `jabatan` varchar(20) NOT NULL,
  `Id` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`, `nama`, `jabatan`, `Id`) VALUES
('admin', 'admin', 'nama admin', 'laboratorium', 'LAB1'),
('medical', 'medical', 'medical nama', 'medical', 'MED1'),
('radio', 'radio', 'nama radiologi', 'radiologi', 'RAD1');

-- --------------------------------------------------------

--
-- Table structure for table `apoteker`
--

CREATE TABLE `apoteker` (
  `ID_apoteker` int(10) NOT NULL,
  `Nama_apoteker` varchar(25) NOT NULL,
  `Alamat` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `dokter`
--

CREATE TABLE `dokter` (
  `idDokter` varchar(25) NOT NULL,
  `nmDokter` varchar(100) NOT NULL,
  `gender` varchar(15) NOT NULL,
  `Alamat` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dokter`
--

INSERT INTO `dokter` (`idDokter`, `nmDokter`, `gender`, `Alamat`) VALUES
('ADM', 'namanya admin', 'Laki-Laki', 'Bandung'),
('SMG', 'Sumanang', 'Laki-Laki', 'Bandung');

-- --------------------------------------------------------

--
-- Table structure for table `jadwaldokter`
--

CREATE TABLE `jadwaldokter` (
  `jam` time NOT NULL,
  `hari` varchar(8) NOT NULL,
  `idDokter` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `ID_kategori` varchar(25) NOT NULL,
  `Nama_kategori` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`ID_kategori`, `Nama_kategori`) VALUES
('01', 'OBAT KERAS'),
('02', 'OBAT GENERIK');

-- --------------------------------------------------------

--
-- Table structure for table `labhema`
--

CREATE TABLE `labhema` (
  `IdPasien` varchar(25) DEFAULT NULL,
  `hemoglobin` varchar(4) DEFAULT '-',
  `eritrosit` varchar(4) DEFAULT '-',
  `hematokrit` varchar(4) DEFAULT '-',
  `lekosit` varchar(6) DEFAULT '-',
  `lajuendapdarah` varchar(4) DEFAULT '-',
  `thrombosit` varchar(6) DEFAULT '-',
  `MCV` varchar(3) DEFAULT '-',
  `MCH` varchar(2) DEFAULT '-',
  `MCHC` varchar(2) DEFAULT '-',
  `basofil` varchar(3) DEFAULT '-',
  `eosinofil` varchar(3) DEFAULT '-',
  `batang` varchar(3) DEFAULT '-',
  `segmen` varchar(4) DEFAULT '-',
  `limposit` varchar(4) DEFAULT '-',
  `monosit` varchar(3) DEFAULT '-'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `labhema`
--

INSERT INTO `labhema` (`IdPasien`, `hemoglobin`, `eritrosit`, `hematokrit`, `lekosit`, `lajuendapdarah`, `thrombosit`, `MCV`, `MCH`, `MCHC`, `basofil`, `eosinofil`, `batang`, `segmen`, `limposit`, `monosit`) VALUES
('PAS1', '14', '4.56', '37', '6700', '14', '247000', '89', '33', '37', '-', '2', '3', '75', '15', '5');

-- --------------------------------------------------------

--
-- Table structure for table `laboratorium`
--

CREATE TABLE `laboratorium` (
  `idLab` varchar(25) NOT NULL,
  `jnsPemeriksaan` varchar(100) NOT NULL,
  `nilaiRujukan` varchar(50) NOT NULL,
  `satuan` varchar(10) NOT NULL,
  `idPasien` varchar(25) NOT NULL,
  `idDokter` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `laboratorium`
--

INSERT INTO `laboratorium` (`idLab`, `jnsPemeriksaan`, `nilaiRujukan`, `satuan`, `idPasien`, `idDokter`) VALUES
('12', 'Penyakit', '374', '10', 'PAS1', 'SMG');

-- --------------------------------------------------------

--
-- Table structure for table `obat`
--

CREATE TABLE `obat` (
  `ID_Obat` int(10) NOT NULL,
  `Jenis_obat` varchar(50) NOT NULL,
  `Nama_obat` varchar(50) NOT NULL,
  `ID_kategori` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `obat`
--

INSERT INTO `obat` (`ID_Obat`, `Jenis_obat`, `Nama_obat`, `ID_kategori`) VALUES
(2, 'Obat Flu, Batuk dan Pilek', 'Dextral', '01'),
(3, 'Sakit Kepala', 'Paramex', '02'),
(4, 'Sakit Kepala', 'Decolgen', '02');

-- --------------------------------------------------------

--
-- Table structure for table `pasien`
--

CREATE TABLE `pasien` (
  `idPasien` varchar(25) NOT NULL,
  `nmPasien` varchar(100) NOT NULL,
  `umur` int(15) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `Alamat` varchar(150) NOT NULL,
  `noTelp` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pasien`
--

INSERT INTO `pasien` (`idPasien`, `nmPasien`, `umur`, `gender`, `Alamat`, `noTelp`) VALUES
('PAS1', 'Munaroh', 21, 'Perempuan', 'Bandung', '2147483647'),
('PAS2', 'as', 31, 'Laki-laki', 'das', '56452'),
('PAS3', 'nanda', 12, 'Laki-laki', 'Rembang', '0982987271'),
('PAS4', 'Aufa', 24, 'Perempuan', 'Jatinegara', '089278734912');

-- --------------------------------------------------------

--
-- Table structure for table `pembelian`
--

CREATE TABLE `pembelian` (
  `idFakturbeli` varchar(25) NOT NULL,
  `tglPembelian` date NOT NULL,
  `idObat` varchar(25) NOT NULL,
  `idKategori` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `penjualan`
--

CREATE TABLE `penjualan` (
  `idFakturjual` varchar(25) NOT NULL,
  `tglPenjualan` date NOT NULL,
  `idObat` varchar(25) NOT NULL,
  `idKategori` varchar(25) NOT NULL,
  `ID_apoteker` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `poli`
--

CREATE TABLE `poli` (
  `kdPoli` varchar(10) NOT NULL,
  `jenisPoli` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `radiologi`
--

CREATE TABLE `radiologi` (
  `idRadio` varchar(25) NOT NULL,
  `jnsPemeriksaan` varchar(100) NOT NULL,
  `idPasien` varchar(25) NOT NULL,
  `idDokter` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `radiologi`
--

INSERT INTO `radiologi` (`idRadio`, `jnsPemeriksaan`, `idPasien`, `idDokter`) VALUES
('1', 'thorax', 'PAS1', 'SMG'),
('2', 'thorax', 'PAS2', 'SMG');

-- --------------------------------------------------------

--
-- Table structure for table `rekammedis`
--

CREATE TABLE `rekammedis` (
  `kdRekamMedis` varchar(10) NOT NULL,
  `tanggal` date NOT NULL,
  `anamnesa` varchar(10000) NOT NULL,
  `diagnosa` varchar(10000) NOT NULL,
  `terapi` varchar(10000) NOT NULL,
  `idPasien` varchar(25) NOT NULL,
  `idDokter` varchar(25) NOT NULL,
  `idPoli` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `resep`
--

CREATE TABLE `resep` (
  `idResep` varchar(25) NOT NULL,
  `Dosis` varchar(20) NOT NULL,
  `tglResep` date NOT NULL,
  `idPasien` varchar(25) NOT NULL,
  `idDokter` varchar(25) NOT NULL,
  `idObat` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `apoteker`
--
ALTER TABLE `apoteker`
  ADD PRIMARY KEY (`ID_apoteker`);

--
-- Indexes for table `dokter`
--
ALTER TABLE `dokter`
  ADD PRIMARY KEY (`idDokter`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`ID_kategori`);

--
-- Indexes for table `labhema`
--
ALTER TABLE `labhema`
  ADD UNIQUE KEY `IdPasien` (`IdPasien`);

--
-- Indexes for table `laboratorium`
--
ALTER TABLE `laboratorium`
  ADD PRIMARY KEY (`idLab`),
  ADD KEY `fk_id_dokter` (`idDokter`),
  ADD KEY `fk_id_pasien` (`idPasien`);

--
-- Indexes for table `obat`
--
ALTER TABLE `obat`
  ADD PRIMARY KEY (`ID_Obat`),
  ADD KEY `fk_obat` (`ID_kategori`);

--
-- Indexes for table `pasien`
--
ALTER TABLE `pasien`
  ADD PRIMARY KEY (`idPasien`);

--
-- Indexes for table `pembelian`
--
ALTER TABLE `pembelian`
  ADD PRIMARY KEY (`idFakturbeli`);

--
-- Indexes for table `poli`
--
ALTER TABLE `poli`
  ADD PRIMARY KEY (`kdPoli`);

--
-- Indexes for table `radiologi`
--
ALTER TABLE `radiologi`
  ADD PRIMARY KEY (`idRadio`);

--
-- Indexes for table `rekammedis`
--
ALTER TABLE `rekammedis`
  ADD PRIMARY KEY (`kdRekamMedis`);

--
-- Indexes for table `resep`
--
ALTER TABLE `resep`
  ADD PRIMARY KEY (`idResep`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `laboratorium`
--
ALTER TABLE `laboratorium`
  ADD CONSTRAINT `fk_id_dokter` FOREIGN KEY (`idDokter`) REFERENCES `dokter` (`idDokter`),
  ADD CONSTRAINT `fk_id_pasien` FOREIGN KEY (`idPasien`) REFERENCES `pasien` (`idPasien`);

--
-- Constraints for table `obat`
--
ALTER TABLE `obat`
  ADD CONSTRAINT `fk_obat` FOREIGN KEY (`ID_kategori`) REFERENCES `kategori` (`ID_kategori`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
