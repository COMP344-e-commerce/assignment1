CREATE TABLE IF NOT EXISTS `user`
(
  `userID`           INT          NOT NULL AUTO_INCREMENT,
  `userFirstName`    VARCHAR(45)  CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `userLastName`     VARCHAR(45)  CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `email`            VARCHAR(60)  NOT NULL,
  `country`          VARCHAR(30)  CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `state`            VARCHAR(30)  CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `city`             VARCHAR(30)  CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `address`          VARCHAR(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `postCode`         CHAR(6)      NOT NULL,
  `creditCardNumber` VARCHAR(32)  NOT NULL,
  `creditCardExpiry` DATETIME     NOT NULL,
  `password`         CHAR(128)    NOT NULL,
  PRIMARY KEY (`userID`),
  UNIQUE (`email`)
);

CREATE TABLE IF NOT EXISTS `author`
(
  `authorID`           INT         NOT NULL AUTO_INCREMENT,
  `authorFirstName`    VARCHAR(45) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `authorLastName`     VARCHAR(45) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `authorEmailAddress` VARCHAR(60) NULL,
  PRIMARY KEY (`authorID`)
);

CREATE TABLE IF NOT EXISTS `publisher`
(
  `publisherID`        CHAR(5)     NOT NULL,
  `publisherName`      VARCHAR(45) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `publisherCity`      VARCHAR(30) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `publisherContactNo` CHAR(14)    NULL,
  PRIMARY KEY (`publisherID`)
);

CREATE TABLE IF NOT EXISTS `unit`
(
  `unitID`   INT NOT NULL AUTO_INCREMENT,
  `unitName` VARCHAR(30) NOT NULL,
  PRIMARY KEY (`unitID`)
);

CREATE TABLE IF NOT EXISTS `book`
(
  `bookISBN`    VARCHAR(45)   NOT NULL,
  `bookTitle`   VARCHAR(45)   CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `cover`       VARCHAR(45)   CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `bookPrice`   DECIMAL(6, 2) NOT NULL,
  `pageNumber`  INT           NOT NULL,
  `publisherID` CHAR(5)       NULL,
  `publishYear` VARCHAR(5)    NOT NULL,
  `unitID`      INT           NOT NULL,
  `authorID`    INT           NOT NULL,
  PRIMARY KEY (`bookISBN`),
  CONSTRAINT `fk_book_unit` FOREIGN KEY (`unitID`)
  REFERENCES `unit` (`unitID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_book_author` FOREIGN KEY (`authorID`)
  REFERENCES `author` (`authorID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_book_publisher` FOREIGN KEY (`publisherID`)
  REFERENCES `publisher` (`publisherID`)
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

CREATE TABLE IF NOT EXISTS `shopping_cart`
(
  `userID`   INT         NOT NULL,
  `bookISBN` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`userId`, `bookISBN`),
  CONSTRAINT `fk_shopping_cart_user` FOREIGN KEY (`userID`)
  REFERENCES `user` (`userID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_shopping_cart_book` FOREIGN KEY (`bookISBN`)
  REFERENCES `book` (`bookISBN`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION
);


