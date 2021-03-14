-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 19, 2020 at 10:54 AM
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
-- Database: `affiliate`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `name` varchar(500) NOT NULL,
  `title_one` varchar(1000) NOT NULL,
  `title_two` varchar(1000) NOT NULL,
  `des_one` varchar(5000) NOT NULL,
  `des_two` varchar(5000) NOT NULL,
  `des_three` varchar(5000) NOT NULL,
  `image_one` varchar(500) NOT NULL,
  `image_two` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `name`, `title_one`, `title_two`, `des_one`, `des_two`, `des_three`, `image_one`, `image_two`) VALUES
(1, 'How to Effectively Incorporate a Treadmill Into Your Workout Routine', 'Purchase a Treadmill for Use at Home', 'Set Aside Specific Days During the Week for Running', '       If you want to try running as often as possible, the best way to do so would be by purchasing a treadmill that you can use right in the comfort of your own home. This is especially true for individuals who bypass expensive gym memberships to exercise regularly at home with weights or fitness DVDs. By having your own machine at home, you can use it at any time of the day or night when you feel inclined to get on it and squeeze in a great workout for just a few minutes.\r\n<p>\r\n If you want to try running as often as possible, the best way to do so would be by purchasing a treadmill that you can use right in the comfort of your own home. This is especially true for individuals who bypass expensive gym memberships to exercise regularly at home with weights or fitness DVDs. By having your own machine at home, you can use it at any time of the day or night when you feel inclined to get on it and squeeze in a great workout for just a few minutes.\r\n</p>\r\n<p>\r\n If you want to try running as often as possible, the best way to do so would be by purchasing a treadmill that you can use right in the comfort of your own home. This is especially true for individuals who bypass expensive gym memberships to exercise regularly at home with weights or fitness DVDs. By having your own machine at home, you can use it at any time of the day or night when you feel inclined to get on it and squeeze in a great workout for just a few minutes.\r\n</p>', '           One of the easiest ways to incorporate a treadmill into your workout schedule is simply by setting aside specific days during the week when you will do running and nothing else. These could be your cardio days, for example, or you can do a combination of aerobic workouts and treadmill routines throughout the week instead. Whatever you choose to do, it is always best to plan out your workout schedule on a calendar that you can follow. In this way, you will never forget what you need to do on any particular day of the week.\r\n\r\nSo, for example, if you normally just did a lot strength training exercises throughout the week but you really want to begin incorporating more aerobic workouts by using the treadmill, set aside three days out of the week for running and three days for strength training. After all, your muscles will still get a workout even from using the treadmill alone. Then take one day out of every week to rest. In this way, you can limit your workout time to just 30 minutes without having to worry about spending too much time exercising, especially if you are typically too busy to stay on track.\r\n\r\n<h1 class=\"text-warning\"><a href=\"https://www.amazon.com/Weslo-Cadence-G-5-9-Treadmill/dp/B007O5B0LC/ref=sxin_3_osp99-634b7b03_cov?ascsubtag=634b7b03-a575-473b-838a-710e48a20456&creativeASIN=B007O5B0LC&crid=QH2M9D5PE1QM&cv_ct_cx=treadmill&cv_ct_id=amzn1.osp.634b7b03-a575-473b-838a-710e48a20456&cv_ct_pg=search&cv_ct_wn=osp-search&keywords=treadmill&linkCode=oas&pd_rd_i=B007O5B0LC&pd_rd_r=bfaa9348-dac1-4b97-b036-58df18b6fd67&pd_rd_w=aLK5L&pd_rd_wg=EjkHW&pf_rd_p=eb3e5cda-5ec9-4d94-919d-310a5d641b8b&pf_rd_r=T8SM9W9CE0Z830RBXGSX&qid=1581604400&sprefix=trea%2Caps%2C-1&sr=1-1-32a32192-7547-4d9b-b4f8-fe31bfe05040&tag=gearpublish-20\"> Treadmill</a></h1>\r\n<h1>Treadmill</h1>', '            If you do not want to work out on just about every day of the week, or if you want to be sure you get a well-rounded workout each and every time you exercise, then it is probably better if you incorporated your treadmill routine into the beginning of every workout session. This is the best time to get your body moving and the blood pumping because it will prepare your body for the weight training that will take place afterwards. Once you get your body warmed up on the treadmill, you can then move on to working out the various muscle groups that you would normally target during your strength training routines. Do this every time you exercise so that you get a balanced workout that will definitely provide you with results, whether you work out two days out of the week or six days out of the week.\r\n\r\n', '81808272_3269116739770085_9126110913298956288_o.jpg', 'banner3.jpg'),
(2, 'How to Effectively Incorporate a Treadmill Into Your Workout Routine', 'Purchase a Treadmill for Use at Home', 'Set Aside Specific Days During the Week for Running', '    Control incline and speed from handlebars\r\nAutomatic shut-off\r\nTracks progress by time,calories, distance, steps,heart rate, speed, incline level\r\n17 programs, 15 incline levels, speeds up to 11 mph', '     Control incline and speed from handlebars\r\nAutomatic shut-off\r\nTracks progress by time,calories, distance, steps,heart rate, speed, incline level\r\n17 programs, 15 incline levels, speeds up to 11 mph', '    Control incline and speed from handlebars\r\nAutomatic shut-off\r\nTracks progress by time,calories, distance, steps,heart rate, speed, incline level\r\n17 programs, 15 incline levels, speeds up to 11 mph', '80858906_2873015519426061_1431705168910483456_o.jpg', 'StockSnap_KZROPA98J8.jpg'),
(3, 'Is a Scooter Good for Commuting', 'Purchase a Treadmill for Use at Home', 'Set Aside Specific Days During the Week for Running', 'In this era of automated technology, there is only a little you can do to keep yourself fit. The kick scooters offer you low-impact physical exercise, which can be a great way to keep your shape upright. A kick scooter can burn up to 200kcal on every 30 minutes rides. It can be an effective way of exercise for those who dont have enough time for workouts.', ' In this era of automated technology, there is only a little you can do to keep yourself fit. The kick scooters offer you low-impact physical exercise, which can be a great way to keep your shape upright. A kick scooter can burn up to 200kcal on every 30 minutes rides. It can be an effective way of exercise for those who donhave enough time for workouts.', 'In this era of automated technology, there is only a little you can do to keep yourself fit. The kick scooters offer you low-impact physical exercise, which can be a great way to keep your shape upright. A kick scooter can burn up to 200kcal on every 30 minutes rides. It can be an effective way of exercise for those who don have enough time for workouts.', 'hand-lift-free-weights.jpg', 'boxing-gym-workout.jpg'),
(4, 'How to Effectively Incorporate a Treadmill Into Your Workout Routine', 'Purchase a Treadmill for Use at Home', 'Set Aside Specific Days During the Week for Running', ' Grip tape is a fundamental part of the skateboard format, as it plays an important role in keeping your foot on the board, particularly when doing stunts. A few sheets come pre-', '  Grip tape is a fundamental part of the skateboard format, as it plays an important role in keeping your foot on the board, particularly when doing stunts. A few sheets come pre-', ' Grip tape is a fundamental part of the skateboard format, as it plays an important role in keeping your foot on the board, particularly when doing stunts. A few sheets come pre-', 'ff.jpg', 'boxing-gym-workout.jpg'),
(5, 'How to Effectively Incorporate a Treadmill Into Your Workout Routine', 'How to Effectively Incorporate a Treadmill Into Your Workout Routine', 'How to Effectively Incorporate a Treadmill Into Your Workout Routine', 'How to Effectively Incorporate a Treadmill Into Your Workout Routine', ' How to Effectively Incorporate a Treadmill Into Your Workout Routine', 'How to Effectively Incorporate a Treadmill Into Your Workout Routine', '82250701_2896684530392493_4877811074079916032_n.jpg', 'a3415936-e62e-4eee-bedb-0bc4c90272cb_4.b5f1ca8c29c7da80d54370220d66544f.jpeg'),
(6, 'Purchase a Treadmill for Use at Home', 'Purchase a Treadmill for Use at Home', 'Purchase a Treadmill for Use at Home', 'Purchase a Treadmill for Use at Home', ' Purchase a Treadmill for Use at Home', 'Purchase a Treadmill for Use at Home', 'banner3.jpg', 'cardio-running-on-a-treadmill-picjumbo-com.jpg'),
(7, 'How to Effectively Incorporate a Treadmill Into Your Workout Routine', 'How to Effectively Incorporate a Treadmill Into Your Workout Routine', 'How to Effectively Incorporate a Treadmill Into Your Workout Routine', 'How to Effectively Incorporate a Treadmill Into Your Workout Routine', ' How to Effectively Incorporate a Treadmill Into Your Workout Routine', 'How to Effectively Incorporate a Treadmill Into Your Workout Routine', 'gfg.jpg', 'ff.jpg'),
(8, 'Benefits of a Scooter for Commuting', 'Benefits of a Scooter for Commuting', 'Benefits of a Scooter for Commuting', 'Benefits of a Scooter for Commuting', ' Benefits of a Scooter for Commuting', 'Benefits of a Scooter for Commuting', 'stationary-bike-workout.jpg', 'stockvault-bodybuilder-in-gym203428.jpg'),
(9, 'Purchase a Treadmill for Use at Home', 'Purchase a Treadmill for Use at Home', 'Benefits of a Scooter for Commuting', 'Benefits of a Scooter for Commuting', ' Benefits of a Scooter for Commuting', 'Benefits of a Scooter for Commuting', 'boxing-gym-workout.jpg', 'healthy-biking.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `compare_table`
--

CREATE TABLE `compare_table` (
  `id` int(11) NOT NULL,
  `name` varchar(1000) NOT NULL,
  `type` varchar(100) NOT NULL,
  `catagorie` varchar(100) NOT NULL,
  `link` varchar(500) NOT NULL,
  `feature` varchar(3000) NOT NULL,
  `product_img` varchar(500) NOT NULL,
  `brand_img` varchar(500) NOT NULL,
  `price_img` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `compare_table`
--

INSERT INTO `compare_table` (`id`, `name`, `type`, `catagorie`, `link`, `feature`, `product_img`, `brand_img`, `price_img`) VALUES
(1, 'Precor EFX 221', 'folding', 'Treadmill', 'https://www.livelongerrunning.com/best-selling-treadmills-compared/', 'Control incline and speed from handlebars\r\nAutomatic shut-off\r\nTracks progress by time,calories, distance, steps,heart rate, speed, incline level\r\n17 programs, 15 incline levels, speeds up to 11 mph', 'horijon.png', 'horizon.png', 'price-1.png'),
(2, 'Sole Fitness E95', 'dfdddd', 'Elliptical', 'https://www.livelongerrunning.com/best-selling-treadmills-compared/', 'kjlk', '82417813_2904671512927128_3603355571387891712_o.jpg', 'horizon.png', 'price-3.png'),
(3, 'Precor EFX 221', '', 'Home gym', '', 'ffghgf', 't2.jpg', 'lifespan.png', 'price-4.png'),
(4, 'Sole Fitness E95', '', 'Elliptical', 'https://www.livelongerrunning.com/best-selling-treadmills-compared/', 'ewre', 'StockSnap_KZROPA98J8.jpg', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `message` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `message`) VALUES
(1, 'shohan', 'chowdhury889@gmail.com', 'iioppopio'),
(2, 'shohan', 'chowdhury889@gmail.com', 'fgdgfgfdgfdg'),
(3, 'shohan', 'chowdhury889@gmail.com', 'uyiuy'),
(4, '', '', ''),
(5, '', '', ''),
(6, '', '', ''),
(7, 'shohan', 'chowdhury889@gmail.com', ''),
(8, 'shohan', 'chowdhury889@gmail.com', 'gfgh'),
(9, '', '', ''),
(10, '', '', ''),
(11, '', '', ''),
(12, '', '', ''),
(13, '', '', ''),
(14, 'shohan', 'chowdhury889@gmail.com', 'i');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(500) NOT NULL,
  `catagorie` varchar(100) NOT NULL,
  `product_link` varchar(1000) NOT NULL,
  `video_link` varchar(1000) NOT NULL,
  `price` decimal(6,2) NOT NULL,
  `pros` varchar(3000) NOT NULL,
  `cons` varchar(3000) NOT NULL,
  `details` varchar(3000) NOT NULL,
  `descriptions` varchar(50000) NOT NULL,
  `img` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `catagorie`, `product_link`, `video_link`, `price`, `pros`, `cons`, `details`, `descriptions`, `img`) VALUES
(1, 'Precor EFX 221', 'Treadmill', 'https://www.amazon.com/simplehuman-Fingerprint-Proof-Stainless-4-5-Liter-1-2-Gallon/dp/B00203PSRA/ref=sxin_3_ac_d_pm?ac_md=3-0-VW5kZXIgJDI1-ac_d_pm&crid=16PRMQ9JMA29A&cv_ct_cx=trash+can&keywords=trash+can&pd_rd_i=B00203PSRA&pd_rd_r=1c026a65-554c-4ee4-adf2-d29171df662e&pd_rd_w=TOZAb&pd_rd_wg=2R88O&pf_rd_p=516e6e17-ed95-417b-b7a4-ad2c7b9cbae3&pf_rd_r=MRA5H1VMVKEW1YCY0Q7F&psc=1&qid=1581276081&sprefix=tr%2Caps%2C422&sr=1-1-22d05c05-1231-4126-b7c4-3e7a9c0027d0', '       ', '400.00', '        \r\nMost powerful motor in this range\r\nGood top speed of 10mphâ€‹\r\nDecent belt lengthâ€‹\r\nSeveral extras that enhance the feeling of valueâ€‹', '        \r\nBelt feels quite narrowâ€‹\r\niFit compatibility makes it hard to start the machine without a subscriptionâ€‹', '        Motor: 2.25 HP\r\nSpeed: 0 to 10mph\r\nIncline: Two positions (Manual)\r\nBelt: 16â€ x 50â€\r\nFolding: Yes\r\nFeatures: Backlit display screen, thumb heartrate monitor, iFit compatible, six preset programs, storage space, media shelf', '        The Weslo Cadence G 5.9i is certainly one of the most popular treadmills in the budget market and tops our list due to the impressive power and extra features not seen on many of its peers.\r\n\r\nIn fact, some of the listed features seem too good to be true, with a powerful 2.25 HP motor powering a 16â€ x 50â€ comfort-enhancing belt. While pretty narrow, this accommodates both runners with a longer stride and faster runners, with a top speed of 10mph.\r\n\r\nAdditional features include a folding design for easier storage and compatibility with the iFit system. While there are some flaws â€“ highlighted in the full review of the Cadence G 5.9i â€“ the pros outweigh the cons here.', 'F80_right_model_ipad-2020.png'),
(2, 'Sole Fitness E95', 'Treadmill', 'https://www.w3schools.com/bootstrap4/bootstrap_images.asp', '      ', '300.01', '    Good performance for walkers and speed walkers\r\nEasy to fold away with hydraulic assistanceâ€‹\r\nEasy to fold away with hydraulic assistanceâ€‹\r\nManual three-position incline is a big plu', '    Low power is no good for faster joggers and runnersâ€‹\r\nA relatively narrow and short beltâ€‹', '    Motor: 1 HP\r\nSpeed: 0 to 6mph\r\nIncline: Three positions (Manual)\r\nBelt: 16â€ x 39â€\r\nFolding: Yes\r\nFeatures: Hydraulic folding assistance, 12 preset running modes, Bluetooth connectivity, media shelf, compatible with FitShow app, plenty of storage options', '    Next on this list is an impressive budget offering from SereneLife. While itâ€™s far from perfect â€“ nothing in this range ever is â€“ this folding treadmill offers both a solid core performance and a few extras worth taking a closer look at.\r\n\r\nThe fundamentals are decent, with a 1 HP motor that delivers top speeds up to 6mph â€“ certainly not the fastest on this list, but good for walking and light jogging. The running belt size of 16â€™â€™ x 39â€™â€™ is pretty standard too, although the addition of a three-position manual incline is appreciated.\r\n\r\nThis treadmill also comes with some modern features, such as Bluetooth connectivity that allows you to pair to the FitShow app. A good way to record and monitor your progress.', 'Assault Fitness AirRunner.png'),
(3, 'Precor EFX 221', 'Exercise Bike', '', '    ', '280.00', '         The Weslo Cadence G 5.9i is certainly one of the most popular treadmills in the budget market and tops our list due to the impressive power and extra features not seen on many of its peers.\r\n\r\nIn fact, some of the listed features seem too good to be true, with a powerful 2.25 HP motor powering a 16â€ x 50â€ comfort-enhancing belt. While pretty narrow, this accommodates both runners with a longer stride and faster runners, with a top speed of 10mph.\r\n\r\nAdditional features include a folding design for easier storage and compatibility with the iFit system. While there are some flaws â€“ highlighted in the full review of the Cadence G 5.9i â€“ the pros outweigh the cons here.', '         The Weslo Cadence G 5.9i is certainly one of the most popular treadmills in the budget market and tops our list due to the impressive power and extra features not seen on many of its peers.\r\n\r\nIn fact, some of the listed features seem too good to be true, with a powerful 2.25 HP motor powering a 16â€ x 50â€ comfort-enhancing belt. While pretty narrow, this accommodates both runners with a longer stride and faster runners, with a top speed of 10mph.\r\n\r\nAdditional features include a folding design for easier storage and compatibility with the iFit system. While there are some flaws â€“ highlighted in the full review of the Cadence G 5.9i â€“ the pros outweigh the cons here.', '         The Weslo Cadence G 5.9i is certainly one of the most popular treadmills in the budget market and tops our list due to the impressive power and extra features not seen on many of its peers.\r\n\r\nIn fact, some of the listed features seem too good to be true, with a powerful 2.25 HP motor powering a 16â€ x 50â€ comfort-enhancing belt. While pretty narrow, this accommodates both runners with a longer stride and faster runners, with a top speed of 10mph.\r\n\r\nAdditional features include a folding design for easier storage and compatibility with the iFit system. While there are some flaws â€“ highlighted in the full review of the Cadence G 5.9i â€“ the pros outweigh the cons here.', '             The Weslo Cadence G 5.9i is certainly one of the most popular treadmills in the budget market and tops our list due to the impressive power and extra features not seen on many of its peers.\r\n\r\nIn fact, some of the listed features seem too good to be true, with a powerful 2.25 HP motor powering a 16â€ x 50â€ comfort-enhancing belt. While pretty narrow, this accommodates both runners with a longer stride and faster runners, with a top speed of 10mph.\r\n\r\nAdditional features include a folding design for easier storage and compatibility with the iFit system. While there are some flaws â€“ highlighted in the full review of the Cadence G 5.9i â€“ the pros outweigh the cons here.', 'intense-exercise.jpg'),
(4, 'Sole Fitness E95', 'Road Bike', '', '     ', '0.00', '     ', '     ', '     ', '  The Vantage RX is the adventurists touring bike. It is a hing bike designed with rack-ready mounts for The Vantage RX is the adventurists touring bike. It is a do-everything bike designed with rack-ready mounts for.', '82417813_2904671512927128_3603355571387891712_o.jpg'),
(5, 'Sole Fitness E95', 'Mountain Bike', '', '', '0.00', '', '', '', '', ''),
(6, ' Assault Fitness AirRunner', 'Cycling Shoe', '', '', '0.00', '', '', '', '', ''),
(7, 'blowflex dumbell', 'Doumbell', '', '  ', '0.00', '  ', '  ', '  ', '  The Vantage RX is the adventurists touring bike. It is a do-everything bike designed with rack-ready mounts for.The Vantage RX is the adventurists touring bike. It is a do-everything bike designed with rack-ready mounts for.The Vantage RX is the adventurists touring bike. It is a do-everything bike designed with rack-ready mounts for.The Vantage RX is the adventurists touring bike. It is a do-everything bike designed with rack-ready mounts for.The Vantage RX is the adventurists touring bike. It is a do-everything bike designed with rack-ready mounts for.The Vantage RX is the adventurists touring bike. It is a do-everything bike designed with rack-ready mounts for.The Vantage RX is the adventurists touring bike. It is a do-everything bike designed with rack-ready mounts for.The Vantage RX is the adventurists touring bike. It is a do-everything bike designed with rack-ready mounts for.', 'gym-weights.jpg'),
(8, ' Having a treadmill for seniors will help them to stay active without going outside. it â€˜ll also help them to maintain a good physical and mental health.', 'Belt', '', '', '0.00', '', '', '', '', ''),
(9, 'Sole Fitness E95', 'Bench', '', '', '0.00', '', '', '', '', ''),
(10, 'Stamina X Fortress Power Tower', 'Homegym', '', '', '0.00', '', '', '', '', ''),
(11, 'Sole Fitness E95', 'Weighted vest', '', '', '0.00', '', '', '', '', ''),
(12, 'Precor EFX 221', 'Pull Up Bar', '', ' ', '0.00', ' ', ' ', ' ', ' The Vantage RX is the adventurists touring bike. It is a do-everything bike designed with rack-ready mounts for.The Vantage RX is the adventurists touring bike. It is a do-everything bike designed with rack-ready mounts for.The Vantage RX is the adventurists touring bike. It is a do-everything bike designed with rack-ready mounts for.The Vantage RX is the adventurists touring bike. It is a do-everything bike designed with rack-ready mounts for.', 'stamina-xfortress.jpg'),
(13, 'Precor EFX 221', 'Treadmill', '', '  ', '100.00', '    Comfort and convenience with bottle holders and media shelfâ€‹\r\nSolid construction for a stable workoutâ€‹\r\nDecent preprogramed workout routinesâ€‹\r\nGreat for walkers and joggersâ€‹', '    Comfort and convenience with bottle holders and media shelfâ€‹\r\nSolid construction for a stable workoutâ€‹\r\nDecent preprogramed workout routinesâ€‹\r\nGreat for walkers and joggersâ€‹', '   Motor: 800W\r\nSpeed: 0 to 7.5mph\r\nIncline: None\r\nBelt: 13â€ x 38â€\r\nFolding: Yes\r\nFeatures: Three preset workout programs, media shelf, basic display screen, built-in heart rate monitor, two water bottle holders', '    Thereâ€™s nothing particularly fancy about this 800-watt treadmill from Best Choice Products (unless you opt for the pink and white version!) â€“ yet it proves ideal for home use for walking and lighter jogging.\r\n\r\nIt features quality steel tubing and a convenient folding design, allowing you to stow the treadmill away with minimal fuss, even if it lacks the hydraulic systems that others offer. The narrow 13â€ width and 38â€ length of the belt isnâ€™t ideal for larger users, but it does the job of accommodating most people pretty comfortably.\r\n\r\nThis treadmill also features three preprogrammed routines, while the 800-watt motor offers a max speed of 7.5mph. Other features include heart rate monitors built into the handles, two water bottle holders, and a basic digital display.', '80858906_2873015519426061_1431705168910483456_o.jpg'),
(14, 'Precor EFX 221', 'Elliptical', '', '  ', '125.00', '  ', '  ', '  ', '  The Vantage RX is the adventurists touring bike. It is a hing bike designed with rack-ready mounts for The Vantage RX is the adventurists touring bike. It is a do-everything bike designed with rack-ready mounts for.', 'E25_back_model-2020.png'),
(15, 'Precor EFX 221', 'Treadmill', 'https://www.w3schools.com/bootstrap4/bootstrap_images.asp', '    ', '301.00', '    Motor: 800W\r\nSpeed: 0 to 7.5mph\r\nIncline: None\r\nBelt: 13â€ x 38â€\r\nFolding: Yes\r\nFeatures: Three preset workout programs, media shelf, basic display screen, built-in heart rate monitor, two water bottle holders', '    Motor: 800W\r\nSpeed: 0 to 7.5mph\r\nIncline: None\r\nBelt: 13â€ x 38â€\r\nFolding: Yes\r\nFeatures: Three preset workout programs, media shelf, basic display screen, built-in heart rate monitor, two water bottle holders', '    Motor: 800W\r\nSpeed: 0 to 7.5mph\r\nIncline: None\r\nBelt: 13â€ x 38â€\r\nFolding: Yes\r\nFeatures: Three preset workout programs, media shelf, basic display screen, built-in heart rate monitor, two water bottle holders', '    Motor: 800W\r\nSpeed: 0 to 7.5mph\r\nIncline: None\r\nBelt: 13â€ x 38â€\r\nFolding: Yes\r\nFeatures: Three preset workout programs, media shelf, basic display screen, built-in heart rate monitor, two water bottle holders', '82417813_2904671512927128_3603355571387891712_o.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `username`, `email`, `password`) VALUES
(1, 'shohan', 'chowdhury889@gmail.com', '123');

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
-- Indexes for table `contact`
--
ALTER TABLE `contact`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `compare_table`
--
ALTER TABLE `compare_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
