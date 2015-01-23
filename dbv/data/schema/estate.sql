CREATE TABLE `estate` (
  `est_id` int(11) NOT NULL AUTO_INCREMENT,
  `est_name` varchar(150) NOT NULL,
  `location` varchar(150) NOT NULL,
  `description` text NOT NULL,
  `added_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`est_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1