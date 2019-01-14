-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 30 Paź 2018, 10:06
-- Wersja serwera: 5.7.14
-- Wersja PHP: 7.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `bs_rejestr`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `it_agreement`
--

CREATE TABLE `it_agreement` (
  `it_ida` int(11) NOT NULL,
  `date` datetime NOT NULL,
  `simple_name` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `it_idc` int(11) NOT NULL,
  `date_start` date NOT NULL,
  `date_end` date DEFAULT NULL,
  `it_idl` int(2) NOT NULL,
  `it_idcat` int(2) NOT NULL,
  `additional` text COLLATE utf8_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Zrzut danych tabeli `it_agreement`
--

INSERT INTO `it_agreement` (`it_ida`, `date`, `simple_name`, `name`, `it_idc`, `date_start`, `date_end`, `it_idl`, `it_idcat`, `additional`) VALUES
(1, '0000-00-00 00:00:00', 'test1', 'test1', 1, '2018-09-12', '2018-09-28', 1, 1, 'afafasf\r\nsaf\r\nsad'),
(2, '2018-09-28 12:37:20', 'sadas', 'dsasda', 1, '2018-09-19', '2018-09-19', 1, 1, 'asdas'),
(3, '2018-09-28 13:22:19', 'asdasd', 'sdad', 1, '2018-09-12', '2018-09-19', 1, 1, ''),
(4, '2018-09-28 13:27:31', 'sads', 'sada', 1, '2018-09-20', '1111-11-11', 1, 1, ''),
(5, '2018-09-28 14:10:28', 'sads', 'sada', 1, '2018-09-20', '1111-11-11', 1, 1, ''),
(6, '2018-09-28 14:10:32', 'sads', 'sada', 1, '2018-09-20', '1111-11-11', 1, 1, ''),
(7, '2018-09-28 14:11:01', 'test1', 'test2', 1, '2018-09-14', '1111-11-11', 1, 1, ''),
(8, '2018-09-28 14:14:41', 'sadas', 'sadas', 1, '2018-09-12', '1111-11-11', 1, 1, ''),
(9, '2018-09-28 14:16:14', 'sadas', 'asdas', 1, '2018-09-14', '1111-11-11', 1, 1, ''),
(10, '2018-09-28 14:16:51', 'das', 'dasdas', 1, '2018-09-20', '1111-11-11', 1, 1, ''),
(11, '2018-09-28 14:17:47', 'asda', 'asdas', 1, '2018-09-15', '1111-11-11', 1, 1, ''),
(12, '2018-09-28 14:22:00', 'sadsa', 'sadas', 1, '2018-09-21', '1111-11-11', 1, 1, ''),
(13, '2018-09-28 14:23:32', 'fsdf', 'dsfsd', 1, '2018-09-13', '1111-11-11', 1, 1, ''),
(14, '2018-09-28 14:30:40', 'sdaas', 'dasdas', 1, '2018-09-20', '1111-11-11', 1, 1, ''),
(15, '2018-09-28 14:36:02', 'sdas', 'dasdas', 1, '2018-09-12', '1111-11-11', 1, 1, ''),
(16, '2018-09-28 14:36:34', 'dasdas', 'dasd', 1, '2018-09-11', '1111-11-11', 1, 1, ''),
(17, '2018-09-28 14:37:22', 'dasdas', 'dasdas', 1, '2018-09-11', '1111-11-11', 1, 1, ''),
(18, '2018-09-28 14:37:49', 'sddas', 'sdadas', 1, '2018-09-12', '1111-11-11', 1, 1, ''),
(19, '2018-09-28 14:38:20', 'dasda', 'sadas', 1, '2018-09-12', '1111-11-11', 1, 1, 'asda'),
(20, '2018-09-28 14:38:43', 'adasdas', 'adsdasd', 1, '2018-09-14', '1111-11-11', 1, 1, ''),
(21, '2018-09-28 14:49:57', 'safas', 'dasdsa', 1, '2018-09-13', '1111-11-11', 1, 1, ''),
(22, '2018-09-28 14:54:08', 'dasdas', 'asdsdas', 1, '2018-09-21', '1111-11-11', 1, 1, ''),
(23, '2018-09-28 14:54:20', 'dada', 'dasdas', 1, '2018-09-13', '1111-11-11', 1, 1, ''),
(24, '2018-09-28 14:55:25', 'asfsas', 'fasf', 1, '2018-09-13', '1111-11-11', 1, 1, ''),
(25, '2018-09-28 14:56:09', 'dsvvsdvs', 'vsdvsdvs', 1, '2018-09-13', '1111-11-11', 1, 1, ''),
(26, '2018-10-04 12:26:09', 'sadas', 'test1', 1, '2018-10-11', '1111-11-11', 1, 1, 'sdas'),
(27, '2018-10-04 12:26:42', 'sadas', 'test1', 1, '2018-10-11', '1111-11-11', 1, 1, 'sdas'),
(28, '2018-10-04 12:26:46', 'sadas', 'test1', 1, '2018-10-11', '1111-11-11', 1, 1, 'sdas'),
(29, '2018-10-04 12:27:01', 'sdfa', 'sada', 1, '2018-10-19', '1111-11-11', 1, 1, 'asd'),
(30, '2018-10-04 12:28:34', 'sadsa', 'sadas', 1, '2018-10-25', '1111-11-11', 1, 1, ''),
(31, '2018-10-04 12:29:53', 'sdfsd', 'sdfsd', 1, '2018-10-25', '1111-11-11', 1, 1, ''),
(32, '2018-10-04 12:35:48', 'saddas', 'sadas', 1, '2018-10-12', '1111-11-11', 1, 1, ''),
(33, '2018-10-04 12:40:44', 'asdasd', 'dsasdas', 1, '2018-10-17', '1111-11-11', 1, 1, ''),
(34, '2018-10-04 12:42:19', 'fsdfs', 'sfsd', 1, '2018-10-12', '1111-11-11', 1, 1, ''),
(35, '2018-10-04 12:43:05', 'dfsdf', 'sdfsdfs', 1, '2018-10-18', '1111-11-11', 1, 1, ''),
(36, '2018-10-04 12:44:16', 'dfsfs', 'dsfsad', 1, '2018-10-11', '1111-11-11', 1, 1, ''),
(37, '2018-10-04 12:46:06', 'asfaf', 'afssfa', 1, '2018-10-19', '1111-11-11', 1, 1, ''),
(38, '2018-10-04 12:49:11', 'dafsd', 'sdfsdf', 1, '2018-10-19', '1111-11-11', 1, 1, ''),
(39, '2018-10-04 13:37:54', 'fdsfsd', 'sdfsd', 1, '2018-10-16', '1111-11-11', 1, 1, ''),
(40, '2018-10-04 13:44:10', 'dsfsdfs', 'sfdfsdf', 1, '2018-10-17', '1111-11-11', 1, 1, ''),
(41, '2018-10-04 13:44:54', 'fsfsdf', 'fsdfsfs', 1, '2018-10-16', '1111-11-11', 1, 1, ''),
(42, '2018-10-04 14:05:24', 'fdsfsad', 'sfdsadfsd', 1, '2018-10-13', '1111-11-11', 1, 1, ''),
(43, '2018-10-04 14:06:19', 'fdsfds', 'dsfsdfs', 1, '2018-10-12', '1111-11-11', 1, 1, ''),
(44, '2018-10-04 14:31:31', 'asdasfas', 'asfasfasf', 1, '2018-10-12', '1111-11-11', 1, 1, 'asdas'),
(45, '2018-10-04 14:37:39', 'asasf', 'asfasf', 4, '2018-10-17', '2018-10-12', 1, 1, 'safasfas\r\nasf\r\nas\r\nf\r\nsa'),
(46, '2018-10-05 13:59:45', 'sdsdsdf', 'dsfsdfsd', 1, '2018-10-10', '1111-11-11', 1, 1, ''),
(47, '2018-10-05 14:00:26', 'dssdsfd', 'dsfsds', 1, '2018-10-17', '1111-11-11', 1, 1, 'dfsdfs'),
(48, '2018-10-05 14:01:04', 'afasas', 'sadas', 1, '2018-10-23', '1111-11-11', 1, 1, '');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `it_category`
--

CREATE TABLE `it_category` (
  `it_idcat` int(2) NOT NULL,
  `category` varchar(120) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Zrzut danych tabeli `it_category`
--

INSERT INTO `it_category` (`it_idcat`, `category`) VALUES
(1, 'RODO'),
(2, 'Ksiegowe'),
(6, 'Finansowe');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `it_company`
--

CREATE TABLE `it_company` (
  `it_idc` int(11) NOT NULL,
  `simple_name` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `full_name` varchar(120) COLLATE utf8_unicode_ci NOT NULL,
  `address` text COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(12) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(160) COLLATE utf8_unicode_ci NOT NULL,
  `date` datetime NOT NULL,
  `it_category` int(2) NOT NULL,
  `active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Zrzut danych tabeli `it_company`
--

INSERT INTO `it_company` (`it_idc`, `simple_name`, `full_name`, `address`, `phone`, `email`, `date`, `it_category`, `active`) VALUES
(1, 'Orange', 'Orange S.A.', '', '', '', '2018-09-13 12:29:24', 0, 1),
(4, 'Orange2', 'Orange S.A.2', '', '', '', '2018-09-13 14:18:26', 0, 1),
(5, 'safa', 'dsad', 'dsad', 'dasasd', 'adsdas', '2018-09-13 14:59:53', 0, 1);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `it_location`
--

CREATE TABLE `it_location` (
  `it_idl` int(2) NOT NULL,
  `location` varchar(120) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Zrzut danych tabeli `it_location`
--

INSERT INTO `it_location` (`it_idl`, `location`) VALUES
(1, 'IT'),
(2, 'Księgowość');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `users`
--

CREATE TABLE `users` (
  `idu` int(2) NOT NULL,
  `login` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(120) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `surname` int(60) NOT NULL,
  `rejestr_it` int(1) NOT NULL,
  `rejestr_kr` int(1) NOT NULL,
  `active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indeksy dla zrzutów tabel
--

--
-- Indexes for table `it_agreement`
--
ALTER TABLE `it_agreement`
  ADD PRIMARY KEY (`it_ida`);

--
-- Indexes for table `it_category`
--
ALTER TABLE `it_category`
  ADD PRIMARY KEY (`it_idcat`);

--
-- Indexes for table `it_company`
--
ALTER TABLE `it_company`
  ADD PRIMARY KEY (`it_idc`);

--
-- Indexes for table `it_location`
--
ALTER TABLE `it_location`
  ADD PRIMARY KEY (`it_idl`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`idu`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `it_agreement`
--
ALTER TABLE `it_agreement`
  MODIFY `it_ida` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;
--
-- AUTO_INCREMENT dla tabeli `it_category`
--
ALTER TABLE `it_category`
  MODIFY `it_idcat` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT dla tabeli `it_company`
--
ALTER TABLE `it_company`
  MODIFY `it_idc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT dla tabeli `it_location`
--
ALTER TABLE `it_location`
  MODIFY `it_idl` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT dla tabeli `users`
--
ALTER TABLE `users`
  MODIFY `idu` int(2) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
