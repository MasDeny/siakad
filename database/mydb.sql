-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `mydb` DEFAULT CHARACTER SET utf8 ;
USE `mydb` ;

-- -----------------------------------------------------
-- Table `mydb`.`login_karyawan`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`login_karyawan` (
  `id_karyawan` INT(11) NOT NULL AUTO_INCREMENT,
  `NIK` VARCHAR(45) NULL DEFAULT NULL,
  `password` VARCHAR(45) NULL DEFAULT NULL,
  `status` VARCHAR(45) NULL DEFAULT NULL,
  PRIMARY KEY (`id_karyawan`))
ENGINE = InnoDB
AUTO_INCREMENT = 3
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `mydb`.`Jadwal`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`Jadwal` (
  `idJadwal` INT(11) NOT NULL,
  `jam` VARCHAR(45) NULL DEFAULT NULL,
  `tanggal` VARCHAR(45) NULL DEFAULT NULL,
  `ruangan` VARCHAR(45) NULL DEFAULT NULL,
  `panelis_1` VARCHAR(45) NULL DEFAULT NULL,
  `panelis_2` VARCHAR(45) NULL DEFAULT NULL,
  `panelis_3` VARCHAR(45) NULL DEFAULT NULL,
  `koordinator_NIP` INT(11) NULL DEFAULT NULL,
  `login_karyawan_id_karyawan` INT(11) NOT NULL,
  PRIMARY KEY (`idJadwal`, `login_karyawan_id_karyawan`),
  INDEX `fk_Jadwal_login_karyawan1_idx` (`login_karyawan_id_karyawan` ASC),
  CONSTRAINT `fk_Jadwal_login_karyawan1`
    FOREIGN KEY (`login_karyawan_id_karyawan`)
    REFERENCES `mydb`.`login_karyawan` (`id_karyawan`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `mydb`.`dokumen_kelengkapan_senpro`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`dokumen_kelengkapan_senpro` (
  `iddokumen_kelengkapan_senpro` INT(11) NOT NULL,
  `proposal_TA` VARCHAR(45) NULL DEFAULT NULL,
  `kartu_kendali` VARCHAR(45) NULL DEFAULT NULL,
  `kk_senpro_lalu` VARCHAR(45) NULL DEFAULT NULL,
  `makalah` VARCHAR(45) NULL DEFAULT NULL,
  `lembar_berita_acara` VARCHAR(45) NULL DEFAULT NULL,
  `lembar_pengusulan` VARCHAR(45) NULL DEFAULT NULL,
  `lembar_revisi` VARCHAR(45) NULL DEFAULT NULL,
  `lembar_hasil_senpro` VARCHAR(45) NULL DEFAULT NULL,
  `lembar_daftar_hadir` VARCHAR(45) NULL DEFAULT NULL,
  `lembar_pengesahan` VARCHAR(45) NULL DEFAULT NULL,
  `kartu_kontrak_DP` VARCHAR(45) NULL DEFAULT NULL,
  PRIMARY KEY (`iddokumen_kelengkapan_senpro`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `mydb`.`dokumen_tugas_akhir`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`dokumen_tugas_akhir` (
  `id_dokumen` INT(11) NOT NULL,
  `berkas_dokumen` VARCHAR(45) NULL DEFAULT NULL,
  `verifikasi_tugas_akhir` VARCHAR(45) NULL DEFAULT NULL,
  PRIMARY KEY (`id_dokumen`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `mydb`.`login_mhs`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`login_mhs` (
  `id_mhs` INT(11) NOT NULL AUTO_INCREMENT,
  `NIM` VARCHAR(10) NULL DEFAULT NULL,
  `password` VARCHAR(45) NULL DEFAULT NULL,
  PRIMARY KEY (`id_mhs`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `mydb`.`mahasiswa`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`mahasiswa` (
  `NIM` VARCHAR(9) NOT NULL,
  `id_mhs` INT(11) NOT NULL,
  `id_dokumen` INT(11) NOT NULL,
  `nama_mahasiswa` VARCHAR(120) NULL DEFAULT NULL,
  `program_studi` VARCHAR(55) NULL DEFAULT NULL,
  `dospem_1` VARCHAR(120) NULL DEFAULT NULL,
  `dospem_2` VARCHAR(120) NULL DEFAULT NULL,
  `judul_TA` VARCHAR(120) NULL DEFAULT NULL,
  `deskripsi` VARCHAR(200) NULL DEFAULT NULL,
  `rumpun_matkul` VARCHAR(45) NULL DEFAULT NULL,
  `refrensi` VARCHAR(45) NULL DEFAULT NULL,
  PRIMARY KEY (`NIM`, `id_mhs`, `id_dokumen`),
  INDEX `fk_mahasiswa_login_mhs1_idx` (`id_mhs` ASC),
  INDEX `fk_mahasiswa_dokumen_tugas_akhir1_idx` (`id_dokumen` ASC),
  CONSTRAINT `fk_mahasiswa_dokumen_tugas_akhir1`
    FOREIGN KEY (`id_dokumen`)
    REFERENCES `mydb`.`dokumen_tugas_akhir` (`id_dokumen`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_mahasiswa_login_mhs1`
    FOREIGN KEY (`id_mhs`)
    REFERENCES `mydb`.`login_mhs` (`id_mhs`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `mydb`.`Status_Sempro`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`Status_Sempro` (
  `idStatus_Sempro` INT(11) NOT NULL,
  `Jadwal_idJadwal` INT(11) NOT NULL,
  `login_karyawan_id_karyawan` INT(11) NOT NULL,
  `mahasiswa_NIM` VARCHAR(9) NOT NULL,
  `dokumen_kelengkapan_senpro_iddokumen_kelengkapan_senpro` INT(11) NOT NULL,
  PRIMARY KEY (`idStatus_Sempro`, `Jadwal_idJadwal`, `login_karyawan_id_karyawan`, `mahasiswa_NIM`, `dokumen_kelengkapan_senpro_iddokumen_kelengkapan_senpro`),
  INDEX `fk_Status_Sempro_Jadwal1_idx` (`Jadwal_idJadwal` ASC),
  INDEX `fk_Status_Sempro_login_karyawan1_idx` (`login_karyawan_id_karyawan` ASC),
  INDEX `fk_Status_Sempro_mahasiswa1_idx` (`mahasiswa_NIM` ASC),
  INDEX `fk_Status_Sempro_dokumen_kelengkapan_senpro1_idx` (`dokumen_kelengkapan_senpro_iddokumen_kelengkapan_senpro` ASC),
  CONSTRAINT `fk_Status_Sempro_Jadwal1`
    FOREIGN KEY (`Jadwal_idJadwal`)
    REFERENCES `mydb`.`Jadwal` (`idJadwal`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Status_Sempro_dokumen_kelengkapan_senpro1`
    FOREIGN KEY (`dokumen_kelengkapan_senpro_iddokumen_kelengkapan_senpro`)
    REFERENCES `mydb`.`dokumen_kelengkapan_senpro` (`iddokumen_kelengkapan_senpro`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Status_Sempro_login_karyawan1`
    FOREIGN KEY (`login_karyawan_id_karyawan`)
    REFERENCES `mydb`.`login_karyawan` (`id_karyawan`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Status_Sempro_mahasiswa1`
    FOREIGN KEY (`mahasiswa_NIM`)
    REFERENCES `mydb`.`mahasiswa` (`NIM`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `mydb`.`Tracer Study`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`Tracer Study` (
  `id_Tracer` INT(11) NOT NULL,
  `Time_Stamp` DATETIME NULL DEFAULT NULL,
  `Jenis_Kelamin` VARCHAR(10) NULL DEFAULT NULL,
  `Angkatan` INT(5) NULL DEFAULT NULL,
  `Alamat_Sekarang` TEXT NULL DEFAULT NULL,
  `No_Telepon` VARCHAR(20) NULL DEFAULT NULL,
  `Status_Alumni` VARCHAR(45) NULL DEFAULT NULL,
  `Masa_Tunggu` VARCHAR(45) NULL DEFAULT NULL,
  `Tingkat_Studi` VARCHAR(30) NULL DEFAULT NULL,
  `Jenis_Usaha` VARCHAR(50) NULL DEFAULT NULL,
  `Jabatan` VARCHAR(50) NULL DEFAULT NULL,
  `Perusahaan` VARCHAR(100) NULL DEFAULT NULL,
  `Gaji` DOUBLE NULL DEFAULT NULL,
  `Kesesuaian_Bidang` INT(2) NULL DEFAULT NULL,
  `Saran_dan_Masukan` TEXT NULL DEFAULT NULL,
  `mahasiswa_NIM` VARCHAR(9) NOT NULL,
  PRIMARY KEY (`id_Tracer`, `mahasiswa_NIM`),
  INDEX `fk_Tracer Study_mahasiswa1_idx` (`mahasiswa_NIM` ASC),
  CONSTRAINT `fk_Tracer Study_mahasiswa1`
    FOREIGN KEY (`mahasiswa_NIM`)
    REFERENCES `mydb`.`mahasiswa` (`NIM`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `mydb`.`berkasTA`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`berkasTA` (
  `idBerkasTA` INT(11) NOT NULL,
  `beritaAcaraTA` VARCHAR(45) NULL DEFAULT NULL,
  `sampul` VARCHAR(45) NULL DEFAULT NULL,
  `judul` VARCHAR(45) NULL DEFAULT NULL,
  `pengesahanTA` VARCHAR(45) NULL DEFAULT NULL,
  `persembahan` VARCHAR(45) NULL DEFAULT NULL,
  `motto` VARCHAR(45) NULL DEFAULT NULL,
  `pernyataanTA` VARCHAR(45) NULL DEFAULT NULL,
  `abstrak` VARCHAR(45) NULL DEFAULT NULL,
  `ringkasan` VARCHAR(45) NULL DEFAULT NULL,
  `prakata` VARCHAR(45) NULL DEFAULT NULL,
  `daftarIsi` VARCHAR(45) NULL DEFAULT NULL,
  `daftarTabel` VARCHAR(45) NULL DEFAULT NULL,
  `daftarGambar` VARCHAR(45) NULL DEFAULT NULL,
  `daftarLampiran` VARCHAR(45) NULL DEFAULT NULL,
  `bab1` VARCHAR(45) NULL DEFAULT NULL,
  `bab2` VARCHAR(45) NULL DEFAULT NULL,
  `bab3` VARCHAR(45) NULL DEFAULT NULL,
  `bab4` VARCHAR(45) NULL DEFAULT NULL,
  `bab5` VARCHAR(45) NULL DEFAULT NULL,
  `daftarPustaka` VARCHAR(45) NULL DEFAULT NULL,
  `lampiran` VARCHAR(45) NULL DEFAULT NULL,
  `statusBerkasTA` TINYINT(1) NULL DEFAULT NULL,
  `dibuat` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `mahasiswa_NIM` VARCHAR(9) NOT NULL,
  `mahasiswa_id_mhs` INT(11) NOT NULL,
  `mahasiswa_id_dokumen` INT(11) NOT NULL,
  `login_karyawan_id_karyawan` INT(11) NOT NULL,
  PRIMARY KEY (`idBerkasTA`, `mahasiswa_NIM`, `mahasiswa_id_mhs`, `mahasiswa_id_dokumen`, `login_karyawan_id_karyawan`),
  INDEX `fk_berkasTA_mahasiswa1_idx` (`mahasiswa_NIM` ASC, `mahasiswa_id_mhs` ASC, `mahasiswa_id_dokumen` ASC),
  INDEX `fk_berkasTA_login_karyawan1_idx` (`login_karyawan_id_karyawan` ASC),
  CONSTRAINT `fk_berkasTA_login_karyawan1`
    FOREIGN KEY (`login_karyawan_id_karyawan`)
    REFERENCES `mydb`.`login_karyawan` (`id_karyawan`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_berkasTA_mahasiswa1`
    FOREIGN KEY (`mahasiswa_NIM` , `mahasiswa_id_mhs` , `mahasiswa_id_dokumen`)
    REFERENCES `mydb`.`mahasiswa` (`NIM` , `id_mhs` , `id_dokumen`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `mydb`.`berkas_TA`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`berkas_TA` (
  `idberkas_TA` INT(11) NOT NULL,
  `judul_TA` VARCHAR(45) NULL DEFAULT NULL,
  `nilai_TA` VARCHAR(45) NULL DEFAULT NULL,
  `berita_acaraTA` VARCHAR(45) NULL DEFAULT NULL,
  `bukti_laporanTA` VARCHAR(45) NULL DEFAULT NULL,
  PRIMARY KEY (`idberkas_TA`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `mydb`.`berkas_khs`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`berkas_khs` (
  `idberkas_khs` INT(11) NOT NULL,
  `khs_semester1` VARCHAR(45) NULL DEFAULT NULL,
  `khs_semester2` VARCHAR(45) NULL DEFAULT NULL,
  `khs_semester3` VARCHAR(45) NULL DEFAULT NULL,
  `khs_semester4` VARCHAR(45) NULL DEFAULT NULL,
  `khs_semester5` VARCHAR(45) NULL DEFAULT NULL,
  `khs_semester6` VARCHAR(45) NULL DEFAULT NULL,
  PRIMARY KEY (`idberkas_khs`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `mydb`.`berkas_pkl`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`berkas_pkl` (
  `idberkas_pkl` INT(11) NOT NULL,
  `judul_pkl` VARCHAR(45) NULL DEFAULT NULL,
  `nilai_pkl` VARCHAR(45) NULL DEFAULT NULL,
  `berita_acarapkl` VARCHAR(45) NULL DEFAULT NULL,
  `bukti_laporanpkl` VARCHAR(45) NULL DEFAULT NULL,
  PRIMARY KEY (`idberkas_pkl`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `mydb`.`bukti_spp_terakhir`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`bukti_spp_terakhir` (
  `id_bukti` INT(11) NOT NULL AUTO_INCREMENT,
  `berkas_spp` VARCHAR(100) NULL DEFAULT NULL,
  PRIMARY KEY (`id_bukti`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `mydb`.`laporanproposal`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`laporanproposal` (
  `id_laporanproposal` INT(11) NOT NULL AUTO_INCREMENT,
  `laporan_proposal` VARCHAR(100) NULL DEFAULT NULL,
  PRIMARY KEY (`id_laporanproposal`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `mydb`.`lembar_revisi`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`lembar_revisi` (
  `idlembar_revisi` INT(11) NOT NULL AUTO_INCREMENT,
  `lembar_revisi` VARCHAR(100) NULL DEFAULT NULL,
  PRIMARY KEY (`idlembar_revisi`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `mydb`.`notification`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`notification` (
  `id_notification` INT(11) NOT NULL AUTO_INCREMENT,
  `pesan` VARCHAR(45) NULL DEFAULT NULL,
  `timestamp` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_notification`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `mydb`.`penguji`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`penguji` (
  `id_penguji` INT(11) NOT NULL AUTO_INCREMENT,
  `ketua` VARCHAR(120) NULL DEFAULT NULL,
  `sekertaris` VARCHAR(120) NULL DEFAULT NULL,
  `anggota` VARCHAR(120) NULL DEFAULT NULL,
  `tanggal` VARCHAR(45) NULL DEFAULT NULL,
  `jam` VARCHAR(45) NULL DEFAULT 'current_time',
  `ruangan` INT(1) NULL DEFAULT NULL,
  `login_karyawan_id_karyawan` INT(11) NOT NULL,
  PRIMARY KEY (`id_penguji`, `login_karyawan_id_karyawan`),
  INDEX `fk_penguji_login_karyawan1_idx` (`login_karyawan_id_karyawan` ASC),
  CONSTRAINT `fk_penguji_login_karyawan1`
    FOREIGN KEY (`login_karyawan_id_karyawan`)
    REFERENCES `mydb`.`login_karyawan` (`id_karyawan`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `mydb`.`status_sidang`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`status_sidang` (
  `id_statussidang` INT(11) NOT NULL AUTO_INCREMENT,
  `login_karyawan_id_karyawan` INT(11) NOT NULL,
  `penguji_id_penguji` INT(11) NOT NULL,
  `notification_id_notification` INT(11) NOT NULL,
  `bukti_spp_terakhir_id_bukti` INT(11) NOT NULL,
  `lembar_revisi_idlembar_revisi` INT(11) NOT NULL,
  `mahasiswa_NIM` VARCHAR(9) NOT NULL,
  `mahasiswa_id_mhs` INT(11) NOT NULL,
  `mahasiswa_id_dokumen` INT(11) NOT NULL,
  `laporanproposal_id_laporanproposal` INT(11) NOT NULL,
  `create_at` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP,
  `status` INT(1) NULL DEFAULT '0',
  PRIMARY KEY (`id_statussidang`, `login_karyawan_id_karyawan`, `penguji_id_penguji`, `notification_id_notification`, `bukti_spp_terakhir_id_bukti`, `lembar_revisi_idlembar_revisi`, `mahasiswa_NIM`, `mahasiswa_id_mhs`, `mahasiswa_id_dokumen`, `laporanproposal_id_laporanproposal`),
  INDEX `fk_status_sidang_login_karyawan1_idx` (`login_karyawan_id_karyawan` ASC),
  INDEX `fk_status_sidang_notification1_idx` (`notification_id_notification` ASC),
  INDEX `fk_status_sidang_bukti_spp_terakhir1_idx` (`bukti_spp_terakhir_id_bukti` ASC),
  INDEX `fk_status_sidang_lembar_revisi1_idx` (`lembar_revisi_idlembar_revisi` ASC),
  INDEX `fk_status_sidang_mahasiswa1_idx` (`mahasiswa_NIM` ASC, `mahasiswa_id_mhs` ASC, `mahasiswa_id_dokumen` ASC),
  INDEX `fk_status_sidang_laporanproposal1_idx` (`laporanproposal_id_laporanproposal` ASC),
  INDEX `fk_status_sidang_penguji1_idx` (`penguji_id_penguji` ASC),
  CONSTRAINT `fk_status_sidang_bukti_spp_terakhir1`
    FOREIGN KEY (`bukti_spp_terakhir_id_bukti`)
    REFERENCES `mydb`.`bukti_spp_terakhir` (`id_bukti`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_status_sidang_laporanproposal1`
    FOREIGN KEY (`laporanproposal_id_laporanproposal`)
    REFERENCES `mydb`.`laporanproposal` (`id_laporanproposal`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_status_sidang_lembar_revisi1`
    FOREIGN KEY (`lembar_revisi_idlembar_revisi`)
    REFERENCES `mydb`.`lembar_revisi` (`idlembar_revisi`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_status_sidang_login_karyawan1`
    FOREIGN KEY (`login_karyawan_id_karyawan`)
    REFERENCES `mydb`.`login_karyawan` (`id_karyawan`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_status_sidang_mahasiswa1`
    FOREIGN KEY (`mahasiswa_NIM` , `mahasiswa_id_mhs` , `mahasiswa_id_dokumen`)
    REFERENCES `mydb`.`mahasiswa` (`NIM` , `id_mhs` , `id_dokumen`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_status_sidang_notification1`
    FOREIGN KEY (`notification_id_notification`)
    REFERENCES `mydb`.`notification` (`id_notification`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_status_sidang_penguji1`
    FOREIGN KEY (`penguji_id_penguji`)
    REFERENCES `mydb`.`penguji` (`id_penguji`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `mydb`.`kartuhasilstudi`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`kartuhasilstudi` (
  `id_kartuhasilstudi` INT(11) NOT NULL AUTO_INCREMENT,
  `berkas_khs` VARCHAR(100) NULL DEFAULT NULL,
  `id_statussidang` INT(11) NOT NULL,
  PRIMARY KEY (`id_kartuhasilstudi`, `id_statussidang`),
  INDEX `fk_kartuhasilstudi_user_sidang_idx` (`id_statussidang` ASC),
  CONSTRAINT `fk_kartuhasilstudi_user_sidang`
    FOREIGN KEY (`id_statussidang`)
    REFERENCES `mydb`.`status_sidang` (`id_statussidang`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `mydb`.`riwayat_ipmhs`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`riwayat_ipmhs` (
  `idriwayat_ipmhs` INT(11) NOT NULL,
  `ipsemester1` VARCHAR(45) NULL DEFAULT NULL,
  `ipsemester2` VARCHAR(45) NULL DEFAULT NULL,
  `ipsemester3` VARCHAR(45) NULL DEFAULT NULL,
  `ipsemester4` VARCHAR(45) NULL DEFAULT NULL,
  `ipsemester5` VARCHAR(45) NULL DEFAULT NULL,
  `ipsemester6` VARCHAR(45) NULL DEFAULT NULL,
  `ipk` VARCHAR(45) NULL DEFAULT NULL,
  PRIMARY KEY (`idriwayat_ipmhs`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `mydb`.`yudisium`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`yudisium` (
  `idyudisium` INT(11) NOT NULL,
  `angkatan` VARCHAR(45) NULL DEFAULT NULL,
  `srt_bebastanggungan` VARCHAR(45) NULL DEFAULT NULL,
  `konsep_daftarnilai` VARCHAR(45) NULL DEFAULT NULL,
  `mahasiswa_NIM` VARCHAR(9) NOT NULL,
  `riwayat_ipmhs_idriwayat_ipmhs` INT(11) NOT NULL,
  `berkas_khs_idberkas_khs` INT(11) NOT NULL,
  `berkas_pkl_idberkas_pkl` INT(11) NOT NULL,
  `berkas_TA_idberkas_TA` INT(11) NOT NULL,
  `bukti_spp_terakhir_id_bukti` INT(11) NOT NULL,
  PRIMARY KEY (`idyudisium`, `mahasiswa_NIM`, `riwayat_ipmhs_idriwayat_ipmhs`, `berkas_khs_idberkas_khs`, `berkas_pkl_idberkas_pkl`, `berkas_TA_idberkas_TA`, `bukti_spp_terakhir_id_bukti`),
  INDEX `fk_yudisium_mahasiswa1_idx` (`mahasiswa_NIM` ASC),
  INDEX `fk_yudisium_riwayat_ipmhs1_idx` (`riwayat_ipmhs_idriwayat_ipmhs` ASC),
  INDEX `fk_yudisium_berkas_khs1_idx` (`berkas_khs_idberkas_khs` ASC),
  INDEX `fk_yudisium_berkas_pkl1_idx` (`berkas_pkl_idberkas_pkl` ASC),
  INDEX `fk_yudisium_berkas_TA1_idx` (`berkas_TA_idberkas_TA` ASC),
  INDEX `fk_yudisium_bukti_spp_terakhir1_idx` (`bukti_spp_terakhir_id_bukti` ASC),
  CONSTRAINT `fk_yudisium_berkas_TA1`
    FOREIGN KEY (`berkas_TA_idberkas_TA`)
    REFERENCES `mydb`.`berkas_TA` (`idberkas_TA`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_yudisium_berkas_khs1`
    FOREIGN KEY (`berkas_khs_idberkas_khs`)
    REFERENCES `mydb`.`berkas_khs` (`idberkas_khs`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_yudisium_berkas_pkl1`
    FOREIGN KEY (`berkas_pkl_idberkas_pkl`)
    REFERENCES `mydb`.`berkas_pkl` (`idberkas_pkl`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_yudisium_bukti_spp_terakhir1`
    FOREIGN KEY (`bukti_spp_terakhir_id_bukti`)
    REFERENCES `mydb`.`bukti_spp_terakhir` (`id_bukti`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_yudisium_mahasiswa1`
    FOREIGN KEY (`mahasiswa_NIM`)
    REFERENCES `mydb`.`mahasiswa` (`NIM`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_yudisium_riwayat_ipmhs1`
    FOREIGN KEY (`riwayat_ipmhs_idriwayat_ipmhs`)
    REFERENCES `mydb`.`riwayat_ipmhs` (`idriwayat_ipmhs`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
 
