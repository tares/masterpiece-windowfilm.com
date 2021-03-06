DROP DATABASE masterpieceWEB;
CREATE DATABASE masterpieceWEB;
USE masterpieceWEB;

CREATE TABLE data_city(
	cityID INT(11) NOT NULL auto_increment,
	cityName VARCHAR(50) NOT NULL,
	coordLat FLOAT(10,6) NOT NULL DEFAULT -6.23779,
	coordLong FLOAT(10,6) NOT NULL DEFAULT 106.62894,
	
	PRIMARY KEY(cityID)
	)ENGINE=InnoDB;

CREATE TABLE data_dealer(
	dealerID INT(11) NOT NULL auto_increment,
	dealerName VARCHAR(50) NOT NULL DEFAULT 'NO NAME',
	address VARCHAR(100) NOT NULL,
	locations VARCHAR(100) DEFAULT NULL,
	cityID INT(11) NOT NULL DEFAULT 0,
	flag BOOLEAN NOT NULL DEFAULT 1,
	coordLat FLOAT(10,6) NOT NULL DEFAULT -6.23779,
	coordLong FLOAT(10,6) NOT NULL DEFAULT 106.62894,
	
	PRIMARY KEY(dealerID),
	FOREIGN KEY(cityID) REFERENCES data_city(cityID)
		ON UPDATE CASCADE
		ON DELETE CASCADE
	)ENGINE=InnoDB;
	
CREATE TABLE data_dealer_phonebook(
	dealerID INT(11) NOT NULL,
	telp VARCHAR(25) NOT NULL,
	
	FOREIGN KEY(dealerID) REFERENCES data_dealer(dealerID)
		ON UPDATE CASCADE
		ON DELETE CASCADE
	)ENGINE=InnoDB;

CREATE TABLE data_newsAndEvent(
	contentID INT(11) NOT NULL auto_increment,
	addedDate DATETIME NOT NULL DEFAULT '2009-01-01 00:00:00',
	additionalInfo TEXT NOT NULL,
	contentTitle VARCHAR(500) NOT NULL DEFAULT 'NO TITLE',
	shortDesc TEXT NOT NULL,
	category VARCHAR(20) NOT NULL,
	picThumb TEXT NOT NULL,
	content TEXT DEFAULT NULL,
	flag BOOLEAN NOT NULL DEFAULT 1,
	
	PRIMARY KEY(contentID)
	)ENGINE=InnoDB;

CREATE TABLE data_picTable(
	contentID INT(11) NOT NULL,
	captions TEXT NOT NULL,
	urlThumb TEXT NOT NULL,
	urlPic TEXT NOT NULL,
	flag BOOLEAN NOT NULL DEFAULT 1,
	
	FOREIGN KEY(contentID) REFERENCES data_newsAndEvent(contentID)
		ON UPDATE CASCADE
		ON DELETE CASCADE
	)ENGINE=InnoDB;