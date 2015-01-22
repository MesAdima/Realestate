CREATE TABLE `house_specifics` (
  `spec_id` int(11) NOT NULL AUTO_INCREMENT,
  `house_id` int(11) NOT NULL,
  `rooms` int(11) NOT NULL,
  `kitchen` int(11) NOT NULL,
  `bathroom` int(11) NOT NULL,
  `garden` int(11) NOT NULL,
  `garage` int(11) NOT NULL,
  `other` text NOT NULL,
  PRIMARY KEY (`spec_id`),
  KEY `house_specifics_house_idx` (`house_id`),
  CONSTRAINT `house_specifics_house` FOREIGN KEY (`house_id`) REFERENCES `house` (`house_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1