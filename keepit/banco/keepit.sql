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

-- Copiando estrutura para tabela keepit.usuario
DROP TABLE IF EXISTS `usuario`;
CREATE TABLE IF NOT EXISTS `usuario` (
  `id_cli` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `senha` varchar(100) NOT NULL,
  `nivel` int(1) DEFAULT NULL,
  `ativo` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id_cli`),
  KEY `nivel` (`nivel`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Copiando dados para a tabela keepit.usuario: ~6 rows (aproximadamente)
INSERT INTO `usuario` (`id_cli`, `nome`, `email`, `senha`, `nivel`, `ativo`) VALUES
	(12, 'Yasmim Almeida Barbosa', 'yas@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 3, 1),
	(14, 'Cláudio Rodrigues', 'claudio@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 1, 1),
	(15, 'Raimunda da Lima', 'raimunda@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 2, 1),
	(16, 'Rayssa Lopes', 'ray@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 1, 1),
	(17, 'Bruno Coelho', 'bruno@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 1, 1),
	(18, 'Maria Frambach', 'maria@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 1, 1);

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
