-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 09, 2020 at 01:47 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.3.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `she8_lab6blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `she_title` varchar(100) NOT NULL,
  `she_message` text NOT NULL,
  `she_timedate` timestamp NOT NULL DEFAULT current_timestamp(),
  `bid` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`she_title`, `she_message`, `she_timedate`, `bid`) VALUES
('Check out google', 'www.google.ca  :) ', '2020-11-09 06:54:40', 10),
('US election: Joe Biden vows to \'unify\' country in victory speech - BBC News', 'https://www.youtube.com/watch?v=Lwi43jsyX_g #tongue ', '2020-11-08 22:30:18', 5),
('Joe Biden administration ', 'Joe Biden administration likely to overturn controversial Donald Trump diversity training executive order<br><br>\r\nhttps://www.usatoday.com/story/money/2020/11/08/donald-trump-diversity-executive-order-joe-biden/6180668002/<br><br>\r\nA Joe Biden administration would likely scrap an executive order from the Trump administration that restricts the federal government and its contractors from offering diversity training that President Donald Trump labeled \"divisive\" and \"un-American.\"\r\n\r\nTrump\'s executive order, which affected government agencies, Fortune 500 companies, educational institutions, nonprofits and any others that have federal contracts or plan to apply for them, had an almost immediate chilling effect on reinvigorated efforts to address racial disparities in the workplace after the death of George Floyd, a Black man, under the knee of white officer in Minneapolis in May.\r\n\r\nâ€œI think itâ€™s highly probable that this executive order will be rescinded in fairly short order,â€ Franklin Turner, a partner with law firm McCarter & English who represents multinational contractors and small and medium-sized companies, told USA TODAY.', '2020-11-09 08:41:23', 24),
('As Biden gets to work, Trump starts to sue', 'https://nationalpost.com/news/world/facing-a-divided-u-s-biden-and-aides-plan-for-the-hard-work-of-governing\r\n<br>\r\nWILMINGTON â€” Democrat Joe Biden began preparing on Sunday to deal with the coronavirus and other problems that will confront him as president of a divided America, while President Donald Trump planned campaign-style rallies to contest the election.\r\n\r\nOne day after Biden clinched enough states to win the presidency, Trump gave no sign of conceding and many of his Republican allies in Congress likewise did not acknowledge Bidenâ€™s victory in last Tuesdayâ€™s election.\r\n\r\n\r\nInstead, Trump will hold a series of rallies to build support for the legal fights challenging the outcome, campaign spokesman Tim Murtaugh confirmed on Sunday.\r\n\r\nTrump also announced teams to pursue recounts in several states and will seek to back up his unfounded accusations of voting fraud by highlighting obituaries of dead people the campaign said voted in the election.\r\n\r\nMurtaugh did not say when the rallies, a signature of Trumpâ€™s campaign, would resume.', '2020-11-09 06:55:03', 13),
('US election: Court hearings on Trump\'s \"stolen election\" claims set to start', ' #tongue  #angry  t.t https://www.youtube.com/watch?v=lkrmeZRJ5KE', '2020-11-09 06:58:49', 14),
('emoji', ' :)  :D  t.t  #angry  #tongue ', '2020-11-09 07:08:30', 16),
('The rotten state of American politics made Trump smell fresh', 'This weekend there have been spontaneous parties on the streets of American cities after TV networks finally called the election for Joe Biden. From New York to Houston, Louisville to Minneapolis, liberals came out to celebrate a moment they had been expecting for four long years: Donald Trump had finally run out of road. The spell was broken. The penny had dropped.', '2020-11-09 07:26:39', 18),
('Taiwan fears loss in US support as Trump booted from office', 'As Joe Biden edged closer to a victory in the presidential election in the United States, concern began to grow in Taiwan about what the Democratic candidateâ€™s presidency might mean for the self-ruled island.\r\n\r\nPresident Tsai Ing-wen took to Facebook to address the issue, telling her followers that â€œwhatever the outcome of the general election, these transactions will not change and we will continue to deepen Taiwan-US relations on these basis.â€', '2020-11-09 07:26:43', 19),
('US election: ', 'US election: World leaders react to president-elect Joe Bidenâ€™s win\r\nhttps://www.youtube.com/watch?v=5kj3S-kR0hA :D ', '2020-11-09 07:26:49', 20),
('Peaky blinders liquor', 'http://she8.dmitstudent.ca/dmit1528/peaky-blinders-liquor/asdasdas :)  :D  t.t  #angry  #tongue ', '2020-11-09 07:26:53', 21),
('My Email', 'Hi she8@nait.ca #tongue yes?', '2020-11-09 07:44:05', 22),
('We were told Joe Biden was the \'safe choice\'. But it was risky to offer so little', 'Naomi Klein is the author of The Shock Doctrine, No Logo, and No is Not Enough. She tweets @NaomiAKlein\r\n\r\nhese have been a harrowing few days. And these days have been more harrowing than they should have been. As we all know, Joe Biden won the Democratic primaries based on the claim that he was the safest bet to beat Donald Trump. But even if the Democratic party base was much more politically aligned with Bernie Sanders, or Elizabeth Warren, in their support for Medicare for All, a Green New Deal, for racial justice, the party was sure that Bernie Sanders was too risky. And so, as we all remember, they banded together and gave us Biden.\r\n\r\n', '2020-11-09 08:34:58', 23),
('Biden must put down the monster that is Trumpism', 'https://www.washingtonpost.com/opinions/2020/11/08/biden-must-put-down-monster-that-is-trumpism/<br><br>\r\n\r\nIf the presidential election was a test, White people have earned a grade of â€œC.â€ As a group, their patriotism is fair. Their civic virtues need improvement. Their common sense is not good.\r\n\r\nAccording to exit polls, 57 percent of White people voted for President Trump. The president won White people in every age group. He scored especially well with White people without college degrees, earning votes from 67 percent of men and 60 percent of women in this group. Trump was weakest with White college graduates â€” but he still won about half of the votes in this category.\r\n\r\nFollow the latest on Election 2020\r\nIn contrast, the majority of every non-White group cast their ballots against Trump. Joe Biden received 87 percent of the votes of African Americans, 66 percent of the votes of Latinx people and 63 percent of the votes of Asian Americans. While Trump picked up votes from Black men and Latinx communities compared with 2016, this shift was not nearly enough to upend Bidenâ€™s supermajority among African Americans, and his winning approximately two-thirds of the Hispanic vote. (I acknowledge that exit polls are not precise and are subject to revision.)', '2020-11-09 08:43:51', 25);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`bid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `bid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
