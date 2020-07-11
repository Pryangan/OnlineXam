-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 26, 2018 at 02:22 PM
-- Server version: 5.6.25
-- PHP Version: 5.6.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `onlinexam`
--

-- --------------------------------------------------------

--
-- Table structure for table `mst_question`
--

CREATE TABLE IF NOT EXISTS `mst_question` (
  `que_id` int(5) NOT NULL,
  `test_id` int(5) DEFAULT NULL,
  `que_desc` varchar(150) DEFAULT NULL,
  `ans1` varchar(75) DEFAULT NULL,
  `ans2` varchar(75) DEFAULT NULL,
  `ans3` varchar(75) DEFAULT NULL,
  `ans4` varchar(75) DEFAULT NULL,
  `true_ans` int(1) DEFAULT NULL
) ENGINE=MyISAM AUTO_INCREMENT=149 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mst_question`
--

INSERT INTO `mst_question` (`que_id`, `test_id`, `que_desc`, `ans1`, `ans2`, `ans3`, `ans4`, `true_ans`) VALUES
(16, 8, 'What  Default Data Type ?', 'String', 'Variant', 'Integer', 'Boolear', 2),
(17, 8, 'What is Default Form Border Style ?', 'Fixed Single', 'None', 'Sizeable', 'Fixed Diaglog', 3),
(18, 8, 'Which is not type of Control ?', 'text', 'lable', 'checkbox', 'option button', 1),
(19, 9, 'Which of the follwing contexts are available in the add watch window?', 'Project', 'Module', 'Procedure', 'All', 4),
(20, 9, 'Which window will allow you to halt the execution of your code when a variable changes?', 'The call stack window', 'The immedite window', 'The locals window', 'The watch window', 4),
(22, 9, 'How can you print the object name associated with the last VB  error to the Immediate window?', 'Debug.Print Err.Number', 'Debug.Print Err.Source', 'Debug.Print Err.Description', 'Debug.Print Err.LastDLLError', 2),
(23, 9, 'How can you print the object name associated with the last VB  error to the Immediate window?', 'Debug.Print Err.Number', 'Debug.Print Err.Source', 'Debug.Print Err.Description', 'Debug.Print Err.LastDLLError', 2),
(24, 9, 'What function does the TabStop property on a command button perform?', 'It determines whether the button can get the focus', 'If set to False it disables the Tabindex property.', 'It determines the order in which the button will receive the focus', 'It determines if the access key swquence can be used', 1),
(25, 10, 'You application creates an instance of a form. What is the first event that will be triggered in the from?', 'Load', 'GotFocus', 'Instance', 'Initialize', 4),
(26, 10, 'Which of the following is Hungarian notation for a menu?', 'Menu', 'Men', 'mnu', 'MN', 3),
(27, 10, 'You are ready to run your program to see if it works.Which key on your keyboard will start the program?', 'F2', 'F3', 'F4', 'F5', 4),
(28, 10, 'Which of the following snippets of code will unload a form named frmFo0rm from memory?', 'Unload Form', 'Unload This', 'Unload Me', 'Unload', 3),
(29, 10, 'You want the text in text box named txtMyText to read My Text.In which property will you place this string?', 'Caption', 'Text', 'String', 'None of the above', 2),
(30, 11, 'How many data types are there in c ?', '8', '7', '6', '5', 3),
(31, 11, 'Range of integer type of data ?', '-32768 to 32767', '123-133', '152 to 258', '-78954 to 32564', 1),
(32, 11, 'getchar() is used to get ?', 'integer', 'string', 'character', 'print', 3),
(33, 11, 'gets() is used to get???', 'number', 'character', 'string', 'integer', 3),
(34, 11, 'short cut key to save is _', 'f4', 'f9', 'f2', 'f1', 3),
(35, 11, 'short cut key to close the program?.?', 'f7', 'f3', 'f8', 'f9', 2),
(36, 11, 'who invented c language ?', 'Denis Ritchie', 'Pascal Blaise', 'Denis reddy', 'Bill gets', 1),
(37, 11, 'To come out of c __shortcut key is used?', 'alt+b', 'alt+k', 'alt+m', 'alt+x', 4),
(38, 11, 'strlen() return _____ types of data ?', 'integer', 'character', 'string', 'void', 1),
(40, 11, 'how many keyword are there in c?', '56', '54', '64', '32', 4),
(49, 11, 'for multiline comment ___ is used', '//', '??', '/*', '\\*', 3),
(50, 11, '"default: " statement is a part of ___', 'switch case', 'If else', 'if', 'loop', 1),
(53, 11, 'or operator in c is ________type of operator ?', 'arethametic', 'logical', 'bitwise', 'conditional', 2),
(54, 11, '___is assignment operator in c ?', '*', '++', '=', '--', 3),
(55, 11, 'Every function returns___type of value ?', 'int', 'char', 'float', 'none of these', 4),
(56, 11, 'what is the answer of 8%5', '4.5', '3', '1', '1.3', 2),
(57, 11, 'gets() is defined in ?', 'stdio.h', 'conio.h', 'string.h', 'dos.h', 1),
(58, 11, '__key is used to zoom the screen', 'f5', 'f6', 'f9', 'alt+f9', 1),
(59, 11, '____decision making control', 'for loop', 'do while', 'function', 'switch case', 4),
(60, 12, 'RAM Stands for', 'Random Access Memory', 'Random accelerated Memory', 'Random Access Machenism', 'Random Accurace Mantan', 1),
(61, 12, 'PC Stands for', 'pocket computer', 'personal computer', 'phisycal computer', 'personal card', 2),
(62, 12, 'Personal Computer are the type of computer', 'super computer', 'mini computer', 'micro computer', 'mainframe computer', 3),
(63, 12, 'floppy disk is the type of memory', 'magnatic & secondarymain memory', 'main memory', 'o primary', 'none of the above', 1),
(64, 12, 'keybord is the type of device', 'input', 'pointing', 'output', 'sound', 1),
(65, 12, 'mouse is the type of device', 'input', 'pointing', 'scanning', 'none of the above', 2),
(66, 12, 'which of the following is input device', 'speaker', 'printer', 'plotter', 'scanner', 4),
(67, 12, '________is colled the brain of computer', 'mouse', 'keyboard', 'cpu', 'memory', 3),
(68, 12, 'the development of first generation computer is', '1955-1965', '1965-1975', '1945-1954', 'none', 3),
(69, 12, 'all arithmetic and logical processing is done in', 'ALU', 'CU', 'CPU', 'none of the above', 3),
(70, 12, 'the delete the character right side of the cursor which key is used', 'inst', 'del', 'backspace', 'home', 2),
(71, 12, 'to deleter the character towards left side is', 'backspace', 'del', 'inst', 'home', 1),
(72, 12, 'in keyboard the function of which type keys change according the software', 'alphanumeric key', 'numeric key pad', 'function key', 'none of the above', 2),
(73, 12, 'to enter the number a special key slot is given on the keyboard which is', 'alphanumeric number', 'numeric key pad', 'function key', 'none of the above', 2),
(74, 12, 'on numeric key pad the keyu present are', '0 to 9 numbers', '+/*characters', 'arrow key', 'all of the above', 4),
(75, 12, 'to move the cursor beginning of the which key is used', 'end', 'home', 'pgup', 'pgdn', 2),
(76, 12, 'to move the cursor end of the which key is used', 'end', 'home', 'pgup', 'pgdn', 1),
(77, 12, 'the touchable part of computer is called as', 'hardware', 'software', 'programe', 'none', 1),
(78, 12, 'if caps lock key is on then', 'small letters are printed', 'the lowercase letter are printed', 'capital letters print', 'none of the above', 3),
(79, 12, '________are equivalent to 1 mb', '1022 kb', '1024 kb', '1024 byte', '1000 gb', 2),
(80, 13, 'the combination key for command in ms-word is', 'ctrl+f', 'ctrl+f3', 'ctrl+s', 'none', 1),
(81, 13, 'while editing document in ms-word the colour of the selected text can be changed by', 'format font', 'format text', 'format paragraph', 'none of the above', 1),
(82, 13, 'which keystroke is used to move end of document quickly', 'end', 'pgdn', 'ctrl+pgdn', 'ctrl+end', 4),
(83, 13, 'from the following option does not present in the picture option of insert menu', 'auto shpe', 'clip art', 'from file', 'object', 4),
(84, 13, 'in ms-word to appear full form abberiatin automatically we can use', 'autotext', 'auto correct', 'comments', 'drop cap', 1),
(85, 13, 'to appear the same information at the top or bottom of each page we use', 'headers & footer', 'hyperlink', 'field', 'none', 1),
(86, 13, 'which option is not present under tool menu', 'mail merge', 'auto text', 'language', 'drop cap', 4),
(87, 13, 'to convert "the computer" in to "THE COMPUTER" which option is used', 'title case', 'toggle case', 'upper case', 'all caps', 3),
(88, 13, 'which is the shortcut key to replace the text', 'ctrl+r', 'ctrl+h', 'ctrl+d', 'ctrl+e', 2),
(89, 13, 'which sortcut key is used to redo action?', 'ctrl+r', 'ctrl+y', 'ctrl+e', 'ctrl+u', 2),
(90, 13, 'to change the size of document page using', 'file properties', 'file page setup', 'tools option', 'format paragraph', 2),
(91, 13, 'to set the shading for the paragrph in ms-word chose', 'insert shading', 'format border & shading', 'view shading', 'all the above', 2),
(92, 13, 'bold,italic,underline are the part of_________toolbar', 'formating', 'standerd', 'drawing', 'central', 1),
(93, 13, 'the list in bottom of the file menu', 'display last foure file you use', 'display all opened files', 'allow to close file', 'none of the above', 1),
(94, 13, 'the date and time command', 'inaert the date & time you specify', 'insert current system date & time', 'inmsert last updated date & time', 'none of the above', 2),
(95, 13, 'if you want to copy a selection of text,which button do you click?', 'move', 'copy', 'duplicate', 'cut', 2),
(96, 13, 'which of the follwing is not option of edit menu', 'cut', 'copy', 'page setup', 'paste', 3),
(97, 13, 'alignment buttons are available on______________', 'ststus bar', 'for mating toolbar', 'standerd toolbar', 'none of these', 2),
(98, 13, 'when microsoft word gets loaded the opening screen display a document named', 'document1', 'document', 'doc1', 'no document name', 1),
(99, 13, 'the document can be zoomed maximum up to', '100%', '150%', '200%', '500%', 4),
(100, 13, 'to delete the selected sentence we can press the following press', 'del', 'backspace', 'both a&b', 'none of the above', 3),
(101, 13, 'to start a new line', 'enter', 'shift+enter', 'ctrl+enter', 'none of these', 1),
(102, 13, 'Spelling check is not possible in ___________________', 'Normal View', 'Out Line View', 'Print Lay Out View', 'None of these', 4),
(103, 13, 'Word Text can be made italic by____________________', 'Ctrl+I', 'Ctrl+B', 'Ctrl+U', 'None of the above', 1),
(104, 13, 'By Default Word Format your text as', '14 Point Times New Roman', '12 Point Times New Roman', '11 point Times New Roman', 'None of the above', 2),
(105, 14, 'Which city is known as The City of Palaces?', 'Kolkatta', 'Jerusalem', 'Mumbai', 'Udaipur', 1),
(106, 14, 'The Gateway of India is ?', 'Delhi', 'Kolkatta', 'Mumbai', 'Jammu', 3),
(107, 14, 'Which city is known as Pink City?', 'Hyderabad', 'Jaipur', 'Bangalore', 'Patna', 2),
(108, 14, 'Which is the city of Golden Temple?', 'Amritsar', 'Banaras', 'Chennai', 'Delhi', 1),
(109, 14, 'The Land of Lilies ?', 'Finland', 'Japan', 'USA', 'Canada', 4),
(110, 14, 'The symbol dove signifies ?', 'Strength', 'Dignity', 'Peace', 'Distress', 3),
(113, 14, 'How many players are there on each side in a baseball match', '7', '9', '5', '11', 2),
(114, 14, 'Which one of seven wonders of the world is in India', 'Leaning Tower', 'Eiffel Tower', 'TajMahal', 'Colosseum', 3),
(115, 14, 'Who started the ancient Olympic Games', 'the Greeks', 'the Egyptians', 'the Romans', 'the Aryans', 1),
(116, 14, 'The first Indian in Space was?', 'Vishnu Bhagvat', 'Rakesh Sharma', 'Kalpana Chawla', 'Juhi Chawla', 2),
(117, 14, 'After how many years gap is the Cricket World Cup held?', '3', '4', '5', '6', 2),
(119, 14, 'The slogan Piyo Sar Utha ke is associated with which company?', 'Pepsi', 'Mirinda', 'Thums Up', 'Coca-Cola', 4),
(120, 14, 'Which of these is a renewable source of energy?', 'sunlight', 'petrol', 'coal', 'diesel', 1),
(121, 14, 'Biogas consists mainly of ?', 'carbon monoxide', 'methane', 'chlorine', 'nitrogen', 2),
(122, 14, 'Deafness can be caused by ?', 'water pollution', 'air pollution', 'noise pollution', 'soil pollution', 3),
(123, 14, 'Which animal is the logo of WWF?', 'bear', 'giant panda', 'eagle', 'tiger', 2),
(124, 14, 'Acoustics deals with ?', 'sound', 'light', 'insects', 'air', 1),
(125, 14, 'Fatehpur Sikri was built by ?', 'Aurungzeb', 'Akbar', 'Shah Jahan', 'Jahengir', 2),
(126, 14, 'Which is the largest ocean in the world?', 'Atlantic', 'Pacific', 'Indian', 'Arctic', 2),
(127, 14, 'The sea-route to India was discovered in?', '1598', '1558', '1498', '1458', 3),
(128, 14, 'When is U.N. Day celebrated?', '24 Oct', '23 Oct', '24 Sep', '23 Nov', 1),
(129, 14, 'Which of the following countries celebrates Christmas festival in the summer season?', 'Canada', 'Britian', 'Australia', 'Zimbabwe', 3),
(131, 15, 'How do u write "Hello world" in PHP?', 'echo "Hello world";', 'document.write("Hello world");', '"Hello world";', 'printf("Hello world");', 1),
(130, 15, 'what does PHP stand for?', 'personal hypertext  processor', 'private home page', 'personal home page', 'PHP:Hypertext preprocessor', 4),
(2, 15, 'what is the correct way to end a PHP  statement?', '</php>', '.', ';', 'new line', 3),
(3, 15, 'The PHP syntax is most similar to?', 'VB script', 'Java script', 'Perl ', 'c#', 2),
(4, 15, 'how do u get information from a form that is submitted using the "get" method?', 'Request.Form;', '$_GET[ ];', 'Request.QueryString;', '$_POST[ ];', 2),
(8, 16, 'What does SQL stand for?', 'Structured Question Language', 'Strong Question Language', 'Structured Query Language', 'String Query Language', 3),
(5, 15, 'What is the correct way to create a function in PHP?', 'create myFunction()', 'function myFunction()', 'new_function myFunction()', 'load_function myFunction()', 2),
(6, 15, 'What is the correct way to add 1 to the $count variable?', 'count++;', '$count =+1', '++count', '$count++;', 4),
(7, 15, 'Which one of these variables has an illegal name?', '$my_Var', '$my-Var', '$myVar', '$my&Var', 3),
(146, 18, 'A train running at the speed of 60 km/hr crosses a pole in 9 seconds. What is the length of the train?', '120 metres', '180 metres', '324 metres', '150 metres', 4),
(147, 18, 'A train 125 m long passes a man, running at 5 km/hr in the same direction in which the train is going, in 10 seconds. The speed of the train is:', '45 km/hr', '50 km/hr', '54 km/hr', '55 km/hr', 2);

-- --------------------------------------------------------

--
-- Table structure for table `mst_result`
--

CREATE TABLE IF NOT EXISTS `mst_result` (
  `sl_no` int(5) NOT NULL,
  `login` varchar(20) DEFAULT NULL,
  `test_id` int(5) DEFAULT NULL,
  `test_name` varchar(255) DEFAULT NULL,
  `right_answer` int(5) NOT NULL,
  `wrong_answer` int(5) NOT NULL,
  `unanswered` int(5) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=47 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mst_result`
