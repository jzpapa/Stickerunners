-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 26, 2023 at 01:16 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `stickerrunners`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `user_id` int(100) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`user_id`, `firstname`, `username`, `email`, `password`) VALUES
(1, 'Admin', 'Administrator', 'admin@stickerunners', 'adminn');

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE `item` (
  `prodID` int(11) NOT NULL,
  `category` varchar(100) NOT NULL,
  `price` int(11) NOT NULL,
  `size` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `itemName` varchar(100) NOT NULL,
  `picture` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`prodID`, `category`, `price`, `size`, `description`, `itemName`, `picture`) VALUES
(10, 'women', 280, 'small', 'Lorem ipsum dolor sit amet. Eum deleniti ipsum sit voluptas dolorum ut accusamus maxime. Aut fuga harum et adipisci nesciunt ad earum amet in suscipit quasi et quidem totam!', 'Supergirl Sweater', 'upload/women1.webp'),
(11, 'women', 300, 'medium', 'Lorem ipsum dolor sit amet. Eum deleniti ipsum sit voluptas dolorum ut accusamus maxime. Aut fuga harum et adipisci nesciunt ad earum amet in suscipit quasi et quidem totam!', 'Dont wait me up Sweater', 'upload/prod1.webp'),
(12, 'women', 480, 'medium', 'Lorem ipsum dolor sit amet. Eum deleniti ipsum sit voluptas dolorum ut accusamus maxime. Aut fuga harum et adipisci nesciunt ad earum amet in suscipit quasi et quidem totam!', 'Chiffon Dress', 'upload/women2.webp'),
(13, 'women', 460, 'large', 'Lorem ipsum dolor sit amet. Eum deleniti ipsum sit voluptas dolorum ut accusamus maxime. Aut fuga harum et adipisci nesciunt ad earum amet in suscipit quasi et quidem totam!', 'Chiffon Dress', 'upload/women3.webp'),
(14, 'women', 650, 'small', 'Lorem ipsum dolor sit amet. Eum deleniti ipsum sit voluptas dolorum ut accusamus maxime. Aut fuga harum et adipisci nesciunt ad earum amet in suscipit quasi et quidem totam!', '3/4 Sleeve Blouse', 'upload/women4.webp'),
(15, 'men', 680, 'large', 'Lorem ipsum dolor sit amet. Eum deleniti ipsum sit voluptas dolorum ut accusamus maxime. Aut fuga harum et adipisci nesciunt ad earum amet in suscipit quasi et quidem totam!', 'Fitted Jacket', 'upload/men1.webp'),
(16, 'men', 420, 'small', 'Lorem ipsum dolor sit amet. Eum deleniti ipsum sit voluptas dolorum ut accusamus maxime. Aut fuga harum et adipisci nesciunt ad earum amet in suscipit quasi et quidem totam!', 'Straight Leg Jean', 'upload/menp1.webp'),
(17, 'men', 700, 'medium', 'Lorem ipsum dolor sit amet. Eum deleniti ipsum sit voluptas dolorum ut accusamus maxime. Aut fuga harum et adipisci nesciunt ad earum amet in suscipit quasi et quidem totam!', 'Lined Jacket', 'upload/men2.webp'),
(18, 'men', 420, 'medium', 'Lorem ipsum dolor sit amet. Eum deleniti ipsum sit voluptas dolorum ut accusamus maxime. Aut fuga harum et adipisci nesciunt ad earum amet in suscipit quasi et quidem totam!', 'Straight Leg Jean Grey', 'upload/menp2.webp'),
(19, 'mug', 150, 'medium', 'Lorem ipsum dolor sit amet. Eum deleniti ipsum sit voluptas dolorum ut accusamus maxime. Aut fuga harum et adipisci nesciunt ad earum amet in suscipit quasi et quidem totam!', 'Butterfly Mug', 'upload/mug1.webp'),
(20, 'mug', 120, 'medium', 'Lorem ipsum dolor sit amet. Eum deleniti ipsum sit voluptas dolorum ut accusamus maxime. Aut fuga harum et adipisci nesciunt ad earum amet in suscipit quasi et quidem totam!', 'Arsthetic Design Mug', 'upload/mug2.jpg'),
(21, 'mug', 140, 'small', 'Lorem ipsum dolor sit amet. Eum deleniti ipsum sit voluptas dolorum ut accusamus maxime. Aut fuga harum et adipisci nesciunt ad earum amet in suscipit quasi et quidem totam!', 'Frog Mug', 'upload/mug3.webp');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(100) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `username2` varchar(100) NOT NULL,
  `birthday` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `number` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `email2` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `password2` varchar(100) NOT NULL,
  `profile_picture` varchar(100) NOT NULL,
  `cover_picture` varchar(100) NOT NULL,
  `datejoin` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `firstname`, `lastname`, `username`, `username2`, `birthday`, `gender`, `number`, `email`, `email2`, `password`, `password2`, `profile_picture`, `cover_picture`, `datejoin`) VALUES
(6, 'user', 'userr', 'Paps', 'Paps', '1/January/1903', 'male', '09394859487', 'user@gmail.com', 'zed@gmail.com', 'asd', 'asd', 'upload/pngtree-alien-face-glyph-icon-vector-png-image_1973205.jpg', '', '2023-01-21 02:17:08');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`prodID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `user_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `item`
--
ALTER TABLE `item`
  MODIFY `prodID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
