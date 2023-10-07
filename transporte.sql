-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-10-2023 a las 22:54:42
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
-- Base de datos: `transporte`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_choferes`
--

CREATE TABLE `tb_choferes` (
  `id_chofer` int(11) NOT NULL,
  `nombre_chofer` varchar(250) NOT NULL,
  `dni_chofer` int(11) NOT NULL,
  `celular_chofer` varchar(50) NOT NULL,
  `id_rol2` int(11) NOT NULL,
  `direccion_chofer` varchar(250) NOT NULL,
  `movil` int(11) NOT NULL,
  `obs` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tb_choferes`
--

INSERT INTO `tb_choferes` (`id_chofer`, `nombre_chofer`, `dni_chofer`, `celular_chofer`, `id_rol2`, `direccion_chofer`, `movil`, `obs`) VALUES
(1, 'socrates', 25874962, '388456321', 2, 'B° Los Ceibos - Mzna 537 A - Casa 9', 23, ''),
(3, 'charlotte', 25879654, '3874951357', 1, 'B° Palermo', 23, '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_clientes`
--

CREATE TABLE `tb_clientes` (
  `id_cliente` int(11) NOT NULL,
  `nombre_cliente` varchar(60) NOT NULL,
  `celular_cliente` varchar(100) NOT NULL,
  `direccion_cliente` varchar(200) NOT NULL,
  `referencia_cliente` varchar(200) DEFAULT NULL,
  `obs_cliente` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tb_clientes`
--

INSERT INTO `tb_clientes` (`id_cliente`, `nombre_cliente`, `celular_cliente`, `direccion_cliente`, `referencia_cliente`, `obs_cliente`) VALUES
(1, 'Macarena', '3885963741', 'Finca San Isidro', 'Cartel de la Vaquita', ''),
(2, 'Maria Elena', '3874563214', 'Rio Negro 2222 - Inter', 'casa dos pisos', ''),
(3, 'Lorena Carrizo', '3886741852', 'M35 - C14- San Carlos', 'sobre avenida', ''),
(4, 'Natalio Ruiz', '3884951357', 'Carretera 3654', 'Rejas Blancas', 'sombrero azul'),
(5, 'Johana', '3516987456', 'tucuman 356', 'ladrillo a la vista', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_estadomovil`
--

CREATE TABLE `tb_estadomovil` (
  `id_estadomovil` int(11) NOT NULL,
  `nro` int(11) NOT NULL,
  `entrada` time NOT NULL,
  `salida` time NOT NULL,
  `modelo` varchar(20) NOT NULL,
  `observ` varchar(250) NOT NULL,
  `fecha` date NOT NULL,
  `estado` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_localidades`
--

CREATE TABLE `tb_localidades` (
  `id_localidad` int(11) NOT NULL,
  `nombre_localidad` varchar(100) NOT NULL,
  `distancia_localidad` int(11) NOT NULL,
  `precio_t1` int(11) NOT NULL,
  `precio_t2` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tb_localidades`
--

INSERT INTO `tb_localidades` (`id_localidad`, `nombre_localidad`, `distancia_localidad`, `precio_t1`, `precio_t2`) VALUES
(1, 'Aeropuerto de salta', 12, 2614, 2874),
(2, 'Aeropuerto jujuy', 100, 20302, 22322),
(3, 'Aguaray', 390, 78592, 86412),
(4, 'Aguas Blancas', 323, 65125, 71605),
(5, 'Alemania', 107, 21709, 23869),
(6, 'Amblayo', 149, 30151, 33151),
(7, 'Ampascachi', 73, 14875, 16355),
(8, 'Angastaco', 240, 48442, 53262),
(9, 'Animana', 201, 40603, 44643),
(10, 'Anta', 167, 33769, 37129),
(11, 'Apolinario Saravia', 246, 49648, 54588),
(12, 'Cachi', 155, 31357, 34477),
(13, 'Cafayate', 189, 38191, 41991),
(14, 'Caimancito', 184, 37186, 40886),
(15, 'Campo Alegre', 27, 5629, 6189),
(16, 'Campo Duran', 403, 81205, 89285),
(17, 'Campo Quijano', 30, 6232, 6852),
(18, 'Campo Santo', 58, 11860, 13040),
(19, 'Cerrillos', 16, 3418, 3758),
(20, 'Chicoana', 43, 8845, 9725),
(21, 'Cobos', 40, 8242, 9062),
(22, 'Colonia Santa Rosa', 242, 48844, 53704),
(23, 'Coronel Moldes', 60, 12262, 13482),
(24, 'Cuesta del Obispo', 92, 18694, 20554),
(25, 'Dique Cabra Corral (compuertas)', 88, 17890, 19670),
(26, 'Dique Cabra Corral (puente)', 73, 14875, 16355),
(27, 'Dique Campo Alegre', 29, 6031, 6631),
(28, 'Dique Las Lomitas', 33, 6835, 7515),
(29, 'Dique las Maderas', 62, 12664, 13924),
(30, 'El Alisal', 45, 9247, 10167),
(31, 'El Bordo', 60, 12262, 13482),
(32, 'El Carmen (jujuy)', 94, 19096, 20996),
(33, 'El Carril', 37, 7639, 8399),
(34, 'El Chamical (capilla)', 38, 7840, 8620),
(35, 'El Galp n', 151, 30553, 33593),
(36, 'El Jardin', 344, 69346, 76246),
(37, 'El Potrero', 216, 43618, 47958),
(38, 'El Quebrachal', 250, 50452, 55472),
(39, 'El Sauce (complejo termal)', 75, 15277, 16797),
(40, 'El Tabacal', 260, 52462, 57682),
(41, 'El Tala', 226, 45628, 50168),
(42, 'El Tunal', 190, 38392, 42212),
(43, 'Embarcacion', 270, 54472, 59892),
(44, 'General Ballivian', 316, 63718, 70058),
(45, 'General Guemes', 54, 11056, 12156),
(46, 'General Mosconi', 349, 70351, 77351),
(47, 'General Pizarro', 270, 54472, 59892),
(48, 'Guachipas', 97, 19699, 21659),
(49, 'Hipolito Yrigoyen', 265, 53467, 58787),
(50, 'Huaitiquina', 360, 72562, 79782),
(51, 'Humahuaca (jujuy)', 246, 49648, 54588),
(52, 'Ingeniero Maury', 65, 13267, 14587),
(53, 'Iruya', 320, 64522, 70942),
(54, 'Isla de Ca as', 346, 69748, 76688),
(55, 'Joaquin V. Gonzalez', 228, 46030, 50610),
(56, 'Jujuy San Salvador (cornisa)', 94, 19096, 20996),
(57, 'Jujuy San Salvador (R 34)', 126, 25528, 28068),
(58, 'La Caldera', 25, 5227, 5747),
(59, 'La Candelaria', 227, 45829, 50389),
(60, 'La Casualidad', 518, 104320, 114700),
(61, 'La Maroma', 55, 11257, 12377),
(62, 'La Merced', 24, 5026, 5526),
(63, 'La Poma', 187, 37789, 41549),
(64, 'La Quiaca', 400, 80602, 88622),
(65, 'La Silleta', 28, 5830, 6410),
(66, 'La Vi a', 88, 17890, 19670),
(67, 'Las Lajitas', 204, 41206, 45306),
(68, 'Lesser (escuela)', 20, 4222, 4642),
(69, 'Libert. Gral San Martin', 161, 32563, 35803),
(70, 'Los Toldos', 442, 89044, 97904),
(71, 'Los Yacones', 28, 5830, 6410),
(72, 'Lumbreras', 107, 21709, 23869),
(73, 'Maimara (jujuy)', 200, 40402, 44422),
(74, 'Metan', 138, 27940, 30720),
(75, 'Molinos', 200, 40402, 44422),
(76, 'Morillo', 416, 83818, 92158),
(77, 'Nazareno', 510, 102712, 112932),
(78, 'Oran San Ramon de la', 278, 56080, 61660),
(79, 'Palpala (jujuy)', 117, 23719, 26079),
(80, 'Paso de Jama', 451, 90853, 99893),
(81, 'Paso de Sico', 296, 59698, 65638),
(82, 'Paso de Socompa', 627, 126229, 138789),
(83, 'Payogasta', 144, 29146, 32046),
(84, 'Perico (jujuy)', 105, 21307, 23427),
(85, 'Pichanal', 250, 50452, 55472),
(86, 'Pumamarca (jujuy)', 183, 36985, 40665),
(87, 'Quebrada de Escoipe', 53, 10855, 11935),
(88, 'Quebrada de San Lorenzo', 14, 3016, 3316),
(89, 'Quebrada del Toro', 59, 12061, 13261),
(90, 'Rio Piedras', 118, 23920, 26300),
(91, 'Rivadavia Banda Norte (morillo)', 418, 84220, 92600),
(92, 'Rivadavia Banda Sur (la union)', 330, 66532, 73152),
(93, 'Rosario de la Frontera', 180, 36382, 40002),
(94, 'Rosario de Lerma', 30, 6232, 6852),
(95, 'Salvador Mazza', 405, 81607, 89727),
(96, 'San Agustin', 25, 5227, 5747),
(97, 'San Antonio de Los Cobres', 168, 33970, 37350),
(98, 'San Carlos (por cachi)', 287, 57889, 63649),
(99, 'San Carlos (por cafayate)', 189, 38191, 41991),
(100, 'San Lorenzo', 12, 2614, 2874),
(101, 'San Pedro (jujuy)', 120, 24322, 26742),
(102, 'Santa Rosa de Tastil', 110, 22312, 24532),
(103, 'Santa Victoria Este', 520, 104722, 115142),
(104, 'Santa Victoria Oeste', 540, 108742, 119562),
(105, 'Seclantas', 185, 37387, 41107),
(106, 'Sumalao', 33, 6835, 7515),
(107, 'Tartagal', 360, 72562, 79782),
(108, 'Tilcara (jujuy)', 206, 41608, 45748),
(109, 'Tolar Grande', 634, 127636, 140336),
(110, 'Tolombon', 209, 42211, 46411),
(111, 'Tucuman', 320, 64522, 70942),
(112, 'Urundel', 223, 45025, 49505),
(113, 'Vaqueros', 12, 2614, 2874),
(114, 'Vespucio', 349, 70351, 77351),
(115, 'Yatasto', 147, 29749, 32709),
(118, 'Betania', 67, 13669, 15029);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_moviles`
--

CREATE TABLE `tb_moviles` (
  `id_movil` int(11) NOT NULL,
  `marca_movil` varchar(30) NOT NULL,
  `modelo_movil` varchar(30) NOT NULL,
  `anio_movil` int(11) DEFAULT NULL,
  `patente_movil` varchar(30) NOT NULL,
  `licencia_movil` int(11) DEFAULT NULL,
  `propietario_movil` varchar(100) DEFAULT NULL,
  `chofer1_movil` varchar(100) DEFAULT NULL,
  `chofer2_movil` varchar(100) NOT NULL,
  `nro_movil` varchar(100) NOT NULL,
  `incorporacion` date NOT NULL,
  `entrada` time NOT NULL,
  `salida` time NOT NULL,
  `fecha` date NOT NULL,
  `estado` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tb_moviles`
--

INSERT INTO `tb_moviles` (`id_movil`, `marca_movil`, `modelo_movil`, `anio_movil`, `patente_movil`, `licencia_movil`, `propietario_movil`, `chofer1_movil`, `chofer2_movil`, `nro_movil`, `incorporacion`, `entrada`, `salida`, `fecha`, `estado`) VALUES
(6, 'Peugeot', '306', 2016, 'PS987MJ', 487, 'Gimena', 'Luna', 'Estela', '87', '2023-08-04', '00:00:00', '00:00:00', '0000-00-00', 1),
(7, 'Toyota', 'Etios', 2019, 'AC321FT', 415, 'Ernesto Rojas', 'Jose', 'Paula', '15', '2023-09-29', '00:00:00', '00:00:00', '0000-00-00', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_pedidos`
--

CREATE TABLE `tb_pedidos` (
  `id_pedido` int(11) NOT NULL,
  `nombre` varchar(150) NOT NULL,
  `direccion` varchar(150) NOT NULL,
  `celular` varchar(15) NOT NULL,
  `destino` varchar(150) NOT NULL,
  `referencia` varchar(150) NOT NULL,
  `movil` varchar(15) NOT NULL,
  `observaciones` varchar(100) NOT NULL,
  `fecha` date NOT NULL,
  `fyh_creacion` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tb_pedidos`
--

INSERT INTO `tb_pedidos` (`id_pedido`, `nombre`, `direccion`, `celular`, `destino`, `referencia`, `movil`, `observaciones`, `fecha`, `fyh_creacion`) VALUES
(1, 'Maria Elena', 'Rio Negro 2222 - Inter', '3874563214', 'catedral', 'casa dos pisos', '87', '', '2023-10-04', '17:51:04');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_roles`
--

CREATE TABLE `tb_roles` (
  `id_rol` int(11) NOT NULL,
  `rol` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tb_roles`
--

INSERT INTO `tb_roles` (`id_rol`, `rol`) VALUES
(1, 'Administrador'),
(2, 'Operador');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_roles2`
--

CREATE TABLE `tb_roles2` (
  `id_rol2` int(11) NOT NULL,
  `rol2` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tb_roles2`
--

INSERT INTO `tb_roles2` (`id_rol2`, `rol2`) VALUES
(1, 'Propietario'),
(2, 'Chofer');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_tarifas`
--

CREATE TABLE `tb_tarifas` (
  `id_tarifa` int(11) NOT NULL,
  `bandera_t1` int(11) NOT NULL,
  `km_t1` int(11) NOT NULL,
  `bandera_t2` int(11) NOT NULL,
  `km_t2` int(11) NOT NULL,
  `distancia` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tb_tarifas`
--

INSERT INTO `tb_tarifas` (`id_tarifa`, `bandera_t1`, `km_t1`, `bandera_t2`, `km_t2`, `distancia`) VALUES
(1, 202, 201, 222, 221, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_usuarios`
--

CREATE TABLE `tb_usuarios` (
  `id_user` int(11) NOT NULL,
  `nombre_user` varchar(100) NOT NULL,
  `nick_user` varchar(100) NOT NULL,
  `dni_user` int(11) NOT NULL,
  `celular_user` varchar(50) NOT NULL,
  `direccion_user` varchar(250) NOT NULL,
  `password_user` text NOT NULL,
  `id_rol` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tb_usuarios`
--

INSERT INTO `tb_usuarios` (`id_user`, `nombre_user`, `nick_user`, `dni_user`, `celular_user`, `direccion_user`, `password_user`, `id_rol`) VALUES
(3, 'siames', 'sisi', 30265598, '388456123', 'B° 23 de agosto', '123456', 2),
(9, 'Miguel A. G.', 'micky', 18858994, '4985929794', 'Rio Negro 3158 - Inter', '123456', 1),
(10, 'rotweiller', 'aaron', 37896521, '3874569874', 'Pasaje yapeyú 2580', '123456', 2);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tb_choferes`
--
ALTER TABLE `tb_choferes`
  ADD PRIMARY KEY (`id_chofer`),
  ADD KEY `id_rol2` (`id_rol2`);

--
-- Indices de la tabla `tb_clientes`
--
ALTER TABLE `tb_clientes`
  ADD PRIMARY KEY (`id_cliente`);

--
-- Indices de la tabla `tb_estadomovil`
--
ALTER TABLE `tb_estadomovil`
  ADD PRIMARY KEY (`id_estadomovil`);

--
-- Indices de la tabla `tb_localidades`
--
ALTER TABLE `tb_localidades`
  ADD PRIMARY KEY (`id_localidad`);

--
-- Indices de la tabla `tb_moviles`
--
ALTER TABLE `tb_moviles`
  ADD PRIMARY KEY (`id_movil`);

--
-- Indices de la tabla `tb_pedidos`
--
ALTER TABLE `tb_pedidos`
  ADD PRIMARY KEY (`id_pedido`);

--
-- Indices de la tabla `tb_roles`
--
ALTER TABLE `tb_roles`
  ADD PRIMARY KEY (`id_rol`);

--
-- Indices de la tabla `tb_roles2`
--
ALTER TABLE `tb_roles2`
  ADD PRIMARY KEY (`id_rol2`);

--
-- Indices de la tabla `tb_tarifas`
--
ALTER TABLE `tb_tarifas`
  ADD PRIMARY KEY (`id_tarifa`);

--
-- Indices de la tabla `tb_usuarios`
--
ALTER TABLE `tb_usuarios`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `id_rol` (`id_rol`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tb_choferes`
--
ALTER TABLE `tb_choferes`
  MODIFY `id_chofer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `tb_clientes`
--
ALTER TABLE `tb_clientes`
  MODIFY `id_cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `tb_estadomovil`
--
ALTER TABLE `tb_estadomovil`
  MODIFY `id_estadomovil` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tb_localidades`
--
ALTER TABLE `tb_localidades`
  MODIFY `id_localidad` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=131;

--
-- AUTO_INCREMENT de la tabla `tb_moviles`
--
ALTER TABLE `tb_moviles`
  MODIFY `id_movil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `tb_pedidos`
--
ALTER TABLE `tb_pedidos`
  MODIFY `id_pedido` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `tb_roles`
--
ALTER TABLE `tb_roles`
  MODIFY `id_rol` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `tb_roles2`
--
ALTER TABLE `tb_roles2`
  MODIFY `id_rol2` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `tb_tarifas`
--
ALTER TABLE `tb_tarifas`
  MODIFY `id_tarifa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `tb_usuarios`
--
ALTER TABLE `tb_usuarios`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `tb_choferes`
--
ALTER TABLE `tb_choferes`
  ADD CONSTRAINT `tb_choferes_ibfk_1` FOREIGN KEY (`id_rol2`) REFERENCES `tb_roles2` (`id_rol2`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `tb_usuarios`
--
ALTER TABLE `tb_usuarios`
  ADD CONSTRAINT `tb_usuarios_ibfk_1` FOREIGN KEY (`id_rol`) REFERENCES `tb_roles` (`id_rol`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
