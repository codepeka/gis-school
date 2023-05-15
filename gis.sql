-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 15 Bulan Mei 2023 pada 03.29
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
(6, 1, 'SMAN 1 JOMBANG', '1684063892240.jpg', '<p class=\"MsoNormal\" style=\"margin-bottom:0cm;line-height:normal\"><span lang=\"IN\" style=\"font-size:12.0pt;font-family:&quot;Times New Roman&quot;,serif\">KEPALA SEKOLAH : M.\r\nNURSYUKROINI<o:p></o:p></span></p><p class=\"MsoNormal\" style=\"margin-bottom:0cm;line-height:normal\"><span lang=\"IN\" style=\"font-size:12.0pt;font-family:&quot;Times New Roman&quot;,serif\">ALAMAT SEKOLAH: JL.\r\nWIJAYA KUSUMA NO.1 RT / RW 13 / 3 Dusun RINGIN ANOM<o:p></o:p></span></p><p class=\"MsoNormal\" style=\"margin-bottom:0cm;line-height:normal\"><span lang=\"IN\" style=\"font-size:12.0pt;font-family:&quot;Times New Roman&quot;,serif\">Desa Wringinpitu Kecamatan\r\nTegaldlimo Kabupaten Banyuwangi Provinsi Jawa Timur<o:p></o:p></span></p><p class=\"MsoNormal\" style=\"margin-bottom:0cm;line-height:normal\"><span lang=\"IN\" style=\"font-size:12.0pt;font-family:&quot;Times New Roman&quot;,serif\">Kode Pos : 68484<o:p></o:p></span></p><p class=\"MsoNormal\" style=\"margin-bottom:0cm;line-height:normal\"><span lang=\"IN\" style=\"font-size:12.0pt;font-family:&quot;Times New Roman&quot;,serif\">AKREDITASI: A<o:p></o:p></span></p><p class=\"MsoNormal\" style=\"margin-bottom:0cm;line-height:normal\"><span lang=\"IN\" style=\"font-size:12.0pt;font-family:&quot;Times New Roman&quot;,serif\">KURIKULUM: Kurikulum\r\nMerdeka, Kurikulum 2013<o:p></o:p></span></p><p class=\"MsoNormal\" style=\"margin-bottom:0cm;line-height:normal\"><span lang=\"IN\" style=\"font-size:12.0pt;font-family:&quot;Times New Roman&quot;,serif\">NPSN: 20525860<o:p></o:p></span></p><p class=\"MsoNormal\" style=\"margin-bottom:0cm;line-height:normal\"><span lang=\"IN\" style=\"font-size:12.0pt;font-family:&quot;Times New Roman&quot;,serif\">DATA GURU:&nbsp; Laki-laki : 25, Perempuan : 27 Total 52<o:p></o:p></span></p><p class=\"MsoNormal\" style=\"margin-bottom:0cm;line-height:normal\"><span lang=\"IN\" style=\"font-size:12.0pt;font-family:&quot;Times New Roman&quot;,serif\">DAN TENAGA\r\nPENDIDIK: Laki-laki : 7, Perempuan : 5 Total:&nbsp;\r\n12 <o:p></o:p></span></p><p class=\"MsoNormal\" style=\"margin-bottom:0cm;line-height:normal\"><span lang=\"IN\" style=\"font-size:12.0pt;font-family:&quot;Times New Roman&quot;,serif\">DATA PESERTA\r\nDIDIK: Laki-laki : 375, Perempuan : 631, Total: 1006<o:p></o:p></span></p><p class=\"MsoNormal\" style=\"margin-bottom:0cm;line-height:normal\"><span lang=\"IN\" style=\"font-size:12.0pt;font-family:&quot;Times New Roman&quot;,serif\">DATA SARANA DAN\r\nPRASARANA: <o:p></o:p></span></p><p class=\"MsoNormal\" style=\"margin-bottom:0cm;line-height:normal\"><a name=\"_Hlk130547643\"><span lang=\"IN\" style=\"font-size:12.0pt;font-family:&quot;Times New Roman&quot;,serif\">1&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Ruang Kelas&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; jumlah\r\n24<o:p></o:p></span></a></p><p class=\"MsoNormal\" style=\"margin-bottom:0cm;line-height:normal\"><span lang=\"IN\" style=\"font-size:12.0pt;\r\nfont-family:&quot;Times New Roman&quot;,serif\">2&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Ruang\r\nPerpustakaan&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; jumlah 1<o:p></o:p></span></p><p class=\"MsoNormal\" style=\"margin-bottom:0cm;line-height:normal\"><span lang=\"IN\" style=\"font-size:12.0pt;\r\nfont-family:&quot;Times New Roman&quot;,serif\">3&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Ruang\r\nLaboratorium&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; jumlah 6<o:p></o:p></span></p><p class=\"MsoNormal\" style=\"margin-bottom:0cm;line-height:normal\"><span lang=\"IN\" style=\"font-size:12.0pt;\r\nfont-family:&quot;Times New Roman&quot;,serif\">4&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Ruang\r\nPraktik &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; jumlah\r\n0<o:p></o:p></span></p><p class=\"MsoNormal\" style=\"margin-bottom:0cm;line-height:normal\"><span lang=\"IN\" style=\"font-size:12.0pt;\r\nfont-family:&quot;Times New Roman&quot;,serif\">5&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Ruang\r\nPimpinan&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; jumlah 1<o:p></o:p></span></p><p class=\"MsoNormal\" style=\"margin-bottom:0cm;line-height:normal\"><span lang=\"IN\" style=\"font-size:12.0pt;\r\nfont-family:&quot;Times New Roman&quot;,serif\">6&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Ruang\r\nGuru&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; jumlah\r\n1<o:p></o:p></span></p><p class=\"MsoNormal\" style=\"margin-bottom:0cm;line-height:normal\"><span lang=\"IN\" style=\"font-size:12.0pt;\r\nfont-family:&quot;Times New Roman&quot;,serif\">7&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Ruang\r\nIbadah &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; jumlah\r\n1<o:p></o:p></span></p><p class=\"MsoNormal\" style=\"margin-bottom:0cm;line-height:normal\"><span lang=\"IN\" style=\"font-size:12.0pt;\r\nfont-family:&quot;Times New Roman&quot;,serif\">8&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Ruang\r\nUKS&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; jumlah 1<o:p></o:p></span></p><p class=\"MsoNormal\" style=\"margin-bottom:0cm;line-height:normal\"><span lang=\"IN\" style=\"font-size:12.0pt;\r\nfont-family:&quot;Times New Roman&quot;,serif\">9&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Ruang\r\nToilet&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; jumlah\r\n6<o:p></o:p></span></p><p class=\"MsoNormal\" style=\"margin-bottom:0cm;line-height:normal\"><span lang=\"IN\" style=\"font-size:12.0pt;\r\nfont-family:&quot;Times New Roman&quot;,serif\">10&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Ruang\r\nGudang&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; jumlah 1<o:p></o:p></span></p><p class=\"MsoNormal\" style=\"margin-bottom:0cm;line-height:normal\"><span lang=\"IN\" style=\"font-size:12.0pt;\r\nfont-family:&quot;Times New Roman&quot;,serif\">11&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Ruang\r\nSirkulasi&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; jumlah 0<o:p></o:p></span></p><p class=\"MsoNormal\" style=\"margin-bottom:0cm;line-height:normal\"><span lang=\"IN\" style=\"font-size:12.0pt;\r\nfont-family:&quot;Times New Roman&quot;,serif\">12&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Tempat\r\nBermain / Olahraga&nbsp;&nbsp; jumlah 0<o:p></o:p></span></p><p class=\"MsoNormal\" style=\"margin-bottom:0cm;line-height:normal\"><span lang=\"IN\" style=\"font-size:12.0pt;\r\nfont-family:&quot;Times New Roman&quot;,serif\">13&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Ruang\r\nTU&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; jumlah\r\n1<o:p></o:p></span></p><p class=\"MsoNormal\" style=\"margin-bottom:0cm;line-height:normal\"><span lang=\"IN\" style=\"font-size:12.0pt;\r\nfont-family:&quot;Times New Roman&quot;,serif\">14&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Ruang\r\nKonseling&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; jumlah 1<o:p></o:p></span></p><p class=\"MsoNormal\" style=\"margin-bottom:0cm;line-height:normal\"><span lang=\"IN\" style=\"font-size:12.0pt;\r\nfont-family:&quot;Times New Roman&quot;,serif\">15&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Ruang\r\nOSIS&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; jumlah\r\n0<o:p></o:p></span></p><p class=\"MsoNormal\" style=\"margin-bottom:0cm;line-height:normal\"><span lang=\"IN\" style=\"font-size:12.0pt;\r\nfont-family:&quot;Times New Roman&quot;,serif\">16&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Ruang\r\nBangunan&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; jumlah 24<o:p></o:p></span></p><p class=\"MsoNormal\" style=\"margin-bottom:0cm;line-height:normal\"><span lang=\"IN\" style=\"font-size:12.0pt;font-family:&quot;Times New Roman&quot;,serif\">DATA ROMBONGAN\r\nBELAJAR: 29 <o:p></o:p></span></p><p class=\"MsoNormal\" style=\"margin-bottom:0cm;line-height:normal\"><span lang=\"IN\" style=\"font-size:12.0pt;font-family:&quot;Times New Roman&quot;,serif\">DATA\r\nEKSTRAKURIKULER: Pramuka, PMR, Basket, Voli, Sepakbola, Merpati Putih, PSHT,\r\nTari, Hadrah. <o:p></o:p></span></p><p>\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n</p><p class=\"MsoNormal\" style=\"margin-bottom:0cm;line-height:normal\"><span lang=\"IN\" style=\"font-size:12.0pt;font-family:&quot;Times New Roman&quot;,serif\">DATA JURUSAN: IPA\r\nIPS&nbsp;<o:p></o:p></span></p>', 1, '2023-05-14 13:31:32', '2023-05-14 11:31:32');

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

