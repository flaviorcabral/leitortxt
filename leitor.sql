-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 16-Dez-2016 às 18:12
-- Versão do servidor: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `leitor`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `artigos`
--

CREATE TABLE `artigos` (
  `id` int(10) NOT NULL,
  `titulo` varchar(50) NOT NULL,
  `autores` varchar(100) NOT NULL,
  `evento` varchar(50) NOT NULL,
  `local` varchar(30) NOT NULL,
  `mes` varchar(20) NOT NULL,
  `ano` varchar(30) NOT NULL,
  `link_artigo` varchar(100) NOT NULL,
  `link_apresentacao` varchar(100) NOT NULL,
  `lin_evento` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `artigos`
--

INSERT INTO `artigos` (`id`, `titulo`, `autores`, `evento`, `local`, `mes`, `ano`, `link_artigo`, `link_apresentacao`, `lin_evento`) VALUES
(1, '"tal"', '"tal, tal, tal e tal"', '"tal"', '"tal"', '"jan" a "dez"', '19XX a 20YY', '"URL"', '"URL"', '"URL"'),
(2, '"tal"', '"tal, tal, tal e tal"', '"tal"', '"tal"', '"jan" a "dez"', '19XX a 20YY', '"URL"', '"URL"', '"URL"'),
(3, '"tal"', '"tal, tal, tal e tal"', '"tal"', '"tal"', '"jan" a "dez"', '19XX a 20YY', '"URL"', '"URL"', '"URL"'),
(4, '"tal"', '"tal, tal, tal e tal"', '"tal"', '"tal"', '"jan" a "dez"', '19XX a 20YY', '"URL"', '"URL"', '"URL"');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artigos`
--
ALTER TABLE `artigos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artigos`
--
ALTER TABLE `artigos`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
