DROP DATABASE bursaKost;
CREATE DATABASE bursaKost;
USE bursaKost;

CREATE TABLE data_login(
	userID VARCHAR(50) NOT NULL, 
	pass VARCHAR(50) NOT NULL,
	type VARCHAR(5) NOT NULL,
	
	PRIMARY KEY (userID)
	)ENGINE=InnoDB;


CREATE TABLE data_kost(
	kostID INT(11) NOT NULL auto_increment,
	namaPemilik VARCHAR(50) NOT NULL,
	namaKost VARCHAR(50) NOT NULL, 
	alamat VARCHAR(100) NOT NULL,
	daerah VARCHAR(100) NOT NULL,
	contact VARCHAR(15),
	room INT(11) NOT NULL,
	available INT(11) NOT NULL,
	roomRate INT(11) NOT NULL,
	fasilitas TEXT,
	additionaInfo TEXT,
	
	PRIMARY KEY (kostID)
	)ENGINE=InnoDB;

CREATE TABLE markers (
  markerId INT(11) NOT NULL,
  lat FLOAT(10,6) NOT NULL ,
  lng FLOAT(10,6) NOT NULL,
  
  FOREIGN KEY(markerId) REFERENCES data_kost(kostID)
		ON UPDATE CASCADE
		ON DELETE CASCADE
) ENGINE = MYISAM ;
	
	
CREATE TABLE data_kost_picture(
	kostID INT(11) NOT NULL,
	pictureLink VARCHAR(100) NOT NULL,
	
	FOREIGN KEY(kostID) REFERENCES data_kost(kostID)
		ON UPDATE CASCADE
		ON DELETE CASCADE
	)ENGINE=InnoDB;
	
	
CREATE TABLE feedback(
	feedbackID INT(11) NOT NULL auto_increment,
	kostID INT(11) NOT NULL,
	namaUser VARCHAR(50) NOT NULL, 
	comment TEXT,
	score INT(11) NOT NULL,
	
	PRIMARY KEY (feedbackID),
	FOREIGN KEY(kostID) REFERENCES data_kost(kostID)
		ON UPDATE CASCADE
		ON DELETE CASCADE
	)ENGINE=InnoDB;
	
	
CREATE TABLE data_kost_regist(
	registID INT(11) NOT NULL auto_increment,
	tanggalMasuk DATE,
	namaPemilik VARCHAR(50) NOT NULL,
	namaKost VARCHAR(50) NOT NULL, 
	alamat VARCHAR(100) NOT NULL,
	contact VARCHAR(15),
	room INT(11) NOT NULL,
	activeStatus BOOLEAN DEFAULT 1,
	
	PRIMARY KEY (registID)
	)ENGINE=InnoDB;
	
	
INSERT INTO data_login VALUES 
	('super','1','SA'),
	('user','user','U');
	
INSERT INTO data_kost VALUES
	('','user1','Ekaristi','Jalan Kelapa Sawit 8 Blok BE9 No.8 Sektor 1E','Gading Serpong, Tangerang','08161977011','8','2','900000','<ul><li>5 kamar : 2 kamar kasur double dengan kamar mandi dalam, 3 kamar single dengan kamar mandi luar</li><li>TV Kabel Top TV</li><li>Internet Speedy</li><li>Pembantu untuk bersih2 ruangan</li><li>Di Samping Kolam renang</li></ul>',''),
	('','user2','Fourteen House','Cluster New Jasmine HA4 no.14B','Gading Serpong, Tangerang','085654200910','8','3','1200000','<ul><li>Internet Access</li><li>Flil AC</li><li>Pembantu untuk bersih2 ruangan</li></ul>',''),
	('','user3','Kosan Pelepah 7','Jalan pelepah kuning 10 blok DD 6 no.7 sektor 7B','Gading Serpong Tangerang','081944887296','4','0','800000','<ul><li>AC</li><li>Internet</li><li>Pembantu rumah tangga (Bersih2 & cuci)</li><li>Harga 800 ribu per blian</li></ul>','');

INSERT INTO data_kost_picture VALUES
	('1','ekaristi'),
	('2','fourteen'),
	('3','pelepah');

INSERT INTO markers VALUES
	('1','-6.23979','106.63300'),
	('2','-6.23489','106.63489'),
	('3','-6.249457','106.617744');
	
SELECT namaKost, alamat, daerah, namaPemilik, contact, room, available, roomRate, lat, lng
FROM data_kost, markers
WHERE kostID=markerId;