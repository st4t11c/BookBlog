-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 03, 2024 at 06:55 PM
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
-- Database: `bookblog`
--

-- --------------------------------------------------------

--
-- Table structure for table `registeredbooks`
--

CREATE TABLE `registeredbooks` (
  `id` int(11) NOT NULL,
  `bookName` varchar(255) NOT NULL,
  `bookAuthor` varchar(255) NOT NULL,
  `registeredDate` varchar(20) NOT NULL,
  `registeredBy` varchar(255) NOT NULL,
  `aboutBook` text NOT NULL,
  `uploadPicture` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `registeredbooks`
--

INSERT INTO `registeredbooks` (`id`, `bookName`, `bookAuthor`, `registeredDate`, `registeredBy`, `aboutBook`, `uploadPicture`) VALUES
(3, 'Laughter The Best Medicine', 'Reader\'s Digest', '2024-01-10', 'jona123', 'Reader\'s Digest Laughter is the Best Medicine: All Time Favorites: The funniest jokes, stories, and cartoons from 100 years of Reader\'s Digest', 'img/LaughterTheBestMedicine.jpg'),
(4, 'The Do Over', 'Sharon M Peterson', '2023-11-15', 'jona123', 'It is a romantic comedy that tells the story of Persephone “Perci” Mayfield, a woman who is putting up with a lot of crap from her friends and family.', 'img/TheDoOver.jpg'),
(5, 'The Silver Ladies Of Penny Lane', 'Dee Mac Donald', '2023-10-24', 'jona123', 'They make you laugh-out-loud one minute, and then have you crying the next… they’re really emotional and tug at the heart strings but are fun, life-affirming reads!', 'img/TheSilverLadiesOfPennyLane.jpg'),
(6, 'The Tanglewood Tea Shop', 'Lilac Mills', '2023-10-15', 'jona123', 'The Tanglewood Tea Shop A laugh out loud romantic comedy of new starts and finding home.', 'img/TheTanglewoodTeaShop.jpg'),
(7, 'Project Hail Mary', 'Andy Weir', '2024-01-21', 'jona123', 'Project Hail Mary is a science-based thriller about a lone astronaut who must save the earth from disaster.', 'img/ProjectHailMary.jpg'),
(8, 'Dark Matter', 'Blake Crouch', '2024-01-05', 'jona123', 'Jason Dessen, a former quantum mechanics physicist, is a college physics professor who lives in Chicago with his wife, Daniela and their son Charlie. One day Jason is kidnapped and drugged. He wakes up in a science laboratory and stumbles out of a metal cube.', 'img/DarkMatter.jpg'),
(9, 'The Wager', 'David Grann', '2023-11-28', 'jona123', 'The Wager covers accounts of the 18th century shipwreck of a British naval ship, the Wager, during the War of Jenkins’ Ear between Spain and Britain. The survivors of the shipwreck and their captain, David Cheap, were stranded on an island off the South American region of Patagonia, later named Wager Island.', 'img/TheWager.jpg'),
(10, 'The Spy And The Traitor', 'Ben Macintyre', '2023-10-16', 'jona123', 'The Spy and the Traitor discusses the story of Oleg Gordievsky, a Soviet double agent who helped end the Cold War through his historic efforts.', 'img/TheSpyAndTheTraitor.jpg'),
(11, 'For Once In My Life', 'Colleen Coleman', '2024-01-02', 'jona123', 'Twenty-nine-year-old Lily Buckley planned to be happily married and in her dream job by now. Instead she’s been single since being left at the altar three years ago, and works at her local paper, writing about giant vegetables at the village fete and a dog who looks exactly like Chewbacca.', 'img/ForOnceInMyLife.jpg'),
(12, 'The Summer House', 'Jenny Hale', '2023-06-06', 'jona123', 'Callie Weaver and best friend Olivia Dixon have finally done it: put their life savings into the beach house they admired through childhood summers, on the dazzling white sand of North Carolina’s Outer Banks.', 'img/TheSummerHouse.jpg'),
(13, 'Love & Other Words', 'Christina Lauren', '2023-07-03', 'jona123', 'Macy Sorensen, a successful paediatric resident who, after eleven years apart, reconciles with Elliot Petropoulos, her childhood sweetheart and first love.', 'img/Love&OtherWords.jpg'),
(14, 'In Five Years', 'Rebecca Serle', '2023-04-03', 'jona123', 'In Five Years is about a successful and recently engaged woman, Dannie, who sees a vision of herself five years into the future. In that vision, she\'s engaged and in love with a man she\'s never met and living in an apartment she doesn\'t recognize.\r\n', 'img/In5Years.jpg'),
(15, 'Then She Was Gone', 'Lisa Jewell', '2023-11-01', 'jona123', 'Ellie Mack was the perfect daughter. She was fifteen, the youngest of three. She was beloved by her parents, friends, and teachers. She and her boyfriend made a teenaged golden couple. She was days away from an idyllic post-exams summer vacation, with her whole life ahead of her. And then she was gone.', 'img/ThenSheWasGone.jpg'),
(16, 'The Hunting Party', 'Lucy Foley', '2023-09-21', 'jona123', 'A shivery, atmospheric, page-turning novel of psychological suspense in the tradition of Agatha Christie, in which a group of old college friends are snowed in at a hunting lodge … and murder and mayhem ensue.', 'img/TheHuntingPart.jpg'),
(17, 'Never Lie', 'Freida McFadden', '2023-10-02', 'jona123', '\'Never Lie\' by Freida McFadden is a gripping psychological thriller that explores the consequences of deceit and the lengths one will go to protect their secrets. Newlyweds look at buying their dream house. Unfortunately, it comes with a dark psychological past.', 'img/NeverLie.jpg'),
(18, 'A Man With One Of Those Faces', 'Caimh McDonnell', '2023-12-29', 'jona123', 'Currently, he passes his time visiting old and dying people, keeping them company and pretending to be someone from their past. However, this little act gets him far more than he bargained for when an old man mistakes him for the nephew of a Dublin crime lord and tries to stab him.', 'img/AManWithOneOfThoseFaces.jpg'),
(19, 'A Brief History Of Humankind', 'Yuval Harari', '2024-01-29', 'jona123', 'Harari surveys the history of humankind from the Stone Age up to the 21st century, focusing on Homo sapiens. He divides the history of Sapiens into four major parts', 'img/ABriefHistoryOfHumankind.jpg'),
(20, 'Democracy Awakening', 'Heather Cox Richardson', '2024-01-01', 'jona123', '“Democracy Awakening” starts in the 1930s, when Americans who’d been wiped out in the 1929 stock market crash were not about to let the rich demolish the economy again.', 'img/DemocracyAwakening.jpg'),
(21, 'Napoleon', 'Andrew Roberts', '2023-11-26', 'jona123', 'With immense detail and captivating storytelling, Roberts unfolds the military genius of Napoleon, who seized the reins of power in a coup d\'état in 1799, effectively ending the French Revolution, and establishing himself as the First Consul of France.', 'img/Napoleon.jpg'),
(22, 'The Readhead Of Auschwitz', 'Nechama Birnbaum', '2023-07-06', 'jona123', 'The Redhead of Auschwitz tells the story of Rosie Greenstein, a young Jewish woman who was sent to Auschwitz-Birkenau concentration camp during the Holocaust. Rosie was known for her fiery red hair, which made her a target for the Nazis. She was forced to work in the camp’s labor force, and she witnessed the horrors of the Holocaust firsthand.', 'img/TheReadheadOfAuschwitz.jpg'),
(23, 'Those Empty Eyes', 'Charlie Donlea', '2023-12-17', 'jona123', 'Most shocking of all—as Alex digs into Laura’s disappearance, she realizes there are unexpected connections to the murder of her own family.', 'img/ThoseEmptyEyes.jpg'),
(24, 'The Edge', 'David Baldacci', '2023-12-12', 'jona123', 'When CIA operative Jenny Sikwell is murdered in rural Maine, government officials have immediate concerns over national security. Her laptop and phone were full of state secrets that, in the wrong hands, endanger the lives of countless operatives.', 'img/TheEdge.jpg'),
(25, 'The Secret', 'Lee Child', '2023-12-03', 'jona123', 'Eight respectable, upstanding people have been found dead across the US. These deaths look like accidents and don’t appear to be connected. Until one body – the victim of a fatal fall from a hospital window – generates some unexpected attention.', 'img/TheSecret.jpg'),
(26, 'Rainbow Six', 'Tom Clancy', '2023-12-13', 'jona123', 'A group of terrorists like none the world has ever encountered before - so extreme that their success could literally mean the end of life on this earth as we know it.', 'img/RainbowSix.jpg'),
(27, 'The Secret Language Of The Universe', 'Laura Lynne Jackson', '2024-01-11', 'jona123', 'Laura possesses an incredible gift: the ability to communicate with loved ones who have passed, convey messages of love and healing, and impart a greater understanding of our interconnectedness.', 'img/TheSecretLanguageOfTheUniverse.jpg'),
(28, 'The Power Of Now', 'Eckhart Tolle', '2023-07-11', 'jona123', 'A word of mouth phenomenon since its first publication, The Power of Now is one of those rare books with the power to create an experience in readers, one that can radically change their lives for the better.', 'img/ThePowerOfNow.jpg'),
(29, 'The Seven Spiritual Laws Of Success', 'Deepak Chopra', '2024-01-21', 'jona123', 'In The Seven Spiritual Laws of Success, Deepak Chopra distills the essence of his teachings into seven simple, yet powerful principles that can easily be applied to create success in all areas of your life. Based on natural laws that govern all of creation, this book shatters the myth that success is the result of hard work, exacting plans, or driving ambition.', 'img/TheSevenSpiritualLawsOfSuccess.jpg'),
(30, 'Lighter', 'Yung Pueblo', '2023-11-05', 'jona123', '#1 NEW YORK TIMES BESTSELLER • “An empathetic and wise book that will guide you on a journey toward a deeper understanding of self.”', 'img/Lighter.jpg'),
(31, 'Elegji për Kosovën', 'Ismail Kadare', '2023-12-10', 'jona123', 'Kjo permbledhje prej 3 tregimesh, ngjarjet te cilat jane vendosur me 1389, pas dhe gjate Betejes se Kosoves, shtjellojne ngjarjet, pasojat e te cilave i ndjejne edhe brezat e ardhshem.', 'img/Elegy for Kosovo A Novel.jpg'),
(32, 'Engjëjt Nuk Zbresin Në Tokë', 'Viktor Canosinaj', '2023-08-20', 'jona123', 'Historia e vecantë e jetës së një gruaje, e vendosur në tri periudha kohore: monarki, Luftën e Dytë Botërore dhe komunizëm; sfida që ajo i bën shoqërisë dhe moralit të saj fals në emër të një dashurie të madhe. Një histori për të gjitha gratë që sfidojnë kohën e tyre, një histori për të gjithë burrat që u qëndrojnë pranë.', 'img/EngjejtNukZbresinNeToke.jpg'),
(33, 'Dashuria dhe Dhoma e Errët', 'Shpresa Ymeraj', '2023-08-19', 'jona123', '\"Poezia e Shpresa Ymerajt i beson gjuhës figurative për të krijuar hapësirën e vet intime. Pena e saj, nëpërmjet një reflektimi të veçantë thellësisht emocional, inkurajon analizën e brendshme.\"', 'img/DashuriaDheDhomaEErret.jpg'),
(34, 'Millosh Gjergj Nikolla', 'Migjeni', '2024-01-01', 'jona123', 'Migjeni (pseudonimi i Millosh Gjergj Nikollës) është nga shkrimtarët më të shquar të letërsisë shqiptare. Me një realizëm të thellë, të panjohur deri atëherë në letërsinë tonë, ai pasqyroi jetën e përditshme të shoqërisë shqiptare, sidomos të shtresave të varfëra të qytetit e fshatit, duke demaskuar sistemin e prapambetur shoqëror si dhe fashizmin që po kërcënonte Evropën.', 'img/MilloshGjersgjNikolla.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `rolet_userave`
--

CREATE TABLE `rolet_userave` (
  `idRoles` int(11) NOT NULL,
  `emri_roleve` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `UserID` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Lastname` varchar(50) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `roli_userit` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`UserID`, `Name`, `Lastname`, `Email`, `Username`, `Password`, `roli_userit`) VALUES
(8, 'Erblin', 'Hetemi', 'erblini543@gmail.com', 'blini123', '$2y$10$EDYx7fw9rnW2qUEYDzFzReYE8gxP.OL9Gvc9e.BhzBOC5AqF7gyNC', 'Admin'),
(24, 'jona', 'mustafa', 'jonammustafaa@gmail.com', 'jona123', '', 'User'),
(25, 'riga', 'korca', 'riga@gmail.com', 'riga123', '$2y$10$PfsCCleSHVXTIzk7RbbxKe1t62lI0KAlJ//y.9F5V.TcTLx9xb3BG', 'User');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `registeredbooks`
--
ALTER TABLE `registeredbooks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rolet_userave`
--
ALTER TABLE `rolet_userave`
  ADD PRIMARY KEY (`idRoles`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`UserID`),
  ADD UNIQUE KEY `Email` (`Email`),
  ADD UNIQUE KEY `Username` (`Username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `registeredbooks`
--
ALTER TABLE `registeredbooks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `rolet_userave`
--
ALTER TABLE `rolet_userave`
  MODIFY `idRoles` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `UserID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
