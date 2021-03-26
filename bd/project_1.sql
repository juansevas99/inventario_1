-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 28, 2021 at 12:21 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project_1`
--

-- --------------------------------------------------------

--
-- Table structure for table `activo`
--

CREATE TABLE `activo` (
  `id_activo` int(11) NOT NULL,
  `referencia_activo` varchar(20) DEFAULT NULL,
  `id_marca` int(11) DEFAULT NULL,
  `id_proveedor` int(11) DEFAULT NULL,
  `id_tipo_activo` int(11) DEFAULT NULL,
  `id_empleado` int(11) DEFAULT NULL,
  `id_estado` int(11) DEFAULT NULL,
  `cantidad` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `activo`
--

INSERT INTO `activo` (`id_activo`, `referencia_activo`, `id_marca`, `id_proveedor`, `id_tipo_activo`, `id_empleado`, `id_estado`, `cantidad`) VALUES
(1, '12343rs', 1, 1, 1, 1, 1, 2),
(2, 'q2342354345', 2, 2, 2, 1, 1, 2),
(43, '46546747h', 1, 2, 2, 10, 2, 34),
(44, '453645rgsd', 3, 3, 3, 11, 1, 2),
(45, '324r65h', 8, 8, 5, 12, 1, 2),
(46, '23443hg', 2, 3, 4, 13, 1, 2),
(47, '2342j43kb', 9, 8, 4, 14, 1, 2),
(48, '234k2j3b', 9, 8, 5, 15, 1, 2),
(49, '98vhg', 9, 8, 6, 16, 1, 2),
(50, '45k34jb', 3, 8, 4, 13, 2, 2),
(51, '435kjgf', 1, 1, 4, 11, 1, 2),
(52, '45hj4sf', 2, 2, 4, 13, 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `atributos`
--

CREATE TABLE `atributos` (
  `id_atributos` int(11) NOT NULL,
  `code_atributos` varchar(4) DEFAULT NULL,
  `nombre_atributos` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `atributos`
--

INSERT INTO `atributos` (`id_atributos`, `code_atributos`, `nombre_atributos`) VALUES
(19, '2435', 'Espacio RAM'),
(20, 'jhg4', 'Espacio Disco duro'),
(21, '2436', 'Capacidad Tinta'),
(22, '2455', 'Tarjeta grafica'),
(23, '2445', 'Pulgadas'),
(24, '2335', 'Amperaje');

-- --------------------------------------------------------

--
-- Table structure for table `departamento`
--

CREATE TABLE `departamento` (
  `id_departamento` int(11) NOT NULL,
  `nombre_departamento` varchar(70) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `departamento`
--

INSERT INTO `departamento` (`id_departamento`, `nombre_departamento`) VALUES
(1, 'Contabilidad'),
(2, 'Adminsitracion'),
(3, 'Desarrollo e innovacion'),
(4, 'Recursos humanos'),
(5, 'Bodegas'),
(6, 'Presidencia');

-- --------------------------------------------------------

--
-- Table structure for table `empleado`
--

CREATE TABLE `empleado` (
  `id_empleado` int(11) NOT NULL,
  `documento_empleado` varchar(10) NOT NULL,
  `telefono_empleado` varchar(14) NOT NULL,
  `correo_empleado` varchar(120) NOT NULL,
  `id_departamento` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `empleado`
--

INSERT INTO `empleado` (`id_empleado`, `documento_empleado`, `telefono_empleado`, `correo_empleado`, `id_departamento`) VALUES
(1, '1000494586', '3145649807', 'juan@gmail.com', 1),
(10, '2453636', '45756735', 'juan?@gmail.com', 1),
(11, '79846924', '345678', 'Daniel@gmail.com', 1),
(12, '45756845', '3134578679', 'Angie@gmail.com', 3),
(13, '1000045454', '345267839', 'Julian@gmail.com', 6),
(14, '12120809', '45756735', 'Alberto@gmail.com', 6),
(15, '10826372', '45756735', 'Robertop@gmail.com', 5),
(16, '103463784', '45756735', 'josue?9@gmail.com', 3),
(17, '100346734', '45756735', 'asd97k@gmail.com', 4);

-- --------------------------------------------------------

--
-- Table structure for table `estado`
--

CREATE TABLE `estado` (
  `id_estado` int(11) NOT NULL,
  `nombre_estado` varchar(70) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `estado`
--

INSERT INTO `estado` (`id_estado`, `nombre_estado`) VALUES
(1, 'activo'),
(2, 'inactivo');

-- --------------------------------------------------------

--
-- Table structure for table `marca`
--

CREATE TABLE `marca` (
  `id_marca` int(11) NOT NULL,
  `codigo_marca` varchar(4) DEFAULT NULL,
  `nombre_marca` varchar(70) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `marca`
--

INSERT INTO `marca` (`id_marca`, `codigo_marca`, `nombre_marca`) VALUES
(1, '1234', 'hp'),
(2, '342', 'Asus'),
(3, 'w434', 'Epson'),
(8, '344', 'ASER'),
(9, '434', 'Lenovo'),
(10, '345', 'Intel'),
(11, '456', 'techno');

-- --------------------------------------------------------

--
-- Table structure for table `proveedor`
--

CREATE TABLE `proveedor` (
  `id_proveedor` int(11) NOT NULL,
  `codigo_proveedor` varchar(4) DEFAULT NULL,
  `nombreContacto_proveedor` varchar(70) NOT NULL,
  `correo_proveedor` varchar(120) NOT NULL,
  `telefono_proveedor` varchar(14) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `proveedor`
--

INSERT INTO `proveedor` (`id_proveedor`, `codigo_proveedor`, `nombreContacto_proveedor`, `correo_proveedor`, `telefono_proveedor`) VALUES
(1, '23', 'Claro', 'claro@claro.com.co', '3145453452'),
(2, 'RDF', 'Samsung', 'Samsung@gmail.com', '234567'),
(3, 'TC', 'Tech company', 'Techcompany@gmail.com', '3456765'),
(4, 'RSDF', 'SIRT', 'SIRT@gmail.com', '8965343'),
(5, 'Rsd', 'SFJI', 'SET@gmail.com', '3456456'),
(6, 'RDF', 'why not', 'wh@yahoo.es', '907884'),
(7, 'TC', 'Mobile', 'mobile@gmail.com', '5634323'),
(8, 'RSDF', 'Tigo', 'tigo@hotmail.com', '5678322');

-- --------------------------------------------------------

--
-- Table structure for table `tipoactivo_atributo`
--

CREATE TABLE `tipoactivo_atributo` (
  `id_tipo_activo` int(11) DEFAULT NULL,
  `id_atributos` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tipo_activo`
