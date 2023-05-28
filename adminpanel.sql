-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 23, 2021 at 06:12 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `adminpanel`
--

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `gallery_id` int(11) NOT NULL,
  `date` varchar(15) NOT NULL,
  `img_description` varchar(100) NOT NULL,
  `gal_image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`gallery_id`, `date`, `img_description`, `gal_image`) VALUES
(2, '02.03.2020', 'Announcing the release of her new book', 'Announcement.jpg'),
(3, '06.09.2018', 'At Authors Guild Dinner', 'ChristopherAward2014.jpg'),
(4, '07.07.2017', 'At CBC Awards, 2017', 'CBCAward.jpg'),
(5, '02.03.2014', 'At Christopher Awards, 2014', 'AuthorsGuildDinner.JPG'),
(6, '06.10.2015', 'At Teen Choice Awards, 2015', 'teenchoiceawards.jpg'),
(7, '06.09.2016', 'At Audie Award for Excellence in Design', 'scaward.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `home`
--

CREATE TABLE `home` (
  `home_id` int(11) NOT NULL,
  `subheading` varchar(100) NOT NULL,
  `secondheading` varchar(100) NOT NULL,
  `paragraph` varchar(1000) NOT NULL,
  `image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `home`
--

INSERT INTO `home` (`home_id`, `subheading`, `secondheading`, `paragraph`, `image`) VALUES
(3, 'Meet Suzanne Collins. The author of the popular Hunger Games series!', 'Her latest book is out!', 'Ambition will fuel him. Competition will drive him. But power has its price. It is the morning of the reaping that will kick off the tenth annual Hunger Games. In the Capitol, eighteen-year-old Coriolanus Snow is preparing for his one shot at glory as a mentor in the Games. The once-mighty house of Snow has fallen on hard times, its fate hanging on the slender chance that Coriolanus will be able to outcharm, outwit, and outmaneuver his fellow students to mentor the winning tribute. The odds are against him. He has been given the humiliating assignment of mentoring the female tribute from District 12, the lowest of the low. Their fates are now completely intertwined -- every choice Coriolanus makes could lead to favor or failure, triumph or ruin. Inside the arena, it will be a fight to the death. Outside the arena, Coriolanus starts to feel for his doomed tribute... and must weigh his need to follow the rules against his desire to survive no matter what it takes.', '220px-The_Ballad_of_Songbirds_and_Snakes_(Suzanne_Collins).png');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `msg_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(200) NOT NULL,
  `topic` varchar(200) NOT NULL,
  `subject` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`msg_id`, `name`, `email`, `topic`, `subject`) VALUES
(1, 'Kate', 'kate@gmail.com', 'test', 'just testing if this works'),
(2, 'emma', 'emma@gmail.com', 'hello', 'hello world');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `news_id` int(11) NOT NULL,
  `mainheading` varchar(100) NOT NULL,
  `newspara` varchar(1000) NOT NULL,
  `news_image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`news_id`, `mainheading`, `newspara`, `news_image`) VALUES
