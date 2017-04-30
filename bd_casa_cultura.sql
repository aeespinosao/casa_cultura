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
  `genero` varchar(10) NOT NULL,
  `direccion` varchar(20) NOT NULL,
  `telefono` varchar(10) NOT NULL,
  `celular` varchar(15) NOT NULL,
  `correo` varchar(30),
  `tipo_sanguineo` varchar(5) NOT NULL,
  `eps` varchar(10),
  `etnia` varchar(10),
  `discapacidad` varchar(10),
  `diversidad_sexual` varchar(10) NOT NULL,
  `documento_acudiente` varchar(20),
  `parentesco_acudiente` varchar(10),
  CONSTRAINT `usuario_pk` PRIMARY KEY (`numero_documento`),
  CONSTRAINT `acudiente_fk` FOREIGN KEY (`documento_acudiente`) REFERENCES `usuario` (`numero_documento`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `curso` (
  `codigo` int(5) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  `cupos` int(3) NOT NULL,
  `clases` int(3) NOT NULL,
  `horas` int(3) NOT NULL,
  `fecha_inicio` date NOT NULL,
  `fecha_final` date NOT NULL,
  `fecha_limite` date NOT NULL
  `entidad` varchar(50) NOT NULL,
  `doc_encargado` varchar(20) NOT NULL,
  `estado` varchar(10) DEFAULT 'Activo',
  CONSTRAINT `curso_pk` PRIMARY KEY (`codigo`),
  CONSTRAINT `encargado_fk` FOREIGN KEY (`doc_encargado`) REFERENCES `usuario` (`numero_documento`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `matricula` (
  `codigo` int(5) NOT NULL,
  `codigo_curso` int(5) NOT NULL,
  `numero_documento` varchar(20) NOT NULL,
  `estado` varchar(15) DEFAULT 'Sin terminar',
  CONSTRAINT `matricula_pk` PRIMARY KEY (`codigo_curso`,`numero_documento`),
  CONSTRAINT `usuario_fk` FOREIGN KEY (`numero_documento`) REFERENCES `usuario` (`numero_documento`),
  CONSTRAINT `curso_fk` FOREIGN KEY (`codigo_curso`) REFERENCES `curso` (`codigo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

create index idx_matricula on matricula(codigo);

CREATE TABLE `asistencia` (
  `codigo_matricula` int(5) NOT NULL,
  `codigo_curso` int(5) NOT NULL,
  `numero_documento` varchar(20) NOT NULL,
  `clase` varchar(10) NOT NULL,
  `reporte` int(1) NOT NULL DEFAULT 0,
  CONSTRAINT `asistencia_pk` PRIMARY KEY (`codigo_curso`,`numero_documento`,`codigo_matricula`,`clase`),
  CONSTRAINT `matricula_fk` FOREIGN KEY (`codigo_matricula`) REFERENCES `matricula` (`codigo`),
  CONSTRAINT `usuario_fk2` FOREIGN KEY (`numero_documento`) REFERENCES `usuario` (`numero_documento`),
  CONSTRAINT `curso_fk2` FOREIGN KEY (`codigo_curso`) REFERENCES `curso` (`codigo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
