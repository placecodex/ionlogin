"# ionlogin" 
Data base 




CREATE TABLE `users` (
  `user_id` int(10) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(100) NOT NULL,
  `full_name` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


INSERT INTO `users` (`user_id`, `username`, `password`, `full_name`, `email`) VALUES
(1, 'superuser', '202cb962ac59075b964b07152d234b70', 'Richard', 'mazda@gmail.com'),
(2, 'master', '202cb962ac59075b964b07152d234b70', 'Jeff', 'asdlo@yahoo.com'),
(4, '', 'd41d8cd98f00b204e9800998ecf8427e', '', ''),
(5, 'azura', '202cb962ac59075b964b07152d234b70', 'Azuramasa', 'asura@gmail.com'),
(6, 'username', '202cb962ac59075b964b07152d234b70', 'User full name', 'user_email@yahoo.com'),
(7, 'thanos', '202cb962ac59075b964b07152d234b70', 'Thanos Car', 'thanosmcu@gmail.com'),
(8, 'stroop', '202cb962ac59075b964b07152d234b70', 'Storm Trooper', 'stormtp@gmail.com');



--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;
