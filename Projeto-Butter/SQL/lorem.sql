-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 01-Jul-2022 às 06:48
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
-- Estrutura da tabela `links`
--

CREATE TABLE `links` (
  `id_link` int(100) NOT NULL,
  `link` varchar(2083) NOT NULL,
  `topic` varchar(100) NOT NULL,
  `mat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `links`
--

INSERT INTO `links` (`id_link`, `link`, `topic`, `mat`) VALUES
(1, 'https://www.youtube.com/watch?v=IoRkuWWliFM&list=PLm7qw9oYBxanABvnJc4kWazFSv8uzK7PQ', 'Glossário - Saudações', 'libras'),
(2, 'https://www.youtube.com/watch?v=ktLYrQhwg6Q', 'Os 50 verbos mais usados em Libras', 'libras'),
(4, 'https://www.youtube.com/watch?v=l_1Ok_LEO8s', 'COMECE POR AQUI | Aula 01 | LIBRAS', 'libras'),
(6, 'https://www.youtube.com/watch?v=UBVC0oqkd3c', 'LIBRAS PARA INICIANTES: Passo a Passo com SINAIS e FRASES', 'libras'),
(7, 'https://soeducador.com.br/cursos/braille-e-libras?utm_source=google&utm_medium=cpc&utm_campaign=pareto.de.gsn.geral.br&gclid=CjwKCAjwwdWVBhA4EiwAjcYJEAXftcQalV9orHYI-m_tzLG41d6yFahCsYGkVGgsOCAeES1xS8IxQxoCI4EQAvD_BwE', 'Cursos de Libras - só educador', 'libras'),
(9, 'https://www.youtube.com/watch?v=o0xUiH93siU', 'Função Seno', 'matematica'),
(10, 'https://www.youtube.com/watch?v=esmjzKWY-yU', 'Função Cosseno', 'matematica'),
(11, 'https://www.youtube.com/watch?v=aZwiSteCpck', 'Função Tangente', 'matematica'),
(12, 'https://www.youtube.com/watch?v=7rVOU1fQnVE', 'Trigonometria no triangulo retangulo e no triangulo qualquer', 'matematica'),
(13, 'https://www.youtube.com/watch?v=Xulj6EPYPkw', 'Geometria Plana', 'matematica'),
(14, 'https://www.youtube.com/watch?v=iyc1pVbXuCE', 'Semelhança e Representação de Figuras', 'matematica'),
(15, 'https://www.youtube.com/watch?v=th5k6bzSDTA', 'Área de Figuras Geométricas', 'matematica'),
(16, 'https://www.youtube.com/watch?v=Y_gD7S6OkC4', 'Geometria Espacial', 'matematica');

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
(1, 3, 'Libras', 'Lorem ipsum', 'lorem ipsum', 'Lorem ipsum');

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
-- Índices para tabela `links`
--
ALTER TABLE `links`
  ADD PRIMARY KEY (`id_link`);

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
-- AUTO_INCREMENT de tabela `links`
--
ALTER TABLE `links`
  MODIFY `id_link` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

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
