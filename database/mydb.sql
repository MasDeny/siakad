-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 17, 2017 at 08:48 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
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
  `kartu_kendali` varchar(100) DEFAULT NULL,
  `bukti_spp_terakhir` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `berkasta`
--

CREATE TABLE `berkasta` (
  `idBerkasTA` int(11) NOT NULL,
  `beritaAcaraTA` varchar(45) DEFAULT NULL,
  `sampul` varchar(45) DEFAULT NULL,
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
  `NIM` varchar(9) NOT NULL
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
(1, 'rudi setiawan'),
(2, 'Heru Santoso'),
(3, 'Edi Sumanto');

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
  `idStatus_Sempro` int(11) NOT NULL
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
(1, '12354', 'taufik', 'koordinator'),
(2, '12345', 'rini', 'admin');

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
(1, 'E31150025', 'E31150025'),
(2, 'E31150089', 'E31150089'),
(3, 'E31150198', 'E31150198'),
(4, 'E31150678', 'E31150678');

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
  `id_dokumen` int(11) NOT NULL,
  `status` varchar(20) DEFAULT NULL,
  `status_mahasiswa` varchar(45) DEFAULT NULL,
  `keterangan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `nilai_sidang`
--

CREATE TABLE `nilai_sidang` (
  `idnilai_sidang` int(11) NOT NULL,
  `nilai_bimbingan_dp1` varchar(10) DEFAULT NULL,
  `nilai_bimbingan_dp2` varchar(10) DEFAULT NULL,
  `nilai_ujian` varchar(10) DEFAULT NULL,
  `nilai_total` varchar(10) DEFAULT NULL,
  `status_sidang_id_statussidang` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
(1, 'web'),
(2, 'android'),
(3, 'desktop');

-- --------------------------------------------------------

--
-- Table structure for table `status_sempro`
--

CREATE TABLE `status_sempro` (
  `idStatus_Sempro` int(11) NOT NULL,
  `mahasiswa_NIM` varchar(9) NOT NULL,
  `dokumen_kelengkapan_senpro_iddokumen_kelengkapan_senpro` int(11) NOT NULL,
  `status` int(11) DEFAULT '0',
  `bukti_revisi_sempro` varchar(200) DEFAULT NULL,
  `status_revisi` int(11) DEFAULT NULL
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
  `mahasiswa_NIM` varchar(9) NOT NULL,
  `berkas_TA_idberkas_TA` char(10) NOT NULL,
  `berkas_pkl_idberkas_pkl` char(10) NOT NULL,
  `riwayat_ipmhs_idriwayat_ipmhs` char(10) NOT NULL,
  `berkas_khs_idberkas_khs` char(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `berkas`
--
ALTER TABLE `berkas`
  ADD PRIMARY KEY (`id_berkas_kelengkapan`);

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
  ADD PRIMARY KEY (`idJadwal`,`idStatus_Sempro`),
  ADD KEY `fk_Jadwal_Status_Sempro1_idx` (`idStatus_Sempro`);

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
  ADD PRIMARY KEY (`NIM`,`id_dp1`,`id_rumpun`,`id_mhs`,`id_dokumen`),
  ADD KEY `fk_mahasiswa_login_mhs1_idx` (`id_mhs`),
  ADD KEY `fk_mahasiswa_dokumen_tugas_akhir1_idx` (`id_dokumen`),
  ADD KEY `fk_mahasiswa_rumpun1_idx` (`id_rumpun`),
  ADD KEY `fk_mahasiswa_dp11_idx` (`id_dp1`);

--
-- Indexes for table `nilai_sidang`
--
ALTER TABLE `nilai_sidang`
  ADD PRIMARY KEY (`idnilai_sidang`,`status_sidang_id_statussidang`),
  ADD KEY `fk_nilai_sidang_status_sidang1_idx` (`status_sidang_id_statussidang`);

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
  ADD PRIMARY KEY (`id_penguji`,`status_sidang_id_statussidang`) USING BTREE,
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
-- AUTO_INCREMENT for table `dokumen_kelengkapan_senpro`
--
ALTER TABLE `dokumen_kelengkapan_senpro`
  MODIFY `iddokumen_kelengkapan_senpro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `dokumen_tugas_akhir`
--
ALTER TABLE `dokumen_tugas_akhir`
  MODIFY `id_dokumen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `dp1`
--
ALTER TABLE `dp1`
  MODIFY `id_dp1` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `jadwal`
--
ALTER TABLE `jadwal`
  MODIFY `idJadwal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `login_karyawan`
--
ALTER TABLE `login_karyawan`
  MODIFY `id_karyawan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `login_mhs`
--
ALTER TABLE `login_mhs`
  MODIFY `id_mhs` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `nilai_sidang`
--
ALTER TABLE `nilai_sidang`
  MODIFY `idnilai_sidang` int(11) NOT NULL AUTO_INCREMENT;
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
  MODIFY `id_rumpun` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `status_sempro`
--
ALTER TABLE `status_sempro`
  MODIFY `idStatus_Sempro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `status_sidang`
--
ALTER TABLE `status_sidang`
  MODIFY `id_statussidang` int(11) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `jadwal`
--
ALTER TABLE `jadwal`
  ADD CONSTRAINT `fk_Jadwal_Status_Sempro1` FOREIGN KEY (`idStatus_Sempro`) REFERENCES `status_sempro` (`idStatus_Sempro`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD CONSTRAINT `fk_mahasiswa_dokumen_tugas_akhir1` FOREIGN KEY (`id_dokumen`) REFERENCES `dokumen_tugas_akhir` (`id_dokumen`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_mahasiswa_dp11` FOREIGN KEY (`id_dp1`) REFERENCES `dp1` (`id_dp1`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_mahasiswa_login_mhs1` FOREIGN KEY (`id_mhs`) REFERENCES `login_mhs` (`id_mhs`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_mahasiswa_rumpun1` FOREIGN KEY (`id_rumpun`) REFERENCES `rumpun` (`id_rumpun`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `nilai_sidang`
--
ALTER TABLE `nilai_sidang`
  ADD CONSTRAINT `fk_nilai_sidang_status_sidang1` FOREIGN KEY (`status_sidang_id_statussidang`) REFERENCES `status_sidang` (`id_statussidang`) ON DELETE NO ACTION ON UPDATE NO ACTION;

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
-- Constraints for table `status_sidang`
--
ALTER TABLE `status_sidang`
  ADD CONSTRAINT `fk_status_sidang_berkas1` FOREIGN KEY (`berkas_id_berkas_kelengkapan`) REFERENCES `berkas` (`id_berkas_kelengkapan`) ON DELETE NO ACTION ON UPDATE NO ACTION,
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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
