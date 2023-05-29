-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 29 Bulan Mei 2023 pada 06.43
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gis`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `judul` varchar(165) NOT NULL,
  `gambar` text NOT NULL,
  `isi` text NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `blog`
--

INSERT INTO `blog` (`id`, `user_id`, `judul`, `gambar`, `isi`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 'PPDB SMAN 1 JOMBANGAN - SARANGAN BALI KEDIRI JOMBANG BANGIL AJUNG RAMBIPUJI', '1683980350492.jpg', '<p>Lorem Ipsum In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is available.<br></p>', 1, '2023-05-12 01:51:41', '2023-05-13 13:35:24'),
(5, 1, 'PPDB SMAN 2 JOKO LILO SEMENTARA MASIH DITUTUP', '1683985201056.jpeg', '<p>My bunny has four little cute feet and he likes to jump to my bed. His ears are long and usually his ears like to cover his cubby cheeks. His fur is brown and unlike other rabbits, Morty\'s favorite food is banana. Whenever I eat a banana, he will run and jump to me, so he can take a bite.<br></p>', 1, '2023-05-13 15:40:01', '2023-05-13 13:40:01'),
(6, 2, 'SMAN 1 JOMBANG', '1684063892240.jpg', '<p class=\"MsoNormal\" style=\"margin-bottom:0cm;line-height:normal\"><span lang=\"IN\" style=\"font-size:12.0pt;font-family:\"Times New Roman\",serif\">KEPALA SEKOLAH : M.\r\nNURSYUKROINI<o:p></o:p></span></p><p class=\"MsoNormal\" style=\"margin-bottom:0cm;line-height:normal\"><span lang=\"IN\" style=\"font-size:12.0pt;font-family:\"Times New Roman\",serif\">ALAMAT SEKOLAH: JL.\r\nWIJAYA KUSUMA NO.1 RT / RW 13 / 3 Dusun RINGIN ANOM<o:p></o:p></span></p><p class=\"MsoNormal\" style=\"margin-bottom:0cm;line-height:normal\"><span lang=\"IN\" style=\"font-size:12.0pt;font-family:\"Times New Roman\",serif\">Desa Wringinpitu Kecamatan\r\nTegaldlimo Kabupaten Banyuwangi Provinsi Jawa Timur<o:p></o:p></span></p><p class=\"MsoNormal\" style=\"margin-bottom:0cm;line-height:normal\"><span lang=\"IN\" style=\"font-size:12.0pt;font-family:\"Times New Roman\",serif\">Kode Pos : 68484<o:p></o:p></span></p><p class=\"MsoNormal\" style=\"margin-bottom:0cm;line-height:normal\"><span lang=\"IN\" style=\"font-size:12.0pt;font-family:\"Times New Roman\",serif\">AKREDITASI: A<o:p></o:p></span></p><p class=\"MsoNormal\" style=\"margin-bottom:0cm;line-height:normal\"><span lang=\"IN\" style=\"font-size:12.0pt;font-family:\"Times New Roman\",serif\">KURIKULUM: Kurikulum\r\nMerdeka, Kurikulum 2013<o:p></o:p></span></p><p class=\"MsoNormal\" style=\"margin-bottom:0cm;line-height:normal\"><span lang=\"IN\" style=\"font-size:12.0pt;font-family:\"Times New Roman\",serif\">NPSN: 20525860<o:p></o:p></span></p><p class=\"MsoNormal\" style=\"margin-bottom:0cm;line-height:normal\"><span lang=\"IN\" style=\"font-size:12.0pt;font-family:\"Times New Roman\",serif\">DATA GURU:  Laki-laki : 25, Perempuan : 27 Total 52<o:p></o:p></span></p><p class=\"MsoNormal\" style=\"margin-bottom:0cm;line-height:normal\"><span lang=\"IN\" style=\"font-size:12.0pt;font-family:\"Times New Roman\",serif\">DAN TENAGA\r\nPENDIDIK: Laki-laki : 7, Perempuan : 5 Total: \r\n12 <o:p></o:p></span></p><p class=\"MsoNormal\" style=\"margin-bottom:0cm;line-height:normal\"><span lang=\"IN\" style=\"font-size:12.0pt;font-family:\"Times New Roman\",serif\">DATA PESERTA\r\nDIDIK: Laki-laki : 375, Perempuan : 631, Total: 1006<o:p></o:p></span></p><p class=\"MsoNormal\" style=\"margin-bottom:0cm;line-height:normal\"><span lang=\"IN\" style=\"font-size:12.0pt;font-family:\"Times New Roman\",serif\">DATA SARANA DAN\r\nPRASARANA: <o:p></o:p></span></p><p class=\"MsoNormal\" style=\"margin-bottom:0cm;line-height:normal\"><a name=\"_Hlk130547643\"><span lang=\"IN\" style=\"font-size:12.0pt;font-family:\"Times New Roman\",serif\">1          Ruang Kelas                            jumlah\r\n24<o:p></o:p></span></a></p><p class=\"MsoNormal\" style=\"margin-bottom:0cm;line-height:normal\"><span lang=\"IN\" style=\"font-size:12.0pt;\r\nfont-family:\"Times New Roman\",serif\">2          Ruang\r\nPerpustakaan               jumlah 1<o:p></o:p></span></p><p class=\"MsoNormal\" style=\"margin-bottom:0cm;line-height:normal\"><span lang=\"IN\" style=\"font-size:12.0pt;\r\nfont-family:\"Times New Roman\",serif\">3          Ruang\r\nLaboratorium               jumlah 6<o:p></o:p></span></p><p class=\"MsoNormal\" style=\"margin-bottom:0cm;line-height:normal\"><span lang=\"IN\" style=\"font-size:12.0pt;\r\nfont-family:\"Times New Roman\",serif\">4          Ruang\r\nPraktik                         jumlah\r\n0<o:p></o:p></span></p><p class=\"MsoNormal\" style=\"margin-bottom:0cm;line-height:normal\"><span lang=\"IN\" style=\"font-size:12.0pt;\r\nfont-family:\"Times New Roman\",serif\">5          Ruang\r\nPimpinan                      jumlah 1<o:p></o:p></span></p><p class=\"MsoNormal\" style=\"margin-bottom:0cm;line-height:normal\"><span lang=\"IN\" style=\"font-size:12.0pt;\r\nfont-family:\"Times New Roman\",serif\">6          Ruang\r\nGuru                            jumlah\r\n1<o:p></o:p></span></p><p class=\"MsoNormal\" style=\"margin-bottom:0cm;line-height:normal\"><span lang=\"IN\" style=\"font-size:12.0pt;\r\nfont-family:\"Times New Roman\",serif\">7          Ruang\r\nIbadah                         jumlah\r\n1<o:p></o:p></span></p><p class=\"MsoNormal\" style=\"margin-bottom:0cm;line-height:normal\"><span lang=\"IN\" style=\"font-size:12.0pt;\r\nfont-family:\"Times New Roman\",serif\">8          Ruang\r\nUKS                            jumlah 1<o:p></o:p></span></p><p class=\"MsoNormal\" style=\"margin-bottom:0cm;line-height:normal\"><span lang=\"IN\" style=\"font-size:12.0pt;\r\nfont-family:\"Times New Roman\",serif\">9          Ruang\r\nToilet                           jumlah\r\n6<o:p></o:p></span></p><p class=\"MsoNormal\" style=\"margin-bottom:0cm;line-height:normal\"><span lang=\"IN\" style=\"font-size:12.0pt;\r\nfont-family:\"Times New Roman\",serif\">10        Ruang\r\nGudang                        jumlah 1<o:p></o:p></span></p><p class=\"MsoNormal\" style=\"margin-bottom:0cm;line-height:normal\"><span lang=\"IN\" style=\"font-size:12.0pt;\r\nfont-family:\"Times New Roman\",serif\">11        Ruang\r\nSirkulasi                       jumlah 0<o:p></o:p></span></p><p class=\"MsoNormal\" style=\"margin-bottom:0cm;line-height:normal\"><span lang=\"IN\" style=\"font-size:12.0pt;\r\nfont-family:\"Times New Roman\",serif\">12        Tempat\r\nBermain / Olahraga   jumlah 0<o:p></o:p></span></p><p class=\"MsoNormal\" style=\"margin-bottom:0cm;line-height:normal\"><span lang=\"IN\" style=\"font-size:12.0pt;\r\nfont-family:\"Times New Roman\",serif\">13        Ruang\r\nTU                               jumlah\r\n1<o:p></o:p></span></p><p class=\"MsoNormal\" style=\"margin-bottom:0cm;line-height:normal\"><span lang=\"IN\" style=\"font-size:12.0pt;\r\nfont-family:\"Times New Roman\",serif\">14        Ruang\r\nKonseling                    jumlah 1<o:p></o:p></span></p><p class=\"MsoNormal\" style=\"margin-bottom:0cm;line-height:normal\"><span lang=\"IN\" style=\"font-size:12.0pt;\r\nfont-family:\"Times New Roman\",serif\">15        Ruang\r\nOSIS                            jumlah\r\n0<o:p></o:p></span></p><p class=\"MsoNormal\" style=\"margin-bottom:0cm;line-height:normal\"><span lang=\"IN\" style=\"font-size:12.0pt;\r\nfont-family:\"Times New Roman\",serif\">16        Ruang\r\nBangunan                    jumlah 24<o:p></o:p></span></p><p class=\"MsoNormal\" style=\"margin-bottom:0cm;line-height:normal\"><span lang=\"IN\" style=\"font-size:12.0pt;font-family:\"Times New Roman\",serif\">DATA ROMBONGAN\r\nBELAJAR: 29 <o:p></o:p></span></p><p class=\"MsoNormal\" style=\"margin-bottom:0cm;line-height:normal\"><span lang=\"IN\" style=\"font-size:12.0pt;font-family:\"Times New Roman\",serif\">DATA\r\nEKSTRAKURIKULER: Pramuka, PMR, Basket, Voli, Sepakbola, Merpati Putih, PSHT,\r\nTari, Hadrah. <o:p></o:p></span></p><p>\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n</p><p class=\"MsoNormal\" style=\"margin-bottom:0cm;line-height:normal\"><span lang=\"IN\" style=\"font-size:12.0pt;font-family:\"Times New Roman\",serif\">DATA JURUSAN: IPA\r\nIPS <o:p></o:p></span></p>', 1, '2023-05-14 13:31:32', '2023-05-15 08:15:09');

-- --------------------------------------------------------

--
-- Struktur dari tabel `riwayat`
--

CREATE TABLE `riwayat` (
  `id` int(11) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `user_id` int(11) NOT NULL,
  `tipe` char(16) NOT NULL,
  `deskripsi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `riwayat`
