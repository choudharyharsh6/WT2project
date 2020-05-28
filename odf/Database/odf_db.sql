-- phpMyAdmin SQL Dump
-- version 3.5.7
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 23, 2019 at 05:08 AM
-- Server version: 5.0.89-community-nt
-- PHP Version: 5.5.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `odf_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `admin_id` int(11) NOT NULL auto_increment,
  `admin_email` varchar(255) character set utf8 collate utf8_bin NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `education` varchar(255) NOT NULL,
  `password` varchar(255) character set utf8 collate utf8_bin NOT NULL,
  `invitation_code` text character set utf8 collate utf8_bin NOT NULL,
  `admin_pic` varchar(255) NOT NULL,
  `ad_pic_src` varchar(255) NOT NULL,
  `employment` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `admin_date_time` datetime NOT NULL,
  `validation_code` text character set utf8 collate utf8_bin NOT NULL,
  `active` tinyint(4) NOT NULL default '0',
  `approve` tinyint(4) NOT NULL default '0',
  PRIMARY KEY  (`admin_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_email`, `first_name`, `last_name`, `education`, `password`, `invitation_code`, `admin_pic`, `ad_pic_src`, `employment`, `address`, `admin_date_time`, `validation_code`, `active`, `approve`) VALUES
(1, 'choudhary.harsh6@gmail.com', 'Harsh', 'Choudhary', 'BTech', 'e10adc3949ba59abbe56e057f20f883e', '1', 'user.jpg', 'images/ProfilePicture/user.jpg', 'Student', 'Ranchi', '2020-03-23 20:42:27', '0', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `admin_request`
--

CREATE TABLE IF NOT EXISTS `admin_request` (
  `admin_id` int(11) NOT NULL auto_increment,
  `admin_email` varchar(255) character set utf8 collate utf8_bin NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `education` varchar(255) NOT NULL,
  `password` varchar(255) character set utf8 collate utf8_bin NOT NULL,
  `invitation_code` text character set utf8 collate utf8_bin NOT NULL,
  `employment` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `admin_date_time` datetime NOT NULL,
  `validation_code` text character set utf8 collate utf8_bin NOT NULL,
  `active` tinyint(4) NOT NULL default '0',
  `approve` tinyint(4) NOT NULL default '4',
  PRIMARY KEY  (`admin_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin_request`
--


-- --------------------------------------------------------

--
-- Table structure for table `answers`
--

CREATE TABLE IF NOT EXISTS `answers` (
  `a_no` int(11) NOT NULL auto_increment,
  `image` varchar(255) NOT NULL,
  `img_src` varchar(255) NOT NULL,
  `pdf` varchar(255) NOT NULL,
  `pdf_src` varchar(255) NOT NULL,
  `video` varchar(255) NOT NULL,
  `video_src` varchar(255) NOT NULL,
  `answer` varchar(1000) NOT NULL,
  `a_date_time` datetime NOT NULL,
  `a_user_id` int(11) NOT NULL,
  `q_no` int(11) NOT NULL,
  `a_subject_id` int(11) NOT NULL,
  `a_a` tinyint(4) NOT NULL default '0',
  `a_s` tinyint(4) NOT NULL default '0',
  `a_q` tinyint(4) NOT NULL default '0',
  `user_approve` tinyint(4) NOT NULL default '0',
  `status` varchar(255) NOT NULL,
  PRIMARY KEY  (`a_no`),
  KEY `answers_ibfk_2` (`q_no`),
  KEY `answers_ibfk_3` (`a_user_id`),
  KEY `answers_ibfk_4` (`a_subject_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `answers`
--


-- --------------------------------------------------------

--
-- Table structure for table `answer_view_count`
--

