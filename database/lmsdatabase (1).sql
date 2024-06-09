

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";




CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(250) NOT NULL,
  `mobile` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;



INSERT INTO `admins` (`id`, `name`, `email`, `password`, `mobile`) VALUES
(1, 'admin', 'admin@gmail.com', 'admin@1234', 1148458757);


CREATE TABLE `authors` (
  `author_id` int(11) NOT NULL,
  `author_name` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


INSERT INTO `authors` (`author_id`, `author_name`) VALUES
(102, 'M D Guptaa'),
(103, 'Chetan Bhagat'),
(104, 'Munshi Prem Chand');



CREATE TABLE `books` (
  `book_name` varchar(250) NOT NULL,
  `book_isbn` int(11) NOT NULL,
  `author_name` varchar(250) NOT NULL,
  `author_id` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `no_of_copies` int(11) NOT NULL,
  `book_price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


INSERT INTO `books` (`book_name`, `book_isbn`, `author_name`, `author_id`, `cat_id`, `no_of_copies`, `book_price`) VALUES
('Devil inside', 1111, 'Dr Fredy', 101, 1, 5, 270),
('Data structure', 1112, 'Prof M', 102, 2, 5, 300),
('GIN', 1113, 'M Mathew', 103, 3, 90, 200);



CREATE TABLE `category` (
  `cat_id` int(11) NOT NULL,
  `cat_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


INSERT INTO `category` (`cat_id`, `cat_name`) VALUES
(1, 'Computer Science Engineering '),
(2, 'Novel'),
(4, 'Motivational'),
(5, 'Story');



CREATE TABLE `issued_books` (
  `s_no` int(11) NOT NULL,
  `book_no` int(11) NOT NULL,
  `book_name` varchar(200) NOT NULL,
  `book_author` varchar(200) NOT NULL,
  `student_id` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `issue_date` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;



INSERT INTO `issued_books` (`s_no`, `book_no`, `book_name`, `book_author`, `student_id`, `status`, `issue_date`) VALUES
(1, 6541, 'Data structure', 'D S Gupta', 4, 1, '0000-00-00 00:00:00'),
(18, 7845, 'half Girlfriend', 'Chetan Bhagat', 2, 1, '2020-04-22');



CREATE TABLE `users` (
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `DOB` date DEFAULT NULL,
  `mobile` int(10) NOT NULL,
  `id` int(11) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


INSERT INTO `users` (`name`, `email`, `DOB`, `mobile`, `id`, `password`) VALUES
('reyna', 'reyna@gmail.com', '1990-05-15', 3545464, 4, '2147'),
('rubi', 'aurongojeblishad@gmail.com', '2024-06-25', 0, 13, 'dfdgfbcbfb'),
('gfdhgfdf', 'dslsjfbh@gmail.com', '2024-06-26', 8923245, 4455, 'dsshfsgfs'),
('hetmer', 'het@gmail.com', '2013-06-14', 4354646, 4456, 'fsfdgdfg'),
('ffhgj', 'reyna44@gmail.com', '2024-06-04', 3978367, 4457, 'vgfhgjg');


ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `authors`
  ADD PRIMARY KEY (`author_id`);


ALTER TABLE `books`
  ADD PRIMARY KEY (`book_isbn`);


ALTER TABLE `category`
  ADD PRIMARY KEY (`cat_id`);


ALTER TABLE `issued_books`
  ADD PRIMARY KEY (`s_no`);


ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;


ALTER TABLE `authors`
  MODIFY `author_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=107;


ALTER TABLE `category`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;


ALTER TABLE `issued_books`
  MODIFY `s_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;


ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4458;
COMMIT;

