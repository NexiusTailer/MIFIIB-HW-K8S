CREATE DATABASE IF NOT EXISTS users;
CREATE USER 'user'@'%' IDENTIFIED BY 'tR28V7wGyt';
GRANT ALL PRIVILEGES ON *.* TO 'user'@'%'
WITH GRANT OPTION;

FLUSH PRIVILEGES;

USE users;

CREATE TABLE IF NOT EXISTS person (
  id INT(11) NOT NULL AUTO_INCREMENT,
  name VARCHAR(32) NOT NULL,
  surname VARCHAR(32) NOT NULL,
  PRIMARY KEY (id)
);

INSERT INTO
  person (id, name, surname)
VALUES
  (1, 'Fred', 'Durst'),
  (2, 'John', 'Otto'),
  (3, 'Wes', 'Borland'),
  (4, 'Sam', 'Rivers');
