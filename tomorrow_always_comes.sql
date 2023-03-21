-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 30, 2022 at 05:19 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tomorrow_always_comes`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_client`
--

CREATE TABLE `about_client` (
  `id` int(11) NOT NULL,
  `client_image` varchar(1000) CHARACTER SET latin1 DEFAULT NULL,
  `client_title` varchar(1000) CHARACTER SET latin1 DEFAULT NULL,
  `client_info` varchar(1000) CHARACTER SET latin1 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `about_client`
--

INSERT INTO `about_client` (`id`, `client_image`, `client_title`, `client_info`) VALUES
(1, '6386c79fab3936.79073575.png', 'POLYWICK STUDIO', '<p> Polywick Graphics, PH, Corp. is a 3D Arts & games outsourcing studio composed of talented artists.\r\n            Most of our collective professional experiences came from the video games industry.</p>\r\n            <p> We are very much interested in pursuing other art fields like concept art for film, sculpting of toys, illustration for book covers, etc.\r\n            Having worked in the outsourcing industry for more than 6 years, our collective experiences include working for \r\n            clients like EA, Naughty Dog, Ubisoft, Warner Bros and Disney.</p>\r\n            <p> On top of that, we have world class artists whose works have already been published in annual art books and magazines.\r\n            We are actively looking for opportunities to further refine our craft.\r\n            The company works on different types of projects that may be but not limited to Software Applications, Websites, and Games.</p>');

-- --------------------------------------------------------

--
-- Table structure for table `about_developers`
--

CREATE TABLE `about_developers` (
  `id` int(11) NOT NULL,
  `dev_image` varchar(1000) CHARACTER SET latin1 DEFAULT NULL,
  `dev_name` varchar(1000) CHARACTER SET latin1 DEFAULT NULL,
  `dev_title` varchar(1000) CHARACTER SET latin1 DEFAULT NULL,
  `dev_email` varchar(1000) CHARACTER SET latin1 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `about_developers`
--

INSERT INTO `about_developers` (`id`, `dev_image`, `dev_name`, `dev_title`, `dev_email`) VALUES
(1, '6386d297684ba0.03275543.png', 'CRISTOBAL, Hynna <br>Marie', 'Lead Programmer', 'cristobalhynna@gmail.com'),
(2, '6386d2c0d60f25.98425559.png', 'TANDOC, Jene <br>Emmanuel', 'Web Developer and Designer', 'jm.tandoc3124@gmail.com'),
(3, '6386d58f09feb0.82599958.png', 'DE GUZMAN, Ryan <br>Carlos', '3D Animator and Design', 'ryancarlos1515@gmail.com'),
(4, '6386d5aa96f3e3.73418880.png', 'SALAZAR, Shaila <br>Marielle', '2D Artist and Design', 'salazarshaila12@gmail.com'),
(5, '6386d5c03ea6b9.67485172.png', 'DE GUZMAN, Pauline <br>Andrea', 'Graphic Designer and Programmer', 'pauandreadg@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `about_game`
--

CREATE TABLE `about_game` (
  `id` int(11) NOT NULL,
  `game_image` varchar(1000) CHARACTER SET latin1 DEFAULT NULL,
  `game_title` varchar(1000) CHARACTER SET latin1 DEFAULT NULL,
  `game_info` varchar(1000) CHARACTER SET latin1 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `about_game`
--

INSERT INTO `about_game` (`id`, `game_image`, `game_title`, `game_info`) VALUES
(1, '6386c5f78c2e91.38811595.png', 'TOMORROW ALWAYS COMES', 'Stephen Garcia is fresh out of college and is facing a competitive industry where he feels inferior to others who are younger and more proficient in his eyes. He used to excel as a programmer, while also being well-versed in other branches of Information Technology. A lot of his peers would consult him for help. Despite all that, the pressure made Stephen perceive that he may not be good enough despite being able to have a job in his field and this also deteriorated his mental health. The game will revolve around Stephen and the player will be performing objectives as him for the rest of the game.');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `admin_username` varchar(100) DEFAULT NULL,
  `admin_password` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_username`, `admin_password`) VALUES
(1, 'admin', '$2y$10$ddsm9XkNm9zkm1ytyrKJbuEtpwkR8hl5AdG7NkfQJ7wwjzqn7PRU2');

-- --------------------------------------------------------

--
-- Table structure for table `announcements`
--

CREATE TABLE `announcements` (
  `announcement_id` int(11) NOT NULL,
  `announcement_title` varchar(256) NOT NULL,
  `announcement_content` varchar(1000) NOT NULL,
  `announcement_date` varchar(100) NOT NULL,
  `announcement_time` varchar(100) NOT NULL,
  `announcement_author` varchar(100) NOT NULL,
  `image` varchar(1000) NOT NULL,
  `announcement_rating` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `announcements`
--

INSERT INTO `announcements` (`announcement_id`, `announcement_title`, `announcement_content`, `announcement_date`, `announcement_time`, `announcement_author`, `image`, `announcement_rating`) VALUES
(27, 'sdas', 'sdas', 'November 15, 2022', '04:14 PM', 'asdas', '63734a7397eac8.49204836.png', '5'),
(28, 'asdasdas', 'sadadfgdahd', 'November 15, 2022', '04:15 PM', 'asdasdas', '63734a9b095838.14226674.jpg', '3');

-- --------------------------------------------------------

--
-- Table structure for table `characters`
--

CREATE TABLE `characters` (
  `id` int(11) NOT NULL,
  `chara1` varchar(1000) CHARACTER SET latin1 DEFAULT NULL,
  `chara2` varchar(1000) CHARACTER SET latin1 DEFAULT NULL,
  `chara3` varchar(1000) CHARACTER SET latin1 DEFAULT NULL,
  `chara4` varchar(1000) CHARACTER SET latin1 DEFAULT NULL,
  `chara5` varchar(1000) CHARACTER SET latin1 DEFAULT NULL,
  `chara6` varchar(1000) CHARACTER SET latin1 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `characters`
--

INSERT INTO `characters` (`id`, `chara1`, `chara2`, `chara3`, `chara4`, `chara5`, `chara6`) VALUES
(1, '6385e244ddceb4.61124831.png', '6385e25688ff00.12320090.png', '6385e25bf093c3.46320600.png', '6385e2616a78b3.01503094.png', '6385e265abf2d3.05128116.png', '6385e269c682d3.35202438.png');

-- --------------------------------------------------------

--
-- Table structure for table `collectibles`
--

CREATE TABLE `collectibles` (
  `id` int(11) NOT NULL,
  `img1` varchar(1000) CHARACTER SET latin1 DEFAULT NULL,
  `img2` varchar(1000) CHARACTER SET latin1 DEFAULT NULL,
  `img3` varchar(1000) CHARACTER SET latin1 DEFAULT NULL,
  `img4` varchar(1000) CHARACTER SET latin1 DEFAULT NULL,
  `img5` varchar(1000) CHARACTER SET latin1 DEFAULT NULL,
  `img6` varchar(1000) CHARACTER SET latin1 DEFAULT NULL,
  `img7` varchar(1000) CHARACTER SET latin1 DEFAULT NULL,
  `img8` varchar(1000) CHARACTER SET latin1 DEFAULT NULL,
  `img9` varchar(1000) CHARACTER SET latin1 DEFAULT NULL,
  `img10` varchar(1000) CHARACTER SET latin1 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `collectibles`
--

INSERT INTO `collectibles` (`id`, `img1`, `img2`, `img3`, `img4`, `img5`, `img6`, `img7`, `img8`, `img9`, `img10`) VALUES
(1, '6385c331707709.49968312.png', '6385c34e4808c3.44234293.png', '6385c356eb90b9.69015995.png', '6385c35f7c9699.44616577.png', '6385c367ae88d3.55879247.png', '6385c3767bd7f9.77750377.png', '6385c380e574a5.03605483.png', '6385c388bc46c2.41403235.png', '6385c390bfd149.03619224.png', '6385c3976106e8.28147919.png'),
(2, 'Graduation Picture', 'Birthday Card', 'Ballpen', 'Mixtape', 'Flash Drive', 'Ticket', 'Keychain', 'Notebook', 'Poster', 'Sticker');

-- --------------------------------------------------------

--
-- Table structure for table `discussion`
--

CREATE TABLE `discussion` (
  `id` int(11) NOT NULL,
  `parent_comment` varchar(500) CHARACTER SET latin1 NOT NULL,
  `student` varchar(1000) CHARACTER SET latin1 NOT NULL,
  `post` varchar(1000) CHARACTER SET latin1 NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `discussion`
--

INSERT INTO `discussion` (`id`, `parent_comment`, `student`, `post`, `date`) VALUES
(11, '0', 'Rinboi', 'Let us talk about the design and content of this website', '2022-11-23 20:40:12'),
(12, '11', 'Jene', 'It does look quite impressive', '2022-11-23 20:40:32'),
(13, '', 'lorem guy', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Bibendum at varius vel pharetra vel turpis. Convallis tellus id interdum velit laoreet id donec ultrices. Pellentesque habitant morbi tristique senectus et netus et malesuada. Vitae et leo duis ut diam quam nulla porttitor. Neque volutpat ac tincidunt vitae semper quis lectus nulla at. Est sit amet facilisis magna. Risus commodo viverra maecenas accumsan lacus vel facilisis volutpat est. Eu mi bibendum neque egestas congue quisque. Commodo sed egestas egestas fringilla phasellus faucibus scelerisque. Non diam phasellus vestibulum lorem sed risus ultricies tristique nulla. Sit amet volutpat consequat mauris nunc congue nisi vitae. Convallis a cras semper auctor neque vitae tempus quam pellentesque. Cras fermentum odio eu feugiat pretium nibh ipsum consequat. Consequat semper viverra nam libero justo laoreet sit amet cursus.\n\nUt tortor pretium viverra suspendisse po', '2022-11-23 20:41:07'),
(14, '13', 'lorem girl', '<p>Lorem ipsum dolor sit amet. Sed reprehenderit quaerat et earum magni sit numquam velit eos quia quisquam. Vel deleniti animi qui sint obcaecati sit aspernatur reiciendis qui quia distinctio est aliquid facere. Qui quasi placeat est earum amet est quos vero. </p><p>Sed illo corporis a eaque quis in nihil omnis ut doloremque numquam ea voluptatem culpa. Ut tenetur eius ut ratione voluptatem hic provident neque et dolor fugit et nisi cupiditate qui quia internos qui ratione voluptate! Ut architecto doloremque ad atque nihil ab vitae quia et eveniet recusandae est dolores rerum quo dolores odio non dolor voluptatem. </p><p>33 odit aspernatur ex esse quas qui aspernatur officiis et fugit voluptatem sed eveniet illum. Ea Quis explicabo quo omnis nulla vel facere labore cum unde dolorem est consectetur tenetur ut internos dolor hic fuga velit. Non possimus tempore aut quos aliquid et facilis quia ut iusto ipsam sed laudantium expedita vel odit laudantium non sequi explicabo! Est corrupti i', '2022-11-23 20:41:41'),
(15, '13', 'lorem random', '<p>Lorem ipsum dolor sit amet. Et velit vitae quo nostrum dolore et tenetur pariatur est quod velit eum quae optio est atque molestiae? Qui nesciunt sequi et magnam aliquam ad magni recusandae! </p><p>Et sequi ipsa id quibusdam omnis sit voluptatem internos vel totam minus. Sed eligendi doloremque quo repellendus quia ad optio quia? </p>\n', '2022-11-23 20:42:17'),
(20, '', 'Pauline', 'This game looks amazing!', '2022-11-29 10:58:43');

-- --------------------------------------------------------

--
-- Table structure for table `gallery_video`
--

CREATE TABLE `gallery_video` (
  `id` int(11) NOT NULL,
  `video` varchar(1000) CHARACTER SET latin1 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gallery_video`
--

INSERT INTO `gallery_video` (`id`, `video`) VALUES
(1, '6385cf22ec7315.20034884.mp4');

-- --------------------------------------------------------

--
-- Table structure for table `levels`
--

CREATE TABLE `levels` (
  `id` int(11) NOT NULL,
  `level1` varchar(1000) CHARACTER SET latin1 DEFAULT NULL,
  `level2` varchar(1000) CHARACTER SET latin1 DEFAULT NULL,
  `level3` varchar(1000) CHARACTER SET latin1 DEFAULT NULL,
  `level4` varchar(1000) CHARACTER SET latin1 DEFAULT NULL,
  `level5` varchar(1000) CHARACTER SET latin1 DEFAULT NULL,
  `level6` varchar(1000) CHARACTER SET latin1 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `levels`
--

INSERT INTO `levels` (`id`, `level1`, `level2`, `level3`, `level4`, `level5`, `level6`) VALUES
(1, '6385d98bcfb144.17696010.png', '6385d9baab1db3.05878844.png', '6385d9c1b6f9f9.65685760.png', '6385d9c7818c56.20027017.png', '6385d9cea29fa9.18261748.png', '6385d9d439cf12.15144152.png');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `news_id` int(11) NOT NULL,
  `news_title` varchar(256) NOT NULL,
  `news_content` varchar(1000) NOT NULL,
  `news_date` varchar(100) NOT NULL,
  `news_time` varchar(100) NOT NULL,
  `news_author` varchar(100) NOT NULL,
  `image` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`news_id`, `news_title`, `news_content`, `news_date`, `news_time`, `news_author`, `image`) VALUES
(19, 'Test Update', 'This is a sample text for the Updates Board.', 'July 05, 2022', '03:45 PM', 'Jene Emmanuel Tandoc', '62c3ec016e2119.62235667.jpg'),
(20, 'Test Update 2', 'Lorem Ipsum, dizgi ve bask? endüstrisinde kullan?lan m?g?r metinlerdir. Lorem Ipsum, ad? bilinmeyen bir matbaac?n?n bir hurufat numune kitab? olu?turmak üzere bir yaz? galerisini alarak kar??t?rd??? 1500\'lerden beri endüstri standard? sahte metinler olarak kullan?lm??t?r. Be?yüz y?l boyunca varl???n? sürdürmekle kalmam??, ayn? zamanda pek de?i?meden elektronik dizgiye de s?çram??t?r. 1960\'larda Lorem Ipsum pasajlar? da içeren Letraset yapraklar?n?n yay?nlanmas? ile ve yak?n zamanda Aldus PageMaker gibi Lorem Ipsum sürümleri içeren masaüstü yay?nc?l?k yaz?l?mlar? ile popüler olmu?tur.', 'June 23, 2022', '06:42 PM', 'Jene Emmanuel Tandoc', '62b443992a00e2.88191401.png'),
(21, 'Test Update 3', 'Lorem Ipsum, dizgi ve bask? endüstrisinde kullan?lan m?g?r metinlerdir. Lorem Ipsum, ad? bilinmeyen bir matbaac?n?n bir hurufat numune kitab? olu?turmak üzere bir yaz? galerisini alarak kar??t?rd??? 1500\'lerden beri endüstri standard? sahte metinler olarak kullan?lm??t?r. Be?yüz y?l boyunca varl???n? sürdürmekle kalmam??, ayn? zamanda pek de?i?meden elektronik dizgiye de s?çram??t?r. 1960\'larda Lorem Ipsum pasajlar? da içeren Letraset yapraklar?n?n yay?nlanmas? ile ve yak?n zamanda Aldus PageMaker gibi Lorem Ipsum sürümleri içeren masaüstü yay?nc?l?k yaz?l?mlar? ile popüler olmu?tur.', 'June 23, 2022', '06:43 PM', 'Jene Emmanuel Tandoc', '62b443c664bce0.32438186.png'),
(22, 'Test Update 4', 'Lorem Ipsum, dizgi ve bask? endüstrisinde kullan?lan m?g?r metinlerdir. Lorem Ipsum, ad? bilinmeyen bir matbaac?n?n bir hurufat numune kitab? olu?turmak üzere bir yaz? galerisini alarak kar??t?rd??? 1500\'lerden beri endüstri standard? sahte metinler olarak kullan?lm??t?r. Be?yüz y?l boyunca varl???n? sürdürmekle kalmam??, ayn? zamanda pek de?i?meden elektronik dizgiye de s?çram??t?r. 1960\'larda Lorem Ipsum pasajlar? da içeren Letraset yapraklar?n?n yay?nlanmas? ile ve yak?n zamanda Aldus PageMaker gibi Lorem Ipsum sürümleri içeren masaüstü yay?nc?l?k yaz?l?mlar? ile popüler olmu?tur.', 'June 23, 2022', '06:43 PM', 'Jene Emmanuel Tandoc', '62b443e331b0d9.37854454.png'),
(23, 'Test Update 5', 'Lorem Ipsum, dizgi ve bask? endüstrisinde kullan?lan m?g?r metinlerdir. Lorem Ipsum, ad? bilinmeyen bir matbaac?n?n bir hurufat numune kitab? olu?turmak üzere bir yaz? galerisini alarak kar??t?rd??? 1500\'lerden beri endüstri standard? sahte metinler olarak kullan?lm??t?r. Be?yüz y?l boyunca varl???n? sürdürmekle kalmam??, ayn? zamanda pek de?i?meden elektronik dizgiye de s?çram??t?r. 1960\'larda Lorem Ipsum pasajlar? da içeren Letraset yapraklar?n?n yay?nlanmas? ile ve yak?n zamanda Aldus PageMaker gibi Lorem Ipsum sürümleri içeren masaüstü yay?nc?l?k yaz?l?mlar? ile popüler olmu?tur.', 'June 23, 2022', '06:44 PM', 'Jene Emmanuel Tandoc', '62b443f83f81c2.27867255.jpg'),
(27, 'asdas', 'asdasdasdas', 'November 21, 2022', '10:27 PM', 'asdas', '637b8adf362543.70428952.png');

-- --------------------------------------------------------

--
-- Table structure for table `school`
--

CREATE TABLE `school` (
  `school_id` int(11) NOT NULL,
  `school_name` varchar(200) NOT NULL,
  `school_address` varchar(200) DEFAULT NULL,
  `contact_number` varchar(200) DEFAULT NULL,
  `game_title` varchar(200) DEFAULT NULL,
  `game_email` varchar(100) DEFAULT NULL,
  `aboutus_area` varchar(1000) NOT NULL,
  `school_logo` varchar(256) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `school`
--

INSERT INTO `school` (`school_id`, `school_name`, `school_address`, `contact_number`, `game_title`, `game_email`, `aboutus_area`, `school_logo`) VALUES
(1, 'FEU Institute of Technology', 'LIWAYWAY STREET, STA. ANA TAGUIG CITY 1632', ' (02) 8281 8888', 'Tomorrow Always Comes', 'ingeniousgeniuses.2021@gmail.com', 'Ingenious Geniuses are aspiring game developers from FEU Institute of Technology. The development team consists of a Project Manager, both Game and Web Programmers, 2D and 3D Artists and Animators, and a Narrative Designer.', '6385c0827c3a55.36251745.png');

-- --------------------------------------------------------

--
-- Table structure for table `storyboards`
--

CREATE TABLE `storyboards` (
  `id` int(11) NOT NULL,
  `board1` varchar(1000) CHARACTER SET latin1 DEFAULT NULL,
  `board2` varchar(1000) CHARACTER SET latin1 DEFAULT NULL,
  `board3` varchar(1000) CHARACTER SET latin1 DEFAULT NULL,
  `board4` varchar(1000) CHARACTER SET latin1 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `storyboards`
--

INSERT INTO `storyboards` (`id`, `board1`, `board2`, `board3`, `board4`) VALUES
(1, '6386bf14378901.34499027.png', '6386bf745ef9b8.69388669.png', '6386bf82088581.27369048.png', 'a'),
(2, 'Introduction Cutscene', 'Opening Cutscene', 'Special Ending Cutscene', 'a');

-- --------------------------------------------------------

--
-- Table structure for table `student_registration`
--

CREATE TABLE `student_registration` (
  `student_id` varchar(100) NOT NULL,
  `student_grade_level` varchar(100) NOT NULL,
  `student_firstname` varchar(100) NOT NULL,
  `student_middlename` varchar(100) DEFAULT NULL,
  `student_lastname` varchar(100) NOT NULL,
  `student_gender` varchar(100) NOT NULL,
  `student_email` varchar(100) NOT NULL,
  `student_number` varchar(100) NOT NULL,
  `registration_date` varchar(100) NOT NULL,
  `registration_time` varchar(100) NOT NULL,
  `registration_status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_registration`
--

INSERT INTO `student_registration` (`student_id`, `student_grade_level`, `student_firstname`, `student_middlename`, `student_lastname`, `student_gender`, `student_email`, `student_number`, `registration_date`, `registration_time`, `registration_status`) VALUES
('95a1a41f6e9de8fa2bfa18cfdb700914', 'First Year', 'Joyceline', 'Pascual', 'Tandoc', 'Female', 'jm.tandoc3124@gmail.com', '2020111231', 'November 02, 2022', '09:45:40 PM', 'Registered'),
('c195bdb276b3ae9ee14a0a56717dbebd', 'Fourth Year', 'Jene Emmanuel', 'Pascual', 'Tandoc', 'Male', 'jm.tandoc3124@gmail.com', '201911026', 'November 02, 2022', '10:30:45 AM', 'Registered');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_client`
--
ALTER TABLE `about_client`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `about_developers`
--
ALTER TABLE `about_developers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `about_game`
--
ALTER TABLE `about_game`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `announcements`
--
ALTER TABLE `announcements`
  ADD PRIMARY KEY (`announcement_id`);

--
-- Indexes for table `characters`
--
ALTER TABLE `characters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `collectibles`
--
ALTER TABLE `collectibles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `discussion`
--
ALTER TABLE `discussion`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery_video`
--
ALTER TABLE `gallery_video`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `levels`
--
ALTER TABLE `levels`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`news_id`);

--
-- Indexes for table `school`
--
ALTER TABLE `school`
  ADD PRIMARY KEY (`school_id`);

--
-- Indexes for table `storyboards`
--
ALTER TABLE `storyboards`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_registration`
--
ALTER TABLE `student_registration`
  ADD PRIMARY KEY (`student_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about_client`
--
ALTER TABLE `about_client`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `about_developers`
--
ALTER TABLE `about_developers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `about_game`
--
ALTER TABLE `about_game`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `announcements`
--
ALTER TABLE `announcements`
  MODIFY `announcement_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `characters`
--
ALTER TABLE `characters`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `collectibles`
--
ALTER TABLE `collectibles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `discussion`
--
ALTER TABLE `discussion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `gallery_video`
--
ALTER TABLE `gallery_video`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `levels`
--
ALTER TABLE `levels`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `news_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `school`
--
ALTER TABLE `school`
  MODIFY `school_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `storyboards`
--
ALTER TABLE `storyboards`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
