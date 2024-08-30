-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 15, 2024 at 11:35 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `booky`
--

-- --------------------------------------------------------

--
-- Table structure for table `authors`
--

CREATE TABLE `authors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `info` longtext DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `authors`
--

INSERT INTO `authors` (`id`, `name`, `info`, `image`, `created_at`, `updated_at`) VALUES
(6, 'Charles Dickens', 'Charles John Huffam Dickens (7 February 1812 – 9 June 1870) was an English novelist and social critic who created some of the world\'s best-known fictional characters, and is regarded by many as the greatest novelist of the Victorian era. His works enjoyed unprecedented popularity during his lifetime and, by the 20th century, critics and scholars had recognized him as a literary genius. His novels and short stories are widely read today.\r\n\r\nBorn in Portsmouth, Dickens left school at age 12 to work in a boot-blacking factory when his father John was incarcerated in a debtors\' prison. After three years, he returned to school before beginning his literary career as a journalist. Dickens edited a weekly journal for 20 years; wrote 15 novels, five novellas, hundreds of short stories and nonfiction articles; lectured and performed readings extensively; was an indefatigable letter writer; and campaigned vigorously for children\'s rights, education, and other social reforms.', 'Dickens_Gurney_head.jpg', '2024-05-15 14:34:13', '2024-05-15 14:34:13'),
(9, 'R. J. Palacio', 'R.J. Palacio lives in NYC with her husband, two sons, and two dogs. For more than twenty years, she was an art director and graphic designer, designing book jackets for other people while waiting for the perfect time in her life to start writing her own novel. But one day several years ago, a chance encounter with an extraordinary child in front of an ice cream store made R. J. realize that the perfect time to write that novel had finally come. Wonder is her first novel. She did not design the cover, but she sure does love it.', 'images.jpg', '2024-05-15 15:05:58', '2024-05-15 15:05:58'),
(10, 'Walter Isaacson', 'Walter Isaacson, a professor of history at Tulane, has been CEO of the Aspen Institute, chair of CNN, and editor of Time. He is the author of \'Leonardo da Vinci; The Innovators; Steve Jobs; Einstein: His Life and Universe; Benjamin Franklin: An American Life; and Kissinger: A Biography, and the coauthor of The Wise Men: Six Friends and the World They Made.', 'Walter Isaacson.jpg', '2024-05-15 15:20:02', '2024-05-15 15:20:02'),
(11, 'Siddhartha Mukherjee', 'Siddhartha Mukherjee (Bengali: সিদ্ধার্থ মুখার্জী) is a cancer physician and researcher. He is an assistant professor of medicine at Columbia University and a staff cancer physician at Columbia University Medical Center. A Rhodes scholar, he graduated from Stanford University, University of Oxford, Harvard Medical School. He has published articles in Nature, The New England Journal of Medicine, The New York Times, and The New Republic. He lives in New York with his wife and daughters.', 'Siddhartha Mukherjee.jpg', '2024-05-15 15:34:27', '2024-05-15 15:34:27');

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `author_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(2500) NOT NULL,
  `author_name` varchar(255) NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `description` longtext DEFAULT NULL,
  `price` varchar(255) DEFAULT NULL,
  `quantity` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `category_id`, `author_id`, `title`, `author_name`, `category_name`, `description`, `price`, `quantity`, `image`, `created_at`, `updated_at`) VALUES
(6, 2, 6, 'A Tale of Two Cities', 'Charles Dickens', 'History', 'A Tale of Two Cities is a historical novel published in 1859 by Charles Dickens, set in London and Paris before and during the French Revolution. The novel tells the story of the French Doctor Manette, his 18-year-long imprisonment in the Bastille in Paris, and his release to live in London with his daughter Lucie whom he had never met. The story is set against the conditions that led up to the French Revolution and the Reign of Terror. As Dickens\'s best-known work of historical fiction, A Tale of Two Cities is said to be one of the best-selling novels of all time. In 2003, the novel was ranked 63rd on the BBC\'s The Big Read poll The novel has been adapted for film, television, radio, and the stage, and has continued to influence popular culture.', '20', '34', 'A Tale of Two Cities.jpg', '2024-05-15 14:55:39', '2024-05-15 14:55:39'),
(7, 4, 9, 'Wonder', 'R. J. Palacio', 'Kids', 'Wonder is a contemporary children\'s novel written by R. J. Palacio and published on 14 February 2012. Wonder is in part inspired by an incident where the author\'s son started to cry after noticing a girl with a severe facial deformity. Inspiration was also pulled from Natalie Merchant\'s song of the same name. Several spin-offs have been published, including 365 Days of Wonder: Mr. Browne\'s Book of Precepts, We\'re All Wonders, Auggie and Me, and White Bird. A film adaptation was released in 2017, and a spin-off sequel film (adapting White Bird) followed in 2024.', '23', '1', 'Wonder.jpg', '2024-05-15 15:07:28', '2024-05-15 15:07:28'),
(9, 3, 10, 'Steve Jobs', 'Walter Isaacson', 'Technology', 'Based on more than forty interviews with Steve Jobs conducted over two years—as well as interviews with more than 100 family members, friends, adversaries, competitors, and colleagues—Walter Isaacson has written a riveting story of the roller-coaster life and searingly intense personality of a creative entrepreneur whose passion for perfection and ferocious drive revolutionized six industries: personal computers, animated movies, music, phones, tablet computing, and digital publishing. Isaacson’s portrait touched millions of readers.\r\n\r\nAt a time when America is seeking ways to sustain its innovative edge, Jobs stands as the ultimate icon of inventiveness and applied imagination. He knew that the best way to create value in the twenty-first century was to connect creativity with technology. He built a company where leaps of the imagination were combined with remarkable feats of engineering.', '34', '32', 'Steve Jobs.jpg', '2024-05-15 15:21:08', '2024-05-15 15:21:08'),
(10, 1, 11, 'The Song of the Cell', 'Siddhartha Mukherjee', 'Science', 'Winner of the 2023 PROSE Award for Excellence in Biological and Life Sciences and the 2023 Chautauqua Prize!\r\n\r\nNamed a New York Times Notable Book and a Best Book of the Year by The Economist, Oprah Daily, BookPage, Book Riot, the New York Public Library, and more!\r\n\r\nIn The Song of the Cell, the extraordinary author of the Pulitzer Prize-winning The Emperor of All Maladies and the #1 New York Times bestseller The Gene “blends cutting-edge research, impeccable scholarship, intrepid reporting, and gorgeous prose into an encyclopedic study that reads like a literary page-turner” (Oprah Daily).', '23', '1', 'the-song-of-the-cell.jpg', '2024-05-15 15:37:31', '2024-05-15 15:37:31');

