CREATE TABLE `house` (
  `house_id` int(11) NOT NULL AUTO_INCREMENT,
  `build_id` int(11) NOT NULL,
  `house_no` int(11) NOT NULL,
  `state` text NOT NULL,
  PRIMARY KEY (`house_id`),
  KEY `house_buildings_idx` (`build_id`),
  CONSTRAINT `house_buildings` FOREIGN KEY (`build_id`) REFERENCES `buildings` (`build_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1