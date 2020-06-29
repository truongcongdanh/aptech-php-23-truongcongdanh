CREATE DATABASE aptech_php_23;
CREATE TABLE `aptech_php_23`.`data` (
    PersonID int,
    LastName varchar(255),
    FirstName varchar(255),
    Address varchar(255),
    City varchar(255),
    PRIMARY KEY(PersonID)
);
INSERT INTO `aptech_php_23`.`data` (PersonID, LastName, FirstName,Address,City)
VALUES (1, 'danh', 'truong','nguyen phuoc nguyen','aptech');
SELECT * FROM `aptech_php_23`.`data`;
DELETE FROM `aptech_php_23`.`data` WHERE PersonID = 2;
INSERT INTO `aptech_php_23`.`data` (PersonID, LastName, FirstName,Address,City,password)
VALUES (2, 'nhan', 'phan','luu quang vu','fpt','1234');
SELECT * FROM aptech_php_23.data;
ALTER TABLE `aptech_php_23`.`data` ADD `cmd` VARCHAR(20) NOT NULL AFTER City;
INSERT INTO `aptech_php_23`.`data` (PersonID, LastName, FirstName,Address,City,password)
VALUES (2, 'nhung', 'pham','nguyen phuoc nguyen','fpt','1234');
DROP TABLE aptech_php_23.data;
CREATE TABLE `aptech_php_23`.`data` (
    ID int PRIMARY KEY AUTO_INCREMENT,
    Name varchar(25) UNIQUE,
    Pasword varchar(25)
);
INSERT INTO `aptech_php_23`.`data` (Name,Pasword)
VALUES ('danh','A1234');
INSERT INTO aptech_php_23.data
(Name, pasword)
VALUES ('danh', '123'),
('nhan', '333'),
('tu', '32447');
SELECT * FROM aptech_php_23.data;
INSERT INTO aptech_php_23.data
(Name, pasword)
VALUES ('danh', '123');
UPDATE aptech_php_23.data SET `Name` = 'tuan' WHERE aptech_php_23.data.ID = 6;

CREATE TABLE `aptech_php_23_04`.`data` (
    id int PRIMARY KEY AUTO_INCREMENT,
    ten varchar(25),
    email varchar(25) UNIQUE
);
INSERT INTO aptech_php_23_04.data (ten,email)
VALUE ('truongcongdanh','congdanh@gmail.com'),('nhanphan','nhanphan@gmail.com');
SELECT * FROM aptech_php_23_04.data;



