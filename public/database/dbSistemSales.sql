CREATE TABLE tipoUser (
  idtipoUser INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  tipoUser int NULL,
  PRIMARY KEY(idtipoUser)
);

CREATE TABLE producto (
  codBarra CHAR(12) NOT NULL,
  nameProduct VARCHAR(50) NULL,
  descrip VARCHAR(20) NULL,
  price DECIMAL NULL,
  amount INTEGER UNSIGNED NULL,
  image LONGBLOB NULL,
  PRIMARY KEY(codBarra)
);

CREATE TABLE users (
  idUser INT NOT NULL AUTO_INCREMENT,
  name VARCHAR(100) NOT NULL,
  lastName VARCHAR(100) NOT NULL,
  email VARCHAR(50) NULL,
  phone CHAR(10) NOT NULL,
  userName VARCHAR(100) NOT NULL,
  pass VARCHAR(20) NOT NULL,
  tipoUser_idtipoUser INTEGER UNSIGNED NOT NULL,
  PRIMARY KEY(idUser),
  INDEX users_FKIndex1(tipoUser_idtipoUser)
);

CREATE TABLE userProduct (
  producto_codBarra CHAR(12) NOT NULL,
  users_idUser INT NOT NULL,
  PRIMARY KEY(producto_codBarra, users_idUser),
  INDEX users_has_producto_FKIndex1(users_idUser),
  INDEX users_has_producto_FKIndex2(producto_codBarra)
);

CREATE TABLE systemApart (
  idApart INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  users_idUser INT NOT NULL,
  producto_codBarra CHAR(12) NOT NULL,
  amountProduct INTEGER UNSIGNED NULL,
  PRIMARY KEY(idApart),
  INDEX systemApart_FKIndex1(producto_codBarra),
  INDEX systemApart_FKIndex2(users_idUser)
);

