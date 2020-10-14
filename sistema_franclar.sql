-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-09-2020 a las 09:19:57
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sistema_franclar`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_cargo`
--

CREATE TABLE `tbl_cargo` (
  `ID_Cargo` int(3) NOT NULL,
  `Nomb_Cargo` varchar(30) NOT NULL,
  `Descripción` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_citas`
--

CREATE TABLE `tbl_citas` (
  `ID_Cita` bigint(3) NOT NULL,
  `ID_Paciente` varchar(13) NOT NULL,
  `ID_Usuario` bigint(3) NOT NULL,
  `ID_Servicio` int(3) NOT NULL,
  `ID_Empleado` int(3) NOT NULL,
  `ID_Estado` int(3) NOT NULL,
  `Fec_Creacion` date NOT NULL,
  `Hora_Creacion` time NOT NULL,
  `Fec_Atencion` date NOT NULL,
  `Hora_Atencion` time NOT NULL,
  `Precio` int(5) NOT NULL,
  `Usuario_crea` bigint(3) DEFAULT NULL,
  `Fec_crea` date DEFAULT NULL,
  `Usuario_modif` bigint(3) DEFAULT NULL,
  `Fec_modif` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_consultas`
--

CREATE TABLE `tbl_consultas` (
  `ID_Consulta` bigint(3) NOT NULL,
  `ID_Cita` bigint(3) NOT NULL,
  `ID_Diagnostico` int(3) NOT NULL,
  `Anamnesis` varchar(500) NOT NULL,
  `Exam_Fisico` varchar(500) NOT NULL,
  `Tratamiento` int(100) NOT NULL,
  `Prox_Cita` int(50) NOT NULL,
  `Usuario_crea` bigint(3) DEFAULT NULL,
  `Fec_crea` date DEFAULT NULL,
  `Usuario_modif` bigint(3) DEFAULT NULL,
  `Fec_modif` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_diagnosticos`
--

CREATE TABLE `tbl_diagnosticos` (
  `ID_Diagnostico` int(3) NOT NULL,
  `Descripcion` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_empleado`
--

CREATE TABLE `tbl_empleado` (
  `ID_Empleado` int(3) NOT NULL,
  `ID_Sexo` int(3) NOT NULL,
  `ID_Est_Civil` int(3) NOT NULL,
  `ID_Cargo` int(3) NOT NULL,
  `ID_Especialidad` int(3) NOT NULL,
  `Cedula` int(13) NOT NULL,
  `Nom_Empleado` varchar(255) NOT NULL,
  `Fec_Nacimiento` date NOT NULL,
  `Dir_Empleado` varchar(255) NOT NULL,
  `Tel_Empleado` int(8) NOT NULL,
  `Cel_Empleado` int(8) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Salario` int(6) NOT NULL,
  `Usuario_crea` bigint(3) DEFAULT NULL,
  `Fec_crea` date DEFAULT NULL,
  `Usuario_modif` bigint(3) DEFAULT NULL,
  `Fec_modif` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_estado_cita`
--

CREATE TABLE `tbl_estado_cita` (
  `ID_Estado` int(3) NOT NULL,
  `Descripcion` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_estado_civil`
--

CREATE TABLE `tbl_estado_civil` (
  `ID_Est_Civil` int(3) NOT NULL,
  `Descripcion` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_estado_usuario`
--

CREATE TABLE `tbl_estado_usuario` (
  `ID_Estado` int(11) NOT NULL,
  `Descripcion` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_hist_contra`
--

CREATE TABLE `tbl_hist_contra` (
  `id_hist` int(3) NOT NULL,
  `id_usuario` bigint(3) NOT NULL,
  `contraseña` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_objetos`
--

CREATE TABLE `tbl_objetos` (
  `id_objeto` bigint(3) NOT NULL,
  `objeto` varchar(25) NOT NULL,
  `descripcion` varchar(25) NOT NULL,
  `tipo_objeto` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_pacientes`
--

CREATE TABLE `tbl_pacientes` (
  `ID_Paciente` varchar(13) NOT NULL,
  `ID_Sexo` int(3) NOT NULL,
  `ID_Est_Civil` int(3) NOT NULL,
  `ID_Tipo_Sangre` int(3) NOT NULL,
  `ID_Religion` int(3) NOT NULL,
  `ID_TipoPaciente` int(3) NOT NULL,
  `Nom_Paciente` varchar(255) NOT NULL,
  `Fec_Nacimiento` date NOT NULL,
  `Edad` int(3) NOT NULL,
  `Dir_Paciente` varchar(255) NOT NULL,
  `Tel_Paciente` int(8) NOT NULL,
  `Cel_Paciente` int(8) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Con_Emergencia` varchar(255) NOT NULL,
  `Parentesco` varchar(20) NOT NULL,
  `Tel_Emergencia` int(8) NOT NULL,
  `Cel_Emergencia` int(8) NOT NULL,
  `Ant_Personales` varchar(500) NOT NULL,
  `Ant_Familiares` varchar(500) NOT NULL,
  `Ant_Hospitalarios` varchar(500) NOT NULL,
  `Ant_Alergicos` varchar(500) NOT NULL,
  `Habitos` varchar(200) NOT NULL,
  `Usuario_crea` bigint(3) DEFAULT NULL,
  `Fec_crea` date DEFAULT NULL,
  `Usuario_modif` bigint(3) DEFAULT NULL,
  `Fec_modif` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_parametros`
--

CREATE TABLE `tbl_parametros` (
  `id_parametro` int(3) NOT NULL,
  `parametro` varchar(25) NOT NULL,
  `valor` varchar(25) NOT NULL,
  `id_usuario` bigint(3) NOT NULL,
  `Fec_crea` date NOT NULL,
  `Fec_modif` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_permisos`
--

CREATE TABLE `tbl_permisos` (
  `correlativo` bigint(3) NOT NULL,
  `id_rol` bigint(3) NOT NULL,
  `id_objeto` bigint(3) NOT NULL,
  `permiso_insertar` varchar(1) NOT NULL,
  `permiso_eliminar` varchar(1) NOT NULL,
  `permiso_actualizar` varchar(1) NOT NULL,
  `permiso_consultar` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_preclinica`
--

CREATE TABLE `tbl_preclinica` (
  `ID_Preclinica` bigint(3) NOT NULL,
  `ID_Cita` bigint(3) NOT NULL,
  `P/A` varchar(10) NOT NULL,
  `FC` varchar(10) NOT NULL,
  `FR` int(3) NOT NULL,
  `Temp` int(3) NOT NULL,
  `PAM` varchar(10) NOT NULL,
  `Glucometria` int(4) NOT NULL,
  `Peso` int(10) NOT NULL,
  `Talla` int(6) NOT NULL,
  `Usuario_crea` bigint(3) DEFAULT NULL,
  `Fec_crea` date DEFAULT NULL,
  `Usuario_modif` bigint(3) DEFAULT NULL,
  `Fec_modif` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_preguntas`
--

CREATE TABLE `tbl_preguntas` (
  `ID_Pregunta` bigint(3) NOT NULL,
  `Pregunta` varchar(100) NOT NULL,
  `Usuario_crea` bigint(3) NOT NULL,
  `Fec_crea` date NOT NULL,
  `Usuario_modif` bigint(3) NOT NULL,
  `Fec_modif` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_pregunta_usuario`
--

CREATE TABLE `tbl_pregunta_usuario` (
  `Correlativo` bigint(3) NOT NULL,
  `ID_Pregunta` bigint(3) NOT NULL,
  `ID_Usuario` bigint(3) NOT NULL,
  `Respuesta` varchar(100) NOT NULL,
  `Usuario_crea` bigint(3) DEFAULT NULL,
  `Fec_crea` date DEFAULT NULL,
  `Usuario_modif` bigint(3) DEFAULT NULL,
  `Fec_modif` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_religion`
--

CREATE TABLE `tbl_religion` (
  `ID_Religion` int(3) NOT NULL,
  `Descripción` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_roles`
--

CREATE TABLE `tbl_roles` (
  `ID_Rol` bigint(3) NOT NULL,
  `Rol` varchar(30) NOT NULL,
  `Descripcion` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_servicio`
--

CREATE TABLE `tbl_servicio` (
  `ID_Servicio` int(3) NOT NULL,
  `Descripcion` varchar(50) NOT NULL,
  `Precio` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_sexo`
--

CREATE TABLE `tbl_sexo` (
  `ID_Sexo` int(3) NOT NULL,
  `Descripcion` varchar(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_tipo_paciente`
--

CREATE TABLE `tbl_tipo_paciente` (
  `ID_TipoPaciente` int(3) NOT NULL,
  `Descripción` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_tipo_sangre`
--

CREATE TABLE `tbl_tipo_sangre` (
  `ID_Tipo_Sangre` int(3) NOT NULL,
  `Descripción` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_usuario`
--

CREATE TABLE `tbl_usuario` (
  `ID_Usuario` bigint(3) NOT NULL,
  `ID_Empleado` int(3) NOT NULL,
  `ID_Estado` int(3) NOT NULL,
  `Nom_Usuario` varchar(50) NOT NULL,
  `Contraseña` varchar(30) NOT NULL,
  `ID_Rol` bigint(3) NOT NULL,
  `Ult_Conexion` date NOT NULL,
  `Primer_Ingreso` int(1) NOT NULL,
  `Fec_venc` date NOT NULL,
  `Preguntas_Contes` int(11) NOT NULL,
  `Usuario_crea` bigint(3) DEFAULT NULL,
  `Fec_crea` date DEFAULT NULL,
  `Usuario_modif` bigint(3) DEFAULT NULL,
  `Fec_modif` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tbl_cargo`
--
ALTER TABLE `tbl_cargo`
  ADD PRIMARY KEY (`ID_Cargo`);

--
-- Indices de la tabla `tbl_citas`
--
ALTER TABLE `tbl_citas`
  ADD PRIMARY KEY (`ID_Cita`),
  ADD KEY `ID_Paciente` (`ID_Paciente`),
  ADD KEY `ID_Usuario` (`ID_Usuario`),
  ADD KEY `ID_Servicio` (`ID_Servicio`),
  ADD KEY `ID_Empleado` (`ID_Empleado`),
  ADD KEY `ID_Estado` (`ID_Estado`);

--
-- Indices de la tabla `tbl_consultas`
--
ALTER TABLE `tbl_consultas`
  ADD PRIMARY KEY (`ID_Consulta`),
  ADD KEY `ID_Atencion` (`ID_Cita`),
  ADD KEY `ID_Diagnostico` (`ID_Diagnostico`),
  ADD KEY `ID_Cita` (`ID_Cita`);

--
-- Indices de la tabla `tbl_diagnosticos`
--
ALTER TABLE `tbl_diagnosticos`
  ADD PRIMARY KEY (`ID_Diagnostico`);

--
-- Indices de la tabla `tbl_empleado`
--
ALTER TABLE `tbl_empleado`
  ADD PRIMARY KEY (`ID_Empleado`),
  ADD KEY `ID_Sexo` (`ID_Sexo`),
  ADD KEY `ID_Est_Civil` (`ID_Est_Civil`),
  ADD KEY `ID_Cargo` (`ID_Cargo`),
  ADD KEY `ID_Especialidad` (`ID_Especialidad`);

--
-- Indices de la tabla `tbl_estado_cita`
--
ALTER TABLE `tbl_estado_cita`
  ADD PRIMARY KEY (`ID_Estado`);

--
-- Indices de la tabla `tbl_estado_civil`
--
ALTER TABLE `tbl_estado_civil`
  ADD PRIMARY KEY (`ID_Est_Civil`);

--
-- Indices de la tabla `tbl_estado_usuario`
--
ALTER TABLE `tbl_estado_usuario`
  ADD PRIMARY KEY (`ID_Estado`);

--
-- Indices de la tabla `tbl_hist_contra`
--
ALTER TABLE `tbl_hist_contra`
  ADD PRIMARY KEY (`id_hist`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- Indices de la tabla `tbl_objetos`
--
ALTER TABLE `tbl_objetos`
  ADD PRIMARY KEY (`id_objeto`);

--
-- Indices de la tabla `tbl_pacientes`
--
ALTER TABLE `tbl_pacientes`
  ADD PRIMARY KEY (`ID_Paciente`),
  ADD KEY `ID_Sexo` (`ID_Sexo`),
  ADD KEY `ID_Est_Civil` (`ID_Est_Civil`),
  ADD KEY `ID_Tipo_Sangre` (`ID_Tipo_Sangre`),
  ADD KEY `ID_Religion` (`ID_Religion`),
  ADD KEY `ID_TipoPaciente` (`ID_TipoPaciente`);

--
-- Indices de la tabla `tbl_parametros`
--
ALTER TABLE `tbl_parametros`
  ADD PRIMARY KEY (`id_parametro`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- Indices de la tabla `tbl_permisos`
--
ALTER TABLE `tbl_permisos`
  ADD PRIMARY KEY (`correlativo`),
  ADD KEY `id_rol` (`id_rol`),
  ADD KEY `id_objeto` (`id_objeto`);

--
-- Indices de la tabla `tbl_preclinica`
--
ALTER TABLE `tbl_preclinica`
  ADD PRIMARY KEY (`ID_Preclinica`),
  ADD KEY `ID_Cita` (`ID_Cita`);

--
-- Indices de la tabla `tbl_preguntas`
--
ALTER TABLE `tbl_preguntas`
  ADD PRIMARY KEY (`ID_Pregunta`);

--
-- Indices de la tabla `tbl_pregunta_usuario`
--
ALTER TABLE `tbl_pregunta_usuario`
  ADD PRIMARY KEY (`Correlativo`),
  ADD KEY `ID_Pregunta` (`ID_Pregunta`),
  ADD KEY `ID_Usuario` (`ID_Usuario`);

--
-- Indices de la tabla `tbl_religion`
--
ALTER TABLE `tbl_religion`
  ADD PRIMARY KEY (`ID_Religion`);

--
-- Indices de la tabla `tbl_roles`
--
ALTER TABLE `tbl_roles`
  ADD PRIMARY KEY (`ID_Rol`);

--
-- Indices de la tabla `tbl_servicio`
--
ALTER TABLE `tbl_servicio`
  ADD PRIMARY KEY (`ID_Servicio`);

--
-- Indices de la tabla `tbl_sexo`
--
ALTER TABLE `tbl_sexo`
  ADD PRIMARY KEY (`ID_Sexo`);

--
-- Indices de la tabla `tbl_tipo_paciente`
--
ALTER TABLE `tbl_tipo_paciente`
  ADD PRIMARY KEY (`ID_TipoPaciente`);

--
-- Indices de la tabla `tbl_tipo_sangre`
--
ALTER TABLE `tbl_tipo_sangre`
  ADD PRIMARY KEY (`ID_Tipo_Sangre`);

--
-- Indices de la tabla `tbl_usuario`
--
ALTER TABLE `tbl_usuario`
  ADD PRIMARY KEY (`ID_Usuario`),
  ADD KEY `ID_Empleado` (`ID_Empleado`),
  ADD KEY `ID_Estado` (`ID_Estado`),
  ADD KEY `ID_Rol` (`ID_Rol`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tbl_citas`
--
ALTER TABLE `tbl_citas`
  MODIFY `ID_Cita` bigint(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tbl_consultas`
--
ALTER TABLE `tbl_consultas`
  MODIFY `ID_Consulta` bigint(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tbl_preclinica`
--
ALTER TABLE `tbl_preclinica`
  MODIFY `ID_Preclinica` bigint(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tbl_preguntas`
--
ALTER TABLE `tbl_preguntas`
  MODIFY `ID_Pregunta` bigint(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tbl_pregunta_usuario`
--
ALTER TABLE `tbl_pregunta_usuario`
  MODIFY `Correlativo` bigint(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tbl_roles`
--
ALTER TABLE `tbl_roles`
  MODIFY `ID_Rol` bigint(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tbl_usuario`
--
ALTER TABLE `tbl_usuario`
  MODIFY `ID_Usuario` bigint(3) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `tbl_citas`
--
ALTER TABLE `tbl_citas`
  ADD CONSTRAINT `tbl_citas_ibfk_1` FOREIGN KEY (`ID_Empleado`) REFERENCES `tbl_empleado` (`ID_Empleado`) ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_citas_ibfk_2` FOREIGN KEY (`ID_Servicio`) REFERENCES `tbl_servicio` (`ID_Servicio`) ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_citas_ibfk_3` FOREIGN KEY (`ID_Paciente`) REFERENCES `tbl_pacientes` (`ID_Paciente`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `tbl_consultas`
--
ALTER TABLE `tbl_consultas`
  ADD CONSTRAINT `tbl_consultas_ibfk_2` FOREIGN KEY (`ID_Diagnostico`) REFERENCES `tbl_diagnosticos` (`ID_Diagnostico`) ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_consultas_ibfk_3` FOREIGN KEY (`ID_Cita`) REFERENCES `tbl_citas` (`ID_Cita`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `tbl_empleado`
--
ALTER TABLE `tbl_empleado`
  ADD CONSTRAINT `tbl_empleado_ibfk_1` FOREIGN KEY (`ID_Cargo`) REFERENCES `tbl_cargo` (`ID_Cargo`) ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_empleado_ibfk_2` FOREIGN KEY (`ID_Est_Civil`) REFERENCES `tbl_estado_civil` (`ID_Est_Civil`) ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_empleado_ibfk_3` FOREIGN KEY (`ID_Sexo`) REFERENCES `tbl_sexo` (`ID_Sexo`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `tbl_estado_cita`
--
ALTER TABLE `tbl_estado_cita`
  ADD CONSTRAINT `tbl_estado_cita_ibfk_1` FOREIGN KEY (`ID_Estado`) REFERENCES `tbl_citas` (`ID_Estado`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `tbl_hist_contra`
--
ALTER TABLE `tbl_hist_contra`
  ADD CONSTRAINT `tbl_hist_contra_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `tbl_usuario` (`ID_Usuario`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `tbl_pacientes`
--
ALTER TABLE `tbl_pacientes`
  ADD CONSTRAINT `tbl_pacientes_ibfk_1` FOREIGN KEY (`ID_TipoPaciente`) REFERENCES `tbl_tipo_paciente` (`ID_TipoPaciente`),
  ADD CONSTRAINT `tbl_pacientes_ibfk_2` FOREIGN KEY (`ID_Tipo_Sangre`) REFERENCES `tbl_tipo_sangre` (`ID_Tipo_Sangre`) ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_pacientes_ibfk_3` FOREIGN KEY (`ID_Sexo`) REFERENCES `tbl_sexo` (`ID_Sexo`) ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_pacientes_ibfk_4` FOREIGN KEY (`ID_Est_Civil`) REFERENCES `tbl_estado_civil` (`ID_Est_Civil`) ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_pacientes_ibfk_5` FOREIGN KEY (`ID_Religion`) REFERENCES `tbl_religion` (`ID_Religion`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `tbl_parametros`
--
ALTER TABLE `tbl_parametros`
  ADD CONSTRAINT `tbl_parametros_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `tbl_usuario` (`ID_Usuario`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `tbl_permisos`
--
ALTER TABLE `tbl_permisos`
  ADD CONSTRAINT `tbl_permisos_ibfk_1` FOREIGN KEY (`id_objeto`) REFERENCES `tbl_objetos` (`id_objeto`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_permisos_ibfk_2` FOREIGN KEY (`id_rol`) REFERENCES `tbl_roles` (`ID_Rol`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `tbl_preclinica`
--
ALTER TABLE `tbl_preclinica`
  ADD CONSTRAINT `tbl_preclinica_ibfk_2` FOREIGN KEY (`ID_Cita`) REFERENCES `tbl_citas` (`ID_Cita`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `tbl_pregunta_usuario`
--
ALTER TABLE `tbl_pregunta_usuario`
  ADD CONSTRAINT `tbl_pregunta_usuario_ibfk_1` FOREIGN KEY (`ID_Pregunta`) REFERENCES `tbl_preguntas` (`ID_Pregunta`) ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_pregunta_usuario_ibfk_2` FOREIGN KEY (`ID_Usuario`) REFERENCES `tbl_usuario` (`ID_Usuario`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `tbl_usuario`
--
ALTER TABLE `tbl_usuario`
  ADD CONSTRAINT `tbl_usuario_ibfk_2` FOREIGN KEY (`ID_Empleado`) REFERENCES `tbl_empleado` (`ID_Empleado`) ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_usuario_ibfk_3` FOREIGN KEY (`ID_Estado`) REFERENCES `tbl_estado_usuario` (`ID_Estado`) ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_usuario_ibfk_4` FOREIGN KEY (`ID_Usuario`) REFERENCES `tbl_citas` (`ID_Usuario`) ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_usuario_ibfk_5` FOREIGN KEY (`ID_Rol`) REFERENCES `tbl_roles` (`ID_Rol`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
