-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 02, 2024 at 12:37 AM
-- Server version: 5.7.24
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog_edukasi`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`) VALUES
(1, 'English'),
(2, 'Math'),
(3, 'Science');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `comment_date` date NOT NULL,
  `comment_body` text NOT NULL,
  `user_id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `comment_date`, `comment_body`, `user_id`, `post_id`) VALUES
(5, '2024-07-27', 'Beautiful flower!', 11, 12),
(6, '2024-07-27', 'That&#039;s not ocean tho', 11, 13),
(7, '2024-07-27', 'Couln&#039;t agree anymore', 12, 12),
(8, '2024-07-30', 'tesssasad', 13, 13),
(10, '2024-07-30', 'adad', 13, 16);

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `title` varchar(256) NOT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `image` varchar(255) NOT NULL,
  `article` text NOT NULL,
  `approval` tinyint(1) NOT NULL,
  `user_id` int(11) NOT NULL,
  `category_id` bigint(20) NOT NULL,
  `viewer` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `date`, `title`, `slug`, `image`, `article`, `approval`, `user_id`, `category_id`, `viewer`) VALUES
(12, '2024-07-30', 'New Post', 'new-post', 'default_profile.svg', '<p>Hi There! This is new post</p>', 1, 12, 2, 0),
(13, '2024-07-30', 'laut', 'laut', '1681716320-sekolah-1024x505.png', '<p>Hi There! This is Ocean</p>', 1, 11, 2, 0),
(15, '2024-07-29', 'tes', 'tes', 'default_profile.svg', '&lt;p&gt;tesss&lt;/p&gt;', 1, 13, 3, 0),
(16, '2024-07-30', 'Fajar/Rian Tetap Tenang, Lolos ke Perempatfinal Olimpiade', 'fajarrian-tetap-tenang-lolos-ke-perempatfinal-olimpiade', 'fajar-alfianmuhammad-rian-ardianto-logo-aice-1.jpeg', '<p>https://sport.detik.com/raket/d-7463284/fajar-rian-tetap-tenang-lolos-ke-perempatfinal-olimpiade-kemudian.<br><br>Download Apps Detikcom Sekarang https://apps.detik.com/detik/</p>\r\n<p>&nbsp;</p>\r\n<p>\"&gt;</p>\r\n<p>https://sport.detik.com/raket/d-7463284/fajar-rian-tetap-tenang-lolos-ke-perempatfinal-olimpiade-kemudian.<br><br>Download Apps Detikcom Sekarang https://apps.detik.com/detik/</p>\r\n<p>&nbsp;</p>\r\n<p>\"&gt;</p>\r\n<p>Jakarta - Fajar Alfian/Muhammad Rian Ardianto kunci tiket ke perempatfinal Olimpiade Paris 2024. Meski sempat ada faktor teknis yang mengusik, Fajar/Rian masih bisa tetap tenang dan fokus!<br>Sebelum berlaga hadapi wakil Prancis, Lucas Corvee/Ronan Labar pada Senin (29/7) ada kabar wakil Jerman Mark Lamsfuss/Marvin Seidel. Itu karena, Lamsfuss alami cedera lutut.<br><br>Padahal, Fajar/Rian memulai laga mereka di Grup C Olimpiade Paris 2024 cabor ganda putra bulutangkis dengan kemenangan atas wakil Jerman tersebut. Alhasil sesuai aturan BWF, poin Fajar/Rian jadi nol lagi.<br><br>Baca artikel detiksport, \"Fajar/Rian Tetap Tenang, Lolos ke Perempatfinal Olimpiade Kemudian\" selengkapnya&nbsp;<a href=\"https://sport.detik.com/raket/d-7463284/fajar-rian-tetap-tenang-lolos-ke-perempatfinal-olimpiade-kemudian\">https://sport.detik.com/raket/d-7463284/fajar-rian-tetap-tenang-lolos-ke-perempatfinal-olimpiade-kemudian</a>.<br><br>Download Apps Detikcom Sekarang https://apps.detik.com/detik/</p>\r\n<p>\"&gt;</p>\r\n<p>Jakarta - Fajar Alfian/Muhammad Rian Ardianto kunci tiket ke perempatfinal Olimpiade Paris 2024. Meski sempat ada faktor teknis yang mengusik, Fajar/Rian masih bisa tetap tenang dan fokus!<br>Sebelum berlaga hadapi wakil Prancis, Lucas Corvee/Ronan Labar pada Senin (29/7) ada kabar wakil Jerman Mark Lamsfuss/Marvin Seidel. Itu karena, Lamsfuss alami cedera lutut.<br><br>Padahal, Fajar/Rian memulai laga mereka di Grup C Olimpiade Paris 2024 cabor ganda putra bulutangkis dengan kemenangan atas wakil Jerman tersebut. Alhasil sesuai aturan BWF, poin Fajar/Rian jadi nol lagi.<br><br>Baca artikel detiksport, \"Fajar/Rian Tetap Tenang, Lolos ke Perempatfinal Olimpiade Kemudian\" selengkapnya&nbsp;<a href=\"https://sport.detik.com/raket/d-7463284/fajar-rian-tetap-tenang-lolos-ke-perempatfinal-olimpiade-kemudian\">https://sport.detik.com/raket/d-7463284/fajar-rian-tetap-tenang-lolos-ke-perempatfinal-olimpiade-kemudian</a>.<br><br>Download Apps Detikcom Sekarang https://apps.detik.com/detik/</p>\r\n<p>\"&gt;</p>\r\n<p>https://sport.detik.com/raket/d-7463284/fajar-rian-tetap-tenang-lolos-ke-perempatfinal-olimpiade-kemudian.<br><br>Download Apps Detikcom Sekarang https://apps.detik.com/detik/</p>\r\n<p>&nbsp;</p>\r\n<p>\"&gt;</p>\r\n<p>Jakarta - Fajar Alfian/Muhammad Rian Ardianto kunci tiket ke perempatfinal Olimpiade Paris 2024. Meski sempat ada faktor teknis yang mengusik, Fajar/Rian masih bisa tetap tenang dan fokus!<br>Sebelum berlaga hadapi wakil Prancis, Lucas Corvee/Ronan Labar pada Senin (29/7) ada kabar wakil Jerman Mark Lamsfuss/Marvin Seidel. Itu karena, Lamsfuss alami cedera lutut.<br><br>Padahal, Fajar/Rian memulai laga mereka di Grup C Olimpiade Paris 2024 cabor ganda putra bulutangkis dengan kemenangan atas wakil Jerman tersebut. Alhasil sesuai aturan BWF, poin Fajar/Rian jadi nol lagi.<br><br>Baca artikel detiksport, \"Fajar/Rian Tetap Tenang, Lolos ke Perempatfinal Olimpiade Kemudian\" selengkapnya&nbsp;<a href=\"https://sport.detik.com/raket/d-7463284/fajar-rian-tetap-tenang-lolos-ke-perempatfinal-olimpiade-kemudian\">https://sport.detik.com/raket/d-7463284/fajar-rian-tetap-tenang-lolos-ke-perempatfinal-olimpiade-kemudian</a>.<br><br>Download Apps Detikcom Sekarang https://apps.detik.com/detik/</p>', 1, 13, 2, 4),
(17, '2024-07-30', 'Olimpiade 2024: Diananda Choirunisa Maju ke 16 Besar', 'olimpiade-2024-diananda-choirunisa-maju-ke-16-besar', 'diananda-choirunisa_169.jpeg', '<p>Jakarta - Atlet panahan Indonesia Diananda Choirunisa lolos secara dramatis ke babak ketiga Olimpiade 2024 nomor perorangan putri. Sempat tertinggal, Diananda akhirnya menang di shoot-off.<br>Diananda menghadapi wakil Amerika Serikat, Catalina Gnoriega, di babak 32 besar Olimpiade 2024. Dalam pertandingan babak 32 besar di Les Invalides, Paris, Selasa (30/7/2024) malam WIB, Diananda menang 6-5.<br><br>Diananda selalu tertinggal sampai set ketiga. Setelah menyamakan skor di set keempat dan kelima, pertandingan kemudian harus lanjut ke shoot-off.<br><br>Baca artikel detiksport, \"Olimpiade 2024: Diananda Choirunisa Maju ke 16 Besar\" selengkapnya&nbsp;<a href=\"https://sport.detik.com/sport-lain/d-7465416/olimpiade-2024-diananda-choirunisa-maju-ke-16-besar\">https://sport.detik.com/sport-lain/d-7465416/olimpiade-2024-diananda-choirunisa-maju-ke-16-besar</a>.<br><br>Download Apps Detikcom Sekarang https://apps.detik.com/detik/</p>', 1, 13, 1, 5);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(300) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role_id` int(11) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `image`, `email`, `password`, `role_id`, `date_created`) VALUES
(11, 'Josi Kie', 'Logo_Disintar1.jpg', 'admin@gmail.com', '$2y$10$tlU68tzsfacFxpitWetuke0T8zNjHCNRPWLQOfyWKusdj1VxNrwH6', 1, 1721991058),
(12, 'Josi', 'Juniot_Pilot_SBT1.png', 'member@gmail.com', '$2y$10$ns4onrvOJTkbxoknbz4/qetEEHzAo8NfpSQItRCjSbtZxiJN7/99C', 2, 1721998358),
(13, 'Admin', 'profile.JPG', 'admin1@gmail.com', '$2y$10$WFcGjuuIFuXbCMuOBkrsz.6U.1Y3nUMF8X8Ffoi6UTEMREkVnD5xi', 1, 20240727),
(14, 'Sutris', 'default_profile.svg', 'sutris4488@gmail.com', '$2y$10$AKipBjRrIj01AwjeMuYLHuCXM0M9gxDm/idhu5ieT0q.9CF6XHyxi', 2, 1722115086);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `post_id` (`post_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`),
  ADD CONSTRAINT `comments_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
