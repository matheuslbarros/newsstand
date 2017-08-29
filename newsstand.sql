-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 29-Ago-2017 às 03:31
-- Versão do servidor: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `homestead`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `articles`
--

CREATE TABLE `articles` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `body` text COLLATE utf8_unicode_ci NOT NULL,
  `publish_date` datetime NOT NULL,
  `photo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `articles`
--

INSERT INTO `articles` (`id`, `title`, `body`, `publish_date`, `photo`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Possimus a eum sapiente aut incidunt deleniti facere.', 'Doloremque ut vel voluptatibus eaque ut neque aliquam eveniet. Natus modi illo labore magnam aut laudantium. Nihil itaque vel rerum quia. Velit aperiam quibusdam in expedita.\n\nEligendi expedita quisquam quod doloremque id dolor commodi. Dignissimos sapiente qui est quaerat repudiandae doloribus et. Et nemo dolorem ut aut voluptate. Adipisci eos illum tempore qui quia qui alias.\n\nAut harum iusto quia voluptatem quia. Earum est quo praesentium dolore aliquid. Totam dolores laboriosam maxime laboriosam alias.\n\nFugit harum blanditiis quo libero excepturi sequi aut. Dolores facere voluptatum qui ut delectus illum. Rerum aut harum inventore at in ullam id.', '1997-12-18 13:24:29', '4759afb8ad64b61410527aa6b94dc29d.jpg', 1, '2017-08-29 04:30:18', '2017-08-29 04:30:18'),
(2, 'Est at ducimus et voluptates et.', 'Deleniti nisi harum commodi nesciunt in amet necessitatibus non. Minus sequi numquam minus dignissimos vitae quia quia.\n\nSed consequatur distinctio placeat expedita non. Repudiandae sunt repellat asperiores porro adipisci. Non reiciendis libero culpa nihil molestiae maxime vitae. Placeat in repudiandae nostrum rerum.\n\nEarum officia minima quia reprehenderit voluptatibus a doloremque. Totam vel et voluptatem sit odio ipsa ab dignissimos. Ea quam veniam saepe velit ut. Suscipit quia quibusdam minus quos possimus explicabo. Corporis maxime et sapiente iste.\n\nVoluptatem consequuntur natus sit laudantium quam architecto perferendis. Ut molestiae consequatur quos. Nam provident repudiandae aut sint expedita. Excepturi molestiae facilis magnam non consequatur ipsam.', '2004-08-23 01:52:47', 'b1c391e1cc83c3719d038d7a6d37b186.jpg', 1, '2017-08-29 04:30:20', '2017-08-29 04:30:20'),
(3, 'Nemo sed possimus architecto nihil consequatur.', 'Inventore harum ipsa autem. Velit delectus fugiat neque et quo consequuntur minus. Dolor rerum ab et reiciendis non quia. Sapiente distinctio sint maxime atque.\n\nEaque quia et aliquam sed. Tempore ex dolor quis eum et labore non. Sed porro nam tempora alias enim. Dolor nesciunt sunt earum quo ipsum.\n\nVoluptatibus impedit ab id velit architecto et ut dolor. Adipisci quia ut distinctio nemo aspernatur vitae excepturi. Cumque eum consectetur tempore et nulla.\n\nPerspiciatis dicta sed ducimus doloribus qui dicta excepturi aut. Cupiditate et provident sint a nulla. Quos ipsa id omnis. Facilis quod ut quia molestiae.', '1994-08-18 15:49:21', '0c02cb55e9b682f438af9c581bb70e93.jpg', 1, '2017-08-29 04:30:24', '2017-08-29 04:30:24'),
(4, 'Vel ut ea maxime.', 'Consectetur quia architecto consequatur nesciunt et dolorem quia. Qui voluptas officia quas earum perferendis ea qui dolorum. Ea porro assumenda ullam numquam ducimus error facere nobis. Velit voluptatem illo maiores porro voluptatem officia rerum inventore.\n\nDucimus veritatis magni quis repudiandae voluptatem doloribus. Voluptatem ducimus sit vitae sit. Et nobis architecto ullam.\n\nConsectetur doloremque est earum rerum. Id veritatis tempora magni ipsa odit a. Dolore laborum cum rerum. Et non quam sed officiis.\n\nAsperiores sed possimus est unde voluptas ratione. Impedit dolores neque doloremque hic qui ut at. Eum expedita aut alias qui est alias omnis omnis. Quis nostrum at voluptas dignissimos fugiat.', '1970-04-28 18:33:11', '4fa4c91a83d17fc2ee56471b98e7161c.jpg', 1, '2017-08-29 04:30:25', '2017-08-29 04:30:25'),
(5, 'Distinctio ipsam rem ad sequi.', 'Fugiat quod tempora officia sit consequatur nesciunt. Aliquid dignissimos nihil sed aspernatur. Inventore quas est voluptates eligendi dolore aperiam consequatur quis.\n\nAut placeat rerum odio et facere dolores quaerat nihil. Earum ratione aspernatur mollitia et.\n\nEa explicabo odit tenetur laborum. Dolorum molestiae voluptas quisquam voluptas impedit suscipit. Fugit saepe illum minus magni ipsa culpa et.\n\nDeleniti incidunt eveniet quia eos eaque saepe inventore qui. Nisi error voluptates et repellat. Dolorum modi enim deserunt eum a excepturi. Odit in est et dolorem.', '1977-12-21 12:39:44', 'bd19d42d9c9bd56e4c7598d65bbe32c5.jpg', 1, '2017-08-29 04:30:27', '2017-08-29 04:30:27'),
(6, 'Omnis cum iusto excepturi illum eos.', 'Est doloribus aut ut reiciendis asperiores amet quaerat. Molestias ea et magnam explicabo quam. Et id similique sit et consequatur.\n\nLabore atque aut dolor saepe qui nostrum. Voluptatem veniam iste minus fugiat voluptas assumenda. Tempore quia nam sequi voluptatem. Qui tempore porro et odio repudiandae qui commodi.\n\nOmnis voluptatem rerum quis est a eum doloribus. Sit officia aut repellendus magnam veritatis. Enim rerum ullam nisi quia aut hic necessitatibus consequatur. Sunt rem a tenetur.\n\nQui et asperiores molestiae velit unde veniam. Facilis rerum aut illo. Ut omnis ex reprehenderit eos. Quidem asperiores doloremque voluptas est nulla optio.', '1995-02-09 10:49:28', '1df9e3a6414bb50eaf2d7e2a8ee56095.jpg', 1, '2017-08-29 04:30:29', '2017-08-29 04:30:29'),
(7, 'Ipsa et odio voluptatibus qui maxime asperiores ullam consectetur.', 'Aut velit in cum modi placeat non quaerat. Vel fuga consequatur laborum voluptatem et quis. Quam aliquid sit a. Molestiae mollitia autem et natus dolor voluptate natus.\n\nLaboriosam ut magnam harum deleniti ea. Culpa non voluptatem impedit quaerat. Cumque maxime ducimus id. Nostrum unde aperiam aut sed aut blanditiis aut impedit.\n\nDolorum aperiam libero expedita veniam voluptate nisi at. Illum ea voluptas voluptas dolor eius nemo suscipit ut. Ratione dignissimos accusantium beatae accusantium animi deserunt. Laudantium iusto tenetur blanditiis.\n\nExplicabo est cumque illum itaque deleniti quia voluptatem. Dignissimos nostrum totam autem esse maxime. Culpa sit corporis suscipit odit delectus beatae.', '2015-08-23 17:12:38', '80edaa1fe843bbbff0f08400f5ad29a4.jpg', 1, '2017-08-29 04:30:32', '2017-08-29 04:30:32'),
(8, 'Est reiciendis sit labore quia aliquam.', 'Consequatur enim hic dolorem. Ducimus sit delectus libero mollitia aut accusamus laudantium. Expedita fugit laborum deleniti tempora reiciendis. Dolorem aspernatur nobis optio facere sapiente voluptas.\n\nConsequatur rerum quisquam natus laborum. Nobis consectetur aspernatur sapiente eaque quasi molestiae. Aut perspiciatis ab consequatur voluptatibus commodi. Consequatur minus est quaerat fugit delectus.\n\nAb blanditiis labore et ducimus eos. Culpa quibusdam facilis impedit dolore doloremque accusantium modi atque. Ab qui rerum minus accusamus soluta in.\n\nDolorum at est vero eum quae doloribus fugit. Et laborum excepturi totam voluptatem nobis repudiandae cupiditate. Molestias incidunt natus in dicta. Id enim dolores est alias et laborum.', '2008-08-23 02:19:10', 'c2738f86de11ff8c19225e3c5903010c.jpg', 1, '2017-08-29 04:30:34', '2017-08-29 04:30:34'),
(9, 'Architecto consectetur vitae perferendis cum.', 'Recusandae autem velit aliquam. Iste aut dolorem sed veniam eos amet ipsam. Ratione explicabo praesentium accusamus reiciendis deleniti. Quos ducimus error sint.\n\nSunt quos ut expedita. Ut nulla commodi nihil porro ut itaque. Dolorum temporibus fugiat et enim labore laborum in.\n\nIusto sed nostrum eligendi nesciunt ut. Temporibus cum expedita consequuntur id repellat nostrum nihil veritatis. Maxime quia tempora eius quia. Et inventore maxime voluptatibus minima perferendis.\n\nAut vitae ut at voluptas sunt aut quia dolorem. Eos placeat qui et voluptas. Et fuga officiis expedita sed rem numquam dolor. Repellat aperiam harum pariatur dignissimos earum est alias vel.', '1973-07-20 17:48:02', '8f785c304307b179a470e130fca77d6c.jpg', 1, '2017-08-29 04:30:36', '2017-08-29 04:30:36'),
(10, 'Rem et enim est suscipit ab.', 'Tempore iure officia laudantium similique totam. Dolor quia quo aliquid magni sit sunt. Necessitatibus iure aut autem error. Recusandae dolorem quo voluptatum pariatur eum voluptatem eum.\n\nOmnis perferendis et quia quo. Atque atque nihil voluptate quia et dicta delectus id. Tempore et qui voluptas sint et. Minus qui doloribus voluptatem voluptas quo enim et at.\n\nMolestiae consequatur sequi ad iste repudiandae esse. Porro mollitia enim iste minima maiores. Amet consequatur est perspiciatis provident nesciunt sed. Sunt ut voluptate deserunt est sequi sunt culpa.\n\nFacere laudantium consequatur assumenda nam dicta. Autem dolore ea id ea quae eum. Non nihil fuga voluptas corporis totam nihil iste. Eius expedita vel ab deserunt.', '2014-07-21 18:10:12', '3019148fc02daf09ef23e7ea6c49e840.jpg', 1, '2017-08-29 04:30:39', '2017-08-29 04:30:39'),
(11, 'Dolor consequatur cupiditate aperiam et sint et.', 'Aperiam ut repellendus voluptatibus ea suscipit delectus porro. Pariatur accusantium debitis tempore beatae provident assumenda similique voluptate. Et ut minima distinctio minus voluptas fugiat.\n\nAtque officiis enim esse ea vel. Ducimus totam saepe eum omnis. Excepturi temporibus itaque tempore provident blanditiis.\n\nEsse ratione expedita voluptatem in aut ipsam reprehenderit. Similique veritatis natus occaecati veritatis est quasi. Et id a ipsa. Autem aut vel quia laboriosam velit sit. Nemo in esse magnam magni porro.\n\nOmnis aut repellat cupiditate cupiditate id ea. Quaerat ipsam odio dolores omnis voluptatum. Cupiditate tenetur sapiente minus nulla deserunt laudantium in. Totam nobis deleniti quas porro quam dolore veritatis.', '2001-01-07 23:24:36', 'ebbd1669104ecd571b846277246dac56.jpg', 1, '2017-08-29 04:30:41', '2017-08-29 04:30:41'),
(12, 'Repudiandae quibusdam consectetur accusantium temporibus harum tempora voluptatem.', 'Ad blanditiis iusto consequatur vitae officia beatae omnis vel. Est possimus pariatur ex ex. Rerum odit velit molestiae quibusdam fuga dolores cupiditate asperiores. Rem recusandae veniam et debitis laudantium et.\n\nAsperiores eius eos consequatur et. Voluptatibus architecto cumque voluptatem qui. Cum ut qui aliquam rerum fuga.\n\nAsperiores vitae cum at doloremque aperiam quis a. Nobis sed rerum sed vel ut repellat error accusantium. Illo labore voluptates vitae rerum velit voluptas.\n\nNesciunt quaerat sit aut non. Dicta rerum et voluptas praesentium quae. Id inventore totam et deserunt et. Quam sed modi ipsum culpa. Repellat et ea ut ab sint sint.', '1985-02-24 19:24:20', '6eec61d6df1a601dd64d31cdea50c967.jpg', 1, '2017-08-29 04:30:45', '2017-08-29 04:30:45'),
(13, 'Eligendi doloribus consequatur consectetur facere unde quasi.', 'Nemo et reiciendis sunt rerum. Vero odio cum quia assumenda harum eum. Officiis saepe accusamus ipsam. Odio consequatur quis natus.\n\nEx temporibus illum quidem blanditiis. Quisquam beatae voluptatem sit eum quisquam voluptatem. Cumque iusto accusamus eos blanditiis esse recusandae. Consectetur soluta commodi voluptate distinctio et eos perspiciatis. Eos velit sit sint et beatae autem amet.\n\nFuga cupiditate iusto aut autem. Fugit omnis sit dignissimos odio. Reiciendis delectus aut quia veniam vel aut.\n\nError est molestiae ut in. Accusamus exercitationem eum non dolor. A id ea et dolor maiores.', '2007-11-18 14:46:48', '9f3f5af0648cfddc358b6dd52866c092.jpg', 1, '2017-08-29 04:30:48', '2017-08-29 04:30:48');

-- --------------------------------------------------------

--
-- Estrutura da tabela `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(21, '2014_10_12_000000_create_users_table', 1),
(22, '2014_10_12_100000_create_password_resets_table', 1),
(23, '2017_08_26_043739_create_articles_table', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `confirmed` tinyint(1) NOT NULL DEFAULT '0',
  `confirmation_code` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `confirmed`, `confirmation_code`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Administrador', 'admin@newsstand.com', '$2y$10$bTcGsBMMEJjkulMKeIGxNOvNrw6qKMM7Ziwqf7mYjiRGC7NZsHbZ2', 1, NULL, NULL, '2017-08-29 04:30:15', '2017-08-29 04:30:15');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `articles_user_id_foreign` (`user_id`);

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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `articles`
--
ALTER TABLE `articles`
  ADD CONSTRAINT `articles_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
