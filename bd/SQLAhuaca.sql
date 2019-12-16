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
CREATE SCHEMA IF NOT EXISTS `mydb` DEFAULT CHARACTER SET utf8 ;
USE `mydb` ;

-- -----------------------------------------------------
-- Table `mydb`.`solicitudes`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`solicitudes` (
  `idsolicitudes` INT NOT NULL,
  `fecharecibido` DATE NOT NULL,
  `fecharesolucion` DATE NULL,
  `idstatus` INT NOT NULL,
  `solicitante` VARCHAR(45) NULL,
  `telsolicitante` VARCHAR(45) NULL,
  `correosolicitante` VARCHAR(45) NULL,
  `domicilio` VARCHAR(45) NOT NULL,
  `idcomunidad` INT NOT NULL,
  `documento` VARCHAR(45) NOT NULL,
  `iddependencia` INT NOT NULL)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`historialsolicitudes`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`historialsolicitudes` (
  `idhistorial` INT NOT NULL,
  `idsolicitud` VARCHAR(45) NOT NULL,
  `fecha` DATE NOT NULL,
  `detalle` VARCHAR(45) NOT NULL,
  `historialsolicitudescol` VARCHAR(45) NOT NULL,
  `idusuario` INT NOT NULL,
  PRIMARY KEY (`idhistorial`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`status`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`status` (
  `idstatus` INT NOT NULL,
  `descripcion` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idstatus`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`comunidad`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`comunidad` (
  `idcomunidad` INT NOT NULL,
  `nombre` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idcomunidad`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`dependencia`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`dependencia` (
  `iddependencia` INT NOT NULL,
  `nombre` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`iddependencia`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`usuario`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`usuario` (
  `correo` VARCHAR(45) NOT NULL,
  `nombre` VARCHAR(45) NOT NULL,
  `contrasena` VARCHAR(45) NOT NULL,
  `iddependencia` INT NOT NULL,
  PRIMARY KEY (`correo`))
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
