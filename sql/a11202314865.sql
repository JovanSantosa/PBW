-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 09, 2025 at 09:35 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `a11202314865`
--

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE `artikel` (
  `id` int(11) NOT NULL,
  `judul` varchar(150) NOT NULL,
  `penulis` varchar(150) NOT NULL,
  `isi` text NOT NULL,
  `excerpt` varchar(50) DEFAULT NULL,
  `gambar` varchar(255) NOT NULL,
  `tanggal` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `artikel`
--

INSERT INTO `artikel` (`id`, `judul`, `penulis`, `isi`, `excerpt`, `gambar`, `tanggal`) VALUES
(14, 'Bakso', 'danny', 'Bakso adalah salah satu makanan khas Indonesia yang sangat populer. Hidangan ini berupa bola-bola daging yang terbuat dari campuran daging sapi giling dan tepung tapioka, meskipun ada variasi lain yang menggunakan ayam, ikan, udang, atau bahkan tahu. Bakso biasanya disajikan dalam kuah kaldu yang gurih, lengkap dengan pelengkap seperti mie, bihun, tahu, pangsit, siomay, tauge, serta taburan daun seledri dan bawang goreng.', 'Bakso adalah salah satu makanan khas Indonesia yan', '20250110031334.png', '2025-01-10'),
(15, 'Komputer', 'danny', 'Komputer adalah perangkat elektronik yang dirancang untuk memproses, menyimpan, dan menampilkan data. Sejak kemunculannya, komputer telah menjadi bagian integral dari kehidupan manusia, mulai dari mendukung pekerjaan, pendidikan, hiburan, hingga pengembangan teknologi canggih seperti kecerdasan buatan dan eksplorasi luar angkasa.', 'Komputer adalah perangkat elektronik yang dirancan', '20250110031639.png', '2025-01-10'),
(16, 'Anjing', 'danny', 'Anjing adalah salah satu hewan peliharaan paling populer dan telah menjadi sahabat manusia selama ribuan tahun. Mereka dikenal karena kesetiaan, kecerdasan, dan kemampuan untuk menjalin hubungan emosional yang mendalam dengan pemiliknya. Anjing tidak hanya berfungsi sebagai hewan peliharaan, tetapi juga berperan dalam berbagai bidang, seperti penjaga, pendamping, bahkan membantu manusia dalam pekerjaan tertentu.', 'Anjing adalah salah satu hewan peliharaan paling p', '20250110031654.png', '2025-01-10'),
(17, 'Mie Ayam', 'Jovan', 'Mie ayam adalah salah satu hidangan khas Indonesia yang sangat digemari masyarakat. Hidangan ini terdiri dari mie kuning yang disajikan dengan topping ayam berbumbu khas, kuah kaldu yang gurih, serta pelengkap seperti pangsit, bakso, sawi hijau, dan taburan daun bawang. Dengan cita rasa yang kaya dan tekstur mie yang kenyal, mie ayam menjadi makanan favorit dari kalangan anak-anak hingga orang dewasa.', 'Mie ayam adalah salah satu hidangan khas Indonesia', '20250110031813.png', '2025-01-10'),
(18, 'Handphone', 'Jovan', 'Handphone, atau telepon genggam, adalah perangkat elektronik portabel yang dirancang untuk berkomunikasi melalui jaringan telekomunikasi. Dalam perkembangannya, handphone tidak hanya berfungsi sebagai alat komunikasi, tetapi juga menjadi perangkat multifungsi yang mendukung kebutuhan sehari-hari, mulai dari hiburan hingga produktivitas.', 'Handphone, atau telepon genggam, adalah perangkat ', '20250110031856.png', '2025-01-10'),
(19, 'Valorant', 'Jovan', 'Valorant adalah game first-person shooter (FPS) taktis yang dikembangkan oleh Riot Games. Dirilis secara global pada 2 Juni 2020, Valorant langsung menarik perhatian komunitas gaming karena gameplay-nya yang kompetitif, mekanisme yang mendalam, dan pendekatan unik terhadap genre FPS. Menggabungkan elemen taktik ala Counter-Strike dengan kemampuan karakter seperti dalam Overwatch, Valorant telah menjadi salah satu game paling populer di dunia esports.', 'Valorant adalah game first-person shooter (FPS) ta', '20250110031932.png', '2025-01-10'),
(20, 'CS GO', 'Jovan', 'Counter-Strike: Global Offensive (CS: GO) adalah salah satu game tembak-menembak (FPS) yang paling populer di dunia. Dikembangkan oleh Valve dan Hidden Path Entertainment, CS: GO dirilis pada tahun 2012 sebagai kelanjutan dari seri Counter-Strike yang sudah lama dikenal. CS: GO menawarkan pengalaman bermain yang kompetitif dan memerlukan keterampilan yang sangat terasah, baik dalam hal tembak-menembak, strategi, maupun kerjasama tim. Artikel ini akan membahas dasar-dasar permainan CS: GO, mekanisme gameplay, serta beberapa tips dan strategi untuk membantu Anda meraih kemenangan.', 'Counter-Strike: Global Offensive (CS: GO) adalah s', '20250110032029.png', '2025-01-10'),
(21, 'Last Artikel', 'Jovan', 'Last', 'Last', '20250110032337.png', '2025-01-10');

-- --------------------------------------------------------

--
-- Table structure for table `galeri`
--

CREATE TABLE `galeri` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `galeri`
--

INSERT INTO `galeri` (`id`, `image`, `deskripsi`, `tanggal`) VALUES
(16, '20250110032051.png', 'Screenshot ', '2025-01-10'),
(17, '20250110032100.png', 'Scoreboard', '2025-01-10'),
(18, '20250110032110.jpg', 'Sekolah', '2025-01-10'),
(19, '20250110032117.jpeg', 'Fyler', '2025-01-10'),
(20, '20250110032125.png', 'Kucing', '2025-01-10'),
(21, '20250110032134.png', 'Maxi Anjing', '2025-01-10'),
(22, '20250110032152.png', 'Bill Gates', '2025-01-10'),
(23, '20250110032202.png', 'China', '2025-01-10');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(250) NOT NULL,
  `password` varchar(225) NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `password`, `foto`) VALUES
(14, 'danny', '21232f297a57a5a743894a0e4a801fc3', ''),
(18, 'admin', 'd41d8cd98f00b204e9800998ecf8427e', '20250110031404.jpeg'),
(19, 'Jovan', 'e10adc3949ba59abbe56e057f20f883e', '20250110031420.jpeg'),
(20, 'Lino', 'b64dd1fa22d50754e373655f792a9b7b', ''),
(21, 'Ryan', 'd41d8cd98f00b204e9800998ecf8427e', '20250110031549.png'),
(22, 'Justin', 'd41d8cd98f00b204e9800998ecf8427e', ''),
(23, 'inifreak', 'e4c6fa110600f829ed425c8fd7ccb2a9', '20250110031524.png'),
(24, 'admin', 'e10adc3949ba59abbe56e057f20f883e', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `galeri`
--
ALTER TABLE `galeri`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
