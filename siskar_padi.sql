-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 01 Agu 2024 pada 10.03
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `siskar_padi`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_activation_attempts`
--

CREATE TABLE `auth_activation_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_groups`
--

CREATE TABLE `auth_groups` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_groups_permissions`
--

CREATE TABLE `auth_groups_permissions` (
  `group_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `permission_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_groups_users`
--

CREATE TABLE `auth_groups_users` (
  `group_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `user_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_logins`
--

CREATE TABLE `auth_logins` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `user_id` int(11) UNSIGNED DEFAULT NULL,
  `date` datetime NOT NULL,
  `success` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data untuk tabel `auth_logins`
--

INSERT INTO `auth_logins` (`id`, `ip_address`, `email`, `user_id`, `date`, `success`) VALUES
(1, '::1', 'adminsiskar@gmail.com', 1, '2024-02-18 22:41:53', 1),
(2, '::1', 'adminsiskar@gmail.com', 1, '2024-02-19 03:08:50', 1),
(3, '::1', 'admin', NULL, '2024-02-23 15:03:16', 0),
(4, '::1', 'admin1@gmail.com', NULL, '2024-02-23 15:03:29', 0),
(5, '::1', 'admin@gmail.com', NULL, '2024-02-23 15:03:34', 0),
(6, '::1', 'adminsiskar@gmail.com', 1, '2024-02-23 15:03:41', 1),
(7, '::1', 'admin', NULL, '2024-03-04 18:24:25', 0),
(8, '::1', 'adminbaru', NULL, '2024-03-04 18:24:33', 0),
(9, '::1', 'adminpadi@gmail.com', 2, '2024-03-04 18:25:03', 1),
(10, '::1', 'admin', NULL, '2024-03-19 23:56:04', 0),
(11, '::1', 'adminsiskar@gmail.com', 1, '2024-03-19 23:56:14', 1),
(12, '::1', 'adminsiskar@gmail.com', 1, '2024-03-20 03:10:40', 1),
(13, '::1', 'adminsiskar@gmail.com', 1, '2024-03-27 03:25:58', 1),
(14, '::1', 'adminsiskar@gmail.com', 1, '2024-03-27 23:18:39', 1),
(15, '::1', 'adminsiskar@gmail.com', 1, '2024-03-30 03:03:52', 1),
(16, '::1', 'adminsiskar@gmail.com', 1, '2024-03-30 05:38:03', 1),
(17, '::1', 'adminsiskar@gmail.com', 1, '2024-04-16 12:35:50', 1),
(18, '::1', 'adminsiskar@gmail.com', 1, '2024-05-04 02:25:18', 1),
(19, '::1', 'adminsiskar@gmail.com', 1, '2024-06-07 02:10:45', 1),
(20, '::1', 'adminsiskar@gmail.com', 1, '2024-06-11 02:10:57', 1),
(21, '::1', 'adminsiskar@gmail.com', 1, '2024-06-11 02:15:46', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_permissions`
--

CREATE TABLE `auth_permissions` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_reset_attempts`
--

CREATE TABLE `auth_reset_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_tokens`
--

CREATE TABLE `auth_tokens` (
  `id` int(11) UNSIGNED NOT NULL,
  `selector` varchar(255) NOT NULL,
  `hashedValidator` varchar(255) NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `expires` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_users_permissions`
--

CREATE TABLE `auth_users_permissions` (
  `user_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `permission_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `gejala`
--

CREATE TABLE `gejala` (
  `id_gejala` int(11) NOT NULL,
  `kode_gejala` varchar(10) DEFAULT NULL,
  `nama_gejala` text DEFAULT NULL,
  `nilai` float DEFAULT NULL,
  `range_min` decimal(5,2) NOT NULL DEFAULT 0.00,
  `range_max` decimal(5,2) NOT NULL DEFAULT 0.00
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `gejala`
--

INSERT INTO `gejala` (`id_gejala`, `kode_gejala`, `nama_gejala`, `nilai`, `range_min`, `range_max`) VALUES
(1, 'G001', 'Terdapat bercak kecil warna cokelat pada daun', 0.15, 0.00, 0.40),
(2, 'G002', 'Bagian tengah daun terdapat bercak berwarna putih yang diikuti warna abu-abu', 0.15, 0.00, 0.40),
(3, 'G003', 'Bagian pinggir terdapat bercak berwarna merah atau berwarna coklat', 0.8, 0.60, 1.00),
(4, 'G004', 'Bercak memiliki pola belah ketupat', 0.15, 0.00, 0.40),
(5, 'G005', 'Terdapat banyak bercak dalam satu daun, daun akan mengering dan mati', 0.8, 0.60, 1.00),
(6, 'G006', 'Warna bercak cokelat keabu-abuan pada leher malai', 0.8, 0.60, 1.00),
(7, 'G007', 'Perkembangan malai terganggu dan leher malai rapuh', 0.8, 0.60, 1.00),
(8, 'G008', 'Isi bulir padi kosong', 0.8, 0.60, 1.00),
(9, 'G009', 'Kumpulan padi yang terjangkit akan mengalami pertumbuhan yang terhambat', 0.8, 0.60, 1.00),
(10, 'G010', 'Daun berubah jadi kuning', 0.15, 0.00, 0.40),
(11, 'G011', 'Daun mengalami perubahan warna dari ujung daun sampai bagian ujung/pangkal daun', 0.5, 0.30, 0.70),
(12, 'G012', 'Anakan/bibit padi sedikit', 0.5, 0.30, 0.70),
(13, 'G013', 'Daun memiliki pelepah dan helai yang pedek', 0.5, 0.30, 0.70),
(14, 'G014', 'Helai daun muda padi bagian bawah terjepit dengan pelepah daun yang membuat daun menggulung', 0.8, 0.60, 1.00),
(15, 'G015', 'Ukuran malai pendek', 0.15, 0.00, 0.00),
(16, 'G016', 'Tidak terisinya bulir padi dengan sempurna', 0.15, 0.00, 0.00),
(17, 'G017', 'Tepian daun bergigi dengan daun bendera yang memendek dan terpelintir', 0.5, 0.00, 0.40),
(18, 'G018', 'Warna daun hijau tua', 0.15, 0.00, 0.40),
(19, 'G019', 'Pertumbuhan bunga malai terhambat dan tumbuh tidak sempurna', 0.5, 0.30, 0.70),
(20, 'G020', 'Adanya percabangan dari buku-buku atas', 0.5, 0.30, 0.70),
(21, 'G021', 'Terdapat bercak abu-abu kehijauan pada pelepah daun dekat permukaan air', 0.5, 0.30, 0.70),
(22, 'G022', 'Sklerotia jamur merupakan bercak dengan warna coklat', 0.8, 0.60, 1.00),
(23, 'G023', 'Panjang bercak yang berbentuk elips kurang lebih 2-3 cm', 0.8, 0.60, 1.00),
(24, 'G024', 'Padi terlihat seperti rumput akibat pertumbuhan bibit padi yang banyak', 0.15, 0.00, 0.40),
(25, 'G025', 'Daun berwarna hijau muda sampai hijau tua, ukuran daun pendek, terlihat kaku dan sempit', 0.8, 0.60, 1.00),
(26, 'G026', 'Malai dan gabah tidak memproduksi apapun', 0.8, 0.60, 1.00),
(27, 'G027', 'Terdapat bercak berukuram kecil dengan warna jingga pada daun', 0.15, 0.00, 0.40),
(28, 'G028', 'Tepi daun memiliki bercak yang memanjang dan berkembang', 0.5, 0.00, 0.00),
(29, 'G029', 'Warna coklat pada daun yang mengering dan melipat', 0.8, 0.30, 0.70),
(30, 'G030', 'Pembusukan batang padi bagian bawah dengan warna hitam pada buku-buku', 0.5, 0.30, 0.70),
(31, 'G031', 'Tunas padi mati', 0.8, 0.60, 1.00),
(32, 'G032', 'Miselium jamur memiliki bercak berwarna putih maupun coklat muda', 0.15, 0.00, 0.40),
(33, 'G033', 'Padi akan tumbang ketika malai berisi', 0.8, 0.00, 0.00),
(34, 'G034', 'Pinggiran daun yang berwarna kuning menjadi orange sampai mengering, mengindikasikan hawar daun', 0.5, 0.30, 0.70),
(35, 'G035', 'Daun menggulung berwarna hijau yang mengakibatkan daun mati dan layu', 0.15, 0.00, 0.40),
(36, 'G036', 'Terdapat bercak berwarna coklat gelap dengan bentuk oval yang menutupi permukaan daun', 0.8, 0.60, 1.00),
(37, 'G037', 'Kulit gabah memiliki bercak coklat atau hitam', 0.8, 0.60, 1.00),
(38, 'G038', 'Adanya bercak berwarna coklat dengan ukuran yang pendek dan sempit dengan pola garis pada daun/pelepah', 0.5, 0.30, 0.70),
(39, 'G039', 'Terdapat garis memanjang warna coklat searah dengan tulang daun', 0.8, 0.60, 1.00),
(40, 'G040', 'Gejala awal adanya noda kecil berwarna cokelat yang menutupi semua permukaan daun', 0.8, 0.60, 1.00),
(41, 'G041', 'Perubahan warna daun menjadi coklat kemerahan dan mati', 0.15, 0.60, 1.00),
(42, 'G042', 'Warna keemasan pada daun muda', 0.8, 0.60, 1.00),
(43, 'G043', 'Pembusukan batang paling atas dan leher pada malai', 0.15, 0.00, 0.40),
(44, 'G044', 'Ruas pada malai terdapat bercak cokelat.', 0.15, 0.00, 0.40),
(45, 'G045', 'xxx', 0, 0.00, 0.00);

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(1, '2017-11-20-223112', 'Myth\\Auth\\Database\\Migrations\\CreateAuthTables', 'default', 'Myth\\Auth', 1708295644, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `parentTree`
--

CREATE TABLE `parentTree` (
  `id` int(11) NOT NULL,
  `gambar` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `parentTree`
--

INSERT INTO `parentTree` (`id`, `gambar`) VALUES
(2, '1717728776_e95b3c8e2c0408a80f35.jpeg'),
(3, '1717728881_32b26cb2108f5f72cfa5.jpeg'),
(4, '1717728991_d4dbfc3b198e9bcecd3d.png'),
(5, '1717728999_d2c0518c77d9555c39ec.jpeg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengetahuan`
--

CREATE TABLE `pengetahuan` (
  `id_pengetahuan` int(11) NOT NULL,
  `rules` text DEFAULT NULL,
  `defuzzyfikasi` float DEFAULT NULL,
  `kategori` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `pengetahuan`
--

INSERT INTO `pengetahuan` (`id_pengetahuan`, `rules`, `defuzzyfikasi`, `kategori`) VALUES
(14, 'IF G001 AND G002 AND G003 AND G004 AND G005 AND G006 AND G007 AND G008 AND G009 THEN D01', 58.3333, 'Berat'),
(15, 'IF G009 AND G001 AND G030 AND G031 AND G032 AND G033 THEN D02', 53.3333, 'Berat'),
(16, 'IF G009 AND G036 AND G037 AND G044 THEN D03', 63.75, 'Berat'),
(17, 'IF G009 AND G001 AND G021 AND G022 AND G023 THEN D04', 61, 'Berat');

-- --------------------------------------------------------

--
-- Struktur dari tabel `penyakit`
--

CREATE TABLE `penyakit` (
  `id` int(11) NOT NULL,
  `kode_penyakit` varchar(10) DEFAULT NULL,
  `nama_penyakit` varchar(255) DEFAULT NULL,
  `penanganan` text DEFAULT NULL,
  `images` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `penyakit`
--

INSERT INTO `penyakit` (`id`, `kode_penyakit`, `nama_penyakit`, `penanganan`, `images`) VALUES
(1, 'D01', 'Blast', 'Pengairan tanah pada sawah secara terus menerus dapat memperkecil kemungkinan blast tidak menyerang padi, selain itu penggunaan pupuk silikon untuk tanah yang kekurangan unsur ini mampu menurunkan blas. Kemudian terdapat fungisida yang dapat mengontrol jumlah blas dan penggunaan fungisida ini disarankan tidak secara meluas karena dapat memunculkan tahan dari pathogen itu sendiri.', '1710905834_43e47ad290d7ec87198f.jpg'),
(2, 'D02', 'Bercak Cokelat (Brown Spot)', 'Dengan mengaplikasikan kalsium silikat sekitar satu ton per hektar, selain itu juga menghindari kekurangan air, membuat sawah lebih bersih dengan cara membajak atau membersihkan area persawahan dari jerami padi yang akan menyebabkan infeksi dan terakhir selalu perlakuan biji dengan kontrol menggunakan pupuk pestisida.', '1710906129_165560a74f81e6c6b974.png'),
(3, 'D03', 'Hawar Upih Daun dan Busuk Batang (Sheath Blight and Stem Rot)', 'Kepadatan bibit dalam melakukan penanaman padi sebaiknya diberi jarak yang tidak terlalu berdekatan atau bersentuhan. Pengaplikasian pupuk nitrogen sangat disarankan jika jumlah pathogen sangat tinggi. Kemudan pembersihan gulma pada area persawahan harus dilakukan, karena pathogen juga dapat menyerang gulma. penyemprotan tanaman yang terserang hawar upih menggunakan fungisida juga sangat disarankan.', '1710906232_1b82c15b9d55b213ec9b.jpg'),
(4, 'D04', 'Bercak Cokelat Sempit (Narrow Brown Leaf)', 'Penggunaan pupuk potassium dan penyemprotan dengan fungisida seperti benomyl dan propiconazole.', '1710906155_1cb59ef89e548d7af275.jpg'),
(5, 'D05', 'Gosong Palsu (False Smut)', 'Penanganan pengelolaan perkembangan penyakit ini dapat dilakukan dengan menggunakan benih bersertifikat, penggunaan fungisida yang berbeda-beda, seperti copper oxychloride. Pemberian fungisida dilakukan sebelum malai bunting. Area tanaman padi yang tidak memiliki hasil juga harus disemprotkan pestisida.', '1710906168_7fe4c219dfafd359f4a9.jpg'),
(6, 'D06', 'Busuk Upih (Sheat Rot)', 'Menggunakan varietas tahan akan menghasilkan kultivar yang tahan terhadap busuk upih. Penggunaan fungisida seperti karbendazim, maneb dan zineb (Velimek 80 WP) efektif untuk mengendalikan penyakit tersebut. Melakukan pengendalian hayati terhadap Rhizobacteria seperti Pseudomonas fluorescens yang diisolasi dari jeruk dan padi secara nyata toksik terhadap jamur pathogen.', '1710906185_0a09d9261ae70c08c789.jpg'),
(7, 'D07', 'Busuk Batang (Stem Rot)', 'Pembakaran jerami pada setiap sisa tanaman setelah panen atau menunggu pembusukan alami pada jerami akan dapat menurunkan sclerotia disawah. Penggunaan pupuk potassium yang seimbang dapat pH menurunkan infeksi busuk batang dan meningkatkan hasil. Petani dapat menggunakan varietas kultivar tahan. Menyemprotkan fungisida seperti thiophanate-methyl pada penyebaran awal penyakit bisa meminimalkan busuk batang pada padi di sawah.', '1713271068_4ddcbcb2d7293b7db457.jpeg'),
(8, 'D08', 'Penyakit Fusarium (Bakane)', 'Pengendalian yang disarankan adalah dengan membersihkan benih untuk memperkecil terjadinya penyakit, pencegahan dapat dilakukan dengan penyiraman air garam. Benih terinfeksi dari kumpulan benih dan oleh karenanya menurunkan inokulum tular biji Ou (1985). Benomyl atau benomyl-t pada 1-2% berat biji sebaiknya digunakan untuk menyelimuti benih kering IRRI (1983).', '1710906257_77e8dfb29e5c151a8101.jpg'),
(11, 'D09', 'Lapuk Daun', 'xixixixi', '1713271326_dbb3f96858e1b2ae3a19.jpeg'),
(12, 'D10', 'xx', 'xxx', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(30) DEFAULT NULL,
  `password_hash` varchar(255) NOT NULL,
  `reset_hash` varchar(255) DEFAULT NULL,
  `reset_at` datetime DEFAULT NULL,
  `reset_expires` datetime DEFAULT NULL,
  `activate_hash` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `status_message` varchar(255) DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 0,
  `force_pass_reset` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `email`, `username`, `password_hash`, `reset_hash`, `reset_at`, `reset_expires`, `activate_hash`, `status`, `status_message`, `active`, `force_pass_reset`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'adminsiskar@gmail.com', 'adminsiskar', '$2y$10$X9RyqfJgb3urGbMxMAH1m.XTQeGpnfQdfVHY9Mh8dUckU1QQgjf8m', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2024-02-18 22:41:39', '2024-02-18 22:41:39', NULL),
(2, 'adminpadi@gmail.com', 'adminpadi', '$2y$10$kFuEz4YzHThnCEA08JmwA.YrpGYIg4J1NI8Cm3Bquj056D0v3vOdq', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2024-03-04 18:24:57', '2024-03-04 18:24:57', NULL);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `auth_activation_attempts`
--
ALTER TABLE `auth_activation_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `auth_groups`
--
ALTER TABLE `auth_groups`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `auth_groups_permissions`
--
ALTER TABLE `auth_groups_permissions`
  ADD KEY `auth_groups_permissions_permission_id_foreign` (`permission_id`),
  ADD KEY `group_id_permission_id` (`group_id`,`permission_id`);

--
-- Indeks untuk tabel `auth_groups_users`
--
ALTER TABLE `auth_groups_users`
  ADD KEY `auth_groups_users_user_id_foreign` (`user_id`),
  ADD KEY `group_id_user_id` (`group_id`,`user_id`);

--
-- Indeks untuk tabel `auth_logins`
--
ALTER TABLE `auth_logins`
  ADD PRIMARY KEY (`id`),
  ADD KEY `email` (`email`),
  ADD KEY `user_id` (`user_id`);

--
-- Indeks untuk tabel `auth_permissions`
--
ALTER TABLE `auth_permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `auth_reset_attempts`
--
ALTER TABLE `auth_reset_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `auth_tokens`
--
ALTER TABLE `auth_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `auth_tokens_user_id_foreign` (`user_id`),
  ADD KEY `selector` (`selector`);

--
-- Indeks untuk tabel `auth_users_permissions`
--
ALTER TABLE `auth_users_permissions`
  ADD KEY `auth_users_permissions_permission_id_foreign` (`permission_id`),
  ADD KEY `user_id_permission_id` (`user_id`,`permission_id`);

--
-- Indeks untuk tabel `gejala`
--
ALTER TABLE `gejala`
  ADD PRIMARY KEY (`id_gejala`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `parentTree`
--
ALTER TABLE `parentTree`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pengetahuan`
--
ALTER TABLE `pengetahuan`
  ADD PRIMARY KEY (`id_pengetahuan`);

--
-- Indeks untuk tabel `penyakit`
--
ALTER TABLE `penyakit`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `auth_activation_attempts`
--
ALTER TABLE `auth_activation_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `auth_groups`
--
ALTER TABLE `auth_groups`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `auth_logins`
--
ALTER TABLE `auth_logins`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT untuk tabel `auth_permissions`
--
ALTER TABLE `auth_permissions`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `auth_reset_attempts`
--
ALTER TABLE `auth_reset_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `auth_tokens`
--
ALTER TABLE `auth_tokens`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `gejala`
--
ALTER TABLE `gejala`
  MODIFY `id_gejala` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `parentTree`
--
ALTER TABLE `parentTree`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `pengetahuan`
--
ALTER TABLE `pengetahuan`
  MODIFY `id_pengetahuan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `penyakit`
--
ALTER TABLE `penyakit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `auth_groups_permissions`
--
ALTER TABLE `auth_groups_permissions`
  ADD CONSTRAINT `auth_groups_permissions_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `auth_groups` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_groups_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `auth_permissions` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `auth_groups_users`
--
ALTER TABLE `auth_groups_users`
  ADD CONSTRAINT `auth_groups_users_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `auth_groups` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_groups_users_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `auth_tokens`
--
ALTER TABLE `auth_tokens`
  ADD CONSTRAINT `auth_tokens_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `auth_users_permissions`
--
ALTER TABLE `auth_users_permissions`
  ADD CONSTRAINT `auth_users_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `auth_permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_users_permissions_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