--

INSERT INTO `mst_result` (`sl_no`, `login`, `test_id`, `test_name`, `right_answer`, `wrong_answer`, `unanswered`) VALUES
(43, 'ashish', 14, 'Knowledge Question', 1, 7, 14),
(42, 'ashish', 14, 'Knowledge Question', 4, 3, 15),
(40, 'amit', 14, 'Knowledge Question', 3, 2, 17),
(34, 'raj', 14, 'Knowledge Question', 2, 1, 19),
(33, 'raj', 16, 'basic SQL', 0, 1, 0),
(32, 'raj', 18, 'Problems on Trains', 0, 2, 0),
(31, 'raj', 14, 'Knowledge Question', 1, 1, 20),
(30, 'raj', 13, 'Ms Office Question', 2, 2, 21),
(29, 'raj', 13, 'Ms Office Question', 2, 2, 21),
(28, 'raj', 13, 'Ms Office Question', 2, 1, 22),
(27, 'raj', 13, 'Ms Office Question', 0, 0, 25),
(25, 'raj', 14, 'Knowledge Question', 2, 5, 15),
(17, 'raj', 14, 'Knowledge Question', 2, 2, 18),
(18, 'raj', 14, 'Knowledge Question', 2, 2, 18),
(19, 'raj', 14, 'Knowledge Question', 2, 2, 18),
(20, 'raj', 14, 'Knowledge Question', 2, 2, 18),
(21, 'raj', 14, 'Knowledge Question', 2, 2, 18),
(22, 'raj', 15, 'php basic', 0, 3, 6),
(23, 'raj', 15, 'php basic', 0, 3, 6),
(44, 'raj', 14, 'Knowledge Question', 2, 3, 17),
(45, 'Rishi', 15, 'php basic', 1, 4, 3),
(46, 'raju', 14, 'Knowledge Question', 5, 6, 11);