(3, 'Suzanne Collins on filling Hunger Games gaps with prequel The Ballad of Songbirds and Snakes', 'After nearly a year of waiting, Hunger Games fans can finally get their hands on Suzanne Collins highly-anticipated prequel novel, The Ballad of Songbirds and Snakes. Set more than six decades before the start of the original trilogy, the book follows a young Coriolanus Snow (future demagogue of Panem) as he mentors a young Tribute from District 12 (birthplace of Katniss Everdeen, the person who brings about Snows eventual downfall) in the run-up to the 10th Annual Hunger Games. As it turns out, the mysterious participant, Lucy Gray, has a stronger — almost cyclical — connection to Katniss than we previously thought.', 'newsarticle-1.jfif'),
(5, 'Everything Jennifer Lawrence Has Said About The Hunger Games Movies', 'The movie The Hunger Games — based on Suzanne Collins book of the same name — premiered in 2012 and it immediately became a huge hit. In the dystopian sci-fi movie, Jennifer Lawrence (who was 20 years old at the time) portrayed the lead role of Katniss Everdeen and with that, she became a global star. The movie franchise wrapped up in 2015 with the last installment The Hunger Games: Mockingjay — Part 2.', 'newsarticle-2.jpg'),
(6, 'Suzanne Collins Talks About The Hunger Games, the Books and the Movies', '            The Hunger Games, by Suzanne Collins, came out in 2008. It is the first in a trilogy by the same name that includes Catching Fire (2009) and Mockingjay (2010). The series has more than 100 million copies in print worldwide, and spent more than 260 consecutive weeks on The Times best-seller list. The books have spawned four record-breaking films and many Katniss Halloween costumes. In a 10th anniversary edition of the book, which hits stores this month, David Levithan, a vice president and publisher at Scholastic Press, interviewed Collins. An excerpt from that interview, including potential spoilers, is below, condensed and edited for clarity and length.', 'newsarticle-3.jpg'),
(7, 'Hunger Games: What Is The Correct Order Of Movies And Where To Watch?', '         Hunger Games: Children and youth dystopias dominated bookstore shelves in the late 2000s. The Maze Runner, Divergent and, of course, Hunger Games sagas rescued a type of literature that has always been very common, especially since the 1984 publication. authors decided to focus the stories on younger characters, who overnight had to assume responsibility, in an analogy to the passage from adolescence to adulthood.   ', 'newsarticle-4.jpeg'),
(8, 'Youth review: Gregor the Overlander by Suzanne Collins', 'There are few things as good as reading a good book, and Gregor the Overlander, definitely qualifies. It is exciting and suspenseful, with lots of twists and turns that make you wonder what happens next. If you are like me and have really enjoyed reading book series like Harry Potter, Percy Jackson, and others, you will appreciate that this book is the first in a series called The Underland Chronicles (by Suzanne Collins, author of the Hunger Games trilogy).            ', 'newsarticle-5.jfif');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `username`, `email`, `password`) VALUES
(2, 'webdev', 'webdev@gmail.com', '1234'),
(4, 'hariyash', 'hariyash@gmail.com', '56766'),
(6, 'hello', 'hello@gmail.com', '345'),
(7, 'karthik', 'karthik@gmail.com', '678'),
(8, 'helloworld', 'helloworld@gmail.com', '1233'),
(9, 'emrys', 'emrys@gmail.com', 'emrys');

-- --------------------------------------------------------

--
-- Table structure for table `shop`
--

