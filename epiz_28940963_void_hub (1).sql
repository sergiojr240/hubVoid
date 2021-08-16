-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 13-Ago-2021 às 21:39
-- Versão do servidor: 10.4.20-MariaDB
-- versão do PHP: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `epiz_28940963_void_hub`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `compra`
--

CREATE TABLE `compra` (
  `id` int(11) NOT NULL,
  `usuario_id` int(11) NOT NULL,
  `produto_id` int(11) NOT NULL,
  `quantidade` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `endereço`
--

CREATE TABLE `endereço` (
  `id` int(11) NOT NULL,
  `rua` varchar(250) NOT NULL,
  `complemento` varchar(25) NOT NULL,
  `cidade` varchar(250) NOT NULL,
  `pais` varchar(50) NOT NULL,
  `usuario_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `produto`
--

CREATE TABLE `produto` (
  `id` int(11) NOT NULL,
  `nome` varchar(250) NOT NULL,
  `descrição` text NOT NULL,
  `valor` int(30) NOT NULL,
  `estoque` int(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `solicitacoes`
--

CREATE TABLE `solicitacoes` (
  `id_solicitacoes` int(11) NOT NULL,
  `tipo` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantidade` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `solicitacoes`
--

INSERT INTO `solicitacoes` (`id_solicitacoes`, `tipo`, `quantidade`) VALUES
(1, 'atraso', 5),
(2, 'pendentes', 3),
(3, 'finalizadas', 10),
(4, 'entrega', 3),
(5, 'retirada', 7);

-- --------------------------------------------------------

--
-- Estrutura da tabela `solicitacoes_usr`
--

CREATE TABLE `solicitacoes_usr` (
  `id_solicitacao` int(11) NOT NULL,
  `nome` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantidade` int(100) NOT NULL,
  `cor` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `entrega` int(2) NOT NULL,
  `comentario` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `arquivo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `telefone` varchar(50) NOT NULL,
  `funcao` varchar(255) NOT NULL,
  `senha` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id`, `nome`, `email`, `telefone`, `funcao`, `senha`) VALUES
(21, 'sergio junior', 'sergiojr.u@gmail.com', '84 988952854', 'administrador', '226e947e7c1697c434caa5b4dbdd47aa5ebd6257'),
(31, 'arthur', 'arthur@gmail.com', '84 900990099', 'operador', '7c4a8d09ca3762af61e59520943dc26494f8941b'),
(32, 'joaozinho', 'joaozinho@gmail.com', '84 999999999', 'operador', '7c4a8d09ca3762af61e59520943dc26494f8941b'),
(33, 'marcos', 'marcos@gmail.com', '', 'operador', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220'),
(34, 'Ana', 'ana@gmail.com', '', 'usuario', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `compra`
--
ALTER TABLE `compra`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `endereço`
--
ALTER TABLE `endereço`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `produto`
--
ALTER TABLE `produto`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `solicitacoes`
--
ALTER TABLE `solicitacoes`
  ADD PRIMARY KEY (`id_solicitacoes`);

--
-- Índices para tabela `solicitacoes_usr`
--
ALTER TABLE `solicitacoes_usr`
  ADD PRIMARY KEY (`id_solicitacao`);

--
-- Índices para tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `compra`
--
ALTER TABLE `compra`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `endereço`
--
ALTER TABLE `endereço`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `produto`
--
ALTER TABLE `produto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `solicitacoes`
--
ALTER TABLE `solicitacoes`
  MODIFY `id_solicitacoes` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `solicitacoes_usr`
--
ALTER TABLE `solicitacoes_usr`
  MODIFY `id_solicitacao` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
