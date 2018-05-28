CREATE TABLE Members (
uid int(255) NOT NULL AUTO_INCREMENT,
username varchar(255) NOT NULL,
email varchar(255) NOT NULL,
password varchar(255) NOT NULL,
dateCreated timestamp NOT NULL,
PRIMARY KEY (uid),
UNIQUE KEY (username),
UNIQUE KEY (email)
);