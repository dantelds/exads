-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-07-2017 a las 13:54:48
-- Versión del servidor: 10.1.24-MariaDB
-- Versión de PHP: 7.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

--
-- Base de datos: `exads`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `design`
--

CREATE TABLE `design` (
  `design_id` int(11) NOT NULL,
  `design_name` varchar(255) NOT NULL,
  `split_percent` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `design`
--

INSERT INTO `design` (`design_id`, `design_name`, `split_percent`) VALUES
(1, 'Design_1', 50),
(2, 'Design_2 ', 25),
(3, 'Design_3', 25);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `exads_test`
--

CREATE TABLE `exads_test` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `age` int(3) NOT NULL,
  `job_title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--