-- --------------------------------------------------------

--
-- Struktur dari tabel `sekolah`
--

CREATE TABLE `sekolah` (
  `id` int(11) NOT NULL,
  `npsn` varchar(50) NOT NULL,
  `nama` varchar(165) NOT NULL,
  `alamat` text NOT NULL,
  `kode_provinsi` int(11) NOT NULL,
  `provinsi` varchar(165) NOT NULL,
  `kode_kota` int(11) NOT NULL,
  `kota` varchar(165) NOT NULL,
  `kode_kecamatan` int(11) NOT NULL,
  `kecamatan` varchar(165) NOT NULL,
  `kode_kelurahan` int(11) NOT NULL,
  `kelurahan` varchar(165) NOT NULL,
  `status_pendidikan` enum('SMA','SMK','MA','MAK') NOT NULL,
  `tipe_sekolah` enum('N','S') NOT NULL,
  `akreditasi` varchar(65) NOT NULL,
  `kurikulum` varchar(65) NOT NULL,
  `lintang` varchar(265) NOT NULL,
  `bujur` varchar(265) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `sekolah`
--

INSERT INTO `sekolah` (`id`, `npsn`, `nama`, `alamat`, `kode_provinsi`, `provinsi`, `kode_kota`, `kota`, `kode_kecamatan`, `kecamatan`, `kode_kelurahan`, `kelurahan`, `status_pendidikan`, `tipe_sekolah`, `akreditasi`, `kurikulum`, `lintang`, `bujur`, `status`, `created_at`, `updated_at`) VALUES
(1, '987654321', 'SMAN 1 JEMBER', 'Jl. Sumbersari No. 78', 0, 'Jawa Timur', 0, 'Jember', 0, 'Sumbersari', 0, 'Sumbersari', 'SMA', 'N', 'A - International', 'CAMBRIGE', '123', '321', 1, '2023-05-09 19:03:44', '2023-05-09 17:13:07');

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
-- AUTO_INCREMENT untuk tabel `sekolah`
--
ALTER TABLE `sekolah`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
