-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 23, 2020 at 12:14 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `affiliate_treadmill`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `name` varchar(300) NOT NULL,
  `title_one` varchar(300) NOT NULL,
  `title_two` varchar(300) NOT NULL,
  `title_three` varchar(300) NOT NULL,
  `des_one` varchar(3000) NOT NULL,
  `des_two` varchar(3000) NOT NULL,
  `des_three` varchar(3000) NOT NULL,
  `image_one` varchar(20) NOT NULL,
  `image_two` varchar(20) NOT NULL,
  `image_three` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `name`, `title_one`, `title_two`, `title_three`, `des_one`, `des_two`, `des_three`, `image_one`, `image_two`, `image_three`) VALUES
(1, '        fghgfh100', '2000', '3000', '4000', '<p class=\"text-center\">lorem10sadkjhbcvmb</p>        \r\n  <ul class=\"list-unstyled bg-success p-2\">\r\n<li> <i class=\"fas fa-angle-right \"></i><a href=\"#\"> dhsakdkh</a></li>\r\n\r\n<li> <i class=\"fas fa-angle-right \"></i>dhsakdkhtyuuuuuuuuuy</li>\r\n\r\n</ul> \r\n\r\nA higher power rating,<br><br> which indicates a smoother workout, a more powerful motor, and a quieter machine. A running surface that is wide enough and long enough to prevent tripping, slipping, and falling off the machine during a workout. An appropriate level of cushioning that would be stable enough to prevent bouncing but soft enough to provide ample support to delicate joints. Electronic controls that make using the machine easier and that make programming workouts faster. Safety features provided by the machine, such as handrails, and how securely they are attached to the machine.', '             6000', '             7000', '', '', ' ');

-- --------------------------------------------------------

--
-- Table structure for table `compare_table`
--

CREATE TABLE `compare_table` (
  `id` int(11) NOT NULL,
  `name` varchar(300) NOT NULL,
  `type` varchar(50) NOT NULL,
  `catagorie` varchar(50) NOT NULL,
  `rating` varchar(500) NOT NULL,
  `link` varchar(100) NOT NULL,
  `feature` varchar(2000) NOT NULL,
  `product_img` varchar(100) NOT NULL,
  `brand_img` varchar(100) NOT NULL,
  `price_img` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `compare_table`
--

INSERT INTO `compare_table` (`id`, `name`, `type`, `catagorie`, `rating`, `link`, `feature`, `product_img`, `brand_img`, `price_img`) VALUES
(5, 'LifeSpan TR 1200i Folding Treadmill', 'folding', ' Treadmill', ' <i class=\"fas fa-star text-warning\"></i><i class=\"fas fa-star  text-warning\"></i><i class=\"fas fa-star  text-warning\"></i><i class=\"fas fa-star  text-warning\"></i>', ' https://www.amazon.com/exec/obidos/ASIN/B009U7B4CM/livetorun-20', 'Control incline and speed from handlebars<br>\r\nAutomatic shut-off<br>\r\nTracks progress by time,calories, distance, steps,heart rate, speed, incline level<br>\r\n17 programs, 15 incline levels, speeds up to 11 mph<br>', ' Horizon-CT5-4-Treadmill-Main.png', 'horizon.png', 'price-4.png');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(300) NOT NULL,
  `title_one` varchar(200) NOT NULL,
  `title_two` varchar(200) NOT NULL,
  `title_three` varchar(200) NOT NULL,
  `title_four` varchar(200) NOT NULL,
  `title_five` varchar(200) NOT NULL,
  `title_six` varchar(200) NOT NULL,
  `title_seven` varchar(200) NOT NULL,
  `des_one` varchar(3000) NOT NULL,
  `des_two` varchar(3000) NOT NULL,
  `des_three` varchar(3000) NOT NULL,
  `des_four` varchar(3000) NOT NULL,
  `des_five` varchar(3000) NOT NULL,
  `des_six` varchar(3000) NOT NULL,
  `des_seven` varchar(3000) NOT NULL,
  `image_one` varchar(50) NOT NULL,
  `image_two` varchar(50) NOT NULL,
  `image_three` varchar(50) NOT NULL,
  `image_four` varchar(50) NOT NULL,
  `image_five` varchar(50) NOT NULL,
  `image_six` varchar(50) NOT NULL,
  `image_seven` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `title_one`, `title_two`, `title_three`, `title_four`, `title_five`, `title_six`, `title_seven`, `des_one`, `des_two`, `des_three`, `des_four`, `des_five`, `des_six`, `des_seven`, `image_one`, `image_two`, `image_three`, `image_four`, `image_five`, `image_six`, `image_seven`) VALUES
