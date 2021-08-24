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
	Prix Float,
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
	Password VARCHAR(41),
	PRIMARY KEY(IDAdmin)
)Engine=InnoDB;

CREATE TABLE Utilisateur
(
	IDUtilisateur INT NOT NULL AUTO_INCREMENT,
	Username VARCHAR(100),
	Password VARCHAR(41),
	PRIMARY KEY(IDUtilisateur)
)Engine=InnoDB;
INSERT INTO Produit VALUES(NULL, "Jean clair XL", "15.00", ""), 
	(NULL, "Jean foncé XL", "25.00", ""), 
	(NULL, "Doudoune bleu", "35.00", ""), 
	(NULL, "Sac a main bleu clair", "45.00", ""), 
	(NULL, "Sac a main rose", "55.00", ""), 
	(NULL, "Pair de Converse", "65.00", "");

INSERT INTO ADMIN values(NULL,'root',sha1('azerty'));