-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 17 Des 2022 pada 02.00
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_drakor`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_drakor`
--

CREATE TABLE `data_drakor` (
  `id` int(11) NOT NULL,
  `judul` varchar(30) NOT NULL,
  `deskripsi` text NOT NULL,
  `durasi` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_drakor`
--

INSERT INTO `data_drakor` (`id`, `judul`, `deskripsi`, `durasi`) VALUES
(2, 'Romance', 'Romansa cinta', '03:30:00'),
(3, 'ROMANSA CINTA', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere libero, molestiae nobis ipsum doloremque maxime hic cupiditate accusantium asperiores incidunt voluptates placeat laborum eum nemo dicta dolore similique qui rerum.', '02:20:00'),
(7, 'kisah kelam', 'lagu', '02:30:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_user`
--

CREATE TABLE `data_user` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_user`
--

INSERT INTO `data_user` (`id`, `username`, `password`) VALUES
(8, 'aliyarahmaniah', '$2y$10$W4CMJ2T6MKYwuDPoHTtfg.Ea/wREKQ8p0JJYhODYA8iafFbagXIEK'),
(9, 'aaallliiiiyaaa', 'jungkiieee');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `data_drakor`
--
ALTER TABLE `data_drakor`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `data_user`
--
ALTER TABLE `data_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `data_drakor`
--
ALTER TABLE `data_drakor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `data_user`
--
ALTER TABLE `data_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
