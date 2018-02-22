-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 22 feb 2018 om 16:48
-- Serverversie: 10.1.30-MariaDB
-- PHP-versie: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `logincustomer`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `login`
--

CREATE TABLE `login` (
  `login_id` int(11) NOT NULL,
  `login_username` varchar(256) NOT NULL,
  `login_pwd` varchar(256) NOT NULL,
  `login_B2B_code` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `login`
--

INSERT INTO `login` (`login_id`, `login_username`, `login_pwd`, `login_B2B_code`) VALUES
(12, 'jan', '$2y$10$T/B.J/WnJuZlpx5xf1PrCe3PWKTZ71Lvrhi4MovU6sRaPtcuzDD1q', 'product1'),
(13, 'piet', '$2y$10$sMNNRp9X3EonfsaEu/R84OQvZfyDrnhUY/roj2mEBimZAWSPMZeZC', 'product2'),
(14, 'klaas', '$2y$10$UM1LVxeZfUfBu5SmY2.bDeHFO9FO.qISu8a4DhR3mp8FiqVf.zovC', 'product3'),
(15, 'kees', '$2y$10$u..NfHfjMxWpAHM69u6C.uRqImejKnn38wpwdziwqIdBmRc8IUeQa', '');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`login_id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `login`
--
ALTER TABLE `login`
  MODIFY `login_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
