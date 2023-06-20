-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 20 jun 2023 om 09:54
-- Serverversie: 10.4.27-MariaDB
-- PHP-versie: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jj-reizen`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `naam` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `bestemming` varchar(255) NOT NULL,
  `bericht` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Gegevens worden geëxporteerd voor tabel `contact`
--

INSERT INTO `contact` (`id`, `naam`, `email`, `bestemming`, `bericht`) VALUES
(1, 'jake', 'vandekolkjake@gmail.com', 'noorwegen', 'test');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `geboekte_reizen`
--

CREATE TABLE `geboekte_reizen` (
  `id` int(11) NOT NULL,
  `reis_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `datum` date NOT NULL,
  `eind_datum` date NOT NULL,
  `aantal` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Gegevens worden geëxporteerd voor tabel `geboekte_reizen`
--

INSERT INTO `geboekte_reizen` (`id`, `reis_id`, `user_id`, `datum`, `eind_datum`, `aantal`) VALUES
(1, 7, 1, '2023-06-06', '2023-06-21', 4),
(2, 8, 1, '2023-06-06', '2023-06-23', 2);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `landen`
--

CREATE TABLE `landen` (
  `country_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `beschrijving` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Gegevens worden geëxporteerd voor tabel `landen`
--

INSERT INTO `landen` (`country_id`, `name`, `beschrijving`) VALUES
(1, 'Italie ', 'dit is italie en dat is een land in europa'),
(3, 'noorwegen', 'dit is noorwegen'),
(5, 'VS', 'RAAAAAAAAAAAAAAAAAH'),
(8, 'Nederland', 'beste land');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `places`
--

CREATE TABLE `places` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `land_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Gegevens worden geëxporteerd voor tabel `places`
--

INSERT INTO `places` (`id`, `name`, `land_id`) VALUES
(1, 'Rome', 1),
(2, 'napoli', 1),
(3, 'venetie', 1),
(4, 'oslo', 3),
(5, 'Overloon', 8);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `real_users`
--

CREATE TABLE `real_users` (
  `id` int(11) NOT NULL,
  `gebruikersnaam` varchar(255) NOT NULL,
  `wachtwoord` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Gegevens worden geëxporteerd voor tabel `real_users`
--

INSERT INTO `real_users` (`id`, `gebruikersnaam`, `wachtwoord`) VALUES
(1, 'bert', 'bert');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `reizen`
--

CREATE TABLE `reizen` (
  `id` int(11) NOT NULL,
  `place_id` int(11) NOT NULL,
  `land_id` int(11) NOT NULL,
  `beschrijving` text NOT NULL,
  `prijs` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Gegevens worden geëxporteerd voor tabel `reizen`
--

INSERT INTO `reizen` (`id`, `place_id`, `land_id`, `beschrijving`, `prijs`) VALUES
(11, 0, 0, 'dit is italieeeeeeee', 3000000000),
(13, 0, 0, '', 0),
(14, 0, 0, '', 0),
(15, 0, 0, '', 0),
(16, 0, 0, '', 0),
(20, 0, 0, 'kjhgfdsa', 20),
(21, 0, 0, 'dsaxzdsdsadsa', 2),
(22, 0, 0, 'dasdddddddsddsd', 32),
(23, 0, 0, 'edsaxz', 20),
(24, 0, 0, 'dit is rome', 23),
(25, 0, 0, 'dit is rome', 2322),
(26, 0, 0, '2345', 235),
(27, 0, 0, 'edsaz', 23),
(28, 0, 0, 'ASD', 123),
(29, 0, 0, 'ASDF', 313),
(30, 0, 0, 'das', 23),
(31, 0, 0, 'ergthfv', 2345),
(32, 4, 3, '234er', 23),
(33, 2, 1, 'adf', 4234);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Gegevens worden geëxporteerd voor tabel `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(3, 'julian ', 'julian'),
(4, 'admin ', 'admin'),
(12, 'jake', 'jake');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `geboekte_reizen`
--
ALTER TABLE `geboekte_reizen`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `landen`
--
ALTER TABLE `landen`
  ADD PRIMARY KEY (`country_id`);

--
-- Indexen voor tabel `places`
--
ALTER TABLE `places`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `real_users`
--
ALTER TABLE `real_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `reizen`
--
ALTER TABLE `reizen`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT voor een tabel `geboekte_reizen`
--
ALTER TABLE `geboekte_reizen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT voor een tabel `landen`
--
ALTER TABLE `landen`
  MODIFY `country_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT voor een tabel `places`
--
ALTER TABLE `places`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT voor een tabel `real_users`
--
ALTER TABLE `real_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT voor een tabel `reizen`
--
ALTER TABLE `reizen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT voor een tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
