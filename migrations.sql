-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Creato il: Feb 08, 2024 alle 19:30
-- Versione del server: 10.4.28-MariaDB
-- Versione PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `orizon`
--
CREATE DATABASE IF NOT EXISTS `orizon` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `orizon`;

-- --------------------------------------------------------

--
-- Struttura della tabella `paesi`
--

CREATE TABLE `paesi` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nome_nazione` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dump dei dati per la tabella `paesi`
--

INSERT INTO `paesi` (`id`, `nome_nazione`, `created_at`, `updated_at`) VALUES
(1, 'Italia', '2024-02-08 16:50:18', '2024-02-08 16:50:18'),
(2, 'Francia', '2024-02-08 16:50:18', '2024-02-08 16:50:18'),
(3, 'Spagna', '2024-02-08 16:50:18', '2024-02-08 16:50:18'),
(4, 'Germania', '2024-02-08 16:50:18', '2024-02-08 16:50:18'),
(5, 'Regno Unito', '2024-02-08 16:50:18', '2024-02-08 16:50:18'),
(6, 'Stati Uniti', '2024-02-08 16:50:18', '2024-02-08 16:50:18'),
(7, 'Giappone', '2024-02-08 16:50:18', '2024-02-08 16:50:18'),
(8, 'Cina', '2024-02-08 16:50:18', '2024-02-08 16:50:18'),
(9, 'Brasile', '2024-02-08 16:50:18', '2024-02-08 16:50:18'),
(10, 'India', '2024-02-08 16:50:18', '2024-02-08 16:50:18');

-- --------------------------------------------------------

--
-- Struttura della tabella `viaggi`
--

CREATE TABLE `viaggi` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nome_destinazione` varchar(255) NOT NULL,
  `nazione_destinazione` bigint(20) UNSIGNED NOT NULL,
  `posti_disponibili` int(11) NOT NULL,
  `descrizione` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dump dei dati per la tabella `viaggi`
--

INSERT INTO `viaggi` (`id`, `nome_destinazione`, `nazione_destinazione`, `posti_disponibili`, `descrizione`, `created_at`, `updated_at`) VALUES
(1, 'Roma', 1, 3, 'Tour della città di Roma', '2024-02-08 17:06:22', '2024-02-08 17:06:22'),
(2, 'Parigi', 2, 50, 'Viaggio romantico a Parigi', '2024-02-08 17:06:22', '2024-02-08 17:06:22'),
(3, 'Madrird', 3, 100, 'Tour della città di Madrid', '2024-02-08 17:06:22', '2024-02-08 17:06:22'),
(4, 'Berlino', 4, 30, 'Esplorazione culturale a Berlino', '2024-02-08 17:06:22', '2024-02-08 17:06:22'),
(5, 'Londra', 5, 25, 'Tour storico a Londra', '2024-02-08 17:06:22', '2024-02-08 17:06:22'),
(6, 'New York', 6, 40, 'Esperienza metropolitana a New York', '2024-02-08 17:06:22', '2024-02-08 17:06:22'),
(7, 'Tokyo', 7, 35, 'Esplorazione culturale a Tokyo', '2024-02-08 17:06:22', '2024-02-08 17:06:22'),
(8, 'Pechino', 8, 20, 'Tour storico a Pechino', '2024-02-08 17:06:22', '2024-02-08 17:06:22'),
(9, 'Rio de Janeiro', 9, 15, 'Esperienza tropicale a Rio de Janeiro', '2024-02-08 17:06:22', '2024-02-08 17:06:22'),
(10, 'New Delhi', 10, 50, 'Esplorazione culturale a New Delhi', '2024-02-08 17:06:22', '2024-02-08 17:06:22');

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `paesi`
--
ALTER TABLE `paesi`
  ADD PRIMARY KEY (`id`);

--
-- Indici per le tabelle `viaggi`
--
ALTER TABLE `viaggi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `viaggi_nazione_destinazione_foreign` (`nazione_destinazione`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `paesi`
--
ALTER TABLE `paesi`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT per la tabella `viaggi`
--
ALTER TABLE `viaggi`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Limiti per le tabelle scaricate
--

--
-- Limiti per la tabella `viaggi`
--
ALTER TABLE `viaggi`
  ADD CONSTRAINT `viaggi_nazione_destinazione_foreign` FOREIGN KEY (`nazione_destinazione`) REFERENCES `paesi` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
