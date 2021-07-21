-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         10.4.19-MariaDB - mariadb.org binary distribution
-- SO del servidor:              Win64
-- HeidiSQL Versión:             11.3.0.6295
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Volcando estructura para tabla hula_wings.bajon
CREATE TABLE IF NOT EXISTS `bajon` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  `cantidad` varchar(50) NOT NULL,
  `descripcion` varchar(500) NOT NULL,
  `precio` int(11) NOT NULL,
  `img` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

-- Volcando datos para la tabla hula_wings.bajon: ~2 rows (aproximadamente)
DELETE FROM `bajon`;
/*!40000 ALTER TABLE `bajon` DISABLE KEYS */;
INSERT INTO `bajon` (`id`, `nombre`, `cantidad`, `descripcion`, `precio`, `img`) VALUES
	(1, 'Alitas', '5 Piezas', '', 65, 'alitas.png'),
	(2, 'Alitas', '10 Piezas', '', 120, 'alitas.png');
/*!40000 ALTER TABLE `bajon` ENABLE KEYS */;

-- Volcando estructura para tabla hula_wings.drinks
CREATE TABLE IF NOT EXISTS `drinks` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) NOT NULL,
  `descripcion` varchar(400) NOT NULL,
  `desc_corta` varchar(200) NOT NULL,
  `img` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

-- Volcando datos para la tabla hula_wings.drinks: ~3 rows (aproximadamente)
DELETE FROM `drinks`;
/*!40000 ALTER TABLE `drinks` DISABLE KEYS */;
INSERT INTO `drinks` (`id`, `nombre`, `descripcion`, `desc_corta`, `img`) VALUES
	(1, 'Mojito', 'El preferido por los piratas para evitar el escorbuto llega a ti con la mezcla perfecta de limon, azucar y la frescura de la hierbabuena, sabemos que necesitas uno aunque no seas un "Pirata" Arrgh!', 'El cubano favorito. 😎', 'mojito.png'),
	(2, 'Piña Colada', 'La historia más fiable sobre el cóctel cuenta que su padre fue Ramón Marrero, barman del hotel Caribe Hilton de Puerto Rico en el año 1954. En medio del boom de los combinados tropicales del tipo Mai Tai, procedentes de la cultura polinesia, los caribeños empezaron a crear mezclas por aquella época revolucionarias. Preparados como la Piña Colada, junto a la batidora, supusieron la mayor revolución', 'Puro sabor caribeño.', 'pngegg.png'),
	(3, 'Michelada', 'Una popular versión de su origen apunta a la ciudad de San Luis Potosí, concretamente al Club Deportivo Potosino, pues se cuenta que un socio de nombre Michel Ésper (originario de Ciudad Valles) acostumbraba pedir una cerveza con limón, hielo, sal y popote en una copa llamada chabela como si fuera una limonada de cerveza, eventualmente originando el nombre de la bebida (En aquel entonces nadie tom', 'La clásica atrevida.', 'miche.png'),
	(4, 'Morita', '', '¿Cerveza y vino?', 'morita.png');
/*!40000 ALTER TABLE `drinks` ENABLE KEYS */;

-- Volcando estructura para tabla hula_wings.votaciones
CREATE TABLE IF NOT EXISTS `votaciones` (
  `elemento_votado` int(10) NOT NULL,
  `valoracion` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Volcando datos para la tabla hula_wings.votaciones: ~0 rows (aproximadamente)
DELETE FROM `votaciones`;
/*!40000 ALTER TABLE `votaciones` DISABLE KEYS */;
/*!40000 ALTER TABLE `votaciones` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
