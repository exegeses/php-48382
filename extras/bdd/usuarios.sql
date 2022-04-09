
-- -----------------------------------------------------
-- Table `catalogo2020`.`roles`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `catalogo2020`.`roles` ;

CREATE TABLE IF NOT EXISTS `catalogo2020`.`roles` (
  `idRol` TINYINT NOT NULL,
  `rol` VARCHAR(30) NOT NULL,
  PRIMARY KEY (`idRol`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `catalogo2020`.`usuarios`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `catalogo2020`.`usuarios` ;

CREATE TABLE IF NOT EXISTS `catalogo2020`.`usuarios` (
  `idUsuario` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(45) NOT NULL,
  `apellido` VARCHAR(45) NOT NULL,
  `email` VARCHAR(50) NOT NULL,
  `clave` VARCHAR(75) NOT NULL,
  `idRol` TINYINT NOT NULL,
  PRIMARY KEY (`idUsuario`),
  UNIQUE INDEX `email_UNIQUE` (`email` ASC) VISIBLE,
  INDEX `fk_roles_idx` (`idRol` ASC) VISIBLE,
  CONSTRAINT `fk_roles`
    FOREIGN KEY (`idRol`)
    REFERENCES `catalogo2020`.`roles` (`idRol`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

