SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

CREATE SCHEMA IF NOT EXISTS `pco` DEFAULT CHARACTER SET latin1 ;
USE `pco` ;

-- -----------------------------------------------------
-- Table `pco`.`curso`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `pco`.`curso` (
  `id_curso` INT(11) NOT NULL AUTO_INCREMENT ,
  `curso` VARCHAR(20) NOT NULL ,
  PRIMARY KEY (`id_curso`) )
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `pco`.`propina`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `pco`.`propina` (
  `id_propina` INT(11) NOT NULL AUTO_INCREMENT ,
  `valor_propina` INT(200) NOT NULL ,
  `multa_propina` INT(200) NOT NULL ,
  `ano_letivo` DATE NOT NULL ,
  PRIMARY KEY (`id_propina`) )
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `pco`.`turma`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `pco`.`turma` (
  `id_turma` INT(11) NOT NULL AUTO_INCREMENT ,
  `turma` INT(11) NOT NULL ,
  PRIMARY KEY (`id_turma`) )
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `pco`.`colegio`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `pco`.`colegio` (
  `id_colegio` INT(11) NOT NULL AUTO_INCREMENT ,
  `nome_cologio` VARCHAR(100) NOT NULL ,
  `codigopco` INT(20) NOT NULL ,
  PRIMARY KEY (`id_colegio`) )
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `pco`.`classe`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `pco`.`classe` (
  `id_classe` INT(11) NOT NULL AUTO_INCREMENT ,
  `classe` INT(11) NOT NULL ,
  PRIMARY KEY (`id_classe`) )
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `pco`.`aluno`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `pco`.`aluno` (
  `id_aluno` INT(11) NOT NULL AUTO_INCREMENT ,
  `nome_aluno` VARCHAR(100) NOT NULL ,
  `data_nascimento` DATE NOT NULL ,
  `sexo` VARCHAR(10) NOT NULL ,
  `numero_estudante` INT(11) NOT NULL ,
  `id_classe` INT(11) NULL DEFAULT NULL ,
  `id_curso` INT(11) NULL DEFAULT NULL ,
  `id_propina` INT(11) NULL DEFAULT NULL ,
  `id_turma` INT(11) NOT NULL ,
  `id_colegio` INT(11) NOT NULL ,
  PRIMARY KEY (`id_aluno`) ,
  INDEX `id_curso` (`id_curso` ASC) ,
  INDEX `id_propina` (`id_propina` ASC) ,
  INDEX `id_turma` (`id_turma` ASC) ,
  INDEX `aluno_ibfk_5` (`id_colegio` ASC) ,
  INDEX `id_classe` (`id_classe` ASC) ,
  CONSTRAINT `aluno_ibfk_2`
    FOREIGN KEY (`id_curso` )
    REFERENCES `pco`.`curso` (`id_curso` )
    ON DELETE CASCADE
    ON UPDATE NO ACTION,
  CONSTRAINT `aluno_ibfk_3`
    FOREIGN KEY (`id_propina` )
    REFERENCES `pco`.`propina` (`id_propina` )
    ON DELETE CASCADE
    ON UPDATE NO ACTION,
  CONSTRAINT `aluno_ibfk_4`
    FOREIGN KEY (`id_turma` )
    REFERENCES `pco`.`turma` (`id_turma` )
    ON DELETE CASCADE
    ON UPDATE NO ACTION,
  CONSTRAINT `aluno_ibfk_5`
    FOREIGN KEY (`id_colegio` )
    REFERENCES `pco`.`colegio` (`id_colegio` )
    ON DELETE CASCADE
    ON UPDATE NO ACTION,
  CONSTRAINT `aluno_ibfk_6`
    FOREIGN KEY (`id_classe` )
    REFERENCES `pco`.`classe` (`id_classe` )
    ON DELETE CASCADE
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `pco`.`banco`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `pco`.`banco` (
  `id_banco` INT(11) NOT NULL AUTO_INCREMENT ,
  `nome_banco` VARCHAR(200) NOT NULL ,
  PRIMARY KEY (`id_banco`) )
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `pco`.`cliente`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `pco`.`cliente` (
  `id_cliente` INT(11) NOT NULL AUTO_INCREMENT ,
  `nome_cliente` VARCHAR(50) NOT NULL ,
  `apelido` VARCHAR(50) NOT NULL ,
  `data_nascimento` DATE NOT NULL ,
  `sexo` VARCHAR(20) NOT NULL ,
  `estado_civel` VARCHAR(20) NOT NULL ,
  `numeroBI` VARCHAR(20) NOT NULL ,
  PRIMARY KEY (`id_cliente`) )
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `pco`.`conta`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `pco`.`conta` (
  `id_conta` INT(11) NOT NULL AUTO_INCREMENT ,
  `numerodaConta` INT(200) NOT NULL ,
  `saldo_disponivel` INT(255) NOT NULL ,
  `data_emissao` DATE NOT NULL ,
  `id_banco` INT(11) NOT NULL ,
  `id_colegio` INT(11) NOT NULL ,
  `id_cliente` INT(11) NOT NULL ,
  PRIMARY KEY (`id_conta`) ,
  INDEX `id_banco` (`id_banco` ASC) ,
  INDEX `id_cliente` (`id_cliente` ASC) ,
  INDEX `id_colegio` (`id_colegio` ASC) ,
  CONSTRAINT `conta_ibfk_1`
    FOREIGN KEY (`id_banco` )
    REFERENCES `pco`.`banco` (`id_banco` )
    ON DELETE CASCADE
    ON UPDATE NO ACTION,
  CONSTRAINT `conta_ibfk_2`
    FOREIGN KEY (`id_cliente` )
    REFERENCES `pco`.`cliente` (`id_cliente` )
    ON DELETE CASCADE
    ON UPDATE NO ACTION,
  CONSTRAINT `conta_ibfk_3`
    FOREIGN KEY (`id_colegio` )
    REFERENCES `pco`.`colegio` (`id_colegio` )
    ON DELETE CASCADE
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `pco`.`contacto`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `pco`.`contacto` (
  `id_contacto` INT(11) NOT NULL AUTO_INCREMENT ,
  `unitel` VARCHAR(50) NOT NULL ,
  `movicel` VARCHAR(50) NOT NULL ,
  `fixo` VARCHAR(50) NOT NULL ,
  `id_cliente` INT(11) NOT NULL ,
  `id_colegio` INT(11) NOT NULL ,
  `email` VARCHAR(100) NOT NULL ,
  PRIMARY KEY (`id_contacto`) ,
  INDEX `id_colegio` (`id_colegio` ASC) ,
  INDEX `id_cliente` (`id_cliente` ASC) ,
  CONSTRAINT `contacto_ibfk_1`
    FOREIGN KEY (`id_colegio` )
    REFERENCES `pco`.`colegio` (`id_colegio` )
    ON DELETE CASCADE
    ON UPDATE NO ACTION,
  CONSTRAINT `contacto_ibfk_2`
    FOREIGN KEY (`id_cliente` )
    REFERENCES `pco`.`cliente` (`id_cliente` )
    ON DELETE CASCADE
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `pco`.`convocatoria`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `pco`.`convocatoria` (
  `id_convocatoria` INT(11) NOT NULL AUTO_INCREMENT ,
  `informacao` TEXT NOT NULL ,
  `data` DATETIME NOT NULL ,
  `id_colegio` INT(11) NOT NULL ,
  `id_cliente` INT(11) NULL DEFAULT NULL ,
  PRIMARY KEY (`id_convocatoria`) ,
  INDEX `id_colegio` (`id_colegio` ASC) ,
  INDEX `id_cliente` (`id_cliente` ASC) ,
  CONSTRAINT `convocatoria_ibfk_1`
    FOREIGN KEY (`id_colegio` )
    REFERENCES `pco`.`colegio` (`id_colegio` )
    ON DELETE CASCADE
    ON UPDATE NO ACTION,
  CONSTRAINT `convocatoria_ibfk_2`
    FOREIGN KEY (`id_cliente` )
    REFERENCES `pco`.`cliente` (`id_cliente` )
    ON DELETE CASCADE
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `pco`.`endereco`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `pco`.`endereco` (
  `id_endereco` INT(11) NOT NULL AUTO_INCREMENT ,
  `provincia` VARCHAR(50) NOT NULL ,
  `municipio` VARCHAR(50) NOT NULL ,
  `bairro` VARCHAR(50) NOT NULL ,
  `rua` VARCHAR(50) NOT NULL ,
  `casa` VARCHAR(20) NOT NULL ,
  `id_colegio` INT(11) NOT NULL ,
  `id_cliente` INT(11) NOT NULL ,
  PRIMARY KEY (`id_endereco`) ,
  INDEX `id_colegio` (`id_colegio` ASC) ,
  INDEX `id_cliente` (`id_cliente` ASC) ,
  CONSTRAINT `endereco_ibfk_1`
    FOREIGN KEY (`id_colegio` )
    REFERENCES `pco`.`colegio` (`id_colegio` )
    ON DELETE CASCADE
    ON UPDATE NO ACTION,
  CONSTRAINT `endereco_ibfk_2`
    FOREIGN KEY (`id_cliente` )
    REFERENCES `pco`.`cliente` (`id_cliente` )
    ON DELETE CASCADE
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `pco`.`transferencia`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `pco`.`transferencia` (
  `id_transferencia` INT(11) NOT NULL AUTO_INCREMENT ,
  `nome_cliente` VARCHAR(50) NOT NULL ,
  `nconta_cliente` INT(30) NOT NULL ,
  `nconta_destino` INT(30) NOT NULL ,
  `valor_transferir` INT(255) NOT NULL ,
  `valor_multa` INT(255) NULL DEFAULT NULL ,
  `data` DATETIME NOT NULL ,
  `id_cliente` INT(11) NULL DEFAULT NULL ,
  `id_colegio` INT(11) NULL DEFAULT NULL ,
  PRIMARY KEY (`id_transferencia`) ,
  INDEX `id_cliente` (`id_cliente` ASC) ,
  INDEX `id_colegio` (`id_colegio` ASC) ,
  CONSTRAINT `transferencia_ibfk_1`
    FOREIGN KEY (`id_cliente` )
    REFERENCES `pco`.`cliente` (`id_cliente` )
    ON DELETE CASCADE
    ON UPDATE NO ACTION,
  CONSTRAINT `transferencia_ibfk_2`
    FOREIGN KEY (`id_colegio` )
    REFERENCES `pco`.`colegio` (`id_colegio` )
    ON DELETE CASCADE
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `pco`.`usuario`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `pco`.`usuario` (
  `id_usuario` INT(11) NOT NULL AUTO_INCREMENT ,
  `nome_usuario` VARCHAR(50) NOT NULL ,
  `email_usuario` VARCHAR(50) NOT NULL ,
  `codigopco` VARCHAR(20) NOT NULL ,
  `senha_usuario` VARCHAR(50) NOT NULL ,
  `nivel_acesso` INT(11) NOT NULL ,
  `status` INT(11) NOT NULL ,
  `id_cliente` INT(11) NULL DEFAULT NULL ,
  `id_colegio` INT(11) NULL DEFAULT NULL ,
  PRIMARY KEY (`id_usuario`) ,
  INDEX `id_cliente` (`id_cliente` ASC) ,
  INDEX `id_colegio` (`id_colegio` ASC) ,
  CONSTRAINT `usuario_ibfk_1`
    FOREIGN KEY (`id_cliente` )
    REFERENCES `pco`.`cliente` (`id_cliente` )
    ON DELETE CASCADE
    ON UPDATE NO ACTION,
  CONSTRAINT `usuario_ibfk_2`
    FOREIGN KEY (`id_colegio` )
    REFERENCES `pco`.`colegio` (`id_colegio` )
    ON DELETE CASCADE
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;

USE `pco` ;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
