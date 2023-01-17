-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 17, 2023 at 12:54 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommerce_laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul_website` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telepon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `atas_nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_rekening` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `judul_website`, `logo`, `deskripsi`, `alamat`, `email`, `telepon`, `created_at`, `updated_at`, `atas_nama`, `no_rekening`) VALUES
(1, 'Ecommerce Laraavel', '16733466071.png', 'Zenna Shop is a very slick and clean e-commerce template with endless possibilities. Creating an awesome clothes store with this Theme is easy than you can imagine. And finally the subconscious is the mechanism through which thought impulses which are repeated regularly with feeling. And emotion are quickened. Duis turpis eros, tincidunt at, tempor a nisi. Fusce turpis mi, sollicitudin non volutpat id, ornare at nunc. Vestibulum tristique molestie mauris, non ultricies turpis consequat eget titik', 'JL. Cempaka No. 69', 'rplshop@gmail.com', '083822623170', NULL, '2023-01-14 02:16:50', 'Kang Kasep', '1234-1234-1234-1234');

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_member` int(11) NOT NULL,
  `id_barang` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `size` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `color` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total` int(11) NOT NULL,
  `is_checkout` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `carts`
--

INSERT INTO `carts` (`id`, `id_member`, `id_barang`, `jumlah`, `size`, `color`, `total`, `is_checkout`, `created_at`, `updated_at`) VALUES
(1, 2, 3, 2, 'S', 'Hitam', 5186, 1, '2023-01-14 03:19:40', '2023-01-17 04:41:29'),
(2, 2, 5, 1, 'S', 'Hitam', 25597, 1, '2023-01-14 03:27:39', '2023-01-17 04:41:29');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_kategori` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `nama_kategori`, `deskripsi`, `gambar`, `created_at`, `updated_at`) VALUES
(1, 'FOR HER', 'Best Selling Deals', '16733446211.jpg', '2023-01-10 02:57:01', '2023-01-10 03:16:21'),
(2, 'ACCESSORIES', 'Hot Trends', '16733446444.jpg', '2023-01-10 02:57:24', '2023-01-10 02:57:24'),
(3, 'FOR HIM', 'New Collection', '16733446616.jpg', '2023-01-10 02:57:41', '2023-01-10 02:57:41');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_member` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_hp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `nama_member`, `no_hp`, `email`, `password`, `created_at`, `updated_at`) VALUES
(2, 'Asep', '08312312332', 'asep@gmail.com', '$2y$10$6Onep3VFDbVhXRsjlPiEKeXN935BeVxf0vIfWJjANhRI3rnLkAiMG', '2023-01-14 02:35:26', '2023-01-14 02:35:26');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_09_30_084750_create_categories_table', 1),
(6, '2022_10_01_103505_create_subcategories_table', 1),
(7, '2022_10_05_084331_create_sliders_table', 1),
(8, '2022_10_05_090431_create_products_table', 1),
(9, '2022_10_05_092646_create_members_table', 1),
(10, '2022_10_05_093334_create_testimonis_table', 1),
(11, '2022_10_05_093744_create_reviews_table', 1),
(12, '2022_10_05_100248_create_orders_table', 1),
(13, '2022_10_05_100705_add_status_to_orders_table', 1),
(14, '2022_10_15_105217_modify_order_details_table', 1),
(15, '2022_10_25_100740_create_payments_table', 1),
(16, '2023_01_05_074910_create_about_table', 1),
(17, '2023_01_14_091405_add_rekening_to_about', 2),
(18, '2023_01_14_092329_drop_column_in_members', 3),
(20, '2023_01_14_094938_create_carts_table', 4),
(21, '2023_01_17_113902_add_id_member_to_payments', 5);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_member` int(11) NOT NULL,
  `invoice` int(11) NOT NULL,
  `grand_total` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `id_member`, `invoice`, `grand_total`, `created_at`, `updated_at`, `status`) VALUES
