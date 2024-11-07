-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 22, 2024 at 04:35 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `paintingdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `id` int(11) NOT NULL,
  `username` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `date_of_birth` date NOT NULL,
  `email` varchar(250) NOT NULL,
  `phone_number` int(10) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `role_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`id`, `username`, `password`, `date_of_birth`, `email`, `phone_number`, `status`, `role_id`) VALUES
(1, 'kvickars0', '$2y$12$l35arU9SPlkwPm3qngFRguZtqXBEmol6GjEmxUMyMU/oNZllFjU1G', '2024-03-26', 'rhabershon0@pen.io', 2147483647, 0, 1),
(2, 'mgover1', '$2a$04$hCD07zcoNnHzEDyjG.8boOuVKIaFceETfwsTZ3wYsj9F2p81ZrBUq', '2023-12-11', 'aocooney1@yahoo.co.jp', 2147483647, 1, 1),
(3, 'nhorwell2', '$2a$04$PZfsHwAjAbyWJ4d3IQx8a.Ek3XZ9iV2lsmM2o7sZFBspNhVDnfyjK', '2023-07-25', 'croja2@clickbank.net', 2147483647, 0, 1),
(4, 'dstpierre3', '$2a$04$Ahe1H4QKN41XXI7fzfMTPuRNLL0Aca2UBKk1dzREXRyrpPraLBAYS', '2023-09-22', 'adeyes3@census.gov', 2147483647, 0, 2),
(5, 'kantic4', '$2a$04$.DWN87lEzlBzUQvccQf3K.wJZtNAgQI3PzjNKmhUdTE3smKrKnDqW', '2023-12-25', 'gshoutt4@prweb.com', 2147483647, 1, 2),
(6, 'tmetts5', '$2a$04$uBUCtnMCHJtf1gzADearhet.sdLXUTrql4e2/4B9VEIgFf7ODVsNm', '2023-06-26', 'wnield5@goodreads.com', 2147483647, 0, 2),
(7, 'wnorwood6', '$2a$04$D65Th5e3mX31qgwOu14A6uaehJ4Fm3.8kuIkveKk7tLAKom5Yanca', '2023-12-29', 'sjammes6@omniture.com', 2147483647, 0, 2),
(8, 'rcrass7', '$2a$04$9DeZvcYwP7rVLX.f/oImnuMTZJgw5/KxH2fYXUjQ/wc5nYWvGDG6S', '2023-06-03', 'idelaci7@statcounter.com', 2147483647, 0, 2),
(9, 'gsmallcombe8', '$2a$04$baeT0JCwG8KZ.ujFs3yXr.ixULnrOqkaTubQO45ub9IdAiP3XhhS.', '2023-11-01', 'ebonfield8@smh.com.au', 2147483647, 1, 2),
(10, 'hmazzia9', '$2a$04$2Lj/dd9NzerKTicZOA4Y3.VZjY5RDOTJyVMeO1.1T62KJ9klOr.Uy', '2024-03-10', 'sscahill9@yolasite.com', 2147483647, 0, 2),
(11, 'smacguigana', '$2a$04$uLVhYzy4zLvzFJ47Z6AOHOaMIqErSkyq1nL8H3jQFUk3NaA.P3Bim', '2023-05-30', 'jlaxena@biglobe.ne.jp', 2147483647, 1, 2),
(12, 'arizzellob', '$2a$04$a5zTaUUm8uaRZES4FhcZge5Jgup5mEOWuZiHgLcpK.P.ukxm3dKTm', '2024-01-11', 'dmacarthurb@marketwatch.com', 2147483647, 0, 2),
(13, 'cjillissc', '$2a$04$BDlAn1K9OJv332OHKJruneEUo18BG/E9GC6tuPMLxFQRqTs4Xd2Qi', '2024-01-02', 'pmacfallc@mashable.com', 1785238710, 0, 2),
(14, 'bstembridged', '$2a$04$5at7xiEauW5ZTGyD.OLl9ui7yjCL1YdnqZQIB0KI2yFupGFEv8dPe', '2023-06-12', 'rmonteathd@facebook.com', 2147483647, 1, 2),
(15, 'gbonsalee', '$2a$04$RTKCqwbmiy7Vxmx7OBZ6teof7kYvltJgD1KRXuysWQE62mQtJIkFS', '2023-09-04', 'kgeeringe@dmoz.org', 1825586599, 0, 2),
(16, 'ddibbinf', '$2a$04$KFjj5IfjZkBYukhIWTuiKefJ/oByMLrzoZUBEszrpIhLAkLRZG6h6', '2023-09-24', 'dengallf@nhs.uk', 2147483647, 1, 2),
(17, 'tshandg', '$2a$04$eIkPmASfiz5h8jDThNbRzew9jAl8ayv6NvkY4.ouYdDof6k5Gb9oO', '2023-07-16', 'astruttong@geocities.jp', 2147483647, 1, 2),
(18, 'wdomleoh', '$2a$04$2qPcpqYyENxSUeO5XPr/1.T3Lbyfnxl/f5ANw8zxzfahtiDyYigVW', '2023-10-09', 'drigmandh@shareasale.com', 2147483647, 1, 2),
(19, 'geastami', '$2a$04$ZFW4qCQXGgKW7Lyk0mec9uvRovk2xZOqK4zilBWaEGVLi769Dz.eK', '2023-12-01', 'scalveni@narod.ru', 2147483647, 0, 2),
(20, 'letherseyj', '$2a$04$EQjlbK/e2DJhf1sDUioR3enE3zKK0yvtmfUYLPw9ZOx/8omrlIQ9W', '2023-08-24', 'tgaddj@time.com', 2147483647, 0, 2),
(21, 'tcoweuppek', '$2a$04$CDLAMCtkvcOcqmAG173LL.UF7ntbDke/lSteCcBwuEDOK1lN90lOG', '2024-04-20', 'mredsellk@dedecms.com', 1709149616, 0, 2),
(22, 'nmallaml', '$2a$04$ZOa6pd9UD4xMECfZRAVcHuwoceI3ixJP8oDK47e/xqK8jnS6GzKry', '2023-07-07', 'rbattertonl@google.de', 2147483647, 1, 2),
(23, 'lrowstonm', '$2a$04$PsuH1/2puZ2bQVPJEE.4g.t6osdBxIa1UUKyEi/oaQ9/91QdkTqzW', '2024-02-14', 'mpolyem@webeden.co.uk', 2147483647, 0, 2),
(24, 'lecclestonen', '$2a$04$KRrlQur/TDK78PVLo2HJb.PzBxAPqQnBNtLB9.ekFIZTFNWWHKJGy', '2023-10-13', 'ccolcloughn@liveinternet.ru', 1501734177, 1, 2),
(25, 'gheadlyo', '$2a$04$l/nEOsB1BBsB5St.3znVVew1J5SmSp0Ld1NUpRhqsBrUktlbcXX6S', '2023-06-16', 'lnaysheo@latimes.com', 2147483647, 1, 2),
(26, 'afrekep', '$2a$04$YMnvYBttDsm2knfIJNwz4.cLJwgZlz3gSBu/lPq1VY4zo7yj4Kkhu', '2023-07-19', 'tpoggp@vinaora.com', 2147483647, 1, 2),
(27, 'oburtonq', '$2a$04$1VEVKo/IIS.qPQyvjUFRs.5Ml86FFJA4hCDcLuaJLA8VJJ4kEbaIq', '2024-01-22', 'cwayneq@buzzfeed.com', 2147483647, 0, 2),
(28, 'jlaker', '$2a$04$9z2c3Tv.Y0daVvAdNFFiaeW8y.mjvZLFmk0R/ssKXn9N1m4OqfWLK', '2023-09-17', 'nbayler@odnoklassniki.ru', 2147483647, 0, 2),
(29, 'hsimnetts', '$2a$04$cVIRu/VGlYOszdhkZBVuAe8TgcjzxYJVmyamdczCQ.WTBdPpKvEIy', '2023-07-13', 'rokroys@washingtonpost.com', 2147483647, 1, 2),
(30, 'hbuckleight', '$2a$04$mH5g8OfCS7zZUr/4vbqZ7O2WoSD8iBhSHBeajRkHv0Xdxhaj8jI.C', '2023-08-10', 'gbulluckt@foxnews.com', 2147483647, 0, 2),
(31, 'jzanioliniu', '$2a$04$Ga3pDdF787EXfXhOYsixyeW5Kr9sAmiAOWCmjZatew6MOoUJB3IQa', '2024-02-19', 'cstilldaleu@domainmarket.com', 2147483647, 0, 2),
(32, 'sposnettev', '$2a$04$uHDsUP0DkaNQXsAaSYG23OjWY8bio5GZLDoK1SChp1vVIFM29O7xy', '2023-06-15', 'mkeneleysidev@trellian.com', 2147483647, 1, 2),
(33, 'cwiggettw', '$2a$04$a0yIoiJYURDVOXE3hCRRC.sWBNcOMWpH2FvLMfRVdzh.GOTU9XFJ2', '2024-03-29', 'skorousw@yolasite.com', 2147483647, 0, 2),
(34, 'ebrownfieldx', '$2a$04$Su20xxvL9f6OpS3Wah3WNODjuUYNV8LVW5g0v0hI1SzAX3I7DLTzi', '2023-06-17', 'dbyfieldx@weather.com', 2147483647, 1, 2),
(35, 'kdullingy', '$2a$04$SZe6cIGU6Z.AixashiPO/.qOSBKKz5CGqM9HPJbh3TRZV/MImJSxe', '2023-06-16', 'imazdony@cbc.ca', 2147483647, 1, 2),
(36, 'lmcclurez', '$2a$04$Ofnv7UkqQRApWz044plNkOe222zVXRgKIdtbQsQTsND5idGlCX1Ey', '2023-12-17', 'rbeaverz@eepurl.com', 2147483647, 0, 2),
(37, 'mmcmaster10', '$2a$04$qEeVBFysjjMZ8TIVgytQCuKhytM.A8f8LoIV6l6BJNxUw1AXDxJ92', '2024-03-27', 'mkitt10@mediafire.com', 2147483647, 1, 2),
(38, 'mfarrall11', '$2a$04$eEjHunr8cPdr1VP9OB2gMe5PrWUSbfIpCbSSNT9oSE2lEK6mg1Gvm', '2023-10-04', 'obartolozzi11@github.io', 2147483647, 1, 2),
(39, 'agrishmanov12', '$2a$04$ofmyiglxO/GDWSyVE1z79.Zkbpyvexp/xM4Z/l2Pf/BYo60Kg7ojO', '2023-06-15', 'dhadenton12@ning.com', 2147483647, 1, 2),
(40, 'sbaumford13', '$2a$04$9g85Kq6BeQf4bhNqTSQuWu7giO6SLi899COc6swGIfZ.gLMoPYFyK', '2024-01-21', 'uflatman13@guardian.co.uk', 2147483647, 1, 2),
(41, 'cwathen14', '$2a$04$BaxIoe0IqkJAk22Vk.UAeuoub2w3HWJOcaEidS/GasVn273.km/Bm', '2023-07-24', 'emoggie14@geocities.jp', 2147483647, 1, 2),
(42, 'gricharz15', '$2a$04$JZ/qr8mVL8sr3fdbvgKdTuqWF8DIieL5SnF4ijfEWHBSqpxmOPTSm', '2024-01-15', 'cderobert15@foxnews.com', 2147483647, 0, 2),
(43, 'gbealing16', '$2a$04$kbn8dzUBHVr1wzdNmvWB1OqL0JvlYZHzmY4txhb0W5.n3LXoeQaey', '2024-02-28', 'kliddell16@is.gd', 2147483647, 1, 2),
(44, 'ccudde17', '$2a$04$1U9bNghkdKb55tT1hytHWu2dY6LchUvz8HuXCDKFFL9i8WhuWXsju', '2024-03-02', 'ephilipson17@deviantart.com', 2147483647, 0, 2),
(45, 'mmayor18', '$2a$04$YH3uanjZzubrPVapoFo33.VY6kme4NiepbdGPST/V5YmLX1QAGdli', '2024-02-23', 'tmumbeson18@upenn.edu', 2147483647, 1, 2),
(46, 'fcrittal19', '$2a$04$UEHynQ0Q09Zv1/5qb/Fh3.13sJw8AkChAYPBt8Jqp6bGwsdHrgKxG', '2023-08-27', 'tdudding19@walmart.com', 2147483647, 1, 2),
(47, 'kcrocken1a', '$2a$04$1mjLXOQl7h26ZrzHfyx83e3Qec7UCWpLtRiJaD8t1FxxoJKRDt9ua', '2023-06-10', 'rdarrigoe1a@symantec.com', 2147483647, 1, 2),
(48, 'cflohard1b', '$2a$04$fPZLMUlmEcJWSTz32vGps.rlqh.I4iKJzH9hHek9b4K8tKmNk1FG6', '2023-06-12', 'twegenen1b@accuweather.com', 2147483647, 1, 2),
(49, 'locahill1c', '$2a$04$Q2D1oWtK3YfOj7mepkHsm.wF5vmtBmmYhF7C9XW9LR6T2zMc3Ad7m', '2023-05-12', 'aberryman1c@bravesites.com', 2147483647, 0, 2),
(50, 'mcowill1d', '$2a$04$AqrDW/9p9594IuBYaJ2zee5h95y3pvohMKiKhqoHXnf4.EnPTUPkm', '2023-06-17', 'htow1d@bloomberg.com', 2147483647, 0, 2),
(52, 'huyminh159', '$2y$12$a2wC0ZlT6ktyjfE.P.WR8.vpN5HoJxlWt8orp/73jeGtmmm0/Fk/m', '2024-04-05', 'huyminh@gmail.com', 905546874, 0, 2),
(53, 'huyminh159', '$2y$12$4aLg6nJYiOHDaKFU8p896u7TEFcwJ14SVea5Wm2zsUr0dZ.jAL97y', '2024-04-05', 'huyminh@gmail.com', 905546874, 0, 2),
(54, 'huyminh160', '$2y$12$4XE8LKttr7JrQFPJ7nPKou37crx02A3Pb31dWMwbrK2d7AxlLAeE2', '2024-04-05', 'huyminh@gmail.com', 905546874, 0, 2),
(58, 'vinhtest', '$2y$12$B9MNxDCnG3WXam0RNwgz3eBQzF5gYfWyxc5xiZ9SPrCI6HTDMyAHa', '2024-05-16', 'vinhtest@abc.com', 1231231231, 0, 2),
(59, 'vinhtest2', '$2y$12$v2oIjR4WevvSvLfBNOVRf.Yx8FHioCWsITuZEkoFjvvZfGxniEBWW', '2024-05-01', 'vinhtest2@asd.cas', 1111111111, 0, 2),
(60, 'vinhtest3', '$2y$12$BSn8Dncwxjj5nAiidN5ZaeXuq44Q0iSeQ4l/MOETlhMyGbtYFzDm2', '2024-05-01', 'vinhtest3@asd.acas', 1231231231, 0, 2),
(61, 'vinhtest4', '$2y$12$H6iXai9NC7MCsdL3gbeuJOOekSRplkI8blQTNpF8ZKZLr1IgI82rG', '2024-05-03', 'vinhtest4@shaja.cas', 1231231231, 0, 2),
(62, 'vinhtest5', '$2y$12$4Lb5rS5UZMA4ZnllMLoc4.Arz.rp/Ok4f7PlpcLaNXmWeA/YNr4HC', '2024-05-01', 'acc1@gmail.com', 1231231231, 0, 2),
(63, 'test111', '$2y$10$W9bk9ME6vGAaShEovyz9GOPO0SzXlFoI5tHb2ZdX5z8wuKW9nOimq', '2024-05-01', 'aaa@aa.ca', 1231231231, 0, 2),
(64, 'test222', '$2y$10$jrsyGKy001z06bQXRYurj.yrecoZoMoHI5tnQk2SETOCNHlIxN//.', '2024-05-01', 'acc2@gmail.com', 1231231231, 0, 2),
(65, 'vinhadmin', '$2y$12$aixvQU6FY.tW2JYUIZyffuUgqFGZ/ahYaeh2u/CqPuCSAVzZCpZe2', '2024-05-01', 'vinhadmin@123.asd', 1231231231, 1, 2),
(66, 'vinhadmin2', '$2y$12$VfcbUzIDZSJ2PNfiTG6vTuPcRg0ZXa6wbGoLuWbxDfnoOOQTdDCGS', '2024-05-01', 'vinhadmin2@123.asd', 1231231231, 0, 1),
(67, 'Lalatina159', '$2y$12$slW.9qf/UGfzsxkXc1kDV.MVnL3sYBHya5Pfev8tzJIKwZSQEM8hy', '2024-05-17', 'yoyo123@gmail.com', 965458526, 0, 1),
(68, 'vlad1234', '$2y$12$rMFSD8/HkTPOr0P8FjsTLeiMuXq0iApaPihrP72PPRXDrY0gdmi9a', '2024-05-09', 'yoyo1@gmail.com', 935478768, 1, 2),
(69, 'youngnuts1', '$2y$12$8Q8.RTpfegg4ccRzOjur/uu/vAQQm0Hfhp9r55Liv2JbmgqNk8.wO', '2024-05-18', 'yoyo22@gmail.com', 935478876, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `account_cart`
--

CREATE TABLE `account_cart` (
  `id` int(11) NOT NULL,
  `account_id` int(11) NOT NULL,
  `painting_id` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `account_cart`
--

INSERT INTO `account_cart` (`id`, `account_id`, `painting_id`, `status`, `quantity`) VALUES
(1, 23, 49, 1, 5),
(2, 44, 21, 1, 2),
(3, 37, 39, 0, 8),
(4, 19, 6, 0, 3),
(5, 2, 37, 1, 3),
(7, 30, 46, 1, 4),
(8, 46, 40, 1, 1),
(9, 47, 10, 0, 5),
(10, 25, 18, 0, 4),
(11, 8, 27, 0, 7),
(12, 1, 22, 0, 2),
(13, 2, 25, 1, 3),
(14, 45, 7, 0, 7),
(15, 9, 40, 0, 5),
(17, 38, 9, 1, 7),
(18, 37, 32, 1, 6),
(19, 47, 27, 0, 1),
(20, 11, 15, 1, 10),
(21, 23, 6, 1, 3),
(22, 11, 20, 0, 6),
(23, 10, 6, 1, 1),
(24, 3, 44, 1, 1),
(25, 24, 27, 0, 6),
(26, 20, 48, 0, 8),
(27, 15, 28, 0, 3),
(28, 11, 23, 0, 9),
(29, 40, 34, 1, 9),
(30, 13, 24, 0, 9),
(31, 46, 27, 1, 5),
(32, 19, 9, 1, 6),
(33, 25, 15, 0, 2),
(34, 12, 47, 0, 6),
(35, 42, 29, 0, 4),
(36, 12, 46, 1, 7),
(37, 46, 33, 1, 3),
(38, 11, 7, 0, 7),
(39, 44, 32, 1, 10),
(40, 15, 4, 0, 2),
(41, 23, 40, 0, 5),
(42, 13, 6, 0, 5),
(43, 27, 23, 1, 8),
(44, 48, 23, 0, 9),
(45, 38, 34, 1, 1),
(46, 40, 43, 0, 4),
(47, 9, 36, 1, 3),
(48, 24, 47, 0, 9),
(49, 31, 25, 0, 5),
(50, 46, 24, 1, 3);

-- --------------------------------------------------------

--
-- Table structure for table `artist`
--

CREATE TABLE `artist` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `artist`
--

INSERT INTO `artist` (`id`, `name`) VALUES
(1, 'aaaaaaaaaaa'),
(2, 'Anitra'),
(3, 'Kellia'),
(4, 'Caz'),
(5, 'Gretchen'),
(6, 'Shaine'),
(7, 'Hillary'),
(8, 'Rubi'),
(9, 'Marys'),
(10, 'Raddie'),
(11, 'Anthony'),
(12, 'Patton'),
(13, 'Cecil'),
(14, 'Elna'),
(15, 'Laird'),
(16, 'Nowell'),
(17, 'Salem'),
(18, 'Alic'),
(19, 'Early'),
(20, 'Lavinie'),
(21, 'Christina'),
(22, 'Rozelle'),
(23, 'Emeline'),
(24, 'Nellie'),
(25, 'Edmund'),
(26, 'Licha'),
(27, 'Marci'),
(28, 'Lucius'),
(29, 'Freeland'),
(30, 'Gordan'),
(31, 'Sheelah'),
(32, 'Andy'),
(33, 'Gracie'),
(34, 'Barri'),
(35, 'Amabelle'),
(36, 'Josie'),
(37, 'Gloriane'),
(38, 'Donal'),
(39, 'Roman'),
(40, 'Heath'),
(41, 'Berny'),
(42, 'Salli'),
(43, 'Dionne'),
(44, 'Fayth'),
(45, 'Georgiana'),
(46, 'Sheila-kathryn'),
(47, 'Mischa'),
(48, 'Sibbie'),
(49, 'Drew'),
(50, 'Allyce'),
(51, 'category1'),
(52, 'quangVinhMinh');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `name`) VALUES
(1, 'poster_3'),
(2, 'poster_2'),
(3, 'poster_3'),
(4, 'forAboutUsMenu'),
(5, 'forGalleryMenu'),
(6, 'forContactMenu'),
(7, 'gallery_album1'),
(8, 'gallery_album2'),
(9, 'gallery_album3'),
(10, 'gallery_album4'),
(11, 'rainy_summer');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `id` int(11) NOT NULL,
  `account_id` int(11) NOT NULL,
  `created_at` date NOT NULL,
  `delivery_address` varchar(250) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL,
  `update_at` date NOT NULL,
  `payment_method_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`id`, `account_id`, `created_at`, `delivery_address`, `status`, `update_at`, `payment_method_id`) VALUES
(1, 18, '2023-05-28', '10th Floor', 0, '2024-05-20', 1),
(2, 9, '2024-02-18', '18th Floor', 1, '2024-05-22', 3),
(3, 50, '2023-09-19', 'Suite 23', 1, '2023-11-02', 4),
(4, 8, '2024-03-31', '13th Floor', 0, '2024-03-18', 2),
(5, 36, '2024-04-07', 'Room 1035', 1, '2024-03-02', 2),
(6, 45, '2023-04-25', 'Apt 524', 0, '2023-08-18', 4),
(7, 23, '2023-10-25', 'Room 252', 0, '2024-03-05', 3),
(8, 15, '2023-07-30', 'Room 1161', 0, '2023-09-14', 1),
(9, 1, '2024-01-23', 'Suite 39', 1, '2023-10-06', 2),
(10, 12, '2024-01-01', 'Apt 818', 1, '2024-04-20', 1),
(11, 23, '2023-07-27', 'Room 1248', 1, '2024-04-04', 3),
(12, 8, '2023-06-09', 'Room 112', 1, '2023-06-14', 1),
(13, 28, '2024-03-12', 'Apt 887', 0, '2024-01-15', 3),
(14, 24, '2023-06-05', '15th Floor', 0, '2023-11-30', 4),
(15, 17, '2024-02-14', 'Room 296', 1, '2024-01-17', 2),
(16, 18, '2023-05-19', 'Apt 1621', 0, '2024-02-27', 2),
(17, 32, '2024-02-09', 'Apt 830', 0, '2023-06-23', 4),
(18, 35, '2023-09-14', 'Room 809', 1, '2024-03-16', 3),
(19, 17, '2023-08-28', 'Room 932', 0, '2023-06-15', 1),
(20, 8, '2023-12-15', 'PO Box 44754', 1, '2023-05-29', 2),
(21, 22, '2023-10-06', 'Apt 1704', 0, '2024-03-27', 1),
(22, 36, '2023-07-16', 'Room 1434', 0, '2024-01-23', 3),
(23, 14, '2024-02-08', 'PO Box 32609', 0, '2024-03-12', 1),
(24, 29, '2023-04-23', '19th Floor', 1, '2023-10-04', 3),
(25, 20, '2024-04-17', 'Room 691', 1, '2023-07-03', 4),
(26, 21, '2024-02-09', 'Room 1222', 0, '2023-05-05', 2),
(27, 23, '2023-11-19', 'PO Box 64789', 1, '2024-03-04', 2),
(28, 29, '2023-06-02', 'Apt 317', 1, '2024-03-11', 4),
(29, 10, '2023-08-13', 'Apt 1746', 1, '2023-10-04', 3),
(30, 9, '2024-03-12', 'Suite 100', 0, '2023-06-19', 1),
(31, 20, '2023-07-28', 'Suite 38', 1, '2023-06-06', 2),
(32, 47, '2023-07-08', '20th Floor', 1, '2023-06-08', 1),
(33, 21, '2023-09-29', 'Apt 610', 0, '2024-02-17', 3),
(34, 8, '2023-07-04', 'PO Box 32080', 1, '2023-09-25', 1),
(35, 18, '2024-03-10', '8th Floor', 1, '2024-01-01', 3),
(36, 33, '2023-11-17', 'Apt 665', 1, '2024-04-01', 4),
(37, 12, '2023-10-29', 'PO Box 11445', 0, '2024-02-03', 2),
(38, 4, '2023-10-11', 'Room 58', 1, '2023-06-11', 2),
(39, 44, '2023-05-11', 'PO Box 34964', 0, '2024-03-07', 4),
(40, 20, '2024-03-24', 'Room 1999', 1, '2023-11-20', 3),
(41, 25, '2024-03-14', 'Room 1733', 1, '2024-02-08', 1),
(42, 42, '2023-08-28', 'Room 490', 1, '2024-02-19', 2),
(43, 46, '2023-09-25', 'PO Box 41643', 0, '2024-02-05', 1),
(44, 29, '2024-01-23', 'Room 1578', 0, '2024-01-18', 3),
(45, 43, '2023-06-13', 'Room 914', 0, '2024-01-21', 1),
(46, 45, '2023-12-12', 'PO Box 63110', 1, '2023-10-06', 3),
(47, 40, '2024-04-19', 'Suite 87', 0, '2024-01-10', 4),
(48, 37, '2024-03-11', 'Suite 37', 1, '2023-09-16', 2),
(49, 14, '2023-04-29', 'PO Box 60990', 0, '2023-09-22', 2),
(50, 16, '2023-12-11', '13th Floor', 1, '2023-11-22', 4),
(51, 63, '2024-05-18', 'test adress 111', 0, '2024-05-18', 1),
(52, 63, '2024-05-18', 'asd', 0, '2024-05-18', 1),
(53, 63, '2024-05-18', 'ggg', 0, '2024-05-18', 1),
(54, 63, '2024-05-18', 'asdasd', 0, '2024-05-18', 1),
(55, 63, '2024-05-18', 'asdasd', 0, '2024-05-18', 1),
(56, 63, '2024-05-19', 'asd', 0, '2024-05-19', 1),
(57, 63, '2024-05-19', 'asd', 0, '2024-05-19', 1),
(58, 61, '2024-05-20', 'asd', 0, '2024-05-20', 1),
(59, 64, '2024-05-20', 'FNXDFNDT', 0, '2024-05-20', 1),
(60, 64, '2024-05-20', 'sebvsb', 0, '2024-05-20', 2),
(61, 62, '2024-05-20', 'sebvsb', 0, '2024-05-20', 3),
(62, 62, '2024-05-20', 'lolo', 0, '2024-05-20', 3),
(63, 63, '2024-05-21', 'bdfbfn cbf', 0, '2024-05-21', 4),
(64, 63, '2024-05-21', 'fbdbdfbdb', 0, '2024-05-21', 4),
(65, 63, '2024-05-21', 'yoyoyoyoyo', 0, '2024-05-21', 4),
(66, 65, '2024-05-21', 'kakakakaka', 0, '2024-05-21', 3),
(67, 65, '2024-05-22', 'hg', 0, '2024-05-22', 2),
(68, 65, '2024-05-22', 'gfghggh', 0, '2024-05-22', 3);

-- --------------------------------------------------------

--
-- Table structure for table `orderdetail`
--

CREATE TABLE `orderdetail` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `painting_id` int(11) NOT NULL,
  `price` double NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orderdetail`
--

INSERT INTO `orderdetail` (`id`, `order_id`, `painting_id`, `price`, `quantity`) VALUES
(1, 26, 43, 4597, 5),
(2, 11, 20, 7721, 9),
(3, 4, 34, 5602, 8),
(4, 24, 17, 3106, 8),
(5, 18, 41, 6260, 3),
(6, 26, 45, 9930, 8),
(7, 44, 32, 7270, 2),
(8, 9, 14, 8931, 4),
(9, 45, 46, 7502, 9),
(10, 37, 39, 5392, 4),
(11, 6, 48, 5837, 5),
(12, 47, 19, 5342, 6),
(13, 3, 16, 5805, 1),
(14, 19, 43, 5010, 9),
(15, 17, 18, 9791, 7),
(16, 20, 7, 5927, 5),
(17, 46, 19, 7850, 10),
(18, 18, 16, 4093, 1),
(19, 39, 27, 6084, 5),
(20, 9, 48, 1516, 1),
(21, 41, 50, 4287, 9),
(22, 8, 5, 729, 4),
(23, 50, 3, 1047, 4),
(24, 40, 31, 1320, 7),
(25, 5, 28, 2231, 6),
(26, 4, 2, 5303, 2),
(27, 48, 13, 9690, 7),
(28, 28, 4, 7869, 2),
(29, 38, 42, 9195, 10),
(30, 8, 24, 1587, 8),
(31, 3, 12, 4711, 4),
(32, 36, 39, 7100, 6),
(33, 49, 37, 6931, 1),
(34, 23, 49, 3076, 3),
(35, 21, 3, 5365, 1),
(36, 10, 44, 5834, 9),
(37, 8, 22, 4694, 6),
(38, 24, 29, 1853, 2),
(39, 2, 4, 3651, 8),
(40, 13, 28, 6318, 2),
(41, 5, 34, 2949, 6),
(42, 43, 15, 3222, 1),
(43, 26, 19, 8119, 8),
(44, 44, 11, 1039, 7),
(45, 16, 5, 4128, 4),
(46, 50, 12, 8914, 7),
(47, 48, 38, 2072, 10),
(48, 27, 40, 8949, 8),
(49, 39, 17, 5574, 8),
(50, 6, 10, 9628, 7),
(51, 51, 2, 3498, 12),
(52, 51, 3, 1263, 22),
(53, 51, 11, 888, 88),
(54, 51, 9, 4500, 5),
(55, 51, 14, 5555, 55),
(56, 52, 3, 1263, 89),
(57, 52, 2, 3498, 22),
(58, 53, 1, 600, 1),
(59, 53, 2, 3498, 99),
(60, 54, 3, 1263, 12),
(61, 54, 3, 1263, 23),
(62, 55, 3, 1263, 52),
(63, 56, 2, 3498, 2),
(64, 56, 3, 1263, 22),
(65, 57, 2, 3498, 1),
(66, 58, 2, 3498, 1),
(67, 58, 6, 6000, 5),
(68, 59, 10, 5660, 2),
(69, 60, 2, 3498, 2),
(70, 61, 3, 1263, 99),
(71, 62, 2, 3498, 4),
(72, 63, 4, 9713, 2),
(73, 64, 42, 3795, 2),
(74, 65, 5, 5550, 2),
(75, 66, 5, 5550, 2),
(76, 67, 4, 9713, 2),
(77, 68, 12, 4100, 5);

-- --------------------------------------------------------

--
-- Table structure for table `painting`
--

CREATE TABLE `painting` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `price` double NOT NULL,
  `quantity` int(11) NOT NULL,
  `unique` tinyint(4) NOT NULL,
  `description` varchar(250) NOT NULL,
  `created_at` date NOT NULL,
  `artist_id` int(11) NOT NULL,
  `painting_style_category_id` int(11) NOT NULL,
  `painting_surface_category_id` int(11) NOT NULL,
  `painting_color_category_id` int(11) NOT NULL,
  `width` int(11) NOT NULL,
  `height` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `painting`
--

INSERT INTO `painting` (`id`, `name`, `price`, `quantity`, `unique`, `description`, `created_at`, `artist_id`, `painting_style_category_id`, `painting_surface_category_id`, `painting_color_category_id`, `width`, `height`, `status`) VALUES
(1, 'Charlo', 600, 2, 1, 'lorem dorime eadveadveahvb h ev ahvb ivv v daibvsdvb skvb aidbv ad ivbadivn idsj kd viahdbvisd jk dskv bv djs bks sdk3 bdsbjsb dsk3 ', '2024-04-04', 18, 1, 2, 5, 97, 54, 0),
(2, 'Gordie', 3498, 5, 1, 'Maecenas ut massa quis augue luctus tincidunt. Nulla mollis molestie lorem. Quisque ut erat.\n\nCurabitur gravida nisi at nibh. In hac habitasse platea dictumst. Aliquam augue quam, sollicitudin vitae, consectetuer eget, rutrum at, lorem.', '2024-05-16', 42, 5, 4, 5, 23, 183, 0),
(3, 'Shigemiiiin', 1263, 6, 1, 'bfnb adehbrnxd vajh b vhjb ibvaijvnisb jos vjse vbjs jodsnb us bosd bobn ojd bojad vjdsojb aivb ejd djv dsji bjds bsdj bkj', '2024-05-22', 32, 3, 2, 4, 122, 71, 0),
(4, 'Godardlouis', 9713, 6, 1, 'Aenean lectus. Pellentesque eget nunc. Donec quis orci eget orci vehicula condimentum.', '2024-05-22', 18, 3, 5, 4, 120, 30, 1),
(5, 'Kirata', 5550, 3, 1, 'drhnbsrhsrsrfhbns jh vh vbhsbv jbv jkb adj vjkadbvkj jk jkdbjsnbjkfb sjb dsj jkdsn jkds ds3jb sj3bndsjb djs bkjds bkjb dsj db', '2024-04-04', 11, 6, 2, 7, 16, 188, 0),
(6, 'Lorita', 6000, 5, 0, 'efveqgvfeswgaws bsb sbsbvsd vvjksdb vjkd jdbvsbnjks jkb dsjbnsdkjb sj3b sjlbnbsjdnbjfs  bjs bjlsnbjdsnbjslb sjlsjvsdnsj', '2024-04-06', 44, 3, 2, 2, 151, 27, 0),
(7, 'Lothario', 3262, 1, 1, 'Vestibulum ac est lacinia nisi venenatis tristique. Fusce congue, diam id ornare imperdiet, sapien urna pretium nisl, ut volutpat sapien arcu sed augue. Aliquam erat volutpat.\n\nIn congue. Etiam justo. Etiam pretium iaculis justo.', '2024-05-13', 17, 4, 1, 3, 172, 188, 0),
(8, 'Galvan', 5299, 4, 1, 'Vestibulum ac est lacinia nisi venenatis tristique. Fusce congue, diam id ornare imperdiet, sapien urna pretium nisl, ut volutpat sapien arcu sed augue. Aliquam erat volutpat.', '2024-05-13', 47, 1, 3, 2, 137, 146, 0),
(9, 'Peruki', 4500, 1, 1, 'gvwrgbqeg bhvbsvsbvsvbskjv dk s dvjnsdvsbnvuosbnso jo ndsbnsojbndsobnsb nsj sojbsnbonsdobnsdl sdob ndsbnsodbnsljb sbjsnsd', '2024-04-04', 4, 2, 3, 7, 39, 50, 0),
(10, 'Rassbery', 5660, 1, 1, 'bfshbsrgb vavhsbd vhad vjka dhkvbakvbsdjv sj s3j nskfjb js jsnbvjknv kjfsbnks jsknvkjdsbvksbkj kjsnvsdjvbjkds j3ks jsdnvjkdsbsdj', '2024-04-06', 10, 1, 2, 4, 132, 46, 0),
(11, 'Dedie', 888, 9, 0, 'Praesent blandit. Nam nulla. Integer pede justo, lacinia eget, tincidunt eget, tempus vel, pede.', '2024-05-25', 41, 3, 2, 1, 110, 77, 0),
(12, 'Suitabliz', 4100, 2, 1, 'bnfdnbsedhgbrws dvsvbkvbsjbnsjnb soj sjnsujbnisnbisobnsj jl nosjfnbosnbonsfbosfn js bjsnbusb osdn sdjonbdjso sjbnsdj sjodnbdsjnbjsn ', '2024-04-17', 21, 1, 5, 8, 14, 46, 0),
(13, 'The last meal', 20000, 1, 1, 'hnsdtfhnbswryh hsdvjbjeskvjebovnsovlsn j js jksn jsojb  sn lfs onsfbnfsjbnsfjn kjf fsjbnjkfsnbjf fs3j jkfsnbjs js jsn vjkn sjb sjl bkjs sjn dsjn', '2024-04-12', 38, 6, 2, 4, 45, 75, 0),
(14, 'Coolguy ', 5555, 2, 0, 'hgberswzghbwser evevedveah vjhdb id ihdbv ihd is ds vonvonadu od sosdnvusdnuobnsdudj jds u ndsuivnos nsdo osvn usonbo dsoj nsunvusnbiosnbio', '2024-04-20', 11, 5, 4, 2, 36, 71, 0),
(15, 'Jonell', 1795, 4, 0, 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vivamus vestibulum sagittis sapien. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.\n\nEtiam vel augue. Vestibulum rutrum rutrum', '2024-05-15', 11, 3, 2, 2, 197, 35, 0),
(16, 'Otto', 5594, 3, 0, 'Nullam sit amet turpis elementum ligula vehicula consequat. Morbi a ipsum. Integer a nibh.\n\nIn quis justo. Maecenas rhoncus aliquam lacus. Morbi quis tortor id nulla ultrices aliquet.', '2024-05-14', 1, 4, 2, 3, 116, 92, 0),
(17, 'Dorie', 6876, 7, 0, 'Phasellus in felis. Donec semper sapien a libero. Nam dui.', '2024-05-25', 43, 2, 5, 1, 104, 110, 0),
(18, 'Thancred', 600, 10, 1, 'rhbszhbgggser hvbadhbvsnvsdlnvik n ps nbsfmbksfn pis bipsknbmisinmbipnsf ifs fpfn siopnbisnbiosnsfifsb fb  sfbbsbsb fdb', '2024-05-20', 35, 2, 1, 1, 30, 20, 0),
(19, 'Carinchi', 2000, 1, 0, 'rhfbsrhbjhisb u sjvnsio ns biobnisfon iosfnbsfionbifob nfspibnisfp npfsbnipfsnm bipnmsi pffbnfso bnfpb npfsn psfnbips pfsmnbpsims', '2024-04-12', 32, 4, 5, 1, 115, 70, 0),
(20, 'Cansfvcas', 5555, 2, 0, 'brhssdfbhsrjb kb snfjbsfn bsf nbiksfnbisfnbisbnms0fkb pfik nfk bfpikb nmsfpb msfpb spbmsfpbmspbmspboms pmf po m pk s psm posfmbpo3fsmbpsbmf', '2024-04-20', 19, 1, 2, 5, 18, 176, 0),
(21, 'Jere', 7557, 8, 0, 'Praesent id massa id nisl venenatis lacinia. Aenean sit amet justo. Morbi ut odio.\n\nCras mi pede, malesuada in, imperdiet et, commodo vulputate, justo. In blandit ultrices enim. Lorem ipsum dolor sit amet, consectetuer adipiscing elit.', '2024-05-01', 11, 4, 5, 3, 14, 52, 0),
(22, 'Darb', 9521, 9, 1, 'Phasellus sit amet erat. Nulla tempus. Vivamus in felis eu sapien cursus vestibulum.', '2024-05-02', 37, 5, 3, 1, 195, 18, 0),
(23, 'Danit', 8288, 2, 0, 'Praesent id massa id nisl venenatis lacinia. Aenean sit amet justo. Morbi ut odio.', '2024-04-05', 25, 4, 2, 5, 26, 88, 0),
(24, 'Siouxie', 3208, 8, 0, 'Morbi non lectus. Aliquam sit amet diam in magna bibendum imperdiet. Nullam orci pede, venenatis non, sodales sed, tincidunt eu, felis.\n\nFusce posuere felis sed lacus. Morbi sem mauris, laoreet ut, rhoncus aliquet, pulvinar sed, nisl. Nunc rhoncus du', '2024-04-13', 33, 5, 4, 3, 21, 75, 0),
(25, 'Odetta', 8876, 2, 1, 'In sagittis dui vel nisl. Duis ac nibh. Fusce lacus purus, aliquet at, feugiat non, pretium quis, lectus.', '2024-03-16', 37, 3, 1, 2, 174, 191, 0),
(26, 'Dorthea', 7006, 7, 0, 'In quis justo. Maecenas rhoncus aliquam lacus. Morbi quis tortor id nulla ultrices aliquet.', '2024-04-07', 43, 2, 4, 1, 97, 130, 0),
(27, 'Jenine', 4340, 1, 0, 'In congue. Etiam justo. Etiam pretium iaculis justo.', '2024-03-02', 24, 4, 2, 4, 185, 27, 0),
(28, 'Rea', 5845, 9, 0, 'Nullam porttitor lacus at turpis. Donec posuere metus vitae ipsum. Aliquam non mauris.\n\nMorbi non lectus. Aliquam sit amet diam in magna bibendum imperdiet. Nullam orci pede, venenatis non, sodales sed, tincidunt eu, felis.', '2024-04-30', 47, 2, 4, 2, 137, 97, 0),
(29, 'Petronella', 5204, 3, 1, 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vivamus vestibulum sagittis sapien. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.', '2024-05-18', 39, 3, 1, 1, 155, 65, 0),
(30, 'Barret', 7451, 8, 0, 'Sed sagittis. Nam congue, risus semper porta volutpat, quam pede lobortis ligula, sit amet eleifend pede libero quis orci. Nullam molestie nibh in lectus.', '2024-02-27', 30, 5, 4, 2, 79, 187, 0),
(31, 'Jillene', 6630, 2, 1, 'In hac habitasse platea dictumst. Morbi vestibulum, velit id pretium iaculis, diam erat fermentum justo, nec condimentum neque sapien placerat ante. Nulla justo.\n\nAliquam quis turpis eget elit sodales scelerisque. Mauris sit amet eros. Suspendisse ac', '2024-04-16', 40, 1, 3, 3, 28, 15, 0),
(32, 'Juli', 7629, 3, 1, 'Nam ultrices, libero non mattis pulvinar, nulla pede ullamcorper augue, a suscipit nulla elit ac nulla. Sed vel enim sit amet nunc viverra dapibus. Nulla suscipit ligula in lacus.\n\nCurabitur at ipsum ac tellus semper interdum. Mauris ullamcorper puru', '2024-03-12', 42, 6, 1, 3, 75, 148, 0),
(33, 'Cristen', 3060, 4, 0, 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vivamus vestibulum sagittis sapien. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.', '2024-03-03', 14, 3, 3, 4, 185, 180, 0),
(34, 'Elisha', 2732, 1, 0, 'Duis bibendum. Morbi non quam nec dui luctus rutrum. Nulla tellus.', '2024-02-14', 43, 2, 3, 1, 133, 153, 0),
(35, 'Kristal', 8942, 5, 1, 'Curabitur in libero ut massa volutpat convallis. Morbi odio odio, elementum eu, interdum eu, tincidunt in, leo. Maecenas pulvinar lobortis est.\n\nPhasellus sit amet erat. Nulla tempus. Vivamus in felis eu sapien cursus vestibulum.', '2024-03-05', 21, 3, 3, 1, 139, 78, 0),
(36, 'Bea', 7837, 10, 0, 'Nullam sit amet turpis elementum ligula vehicula consequat. Morbi a ipsum. Integer a nibh.', '2024-04-13', 9, 4, 2, 4, 117, 132, 0),
(37, 'Rodolph', 9955, 4, 0, 'Nam ultrices, libero non mattis pulvinar, nulla pede ullamcorper augue, a suscipit nulla elit ac nulla. Sed vel enim sit amet nunc viverra dapibus. Nulla suscipit ligula in lacus.', '2024-03-09', 17, 5, 2, 5, 97, 49, 0),
(38, 'Lororito', 667, 1, 1, 'ntdgndrnhbdxtfhbs sdb sdojunbiosbnisobnsobnosnv osnbiosnbosn sbnksbnps0ibnipsfnbkfxnsfi0bnmib nmfsipbnfsin ifn s', '2024-04-11', 49, 4, 4, 3, 63, 166, 0),
(39, 'Nanamo', 5556, 0, 0, 'ndjnshbsrhgsrghbJIVB vdsjnvosdnbojsdnbdisonbofsnb nsip nfsionbiosfnbisn fpin ispfn isi nsbnsionbsionb sonb dpkn', '2024-04-09', 4, 1, 2, 6, 18, 15, 0),
(40, 'Rau baurn', 44445, 1, 0, 'fghjndtjndhnj hrvb sjbv jsdnvjkdvnjdvn jdlvnsf3 nsbklsn lsk nsdljk fnjlfsn ldsb nskflbnfkl nfkl nf b kfnkk bsb fsxb fsbsfb sbsbbsb dsvbdbfbdfb', '2024-04-11', 25, 4, 1, 2, 146, 179, 0),
(41, 'Lahabreh', 5550, 1, 1, 'rgbrsghbweh4wrhw gsegbseaevejnvjnvojnbjldn  vjladn lbn beibnsibnsibnmsribnmisfnbipsnm isnmfpmnpn msn mrsfpnmsfipmnpsnmpisfnmpsnmfnpomdpofm', '2024-04-13', 2, 2, 4, 6, 138, 94, 0),
(42, 'Magda', 3795, 8, 0, 'Quisque porta volutpat erat. Quisque erat eros, viverra eget, congue eget, semper rutrum, nulla. Nunc purus.', '2024-03-04', 4, 6, 1, 1, 77, 46, 0),
(43, 'Kali', 6666, 0, 1, 'dbxshbnsdzxbnhsdzxb vs3jb jsb k lsbkn slb nmslbsfnml l ks lb nmslbsbklsnbklsb fskl dsl nsdb nksldb mdslkbmsd', '2024-04-14', 21, 5, 3, 8, 123, 130, 0),
(44, 'Lalatina', 10000, 1, 1, 'ntdgjnjsrhbrseh', '2024-04-27', 13, 5, 2, 4, 33, 29, 0),
(45, 'Barbie', 9797, 8, 0, 'Cras non velit nec nisi vulputate nonummy. Maecenas tincidunt lacus at velit. Vivamus vel nulla eget eros elementum pellentesque.\n\nQuisque porta volutpat erat. Quisque erat eros, viverra eget, congue eget, semper rutrum, nulla. Nunc purus.', '2024-02-19', 37, 4, 1, 3, 63, 119, 0),
(46, 'Torey', 7903, 7, 0, 'Praesent id massa id nisl venenatis lacinia. Aenean sit amet justo. Morbi ut odio.', '2024-03-06', 10, 2, 1, 2, 64, 45, 0),
(47, 'Waldemar', 1484, 1, 0, 'In hac habitasse platea dictumst. Etiam faucibus cursus urna. Ut tellus.', '2024-05-04', 26, 5, 1, 3, 79, 191, 0),
(48, 'Caren', 8469, 7, 0, 'Cras mi pede, malesuada in, imperdiet et, commodo vulputate, justo. In blandit ultrices enim. Lorem ipsum dolor sit amet, consectetuer adipiscing elit.\n\nProin interdum mauris non ligula pellentesque ultrices. Phasellus id sapien in sapien iaculis con', '2024-03-20', 6, 1, 1, 4, 17, 25, 0),
(49, 'Donny', 2034, 6, 0, 'Morbi porttitor lorem id ligula. Suspendisse ornare consequat lectus. In est risus, auctor sed, tristique in, tempus sit amet, sem.\n\nFusce consequat. Nulla nisl. Nunc nisl.', '2024-05-09', 39, 6, 4, 5, 17, 83, 0),
(50, 'Perceval', 2830, 30, 1, 'Maecenas ut massa quis augue luctus tincidunt. Nulla mollis molestie lorem. Quisque ut erat.\r\n\r\nCurabitur gravida nisi at nibh. In hac habitasse platea dictumst. Aliquam augue quam, sollicitudin vitae, consectetuer eget, rutrum at, lorem.', '2024-05-20', 29, 3, 1, 5, 30, 20, 0),
(52, 'charlo1', 1000, 3, 0, 'vfb xbbfcxbxfb', '2024-06-21', 43, 4, 4, 6, 43, 113, 0),
(54, 'pikachu', 50, 3, 0, 'yellow rat', '2024-05-18', 32, 5, 3, 2, 107, 180, 0),
(55, 'rattatuie', 500, 5, 0, 'a chef rat', '2024-05-18', 23, 5, 3, 4, 120, 192, 0),
(56, 'kachupi', 500, 5, 0, 'vsvbs', '2024-05-15', 43, 3, 3, 4, 161, 42, 0),
(57, 'yoyoyo', 5858, 2, 1, 'ewfvevda', '2024-05-15', 25, 4, 2, 5, 140, 190, 0),
(58, 'kikijvacva', 3000, 20, 0, 'fvssd sf', '2024-05-20', 2, 3, 2, 2, 30, 30, 1),
(59, 'the last supper', 16000, 3, 1, 'the last meal of jessus and 12 aposals', '2024-05-22', 38, 6, 1, 4, 100, 50, 1),
(60, 'the last supper', 16000, 3, 1, 'fbvb fdcbdb b', '2024-05-22', 49, 6, 2, 4, 100, 50, 1),
(61, 'the last supper', 16000, 3, 1, 'fvbsvbvsvd', '2024-05-22', 49, 6, 2, 1, 100, 50, 1),
(62, 'the last supper', 16000, 3, 1, 'fdd bx bdxv dv', '2024-05-22', 49, 3, 4, 7, 100, 50, 1),
(63, 'thelastsupper', 16000, 2, 1, 'vf sz v dvdzvvzdvz', '2024-05-22', 32, 3, 2, 3, 100, 50, 1),
(64, 'thelastsupper', 1000, 6, 1, 'csdvcsvcsvcszcz', '2024-05-22', 25, 6, 1, 4, 100, 50, 1),
(65, 'thelastsupper', 31300, 3, 1, 'vds bxb zxb', '2024-05-22', 25, 3, 1, 2, 100, 50, 1),
(66, 'suppersuper', 3, 6, 1, 'tfgnfncd', '2024-05-22', 50, 2, 1, 2, 100, 50, 1),
(67, 'fsbfsb fxb fx', 5812, 10, 1, ' x dxdx   dx xd dxv fbb', '2024-04-17', 35, 5, 2, 4, 100, 30, 1),
(68, 'superstriker', 3000, 6, 0, 'vfsvsfvdsvxv xv', '2024-05-22', 14, 2, 2, 7, 50, 50, 1),
(69, 'dingos', 2000, 6, 0, 'fvssv zsdv dszv dsz', '2024-05-22', 50, 1, 2, 3, 50, 30, 1),
(70, 'dfbhjvbdbvdfhvbfhvbdhk', 500, 52, 0, 'vcvc vx cx zx zx x z zc', '2024-05-22', 32, 3, 1, 2, 100, 30, 1),
(71, 'thelastsupper', 16000, 2, 1, 'nvhvgnmc', '2024-05-22', 32, 2, 2, 2, 100, 50, 1),
(72, 'dingos', 16000, 3, 1, 'gfnbdnbdxf', '2024-05-22', 2, 2, 2, 2, 120, 50, 1);

-- --------------------------------------------------------

--
-- Table structure for table `painting_color_category`
--

CREATE TABLE `painting_color_category` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `painting_color_category`
--

INSERT INTO `painting_color_category` (`id`, `name`) VALUES
(1, 'Acrylic'),
(2, 'Ball point pen'),
(3, 'Charcoal'),
(4, 'Oil'),
(5, 'Water'),
(6, 'Poster'),
(7, 'Enamel'),
(8, 'Ink');

-- --------------------------------------------------------

--
-- Table structure for table `painting_style_category`
--

CREATE TABLE `painting_style_category` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `painting_style_category`
--

INSERT INTO `painting_style_category` (`id`, `name`) VALUES
(1, 'Abstarct'),
(2, 'Landscape'),
(3, 'Flower'),
(4, 'Nature'),
(5, 'Figurative'),
(6, 'Religious');

-- --------------------------------------------------------

--
-- Table structure for table `painting_surface_category`
--

CREATE TABLE `painting_surface_category` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `painting_surface_category`
--

INSERT INTO `painting_surface_category` (`id`, `name`) VALUES
(1, 'Acrylic'),
(2, 'Canvas'),
(3, 'Paper'),
(4, 'OHP sheet'),
(5, 'Fabric');

-- --------------------------------------------------------

--
-- Table structure for table `payment_method`
--

CREATE TABLE `payment_method` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `payment_method`
--

INSERT INTO `payment_method` (`id`, `name`) VALUES
(1, 'Master Card'),
(2, 'Visa Card'),
(3, 'Paypal'),
(4, 'Cash');

-- --------------------------------------------------------

--
-- Table structure for table `photos`
--

CREATE TABLE `photos` (
  `id` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `painting_id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `photos`
--

INSERT INTO `photos` (`id`, `status`, `painting_id`, `name`) VALUES
(3, 0, 3, 'miar.jpg'),
(4, 1, 4, 'liar.jpg'),
(5, 0, 5, 'lira.jpg'),
(6, 1, 6, 'mura.jpg'),
(7, 1, 7, 'siar.jpg'),
(8, 1, 8, 'liti.jpg'),
(9, 1, 9, 'muli.jpg'),
(10, 1, 10, 'lara.jpg'),
(11, 0, 11, 'zero.jpg'),
(12, 1, 12, 'lop.jpg'),
(13, 0, 13, 'lpip.jpg'),
(14, 1, 14, 'vfs.jpg'),
(15, 0, 15, 'gnd.jpg'),
(16, 1, 16, 'frsvdza.jpg'),
(17, 0, 17, 'nhf.jpg'),
(18, 1, 18, 'ewg.jpg'),
(19, 1, 19, 'nyrn.jpg'),
(20, 1, 20, 'wDFS.jpg'),
(21, 1, 21, 'NNDT.jpg'),
(22, 1, 22, 'vrdfs.jpg'),
(23, 0, 23, 'nfbd.jpg'),
(24, 1, 24, 'ert.jpg'),
(25, 1, 25, 'aedzq.jpg'),
(26, 0, 26, 'eaf.jpg'),
(27, 1, 27, 'rtwe.jpg'),
(28, 1, 28, 'teyd.jpg'),
(29, 0, 29, 'qwega.jpg'),
(30, 1, 30, 'hdre.jpg'),
(31, 1, 31, 'htedfxer.jpg'),
(32, 1, 32, 'hdet.jpg'),
(33, 0, 33, 'jtyre.jpg'),
(34, 1, 34, 'qaedg.jpg'),
(35, 0, 35, 'hted.jpg'),
(36, 1, 36, 'hrsfw.jpg'),
(37, 0, 37, 'hraqqea.jpg'),
(38, 1, 38, 'tjned.jpg'),
(39, 1, 39, 'hswr.jpg'),
(40, 1, 40, 'aWEFQ.jpg'),
(41, 0, 41, 'GSWE.jpg'),
(42, 1, 42, 'hnrdse.jpg'),
(43, 0, 43, 'myfht.jpg'),
(44, 1, 44, 'aegzdq.jpg'),
(45, 0, 45, 'rsfhb.jpg'),
(46, 1, 46, 'hrsw.jpg'),
(47, 0, 47, 'mgcdt.jpg'),
(48, 1, 48, 'ngyff.jpg'),
(49, 0, 49, 'fyggujt.jpg'),
(50, 1, 50, 'rfbxdsr.jpg'),
(51, 0, 38, '664ae3f7bfd87.jpg'),
(52, 0, 5, '664b414ea1d75.jpg'),
(53, 0, 3, '664d05e61fa95.jpg'),
(54, 0, 3, '664d05e62141b.jpg'),
(55, 0, 3, '664d05e62207f.jpg'),
(56, 0, 7, '664d06102d5a7.jpg'),
(57, 0, 7, '664d06102edd7.jpg'),
(59, 0, 5, '664d3ae6e1b55.jpg'),
(60, 1, 14, 'mika'),
(61, 1, 1, '664d4f392a1c9.jpg'),
(62, 1, 26, '664d502ed95ee.jpg'),
(63, 1, 49, '664d5062afcc8.jpg'),
(64, 1, 72, '664d5472f00c8.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `photo_gallery`
--

CREATE TABLE `photo_gallery` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `gallery_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `photo_gallery`
--

INSERT INTO `photo_gallery` (`id`, `name`, `gallery_id`) VALUES
(1, 'poster1.jpg', 1),
(2, 'contact.jpg', 6),
(3, 'gallery.jpg', 5),
(4, 'liar.jpg', 7),
(5, 'aboutus.jpg', 4),
(6, 'mura.jpg', 1),
(7, 'poster2.jpg', 2),
(8, 'liti.jpg', 10),
(9, 'muli.jpg', 9),
(10, 'poster3.jpg', 3),
(11, 'zero.jpg', 7),
(12, 'lop.jpg', 10),
(13, 'lpip.jpg', 9),
(14, 'vfs.jpg', 7),
(15, 'gnd.jpg', 8),
(16, 'frsvdza.jpg', 8),
(17, 'nhf.jpg', 9),
(18, 'ewg.jpg', 10),
(19, 'nyrn.jpg', 10),
(20, 'wDFS.jpg', 7),
(21, 'NNDT.jpg', 9),
(22, 'vrdfs.jpg', 8),
(23, 'nfbd.jpg', 8),
(24, 'ert.jpg', 9),
(25, 'aedzq.jpg', 10),
(26, 'eaf.jpg', 7),
(27, 'rtwe.jpg', 5),
(28, 'teyd.jpg', 6),
(29, 'qwega.jpg', 5),
(30, 'hdre.jpg', 5),
(31, 'htedfxer.jpg', 1),
(32, 'hdet.jpg', 4),
(33, 'jtyre.jpg', 8),
(34, 'qaedg.jpg', 2),
(35, 'hted.jpg', 6),
(36, 'hrsfw.jpg', 8),
(37, 'hraqqea.jpg', 4),
(38, 'tjned.jpg', 6),
(39, 'hswr.jpg', 2),
(40, 'aWEFQ.jpg', 9),
(41, 'GSWE.jpg', 4),
(42, 'hnrdse.jpg', 9),
(43, 'myfht.jpg', 1),
(44, 'aegzdq.jpg', 9),
(45, 'rsfhb.jpg', 7),
(46, 'hrsw.jpg', 7),
(47, 'mgcdt.jpg', 10),
(48, 'ngyff.jpg', 6),
(49, 'fyggujt.jpg', 9),
(50, 'rfbxdsr.jpg', 8),
(51, 'ewg.jpg', 7),
(52, 'nyrn.jpg', 2),
(53, 'wDFS.jpg', 8),
(54, 'NNDT.jpg', 1),
(55, 'vrdfs.jpg', 9),
(56, 'nfbd.jpg', 8),
(57, 'ert.jpg', 4),
(58, 'aedzq.jpg', 3),
(59, 'eaf.jpg', 4),
(60, 'rtwe.jpg', 4),
(61, 'teyd.jpg', 3),
(62, 'qwega.jpg', 2),
(63, 'hdre.jpg', 5),
(64, 'kira.jpg', 2),
(65, 'kora.jpg', 8),
(66, 'miar.jpg', 8),
(67, 'liar.jpg', 6),
(68, 'lira.jpg', 4),
(69, 'mura.jpg', 1),
(70, 'siar.jpg', 3),
(71, 'liti.jpg', 9),
(72, 'muli.jpg', 6),
(73, 'hdre.jpg', 5),
(74, 'htedfxer.jpg', 5),
(75, 'hdet.jpg', 1),
(76, 'jtyre.jpg', 1),
(77, 'qaedg.jpg', 7),
(78, 'hted.jpg', 9),
(79, 'hrsfw.jpg', 10),
(80, 'hraqqea.jpg', 1),
(81, 'tjned.jpg', 7),
(82, 'hswr.jpg', 4),
(83, 'aWEFQ.jpg', 10),
(84, 'GSWE.jpg', 1),
(85, 'hnrdse.jpg', 4),
(86, 'myfht.jpg', 2),
(87, 'aegzdq.jpg', 8),
(88, 'rsfhb.jpg', 5),
(89, 'hrsw.jpg', 1),
(90, 'mgcdt.jpg', 8),
(91, 'ngyff.jpg', 2),
(92, 'fyggujt.jpg', 4),
(93, 'rfbxdsr.jpg', 10),
(94, 'teyd.jpg', 1),
(95, 'qwega.jpg', 1),
(96, 'hdre.jpg', 9),
(97, 'kira.jpg', 2),
(98, 'kora.jpg', 10),
(99, 'miar.jpg', 2),
(100, 'liar.jpg', 2),
(101, 'lira.jpg', 4),
(102, 'mura.jpg', 2),
(103, 'siar.jpg', 2),
(104, 'liti.jpg', 4),
(105, 'muli.jpg', 6),
(106, 'hdre.jpg', 8),
(107, 'htedfxer.jpg', 9),
(108, 'hdet.jpg', 7),
(109, 'jtyre.jpg', 8),
(110, 'hnrdse.jpg', 1),
(111, 'myfht.jpg', 1),
(112, 'aegzdq.jpg', 2),
(113, 'rsfhb.jpg', 8),
(114, 'hrsw.jpg', 7),
(115, 'mgcdt.jpg', 10),
(116, 'ngyff.jpg', 2),
(117, 'fyggujt.jpg', 9),
(118, 'rfbxdsr.jpg', 2),
(119, 'teyd.jpg', 10),
(120, 'qwega.jpg', 10),
(121, 'hdre.jpg', 3),
(122, 'kira.jpg', 2),
(123, 'teyd.jpg', 3),
(124, 'qwega.jpg', 8),
(125, 'hdre.jpg', 2),
(126, 'kira.jpg', 5),
(127, 'kora.jpg', 9),
(128, 'miar.jpg', 6),
(129, 'liar.jpg', 6),
(130, 'lira.jpg', 9),
(131, 'mura.jpg', 9),
(132, 'siar.jpg', 4),
(133, 'liti.jpg', 1),
(134, 'muli.jpg', 4),
(135, 'hdre.jpg', 9),
(136, 'htedfxer.jpg', 5),
(137, 'hdet.jpg', 2),
(138, 'jtyre.jpg', 9),
(139, 'qaedg.jpg', 8),
(140, 'hted.jpg', 10),
(141, 'hrsfw.jpg', 6),
(142, 'hraqqea.jpg', 6),
(143, 'tjned.jpg', 7),
(144, 'hswr.jpg', 3),
(145, 'aWEFQ.jpg', 10),
(146, 'GSWE.jpg', 8),
(147, 'hnrdse.jpg', 6),
(148, 'myfht.jpg', 5),
(149, 'aegzdq.jpg', 7),
(150, 'rsfhb.jpg', 10),
(151, 'hrsw.jpg', 1),
(152, 'mgcdt.jpg', 5),
(153, 'ngyff.jpg', 8),
(154, 'fyggujt.jpg', 9),
(155, 'rfbxdsr.jpg', 10),
(156, 'teyd.jpg', 4),
(157, 'qwega.jpg', 3),
(158, 'hdre.jpg', 10),
(159, 'kira.jpg', 6),
(160, 'kora.jpg', 9),
(161, 'miar.jpg', 2),
(162, 'liar.jpg', 10),
(163, 'lira.jpg', 2),
(164, 'kora.jpg', 5),
(165, 'miar.jpg', 8),
(166, 'liar.jpg', 8),
(167, 'lira.jpg', 5),
(168, 'mura.jpg', 7),
(169, 'siar.jpg', 10),
(170, 'liti.jpg', 10),
(171, 'muli.jpg', 6),
(172, 'hdre.jpg', 1),
(173, 'htedfxer.jpg', 3),
(174, 'hdet.jpg', 5),
(175, 'jtyre.jpg', 10),
(176, 'qaedg.jpg', 7),
(177, 'hted.jpg', 2),
(178, 'hrsfw.jpg', 8),
(179, 'hraqqea.jpg', 7),
(180, 'tjned.jpg', 2),
(181, 'hswr.jpg', 6),
(182, 'aWEFQ.jpg', 7),
(183, 'GSWE.jpg', 10),
(184, 'hnrdse.jpg', 3),
(185, 'myfht.jpg', 7),
(186, 'aegzdq.jpg', 2),
(187, 'rsfhb.jpg', 7),
(188, 'hrsw.jpg', 8),
(189, 'mgcdt.jpg', 4),
(190, 'ngyff.jpg', 7),
(191, 'fyggujt.jpg', 8),
(192, 'rfbxdsr.jpg', 8),
(193, 'teyd.jpg', 6),
(194, 'qwega.jpg', 4),
(195, 'hdre.jpg', 5),
(196, 'kira.jpg', 6),
(197, 'kora.jpg', 1),
(198, 'miar.jpg', 2),
(199, 'liar.jpg', 9),
(201, '664b41a97f9f5.jpg', 2);

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `id` int(11) NOT NULL,
  `account_id` int(11) NOT NULL,
  `painting_id` int(11) NOT NULL,
  `content` varchar(250) NOT NULL,
  `rating` tinyint(1) NOT NULL,
  `created_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`id`, `account_id`, `painting_id`, `content`, `rating`, `created_at`) VALUES
(1, 23, 31, 'Nam ultrices, libero non mattis pulvinar, nulla pede ullamcorper augue, a suscipit nulla elit ac nulla. Sed vel enim sit amet nunc viverra dapibus. Nulla suscipit ligula in lacus.\n\nCurabitur at ipsum ac tellus semper interdum. Mauris ullamcorper puru', 4, '2024-02-21'),
(2, 48, 6, 'Cras non velit nec nisi vulputate nonummy. Maecenas tincidunt lacus at velit. Vivamus vel nulla eget eros elementum pellentesque.', 4, '2023-11-10'),
(3, 49, 45, 'Maecenas tristique, est et tempus semper, est quam pharetra magna, ac consequat metus sapien ut nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Mauris viverra diam vitae quam. Suspendisse potenti.', 5, '2023-05-04'),
(4, 3, 10, 'Integer tincidunt ante vel ipsum. Praesent blandit lacinia erat. Vestibulum sed magna at nunc commodo placerat.', 5, '2024-03-29'),
(5, 45, 41, 'Aliquam quis turpis eget elit sodales scelerisque. Mauris sit amet eros. Suspendisse accumsan tortor quis turpis.', 5, '2023-11-20'),
(6, 47, 3, 'Cras mi pede, malesuada in, imperdiet et, commodo vulputate, justo. In blandit ultrices enim. Lorem ipsum dolor sit amet, consectetuer adipiscing elit.', 4, '2023-12-02'),
(7, 25, 48, 'Nullam sit amet turpis elementum ligula vehicula consequat. Morbi a ipsum. Integer a nibh.', 4, '2023-12-28'),
(8, 39, 12, 'Vestibulum quam sapien, varius ut, blandit non, interdum in, ante. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Duis faucibus accumsan odio. Curabitur convallis.\n\nDuis consequat dui nec nisi volutpat eleifen', 5, '2023-11-23'),
(9, 14, 12, 'Quisque id justo sit amet sapien dignissim vestibulum. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nulla dapibus dolor vel est. Donec odio justo, sollicitudin ut, suscipit a, feugiat et, eros.\n\nVestibulum a', 5, '2023-07-04'),
(10, 2, 45, 'Aenean lectus. Pellentesque eget nunc. Donec quis orci eget orci vehicula condimentum.\n\nCurabitur in libero ut massa volutpat convallis. Morbi odio odio, elementum eu, interdum eu, tincidunt in, leo. Maecenas pulvinar lobortis est.', 5, '2024-02-17'),
(11, 19, 26, 'Etiam vel augue. Vestibulum rutrum rutrum neque. Aenean auctor gravida sem.\n\nPraesent id massa id nisl venenatis lacinia. Aenean sit amet justo. Morbi ut odio.', 4, '2023-12-14'),
(12, 30, 46, 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Proin risus. Praesent lectus.', 4, '2024-03-06'),
(13, 13, 19, 'Cras mi pede, malesuada in, imperdiet et, commodo vulputate, justo. In blandit ultrices enim. Lorem ipsum dolor sit amet, consectetuer adipiscing elit.', 5, '2024-01-17'),
(14, 7, 12, 'Morbi porttitor lorem id ligula. Suspendisse ornare consequat lectus. In est risus, auctor sed, tristique in, tempus sit amet, sem.', 4, '2023-10-28'),
(15, 7, 19, 'Curabitur gravida nisi at nibh. In hac habitasse platea dictumst. Aliquam augue quam, sollicitudin vitae, consectetuer eget, rutrum at, lorem.\n\nInteger tincidunt ante vel ipsum. Praesent blandit lacinia erat. Vestibulum sed magna at nunc commodo plac', 4, '2024-04-19'),
(16, 37, 26, 'Aenean lectus. Pellentesque eget nunc. Donec quis orci eget orci vehicula condimentum.\n\nCurabitur in libero ut massa volutpat convallis. Morbi odio odio, elementum eu, interdum eu, tincidunt in, leo. Maecenas pulvinar lobortis est.', 5, '2024-03-01'),
(17, 48, 5, 'Duis consequat dui nec nisi volutpat eleifend. Donec ut dolor. Morbi vel lectus in quam fringilla rhoncus.', 5, '2023-05-03'),
(18, 50, 8, 'Suspendisse potenti. In eleifend quam a odio. In hac habitasse platea dictumst.', 4, '2023-10-24'),
(19, 8, 10, 'Morbi non lectus. Aliquam sit amet diam in magna bibendum imperdiet. Nullam orci pede, venenatis non, sodales sed, tincidunt eu, felis.\n\nFusce posuere felis sed lacus. Morbi sem mauris, laoreet ut, rhoncus aliquet, pulvinar sed, nisl. Nunc rhoncus du', 4, '2023-07-19'),
(20, 35, 44, 'In hac habitasse platea dictumst. Etiam faucibus cursus urna. Ut tellus.', 4, '2023-06-21'),
(21, 49, 39, 'Praesent blandit. Nam nulla. Integer pede justo, lacinia eget, tincidunt eget, tempus vel, pede.', 4, '2023-09-11'),
(22, 20, 47, 'Fusce consequat. Nulla nisl. Nunc nisl.', 5, '2023-12-27'),
(23, 24, 4, 'Maecenas leo odio, condimentum id, luctus nec, molestie sed, justo. Pellentesque viverra pede ac diam. Cras pellentesque volutpat dui.\n\nMaecenas tristique, est et tempus semper, est quam pharetra magna, ac consequat metus sapien ut nunc. Vestibulum a', 5, '2023-08-21'),
(24, 10, 48, 'Vestibulum quam sapien, varius ut, blandit non, interdum in, ante. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Duis faucibus accumsan odio. Curabitur convallis.\n\nDuis consequat dui nec nisi volutpat eleifen', 5, '2023-08-08'),
(25, 14, 35, 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vivamus vestibulum sagittis sapien. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.', 4, '2023-09-13'),
(26, 8, 12, 'Duis consequat dui nec nisi volutpat eleifend. Donec ut dolor. Morbi vel lectus in quam fringilla rhoncus.', 4, '2023-12-12'),
(27, 42, 11, 'Proin interdum mauris non ligula pellentesque ultrices. Phasellus id sapien in sapien iaculis congue. Vivamus metus arcu, adipiscing molestie, hendrerit at, vulputate vitae, nisl.', 5, '2023-05-14'),
(28, 38, 4, 'Donec diam neque, vestibulum eget, vulputate ut, ultrices vel, augue. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec pharetra, magna vestibulum aliquet ultrices, erat tortor sollicitudin mi, sit amet lob', 4, '2023-10-15'),
(29, 37, 27, 'Phasellus sit amet erat. Nulla tempus. Vivamus in felis eu sapien cursus vestibulum.\n\nProin eu mi. Nulla ac enim. In tempor, turpis nec euismod scelerisque, quam turpis adipiscing lorem, vitae mattis nibh ligula nec sem.', 4, '2023-11-21'),
(30, 33, 41, 'Duis bibendum. Morbi non quam nec dui luctus rutrum. Nulla tellus.\n\nIn sagittis dui vel nisl. Duis ac nibh. Fusce lacus purus, aliquet at, feugiat non, pretium quis, lectus.', 4, '2023-08-27'),
(31, 12, 49, 'Proin leo odio, porttitor id, consequat in, consequat ut, nulla. Sed accumsan felis. Ut at dolor quis odio consequat varius.', 4, '2023-08-25'),
(32, 15, 27, 'Quisque id justo sit amet sapien dignissim vestibulum. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nulla dapibus dolor vel est. Donec odio justo, sollicitudin ut, suscipit a, feugiat et, eros.\n\nVestibulum a', 5, '2023-12-20'),
(33, 9, 17, 'Duis consequat dui nec nisi volutpat eleifend. Donec ut dolor. Morbi vel lectus in quam fringilla rhoncus.\n\nMauris enim leo, rhoncus sed, vestibulum sit amet, cursus id, turpis. Integer aliquet, massa id lobortis convallis, tortor risus dapibus augue', 5, '2023-10-13'),
(34, 11, 2, 'In quis justo. Maecenas rhoncus aliquam lacus. Morbi quis tortor id nulla ultrices aliquet.', 4, '2023-06-28'),
(35, 47, 32, 'Fusce consequat. Nulla nisl. Nunc nisl.\n\nDuis bibendum, felis sed interdum venenatis, turpis enim blandit mi, in porttitor pede justo eu massa. Donec dapibus. Duis at velit eu est congue elementum.', 4, '2023-10-12'),
(36, 12, 11, 'Integer tincidunt ante vel ipsum. Praesent blandit lacinia erat. Vestibulum sed magna at nunc commodo placerat.\n\nPraesent blandit. Nam nulla. Integer pede justo, lacinia eget, tincidunt eget, tempus vel, pede.', 5, '2024-04-09'),
(37, 2, 23, 'In quis justo. Maecenas rhoncus aliquam lacus. Morbi quis tortor id nulla ultrices aliquet.\n\nMaecenas leo odio, condimentum id, luctus nec, molestie sed, justo. Pellentesque viverra pede ac diam. Cras pellentesque volutpat dui.', 4, '2023-05-19'),
(38, 32, 24, 'Morbi porttitor lorem id ligula. Suspendisse ornare consequat lectus. In est risus, auctor sed, tristique in, tempus sit amet, sem.', 4, '2024-01-12'),
(39, 6, 18, 'Duis aliquam convallis nunc. Proin at turpis a pede posuere nonummy. Integer non velit.\n\nDonec diam neque, vestibulum eget, vulputate ut, ultrices vel, augue. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Don', 5, '2023-10-14'),
(40, 27, 25, 'Pellentesque at nulla. Suspendisse potenti. Cras in purus eu magna vulputate luctus.\n\nCum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vivamus vestibulum sagittis sapien. Cum sociis natoque penatibus et magnis dis', 5, '2024-01-01'),
(41, 44, 36, 'Maecenas ut massa quis augue luctus tincidunt. Nulla mollis molestie lorem. Quisque ut erat.', 4, '2023-04-28'),
(42, 48, 5, 'Nulla ut erat id mauris vulputate elementum. Nullam varius. Nulla facilisi.', 5, '2024-02-06'),
(43, 23, 4, 'Nullam sit amet turpis elementum ligula vehicula consequat. Morbi a ipsum. Integer a nibh.', 4, '2024-04-18'),
(44, 46, 43, 'In hac habitasse platea dictumst. Morbi vestibulum, velit id pretium iaculis, diam erat fermentum justo, nec condimentum neque sapien placerat ante. Nulla justo.', 4, '2023-06-22'),
(45, 25, 28, 'Cras non velit nec nisi vulputate nonummy. Maecenas tincidunt lacus at velit. Vivamus vel nulla eget eros elementum pellentesque.\n\nQuisque porta volutpat erat. Quisque erat eros, viverra eget, congue eget, semper rutrum, nulla. Nunc purus.', 4, '2023-08-12'),
(46, 40, 19, 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Proin risus. Praesent lectus.\n\nVestibulum quam sapien, varius ut, blandit non, interdum in, ante. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Duis f', 5, '2024-04-07'),
(47, 10, 10, 'Proin eu mi. Nulla ac enim. In tempor, turpis nec euismod scelerisque, quam turpis adipiscing lorem, vitae mattis nibh ligula nec sem.', 4, '2023-07-07'),
(48, 37, 46, 'Sed sagittis. Nam congue, risus semper porta volutpat, quam pede lobortis ligula, sit amet eleifend pede libero quis orci. Nullam molestie nibh in lectus.\n\nPellentesque at nulla. Suspendisse potenti. Cras in purus eu magna vulputate luctus.', 4, '2024-03-05'),
(49, 24, 31, 'Proin leo odio, porttitor id, consequat in, consequat ut, nulla. Sed accumsan felis. Ut at dolor quis odio consequat varius.', 4, '2024-02-01'),
(50, 45, 21, 'Quisque porta volutpat erat. Quisque erat eros, viverra eget, congue eget, semper rutrum, nulla. Nunc purus.', 4, '2023-12-07'),
(51, 62, 2, 'great stuff', 0, '2024-05-20');

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`id`, `name`) VALUES
(1, 'admin'),
(2, 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`id`),
  ADD KEY `role_id` (`role_id`);

--
-- Indexes for table `account_cart`
--
ALTER TABLE `account_cart`
  ADD PRIMARY KEY (`id`),
  ADD KEY `account_id` (`account_id`),
  ADD KEY `painting_id` (`painting_id`);

--
-- Indexes for table `artist`
--
ALTER TABLE `artist`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`),
  ADD KEY `account_id` (`account_id`),
  ADD KEY `payment_method_id` (`payment_method_id`);

--
-- Indexes for table `orderdetail`
--
ALTER TABLE `orderdetail`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_id` (`order_id`),
  ADD KEY `painting_id` (`painting_id`);

--
-- Indexes for table `painting`
--
ALTER TABLE `painting`
  ADD PRIMARY KEY (`id`),
  ADD KEY `painting_color_category_id` (`painting_color_category_id`),
  ADD KEY `painting_style_category_id` (`painting_style_category_id`),
  ADD KEY `painting_surface_category_id` (`painting_surface_category_id`),
  ADD KEY `artist_id` (`artist_id`);

--
-- Indexes for table `painting_color_category`
--
ALTER TABLE `painting_color_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `painting_style_category`
--
ALTER TABLE `painting_style_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `painting_surface_category`
--
ALTER TABLE `painting_surface_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment_method`
--
ALTER TABLE `payment_method`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `photos`
--
ALTER TABLE `photos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `painting_id` (`painting_id`);

--
-- Indexes for table `photo_gallery`
--
ALTER TABLE `photo_gallery`
  ADD PRIMARY KEY (`id`),
  ADD KEY `gallery_id` (`gallery_id`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`id`),
  ADD KEY `account_id` (`account_id`),
  ADD KEY `painting_id` (`painting_id`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT for table `account_cart`
--
ALTER TABLE `account_cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;

--
-- AUTO_INCREMENT for table `artist`
--
ALTER TABLE `artist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT for table `orderdetail`
--
ALTER TABLE `orderdetail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- AUTO_INCREMENT for table `painting`
--
ALTER TABLE `painting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT for table `painting_color_category`
--
ALTER TABLE `painting_color_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `painting_style_category`
--
ALTER TABLE `painting_style_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `painting_surface_category`
--
ALTER TABLE `painting_surface_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `payment_method`
--
ALTER TABLE `payment_method`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `photos`
--
ALTER TABLE `photos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `photo_gallery`
--
ALTER TABLE `photo_gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=202;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `account`
--
ALTER TABLE `account`
  ADD CONSTRAINT `account_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `role` (`id`);

--
-- Constraints for table `account_cart`
--
ALTER TABLE `account_cart`
  ADD CONSTRAINT `account_cart_ibfk_1` FOREIGN KEY (`account_id`) REFERENCES `account` (`id`),
  ADD CONSTRAINT `account_cart_ibfk_2` FOREIGN KEY (`painting_id`) REFERENCES `painting` (`id`);

--
-- Constraints for table `order`
--
ALTER TABLE `order`
  ADD CONSTRAINT `order_ibfk_1` FOREIGN KEY (`payment_method_id`) REFERENCES `payment_method` (`id`),
  ADD CONSTRAINT `order_ibfk_2` FOREIGN KEY (`account_id`) REFERENCES `account` (`id`);

--
-- Constraints for table `orderdetail`
--
ALTER TABLE `orderdetail`
  ADD CONSTRAINT `orderdetail_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `order` (`id`),
  ADD CONSTRAINT `orderdetail_ibfk_2` FOREIGN KEY (`painting_id`) REFERENCES `painting` (`id`);

--
-- Constraints for table `painting`
--
ALTER TABLE `painting`
  ADD CONSTRAINT `painting_ibfk_1` FOREIGN KEY (`artist_id`) REFERENCES `artist` (`id`),
  ADD CONSTRAINT `painting_ibfk_2` FOREIGN KEY (`painting_color_category_id`) REFERENCES `painting_color_category` (`id`),
  ADD CONSTRAINT `painting_ibfk_3` FOREIGN KEY (`painting_style_category_id`) REFERENCES `painting_style_category` (`id`),
  ADD CONSTRAINT `painting_ibfk_4` FOREIGN KEY (`painting_surface_category_id`) REFERENCES `painting_surface_category` (`id`);

--
-- Constraints for table `photos`
--
ALTER TABLE `photos`
  ADD CONSTRAINT `photos_ibfk_1` FOREIGN KEY (`painting_id`) REFERENCES `painting` (`id`);

--
-- Constraints for table `photo_gallery`
--
ALTER TABLE `photo_gallery`
  ADD CONSTRAINT `photo_gallery_ibfk_1` FOREIGN KEY (`gallery_id`) REFERENCES `gallery` (`id`);

--
-- Constraints for table `review`
--
ALTER TABLE `review`
  ADD CONSTRAINT `review_ibfk_1` FOREIGN KEY (`account_id`) REFERENCES `account` (`id`),
  ADD CONSTRAINT `review_ibfk_2` FOREIGN KEY (`painting_id`) REFERENCES `painting` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
