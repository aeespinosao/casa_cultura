-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-05-2017 a las 03:42:08
-- Versión del servidor: 5.7.14
-- Versión de PHP: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bd_casa_cultura`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asistencia`
--

CREATE TABLE `asistencia` (
  `codigo_matricula` int(5) NOT NULL,
  `codigo_curso` int(5) NOT NULL,
  `numero_documento` varchar(20) NOT NULL,
  `clase` varchar(10) NOT NULL,
  `reporte` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `curso`
--

CREATE TABLE `curso` (
  `codigo` int(5) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `cupos` int(3) NOT NULL,
  `clases` int(3) NOT NULL,
  `horas` int(3) NOT NULL,
  `fecha_inicio` date NOT NULL,
  `fecha_final` date NOT NULL,
  `fecha_limite` date NOT NULL,
  `entidad` varchar(50) NOT NULL,
  `doc_encargado` varchar(20) NOT NULL,
  `estado` varchar(10) DEFAULT 'Activo'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `curso`
--

INSERT INTO `curso` (`codigo`, `nombre`, `cupos`, `clases`, `horas`, `fecha_inicio`, `fecha_final`, `fecha_limite`, `entidad`, `doc_encargado`, `estado`) VALUES
(4, 'matematicas', 8, 2, 8, '2017-05-02', '2017-06-06', '2017-05-01', 'sena', '2132', 'Activo'),
(5, 'musica', 8, 2, 8, '2017-03-26', '2017-04-02', '2017-05-05', 'sena', '2132', 'Activo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `matricula`
--

CREATE TABLE `matricula` (
  `codigo` int(5) NOT NULL,
  `codigo_curso` int(5) NOT NULL,
  `numero_documento` varchar(20) NOT NULL,
  `estado` varchar(15) DEFAULT 'Sin terminar'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `tipo_documento` varchar(15) NOT NULL,
  `numero_documento` varchar(20) NOT NULL,
  `nombres` varchar(30) NOT NULL,
  `apellidos` varchar(30) NOT NULL,
  `municipio` varchar(10) NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `comuna` varchar(10) NOT NULL,
  `barrio` varchar(10) NOT NULL,
  `edad` int(3) NOT NULL,
  `genero` varchar(30) NOT NULL,
  `direccion` varchar(20) NOT NULL,
  `telefono` varchar(10) NOT NULL,
  `celular` varchar(15) NOT NULL,
  `correo` varchar(30) DEFAULT NULL,
  `tipo_sanguineo` varchar(5) NOT NULL,
  `eps` varchar(10) DEFAULT NULL,
  `etnia` varchar(30) DEFAULT 'otro',
  `discapacidad` varchar(30) DEFAULT NULL,
  `diversidad_sexual` varchar(30) NOT NULL,
  `intereses` varchar(100) DEFAULT NULL,
  `documento_acudiente` varchar(20) DEFAULT NULL,
  `parentesco_acudiente` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`tipo_documento`, `numero_documento`, `nombres`, `apellidos`, `municipio`, `fecha_nacimiento`, `comuna`, `barrio`, `edad`, `genero`, `direccion`, `telefono`, `celular`, `correo`, `tipo_sanguineo`, `eps`, `etnia`, `discapacidad`, `diversidad_sexual`, `intereses`, `documento_acudiente`, `parentesco_acudiente`) VALUES
('CC', '2132', 'klasd', 'asdas', 'dspofg', '2017-05-15', '5', 'poasd', 1232, 'masculino', 'askdl', '213', '3234', 'asd@hotmail.com', 'A-', 'laskmd', 'indigena', 'comunicativa', 'lesbiana', 'a', NULL, NULL),
('CE', '2139', 'carlos', 'perez', 'antioquia', '1970-01-01', '10', 'aaa', 12, 'masculino', 'car 123', '172821', '123213', 'asd@hotmail.com', 'B+', 'sura', 'blanco', 'motriz', 'heterosexual', 'carros', NULL, NULL),
('CE', '345', 'susana', 'osorio', 'antioquia', '2000-05-01', '13', 'nnn', 40, 'femenino', 'calle8', '21392', '345345323423', 'a@ja.com', 'B-', 'coomeva', 'otro', 'otra', 'otro', 'perros,gatos', NULL, NULL),
('CE', '9182', 'juana', 'lopez', 'antioquia', '2000-05-15', '6', 'ppp', 89, 'femenino', 'calle897', '213', '3453453', 'a@ja.com', 'B-', 'coomeva', 'Gitano', 'comunicativa', 'intersexual', 'perros', NULL, NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `asistencia`
--
ALTER TABLE `asistencia`
  ADD PRIMARY KEY (`codigo_curso`,`numero_documento`,`codigo_matricula`,`clase`),
  ADD KEY `matricula_fk` (`codigo_matricula`),
  ADD KEY `usuario_fk2` (`numero_documento`);

--
-- Indices de la tabla `curso`
--
ALTER TABLE `curso`
  ADD PRIMARY KEY (`codigo`),
  ADD KEY `encargado_fk` (`doc_encargado`);

--
-- Indices de la tabla `matricula`
--
ALTER TABLE `matricula`
  ADD PRIMARY KEY (`codigo_curso`,`numero_documento`),
  ADD KEY `usuario_fk` (`numero_documento`),
  ADD KEY `idx_matricula` (`codigo`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`numero_documento`),
  ADD KEY `acudiente_fk` (`documento_acudiente`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `curso`
--
ALTER TABLE `curso`
  MODIFY `codigo` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `asistencia`
--
ALTER TABLE `asistencia`
  ADD CONSTRAINT `curso_fk2` FOREIGN KEY (`codigo_curso`) REFERENCES `curso` (`codigo`),
  ADD CONSTRAINT `matricula_fk` FOREIGN KEY (`codigo_matricula`) REFERENCES `matricula` (`codigo`),
  ADD CONSTRAINT `usuario_fk2` FOREIGN KEY (`numero_documento`) REFERENCES `usuario` (`numero_documento`);

--
-- Filtros para la tabla `curso`
--
ALTER TABLE `curso`
  ADD CONSTRAINT `encargado_fk` FOREIGN KEY (`doc_encargado`) REFERENCES `usuario` (`numero_documento`);

--
-- Filtros para la tabla `matricula`
--
ALTER TABLE `matricula`
  ADD CONSTRAINT `curso_fk` FOREIGN KEY (`codigo_curso`) REFERENCES `curso` (`codigo`),
  ADD CONSTRAINT `usuario_fk` FOREIGN KEY (`numero_documento`) REFERENCES `usuario` (`numero_documento`);

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `acudiente_fk` FOREIGN KEY (`documento_acudiente`) REFERENCES `usuario` (`numero_documento`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
