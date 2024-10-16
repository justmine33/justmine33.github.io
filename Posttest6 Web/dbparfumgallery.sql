-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 09, 2024 at 05:02 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbparfumgallery`
--

-- --------------------------------------------------------

--
-- Table structure for table `notes`
--

CREATE TABLE `notes` (
  `id_note` int(11) NOT NULL,
  `nama_notes` varchar(255) NOT NULL,
  `deskripsi` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `notes`
--

INSERT INTO `notes` (`id_note`, `nama_notes`, `deskripsi`) VALUES
(1, 'Rose', NULL),
(2, 'Lemon', NULL),
(3, 'Mandarin', NULL),
(4, 'Bergamot', NULL),
(5, 'Jasmine', NULL),
(6, 'Tuberose', NULL),
(7, 'Ylang-Ylang', NULL),
(8, 'Osmantus', NULL),
(9, 'Orange Blossom', NULL),
(10, 'Frangipani', NULL),
(11, 'Gardenia', NULL),
(12, 'Violet', NULL),
(13, 'Lily Of The Valley', NULL),
(14, 'Pear', NULL),
(15, 'Plum', NULL),
(16, 'Rasberry', NULL),
(17, 'Strawberry', NULL),
(18, 'Blackcurrant', NULL),
(19, 'Raspberry', NULL),
(20, 'Apple', NULL),
(21, 'Grapefruit', NULL),
(22, 'Tonkabean', NULL),
(23, 'Cedarwood', NULL),
(24, 'Oud', NULL),
(25, 'Sandalwood', NULL),
(26, 'Vetiver', NULL),
(27, 'Patchoulli', NULL),
(28, 'Cashmeran', NULL),
(29, 'Agarwood', NULL),
(30, 'Ambergris', NULL),
(31, 'Guaiac Wood', NULL),
(32, 'Freesia', NULL),
(33, 'Peony', NULL),
(34, 'Jasmine Sambac', NULL),
(35, 'Magnolia', NULL),
(36, 'Orchid', NULL),
(37, 'Green Apple', NULL),
(38, 'Fig', NULL),
(39, 'Davana', NULL),
(40, 'Cedarmom', NULL),
(41, 'Pink Pepper', NULL),
(42, 'Cinnamon', NULL),
(43, 'Nutmeg', NULL),
(44, 'Tobacco', NULL),
(45, 'Honey', NULL),
(46, 'Amber', NULL),
(47, 'Vanilla', NULL),
(48, 'Incense', NULL),
(49, 'Leather', NULL),
(50, 'Musk', NULL),
(51, 'White Musk', NULL),
(52, 'Galbanum', NULL),
(53, 'Earl Gray Tea', NULL),
(54, 'Black Tea', NULL),
(55, 'Tangerin', NULL),
(56, 'Ozonic', NULL),
(57, 'Aldehyde', NULL),
(58, 'Cap Jasmine', NULL),
(59, 'Oiellet', NULL),
(60, 'Redwood', NULL),
(61, 'Irish', NULL),
(62, 'Papper', NULL),
(63, 'Myrrh', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `parfum`
--

CREATE TABLE `parfum` (
  `id_parfum` int(11) NOT NULL,
  `nama_parfum` varchar(255) NOT NULL,
  `brand` varchar(255) NOT NULL,
  `deskripsi` varchar(255) DEFAULT NULL,
  `kategori` varchar(100) DEFAULT NULL,
  `tahun_rilis` year(4) DEFAULT NULL,
  `foto_parfum` varchar(255) DEFAULT NULL,
  `top_notes` varchar(255) NOT NULL,
  `middle_notes` varchar(255) NOT NULL,
  `base_notes` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `parfum`
--

INSERT INTO `parfum` (`id_parfum`, `nama_parfum`, `brand`, `deskripsi`, `kategori`, `tahun_rilis`, `foto_parfum`, `top_notes`, `middle_notes`, `base_notes`) VALUES
(1, 'Galleria', 'Alchemist', 'Floral dan classy - Galleria akan menyapamu dengan aroma Tuberose, Honey dan Plum.', 'White Floral', '2023', 'Galleria.jpeg', 'Cap Jasmine, Plum', 'Tuberose, Oillet', 'Honey, Redwood'),
(2, 'Potrait Of Kyoto', 'The Body Tale', 'The Body Tale Portrait of Kyoto merupakan parfum yang terinspirasi dari suasana morning holiday di luxury hotel at Kyoto sambil enjoying your morning tea. Very fresh, elegance, dan luxury.', 'Tea', '2023', 'potrait-of-kyoto.jpeg', 'Earl Grey Tea, Apple, Honey, Mandarin', 'Jasmine, Black Tea, Freesia, Irish', 'Musk, Papper, Sandalwood, Amber'),
(3, 'Aphrodite', 'Mykonos', 'Aphrodite merupakan parfum dengan aroma hangat dari woody & aromatic Myrrh yang menghipnotis pada semprotan pertama, bertransisi menjadi sweet & smoky burnt cinnmon, dengan hembusan white floral yang elegan, menari di atas panggung tembakau yang seksi', 'Spicy Aromatic', '2023', 'aphrodite.jpeg', 'Jasmine, Burnt Cinnamon, Myrrh', 'Cedarwood, Tonkabean, Sandalwood', 'White Musk, Tobacco Vanilla, Mineral Amber'),
(4, 'Reverie', 'Alt Parfumery', 'Reverie adalah parfum white floral yang unik. Percampuran antara davana dan balckcurrant menjadikan aroma parfum ini memiliki sedikit hint bubblegum.', 'White Floral Aromatic', '2023', 'reverie.jpeg', 'Tuberose, White Flower', 'Blackcurrant, Davana', 'Vanilla, Myrrh'),
(5, 'First Kiss', 'Crusita', 'First kiss adalah parfum dengan tipe aroma fresh yang akan membuat kamu membayangkan suasana pagi yang cerah, santai dengan secangkir teh.', 'White Floral Fresh', '2024', 'first-kiss.jpeg', 'Blackcurrant, Papper', 'Jasmine, Muguet, Rose', 'Amber, Musk, Vanilla'),
(6, 'Troupe', 'Saff n Co', 'Troupe adalah parfum dengan aroma floral dan fruity yang halus. Troupe memiliki aroma yang tenang dan manis, namun cukup berkelas untuk mencuri perhatian orang-orang sekitar anda.', 'Fruity Floral', '2020', 'troupe.jpeg', 'Citrus, Pear', 'Rose, Orange Blossom, Freesia', 'Patchoulli, Musk, Amber'),
(7, 'Morrocan Sunset', 'Alt Parfumery', 'Morrocan sunset merupakan sebuah parfum yang terinspirasi dari keajaiban neroli. Sebuah tanaman dengan aroma unik yang berasal dari marroco yang merupakan one of sexiest destination in the world.', 'Sweet Aromatic', '2021', 'morrocan-sunset.jpeg', 'Neroli, Bergamot, Red Fruits', 'Orange Blossom, Jasmine, Cinnamon, Resin', 'Vanilla, Caramel, Musk, Cedarwood'),
(8, 'Gratitude', 'Onix', 'Gratitude adalah parfum dengan aroma fresh floral yang elegant. Cocok untuk menemani segala aktivitas harianmu.', 'Fruity Floral Sweet', '2022', 'gratitude.jpeg', 'Green, Fruity, Ozone', 'White Floral, Caramel, Lactone, Violet', 'Amber, Musk, Vanilla, Sandalwood, Cedarwood'),
(9, 'Satin Blanc', 'Mykonos', 'Satin blanc merupakan parfum dengan aroma fresh juiciness dari orchid fresh apples.', 'Fruity Fresh Sweet', '2023', 'satin-blanc.jpeg', 'Bergamot, Black Papper, Green Apple', 'Cedarwood, Jasmine Tea, Floral Bouquet, Aquatic', 'White Amber, Tonkabean, Vanilla');

-- --------------------------------------------------------

--
-- Table structure for table `parfum_notes`
--

CREATE TABLE `parfum_notes` (
  `id_parfum` int(11) NOT NULL,
  `id_note` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `parfum_notes`
--

INSERT INTO `parfum_notes` (`id_parfum`, `id_note`) VALUES
(1, 6),
(1, 15),
(1, 45),
(1, 58),
(1, 59),
(1, 60),
(2, 3),
(2, 5),
(2, 20),
(2, 25),
(2, 32),
(2, 45),
(2, 46),
(2, 50),
(2, 53),
(2, 54),
(2, 61),
(2, 62),
(3, 5),
(3, 22),
(3, 23),
(3, 25),
(3, 42),
(3, 44),
(3, 46),
(3, 47),
(3, 51),
(3, 63);

-- --------------------------------------------------------

--
-- Table structure for table `saran`
--

CREATE TABLE `saran` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `kategori` varchar(50) NOT NULL,
  `saran` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `saran`
--

INSERT INTO `saran` (`id`, `nama`, `email`, `kategori`, `saran`, `created_at`) VALUES
(7, 'aagatau', 'saya@gmail.com', 'kritik', 'pem web gajelas', '2024-10-09 13:47:35');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `role` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama`, `password`, `email`, `role`) VALUES
(1, 'Admin', 'Admin123', NULL, 'a'),
(8, 'aagatau', 'sasas', 'gatauu@as', 'u');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `notes`
--
ALTER TABLE `notes`
  ADD PRIMARY KEY (`id_note`);

--
-- Indexes for table `parfum`
--
ALTER TABLE `parfum`
  ADD PRIMARY KEY (`id_parfum`);

--
-- Indexes for table `parfum_notes`
--
ALTER TABLE `parfum_notes`
  ADD PRIMARY KEY (`id_parfum`,`id_note`),
  ADD KEY `id_note` (`id_note`);

--
-- Indexes for table `saran`
--
ALTER TABLE `saran`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `notes`
--
ALTER TABLE `notes`
  MODIFY `id_note` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `parfum`
--
ALTER TABLE `parfum`
  MODIFY `id_parfum` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `saran`
--
ALTER TABLE `saran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `parfum_notes`
--
ALTER TABLE `parfum_notes`
  ADD CONSTRAINT `parfum_notes_ibfk_1` FOREIGN KEY (`id_parfum`) REFERENCES `parfum` (`id_parfum`) ON DELETE CASCADE,
  ADD CONSTRAINT `parfum_notes_ibfk_2` FOREIGN KEY (`id_note`) REFERENCES `notes` (`id_note`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
