-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 11-Nov-2020 às 04:58
-- Versão do servidor: 10.4.14-MariaDB
-- versão do PHP: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `curso_estoque`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `categoria`
--

CREATE TABLE `categoria` (
  `id_cat` int(11) NOT NULL,
  `cod_cat` int(11) DEFAULT NULL,
  `nome_cat` varchar(100) DEFAULT NULL,
  `desc_cat` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `categoria`
--

INSERT INTO `categoria` (`id_cat`, `cod_cat`, `nome_cat`, `desc_cat`) VALUES
(1, 1, 'Periféricos', 'Teclado, Mouse, Mousepad, Fone de Ouvido e etc...'),
(2, 2, 'Hardware', 'Placa-mãe, Processador, Memória, Fonte e etc...');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produto`
--

CREATE TABLE `produto` (
  `id_prod` int(11) NOT NULL,
  `cod_prod` int(11) NOT NULL,
  `desc_prod` varchar(200) NOT NULL,
  `cat_prod` varchar(100) NOT NULL,
  `qtd_prod` int(11) NOT NULL,
  `forn_prod` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `produto`
--

INSERT INTO `produto` (`id_prod`, `cod_prod`, `desc_prod`, `cat_prod`, `qtd_prod`, `forn_prod`) VALUES
(1, 1, 'Teclado mecânico Redragon Mitra RGB - Switch Brown', 'Periféricos', 12, 'Pauta'),
(2, 2, 'Placa de Vídeo GTX 1660 OC', 'Hardware', 1, 'Braile'),
(3, 3, 'Notebook Acer Aspire 3', 'Hardware', 1, 'Aldo'),
(4, 4, 'Monitor Samsung 21,5\"', 'Hardware', 2, 'Braile'),
(5, 5, '123', 'Periféricos', 123, 'Pauta'),
(6, 6, '123asdfgsadf', 'Periféricos', 123, 'Pauta'),
(7, 7, 'Suporte Headset', 'Gadgets', 1, 'Braile'),
(8, 8, 'Teste', 'Hardware', 123, 'Aldo');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id_cat`);

--
-- Índices para tabela `produto`
--
ALTER TABLE `produto`
  ADD PRIMARY KEY (`id_prod`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id_cat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `produto`
--
ALTER TABLE `produto`
  MODIFY `id_prod` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
