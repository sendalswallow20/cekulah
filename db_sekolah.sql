-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 18, 2025 at 07:34 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_sekolah`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`, `nama`) VALUES
(1, 'admin', 'e214326ee683c40e2906e67ac9d95221', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `id_banner` int(100) NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`id_banner`, `gambar`) VALUES
(4, 'banner2.jpg'),
(5, 'banner3.jpeg'),
(7, 'banner4.jpg'),
(8, 'banner1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id_berita` int(100) NOT NULL,
  `judul_berita` text NOT NULL,
  `isi_berita1` mediumtext NOT NULL,
  `gambar_berita` varchar(255) NOT NULL,
  `tanggal_berita` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id_berita`, `judul_berita`, `isi_berita1`, `gambar_berita`, `tanggal_berita`) VALUES
(1, 'Lewis Hamilton warned of Ferrari challenge he cannot ‘underestimate’', '<p><span style=\"font-family: &quot;trebuchet ms&quot;, sans-serif;\"><strong>The seven-time World Champion</strong></span>’s move to Ferrari represents only the second team switch of his illustrious career, with his only previous transfer occurring in 2013 when he swapped McLaren for Mercedes.</p>\r\n\r\n<p>Over the course of an 11-year stint with Mercedes, Hamilton cemented his status as the most successful driver in F1 history, equalling Michael Schumacher’s record of seven titles in 2020 before becoming the first man to surpass 100 race wins and pole positions the following year.</p>\r\n\r\n<p>Hamilton, who turned 40 earlier this month, remains hopeful of adding an eighth title to his collection, having been denied the 2021 crown in highly controversial circumstances as Verstappen, the Red Bull driver, secured the first of four consecutive World Championships.</p>', 'berita1.jpg', '2025-01-23 00:00:00'),
(2, 'Lewis Hamilton Really Suited Up For His First Day At Ferrari', '<p><strong><span style=\"font-family: \" ms\",=\"\" sans-serif;\"=\"\">Sir Lewis Carl Davidson Hamilton</span></strong> is the greatest that Formula One has ever seen. I don’t necessarily mean his on-track talent, though there’s an argument to be made for that as well. I’m referring, here, to his ability to understand fashion like no other racing driver ever has. This man knows the gravity of the situation at hand, his first day at the longest-running and most-famous F1 team in history, after winning more races than any driver the championship has ever seen with Mercedes power. Every driver wants to race for Ferrari, and with retirement on the horizon, Hamilton knows this is his shot. He’s showing up and doing the work to make it worth it, and looking cool as hell doing it.</p>\r\n\r\n<p>Hamilton has never shied away from flaunting his fashion sense in the F1 paddock. While his most recent primary rival dresses exclusively in Red Bull team kit like a 12-year-old with a favorite t-shirt, Lewis treats every walk to his pit stall like a fashion runway. He wasn’t given much leeway to create his personal style under Ron Dennis’ watchful eye at McLaren, but since joining the Mercedes factory squad in 2013 he’s pushed his way further into the fashion zeitgeist. He’s even stunted on everyone at The Met Gala, arguably fashion’s biggest night.</p>\r\n\r\n<p>It goes without saying that I’m excited to see what Hamilton can do when he gets in the car for the 2025 season, but it’s almost more exciting to see what he’ll do when he’s away from the race track. This is a determined driver who will do what it takes to push, and he’s going to look damn good doing it. He even won over Twitter’s harshest menswear critic.</p>', 'sir.webp', '2025-01-27 18:18:07'),
(4, 'dsfgsdfg', '<p>sdfgsdfg</p>', 'berita1.jpg', '2025-01-27 18:19:13');

-- --------------------------------------------------------

--
-- Table structure for table `ekstra`
--

CREATE TABLE `ekstra` (
  `id_extra` int(100) NOT NULL,
  `gambar_ekstra` varchar(255) NOT NULL,
  `nama_ekstra` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ekstra`
--

INSERT INTO `ekstra` (`id_extra`, `gambar_ekstra`, `nama_ekstra`) VALUES
(1, 'mancin.jpg', 'Mancing'),
(2, 'klityih.jpg', 'Klitih'),
(3, 'mbalap.jpg', 'Mbalap'),
(4, 'bega.jpg', 'Begal');

-- --------------------------------------------------------

--
-- Table structure for table `fasilitas`
--

CREATE TABLE `fasilitas` (
  `id_fasilitas` int(100) NOT NULL,
  `nama_fasilitas` text NOT NULL,
  `gambar_fasilitas` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fasilitas`
--

INSERT INTO `fasilitas` (`id_fasilitas`, `nama_fasilitas`, `gambar_fasilitas`) VALUES
(1, 'Lapangan 1', 'Lap1.jpg'),
(2, 'Lapangan Basket', 'basket1.jpg'),
(3, 'Bengkel? sd ono bengkel?', 'bengkel.jpg'),
(4, 'Kantin coy, makan gratise endi', 'kantin.jpg'),
(5, 'Lap Komputer', 'komputer.jpg'),
(6, 'Perpustakaan', 'perpustakaan.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `pesan`
--

CREATE TABLE `pesan` (
  `id_pesan` int(100) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `telepon` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `judul` text NOT NULL,
  `pesan` text NOT NULL,
  `tanggal_pesan` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pesan`
--

INSERT INTO `pesan` (`id_pesan`, `nama`, `telepon`, `email`, `judul`, `pesan`, `tanggal_pesan`) VALUES
(2, 'hayo', 'siapa loh kok iso teks?', 'email@ini.com', 'ini judul ceritanya', 'nganu mas iki nganu', '2025-01-22');

-- --------------------------------------------------------

--
-- Table structure for table `prestasi`
--

CREATE TABLE `prestasi` (
  `id_prestasi` int(11) NOT NULL,
  `gambar_prestasi` varchar(255) NOT NULL,
  `nama_prestasi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `prestasi`
--

INSERT INTO `prestasi` (`id_prestasi`, `gambar_prestasi`, `nama_prestasi`) VALUES
(1, '1-1.png', 'Makan beling tahun 2033');

-- --------------------------------------------------------

--
-- Table structure for table `profil`
--

CREATE TABLE `profil` (
  `id_profil` int(100) NOT NULL,
  `judul_profil` text NOT NULL,
  `isi_profil1` mediumtext NOT NULL,
  `gambar_profil` varchar(255) NOT NULL,
  `tanggal_profil` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `profil`
--

INSERT INTO `profil` (`id_profil`, `judul_profil`, `isi_profil1`, `gambar_profil`, `tanggal_profil`) VALUES
(2, 'Sejarah Sekolah', '<p>SDN 3 Purwosari merupakan Sekolah Dasar Negeri yang ada di Kudus, Jawa Tengah dan diresmikan pada 1 Januari 1910 dan beralamat di JL JEPARA NO 43 KUDUS, Purwosari, Kec. Kota Kudus, Kab. Kudus Prov. Jawa Tengah.</p>', 'logornb.png', '2025-01-23'),
(6, 'Visi Misi Gak Tuh Walawe', '<p><strong><span style=\"font-family: \" ms\",=\"\" sans-serif;=\"\" 125%;\"=\"\">VISI</span></strong><br>\r\n- Berwawasan global dalam IPTEK, kompetitif, aktual, berbudaya lingkungan berlandaskan iman dan taqwa<br>\r\n&nbsp;<br>\r\n<strong>MISI Iyakah?</strong><br>\r\n- Mengaktualisasikan sains, teknologi, sosial, seni dan budaya, dalam meningkatkan nilai tambah sehingga&nbsp;menghasilkan siswa berkepribadian tangguh dan mandiri serta memiliki kemampuan berkomunikasi secara global.<br>\r\n- Mengembangkan keunggulan ekstrakurikuler secara intensif dan berkelanjutan.<br>\r\n- Mewujudkan sekolah peduli dan berbudaya lingkungan serta melakukan upaya perlindungan dan pengelolaan lingkungan hidup.<br>\r\n- Menerapkan manajemen sekolah yang kooperatif dan terstandar.<br>\r\n- Menumbuhkan penghayatan dan pengamalan beribadah sebagai sumber kearifan dan nilai-nilai budi pekerti.</p>', 'contoh_velg.jpg', '2025-01-27'),
(8, 'Sambutan Kepala Sekolah', '<p>Assalamualaikum Wr. Wb.,<br>\r\n&nbsp;<br>\r\nSetiap peluang baru adalah lompatan keyakinan total. Tidak seorang pun dari kita dapat memprediksi masa depan, jadi berganti pekerjaan, atau dalam kasus saya berganti tim, selalu akan disertai dengan sejumlah risiko, tetapi saya yakin akan lebih berisiko jika tetap bertahan di tempat yang membuat Anda nyaman dan menjadi puas diri. Sebut saja insting atau firasat, tetapi saya tahu bahwa menandatangani kontrak dengan Ferrari adalah langkah yang tepat bagi saya dan akan memberi saya tantangan yang saya butuhkan.<br>\r\n&nbsp;<br>\r\nAda begitu banyak orang luar biasa di tim yang membuat saya tidak sabar untuk bekerja sama, dan saya memiliki keyakinan penuh bahwa kita akan mencapai hal-hal hebat bersama. Saya sudah tahu dari luar betapa bersemangatnya keluarga Ferrari, dari semua orang di tim hingga tifosi (penggemar), tetapi sekarang menyaksikannya secara langsung sebagai pembalap Ferrari sungguh menakjubkan. Semangat itu mengalir dalam nadi mereka.<br>\r\n&nbsp;<br>\r\nKetika saya menyalakan mobil dan melaju melewati pintu garasi itu, saya tersenyum lebar. Itu mengingatkan saya pada saat pertama kali saya menguji mobil Formula 1. Itu adalah momen yang sangat mengasyikkan dan istimewa. Dan di sinilah saya, hampir 20 tahun kemudian, merasakan emosi itu lagi. Saya cukup beruntung untuk memiliki banyak hal pertama dalam karier saya, dari tes pertama hingga balapan pertama, podium, kemenangan, dan kejuaraan. Jadi, saya tidak yakin berapa banyak lagi hal pertama yang saya miliki, tetapi mengendarai mobil Scuderia Ferrari HP untuk pertama kalinya pagi ini adalah salah satu perasaan terbaik dalam hidup saya.<br>\r\n&nbsp;<br>\r\nWassalamualaikum Wr. Wb.</p>', 'fotolh.jpg', '2025-01-27');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id_staff` int(100) NOT NULL,
  `nama` text NOT NULL,
  `foto` varchar(255) NOT NULL,
  `jabatan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id_banner`);

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indexes for table `ekstra`
--
ALTER TABLE `ekstra`
  ADD PRIMARY KEY (`id_extra`);

--
-- Indexes for table `fasilitas`
--
ALTER TABLE `fasilitas`
  ADD PRIMARY KEY (`id_fasilitas`);

--
-- Indexes for table `pesan`
--
ALTER TABLE `pesan`
  ADD PRIMARY KEY (`id_pesan`);

--
-- Indexes for table `prestasi`
--
ALTER TABLE `prestasi`
  ADD PRIMARY KEY (`id_prestasi`);

--
-- Indexes for table `profil`
--
ALTER TABLE `profil`
  ADD PRIMARY KEY (`id_profil`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id_staff`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `id_banner` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id_berita` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `ekstra`
--
ALTER TABLE `ekstra`
  MODIFY `id_extra` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `fasilitas`
--
ALTER TABLE `fasilitas`
  MODIFY `id_fasilitas` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `pesan`
--
ALTER TABLE `pesan`
  MODIFY `id_pesan` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `prestasi`
--
ALTER TABLE `prestasi`
  MODIFY `id_prestasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `profil`
--
ALTER TABLE `profil`
  MODIFY `id_profil` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `id_staff` int(100) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
