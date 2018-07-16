CREATE DATABASE bookstore;
use bookstore;
CREATE TABLE IF NOT EXISTS `user`
(
  `userID`                 INT          NOT NULL AUTO_INCREMENT,
  `userNickName`           VARCHAR(45)  NOT NULL,
  `userFirstName`          VARCHAR(45)  NOT NULL,
  `userMiddleName`         VARCHAR(45)  NOT NULL,
  `userLastName`           VARCHAR(45)  NOT NULL,
  `email`                  VARCHAR(60)  NOT NULL,
  `country`                VARCHAR(30)  NOT NULL,
  `state`                  VARCHAR(30)  NOT NULL,
  `city`                   VARCHAR(30)  NOT NULL,
  `address`                VARCHAR(100) NOT NULL,
  `postCode`               CHAR(6)      NOT NULL,
  `creditCardNumber`       VARCHAR(32)  NULL,
  `creditCardSecurityCode` CHAR(3)      NULL,
  `password`               VARCHAR(120) NOT NULL,
  PRIMARY KEY (`userID`)
);


CREATE TABLE IF NOT EXISTS `author`
(
  `authorID`           INT         NOT NULL AUTO_INCREMENT,
  `authorFirstName`    VARCHAR(45) NOT NULL,
  `authorMiddleName`   VARCHAR(45) NULL,
  `authorLastName`     VARCHAR(45) NOT NULL,
  `authorEmailAddress` VARCHAR(60) NULL,
  PRIMARY KEY (`authorID`)
);

CREATE TABLE IF NOT EXISTS `publisher`
(
  `publisherID`        CHAR(5)     NOT NULL,
  `publisherName`      VARCHAR(45) NULL,
  `publisherCity`      VARCHAR(30) NULL,
  `publisherContactNo` CHAR(14)    NULL,
  PRIMARY KEY (`publisherID`)
);

create table if not exists `unit`
(
`unitID`	int	not null auto_increment,
`unitName`	varchar(30),
primary key (`unitID`)
);

CREATE TABLE IF NOT EXISTS `book`
(
  `bookISBN`    VARCHAR(45)   NOT NULL,
  `bookTitle`   VARCHAR(45)   NOT NULL,
  `cover`       VARCHAR(45)   NULL,
  `bookPrice`   DECIMAL(6, 2) NOT NULL,
  `pageNumber`  INT           NOT NULL,
  `publisherID` CHAR(5)       NULL,
  `publishYear` VARCHAR(5)    NOT NULL,
  `unitID`      int       NOT NULL,
  `authorID`	int			  NOT NULL,
  PRIMARY KEY (`bookISBN`),
  CONSTRAINT `fk_book_unit` FOREIGN KEY (`unitID`)
  REFERENCES `unit` (`unitID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_book_author` FOREIGN KEY (`authorID`)
  REFERENCES `author` (`authorID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION
);

CREATE TABLE IF NOT EXISTS `wishList`
(
  `userID`   INT         NOT NULL,
  `bookISBN` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`userId`, `bookISBN`),
  CONSTRAINT `fk_wish_list_user` FOREIGN KEY (`userID`)
  REFERENCES `user` (`userID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_wish_list_book` FOREIGN KEY (`bookISBN`)
  REFERENCES `book` (`bookISBN`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION
);


