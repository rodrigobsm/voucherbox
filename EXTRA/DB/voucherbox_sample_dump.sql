-- phpMyAdmin SQL Dump
-- version 4.7.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: 12-Nov-2017 às 01:39
-- Versão do servidor: 5.7.17
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `voucherbox`
--
CREATE DATABASE `voucherbox`;
USE `voucherbox`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `offer`
--

CREATE TABLE `offer` (
  `id_offer` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `discount` decimal(3,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `offer`
--

INSERT INTO `offer` (`id_offer`, `name`, `discount`) VALUES
(1, 'Black Friday 40% OFF', '40'),
(2, 'Birthday Discount 15%', '15'),
(3, 'Happy Valantines Day 20% OFF', '20');

-- --------------------------------------------------------

--
-- Estrutura da tabela `recipient`
--

CREATE TABLE `recipient` (
  `id_recipient` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `email` varchar(65) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `recipient`
--

INSERT INTO `recipient` (`id_recipient`, `name`, `email`) VALUES
(1, 'John Smith', 'john@gmail.com'),
(2, 'Mike Jackson', 'mike@hotmail.com'),
(3, 'Julie Roberts', 'julie@me.com'),
(5, 'Rodrigo Santa Maria', 'rodrigo@digitallymade.com.br'),
(6, 'Paul Karpackie', 'paul@gmail.com');

-- --------------------------------------------------------

--
-- Estrutura da tabela `voucher`
--

CREATE TABLE `voucher` (
  `id_voucher` int(11) NOT NULL,
  `id_recipient` int(11) NOT NULL,
  `id_offer` int(11) NOT NULL,
  `date_expiration` date NOT NULL,
  `date_usage` date DEFAULT NULL,
  `code` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `voucher`
--

INSERT INTO `voucher` (`id_voucher`, `id_recipient`, `id_offer`, `date_expiration`, `date_usage`, `code`) VALUES
(1, 1, 1, '2017-11-13', '2017-11-12', 'I5RD8B6P'),
(2, 2, 1, '2017-11-13', '2017-11-11', '8GXACIZ2'),
(3, 3, 1, '2017-11-13', '2017-11-11', 'N2PFX3O9'),
(4, 5, 1, '2017-11-13', '2017-11-09', '5ZFB3804'),
(5, 1, 3, '2018-06-12', '2017-11-10', 'QU96DRY1'),
(6, 2, 3, '2018-06-12', '2017-11-12', 'JAQ8GNOZ'),
(7, 3, 3, '2018-06-12', '2017-11-12', 'CW1SOE67'),
(8, 5, 3, '2016-06-12', NULL, 'KXQY8BHO'),
(9, 1, 2, '2018-06-06', '2017-11-12', '15WJGYQ3'),
(10, 2, 2, '2018-06-06', '2017-11-12', 'MN8J6TDK'),
(11, 3, 2, '2018-06-06', NULL, 'TODISGBP'),
(12, 5, 2, '2018-06-06', NULL, 'OMG0NSXK'),
(13, 1, 1, '2020-10-10', NULL, 'L14J56FT'),
(14, 2, 1, '2020-10-10', NULL, '30L81WPA'),
(15, 3, 1, '2020-10-10', NULL, 'LMY7TUQA'),
(16, 5, 1, '2020-10-10', NULL, 'DCSH6YQ9'),
(17, 6, 1, '2020-10-10', NULL, '1SO450G9');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `offer`
--
ALTER TABLE `offer`
  ADD PRIMARY KEY (`id_offer`);

--
-- Indexes for table `recipient`
--
ALTER TABLE `recipient`
  ADD PRIMARY KEY (`id_recipient`),
  ADD UNIQUE KEY `email_UNIQUE` (`email`);

--
-- Indexes for table `voucher`
--
ALTER TABLE `voucher`
  ADD PRIMARY KEY (`id_voucher`),
  ADD KEY `fk_voucher_recipient_idx` (`id_recipient`),
  ADD KEY `fk_voucher_offer1_idx` (`id_offer`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `offer`
--
ALTER TABLE `offer`
  MODIFY `id_offer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `recipient`
--
ALTER TABLE `recipient`
  MODIFY `id_recipient` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `voucher`
--
ALTER TABLE `voucher`
  MODIFY `id_voucher` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `voucher`
--
ALTER TABLE `voucher`
  ADD CONSTRAINT `fk_voucher_offer1` FOREIGN KEY (`id_offer`) REFERENCES `offer` (`id_offer`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_voucher_recipient` FOREIGN KEY (`id_recipient`) REFERENCES `recipient` (`id_recipient`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