-- --------------------------------------------------------

--
-- Table structure for table `mst_subject`
--

CREATE TABLE IF NOT EXISTS `mst_subject` (
  `sub_id` int(5) NOT NULL,
  `sub_name` varchar(25) DEFAULT NULL
) ENGINE=MyISAM AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mst_subject`
--

INSERT INTO `mst_subject` (`sub_id`, `sub_name`) VALUES
(24, 'C2'),
(25, 'java1'),
(9, 'General Knowledge'),
(10, 'php2'),
(11, 'SQL'),
(12, 'java'),
(14, 'Aptitude'),
(15, 'Logical Resoning');

-- --------------------------------------------------------

--
-- Table structure for table `mst_test`
--

CREATE TABLE IF NOT EXISTS `mst_test` (
  `test_id` int(5) NOT NULL,
  `sub_id` int(5) DEFAULT NULL,
  `test_name` varchar(30) DEFAULT NULL,
  `total_que` varchar(15) DEFAULT NULL
) ENGINE=MyISAM AUTO_INCREMENT=33 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mst_test`
--

INSERT INTO `mst_test` (`test_id`, `sub_id`, `test_name`, `total_que`) VALUES
(30, 12, 'advance java', '10'),
(29, 24, 'c# test 2', '4'),
(28, 12, 'database', '10'),
(11, 7, 'Objactive Test', '20'),
(12, 5, 'General Question', '20'),
(13, 8, 'Ms Office Question', '25'),
(14, 9, 'Knowledge Question', '22'),
(15, 10, 'php basic', '20'),
(16, 11, 'basic SQL', '10'),
(17, 12, 'basic java', '10'),
(18, 14, 'Problems on Trains', '10'),
(31, 14, 'advance aptitude', '20'),
(32, 14, 'aptitude 1', '10');

