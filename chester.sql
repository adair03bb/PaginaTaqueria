-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-03-2024 a las 17:31:51
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `chester`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `id` int(10) NOT NULL,
  `nombre` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`id`, `nombre`) VALUES
(9, 'pastor'),
(10, 'maciza'),
(11, 'costilla'),
(12, 'surtida');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compras`
--

CREATE TABLE `compras` (
  `id` int(11) NOT NULL,
  `fecha` datetime NOT NULL
(7, '2024-03-20 06:39:44');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `failed_jobs`
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
-- Estructura de tabla para la tabla `insumos`
--

CREATE TABLE `insumos` (
  `id` int(10) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `descripcion` varchar(200) NOT NULL,
  `ID_UnidadMedida` int(10) NOT NULL,
  `estado` varchar(20) DEFAULT 'Habilitado'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `insumos`
--

INSERT INTO `insumos` (`id`, `nombre`, `descripcion`, `ID_UnidadMedida`, `estado`) VALUES
(1, 'Carne', 'Carne de cerdo fresca', 2, 'Deshabilitado'),
(2, 'cilantro', 'cilantro fresco', 3, 'Deshabilitado'),
(3, 'chile', 'chile chilaca', 2, 'Deshabilitado'),
(4, 'limón', 'limon fresco', 2, 'Habilitado'),
(5, 'jitomate', 'jitomate fresco', 2, 'Habilitado'),
(6, 'pepinooo', 'pepino fresco', 2, 'Habilitado'),
(7, 'chilaca', 'chile chilaca seco', 2, 'Deshabilitado'),
(8, 'cebolla', 'cebolla blanca fresca', 4, 'Deshabilitado'),
(9, 'piña', 'piña fresca', 5, 'Habilitado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `insumoscompras`
--

CREATE TABLE `insumoscompras` (
  `id` int(10) NOT NULL,
  `cantidad` float(10,2) NOT NULL,
  `costo` float(10,2) NOT NULL,
  `ID_Insumo` int(10) NOT NULL,
  `ID_UnidadMedida` int(10) NOT NULL,
  `ID_Compra` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `insumoscompras`
--

INSERT INTO `insumoscompras` (`id`, `cantidad`, `costo`, `ID_Insumo`, `ID_UnidadMedida`, `ID_Compra`) VALUES
(18, 80.00, 46.25, 1, 2, 3),
(19, 3.00, 5.00, 2, 3, 4),
(20, 10.00, 13.00, 3, 2, 5),
(22, 10.00, 13.00, 7, 2, 7);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `insumosproductos`
--

CREATE TABLE `insumosproductos` (
  `id` int(10) NOT NULL,
  `cantidad` float(10,2) NOT NULL,
  `ID_Insumo` int(10) NOT NULL,
  `ID_UnidadMedida` int(10) NOT NULL,
  `ID_Producto` int(10) NOT NULL,
  `ID_Categoria` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `insumosproductos`
--

INSERT INTO `insumosproductos` (`id`, `cantidad`, `ID_Insumo`, `ID_UnidadMedida`, `ID_Producto`, `ID_Categoria`) VALUES
(1, 200.00, 1, 7, 17, 9),
(8, 200.00, 1, 7, 25, 11),
(9, 60.00, 2, 7, 25, 11),
(11, 150.00, 1, 7, 26, 10),
(12, 30.00, 5, 7, 26, 10),
(14, 220.00, 1, 7, 27, 9),
(15, 20.00, 4, 7, 27, 9);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inventario`
--

CREATE TABLE `inventario` (
  `id` int(10) NOT NULL,
  `fechaCaducidad` date NOT NULL,
  `ID_InsumoCompra` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personal_access_tokens`
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
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` int(10) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `precio` float(10,2) NOT NULL,
  `ID_Categoria` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `nombre`, `precio`, `ID_Categoria`) VALUES
