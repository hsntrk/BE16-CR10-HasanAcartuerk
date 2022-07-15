CREATE DATABASE BE16_CR10_HasanAcartuerk_BigLibrary DEFAULT CHARACTER SET utf8;

CREATE TABLE `books` (
  `id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `ISBN` bigint(20) NOT NULL,
  `title` varchar(80) NOT NULL,
  `image` varchar(100) NOT NULL,
  `short_description` varchar(100) NOT NULL,
  `type` varchar(40) NOT NULL,
  `author_first_name` varchar(80) NOT NULL,
  `author_last_name` varchar(80) NOT NULL,
  `publisher_name` varchar(100) NOT NULL,
  `publisher_address` varchar(100) NOT NULL,
  `publish_date` date DEFAULT NULL,
  `status` enum('available','reserved') DEFAULT 'available'
);