-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 08, 2023 at 06:56 PM
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
-- Database: `planmed`
--

-- --------------------------------------------------------

--
-- Table structure for table `medecin`
--

CREATE TABLE `medecin` (
  `ID` varchar(50) NOT NULL,
  `Nom` varchar(100) NOT NULL,
  `Prenom` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Tel` int(50) NOT NULL,
  `nbre_heure` int(11) NOT NULL DEFAULT 24,
  `heure_restant` int(11) NOT NULL DEFAULT 24
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `medecin`
--

INSERT INTO `medecin` (`ID`, `Nom`, `Prenom`, `Email`, `Tel`, `nbre_heure`, `heure_restant`) VALUES
('7898', 'Simo', 'Fred', 'fredsimo@yahoo.fr', 658786898, 24, 24),
('ew', 'Ngako', 'Alexis', 'repidaj494@xgh6.com', 534, 24, 24),
('ewyy', 'Tresor', 'Loic', 'loic494@xgh6.com', 534, 24, 24),
('med01', 'MBELNGAR II', 'STEVE BRIAN', 'mbelngar@gmail.com', 681487391, 24, 24),
('med02', 'DONFACK', 'RONALD', 'donfackronald13@gmail.com', 679823564, 24, 24),
('med03', 'TCHOFFO', 'JOVANIE', 'jovanietchoffo@gmail.com', 679823566, 24, 24),
('med04', 'elodie', 'gomey', 'gomeyelodie@gmail.com', 689823566, 24, 24),
('Med2023008', 'MBELNGAR II', 'JOVANIE', 'holtugadro@gufum.com', 2147483647, 24, 24),
('Med2023009', 'MBELNGAR II ', 'Brain', 'holtugadro@gufum.com', 2147483647, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `planning`
--

CREATE TABLE `planning` (
  `Jour` date NOT NULL,
  `Plage` text NOT NULL,
  `Nommed` text NOT NULL,
  `Nomjour` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `planning`
--

INSERT INTO `planning` (`Jour`, `Plage`, `Nommed`, `Nomjour`) VALUES
('2023-12-05', 'soir', 'MBELNGAR IISTEVE BRIAN', 'Tuesday'),
('2023-12-03', 'jour', 'SimoFred', 'Sunday'),
('2023-12-03', 'jour', 'NgakoAlexis', 'Sunday'),
('2023-12-03', 'soir', 'TresorLoic', 'Sunday'),
('2023-12-03', 'soir', 'MBELNGAR IISTEVE BRIAN', 'Sunday'),
('2023-12-03', 'nuit', 'TCHOFFOJOVANIE', 'Sunday'),
('2023-12-04', 'jour', 'SimoFred', 'Monday'),
('2023-12-04', 'soir', 'NgakoAlexis', 'Monday'),
('2023-12-04', 'nuit', 'TresorLoic', 'Monday'),
('2023-12-05', 'soir', 'DONFACKRONALD', 'Tuesday'),
('2023-12-05', 'nuit', 'TCHOFFOJOVANIE', 'Tuesday'),
('2023-12-06', 'jour', 'elodiegomey', 'Wednesday'),
('2023-12-06', 'soir', 'MBELNGAR IIJOVANIE', 'Wednesday'),
('2023-12-06', 'nuit', 'DONFACKRONALD', 'Wednesday'),
('2023-12-08', 'nuit', 'DONFACKRONALD', 'Friday'),
('2023-12-08', 'soir', 'NgakoAlexis', 'Friday'),
('2023-12-08', 'jour', 'elodiegomey', 'Friday'),
('2023-12-13', 'soir', 'MBELNGAR II\r\nSTEVE BRIAN', 'Wednesday');

-- --------------------------------------------------------

--
-- Table structure for table `tache`
--

CREATE TABLE `tache` (
  `Heure` time(6) NOT NULL,
  `Objet` varchar(100) NOT NULL,
  `NomPatient` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `IDlog` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `Categorie` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`IDlog`, `Password`, `Categorie`) VALUES
('Med2023001', 'rips2013', 'administrateur'),
('Med2023002', 'akb00481', 'Medecin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `medecin`
--
ALTER TABLE `medecin`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tache`
--
ALTER TABLE `tache`
  ADD PRIMARY KEY (`Heure`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`IDlog`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
