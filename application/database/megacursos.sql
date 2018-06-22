-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 22-06-2018 a las 23:00:43
-- Versión del servidor: 10.1.30-MariaDB
-- Versión de PHP: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `megacursos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `categoría` text NOT NULL,
  `detalles` text NOT NULL,
  `estatus` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`categoría`, `detalles`, `estatus`) VALUES
('Categoria de Prueba', 'Detalles', 1),
('Cat2', 'dadad', 2),
('categoria1', 'aslkasl', 2),
('categoria1', 'aslkasl', 2),
('categoria1', 'sdklsdks', 1),
('categoria1', 'Detalles', 1),
('categoria1', 'Detalles', 1),
('categoria1', 'as', 1),
('categoria1', 'as', 1),
('categoria1', 'as', 1),
('categoria1', 'as', 1),
('categoria1', 'as', 1),
('categoria1', 'wqwqw', 1),
('categoria1', 'asa', 1),
('categoria1', 'asa', 1),
('categoria1', 'asa', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cursos`
--

CREATE TABLE `cursos` (
  `categoria` varchar(200) DEFAULT NULL,
  `nombre` varchar(200) DEFAULT NULL,
  `horas` int(3) DEFAULT NULL,
  `detalles` varchar(200) DEFAULT NULL,
  `precio` int(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cursos`
--

INSERT INTO `cursos` (`categoria`, `nombre`, `horas`, `detalles`, `precio`) VALUES
('categoria1', 'curso1', 12, 'detalles', 12000);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
