-- MySQL Script generated by MySQL Workbench
-- Sat Jan 15 17:08:00 2022
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `BasedSuitDB` DEFAULT CHARACTER SET utf8 ;
USE `BasedSuitDB` ;

-- -----------------------------------------------------
-- Table `mydb`.`USER`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `BasedSuitDB`.`USER` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `email` VARCHAR(45) NOT NULL,
  `password` VARCHAR(45) NOT NULL,
  `phone_number` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `id_UNIQUE` (`id` ASC),
  UNIQUE INDEX `email_UNIQUE` (`email` ASC))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`ORDER`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `BasedSuitDB`.`ORDER` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `date` VARCHAR(45) NOT NULL,
  `USER_id` INT NOT NULL,
  PRIMARY KEY (`id`, `USER_id`),
  UNIQUE INDEX `id_UNIQUE` (`id` ASC),
  INDEX `fk_ORDER_USER_idx` (`USER_id` ASC),
  CONSTRAINT `fk_ORDER_USER`
    FOREIGN KEY (`USER_id`)
    REFERENCES `mydb`.`USER` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`PRODUCT`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `BasedSuitDB`.`PRODUCT` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(45) NOT NULL,
  `price` FLOAT NOT NULL,
  `sale` TINYINT NOT NULL,
  `new` TINYINT NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `id_UNIQUE` (`id` ASC))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`PRODUCTS_ORDER`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `BasedSuitDB`.`PRODUCTS_ORDER` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `ORDER_id` INT NOT NULL,
  `PRODUCT_id` INT NOT NULL,
  PRIMARY KEY (`id`, `ORDER_id`, `PRODUCT_id`),
  UNIQUE INDEX `id_UNIQUE` (`id` ASC),
  INDEX `fk_PRODUCTS_ORDER_ORDER1_idx` (`ORDER_id` ASC),
  INDEX `fk_PRODUCTS_ORDER_PRODUCT1_idx` (`PRODUCT_id` ASC),
  CONSTRAINT `fk_PRODUCTS_ORDER_ORDER1`
    FOREIGN KEY (`ORDER_id`)
    REFERENCES `mydb`.`ORDER` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_PRODUCTS_ORDER_PRODUCT1`
    FOREIGN KEY (`PRODUCT_id`)
    REFERENCES `mydb`.`PRODUCT` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;