-- phpMyAdmin SQL Dump
-- version 4.9.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: May 07, 2021 at 05:43 PM
-- Server version: 5.7.26
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `vaccin`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `phone`, `site`, `level`) VALUES
(1, 'Sophie CORDEIRO MARQUES LARROQUE', 'sophie.cordeiro@ch-pau.fr', NULL, '$2y$10$k8epqqsHubkRsIm1GS19EO7B2s4RYHkbrLLAKd3jaeMSLHUQr5slu', NULL, '2021-05-04 04:53:33', '2021-05-04 04:53:33', '0559924948', 'CHPAU', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
