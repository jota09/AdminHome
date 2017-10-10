-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
-- -----------------------------------------------------
-- Schema adminhome
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema adminhome
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `adminhome` DEFAULT CHARACTER SET utf8 ;
USE `adminhome` ;

-- -----------------------------------------------------
-- Table `adminhome`.`tipo_egreso`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `adminhome`.`tipo_egreso` (
  `id` INT(11) NOT NULL AUTO_INCREMENT COMMENT '',
  `nombre` VARCHAR(45) NULL DEFAULT NULL COMMENT '',
  `descripcion` VARCHAR(150) NULL DEFAULT NULL COMMENT '',
  `created_at` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP COMMENT '',
  `updated_at` TIMESTAMP NULL DEFAULT NULL COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '')
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `adminhome`.`egreso`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `adminhome`.`egreso` (
  `id` INT(11) NOT NULL AUTO_INCREMENT COMMENT '',
  `tipo_egreso_id` INT(11) NOT NULL COMMENT '',
  `valor` BIGINT(20) NOT NULL COMMENT '',
  `descripcion` VARCHAR(200) NULL DEFAULT NULL COMMENT '',
  `fecha_vencimiento` DATE NULL DEFAULT NULL COMMENT '',
  `activo` TINYINT(1) NULL DEFAULT '1' COMMENT '',
  `created_at` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP COMMENT '',
  `updated_at` TIMESTAMP NULL DEFAULT NULL COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '',
  INDEX `fk_cuenta_individual_tipo_egreso1_idx` (`tipo_egreso_id` ASC)  COMMENT '',
  CONSTRAINT `fk_cuenta_individual_tipo_egreso1`
    FOREIGN KEY (`tipo_egreso_id`)
    REFERENCES `adminhome`.`tipo_egreso` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `adminhome`.`grupo`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `adminhome`.`grupo` (
  `id` INT(11) NOT NULL AUTO_INCREMENT COMMENT '',
  `nombre` VARCHAR(45) NULL DEFAULT NULL COMMENT '',
  `descripcion` VARCHAR(200) NULL DEFAULT NULL COMMENT '',
  `created_at` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP COMMENT '',
  `updated_at` TIMESTAMP NULL DEFAULT NULL COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '')
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `adminhome`.`tipo_ingreso`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `adminhome`.`tipo_ingreso` (
  `id` INT(11) NOT NULL COMMENT '',
  `nombre` VARCHAR(45) NULL DEFAULT NULL COMMENT '',
  `descripcion` VARCHAR(200) NULL DEFAULT NULL COMMENT '',
  `created_at` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP COMMENT '',
  `updated_at` TIMESTAMP NULL DEFAULT NULL COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '')
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `adminhome`.`users`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `adminhome`.`users` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '',
  `grupo_id` INT(11) NULL DEFAULT NULL COMMENT '',
  `name` VARCHAR(255) NOT NULL COMMENT '',
  `email` VARCHAR(255) NOT NULL COMMENT '',
  `password` VARCHAR(255) NOT NULL COMMENT '',
  `birthdate` VARCHAR(70) NULL DEFAULT NULL COMMENT '',
  `remember_token` VARCHAR(100) NULL DEFAULT NULL COMMENT '',
  `created_at` TIMESTAMP NULL DEFAULT NULL COMMENT '',
  `updated_at` TIMESTAMP NULL DEFAULT NULL COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '',
  UNIQUE INDEX `users_email_unique` (`email` ASC)  COMMENT '')
ENGINE = MyISAM
AUTO_INCREMENT = 8
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `adminhome`.`ingreso`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `adminhome`.`ingreso` (
  `id` INT(11) NOT NULL COMMENT '',
  `tipo_ingreso_id` INT(11) NOT NULL COMMENT '',
  `users_id` INT(10) UNSIGNED NOT NULL COMMENT '',
  `valor` BIGINT(20) NOT NULL COMMENT '',
  `descripcion` VARCHAR(200) NULL DEFAULT NULL COMMENT '',
  `fecha_vencimiento` DATE NULL DEFAULT NULL COMMENT '',
  `activo` TINYINT(1) NULL DEFAULT '1' COMMENT '',
  `created_at` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP COMMENT '',
  `updated_at` TIMESTAMP NULL DEFAULT NULL COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '',
  INDEX `fk_ingreso_users1_idx` (`users_id` ASC)  COMMENT '',
  INDEX `fk_ingreso_tipo_ingreso1_idx` (`tipo_ingreso_id` ASC)  COMMENT '',
  CONSTRAINT `fk_ingreso_tipo_ingreso1`
    FOREIGN KEY (`tipo_ingreso_id`)
    REFERENCES `adminhome`.`tipo_ingreso` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_ingreso_users1`
    FOREIGN KEY (`users_id`)
    REFERENCES `adminhome`.`users` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `adminhome`.`migrations`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `adminhome`.`migrations` (
  `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '',
  `migration` VARCHAR(255) NOT NULL COMMENT '',
  `batch` INT(11) NOT NULL COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '')
ENGINE = MyISAM
AUTO_INCREMENT = 3
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `adminhome`.`password_resets`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `adminhome`.`password_resets` (
  `email` VARCHAR(255) NOT NULL COMMENT '',
  `token` VARCHAR(255) NOT NULL COMMENT '',
  `created_at` TIMESTAMP NULL DEFAULT NULL COMMENT '',
  INDEX `password_resets_email_index` (`email` ASC)  COMMENT '')
ENGINE = MyISAM
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `adminhome`.`users_cta`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `adminhome`.`users_cta` (
  `id` INT(11) NOT NULL AUTO_INCREMENT COMMENT '',
  `users_id` INT(10) UNSIGNED NOT NULL COMMENT '',
  `egreso_id` INT(11) NOT NULL COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '',
  INDEX `fk_users_cta_users_idx` (`users_id` ASC)  COMMENT '',
  INDEX `fk_users_cta_egreso1_idx` (`egreso_id` ASC)  COMMENT '',
  CONSTRAINT `fk_users_cta_egreso1`
    FOREIGN KEY (`egreso_id`)
    REFERENCES `adminhome`.`egreso` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_users_cta_users`
    FOREIGN KEY (`users_id`)
    REFERENCES `adminhome`.`users` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
