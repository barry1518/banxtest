CREATE TABLE `annual_rates` (
 `countryId` int(11) unsigned NOT NULL AUTO_INCREMENT,
 `name` varchar(64) NOT NULL,
 `annualRates` float(8,2) unsigned NOT NULL,
 PRIMARY KEY (`id`),
 UNIQUE KEY `country_name_unqiue` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `annual_rates` (`countryId`,`name`,`annualRates`) VALUES (1,'Canada',10),
(2,'USA',12),(3,'Mexico',9),(4,'Brasil',13);