CREATE TABLE `shop` (
  `shop_id` int(11) NOT NULL,
  `book_name` varchar(100) NOT NULL,
  `book_desc` varchar(1000) NOT NULL,
  `book_price` float NOT NULL,
  `book_img` varchar(50) NOT NULL,
  `link` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `shop`
--

INSERT INTO `shop` (`shop_id`, `book_name`, `book_desc`, `book_price`, `book_img`, `link`) VALUES
(1, 'The Hunger Games', 'Set in a dark vision of the near future, a terrifying reality TV show is taking place. Twelve boys and twelve girls are forced to appear in a live event called The Hunger Games.\r\nThere is only one rule: kill or be killed.\r\nWhen sixteen-year-old Katniss Everdeen steps forward to take her younger sisters place in the games, she sees it as a death sentence. But Katniss has been close to death before. For her, survival is second nature.', 230.4, 'thehungergames.jpg', 'https://www.amazon.in/Hunger-Games-Trilogy/dp/1407132083/ref=sr_1_1?dchild=1&keywords=hunger+games&qid=1626118237&s=books&sr=1-1'),
(3, 'Catching Fire', 'After winning the brutal Hunger Games, Katniss and Peeta return to their district, hoping for a peaceful future. But their victory has caused rebellion to break out ... and the Capitol has decided that someone must pay. As Katniss and Peeta are forced to visit the districts on the Capitols Victory Tour, the stakes are higher than ever. Unless they can convince the world that they are still lost in their love for each other, the consequences will be horrifying.', 250, 'catchingfire.jpg', 'https://www.amazon.in/Catching-Fire-Hunger-Games-Trilogy/dp/1407132091/ref=sr_1_1?dchild=1&keywords=catching+fire&qid=1626118384&s=books&sr=1-1'),
(4, 'MockingJay', 'Against all odds, Katniss Everdeen has survived the Hunger Games twice. But now that she has made it out of the bloody arena alive, she is still not safe. The Capitol is angry. The Capitol wants revenge. Who do they think should pay for the unrest? Katniss. And what is worse, President Snow has made it clear that no one else is safe either. Not Katniss family, not her friends, not the people of District 12.', 257, 'mockingjay.jfif', 'https://www.amazon.in/Mockingjay-Classic-specced-Special-Exclusive/dp/1407192256/ref=sr_1_1?dchild=1&keywords=mockingjay&qid=1626118453&s=books&sr=1-1'),
(5, 'The Ballad of SongBirds and Snakes', 'Set in the universe of the The Hunger Games, the book follows Coriolanus Snow, who is chosen to mentor a tribute in the upcoming 10th Hunger Games. He is assigned the District 12 tribute, Lucy Gray Baird, who sparks the Capitols attention after singing during the reaping.\r\nTheir fates are now completely intertwined — every choice Coriolanus makes could lead to favor or failure, triumph or ruin. Inside the arena, it will be a fight to the death. Outside the arena, Coriolanus starts to feel for his doomed tribute . . . and must weigh his need to follow the rules against his desire to survive no matter what it takes.', 280, 'ghrth54h43.jpg', 'https://www.amazon.in/Ballad-Songbirds-Snakes-Hunger-Games/dp/1338671162/ref=sr_1_1_sspa?dchild=1&keywords=ballad+of+songbirds+and+snakes&qid=1626119652&s=books&sr=1-1-spons&psc=1&smid=A1SSQ4T4D88LLQ&spLa=ZW5jcnlwdGVkUXVhbGlmaWVyPUFMWjNHRDVKMDBNUzkmZW5jcnlwdGVkSWQ9QTA4MzA3NDExUjU2SEYzUFgxQVVPJmVuY3J5cHRlZEFkSWQ9QTAwNzg3ODYxOFFMTjJQNjEwTENTJndpZGdldE5hbWU9c3BfYXRmJmFjdGlvbj1jbGlja1JlZGlyZWN0JmRvTm90TG9nQ2xpY2s9dHJ1ZQ=='),
(6, 'Gregor the Overlander', 'When Gregor falls through a grate in the laundry room of his apartment building, he hurtles into the dark Underland, where spiders, rats, cockroaches coexist uneasily with humans. This world is on the brink of war, and Gregors arrival is no accident. A prophecy foretells that Gregor has a role to play in the Underlands uncertain future. Gregor wants no part of it -- until he realizes it is the only way to solve the mystery of his fathers disappearance. Reluctantly, Gregor embarks on a dangerous adventure that will change both him and the Underland forever.', 380, 'gregoroverlander.jfif', 'https://www.amazon.com/Gregor-Overlander-Suzanne-Collins/dp/0439678137'),
(7, 'Gregor and the Prophecy of Bane', 'Months have passed since Gregor first fell into the strange Underland beneath New York City, and he swears he will never go back. But he is destined to be a key player in another prophecy, this one about an ominous white rat called the Bane. The Underlanders know there is only one way to lure Gregor back to their world: by kidnapping his little sister, Boots.', 300, 'prophecyofbane.jpg', 'https://www.amazon.in/Gregor-Prophecy-Bane-Underland-Chronicles/dp/1338722778/ref=sr_1_1?dchild=1&keywords=gregor+and+the+prophecy+of+bane&qid=1626120671&s=books&sr=1-1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`gallery_id`);

--
-- Indexes for table `home`
--
ALTER TABLE `home`
  ADD PRIMARY KEY (`home_id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`msg_id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`news_id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shop`
--
ALTER TABLE `shop`
  ADD PRIMARY KEY (`shop_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `gallery_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `home`
--
ALTER TABLE `home`
  MODIFY `home_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `msg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `news_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `shop`
--
ALTER TABLE `shop`
  MODIFY `shop_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
