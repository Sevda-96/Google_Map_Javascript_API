This api shows you how to display information from a MySQL database on a Google Map using the Maps JavaScript API.

The map in this api displays two kinds of markers to differentiate between the location of restaurants and bars respectively. A database in MySQL stores information about the individual marker locations like the type of place (whether it's a restaurant or a bar), its name, address and geographic coordinates. The map retrieves this information from the database, through an XML file that acts as an intermediary between the database and the map. You can use PHP statements to export marker information from the database to an XML file.

Click a marker on the map below to display an info window with the location name and address. The markers have the labels 'R' or 'B', and they show you the locations of restaurants and bars respectively.

Table in database:
CREATE TABLE `markers` (
  `id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY ,
  `name` VARCHAR( 60 ) NOT NULL ,
  `address` VARCHAR( 80 ) NOT NULL ,
  `lat` FLOAT( 10, 6 ) NOT NULL ,
  `lng` FLOAT( 10, 6 ) NOT NULL ,
  `type` VARCHAR( 30 ) NOT NULL
) ENGINE = MYISAM ;

tutorial:
https://developers.google.com/maps/documentation/javascript/mysql-to-maps