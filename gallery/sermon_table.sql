-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 01, 2021 at 12:49 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nccfebonyi`
--

-- --------------------------------------------------------

--
-- Table structure for table `sermon_table`
--

CREATE TABLE `sermon_table` (
  `id` int(11) NOT NULL,
  `sermon_name` varchar(225) NOT NULL,
  `sermon_body` text NOT NULL,
  `sermon_audio` text NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sermon_table`
--

INSERT INTO `sermon_table` (`id`, `sermon_name`, `sermon_body`, `sermon_audio`, `date`) VALUES
(1, 'monday\'s devotion', '<h1>Thursday Morning Devotion</h1>\r\n          <h2>Quarterly Theme: Days of his Power</h2>\r\n          \r\n          \r\n          <h1>ministering: Sis. Blessing Ugiagbe (purpose Room Coordinator)</h1>\r\n          <h2>Topic: Conquering Fear and depression</h2>\r\n          <p>text: 2Timothy 1:7, Romans 8:13-17, 26</p>\r\n          <br>\r\n          <h3>Message</h3>\r\n          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga a beatae laudantium rerum possimus in hic natus deleniti, \r\n            provident odio, nesciunt nulla quis animi. Perferendis placeat aliquid totam, cumque maxime aut error harum consequatur omnis. \r\n            Nobis nemo tempore inventore, minus dolores voluptates ex laudantium, error consequatur exercitationem nam perferendis eos numquam \r\n            excepturi commodi. Consectetur, architecto. Tempore ipsum doloribus provident, neque ut, rem eius doloremque numquam totam voluptatum \r\n            sit quisquam voluptatem distinctio illo. A cupiditate maxime voluptas! Voluptates deserunt inventore sequi quo repellendus sit et \r\n            consequatur ea magnam obcaecati! Dolorem id at, explicabo minus est quis? Similique ex repellendus nostrum ea?\r\n          </p>', 'https://xclusivegospel.com/wp-content/uploads/2021/09/Best-Bassey-faithful-lord-.mp3', '2021-11-29');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sermon_table`
--
ALTER TABLE `sermon_table`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sermon_table`
--
ALTER TABLE `sermon_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
