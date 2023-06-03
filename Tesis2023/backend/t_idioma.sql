-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 22-05-2023 a las 02:06:28
-- Versión del servidor: 10.4.25-MariaDB
-- Versión de PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `t_idioma`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumno_curso`
--

CREATE TABLE `alumno_curso` (
  `a_c_id_alumno` int(8) NOT NULL,
  `a_c_id_curso` int(20) NOT NULL,
  `a_c_estado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `certificado_prof`
--

CREATE TABLE `certificado_prof` (
  `cert_id_prof` int(8) NOT NULL,
  `cert_nom_titulo` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `curso`
--

CREATE TABLE `curso` (
  `cur_id` int(20) NOT NULL,
  `cur_nombre` varchar(20) NOT NULL,
  `cur_aula` int(10) NOT NULL,
  `cur_cupo_max` int(10) NOT NULL,
  `cur_cupo_min` int(10) NOT NULL,
  `cur_id_idioma` int(10) NOT NULL,
  `cur_profe` int(50) NOT NULL,
  `cur_corte` int(4) NOT NULL,
  `cur_carga_horaria` int(20) NOT NULL,
  `cur_estado` varchar(10) NOT NULL,
  `cur_lunes` tinyint(1) NOT NULL,
  `cur_martes` tinyint(1) NOT NULL,
  `cur_miercoles` tinyint(1) NOT NULL,
  `cur_jueves` tinyint(1) NOT NULL,
  `cur_viernes` tinyint(1) NOT NULL,
  `cur_lu_h_ini` int(4) NOT NULL,
  `cur_lu_h_fin` int(4) NOT NULL,
  `cur_mar_h_ini` int(4) NOT NULL,
  `cur_mar_h_fin` int(4) NOT NULL,
  `cur_mier_h_ini` int(4) NOT NULL,
  `cur_mier_h_fin` int(4) NOT NULL,
  `cur_jue_h_ini` int(4) NOT NULL,
  `cur_jue_h_fin` int(4) NOT NULL,
  `cur_vier_h_ini` int(4) NOT NULL,
  `cur_vier_h_fin` int(4) NOT NULL,
  `cur_sab_h_ini` int(4) NOT NULL,
  `cur_sab_h_fin` int(4) NOT NULL,
  `cur_sabado` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `examen`
--

CREATE TABLE `examen` (
  `exa_dni_alumno` int(8) NOT NULL,
  `exa_id_tipo_examen` int(10) NOT NULL,
  `exa_id_curso` int(20) NOT NULL,
  `exa_nota` decimal(5,0) NOT NULL,
  `exa_fecha` date NOT NULL,
  `exa_comentarios` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `idioma`
--

CREATE TABLE `idioma` (
  `idi_id` int(10) NOT NULL,
  `idi_nombre` varchar(10) NOT NULL,
  `idi_temario` varchar(100) NOT NULL,
  `idi_estado` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `logros`
--

CREATE TABLE `logros` (
  `log_id` int(10) NOT NULL,
  `log_nombre` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `presentismo`
--

CREATE TABLE `presentismo` (
  `pres_id_alumno` int(8) NOT NULL,
  `pres_id_curso` int(20) NOT NULL,
  `pres_fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_examen`
--

CREATE TABLE `tipo_examen` (
  `tipo_exa_id` int(10) NOT NULL,
  `tipo_exa_nom` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `titulos`
--

CREATE TABLE `titulos` (
  `tit_id_alumno` int(8) NOT NULL,
  `tit_logro` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `usu_dni` int(8) NOT NULL,
  `usu_ape_nom` varchar(60) NOT NULL,
  `usu_fecha_nac` date NOT NULL,
  `usu_direccion` varchar(50) NOT NULL,
  `usu_email` varchar(60) NOT NULL,
  `usu_cel` int(50) NOT NULL,
  `usu_contacto` varchar(30) NOT NULL,
  `usu_tel_contacto` int(50) NOT NULL,
  `usu_pass` varchar(150) NOT NULL,
  `usu_estado` varchar(10) NOT NULL,
  `usu_profe` tinyint(1) NOT NULL,
  `usu_alumno` tinyint(1) NOT NULL,
  `usu_admin` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alumno_curso`
--
ALTER TABLE `alumno_curso`
  ADD PRIMARY KEY (`a_c_id_alumno`),
  ADD KEY `a_c_id_curso` (`a_c_id_curso`);

--
-- Indices de la tabla `certificado_prof`
--
ALTER TABLE `certificado_prof`
  ADD PRIMARY KEY (`cert_id_prof`);

--
-- Indices de la tabla `curso`
--
ALTER TABLE `curso`
  ADD PRIMARY KEY (`cur_id`),
  ADD UNIQUE KEY `cur_id` (`cur_id`),
  ADD KEY `cur_id_idioma` (`cur_id_idioma`),
  ADD KEY `cur_profe` (`cur_profe`);

--
-- Indices de la tabla `examen`
--
ALTER TABLE `examen`
  ADD PRIMARY KEY (`exa_dni_alumno`),
  ADD KEY `exa_id_tipo_examen` (`exa_id_tipo_examen`),
  ADD KEY `exa_id_curso` (`exa_id_curso`);

--
-- Indices de la tabla `idioma`
--
ALTER TABLE `idioma`
  ADD PRIMARY KEY (`idi_id`),
  ADD UNIQUE KEY `idi_id` (`idi_id`);

--
-- Indices de la tabla `logros`
--
ALTER TABLE `logros`
  ADD PRIMARY KEY (`log_id`);

--
-- Indices de la tabla `presentismo`
--
ALTER TABLE `presentismo`
  ADD PRIMARY KEY (`pres_id_alumno`),
  ADD KEY `pres_id_curso` (`pres_id_curso`);

--
-- Indices de la tabla `tipo_examen`
--
ALTER TABLE `tipo_examen`
  ADD PRIMARY KEY (`tipo_exa_id`);

--
-- Indices de la tabla `titulos`
--
ALTER TABLE `titulos`
  ADD PRIMARY KEY (`tit_id_alumno`),
  ADD KEY `tit_logro` (`tit_logro`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`usu_dni`),
  ADD UNIQUE KEY `usu_dni` (`usu_dni`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `curso`
--
ALTER TABLE `curso`
  MODIFY `cur_id` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `idioma`
--
ALTER TABLE `idioma`
  MODIFY `idi_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tipo_examen`
--
ALTER TABLE `tipo_examen`
  MODIFY `tipo_exa_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `alumno_curso`
--
ALTER TABLE `alumno_curso`
  ADD CONSTRAINT `alumno_curso_ibfk_1` FOREIGN KEY (`a_c_id_curso`) REFERENCES `curso` (`cur_id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `alumno_curso_ibfk_2` FOREIGN KEY (`a_c_id_alumno`) REFERENCES `usuario` (`usu_dni`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Filtros para la tabla `certificado_prof`
--
ALTER TABLE `certificado_prof`
  ADD CONSTRAINT `certificado_prof_ibfk_1` FOREIGN KEY (`cert_id_prof`) REFERENCES `usuario` (`usu_dni`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Filtros para la tabla `curso`
--
ALTER TABLE `curso`
  ADD CONSTRAINT `curso_ibfk_1` FOREIGN KEY (`cur_id_idioma`) REFERENCES `idioma` (`idi_id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `curso_ibfk_2` FOREIGN KEY (`cur_profe`) REFERENCES `usuario` (`usu_dni`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Filtros para la tabla `examen`
--
ALTER TABLE `examen`
  ADD CONSTRAINT `examen_ibfk_1` FOREIGN KEY (`exa_id_tipo_examen`) REFERENCES `tipo_examen` (`tipo_exa_id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `examen_ibfk_2` FOREIGN KEY (`exa_id_curso`) REFERENCES `curso` (`cur_id`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Filtros para la tabla `logros`
--
ALTER TABLE `logros`
  ADD CONSTRAINT `logros_ibfk_1` FOREIGN KEY (`log_id`) REFERENCES `titulos` (`tit_logro`) ON DELETE NO ACTION;

--
-- Filtros para la tabla `presentismo`
--
ALTER TABLE `presentismo`
  ADD CONSTRAINT `presentismo_ibfk_1` FOREIGN KEY (`pres_id_curso`) REFERENCES `curso` (`cur_id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `presentismo_ibfk_2` FOREIGN KEY (`pres_id_alumno`) REFERENCES `usuario` (`usu_dni`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Filtros para la tabla `titulos`
--
ALTER TABLE `titulos`
  ADD CONSTRAINT `titulos_ibfk_1` FOREIGN KEY (`tit_id_alumno`) REFERENCES `usuario` (`usu_dni`) ON DELETE NO ACTION ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
