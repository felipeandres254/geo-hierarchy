-- MySQL Dump

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "-05:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

-- --------------------------------------------------------

--
-- Dumping data for table `co_levels`
--

INSERT INTO `co_levels` (`id`, `name`) VALUES
(1, 'Departamento');

-- --------------------------------------------------------

--
-- Dumping data for table `co_elements`
--

INSERT INTO `co_elements` (`id`, `parent_id`, `level`, `name`) VALUES
(1, NULL, 1, 'Amazonas'),
(2, NULL, 1, 'Antioquia'),
(3, NULL, 1, 'Arauca'),
(4, NULL, 1, 'Atlántico'),
(5, NULL, 1, 'Bolívar'),
(6, NULL, 1, 'Boyacá'),
(7, NULL, 1, 'Caldas'),
(8, NULL, 1, 'Caquetá'),
(9, NULL, 1, 'Casanare'),
(10, NULL, 1, 'Cauca'),
(11, NULL, 1, 'Cesar'),
(12, NULL, 1, 'Chocó'),
(13, NULL, 1, 'Cundinamarca'),
(14, NULL, 1, 'Córdoba'),
(15, NULL, 1, 'Distrito Capital de Bogotá'),
(16, NULL, 1, 'Guainía'),
(17, NULL, 1, 'Guaviare'),
(18, NULL, 1, 'Huila'),
(19, NULL, 1, 'La Guajira'),
(20, NULL, 1, 'Magdalena'),
(21, NULL, 1, 'Meta'),
(22, NULL, 1, 'Nariño'),
(23, NULL, 1, 'Norte de Santander'),
(24, NULL, 1, 'Putumayo'),
(25, NULL, 1, 'Quindío'),
(26, NULL, 1, 'Risaralda'),
(27, NULL, 1, 'San Andrés y Providencia'),
(28, NULL, 1, 'Santander'),
(29, NULL, 1, 'Sucre'),
(30, NULL, 1, 'Tolima'),
(31, NULL, 1, 'Vaupés'),
(32, NULL, 1, 'Vichada');

-- --------------------------------------------------------

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
