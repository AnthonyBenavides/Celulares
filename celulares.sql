-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 22-12-2019 a las 02:27:36
-- Versión del servidor: 10.4.6-MariaDB
-- Versión de PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `celulares`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `failed_jobs`
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
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_asesores`
--

CREATE TABLE `tb_asesores` (
  `id_ase` int(10) NOT NULL,
  `ase_nom` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `ase_ape` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `fecha_naci` date NOT NULL,
  `ase_gene` char(1) COLLATE utf8_spanish_ci NOT NULL,
  `ase_tele` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `ase_docu` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `id_estado` char(1) COLLATE utf8_spanish_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tb_asesores`
--

INSERT INTO `tb_asesores` (`id_ase`, `ase_nom`, `ase_ape`, `fecha_naci`, `ase_gene`, `ase_tele`, `ase_docu`, `id_estado`, `created_at`, `updated_at`) VALUES
(5, 'Juana', 'Silvas', '2019-12-21', 'F', '3005426445', '11068289', '4', '2019-12-15 22:37:35', '2019-12-16 02:24:56'),
(6, 'Juana', 'Silvas', '2019-12-20', 'M', '3005426445', '11068289', '1', '2019-12-15 22:41:51', '2019-12-16 00:01:38'),
(7, 'Juana', 'Benavides', '2019-12-21', 'M', '3005426445', '11068289', '1', '2019-12-15 23:56:08', '2019-12-15 23:56:08'),
(8, 'Tatiana', 'Iles', '2001-12-14', 'F', '3005426445', '12121212', '1', '2019-12-15 23:59:36', '2019-12-15 23:59:36'),
(9, 'Anthony', 'Benavides', '2019-12-21', 'M', '3005426445', '12121212', '4', '2019-12-16 01:30:21', '2019-12-16 01:33:01'),
(10, 'Juan', 'Silvas', '1999-09-21', 'M', '3005426445', '11068289', '1', '2019-12-16 07:27:13', '2019-12-16 07:27:13');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_estados`
--

CREATE TABLE `tb_estados` (
  `id_estado` int(10) NOT NULL,
  `nom_estado` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tb_estados`
--

INSERT INTO `tb_estados` (`id_estado`, `nom_estado`, `created_at`, `updated_at`) VALUES
(1, 'Activo', '2019-12-15 20:26:35', '2019-12-15 20:26:35'),
(2, 'Inactivo', '2019-12-16 01:26:51', '2019-12-16 02:17:14'),
(4, 'Bloqueado', '2019-12-16 01:28:22', '2019-12-16 01:28:22');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_locales`
--

CREATE TABLE `tb_locales` (
  `id_local` int(10) NOT NULL,
  `nom_local` text COLLATE utf8_spanish_ci NOT NULL,
  `direc_local` text COLLATE utf8_spanish_ci NOT NULL,
  `tele_local` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tb_locales`
--

INSERT INTO `tb_locales` (`id_local`, `nom_local`, `direc_local`, `tele_local`, `created_at`, `updated_at`) VALUES
(1, 'Madrigal Campestre', 'Cra 99 #2-140s', '3005426445', '2019-12-16 02:04:59', '2019-12-16 04:52:02'),
(2, 'Nueva Floresta', 'Calle 52 # 23-39', '90001', '2019-12-16 02:13:02', '2019-12-16 02:13:02');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_marcas`
--

CREATE TABLE `tb_marcas` (
  `id_marca` int(10) NOT NULL,
  `nom_marca` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tb_marcas`
--

INSERT INTO `tb_marcas` (`id_marca`, `nom_marca`, `created_at`, `updated_at`) VALUES
(1, 'SAMSUNG', '2019-12-14 16:51:07', '2019-12-14 16:51:07'),
(2, 'HUAWEI', '2019-12-14 16:51:07', '2019-12-14 16:51:07'),
(3, 'Alcatel', '2019-12-22 06:00:44', '2019-12-22 06:00:44');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_movimientos`
--

CREATE TABLE `tb_movimientos` (
  `id_movi` int(10) NOT NULL,
  `id_usu` int(10) NOT NULL,
  `id_prove` int(10) NOT NULL,
  `fecha_ent` date NOT NULL,
  `id_ase_ent` int(10) NOT NULL,
  `id_local_ent` int(10) NOT NULL,
  `imei` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `fecha_sali` date DEFAULT NULL,
  `id_ase_sali` int(10) DEFAULT NULL,
  `id_local_sali` int(10) DEFAULT NULL,
  `observacion` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_productos`
