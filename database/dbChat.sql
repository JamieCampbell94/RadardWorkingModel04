-- initialise the database
CREATE DATABASE chater;

-- create the database

CREATE TABLE `chatLogThree` (
  `userName` int(20) NOT NULL,
  `message` varchar(140) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=68 DEFAULT CHARSET=utf8;
