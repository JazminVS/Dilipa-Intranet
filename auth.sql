-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-06-2018 a las 19:43:12
-- Versión del servidor: 10.1.32-MariaDB
-- Versión de PHP: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `auth`
--

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
(97, '2014_10_12_000000_create_users_table', 1),
(98, '2014_10_12_100000_create_password_resets_table', 1),
(99, '2015_01_20_084450_create_roles_table', 1),
(100, '2015_01_20_084525_create_role_user_table', 1),
(101, '2015_01_24_080208_create_permissions_table', 1),
(102, '2015_01_24_080433_create_permission_role_table', 1),
(103, '2015_12_04_003040_add_special_role_column', 1),
(104, '2017_10_17_170735_create_permission_user_table', 1);

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
-- Estructura de tabla para la tabla `permissions`
--

CREATE TABLE `permissions` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `slug`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Autorizacion a Departamento Auditoria', 'departamentos_login.auditoria_acceso', 'Acceso al departamento Auditoria por parte del administrador', '2018-06-19 22:08:05', '2018-06-19 22:08:05'),
(2, 'Autorizacion a Departamento Compras', 'departamentos_login.compras_acceso', 'Acceso al departamento Compras por parte del administrador', '2018-06-19 22:08:05', '2018-06-19 22:08:05'),
(3, 'Autorizacion a Departamento Contabilidad', 'departamentos_login.conta_acceso', 'Acceso al departamento Contabilidad por parte del administrador', '2018-06-19 22:08:05', '2018-06-19 22:08:05'),
(4, 'Autorizacion a Departamento Marketing', 'departamentos_login.marketing_acceso', 'Acceso al departamento Marketing por parte del administrador', '2018-06-19 22:08:05', '2018-06-19 22:08:05'),
(5, 'Autorizacion a Departamento RRHH', 'departamentos_login.rrhh_acceso', 'Acceso al departamento de Recursos Humanos por parte del administrador', '2018-06-19 22:08:05', '2018-06-19 22:08:05'),
(6, 'Autorizacion a Departamento Sistemas', 'departamentos_login.sistemas_acceso', 'Acceso al departamento Sistemas por parte del administrador', '2018-06-19 22:08:06', '2018-06-19 22:08:06');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permission_role`
--

CREATE TABLE `permission_role` (
  `id` int(10) UNSIGNED NOT NULL,
  `permission_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `permission_role`
--

