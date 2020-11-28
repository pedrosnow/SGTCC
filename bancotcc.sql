-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 26-Nov-2020 às 21:39
-- Versão do servidor: 10.4.14-MariaDB
-- versão do PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bancotcc`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_login`
--

CREATE TABLE `tb_login` (
  `id_login` int(11) NOT NULL,
  `usuario` varchar(255) DEFAULT NULL,
  `senha` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tb_login`
--

INSERT INTO `tb_login` (`id_login`, `usuario`, `senha`) VALUES
(1, 'pedro', '12');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_orientacao`
--

CREATE TABLE `tb_orientacao` (
  `id_orientacao` int(11) NOT NULL,
  `orientador` varchar(255) DEFAULT NULL,
  `aluno` varchar(255) DEFAULT NULL,
  `texto` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tb_orientacao`
--

INSERT INTO `tb_orientacao` (`id_orientacao`, `orientador`, `aluno`, `texto`) VALUES
(1, 'Joser', 'Pedro', 'oi                '),
(2, 'Joser', 'Pedro', 'ola'),
(3, 'Joser', 'Pedro', 'ola'),
(4, 'Joser', 'Pedro', 'ol'),
(5, 'Joser', 'Pedro', 'ol'),
(6, 'Joser', 'Jefferson', 'Boi                ');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tb_login`
--
ALTER TABLE `tb_login`
  ADD PRIMARY KEY (`id_login`);

--
-- Índices para tabela `tb_orientacao`
--
ALTER TABLE `tb_orientacao`
  ADD PRIMARY KEY (`id_orientacao`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tb_login`
--
ALTER TABLE `tb_login`
  MODIFY `id_login` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `tb_orientacao`
--
ALTER TABLE `tb_orientacao`
  MODIFY `id_orientacao` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
