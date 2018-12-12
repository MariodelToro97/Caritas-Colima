
SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
DROP SCHEMA IF EXISTS `mydb` ;

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `mydb` DEFAULT CHARACTER SET utf8 ;
SHOW WARNINGS;
USE `mydb` ;

-- -----------------------------------------------------
-- Table `Actividades`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `Actividades` ;

SHOW WARNINGS;
CREATE TABLE IF NOT EXISTS `Actividades` (
  `idActividades` INT NOT NULL AUTO_INCREMENT,
  `idInstitucion` INT NOT NULL,
  `fechaActividad` DATE NOT NULL,
  `asistentesActividad` INT NOT NULL,
  `despensasActividad` INT NOT NULL,
  `actividadExtra` VARCHAR(1000) NULL,
  `institucionUno` INT NOT NULL,
  `institucionDos` INT NULL,
  `voluntarioActividad` VARCHAR(100) NULL,
  `actividadUno` VARCHAR(1000) NOT NULL,
  `actividadDos` VARCHAR(1000) NULL,
  PRIMARY KEY (`idActividades`))
ENGINE = InnoDB;

SHOW WARNINGS;
CREATE UNIQUE INDEX `idActividades_UNIQUE` ON `Actividades` (`idActividades` ASC);

SHOW WARNINGS;

-- -----------------------------------------------------
-- Table `Beneficiarios`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `Beneficiarios` ;

SHOW WARNINGS;
CREATE TABLE IF NOT EXISTS `Beneficiarios` (
  `idBeneficiarios` INT NOT NULL,
  `Nombre` VARCHAR(50) NOT NULL,
  `tipoUsuario` CHAR(1) NULL,
  PRIMARY KEY (`idBeneficiarios`))
ENGINE = InnoDB;

SHOW WARNINGS;
CREATE UNIQUE INDEX `idBeneficiarios_UNIQUE` ON `Beneficiarios` (`idBeneficiarios` ASC);

SHOW WARNINGS;

-- -----------------------------------------------------
-- Table `DetalleBeneficiarios`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `DetalleBeneficiarios` ;

SHOW WARNINGS;
CREATE TABLE IF NOT EXISTS `DetalleBeneficiarios` (
  `idBeneficiarios` INT NOT NULL,
  `idActividad` INT NOT NULL)
ENGINE = InnoDB;

SHOW WARNINGS;

-- -----------------------------------------------------
-- Table `Instituciones`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `Instituciones` ;

SHOW WARNINGS;
CREATE TABLE IF NOT EXISTS `Instituciones` (
  `idInstituciones` INT NOT NULL AUTO_INCREMENT,
  `nombreInstitucion` VARCHAR(100) NOT NULL,
  PRIMARY KEY (`idInstituciones`))
ENGINE = InnoDB;

SHOW WARNINGS;
CREATE UNIQUE INDEX `idInstituciones_UNIQUE` ON `Instituciones` (`idInstituciones` ASC);

SHOW WARNINGS;

-- -----------------------------------------------------
-- Table `Usuarios`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `Usuarios` ;

SHOW WARNINGS;
CREATE TABLE IF NOT EXISTS `Usuarios` (
  `idUsuarios` INT NOT NULL,
  `Contrasena` VARCHAR(25) NULL,
  PRIMARY KEY (`idUsuarios`))
ENGINE = InnoDB;

SHOW WARNINGS;
CREATE UNIQUE INDEX `idUsuarios_UNIQUE` ON `Usuarios` (`idUsuarios` ASC);

SHOW WARNINGS;

SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