(1, 'LifeSpan TR 1200i Folding Treadmill Review', 'LifeSpan TR 1200i Folding Treadmill Review', '', '', '', '', '', '', 'Treadmills are popular in home gyms, but choosing the right one can be difficult because there are so many available. Our top pick for anyone who is looking for a durable, interactive, and high-end treadmill is the LifeSpan TR 1200i Folding Treadmill. This product has everything that any avid runner would need, whether youre working out at home to lose weight or train for an intense marathon.', 'Treadmills are popular in home gyms, but choosing the right one can be difficult because there are so many available. Our top pick for anyone who is looking for a durable, interactive, and high-end treadmill is the LifeSpan TR 1200i Folding Treadmill. This product has everything that any avid runner would need, whether youre working out at home to lose weight or train for an intense marathon.', 'Treadmills are popular in home gyms, but choosing the right one can be difficult because there are so many available. Our top pick for anyone who is looking for a durable, interactive, and high-end treadmill is the LifeSpan TR 1200i Folding Treadmill. This product has everything that any avid runner would need, whether youre working out at home to lose weight or train for an intense marathon.', 'Treadmills are popular in home gyms, but choosing the right one can be difficult because there are so many available. Our top pick for anyone who is looking for a durable, interactive, and high-end treadmill is the LifeSpan TR 1200i Folding Treadmill. This product has everything that any avid runner would need, whether youre working out at home to lose weight or train for an intense marathon.', 'Treadmills are popular in home gyms, but choosing the right one can be difficult because there are so many available. Our top pick for anyone who is looking for a durable, interactive, and high-end treadmill is the LifeSpan TR 1200i Folding Treadmill. This product has everything that any avid runner would need, whether youre working out at home to lose weight or train for an intense marathon.', 'Treadmills are popular in home gyms, but choosing the right one can be difficult because there are so many available. Our top pick for anyone who is looking for a durable, interactive, and high-end treadmill is the LifeSpan TR 1200i Folding Treadmill. This product has everything that any avid runner would need, whether youre working out at home to lose weight or train for an intense marathon.', 'Treadmills are popular in home gyms, but choosing the right one can be difficult because there are so many available. Our top pick for anyone who is looking for a durable, interactive, and high-end treadmill is the LifeSpan TR 1200i Folding Treadmill. This product has everything that any avid runner would need, whether youre working out at home to lose weight or train for an intense marathon.', '34.jpg', '', '', '', '', '', ''),
(2, 'Horizon Fitness T101-04 Treadmill Review', 'Horizon Fitness T101-04 Treadmill Review', 'Horizon Fitness T101-04 Treadmill Review', 'Horizon Fitness T101-04 Treadmill Review', '', '', '', '', 'This product has everything you need in a treadmill, and nothing you dont. Unlike others that often make you feel like you are on a trampoline when you increase your pace beyond a certain point, this one doesnt. It is sturdy, confident, and holds its composure when put to the sprinting test. Also, it manages to deliver whisper-quiet operation at all speeds, thanks to its 2.25 HP motor.', 'This product has everything you need in a treadmill, and nothing you dont. Unlike others that often make you feel like you are on a trampoline when you increase your pace beyond a certain point, this one doesnt. It is sturdy, confident, and holds its composure when put to the sprinting test. Also, it manages to deliver whisper-quiet operation at all speeds, thanks to its 2.25 HP motor.', 'This product has everything you need in a treadmill, and nothing you dont. Unlike others that often make you feel like you are on a trampoline when you increase your pace beyond a certain point, this one doesnt. It is sturdy, confident, and holds its composure when put to the sprinting test. Also, it manages to deliver whisper-quiet operation at all speeds, thanks to its 2.25 HP motor.', 'This product has everything you need in a treadmill, and nothing you dont. Unlike others that often make you feel like you are on a trampoline when you increase your pace beyond a certain point, this one doesnt. It is sturdy, confident, and holds its composure when put to the sprinting test. Also, it manages to deliver whisper-quiet operation at all speeds, thanks to its 2.25 HP motor.', 'This product has everything you need in a treadmill, and nothing you dont. Unlike others that often make you feel like you are on a trampoline when you increase your pace beyond a certain point, this one doesnt. It is sturdy, confident, and holds its composure when put to the sprinting test. Also, it manages to deliver whisper-quiet operation at all speeds, thanks to its 2.25 HP motor.', 'This product has everything you need in a treadmill, and nothing you dont. Unlike others that often make you feel like you are on a trampoline when you increase your pace beyond a certain point, this one doesnt. It is sturdy, confident, and holds its composure when put to the sprinting test. Also, it manages to deliver whisper-quiet operation at all speeds, thanks to its 2.25 HP motor.', 'This product has everything you need in a treadmill, and nothing you dont. Unlike others that often make you feel like you are on a trampoline when you increase your pace beyond a certain point, this one doesnt. It is sturdy, confident, and holds its composure when put to the sprinting test. Also, it manages to deliver whisper-quiet operation at all speeds, thanks to its 2.25 HP motor.', 'ambulance.PNG', '', '', '', '', '', ''),
(3, 'What Are the Health Benefits of Using the Horizon Fitness T101-04?', '', '', '', '', '', '', '', 'This product has everything you need in a treadmill, and nothing you dont. Unlike others that often make you feel like you are on a trampoline when you increase your pace beyond a certain point, this one doesnt. It is sturdy, confident, and holds its composure when put to the sprinting test. Also, it manages to deliver whisper-quiet operation at all speeds, thanks to its 2.25 HP motor.', '', '', '', '', '', '', 'Capggture.PNG', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `username`, `email`, `password`) VALUES
(1, 'shohan ', 'chowdhury889@gmail.com ', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `compare_table`
--
ALTER TABLE `compare_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `compare_table`
--
ALTER TABLE `compare_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
