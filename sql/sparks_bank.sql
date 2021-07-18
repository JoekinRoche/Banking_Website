CREATE TABLE `transaction` (
  `sno` int(3) NOT NULL,
  `sender` text NOT NULL,
  `receiver` text NOT NULL,
  `balance` int(8) NOT NULL,
  `datetime` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



CREATE TABLE `users` (
  `id` int(3) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(30) NOT NULL,
  `balance` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



INSERT INTO `users` (`id`, `name`, `email`, `balance`) VALUES
(1, 'Praveen', 'Praveen@gmail.com', 50000),
(2, 'Rijal', 'Rijal@gmail.com', 30000),
(3, 'John', 'John@gmail.com', 40000),
(4, 'Brite', 'Brite@gmail.com', 50000),
(5, 'Rohan', 'Rohan@gmail.com', 40000),
(6, 'King', 'King@gmail.com', 30000),
(7, 'Jebaraj', 'Jebaraj@gmail.com', 50000),
(8, 'Roshitha', 'roshitha@gmail.com', 50000),
(9, 'Cheems', 'cheems@gmail.com', 50000),
(10, 'GPMuthu', 'gpmuthu@gmail.com', 50000);



ALTER TABLE `transaction`
  ADD PRIMARY KEY (`sno`);


ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `transaction`
  MODIFY `sno` int(3) NOT NULL AUTO_INCREMENT;


ALTER TABLE `users`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT;
COMMIT;

