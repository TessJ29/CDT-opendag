DROP TABLE IF EXISTS `workshopregistration`;
CREATE TABLE IF NOT EXISTS `workshopregistration` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `email` varchar(320) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `workshop` varchar(70) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=0 DEFAULT CHARSET=latin1;