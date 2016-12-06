CREATE DATABASE TEST

CREATE TABLE `news` (
  `user_id` int(10) NOT NULL,
  `name` varchar(25) NOT NULL,
  `nickname` varchar(25) NOT NULL,
  `address` varchar(25) NOT NULL,
  `email` varchar(45) NOT NULL,
  `website` varchar(25) NOT NULL,
  `comment` varchar(25) NOT NULL,
  `gender` varchar(45) NOT NULL,
  `cellphone` varchar(25) NOT NULL,
  `slug` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;