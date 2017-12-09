-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 09, 2017 at 03:38 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mydb`
--

-- --------------------------------------------------------

--
-- Table structure for table `berkas`
--

CREATE TABLE `berkas` (
  `id_berkas_kelengkapan` int(11) NOT NULL,
  `khs_semester_1` varchar(100) DEFAULT NULL,
  `khs_semester_2` varchar(100) DEFAULT NULL,
  `khs_semester_3` varchar(100) DEFAULT NULL,
  `khs_semester_4` varchar(100) DEFAULT NULL,
  `khs_semester_5` varchar(100) DEFAULT NULL,
  `laporan_proposal` varchar(100) DEFAULT NULL,
  `lembar_revisi` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `berkasta`
--

CREATE TABLE `berkasta` (
  `idBerkasTA` int(11) NOT NULL,
  `beritaAcaraTA` varchar(45) DEFAULT NULL,
  `sampul` varchar(45) DEFAULT NULL,
  `judul` varchar(45) DEFAULT NULL,
  `pengesahanTA` varchar(45) DEFAULT NULL,
  `persembahan` varchar(45) DEFAULT NULL,
  `motto` varchar(45) DEFAULT NULL,
  `pernyataanTA` varchar(45) DEFAULT NULL,
  `abstrak` varchar(45) DEFAULT NULL,
  `ringkasan` varchar(45) DEFAULT NULL,
  `prakata` varchar(45) DEFAULT NULL,
  `daftarIsi` varchar(45) DEFAULT NULL,
  `daftarTabel` varchar(45) DEFAULT NULL,
  `daftarGambar` varchar(45) DEFAULT NULL,
  `daftarLampiran` varchar(45) DEFAULT NULL,
  `bab1` varchar(45) DEFAULT NULL,
  `bab2` varchar(45) DEFAULT NULL,
  `bab3` varchar(45) DEFAULT NULL,
  `bab4` varchar(45) DEFAULT NULL,
  `bab5` varchar(45) DEFAULT NULL,
  `daftarPustaka` varchar(45) DEFAULT NULL,
  `lampiran` varchar(45) DEFAULT NULL,
  `statusBerkasTA` tinyint(1) DEFAULT NULL,
  `dibuat` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `mahasiswa_NIM` varchar(9) NOT NULL,
  `mahasiswa_id_mhs` int(11) NOT NULL,
  `mahasiswa_id_dokumen` int(11) NOT NULL,
  `login_karyawan_id_karyawan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `berkas_khs`
--