-- --------------------------------------------------------

--
-- Table structure for table `book_users`
--

CREATE TABLE `book_users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `book_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'Rejected',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `book_users`
--

INSERT INTO `book_users` (`id`, `book_id`, `user_id`, `status`, `created_at`, `updated_at`) VALUES
(5, 7, 1, 'Rejected', '2024-05-15 16:22:19', '2024-05-15 16:27:13');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `icon` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `icon`, `created_at`, `updated_at`) VALUES
(1, 'Science', NULL, '2024-05-15 13:45:53', '2024-05-15 15:23:54'),
(2, 'History', NULL, '2024-05-15 13:46:01', '2024-05-15 13:46:01'),
(3, 'Technology', NULL, '2024-05-15 13:46:11', '2024-05-15 13:46:11'),
(4, 'Kids', NULL, '2024-05-15 13:47:35', '2024-05-15 13:47:35');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` longtext NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2014_10_12_100000_create_password_resets_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2024_05_12_084342_create_categories_table', 1),
(7, '2024_05_12_084430_create_authors_table', 1),
(8, '2024_05_12_084620_create_books_table', 1),
(9, '2024_05_12_084824_create_book_users_table', 1),
(10, '2024_05_12_085401_create_contacts_table', 1),
(11, '2024_05_12_085453_create_roles_table', 1),
(12, '2024_05_12_085529_create_role_user_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

CREATE TABLE `role_user` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('user','admin') NOT NULL DEFAULT 'user',
  `phone` varchar(255) NOT NULL,
  `address` longtext NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `role`, `phone`, `address`, `image`, `email_verified_at`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Aladdin Marshall', 'user@u.com', '$2y$12$V6rfMxLDTpndO6HK6eDnzeca6hl9Y/JNdGFog8lfIzTcAcrVuDW5y', 'user', '+1 (725) 933-4263', 'Excepturi sunt ex l', NULL, '2024-05-15 13:35:52', 'iuHeqUMEhaFulbY58dBh6VKepNCXyFn4pbPA2xAzR1H92HFlc4srRvgSwdxS', '2024-05-15 13:35:28', '2024-05-15 16:14:32'),
(2, 'Super Admin', 'superadmin@u.com', '$2y$12$nJZm3kgScO2.9891zreqZOCfllF7mu8gjARBW5NYnfDUCa5NBOOZ.', 'admin', '+1 (327) 509-5135', 'Molestias labore et', NULL, '2024-05-15 13:36:56', NULL, '2024-05-15 13:36:38', '2024-05-15 13:36:56');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `authors`
--
ALTER TABLE `authors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`),
  ADD KEY `books_category_id_foreign` (`category_id`),
  ADD KEY `books_author_id_foreign` (`author_id`);

--
-- Indexes for table `book_users`
--
ALTER TABLE `book_users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `book_users_book_id_foreign` (`book_id`),
  ADD KEY `book_users_user_id_foreign` (`user_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_name_unique` (`name`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

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
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_unique` (`name`);

--
-- Indexes for table `role_user`
--
ALTER TABLE `role_user`
  ADD PRIMARY KEY (`role_id`,`user_id`),
  ADD KEY `role_user_user_id_foreign` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_phone_unique` (`phone`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `authors`
--
ALTER TABLE `authors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `book_users`
--
ALTER TABLE `book_users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `books`
--
ALTER TABLE `books`
  ADD CONSTRAINT `books_author_id_foreign` FOREIGN KEY (`author_id`) REFERENCES `authors` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `books_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `book_users`
--
ALTER TABLE `book_users`
  ADD CONSTRAINT `book_users_book_id_foreign` FOREIGN KEY (`book_id`) REFERENCES `books` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `book_users_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_user`
--
ALTER TABLE `role_user`
  ADD CONSTRAINT `role_user_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
