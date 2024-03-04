-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 04, 2024 at 11:36 AM
-- Server version: 8.0.30
-- PHP Version: 8.2.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sajib`
--

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `subject`, `message`, `created_at`, `updated_at`) VALUES
(2, 'poqivycy@mailinator.com', 'nutu@mailinator.com', 'qumywifar@mailinator.com', 'Aspernatur error con', '2024-03-04 05:12:26', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_03_02_094451_create_services_table', 2),
(6, '2024_03_02_110150_create_service_models_table', 3),
(7, '2024_03_02_114211_create_service_lists_table', 4),
(8, '2024_03_04_100500_create_myworks_table', 5),
(9, '2024_03_04_105838_create_contacts_table', 6);

-- --------------------------------------------------------

--
-- Table structure for table `myworks`
--

CREATE TABLE `myworks` (
  `id` bigint UNSIGNED NOT NULL,
  `clients` int NOT NULL,
  `projects` int NOT NULL,
  `awards` int NOT NULL,
  `experience` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `myworks`
--

INSERT INTO `myworks` (`id`, `clients`, `projects`, `awards`, `experience`, `created_at`, `updated_at`) VALUES
(1, 2, 20, 0, 2, '2024-03-04 04:31:24', '2024-03-04 04:31:24');

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint UNSIGNED NOT NULL,
  `service_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `service_short_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `service_name`, `service_short_description`, `icon`, `status`, `created_at`, `updated_at`) VALUES
(1, 'web development', 'Experienced Laravel web developer proficient in MVC architecture, RESTful APIs, database management, security, optimization, collaboration, deployment, problem-solving, and client satisfaction. Skilled in frontend integration, troubleshooting, and continuous learning.', 'web development-65e3cfb2dd4e6.jpg', '1', '2024-03-02 19:17:39', '2024-03-02 19:22:42'),
(2, 'web design', 'Creative web designer with expertise in UI/UX design, responsive layouts, and Adobe Creative Suite. Proficient in HTML, CSS, and JavaScript. Committed to delivering visually appealing and user-friendly websites.', 'web design-65e3cfd1bd9bd.jpg', '1', '2024-03-02 19:18:09', '2024-03-02 19:22:44'),
(3, 'phd to html', 'Skilled PHP to HTML designer proficient in converting PHP templates to HTML/CSS layouts. Ensures clean, responsive designs with attention to detail and adherence to project requirements.', 'phd to html-65e3cfead85c6.jpg', '1', '2024-03-02 19:18:34', '2024-03-02 19:22:46'),
(4, 'Figma to html', 'Experienced Figma to HTML designer adept at translating Figma designs into pixel-perfect, responsive HTML/CSS layouts. Ensures fidelity to design specifications and delivers high-quality, visually appealing websites.', 'Figma to html-65e3cfff24025.jpg', '1', '2024-03-02 19:18:55', '2024-03-02 19:22:46'),
(5, 'Tailwind CSS', 'Tailwind CSS enables efficient building of modern websites with its utility-first approach, offering a streamlined development experience and allowing for rapid creation of responsive and visually appealing designs.', 'Tailwind CSS-65e3d01e0c688.jpg', '1', '2024-03-02 19:19:26', '2024-03-02 19:22:47'),
(6, 'REST API', 'Experienced REST API developer specializing in Laravel, adept at designing and implementing RESTful APIs to facilitate seamless communication between frontend and backend components of Laravel websites.', 'REST API-65e3d03949c5a.jpg', '1', '2024-03-02 19:19:53', '2024-03-02 19:22:49'),
(7, 'Multi-authentication in Laravel', 'Multi-authentication in Laravel enables the implementation of multiple authentication systems within a single application, allowing users with different roles or access levels to securely interact with the platform.', 'Multi-authentication in Laravel-65e3d056a4da3.jpg', '0', '2024-03-02 19:20:22', '2024-03-02 19:21:02'),
(8, 'Eloquent ORM', 'Eloquent ORM in Laravel simplifies database interactions by providing an intuitive, expressive syntax for querying and manipulating data, facilitating efficient data management and ensuring code readability and maintainability.', 'Eloquent ORM-65e3d06df092d.jpg', '0', '2024-03-02 19:20:45', '2024-03-02 19:21:02');

-- --------------------------------------------------------

--
-- Table structure for table `service_lists`
--

CREATE TABLE `service_lists` (
  `id` bigint UNSIGNED NOT NULL,
  `service_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `service_lists`
