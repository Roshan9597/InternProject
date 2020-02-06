-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 13, 2019 at 06:50 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gender`
--

-- --------------------------------------------------------

--
-- Table structure for table `resources`
--

CREATE TABLE `resources` (
  `id` int(11) NOT NULL,
  `keyword` varchar(255) NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `resources`
--

INSERT INTO `resources` (`id`, `keyword`, `content`) VALUES
(1, 'Sexual Harassment', 'An agreed definition of \'Sexual harassment\', as given in the Equality Act 2010 entails \'unwanted conduct of a sexual nature which has the purpose or effect of violating someone\'s dignity, or creating an intimidating, hostile, degrading, humiliating or offensive environment for them\'. Although the current law states the employers have a legal responsibility of an employee is sexually harassed at work by another colleague, it is evident that this is not always fully enacted upon. \r\n\r\nAnother problem within tourism relates to how staff are sexually harassed by guests, and again, whilst the employer has a responsibility towards its staff, many examples are given of this not being met, as became evident from the \'Not on the Menu\' survey by unite in January 2018.'),
(2, 'Bullying', 'Although bullying person is not illegal, harassment is, and this is discussed in the Equality Act 2010, and linked to age, sex, disability, gender reassignment, marriage and civil partnership, pregnancy and maternity, race, religion or belief, and/or sexual orientation. It is the responsibility of employers to prevent bullying and harassment. A guide is available by The Advisory, Conciliation and Arbitration Service (ACAS) for managers and employers.'),
(3, 'Confidence', 'A problem women often discuss when reflecting on their careers is related to confidence and how they need to be more assertive, have influencing skills, that they need to be able to stand out from the group and to recognise their purpose. Many women felt that they were importers once their careers progressed and were uncomfortable with being confident about choices made. Much guidance is available on building confidence and raising self-esteem.'),
(4, 'Male domination', 'Within the workplace, men dominating the highest level opportunities and the Board is evident from plenty of statistics, and women recognised the lack of opportunities being made available for them, in particular when posts (such as board members) are not advertised. Open up opportunities fro women entails the requirement of an array of initiatives, and some of these such as \'mentoring\', \'training investment\', \'support networks\', and \'Board Diversity\', are recognised as aspects which have the potential to impact on the status quo.'),
(5, 'Gender stereotypes', 'Stereotypes towards the caring work of women and the leadership skills of men cause continuous issues within the workplace. The difficulty for women in breaking these stereotypes and advancing in leadership is recognised. Initiatives related to this such as \'Mentoring\', \'Support in the workplace\', \'Leadership Styles\', \'Support Networks\', and \'Board Diversity\', all have a role to play in transforming gendered stereotypes in the workplace.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `resources`
--
ALTER TABLE `resources`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `resources`
--
ALTER TABLE `resources`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
