CREATE DATABASE Supermarket;
USE Supermarket;

CREATE TABLE Caisse
(
	IDCaisse INT NOT NULL AUTO_INCREMENT,
	NumeroCaisse INT,
	PRIMARY KEY(IDCaisse)
)Engine=InnoDB;

CREATE TABLE Produit
(
	IDProduit INT NOT NULL AUTO_INCREMENT,
	NomProduit VARCHAR(100),
	Source VARCHAR(100),
	PRIMARY KEY(IDProduit)
)Engine=InnoDB;

CREATE TABLE Categorie
(
	IDCategorie INT NOT NULL AUTO_INCREMENT,
	NomCategorie VARCHAR(100),
	PRIMARY KEY(IDCategorie)
)Engine=InnoDB;

CREATE TABLE Achat
(
	IDAchat INT NOT NULL AUTO_INCREMENT,
	IDCaisse INT,
	IDProduit INT,
	Quantite INT,
	PRIMARY KEY(IDAchat),
	FOREIGN KEY(IDCaisse) REFERENCES Caisse(IDCaisse),
	FOREIGN KEY(IDProduit) REFERENCES Produit(IDProduit)
)Engine=InnoDB;

CREATE TABLE Admin
(
	IDAdmin INT NOT NULL AUTO_INCREMENT,
	Username VARCHAR(100),
	Password VARCHAR(100),
	PRIMARY KEY(IDAdmin)
)Engine=InnoDB;