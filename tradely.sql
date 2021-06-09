-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 09 Cze 2021, 11:08
-- Wersja serwera: 10.4.11-MariaDB
-- Wersja PHP: 7.2.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `tradely`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `categories`
--

CREATE TABLE `categories` (
  `category_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `categories`
--

INSERT INTO `categories` (`category_id`, `name`) VALUES
(1, 'Elektronika'),
(2, 'Moda'),
(3, 'Dzieci'),
(4, 'Dom'),
(5, 'Motoryzacja'),
(6, 'Sport'),
(7, 'Zwierzeta'),
(8, 'Zdrowie'),
(9, 'Kultura'),
(10, 'Sztuka');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `order_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `order_details`
--

CREATE TABLE `order_details` (
  `id` int(11) NOT NULL,
  `order_id` int(11) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL,
  `description` varchar(300) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `image_name` varchar(100) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `price` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `products`
--

INSERT INTO `products` (`product_id`, `user_id`, `name`, `description`, `category_id`, `image_name`, `quantity`, `price`) VALUES
(1, 1, 'Buty Break it', 'Szybkie trzewiki o kolorze czerwonym rozmiar 48', 2, NULL, 4, 99),
(2, 1, 'Dres break it', 'dres dres mam dres', 2, 'dres.jpg', 25, 600),
(5, 1, 'Koszulka Szara', '100% bawełna', 2, NULL, 20, 25),
(6, 1, 'Smartfon xiaomi Mi mix 3', '6gb ramu, 256gb pamięci, snapdragon, 4 kamerki', 1, NULL, 10, 2000),
(7, 1, 'Rzutnik Projektor overmax4.1 LED FULL HD', 'Projektor Overmax Multipic 4.1\r\n\r\n    Obraz do 200 cali w natywnej rozdzielczości Full HD (1080p)\r\n\r\n    Łączność Wi-Fi\r\n\r\n    2 głośniki w systemie stereo\r\n\r\n    Jasność: 4000 lumenów\r\n\r\n    Pilot w zestawie\r\n\r\n    Aż 50 000 godzin żywotności lampy\r\n\r\n    Kontrast 4000:1\r\n\r\n    Duża liczba wejść - ', 1, NULL, 39, 799),
(8, 1, '3x MIOTEŁKI DO KURZU ELEKTROSTATYCZNE ZESTAW WENKO', 'Łatwo, szybko i dokładnie usuniesz wszystkie drobne zabrudzenia.\r\nKolor dominujący: granatowy\r\nMateriał dominujący: tworzywo sztuczne\r\ndługość (cm): 26, 56, 96-110', 4, NULL, 100, 30);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `login` varchar(100) DEFAULT NULL,
  `passwd` varchar(100) DEFAULT NULL,
  `name` varchar(100) NOT NULL,
  `surname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `street` varchar(100) NOT NULL,
  `house_number` varchar(100) NOT NULL,
  `zip_code` varchar(100) NOT NULL,
  `bank` varchar(26) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `users`
--

INSERT INTO `users` (`user_id`, `login`, `passwd`, `name`, `surname`, `email`, `phone`, `city`, `street`, `house_number`, `zip_code`, `bank`) VALUES
(1, 'admin', 'admin', '', '', '', '', '', '', '', '', ''),
(168, 'login', 'haslo123', 'Imie', 'Nazwisko', 'email@email.com', '123456789', 'Miasto', 'Ulica', '12', '12-123', NULL),
(173, 'login1', 'haslo123', 'Imie', 'Nazwisko', 'EMAIL@COS.PL', '1231323', '312', '1', '1', '1', NULL),
(174, 'login1234', '11haslo1', 'Imie', 'Nazwisko', 'email@22222.pl', '1', '1', '1', '1', '11', NULL),
(175, 'olga123', '$2y$10$.oxCvWFe7nNNnmQ0hUdhb.fDip.CNOWtfO1nTjkK1NvUM/0/5NPyq', 'Imie', 'Nazwisko', 'email@22231222.pl', '1', '1', '1', '1', '1', NULL),
(176, 'nowy', '$2y$10$Man6J/88lvx06vm/et6b8.qAn79JE3UpI81iFlDzA3MnnlMjdsyLG', 'Imie', 'Nazwisko', 'email@fajny.pl', '999888777', 'Miasto', 'Ulica', '12', '13-123', NULL);

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`category_id`);

--
-- Indeksy dla tabeli `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indeksy dla tabeli `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_id` (`order_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indeksy dla tabeli `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indeksy dla tabeli `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `categories`
--
ALTER TABLE `categories`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT dla tabeli `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT dla tabeli `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT dla tabeli `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT dla tabeli `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=177;

--
-- Ograniczenia dla zrzutów tabel
--

--
-- Ograniczenia dla tabeli `order_details`
--
ALTER TABLE `order_details`
  ADD CONSTRAINT `order_details_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `orders` (`order_id`),
  ADD CONSTRAINT `order_details_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `products` (`product_id`);

--
-- Ograniczenia dla tabeli `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`),
  ADD CONSTRAINT `products_ibfk_2` FOREIGN KEY (`category_id`) REFERENCES `categories` (`category_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
