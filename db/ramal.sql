-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 24-Fev-2021 às 22:12
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
-- Banco de dados: `ramal`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `localcb`
--

CREATE TABLE `localcb` (
  `id_local` int(11) NOT NULL,
  `nome_local` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `ramais`
--

CREATE TABLE `ramais` (
  `id_ramal` int(11) NOT NULL,
  `numero_ramal` int(11) NOT NULL,
  `nome_ramal` varchar(200) NOT NULL,
  `setor_ramal` varchar(100) NOT NULL,
  `local_ramal` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `ramais`
--

INSERT INTO `ramais` (`id_ramal`, `numero_ramal`, `nome_ramal`, `setor_ramal`, `local_ramal`) VALUES
(1, 7333, 'Tecnologia da Informação', 'Arte', 'PA1'),
(2, 7666, 'Juscelino Campos', 'Tecnologia da Informação', 'PA3');

-- --------------------------------------------------------

--
-- Estrutura da tabela `setor`
--

CREATE TABLE `setor` (
  `id_setor` int(11) NOT NULL,
  `nome_setor` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `setor`
--

INSERT INTO `setor` (`id_setor`, `nome_setor`) VALUES
(1, 'T.I.'),
(2, 'DMG'),
(3, 'Cenografia');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `localcb`
--
ALTER TABLE `localcb`
  ADD PRIMARY KEY (`id_local`);

--
-- Índices para tabela `ramais`
--
ALTER TABLE `ramais`
  ADD PRIMARY KEY (`id_ramal`),
  ADD UNIQUE KEY `numero_ramal` (`numero_ramal`);

--
-- Índices para tabela `setor`
--
ALTER TABLE `setor`
  ADD PRIMARY KEY (`id_setor`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `localcb`
--
ALTER TABLE `localcb`
  MODIFY `id_local` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `ramais`
--
ALTER TABLE `ramais`
  MODIFY `id_ramal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `setor`
--
ALTER TABLE `setor`
  MODIFY `id_setor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
