
CREATE TABLE Autor(
  id INT(10) PRIMARY KEY AUTO_INCREMENT,
  jmeno VARCHAR(20) UNIQUE,
  prijmeni VARCHAR(20) UNIQUE
);

 CREATE TABLE Preklad(
  id INT(10) PRIMARY KEY AUTO_INCREMENT,
  jmeno VARCHAR(20) UNIQUE
);
 
CREATE TABLE Zanr(
  id INT(10) PRIMARY KEY AUTO_INCREMENT,
  nazev VARCHAR(20) UNIQUE,
  prijmeni VARCHAR(20) UNIQUE
);

CREATE TABLE Obdobi(
  id INT(10) PRIMARY KEY AUTO_INCREMENT,
  nazev VARCHAR(100) UNIQUE
);

CREATE TABLE User(
  id INT(10) PRIMARY KEY AUTO_INCREMENT,
  jmeno VARCHAR(20) UNIQUE,
  admin INT(1),
  email varchar(20),
  heslo VARCHAR(100)
);

CREATE TABLE Seznam(
  id INT(10) PRIMARY KEY AUTO_INCREMENT,
  nazev VARCHAR(20)
);

CREATE TABLE Kniha(
  id INT(10) PRIMARY KEY AUTO_INCREMENT,
  nazev VARCHAR(100) UNIQUE,
  zanr_id INT(10),
  autor_id INT(10),
  obdobi_id INT(10),
  preklad_id INT(10),
  FOREIGN KEY (zanr_id) REFERENCES Zanr(id),
  FOREIGN KEY (autor_id) REFERENCES Autor(id),
  FOREIGN KEY (obdobi_id) REFERENCES Obdobi(id),
  FOREIGN KEY (preklad_id) REFERENCES Preklad(id)
);

CREATE TABLE S2K(
  id INT(10) PRIMARY KEY AUTO_INCREMENT,
  seznam_id INT(10),
  kniha_id INT(10),
  FOREIGN KEY (seznam_id) REFERENCES Seznam(id),
  FOREIGN KEY (kniha_id) REFERENCES Kniha(id)
);
