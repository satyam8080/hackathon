-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 19, 2019 at 02:31 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `social`
--

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `img_id` int(11) NOT NULL,
  `img_url` varchar(256) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`img_id`, `img_url`, `user_id`) VALUES
(1, 'Screenshot (32).png', 10),
(2, 'Screenshot (8).png', 10),
(3, 'Screenshot (11).png', 13),
(4, 'Screenshot (6).png', 15);

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `pid` int(11) NOT NULL,
  `ptitle` varchar(64) NOT NULL,
  `postdata` varchar(9999) NOT NULL,
  `pdatetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`pid`, `ptitle`, `postdata`, `pdatetime`, `user_id`) VALUES
(1, 'sss', 'sfffffffffffffffffffffffffffffff', '2019-03-06 05:17:24', 10),
(2, 'Captian Marvel', 'q\r\nq\r\nq\r\nq\r\nq\r\nq\r\nq\r\nq\r\nq\r\nq\r\nq\r\nq\r\nq\r\nq\r\nq\r\na\r\na\r\na\r\na\r\na\r\na\r\na\r\na\r\n\r\na\r\na\r\na\r\n\r\na\r\na\r\na\r\na\r\na\r\na\r\na\r\na\r\n\r\na\r\na\r\na\r\na\r\na', '2019-03-06 05:17:48', 10),
(3, 'Test', 'a\r\na\r\na\r\na\r\na\r\na\r\na\r\na\r\na\r\na\r\na\r\na\r\na\r\n\r\na\r\na\r\na\r\na\r\na\r\na\r\na\r\na\r\na\r\na\r\na\r\na\r\na\r\na\r\na\r\na\r\na\r\na\r\na\r\na\r\na\r\na\r\na\r\n', '2019-03-06 05:19:06', 10),
(4, 'Satyam', 'Hi this is satyam here', '2019-03-06 05:24:09', 10),
(5, 'a', 'aahjygsysfd', '2019-03-06 05:28:40', 10),
(6, 'welcome', 'hey this is friendsfeed teem', '2019-03-06 05:32:38', 10),
(8, 'my', 'inbhjgjjh', '2019-03-06 07:19:27', 14),
(9, 'Raj Post', 'Hey I am Raj', '2019-03-06 07:44:30', 13),
(10, 'first', 'my first post', '2019-03-06 08:02:43', 15),
(11, 'my post', 'hello world', '2019-03-06 08:57:31', 16),
(12, 'Captian Marvel', 'good', '2019-03-23 03:10:18', 17),
(13, 'End Game', 'World best movie', '2019-10-16 05:10:13', 18);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(32) NOT NULL,
  `email` varchar(32) NOT NULL,
  `user_password` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `user_password`) VALUES
(6, 'Raj', 'iamsatyam26@gmail.com', 'ef5d369314eb5b845bd6f520a2eaee68'),
(7, 'anmol', 'info.satyam678@facebook.com', '3bad6af0fa4b8b330d162e19938ee981'),
(8, 'Satyam', 'iamsatyam26@gmail.com', '0291d0ee809eb60deedc864e0c10380d'),
(9, 'Anmol', 'info.satyam678@facebook.com', '74b87337454200d4d33f80c4663dc5e5'),
(10, 'Pratiksha', 'kr.pari@gmail.com', '0f2cdafc6b1adf94892b17f355bd9110'),
(11, 'mayank', 'iamsatyam26@gmail.com', '83349cbdac695f3943635a4fd1aaa7d0'),
(12, 'Anmol', 'iamsatyam26@gmail.com', '0f2cdafc6b1adf94892b17f355bd9110'),
(13, 'Raj vashistha', 'vashiraj2000@gmail.com', 'c939434caa644ccdde4be139f1f85c01'),
(14, 'nitin', 'ngndhi_lw@rediffmail.com', '827ccb0eea8a706c4c34a16891f84e7b'),
(15, 'mayank', 'mayank@gmail.com', 'e2fc714c4727ee9395f324cd2e7f331f'),
(16, 'vipul', 'vipul@gmail.com', 'e2fc714c4727ee9395f324cd2e7f331f'),
(17, 'Harsh mishra', 'mishraa03041997@gmail.com', 'b9b047b80885980f6a00992b13eae841'),
(18, 'anmol', 'iamsatyam26@gmail.com', 'e2fc714c4727ee9395f324cd2e7f331f');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`img_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`pid`),
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
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `img_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
