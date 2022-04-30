
-- -----------------------------------------------------
-- Table `catalogo2020`.`roles`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `catalogo2020`.`roles` ;

CREATE TABLE IF NOT EXISTS `catalogo2020`.`roles`
(
  `idRol` TINYINT NOT NULL primary key auto_increment,
  `rol` VARCHAR(30) NOT NULL
  )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `catalogo2020`.`usuarios`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `catalogo2020`.`usuarios` ;

CREATE TABLE IF NOT EXISTS `catalogo2020`.`usuarios` (
  `idUsuario` INT NOT NULL primary key AUTO_INCREMENT,
  `nombre` VARCHAR(45) NOT NULL,
  `apellido` VARCHAR(45) NOT NULL,
  `email` VARCHAR(50) NOT NULL,
  `clave` VARCHAR(75) NOT NULL,
  `idRol` TINYINT NOT NULL
)
ENGINE = InnoDB;


