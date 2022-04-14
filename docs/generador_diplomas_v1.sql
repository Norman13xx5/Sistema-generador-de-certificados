-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 14, 2022 at 09:39 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `brayan_diplomas`
--

-- --------------------------------------------------------

--
-- Table structure for table `td_curso_usuario`
--

CREATE TABLE `td_curso_usuario` (
  `id_curso_detalle` int(11) NOT NULL,
  `id_curso` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `fecha_creacion` datetime NOT NULL,
  `estado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `td_curso_usuario`
--

INSERT INTO `td_curso_usuario` (`id_curso_detalle`, `id_curso`, `id_usuario`, `fecha_creacion`, `estado`) VALUES
(1, 1, 1, '2022-04-09 17:56:28', 1),
(2, 1, 2, '2022-04-09 00:58:09', 1),
(3, 2, 3, '2022-04-09 00:58:09', 1),
(4, 2, 1, '2022-04-09 17:56:28', 1),
(5, 3, 1, '2022-04-09 00:58:09', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tm_categoria`
--

CREATE TABLE `tm_categoria` (
  `id_categoria` int(11) NOT NULL,
  `nombre_categoria` varchar(150) COLLATE utf8_spanish_ci NOT NULL,
  `fecha_creacion` datetime DEFAULT NULL,
  `estado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `tm_categoria`
--

INSERT INTO `tm_categoria` (`id_categoria`, `nombre_categoria`, `fecha_creacion`, `estado`) VALUES
(1, 'programacion', '2022-04-08 16:42:15', 1),
(2, 'marketing', '2022-04-08 16:42:15', 1),
(3, 'negocioso', '2022-04-08 16:42:15', 1),
(4, 'educacion', '2022-04-08 16:42:15', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tm_curso`
--

CREATE TABLE `tm_curso` (
  `id_curso` int(11) NOT NULL,
  `id_categoria` int(11) NOT NULL,
  `nombre_curso` varchar(150) COLLATE utf8_spanish_ci NOT NULL,
  `descripcion_curso` varchar(1000) COLLATE utf8_spanish_ci NOT NULL,
  `fecha_inicio_curso` date NOT NULL,
  `fecha_final_curso` date NOT NULL,
  `id_instrutor` int(11) NOT NULL,
  `fecha_creacion` datetime DEFAULT NULL,
  `estado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `tm_curso`
--

INSERT INTO `tm_curso` (`id_curso`, `id_categoria`, `nombre_curso`, `descripcion_curso`, `fecha_inicio_curso`, `fecha_final_curso`, `id_instrutor`, `fecha_creacion`, `estado`) VALUES
(1, 1, 'Ing Informático', 'El Ingeniero Informático del Instituto Universitario de la Paz “UNIPAZ” tendrá la capacidad de diseñar, implementar, implantar, asesorar y gerenciar proyectos de TI para las organizaciones, buscando el desarrollo e innovación teniendo en cuenta la articulación adecuada entre condiciones políticas, legislativas, socioeconómicas, técnicas y ambientales del entorno, con responsabilidad disciplinar, social y ética.', '2016-04-02', '2022-04-13', 1, '2022-04-08 16:55:38', 1),
(2, 2, 'Introducion a los negocios', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2022-04-01', '2022-04-30', 2, '2022-04-08 16:55:38', 1),
(3, 2, 'PHP', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2022-04-01', '2022-04-30', 2, '2022-04-08 16:55:38', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tm_instructor`
--

CREATE TABLE `tm_instructor` (
  `id_instrutor` int(11) NOT NULL,
  `instrutor_nombre` varchar(150) COLLATE utf8_spanish_ci NOT NULL,
  `instructor_apellido_paterno` varchar(150) COLLATE utf8_spanish_ci NOT NULL,
  `instructor_apellido_materno` varchar(150) COLLATE utf8_spanish_ci NOT NULL,
  `correo_instrutor` varchar(150) COLLATE utf8_spanish_ci NOT NULL,
  `sexo_instrutor` varchar(1) COLLATE utf8_spanish_ci DEFAULT NULL,
  `telefono_instrutor` varchar(150) COLLATE utf8_spanish_ci NOT NULL,
  `fecha_creacion` datetime NOT NULL,
  `estado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `tm_instructor`
--

INSERT INTO `tm_instructor` (`id_instrutor`, `instrutor_nombre`, `instructor_apellido_paterno`, `instructor_apellido_materno`, `correo_instrutor`, `sexo_instrutor`, `telefono_instrutor`, `fecha_creacion`, `estado`) VALUES
(1, 'Oscar', 'Almeida', 'Cavanzo', 'rectoria@unipaz.edu.co	', 'M', '555555555', '2022-04-08 23:36:04', 1),
(2, 'Asly', 'Joana', 'Chacon', 'Asly@gmail.com', 'F', '44444444', '2022-04-08 23:36:04', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tm_usuario`
--

CREATE TABLE `tm_usuario` (
  `id_usuario` int(11) NOT NULL,
  `nombre_usuario` varchar(150) COLLATE utf8_spanish_ci NOT NULL,
  `apellido_paterno` varchar(150) COLLATE utf8_spanish_ci NOT NULL,
  `apellido_materno` varchar(150) COLLATE utf8_spanish_ci NOT NULL,
  `correo_usuario` varchar(150) COLLATE utf8_spanish_ci NOT NULL,
  `pass_usuario` varchar(150) COLLATE utf8_spanish_ci NOT NULL,
  `sexo_usuario` varchar(1) COLLATE utf8_spanish_ci NOT NULL,
  `telefono_usuario` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `fecha_creacion` datetime DEFAULT NULL,
  `estado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `tm_usuario`
--

INSERT INTO `tm_usuario` (`id_usuario`, `nombre_usuario`, `apellido_paterno`, `apellido_materno`, `correo_usuario`, `pass_usuario`, `sexo_usuario`, `telefono_usuario`, `fecha_creacion`, `estado`) VALUES
(1, 'Brayan', 'Diaz', 'Martinez', 'brahyan.com@gmail.com', 'admin', 'M', '3182834018', '2022-04-08 16:16:35', 1),
(2, 'Martín', 'Almeida', 'Cavanzo', 'martin@gmail.com', 'admin', 'M', '573107698290', '2022-04-08 16:16:35', 1),
(3, 'Emerson', 'Machado', 'Alvarez', 'emerson@gmail.com', 'admin', 'F', '3016771485', '2022-04-08 16:16:35', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `td_curso_usuario`
--
ALTER TABLE `td_curso_usuario`
  ADD PRIMARY KEY (`id_curso_detalle`);

--
-- Indexes for table `tm_categoria`
--
ALTER TABLE `tm_categoria`
  ADD PRIMARY KEY (`id_categoria`);

--
-- Indexes for table `tm_curso`
--
ALTER TABLE `tm_curso`
  ADD PRIMARY KEY (`id_curso`);

--
-- Indexes for table `tm_instructor`
--
ALTER TABLE `tm_instructor`
  ADD PRIMARY KEY (`id_instrutor`);

--
-- Indexes for table `tm_usuario`
--
ALTER TABLE `tm_usuario`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `td_curso_usuario`
--
ALTER TABLE `td_curso_usuario`
  MODIFY `id_curso_detalle` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tm_categoria`
--
ALTER TABLE `tm_categoria`
  MODIFY `id_categoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tm_curso`
--
ALTER TABLE `tm_curso`
  MODIFY `id_curso` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tm_instructor`
--
ALTER TABLE `tm_instructor`
  MODIFY `id_instrutor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tm_usuario`
--
ALTER TABLE `tm_usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
