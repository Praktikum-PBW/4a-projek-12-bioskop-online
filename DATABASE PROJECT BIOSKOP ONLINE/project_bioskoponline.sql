-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 09, 2022 at 01:43 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project_bioskop`
--

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `reason` enum('Question','Comment','Complaint') COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phonenum` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rate` enum('Excellent','Very Good','Good','Average','Poor') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `user_id`, `reason`, `message`, `fname`, `lname`, `email`, `phonenum`, `rate`, `created_at`, `updated_at`) VALUES
(1, 2, 'Comment', 'Webnya bagus banget loh, makasi ya Cinematix', 'Anisa', 'Fitrianida', 'anisafitrianida75@gmail.com', '0819028908219', 'Excellent', '2022-05-08 22:07:03', '2022-05-08 22:07:03');

-- --------------------------------------------------------

--
-- Table structure for table `films`
--

CREATE TABLE `films` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `poster` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `genre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rating` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rating_usia` enum('G','PG','PG-13','R','D') COLLATE utf8mb4_unicode_ci NOT NULL,
  `release_date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('Populer','Now Playing','Coming Soon') COLLATE utf8mb4_unicode_ci NOT NULL,
  `overview` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `kode_film` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `films`
--

INSERT INTO `films` (`id`, `title`, `poster`, `genre`, `rating`, `rating_usia`, `release_date`, `status`, `overview`, `kode_film`, `created_at`, `updated_at`) VALUES
(1, 'Sonic the Hedgehog 2 (2022)', 'Sonic the Hedgehog 2 (2022).jpg', 'Aksi, Cerita Fiksi, Komedi, Keluarga', '7.6', 'PG', '08/04/2022', 'Now Playing', 'After settling in Green Hills, Sonic is eager to prove he has what it takes to be a true hero. His test comes when Dr. Robotnik returns, this time with a new partner, Knuckles, in search for an emerald that has the power to destroy civilizations. Sonic teams up with his own sidekick, Tails, and together they embark on a globe-trotting journey to find the emerald before it falls into the wrong hands.', '47r8FXYZWNU', '2022-05-08 22:13:54', '2022-05-08 22:13:54'),
(2, 'The Bad Guys (2022)', 'The Bad Guys (2022).jpg', 'Animasi, Komedi, Aksi, Keluarga, Kejahatan', '7.4', 'PG', '22/04/22', 'Now Playing', 'When the infamous Bad Guys are finally caught after years of countless heists and being the world’s most-wanted villains, Mr. Wolf brokers a deal to save them all from prison.', 'M60Gu2SLJ3A', '2022-05-08 22:14:59', '2022-05-08 22:14:59'),
(3, 'Fantastic Beasts: The Secrets of Dumbledore (2022)', 'Everything Everywhere All at Once (2022).jpg', 'Fantasi, Petualangan', '6.8', 'PG-13', '15/04/2022', 'Now Playing', 'Professor Albus Dumbledore knows the powerful, dark wizard Gellert Grindelwald is moving to seize control of the wizarding world. Unable to stop him alone, he entrusts magizoologist Newt Scamander to lead an intrepid team of wizards and witches. They soon encounter an array of old and new beasts as they clash with Grindelwald\'s growing legion of followers.', 'Y9dr2zw-TXQ', '2022-05-08 22:16:01', '2022-05-08 22:16:01'),
(4, 'Ambulance (2022)', 'Ambulance (2022).jpg', 'Aksi, Kejahatan, Cerita Seru', '6.7', 'R', '16/03/2022', 'Coming Soon', 'Decorated veteran Will Sharp, desperate for money to cover his wife\'s medical bills, asks for help from his adoptive brother Danny. A charismatic career criminal, Danny instead offers him a score: the biggest bank heist in Los Angeles history: $32 million.', '7NU-STboFeI', '2022-05-08 22:16:58', '2022-05-09 04:41:02'),
(5, 'Morbius (2022)', 'Morbius (2022).jpg', 'Aksi, Cerita Fiksi, Fantasi', '5.9', 'PG-13', '01/04/2022', 'Now Playing', 'Dangerously ill with a rare blood disorder, and determined to save others suffering his same fate, Dr. Michael Morbius attempts a desperate gamble. What at first appears to be a radical success soon reveals itself to be a remedy potentially worse than the disease.', 'oZ6iiRrz1SY', '2022-05-08 22:18:13', '2022-05-08 22:18:13'),
(6, 'Doctor Strange in the Multiverse of Madness (2022)', 'Doctor Strange in the Multiverse of Madness (2022).jpg', 'Fantasi, Aksi, Petualangan', '8.0', 'PG-13', '06/05/2022', 'Now Playing', 'Doctor Strange, with the help of mystical allies both old and new, traverses the mind-bending and dangerous alternate realities of the Multiverse to confront a mysterious new adversary.', 'Rf8LAYJSOL8', '2022-05-08 22:19:17', '2022-05-08 22:19:17'),
(7, 'Jurassic World Dominion (2022)', 'Jurassic World Dominion (2022).jpg', 'Petualangan, Aksi, Cerita Fiksi, Cerita Seru', '4.0', 'PG-13', '10/06/2022', 'Coming Soon', 'Four years after Isla Nublar was destroyed, dinosaurs now live—and hunt—alongside humans all over the world. This fragile balance will reshape the future and determine, once and for all, whether human beings are to remain the apex predators on a planet they now share with history’s most fearsome creatures.', 'fb5ELWi-ekk', '2022-05-08 22:20:17', '2022-05-09 04:39:02'),
(8, 'The Contractor (2022)', 'The Contractor (2022).jpg', 'Aksi, Cerita Seru', '6.4', 'R', '01/04/2022', 'Now Playing', 'After being involuntarily discharged from the U.S. Special Forces, James Harper decides to support his family by joining a private contracting organization alongside his best friend and under the command of a fellow veteran. Overseas on a covert mission, Harper must evade those trying to kill him while making his way back home.', 'e7glvM8Xh0w', '2022-05-08 22:21:26', '2022-05-08 22:21:26'),
(9, 'Father Stu (2022)', 'Father Stu (2022).jpg', 'Drama', '7.2', 'R', '13/04/2022', 'Coming Soon', 'The true-life story of boxer-turned-priest, Father Stuart Long, whose journey from self-destruction to redemption inspired countless people along the way.', 'DHREzAdyCPs', '2022-05-08 22:22:20', '2022-05-09 04:37:45'),
(10, 'Hatching (2022)', 'Hatching (2022).jpg', 'Fantasi, Horror', '7.0', 'R', '04/03/2022', 'Coming Soon', '12-year-old Tinja is desperate to please her mother, a woman obsessed with presenting the image of a perfect family. One night, Tinja finds a strange egg. What hatches is beyond belief.', 'DS1oDoElwqc', '2022-05-08 22:23:18', '2022-05-09 04:38:25'),
(11, 'The Jack in the Box: Awakening (2022)', 'The Jack in the Box_Awakening (2022).jpg', 'Horror', '6.1', 'PG-13', '4/02/2022', 'Now Playing', 'When a vintage Jack-in-the-box is opened by a dying woman, she enters into a deal with the demon within that would see her illness cured in return for helping it claim six innocent victims.', 'i94q74umDGw', '2022-05-08 22:24:33', '2022-05-08 22:24:33'),
(12, 'The Exorcism of God (2022)', 'The Exorcism of God (2022).jpg', 'Horror', '6.6', 'R', '10/02/2022', 'Now Playing', 'An American priest working in Mexico is considered a saint by many local parishioners. However, due to a botched exorcism, he carries a secret that’s eating him alive until he gets an opportunity to face his demon one final time.', '_viLDiyPfMI', '2022-05-08 22:25:35', '2022-05-08 22:25:35'),
(13, 'Everything Everywhere All at Once (2022)', 'Everything Everywhere All at Once (2022).jpg', 'Aksi, Cerita Fiksi, Komedi, Petualangan', '8.9', 'R', '08/04/2022', 'Now Playing', 'An aging Chinese immigrant is swept up in an insane adventure, where she alone can save what\'s important to her by connecting with the lives she could have led in other universes.', 'wxN1T1uxQ2g', '2022-05-08 22:26:29', '2022-05-08 22:26:29'),
(14, 'Morbius (2022)', 'Morbius (2022).jpg', 'Aksi, Cerita Fiksi, Fantasi', '5.9', 'PG-13', '01/04/2022', 'Now Playing', 'Dangerously ill with a rare blood disorder, and determined to save others suffering his same fate, Dr. Michael Morbius attempts a desperate gamble. What at first appears to be a radical success soon reveals itself to be a remedy potentially worse than the disease.', 'oZ6iiRrz1SY', '2022-05-08 22:27:29', '2022-05-08 22:27:29'),
(15, 'The Northman (2022)', 'The Northman (2022).jpg', 'Aksi, Petualangan, Fantasi, Drama', '7.7', 'R', '22/04/2022', 'Now Playing', 'Prince Amleth is on the verge of becoming a man when his father is brutally murdered by his uncle, who kidnaps the boy\'s mother. Two decades later, Amleth is now a Viking who\'s on a mission to save his mother, kill his uncle and avenge his father.', 'oMSdFM12hOw&t=44s', '2022-05-08 22:28:26', '2022-05-08 22:28:26'),
(16, 'Memory (2022)', 'Memory (2022).jpg', 'Misteri, Cerita Seru, Aksi, Kejahatan', '6.2', 'R', '29/04/2022', 'Now Playing', 'Alex, an assassin-for-hire, finds that he\'s become a target after he refuses to complete a job for a dangerous criminal organization. With the crime syndicate and FBI in hot pursuit, Alex has the skills to stay ahead, except for one thing: he is struggling with severe memory loss, affecting his every move. Alex must question his every action and whom he can ultimately trust.', 'YXDi3j7OMIc', '2022-05-08 22:29:24', '2022-05-08 22:29:24'),
(17, 'Hellbender (2022)', 'Hellbender (2022).jpg', 'Horror', '6.1', 'PG-13', '05/05/2022', 'Now Playing', 'A teen and her mother live simply in a home in the woods, spending their time making metal music. A chance encounter with a fellow teen causes her to uncover a connection between her family and witchcraft, which causes a rift with her mother.', 'mWnTnizOkOg', '2022-05-08 22:30:48', '2022-05-08 22:30:48'),
(18, 'The Lost City (2022)', 'The Lost City (2022).jpg', 'Petualangan, Komedi, Percintaan', '6.9', 'PG-13', '25/03/2022', 'Now Playing', 'ollows a reclusive romance novelist who was sure nothing could be worse than getting stuck on a book tour with her cover model, until a kidnapping attempt sweeps them both into a cutthroat jungle adventure, proving life can be so much stranger, and more romantic, than any of her paperback fictions.', 'nfKO9rYDmE8', '2022-05-08 22:31:55', '2022-05-08 22:31:55'),
(19, 'Moonfall (2022)', 'Moonfall (2022).jpg', 'Cerita Fiksi, Petualangan, Aksi', '6.5', 'PG-13', '04/02/2022', 'Coming Soon', 'A mysterious force knocks the moon from its orbit around Earth and sends it hurtling on a collision course with life as we know it.', 'ivIwdQBlS10', '2022-05-08 22:33:11', '2022-05-09 04:39:38'),
(20, 'Blacklight (2022)', 'Blacklight (2022).jpg', 'Aksi, Cerita Seru', '6.2', 'PG-13', '10/02/2022', 'Coming Soon', 'Travis Block is a shadowy Government agent who specializes in removing operatives whose covers have been exposed. He then has to uncover a deadly conspiracy within his own ranks that reaches the highest echelons of power.', 'uPlCr1FFTZI', '2022-05-08 22:34:11', '2022-05-09 04:40:43'),
(21, 'The Unbearable Weight of Massive Talent (2022)', 'The Unbearable Weight of Massive Talent (2022).jpg', 'Animasi, Keluarga, Fantasi, Komedi, PetualanganAksi, Komedi, Kejahatan', '7.3', 'R', '22/04/2022', 'Coming Soon', 'Creatively unfulfilled and facing financial ruin, Nick Cage must accept a $1 million offer to attend the birthday of a dangerous superfan. Things take a wildly unexpected turn when Cage is recruited by a CIA operative and forced to live up to his own legend, channeling his most iconic and beloved on-screen characters in order to save himself and his loved ones.', 'CKTRbKch2K4', '2022-05-08 22:35:15', '2022-05-09 04:40:04'),
(22, 'Moonshot (2022)', 'Moonshot (2022).jpg', 'Komedi, Percintaan, Cerita Fiksi', '9.0', 'PG-13', '05/05/2022', 'Now Playing', 'In a future where Mars is terraformed and colonized by the best humanity has to offer, two very different college students wind up joining forces and sneak onboard a space shuttle to the red planet in order to be united with their significant others.', 'oHqfe3LcOOE', '2022-05-08 22:36:18', '2022-05-08 22:36:18'),
(24, 'The Desperate Hour (2022)', 'The Desperate Hour (2022).jpg', 'Cerita Seru', '5.9', 'PG-13', '7/02/2022', 'Coming Soon', 'A woman desperately races to save her child after police place her hometown on lockdown due to an active shooter incident.', 'kiwCH84GMhE', '2022-05-08 22:37:22', '2022-05-09 04:38:07'),
(25, 'Downton Abbey: A New Era (2022)', 'Downton Abbey_A New Era (2022).jpg', 'Drama, Sejarah, Percintaan', '7.5', 'PG', '29/04/2022', 'Now Playing', 'The Crawley family goes on a grand journey to the South of France to uncover the mystery of the dowager countess\'s newly inherited villa.', 'wN0Spmq610Q', '2022-05-08 22:38:36', '2022-05-08 22:38:36'),
(26, 'Dog (2022)', 'Dog (2022).jpg', 'Drama, Komedi', '7.3', 'PG-13', '18/02/2022', 'Now Playing', 'An army ranger and his dog embark on a road trip along the Pacific Coast Highway to attend a friend\'s funeral.', 'QXPdhyckQMs', '2022-05-08 22:39:28', '2022-05-08 22:39:28');

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
(2, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(3, '2022_04_22_120727_create_films_table', 1),
(4, '2022_05_06_231424_create_transactions_table', 1),
(5, '2022_05_08_115948_create_feedback_table', 1);

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
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `film` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `studio` enum('Dolby','Regular 2D','IMAX 2D') COLLATE utf8mb4_unicode_ci NOT NULL,
  `jam` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jml_ticket` int(11) NOT NULL,
  `no_kursi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`id`, `user_id`, `film`, `tgl`, `studio`, `jam`, `jml_ticket`, `no_kursi`, `harga`, `total2`, `created_at`, `updated_at`) VALUES
(1, 2, 'Fantastic Beasts: The Secrets of Dumbledore (2022)', '2022-06-03', 'Regular 2D', '12.00', 2, '[\"A4\",\"A5\"]', 'Rp. 75000', 'Rp. 150000', '2022-05-09 01:13:08', '2022-05-09 01:13:08'),
(2, 3, 'Moonshot (2022)', '2022-06-03', 'Dolby', '10.30', 2, '[\"A4\",\"A5\"]', 'Rp. 100000', 'Rp. 200000', '2022-05-09 01:15:06', '2022-05-09 01:15:06'),
(3, 4, 'Downton Abbey: A New Era (2022)', '2022-06-02', 'IMAX 2D', '10.30', 1, '[\"A4\"]', 'Rp. 75000', 'Rp. 75000', '2022-05-09 01:16:16', '2022-05-09 01:16:16');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` enum('Admin','Customer') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Customer',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `password`, `level`, `created_at`, `updated_at`) VALUES
(1, 'Anisa', 'Anisa', 'Anisa@gmail.com', '$2y$10$AL5XqGsyNYTjC4AMQXm0h.6vQ3j0kq3BlrK/E7ZxsUbyr57T6D7lC', 'Admin', '2022-05-08 22:03:56', '2022-05-08 22:03:56'),
(2, 'Anisa Fitrianida', 'Anisaftr', 'anisafitrianida75@gmail.com', '$2y$10$D6OOdahrbb5UagM0AAGGP.DIfEruYDiARvpkABT0wYy31sp5M5/pq', 'Customer', '2022-05-08 22:05:09', '2022-05-08 22:05:09'),
(3, 'Anisa Nur Hasanah', 'AnisaNH', 'Anisanur@gmail.com', '$2y$10$PZ6gDGXEz3P.n/DYtIbiI..MV2NuLNUJEh37gXYlCWDd6iczs.ijO', 'Customer', '2022-05-08 22:05:41', '2022-05-08 22:05:41'),
(4, 'Dede Fitriyani', 'Dedefy', 'Dede@gmail.com', '$2y$10$lM76cdg2cn/XsW6LvsBTTONkKWf65JXifGh26VHW/nuVjL6uarkE.', 'Customer', '2022-05-08 22:06:09', '2022-05-08 22:06:09');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`),
  ADD KEY `feedback_user_id_foreign` (`user_id`);

--
-- Indexes for table `films`
--
ALTER TABLE `films`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `transactions_user_id_foreign` (`user_id`);

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
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `films`
--
ALTER TABLE `films`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `feedback`
--
ALTER TABLE `feedback`
  ADD CONSTRAINT `feedback_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `transactions`
--
ALTER TABLE `transactions`
  ADD CONSTRAINT `transactions_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
