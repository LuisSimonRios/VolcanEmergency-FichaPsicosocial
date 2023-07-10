-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 14, 2023 at 09:21 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ficha_psicosocial`
--

-- --------------------------------------------------------

--
-- Table structure for table `form1`
--

CREATE TABLE `form1` (
  `id` int(11) NOT NULL,
  `numeroFicha` int(200) NOT NULL,
  `fechaAtencion` date NOT NULL,
  `nombreProfesional` int(150) NOT NULL,
  `profesion` varchar(150) NOT NULL,
  `institucion` varchar(150) NOT NULL,
  `tipoEvento` varchar(150) NOT NULL,
  `tipoPoblacion` varchar(150) NOT NULL,
  `referidoPor` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `form1`
--

INSERT INTO `form1` (`id`, `numeroFicha`, `fechaAtencion`, `nombreProfesional`, `profesion`, `institucion`, `tipoEvento`, `tipoPoblacion`, `referidoPor`) VALUES
(1, 0, '2023-06-02', 0, 'sadf', 'sdfsad', 'sdafsd', 'sdafs', 'sadfsd'),
(2, 0, '2023-06-02', 0, 'sadf', 'sdfsad', 'sdafsd', 'sdafs', 'sadfsd'),
(3, 102, '2023-06-14', 0, 'comerciante', 'Alcaldia', 'varios', '', 'Simon'),
(4, 0, '2023-06-14', 0, 'sdafsd', 'dasfasd', 'sdafadsfsd', 'sadf', 'sdafads'),
(5, 0, '2023-06-14', 0, 'sdafsd', 'dasfasd', 'sdafadsfsd', 'sadf', 'sdafads'),
(6, 0, '2023-06-06', 0, 'asfasd', 'asfsd', 'sdafsadfs', 'sdafads', 'sadfds'),
(7, 104, '2023-06-15', 0, 'profesion', 'prueba prueba', 'prueba', '', 'prueba');

-- --------------------------------------------------------

--
-- Table structure for table `form2`
--

CREATE TABLE `form2` (
  `id` int(11) NOT NULL,
  `nombreAfectado` varchar(150) NOT NULL,
  `edadPaciente` int(11) NOT NULL,
  `documento` int(15) NOT NULL,
  `direccion` varchar(150) NOT NULL,
  `comuna` varchar(150) NOT NULL,
  `telefono` int(15) NOT NULL,
  `ocupacion` varchar(150) NOT NULL,
  `procedencia` varchar(150) NOT NULL,
  `eps` varchar(150) NOT NULL,
  `lugarIntervencion` varchar(150) NOT NULL,
  `sexo` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `form2`
--

INSERT INTO `form2` (`id`, `nombreAfectado`, `edadPaciente`, `documento`, `direccion`, `comuna`, `telefono`, `ocupacion`, `procedencia`, `eps`, `lugarIntervencion`, `sexo`) VALUES
(1, 'asdf', 32, 323, 'fdsfas', 'dasf', 2323, 'dsfsda', 'sdfa', 'sdafsd', 'safsd', 'on'),
(2, 'Luis Simón Rios', 24, 1053869739, 'CRA 7A # 58-04', 'Norte', 2147483647, 'Ingeniero', 'Local', 'SURA', 'SURA', 'on'),
(3, 'ada', 23, 2121, 'sadfas', 'dsfsda', 32323, 'asdfsa', 'dsafdsf', 'sdfsda', 'safasdfsa', 'on');

-- --------------------------------------------------------

--
-- Table structure for table `form3`
--

CREATE TABLE `form3` (
  `id` int(11) NOT NULL,
  `nombre1` varchar(150) NOT NULL,
  `documento1` int(150) NOT NULL,
  `eps1` varchar(150) NOT NULL,
  `edad1` int(150) NOT NULL,
  `relacion1` varchar(150) NOT NULL,
  `telefono1` int(150) NOT NULL,
  `nombre2` varchar(150) NOT NULL,
  `documento2` int(150) NOT NULL,
  `eps2` varchar(150) NOT NULL,
  `edad2` int(150) NOT NULL,
  `relacion2` varchar(150) NOT NULL,
  `telefono2` int(150) NOT NULL,
  `nombre3` varchar(150) NOT NULL,
  `documento3` int(150) NOT NULL,
  `eps3` varchar(150) NOT NULL,
  `edad3` int(150) NOT NULL,
  `relacion3` varchar(150) NOT NULL,
  `telefono3` int(150) NOT NULL,
  `nombre4` varchar(150) NOT NULL,
  `documento4` int(150) NOT NULL,
  `eps4` varchar(150) NOT NULL,
  `edad4` int(150) NOT NULL,
  `relacion4` varchar(150) NOT NULL,
  `telefono4` int(150) NOT NULL,
  `nombre5` varchar(150) NOT NULL,
  `documento5` int(150) NOT NULL,
  `eps5` varchar(150) NOT NULL,
  `edad5` int(150) NOT NULL,
  `relacion5` varchar(150) NOT NULL,
  `telefono5` int(150) NOT NULL,
  `nombre6` varchar(150) NOT NULL,
  `documento6` int(150) NOT NULL,
  `eps6` varchar(150) NOT NULL,
  `edad6` int(150) NOT NULL,
  `relacion6` varchar(150) NOT NULL,
  `telefono6` int(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `form3`
--

INSERT INTO `form3` (`id`, `nombre1`, `documento1`, `eps1`, `edad1`, `relacion1`, `telefono1`, `nombre2`, `documento2`, `eps2`, `edad2`, `relacion2`, `telefono2`, `nombre3`, `documento3`, `eps3`, `edad3`, `relacion3`, `telefono3`, `nombre4`, `documento4`, `eps4`, `edad4`, `relacion4`, `telefono4`, `nombre5`, `documento5`, `eps5`, `edad5`, `relacion5`, `telefono5`, `nombre6`, `documento6`, `eps6`, `edad6`, `relacion6`, `telefono6`) VALUES
(1, 'ddsgdf', 3434, 'dsfg', 343, 'sdfg', 343, 'sdfg', 343, 'dsfgfd', 34, 'sdfg', 34, 'dsfg', 434, 'dfsgd', 34, 'sdg', 34, 'sdfg', 232, 'dsfg', 34, 'fds', 34, 'dsfg', 23, 'dfsgds', 34, 'dsg', 34, 'dsfgd', 2323, 'dfgsd', 343, 'dsfgd', 343),
(2, 'sdf', 3434, 'sgdsf', 434, 'sdfgfd', 34343, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0, '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `form4`
--

CREATE TABLE `form4` (
  `id` int(11) NOT NULL,
  `nombre1` varchar(150) NOT NULL,
  `parentesco1` varchar(150) NOT NULL,
  `telefono1` int(150) NOT NULL,
  `nombre2` varchar(150) NOT NULL,
  `parentesco2` varchar(150) NOT NULL,
  `telefono2` int(150) NOT NULL,
  `nombre3` varchar(150) NOT NULL,
  `parentesco3` varchar(150) NOT NULL,
  `telefono3` int(150) NOT NULL,
  `nombre4` varchar(150) NOT NULL,
  `parentesco4` varchar(150) NOT NULL,
  `telefono4` int(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `form4`
--

INSERT INTO `form4` (`id`, `nombre1`, `parentesco1`, `telefono1`, `nombre2`, `parentesco2`, `telefono2`, `nombre3`, `parentesco3`, `telefono3`, `nombre4`, `parentesco4`, `telefono4`) VALUES
(1, 'sdfsaa', 'asdfasd', 2323, 'sadfs', 'dsafs', 0, 'asdfsd', 'adsfs', 0, 'sadfsd', 'dsafds', 23233);

-- --------------------------------------------------------

--
-- Table structure for table `form5`
--

CREATE TABLE `form5` (
  `id` int(11) NOT NULL,
  `tipoIntervencion` varchar(150) NOT NULL,
  `condicionPrevia` varchar(150) NOT NULL,
  `atencionPsicosocial` varchar(150) NOT NULL,
  `accionesRealizar` varchar(150) NOT NULL,
  `observacionFinal` varchar(150) NOT NULL,
  `requiereSeguimiento` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `form5`
--

INSERT INTO `form5` (`id`, `tipoIntervencion`, `condicionPrevia`, `atencionPsicosocial`, `accionesRealizar`, `observacionFinal`, `requiereSeguimiento`) VALUES
(1, 'on', 'sdafsd', '', '', '', 'on'),
(2, 'on', 'adsfasd', 'on', '', '', 'on');

-- --------------------------------------------------------

--
-- Table structure for table `form6`
--

CREATE TABLE `form6` (
  `id` int(11) NOT NULL,
  `numeroFicha` int(150) NOT NULL,
  `fechaAtencion` varchar(150) NOT NULL,
  `nombreProfesional` varchar(150) NOT NULL,
  `profesion` varchar(150) NOT NULL,
  `institucion` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `form6`
--

INSERT INTO `form6` (`id`, `numeroFicha`, `fechaAtencion`, `nombreProfesional`, `profesion`, `institucion`) VALUES
(1, 2323, '2023-06-05', 'sfsd', 'sadfad', 'ddsafdsf');

-- --------------------------------------------------------

--
-- Table structure for table `form7`
--

CREATE TABLE `form7` (
  `id` int(11) NOT NULL,
  `nombres` varchar(150) NOT NULL,
  `direccion` date NOT NULL,
  `telefono` int(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `form7`
--

INSERT INTO `form7` (`id`, `nombres`, `direccion`, `telefono`) VALUES
(1, 'sadfsa', '0000-00-00', 23232);

-- --------------------------------------------------------

--
-- Table structure for table `form8`
--

CREATE TABLE `form8` (
  `id` int(11) NOT NULL,
  `nombre1` varchar(150) NOT NULL,
  `documento1` int(150) NOT NULL,
  `eps1` varchar(150) NOT NULL,
  `edad1` int(150) NOT NULL,
  `relacion1` varchar(150) NOT NULL,
  `nombre2` varchar(150) NOT NULL,
  `documento2` int(150) NOT NULL,
  `eps2` varchar(150) NOT NULL,
  `edad2` int(150) NOT NULL,
  `relacion2` varchar(150) NOT NULL,
  `nombre3` varchar(50) NOT NULL,
  `documento3` int(150) NOT NULL,
  `eps3` varchar(150) NOT NULL,
  `edad3` int(150) NOT NULL,
  `relacion3` varchar(150) NOT NULL,
  `nombre4` varchar(150) NOT NULL,
  `documento4` int(150) NOT NULL,
  `eps4` varchar(150) NOT NULL,
  `edad4` int(150) NOT NULL,
  `relacion4` varchar(150) NOT NULL,
  `nombre5` varchar(150) NOT NULL,
  `documento5` int(150) NOT NULL,
  `eps5` varchar(150) NOT NULL,
  `edad5` int(150) NOT NULL,
  `relacion5` varchar(150) NOT NULL,
  `nombre6` varchar(150) NOT NULL,
  `documento6` int(150) NOT NULL,
  `eps6` varchar(150) NOT NULL,
  `edad6` int(150) NOT NULL,
  `relacion6` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `form8`
--

INSERT INTO `form8` (`id`, `nombre1`, `documento1`, `eps1`, `edad1`, `relacion1`, `nombre2`, `documento2`, `eps2`, `edad2`, `relacion2`, `nombre3`, `documento3`, `eps3`, `edad3`, `relacion3`, `nombre4`, `documento4`, `eps4`, `edad4`, `relacion4`, `nombre5`, `documento5`, `eps5`, `edad5`, `relacion5`, `nombre6`, `documento6`, `eps6`, `edad6`, `relacion6`) VALUES
(1, 'sdfs', 323, 'sfsd', 323, 'sdfds', '', 0, '', 0, '', '', 0, '', 0, '', '', 0, '', 0, '', '', 0, '', 0, '', '', 0, '', 0, ''),
(2, 'sdf', 2323, 'asfsd', 2323, 'sdafasd', 'fsadfsd', 2323, 'sdf', 23, 'asdf', 'dsafsd', 232, 'sadf', 232, 'sdfs', 'sdafs', 23, 'sadfs', 3, 'dsafd', 'safsd', 23, 'asfs', 2, 'safds', 'sdafsd', 23, 'sadfasd', 23, 'asfsd');

-- --------------------------------------------------------

--
-- Table structure for table `form9`
--

CREATE TABLE `form9` (
  `id` int(11) NOT NULL,
  `tipoIntervencion` varchar(150) NOT NULL,
  `condicionPrevia` varchar(150) NOT NULL,
  `atencionPsicosocial` varchar(150) NOT NULL,
  `accionesRealizar` varchar(150) NOT NULL,
  `observacionFinal` varchar(150) NOT NULL,
  `requiereSeguimiento` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `form9`
--

INSERT INTO `form9` (`id`, `tipoIntervencion`, `condicionPrevia`, `atencionPsicosocial`, `accionesRealizar`, `observacionFinal`, `requiereSeguimiento`) VALUES
(1, 'on', 'adsfdsafa', 'on', '', '', 'on'),
(2, 'on', 'asfdasd', 'on', '', '', 'on');

-- --------------------------------------------------------

--
-- Table structure for table `form10`
--

CREATE TABLE `form10` (
  `id` int(11) NOT NULL,
  `nombreVictima` varchar(150) NOT NULL,
  `edad` int(150) NOT NULL,
  `sexo` varchar(150) NOT NULL,
  `parentesco` varchar(150) NOT NULL,
  `situacionActual` varchar(150) NOT NULL,
  `gestionRealizada` varchar(150) NOT NULL,
  `accionesRealizar` varchar(150) NOT NULL,
  `observaciones` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `form10`
--

INSERT INTO `form10` (`id`, `nombreVictima`, `edad`, `sexo`, `parentesco`, `situacionActual`, `gestionRealizada`, `accionesRealizar`, `observaciones`) VALUES
(1, 'sadf', 232, 'saf', 'sadfs', 'sdfaasd', 'dsafasd', 'sdafsd', 'sadfds'),
(2, 'sdafsad', 23, 'sfs', 'asdf', 'sdfs', 'sadf', 'sdfa', 'sdafds'),
(3, 'dsfas', 2323, 'dadsd', 'asdfads', 'sdfads', 'dsfsad', 'dsfsd', 'dasfsd');

-- --------------------------------------------------------

--
-- Table structure for table `form11`
--

CREATE TABLE `form11` (
  `id` int(11) NOT NULL,
  `tarjetaProfesional` varchar(150) NOT NULL,
  `documentoUsuario` int(150) NOT NULL,
  `firmas` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `form11`
--

INSERT INTO `form11` (`id`, `tarjetaProfesional`, `documentoUsuario`, `firmas`) VALUES
(1, '34344', 343434, ''),
(2, 'dsfsd', 0, ''),
(3, 'dsfsd', 0, ''),
(4, '111111111111111', 232332, ''),
(5, '11111111111111111', 2323, ''),
(6, '11111111111111111', 2323, ''),
(7, '11111111111111111', 2323, ''),
(8, '11111111111111111', 2323, ''),
(9, '22222222222222', 232, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `form1`
--
ALTER TABLE `form1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `form2`
--
ALTER TABLE `form2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `form3`
--
ALTER TABLE `form3`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `form4`
--
ALTER TABLE `form4`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `form5`
--
ALTER TABLE `form5`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `form6`
--
ALTER TABLE `form6`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `form7`
--
ALTER TABLE `form7`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `form8`
--
ALTER TABLE `form8`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `form9`
--
ALTER TABLE `form9`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `form10`
--
ALTER TABLE `form10`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `form11`
--
ALTER TABLE `form11`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `form1`
--
ALTER TABLE `form1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `form2`
--
ALTER TABLE `form2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `form3`
--
ALTER TABLE `form3`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `form4`
--
ALTER TABLE `form4`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `form5`
--
ALTER TABLE `form5`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `form6`
--
ALTER TABLE `form6`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `form7`
--
ALTER TABLE `form7`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `form8`
--
ALTER TABLE `form8`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `form9`
--
ALTER TABLE `form9`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `form10`
--
ALTER TABLE `form10`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `form11`
--
ALTER TABLE `form11`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
