-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 28 Lis 2022, 08:32
-- Wersja serwera: 10.4.24-MariaDB
-- Wersja PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `planetarium`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `galleries`
--

CREATE TABLE `galleries` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `thumbnail_file_path` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `galleries`
--

INSERT INTO `galleries` (`id`, `name`, `thumbnail_file_path`) VALUES
(27, 'test', 'Gentleman-Logo-Graphics-1-1-580x386.jpg'),
(28, 'test2', '2422545_cropped.png');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `planets`
--

CREATE TABLE `planets` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `azimuth` float DEFAULT NULL,
  `distance` float DEFAULT NULL,
  `file_path` varchar(255) NOT NULL,
  `gallery_id` int(11) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `planets`
--

INSERT INTO `planets` (`id`, `user_id`, `name`, `azimuth`, `distance`, `file_path`, `gallery_id`, `date`) VALUES
(68, 4, 'post1', 69, 420, 'new profile.png', 28, '2022-11-27 16:48:11'),
(69, 4, 'hehe', 21, 37, '2422545_cropped.png', 27, '2022-11-27 16:48:24'),
(71, 4, 'ultra wide', 4, 20, 'bannerBackgroundImage_5zfuka9h9f481.jpg', 28, '2022-11-27 18:59:20'),
(72, 6, 'choice', 1, 0, 'Morpheus Matrix Choose Pill Desktop Wallpaper.jpg', 27, '2022-11-27 18:59:52');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `quotes`
--

CREATE TABLE `quotes` (
  `id` int(11) NOT NULL,
  `content` varchar(255) NOT NULL,
  `author` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `quotes`
--

INSERT INTO `quotes` (`id`, `content`, `author`) VALUES
(1, 'Never let anyone know what you are thinking.', 'Michael Corleone'),
(2, 'Veni, vidi, vici', 'Julius Caesar'),
(3, '- Chcesz usłyszeć fraszkę ?;\r\n- Pewnie;\r\n- Lambert Lambert Ty **uju.', 'Geralt z Rivii'),
(4, 'Czarne dziury nie są nazywane \'czarnymi\' dlatego, że są czarne tylko dlatego że kradną wszystko wokół.', 'Stephen Hawking');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `users`
--

CREATE TABLE `users` (
  `userID` int(11) NOT NULL,
  `user login` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `role id` int(11) NOT NULL,
  `password` varchar(255) NOT NULL,
  `create_data` datetime NOT NULL DEFAULT current_timestamp(),
  `institution` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `users`
--

INSERT INTO `users` (`userID`, `user login`, `email`, `role id`, `password`, `create_data`, `institution`) VALUES
(4, 'pl', 'karolfaltyn@onet.pl', 0, '3485639faf1591f3c16f295198e9389db5b33c949587ec48663597d4e00299d5', '2022-11-08 11:16:39', 'pl'),
(6, 'das', 'karolfaltyn@onet.pl', 0, '0a7cb27e52927eacabbb7ecc738b0fea50b3967945257c43a67eb753cb465bd0', '2022-11-27 18:07:37', 'das'),
(7, 'qwe', 'karolfaltyn@onet.pl', 0, '489cd5dbc708c7e541de4d7cd91ce6d0f1613573b7fc5b40d3942ccb9555cf35', '2022-11-27 18:14:00', 'qwe');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `planets`
--
ALTER TABLE `planets`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `quotes`
--
ALTER TABLE `quotes`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userID`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT dla tabeli `planets`
--
ALTER TABLE `planets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT dla tabeli `quotes`
--
ALTER TABLE `quotes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT dla tabeli `users`
--
ALTER TABLE `users`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
