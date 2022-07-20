
CREATE TABLE IF NOT EXISTS `Спортсмены` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `ФИО` VARCHAR(60) NOT NULL,
  `Email` VARCHAR(45) NOT NULL,
  `Телефон` VARCHAR(12) NOT NULL,
  `Дата рождения` DATE NOT NULL,
  `Возраст` INT NOT NULL,
  `Дата и время создания записи` DATETIME(2) NOT NULL,
  `Номер паспорта` INT NOT NULL,
  `Среднее место по соревнованиям` INT NOT NULL,
  `Биография` VARCHAR(256) NOT NULL,
  `Видеопрезентация` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id`))
