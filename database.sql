-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 21/03/2020 às 01:46
-- Versão do servidor: 10.4.11-MariaDB
-- Versão do PHP: 7.3.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `mydb`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `qty` float NOT NULL,
  `purchase_price` float NOT NULL,
  `forward_price` float NOT NULL,
  `cash_price` float NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Despejando dados para a tabela `products`
--

INSERT INTO `products` (`id`, `title`, `qty`, `purchase_price`, `forward_price`, `cash_price`, `created_at`, `updated_at`) VALUES
(1, 'PRODUTO 001', 10, 5, 15, 12.99, '2020-02-29 11:56:41', '2020-02-29 11:56:59'),
(2, 'PRODUTO 002', 8, 10, 20.5, 18.99, '2020-02-29 11:56:41', '2020-02-29 11:56:41'),
(7, 'PRODUTO TESTE', 20, 50, 149.99, 129.9, '2020-03-03 01:32:59', '2020-03-03 01:32:59'),
(8, 'PRODUTO QUALQUER', 10, 40, 139.99, 129.9, '2020-03-03 01:34:18', '2020-03-03 01:34:18'),
(9, 'PRODUTO QUALQUER 2', 10, 40, 139.99, 129.9, '2020-03-03 01:54:06', '2020-03-03 01:54:06'),
(10, 'PRODUTO QUALQUER 3', 10, 40, 139.99, 129.9, '2020-03-03 02:52:16', '2020-03-03 02:52:16'),
(11, 'UM OUTRO PRODUTO', 10, 40, 139.99, 129.9, '2020-03-03 03:04:56', '2020-03-03 03:04:56'),
(12, 'OUTRO PRODUTO QUALQUER', 8, 20, 80.99, 70.9, '2020-03-03 16:25:33', '2020-03-03 16:25:33'),
(13, 'OUTRO PRODUTO UM', 8, 20, 80.99, 70.9, '2020-03-03 19:21:35', '2020-03-03 19:21:35');

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