-- --------------------------------------------------------

--
-- Table structure for table `mst_user`
--

CREATE TABLE IF NOT EXISTS `mst_user` (
  `user_id` int(5) NOT NULL,
  `login` varchar(20) DEFAULT NULL,
  `pass` varchar(20) DEFAULT NULL,
  `username` varchar(30) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL,
  `city` varchar(15) DEFAULT NULL,
  `phone` int(10) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `type` enum('user','admin','editor','') NOT NULL,
  `state` enum('1','0') NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=60 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mst_user`
--

INSERT INTO `mst_user` (`user_id`, `login`, `pass`, `username`, `address`, `city`, `phone`, `email`, `type`, `state`) VALUES
(1, 'raj', 'raj', 'Rajen', 'limbdi', 'limbdi', 9999, 'raj@yahoo.com', 'user', '0'),
(12, 'ashish', 'shah', 'ashish', 'laskdjf', 'S''nagar', 228585, 'ashish@yahoo.com', 'user', '1'),
(14, 'Dhaval123', 'a', 'a', 'a', 'a', 0, 'dhaval@yahoo.com', 'user', '1'),
(15, 'amit', 'amit', 'amit', 'xyz', 'snagar', 2147483647, 'amitrojasara@gmail.com', 'admin', '1'),
(16, 'sachin', 'welcome', 'sachin', 'kjjskjsdjsdjsdjakskjdskdjskjd', 'mumbai', 2147483647, 'sachin@gmail.com', 'user', '1'),
(17, 'pryangan', 'pryangan', 'pryangan', 'RZ 2571/28', 'New Delhi', 2147483647, 'pryangan.chowdhury@gmail.com', 'admin', '1'),
(18, 'arpit', '123456', 'Arpit', 'Chandni Chawk', 'New Delhi', 2147483647, 'arpitg27@live.com', 'editor', '1'),
(19, 'buban', 'buban', 'Buban', 'RZ:2571/28 tughlakabad extn', 'new delhi', 957494, 'buban.malakar@gmail.com', 'user', '1'),
(29, 'anurag', 'anurag', 'Anurag', 'jgckbndcv', 'delhi', 878765858, 'anurag@gmail.com', 'admin', '1'),
(21, 'pijush', 'pijush', 'pijush', 'fbrgbgbr', 'delhi', 7348479, 'pijush@gmail.com', 'user', '1'),
(31, 'vikash', '123456vV', 'vikash', 'hhbhbh', 'delhi', 2147483647, 'vikash@gmail.com', 'user', '1'),
(23, 'honey', 'honey', 'Honey', 'hbdkhdbsjhb', 'Mumbai', 987493, 'honey@gmail.com', 'admin', '1'),
(24, 'pran', 'pran', 'pran', 'hjdhbdjdb', 'delhi', 988873728, 'pran@gmail.com', 'editor', '1'),
(25, 'raju', 'raju', 'raju', 'gdvjhbdevh', 'delhi', 876826389, 'raju@gmail.com', 'user', '1'),
(26, 'raja', 'raja', 'raja', 'hgvjvdjv', 'new delhi', 2147483647, 'raja@gmail.com', 'editor', '1'),
(30, 'rishav', '123456wW', 'Rishav', 'hjbkbdjfsa', 'Delhi', 2147483647, 'rishav@gmail.com', 'user', '1'),
(33, 'ronie', '123456rR', 'ronie', 'gdchdjdf', 'delhi', 64847, 'ronie@gmail.com', 'admin', '1'),
(34, 'ronie1', '123456rR', 'ronie', 'hdjdhdj', 'delhi', 678909098, 'ronie1@gmail.com', 'editor', '1'),
(54, 'vivek', '12345vV', 'Vivek', 'hjfgfhcn', 'Delhi', 74943638, 'vivek@gmail.com', 'admin', '1'),
(48, 'ratnesh', '12345Rr', 'kjghewfejhvf', 'jhewgfvhjwfv', 'jmqefvjwefvj', 0, 'wjefw@gmail.com', 'admin', '1'),
(55, 'vijay', '123456aA', 'vijay', 'dhcgdchfv', 'Delhi', 986347345, 'vijay@gmail.com', 'admin', '1'),
(56, 'Deepak', '12345dD', 'deepak', 'jbhdecjbechehc', 'Delhi', 2147483647, 'deepak@gmail.com', 'user', '1'),
(57, 'vishal', '12345Vv', 'Vishal', 'ghdhxv cgdsv', 'Delhi', 648363837, 'vishal@gmail.com', 'user', '1'),
(58, 'ramkanai', 'Ram1234', 'Ramkanai', 'jdhvaj', 'delhi', 45678, 'ram@gmail.com', 'user', '1'),
(59, 'Rishi', 'Rishi8860', 'Rishi jha', 'mujhe na malum', 'Delhi', 2147483647, 'rishi@gmail.com', 'user', '1');

-- --------------------------------------------------------

--
-- Table structure for table `mst_useranswer`
--

CREATE TABLE IF NOT EXISTS `mst_useranswer` (
  `user_id` int(20) NOT NULL,
  `login` varchar(80) DEFAULT NULL,
  `test_id` int(11) DEFAULT NULL,
  `test_name` varchar(255) NOT NULL,
  `que_des` varchar(200) DEFAULT NULL,
  `ans1` varchar(50) DEFAULT NULL,
  `ans2` varchar(50) DEFAULT NULL,
  `ans3` varchar(50) DEFAULT NULL,
  `ans4` varchar(50) DEFAULT NULL,
  `true_ans` int(11) DEFAULT NULL,
  `your_ans` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mst_question`
--
ALTER TABLE `mst_question`
  ADD PRIMARY KEY (`que_id`);

--
-- Indexes for table `mst_result`
--
ALTER TABLE `mst_result`
  ADD PRIMARY KEY (`sl_no`);

--
-- Indexes for table `mst_subject`
--
ALTER TABLE `mst_subject`
  ADD PRIMARY KEY (`sub_id`);

--
-- Indexes for table `mst_test`
--
ALTER TABLE `mst_test`
  ADD PRIMARY KEY (`test_id`),
  ADD KEY `sub_id` (`sub_id`);

--
-- Indexes for table `mst_user`
--
ALTER TABLE `mst_user`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `mst_useranswer`
--
ALTER TABLE `mst_useranswer`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mst_question`
--
ALTER TABLE `mst_question`
  MODIFY `que_id` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=149;
--
-- AUTO_INCREMENT for table `mst_result`
--
ALTER TABLE `mst_result`
  MODIFY `sl_no` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=47;
--
-- AUTO_INCREMENT for table `mst_subject`
--
ALTER TABLE `mst_subject`
  MODIFY `sub_id` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `mst_test`
--
ALTER TABLE `mst_test`
  MODIFY `test_id` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT for table `mst_user`
--
ALTER TABLE `mst_user`
  MODIFY `user_id` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=60;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
