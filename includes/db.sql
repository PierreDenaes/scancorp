-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: mysql-dotpot420.alwaysdata.net
-- Generation Time: Dec 13, 2019 at 12:35 PM
-- Server version: 10.3.17-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dotpot420_dow_test`
--

-- --------------------------------------------------------

--
-- Table structure for table `advice`
--

CREATE TABLE `advice` (
  `id_advice` int(11) NOT NULL,
  `wording` varchar(8000) DEFAULT NULL,
  `survey_has_question1_survey_survey_id` int(11) NOT NULL,
  `survey_has_question1_question_id_question` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id_category` int(11) NOT NULL,
  `wording` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id_category`, `wording`) VALUES
(1, 'Test d’Inventaire de Burnout de Maslach - MBI'),
(2, 'Questionnaire Suivi Bien être');

-- --------------------------------------------------------

--
-- Table structure for table `category_has_question1`
--

CREATE TABLE `category_has_question1` (
  `pagenbr` int(11) DEFAULT NULL,
  `category_id_category1` int(11) NOT NULL,
  `question_id_question` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `category_has_question1`
--

INSERT INTO `category_has_question1` (`pagenbr`, `category_id_category1`, `question_id_question`) VALUES
(1, 1, 1),
(1, 1, 2),
(1, 1, 3),
(1, 1, 4),
(1, 1, 5),
(1, 1, 6),
(1, 1, 7),
(1, 1, 8),
(1, 1, 9),
(1, 1, 10),
(1, 1, 11),
(1, 1, 12),
(1, 1, 13),
(1, 1, 14),
(1, 1, 15),
(1, 1, 16),
(1, 1, 17),
(1, 1, 18),
(1, 1, 19),
(1, 1, 20),
(1, 1, 21),
(1, 1, 22);

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `name` varchar(45) DEFAULT NULL,
  `localitie` varchar(500) DEFAULT NULL,
  `address` varchar(500) DEFAULT NULL,
  `contact` varchar(500) DEFAULT NULL,
  `registration_date` datetime DEFAULT NULL ON UPDATE current_timestamp(),
  `company_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`name`, `localitie`, `address`, `contact`, `registration_date`, `company_id`) VALUES