--

INSERT INTO `riwayat` (`id`, `tanggal`, `user_id`, `tipe`, `deskripsi`) VALUES
(1, '2023-05-15 03:14:57', 2, 'Update', 'Ubah Data Sekolah'),
(2, '2023-05-15 03:15:09', 2, 'Update', 'Ubah Data User / Pengguna'),
(3, '2023-05-26 11:49:08', 1, 'Login', 'Login GIS'),
(4, '2023-05-26 11:49:44', 1, 'Delete', 'Hapus Data Sekolah'),
(5, '2023-05-26 11:49:49', 1, 'Delete', 'Hapus Data Sekolah'),
(6, '2023-05-26 11:49:53', 1, 'Delete', 'Hapus Data Sekolah'),
(7, '2023-05-26 11:51:49', 1, 'Add', 'Tambah Data Sekolah'),
(8, '2023-05-26 11:54:03', 1, 'Add', 'Tambah Data Sekolah'),
(9, '2023-05-26 11:55:20', 1, 'Add', 'Tambah Data Sekolah'),
(10, '2023-05-26 11:56:25', 1, 'Add', 'Tambah Data Sekolah'),
(11, '2023-05-28 22:56:14', 1, 'Login', 'Login GIS'),
(12, '2023-05-28 22:56:14', 1, 'Login', 'Login GIS'),
(13, '2023-05-28 23:41:04', 1, 'Logout', 'Logout GIS'),
(14, '2023-05-28 23:41:17', 1, 'Login', 'Login GIS'),
(15, '2023-05-28 23:42:05', 1, 'Login', 'Login GIS'),
(16, '2023-05-28 23:42:09', 1, 'Logout', 'Logout GIS'),
(17, '2023-05-28 23:42:18', 1, 'Login', 'Login GIS');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sekolah`
--

CREATE TABLE `sekolah` (
  `id` int(11) NOT NULL,
  `npsn` varchar(50) NOT NULL,
  `nama` varchar(165) NOT NULL,
  `alamat` text NOT NULL,
  `lintang` varchar(265) NOT NULL,
  `bujur` varchar(265) NOT NULL,
  `tipe_sekolah` enum('N','S') NOT NULL,
  `deskripsi` text NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `sekolah`
--

INSERT INTO `sekolah` (`id`, `npsn`, `nama`, `alamat`, `lintang`, `bujur`, `tipe_sekolah`, `deskripsi`, `status`, `created_at`, `updated_at`) VALUES
(4, '20525859', 'SMAN 1 PESANGGARAN', 'Jalan Pesanggaran Nomor 50, Desa Sumbermulyo, Kec. Pesanggaran RT / RW 1 / 2 Dusun Mulyoasri, Desa Sumbermulyo, Kecamatan Pesanggaran, Kabupaten Banyuwangi, Provinsi Jawa Timur.', '-8.55843', '114.10086', 'N', 'Lorem', 1, '2023-05-26 18:51:49', '2023-05-26 16:51:49'),
(5, '20525872', 'SMAN 1 BANGOREJO', 'JL. BHAYANGKARA NO. 67 RT / RW 1 / 1 Dusun KEBONREJO Desa Kebondalem Kecamatan Bangorejo Kabupaten Banyuwangi Provinsi Jawa Timur.', '-8.48517', '114.14031', 'N', 'Ipsum', 1, '2023-05-26 18:54:03', '2023-05-26 16:54:03'),
(6, '20525860', 'SMAN 1 PURWOHARJO', 'JL. SLAMET COKRO RT / RW 3 / 2 Dusun CURAHPECAK Desa Purwoharjo Kecamatan Purwoharjo Kabupaten Banyuwangi Provinsi Jawa Timur.', '-8.47766', '114.22923', 'N', 'Joko', 1, '2023-05-26 18:55:20', '2023-05-26 16:55:20'),
(7, '20525860', 'SMAN 1 TEGALDLIMO', 'JL. WIJAYA KUSUMA NO.1 RT / RW 13 / 3 Dusun RINGIN ANOM\r\nDesa Wringinpitu Kecamatan Tegaldlimo Kabupaten Banyuwangi Provinsi Jawa Timur.', '-8.49554', '114.28137', 'N', '<p>uy</p>', 1, '2023-05-26 18:56:25', '2023-05-26 16:56:25');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nama` varchar(165) NOT NULL,
  `username` varchar(65) NOT NULL,
  `password` varchar(256) NOT NULL,
  `hak` enum('admin','superadmin') NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `nama`, `username`, `password`, `hak`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Ari Setyo Gumilange', 'arisetyo', 'c91154db613b68d8bedba9fefc054cdb', 'superadmin', 1, '2023-05-09 17:34:29', '2023-05-14 04:21:30'),
(2, 'Dandi Saklawase', 'dandisak', 'be6ca3ed0a83cff9b3f7b95a302ea586', 'admin', 1, '2023-05-09 17:38:46', '2023-05-09 16:43:56');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_user_id_on_blog` (`user_id`);

--
-- Indeks untuk tabel `riwayat`
--
ALTER TABLE `riwayat`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `sekolah`
--
ALTER TABLE `sekolah`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `riwayat`
--
ALTER TABLE `riwayat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `sekolah`
--
ALTER TABLE `sekolah`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `blog`
--
ALTER TABLE `blog`
  ADD CONSTRAINT `fk_user_id_on_blog` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
