-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 12-Fev-2021 às 01:38
-- Versão do servidor: 10.4.11-MariaDB
-- versão do PHP: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `formulario`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbdevolucao`
--

CREATE TABLE `tbdevolucao` (
  `id` int(11) NOT NULL,
  `material` varchar(20) NOT NULL,
  `codigo` varchar(20) NOT NULL,
  `quantidade` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbembalagem`
--

CREATE TABLE `tbembalagem` (
  `id` int(11) NOT NULL,
  `material` varchar(20) NOT NULL,
  `codigo` varchar(20) NOT NULL,
  `quantidade` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tblavitaperdas`
--

CREATE TABLE `tblavitaperdas` (
  `id` int(11) NOT NULL,
  `material` varchar(20) NOT NULL,
  `codigo` varchar(20) NOT NULL,
  `quantidade` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbmercearia`
--

CREATE TABLE `tbmercearia` (
  `id` int(11) NOT NULL,
  `material` varchar(20) NOT NULL,
  `codigo` varchar(20) NOT NULL,
  `quantidade` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tbdevolucao`
--
ALTER TABLE `tbdevolucao`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `tbembalagem`
--
ALTER TABLE `tbembalagem`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `tblavitaperdas`
--
ALTER TABLE `tblavitaperdas`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `tbmercearia`
--
ALTER TABLE `tbmercearia`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tbdevolucao`
--
ALTER TABLE `tbdevolucao`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `tbembalagem`
--
ALTER TABLE `tbembalagem`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=143;

--
-- AUTO_INCREMENT de tabela `tblavitaperdas`
--
ALTER TABLE `tblavitaperdas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3608;

--
-- AUTO_INCREMENT de tabela `tbmercearia`
--
ALTER TABLE `tbmercearia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=212;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