CREATE TABLE `berkas_khs` (
  `idberkas_khs` char(10) NOT NULL,
  `khs_semester1` varchar(45) DEFAULT NULL,
  `khs_semester2` varchar(45) DEFAULT NULL,
  `khs_semester3` varchar(45) DEFAULT NULL,
  `khs_semester4` varchar(45) DEFAULT NULL,
  `khs_semester5` varchar(45) DEFAULT NULL,
  `khs_semester6` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `berkas_khs`
--

INSERT INTO `berkas_khs` (`idberkas_khs`, `khs_semester1`, `khs_semester2`, `khs_semester3`, `khs_semester4`, `khs_semester5`, `khs_semester6`) VALUES
('BKS-001', 'DieCutting_SIMPANG_TIGA_16_April_2016_PATH13.', 'DieCutting_SIMPANG_TIGA_16_April_2016_PATH41.', 'DieCutting_SIMPANG_TIGA_16_April_2016_PATH42.', 'DieCutting_SIMPANG_TIGA_16_April_2016_PATH61.', 'DieCutting_SIMPANG_TIGA_16_April_2016_PATH62.', 'DieCutting_SIMPANG_TIGA_16_April_2016_PATH81.');

-- --------------------------------------------------------

--
-- Table structure for table `berkas_pkl`
--

CREATE TABLE `berkas_pkl` (
  `idberkas_pkl` char(10) NOT NULL,
  `judul_pkl` varchar(45) DEFAULT NULL,
  `nilai_pkl` varchar(45) DEFAULT NULL,
  `berita_acarapkl` varchar(45) DEFAULT NULL,
  `bukti_laporanpkl` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `berkas_pkl`
--

INSERT INTO `berkas_pkl` (`idberkas_pkl`, `judul_pkl`, `nilai_pkl`, `berita_acarapkl`, `bukti_laporanpkl`) VALUES
('PKL-001', 'fd', '90', 'DieCutting_SIMPANG_TIGA_16_April_2016_PATH82.', 'DieCutting_SIMPANG_TIGA_16_April_2016_PATH91.');

-- --------------------------------------------------------

--
-- Table structure for table `berkas_ta`
--

CREATE TABLE `berkas_ta` (
  `idberkas_TA` char(10) NOT NULL,
  `judul_TA` varchar(45) DEFAULT NULL,
  `nilai_TA` varchar(45) DEFAULT NULL,
  `berita_acaraTA` varchar(45) DEFAULT NULL,
  `bukti_laporanTA` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `berkas_ta`
--

INSERT INTO `berkas_ta` (`idberkas_TA`, `judul_TA`, `nilai_TA`, `berita_acaraTA`, `bukti_laporanTA`) VALUES
('BTA-001', 'fd', '44', 'DieCutting_SIMPANG_TIGA_16_April_2016_PATH111', 'DieCutting_SIMPANG_TIGA_16_April_2016_PATH101');

-- --------------------------------------------------------

--
-- Table structure for table `bukti_spp_terakhir`
--

CREATE TABLE `bukti_spp_terakhir` (
  `id_bukti` int(11) NOT NULL,
  `berkas_spp` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `dokumen_kelengkapan_senpro`
--

CREATE TABLE `dokumen_kelengkapan_senpro` (
  `iddokumen_kelengkapan_senpro` int(11) NOT NULL,
  `proposal_TA` varchar(45) DEFAULT NULL,
  `kartu_kendali` varchar(45) DEFAULT NULL,
  `kk_senpro_lalu` varchar(45) DEFAULT NULL,
  `makalah` varchar(45) DEFAULT NULL,
  `lembar_berita_acara` varchar(45) DEFAULT NULL,
  `lembar_pengusulan` varchar(45) DEFAULT NULL,
  `lembar_revisi` varchar(45) DEFAULT NULL,
  `lembar_hasil_senpro` varchar(45) DEFAULT NULL,
  `lembar_daftar_hadir` varchar(45) DEFAULT NULL,
  `lembar_pengesahan` varchar(45) DEFAULT NULL,
  `kartu_kontrak_DP` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `dokumen_tugas_akhir`
--

CREATE TABLE `dokumen_tugas_akhir` (
  `id_dokumen` int(11) NOT NULL,
  `berkas_dokumen` varchar(45) DEFAULT NULL,
  `verifikasi_tugas_akhir` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dokumen_tugas_akhir`
--

INSERT INTO `dokumen_tugas_akhir` (`id_dokumen`, `berkas_dokumen`, `verifikasi_tugas_akhir`) VALUES
(1, 'fda', 'fda'),
(2, 'fda', 'fdas');

-- --------------------------------------------------------

--
-- Table structure for table `dp1`
--

CREATE TABLE `dp1` (
  `id_dp1` int(3) NOT NULL,
  `nm_dosen` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dp1`
--

INSERT INTO `dp1` (`id_dp1`, `nm_dosen`) VALUES
(1, 'fdsaf'),
(2, 'fdafa');

-- --------------------------------------------------------

--
-- Table structure for table `jadwal`
--

CREATE TABLE `jadwal` (
  `idJadwal` int(11) NOT NULL,
  `jam` varchar(45) DEFAULT NULL,
  `tanggal` varchar(45) DEFAULT NULL,
  `ruangan` varchar(45) DEFAULT NULL,
  `panelis_1` varchar(45) DEFAULT NULL,
  `panelis_2` varchar(45) DEFAULT NULL,
  `panelis_3` varchar(45) DEFAULT NULL,
  `koordinator_NIP` int(11) DEFAULT NULL,
  `Status_Sempro_idStatus_Sempro` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `login_karyawan`
--

CREATE TABLE `login_karyawan` (
  `id_karyawan` int(11) NOT NULL,
  `NIK` varchar(45) DEFAULT NULL,
  `password` varchar(45) DEFAULT NULL,
  `status` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login_karyawan`
--

INSERT INTO `login_karyawan` (`id_karyawan`, `NIK`, `password`, `status`) VALUES
(1, '110110', '110110', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `login_mhs`
--

CREATE TABLE `login_mhs` (
  `id_mhs` int(11) NOT NULL,
  `NIM` varchar(10) DEFAULT NULL,
  `password` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login_mhs`
--

INSERT INTO `login_mhs` (`id_mhs`, `NIM`, `password`) VALUES
(1, 'e31150089', 'e31150089'),
(2, 'e31150025', 'e31150025'),
(3, 'E31150088', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `NIM` varchar(9) NOT NULL,
  `nama_mahasiswa` varchar(120) DEFAULT NULL,
  `program_studi` varchar(55) DEFAULT NULL,
  `id_dp1` int(3) NOT NULL,
  `dospem_2` varchar(120) DEFAULT NULL,
  `id_rumpun` int(3) NOT NULL,
  `judul_TA` varchar(120) DEFAULT NULL,
  `deskripsi` varchar(200) DEFAULT NULL,
  `id_mhs` int(11) NOT NULL,
  `id_dokumen` int(11) NOT NULL DEFAULT '0',
  `status` varchar(20) NOT NULL,
  `status_mahasiswa` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`NIM`, `nama_mahasiswa`, `program_studi`, `id_dp1`, `dospem_2`, `id_rumpun`, `judul_TA`, `deskripsi`, `id_mhs`, `id_dokumen`, `status`, `status_mahasiswa`) VALUES
('e31150025', 'askdjask', 'jaksdjaksdj', 1, 'jaskdjaskd', 1, 'jaksdjaskdj', 'ajksdjkdj', 2, 1, '1', '1'),
('E31150088', 'saldks', 'adlkasld', 1, 'asdj', 1, 'asd', 'dsdsd', 3, 1, '1', '1'),
('e31150089', 'dedi kahfi', 'mif', 1, 'fda', 1, 'dfas', 'fdada', 1, 1, '2', 'alumni');

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE `notification` (
  `id_notification` int(11) NOT NULL,
  `pesan` varchar(45) DEFAULT NULL,
  `timestamp` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `id_statussidang` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `penguji`
--

CREATE TABLE `penguji` (
  `id_penguji` int(11) NOT NULL,
  `ketua` varchar(120) DEFAULT NULL,
  `sekertaris` varchar(120) DEFAULT NULL,
  `anggota` varchar(120) DEFAULT NULL,
  `tanggal` varchar(45) DEFAULT NULL,
  `jam` varchar(45) DEFAULT 'current_time',
  `ruangan` int(1) DEFAULT NULL,
  `status_sidang_id_statussidang` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `riwayat_ipmhs`
--

CREATE TABLE `riwayat_ipmhs` (
  `idriwayat_ipmhs` char(10) NOT NULL,
  `ipsemester1` varchar(45) DEFAULT NULL,
  `ipsemester2` varchar(45) DEFAULT NULL,
  `ipsemester3` varchar(45) DEFAULT NULL,
  `ipsemester4` varchar(45) DEFAULT NULL,
  `ipsemester5` varchar(45) DEFAULT NULL,
  `ipsemester6` varchar(45) DEFAULT NULL,
  `ipk` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `riwayat_ipmhs`
--

INSERT INTO `riwayat_ipmhs` (`idriwayat_ipmhs`, `ipsemester1`, `ipsemester2`, `ipsemester3`, `ipsemester4`, `ipsemester5`, `ipsemester6`, `ipk`) VALUES
('KHS-001', '3', '3', '3', '3', '3', '3', '3');

-- --------------------------------------------------------

--
-- Table structure for table `rumpun`
--

CREATE TABLE `rumpun` (
  `id_rumpun` int(3) NOT NULL,
  `nm_rumpun` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rumpun`
--

INSERT INTO `rumpun` (`id_rumpun`, `nm_rumpun`) VALUES
(1, 'fdas'),
(2, 'dfafad');

-- --------------------------------------------------------

--
-- Table structure for table `status_sempro`
--

CREATE TABLE `status_sempro` (
  `idStatus_Sempro` int(11) NOT NULL,
  `mahasiswa_NIM` varchar(9) NOT NULL,
  `dokumen_kelengkapan_senpro_iddokumen_kelengkapan_senpro` int(11) NOT NULL,
  `status` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `status_sidang`
--

CREATE TABLE `status_sidang` (
  `id_statussidang` int(11) NOT NULL,
  `bukti_spp_terakhir_id_bukti` int(11) NOT NULL,
  `mahasiswa_NIM` varchar(9) NOT NULL,
  `create_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `status` int(1) DEFAULT '0',
  `berkas_id_berkas_kelengkapan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tracer_study`
--

CREATE TABLE `tracer_study` (
  `id_Tracer` int(11) NOT NULL,
  `Time_Stamp` datetime DEFAULT NULL,
  `Jenis_Kelamin` varchar(10) DEFAULT NULL,
  `Angkatan` int(5) DEFAULT NULL,
  `Alamat_Sekarang` varchar(100) DEFAULT NULL,
  `No_Telepon` varchar(20) DEFAULT NULL,
  `Status_Alumni` varchar(45) DEFAULT NULL,
  `Masa_Tunggu` varchar(45) DEFAULT NULL,
  `Tingkat_Studi` varchar(30) DEFAULT NULL,
  `Jenis_Usaha` varchar(50) DEFAULT NULL,
  `Jabatan` varchar(50) DEFAULT NULL,
  `Perusahaan` varchar(100) DEFAULT NULL,
  `Gaji` double DEFAULT NULL,
  `Kesesuaian_Bidang` varchar(20) DEFAULT NULL,
  `Saran_dan_Masukan` text,
  `mahasiswa_NIM` varchar(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `yudisium`
--

CREATE TABLE `yudisium` (
  `idyudisium` char(10) NOT NULL,
  `angkatan` varchar(45) DEFAULT NULL,
  `srt_bebastanggungan` varchar(45) DEFAULT NULL,
  `konsep_daftarnilai` varchar(45) DEFAULT NULL,
  `status` varchar(20) NOT NULL,
  `mahasiswa_NIM` varchar(9) NOT NULL,
  `berkas_TA_idberkas_TA` char(10) NOT NULL,
  `berkas_pkl_idberkas_pkl` char(10) NOT NULL,
  `riwayat_ipmhs_idriwayat_ipmhs` char(10) NOT NULL,
  `berkas_khs_idberkas_khs` char(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `yudisium`
--

INSERT INTO `yudisium` (`idyudisium`, `angkatan`, `srt_bebastanggungan`, `konsep_daftarnilai`, `status`, `mahasiswa_NIM`, `berkas_TA_idberkas_TA`, `berkas_pkl_idberkas_pkl`, `riwayat_ipmhs_idriwayat_ipmhs`, `berkas_khs_idberkas_khs`) VALUES
('STD-001', '2015', 'DieCutting_SIMPANG_TIGA_16_April_2016_PATH102', 'DieCutting_SIMPANG_TIGA_16_April_2016_PATH83.', '', 'e31150089', 'BTA-001', 'PKL-001', 'KHS-001', 'BKS-001');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `berkas`
--
ALTER TABLE `berkas`
  ADD PRIMARY KEY (`id_berkas_kelengkapan`);

--
-- Indexes for table `berkasta`
--
ALTER TABLE `berkasta`
  ADD PRIMARY KEY (`idBerkasTA`,`mahasiswa_NIM`,`mahasiswa_id_mhs`,`mahasiswa_id_dokumen`,`login_karyawan_id_karyawan`),
  ADD KEY `fk_berkasTA_mahasiswa1_idx` (`mahasiswa_NIM`,`mahasiswa_id_mhs`,`mahasiswa_id_dokumen`),
  ADD KEY `fk_berkasTA_login_karyawan1_idx` (`login_karyawan_id_karyawan`);

--
-- Indexes for table `berkas_khs`
--
ALTER TABLE `berkas_khs`
  ADD PRIMARY KEY (`idberkas_khs`);

--
-- Indexes for table `berkas_pkl`
--
ALTER TABLE `berkas_pkl`
  ADD PRIMARY KEY (`idberkas_pkl`);

--
-- Indexes for table `berkas_ta`
--
ALTER TABLE `berkas_ta`
  ADD PRIMARY KEY (`idberkas_TA`);

--
-- Indexes for table `bukti_spp_terakhir`
--
ALTER TABLE `bukti_spp_terakhir`
  ADD PRIMARY KEY (`id_bukti`);

--
-- Indexes for table `dokumen_kelengkapan_senpro`
--
ALTER TABLE `dokumen_kelengkapan_senpro`
  ADD PRIMARY KEY (`iddokumen_kelengkapan_senpro`);

--
-- Indexes for table `dokumen_tugas_akhir`
--
ALTER TABLE `dokumen_tugas_akhir`
  ADD PRIMARY KEY (`id_dokumen`);

--
-- Indexes for table `dp1`
--
ALTER TABLE `dp1`
  ADD PRIMARY KEY (`id_dp1`);

--
-- Indexes for table `jadwal`
--
ALTER TABLE `jadwal`
  ADD PRIMARY KEY (`idJadwal`,`Status_Sempro_idStatus_Sempro`),
  ADD KEY `fk_Jadwal_Status_Sempro1_idx` (`Status_Sempro_idStatus_Sempro`);

--
-- Indexes for table `login_karyawan`
--
ALTER TABLE `login_karyawan`
  ADD PRIMARY KEY (`id_karyawan`);

--
-- Indexes for table `login_mhs`
--
ALTER TABLE `login_mhs`
  ADD PRIMARY KEY (`id_mhs`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`NIM`,`id_mhs`,`id_dokumen`,`id_rumpun`) USING BTREE,
  ADD KEY `fk_mahasiswa_login_mhs1_idx` (`id_mhs`),
  ADD KEY `fk_mahasiswa_dokumen_tugas_akhir1_idx` (`id_dokumen`),
  ADD KEY `fk_mahasiswa_rumpun1_idx` (`id_rumpun`),
  ADD KEY `fk_mahasiswa_dp11_idx` (`id_dp1`),
  ADD KEY `id_rumpun` (`id_rumpun`);

--
-- Indexes for table `notification`
--
ALTER TABLE `notification`
  ADD PRIMARY KEY (`id_notification`,`id_statussidang`),
  ADD KEY `fk_notification_status_sidang1_idx` (`id_statussidang`);

--
-- Indexes for table `penguji`
--
ALTER TABLE `penguji`
  ADD PRIMARY KEY (`id_penguji`,`status_sidang_id_statussidang`),
  ADD KEY `fk_penguji_status_sidang1_idx` (`status_sidang_id_statussidang`);

--
-- Indexes for table `riwayat_ipmhs`
--
ALTER TABLE `riwayat_ipmhs`
  ADD PRIMARY KEY (`idriwayat_ipmhs`);

--
-- Indexes for table `rumpun`
--
ALTER TABLE `rumpun`
  ADD PRIMARY KEY (`id_rumpun`);

--
-- Indexes for table `status_sempro`
--
ALTER TABLE `status_sempro`
  ADD PRIMARY KEY (`idStatus_Sempro`,`mahasiswa_NIM`,`dokumen_kelengkapan_senpro_iddokumen_kelengkapan_senpro`),
  ADD KEY `fk_Status_Sempro_mahasiswa1_idx` (`mahasiswa_NIM`),
  ADD KEY `fk_Status_Sempro_dokumen_kelengkapan_senpro1_idx` (`dokumen_kelengkapan_senpro_iddokumen_kelengkapan_senpro`);

--
-- Indexes for table `status_sidang`
--
ALTER TABLE `status_sidang`
  ADD PRIMARY KEY (`id_statussidang`,`bukti_spp_terakhir_id_bukti`,`mahasiswa_NIM`,`berkas_id_berkas_kelengkapan`),
  ADD KEY `fk_status_sidang_bukti_spp_terakhir1_idx` (`bukti_spp_terakhir_id_bukti`),
  ADD KEY `fk_status_sidang_mahasiswa1_idx` (`mahasiswa_NIM`),
  ADD KEY `fk_status_sidang_berkas1_idx` (`berkas_id_berkas_kelengkapan`);

--
-- Indexes for table `tracer_study`
--
ALTER TABLE `tracer_study`
  ADD PRIMARY KEY (`id_Tracer`,`mahasiswa_NIM`),
  ADD UNIQUE KEY `Alamat_Sekarang_UNIQUE` (`Alamat_Sekarang`),
  ADD KEY `fk_Tracer Study_mahasiswa1_idx` (`mahasiswa_NIM`);

--
-- Indexes for table `yudisium`
--
ALTER TABLE `yudisium`
  ADD PRIMARY KEY (`idyudisium`,`mahasiswa_NIM`,`berkas_TA_idberkas_TA`,`berkas_pkl_idberkas_pkl`,`riwayat_ipmhs_idriwayat_ipmhs`,`berkas_khs_idberkas_khs`),
  ADD KEY `fk_yudisium_mahasiswa1_idx` (`mahasiswa_NIM`),
  ADD KEY `fk_yudisium_berkas_TA1_idx` (`berkas_TA_idberkas_TA`),
  ADD KEY `fk_yudisium_berkas_pkl1_idx` (`berkas_pkl_idberkas_pkl`),
  ADD KEY `fk_yudisium_riwayat_ipmhs1_idx` (`riwayat_ipmhs_idriwayat_ipmhs`),
  ADD KEY `fk_yudisium_berkas_khs1_idx` (`berkas_khs_idberkas_khs`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `berkas`
--
ALTER TABLE `berkas`
  MODIFY `id_berkas_kelengkapan` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `bukti_spp_terakhir`
--
ALTER TABLE `bukti_spp_terakhir`
  MODIFY `id_bukti` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `dokumen_kelengkapan_senpro`
--
ALTER TABLE `dokumen_kelengkapan_senpro`
  MODIFY `iddokumen_kelengkapan_senpro` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `dokumen_tugas_akhir`
--
ALTER TABLE `dokumen_tugas_akhir`
  MODIFY `id_dokumen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `dp1`
--
ALTER TABLE `dp1`
  MODIFY `id_dp1` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `jadwal`
--
ALTER TABLE `jadwal`
  MODIFY `idJadwal` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `login_karyawan`
--
ALTER TABLE `login_karyawan`
  MODIFY `id_karyawan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `login_mhs`
--
ALTER TABLE `login_mhs`
  MODIFY `id_mhs` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `notification`
--
ALTER TABLE `notification`
  MODIFY `id_notification` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `penguji`
--
ALTER TABLE `penguji`
  MODIFY `id_penguji` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `rumpun`
--
ALTER TABLE `rumpun`
  MODIFY `id_rumpun` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `status_sempro`
--
ALTER TABLE `status_sempro`
  MODIFY `idStatus_Sempro` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `status_sidang`
--
ALTER TABLE `status_sidang`
  MODIFY `id_statussidang` int(11) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `berkasta`
--
ALTER TABLE `berkasta`
  ADD CONSTRAINT `fk_berkasTA_login_karyawan1` FOREIGN KEY (`login_karyawan_id_karyawan`) REFERENCES `login_karyawan` (`id_karyawan`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_berkasTA_mahasiswa1` FOREIGN KEY (`mahasiswa_NIM`,`mahasiswa_id_mhs`,`mahasiswa_id_dokumen`) REFERENCES `mahasiswa` (`NIM`, `id_mhs`, `id_dokumen`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `jadwal`
--
ALTER TABLE `jadwal`
  ADD CONSTRAINT `fk_Jadwal_Status_Sempro1` FOREIGN KEY (`Status_Sempro_idStatus_Sempro`) REFERENCES `status_sempro` (`idStatus_Sempro`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `notification`
--
ALTER TABLE `notification`
  ADD CONSTRAINT `fk_notification_status_sidang1` FOREIGN KEY (`id_statussidang`) REFERENCES `status_sidang` (`id_statussidang`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `penguji`
--
ALTER TABLE `penguji`
  ADD CONSTRAINT `fk_penguji_status_sidang1` FOREIGN KEY (`status_sidang_id_statussidang`) REFERENCES `status_sidang` (`id_statussidang`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `status_sempro`
--
ALTER TABLE `status_sempro`
  ADD CONSTRAINT `fk_Status_Sempro_dokumen_kelengkapan_senpro1` FOREIGN KEY (`dokumen_kelengkapan_senpro_iddokumen_kelengkapan_senpro`) REFERENCES `dokumen_kelengkapan_senpro` (`iddokumen_kelengkapan_senpro`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Status_Sempro_mahasiswa1` FOREIGN KEY (`mahasiswa_NIM`) REFERENCES `mahasiswa` (`NIM`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `status_sidang`
--
ALTER TABLE `status_sidang`
  ADD CONSTRAINT `fk_status_sidang_berkas1` FOREIGN KEY (`berkas_id_berkas_kelengkapan`) REFERENCES `berkas` (`id_berkas_kelengkapan`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_status_sidang_bukti_spp_terakhir1` FOREIGN KEY (`bukti_spp_terakhir_id_bukti`) REFERENCES `bukti_spp_terakhir` (`id_bukti`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_status_sidang_mahasiswa1` FOREIGN KEY (`mahasiswa_NIM`) REFERENCES `mahasiswa` (`NIM`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `tracer_study`
--
ALTER TABLE `tracer_study`
  ADD CONSTRAINT `fk_Tracer Study_mahasiswa1` FOREIGN KEY (`mahasiswa_NIM`) REFERENCES `mahasiswa` (`NIM`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `yudisium`
--
ALTER TABLE `yudisium`
  ADD CONSTRAINT `fk_yudisium_berkas_TA1` FOREIGN KEY (`berkas_TA_idberkas_TA`) REFERENCES `berkas_ta` (`idberkas_TA`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_yudisium_berkas_khs1` FOREIGN KEY (`berkas_khs_idberkas_khs`) REFERENCES `berkas_khs` (`idberkas_khs`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_yudisium_berkas_pkl1` FOREIGN KEY (`berkas_pkl_idberkas_pkl`) REFERENCES `berkas_pkl` (`idberkas_pkl`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_yudisium_mahasiswa1` FOREIGN KEY (`mahasiswa_NIM`) REFERENCES `mahasiswa` (`NIM`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_yudisium_riwayat_ipmhs1` FOREIGN KEY (`riwayat_ipmhs_idriwayat_ipmhs`) REFERENCES `riwayat_ipmhs` (`idriwayat_ipmhs`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
