-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 22 Cze 2023, 14:18
-- Wersja serwera: 10.4.27-MariaDB
-- Wersja PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `frogterra`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `armors`
--

CREATE TABLE `armors` (
  `armor_id` int(40) NOT NULL,
  `armor_name` varchar(255) NOT NULL,
  `armor_hp` int(40) NOT NULL,
  `armor_str` int(40) NOT NULL,
  `armor_sti` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Zrzut danych tabeli `armors`
--

INSERT INTO `armors` (`armor_id`, `armor_name`, `armor_hp`, `armor_str`, `armor_sti`) VALUES
(1, 'Zbroja tytanicznej zagłady', 20, 5, 2),
(2, 'Zbroja tytanicznej zagłady', 40, 10, 2);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `helmets`
--

CREATE TABLE `helmets` (
  `helmet_id` int(11) NOT NULL,
  `helmet_name` varchar(255) NOT NULL,
  `helmet_hp` int(11) NOT NULL,
  `helmet_str` int(11) NOT NULL,
  `helmet_pow` int(11) NOT NULL,
  `helmet_sti` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Zrzut danych tabeli `helmets`
--

INSERT INTO `helmets` (`helmet_id`, `helmet_name`, `helmet_hp`, `helmet_str`, `helmet_pow`, `helmet_sti`) VALUES
(1, 'hełm wielkiej władzy', 10, 5, 3, 1);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `players`
--

CREATE TABLE `players` (
  `player_id` int(100) NOT NULL,
  `player_username` varchar(40) NOT NULL,
  `player_login` varchar(40) NOT NULL,
  `player_password` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Zrzut danych tabeli `players`
--

INSERT INTO `players` (`player_id`, `player_username`, `player_login`, `player_password`) VALUES
(1, 'Dosztosz', 'uzurpator', '2137');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `players_eq`
--

CREATE TABLE `players_eq` (
  `player_id` int(40) NOT NULL,
  `helmet_id` int(40) NOT NULL,
  `armor_id` int(40) NOT NULL,
  `weapon_id` int(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Zrzut danych tabeli `players_eq`
--

INSERT INTO `players_eq` (`player_id`, `helmet_id`, `armor_id`, `weapon_id`) VALUES
(1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `players_lvl`
--

CREATE TABLE `players_lvl` (
  `player_id` int(40) NOT NULL,
  `player_exp` int(40) NOT NULL,
  `player_lvl` int(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Zrzut danych tabeli `players_lvl`
--

INSERT INTO `players_lvl` (`player_id`, `player_exp`, `player_lvl`) VALUES
(1, 69, 5);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `weapons`
--

CREATE TABLE `weapons` (
  `weapon_id` int(40) NOT NULL,
  `weapon_name` varchar(255) NOT NULL,
  `weapon_str` int(40) NOT NULL,
  `weapon_atk_min` int(11) NOT NULL,
  `weapon_atk_max` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Zrzut danych tabeli `weapons`
--

INSERT INTO `weapons` (`weapon_id`, `weapon_name`, `weapon_str`, `weapon_atk_min`, `weapon_atk_max`) VALUES
(1, 'miecz sury', 5, 10, 15);

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `armors`
--
ALTER TABLE `armors`
  ADD PRIMARY KEY (`armor_id`);

--
-- Indeksy dla tabeli `helmets`
--
ALTER TABLE `helmets`
  ADD PRIMARY KEY (`helmet_id`);

--
-- Indeksy dla tabeli `players`
--
ALTER TABLE `players`
  ADD PRIMARY KEY (`player_id`);

--
-- Indeksy dla tabeli `weapons`
--
ALTER TABLE `weapons`
  ADD PRIMARY KEY (`weapon_id`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `armors`
--
ALTER TABLE `armors`
  MODIFY `armor_id` int(40) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT dla tabeli `helmets`
--
ALTER TABLE `helmets`
  MODIFY `helmet_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT dla tabeli `players`
--
ALTER TABLE `players`
  MODIFY `player_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT dla tabeli `weapons`
--
ALTER TABLE `weapons`
  MODIFY `weapon_id` int(40) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
