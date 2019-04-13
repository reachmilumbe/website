
CREATE DATABASE `reachmilumbe`;


CREATE TABLE `admins` (
  `admin_id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `admin_first_name` varchar(255) NOT NULL,
  `admin_last_name` varchar(255) NOT NULL,
  `admin_email` varchar(255) NOT NULL,
  `admin_password` varchar(255) NOT NULL,
  `admin_joined` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `admin_is_active` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


CREATE TABLE `messages` (
  `msg_id` int(255) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `msg_sender` varchar(255) NOT NULL,
  `msg_sender_email` varchar(255) NOT NULL,
  `msg_cat` varchar(255) NOT NULL,
  `msg_body` text NOT NULL,
  `msg_sent_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



