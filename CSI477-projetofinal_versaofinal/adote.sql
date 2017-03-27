SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';
-- -----------------------------------------------------
-- Schema adote
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `adote` DEFAULT CHARACTER SET utf8;
USE `adote`;

-- -----------------------------------------------------
-- Estrutura da tabela `animals`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `adote`.`animals` ;

CREATE TABLE IF NOT EXISTS `adote`.`animals` (
  `id` INT(10) NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(200) NOT NULL,
  `imagem` VARCHAR(60) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;

-- -----------------------------------------------------
-- Extraindo dados da tabela `animals`
-- -----------------------------------------------------
INSERT INTO `animals` (`id`, `nome`,`imagem`) VALUES
(1, 'Ola, eu sou a Lili, adoro brincar e seu chamego quero ganhar!','lili.jpg'),
(2, 'Opa, o Bob aqui, quer um cantinho feliz pra brincar!','bob.jpg'),
(3, 'Eu sou a Bia, branquinha que adora fazer gracinha!', 'bia.jpg'),
(4, 'Ei, eu sou o Max, gostaria de ser seu amigo protetor.','max.jpg'),
(5, 'Ola, eu sou o gatinho Ted, sou pequenino e preciso do seu carinho.','ted.jpg'),
(6, 'Ei amiginhos, aqui é o Pepe cheio de amor e carinho.','pepe.jpg');

-- -----------------------------------------------------
-- Estrutura da tabela `users`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `adote`.`users`;

CREATE TABLE IF NOT EXISTS `adote`.`users` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(45) NOT NULL,
  `telefone` VARCHAR(20) NOT NULL,
  `endereco` VARCHAR(50) NOT NULL,
  `email` VARCHAR(30) NOT NULL,
  `senha` VARCHAR(10) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;

--
-- Extraindo dados da tabela  `users`
--
INSERT INTO `users` (`id`, `nome`, `telefone`, `endereco`, `email`,`senha`) VALUES(1, 'Maria Silva', '98834-0989', 'Rua das Pedras, 30. Joao Monlevade', 'mariasilva@gmail.com', '4620');
INSERT INTO `users` (`id`, `nome`, `telefone`, `endereco`, `email`,`senha`) VALUES(2, 'José Santos', '98765-0978', 'Rua das Flores. 40. João Monlevade', 'josesantos@gmail.com', '4298');
INSERT INTO `users` (`id`, `nome`, `telefone`, `endereco`, `email`,`senha`) VALUES(3, 'João Nunnes', '99976-0432', 'Rua das Mattas, 50. João Monlevade', 'joaonunnes@gmail.com', '4631');

-- -----------------------------------------------------
-- Estrutura da tabela `administrators`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `adote`.`administrators`;

CREATE TABLE IF NOT EXISTS `adote`.`administrators` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `email` VARCHAR(30) NOT NULL,
  `senha` VARCHAR(10) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;

--
-- Extraindo dados da tabela  `administrators`
--
INSERT INTO `administrators` (`id`, `email`, `senha`) VALUES(1, 'grasielle@gmail.com', '123456');
INSERT INTO `administrators` (`id`, `email`, `senha`) VALUES(2, 'cleide@gmail.com', '123456');

-- -----------------------------------------------------
-- Estrutura da tabela `adoções`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `adote`.`adoptions` ;

CREATE TABLE IF NOT EXISTS `adote`.`adoptions` (
  `id` INT(10) NOT NULL AUTO_INCREMENT,
  `user_id` INT(10) NOT NULL,
  `animal_id` INT(10) NOT NULL,
  `data` DATETIME NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_adoptions_animals_idx` (`animal_id` ASC),
  INDEX `fk_adoptions_users_idx` (`user_id` ASC),
  CONSTRAINT `fk_adoptions_animals`
    FOREIGN KEY (`animal_id`)
    REFERENCES `adote`.`animals` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_adoptions_users`
    FOREIGN KEY (`user_id`)
    REFERENCES `adote`.`users` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE = '';
GRANT USAGE ON *.* TO sisadote;
DROP USER sisadote;
SET SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';
CREATE USER 'sisadote' IDENTIFIED BY '123456';

GRANT ALL ON `adote`.* TO 'sisadote';



ALTER TABLE users AUTO_INCREMENT = 100;
ALTER TABLE animals AUTO_INCREMENT = 100;
ALTER TABLE adoptions AUTO_INCREMENT = 100;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
