-- MySQL Script generated by MySQL Workbench
-- 08/20/16 15:49:19
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema bdBugTracker
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema bdBugTracker
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `bdBugTracker` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;
USE `bdBugTracker` ;

-- -----------------------------------------------------
-- Table `bdBugTracker`.`projeto`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `bdBugTracker`.`projeto` (
  `idProjeto` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(45) NOT NULL,
  `plataforma` ENUM('Android', 'WebSite', 'Desktop') NOT NULL,
  `equipe` ENUM('Matheus Nogueira', 'Lucas de Paula', 'Arlen Mateus Mendes', 'Lucas Lopes Garcia') NOT NULL,
  `descricao` LONGTEXT NOT NULL,
  PRIMARY KEY (`idProjeto`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `bdBugTracker`.`erro`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `bdBugTracker`.`erro` (
  `idErro` INT NOT NULL,
  `nome` VARCHAR(45) NOT NULL,
  `tipo` ENUM('Interface', 'Erro de lógica', 'Erro de compilação', 'Erro de execução') NOT NULL,
  `descricao` LONGTEXT NOT NULL,
  `projeto_idProjeto` INT NOT NULL,
  PRIMARY KEY (`idErro`),
  INDEX `fk_erro_projeto1_idx` (`projeto_idProjeto` ASC),
  CONSTRAINT `fk_erro_projeto1`
    FOREIGN KEY (`projeto_idProjeto`)
    REFERENCES `bdBugTracker`.`projeto` (`idProjeto`)
    ON DELETE CASCADE
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `bdBugTracker`.`solucao`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `bdBugTracker`.`solucao` (
  `idSolucao` INT NOT NULL,
  `nome` VARCHAR(45) NOT NULL,
  `descricao` LONGTEXT NOT NULL,
  `desenvolvedor` VARCHAR(45) NOT NULL,
  `erro_idError` INT NOT NULL,
  PRIMARY KEY (`idSolucao`),
  INDEX `fk_solucao_erro1_idx` (`erro_idError` ASC),
  CONSTRAINT `fk_solucao_erro1`
    FOREIGN KEY (`erro_idError`)
    REFERENCES `bdBugTracker`.`erro` (`idErro`)
    ON DELETE CASCADE
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
