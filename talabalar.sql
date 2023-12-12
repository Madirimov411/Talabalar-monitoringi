-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Дек 12 2023 г., 12:59
-- Версия сервера: 10.4.32-MariaDB
-- Версия PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `talabalar`
--

-- --------------------------------------------------------

--
-- Структура таблицы `fakultet`
--

CREATE TABLE `fakultet` (
  `id` int(11) NOT NULL,
  `nomi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `fakultet`
--

INSERT INTO `fakultet` (`id`, `nomi`) VALUES
(1, 'FIZIKA-MATEMATIKA'),
(2, 'XORIJIY FILOLOGIYA'),
(3, 'O\'ZBEK FILOLOGIYASI'),
(4, 'TABIIY VA QISHLOQ XO\'JALIGI FANLARI'),
(5, 'PEDAGOGIKA'),
(6, 'SPORT VA SAN\'AT'),
(7, 'IJTIMOIY-IQTISODIY FANLAR'),
(8, 'TEXNIKA'),
(9, 'KIMYOVIY TEXNOLOGIYA');

-- --------------------------------------------------------

--
-- Структура таблицы `student`
--

CREATE TABLE `student` (
  `telefon_raqam` varchar(20) NOT NULL,
  `id` bigint(20) NOT NULL,
  `ism` varchar(50) DEFAULT NULL,
  `familiya` varchar(50) DEFAULT NULL,
  `login` varchar(50) DEFAULT NULL,
  `parol` varchar(50) DEFAULT NULL,
  `tugilgan_sana` varchar(10) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `fakultet_id` int(11) DEFAULT NULL,
  `oqishga_kirgan_yili` varchar(10) DEFAULT NULL,
  `tolov_shakli` varchar(20) DEFAULT NULL,
  `pasport_raqami` varchar(9) DEFAULT NULL,
  `jshshir` varchar(14) DEFAULT NULL,
  `jinsi` varchar(5) DEFAULT NULL,
  `viloyat_id` int(11) DEFAULT NULL,
  `tuman_id` int(11) DEFAULT NULL,
  `manzil` varchar(50) DEFAULT NULL,
  `role` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `student`
--

INSERT INTO `student` (`telefon_raqam`, `id`, `ism`, `familiya`, `login`, `parol`, `tugilgan_sana`, `email`, `fakultet_id`, `oqishga_kirgan_yili`, `tolov_shakli`, `pasport_raqami`, `jshshir`, `jinsi`, `viloyat_id`, `tuman_id`, `manzil`, `role`) VALUES
('+998919990411', 12, 'Mansurbek', 'Madirimov', 'madirimov', 'AC2759904', '04-11-2003', 'madirimov411@gmail.com', 1, '2021', 'Davlat granti', 'AC2759904', '12345678901234', 'Erkak', 13, 133, 'Gulshan-2 mahallasi', 'admin');

-- --------------------------------------------------------

--
-- Структура таблицы `tuman`
--

CREATE TABLE `tuman` (
  `id` int(11) NOT NULL,
  `viloyat_id` int(11) NOT NULL,
  `nomi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `tuman`
--

INSERT INTO `tuman` (`id`, `viloyat_id`, `nomi`) VALUES
(1, 1, 'Andijon shahri'),
(2, 1, 'Asaka tumani'),
(3, 1, 'Baliqchi tumani'),
(4, 1, 'Bo\'z tumani'),
(5, 1, 'Bulung\'ur tumani'),
(6, 1, 'Izboskan tumani'),
(7, 1, 'Jalaquduq tumani'),
(8, 1, 'Marhamat tumani'),
(9, 1, 'Oltinko\'l tumani'),
(10, 1, 'Paxtaobod tumani'),
(11, 1, 'Qorasuv tumani'),
(12, 1, 'Shahrixon tumani'),
(13, 2, 'Buxoro shahri'),
(14, 2, 'Alat tumani'),
(15, 2, 'Buxoro tumani'),
(16, 2, 'G\'ijduvon tumani'),
(17, 2, 'Jondor tumani'),
(18, 2, 'Kogon tumani'),
(19, 2, 'Olot tumani'),
(20, 2, 'Peshku tumani'),
(21, 2, 'Romitan tumani'),
(22, 2, 'Shofirkon tumani'),
(23, 2, 'Vabkent tumani'),
(24, 2, 'Vobkent tumani'),
(25, 3, 'Farg\'ona shahri'),
(26, 3, 'Beshariq tumani'),
(27, 3, 'Bog\'dod tumani'),
(28, 3, 'Dang\'ara tumani'),
(29, 3, 'Farg\'ona tumani'),
(30, 3, 'Furqat tumani'),
(31, 3, 'Quva tumani'),
(32, 3, 'Rishton tumani'),
(33, 3, 'So\'x tumani'),
(34, 4, 'Jizzax shahri'),
(35, 4, 'Arnasoy tumani'),
(36, 4, 'Baxmal tumani'),
(37, 4, 'Dustlik tumani'),
(38, 4, 'Forish tumani'),
(39, 4, 'G\'allaorol tumani'),
(40, 4, 'Jizzax tumani'),
(41, 4, 'Mirzachul tumani'),
(42, 4, 'Pakhtakor tumani'),
(43, 4, 'Zafarobod tumani'),
(44, 4, 'Zomin tumani'),
(45, 5, 'Namangan shahri'),
(46, 5, 'Chartak tumani'),
(47, 5, 'Chust tumani'),
(48, 5, 'Kasbi tumani'),
(49, 5, 'Namangan tumani'),
(50, 5, 'Norin tumani'),
(51, 5, 'Pop tumani'),
(52, 5, 'Turakurgan tumani'),
(53, 5, 'Uychi tumani'),
(54, 6, 'Navoiy shahri'),
(55, 6, 'Qiziltepa tumani'),
(56, 6, 'Navbakhor tumani'),
(57, 6, 'Karmana tumani'),
(58, 6, 'Konimex tumani'),
(59, 6, 'Qiziltepa tumani'),
(60, 6, 'Tamdyn tumani'),
(61, 6, 'Uchquduq tumani'),
(62, 7, 'Qarshi shahri'),
(63, 7, 'Chiroqchi tumani'),
(64, 7, 'Dehqonobod tumani'),
(65, 7, 'Guzar tumani'),
(66, 7, 'Karshi tumani'),
(67, 7, 'Kosonsoy tumani'),
(68, 7, 'Kitob tumani'),
(69, 7, 'Koson tumani'),
(70, 7, 'Muborak tumani'),
(71, 7, 'Nishon tumani'),
(72, 7, 'Shahrisabz tumani'),
(73, 7, 'Yakkabog\' tumani'),
(74, 8, 'Samarqand shahri'),
(75, 8, 'Bulung\'ur tumani'),
(76, 8, 'Ishtikhon tumani'),
(77, 8, 'Jomboy tumani'),
(78, 8, 'Kattaqo\'rg\'on tumani'),
(79, 8, 'Qibray tumani'),
(80, 8, 'Narpay tumani'),
(81, 8, 'Nurobod tumani'),
(82, 8, 'Pastdarg\'om tumani'),
(83, 8, 'Payariq tumani'),
(84, 8, 'Samarkand tumani'),
(85, 8, 'Urgut tumani'),
(86, 9, 'Guliston shahri'),
(87, 9, 'Bayavut tumani'),
(88, 9, 'Bo\'ka tumani'),
(89, 9, 'G\'uzor tumani'),
(90, 9, 'Khavast tumani'),
(91, 9, 'Mirzaobod tumani'),
(92, 9, 'Sardoba tumani'),
(93, 9, 'Shirin shahri'),
(94, 9, 'Yangiyer shahri'),
(95, 10, 'Termiz shahri'),
(96, 10, 'Angor tumani'),
(97, 10, 'Bandixon tumani'),
(98, 10, 'Boysun tumani'),
(99, 10, 'Denov tumani'),
(100, 10, 'Jarqo\'rg\'on tumani'),
(101, 10, 'Qumqo\'rg\'on tumani'),
(102, 10, 'Muzrabot tumani'),
(103, 10, 'Oltinsoy tumani'),
(104, 10, 'Sariosiyo tumani'),
(105, 10, 'Sherobod tumani'),
(106, 10, 'Shurchi tumani'),
(107, 10, 'Termiz tumani'),
(108, 11, 'Toshkent shahri'),
(109, 11, 'Bekobod tumani'),
(110, 11, 'Bo\'stonliq tumani'),
(111, 11, 'Buka tumani'),
(112, 11, 'Chinoz tumani'),
(113, 11, 'Parkent tumani'),
(114, 11, 'Pskent tumani'),
(115, 11, 'Quyi Chirchiq tumani'),
(116, 11, 'O\'rtachirchiq tumani'),
(117, 11, 'Yangiobod tumani'),
(118, 11, 'Zangiota tumani'),
(119, 12, 'Bektemir tumani'),
(120, 12, 'Chilonzor tumani'),
(121, 12, 'Hamza tumani'),
(122, 12, 'Mirobod tumani'),
(123, 12, 'Mirzo Ulug\'bek tumani'),
(124, 12, 'Sergeli tumani'),
(125, 12, 'Olmazor tumani'),
(126, 12, 'Uchtepa tumani'),
(127, 12, 'Yakkasaroy tumani'),
(128, 12, 'Shayhontohur tumani'),
(129, 13, 'Urganch shahri'),
(130, 13, 'Bag\'at tumani'),
(131, 13, 'Gurlan tumani'),
(132, 13, 'Hazorasp tumani'),
(133, 13, 'Xiva shahri'),
(134, 13, 'Xiva tumani'),
(135, 13, 'Shovot tumani'),
(136, 13, 'To\'rtko\'l tumani'),
(137, 13, 'Xonqa tumani'),
(138, 13, 'Yangiariq tumani'),
(139, 14, 'Nukus shahri'),
(140, 14, 'Beruniy tumani'),
(141, 14, 'Qonlikul tumani'),
(142, 14, 'Kegeyli tumani'),
(143, 14, 'Mo\'ynoq tumani'),
(144, 14, 'Nukus tumani'),
(145, 14, 'Qo\'ng\'irot tumani'),
(146, 14, 'Qorao\'zak tumani'),
(147, 14, 'Taxtako\'pir tumani'),
(148, 14, 'Ellikqal\'a tumani');

-- --------------------------------------------------------

--
-- Структура таблицы `viloyat`
--

CREATE TABLE `viloyat` (
  `id` int(11) NOT NULL,
  `nomi` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `viloyat`
--

INSERT INTO `viloyat` (`id`, `nomi`) VALUES
(1, 'Andijon viloyati'),
(2, 'Buxoro viloyati'),
(3, 'Farg\'ona viloyati'),
(4, 'Jizzax viloyati'),
(5, 'Namangan viloyati'),
(6, 'Navoiy viloyati'),
(7, 'Qashqadaryo viloyati'),
(8, 'Samarqand viloyati'),
(9, 'Sirdaryo viloyati'),
(10, 'Surxondaryo viloyati'),
(11, 'Toshkent viloyati'),
(12, 'Toshkent shahri'),
(13, 'Xorazm viloyati'),
(14, 'Qoraqalpog\'iston Respublikasi');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `fakultet`
--
ALTER TABLE `fakultet`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `telefon_raqam` (`id`);

--
-- Индексы таблицы `tuman`
--
ALTER TABLE `tuman`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `viloyat`
--
ALTER TABLE `viloyat`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `fakultet`
--
ALTER TABLE `fakultet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT для таблицы `student`
--
ALTER TABLE `student`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT для таблицы `tuman`
--
ALTER TABLE `tuman`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=149;

--
-- AUTO_INCREMENT для таблицы `viloyat`
--
ALTER TABLE `viloyat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
