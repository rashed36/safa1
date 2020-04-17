-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 17, 2020 at 07:15 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `safatra1_admin`
--

-- --------------------------------------------------------

--
-- Table structure for table `advantages`
--

CREATE TABLE `advantages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `publication_status` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `advantages`
--

INSERT INTO `advantages` (`id`, `description`, `publication_status`, `created_at`, `updated_at`) VALUES
(2, 'Our factory is in the northeast of Dhaka with lower labor costs, so we can supply the best prices. The direct factory price without any middleman is most competitive.', 1, NULL, NULL),
(3, 'No roving, no nodes, in line with international standards, the delivery quantity guarantee sufficient meters.', 1, NULL, NULL),
(4, 'We have our own weaving machine loom and we have skillful workers, we can ensure good quality.', 1, NULL, NULL),
(5, 'We have our own quality control team to follow buyer\'s order, control the committed delivery.', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `briquette_comparison`
--

CREATE TABLE `briquette_comparison` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `factor` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `briquettes` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `wood` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `coal` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `furnaceoid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `publication_status` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `briquette_comparison`
--

INSERT INTO `briquette_comparison` (`id`, `factor`, `briquettes`, `wood`, `coal`, `furnaceoid`, `publication_status`, `created_at`, `updated_at`) VALUES
(4, 'Calorific Value', '3800-4800 Kcal/Kg', '2500-3000 Kcal/Kg', '4800-5500 Kcal/Kg', '9800 - 10100 Kcal/kg', 1, NULL, NULL),
(5, 'Ash Content (%)', '2-15', '20-25', '20-40', '0.1', 1, NULL, NULL),
(6, 'Moisture (%)', '8-10', '25-35', '10-20', '0.5', 1, NULL, NULL),
(7, 'Smoke/Pollution', 'No Smoke', 'High Smoke', 'Hazardous gas', 'Hazardous gas', 1, NULL, NULL),
(8, 'Boiler Efficiency(%)', '75', '60', '75', '80 - 85', 1, NULL, NULL),
(9, 'Effect on Boiler', 'Normal fly ash deposit in tubes', 'Regular maintenance', 'High wear and tear', 'Regular maintenance', 1, NULL, NULL),
(10, 'Man Power', 'Single person', 'Max number', 'Min two persons', 'Single person', 1, NULL, NULL),
(11, 'Handling', 'Easy', 'Tough', 'Difficult', 'Tough', 1, NULL, NULL),
(12, 'Value to the spent', 'Optimum value', 'Moderate value', 'Least value', 'High value', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `briquette_industries`
--

CREATE TABLE `briquette_industries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `publication_status` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `briquette_industries`
--

INSERT INTO `briquette_industries` (`id`, `name`, `description`, `publication_status`, `created_at`, `updated_at`) VALUES
(2, 'Ceramic Production', 'Brick kilns, tile making, pot firing', 1, NULL, NULL),
(3, 'Domestic use', 'Cooking water heating and space heating', 1, NULL, NULL),
(4, 'Commercial and Institutional Catering', 'Cooking, Water Heating and Grilling', 1, NULL, NULL),
(5, 'Hospitality', 'Cooking, Water Heating and space heating', 1, NULL, NULL),
(6, 'Food processing industries', 'Distilleries, bakeries, canteens, restaurants and drying.', 1, NULL, NULL),
(7, 'Textiles', 'Dyeing and bleaching', 1, NULL, NULL),
(8, 'Industrial Boilers', 'For Heat and steam generation', 1, NULL, NULL),
(9, 'Gasification', 'Fuel for gasifiers to produce Electricity', 1, NULL, NULL),
(10, 'Poultry', 'Incubation and heating of chicks', 1, NULL, NULL),
(11, 'Agro based industries', 'Tobacco curing, tea drying, oil milling', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `briquette_pimage`
--

CREATE TABLE `briquette_pimage` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `publication_status` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `briquette_pimage`
--

INSERT INTO `briquette_pimage` (`id`, `image`, `publication_status`, `created_at`, `updated_at`) VALUES
(2, 'imageSlider/eyyuqDwSczkm3NWRaDB9.jpg', 0, NULL, NULL),
(3, 'imageSlider/gZMP1RynMs2gje4d2KvJ.jpg', 0, NULL, NULL),
(4, 'imageSlider/rM16PmGfbX0gIgPs2vj9.jpg', 1, NULL, NULL),
(5, 'imageSlider/sZUEor72hlrV3gljzZty.jpg', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cons_application`
--

CREATE TABLE `cons_application` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `publication_status` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cons_application`
--

INSERT INTO `cons_application` (`id`, `description`, `publication_status`, `created_at`, `updated_at`) VALUES
(2, 'Depending upon the application the specification of the cone varies. The popular sizes in the present Textile Industries are 9 Deg15′, 5 Deg 57′, 4 Deg 20′, 3 Deg 30′, etc.', 1, NULL, NULL),
(3, 'In all yarn winding application, tension at the traverse extremes pulls yarn towards the cone centre. So we have to provide suitable surface finish to the cones like Embossing, Velvet Finishing, etc.', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cons_features`
--

CREATE TABLE `cons_features` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `publication_status` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cons_features`
--

INSERT INTO `cons_features` (`id`, `description`, `publication_status`, `created_at`, `updated_at`) VALUES
(2, 'High Temperature Tolerance', 1, NULL, NULL),
(3, 'Provides extra resistance to Yarn Slippage.', 1, NULL, NULL),
(4, 'Cost Effective', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cons_overview`
--

CREATE TABLE `cons_overview` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_angle` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `length` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `weight` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `insidebase` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `finish` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `publication_status` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cons_overview`
--

INSERT INTO `cons_overview` (`id`, `product_angle`, `length`, `weight`, `insidebase`, `finish`, `publication_status`, `created_at`, `updated_at`) VALUES
(2, '1° 50′', '280 mm', '-/+ 60gm to  -/+ 80gm', '63 mm', 'Velvet finish/Bull nosed or hardened ends/ Thread reserve groove/Thread notch/ Symbols in different colors', 1, NULL, NULL),
(4, '3° 30′', '175 mm', '-/+ 30gm', '46 mm', 'Velvet finish/Bull nosed or hardened ends/ Thread reserve groove/Thread notch/ Symbols in different colors', 1, NULL, NULL),
(5, '3° 30′', '230 mm', '-/+ 50gm  -/+ 60gm  -/+ 70gm  -/+ 77gm', '71.5 mm', 'Velvet finish/Bull nosed or hardened ends/ Thread reserve groove/Thread notch/ Symbols in different colors', 1, NULL, NULL),
(6, '3° 30′', '280 mm', '-/+ 55gm  -/+ 60gm  -/+ 70gm', '62 mm', 'Velvet finish/Bull nosed or hardened ends/ Thread reserve groove/Thread notch/ Symbols in different colors', 1, NULL, NULL),
(7, '4° 20′', '170 mm', '-/+ 32gm  -/+ 36gm  -/+ 40gm', '59 mm', 'Velvet finish/Bull nosed or hardened ends/ Thread reserve groove/Thread notch/ Symbols in different colors', 1, NULL, NULL),
(8, '3° 30′', '280 mm', '-/+ 32gm  -/+ 36gm  -/+ 40gm  -/+ 40gm  -/+ 40gm', '68 mm', 'Velvet finish/Bull nosed or hardened ends/ Thread reserve groove/Thread notch/ Symbols in different colors', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cons_ovrdescription`
--

CREATE TABLE `cons_ovrdescription` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `description1` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `description2` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `publication_status` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cons_ovrdescription`
--

INSERT INTO `cons_ovrdescription` (`id`, `description1`, `description2`, `publication_status`, `created_at`, `updated_at`) VALUES
(2, 'is used for coarse and lively yarns. This surface provides extra resistance to yarn slippage. However fine embossing surface is provided for medium count yarn and for the threads where take off could be restricted by the above bold embossing surface.\r\nThis surface holds winding to full length, yet permits free delivery to knitting or sewing machine.', 'surface is ideal for fine cotton yarns and prevents damage to delicate filaments of synthetic fibers. Yarn will feed off smoothly without sloughing, hanging or breaking. Velvet surface can be provided according to the requirement.', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cons_pattern`
--

CREATE TABLE `cons_pattern` (
  `id` int(20) NOT NULL,
  `image` varchar(255) NOT NULL,
  `publication_status` int(255) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cons_pattern`
--

INSERT INTO `cons_pattern` (`id`, `image`, `publication_status`) VALUES
(2, 'imageSlider/NaZRkrGMH4u53BQn8I7I.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `cons_pdescribe`
--

CREATE TABLE `cons_pdescribe` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `publication_status` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cons_pdescribe`
--

INSERT INTO `cons_pdescribe` (`id`, `description`, `publication_status`, `created_at`, `updated_at`) VALUES
(3, 'Our range of Embossed Paper Cones that are used for Coarse and Lively Yarns are manufactured using Kraft boards and moisture repellent paste and this surface provides Extra resistance to Yarn Slippage. It is perfect for the threads where take off could be restricted by the Bold Embossing Surface. These cones have high temperature tolerance and also do not lose its shape even in humid conditions.', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cons_pimage`
--

CREATE TABLE `cons_pimage` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `publication_status` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cons_pimage`
--

INSERT INTO `cons_pimage` (`id`, `image`, `publication_status`, `created_at`, `updated_at`) VALUES
(3, 'imageSlider/iD5Uyz1pZfXwCK14sMuV.jpg', 1, NULL, NULL),
(4, 'imageSlider/XYiipXpxQKMKmxLs6eKx.jpg', 1, NULL, NULL),
(5, 'imageSlider/3QxHNLtHV2VFl3oID5vx.jpg', 1, NULL, NULL),
(6, 'imageSlider/qM4HpqiM1Ba0qSq5v1x4.jpg', 1, NULL, NULL),
(7, 'imageSlider/5zd0MiEEXsGSZ8IbkxYa.jpg', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cons_specifaction`
--

CREATE TABLE `cons_specifaction` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `publication_status` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cons_specifaction`
--

INSERT INTO `cons_specifaction` (`id`, `name`, `description`, `publication_status`, `created_at`, `updated_at`) VALUES
(3, 'Conicity', '5 Deg 57′, 4 Deg 20′ & 3 Deg 30′', 1, NULL, NULL),
(4, 'Surface finish types', 'Velvet finish', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `fabric_parameters`
--

CREATE TABLE `fabric_parameters` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `publication_status` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `fabric_parameters`
--

INSERT INTO `fabric_parameters` (`id`, `name`, `description`, `publication_status`, `created_at`, `updated_at`) VALUES
(2, 'Material', '100% cotton', 1, NULL, NULL),
(3, 'Yarn Count', 'As Customer Required', 1, NULL, NULL),
(4, 'Density', '72X69 to 130X70', 1, NULL, NULL),
(5, 'Width', '37”-70” etc', 1, NULL, NULL),
(6, 'Weight', '130 to 210 GSM', 1, NULL, NULL),
(7, 'Style', 'Plain', 1, NULL, NULL),
(8, 'Techniques', 'Weaved by shuttle loom', 1, NULL, NULL),
(9, 'Packing', 'Bale', 1, NULL, NULL),
(10, 'Delivery Detail', 'Within 30 days after your deposit', 1, NULL, NULL),
(11, 'MOQ', '1000meters', 1, NULL, NULL),
(12, 'Color', 'Organic Cotton grey', 1, NULL, NULL),
(13, 'Sample', 'Available', 1, NULL, NULL),
(14, 'OEM Accepted', 'Yes', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `fabric_pdescription`
--

CREATE TABLE `fabric_pdescription` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `publication_status` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `fabric_pdescription`
--

INSERT INTO `fabric_pdescription` (`id`, `description`, `publication_status`, `created_at`, `updated_at`) VALUES
(2, 'OWith the good quality and competitive price, we believe this product will win your favorite. Soft tactility and simplicity for cleaning will attract your customers.', 1, NULL, NULL),
(3, 'After bleaching, dyeing and printing, it is mainly exported to Europe, southeast Asia and other areas of the world. It is very popular globally.', 1, NULL, NULL),
(4, 'This item is woven by shuttle loom. Also it can be continuous dyed for making shirts. it is widely used for shirts, Leisure wear, skirt, jacket, cotton-padded and other fashion style garments, bedding & pocketing.', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `fabric_pimage`
--

CREATE TABLE `fabric_pimage` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `publication_status` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `fabric_pimage`
--

INSERT INTO `fabric_pimage` (`id`, `image`, `publication_status`, `created_at`, `updated_at`) VALUES
(2, 'imageSlider/3yrrwKdFsHZgSuzy6nBc.jpg', 1, NULL, NULL),
(3, 'imageSlider/lgwJHx9isO1wudCmy3GO.jpg', 1, NULL, NULL),
(4, 'imageSlider/ZJCwb5xPLZdEzSCCALN3.jpg', 1, NULL, NULL),
(5, 'imageSlider/0Al06Y12mqf1Smahh9Sh.jpg', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `fabric_pspecifaction`
--

CREATE TABLE `fabric_pspecifaction` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `publication_status` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `fabric_pspecifaction`
--

INSERT INTO `fabric_pspecifaction` (`id`, `name`, `description`, `publication_status`, `created_at`, `updated_at`) VALUES
(2, 'Material:', '100% Cotton.', 1, NULL, NULL),
(3, 'Type:', 'plain', 1, NULL, NULL),
(4, 'Yarn Type:', 'Carded/combed', 1, NULL, NULL),
(5, 'Pattern:', 'Grey fabric', 1, NULL, NULL),
(6, 'Style:', 'Plain', 1, NULL, NULL),
(7, 'Width:', 'As Required', 1, NULL, NULL),
(8, 'Techniques:', 'Woven', 1, NULL, NULL),
(9, 'Density:', '72X69 to 130X70', 1, NULL, NULL),
(10, 'Weight:', '130 to 210 GSM', 1, NULL, NULL),
(11, 'Certification:', 'Chamber of commerce', 1, NULL, NULL),
(12, 'Yarn Count:', '30*30, 40*40, 50*50 According to customer requirement', 1, NULL, NULL),
(13, 'Product name:', 'Organic Cotton Grey Fabric', 1, NULL, NULL),
(14, 'Color:', 'Grey White', 1, NULL, NULL),
(15, 'Usage:', 'Skirt, bedding, pocketing & other fashion style garments', 1, NULL, NULL),
(16, 'Place of origin:', 'Narsingdi', 1, NULL, NULL),
(17, 'Supply Ability:', '900,000 Meter/Meters per Month', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `faq`
--

CREATE TABLE `faq` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `qus` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `qusno` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ans` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `publication_status` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `faq`
--

INSERT INTO `faq` (`id`, `qus`, `qusno`, `ans`, `publication_status`, `created_at`, `updated_at`) VALUES
(2, 'Can I get a sample of your products?', '1', 'Yes, we can provide you less than 1 yards of our product for free', 1, NULL, NULL),
(3, 'How to confirm the quality before order?', '2', 'We could send you free sample for your checking. Or sending your samples to us, then we will make the counter sample for your approval before order.', 1, NULL, NULL),
(4, 'Can you dye or print your fabrics in my colors? What is the minimum quantity?', '3', 'Yes, We can. 1500 meters we can produce for clients.', 1, NULL, NULL),
(5, 'When can I receive your quotation and reply?', '4', 'We are 24 hours online to solve all questions for you. You can contact me any time.', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('normaluser@gmail.com', '$2y$10$RKl5eeG.rG6HN/DsvWteruzJyz.vw4hLE1/rnUUrc6gL3lMQ/1ice', '2020-04-15 08:50:19'),
('rashed4pa@gmail.com', '$2y$10$UewRIcSxdmrbBFC.4BrK7eVr6OXM1uER5IxGr/tKToYHGRfekmFE6', '2020-04-15 08:51:55'),
('safatradingenterprise@gmail.com', '$2y$10$P1UQLMzg3.m3gM2M.af6yOlu56Z713xg3074oggThEizeHq0L.yAq', '2020-04-16 01:58:54');

-- --------------------------------------------------------

--
-- Table structure for table `pet_pimage`
--

CREATE TABLE `pet_pimage` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `publication_status` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pet_pimage`
--

INSERT INTO `pet_pimage` (`id`, `image`, `publication_status`, `created_at`, `updated_at`) VALUES
(3, 'imageSlider/RiabIHzjVXWo8MLcn8Lh.jpg', 1, NULL, NULL),
(4, 'imageSlider/U89c6oY0u24LnO7WDKyW.jpg', 1, NULL, NULL),
(5, 'imageSlider/da1IKtO2khSe1QkJQvVz.jpg', 1, NULL, NULL),
(6, 'imageSlider/USRbBpsJg80U9byYquIX.jpeg', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `pet_specifacation`
--

CREATE TABLE `pet_specifacation` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `details` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `publication_status` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pet_specifacation`
--

INSERT INTO `pet_specifacation` (`id`, `name`, `details`, `publication_status`, `created_at`, `updated_at`) VALUES
(4, 'Place of Origin:', 'Bangladesh', 1, NULL, NULL),
(5, 'Model Number:', 'Pet bottle flakes white', 1, NULL, NULL),
(6, 'Product name:', 'Pet bottle scrap washed', 1, NULL, NULL),
(7, 'Other Names:', 'Pet flakes scrap', 1, NULL, NULL),
(8, 'Full name:', 'Pet bottle scrap in bale', 1, NULL, NULL),
(9, 'Color:', 'Blue, White, Green', 1, NULL, NULL),
(10, 'Keyword:', 'Pet  flake clear washed', 1, NULL, NULL),
(11, 'Material:', 'PET', 1, NULL, NULL),
(12, 'hghfgh', 'ghfghfg', 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_about`
--

CREATE TABLE `tbl_about` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `profile_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `publication_status` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_about`
--

INSERT INTO `tbl_about` (`id`, `description`, `profile_image`, `publication_status`, `created_at`, `updated_at`) VALUES
(4, 'Safa Trading Enterprise is an export based proprietorship entity operating in South Birampur, Madhabdi, Narsingdi. The farm inaugurated in 2006 and since then has been prolific in exporting its sister concerns’ manufactured products. The major exported products are the following:\r\n•         Paper spool or Conical Paper cone \r\n•          Paper board\r\n•          Sawdust Briquette    \r\n•          Grey Cotton fabric\r\nIt is a renowned largest manufacturer and supplier in Bangladesh. \r\nManufacturing products with high quality and environment friendly using latest technology and modern machineries. Customer satisfaction is our major pride and our valued satisfied clients are spread out all over in Bangladesh as well as abroad. \r\nThe sister concerns of the trading farm are the following:\r\n•         M/s. Paper Explore\r\n•         R.S.S Paper Mill\r\n•         R.S.S. Bio-fuel\r\n•         M/S Shaheen Textile \r\n \r\nThe concern is very particular about quality assurance and client service and, thus, has a strong base of clientele.  Committed to maintain the spirit of progressiveness and long lasting relationship with clients by getting in regular touch. we believe in building goodwill from long term relationship with the clients. We are capable of supplying client’s large-scale required products with constant and regular deliveries', 'imageSlider/mRqckFvLnc6v7IJ9unwF.jpg', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

CREATE TABLE `tbl_category` (
  `catagery_id` bigint(20) UNSIGNED NOT NULL,
  `catagery_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `catagery_description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `publication_status` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`catagery_id`, `catagery_name`, `catagery_description`, `publication_status`, `created_at`, `updated_at`) VALUES
(4, 'fdgfgfg', 'dfgfgdfg', 0, NULL, NULL),
(6, 'fghfhf', 'hfghfhf', 1, NULL, NULL),
(7, 'hgfhfh', 'fhfhfhf', 0, NULL, NULL),
(8, 'Man', 'manus', 1, NULL, NULL),
(9, 'mohila', 'women', 1, NULL, NULL),
(10, 'ghhg', 'ytfyty', 1, NULL, NULL),
(11, 'hhh', 'ijuik', 1, NULL, NULL),
(12, 'rtyrtyrt', 'rytrytret', 1, NULL, NULL),
(13, 'fghfgd', 'gdgdgfd', 1, NULL, NULL),
(14, 'rrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrr', 'fgdgdfgdfgfd', 1, NULL, NULL),
(15, 'gjhgjgj', 'vhggj', 1, NULL, NULL),
(16, 'gdfgdfgd', 'gdfgdfgdfgd', 0, NULL, NULL),
(17, 'gtgdfgd', 'gdfgdg', 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contact`
--

CREATE TABLE `tbl_contact` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fax` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `whatsapp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `skype` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `publication_status` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_contact`
--

INSERT INTO `tbl_contact` (`id`, `phone`, `fax`, `whatsapp`, `skype`, `email`, `address`, `publication_status`, `created_at`, `updated_at`) VALUES
(2, '+880 1711-987094', NULL, NULL, NULL, 'safatradingenter@gmail.com', 'South Birampur, Madhabdi,\r\nNarsingdi, Dhaka, Bangladesh.', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_counter`
--

CREATE TABLE `tbl_counter` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `establishment` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `employees` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `countries` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `publication_status` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_counter`
--

INSERT INTO `tbl_counter` (`id`, `establishment`, `employees`, `countries`, `publication_status`, `created_at`, `updated_at`) VALUES
(2, '2006', '80 to 125', '11', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_logo_favicon`
--

CREATE TABLE `tbl_logo_favicon` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `publication_status` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_logo_favicon`
--

INSERT INTO `tbl_logo_favicon` (`id`, `logo`, `publication_status`, `created_at`, `updated_at`) VALUES
(2, 'imageSlider/YKqJKrbO6ppfGoDJNUvJ.jpg', 0, NULL, NULL),
(4, 'imageSlider/LgcSO8ywYWXBaSL2pfEZ.png', 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_reason`
--

CREATE TABLE `tbl_reason` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `reason` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `details` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `publication_status` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_reason`
--

INSERT INTO `tbl_reason` (`id`, `reason`, `details`, `publication_status`, `created_at`, `updated_at`) VALUES
(7, 'Flexibility', 'Whether you need truckloads or small quantity, we cater to your requirements, keeping pace with the reality of today’s business scenario.', 1, NULL, NULL),
(8, 'Service', 'Your Phone, Fax or Email Order is always handled quickly and efficiently. Need assistance? A knowledgeable customer service representative is always available to help meet your needs, support your sales, reduce your costs and make you more competitive.', 1, NULL, NULL),
(9, 'Smart Orders', 'Avoid stock overloads, save money and be more competitive by ordering exactly-and only-what you need.', 1, NULL, NULL),
(10, 'Quality Products', 'Our Paper Board Packaging Products are built to the Industry’s highest standards of quality and consistency, resulting in your satisfaction of getting value for your money.', 1, NULL, NULL),
(11, 'Product Availability', 'We offer a variety of Packaging Products to suit any need and any budget. From Paper Cones, Cores, Tubes, Edge Protectors, Composite Containers and Packaging Drums, BPC is your one-stop solution provider.', 1, NULL, NULL),
(12, 'Eco-Friendly Products', 'All of our Products are recyclable and environment friendly. Most products are made of recycled materials.', 1, NULL, NULL),
(13, 'Expretise', 'BPC has been delivering world-class solutions to small, mid-size and large Companies since 1984. Our wide-ranging work experience allows us to understand your packaging challenges and provide you with cost-effective solution.', 1, NULL, NULL),
(14, 'Industry Solutions', 'Each Industry’s needs are different, so we offer industry-specific Packaging products with virtually unlimited applications.', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_slider`
--

CREATE TABLE `tbl_slider` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `categories` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `slider_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `publication_status` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_slider`
--

INSERT INTO `tbl_slider` (`id`, `name`, `categories`, `description`, `slider_image`, `publication_status`, `created_at`, `updated_at`) VALUES
(2, 'Organic Cotton Grey Fabric', 'organic', 'Nulla vitae elit libero, a pharetra augue mollis interdum.', 'imageSlider/96g88xezaK5zfNuAf05X.jpg', 1, NULL, NULL),
(3, 'Paper Cones', 'paper-cons', 'Nulla vitae elit libero, a pharetra augue mollis interdum.', 'imageSlider/1XuyTlWPzNECotiPVQ6P.jpg', 1, NULL, NULL),
(4, 'Briquette', 'briquette', 'Nulla vitae elit libero, a pharetra augue mollis interdum.', 'imageSlider/ywThXFxpD2qsR0iE3klF.jpg', 1, NULL, NULL),
(6, 'Pet Flakes', 'pet-flakes', 'Nulla vitae elit libero, a pharetra augue mollis interdum.', 'imageSlider/ybK89aCDUgqqhlheaPml.jpg', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_social_link`
--

CREATE TABLE `tbl_social_link` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkedin` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `publication_status` int(10) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_social_link`
--

INSERT INTO `tbl_social_link` (`id`, `facebook`, `twitter`, `instagram`, `linkedin`, `publication_status`, `created_at`, `updated_at`) VALUES
(3, 'http://www.fasebook.com', 'http://www.twitter.com', 'http://www.instragram.com', 'http://www.linkedin.com', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `usertype` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `phone`, `usertype`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(10, 'Rashedul Islam', '01767078222', 'admin', 'rashed4pa@gmail.com', NULL, '$2y$10$ADFTK.0HQr8A41im8pA4he5ePRMU.pwybIy9xw8eQYIF5BPg4eaYi', NULL, '2020-04-16 11:59:24', '2020-04-16 11:59:24'),
(11, 'Shaheen Mahmud', '01711-987094', NULL, 'safatradingenterprise@gmail.com', NULL, '$2y$10$r.heaWxI95mBYJJMyMMO4ufOok4YCTD3YrLjpJzuxWsJmrAS6SZGW', NULL, '2020-04-16 23:11:35', '2020-04-16 23:11:35');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `advantages`
--
ALTER TABLE `advantages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `briquette_comparison`
--
ALTER TABLE `briquette_comparison`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `briquette_industries`
--
ALTER TABLE `briquette_industries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `briquette_pimage`
--
ALTER TABLE `briquette_pimage`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cons_application`
--
ALTER TABLE `cons_application`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cons_features`
--
ALTER TABLE `cons_features`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cons_overview`
--
ALTER TABLE `cons_overview`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cons_ovrdescription`
--
ALTER TABLE `cons_ovrdescription`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cons_pattern`
--
ALTER TABLE `cons_pattern`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cons_pdescribe`
--
ALTER TABLE `cons_pdescribe`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cons_pimage`
--
ALTER TABLE `cons_pimage`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cons_specifaction`
--
ALTER TABLE `cons_specifaction`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fabric_parameters`
--
ALTER TABLE `fabric_parameters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fabric_pdescription`
--
ALTER TABLE `fabric_pdescription`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fabric_pimage`
--
ALTER TABLE `fabric_pimage`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fabric_pspecifaction`
--
ALTER TABLE `fabric_pspecifaction`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faq`
--
ALTER TABLE `faq`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `pet_pimage`
--
ALTER TABLE `pet_pimage`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pet_specifacation`
--
ALTER TABLE `pet_specifacation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_about`
--
ALTER TABLE `tbl_about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`catagery_id`);

--
-- Indexes for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_counter`
--
ALTER TABLE `tbl_counter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_logo_favicon`
--
ALTER TABLE `tbl_logo_favicon`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_reason`
--
ALTER TABLE `tbl_reason`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_slider`
--
ALTER TABLE `tbl_slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_social_link`
--
ALTER TABLE `tbl_social_link`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `advantages`
--
ALTER TABLE `advantages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `briquette_comparison`
--
ALTER TABLE `briquette_comparison`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `briquette_industries`
--
ALTER TABLE `briquette_industries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `briquette_pimage`
--
ALTER TABLE `briquette_pimage`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `cons_application`
--
ALTER TABLE `cons_application`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `cons_features`
--
ALTER TABLE `cons_features`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `cons_overview`
--
ALTER TABLE `cons_overview`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `cons_ovrdescription`
--
ALTER TABLE `cons_ovrdescription`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `cons_pattern`
--
ALTER TABLE `cons_pattern`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `cons_pdescribe`
--
ALTER TABLE `cons_pdescribe`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `cons_pimage`
--
ALTER TABLE `cons_pimage`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `cons_specifaction`
--
ALTER TABLE `cons_specifaction`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `fabric_parameters`
--
ALTER TABLE `fabric_parameters`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `fabric_pdescription`
--
ALTER TABLE `fabric_pdescription`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `fabric_pimage`
--
ALTER TABLE `fabric_pimage`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `fabric_pspecifaction`
--
ALTER TABLE `fabric_pspecifaction`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `faq`
--
ALTER TABLE `faq`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pet_pimage`
--
ALTER TABLE `pet_pimage`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `pet_specifacation`
--
ALTER TABLE `pet_specifacation`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tbl_about`
--
ALTER TABLE `tbl_about`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `catagery_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_counter`
--
ALTER TABLE `tbl_counter`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_logo_favicon`
--
ALTER TABLE `tbl_logo_favicon`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_reason`
--
ALTER TABLE `tbl_reason`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tbl_slider`
--
ALTER TABLE `tbl_slider`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_social_link`
--
ALTER TABLE `tbl_social_link`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
