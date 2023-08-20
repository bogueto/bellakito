-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-08-2023 a las 05:43:05
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `registro`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos`
--

CREATE TABLE `datos` (
  `DIVISA` varchar(50) NOT NULL,
  `INVERSION` decimal(10,2) NOT NULL,
  `ENTRADA` varchar(10) NOT NULL,
  `RETORNO` varchar(10) NOT NULL,
  `RESULTADO` varchar(10) NOT NULL,
  `FECHA` date NOT NULL,
  `ESTRATEGIA` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `datos`
--

INSERT INTO `datos` (`DIVISA`, `INVERSION`, `ENTRADA`, `RETORNO`, `RESULTADO`, `FECHA`, `ESTRATEGIA`) VALUES
('AUD/CAD', 67.00, 'COMPRA', '92%', 'PERDIDA', '2023-08-30', 'TENDENCIA'),
('AUD/CHF', 12.00, 'COMPRA', '82%', 'GANADA', '2023-08-30', 'FIBONACCI'),
('AUD/USD', 67.00, 'VENTA', '82%', 'GANADA', '2023-09-06', 'EMA'),
('CAD/CHF', 76.00, 'VENTA', '73%', 'GANADA', '2023-08-28', 'TENDENCIA'),
('CAD/JPY', 9.00, 'COMPRA', '72%', 'GANADA', '2023-08-03', 'CCI/STOCH'),
('CHF/JPY', 87.00, 'VENTA', '85%', 'GANADA', '2023-09-07', 'IMBALANCE'),
('Divisa', 0.00, 'COMPRA/VEN', 'TASA DE RE', 'GANADA/PER', '0000-00-00', 'ESTRATEGIA'),
('EUR/AUD', 56.00, 'COMPRA', '93%', 'GANADA', '2023-08-24', 'ORDER BLOCK'),
('EUR/CAD', 45.00, 'VENTA', '85%', 'GANADA', '2023-08-30', 'CCI/STOCH'),
('EUR/CHF', 45.00, 'COMPRA', '85%', 'GANADA', '2023-08-30', 'CCI/STOCH'),
('EUR/GBP', 98.00, 'COMPRA', '82%', 'GANADA', '2023-08-31', 'REVERSION'),
('EUR/JPY', 56.00, 'COMPRA', '90%', 'PERDIDA', '2023-08-29', 'TENDENCIA'),
('EUR/NZD', 67.00, 'COMPRA', '93%', 'GANADA', '2023-08-19', 'FIBONACCI'),
('EUR/USD', 6.00, 'VENTA', '82%', 'GANADA', '2023-09-01', 'SOPORTE/RESISTENCIA'),
('GBP/AUD', 91.00, 'VENTA', '72%', 'GANADA', '2023-08-30', 'SOPORTE/RESISTENCIA'),
('GBP/CAD', 66.00, 'COMPRA', '90%', 'GANADA', '2023-08-28', 'PATRON DE VELA'),
('GBP/CHF', 65.00, 'COMPRA', '75%', 'PERDIDA', '2023-09-06', 'CCI/STOCH'),
('GBP/JPY', 87.00, 'COMPRA', '73%', 'GANADA', '2023-08-27', 'FIBONACCI'),
('GBP/NZD', 87.00, 'COMPRA', '82%', 'PERDIDA', '2023-08-22', 'EMA'),
('GBP/USD', 56.00, 'COMPRA', '85%', 'GANADA', '2023-08-28', 'SOPORTE/RESISTENCIA'),
('NZD/CAD', 123.00, 'VENTA', '85%', 'GANADA', '2023-08-13', 'ESTOCASTICO'),
('NZD/CHF', 64.00, 'VENTA', '90%', 'PERDIDA', '2023-08-23', 'FIBONACCI'),
('NZD/JPY', 87.00, 'COMPRA', '92%', 'GANADA', '2023-09-04', 'FIBONACCI'),
('NZD/USD', 23.00, 'VENTA', '85%', 'PERDIDA', '2023-08-23', 'SOPORTE/RESISTENCIA'),
('USD/CAD', 34.00, 'VENTA', '82%', 'GANADA', '2023-09-07', 'SOPORTE/RESISTENCIA'),
('USD/CHF', 5.00, 'COMPRA', '75%', 'GANADA', '2023-08-31', 'EMA'),
('USD/JPY', 6.00, 'VENTA', '73%', 'GANADA', '2023-09-06', 'SOPORTE/RESISTENCIA');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `datos`
--
ALTER TABLE `datos`
  ADD PRIMARY KEY (`DIVISA`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;