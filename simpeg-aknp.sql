-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 22 Des 2019 pada 17.56
-- Versi Server: 10.1.10-MariaDB
-- PHP Version: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `simpeg-aknp`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `absen`
--

CREATE TABLE `absen` (
  `id_absen` int(11) NOT NULL,
  `nip` int(20) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jam_masuk` varchar(10) NOT NULL,
  `jam_pulang` varchar(10) NOT NULL,
  `status` varchar(30) NOT NULL,
  `waktu_kerja` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `absen`
--

INSERT INTO `absen` (`id_absen`, `nip`, `nama`, `jam_masuk`, `jam_pulang`, `status`, `waktu_kerja`) VALUES
(1, 111602019, 'Alamsyah', '09.30', '11.30', 'Masuk', '2 Jam'),
(2, 111602020, 'Nur Hadi', '09.30', '11.30', 'Masuk', '2 Jam'),
(3, 111602021, 'Ilham Hasanuddin', '07.30', '15.00', 'Masuk', '7 Jam');

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_assignment`
--

CREATE TABLE `auth_assignment` (
  `item_name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_item`
--

CREATE TABLE `auth_item` (
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `type` smallint(6) NOT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `rule_name` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `data` blob,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_item_child`
--

CREATE TABLE `auth_item_child` (
  `parent` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `child` varchar(64) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_rule`
--

CREATE TABLE `auth_rule` (
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `data` blob,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `cuti_dl`
--

CREATE TABLE `cuti_dl` (
  `id_cuti` int(11) NOT NULL,
  `nip` int(20) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `keterangan` varchar(50) NOT NULL,
  `tgl_cuti` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `cuti_dl`
--

INSERT INTO `cuti_dl` (`id_cuti`, `nip`, `nama`, `keterangan`, `tgl_cuti`) VALUES
(1, 111602021, 'Ilham Hasanuddin', 'Workshop Teknologi Digital', '2019-12-12'),
(2, 111602022, 'Ali Sopan', 'Workshop', '2019-12-21');

-- --------------------------------------------------------

--
-- Struktur dari tabel `gaji`
--

CREATE TABLE `gaji` (
  `id_gaji` int(11) NOT NULL,
  `nip` int(20) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `total_gaji` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `gaji`
--

INSERT INTO `gaji` (`id_gaji`, `nip`, `nama`, `total_gaji`) VALUES
(1, 111602018, 'Edi', 2000000),
(2, 111602019, 'Alamsyah', 5000000),
(3, 111602020, 'Nur Hadi', 7000000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `info`
--

CREATE TABLE `info` (
  `id_berita` int(100) NOT NULL,
  `berita` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `info`
--

INSERT INTO `info` (`id_berita`, `berita`) VALUES
(1, 'Rangkaian Upacara Hari Ulang Tahun (HUT) Kemerdekaan Republik Indonesia yang ke 74 telah dilaksanakan pada hari Sabtu, 17 Agustus 2019 mulai pukul 07.00 WIB sampai dengan selesai. Bendera merah putih dikibarkan oleh Pasukan Pengibar Bendera Pusaka dengan lancar dan sukses. ');

-- --------------------------------------------------------

--
-- Struktur dari tabel `menu`
--

CREATE TABLE `menu` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `parent` int(11) DEFAULT NULL,
  `route` varchar(255) DEFAULT NULL,
  `order` int(11) DEFAULT NULL,
  `data` blob
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `migration`
--

CREATE TABLE `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1576224392),
('m130524_201442_init', 1576224398),
('m140506_102106_rbac_init', 1576677031),
('m140602_111327_create_menu_table', 1576676815),
('m160312_050000_create_user', 1576676816),
('m170907_052038_rbac_add_index_on_auth_assignment_user_id', 1576677032),
('m180523_151638_rbac_updates_indexes_without_prefix', 1576677033),
('m190124_110200_add_verification_token_column_to_user_table', 1576224398);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pegawai`
--

CREATE TABLE `pegawai` (
  `nip` int(20) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `no_telepon` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `tempat_lahir` varchar(25) NOT NULL,
  `gol_darah` varchar(5) NOT NULL,
  `status_karyawan` varchar(30) NOT NULL,
  `status_nikah` varchar(20) NOT NULL,
  `agama` varchar(20) NOT NULL,
  `npwp` varchar(25) NOT NULL,
  `tgl_masuk_krj` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pegawai`
--

INSERT INTO `pegawai` (`nip`, `nama`, `no_telepon`, `email`, `alamat`, `tgl_lahir`, `tempat_lahir`, `gol_darah`, `status_karyawan`, `status_nikah`, `agama`, `npwp`, `tgl_masuk_krj`) VALUES
(111602018, 'Edi', '085735773210', 'Ed@gmail.com', 'Sukoharjo', '1992-12-19', 'Sukoharjo', 'AB', 'Pegawai Tetap', 'Belum Menikah', 'Islam', '123456735', '2019-12-01'),
(111602019, 'Alamsyah', '085735773212', 'Alam@gmail.com', 'Pacitan', '2019-12-12', 'Pacitan', 'AB', 'Pegawai Tetap', 'Belum Menikah', 'Islam', '123456789', '2019-12-12'),
(111602020, 'Nur Hadi', '085735773213', 'Hadi@gmail.com', 'Pacitan', '1992-12-15', 'Pacitan', 'A', 'Pegawai Tetap', 'Belum Menikah', 'Islam', '123456777', '2019-12-21'),
(111602021, 'Ilham Hasanuddin', '085735773217', 'Hasan@gmail.com', 'Ponorogo', '1992-12-21', 'Ponorogo', 'O', 'Pegawai Tetap', 'Belum Menikah', 'Islam', '123456780', '2019-12-21'),
(111602022, 'Ali Sopan', '085735773230', 'Ali@gmail.com', 'Trenggalek', '1992-12-17', 'Trenggalek', 'AB', 'Pegawai Tetap', 'Belum Menikah', 'Islam', '123456781', '2019-12-07');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `authKey` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `accessToken` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `role` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `email`, `authKey`, `accessToken`, `role`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'fcea920f7412b5da7be0cf42b8c93759', 'Dhastan@gmail.com', 'admin-12345', 'admin12345', 'admin', '2019-12-18 16:53:44', '2019-12-22 12:44:11');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `absen`
--
ALTER TABLE `absen`
  ADD PRIMARY KEY (`id_absen`),
  ADD KEY `nip` (`nip`);

--
-- Indexes for table `auth_assignment`
--
ALTER TABLE `auth_assignment`
  ADD PRIMARY KEY (`item_name`,`user_id`),
  ADD KEY `idx-auth_assignment-user_id` (`user_id`);

--
-- Indexes for table `auth_item`
--
ALTER TABLE `auth_item`
  ADD PRIMARY KEY (`name`),
  ADD KEY `rule_name` (`rule_name`),
  ADD KEY `idx-auth_item-type` (`type`);

--
-- Indexes for table `auth_item_child`
--
ALTER TABLE `auth_item_child`
  ADD PRIMARY KEY (`parent`,`child`),
  ADD KEY `child` (`child`);

--
-- Indexes for table `auth_rule`
--
ALTER TABLE `auth_rule`
  ADD PRIMARY KEY (`name`);

--
-- Indexes for table `cuti_dl`
--
ALTER TABLE `cuti_dl`
  ADD PRIMARY KEY (`id_cuti`),
  ADD KEY `tb_cuti_fk` (`nip`);

--
-- Indexes for table `gaji`
--
ALTER TABLE `gaji`
  ADD PRIMARY KEY (`id_gaji`),
  ADD KEY `nip` (`nip`);

--
-- Indexes for table `info`
--
ALTER TABLE `info`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`),
  ADD KEY `parent` (`parent`);

--
-- Indexes for table `migration`
--
ALTER TABLE `migration`
  ADD PRIMARY KEY (`version`);

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`nip`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `absen`
--
ALTER TABLE `absen`
  MODIFY `id_absen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `cuti_dl`
--
ALTER TABLE `cuti_dl`
  MODIFY `id_cuti` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `gaji`
--
ALTER TABLE `gaji`
  MODIFY `id_gaji` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `absen`
--
ALTER TABLE `absen`
  ADD CONSTRAINT `tb_absen_fk` FOREIGN KEY (`nip`) REFERENCES `pegawai` (`nip`) ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `auth_assignment`
--
ALTER TABLE `auth_assignment`
  ADD CONSTRAINT `auth_assignment_ibfk_1` FOREIGN KEY (`item_name`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `auth_item`
--
ALTER TABLE `auth_item`
  ADD CONSTRAINT `auth_item_ibfk_1` FOREIGN KEY (`rule_name`) REFERENCES `auth_rule` (`name`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `auth_item_child`
--
ALTER TABLE `auth_item_child`
  ADD CONSTRAINT `auth_item_child_ibfk_1` FOREIGN KEY (`parent`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `auth_item_child_ibfk_2` FOREIGN KEY (`child`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `cuti_dl`
--
ALTER TABLE `cuti_dl`
  ADD CONSTRAINT `tb_cuti_fk` FOREIGN KEY (`nip`) REFERENCES `pegawai` (`nip`) ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `gaji`
--
ALTER TABLE `gaji`
  ADD CONSTRAINT `tb_gaji_fk` FOREIGN KEY (`nip`) REFERENCES `pegawai` (`nip`) ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `menu`
--
ALTER TABLE `menu`
  ADD CONSTRAINT `menu_ibfk_1` FOREIGN KEY (`parent`) REFERENCES `menu` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
