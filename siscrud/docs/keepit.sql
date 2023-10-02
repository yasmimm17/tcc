-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           10.4.28-MariaDB - mariadb.org binary distribution
-- OS do Servidor:               Win64
-- HeidiSQL Versão:              12.5.0.6677
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Copiando estrutura do banco de dados para keepit
DROP DATABASE IF EXISTS `keepit`;
CREATE DATABASE IF NOT EXISTS `keepit` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */;
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Exportação de dados foi desmarcado.

-- Copiando estrutura para tabela keepit.localidade
DROP TABLE IF EXISTS `localidade`;
CREATE TABLE IF NOT EXISTS `localidade` (
  `cep` varchar(10) NOT NULL,
  `cidade` varchar(50) NOT NULL,
  `uf` char(2) NOT NULL,
  `ativo` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`cep`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Exportação de dados foi desmarcado.

-- Copiando estrutura para tabela keepit.marca_rede
DROP TABLE IF EXISTS `marca_rede`;
CREATE TABLE IF NOT EXISTS `marca_rede` (
  `id_marca` int(11) NOT NULL AUTO_INCREMENT,
  `nome_marca` varchar(45) NOT NULL,
  `logo_marca` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id_marca`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Exportação de dados foi desmarcado.

-- Copiando estrutura para tabela keepit.reserva_fixa
DROP TABLE IF EXISTS `reserva_fixa`;
CREATE TABLE IF NOT EXISTS `reserva_fixa` (
  `id_reserva` int(11) NOT NULL AUTO_INCREMENT,
  `horario` datetime NOT NULL,
  `qtde_pessoas` int(11) NOT NULL,
  `obs` text DEFAULT NULL,
  `cel_contato` varchar(15) NOT NULL,
  `situacao_reserva` char(1) NOT NULL,
  `id_res` int(11) DEFAULT NULL,
  `id_cli` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_reserva`),
  KEY `id_res` (`id_res`),
  KEY `id_cli` (`id_cli`),
  CONSTRAINT `reserva_fixa_ibfk_1` FOREIGN KEY (`id_res`) REFERENCES `restaurante` (`id_res`),
  CONSTRAINT `reserva_fixa_ibfk_2` FOREIGN KEY (`id_cli`) REFERENCES `usuario` (`id_cli`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Exportação de dados foi desmarcado.

-- Copiando estrutura para tabela keepit.reserva_ondemand
DROP TABLE IF EXISTS `reserva_ondemand`;
CREATE TABLE IF NOT EXISTS `reserva_ondemand` (
  `idreserva_ondemand` int(11) NOT NULL AUTO_INCREMENT,
  `qtde_pessoas` int(11) NOT NULL,
  `cel_contato` varchar(15) NOT NULL,
  `sit_reserva_ond` char(1) NOT NULL,
  `id_cli` int(11) NOT NULL,
  `id_res` int(11) NOT NULL,
  PRIMARY KEY (`idreserva_ondemand`),
  KEY `id_cli` (`id_cli`),
  KEY `id_res` (`id_res`),
  CONSTRAINT `reserva_ondemand_ibfk_1` FOREIGN KEY (`id_cli`) REFERENCES `usuario` (`id_cli`),
  CONSTRAINT `reserva_ondemand_ibfk_2` FOREIGN KEY (`id_res`) REFERENCES `restaurante` (`id_res`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Exportação de dados foi desmarcado.

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
  PRIMARY KEY (`id_res`),
  KEY `cep` (`cep`),
  KEY `id_marca` (`id_marca`),
  CONSTRAINT `restaurante_ibfk_1` FOREIGN KEY (`cep`) REFERENCES `localidade` (`cep`),
  CONSTRAINT `restaurante_ibfk_2` FOREIGN KEY (`id_marca`) REFERENCES `marca_rede` (`id_marca`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Exportação de dados foi desmarcado.

-- Copiando estrutura para tabela keepit.tipo_mesa
DROP TABLE IF EXISTS `tipo_mesa`;
CREATE TABLE IF NOT EXISTS `tipo_mesa` (
  `id_mesa` int(11) NOT NULL AUTO_INCREMENT,
  `lugares_mesa` int(11) NOT NULL,
  PRIMARY KEY (`id_mesa`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Exportação de dados foi desmarcado.

-- Copiando estrutura para tabela keepit.usuario
DROP TABLE IF EXISTS `usuario`;
CREATE TABLE IF NOT EXISTS `usuario` (
  `id_cli` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `senha` varchar(100) NOT NULL,
  `cep` varchar(10) NOT NULL DEFAULT '',
  `nivel` int(1) DEFAULT NULL,
  `ativo` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id_cli`),
  KEY `cep` (`cep`),
  KEY `nivel` (`nivel`),
  CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`cep`) REFERENCES `localidade` (`cep`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Exportação de dados foi desmarcado.

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
