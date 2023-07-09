-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 06, 2023 at 09:18 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_cash`
--

-- --------------------------------------------------------

--
-- Table structure for table `budget`
--

CREATE TABLE `budget` (
  `Id_Budget` int NOT NULL,
  `Date` date DEFAULT NULL,
  `Amount` decimal(15,0) DEFAULT NULL,
  `Id_Category` int DEFAULT NULL,
  `Email` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `budget`
--

INSERT INTO `budget` (`Id_Budget`, `Date`, `Amount`, `Id_Category`, `Email`) VALUES
(78, '2023-06-06', '10000', 1, 'im.brindawan@gmail.com'),
(79, '2023-06-06', '10000', 2, 'im.brindawan@gmail.com'),
(80, '2023-06-06', '10000', 10, 'im.brindawan@gmail.com'),
(81, '2023-06-06', '10000000', 8, 'im.brindawan@gmail.com'),
(82, '2023-06-06', '11000000', 11, 'im.brindawan@gmail.com'),
(83, '2023-06-06', '1', 5, 'test@gmail.com'),
(84, '2023-06-06', '1', 6, 'test@gmail.com'),
(85, '2023-06-07', '900000', 9, 'im.brindawan@gmail.com'),
(86, '2023-06-07', '0', 5, 'im.brindawan@gmail.com'),
(87, '2023-06-07', '120000', 12, 'im.brindawan@gmail.com'),
(88, '2023-06-07', '6000000', 6, 'im.brindawan@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `Id_Category` int NOT NULL,
  `Icon` varchar(2000) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `Name` varchar(255) DEFAULT NULL,
  `Description` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`Id_Category`, `Icon`, `Name`, `Description`) VALUES
(1, '<svg xmlns=\"http://www.w3.org/2000/svg\" class=\"w-10 fill-current m-auto\" viewBox=\"0 0 512 512\"><path d=\"M64 32C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64H448c35.3 0 64-28.7 64-64V192c0-35.3-28.7-64-64-64H80c-8.8 0-16-7.2-16-16s7.2-16 16-16H448c17.7 0 32-14.3 32-32s-14.3-32-32-32H64zM416 272a32 32 0 1 1 0 64 32 32 0 1 1 0-64z\"/></svg>', 'Salary', NULL),
(2, '<svg xmlns=\"http://www.w3.org/2000/svg\" class=\"w-11 fill-current m-auto\" viewBox=\"0 0 576 512\"><path d=\"M547.6 103.8L490.3 13.1C485.2 5 476.1 0 466.4 0H109.6C99.9 0 90.8 5 85.7 13.1L28.3 103.8c-29.6 46.8-3.4 111.9 51.9 119.4c4 .5 8.1 .8 12.1 .8c26.1 0 49.3-11.4 65.2-29c15.9 17.6 39.1 29 65.2 29c26.1 0 49.3-11.4 65.2-29c15.9 17.6 39.1 29 65.2 29c26.2 0 49.3-11.4 65.2-29c16 17.6 39.1 29 65.2 29c4.1 0 8.1-.3 12.1-.8c55.5-7.4 81.8-72.5 52.1-119.4zM499.7 254.9l-.1 0c-5.3 .7-10.7 1.1-16.2 1.1c-12.4 0-24.3-1.9-35.4-5.3V384H128V250.6c-11.2 3.5-23.2 5.4-35.6 5.4c-5.5 0-11-.4-16.3-1.1l-.1 0c-4.1-.6-8.1-1.3-12-2.3V384v64c0 35.3 28.7 64 64 64H448c35.3 0 64-28.7 64-64V384 252.6c-4 1-8 1.8-12.3 2.3z\"/></svg>', 'Online/Shop', NULL),
(3, '<svg xmlns=\"http://www.w3.org/2000/svg\" class=\"w-10 fill-current m-auto\" viewBox=\"0 0 384 512\"><path d=\"M173.8 5.5c11-7.3 25.4-7.3 36.4 0L228 17.2c6 3.9 13 5.8 20.1 5.4l21.3-1.3c13.2-.8 25.6 6.4 31.5 18.2l9.6 19.1c3.2 6.4 8.4 11.5 14.7 14.7L344.5 83c11.8 5.9 19 18.3 18.2 31.5l-1.3 21.3c-.4 7.1 1.5 14.2 5.4 20.1l11.8 17.8c7.3 11 7.3 25.4 0 36.4L366.8 228c-3.9 6-5.8 13-5.4 20.1l1.3 21.3c.8 13.2-6.4 25.6-18.2 31.5l-19.1 9.6c-6.4 3.2-11.5 8.4-14.7 14.7L301 344.5c-5.9 11.8-18.3 19-31.5 18.2l-21.3-1.3c-7.1-.4-14.2 1.5-20.1 5.4l-17.8 11.8c-11 7.3-25.4 7.3-36.4 0L156 366.8c-6-3.9-13-5.8-20.1-5.4l-21.3 1.3c-13.2 .8-25.6-6.4-31.5-18.2l-9.6-19.1c-3.2-6.4-8.4-11.5-14.7-14.7L39.5 301c-11.8-5.9-19-18.3-18.2-31.5l1.3-21.3c.4-7.1-1.5-14.2-5.4-20.1L5.5 210.2c-7.3-11-7.3-25.4 0-36.4L17.2 156c3.9-6 5.8-13 5.4-20.1l-1.3-21.3c-.8-13.2 6.4-25.6 18.2-31.5l19.1-9.6C65 70.2 70.2 65 73.4 58.6L83 39.5c5.9-11.8 18.3-19 31.5-18.2l21.3 1.3c7.1 .4 14.2-1.5 20.1-5.4L173.8 5.5zM272 192a80 80 0 1 0 -160 0 80 80 0 1 0 160 0zM1.3 441.8L44.4 339.3c.2 .1 .3 .2 .4 .4l9.6 19.1c11.7 23.2 36 37.3 62 35.8l21.3-1.3c.2 0 .5 0 .7 .2l17.8 11.8c5.1 3.3 10.5 5.9 16.1 7.7l-37.6 89.3c-2.3 5.5-7.4 9.2-13.3 9.7s-11.6-2.2-14.8-7.2L74.4 455.5l-56.1 8.3c-5.7 .8-11.4-1.5-15-6s-4.3-10.7-2.1-16zm248 60.4L211.7 413c5.6-1.8 11-4.3 16.1-7.7l17.8-11.8c.2-.1 .4-.2 .7-.2l21.3 1.3c26 1.5 50.3-12.6 62-35.8l9.6-19.1c.1-.2 .2-.3 .4-.4l43.2 102.5c2.2 5.3 1.4 11.4-2.1 16s-9.3 6.9-15 6l-56.1-8.3-32.2 49.2c-3.2 5-8.9 7.7-14.8 7.2s-11-4.3-13.3-9.7z\"/></svg>', 'Bonus', NULL),
(4, '<svg xmlns=\"http://www.w3.org/2000/svg\" class=\"w-8 fill-current m-auto\" viewBox=\"0 0 384 512\"><path d=\"M14 2.2C22.5-1.7 32.5-.3 39.6 5.8L80 40.4 120.4 5.8c9-7.7 22.3-7.7 31.2 0L192 40.4 232.4 5.8c9-7.7 22.3-7.7 31.2 0L304 40.4 344.4 5.8c7.1-6.1 17.1-7.5 25.6-3.6s14 12.4 14 21.8V488c0 9.4-5.5 17.9-14 21.8s-18.5 2.5-25.6-3.6L304 471.6l-40.4 34.6c-9 7.7-22.3 7.7-31.2 0L192 471.6l-40.4 34.6c-9 7.7-22.3 7.7-31.2 0L80 471.6 39.6 506.2c-7.1 6.1-17.1 7.5-25.6 3.6S0 497.4 0 488V24C0 14.6 5.5 6.1 14 2.2zM96 144c-8.8 0-16 7.2-16 16s7.2 16 16 16H288c8.8 0 16-7.2 16-16s-7.2-16-16-16H96zM80 352c0 8.8 7.2 16 16 16H288c8.8 0 16-7.2 16-16s-7.2-16-16-16H96c-8.8 0-16 7.2-16 16zM96 240c-8.8 0-16 7.2-16 16s7.2 16 16 16H288c8.8 0 16-7.2 16-16s-7.2-16-16-16H96z\"/></svg>', 'Coupon', NULL),
(5, '<svg xmlns=\"http://www.w3.org/2000/svg\" class=\"w-14 fill-current m-auto\" viewBox=\"0 0 640 512\"><path d=\"M274.9 34.3c-28.1-28.1-73.7-28.1-101.8 0L34.3 173.1c-28.1 28.1-28.1 73.7 0 101.8L173.1 413.7c28.1 28.1 73.7 28.1 101.8 0L413.7 274.9c28.1-28.1 28.1-73.7 0-101.8L274.9 34.3zM200 224a24 24 0 1 1 48 0 24 24 0 1 1 -48 0zM96 200a24 24 0 1 1 0 48 24 24 0 1 1 0-48zM224 376a24 24 0 1 1 0-48 24 24 0 1 1 0 48zM352 200a24 24 0 1 1 0 48 24 24 0 1 1 0-48zM224 120a24 24 0 1 1 0-48 24 24 0 1 1 0 48zm96 328c0 35.3 28.7 64 64 64H576c35.3 0 64-28.7 64-64V256c0-35.3-28.7-64-64-64H461.7c11.6 36 3.1 77-25.4 105.5L320 413.8V448zM480 328a24 24 0 1 1 0 48 24 24 0 1 1 0-48z\"/></svg>', 'Award', NULL),
(6, '<svg xmlns=\"http://www.w3.org/2000/svg\" class=\"w-10 fill-current m-auto\" viewBox=\"0 0 448 512\"><path d=\"M160 80c0-26.5 21.5-48 48-48h32c26.5 0 48 21.5 48 48V432c0 26.5-21.5 48-48 48H208c-26.5 0-48-21.5-48-48V80zM0 272c0-26.5 21.5-48 48-48H80c26.5 0 48 21.5 48 48V432c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V272zM368 96h32c26.5 0 48 21.5 48 48V432c0 26.5-21.5 48-48 48H368c-26.5 0-48-21.5-48-48V144c0-26.5 21.5-48 48-48z\"/></svg>', 'Investment', NULL),
(8, '<svg xmlns=\"http://www.w3.org/2000/svg\" class=\"w-12 fill-current m-auto\" viewBox=\"0 0 640 512\"><path d=\"M192 64C86 64 0 150 0 256S86 448 192 448H448c106 0 192-86 192-192s-86-192-192-192H192zM496 168a40 40 0 1 1 0 80 40 40 0 1 1 0-80zM392 304a40 40 0 1 1 80 0 40 40 0 1 1 -80 0zM168 200c0-13.3 10.7-24 24-24s24 10.7 24 24v32h32c13.3 0 24 10.7 24 24s-10.7 24-24 24H216v32c0 13.3-10.7 24-24 24s-24-10.7-24-24V280H136c-13.3 0-24-10.7-24-24s10.7-24 24-24h32V200z\"/></svg>', 'Entertaiment', NULL),
(9, '<svg xmlns=\\\"http://www.w3.org/2000/svg\\\" class=\"w-12 fill-current m-auto\" viewBox=\"0 0 512 512\"><style>svg{fill:#ffffff}</style><path d=\"M88 0C74.7 0 64 10.7 64 24c0 38.9 23.4 59.4 39.1 73.1l1.1 1C120.5 112.3 128 119.9 128 136c0 13.3 10.7 24 24 24s24-10.7 24-24c0-38.9-23.4-59.4-39.1-73.1l-1.1-1C119.5 47.7 112 40.1 112 24c0-13.3-10.7-24-24-24zM32 192c-17.7 0-32 14.3-32 32V416c0 53 43 96 96 96H288c53 0 96-43 96-96h16c61.9 0 112-50.1 112-112s-50.1-112-112-112H352 32zm352 64h16c26.5 0 48 21.5 48 48s-21.5 48-48 48H384V256zM224 24c0-13.3-10.7-24-24-24s-24 10.7-24 24c0 38.9 23.4 59.4 39.1 73.1l1.1 1C232.5 112.3 240 119.9 240 136c0 13.3 10.7 24 24 24s24-10.7 24-24c0-38.9-23.4-59.4-39.1-73.1l-1.1-1C231.5 47.7 224 40.1 224 24z\"/></svg>', 'Food', NULL),
(10, '<svg xmlns=\"http://www.w3.org/2000/svg\" class=\"w-10 fill-current m-auto\" viewBox=\"0 0 448 512\"><path d=\"M272 48a48 48 0 1 0 -96 0 48 48 0 1 0 96 0zm-8 187.3l47.4 57.1c11.3 13.6 31.5 15.5 45.1 4.2s15.5-31.5 4.2-45.1l-73.7-88.9c-18.2-22-45.3-34.7-73.9-34.7H177.1c-33.7 0-64.9 17.7-82.3 46.6l-58.3 97c-9.1 15.1-4.2 34.8 10.9 43.9s34.8 4.2 43.9-10.9L120 256.9V480c0 17.7 14.3 32 32 32s32-14.3 32-32V352h16V480c0 17.7 14.3 32 32 32s32-14.3 32-32V235.3zM352 376c0-4.4 3.6-8 8-8s8 3.6 8 8V488c0 13.3 10.7 24 24 24s24-10.7 24-24V376c0-30.9-25.1-56-56-56s-56 25.1-56 56v8c0 13.3 10.7 24 24 24s24-10.7 24-24v-8z\"></path></svg>', 'Insurance', NULL),
(11, '<svg xmlns=\"http://www.w3.org/2000/svg\" class=\"w-12 fill-current m-auto\" viewBox=\"0 0 576 512\"><style>svg{fill:#ffffff}</style><path d=\"M253.3 35.1c6.1-11.8 1.5-26.3-10.2-32.4s-26.3-1.5-32.4 10.2L117.6 192H32c-17.7 0-32 14.3-32 32s14.3 32 32 32L83.9 463.5C91 492 116.6 512 146 512H430c29.4 0 55-20 62.1-48.5L544 256c17.7 0 32-14.3 32-32s-14.3-32-32-32H458.4L365.3 12.9C359.2 1.2 344.7-3.4 332.9 2.7s-16.3 20.6-10.2 32.4L404.3 192H171.7L253.3 35.1zM192 304v96c0 8.8-7.2 16-16 16s-16-7.2-16-16V304c0-8.8 7.2-16 16-16s16 7.2 16 16zm96-16c8.8 0 16 7.2 16 16v96c0 8.8-7.2 16-16 16s-16-7.2-16-16V304c0-8.8 7.2-16 16-16zm128 16v96c0 8.8-7.2 16-16 16s-16-7.2-16-16V304c0-8.8 7.2-16 16-16s16 7.2 16 16z\"/></svg>', 'Shoping', NULL),
(12, '<svg xmlns=\"http://www.w3.org/2000/svg\" class=\"w-10 fill-current m-auto\" viewBox=\"0 0 576 512\"><path d=\"M64 32C28.7 32 0 60.7 0 96v32H576V96c0-35.3-28.7-64-64-64H64zM576 224H0V416c0 35.3 28.7 64 64 64H512c35.3 0 64-28.7 64-64V224zM112 352h64c8.8 0 16 7.2 16 16s-7.2 16-16 16H112c-8.8 0-16-7.2-16-16s7.2-16 16-16zm112 16c0-8.8 7.2-16 16-16H368c8.8 0 16 7.2 16 16s-7.2 16-16 16H240c-8.8 0-16-7.2-16-16z\"/></svg>', 'Credit Card', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `Id_History` int NOT NULL,
  `Id_Wallet` int DEFAULT NULL,
  `Title` varchar(255) NOT NULL,
  `Type` enum('Income','Expense') CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `Amount` int DEFAULT NULL,
  `Description` text,
  `Date` date DEFAULT NULL,
  `Id_Budget` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`Id_History`, `Id_Wallet`, `Title`, `Type`, `Amount`, `Description`, `Date`, `Id_Budget`) VALUES
(3, 1, 'Tokopedia', 'Income', 10000000, 'Dari tokopedia', '2023-06-06', 79),
(4, 1, 'Insurance', 'Expense', 500000, 'Test', '2023-06-06', 81),
(6, 12, 'Nyolong', 'Income', 80000000, '', '2023-06-06', 83),
(7, 12, 'Beli pulau', 'Expense', 20000000, '', '2023-06-06', 84),
(10, 1, 'Income test', 'Income', 10000000, '', '2023-06-07', 79),
(11, 1, 'Pengen tidur pls', 'Expense', 1010100, '', '2023-06-07', 82),
(12, 1, 'test data output', 'Expense', 100000, '', '2023-06-07', 82),
(13, 1, 'Test Budget', 'Expense', 1000000, '', '2023-06-07', 81),
(14, 1, 'Test Budget', 'Expense', 200000, '', '2023-06-07', 85),
(17, 1, 'Test Credit Card', 'Expense', 1200000, '', '2023-06-07', 87),
(18, 1, 'Test Investment', 'Expense', 6000000, '', '2023-06-07', 88);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `Id` int NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Username` varchar(255) DEFAULT NULL,
  `Password` varchar(255) DEFAULT NULL,
  `Birth_Date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`Id`, `Email`, `Username`, `Password`, `Birth_Date`) VALUES
(3, 'akunpoteam@gmail.com', 'deeKing', '$2y$10$ucrEbjM/IwKBysdYl1FM9ugK3GH8A6Z.y9mHME8KnZSsHHWGudrIW', '2004-10-17'),
(8, 'Asw@gmail.com', 'Asw', '$2y$10$ofCutdE/pT.FHBmZLD3SuuLKFTpSbZu4hKaGBX4Yd5jYnqrZSoepS', '2023-05-01'),
(6, 'gede.astu@gmail.com', 'Gede Astu', '$2y$10$fLphVGINZeO.iT84gWFCRu09YTbFpDPk8eiS7TqU82.VD3bNoCA2q', '2023-05-22'),
(5, 'gedeastu@gmail.com', 'nugraha', '$2y$10$Btg5pc1tjCNiy9nkexHywOAP81G4joKzZUG.4PEOLOvpA8f6.sLO2', '2023-05-08'),
(1, 'im.brindawan@gmail.com', 'Yoga', '$2y$10$klMzjiR/xOnacRpnR7mxDe/pHvDxAfY9saIwSPJTcX9GQC/GwqVZu', '2004-02-27'),
(11, 'jawir@gmail.com', 'ireng', '$2y$10$xcgeLR7P2f4PaqaWM8ZKAOy5ANqfMvfRpLxyx1sSWrmac4Z1DMWZm', '2004-06-29'),
(7, 'joebiden@gmail.com', 'joebiden', '$2y$10$m/Epy8.ZrkrHFM6e8r2SeuMwJG2z.0ZfyjKk13/OjuXjEGy32DOu2', '2344-08-21'),
(4, 'rmdhnaz@gmail.com', 'ramadhan', '$2y$10$BiAVn0roATurNyTRk5Bvau7T.i.eJEi3OZM8XwmGzCXikAM8HYk.u', '2023-03-27'),
(12, 'test@gmail.com', 'testerAccount', '$2y$10$lSRQv/T4Ffft5r8LR4M4XebOK6YK2DHGEqHUPqbJQCpCGLHX0R0AS', '2023-05-30'),
(9, 'test321@gmail.com', 'test321', '$2y$10$40HhFNaiZ0KZNV2L7nctHO8pUlbN66hc1k56rmriVgROCST3nzmQq', '2023-05-17');

-- --------------------------------------------------------

--
-- Table structure for table `wallet`
--

CREATE TABLE `wallet` (
  `Id_Wallet` int NOT NULL,
  `Email` varchar(255) DEFAULT NULL,
  `Money` int DEFAULT NULL,
  `Name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `wallet`
