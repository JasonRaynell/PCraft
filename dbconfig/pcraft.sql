-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 03, 2020 at 11:44 AM
-- Server version: 8.0.20
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pcraft`
--

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

CREATE TABLE `article` (
  `article_id` int NOT NULL,
  `user_id` int NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `comment_id` int NOT NULL,
  `article_id` int NOT NULL,
  `user_id` int NOT NULL,
  `comment` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int NOT NULL,
  `productname` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `brand` varchar(255) NOT NULL,
  `price` double NOT NULL,
  `image` text NOT NULL,
  `stock` int NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `productname`, `category`, `brand`, `price`, `image`, `stock`, `description`) VALUES
(5, 'a', 'a', 'a', 10000000000, 'd39574db790be66ad2550ceab9a63b02.jpg', 0, ''),
(6, 'abcd', 'asd', 'a', 10000000000, 'e52dd280492a8090699bc25cf4828647.jpg', 0, ''),
(7, 'PC RAKITAN GAMING MURAH A8 A7\r\n', 'pc', 'none', 4150000, 'produk1.jpg', 0, ''),
(9, 'PC RAKITAN GAMING i7 8700 COFFEELAKE GTX 1060 6GB', 'pc', 'none', 18600000, 'produk3.jpg', 0, ''),
(10, 'PC RAKITAN GAMING AMD Ryzen 5 2600X', 'pc', 'none', 11185000, 'produk2.png', 0, ''),
(11, 'PC RAKITAN GAMING CORE I5 3470', 'pc', 'none', 8500000, 'produk4.jpg', 0, ''),
(12, 'PC DELL OptiPlex 7060MT (Core i5-8500)', 'pc', 'dell', 15500000, 'office1.png', 0, ''),
(13, 'CPU PC RAKITAN CORE I5 650 LEGEND', 'pc', 'none', 1775000, 'office4.jpg', 0, ''),
(14, 'CPU RAKITAN - PC CORE I7 RAM 8GB', 'pc', 'none', 4200000, 'office3.jpg', 0, ''),
(15, 'HP Desktop 280 G3 SFF [4LG71PA]', 'pc', 'hp', 11050000, 'office2.jpg', 0, ''),
(16, 'AMD Ryzen 3 2200G', 'cpu', 'amd', 1495000, 'amd ryzen3 2200g.jpg', 5, 'AMD Ryzen 3 2200G '),
(17, 'AMD Ryzen 9 3950X 3.5Ghz Up To 4.7Ghz Cache 64MB 105W AM4 [Box] - 16 Core - 100-100000051WOF', 'cpu', 'amd', 12799000, '19-113-616-V07.jpg', 5, ''),
(18, 'AMD Ryzen 5 3600 3.6Ghz Up To 4.2Ghz Cache 32MB 65W AM4 [Box] - 6 Core - 100-100000031BOX - With AMD Wraith Stealth Cooler', 'cpu', 'amd', 3070000, '64681733_ad334e43-24ba-47bf-9d0a-87db7fbc6dbb_640_640.png', 2, ''),
(19, 'Intel Core i9-10900K 3.7Ghz Up To 5.1Ghz - Cache 20MB [Box] Socket LGA 1200 - Comet Lake Series', 'cpu', 'intel', 11800000, 'Intel-Core-i9-10900-2.8Ghz-Up-To-5.0Ghz-Cache-20MB-Box-Socket-LGA-1200-Comet-Lake-Series.jpg', 3, ''),
(20, 'Intel Core i7-10700K 3.8Ghz Up To 5.0Ghz - Cache 16MB [Box] Socket LGA 1200 - Comet Lake Series', 'cpu', 'intel', 9200000, 'download.jpeg', 3, ''),
(21, 'Intel Core i5-10600 3.3Ghz Up To 4.8Ghz - Cache 12MB [Box] Socket LGA 1200 - Comet Lake Series', 'cpu', 'intel', 5300000, '10th_gen_i5_2.jpg', 5, 'Processor Intel Core i5-10600 3.3Ghz Up To 4.8Ghz - Cache 12MB [Box] Socket LGA 1200 - Comet Lake Series'),
(22, 'Asus ROG Maximus XII Extreme (LGA1200, Z490, DDR4, USB3.2, SATA3)', 'motherboard', 'asus', 13000000, 'P_setting_fff_1_90_end_600.jpeg', 3, ''),
(23, 'Asus ROG STRIX Z490-G Gaming (LGA1200, Z490, DDR4, USB3.2, SATA3)', 'motherboard', 'asus', 8000000, 'hero.png', 3, ''),
(24, 'MSI MEG Z490 Godlike (LGA1200, Z490, DDR4, USB3.2, SATA3) (By WPG)', 'motherboard', 'msi', 13200000, 'product_2_20200429161250_5ea937023a102.png', 3, ''),
(25, 'MSI MAG B365M Mortar (LGA1151V2, B365, DDR4, USB3.1, SATA3) (By WPG)', 'motherboard', 'msi', 1500000, 'product_0_20190628133521_5d15a71917def.png', 3, ''),
(26, 'Corsair DDR4 Vengeance RGB Pro PC25600 32GB (2X16GB) - CMW32GX4M2C3200C16W - White Heat-Spreader', 'ram', 'corsair', 3100000, '81EEpt-xy0L._AC_SL1500_.jpg', 6, ''),
(27, 'Corsair DDR4 Vengeance RGB Pro PC21000 16GB (2X8GB) - CMW16GX4M2A2666C16 - Black Heat-Spreader', 'ram', 'corsair', 1700000, '85bfb3ac1bf66040cc59b2266d86aedc.jpeg', 5, ''),
(28, 'Gskill DDR4 SniperX PC28800 16GB (2x8GB) Dual Channel F4-3600C19D-16GSXKB', 'ram', 'gskill', 1500000, '2678891_fde1f1af-c14d-400d-a5ab-c9fd884e469e_900_900.jpg', 3, ''),
(29, 'Gskill DDR4 TridentZ RGB PC25600 16GB (2x8GB) Dual Channel F4-3200C16D-16GTZR', 'ram', 'gskill', 1750000, '898700_5302b490-b0ba-4285-88e4-20de7c15f57b_667_445.jpg', 3, ''),
(30, 'WDC 1TB SATA3 64MB - Blue - WD10EZEX - Garansi 2 Th', 'hdd', 'wdc', 675000, '13757756_9cafc44a-0866-429d-8204-ca9220cfca7b_1920_1258.jpg', 10, ''),
(31, 'WDC 2TB SATA3 64MB - Black - WD2003FZEX - Garansi 5 Th', 'hdd', 'wdc', 2100000, '1167861_02bacc9d-3498-4015-afad-b33d88932b4e_800_800.jpg', 12, ''),
(32, 'Gigabyte SSD 480GB', 'ssd', 'gigabyte', 1100000, '9126088_d2466893-63af-4e17-98f4-951fd58e64b8_700_700.png', 9, ''),
(33, 'Samsung SSD 970 EVO PLUS M.2 500GB MZ-V7S500BW - Grs 5th', 'ssd', 'samsung', 2170000, 'samsung-ssd-970-evo-plus-nvme-m2-500gb-mz-v7s500bw-3.jpg', 23, ''),
(34, 'CUBE GAMING SACRAMENTO - FULL SIDE TEMPERED GLASS - DUAL FRONTSIDE RGB LED - PSU COVER - FREE 1PCS 1...', 'case', 'cube gaming', 540000, '314325_e83c4335-ee71-43b7-9599-43ff801dab15_700_700.jpg', 3, ''),
(35, 'CUBE GAMING HOEV - ATX - SIDE TEMPERED GLASS - FRONT 2 ARGB STRIP CUSTOMIZABLE MODE - Dust Filter - ...', 'case', 'cube gaming', 375000, 'f1188c652af602845cf9373c732a7ecb.jpeg', 15, ''),
(36, 'Cooler Master Cosmos C700P', 'case', 'cooler master', 4100000, '8414156_1f30d1be-f883-47f6-a6ad-e23ecc81cfd1_457_457.png', 8, ''),
(37, 'Cooler Master MasterCase H500P', 'case', 'cooler master', 2300000, 'download (1).jpeg', 7, ''),
(38, 'Corsair Carbide 110R Tempered Glass', 'case', 'corsair', 875000, '385465_94ead0ec-8b3e-41c4-9e0e-71e6d6d66251_700_700.jpg', 3, ''),
(39, 'GALAX Geforce RTX 2080 SUPER 8GB DDR6 WTF WORK THE FRAMES - 23 RGB Effect - TRIPLE 90mm FAN - Garans...', 'gpu', 'galax', 13200000, '64681733_e532d498-60de-44e4-9803-71cf4eaf6df2_500_500.png', 5, ''),
(40, 'GALAX Geforce RTX 2060 6GB DDR6 (1-Click OC) - DUAL FAN - Garansi 2 Thn', 'gpu', 'galax', 5020000, '385465_972a9d3e-010d-481f-abbd-0205794aeea5_600_600.jpg', 7, 'GALAX GPU'),
(41, 'MSI GeForce RTX 2070 SUPER 8GB DDR6 - Gaming X Trio', 'gpu', 'msi', 10800000, '863736_52c13caf-cc3d-444b-8d10-a015c57a0233_1024_1024.png', 5, ''),
(42, 'MSI GeForce RTX 2080 Ti 11GB DDR6 - Ventus GP', 'gpu', 'msi', 20800000, 'product_8_20190725103458_5d391552ebf28.png', 5, ''),
(43, 'Gigabyte GeForce RTX 2070 8GB DDR6 Windforce 2X 8G - GV-N2070WF2-8GD', 'gpu', 'gigabyte', 7320000, '19781f6c50771ec0416d1f6cd424cf9f.jpeg', 5, 'GPU yang kompatibel untuk kebutuhan gamingmu'),
(44, 'Asus Radeon RX 5700 8GB DDR6 - Strix', 'gpu', 'asus', 7200000, 'P_setting_000_1_90_end_500.jpeg', 5, ''),
(45, 'Asus Radeon RX 590 8GB DDR5 - ROG Strix Gaming', 'gpu', 'asus', 4200000, 'P_setting_000_1_90_end_500 (1).jpeg', 5, ''),
(46, 'MSI Radeon RX 5700 XT 8GB DDR6 - Gaming X', 'gpu', 'msi', 7800000, 'aaf0229da4053241343230d81e5ba3d5.jpeg', 88, ''),
(47, 'be quiet! SYSTEM POWER U9 700W - 80+ Bronze Certified - 3 Years Warranty - Number 1 PSU in Germany', 'power supply', 'be quiet', 1030000, 'U9_h_w_3.jpg', 5, ''),
(48, 'Asus ROG Thor 850W Fully Modular - 80+ Platinum', 'power supply', 'asus', 3800000, 'P_setting_fff_1_90_end_600 (1).jpeg', 5, 'Power Supply'),
(49, 'Corsair HX Series 1200W Full Modular - Platinum', 'power supply', 'corsair', 4200000, '2678891_e45485db-e61d-40f5-afc0-bc09c2c7e014_800_552.png', 8, ''),
(50, 'Corsair CV Series 450W - 80 Plus Bronze', 'power supply', 'corsair', 680000, 'download (2).jpeg', 16, '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `password`) VALUES
(4, 'pcraft', 'pcraft@gmail.com', 'cd536b8274f87bf110a4bae834c14069bc42fa36');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product`
--
ALTER TABLE `product`
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
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
