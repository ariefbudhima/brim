-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 22, 2018 at 08:13 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

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
('admin', 'admin', 'nama admin', 'Laboratorium', 'LAB1'),
('medical', 'medical', 'medical nama', 'Medical', 'MED1'),
('radio', 'radio', 'nama radiologi', 'Radiologi', 'RAD1');

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
  `No` int(11) NOT NULL,
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
  `monosit` varchar(3) DEFAULT '-',
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `labhema`
--

INSERT INTO `labhema` (`No`, `IdPasien`, `hemoglobin`, `eritrosit`, `hematokrit`, `lekosit`, `lajuendapdarah`, `thrombosit`, `MCV`, `MCH`, `MCHC`, `basofil`, `eosinofil`, `batang`, `segmen`, `limposit`, `monosit`, `updated_at`) VALUES
(1, 'PAS1', '14', '4.56', '37', '6700', '14', '247000', '89', '33', '37', '-', '2', '3', '75', '15', '5', '2018-06-20 13:21:59'),
(2, 'PAS1', '10', '4.22', '37', '6700', '15', '24700', '89', '33', '37', '', '2', '2', '2', '2', '2', '2018-06-20 13:28:32');

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
-- Table structure for table `labsero`
--

CREATE TABLE `labsero` (
  `No` int(11) NOT NULL,
  `IdPasien` varchar(20) NOT NULL,
  `Syphilis` varchar(20) DEFAULT NULL,
  `HbsAg` varchar(20) DEFAULT NULL,
  `Widal` varchar(20) DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `labsero`
--

INSERT INTO `labsero` (`No`, `IdPasien`, `Syphilis`, `HbsAg`, `Widal`, `updated_at`) VALUES
(1, 'PAS1', 'Normal', 'Normal', 'Tidak Normal', '2018-06-22 14:53:00');

-- --------------------------------------------------------

--
-- Table structure for table `laburin`
--

CREATE TABLE `laburin` (
  `No` int(11) NOT NULL,
  `IdPasien` varchar(4) DEFAULT NULL,
  `Warna` varchar(20) NOT NULL,
  `Kejernihan` varchar(20) NOT NULL,
  `BJ` varchar(10) NOT NULL,
  `PH` varchar(5) NOT NULL,
  `Protein` varchar(10) NOT NULL,
  `Glukosa` varchar(10) NOT NULL,
  `Keton` varchar(10) NOT NULL,
  `Bilirubin` varchar(10) NOT NULL,
  `Urobilinogen` varchar(10) NOT NULL,
  `Nitrit` varchar(10) NOT NULL,
  `Darah` varchar(10) NOT NULL,
  `Lekosit` varchar(10) NOT NULL,
  `sEritrosit` varchar(10) NOT NULL,
  `sLekosit` varchar(10) NOT NULL,
  `sEpitel` varchar(10) NOT NULL,
  `Kristal` varchar(10) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `laburin`
--

INSERT INTO `laburin` (`No`, `IdPasien`, `Warna`, `Kejernihan`, `BJ`, `PH`, `Protein`, `Glukosa`, `Keton`, `Bilirubin`, `Urobilinogen`, `Nitrit`, `Darah`, `Lekosit`, `sEritrosit`, `sLekosit`, `sEpitel`, `Kristal`, `updated_at`) VALUES
(1, 'PAS1', 'putih', 'jernih', '23', '7.3', 'positif', 'positif', 'positif', 'negatif', 'meningkat', 'positif', 'positif', 'positif', 'tidak', 'ya', '33', 'positif', '2018-06-20 13:54:32');

-- --------------------------------------------------------

--
-- Table structure for table `medicalanamnase`
--

CREATE TABLE `medicalanamnase` (
  `No` int(11) NOT NULL,
  `IdPasien` varchar(20) NOT NULL,
  `Hepatitis` varchar(20) DEFAULT NULL,
  `TBC` varchar(20) DEFAULT NULL,
  `Hipertensi` varchar(20) DEFAULT NULL,
  `Diabetes` varchar(20) DEFAULT NULL,
  `Alergi` varchar(20) DEFAULT NULL,
  `Operasi` varchar(20) DEFAULT NULL,
  `Jantung` varchar(20) DEFAULT NULL,
  `Inap` varchar(20) DEFAULT NULL,
  `PTulang` varchar(20) DEFAULT NULL,
  `ObatRutin` varchar(20) DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `medicalanamnase`
--

INSERT INTO `medicalanamnase` (`No`, `IdPasien`, `Hepatitis`, `TBC`, `Hipertensi`, `Diabetes`, `Alergi`, `Operasi`, `Jantung`, `Inap`, `PTulang`, `ObatRutin`, `updated_at`) VALUES
(4, 'PAS1', 'A', '2010', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '2018-06-22 10:38:03');

-- --------------------------------------------------------

--
-- Table structure for table `medicalkeluarga`
--

CREATE TABLE `medicalkeluarga` (
  `No` int(11) NOT NULL,
  `IdPasien` varchar(20) NOT NULL,
  `Jantung` varchar(20) DEFAULT NULL,
  `DTinggi` varchar(20) DEFAULT NULL,
  `Kmanis` varchar(20) DEFAULT NULL,
  `Stroke` varchar(20) DEFAULT NULL,
  `Paru` varchar(20) DEFAULT NULL,
  `Kanker` varchar(20) DEFAULT NULL,
  `GJiwa` varchar(20) DEFAULT NULL,
  `Ginjal` varchar(20) DEFAULT NULL,
  `SCerna` varchar(20) DEFAULT NULL,
  `Lainnya` varchar(20) DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `medicalkeluarga`
--

INSERT INTO `medicalkeluarga` (`No`, `IdPasien`, `Jantung`, `DTinggi`, `Kmanis`, `Stroke`, `Paru`, `Kanker`, `GJiwa`, `Ginjal`, `SCerna`, `Lainnya`, `updated_at`) VALUES
(3, 'PAS1', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '2018-06-22 18:01:11');

-- --------------------------------------------------------

--
-- Table structure for table `medicalpemeriksaan`
--

CREATE TABLE `medicalpemeriksaan` (
  `No` int(11) NOT NULL,
  `IdPasien` varchar(20) NOT NULL,
  `Tinggi` varchar(20) DEFAULT NULL,
  `Berat` varchar(20) DEFAULT NULL,
  `Nadi` varchar(20) DEFAULT NULL,
  `Pernapasan` varchar(20) DEFAULT NULL,
  `Tensi` varchar(20) DEFAULT NULL,
  `Harihari` varchar(20) DEFAULT NULL,
  `Periksa` varchar(20) DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `medicalpemeriksaan`
--

INSERT INTO `medicalpemeriksaan` (`No`, `IdPasien`, `Tinggi`, `Berat`, `Nadi`, `Pernapasan`, `Tensi`, `Harihari`, `Periksa`, `updated_at`) VALUES
(5, 'PAS1', '160', '55', '120', '220', '113', 'Tidak', 'Tidak', '2018-06-22 18:12:13');

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
-- Table structure for table `radioabdomen`
--

CREATE TABLE `radioabdomen` (
  `No` int(11) NOT NULL,
  `IdPasien` varchar(20) NOT NULL,
  `Bentuk` varchar(20) DEFAULT NULL,
  `Palpasi` varchar(20) DEFAULT NULL,
  `Hati` varchar(20) DEFAULT NULL,
  `Limpa` varchar(20) DEFAULT NULL,
  `Ginjal` varchar(20) DEFAULT NULL,
  `Rectal` varchar(20) DEFAULT NULL,
  `Hernia` varchar(20) DEFAULT NULL,
  `Haemoroid` varchar(20) DEFAULT NULL,
  `Lainnya` varchar(20) DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `radioabdomen`
--

INSERT INTO `radioabdomen` (`No`, `IdPasien`, `Bentuk`, `Palpasi`, `Hati`, `Limpa`, `Ginjal`, `Rectal`, `Hernia`, `Haemoroid`, `Lainnya`, `updated_at`) VALUES
(1, 'PAS1', 'Normal', 'Tidak Normal', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-06-22 09:04:29');

-- --------------------------------------------------------

--
-- Table structure for table `radioleher`
--

CREATE TABLE `radioleher` (
  `No` int(11) NOT NULL,
  `IdPasien` varchar(20) NOT NULL,
  `leher` varchar(20) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `radioleher`
--

INSERT INTO `radioleher` (`No`, `IdPasien`, `leher`, `updated_at`) VALUES
(1, 'PAS1', 'Normal', '2018-06-22 17:22:59');

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
-- Table structure for table `radioneuro`
--

CREATE TABLE `radioneuro` (
  `No` int(11) NOT NULL,
  `IdPasien` varchar(20) NOT NULL,
  `Fisiologi` varchar(20) DEFAULT NULL,
  `Patologis` varchar(20) DEFAULT NULL,
  `Motor` varchar(20) DEFAULT NULL,
  `Pusat` varchar(20) DEFAULT NULL,
  `Tepi` varchar(20) DEFAULT NULL,
  `Lidah` varchar(20) DEFAULT NULL,
  `Lainnya` varchar(20) DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `radioneuro`
--

INSERT INTO `radioneuro` (`No`, `IdPasien`, `Fisiologi`, `Patologis`, `Motor`, `Pusat`, `Tepi`, `Lidah`, `Lainnya`, `updated_at`) VALUES
(2, 'PAS1', 'Normal', 'Normal', 'Normal', 'Normal', 'Normal', 'Normal', 'Normal', '2018-06-22 08:52:06'),
(5, 'PAS1', 'tidak', 'tidak', 'tidak', 'tidak', 'tidak', 'tidak', 'cukup', '2018-06-22 08:54:01'),
(6, 'PAS1', 'berbeda', NULL, NULL, NULL, NULL, NULL, NULL, '2018-06-22 08:59:20');

-- --------------------------------------------------------

--
-- Table structure for table `radiothorax`
--

CREATE TABLE `radiothorax` (
  `No` int(11) NOT NULL,
  `IdPasien` varchar(10) NOT NULL,
  `Bentuk` varchar(20) DEFAULT '-',
  `Ekspansi` varchar(20) DEFAULT '-',
  `Palpasi` varchar(20) DEFAULT '-',
  `Perkusi` varchar(20) DEFAULT '-',
  `Auskultasi` varchar(20) DEFAULT '-',
  `Lain` varchar(20) DEFAULT '-',
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `radiothorax`
--

INSERT INTO `radiothorax` (`No`, `IdPasien`, `Bentuk`, `Ekspansi`, `Palpasi`, `Perkusi`, `Auskultasi`, `Lain`, `updated_at`) VALUES
(1, 'PAS1', 'keterangan1', NULL, NULL, NULL, NULL, NULL, '2018-06-20 14:27:24'),
(14, 'PAS1', 'entah', 'tidak', 'tahu', 'apa', 'apa', 'oke', '2018-06-21 13:30:03');

-- --------------------------------------------------------

--
-- Table structure for table `radiotht`
--

CREATE TABLE `radiotht` (
  `No` int(11) NOT NULL,
  `IdPasien` varchar(20) NOT NULL,
  `dtelinga` varchar(20) DEFAULT '-',
  `ltelinga` varchar(20) DEFAULT '-',
  `tympani` varchar(20) DEFAULT '-',
  `hidung` varchar(20) DEFAULT '-',
  `sinus` varchar(20) DEFAULT '-',
  `faring` varchar(20) DEFAULT '-',
  `tensil` varchar(20) DEFAULT '-',
  `lidah` varchar(20) DEFAULT '-',
  `gusi` varchar(20) DEFAULT '-',
  `gigi` varchar(20) DEFAULT '-',
  `karang` varchar(20) DEFAULT '-',
  `lubanggigi` varchar(20) DEFAULT '-',
  `tambalgigi` varchar(20) DEFAULT '-',
  `gigitanggal` varchar(20) DEFAULT '-',
  `gigimiring` varchar(20) DEFAULT '-',
  `radix` varchar(20) DEFAULT '-',
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `radiotht`
--

INSERT INTO `radiotht` (`No`, `IdPasien`, `dtelinga`, `ltelinga`, `tympani`, `hidung`, `sinus`, `faring`, `tensil`, `lidah`, `gusi`, `gigi`, `karang`, `lubanggigi`, `tambalgigi`, `gigitanggal`, `gigimiring`, `radix`, `updated_at`) VALUES
(7, 'PAS1', 'Normal', 'Normal', 'Normal', 'Normal', 'Normal', 'Normal', 'Normal', 'Normal', 'Normal', 'Normal', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', 'Ya', '2018-06-22 17:34:41');

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
  ADD PRIMARY KEY (`No`),
  ADD KEY `IdPasien` (`IdPasien`);

--
-- Indexes for table `laboratorium`
--
ALTER TABLE `laboratorium`
  ADD PRIMARY KEY (`idLab`),
  ADD KEY `fk_id_dokter` (`idDokter`),
  ADD KEY `fk_id_pasien` (`idPasien`);

--
-- Indexes for table `labsero`
--
ALTER TABLE `labsero`
  ADD PRIMARY KEY (`No`),
  ADD KEY `IdPasien` (`IdPasien`);

--
-- Indexes for table `laburin`
--
ALTER TABLE `laburin`
  ADD PRIMARY KEY (`No`),
  ADD KEY `IdPasien` (`IdPasien`);

--
-- Indexes for table `medicalanamnase`
--
ALTER TABLE `medicalanamnase`
  ADD PRIMARY KEY (`No`),
  ADD KEY `IdPasien` (`IdPasien`);

--
-- Indexes for table `medicalkeluarga`
--
ALTER TABLE `medicalkeluarga`
  ADD PRIMARY KEY (`No`),
  ADD KEY `IdPasien` (`IdPasien`);

--
-- Indexes for table `medicalpemeriksaan`
--
ALTER TABLE `medicalpemeriksaan`
  ADD PRIMARY KEY (`No`),
  ADD KEY `IdPasien` (`IdPasien`);

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
-- Indexes for table `radioabdomen`
--
ALTER TABLE `radioabdomen`
  ADD PRIMARY KEY (`No`),
  ADD KEY `IdPasien` (`IdPasien`);

--
-- Indexes for table `radioleher`
--
ALTER TABLE `radioleher`
  ADD PRIMARY KEY (`No`),
  ADD KEY `IdPasien` (`IdPasien`);

--
-- Indexes for table `radiologi`
--
ALTER TABLE `radiologi`
  ADD PRIMARY KEY (`idRadio`);

--
-- Indexes for table `radioneuro`
--
ALTER TABLE `radioneuro`
  ADD PRIMARY KEY (`No`),
  ADD KEY `IdPasien` (`IdPasien`);

--
-- Indexes for table `radiothorax`
--
ALTER TABLE `radiothorax`
  ADD PRIMARY KEY (`No`);

--
-- Indexes for table `radiotht`
--
ALTER TABLE `radiotht`
  ADD PRIMARY KEY (`No`);

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
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `labhema`
--
ALTER TABLE `labhema`
  MODIFY `No` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `labsero`
--
ALTER TABLE `labsero`
  MODIFY `No` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `laburin`
--
ALTER TABLE `laburin`
  MODIFY `No` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `medicalanamnase`
--
ALTER TABLE `medicalanamnase`
  MODIFY `No` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `medicalkeluarga`
--
ALTER TABLE `medicalkeluarga`
  MODIFY `No` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `medicalpemeriksaan`
--
ALTER TABLE `medicalpemeriksaan`
  MODIFY `No` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `radioabdomen`
--
ALTER TABLE `radioabdomen`
  MODIFY `No` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `radioleher`
--
ALTER TABLE `radioleher`
  MODIFY `No` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `radioneuro`
--
ALTER TABLE `radioneuro`
  MODIFY `No` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `radiothorax`
--
ALTER TABLE `radiothorax`
  MODIFY `No` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `radiotht`
--
ALTER TABLE `radiotht`
  MODIFY `No` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `labhema`
--
ALTER TABLE `labhema`
  ADD CONSTRAINT `labhema_ibfk_1` FOREIGN KEY (`IdPasien`) REFERENCES `pasien` (`idPasien`);

--
-- Constraints for table `laboratorium`
--
ALTER TABLE `laboratorium`
  ADD CONSTRAINT `fk_id_dokter` FOREIGN KEY (`idDokter`) REFERENCES `dokter` (`idDokter`),
  ADD CONSTRAINT `fk_id_pasien` FOREIGN KEY (`idPasien`) REFERENCES `pasien` (`idPasien`);

--
-- Constraints for table `labsero`
--
ALTER TABLE `labsero`
  ADD CONSTRAINT `labsero_ibfk_1` FOREIGN KEY (`IdPasien`) REFERENCES `pasien` (`idPasien`);

--
-- Constraints for table `laburin`
--
ALTER TABLE `laburin`
  ADD CONSTRAINT `laburin_ibfk_1` FOREIGN KEY (`IdPasien`) REFERENCES `pasien` (`idPasien`);

--
-- Constraints for table `medicalanamnase`
--
ALTER TABLE `medicalanamnase`
  ADD CONSTRAINT `medicalanamnase_ibfk_1` FOREIGN KEY (`IdPasien`) REFERENCES `pasien` (`idPasien`);

--
-- Constraints for table `medicalkeluarga`
--
ALTER TABLE `medicalkeluarga`
  ADD CONSTRAINT `medicalkeluarga_ibfk_1` FOREIGN KEY (`IdPasien`) REFERENCES `pasien` (`idPasien`);

--
-- Constraints for table `medicalpemeriksaan`
--
ALTER TABLE `medicalpemeriksaan`
  ADD CONSTRAINT `medicalpemeriksaan_ibfk_1` FOREIGN KEY (`IdPasien`) REFERENCES `pasien` (`idPasien`);

--
-- Constraints for table `obat`
--
ALTER TABLE `obat`
  ADD CONSTRAINT `fk_obat` FOREIGN KEY (`ID_kategori`) REFERENCES `kategori` (`ID_kategori`);

--
-- Constraints for table `radioabdomen`
--
ALTER TABLE `radioabdomen`
  ADD CONSTRAINT `radioabdomen_ibfk_1` FOREIGN KEY (`IdPasien`) REFERENCES `pasien` (`idPasien`);

--
-- Constraints for table `radioleher`
--
ALTER TABLE `radioleher`
  ADD CONSTRAINT `radioleher_ibfk_1` FOREIGN KEY (`IdPasien`) REFERENCES `pasien` (`idPasien`);

--
-- Constraints for table `radioneuro`
--
ALTER TABLE `radioneuro`
  ADD CONSTRAINT `radioneuro_ibfk_1` FOREIGN KEY (`IdPasien`) REFERENCES `pasien` (`idPasien`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