--

INSERT INTO `wallet` (`Id_Wallet`, `Email`, `Money`, `Name`) VALUES
(1, 'im.brindawan@gmail.com', 7356678, 'Wallet'),
(3, 'akunpoteam@gmail.com', 175000000, 'Wallet'),
(4, 'rmdhnaz@gmail.com', 20000, 'Wallet'),
(5, 'gedeastu@gmail.com', 0, 'Wallet'),
(6, 'gede.astu@gmail.com', 927465567, 'Wallet'),
(7, 'joebiden@gmail.com', 0, 'Wallet'),
(8, 'Asw@gmail.com', 0, 'Wallet'),
(9, 'test321@gmail.com', 0, 'Wallet'),
(11, 'jawir@gmail.com', 0, 'Wallet'),
(12, 'test@gmail.com', 60000000, 'Wallet');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `budget`
--
ALTER TABLE `budget`
  ADD PRIMARY KEY (`Id_Budget`),
  ADD KEY `Id_Category` (`Id_Category`),
  ADD KEY `Email` (`Email`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`Id_Category`);

--
-- Indexes for table `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`Id_History`),
  ADD KEY `Id_Wallet` (`Id_Wallet`),
  ADD KEY `Id_Budget` (`Id_Budget`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`Email`),
  ADD UNIQUE KEY `id` (`Id`);

--
-- Indexes for table `wallet`
--
ALTER TABLE `wallet`
  ADD PRIMARY KEY (`Id_Wallet`),
  ADD KEY `Email` (`Email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `budget`
--
ALTER TABLE `budget`
  MODIFY `Id_Budget` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `Id_Category` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `history`
--
ALTER TABLE `history`
  MODIFY `Id_History` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `Id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `wallet`
--
ALTER TABLE `wallet`
  MODIFY `Id_Wallet` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `budget`
--
ALTER TABLE `budget`
  ADD CONSTRAINT `budget_ibfk_1` FOREIGN KEY (`Id_Category`) REFERENCES `category` (`Id_Category`),
  ADD CONSTRAINT `budget_ibfk_2` FOREIGN KEY (`Email`) REFERENCES `user` (`Email`);

--
-- Constraints for table `history`
--
ALTER TABLE `history`
  ADD CONSTRAINT `history_ibfk_1` FOREIGN KEY (`Id_Wallet`) REFERENCES `wallet` (`Id_Wallet`),
  ADD CONSTRAINT `history_ibfk_2` FOREIGN KEY (`Id_Budget`) REFERENCES `budget` (`Id_Budget`);

--
-- Constraints for table `wallet`
--
ALTER TABLE `wallet`
  ADD CONSTRAINT `wallet_ibfk_1` FOREIGN KEY (`Email`) REFERENCES `user` (`Email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
