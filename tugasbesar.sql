-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 01 Jul 2021 pada 14.22
-- Versi server: 10.4.18-MariaDB
-- Versi PHP: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tugasbesar`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin_mahasiswa`
--

CREATE TABLE `admin_mahasiswa` (
  `id` int(10) NOT NULL,
  `username` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` enum('admin','mahasiswa') NOT NULL,
  `active` int(10) NOT NULL,
  `nim` int(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `admin_mahasiswa`
--

INSERT INTO `admin_mahasiswa` (`id`, `username`, `email`, `password`, `level`, `active`, `nim`) VALUES
(1, 'admin', 'admin@email.com', 'admin', 'admin', 1, 111),
(2, 'galih', 'galih@gmail.com', '123', 'mahasiswa', 1, 1841160001);

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `nim` int(10) NOT NULL,
  `nama` varchar(50) CHARACTER SET latin1 COLLATE latin1_bin NOT NULL,
  `prodi` varchar(50) CHARACTER SET latin1 NOT NULL,
  `jurusan` varchar(50) CHARACTER SET latin1 NOT NULL,
  `email` varchar(50) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`nim`, `nama`, `prodi`, `jurusan`, `email`) VALUES
(111, 'admin', 'null', 'null', 'admin@email.com'),
(1841160001, 'Galih Muhammad Ichsan', 'Jaringan Telekomunikasi Digital', 'Elektro', 'galih@gmail.com'),
(1841160002, 'Alda Ardelia', 'Jaringan Telekomunikasi Digital', 'Elektro', 'alda@gmail.com'),
(1841160003, 'Elvira Rahayu', 'Jaringan Telekomunikasi Digital', 'Elektro', 'elvira@gmail.com'),
(1841160005, 'Luthfi Adi Syahputra', 'Jaringan Telekomunikasi Digital', 'Elektro', 'luthfi@gmail.com'),
(1841160006, 'Miftahul Huda', 'Jaringan Telekomunikasi Digital', 'Elektro', 'miftahul@gmail.com'),
(1841160007, 'Savira Balqis Qatrunnada', 'Jaringan Telekomunikasi Digital', 'Elektro', 'savira@gmail.com'),
(1841160008, 'Elsa Firmaniar', 'Jaringan Telekomunikasi Digital', 'Elektro', 'elsa@gmail.com'),
(1841160009, 'Lovintania Firtila Milleninza', 'Jaringan Telekomunikasi Digital', 'Elektro', 'lovintania@gmail.com'),
(1841160010, 'Muhammad Abdurrohman', 'Jaringan Telekomunikasi Digital', 'Elektro', 'abdurrohman@gmail.com'),
(1841160011, 'Fanizha Dwi Anggraini', 'Jaringan Telekomunikasi Digital', 'Elektro', 'fanizha@gmail.com'),
(1841160012, 'Dhea Ayu Anggraini', 'Jaringan Telekomunikasi Digital', 'Elektro', 'dhea@gmail.com'),
(1841160013, 'Shofia Anjarsari', 'Jaringan Telekomunikasi Digital', 'Elektro', 'shofia@gmail.com'),
(1841160014, 'Dhelia Balqis Zharifa Az-Zahra', 'Jaringan Telekomunikasi Digital', 'Elektro', 'dhelia@gmail.com'),
(1841160015, 'Sandro Tri Alfian', 'Jaringan Telekomunikasi Digital', 'Elektro', 'sandro@gmail.com'),
(1841160016, 'Muhammad Ibnu Muttaqin', 'Jaringan Telekomunikasi Digital', 'Elektro', 'ibnu@gmail.com'),
(1841160017, 'Narulita Dei Nugrahaini', 'Jaringan Telekomunikasi Digital', 'Elektro', 'narulita@gmail.com'),
(1841160018, 'Zainullah', 'Jaringan Telekomunikasi Digital', 'Elektro', 'zainullah@gmail.com'),
(1841160019, 'Reva Rikat Asih', 'Jaringan Telekomunikasi Digital', 'Elektro', 'reva@gmail.com'),
(1841160021, 'Ummi Rizki Alfi Stania', 'Jaringan Telekomunikasi Digital', 'Elektro', 'ummi@gmail.com'),
(1841160022, 'Biondi Andan Safarinda ', 'Jaringan Telekomunikasi Digital', 'Elektro', 'biondi@gmail.com'),
(1841160023, 'Aurel Yllonia Saumi', 'Jaringan Telekomunikasi Digital', 'Elektro', 'aurel@gmail.com'),
(1841160024, 'Achmad Farchan Hadi', 'Jaringan Telekomunikasi Digital', 'Elektro', 'farchan@gmail.com'),
(1841160025, 'Tania Izza Sholikhah', 'Jaringan Telekomunikasi Digital', 'Elektro', 'tania@gmail.com'),
(1841160026, 'M. Mitachus Shomadani', 'Jaringan Telekomunikasi Digital', 'Elektro', 'miftachus@gmail.com'),
(1841160027, 'Luthfi Kukuh Raharjo', 'Jaringan Telekomunikasi Digital', 'Elektro', 'kukuh@gmail.com'),
(1841160028, 'Fathurachman Ardhiannash Anggara', 'Jaringan Telekomunikasi Digital', 'Elektro', 'fathur@gmail.com'),
(1841160029, 'Agustiana Putri Kusumawati', 'Jaringan Telekomunikasi Digital', 'Elektro', 'agustiana@gmail.com'),
(1841160030, 'Rosario Febry Dayu Putra', 'Jaringan Telekomunikasi Digital', 'Elektro', 'febry@gmail.com'),
(1841160031, 'Erlita Putri Wahyu', 'Jaringan Telekomunikasi Digital', 'Elektro', 'erlita@gmail.com'),
(1841160032, 'Najibur Rohman', 'Jaringan Telekomunikasi Digital', 'Elektro', 'naijb@gmail.com'),
(1841160033, 'Isrul An Nuriah', 'Jaringan Telekomunikasi Digital', 'Elektro', 'isrul@gmail.com'),
(1841160034, 'Yurike Aditya Eka Putri', 'Jaringan Telekomunikasi Digital', 'Elektro', 'yurike@gmailcom'),
(1841160035, 'Muhammad Ihsan', 'Jaringan Telekomunikasi Digital', 'Elektro', 'ihsan@gmail.com'),
(1841160036, 'Reza Afrida Dewanti', 'Jaringan Telekomunikasi Digital', 'Elektro', 'reza@gmail.com'),
(1841160037, 'Donna Dwie Hayyu Putri', 'Jaringan Telekomunikasi Digital', 'Elektro', 'donna@gmail.com'),
(1841160038, 'Shinta Dwiyana Saraswati', 'Jaringan Telekomunikasi Digital', 'Elektro', 'shinta@gmail.com'),
(1841160039, 'Afifah Nur Fauziah', 'Jaringan Telekomunikasi Digital', 'Elektro', 'afifah@gmail.com'),
(1841160040, 'Irma Dyah Alfianti', 'Jaringan Telekomunikasi Digital', 'Elektro', 'irma@gmail.com'),
(1841160041, 'Ilham Ramadhan Putra', 'Jaringan Telekomunikasi Digital', 'Elektro', 'ilham@gmail.com'),
(1841160042, 'Amar Farrichil Ayyubi', 'Jaringan Telekomunikasi Digital', 'Elektro', 'amar@gmail.com'),
(1841160043, 'Hendrik Purwanto', 'Jaringan Telekomunikasi Digital', 'Elektro', 'hendrik@gmail.com'),
(1841160044, 'Karina Bella Bestari', 'Jaringan Telekomunikasi Digital', 'Elektro', 'karina@gmail.com'),
(1841160045, 'Mochamad Fa\'iz Irawanto', 'Jaringan Telekomunikasi Digital', 'Elektro', 'faiz@gmail.com'),
(1841160046, 'Jordi Ihza Mahendra ', 'Jaringan Telekomunikasi Digital', 'Elektro', 'jordi@gmail.com'),
(1841160047, 'Daniar Dwi Putra Wigi Prasojo', 'Jaringan Telekomunikasi Digital', 'Elektro', 'daniar@gmail.com'),
(1841160048, 'Mohmmad Iqbal Maulana Firmansyah', 'Jaringan Telekomunikasi Digital', 'Elektro', 'iqbal@gmail.com'),
(1841160049, 'Raka Danendra', 'Jaringan Telekomunikasi Digital', 'Elektro', 'raka@gmail.com'),
(1841160050, 'Miranti Sukmaningrum', 'Jaringan Telekomunikasi Digital', 'Elektro', 'miranti@gmail.com'),
(1841160051, 'Dina Nurika Fitriana', 'Jaringan Telekomunikasi Digital', 'Elektro', 'dina@gmail.com'),
(1841160052, 'Ad Reana Vidya Ramadani', 'Jaringan Telekomunikasi Digital', 'Elektro', 'reana@gmail.com'),
(1841160053, 'Amartya Salsabiila Putri Wicaksono', 'Jaringan Telekomunikasi Digital', 'Elektro', 'putri@gmail.com'),
(1841160054, 'Defandi Dwi Darmawan', 'Jaringan Telekomunikasi Digital', 'Elektro', 'defandi@gmail.com'),
(1841160055, 'Annisa Alma Sofianti', 'Jaringan Telekomunikasi Digital', 'Elektro', 'annisa@gmail.com'),
(1841160056, 'Syamsul Huda Puji Ananta', 'Jaringan Telekomunikasi Digital', 'Elektro', 'syamsul@gmail.com'),
(1841160057, 'Fairuz Rahmadika', 'Jaringan Telekomunikasi Digital', 'Elektro', 'fairuz@gmail.com'),
(1841160058, 'Muhammad Naufal Apsara Firyadha', 'Jaringan Telekomunikasi Digital', 'Elektro', 'naufal@gmail.com'),
(1841160059, 'Yusril Ilham Ramadhan', 'Jaringan Telekomunikasi Digital', 'Elektro', 'yusril@gmail.com'),
(1841160060, 'Muhammad Alif Nabila ', 'Jaringan Telekomunikasi Digital', 'Elektro', 'alif@gmail.com'),
(1841160061, 'Edigius Gantang Sakrista Rohmanto', 'Jaringan Telekomunikasi Digital', 'Elektro', 'edigius@gmail.com'),
(1841160062, 'Hillyatul Aulia', 'Jaringan Telekomunikasi Digital', 'Elektro', 'aulia@gmail.com'),
(1841160063, 'Diva Sabilillah Achmad', 'Jaringan Telekomunikasi Digital', 'Elektro', 'diva@gmail.com'),
(1841160065, 'Nurulita Nuraisy Sukmawati', 'Jaringan Telekomunikasi Digital', 'Elektro', 'nurulita@gmail.com'),
(1841160066, 'Fadila Larasati', 'Jaringan Telekomunikasi Digital', 'Elektro', 'fadila@gmail.com'),
(1841160067, 'Rara Ayuningtyas', 'Jaringan Telekomunikasi Digital', 'Elektro', 'rara@gmail.com'),
(1841160068, 'Ari Galang Udayana', 'Jaringan Telekomunikasi Digital', 'Elektro', 'ari@gmail.com'),
(1841160069, 'Ersha Auranalia', 'Jaringan Telekomunikasi Digital', 'Elektro', 'ersha@gmail.com'),
(1841160070, 'Nur Wijayaningsih', 'Jaringan Telekomunikasi Digital', 'Elektro', 'nur@gmail.com'),
(1841160071, 'Evelyn Zhahlizafitri', 'Jaringan Telekomunikasi Digital', 'Elektro', 'evelyn@gmail.com'),
(1841160072, 'Intan Fadlilla', 'Jaringan Telekomunikasi Digital', 'Elektro', 'intan@gmail.com'),
(1841160073, 'Luthfi Akbar Shidqi', 'Jaringan Telekomunikasi Digital', 'Elektro', 'akbar@gmail.com'),
(1841160074, 'Rafli Athhallah Dinova', 'Jaringan Telekomunikasi Digital', 'Elektro', 'rafli@gmail.com'),
(1841160075, 'Asyiq Maulana', 'Jaringan Telekomunikasi Digital', 'Elektro', 'asyiq@gmail.com'),
(1841160076, 'Shabrina Amalia Putri', 'Jaringan Telekomunikasi Digital', 'Elektro', 'shabrina@gmail.com'),
(1841160077, 'Cindy Dwi Puspita Sari', 'Jaringan Telekomunikasi Digital', 'Elektro', 'cindy@gmail.com'),
(1841160078, 'Fakhry Dzulfikar', 'Jaringan Telekomunikasi Digital', 'Elektro', 'fakhry@gmail.com'),
(1841160079, 'Anggreni Dwi Lestariningsih', 'Jaringan Telekomunikasi Digital', 'Elektro', 'reni@gmail.com'),
(1841160080, 'Mitodius Nicho Swacaesar Setiawan', 'Jaringan Telekomunikasi Digital', 'Elektro', 'nico@gmail.com'),
(1841160081, 'Sania Ahza Yuniar', 'Jaringan Telekomunikasi Digital', 'Elektro', 'vava@gmail.com'),
(1841160082, 'Leonard Alrido Putra', 'Jaringan Telekomunikasi Digital', 'Elektro', 'leonard@gmail.com'),
(1841160083, 'Latansyah Maulana Virnandani', 'Jaringan Telekomunikasi Digital', 'Elektro', 'lala@gmail.com');

-- --------------------------------------------------------

--
-- Struktur dari tabel `nonaktif`
--

CREATE TABLE `nonaktif` (
  `nim` int(10) NOT NULL,
  `nama` varchar(50) CHARACTER SET latin1 COLLATE latin1_bin NOT NULL,
  `kelas` varchar(10) CHARACTER SET latin1 NOT NULL,
  `keterangan` text CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `nonaktif`
--

INSERT INTO `nonaktif` (`nim`, `nama`, `kelas`, `keterangan`) VALUES
(1841160009, 'Lovintania Firtila Milleninza', '2D', 'Non-Aktif'),
(1841160061, 'Edigius Gantang Sakrista Rohmanto', '1A', 'Non-Aktif'),
(1841160067, 'Rara Ayuningtyas', '3B', 'Non-Aktif'),
(1841160076, 'Shabrina Amalia Putri', '1A', 'Non-Aktif'),
(1841160078, 'Fakhry Dzulfikar', '1A', 'Non-Aktif');

-- --------------------------------------------------------

--
-- Struktur dari tabel `prestasi`
--

CREATE TABLE `prestasi` (
  `nim` int(10) NOT NULL,
  `prestasi` varchar(100) CHARACTER SET latin1 NOT NULL,
  `tgl_pelaksanaan` date NOT NULL,
  `deskripsi` text CHARACTER SET latin1 NOT NULL,
  `foto` blob DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `terminal`
--

CREATE TABLE `terminal` (
  `nim` int(10) NOT NULL,
  `nama` varchar(50) CHARACTER SET latin1 COLLATE latin1_bin NOT NULL,
  `kelas` varchar(10) CHARACTER SET latin1 NOT NULL,
  `keterangan` text CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `terminal`
--

INSERT INTO `terminal` (`nim`, `nama`, `kelas`, `keterangan`) VALUES
(1841160035, 'Muhammad Ihsan', '2E', 'Terminal');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin_mahasiswa`
--
ALTER TABLE `admin_mahasiswa`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nim` (`nim`);

--
-- Indeks untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`nim`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin_mahasiswa`
--
ALTER TABLE `admin_mahasiswa`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `nim` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1841160084;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