--

CREATE TABLE `tb_productos` (
  `id_produ` int(10) NOT NULL,
  `produ_nom` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `id_marca` int(10) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tb_productos`
--

INSERT INTO `tb_productos` (`id_produ`, `produ_nom`, `id_marca`, `created_at`, `updated_at`) VALUES
(2, 'A50 64 GB', 1, '2019-12-14 21:51:50', '2019-12-14 22:24:20');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_proveedores`
--

CREATE TABLE `tb_proveedores` (
  `id_prove` int(10) NOT NULL,
  `prove_nom` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `prove_docu` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `prove_tele` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `prove_correo` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tb_proveedores`
--

INSERT INTO `tb_proveedores` (`id_prove`, `prove_nom`, `prove_docu`, `prove_tele`, `prove_correo`, `created_at`, `updated_at`) VALUES
(1, 'Lolas', '1233434', '24343', 'lola@gmail.com', '2019-12-22 05:58:12', '2019-12-22 05:58:12');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_roles`
--

CREATE TABLE `tb_roles` (
  `id_rol` int(10) NOT NULL,
  `nom_rol` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `desc_rol` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tb_roles`
--

INSERT INTO `tb_roles` (`id_rol`, `nom_rol`, `desc_rol`, `created_at`, `updated_at`) VALUES
(1, 'Administrador', 'Administra el sistema', '2019-12-16 02:35:35', '2019-12-16 02:35:35'),
(2, 'Asesor', 'Asesor del local', '2019-12-16 04:00:31', '2019-12-16 04:00:31');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_rolxusu`
--

CREATE TABLE `tb_rolxusu` (
  `id_rolxusu` int(10) NOT NULL,
  `id_usu` int(10) NOT NULL,
  `id_rol` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_usuarios`
--

CREATE TABLE `tb_usuarios` (
  `id_usu` int(10) NOT NULL,
  `usu_nom` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `usu_ape` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `fecha_naci` date NOT NULL,
  `usu_gene` char(1) COLLATE utf8_spanish_ci NOT NULL,
  `usu_tele` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `usu_correo` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `usu_docu` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `id_rol` int(10) NOT NULL,
  `id_estado` char(1) COLLATE utf8_spanish_ci NOT NULL,
  `password` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tb_usuarios`
--

INSERT INTO `tb_usuarios` (`id_usu`, `usu_nom`, `usu_ape`, `fecha_naci`, `usu_gene`, `usu_tele`, `usu_correo`, `usu_docu`, `id_rol`, `id_estado`, `password`, `created_at`, `updated_at`) VALUES
(1, 'Ary', 'Gallardo', '2019-12-21', 'M', '3005426445', 'ary314g@gmail.com', '1107528745', 1, '1', '123', '2019-12-16 03:55:20', '2019-12-16 04:40:08'),
(3, 'Anthony', 'Benavides', '2019-12-21', 'M', '1234', 'Brandon@gmail.com', '1212121', 2, '1', '123', '2019-12-16 04:01:33', '2019-12-16 04:01:33'),
(4, 'Yovany', 'Romo', '1996-02-14', 'M', '123', 'Yovaromo@gmail.com', '110752425', 2, '1', '123', '2019-12-16 07:30:16', '2019-12-16 07:30:16'),
(5, 'Sofia', 'Iles', '2004-06-08', 'F', '3185375397', 'sofi@gmail.com', '12345', 2, '1', '1234', '2019-12-21 22:14:11', '2019-12-21 22:14:40'),
(6, 'Luis', 'Iles', '2012-02-07', 'M', '3055212344', 'ary@gmail.com', '1212121', 1, '1', '$2y$10$SjTHaZ6fxUxMg4oeZT8I3uNQZxrJQCPxtMLfs.kzk5JxZhJ4F1Xcq', '2019-12-21 23:58:27', '2019-12-21 23:58:27');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `usu_ape` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fecha_naci` date NOT NULL,
  `usu_gene` char(1) COLLATE utf8mb4_unicode_ci NOT NULL,
  `usu_tele` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `usu_docu` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_rol` int(10) NOT NULL,
  `id_estado` int(10) NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `usu_ape`, `fecha_naci`, `usu_gene`, `usu_tele`, `usu_docu`, `id_rol`, `id_estado`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Ary', 'Gallardo', '1999-09-21', 'M', '3005426445', '12345', 1, 1, 'ary@gmail.com', NULL, '$2y$10$amHBH2/oWufDBLGK3dcNKer7ucM2LZL2jQ0Lbf2VcAs.FmeY5tr6O', NULL, '2019-12-21 22:23:26', '2019-12-22 06:19:18'),
(3, 'Anthony', 'Benavides', '1998-08-26', 'M', '3005426445', '123456', 1, 1, 'Anthony@gmail.com', NULL, '$2y$10$j5DxOLKlrfeXfwD8chSkKulAdECqTaNfq/jUXoE6cmmPwnX5OTG9m', NULL, '2019-12-22 04:27:37', '2019-12-22 04:27:37');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

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
-- Indices de la tabla `tb_asesores`
--
ALTER TABLE `tb_asesores`
  ADD PRIMARY KEY (`id_ase`);

--
-- Indices de la tabla `tb_estados`
--
ALTER TABLE `tb_estados`
  ADD PRIMARY KEY (`id_estado`);

--
-- Indices de la tabla `tb_locales`
--
ALTER TABLE `tb_locales`
  ADD PRIMARY KEY (`id_local`);

--
-- Indices de la tabla `tb_marcas`
--
ALTER TABLE `tb_marcas`
  ADD PRIMARY KEY (`id_marca`);

--
-- Indices de la tabla `tb_movimientos`
--
ALTER TABLE `tb_movimientos`
  ADD PRIMARY KEY (`id_movi`);

--
-- Indices de la tabla `tb_productos`
--
ALTER TABLE `tb_productos`
  ADD PRIMARY KEY (`id_produ`);

--
-- Indices de la tabla `tb_proveedores`
--
ALTER TABLE `tb_proveedores`
  ADD PRIMARY KEY (`id_prove`);

--
-- Indices de la tabla `tb_roles`
--
ALTER TABLE `tb_roles`
  ADD PRIMARY KEY (`id_rol`);

--
-- Indices de la tabla `tb_rolxusu`
--
ALTER TABLE `tb_rolxusu`
  ADD PRIMARY KEY (`id_rolxusu`);

--
-- Indices de la tabla `tb_usuarios`
--
ALTER TABLE `tb_usuarios`
  ADD PRIMARY KEY (`id_usu`);

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
-- AUTO_INCREMENT de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `tb_asesores`
--
ALTER TABLE `tb_asesores`
  MODIFY `id_ase` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `tb_estados`
--
ALTER TABLE `tb_estados`
  MODIFY `id_estado` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `tb_locales`
--
ALTER TABLE `tb_locales`
  MODIFY `id_local` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `tb_marcas`
--
ALTER TABLE `tb_marcas`
  MODIFY `id_marca` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `tb_movimientos`
--
ALTER TABLE `tb_movimientos`
  MODIFY `id_movi` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tb_productos`
--
ALTER TABLE `tb_productos`
  MODIFY `id_produ` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `tb_proveedores`
--
ALTER TABLE `tb_proveedores`
  MODIFY `id_prove` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `tb_roles`
--
ALTER TABLE `tb_roles`
  MODIFY `id_rol` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `tb_rolxusu`
--
ALTER TABLE `tb_rolxusu`
  MODIFY `id_rolxusu` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tb_usuarios`
--
ALTER TABLE `tb_usuarios`
  MODIFY `id_usu` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