INSERT INTO `permission_role` (`id`, `permission_id`, `role_id`, `created_at`, `updated_at`) VALUES
(1, 1, 2, NULL, NULL),
(2, 2, 3, NULL, NULL),
(3, 3, 4, NULL, NULL),
(4, 4, 5, NULL, NULL),
(5, 5, 6, NULL, NULL),
(6, 6, 7, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permission_user`
--

CREATE TABLE `permission_user` (
  `id` int(10) UNSIGNED NOT NULL,
  `permission_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `special` enum('all-access','no-access') COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id`, `name`, `slug`, `description`, `created_at`, `updated_at`, `special`) VALUES
(1, 'administrador', 'Administrador Principal', 'Administrador General del sitio web', '2018-06-19 22:08:06', '2018-06-19 22:08:06', NULL),
(2, 'administrador_auditoria', 'auditoria', 'Administrador Departamento Auditoria', '2018-06-19 22:08:06', '2018-06-19 22:08:06', NULL),
(3, 'administrador_compras', 'compras', 'Administrador Departamento Compras', '2018-06-19 22:08:06', '2018-06-19 22:08:06', NULL),
(4, 'administrador_conta', 'contabilidad', 'Administrador Departamento Contabilidad', '2018-06-19 22:08:06', '2018-06-19 22:08:06', NULL),
(5, 'administrador_marketing', 'marketing', 'Administrador Departamento Marketing', '2018-06-19 22:08:06', '2018-06-19 22:08:06', NULL),
(6, 'administrador_rrhh', 'rrhh', 'Administrador Departamento Recursos Humanos', '2018-06-19 22:08:06', '2018-06-19 22:08:06', NULL),
(7, 'administrador_sistemas', 'sistemas', 'Administrador Departamento Sistemas', '2018-06-19 22:08:06', '2018-06-19 22:08:06', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `role_user`
--

CREATE TABLE `role_user` (
  `id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `role_user`
--

INSERT INTO `role_user` (`id`, `role_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '2018-06-19 22:08:06', '2018-06-19 22:08:06'),
(2, 2, 2, '2018-06-19 22:08:07', '2018-06-19 22:08:07'),
(3, 3, 3, '2018-06-19 22:08:07', '2018-06-19 22:08:07'),
(4, 4, 4, '2018-06-19 22:08:07', '2018-06-19 22:08:07'),
(5, 5, 5, '2018-06-19 22:08:08', '2018-06-19 22:08:08'),
(6, 6, 6, '2018-06-19 22:08:08', '2018-06-19 22:08:08'),
(7, 7, 7, '2018-06-19 22:08:09', '2018-06-19 22:08:09');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `username`, `name`, `lastname`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'Administrador', 'Administrador', 'user@admin.com', '$2y$10$VdRsfIX7Vg0w6YZrrpzl3e5lgk9NP6CeNSuNK16xct8Cx9BZol0vq', NULL, '2018-06-19 22:08:06', '2018-06-19 22:08:06'),
(2, 'auditoria', 'Administrador', 'Auditoria', 'auditoria@admin.com', '$2y$10$A.D7fJ6khed4oYk1xE12BOa51jBc93VebIpHqsvE3VjKD9vxAiE2.', 'sL2Gk9UShxLTFV1qEXruYoeuZfVrtBoIJP8KQ5CGy5eQpXUP9mQ8o38sg6Ig', '2018-06-19 22:08:07', '2018-06-19 22:08:07'),
(3, 'compras', 'Administrador', 'Compras', 'compras@admin.com', '$2y$10$JbmxvPL8uENS191sWuYbWOMdbhtGqk9T4LvjOwngK6NCKzdW0QQPi', 'gMvmGIrlMOvrb83M1pVwd1cJdJiZL4wpcfJ8QjHBLJm0gZLTDq5aWeToiFrK', '2018-06-19 22:08:07', '2018-06-19 22:08:07'),
(4, 'contabilidad', 'Administrador', 'Contabilidad', 'contabilidad@admin.com', '$2y$10$TOZlxVlHLnKsFHdzfa1Vte61xR.0BD8HKU/8d1VJkf3Hc4YdT0blm', '0gxZTf8oH03sVICqnCHWZQTqjhC6sEeafNxoGiCV2RbghCfU87drll1WvYy6', '2018-06-19 22:08:07', '2018-06-19 22:08:07'),
(5, 'marketing', 'Administrador', 'Marketing', 'marketing@admin.com', '$2y$10$IGDoxxTc8YSZ9GSmbd0eb.2s7rqj5Dxa9KYd0UlS3Ogm6pDEJjOwq', 'EE96rYRVoOq7AH38bnYwHJnu5pCVjhmBeliQcJJyVoo5eiH82U3RRphmnOoE', '2018-06-19 22:08:08', '2018-06-19 22:08:08'),
(6, 'recursos', 'Administrador', 'RRHH', 'rrhh@admin.com', '$2y$10$/vGbwyyGKR8KFyJ98W2/r.s4Ic0VjEYcnTYY017bvJz/YPcNAbqsm', 'wLiM42MkffbI8dBnnQewYIn0QOwlod9Q0kOHoQcnjvjP1mGRaz2Yj3hX1HUU', '2018-06-19 22:08:08', '2018-06-19 22:08:08'),
(7, 'sistemas', 'Administrador', 'Sistemas', 'sistemas@admin.com', '$2y$10$W7W7CETzcNPJQEcpGXhCieogiictg9BHtBsHLZXic4r4NSA2DewY.', 'SLE1cpqCAkLirqgwvVXUqd2anG02MzlFDf3QXBi1jJYWXYxMEayv9NPEMttq', '2018-06-19 22:08:08', '2018-06-19 22:08:08');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_slug_unique` (`slug`);

--
-- Indices de la tabla `permission_role`
--
ALTER TABLE `permission_role`
  ADD PRIMARY KEY (`id`),
  ADD KEY `permission_role_permission_id_index` (`permission_id`),
  ADD KEY `permission_role_role_id_index` (`role_id`);

--
-- Indices de la tabla `permission_user`
--
ALTER TABLE `permission_user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `permission_user_permission_id_index` (`permission_id`),
  ADD KEY `permission_user_user_id_index` (`user_id`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_unique` (`name`),
  ADD UNIQUE KEY `roles_slug_unique` (`slug`);

--
-- Indices de la tabla `role_user`
--
ALTER TABLE `role_user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `role_user_role_id_index` (`role_id`),
  ADD KEY `role_user_user_id_index` (`user_id`);

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
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=105;

--
-- AUTO_INCREMENT de la tabla `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `permission_role`
--
ALTER TABLE `permission_role`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `permission_user`
--
ALTER TABLE `permission_user`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `role_user`
--
ALTER TABLE `role_user`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `permission_role`
--
ALTER TABLE `permission_role`
  ADD CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `permission_user`
--
ALTER TABLE `permission_user`
  ADD CONSTRAINT `permission_user_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `permission_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `role_user`
--
ALTER TABLE `role_user`
  ADD CONSTRAINT `role_user_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
