-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 23-Jun-2019 às 09:00
-- Versão do servidor: 10.1.37-MariaDB
-- versão do PHP: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `doa_brinde`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `brinde`
--

CREATE TABLE `brinde` (
  `idbrinde` int(5) NOT NULL,
  `brinde` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `fornecedor` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `emailfornecedor` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `data` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `brinde`
--

INSERT INTO `brinde` (`idbrinde`, `brinde`, `fornecedor`, `emailfornecedor`, `data`) VALUES
(4, 'Calendario', 'Exemplo', 'exemplo@exemplo.com', '2018-12-31'),
(5, 'Exemplo2', 'Exemplo2', 'exemplo@exemplo.com', '2017-10-31');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `idusuario` int(10) NOT NULL,
  `usuario` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `senha` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `nome` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `sobrenome` varchar(35) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`idusuario`, `usuario`, `senha`, `nome`, `sobrenome`) VALUES
(1, 'Job', '12345', 'Joberson', 'Ferreira'),
(3, 'Joao', '12345', 'João Pedro', 'Oliveira de Moraes');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brinde`
--
ALTER TABLE `brinde`
  ADD PRIMARY KEY (`idbrinde`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idusuario`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brinde`
--
ALTER TABLE `brinde`
  MODIFY `idbrinde` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idusuario` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
