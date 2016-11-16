-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 08-06-2016 a las 16:15:16
-- Versión del servidor: 10.1.13-MariaDB
-- Versión de PHP: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `ci_cart`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Elementos`
--

CREATE TABLE `Elementos` (
  `id_elem` int(11) NOT NULL,
  `valor_elem` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `modelo_org`
--

CREATE TABLE `modelo_org` (
  `id_model` int(11) NOT NULL,
  `id_org` int(100) NOT NULL,
  `elemento` int(100) NOT NULL,
  `valor` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `modelo_org`
--

INSERT INTO `modelo_org` (`id_model`, `id_org`, `elemento`, `valor`) VALUES
(1, 1, 111, 'hjjhgkhgk');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Organizacion`
--

CREATE TABLE `Organizacion` (
  `id_org` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `direccion` varchar(100) NOT NULL,
  `Numemp` int(100) NOT NULL,
  `indicetec` varchar(100) NOT NULL,
  `telefono` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `Organizacion`
--

INSERT INTO `Organizacion` (`id_org`, `nombre`, `direccion`, `Numemp`, `indicetec`, `telefono`) VALUES
(1, 'bljhvkhv', 'vvvgvjhljbj', 98, '788', '7657');

--
-- Disparadores `Organizacion`
--
DELIMITER $$
CREATE TRIGGER `org_modelo` BEFORE INSERT ON `Organizacion` FOR EACH ROW INSERT INTO modelo_org (id_model)  VALUES (id_org)
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `products`
--

CREATE TABLE `products` (
  `id` int(128) NOT NULL,
  `name` varchar(128) NOT NULL,
  `price` varchar(32) NOT NULL,
  `image` varchar(128) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `image`) VALUES
(1, 'MacBook Pro', '1200', 'MackBookPro.jpg'),
(2, 'MacBook Air', '1499', 'macbookair.jpg'),
(3, 'MacBook', '999', 'macbook.jpg'),
(4, 'PenDrive', '2.00', 'PenDrive.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_department`
--

CREATE TABLE `tbl_department` (
  `department_id` int(4) NOT NULL,
  `department_name` varchar(80) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbl_department`
--

INSERT INTO `tbl_department` (`department_id`, `department_name`) VALUES
(1, 'Finance'),
(2, 'HQ'),
(3, 'Operations'),
(4, 'Marketing'),
(5, 'Sales'),
(12, 'Ventas'),
(13, 'Produccion'),
(35, 'Ventas'),
(24, 'Laboratorio'),
(100, 'Negocios'),
(102, 'Prod'),
(103, 'Developers');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_designation`
--

CREATE TABLE `tbl_designation` (
  `designation_id` int(4) NOT NULL,
  `designation_name` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbl_designation`
--

INSERT INTO `tbl_designation` (`designation_id`, `designation_name`) VALUES
(1, 'VP'),
(2, 'Manager'),
(3, 'Executive'),
(4, 'Trainee'),
(5, 'Senior Executive');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_employee`
--

CREATE TABLE `tbl_employee` (
  `employee_id` int(4) NOT NULL,
  `employee_no` int(6) NOT NULL,
  `employee_name` varchar(60) NOT NULL,
  `department_id` int(4) NOT NULL,
  `designation_id` int(4) NOT NULL,
  `hired_date` date NOT NULL,
  `salary` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbl_employee`
--

INSERT INTO `tbl_employee` (`employee_id`, `employee_no`, `employee_name`, `department_id`, `designation_id`, `hired_date`, `salary`) VALUES
(1, 32343, 'Alexis Flores', 1, 1, '0000-00-00', 0),
(2, 34343, 'Nicole Flores', 2, 1, '1969-12-31', 100),
(6, 1, 'Jose', 2, 1, '2015-05-01', 5000),
(7, 44, 'Juan F Gonzalez', 3, 4, '2015-05-08', 230),
(8, 89, 'javier', 103, 4, '2016-12-01', 9);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `Elementos`
--
ALTER TABLE `Elementos`
  ADD PRIMARY KEY (`id_elem`);

--
-- Indices de la tabla `modelo_org`
--
ALTER TABLE `modelo_org`
  ADD PRIMARY KEY (`id_model`);

--
-- Indices de la tabla `Organizacion`
--
ALTER TABLE `Organizacion`
  ADD PRIMARY KEY (`id_org`);

--
-- Indices de la tabla `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tbl_department`
--
ALTER TABLE `tbl_department`
  ADD PRIMARY KEY (`department_id`);

--
-- Indices de la tabla `tbl_designation`
--
ALTER TABLE `tbl_designation`
  ADD PRIMARY KEY (`designation_id`);

--
-- Indices de la tabla `tbl_employee`
--
ALTER TABLE `tbl_employee`
  ADD PRIMARY KEY (`employee_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `Elementos`
--
ALTER TABLE `Elementos`
  MODIFY `id_elem` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `modelo_org`
--
ALTER TABLE `modelo_org`
  MODIFY `id_model` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `Organizacion`
--
ALTER TABLE `Organizacion`
  MODIFY `id_org` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `products`
--
ALTER TABLE `products`
  MODIFY `id` int(128) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `tbl_department`
--
ALTER TABLE `tbl_department`
  MODIFY `department_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=104;
--
-- AUTO_INCREMENT de la tabla `tbl_designation`
--
ALTER TABLE `tbl_designation`
  MODIFY `designation_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `tbl_employee`
--
ALTER TABLE `tbl_employee`
  MODIFY `employee_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