(17, 'orden de tacos', 25.00, 9),
(25, 'bbbbbbb', 23.00, 11),
(26, 'prueba', 25.00, 10),
(27, 'prueba 2', 12.00, 9);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productosventas`
--

CREATE TABLE `productosventas` (
  `id` int(10) NOT NULL,
  `cantidad` float(10,2) NOT NULL,
  `precio` float(10,2) NOT NULL,
  `ID_Producto` int(10) NOT NULL,
  `fecha` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `unidadmedidas`
--

CREATE TABLE `unidadmedidas` (
  `id` int(10) NOT NULL,
  `nombre` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `unidadmedidas`
--

INSERT INTO `unidadmedidas` (`id`, `nombre`) VALUES
(2, 'kilogramos'),
(3, 'manojo'),
(4, 'costal'),
(5, 'piezas'),
(6, 'cajas'),
(7, 'gramos');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `compras`
--
ALTER TABLE `compras`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indices de la tabla `insumos`
--
ALTER TABLE `insumos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `unidadMedida` (`ID_UnidadMedida`);

--
-- Indices de la tabla `insumoscompras`
--
ALTER TABLE `insumoscompras`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `ID_Compra` (`ID_Compra`),
  ADD KEY `ID_Insumo` (`ID_Insumo`),
  ADD KEY `ID_UnidadMedida` (`ID_UnidadMedida`);

--
-- Indices de la tabla `insumosproductos`
--
ALTER TABLE `insumosproductos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ID_Insumo` (`ID_Insumo`),
  ADD KEY `ID_Producto` (`ID_Producto`),
  ADD KEY `ID_UnidadMedida` (`ID_UnidadMedida`),
  ADD KEY `ID_Categoria` (`ID_Categoria`);

--
-- Indices de la tabla `inventario`
--
ALTER TABLE `inventario`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ID_InsumoCompra` (`ID_InsumoCompra`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indices de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ID_Categoria` (`ID_Categoria`);

--
-- Indices de la tabla `productosventas`
--
ALTER TABLE `productosventas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ID_Producto` (`ID_Producto`);

--
-- Indices de la tabla `unidadmedidas`
--
ALTER TABLE `unidadmedidas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `compras`
--
ALTER TABLE `compras`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `insumos`
--
ALTER TABLE `insumos`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `insumoscompras`
--
ALTER TABLE `insumoscompras`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT de la tabla `insumosproductos`
--
ALTER TABLE `insumosproductos`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `inventario`
--
ALTER TABLE `inventario`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT de la tabla `productosventas`
--
ALTER TABLE `productosventas`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `unidadmedidas`
--
ALTER TABLE `unidadmedidas`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `insumos`
--
ALTER TABLE `insumos`
  ADD CONSTRAINT `insumos_ibfk_1` FOREIGN KEY (`ID_UnidadMedida`) REFERENCES `unidadmedidas` (`id`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `insumoscompras`
--
ALTER TABLE `insumoscompras`
  ADD CONSTRAINT `insumoscompras_ibfk_1` FOREIGN KEY (`ID_Insumo`) REFERENCES `insumos` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `insumoscompras_ibfk_2` FOREIGN KEY (`ID_UnidadMedida`) REFERENCES `unidadmedidas` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `insumoscompras_ibfk_3` FOREIGN KEY (`ID_Compra`) REFERENCES `compras` (`id`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `insumosproductos`
--
ALTER TABLE `insumosproductos`
  ADD CONSTRAINT `insumosproductos_ibfk_1` FOREIGN KEY (`ID_Insumo`) REFERENCES `insumos` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `insumosproductos_ibfk_2` FOREIGN KEY (`ID_Producto`) REFERENCES `productos` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `insumosproductos_ibfk_3` FOREIGN KEY (`ID_Categoria`) REFERENCES `categoria` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `insumosproductos_ibfk_4` FOREIGN KEY (`ID_UnidadMedida`) REFERENCES `unidadmedidas` (`id`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `inventario`
--
ALTER TABLE `inventario`
  ADD CONSTRAINT `inventario_ibfk_1` FOREIGN KEY (`ID_InsumoCompra`) REFERENCES `insumoscompras` (`id`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `productos_ibfk_1` FOREIGN KEY (`ID_Categoria`) REFERENCES `categoria` (`id`);

--
-- Filtros para la tabla `productosventas`
--
ALTER TABLE `productosventas`
  ADD CONSTRAINT `productosventas_ibfk_1` FOREIGN KEY (`ID_Producto`) REFERENCES `productos` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
