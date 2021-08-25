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
	Description TEXT,
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

INSERT INTO Produit VALUES(NULL, "Jean clair XL", "15.00", "big-03", 1,"Une très belle tombée pour ce tailleur, veste chic à longues fentes pour le confort de bouger et sa jupe droite à longues fentes au milieu devant et derrière.
Coloris gris-vert."), 
	(NULL, "Jean foncé XL", "25.00", "big-02",2,"Composition: 92% coton, 6% polyester, 2% élasthanne. Matière: Denim. Contient des éléments non-textiles d'origine animale: Oui. Conseils d'entretien: Ne pas mettre au sèche-linge, lavage en machine à 30°C"), 
	(NULL, "Doudoune bleu", "35.00", "item-03",3,"Cette doudoune courte droite sans manches Tommy Hilfiger en nylon matelassé, se pare d'une capuche surmontée de liens de serrage sur un col montant, d'une fermeture à glissière, de 2 poches en biais zippées sur l'avant et du logo cousu sur le côté gauche de la poitrine."), 
	(NULL, "Sac a main bleu clair", "45.00", "item-04",2,"Sac baguette Danse Lente en cuir. Anse en chaîne pour porté épaule. Ouverture sur le dessus. Rangement intérieur. Griffe sur le devant"), 
	(NULL, "Sac a main rose", "55.00", "item-05",2,"Sac besace rectangulaire Danse Lente en cuir souple tressé. Anse porté main ou épaule. 2 petites lanières à nouer en fermeture. Doublure coton à bouton aimanté. Housse de rangement"), 
	(NULL, "Pair de Converse", "65.00", "item-06",1,"Parfaite pour un style décontracté ou habillé, cette Chuck classique en toile est indispensable à toute garde-robe. Nous avons aussi adouci la doublure et les coutures, pour un confort optimal tout au long de la journée, tous les jours."),
	(NULL, "Boxer","20.00","Boxer",1,"Le boxer ou boxer short (littéralement short du boxeur) est un type de sous-vêtement qui, s'il peut être porté par les femmes, est principalement masculin. Il n’est pas à confondre avec le shorty, exclusivement porté par les femmes"),
	(NULL, "Capuche hiver","100.00","capuche_hiver",1,"Un choix unique de Sweat capuche homme pour hiver disponible dans notre magasin. Codes promo, ventes flash, livraison offerte, trouvez le produit de vos manches."),
	(NULL, "Chaussette","5.00","chaussette",3,"Une chaussette est un bas qui s'arrête à mi-jambe ou à la cheville et se porte à l'intérieur d'une chaussure. Le mot signifie petite chausse. Les chaussettes vont généralement par paire et sans différences entre le pied droit et le pied gauche, sauf pour certains usages techniques. Pour la pratique du sport en plein air, notamment le football ou le rugby, la chaussette longue est souvent utilisée. La socquette est une variante plus courte de la chaussette."),
	(NULL, "Chaussure chantiers","30.00","chaussure_chantiers",3,"Il s'agit également d'un accessoire de mode qui vêt les femmes comme les hommes. Le terme chaussure dérive du verbe chausser, issu du latin calceare « mettre des souliers ». La plus vieille chaussure du monde a 5500 ans et a été découverte dans une grotte en Arménie."),
	(NULL, "Crmonie Rockabilly","125.00","Crmonie_Rockabilly",2," Femme Robe Femmes dames robe de demoiselle d'honneur magnifique en mousseline de soie, super doux faire cette robe fluide et élégante. Sans manche et sans dos, bretelle spaghetti ajustable entrecroisée dans le dos, fermeture à glissière au dos avec fermoir. Robe 2 couches, 1 couche en mousseline et 1 doublure en satin. Sensation de toucher lisse, très agréable à porter. Parfait pour soirée,"),
	(NULL, "Dahalia soutien gorge","13.00","dahalia_soutien_gorge",2,"Soutien-gorge push-up LA PERLA Petit Macramé en maille microfibre extensible d'une douceur exceptionnelle. Luxueuse et raffinée, cette ligne délicate sublime la silhouette en associant des matières nobles à des détails délicieusement ajourés. La marque nous prouve une fois de plus son savoir-faire inimitable grâce à une parfaite maîtrise de l'art précieux du macramé. Les bonnets à coques intégrées et coussinets amovibles offrent un galbe parfait et un maintien de la poitrine optimal. Les broderies en arabesque qui ornent ce modèle apportent encore plus de volume à la pièce. Bretelles légèrement extensibles et réglables."),
	(NULL, "Pantalon","80.00","pantalon",1,"Historiquement, l'usage du pantalon s'est développé avec la domestication du cheval, étant indispensable pour le monter1. Le pantalon moderne sera adopté vers 1850 sous le surnom tuyau de poêle. Il n’évolue que sur des détails depuis comme l’adjonction d’un revers sous l’impulsion d'Édouard VII du Royaume-Uni en 1909, par exemple. C’est le sport qui en popularisera le port chez les femmes"),
	(NULL, "pull blanc & noir","200.00","pull_blanc_&_noir",1,"Un pull-over, un chandail ou encore un tricot est un vêtement tricoté qui couvre les épaules, le dos, le torse et surtout les bras. Il est généralement en laine, parfois en d'autres fibres textiles."),
	(NULL, "Robe sans manches","300.00","robe_sans_manches",2,"Une robe est un vêtement qui couvre le corps d'une seule pièce allant des épaules aux jambes. Suivant la matière utilisée, elle s'enfile par la tête ou les pieds, et comprend ou non des ouvertures supplémentaires (dos, devant, côté) permettant de l'ajuster ensuite plus ou moins près du corps, par un laçage, des boutons, agrafes, fermetures éclair, etc.");

INSERT INTO Caisse VALUES(NULL,"Caisse 1"),
	(NULL,"Caisse 2"),
	(NULL,"Caisse 3");