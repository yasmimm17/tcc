-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           10.4.24-MariaDB - mariadb.org binary distribution
-- OS do Servidor:               Win64
-- HeidiSQL Versão:              11.3.0.6295
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Copiando estrutura do banco de dados para keepit
DROP DATABASE IF EXISTS `keepit`;
CREATE DATABASE IF NOT EXISTS `keepit` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `keepit`;

-- Copiando estrutura para tabela keepit.inventario
DROP TABLE IF EXISTS `inventario`;
CREATE TABLE IF NOT EXISTS `inventario` (
  `id_invent` int(11) NOT NULL AUTO_INCREMENT,
  `qtde` int(11) NOT NULL,
  `id_mesa` int(11) DEFAULT NULL,
  `id_res` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_invent`),
  KEY `id_mesa` (`id_mesa`),
  KEY `id_res` (`id_res`),
  CONSTRAINT `inventario_ibfk_1` FOREIGN KEY (`id_mesa`) REFERENCES `tipo_mesa` (`id_mesa`),
  CONSTRAINT `inventario_ibfk_2` FOREIGN KEY (`id_res`) REFERENCES `restaurante` (`id_res`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

-- Copiando dados para a tabela keepit.inventario: ~1 rows (aproximadamente)
/*!40000 ALTER TABLE `inventario` DISABLE KEYS */;
INSERT INTO `inventario` (`id_invent`, `qtde`, `id_mesa`, `id_res`) VALUES
	(1, 10, 1, 4);
/*!40000 ALTER TABLE `inventario` ENABLE KEYS */;

-- Copiando estrutura para tabela keepit.localidade
DROP TABLE IF EXISTS `localidade`;
CREATE TABLE IF NOT EXISTS `localidade` (
  `cep` varchar(10) NOT NULL,
  `cidade` varchar(50) NOT NULL,
  `uf` char(2) NOT NULL,
  `ativo` tinyint(1) DEFAULT NULL,
  `logradouro` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`cep`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Copiando dados para a tabela keepit.localidade: ~7 rows (aproximadamente)
/*!40000 ALTER TABLE `localidade` DISABLE KEYS */;
INSERT INTO `localidade` (`cep`, `cidade`, `uf`, `ativo`, `logradouro`) VALUES
	(' 21820-005', 'Rio de Janeiro', 'RJ', 1, 'R. Fonseca - Bangu'),
	('12345-678', 'Marechal Hermes', 'RJ', 1, NULL),
	('20720-010', 'Rio de Janeiro', 'RJ', 1, 'R. Dias da Cruz - Méier'),
	('21810-200', 'Rio de Janeiro', '', 1, 'R. Tupiaçu - Padre Miguel'),
	('22630-010', 'Rio de Janeiro', 'RJ', 1, 'Av. Lúcio Costa - Barra da Tijuca'),
	('25025-420', 'Rio de Janeiro', 'RJ', 1, 'R. Rodolfo Dantas - Duque de Caxias'),
	('26580-250', 'Rio de Janeiro', 'RJ', 1, 'R. Ambósio Mesquita');
/*!40000 ALTER TABLE `localidade` ENABLE KEYS */;

-- Copiando estrutura para tabela keepit.marca_rede
DROP TABLE IF EXISTS `marca_rede`;
CREATE TABLE IF NOT EXISTS `marca_rede` (
  `id_marca` int(11) NOT NULL AUTO_INCREMENT,
  `nome_marca` varchar(45) NOT NULL,
  `logo_marca` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_marca`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4;

-- Copiando dados para a tabela keepit.marca_rede: ~6 rows (aproximadamente)
/*!40000 ALTER TABLE `marca_rede` DISABLE KEYS */;
INSERT INTO `marca_rede` (`id_marca`, `nome_marca`, `logo_marca`) VALUES
	(5, 'Paris 6', '5.png'),
	(19, 'Outback', '19.png'),
	(20, 'Parmê', '20.png'),
	(22, 'Nosso Lugar', '22.png'),
	(23, 'Chifa', '23.png'),
	(24, 'Mariah', '24.png');
/*!40000 ALTER TABLE `marca_rede` ENABLE KEYS */;

-- Copiando estrutura para tabela keepit.reserva_fixa
DROP TABLE IF EXISTS `reserva_fixa`;
CREATE TABLE IF NOT EXISTS `reserva_fixa` (
  `id_reserva` int(11) NOT NULL AUTO_INCREMENT,
  `horario` datetime NOT NULL,
  `qtde_pessoas` int(11) NOT NULL,
  `obs` text DEFAULT NULL,
  `cel_contato` varchar(15) NOT NULL,
  `id_res` int(11) DEFAULT NULL,
  `id_cli` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_reserva`),
  KEY `id_res` (`id_res`),
  KEY `id_cli` (`id_cli`),
  CONSTRAINT `reserva_fixa_ibfk_1` FOREIGN KEY (`id_res`) REFERENCES `restaurante` (`id_res`),
  CONSTRAINT `reserva_fixa_ibfk_2` FOREIGN KEY (`id_cli`) REFERENCES `usuario` (`id_cli`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4;

-- Copiando dados para a tabela keepit.reserva_fixa: ~4 rows (aproximadamente)
/*!40000 ALTER TABLE `reserva_fixa` DISABLE KEYS */;
INSERT INTO `reserva_fixa` (`id_reserva`, `horario`, `qtde_pessoas`, `obs`, `cel_contato`, `id_res`, `id_cli`) VALUES
	(11, '2023-12-07 19:30:00', 7, '', '(21) 99999-9999', 2, 14),
	(13, '2023-12-03 13:00:00', 10, '', '(21) 99876-5443', 8, 26),
	(15, '2023-11-29 08:40:00', 5, '', '(21) 98765-4321', 6, 25),
	(17, '2023-11-17 07:52:00', 25, 'cadeiras altas', '(21) 99999-9999', 2, 25),
	(21, '2023-11-24 23:23:00', 3, 'nada', '(44) 44444-4444', 2, 25),
	(22, '2023-11-30 00:25:00', 6, 'cadeira', '(45) 35646-4778', 3, 25),
	(23, '2023-11-23 20:34:00', 4, 'ererererere', '(21) 54545-4454', 2, 25);
/*!40000 ALTER TABLE `reserva_fixa` ENABLE KEYS */;

-- Copiando estrutura para tabela keepit.restaurante
DROP TABLE IF EXISTS `restaurante`;
CREATE TABLE IF NOT EXISTS `restaurante` (
  `id_res` int(11) NOT NULL AUTO_INCREMENT,
  `nome_res` varchar(100) NOT NULL,
  `nr_res` varchar(20) DEFAULT NULL,
  `comp_res` varchar(100) DEFAULT NULL,
  `tipo_sede_res` tinyint(4) DEFAULT NULL,
  `cep` varchar(10) NOT NULL,
  `id_marca` int(11) NOT NULL,
  `ativo` tinyint(1) DEFAULT NULL,
  `site` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id_res`),
  KEY `cep` (`cep`),
  KEY `id_marca` (`id_marca`),
  CONSTRAINT `restaurante_ibfk_1` FOREIGN KEY (`cep`) REFERENCES `localidade` (`cep`),
  CONSTRAINT `restaurante_ibfk_2` FOREIGN KEY (`id_marca`) REFERENCES `marca_rede` (`id_marca`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4;

-- Copiando dados para a tabela keepit.restaurante: ~6 rows (aproximadamente)
/*!40000 ALTER TABLE `restaurante` DISABLE KEYS */;
INSERT INTO `restaurante` (`id_res`, `nome_res`, `nr_res`, `comp_res`, `tipo_sede_res`, `cep`, `id_marca`, `ativo`, `site`) VALUES
	(2, 'Outback Bangu Shopping', '3210', 'Próximo à saída do shopping', 0, '12345-678', 19, 1, 'outback'),
	(3, 'Parmê Méier', '450', '', 0, '20720-010', 20, 1, 'parme'),
	(4, 'Mariah Padre Miguel', '23', NULL, 1, '21810-200', 24, 1, 'mariah'),
	(6, 'Chifa Copacabana', '50', 'em frente ao shopping', 0, '25025-420', 23, 1, 'chifa'),
	(7, 'Paris 6 Barra', '2415', '', 0, '22630-010', 5, 1, 'paris6'),
	(8, 'Nosso Lugar Mesquita', '720', '', 1, '26580-250', 22, 1, 'nosso');
/*!40000 ALTER TABLE `restaurante` ENABLE KEYS */;

-- Copiando estrutura para tabela keepit.tipo_mesa
DROP TABLE IF EXISTS `tipo_mesa`;
CREATE TABLE IF NOT EXISTS `tipo_mesa` (
  `id_mesa` int(11) NOT NULL AUTO_INCREMENT,
  `lugares_mesa` int(11) NOT NULL,
  PRIMARY KEY (`id_mesa`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

-- Copiando dados para a tabela keepit.tipo_mesa: ~1 rows (aproximadamente)
/*!40000 ALTER TABLE `tipo_mesa` DISABLE KEYS */;
INSERT INTO `tipo_mesa` (`id_mesa`, `lugares_mesa`) VALUES
	(1, 10);
/*!40000 ALTER TABLE `tipo_mesa` ENABLE KEYS */;

-- Copiando estrutura para tabela keepit.usuario
DROP TABLE IF EXISTS `usuario`;
CREATE TABLE IF NOT EXISTS `usuario` (
  `id_cli` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `senha` varchar(100) NOT NULL,
  `nivel` int(1) DEFAULT NULL,
  `ativo` tinyint(1) DEFAULT NULL,
  `foto` varchar(220) DEFAULT NULL,
  PRIMARY KEY (`id_cli`),
  KEY `nivel` (`nivel`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8mb4;

-- Copiando dados para a tabela keepit.usuario: ~9 rows (aproximadamente)
/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
INSERT INTO `usuario` (`id_cli`, `nome`, `email`, `senha`, `nivel`, `ativo`, `foto`) VALUES
	(12, 'Yasmim', 'yasmim@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 3, 1, NULL),
	(14, 'Claudinei Inácio Barbosa', 'barbosaclaudinei47@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 1, 1, NULL),
	(15, 'Raimunda da Lima', 'raimunda22@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 2, 1, NULL),
	(18, 'Bryan Almeida Barbosa', 'bryan@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 1, 1, NULL),
	(21, 'Luiza Gomes', 'lulu@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 1, 1, ''),
	(22, 'Isabel Pereira', 'bebel@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 2, 1, ''),
	(25, 'Letícia Pereira', 'lele@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 1, 1, ''),
	(26, 'Eloisa Helena', 'elo@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 1, 1, ''),
	(27, 'Raphaela Lopes e Santos', 'rapa@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 1, 1, '');
/*!40000 ALTER TABLE `usuario` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
