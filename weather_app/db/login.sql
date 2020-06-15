SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";



CREATE TABLE `languages` (
  `lan_id` int(100) NOT NULL,
  `fullname` varchar(10) NOT NULL,
  `about` varchar(255) NOT NULL,
  `votecount` int(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;



CREATE TABLE `loginusers` (
  `id` int(200) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `rank` varchar(80) NOT NULL DEFAULT 'voter',
  `status` varchar(10) NOT NULL DEFAULT 'ACTIVE'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;



CREATE TABLE `voters` (
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `status` varchar(10) NOT NULL DEFAULT 'NOTVOTED',
  `voted` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;


ALTER TABLE `languages`
  ADD PRIMARY KEY (`lan_id`);


ALTER TABLE `loginusers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);


ALTER TABLE `voters`
  ADD UNIQUE KEY `username` (`username`);


ALTER TABLE `languages`
  MODIFY `lan_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

ALTER TABLE `loginusers`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

CREATE TABLE `admintable` (
  `id` int(255) PRIMARY KEY,
  `user` varchar(255) NOT NULL,
  `pass` varchar(1255) NOT NULL)ENGINE=MyISAM DEFAULT CHARSET=latin1;