--

INSERT INTO `service_lists` (`id`, `service_name`, `created_at`, `updated_at`) VALUES
(1, 'web design', '2024-03-02 10:50:44', NULL),
(2, 'web development', '2024-03-02 10:50:49', NULL),
(3, 'Laravel', '2024-03-02 10:50:55', NULL),
(4, 'php', '2024-03-02 10:50:58', NULL),
(5, 'object oriented programming', '2024-03-02 10:51:22', NULL),
(6, 'Live server', '2024-03-02 10:51:39', NULL),
(7, 'phd to html', '2024-03-02 10:52:45', NULL),
(8, 'Figma to html', '2024-03-02 10:52:54', NULL),
(9, 'Database Operation', '2024-03-02 10:54:04', NULL),
(10, 'Eloquent ORM', '2024-03-02 10:54:19', NULL),
(11, 'Routing system', '2024-03-02 10:54:34', NULL),
(12, 'Blade engine', '2024-03-02 10:54:52', NULL),
(13, 'search & filtering', '2024-03-02 10:55:23', NULL),
(14, 'HTTP request', '2024-03-02 10:55:34', NULL),
(15, 'Authentication', '2024-03-02 10:55:50', NULL),
(16, 'Testing Support', '2024-03-02 10:56:06', NULL),
(17, 'Task Scheduling', '2024-03-02 10:56:13', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `service_models`
--

CREATE TABLE `service_models` (
  `id` bigint UNSIGNED NOT NULL,
  `service_name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `service_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `service_link` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `service_list` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `service_models`
--

INSERT INTO `service_models` (`id`, `service_name`, `service_description`, `service_link`, `service_list`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Laravel web developer', 'As a Laravel web developer, I specialize in building robust and scalable web applications using Laravel\'s MVC architecture. Proficient in RESTful API development, database management, and security implementation. I prioritize clean, maintainable code and collaborate closely with teams to achieve project goals. Experienced in deploying and optimizing Laravel applications, I strive to deliver high-quality solutions that meet client needs and exceed expectations.', 'https://github.com/Sajib-dev1/The-Mart/tree/master', '2,3,4,5,6', 'Laravel web developer-65e3d1a12ed8c.png', '2024-03-02 19:25:53', NULL),
(2, 'web design', 'As a web designer, I leverage my expertise in UI/UX design and proficiency in HTML, CSS, and JavaScript to create visually appealing and user-friendly websites. With a focus on responsive layouts and Adobe Creative Suite skills, I deliver designs that meet client objectives and engage audiences effectively.', 'https://github.com/Sajib-dev1/honkok', '1,6,7', 'web design-65e3d2e5e95bd.png', '2024-03-02 19:31:18', NULL),
(3, 'PHP to HTML designer', 'As a PHP to HTML designer, I specialize in converting PHP templates into clean, responsive HTML/CSS layouts. With meticulous attention to detail, I ensure fidelity to design specifications and compatibility across browsers. Proficient in PHP, HTML, CSS, and JavaScript, I deliver high-quality conversions that enhance user experience and meet the needs of clients effectively.', 'sajib-dev1.github.io/hunt/', '1,6,16', 'PHP to HTML designer-65e3d34a9cb32.png', '2024-03-02 19:32:58', NULL),
(4, 'Figma to HTML design', 'Proficient Figma to HTML designer, skilled in translating Figma designs into pixel-perfect, responsive HTML/CSS layouts. Ensures fidelity to design specifications, delivering visually appealing websites that meet client requirements effectively.', 'https://sajib-dev1.github.io/Agency/', '15,16,17', 'Figma to HTML design-65e3d3c5963cb.png', '2024-03-02 19:35:01', NULL),
(5, 'Tailwind CSS', 'Tailwind CSS enables efficient construction of modern websites with its utility-first approach, streamlining development by offering a comprehensive set of pre-designed components and utility classes. It facilitates rapid creation of responsive and visually appealing designs while maintaining flexibility and scalability. Tailwind CSS optimizes workflow, empowering developers to focus on building intuitive user interfaces that enhance user experience and engagement effectively.', 'https://github.com/Sajib-dev1/constraction', '9,14,15', 'Tailwind CSS-65e3d43f93bdf.png', '2024-03-02 19:37:03', NULL),
(6, 'REST API developer specializing in Laravel', 'As a REST API developer specializing in Laravel, I design and implement robust APIs to facilitate seamless communication between frontend and backend components of Laravel websites. Proficient in Laravel\'s Eloquent ORM and authentication mechanisms, I prioritize security, scalability, and performance, ensuring optimal functionality and user experience.', 'https://github.com/Sajib-dev1/Hospital', '3,4,5,6,10,13', 'REST API developer specializing in Laravel-65e3d4ff36eeb.png', '2024-03-02 19:40:15', NULL),
(7, 'Multi-authentication in Laravel', 'Multi-authentication in Laravel enables the implementation of diverse authentication systems within a single application. It allows users with different roles or access levels to securely interact with the platform. Laravel\'s flexible authentication mechanisms support various authentication providers, ensuring efficient management of user authentication and authorization processes.', 'https://github.com/Sajib-dev1/The-Mart/tree/master', '3,4,9,10,11,12', 'Multi-authentication in Laravel-65e3d57803b68.png', '2024-03-02 19:42:16', NULL),
(8, 'Eloquent ORM in Laravel', 'Eloquent ORM in Laravel simplifies database interactions by providing an intuitive, expressive syntax for querying and manipulating data. It abstracts database operations, allowing developers to work with database records as objects, enhancing code readability and maintainability. Eloquent\'s powerful relationships enable seamless management of complex data associations. With features like eager loading and lazy loading, Eloquent optimizes database performance, facilitating efficient data retrieval and manipulation in Laravel applications.', 'https://github.com/Sajib-dev1/The-Mart/tree/master', '11,12,13,14,15,16', 'Eloquent ORM in Laravel-65e3d5b9d24e1.png', '2024-03-02 19:43:21', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logo` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logo_text` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `photo`, `logo`, `logo_text`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Dara Zamora', 'dycovy@mailinator.com', NULL, '$2y$12$kmmYcoW/7vlA4fRshFL3MuF4xvNCmjWB3qXp2z5R0PF4rLnrYUUdK', NULL, '', NULL, NULL, '2024-03-02 00:35:12', '2024-03-02 00:35:12'),
(2, 'Zane Haley', 'katoze@mailinator.com', NULL, '$2y$12$75ocO1IGmHS2s9s.MGN1h.e/ZRyPL/Q6.1hldVyAsG.yTF91f71hm', NULL, '', NULL, NULL, '2024-03-02 00:51:56', '2024-03-02 00:51:56'),
(3, 'Arden Vazquez', 'petov@mailinator.com', NULL, '$2y$12$DJsCSszuYUvF8Lwga1eit.WjS.J6TKIXq2ktW6NOOcryLWQJRphR6', '3.jpg', '65e2e78e42bca.jpg', '65e2ea0a3e953.png', '5mSynMVtUrHLziczJxJyvtB5XzNtoGOOC8bzqlFOdQMmreglq7sOjtvrNJgd', '2024-03-02 00:53:53', '2024-03-02 02:57:46');

--
-- Indexes for dumped tables
--

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
-- Indexes for table `myworks`
--
ALTER TABLE `myworks`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service_lists`
--
ALTER TABLE `service_lists`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service_models`
--
ALTER TABLE `service_models`
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
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `myworks`
--
ALTER TABLE `myworks`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `service_lists`
--
ALTER TABLE `service_lists`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `service_models`
--
ALTER TABLE `service_models`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
