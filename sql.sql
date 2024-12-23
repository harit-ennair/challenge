CREATE DATABASE challenge;


CREATE TABLE role (
roleID int PRIMARY KEY AUTO_INCREMENT NOT NULL , 
name varchar(55) NOT NULL );


CREATE TABLE users ( 
userID int PRIMARY KEY AUTO_INCREMENT NOT NULL , 
name varchar(55) NOT NULL, 
email varchar(55) NOT NULL, 
roleID int NOT NULL, 
FOREIGN KEY (roleID) REFERENCES role(roleID) );