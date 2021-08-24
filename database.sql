CREATE DATABASE Supermarket;
USE Supermarket;

CREATE TABLE Caisse
(
	IDCaisse INT NOT NULL AUTO_INCREMENT,
	NumeroCaisse INT,
	PRIMARY KEY(IDCaisse)
)Engine=InnoDB;

CREATE TABLE Categorie
(
	IDCategorie INT NOT NULL AUTO_INCREMENT,
	NomCategorie VARCHAR(100),
	PRIMARY KEY(IDCategorie)
)Engine=InnoDB;

CREATE TABLE Produit
(
	IDProduit INT NOT NULL AUTO_INCREMENT,
	NomProduit VARCHAR(100),
	Prix Float,
	Source VARCHAR(100),
	IDCategorie INT,
	PRIMARY KEY(IDProduit),
	FOREIGN KEY(IDCategorie) REFERENCES Categorie(IDCategorie)
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

INSERT INTO ADMIN values(NULL,'root',sha1('azerty'));
INSERT INTO Utilisateur values(NULL,'user1',sha1('azerty'));

INSERT INTO Categorie VALUES(NULL, "Homme"),
	(NULL, "Femme"),
	(NULL, "Enfant");

INSERT INTO Produit VALUES(NULL, "Jean clair XL", "15.00", "big-03", 1), 
	(NULL, "Jean foncé XL", "25.00", "big-02",2), 
	(NULL, "Doudoune bleu", "35.00", "item-03",3), 
	(NULL, "Sac a main bleu clair", "45.00", "item-04",2), 
	(NULL, "Sac a main rose", "55.00", "item-05",2), 
	(NULL, "Pair de Converse", "65.00", "item-06",1),
	(NULL, "Boxer","20.00","Boxer",1),
	(NULL, "Capuche hiver","100.00","capuche_hiver",1),
	(NULL, "Chaussette","5.00","chaussette",3),
	(NULL, "Chaussure chantiers","30.00","chaussure_chantiers",3),
	(NULL, "Crmonie Rockabilly","125.00","Crmonie_Rockabilly",2),
	(NULL, "Dahalia soutien gorge","13.00","dahalia_soutien_gorge",2),
	(NULL, "Pantalon","80.00","pantalon",1),
	(NULL, "pull blanc & noir","200.00","pull_blanc_&_noir",1),
	(NULL, "Robe sans manches","300.00","robe_sans_manches",2);

INSERT INTO Caisse VALUES(NULL,"Caisse 1"),
	(NULL,"Caisse 2"),
	(NULL,"Caisse 3");