('TopCorp', 'La_Ciotat', '12_avenue_du_bou', '0656764554', '2019-11-11 17:03:21', 1),
('DoveCorp', 'Aubagne', '12_avenue_de_tourech', '0560945894', '2019-11-11 17:03:21', 2),
('UtopCorp', 'Aubagne', '6_rue_de_plouic', '0905689456', '2019-11-11 17:03:22', 3),
('JmTopInc', 'La_Ciotat', '3_rue_guillaume_Dulac', '0504950394', '2019-11-11 17:03:22', 4),
('TataCorp', 'Marseille', '12_rue_de_la_mer', '0453456377 ', '2019-11-11 17:03:22', 5),
('ToupiCorp', 'Marseille', '12_rue_de_la_mer', '0453456377', '2019-11-11 17:03:22', 6),
('Toporp', 'La_Ciotat', '1_avenue_du_bou', '0656764554', '2019-11-11 17:07:40', 7),
('DCorp', 'Aubagne', '12_avenue_de_tourech', '0560945894', '2019-11-11 17:07:40', 8),
('Moporp', 'La_Ciotat', '14_avenue_du_bouC', '0656764554', '2019-11-11 18:14:12', 9),
('Copain', 'Valence', '14_avenue_du_loup', '0656342345', '2019-11-11 18:20:04', 10),
('POULI', 'Valence', '14_avenue_du_loup', '0656342345', '2019-11-11 18:23:26', 11),
('jojotop', 'Valence', '14_avenue_du_loup', '0656342345', '2019-11-11 19:29:26', 12),
('jojotop', 'Valence', '14_avenue_du_loup', '0656342345', '2019-11-12 11:33:12', 13),
('BlueCorp', 'LA CIOTAT', 'Winner Street', '0102030405', '2019-11-14 21:59:00', 14);

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE `question` (
  `id_question` int(11) NOT NULL,
  `wording` varchar(8000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`id_question`, `wording`) VALUES
(1, '01 – Je me sens émotionnellement vidé(e) par mon travail'),
(2, '02 - Je me sens à bout à la fin de ma journée de travail'),
(3, '03 - Je me sens fatigué(e) lorsque je me lève le matin et que j’ai à affronter une autre journée de travail'),
(4, '04 - Je peux comprendre facilement ce que mes patients/clients/élèves ressentent'),
(5, '05 - Je sens que je m’occupe de certains patients/clients/élèves de façon impersonnelle, comme s’ils étaient des objets'),
(6, '06 - Travailler avec des gens tout au long de la journée me demande beaucoup d’effort'),
(7, '07 - Je m’occupe très efficacement des problèmes de mes patients/clients/élèves'),
(8, '08 - Je sens que je craque à cause de mon travail'),
(9, '09 - J’ai l’impression, à travers mon travail, d’avoir une influence positive sur les gens'),
(10, '10 - Je suis devenu(e) plus insensible aux gens depuis que j’ai ce travail'),
(11, '11 - Je crains que ce travail ne m’endurcisse émotionnellement'),
(12, '12 - Je me sens plein(e) d’énergie'),
(13, '13 - Je me sens frustré(e) par mon travail'),
(14, '14 - Je sens que je travaille « trop dur » dans mon travail'),
(15, '15 - Je ne me soucie pas vraiment de ce qui arrive à certains de mes patients/clients/élèves'),
(16, '16 - Travailler en contact direct avec les gens me stresse trop'),
(17, '17 - J’arrive facilement à créer une atmosphère détendue avec mes patients/clients/élèves'),
(18, '18 - Je me sens ragaillardi(e) lorsque dans mon travail j’ai été proche de patients/clients/élèves'),
(19, '19 - J’ai accompli beaucoup de choses qui en valent la peine dans ce travail'),
(20, '20 - Je me sens au bout du rouleau'),
(21, '21 - Dans mon travail, je traite les problèmes émotionnels très calmement'),
(22, '22 - J’ai l’impression que mes patients/clients/élèves me rendent responsable de certains de leurs problèmes\r\n\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `survey`
--

CREATE TABLE `survey` (
  `survey_id` int(11) NOT NULL,
  `category_id_category` int(11) NOT NULL,
  `user_id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `survey`
--

INSERT INTO `survey` (`survey_id`, `category_id_category`, `user_id_user`) VALUES
(1, 1, 33);

-- --------------------------------------------------------

--
-- Table structure for table `survey_has_question1`
--

CREATE TABLE `survey_has_question1` (
  `survey_survey_id` int(11) NOT NULL,
  `question_id_question` int(11) NOT NULL,
  `answer` int(11) DEFAULT NULL,
  `answer_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `survey_has_question1`
--

INSERT INTO `survey_has_question1` (`survey_survey_id`, `question_id_question`, `answer`, `answer_date`) VALUES
(1, 1, NULL, NULL),
(1, 2, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `first_name` varchar(45) NOT NULL,
  `last_name` varchar(45) DEFAULT NULL,
  `email` varchar(500) NOT NULL,
  `password` varchar(500) DEFAULT NULL,
  `company_sector` varchar(45) DEFAULT NULL,
  `level` tinyint(4) DEFAULT 2,
  `id` int(11) NOT NULL,
  `company_company_id` int(11) DEFAULT NULL,
  `remember_token` varchar(255) DEFAULT NULL,
  `confirmation_token` varchar(255) DEFAULT NULL,
  `confirmed_at` datetime DEFAULT NULL,
  `reset_token` varchar(255) DEFAULT NULL,
  `reset_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`first_name`, `last_name`, `email`, `password`, `company_sector`, `level`, `id`, `company_company_id`, `remember_token`, `confirmation_token`, `confirmed_at`, `reset_token`, `reset_at`) VALUES
('Quentin', NULL, 'rasquent136@gmail.com', '$2y$10$2zOErccRbSB.jUrQfsQLJO/zlRA14.SKkmZL1p0I5pHWlGXOzPH0S', NULL, 2, 13, 14, NULL, NULL, '2019-11-19 16:18:34', NULL, NULL),
('Alex The King', NULL, 'alexandre.chauvet89@gmail.com', '$2y$10$lIe9GB/2ktm0FD8p1VElheq15c3p0FidJs6xat8.AhxHE0asY4XMm', NULL, 2, 14, 14, NULL, NULL, '2019-11-15 16:05:16', NULL, NULL),
('toto', NULL, 'azerty@yopmail.com', '$2y$10$al9qxJBBLbm/LvuYXmsFE.7X7k1iMxdlDaVgo0ifUM.Ept7rK75aW', NULL, 2, 16, NULL, 'OYb3D1LOBBYAbuyAPDLthpHFkn6i4hyNIGbfQMccjTn2h6oYYa4YQi0cLtitqkHCLmpOtDUrcvoU8Iw6tbE5WrdNA6lICaQmvi45VvIUueEi2syFtBexyxp62jzfdxl6wM4dlDhVad26fKkGu38hJzu9oS0LR14MzirBCtmAbBcIYZ4QlCTdLNyvPTjdWSc5GTLXqYRj9mtBOGe8RDRuG1ynLOPT62bUNt00QLkto9X3rerRvde5S8wdOk', NULL, '2019-11-14 22:57:43', NULL, NULL),
('Quentin', NULL, 'quentin@yopmail.com', '$2y$10$/6cdtG6JLkRQeUmBoFT2D.ROdJKR/QfNWmy7Lfs5PFeiFMTKtk0sO', NULL, 2, 19, NULL, 'WvhXXBhjKsUF1I2DJ4LHF36YFXPjjZCmk3rbpf6WivzG8gmWjl6r7cfCEiPAylBIg7rcKoV9RtDHGVlHL0SZaTYiE9scDf9XoJoBhddsxc6jvaf4Rj3ViQTSr6EqE78uzi8iblc2zkHNWUykm0gqB6s77rQmixoPPjFYY9wxOcqe5ZvnTmzKP69LLNHgXjKlCznLDUiIgAqZIzC0UMsrUUgPFnmRktRU6yTnN0hFCTDLgIQOOYJSGiXs68', 'lpb5GPiWkOgx75W3S7BcOSRhnwCJK9o5o7iPM9Th7NPOiPKpBiQqB5isZcmm', '2019-11-15 13:07:08', NULL, NULL),
('Pierre', 'Denaes', 'photostudio13000@gmail.com', '$2y$10$PQpEDDT5IbCe4/XxsTUZR.zIVPU24hESLq/kWasPZaJiyox8g.vZW', NULL, 2, 33, NULL, '8OfPRN2hmYlO613L0zDZjNPTOuzz0Zqk9sJbx11yd83yyaRSf5wkfog1uUkjHvgL8OkpAMtBQxXMUmvFGJDQR3n1zuioafgLycqHQ03D81TMHUdscHqGgZ61e41aSiNYIZyg3Cyv5kmHIQEmI9Qhf7eKK1FExtxZuCBLueYlGYXZ3LfhL2cEpAO721j8YMhg3ct0lH0c2C0bSNcoJ8NMHObRwCkxlWofO5azjfnpD6Hw9NgCVzAarU5RE2', NULL, '2019-11-19 16:32:08', 'dktxyN50k92dE1NZeEH4z5Pva0OXzQJIq23QQbGrlBlzEaMPIhoLsbtjIKbF', '2019-11-28 11:25:27'),
('Quentin', NULL, 'quentin.quef@gmail.com', '$2y$10$dyVXNac2hQZ6kX003okTteH1Ga87mbF603hQGjsCPU1JxmQj4ulY.', NULL, 2, 34, NULL, NULL, NULL, '2019-12-04 15:08:05', NULL, NULL),
('Thaï Machine', NULL, 'benjamingouget0@gmail.com', '$2y$10$YrgHiGrZyWwbHncY4UlAY.le4LPGUqisGodpxXaG5T.oZ8Ai5ZBXy', NULL, 2, 35, NULL, NULL, NULL, '2019-11-20 16:36:01', NULL, NULL),
('Jonathan', NULL, 'az@yopmail.com', '$2y$10$b/qa6Yk/K4/8MnnVDj1rDuXbm4xwyQJHSc..KVX9FaVcHShiPXsJi', NULL, 2, 37, NULL, NULL, 'sx8c7nemHmJ3CiIPAfJhtqLxSLSSuatPu8yP2lWYtr74PzrIFqSbOsO7Hfb6', '2019-11-21 13:23:49', NULL, NULL),
('Jonathan-test', NULL, 'dowj@yopmail.com', '$2y$10$knON0X1knIyIZYtBvkYtXuMkDenEsLA5ptKuLx5Mpm1xno8oXX5Zu', NULL, 2, 38, NULL, NULL, 'NB6zQOBprB8yHA5ehCNNGZDm7VVmYtVqGe0xoyyqy9Vy6jSs79ghqyxZUs5r', '2019-11-28 16:15:17', 'Uo6IlhEDxpbPU9Mf64CAnz8tXcStq6MIe7LRQBgGx5uujDi62atr4JCaTHLe', '2019-12-03 18:33:36'),
('Administrateur', NULL, 'adminpower@yopmail.com', '$2y$10$rpnoSx8lHCcsVSc7geLLee50QVEQCs8UgllDz6w3Ox1gwiW7CFFpi', NULL, 4, 39, NULL, 'MlXhplnxqnf8bN3ZWE3q70Hr45HrWjOTGvZzALFXhCSLOWY7tQ5PKD7ND6ux20owqhRSexxZjVhj8mYyJ2v1dhdVu95QieYkIyCPUynYMEbfel30My61ubchyyIju8dIg8HH6WL6c8TPPg0BSAIBl4fZQfbkDUGK5tI3uLacIUV4unywWjnPE5vRqKdtEwuPaiUgmVIdwcUulbggdbRO8aPrjcdYucI2R2H1I3UMZ2URoEC6q9jPCXhwOW', NULL, '2019-12-11 11:44:53', NULL, NULL),
('Entreprise', NULL, 'incpower@yopmail.com', '$2y$10$mfDanLGp6qzBw9Q.LabsdOWPkoVquGUdoHE.OmSMqz2mm6Ra3jhRS', NULL, 3, 40, NULL, NULL, NULL, '2019-12-11 11:55:36', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `advice`
--
ALTER TABLE `advice`
  ADD PRIMARY KEY (`id_advice`),
  ADD KEY `fk_advice_survey_has_question11` (`survey_has_question1_survey_survey_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id_category`);

--
-- Indexes for table `category_has_question1`
--
ALTER TABLE `category_has_question1`
  ADD PRIMARY KEY (`category_id_category1`,`question_id_question`),
  ADD KEY `fk_category_has_question1_question1` (`question_id_question`);

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`company_id`);

--
-- Indexes for table `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`id_question`);

--
-- Indexes for table `survey`
--
ALTER TABLE `survey`
  ADD PRIMARY KEY (`survey_id`),
  ADD KEY `fk_survey_category1` (`category_id_category`),
  ADD KEY `fk_survey_user1` (`user_id_user`);

--
-- Indexes for table `survey_has_question1`
--
ALTER TABLE `survey_has_question1`
  ADD PRIMARY KEY (`survey_survey_id`,`question_id_question`),
  ADD KEY `fk_survey_has_question1_question1` (`question_id_question`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_user_company1` (`company_company_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `advice`
--
ALTER TABLE `advice`
  MODIFY `id_advice` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id_category` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `company_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `question`
--
ALTER TABLE `question`
  MODIFY `id_question` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `survey`
--
ALTER TABLE `survey`
  MODIFY `survey_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `advice`
--
ALTER TABLE `advice`
  ADD CONSTRAINT `fk_advice_survey_has_question11` FOREIGN KEY (`survey_has_question1_survey_survey_id`) REFERENCES `survey_has_question1` (`survey_survey_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `category_has_question1`
--
ALTER TABLE `category_has_question1`
  ADD CONSTRAINT `fk_category_has_question1_category1` FOREIGN KEY (`category_id_category1`) REFERENCES `category` (`id_category`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_category_has_question1_question1` FOREIGN KEY (`question_id_question`) REFERENCES `question` (`id_question`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `survey`
--
ALTER TABLE `survey`
  ADD CONSTRAINT `fk_survey_category1` FOREIGN KEY (`category_id_category`) REFERENCES `category` (`id_category`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_survey_user1` FOREIGN KEY (`user_id_user`) REFERENCES `user` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `survey_has_question1`
--
ALTER TABLE `survey_has_question1`
  ADD CONSTRAINT `fk_survey_has_question1_question1` FOREIGN KEY (`question_id_question`) REFERENCES `question` (`id_question`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_survey_has_question1_survey1` FOREIGN KEY (`survey_survey_id`) REFERENCES `survey` (`survey_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `fk_user_company1` FOREIGN KEY (`company_company_id`) REFERENCES `company` (`company_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
