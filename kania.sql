-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Czas generowania: 18 Maj 2020, 18:00
-- Wersja serwera: 5.7.23
-- Wersja PHP: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `kania`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `java`
--

DROP TABLE IF EXISTS `java`;
CREATE TABLE IF NOT EXISTS `java` (
  `ID` int(11) NOT NULL,
  `Przedmiot` text COLLATE utf8_unicode_ci NOT NULL,
  `Nazwa` text COLLATE utf8_unicode_ci NOT NULL,
  `Ocena` text COLLATE utf8_unicode_ci NOT NULL,
  `Data` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Zrzut danych tabeli `java`
--

INSERT INTO `java` (`ID`, `Przedmiot`, `Nazwa`, `Ocena`, `Data`) VALUES
(1, 'Tworzenie stron i aplikacji internetowych', 'JS', '3', '2019-11-19'),
(2, 'Tworzenie stron i aplikacji internetowych', 'JS', '1', '2019-11-06'),
(3, 'Tworzenie stron i aplikacji internetowych', 'JS', '4', '2019-11-13'),
(4, 'Tworzenie stron i aplikacji internetowych', 'Kalkulator01', '5', '2020-02-04'),
(5, 'Tworzenie stron i aplikacji internetowych', 'Kalkulator02', '-2', '2020-02-11'),
(6, 'Tworzenie stron i aplikacji internetowych', 'Obiekty JS', '4', '2020-02-18'),
(7, 'Tworzenie stron i aplikacji internetowych', 'Kalkulator03', '5', '2020-02-25'),
(8, 'Tworzenie stron i aplikacji internetowych', 'JS', '+4', '2020-03-03');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `systemy_baz_danych`
--

DROP TABLE IF EXISTS `systemy_baz_danych`;
CREATE TABLE IF NOT EXISTS `systemy_baz_danych` (
  `ID` int(11) NOT NULL,
  `Przedmiot` text COLLATE utf8_unicode_ci NOT NULL,
  `Nazwa` text COLLATE utf8_unicode_ci NOT NULL,
  `Ocena` text COLLATE utf8_unicode_ci NOT NULL,
  `Data` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Zrzut danych tabeli `systemy_baz_danych`
--

INSERT INTO `systemy_baz_danych` (`ID`, `Przedmiot`, `Nazwa`, `Ocena`, `Data`) VALUES
(1, 'Systemy baz danych', 'Selecty01', '1', '2019-09-27'),
(2, 'Systemy baz danych', 'Selecty02', '3', '2019-11-15'),
(3, 'Systemy baz danych', 'Selecty03', '2', '2019-10-16'),
(4, 'Systemy baz danych', 'Selecty04', '5', '2019-12-20'),
(5, 'Systemy baz danych', 'MySQL', '5', '2020-05-08');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
