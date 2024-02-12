-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 11-Fev-2024 às 23:57
-- Versão do servidor: 8.0.31
-- versão do PHP: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bd_hq`
--
CREATE DATABASE IF NOT EXISTS `bd_hq` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci;
USE `bd_hq`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_cliente`
--

DROP TABLE IF EXISTS `tb_cliente`;
CREATE TABLE IF NOT EXISTS `tb_cliente` (
  `codigo` int NOT NULL AUTO_INCREMENT,
  `email` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `senha` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `nome` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `adm` int NOT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `tb_cliente`
--

INSERT INTO `tb_cliente` (`codigo`, `email`, `senha`, `nome`, `adm`) VALUES
(1, 'a@gmail.com', '$2y$10$Ic6besX8mC8soCsMR24XKu76OXpYLZuz9IwlpgmijgJ68cg2kzoiK', 'HAHAHA', 1),
(2, 'oi@gmail.com', '$2y$10$BpBcT7CO9XM4Z9D6OQ4/y.ypnb6sgJ7sYspkDVIj.0zU08rhYiku.', 'OI', 1),
(3, 'bruno@gmail.com', '$2y$10$ZVnmoBTqej7BIseQYrQIfuIC2mQaSZITpRw8rsAvRisbwIvJ3kX52', 'Bruno', 1),
(4, 'user@gmail.com', '$2y$10$YmRBD6TPAqXHuPN7VZNyxevHamPyQrAXUJrvbM5hVqFbJqfZ6Gw6O', 'user', 0),
(5, 'teste@gmail.com', '$2y$10$BDVDu8ofvuhdBxGaRf/o1up94v7hlDKYdff3T/Jd8e/Nyno/vLSHK', 'Teste', 0),
(6, 'git@gmail.com', '$2y$10$N.sNqzHMlq8pe3EXz9musuNIHmZkeEOMUcm4NR7pubSZA9F3QvIU6', 'GitHub', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_hq`
--

DROP TABLE IF EXISTS `tb_hq`;
CREATE TABLE IF NOT EXISTS `tb_hq` (
  `codigo` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `preco` int NOT NULL,
  `foto` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tema` int NOT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=MyISAM AUTO_INCREMENT=61 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `tb_hq`
--

INSERT INTO `tb_hq` (`codigo`, `nome`, `preco`, `foto`, `tema`) VALUES
(20, 'One Piece volume103', 20, 'fotos/2f87517f052b454fdc72314dd178b643.jpg', 3),
(18, 'One Piece volume1', 20, 'fotos/7a615fdb274caa5eef9ddf83373b3760.jpg', 3),
(19, 'One Piece volume2', 20, 'fotos/c3ade25da4c375838a16a6674c98a953.jpg', 3),
(7, 'Early Years volume one', 70, 'fotos/064c653d61196217e5494c10c3690af6.jpg', 2),
(8, 'New Heights volume two', 70, 'fotos/5d62deb94d6596568d9378efd7c85bfa.jpg', 2),
(9, 'Backoning Fates volume three', 70, 'fotos/c138a6294cfe0f39889a4aa8e393aa4a.jpg', 2),
(10, 'Horizon´s Edge volume four', 70, 'fotos/5fb33c07dbc3164cb6f72ebeee6e0530.jpg', 2),
(11, 'Convergence volume five', 70, 'fotos/72df01356074ce7b66e9529762791668.jpg', 2),
(12, 'Transcendence volume six', 70, 'fotos/5206dbd3110eb8f6e8e185daaa09ce10.jpg', 2),
(13, 'Divergence volume seven', 70, 'fotos/481f1d52e7eb67e51180d95126e7a4ca.jpg', 2),
(14, 'Ascension volume eight', 70, 'fotos/e4e54c74ccc674e7ed1165267ea4396a.jpg', 2),
(15, 'Amongst The Fallen volume eight-five', 35, 'fotos/5a214cb13fa92263494e1e3fde21c32e.jpg', 2),
(16, 'Reckoning volume nine', 70, 'fotos/befe74af11c176495c1af2b98b008c65.jpg', 2),
(17, 'Retribution volume ten', 70, 'fotos/a77813e3a3afa43c7f8681154e30cecc.jpg', 2),
(21, 'One Piece volume3', 20, 'fotos/5bc5eddd36c490da12db83dafb2724b4.jpg', 3),
(22, 'One Piece volume4', 20, 'fotos/f04b7bd3160596ea88a2ef712aa92196.jpg', 3),
(23, 'One Piece volume5', 20, 'fotos/f29f51e3b1665303d26523732795c6dc.jpg', 3),
(24, 'One Piece volume6', 20, 'fotos/ae3e82c97cb9b9ab5028991e19509c35.jpg', 3),
(25, 'One Piece volume7', 20, 'fotos/63bfb18198405a4a920b2153b63a5158.jpg', 3),
(26, 'One Piece volume8', 20, 'fotos/ddf806fe9488e33d9392e791b2798d7b.jpg', 3),
(27, 'One Piece volume9', 20, 'fotos/ae4cc06285400544d80b276f10a2407c.jpg', 3),
(28, 'One piece volume10', 20, 'fotos/078b06761700f7d10cddc890cdf124b7.jpg', 3),
(29, 'Almanque SuperMan', 520, 'fotos/681675a3d1e69b857dbdd474f3bfb635.jpg', 0),
(30, 'Almanaque Batman', 520, 'fotos/1c6e225416e39f180a638136332a2251.jpg', 1),
(31, 'Almanaque Mandrake - O Grande Mágico', 400, 'fotos/e71c13eb9d410a17a1dba9dd4275489f.jpg', 0),
(32, 'Almanaque Homem-Aranha', 390, 'fotos/448137ba162a4c1ba4ed9eb40f031198.jpg', 0),
(33, 'Almanaque Capitão América', 390, 'fotos/5bb5ca8cf741d36a46ef3d15ea96db13.jpg', 0),
(34, 'Batman: Ano Um', 999, 'fotos/69ed68998c59c9e35af320568c53e722.jpg', 4),
(35, 'Batman: Xama', 999, 'fotos/6b7b7eb62a8ed425bcdc437603f3d3b9.jpg', 4),
(36, 'Batman: Gótico', 999, 'fotos/23907cd0ec85aa0db161b56234812552.jpg', 4),
(37, 'Batman A Piada Mortal', 100, 'fotos/07ec6150996f91f9a7fc6bf9ecde1b73.jpg', 4),
(38, 'Batman O Corte Das Corujas', 100, 'fotos/eb46ec082a82f07b832956ebfd1554c6.jpg', 4),
(39, 'Batman: O Longo Dia Das Bruxas', 999, 'fotos/031a03605816eac4e4137de4f18b58a5.jpg', 4),
(40, 'Batman: O Homem Que Ri', 999, 'fotos/a62d8b47757b9d6fa2698c6ba4a65af9.jpg', 4),
(41, 'Batman Corporação Batman', 1, 'fotos/563e7df8e2083f84ff397eab0b4b2c13.jpg', 4),
(42, 'Batman: Espelho Sombrio', 999, 'fotos/9119ebd9cb01ef0c0b6cd60bf1d57ca0.jpg', 4),
(43, 'Batman: Noites Em Gotham', 999, 'fotos/35a3f5802d0e4eeaf9e2892f3125fe21.jpg', 4),
(44, 'Turma Da Mônica : Uma Aventura Nada Secundária', 45, 'fotos/b33592f04631839b8add3816dc422988.jpg', 5),
(45, 'Turma Da Mônica : A Jornada Dos Lacaios', 90, 'fotos/aafc96443f1b8a8191a5007e24c58ecd.jpg', 5);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
