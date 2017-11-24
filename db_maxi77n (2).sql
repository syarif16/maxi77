-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 23 Nov 2017 pada 10.09
-- Versi Server: 10.1.13-MariaDB
-- PHP Version: 7.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_maxi77n`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin_users`
--

CREATE TABLE `admin_users` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `buses`
--

CREATE TABLE `buses` (
  `id` int(10) UNSIGNED NOT NULL,
  `tipeBus` enum('standar','eksekutif') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seat` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jumlahKursi` int(11) DEFAULT NULL,
  `hargaSewa` mediumint(9) DEFAULT NULL,
  `fasilitas` text COLLATE utf8mb4_unicode_ci,
  `kuantitas` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `buses`
--

INSERT INTO `buses` (`id`, `tipeBus`, `seat`, `jumlahKursi`, `hargaSewa`, `fasilitas`, `kuantitas`, `created_at`, `updated_at`) VALUES
(1, 'standar', '2-2', 42, 2000000, 'full ac , TV , Karaoke , Wi-Fi, Bantal , Selimut , Non Toilet', 7, NULL, NULL),
(2, 'standar', '2-3', 49, 3000000, 'full ac , TV , Karaoke , Wi-Fi, Bantal , Selimut , Non Toilet', 9, NULL, NULL),
(3, 'eksekutif', '2-2', 52, 3000000, 'danlain sebagainya', 6, NULL, NULL),
(4, 'standar', '2-3', NULL, 2500000, 'istimewa', 9, '2017-11-22 07:12:16', '2017-11-22 07:12:16');

-- --------------------------------------------------------

--
-- Struktur dari tabel `cari`
--

CREATE TABLE `cari` (
  `id` int(10) UNSIGNED NOT NULL,
  `tanggalBerangkat` date NOT NULL,
  `tanggalkembali` date NOT NULL,
  `tipe` enum('Standar','Eksekutif') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `cari`
--

INSERT INTO `cari` (`id`, `tanggalBerangkat`, `tanggalkembali`, `tipe`) VALUES
(1, '2017-11-15', '2017-11-17', 'Standar'),
(2, '2017-11-18', '2017-11-27', 'Eksekutif'),
(3, '2017-11-26', '2017-11-28', 'Standar');

-- --------------------------------------------------------

--
-- Struktur dari tabel `crews`
--

CREATE TABLE `crews` (
  `id` int(10) UNSIGNED NOT NULL,
  `supir` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telepon` text COLLATE utf8mb4_unicode_ci,
  `mulaiKerja` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `crews`
--

INSERT INTO `crews` (`id`, `supir`, `telepon`, `mulaiKerja`, `created_at`, `updated_at`) VALUES
(1, 'Dwiki', '82u1301', '2016-11-29', '2017-11-12 20:01:33', '2017-11-12 20:01:33');

-- --------------------------------------------------------

--
-- Struktur dari tabel `detailbuses`
--

CREATE TABLE `detailbuses` (
  `idDetailbuses` int(11) NOT NULL,
  `idBus` int(11) NOT NULL,
  `idJadwal` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `detailbuses`
--

INSERT INTO `detailbuses` (`idDetailbuses`, `idBus`, `idJadwal`) VALUES
(1, 1, 1),
(3, 2, 2),
(4, 3, 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `jadwal`
--

CREATE TABLE `jadwal` (
  `idJadwal` int(11) NOT NULL,
  `tanggalBerangkat` date NOT NULL DEFAULT '0000-00-00',
  `tanggalPulang` date NOT NULL DEFAULT '0000-00-00',
  `tujuan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jadwal`
--

INSERT INTO `jadwal` (`idJadwal`, `tanggalBerangkat`, `tanggalPulang`, `tujuan`) VALUES
(1, '0000-00-00', '0000-00-00', 'surabaya'),
(2, '2017-11-21', '2017-11-24', ''),
(3, '2017-11-25', '2017-11-27', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2017_10_22_150957_create_posts_table', 1),
(4, '2017_10_23_082014_create_buses_table', 2),
(5, '2017_10_23_084547_create_pemesanans_table', 3),
(6, '2017_10_23_085359_create_pemesanan2s_table', 4),
(7, '2017_10_26_134142_create_admin_users_table', 5),
(8, '2017_11_08_012513_create_mitras_table', 6),
(9, '2017_11_08_014144_create_mitras_table', 7),
(10, '2017_11_08_015745_create_transaksis_table', 8),
(11, '2017_11_13_012437_create_crews_table', 9);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pemesanans`
--

CREATE TABLE `pemesanans` (
  `id` int(10) UNSIGNED NOT NULL,
  `namaPemesan` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alamatPemesan` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telepon` varchar(12) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tujuan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jumlah` int(11) NOT NULL,
  `status` enum('menunggu','diterima','batal') COLLATE utf8mb4_unicode_ci DEFAULT 'menunggu',
  `idBus` int(11) NOT NULL,
  `idCari` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pemesanans`
--

INSERT INTO `pemesanans` (`id`, `namaPemesan`, `alamatPemesan`, `telepon`, `tujuan`, `jumlah`, `status`, `idBus`, `idCari`, `created_at`, `updated_at`) VALUES
(1, 'dwiki', 'jember', '1201410', 'lumajang', 2, 'menunggu', 1, 0, '2017-11-19 03:04:27', '2017-11-19 03:04:27'),
(2, 'Syarif', 'argopuro', '0897777', 'jombang', 4, 'menunggu', 2, 0, '2017-11-20 23:58:07', '2017-11-20 23:58:07'),
(3, 'Syarif', 'argopuro', '1023132u', 'ajung', 2, 'menunggu', 5, 0, '2017-11-20 23:58:40', '2017-11-20 23:58:40'),
(4, 'rida', 'lmj', '534677989', 'gebang', 3, 'diterima', 1, 0, '2017-11-22 06:39:04', '2017-11-22 06:39:04'),
(5, 'tegarr', 'jbg', '4354657689', 'kalisat', 1, 'diterima', 1, 0, '2017-11-22 06:42:04', '2017-11-22 06:42:04'),
(6, NULL, 'lmj', '5678678', 'lmj', 2, NULL, 2, 2, '2017-11-22 09:32:42', '2017-11-22 09:32:42'),
(7, 'saya', 'jbr', '123456', 'jbg', 2, NULL, 1, 2, '2017-11-22 09:48:50', '2017-11-22 09:48:50'),
(8, 'kamu', 'lmj', '1234567', 'jbr', 2, NULL, 1, 1, '2017-11-22 09:50:20', '2017-11-22 09:50:20'),
(9, 'kita', 'jbr', '345678', 'lmj', 2, NULL, 1, 1, '2017-11-22 09:52:25', '2017-11-22 09:52:25'),
(10, 'kalian', 'lmj', '1234567', 'jbr', 2, NULL, 2, 3, '2017-11-22 10:43:22', '2017-11-22 10:43:22');

-- --------------------------------------------------------

--
-- Struktur dari tabel `posts`
--

CREATE TABLE `posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `body` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `posts`
--

INSERT INTO `posts` (`id`, `title`, `body`, `created_at`, `updated_at`) VALUES
(1, 'Contoh Judul', 'Ini adalah isinya', '2017-10-22 08:12:32', '2017-10-22 08:12:32');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksis`
--

CREATE TABLE `transaksis` (
  `id` int(10) UNSIGNED NOT NULL,
  `tanggalTransaksi` date DEFAULT NULL,
  `totalPembayaran` bigint(20) DEFAULT NULL,
  `idPemesanan` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `transaksis`
--

INSERT INTO `transaksis` (`id`, `tanggalTransaksi`, `totalPembayaran`, `idPemesanan`, `created_at`, `updated_at`) VALUES
(1, '2017-11-22', 5000000, 2, '2017-11-07 19:01:14', '2017-11-07 19:01:14'),
(2, '2017-11-23', 900000, 3, '2017-11-22 00:45:23', '2017-11-22 00:45:23');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'dwiki', 'dwikiaditya07@gmail.com', '$2y$10$Go3HBVx/EX6dg8adPb3w9uPCqNYpl/P8tYaBVIPajfMx65R5HCjYe', 'I6rogDnCGIZzpKBch8EwiSnk6mVzlBy6Kp6tb8C4QnlDiN867UGOj4lNVwND', '2017-10-25 21:22:23', '2017-10-25 21:22:23'),
(2, 'ilham', 'ilham@gmail.com', '$2y$10$UJN8OMPeeC2uremrKGm1YORzF4QM/X9evF7b/t4XB4FN6d2.lf4yu', '6o4f60ZEOlRxGYRdtMQgJEARA4dDIx0YxB8uuSRNUFgXQwJtHhkqGtI7LQFx', '2017-10-26 08:11:05', '2017-10-26 08:11:05'),
(3, 'saya', 'saya@gmail.com', '$2y$10$FOr8EvD9BWIUdUWTtaNVdeNjIvqSaUGdaOhIT.741rCvK8Y84SdHC', 'h4K0N74QGuQpn4WBp1RxKmpfCKYghmsCXHiAjYFgFwESCoJZM7ttgc0jPbFb', '2017-11-07 09:27:15', '2017-11-07 09:27:15'),
(4, 'Muhammad Syarif H', 'DBAKJDSAB@MAIL.COM', '$2y$10$9exlB1Pp3nVNq6T.3P.VeOuVlrxT66.akgYkLiqdV0lsKrwXYRx.q', NULL, '2017-11-07 19:58:51', '2017-11-07 19:58:51'),
(5, 'syarif', 'dada@mail.com', '$2y$10$.e5uB8zWyflvjMgWUnQiDObVPghh9U7leB8ckkotJSIFUvqk/J3z6', 'WoIisRbrO4cexBUEwJBrTmSGYrDr2obPKfYqRSelv9UBSoGZrdxx57a8j6Da', '2017-11-12 05:40:13', '2017-11-12 05:40:13'),
(6, 'Admin', 'admin@maxi77.com', '$2y$10$qe.k0GmvBRicSmmUPYpjg.uOcXNjkNnmUjlozZK9WA1GQYBg7TWwq', '49G4pnRAop98z9Q3U0s8uqOBoZDKGA6GkTe7TcCj1tbT50ZxEKsZzdsw3tCR', '2017-11-12 17:20:25', '2017-11-12 17:20:25');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_users`
--
ALTER TABLE `admin_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `buses`
--
ALTER TABLE `buses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cari`
--
ALTER TABLE `cari`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `crews`
--
ALTER TABLE `crews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `detailbuses`
--
ALTER TABLE `detailbuses`
  ADD PRIMARY KEY (`idDetailbuses`);

--
-- Indexes for table `jadwal`
--
ALTER TABLE `jadwal`
  ADD PRIMARY KEY (`idJadwal`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `pemesanans`
--
ALTER TABLE `pemesanans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaksis`
--
ALTER TABLE `transaksis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_users`
--
ALTER TABLE `admin_users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `buses`
--
ALTER TABLE `buses`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `cari`
--
ALTER TABLE `cari`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `crews`
--
ALTER TABLE `crews`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `detailbuses`
--
ALTER TABLE `detailbuses`
  MODIFY `idDetailbuses` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `jadwal`
--
ALTER TABLE `jadwal`
  MODIFY `idJadwal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `pemesanans`
--
ALTER TABLE `pemesanans`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `transaksis`
--
ALTER TABLE `transaksis`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
