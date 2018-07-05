-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 05-07-2018 a las 04:22:38
-- Versión del servidor: 10.1.25-MariaDB
-- Versión de PHP: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `vecinosverdesbd`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `answers`
--

CREATE TABLE `answers` (
  `idanswer` int(10) UNSIGNED NOT NULL,
  `answer1` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `solutiona1` smallint(6) DEFAULT NULL,
  `answer2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `solutiona2` smallint(6) DEFAULT NULL,
  `answer3` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `solutiona3` smallint(6) DEFAULT NULL,
  `answer4` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `solutiona4` smallint(6) DEFAULT NULL,
  `status` smallint(6) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `answer_questions`
--

CREATE TABLE `answer_questions` (
  `idanswer` int(10) UNSIGNED NOT NULL,
  `idquestion` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `complaints`
--

CREATE TABLE `complaints` (
  `idcomplaint` int(10) UNSIGNED NOT NULL,
  `iduser` int(10) UNSIGNED NOT NULL,
  `typecomplaint` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(80) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cx` double(8,2) DEFAULT NULL,
  `cy` double(8,2) DEFAULT NULL,
  `obs` text COLLATE utf8mb4_unicode_ci,
  `offender` varchar(80) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` smallint(6) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `courses`
--

CREATE TABLE `courses` (
  `id` int(10) UNSIGNED NOT NULL,
  `namecourse` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descriptioncourse` text COLLATE utf8mb4_unicode_ci,
  `status` smallint(6) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `courses`
--

INSERT INTO `courses` (`id`, `namecourse`, `descriptioncourse`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Curso Basico para Ciudadanos', 'Curso Basico', 1, NULL, NULL),
(2, 'Curso Basico para Comerciantes', 'Curso Basico', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `evaluation_users`
--

CREATE TABLE `evaluation_users` (
  `idevaluation` int(10) UNSIGNED NOT NULL,
  `idlesson` int(10) UNSIGNED NOT NULL,
  `idanswer` int(10) UNSIGNED NOT NULL,
  `dateevaluation` date DEFAULT NULL,
  `note` smallint(6) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `incentives`
--

CREATE TABLE `incentives` (
  `idincentive` int(10) UNSIGNED NOT NULL,
  `iduser` int(10) UNSIGNED NOT NULL,
  `idpointrecycle` int(10) UNSIGNED NOT NULL,
  `awards` smallint(6) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lessons`
--

CREATE TABLE `lessons` (
  `idlesson` int(10) UNSIGNED NOT NULL,
  `idcourse` int(10) UNSIGNED NOT NULL,
  `titlelesson` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `objetive` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8mb4_unicode_ci,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` smallint(6) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `lessons`
--

INSERT INTO `lessons` (`idlesson`, `idcourse`, `titlelesson`, `objetive`, `description`, `content`, `image`, `url`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 'Lección Principios Basicos de Reciclaje', 'Objetivo', 'Descripcion', 'Contenido', 'imagen', 'url', 1, NULL, NULL),
(2, 1, 'Lección Manejo de Residuos', 'Objetivo', 'Descripcion', 'Contenido', 'imagen', 'url', 1, NULL, NULL),
(3, 1, 'Lección Manejo de Escombros y Residuos', 'Objetivo', 'Descripcion', 'Contenido', 'imagen', 'url', 1, NULL, NULL),
(4, 1, 'Lección Puntos de Basura', 'Objetivo', 'Descripcion', 'Contenido', 'imagen', 'url', 1, NULL, NULL),
(5, 1, 'Lección Principios Sostenibilidad y Ambiente', 'Objetivo', 'Descripcion', 'Contenido', 'Imagen', 'url', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `locations`
--

CREATE TABLE `locations` (
  `idlocation` int(10) UNSIGNED NOT NULL,
  `namelocation` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `messages`
--

CREATE TABLE `messages` (
  `idmessage` int(10) UNSIGNED NOT NULL,
  `iduser` int(10) UNSIGNED NOT NULL,
  `message` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_06_27_015129_create_courses_table', 1),
(4, '2018_06_27_015239_create_lessons_table', 1),
(5, '2018_06_27_015312_create_questions_table', 1),
(6, '2018_06_27_015343_create_answers_table', 1),
(7, '2018_06_27_015410_create_answer_questions_table', 1),
(8, '2018_06_27_015440_create_locations_table', 1),
(9, '2018_06_27_015506_create_neighborhoods_table', 1),
(10, '2018_06_27_015545_create_schedule_cleans_table', 1),
(11, '2018_06_27_015612_create_notices_table', 1),
(12, '2018_06_27_015639_create_complaints_table', 1),
(13, '2018_06_27_015706_create_recycle_points_table', 1),
(14, '2018_06_27_015734_create_incentives_table', 1),
(15, '2018_06_27_015758_create_messages_table', 1),
(16, '2018_06_27_015825_create_evaluation_users_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `neighborhoods`
--

CREATE TABLE `neighborhoods` (
  `idneighborhood` int(10) UNSIGNED NOT NULL,
  `idlocation` int(10) UNSIGNED NOT NULL,
  `nameneighborhood` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` smallint(6) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `notices`
--

CREATE TABLE `notices` (
  `idnotice` int(10) UNSIGNED NOT NULL,
  `titlenotice` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `datenotice` date DEFAULT NULL,
  `status` smallint(6) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `questions`
--

CREATE TABLE `questions` (
  `idquestion` int(10) UNSIGNED NOT NULL,
  `idlesson` int(10) UNSIGNED NOT NULL,
  `titlequestion` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `descriptionquestion` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` smallint(6) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `recycle_points`
--

CREATE TABLE `recycle_points` (
  `idpointrecycle` int(10) UNSIGNED NOT NULL,
  `iduser` int(10) UNSIGNED NOT NULL,
  `namelocal` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `schedule` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(80) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` bigint(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `schedule_cleans`
--

CREATE TABLE `schedule_cleans` (
  `idschedule` int(10) UNSIGNED NOT NULL,
  `idneighborhood` int(10) UNSIGNED NOT NULL,
  `operator` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `monday` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tuesday` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `wednesday` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `thursday` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `friday` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `saturday` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sunday` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` bigint(20) DEFAULT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` smallint(6) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `cc` bigint(20) DEFAULT NULL,
  `lastname` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `birthday` date DEFAULT NULL,
  `role` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `localname` varchar(80) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` bigint(20) DEFAULT NULL,
  `address` varchar(40) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` smallint(6) DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `cc`, `lastname`, `name`, `gender`, `birthday`, `role`, `localname`, `phone`, `address`, `email`, `password`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, NULL, NULL, 'Mario', NULL, NULL, NULL, NULL, NULL, NULL, 'mario-edwin@hotmail.com', '$2y$10$je3UF214bM6GCBopAudw5Oo3qK8MfqlHPvl4udNO50ThS6.hNDZom', NULL, '8lIsoBqvOLjot5hPZVunZfaNIXZl6j7GwxCFeskco5nYsPWMknIL5zae9O0J', '2018-07-03 05:36:42', '2018-07-03 05:36:42');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `answers`
--
ALTER TABLE `answers`
  ADD PRIMARY KEY (`idanswer`);

--
-- Indices de la tabla `answer_questions`
--
ALTER TABLE `answer_questions`
  ADD KEY `answer_questions_idanswer_foreign` (`idanswer`),
  ADD KEY `answer_questions_idquestion_foreign` (`idquestion`);

--
-- Indices de la tabla `complaints`
--
ALTER TABLE `complaints`
  ADD PRIMARY KEY (`idcomplaint`),
  ADD KEY `complaints_iduser_foreign` (`iduser`);

--
-- Indices de la tabla `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `evaluation_users`
--
ALTER TABLE `evaluation_users`
  ADD PRIMARY KEY (`idevaluation`),
  ADD KEY `evaluation_users_idlesson_foreign` (`idlesson`),
  ADD KEY `evaluation_users_idanswer_foreign` (`idanswer`);

--
-- Indices de la tabla `incentives`
--
ALTER TABLE `incentives`
  ADD PRIMARY KEY (`idincentive`),
  ADD KEY `incentives_iduser_foreign` (`iduser`),
  ADD KEY `incentives_idpointrecycle_foreign` (`idpointrecycle`);

--
-- Indices de la tabla `lessons`
--
ALTER TABLE `lessons`
  ADD PRIMARY KEY (`idlesson`),
  ADD KEY `lessons_idcourse_foreign` (`idcourse`);

--
-- Indices de la tabla `locations`
--
ALTER TABLE `locations`
  ADD PRIMARY KEY (`idlocation`);

--
-- Indices de la tabla `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`idmessage`),
  ADD KEY `messages_iduser_foreign` (`iduser`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `neighborhoods`
--
ALTER TABLE `neighborhoods`
  ADD PRIMARY KEY (`idneighborhood`),
  ADD KEY `neighborhoods_idlocation_foreign` (`idlocation`);

--
-- Indices de la tabla `notices`
--
ALTER TABLE `notices`
  ADD PRIMARY KEY (`idnotice`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`idquestion`),
  ADD KEY `questions_idlesson_foreign` (`idlesson`);

--
-- Indices de la tabla `recycle_points`
--
ALTER TABLE `recycle_points`
  ADD PRIMARY KEY (`idpointrecycle`),
  ADD KEY `recycle_points_iduser_foreign` (`iduser`);

--
-- Indices de la tabla `schedule_cleans`
--
ALTER TABLE `schedule_cleans`
  ADD PRIMARY KEY (`idschedule`),
  ADD KEY `schedule_cleans_idneighborhood_foreign` (`idneighborhood`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `answers`
--
ALTER TABLE `answers`
  MODIFY `idanswer` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `complaints`
--
ALTER TABLE `complaints`
  MODIFY `idcomplaint` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `evaluation_users`
--
ALTER TABLE `evaluation_users`
  MODIFY `idevaluation` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `incentives`
--
ALTER TABLE `incentives`
  MODIFY `idincentive` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `lessons`
--
ALTER TABLE `lessons`
  MODIFY `idlesson` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `locations`
--
ALTER TABLE `locations`
  MODIFY `idlocation` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `messages`
--
ALTER TABLE `messages`
  MODIFY `idmessage` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT de la tabla `neighborhoods`
--
ALTER TABLE `neighborhoods`
  MODIFY `idneighborhood` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `notices`
--
ALTER TABLE `notices`
  MODIFY `idnotice` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `questions`
--
ALTER TABLE `questions`
  MODIFY `idquestion` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `recycle_points`
--
ALTER TABLE `recycle_points`
  MODIFY `idpointrecycle` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `schedule_cleans`
--
ALTER TABLE `schedule_cleans`
  MODIFY `idschedule` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `answer_questions`
--
ALTER TABLE `answer_questions`
  ADD CONSTRAINT `answer_questions_idanswer_foreign` FOREIGN KEY (`idanswer`) REFERENCES `answers` (`idanswer`),
  ADD CONSTRAINT `answer_questions_idquestion_foreign` FOREIGN KEY (`idquestion`) REFERENCES `questions` (`idquestion`);

--
-- Filtros para la tabla `complaints`
--
ALTER TABLE `complaints`
  ADD CONSTRAINT `complaints_iduser_foreign` FOREIGN KEY (`iduser`) REFERENCES `users` (`id`);

--
-- Filtros para la tabla `evaluation_users`
--
ALTER TABLE `evaluation_users`
  ADD CONSTRAINT `evaluation_users_idanswer_foreign` FOREIGN KEY (`idanswer`) REFERENCES `answers` (`idanswer`),
  ADD CONSTRAINT `evaluation_users_idlesson_foreign` FOREIGN KEY (`idlesson`) REFERENCES `lessons` (`idlesson`);

--
-- Filtros para la tabla `incentives`
--
ALTER TABLE `incentives`
  ADD CONSTRAINT `incentives_idpointrecycle_foreign` FOREIGN KEY (`idpointrecycle`) REFERENCES `recycle_points` (`idpointrecycle`),
  ADD CONSTRAINT `incentives_iduser_foreign` FOREIGN KEY (`iduser`) REFERENCES `users` (`id`);

--
-- Filtros para la tabla `lessons`
--
ALTER TABLE `lessons`
  ADD CONSTRAINT `lessons_idcourse_foreign` FOREIGN KEY (`idcourse`) REFERENCES `courses` (`id`);

--
-- Filtros para la tabla `messages`
--
ALTER TABLE `messages`
  ADD CONSTRAINT `messages_iduser_foreign` FOREIGN KEY (`iduser`) REFERENCES `users` (`id`);

--
-- Filtros para la tabla `neighborhoods`
--
ALTER TABLE `neighborhoods`
  ADD CONSTRAINT `neighborhoods_idlocation_foreign` FOREIGN KEY (`idlocation`) REFERENCES `locations` (`idlocation`);

--
-- Filtros para la tabla `questions`
--
ALTER TABLE `questions`
  ADD CONSTRAINT `questions_idlesson_foreign` FOREIGN KEY (`idlesson`) REFERENCES `lessons` (`idlesson`);

--
-- Filtros para la tabla `recycle_points`
--
ALTER TABLE `recycle_points`
  ADD CONSTRAINT `recycle_points_iduser_foreign` FOREIGN KEY (`iduser`) REFERENCES `users` (`id`);

--
-- Filtros para la tabla `schedule_cleans`
--
ALTER TABLE `schedule_cleans`
  ADD CONSTRAINT `schedule_cleans_idneighborhood_foreign` FOREIGN KEY (`idneighborhood`) REFERENCES `neighborhoods` (`idneighborhood`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
