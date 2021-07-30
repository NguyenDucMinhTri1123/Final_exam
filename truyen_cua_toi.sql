-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 30, 2021 at 07:09 PM
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
-- Database: `truyen_cua_toi`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `email` varchar(255) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `gender` varchar(100) DEFAULT NULL,
  `chap_counter` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`email`, `name`, `age`, `gender`, `chap_counter`, `role_id`, `password`) VALUES
('1234@gmail.com', 'Bột Cá', 23, 'female', 0, 1, '202cb962ac59075b964b07152d234b70'),
('123@gmail.com', 'tri', 0, '', 0, 2, '123'),
('1@gmail.com', 'ti', NULL, NULL, 0, 2, '123'),
('admin@gmail.com', 'admin', 21, 'Bí Mật', 0, 3, '202cb962ac59075b964b07152d234b70'),
('hoquynhnam@gmail.com', 'Hồ Quỳnh nam', 0, '', 0, 2, '202cb962ac59075b964b07152d234b70'),
('m1nhtr199@yahoo.com.vn', 'Nguyễn Đức Minh Trí', 0, '', 0, 2, '202cb962ac59075b964b07152d234b70'),
('nguyenducminhtri1123@gmail.com', 'Nguyễn Như Tính', 0, '', 0, 2, '202cb962ac59075b964b07152d234b70');

-- --------------------------------------------------------

--
-- Table structure for table `chapter`
--

CREATE TABLE `chapter` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `number_of_word` int(11) NOT NULL,
  `content` mediumtext NOT NULL,
  `read_times` int(11) NOT NULL,
  `book_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `my_novels`
--

CREATE TABLE `my_novels` (
  `id` int(11) NOT NULL,
  `novel_id` int(11) NOT NULL,
  `author_id` int(11) NOT NULL,
  `types` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `novel`
--

CREATE TABLE `novel` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `img_url` varchar(255) NOT NULL,
  `author_id` varchar(255) DEFAULT NULL,
  `author_name` varchar(255) NOT NULL,
  `type` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `detail` mediumtext DEFAULT NULL,
  `rank_score` float NOT NULL,
  `chapter_number` int(11) NOT NULL,
  `tag_list_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `novel`
--

INSERT INTO `novel` (`id`, `name`, `img_url`, `author_id`, `author_name`, `type`, `status`, `detail`, `rank_score`, `chapter_number`, `tag_list_id`) VALUES
(7, 'Hoa', 'https://ibb.co/W5VXCMN', 'admin@gmail.com', 'admin', 'Truyện Dịch', 'writing', 'Hoa là tác phẩm lấy cảm hứng từ một game offline rất nổi tiếng của Việt Nam được sản xuất vào năm 2020', 0, 0, 9),
(8, 'Thức Giấc', 'https://ibb.co/kGm4DhK', 'admin@gmail.com', 'admin', 'Sáng Tác', 'writing', 'Tác phẩm của da lad miêu tả về một giấc mơ trong đó nhân vật nam và nhân vật nữ chỉ có thể thấy nhau trong mơ, sự cách biệt vĩnh viễn giữa 2 thế giới khiến người đọc có nhiều cảm súc', 0, 0, 10),
(9, 'Cá Lớn', 'https://ibb.co/0Yk61DY', 'admin@gmail.com', 'admin', 'Sáng Tác', 'writing', 'Câu chuyện kể về cuộc gặp gỡ giữa một cậu bé và một con cá chép cạnh bờ sông, con cá chép bị mắc vào lưới đánh cá cũ và bị kẹt, nhờ sự giúp đỡ của cậu bé mà con cá được tự do và quay về với nơi ở của mình, câu chuyện kể về hành trình báo ơn của chú cá chép.', 0, 0, 11);

-- --------------------------------------------------------

--
-- Table structure for table `novel_case`
--

CREATE TABLE `novel_case` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `novel_id` int(11) NOT NULL,
  `reading_chapter` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `rank`
--

CREATE TABLE `rank` (
  `id` int(11) NOT NULL,
  `score` int(11) NOT NULL,
  `notes` text NOT NULL,
  `novel_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `notes` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`id`, `name`, `notes`) VALUES
(1, 'author', 'person who wrote the novel'),
(2, 'user', 'person who read the novel'),
(3, 'admin', 'person who control anythink');

-- --------------------------------------------------------

--
-- Table structure for table `tag`
--

CREATE TABLE `tag` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `detail` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tag`
--

INSERT INTO `tag` (`id`, `name`, `detail`) VALUES
(1, 'Lịch Sử', ''),
(2, 'Văn Học Việt Nam', ''),
(3, 'Kiếm Hiệp', ''),
(4, 'Huyền Huyễn', ''),
(5, 'Khoa Huyễn', ''),
(6, 'Ngôn Tình', ''),
(7, 'Truyện Nam', ''),
(8, 'Truyện Nữ', ''),
(9, 'Truyện Cười', ''),
(10, 'Linh Dị', ''),
(11, 'Truyện Ngắn', ''),
(12, 'Trọng Sinh', ''),
(13, 'Đô Thị', ''),
(14, 'Võng Du', ''),
(15, 'Đồng Nhân', ''),
(16, 'Xuyên Không', ''),
(17, 'Văn Học Pháp', ''),
(18, 'Tiểu Thuyết Trung Quốc', ''),
(19, 'Tiểu Thuyết Nhật Bản', ''),
(20, 'Tiên Hiệp', '');

-- --------------------------------------------------------

--
-- Table structure for table `tag_list`
--

CREATE TABLE `tag_list` (
  `id` int(11) NOT NULL,
  `tag_id` int(11) NOT NULL,
  `novel_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tag_list`
--

INSERT INTO `tag_list` (`id`, `tag_id`, `novel_id`) VALUES
(9, 2, 7),
(10, 2, 8),
(11, 6, 9);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `chapter`
--
ALTER TABLE `chapter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `my_novels`
--
ALTER TABLE `my_novels`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `novel`
--
ALTER TABLE `novel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `novel_case`
--
ALTER TABLE `novel_case`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rank`
--
ALTER TABLE `rank`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tag`
--
ALTER TABLE `tag`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tag_list`
--
ALTER TABLE `tag_list`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chapter`
--
ALTER TABLE `chapter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `my_novels`
--
ALTER TABLE `my_novels`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `novel`
--
ALTER TABLE `novel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `novel_case`
--
ALTER TABLE `novel_case`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rank`
--
ALTER TABLE `rank`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tag`
--
ALTER TABLE `tag`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `tag_list`
--
ALTER TABLE `tag_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