(2, 2, 23011729, 40783, '2023-01-17 04:41:29', '2023-01-17 04:51:22', 'Selesai');

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_order` int(11) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `size` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `color` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`id`, `id_order`, `id_produk`, `jumlah`, `size`, `color`, `total`, `created_at`, `updated_at`) VALUES
(3, 2, 3, 2, 'S', 'Hitam', 5186, '2023-01-17 11:52:28', NULL),
(4, 2, 5, 1, 'S', 'Hitam', 25597, '2023-01-16 17:00:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_order` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `provinsi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kabupaten` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kecamatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `detail_alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_rekening` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `atas_nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `id_member` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `id_order`, `jumlah`, `provinsi`, `kabupaten`, `kecamatan`, `detail_alamat`, `status`, `no_rekening`, `atas_nama`, `created_at`, `updated_at`, `id_member`) VALUES
(2, 2, 40783, '6', '152', '', 'Ut modi sed eligendi', 'DITERIMA', '1234-1234-1234-1234', 'Kang Kasep', '2023-01-17 04:41:49', '2023-01-17 04:45:58', 2);

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `id_subkategori` int(11) NOT NULL,
  `nama_barang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` int(11) NOT NULL,
  `diskon` int(11) NOT NULL,
  `bahan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tags` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sku` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ukuran` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `warna` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `id_kategori`, `id_subkategori`, `nama_barang`, `gambar`, `deskripsi`, `harga`, `diskon`, `bahan`, `tags`, `sku`, `ukuran`, `warna`, `created_at`, `updated_at`) VALUES
(1, 3, 4, 'Lorem Ipsum Dolor Sit Amet', 'shop_image_1.jpg', 'Lorem Ipsum Dolor Sit Amet', 14850, 0, 'Lorem Ipsum Dolor', 'Lorem,Ipsum,Dolor,Sit,Amet', 'SAfO2Zzn', 'S,M,L,XL', 'Hitam,Biru,Kuning,Putih,Hijau', '2023-01-10 03:05:55', '2023-01-10 03:05:55'),
(2, 1, 3, 'Lorem Ipsum Dolor Sit Amet', 'shop_image_2.jpg', 'Lorem Ipsum Dolor Sit Amet', 50623, 0, 'Lorem Ipsum Dolor', 'Lorem,Ipsum,Dolor,Sit,Amet', 'E7KEpD8l', 'S,M,L,XL', 'Hitam,Biru,Kuning,Putih,Hijau', '2023-01-10 03:05:55', '2023-01-10 03:05:55'),
(3, 1, 2, 'Lorem Ipsum Dolor Sit Amet 3', 'shop_image_3.jpg', 'Lorem Ipsum Dolor Sit Amet', 2593, 0, 'Lorem Ipsum Dolor', 'Lorem,Ipsum,Dolor,Sit,Amet', 'Wb2zzEY4', 'S,M,L,XL', 'Hitam,Biru,Kuning,Putih,Hijau', '2023-01-10 03:05:55', '2023-01-10 03:05:55'),
(4, 3, 2, 'Lorem Ipsum Dolor Sit Amet', 'shop_image_4.jpg', 'Lorem Ipsum Dolor Sit Amet', 31901, 0, 'Lorem Ipsum Dolor', 'Lorem,Ipsum,Dolor,Sit,Amet', 'L3er4N2e', 'S,M,L,XL', 'Hitam,Biru,Kuning,Putih,Hijau', '2023-01-10 03:05:55', '2023-01-10 03:05:55'),
(5, 3, 1, 'Lorem Ipsum Dolor Sit Amet', 'shop_image_5.jpg', 'Lorem Ipsum Dolor Sit Amet', 25597, 0, 'Lorem Ipsum Dolor', 'Lorem,Ipsum,Dolor,Sit,Amet', 'KfnpmhpA', 'S,M,L,XL', 'Hitam,Biru,Kuning,Putih,Hijau', '2023-01-10 03:05:55', '2023-01-10 03:05:55'),
(6, 1, 4, 'Lorem Ipsum Dolor Sit Amet', 'shop_image_6.jpg', 'Lorem Ipsum Dolor Sit Amet', 7292, 0, 'Lorem Ipsum Dolor', 'Lorem,Ipsum,Dolor,Sit,Amet', 'mZWsY5kU', 'S,M,L,XL', 'Hitam,Biru,Kuning,Putih,Hijau', '2023-01-10 03:05:55', '2023-01-10 03:05:55'),
(7, 1, 1, 'Lorem Ipsum Dolor Sit Amet', 'shop_image_7.jpg', 'Lorem Ipsum Dolor Sit Amet', 21844, 0, 'Lorem Ipsum Dolor', 'Lorem,Ipsum,Dolor,Sit,Amet', 'WWzvn9w9', 'S,M,L,XL', 'Hitam,Biru,Kuning,Putih,Hijau', '2023-01-10 03:05:55', '2023-01-10 03:05:55'),
(8, 1, 3, 'Lorem Ipsum Dolor Sit Amet', 'shop_image_8.jpg', 'Lorem Ipsum Dolor Sit Amet', 26767, 0, 'Lorem Ipsum Dolor', 'Lorem,Ipsum,Dolor,Sit,Amet', 'pa0ALhWR', 'S,M,L,XL', 'Hitam,Biru,Kuning,Putih,Hijau', '2023-01-10 03:05:55', '2023-01-10 03:05:55'),
(9, 3, 4, 'Lorem Ipsum Dolor Sit Amet', 'shop_image_9.jpg', 'Lorem Ipsum Dolor Sit Amet', 83003, 0, 'Lorem Ipsum Dolor', 'Lorem,Ipsum,Dolor,Sit,Amet', 'AmPWm4Zb', 'S,M,L,XL', 'Hitam,Biru,Kuning,Putih,Hijau', '2023-01-10 03:05:55', '2023-01-10 03:05:55'),
(10, 3, 3, 'Lorem Ipsum Dolor Sit Amet', 'shop_image_10.jpg', 'Lorem Ipsum Dolor Sit Amet', 35310, 0, 'Lorem Ipsum Dolor', 'Lorem,Ipsum,Dolor,Sit,Amet', 'flyu7ynV', 'S,M,L,XL', 'Hitam,Biru,Kuning,Putih,Hijau', '2023-01-10 03:05:55', '2023-01-10 03:05:55'),
(11, 3, 2, 'Lorem Ipsum Dolor Sit Amet', 'shop_image_11.jpg', 'Lorem Ipsum Dolor Sit Amet', 83740, 0, 'Lorem Ipsum Dolor', 'Lorem,Ipsum,Dolor,Sit,Amet', 'XFwIWqEH', 'S,M,L,XL', 'Hitam,Biru,Kuning,Putih,Hijau', '2023-01-10 03:05:55', '2023-01-10 03:05:55'),
(12, 2, 2, 'Lorem Ipsum Dolor Sit Amet', 'shop_image_12.jpg', 'Lorem Ipsum Dolor Sit Amet', 86644, 0, 'Lorem Ipsum Dolor', 'Lorem,Ipsum,Dolor,Sit,Amet', 'p9ZDFY5A', 'S,M,L,XL', 'Hitam,Biru,Kuning,Putih,Hijau', '2023-01-10 03:05:55', '2023-01-10 03:05:55'),
(13, 2, 4, 'Lorem Ipsum Dolor Sit Amet', 'shop_image_13.jpg', 'Lorem Ipsum Dolor Sit Amet', 33158, 0, 'Lorem Ipsum Dolor', 'Lorem,Ipsum,Dolor,Sit,Amet', 'clmqD88C', 'S,M,L,XL', 'Hitam,Biru,Kuning,Putih,Hijau', '2023-01-10 03:05:55', '2023-01-10 03:05:55'),
(14, 3, 4, 'Lorem Ipsum Dolor Sit Amet', 'shop_image_14.jpg', 'Lorem Ipsum Dolor Sit Amet', 90575, 0, 'Lorem Ipsum Dolor', 'Lorem,Ipsum,Dolor,Sit,Amet', 'OfFYFu9A', 'S,M,L,XL', 'Hitam,Biru,Kuning,Putih,Hijau', '2023-01-10 03:05:55', '2023-01-10 03:05:55'),
(15, 1, 2, 'Lorem Ipsum Dolor Sit Amet', 'shop_image_15.jpg', 'Lorem Ipsum Dolor Sit Amet', 9340, 0, 'Lorem Ipsum Dolor', 'Lorem,Ipsum,Dolor,Sit,Amet', '656cIdMl', 'S,M,L,XL', 'Hitam,Biru,Kuning,Putih,Hijau', '2023-01-10 03:05:55', '2023-01-10 03:05:55'),
(16, 1, 2, 'Lorem Ipsum Dolor Sit Amet', 'shop_image_16.jpg', 'Lorem Ipsum Dolor Sit Amet', 29006, 0, 'Lorem Ipsum Dolor', 'Lorem,Ipsum,Dolor,Sit,Amet', 'hmxSQ9Y8', 'S,M,L,XL', 'Hitam,Biru,Kuning,Putih,Hijau', '2023-01-10 03:05:55', '2023-01-10 03:05:55'),
(17, 2, 3, 'Lorem Ipsum Dolor Sit Amet', 'shop_image_17.jpg', 'Lorem Ipsum Dolor Sit Amet', 84958, 0, 'Lorem Ipsum Dolor', 'Lorem,Ipsum,Dolor,Sit,Amet', 'gHR6tlFo', 'S,M,L,XL', 'Hitam,Biru,Kuning,Putih,Hijau', '2023-01-10 03:05:55', '2023-01-10 03:05:55'),
(18, 3, 1, 'Lorem Ipsum Dolor Sit Amet', 'shop_image_18.jpg', 'Lorem Ipsum Dolor Sit Amet', 55518, 0, 'Lorem Ipsum Dolor', 'Lorem,Ipsum,Dolor,Sit,Amet', 'ohbJTaZn', 'S,M,L,XL', 'Hitam,Biru,Kuning,Putih,Hijau', '2023-01-10 03:05:55', '2023-01-10 03:05:55'),
(19, 2, 3, 'Lorem Ipsum Dolor Sit Amet', 'shop_image_19.jpg', 'Lorem Ipsum Dolor Sit Amet', 61436, 0, 'Lorem Ipsum Dolor', 'Lorem,Ipsum,Dolor,Sit,Amet', 'I6pilXU3', 'S,M,L,XL', 'Hitam,Biru,Kuning,Putih,Hijau', '2023-01-10 03:05:55', '2023-01-10 03:05:55'),
(20, 2, 3, 'Lorem Ipsum Dolor Sit Amet', 'shop_image_20.jpg', 'Lorem Ipsum Dolor Sit Amet', 7652, 0, 'Lorem Ipsum Dolor', 'Lorem,Ipsum,Dolor,Sit,Amet', 'JEJlBcTj', 'S,M,L,XL', 'Hitam,Biru,Kuning,Putih,Hijau', '2023-01-10 03:05:55', '2023-01-10 03:05:55');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_member` int(11) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `review` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `rating` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_slider` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `nama_slider`, `deskripsi`, `gambar`, `created_at`, `updated_at`) VALUES
(1, 'Great Fashion 2017', 'New Arrivals Collection', '16733445311.jpg', '2023-01-10 02:55:31', '2023-01-10 02:55:31'),
(2, 'Exclusive Products', 'Get awesome items only in Zenna online shop', '16733445486.jpg', '2023-01-10 02:55:48', '2023-01-10 02:55:48'),
(3, 'Enjoy Online Shopping', 'Zenna is perfectly responsive theme', '16733445656.jpg', '2023-01-10 02:56:05', '2023-01-10 02:56:05');

-- --------------------------------------------------------

--
-- Table structure for table `subcategories`
--

CREATE TABLE `subcategories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `nama_subkategori` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subcategories`
--

INSERT INTO `subcategories` (`id`, `id_kategori`, `nama_subkategori`, `deskripsi`, `gambar`, `created_at`, `updated_at`) VALUES
(1, 1, 'DRESSES', 'Lorem ipsum dolor sit amet', '16733446943.jpg', '2023-01-10 02:58:14', '2023-01-10 02:58:14'),
(2, 1, 'WATCHES', 'Lorem ipsum dolor sit amet', '16733447133.jpg', '2023-01-10 02:58:33', '2023-01-10 02:58:33'),
(3, 2, 'BELTS', 'Lorem ipsum dolor sit amet', '16733447264.jpg', '2023-01-10 02:58:46', '2023-01-10 02:58:46'),
(4, 3, 'WALLET', 'Lorem ipsum dolor sit amet', '16733447424.jpg', '2023-01-10 02:59:02', '2023-01-10 02:59:02');

-- --------------------------------------------------------

--
-- Table structure for table `testimonis`
--

CREATE TABLE `testimonis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_testimoni` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `testimonis`
--

INSERT INTO `testimonis` (`id`, `nama_testimoni`, `deskripsi`, `gambar`, `created_at`, `updated_at`) VALUES
(1, 'CEO of Organization', 'I’am amazed, I should say thank you so much for your awesome template. Design is so good and neat, every detail has been taken care these team are realy amazing and talented! I will work only with this agency.', '16733447928.jpg', '2023-01-10 02:59:52', '2023-01-10 02:59:52'),
(2, 'Art Director', 'This is the excellent theme. It has many useful features that can be use for any kind of business. The support is just amazing and design', '16733448065.jpg', '2023-01-10 03:00:06', '2023-01-10 03:00:06'),
(3, 'PR Agent', 'Needless to say, beautifully designed theme that serves many purpose. Even more sutomers support is the best! Highly recommend this theme to anyone who enjoys a fine product', '16733448198.jpg', '2023-01-10 03:00:19', '2023-01-10 03:00:19');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Administrator', 'admin@admin.com', '2023-01-10 02:53:50', '$2y$10$8dlHuafx9tbAsh8CKJeTuuhjxwVexscJMaC85UZBmnlP79iAY1xH6', NULL, '2023-01-10 02:53:50', '2023-01-10 02:53:50');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subcategories`
--
ALTER TABLE `subcategories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonis`
--
ALTER TABLE `testimonis`
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
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `subcategories`
--
ALTER TABLE `subcategories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `testimonis`
--
ALTER TABLE `testimonis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
