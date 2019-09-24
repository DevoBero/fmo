-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema final_db
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema final_db
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `final_db` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ;
USE `final_db` ;

-- -----------------------------------------------------
-- Table `final_db`.`user`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `final_db`.`user` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `username` VARCHAR(100) NOT NULL,
  `email` VARCHAR(100) NOT NULL,
  `password` VARCHAR(100) NOT NULL,
  `image` TEXT(65535) NOT NULL,
  `feedback` TEXT(1000) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `final_db`.`organisation`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `final_db`.`organisation` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `organ_name` VARCHAR(50) NOT NULL,
  `organ_email` VARCHAR(50) NOT NULL,
  `organ_password` VARCHAR(100) NOT NULL,
  `organ_image` TEXT(65535) NOT NULL,
  `organ_feedback` TEXT(1000) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
