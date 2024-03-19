-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: sql311.infinityfree.com
-- Generation Time: Mar 05, 2024 at 05:29 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `if0_35758275_GrandSlamStats`
--

-- --------------------------------------------------------

--
-- Table structure for table `finals`
--

CREATE TABLE `finals` (
  `finalId` int(11) NOT NULL,
  `tournamentId` int(11) DEFAULT NULL,
  `champion` int(11) DEFAULT NULL,
  `opponent` int(11) DEFAULT NULL,
  `score` varchar(100) DEFAULT NULL,
  `youtubeURL` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `finals`
--

INSERT INTO `finals` (`finalId`, `tournamentId`, `champion`, `opponent`, `score`, `youtubeURL`) VALUES
(1, 1, 1, 4, '6-4 4-6 2-6 6-3 6-4', 'https://www.youtube.com/watch?v=0FsIdkTFLms'),
(2, 2, 1, 5, '7-5 6-2 6-2', 'https://www.youtube.com/watch?v=vd8-dTcZpFk'),
(3, 3, 2, 5, '2-6 6-7(5) 6-4 6-4 7-5', 'https://www.youtube.com/watch?v=pJO4vX7ne1g'),
(4, 4, 1, 6, '6-3 7-6(4) 7-6(5)', 'https://www.youtube.com/watch?v=xeO5rfW2nUc'),
(5, 5, 3, 5, '3-6 3-6 6-4 6-4 6-3', 'https://www.youtube.com/watch?v=frRVq6FI_5c'),
(6, 6, 7, 8, '4-6 6-2 6-2', 'https://www.youtube.com/watch?v=SVgVfwUK1XA'),
(7, 7, 9, 10, '6-4 6-3', 'https://www.youtube.com/watch?v=DLCZydoVaGM'),
(8, 8, 11, 12, '6-3 7-6(2)', 'https://www.youtube.com/watch?v=6BAx0jRXyiQ'),
(9, 9, 13, 14, '4-6 6-3 6-4', 'https://www.youtube.com/watch?v=Zz_1D1QBwu4'),
(10, 10, 13, 15, '6-3 6-2', 'https://www.youtube.com/watch?v=dkTf9qRrzHI'),
(11, 11, 2, 1, '6-0 6-2 7-5', 'https://www.youtube.com/watch?v=gkIsvlZDG-Y'),
(12, 12, 1, 6, '6-7(6) 2-6 6-3 6-2 6-4', 'https://www.youtube.com/watch?v=c7O8a68d_xM'),
(13, 13, 2, 16, '6-3 6-3 6-0', 'https://www.youtube.com/watch?v=eeqiFBDBWyo'),
(14, 14, 1, 16, '7-6(1) 6-3 7-5', 'https://www.youtube.com/watch?v=Rfcfzh2ujVE'),
(15, 15, 17, 7, '6-4 6-1', 'https://www.youtube.com/watch?v=OwKaLdNEjlI'),
(16, 16, 18, 19, '6-1 2-6 6-4', 'https://www.youtube.com/watch?v=WuaksM9g7yg'),
(17, 17, 17, 20, '6-1 6-3', 'https://www.youtube.com/watch?v=fDHVKnNmums'),
(18, 18, 17, 21, '6-2 5-7 6-4', 'https://www.youtube.com/watch?v=r1SppzeJZzQ'),
(19, 19, 1, 22, '6-7(4) 6-4 6-4 6-3', 'https://www.youtube.com/watch?v=1IBhpowmI8s'),
(20, 20, 1, 23, '4-6 6-3 6-4 7-6(3)', 'https://www.youtube.com/watch?v=RO52Y8SOIUU'),
(21, 21, 24, 1, '1-6 7-6(6) 6-1 3-6 6-4', 'https://www.youtube.com/watch?v=K-VmllVIOXA'),
(22, 22, 11, 21, '6-3 6-7(4) 6-3', 'https://www.youtube.com/watch?v=fVZROvO50K8'),
(23, 23, 14, 25, '3-6 6-2 6-2', 'https://www.youtube.com/watch?v=BzkN0Yfoyh0'),
(24, 24, 26, 25, '6-4 6-4', 'https://www.youtube.com/watch?v=3c9n9tXK0GY'),
(25, 25, 4, 27, '2-6 4-6 6-4 6-3 7-6(6)', 'https://www.youtube.com/watch?v=RIevWd_4Sig'),
(26, 26, 5, 1, '6-4 6-4 6-4', 'https://www.youtube.com/watch?v=MEFpXBwnyQA'),
(27, 27, 24, 16, '6-4 2-6 7-6(1) 6-3', 'https://www.youtube.com/watch?v=SEFnfcfvLkw'),
(28, 28, 1, 5, '6-3 7-6(5) 6-3', 'https://www.youtube.com/watch?v=3pNQ6hDwBPg'),
(29, 29, 9, 28, '1-6 6-3 6-3', 'https://www.youtube.com/watch?v=ncAyvy4Q81M'),
(30, 30, 29, 30, '6-4 6-3', 'https://www.youtube.com/watch?v=hRydTS4kCaE'),
(31, 31, 17, 25, '6-2 7-6(5)', 'https://www.youtube.com/watch?v=F9bCq3Z2xM8'),
(32, 32, 20, 13, '2-6 6-3 6-2', 'https://www.youtube.com/watch?v=A1XTRVmDXlU');

-- --------------------------------------------------------

--
-- Table structure for table `grandSlams`
--

CREATE TABLE `grandSlams` (
  `grandSlamId` int(11) NOT NULL,
  `grandSlam` varchar(100) NOT NULL,
  `location` varchar(500) NOT NULL,
  `venue` varchar(500) NOT NULL,
  `surface` varchar(200) NOT NULL,
  `description` text NOT NULL,
  `imageURL` varchar(1000) NOT NULL,
  `imageTitle` varchar(1000) DEFAULT NULL,
  `imageAlt` varchar(500) DEFAULT NULL,
  `attributionLink` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `grandSlams`
--

INSERT INTO `grandSlams` (`grandSlamId`, `grandSlam`, `location`, `venue`, `surface`, `description`, `imageURL`, `imageTitle`, `imageAlt`, `attributionLink`) VALUES
(1, 'Australian Open', 'Melbourne, Victoria, Australia', 'Melbourne Park', 'Coloured bright blue Plexicushion Prestige', 'The Australian Open / The Grand Slam of Asia Pacific is major hard court tennis tournament, which started in 1905. The competition currently held at Melbourne Park, in Australia.', 'https://upload.wikimedia.org/wikipedia/commons/6/62/Rod_Laver_Arena_Melbourne_Park_Australian_Open_2023_first_round.jpg', 'Gracchus250, CC BY-SA 4.0 &lt;https://creativecommons.org/licenses/by-sa/4.0&gt;, via Wikimedia Commons', 'Rod Laver Arena Melbourne Park Australian Open 2023 first round', 'https://commons.wikimedia.org/wiki/File:Rod_Laver_Arena_Melbourne_Park_Australian_Open_2023_first_round.jpg'),
(2, 'French Open', 'Paris, France', 'Stade Roland Garros', 'Clay', 'The French Open or Roland Garros, is a major tennis tournament since 1891 which currently held at the Stade Roland Garros in Paris, France. Named after the French aviator Roland Garros, it is the most important clay court tennis championship.', 'https://upload.wikimedia.org/wikipedia/commons/thumb/e/eb/Court_Philippe_Chatrier_May_30th_2013.jpg/1920px-Court_Philippe_Chatrier_May_30th_2013.jpg', 'Michael Frey (Michael Frey), CC BY-SA 3.0 &lt;https://creativecommons.org/licenses/by-sa/3.0&gt;, via Wikimedia Commons', 'Court Philippe Chatrier May 30th 2013', 'https://commons.wikimedia.org/wiki/File:Court_Philippe_Chatrier_May_30th_2013.jpg'),
(3, 'Wimbledon', 'London, England, United Kingdom', 'All England Croquet and Lawn Tennis Club (AELTC)', 'Grass', 'The Championships, Wimbledon, is the oldest tennis tournament in the world, and considered as the most prestigious. It has been held on grass at the All England Club in Wimbledon, London since 1877.', 'https://images.unsplash.com/photo-1531315396756-905d68d21b56?q=80&w=2748&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D', NULL, NULL, NULL),
(4, 'US Open', 'Flushing, New York, USA', 'USTA Billie Jean King National Tennis Center', 'Laykold', 'The United States Open Tennis Championships is a hardcourt tennis tournament, which started with the U.S. National Championship in 1881. The competition currently held at USTA Jean King National Tennis Center, New York.', 'https://upload.wikimedia.org/wikipedia/commons/thumb/2/2b/Arthur_Ashe_Stadium_2010.jpg/2560px-Arthur_Ashe_Stadium_2010.jpg', 'manalahmadkhan, CC BY 2.0 &lt;https://creativecommons.org/licenses/by/2.0&gt;, via Wikimedia Commons', 'Arthur Ashe Stadium 2010', 'https://commons.wikimedia.org/wiki/File:Arthur_Ashe_Stadium_2010.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `players`
--

CREATE TABLE `players` (
  `playerId` int(11) NOT NULL,
  `firstName` varchar(100) NOT NULL,
  `lastName` varchar(100) NOT NULL,
  `birthday` date NOT NULL,
  `country` varchar(100) NOT NULL,
  `bio` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `players`
--

INSERT INTO `players` (`playerId`, `firstName`, `lastName`, `birthday`, `country`, `bio`) VALUES
(1, 'Novak', 'Djokovic', '1987-05-22', 'Serbia', 'Novak Djokovic is a Serbian professional tennis player who is generally considered to be one of the greatest tennis players of all time. Djokovic has been ranked world No. 1 for a record total 409 weeks in a record 13 different years, and has finished as the year-end No. 1 a record eight times. He is the only player to win all of the \'Big Titles\' on the modern ATP Tour, that is, all four Grand Slam tournaments, all nine ATP Masters events, and the ATP Finals. He has won an all-time record 24 Grand Slam men\'s singles titles, including a record ten Australian Open titles. Overall, he has won 98 singles titles, including a record 71 Big Titles, which comprises his 24 majors, a record 40 Masters titles and a record seven year-end championships (four of which he won consecutively, which is an Open Era record). Djokovic has completed a non-calendar year Grand Slam in singles, becoming the only man in tennis history to be the reigning champion of all four majors at once across three different surfaces. He is also the only man to achieve a triple Career Grand Slam in singles by winning each of the four majors at least three times as well as the only player to complete the career Golden Masters in singles by winning all nine ATP Masters tournaments, a feat he achieved twice. With winning the French Open in 2021, Djokovic became the first and only man to win every Major, ATP Masters 1000 and ATP Finals at least twice.'),
(2, 'Rafael', 'Nadal', '1986-06-03', 'Spain', 'Rafael Nadal Parera is a Spanish professional tennis player from Mallorca currently ranked world No. 6 in men\'s singles tennis. His success on clay has earned him the nickname \'The King of Clay\' and has led many sports journalists and commentators, as well as former and current players, to regard him as the finest clay court player in history. Furthermore, his evolution into an all-court threat has established him as one of the best ever all-rounders in tennis, with some, including former world No. 1 and singles Career Golden Slam winner Andre Agassi, considering Nadal to be the greatest player of all time.'),
(3, 'Jannik', 'Sinner', '2001-08-16', 'Italy', 'Jannik Sinner is an Italian professional tennis player. Since making his professional debut in 2018, Sinner has won 12 ATP Tour singles titles, including a Grand Slam championship at the 2024 Australian Open. Sinner has reached the semifinals at Wimbledon, the quarterfinals of the remaining two major tournaments and the finals of three Masters 1000 tournaments, including the final of the 2023 Canadian Open, which he won. In 2023 he played in the final at the Nitto ATP Finals in Turin and later led Italy to winning the Davis Cup. With a career high ATP singles ranking of world No. 3 achieved on 19 February 2024, Sinner is the highest-ranked Italian tennis player in history, male or female.'),
(4, 'Dominic', 'Thiem', '1993-09-03', 'Austria', 'Dominic Thiem is an Austrian professional tennis player. His career-high ATP ranking is world No. 4, which he first achieved on 6 November 2017. He is the second highest-ranked Austrian player in history, behind Thomas Muster (No. 1, 1996). He has won 16 ATP Tour singles titles and reached three Grand Slam finals. As a junior, Thiem was ranked world No. 2. He qualified for the 2011 French Open Boys\' final, and won the 2011 Orange Bowl. As a professional, he made it to the finals of the 2018 and 2019 French Open, losing to Rafael Nadal on both occasions, and the 2020 Australian Open, where he lost to Novak Djokovic. In 2019, he beat Roger Federer to win his first ATP Tour Masters 1000 title at Indian Wells.'),
(5, 'Daniil', 'Medvedev', '1996-02-11', 'Russia', 'Daniil Medvedev is a Russian professional tennis player. Currently ranked world No. 3 in singles by the Association of Tennis Professionals (ATP), he is a former world No. 1, holding the ranking for a total of 16 weeks. Medvedev has won 20 ATP Tour singles titles, including the 2021 US Open and 2020 ATP Finals. In the former, Medvedev defeated then-world No. 1 Novak Djokovic in the final to deny him the Grand Slam. In the 2020 ATP Finals where he defeated Novak Djokovic, Rafael Nadal, and Dominic Thiem, with the win, Medvedev became the first and only player to defeat the top 3 ranked players in the world en route to the year-end championship title. He has also won six Masters titles, and contested four major finals and nine Masters finals in all. His six Masters titles all came in different venues, making him only the sixth player in history to win ATP Masters titles at six different venues, and the first to achieve this with as few as six titles.'),
(6, 'Stefanos', 'Tsitsipas', '1998-08-12', 'Greece', 'Stefanos Tsitsipas is a Greek professional tennis player. He has been ranked as high as world No. 3 by the Association of Tennis Professionals (ATP), which he first achieved on August 9, 2021, making him the highest-ranked Greek player in history alongside Maria Sakkari. Tsitsipas was the champion at the 2019 ATP Finals, becoming the youngest winner of the year-end championships in eighteen years. He has won ten ATP singles titles (including two Masters 1000 championships) and appeared in major finals at the 2021 French Open and 2023 Australian Open, finishing both as runner-up to Novak Djokovic. He has a career-high doubles ranking of No. 64, achieved on August 29, 2022.'),
(7, 'Sofia', 'Kenin', '1998-11-14', 'United States', 'Sofia Kenin is an American professional tennis player. She has a career-high Women\'s Tennis Association (WTA) ranking of No. 7 in the world. She is the reigning champion at the Australian Open and the youngest American to win a Grand Slam women\'s singles title since Serena Williams in 2002. Kenin was named the WTA Most Improved Player of the Year in 2019, making her the first American to win the award also since Serena Williams in 1999. Kenin has won four WTA singles titles in total. She has also won two WTA doubles titles, including the 2019 China Open at the Premier Mandatory level with Bethanie Mattek-Sands.'),
(8, 'Garbine', 'Muguruza', '1993-10-28', 'Spain', 'Garbine Muguruza is a Spanish-Venezuelan professional tennis player who represents Spain in tennis competitions and turned professional in 2012. She has won three singles titles, most notably at the 2016 French Open where she beat world number one Serena Williams in the final, and the 2017 Wimbledon Championships. By virtue of winning her first Grand Slam title in Paris, Muguruza became just the second player of either gender born in the 1990s to win a Grand Slam title after Petra Kvitova first did so at the 2011 Wimbledon Championships. She is also the first Spanish female player to win a Grand Slam title since Arantxa Sanchez Vicario in 1998. She achieved her career-high world ranking of No. 2 after the French Open.'),
(9, 'Naomi', 'Osaka', '1997-10-19', 'Japan', 'Naomi Osaka is a professional tennis player who represents Japan. She is the reigning champion in women\'s singles at the Australian Open. Osaka is formerly ranked No. 1 and currently ranked No. 4 by the Women\'s Tennis Association (WTA). She is the first Asian player to hold the top ranking in singles. She has won seven titles and reached ten finals on the WTA Tour. At the 2018 US Open and the 2019 Australian Open, Osaka won her first two Grand Slam singles titles in back-to-back Grand Slam tournaments, and is the first player to achieve this feat since Jennifer Capriati in 2001. Since 2018, she has won a Grand Slam singles title in four consecutive years.'),
(10, 'Jennifer', 'Brady', '1995-04-12', 'United States', 'Jennifer Brady is an American professional tennis player. She has won four singles titles and four doubles titles on the ITF circuit. In October 2017, she reached her best singles ranking of world No. 60. In April 2019, she attained her career-high doubles ranking of world No. 48. Brady made her WTA Tour debut at the 2014 US Open, having received a wild card with Samantha Crawford in the doubles tournament.'),
(11, 'Ashleigh', 'Barty', '1996-04-24', 'Australia', 'Ashleigh Barty is an Australian professional tennis player and former cricketer. She is ranked No. 1 in the world in singles by the Women\'s Tennis Association (WTA) and is the second Australian WTA singles No. 1 after fellow Indigenous Australian player Evonne Goolagong Cawley. She has also been a top 10 player in doubles, having achieved a career-high ranking of No. 5 in the world. Barty has won 15 singles titles and 12 doubles titles on the WTA Tour, including three Grand Slam singles titles, the 2019 French Open, 2021 Wimbledon Championships and the 2022 Australian Open, and one Grand Slam doubles title at the 2018 US Open with partner CoCo Vandeweghe. She won also the 2019 WTA Finals in singles.'),
(12, 'Danielle', 'Collins', '1993-12-13', 'United States', 'Danielle Collins graduated from Northeast High School, St. Petersburg, Florida, in 2012. As a high school player, her junior ranking was good enough to get her a scholarship from the University of Florida. After her freshman year, she transferred to the University of Virginia (UVA). She won the NCAA singles title in her sophomore and senior years, in 2014 and 2016. Collins finished her career at Virginia in 2016 as the top-ranked collegiate player. She made a significant breakthrough in the WTA Tour when she reached the semifinals of the 2019 Australian Open.'),
(13, 'Aryna', 'Sabalenka', '1998-05-05', 'Belarus', 'Aryna Sabalenka is a Belarusian professional tennis player. She has been ranked as high as world No. 2 in singles and world No. 1 in doubles by the Women\'s Tennis Association (WTA). Sabalenka has won one major singles title, at the 2023 Australian Open, and two major doubles titles, at the 2019 US Open and the 2021 Australian Open, both partnering Elise Mertens. She has won 18 career titles in total, twelve in singles and six in doubles.'),
(14, 'Elena', 'Rybakina', '1999-06-17', 'Kazakhstan', 'Elena Andreyevna Rybakina is a Russian-born Kazakhstani professional tennis player. She is the reigning champion at Wimbledon and the first Kazakhstani player to win a major title. She is also the first to be ranked in the world\'s top 10, with a career-high ranking of No. 10 by the Women\'s Tennis Association (WTA), and the current Kazakhstani No. 1 player in women\'s singles. Rybakina has reached eight other finals on the WTA Tour, including three at the WTA 500 level, winning two titles.'),
(15, 'Qinwen', 'Zheng', '2002-10-08', 'China', 'Qinwen Zheng is a Chinese tennis player. Zheng has won one WTA Challenger and eight ITF singles titles, and was named the 2022 WTA Newcomer of the Year. She won her maiden WTA Tour title at the 2023 Palermo Ladies Open. Zheng left Shiyan when she was eight to train in Wuhan, and was soon inspired by Li Na\'s run to the 2011 French Open title. She later trained with Li\'s former coach Carlos Rodriguez in Beijing.'),
(16, 'Casper', 'Ruud', '1998-12-22', 'Norway', 'Casper Ruud is a Norwegian professional tennis player. Ruud has a career-high singles ranking of world No. 2, achieved on September 12, 2022, making him the highest-ranked Norwegian in history. He has won ten ATP Tour singles titles, nine of which were on clay courts, and finished runner-up at three Grand Slams (at the 2022 French Open, 2022 US Open, and 2023 French Open) and at the 2022 ATP Finals. He is the first Norwegian man to win an ATP title (having won ten 250s, nine of which were on clay courts), first to reach an ATP Tour Masters 1000 final, first in history to reach a Grand Slam tournament final and the Top-10 in the ATP rankings.'),
(17, 'Iga', 'Swiatek', '2001-05-31', 'Poland', 'Iga Swiatek is a Polish professional tennis player. She is ranked as the world No. 1 in women\'s singles by the Women\'s Tennis Association (WTA). Swiatek is a four-time major singles champion, having won the French Open in 2020, 2022 and 2023 and the US Open in 2022. She was the champion at the 2020 French Open and is the first Polish Grand Slam singles champion in history. With her French Open title, she also became the youngest singles champion at the tournament since Rafael Nadal in 2005, and the youngest women\'s singles champion since Monica Seles in 1992. She has won a total of 15 WTA Tour-level titles.'),
(18, 'Barbora', 'Krejcikova', '1995-12-18', 'Czechia', 'Barbora Krejcikova is a Czech professional tennis player. She has a career-high singles ranking of world No. 15, reached on 14 June 2021, and on 22 October 2018, she became world No. 1 in the WTA doubles rankings. Krejcikova is a seven-time Grand Slam champion, having won the 2021 French Open singles title, the women\'s doubles titles at the 2018 French Open, 2018 Wimbledon and 2021 French Open (with compatriot Katerina Siniakova) and the mixed doubles titles at the Australian Open in 2019 and in 2021 as well in 2020 (with Nikola Mektic).'),
(19, 'Anastasia', 'Pavlyuchenkova', '1991-07-03', 'Russia', 'Anastasia Pavlyuchenkova is a Russian tennis player. She is a Russian professional tennis player. She is currently the Russian No. 1 player in singles. A junior prodigy, Pavlyuchenkova won three junior Grand Slam titles and became the junior world No. 1, in January 2006, at the age of 14. She continued her success after turning professional, reaching a career-high singles ranking of world No. 13 on July 4, 2011.'),
(20, 'Coco', 'Gauff', '2004-03-13', 'United States', 'Cori \'Coco\' Gauff (born March 13, 2004) is an American professional tennis player. She has won seven WTA Tour singles titles, including a major at the 2023 US Open, and eight doubles titles. Gauff has career-high rankings of world No. 3 in singles and of world No. 1 in doubles by the Women\'s Tennis Association (WTA). Born to parents with NCAA Division I collegiate backgrounds in basketball and track and field, Gauff became the No. 1 junior in the world after winning the junior 2018 French Open singles title and also won a junior major doubles title at the 2018 US Open.'),
(21, 'Karolina', 'Muchova', '1996-08-21', 'Czechia', 'Karolina Muchova is a Czech professional tennis player. Muchova has reached three finals on the WTA Tour, including the 2023 French Open final, and won one title at the Korea Open in 2019. She first rose to prominence at the 2018 US Open, defeating World No. 12 and two-time Grand Slam champion Garbine Muguruzain the second round. The following year, Muchova would reach her first Slam quarterfinal at Wimbledon after upsetting World No. 3 and tournament favorite Karolina Pliskova. At the 2021 Australian Open, she reached the semifinals by defeating world No. 1 and home favorite Ashleigh Barty, but then lost to Jennifer Brady. At the 2023 French Open, she reached her first major final by defeating world No. 2 Aryna Sabalenka in a close fought semifinal, finishing runner-up to world No. 1 Iga Swiatek.'),
(22, 'Matteo', 'Berrettini', '1996-04-12', 'Italy', 'Matteo Berrettini is an Italian professional tennis player.He has a career high ATP singles ranking of world No. 8, achieved on November 4, 2019, and a career high ATP doubles ranking of world No. 105, achieved on July 22, 2019. He won his first ATP 500 level event at the 2021 Queens Club Championships. He also reached the final of the 2021 Wimbledon Championships and the semifinals of the 2019 US Open.'),
(23, 'Nick', 'Kyrgios', '1995-04-27', 'Australia', 'Nick Kyrgios is an Australian professional tennis player. In singles, Kyrgios\' career-high ATP singles ranking of world No. 13 was achieved on 24 October 2016. He has won six ATP Tour singles titles, including the 2019 Washington Open, and reached ten finals, most notably a major final at the 2022 Wimbledon Championships, and a Masters 1000 final at the 2017 Cincinnati Masters. In doubles, Kyrgios has a career-high ranking of world No. 29, achieved on March 21, 2022 after winning a major doubles title at the 2022 Australian Open and reaching the semifinals of the Miami Open, both times partnering Thanasi Kokkinakis. He has reached a singles major final at the 2022 Wimbledon Championships and two major quarterfinals (at 2014 Wimbledon, upsetting then-world No. 1 Rafael Nadal en route, and the 2015 Australian Open). Kyrgios is only the third player, after Dominik Hrbaty and Lleyton Hewitt, to have beaten each one of the Big Three (Novak Djokovic, Roger Federer, and Nadal) the first time he played against them.'),
(24, 'Carlos', 'Alcaraz', '2003-05-05', 'Spain', 'Carlos Alcaraz is a Spanish professional tennis player. He is ranked world No. 1 in singles by the Association of Tennis Professionals (ATP). Alcaraz has won twelve ATP Tour-level singles titles, including two major titles (at the 2022 US Open and 2023 Wimbledon Championships) and four Masters 1000 titles. With the US Open win, Alcaraz became the youngest man to top the singles rankings at 19 years, 4 months, and 6 days old, and the first teenager in the Open Era to top the men\'s rankings.'),
(25, 'Ons', 'Jabeur', '1994-08-28', 'Tunisia', 'Ons Jabeur is a Tunisian professional tennis player. She has been ranked as high as world No. 2 by the Women\'s Tennis Association (WTA), achieved on June 27, 2022. Jabeur is the current No. 1 Tunisian player, and the highest-ranked African and Arab tennis player in ATP and WTA rankings history. She has won four singles titles on the WTA Tour, as well as 11 singles titles and one doubles title on the ITF Women\'s Circuit. Jabeur was the runner-up at Wimbledon in 2022 and 2023 and at the US Open in 2022, becoming the first Arab woman to contest a major singles final.'),
(26, 'Marketa', 'Vondrousova', '1999-06-28', 'Czechia', 'Marketa Vondrousova is a Czech professional tennis player. She has a career-high ranking of world No. 9 by the Women\'s Tennis Association (WTA). Vondrousova is the reigning Wimbledon champion, winning the tournament in 2023 to become the first unseeded woman to win the singles title. She was also the runner-up at the 2019 French Open, where she became the first teenage major finalist in nearly a decade. She has won two singles titles out of six finals on the WTA Tour and a silver medal at the 2020 Tokyo Olympics.'),
(27, 'Alexander', 'Zverev', '1997-04-20', 'Germany', 'Alexander Zverev is a German professional tennis player. He has been ranked by the Association of Tennis Professionals (ATP) as high as world No. 2, and was continuously ranked in the top 10 from July 2017 to November 2022. Zverev\'s career highlights include titles at the 2018 and the 2021 ATP Finals, and a gold medal at the 2020 Tokyo Olympics. He has won 20 ATP Tour titles in singles and two in doubles, and reached a major final at the 2020 US Open, finishing runner-up to Dominic Thiem. Winning the 2018 ATP Finals is making him the youngest winner at the year-end championship in a decade. He is the only active player outside of the Big Four with three ATP Masters 1000 titles and the ATP Finals titles.'),
(28, 'Victoria', 'Azarenka', '1989-07-31', 'Belarus', 'Victoria Fyodarauna Azarenka was born on July 31, 1989 in Minsk, Byelorussian SSR, Soviet Union to Alla and Fyodor Azarenka in a middle-class Catholic family. She is a former world No. 1 in singles and was the year-end No. 1 in 2012. Azarenka has won 21 WTA singles titles, nine WTA doubles titles, and three mixed-doubles titles. She has won two Australian Open singles titles (2012 and 2013), becoming the only Belarusian player, male or female, to win a Grand Slam singles title. Azarenka is also a three-time major finalist at the US Open, finishing runner-up to Serena Williams in both 2012 and 2013 and to Naomi Osaka in 2020.'),
(29, 'Emma', 'Raducanu', '2002-11-13', 'United Kingdom', 'Emma Raducanu is a British professional tennis player. She reached a career-high Women\'s Tennis Association (WTA) ranking of world No. 20, and is the current British No. 1. Raducanu is the reigning US Open champion, and the first British woman to win a Grand Slam singles title since Virginia Wade in the 1977 Wimbledon Championships. She is considered a baseline player, known for her powerful, flat groundstrokes, and aggressive return of serve.'),
(30, 'Leylah', 'Fernandez', '2002-09-06', 'Canada', 'Leylah Fernandez is a Canadian tennis player. On January 25, 2019, Fernandez made it to the Australian Open Girls\' Singles Final, where she lost to the top seeded Clara Tauson. On June 8, 2019, Fernandez defeated Emma Navarro in the French Open Girl\'s Singles Final to become the first Canadian female winner of a junior Grand Slam title since Eugenie Bouchard at 2012 Wimbledon.');

-- --------------------------------------------------------

--
-- Table structure for table `tournaments`
--

CREATE TABLE `tournaments` (
  `tournamentId` int(11) NOT NULL,
  `grandSlamId` int(11) DEFAULT NULL,
  `tournamentYear` year(4) DEFAULT NULL,
  `typeId` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tournaments`
--

INSERT INTO `tournaments` (`tournamentId`, `grandSlamId`, `tournamentYear`, `typeId`) VALUES
(1, 1, 2020, 1),
(2, 1, 2021, 1),
(3, 1, 2022, 1),
(4, 1, 2023, 1),
(5, 1, 2024, 1),
(6, 1, 2020, 2),
(7, 1, 2021, 2),
(8, 1, 2022, 2),
(9, 1, 2023, 2),
(10, 1, 2024, 2),
(11, 2, 2020, 1),
(12, 2, 2021, 1),
(13, 2, 2022, 1),
(14, 2, 2023, 1),
(15, 2, 2020, 2),
(16, 2, 2021, 2),
(17, 2, 2022, 2),
(18, 2, 2023, 2),
(19, 3, 2021, 1),
(20, 3, 2022, 1),
(21, 3, 2023, 1),
(22, 3, 2021, 2),
(23, 3, 2022, 2),
(24, 3, 2023, 2),
(25, 4, 2020, 1),
(26, 4, 2021, 1),
(27, 4, 2022, 1),
(28, 4, 2023, 1),
(29, 4, 2020, 2),
(30, 4, 2021, 2),
(31, 4, 2022, 2),
(32, 4, 2023, 2);

-- --------------------------------------------------------

--
-- Table structure for table `types`
--

CREATE TABLE `types` (
  `typeId` int(11) NOT NULL,
  `type` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `types`
--

INSERT INTO `types` (`typeId`, `type`) VALUES
(1, 'Men\'s Singles'),
(2, 'Women\'s Singles');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `finals`
--
ALTER TABLE `finals`
  ADD PRIMARY KEY (`finalId`),
  ADD KEY `champion` (`champion`),
  ADD KEY `opponent` (`opponent`);

--
-- Indexes for table `grandSlams`
--
ALTER TABLE `grandSlams`
  ADD PRIMARY KEY (`grandSlamId`);

--
-- Indexes for table `players`
--
ALTER TABLE `players`
  ADD PRIMARY KEY (`playerId`);

--
-- Indexes for table `tournaments`
--
ALTER TABLE `tournaments`
  ADD PRIMARY KEY (`tournamentId`),
  ADD KEY `grandSlamId` (`grandSlamId`),
  ADD KEY `typeId` (`typeId`);

--
-- Indexes for table `types`
--
ALTER TABLE `types`
  ADD PRIMARY KEY (`typeId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `finals`
--
ALTER TABLE `finals`
  MODIFY `finalId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `grandSlams`
--
ALTER TABLE `grandSlams`
  MODIFY `grandSlamId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `players`
--
ALTER TABLE `players`
  MODIFY `playerId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `tournaments`
--
ALTER TABLE `tournaments`
  MODIFY `tournamentId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `types`
--
ALTER TABLE `types`
  MODIFY `typeId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `finals`
--
ALTER TABLE `finals`
  ADD CONSTRAINT `finals_ibfk_1` FOREIGN KEY (`champion`) REFERENCES `players` (`playerId`) ON DELETE CASCADE,
  ADD CONSTRAINT `finals_ibfk_2` FOREIGN KEY (`opponent`) REFERENCES `players` (`playerId`) ON DELETE CASCADE;

--
-- Constraints for table `tournaments`
--
ALTER TABLE `tournaments`
  ADD CONSTRAINT `tournaments_ibfk_1` FOREIGN KEY (`grandSlamId`) REFERENCES `grandSlams` (`grandSlamId`) ON DELETE CASCADE,
  ADD CONSTRAINT `tournaments_ibfk_2` FOREIGN KEY (`typeId`) REFERENCES `types` (`typeId`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
