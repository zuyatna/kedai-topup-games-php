CREATE DATABASE IF NOT EXISTS `kedai_topup`;
USE `kedai_topup`;

CREATE TABLE IF NOT EXISTS `user`(
  `user_id` INT(11) NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(50) NOT NULL,
  `email` VARCHAR(50) NOT NULL,
  `password` VARCHAR(255) NOT NULL,
  PRIMARY KEY (`user_id`),
  UNIQUE KEY (`email`)
);

INSERT INTO `user` (`name`, `email`, `password`) VALUES
('John Doe', 'john.doe@email.com', 'password123'),
('Jane Doe', 'jane.doe@email.com', 'password123');

CREATE TABLE IF NOT EXISTS `contact_form`(
  `contact_form_id` INT(11) NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(50) NOT NULL,
  `email` VARCHAR(50) NOT NULL,
  `subject` VARCHAR(50) NOT NULL,
  `message` TEXT NOT NULL,
  PRIMARY KEY (`contact_form_id`)
);

INSERT INTO `contact_form` (`name`, `email`, `subject`, `message`) VALUES
('John Doe', 'john.doe@email.com', 'Hello', 'Hello, how are you?'),
('Jane Doe', 'jane.doe@email.com', 'Hi', 'Hi, how are you?');