CREATE TABLE IF NOT EXISTS `answer_view_count` (
  `count_ID` int(11) NOT NULL auto_increment,
  `view` tinyint(4) NOT NULL default '0',
  `answer_ID` int(11) NOT NULL,
  `user_ID` int(11) NOT NULL,
  PRIMARY KEY  (`count_ID`),
  KEY `answer_ID` (`answer_ID`),
  KEY `user_ID` (`user_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=51 ;

--
-- Dumping data for table `answer_view_count`
--


-- --------------------------------------------------------

--
-- Table structure for table `answer_vote`
--

CREATE TABLE IF NOT EXISTS `answer_vote` (
  `ans_vote_ID` int(11) NOT NULL auto_increment,
  `upvotes` int(11) NOT NULL,
  `downvotes` int(11) NOT NULL,
  `reports` int(11) NOT NULL,
  `answer_ID` int(11) NOT NULL,
  `user_ID` int(11) NOT NULL,
  `date_time` datetime NOT NULL,
  PRIMARY KEY  (`ans_vote_ID`),
  KEY `answer_vote_ibfk_1` (`answer_ID`),
  KEY `answer_vote_ibfk_2` (`user_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=43 ;

--
-- Dumping data for table `answer_vote`
--


-- --------------------------------------------------------

--
-- Table structure for table `discussion`
--

CREATE TABLE IF NOT EXISTS `discussion` (
  `discussion_id` int(11) NOT NULL auto_increment,
  `communication` varchar(1000) NOT NULL,
  `image` varchar(255) NOT NULL,
  `img_src` varchar(255) NOT NULL,
  `pdf` varchar(255) NOT NULL,
  `pdf_src` varchar(255) NOT NULL,
  `video` varchar(255) NOT NULL,
  `video_src` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `d_user_id` int(11) NOT NULL,
  `q_no` int(11) NOT NULL,
  `a_no` int(11) NOT NULL,
  `d_date_time` datetime NOT NULL,
  `approve` tinyint(4) NOT NULL default '0',
  PRIMARY KEY  (`discussion_id`),
  KEY `discussion_ibfk_1` (`d_user_id`),
  KEY `q_no` (`q_no`),
  KEY `a_no` (`a_no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `discussion`
--


-- --------------------------------------------------------

--
-- Table structure for table `discussion_vote`
--

CREATE TABLE IF NOT EXISTS `discussion_vote` (
  `dis_vote_id` int(11) NOT NULL auto_increment,
  `upvotes` int(11) NOT NULL,
  `downvotes` int(11) NOT NULL,
  `reports` int(11) NOT NULL,
  `discussion_id` int(11) NOT NULL,
  `user_ID` int(11) NOT NULL,
  `date_time` datetime NOT NULL,
  PRIMARY KEY  (`dis_vote_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=59 ;

--
-- Dumping data for table `discussion_vote`
--


-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE IF NOT EXISTS `messages` (
  `message_id` int(11) NOT NULL auto_increment,
  `email` varchar(255) character set utf8 collate utf8_bin NOT NULL,
  `mobile_no` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` varchar(500) NOT NULL,
  `date_time` datetime NOT NULL,
  PRIMARY KEY  (`message_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `messages`
--


-- --------------------------------------------------------

--
-- Table structure for table `post_query`
--

CREATE TABLE IF NOT EXISTS `post_query` (
  `query_id` int(11) NOT NULL auto_increment,
  `user_subject` varchar(255) NOT NULL,
  `user_description` varchar(1000) NOT NULL,
  `user_des_time` datetime NOT NULL,
  `user_des_id` int(11) NOT NULL,
  `status` varchar(255) NOT NULL,
  `response` tinyint(4) NOT NULL default '0',
  PRIMARY KEY  (`query_id`),
  KEY `user_des_id` (`user_des_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `post_query`
--


-- --------------------------------------------------------

--
-- Table structure for table `post_solution`
--

CREATE TABLE IF NOT EXISTS `post_solution` (
  `solution_id` int(11) NOT NULL auto_increment,
  `admin_subject` varchar(255) NOT NULL,
  `admin_description` varchar(1000) NOT NULL,
  `admin_des_time` datetime NOT NULL,
  `admin_des_id` int(11) NOT NULL,
  `query_id` int(11) NOT NULL,
  `query_user_id` int(11) NOT NULL,
  `status` varchar(255) NOT NULL,
  PRIMARY KEY  (`solution_id`),
  KEY `query_id` (`query_id`),
  KEY `user_query_id` (`query_user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `post_solution`
--


-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE IF NOT EXISTS `questions` (
  `q_no` int(11) NOT NULL auto_increment,
  `q_subject_id` int(11) NOT NULL,
  `question` varchar(600) character set utf8 collate utf8_bin NOT NULL,
  `q_date_time` datetime NOT NULL,
  `q_email` varchar(255) character set utf8 collate utf8_bin NOT NULL,
  `q_user_id` int(11) NOT NULL,
  `a_q` tinyint(4) NOT NULL default '0',
  `a_s` tinyint(11) NOT NULL default '0',
  `user_approve` tinyint(4) NOT NULL default '0',
  PRIMARY KEY  (`q_no`),
  KEY `questions_ibfk_1` (`q_user_id`),
  KEY `questions_ibfk_2` (`q_subject_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=27 ;

--
-- Dumping data for table `questions`
--


-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE IF NOT EXISTS `subjects` (
  `subject_id` int(11) NOT NULL auto_increment,
  `sub_code` varchar(255) NOT NULL,
  `sub_name` varchar(255) NOT NULL,
  `sub_date_time` datetime NOT NULL,
  `sub_uploaded_by` varchar(255) character set utf8 collate utf8_bin NOT NULL,
  `s_admin_id` int(11) NOT NULL,
  `a_s` tinyint(11) NOT NULL default '0',
  PRIMARY KEY  (`subject_id`),
  KEY `admin_id` (`s_admin_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `subjects`
--


-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL auto_increment,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) character set utf8 collate utf8_bin NOT NULL,
  `password` text character set utf8 collate utf8_bin NOT NULL,
  `u_date_time` datetime NOT NULL,
  `validation_code` text character set utf8 collate utf8_bin NOT NULL,
  `active` tinyint(4) NOT NULL default '0',
  `education` varchar(255) NOT NULL,
  `employment` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `profile_pic` varchar(255) NOT NULL,
  `pic_src` varchar(255) NOT NULL,
  `approve` tinyint(4) NOT NULL default '0',
  `online` tinyint(4) NOT NULL default '0',
  PRIMARY KEY  (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=33 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `first_name`, `last_name`, `username`, `email`, `password`, `u_date_time`, `validation_code`, `active`, `education`, `employment`, `address`, `profile_pic`, `pic_src`, `approve`, `online`) VALUES
(1, 'Aniket', 'Anand', 'aniket', 'aniket.anand1304@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '2020-03-24 23:09:45', '1', 1, 'BTech', 'Software Engineer', 'Bokaro', 'user.png', 'Profile_picture/user.png', 1, 0);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `answers`
--
ALTER TABLE `answers`
  ADD CONSTRAINT `answers_ibfk_2` FOREIGN KEY (`q_no`) REFERENCES `questions` (`q_no`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `answers_ibfk_3` FOREIGN KEY (`a_user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `answers_ibfk_4` FOREIGN KEY (`a_subject_id`) REFERENCES `subjects` (`subject_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `answer_view_count`
--
ALTER TABLE `answer_view_count`
  ADD CONSTRAINT `answer_view_count_ibfk_1` FOREIGN KEY (`answer_ID`) REFERENCES `answers` (`a_no`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `answer_view_count_ibfk_2` FOREIGN KEY (`user_ID`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `discussion`
--
ALTER TABLE `discussion`
  ADD CONSTRAINT `discussion_ibfk_1` FOREIGN KEY (`d_user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `discussion_ibfk_2` FOREIGN KEY (`q_no`) REFERENCES `questions` (`q_no`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `discussion_ibfk_3` FOREIGN KEY (`a_no`) REFERENCES `answers` (`a_no`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `post_query`
--
ALTER TABLE `post_query`
  ADD CONSTRAINT `post_query_ibfk_2` FOREIGN KEY (`user_des_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `post_solution`
--
ALTER TABLE `post_solution`
  ADD CONSTRAINT `post_solution_ibfk_2` FOREIGN KEY (`query_user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `questions`
--
ALTER TABLE `questions`
  ADD CONSTRAINT `questions_ibfk_1` FOREIGN KEY (`q_user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `questions_ibfk_2` FOREIGN KEY (`q_subject_id`) REFERENCES `subjects` (`subject_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `subjects`
--
ALTER TABLE `subjects`
  ADD CONSTRAINT `subjects_ibfk_1` FOREIGN KEY (`s_admin_id`) REFERENCES `admin` (`admin_id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