--

CREATE TABLE `tipo_activo` (
  `id_tipo_activo` int(11) NOT NULL,
  `code_tipo_activo` varchar(14) NOT NULL,
  `nombre_tipo_activo` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tipo_activo`
--

INSERT INTO `tipo_activo` (`id_tipo_activo`, `code_tipo_activo`, `nombre_tipo_activo`) VALUES
(1, '1234fs', 'Computador'),
(2, 'w3423', 'Movil'),
(3, 'CA', 'teclado'),
(4, 'RE', 'monitor'),
(5, 'De4', 'MaouseBluetooth'),
(6, '234', 'impresora'),
(7, '34b', 'Cable Red'),
(8, 'RDF', 'Rack'),
(9, 'HDcabl', 'Hdmi cable'),
(10, 'ADM', 'Silla'),
(11, 'ASD3', 'Adaptador Hdmi VGA'),
(12, 'SERD', ''),
(13, 'M', 'Mouse');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `email_user` varchar(120) NOT NULL,
  `psw_user` varchar(10) NOT NULL,
  `name_user` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `email_user`, `psw_user`, `name_user`) VALUES
(1, 'Juan', 'juan', 'juansevas992010@gmail.com'),
(2, 'juansevas992010@gmail.com', 'juansebas9', 'Juan'),
(3, 'danielegs_2107@gmail.com', 'danielsan', 'Daniel');

-- --------------------------------------------------------

--
-- Table structure for table `valores`
--

CREATE TABLE `valores` (
  `id_atributos` int(11) DEFAULT NULL,
  `id_activo` int(11) DEFAULT NULL,
  `valor` varchar(70) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activo`
--
ALTER TABLE `activo`
  ADD PRIMARY KEY (`id_activo`),
  ADD UNIQUE KEY `referencia_activo` (`referencia_activo`),
  ADD KEY `fk_activo_emnpleado` (`id_empleado`),
  ADD KEY `fk_activo_estado` (`id_estado`),
  ADD KEY `fk_activo_tipoActivo` (`id_tipo_activo`),
  ADD KEY `fk_activo_proveedor` (`id_proveedor`),
  ADD KEY `fk_activo_marca` (`id_marca`);

--
-- Indexes for table `atributos`
--
ALTER TABLE `atributos`
  ADD PRIMARY KEY (`id_atributos`),
  ADD UNIQUE KEY `code_atributos` (`code_atributos`),
  ADD UNIQUE KEY `nombre_atributos` (`nombre_atributos`);

--
-- Indexes for table `departamento`
--
ALTER TABLE `departamento`
  ADD PRIMARY KEY (`id_departamento`);

--
-- Indexes for table `empleado`
--
ALTER TABLE `empleado`
  ADD PRIMARY KEY (`id_empleado`),
  ADD UNIQUE KEY `documento_empleado` (`documento_empleado`),
  ADD UNIQUE KEY `correo_empleado` (`correo_empleado`),
  ADD KEY `fk_empleado_departamento` (`id_departamento`);

--
-- Indexes for table `estado`
--
ALTER TABLE `estado`
  ADD PRIMARY KEY (`id_estado`);

--
-- Indexes for table `marca`
--
ALTER TABLE `marca`
  ADD PRIMARY KEY (`id_marca`),
  ADD UNIQUE KEY `codigo_marca` (`codigo_marca`),
  ADD UNIQUE KEY `nombre_marca` (`nombre_marca`);

--
-- Indexes for table `proveedor`
--
ALTER TABLE `proveedor`
  ADD PRIMARY KEY (`id_proveedor`),
  ADD UNIQUE KEY `nombreContacto_proveedor` (`nombreContacto_proveedor`);

--
-- Indexes for table `tipoactivo_atributo`
--
ALTER TABLE `tipoactivo_atributo`
  ADD KEY `fk_tipoActivo_atributo_tipoActivo` (`id_tipo_activo`),
  ADD KEY `fk_tipoActivo_atributo_atributos` (`id_atributos`);

--
-- Indexes for table `tipo_activo`
--
ALTER TABLE `tipo_activo`
  ADD PRIMARY KEY (`id_tipo_activo`),
  ADD UNIQUE KEY `code_tipo_activo` (`code_tipo_activo`),
  ADD UNIQUE KEY `nombre_tipo_activo` (`nombre_tipo_activo`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `email_user` (`email_user`);

--
-- Indexes for table `valores`
--
ALTER TABLE `valores`
  ADD KEY `fk_valores_atributos` (`id_atributos`),
  ADD KEY `fk_valores_activo` (`id_activo`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activo`
--
ALTER TABLE `activo`
  MODIFY `id_activo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `atributos`
--
ALTER TABLE `atributos`
  MODIFY `id_atributos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `departamento`
--
ALTER TABLE `departamento`
  MODIFY `id_departamento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `empleado`
--
ALTER TABLE `empleado`
  MODIFY `id_empleado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `estado`
--
ALTER TABLE `estado`
  MODIFY `id_estado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `marca`
--
ALTER TABLE `marca`
  MODIFY `id_marca` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `proveedor`
--
ALTER TABLE `proveedor`
  MODIFY `id_proveedor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tipo_activo`
--
ALTER TABLE `tipo_activo`
  MODIFY `id_tipo_activo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `activo`
--
ALTER TABLE `activo`
  ADD CONSTRAINT `fk_activo_emnpleado` FOREIGN KEY (`id_empleado`) REFERENCES `empleado` (`id_empleado`),
  ADD CONSTRAINT `fk_activo_estado` FOREIGN KEY (`id_estado`) REFERENCES `estado` (`id_estado`),
  ADD CONSTRAINT `fk_activo_marca` FOREIGN KEY (`id_marca`) REFERENCES `marca` (`id_marca`),
  ADD CONSTRAINT `fk_activo_proveedor` FOREIGN KEY (`id_proveedor`) REFERENCES `proveedor` (`id_proveedor`),
  ADD CONSTRAINT `fk_activo_tipoActivo` FOREIGN KEY (`id_tipo_activo`) REFERENCES `tipo_activo` (`id_tipo_activo`);

--
-- Constraints for table `empleado`
--
ALTER TABLE `empleado`
  ADD CONSTRAINT `fk_empleado_departamento` FOREIGN KEY (`id_departamento`) REFERENCES `departamento` (`id_departamento`);

--
-- Constraints for table `tipoactivo_atributo`
--
ALTER TABLE `tipoactivo_atributo`
  ADD CONSTRAINT `fk_tipoActivo_atributo_atributos` FOREIGN KEY (`id_atributos`) REFERENCES `atributos` (`id_atributos`),
  ADD CONSTRAINT `fk_tipoActivo_atributo_tipoActivo` FOREIGN KEY (`id_tipo_activo`) REFERENCES `tipo_activo` (`id_tipo_activo`);

--
-- Constraints for table `valores`
--
ALTER TABLE `valores`
  ADD CONSTRAINT `fk_valores_activo` FOREIGN KEY (`id_activo`) REFERENCES `activo` (`id_activo`),
  ADD CONSTRAINT `fk_valores_atributos` FOREIGN KEY (`id_atributos`) REFERENCES `atributos` (`id_atributos`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
