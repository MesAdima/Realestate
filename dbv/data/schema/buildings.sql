CREATE TABLE `buildings` (
  `build_id` int(11) NOT NULL AUTO_INCREMENT,
  `est_id` int(11) NOT NULL,
  `build_name` varchar(255) NOT NULL,
  `build_desc` text NOT NULL,
  `housetype_id` int(11) NOT NULL,
  PRIMARY KEY (`build_id`),
  KEY `building_estate_idx` (`est_id`),
  KEY `building_house_type_idx` (`housetype_id`),
  CONSTRAINT `building_house_type` FOREIGN KEY (`housetype_id`) REFERENCES `house_type` (`housetype_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `building_estate` FOREIGN KEY (`est_id`) REFERENCES `estate` (`est_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1