-- phpMyAdmin SQL Dump
-- version 4.9.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: May 28, 2020 at 04:34 PM
-- Server version: 5.7.26
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `school`
--

-- --------------------------------------------------------

--
-- Table structure for table `docenten`
--

CREATE TABLE `docenten` (
  `id` int(11) NOT NULL,
  `naam` varchar(255) NOT NULL,
  `achternaam` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobiel` varchar(255) NOT NULL,
  `telefoon` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `docenten`
--

INSERT INTO `docenten` (`id`, `naam`, `achternaam`, `email`, `mobiel`, `telefoon`) VALUES
(1, 'Mike', 'Mike', 'fake@fake.com', '0000000000', '0000000000'),
(2, 'Erik', 'Erik', 'fake@fake.com', '0000000000', '0000000000'),
(3, 'Jan', 'Jan', 'fake@fake.com', '000000000', '000000000'),
(4, 'Bart', 'Bart', 'fake@fake.com', '0000000000', '0000000000'),
(5, 'Davor', 'Davor', 'fake@fakeemail.com', '0000000000', '0000000000'),
(6, 'Kim', 'Kim', 'fake@fake.com', '000000000', '000000000'),
(7, 'Jet', 'Jet', 'fake@fake.com', '000000000', '000000000'),
(8, 'Marco', 'Marco', 'fake@fake.com', '0000000000', '0000000000'),
(9, 'Jara', 'Jara', 'fake@fake.com', '0000000000', '0000000000'),
(10, 'Henk', 'Henk', 'fake@fake.com', '0000000000', '0000000000');

-- --------------------------------------------------------

--
-- Table structure for table `docenten_klassen`
--

CREATE TABLE `docenten_klassen` (
  `klassen_id` int(11) NOT NULL,
  `docenten_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `docenten_klassen`
--

INSERT INTO `docenten_klassen` (`klassen_id`, `docenten_id`) VALUES
(1, 5),
(2, 5),
(2, 1),
(3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `klassen`
--

CREATE TABLE `klassen` (
  `id` int(11) NOT NULL,
  `code` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `klassen`
--

INSERT INTO `klassen` (`id`, `code`) VALUES
(1, '1a'),
(2, '1b'),
(3, '1c'),
(4, '1d'),
(5, '1e'),
(6, '1f');

-- --------------------------------------------------------

--
-- Table structure for table `studenten`
--

CREATE TABLE `studenten` (
  `id` int(11) NOT NULL,
  `klas_id` int(11) NOT NULL,
  `naam` varchar(255) NOT NULL,
  `achternaam` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobiel` varchar(255) NOT NULL,
  `telefoon` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `studenten`
--

INSERT INTO `studenten` (`id`, `klas_id`, `naam`, `achternaam`, `email`, `mobiel`, `telefoon`) VALUES
(1, 1, 'Bert', 'vd Saar', 'fake@fake.com', '00000000', 0),
(2, 2, 'Jos', 'vd Boer', 'fake@fake.com', '000000000', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `docenten`
--
ALTER TABLE `docenten`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `klassen`
--
ALTER TABLE `klassen`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `studenten`
--
ALTER TABLE `studenten`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `docenten`
--
ALTER TABLE `docenten`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `klassen`
--
ALTER TABLE `klassen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `studenten`
--
ALTER TABLE `studenten`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
