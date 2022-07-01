-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 29-Jun-2022 às 06:12
-- Versão do servidor: 10.4.17-MariaDB
-- versão do PHP: 7.3.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `lorem`
--
CREATE DATABASE IF NOT EXISTS `lorem` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `lorem`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `curso`
--

CREATE TABLE `curso` (
  `id_curso` int(50) NOT NULL,
  `id_materia` int(11) DEFAULT NULL,
  `nome` varchar(150) NOT NULL,
  `materias` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `curso`
--

INSERT INTO `curso` (`id_curso`, `id_materia`, `nome`, `materias`) VALUES
(1, 1, 'Lorem', 'Lorem');

-- --------------------------------------------------------

--
-- Estrutura da tabela `inst`
--

CREATE TABLE `inst` (
  `id_inst` int(50) NOT NULL,
  `id_usuario` int(11) DEFAULT NULL,
  `nome` varchar(1055) NOT NULL,
  `cep` varchar(9) NOT NULL,
  `cursos` varchar(150) NOT NULL,
  `professores` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `inst`
--

INSERT INTO `inst` (`id_inst`, `id_usuario`, `nome`, `cep`, `cursos`, `professores`) VALUES
(2, 2, 'Lorem', 'Lorem', 'Lorem', 'Lorem');

-- --------------------------------------------------------

--
-- Estrutura da tabela `materia`
--

CREATE TABLE `materia` (
  `id_materia` int(50) NOT NULL,
  `modulo` int(2) NOT NULL,
  `nome` varchar(150) NOT NULL,
  `topicos` varchar(150) NOT NULL,
  `subtopicos` varchar(150) NOT NULL,
  `link` varchar(1055) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `materia`
--

INSERT INTO `materia` (`id_materia`, `modulo`, `nome`, `topicos`, `subtopicos`, `link`) VALUES
(1, 3, 'infonet', 'lorem', 'lorem', 'Lorem');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(100) NOT NULL,
  `id_curso` int(11) DEFAULT NULL,
  `nome` varchar(200) NOT NULL,
  `login` varchar(150) NOT NULL,
  `senha` varchar(50) NOT NULL,
  `email` varchar(150) DEFAULT NULL,
  `categoria` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `id_curso`, `nome`, `login`, `senha`, `email`, `categoria`) VALUES
(2, 1, '$nome', '$login', '$senha', '$email', '$categoria'),
(3, 1, 'Lorem ipsum', 'Lorem', 'Lorem', 'Lorem@gmail.com', 'adm');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `curso`
--
ALTER TABLE `curso`
  ADD PRIMARY KEY (`id_curso`),
  ADD KEY `fk_materia` (`id_materia`);

--
-- Índices para tabela `inst`
--
ALTER TABLE `inst`
  ADD PRIMARY KEY (`id_inst`),
  ADD KEY `fk_usuario` (`id_usuario`);

--
-- Índices para tabela `materia`
--
ALTER TABLE `materia`
  ADD PRIMARY KEY (`id_materia`);

--
-- Índices para tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`),
  ADD KEY `fk_curso` (`id_curso`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `curso`
--
ALTER TABLE `curso`
  MODIFY `id_curso` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `inst`
--
ALTER TABLE `inst`
  MODIFY `id_inst` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `materia`
--
ALTER TABLE `materia`
  MODIFY `id_materia` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `curso`
--
ALTER TABLE `curso`
  ADD CONSTRAINT `fk_materia` FOREIGN KEY (`id_materia`) REFERENCES `materia` (`id_materia`);

--
-- Limitadores para a tabela `inst`
--
ALTER TABLE `inst`
  ADD CONSTRAINT `fk_usuario` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`);

--
-- Limitadores para a tabela `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `fk_curso` FOREIGN KEY (`id_curso`) REFERENCES `curso` (`id_curso`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
