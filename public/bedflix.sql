DROP DATABASE IF EXISTS Bedflix;
CREATE DATABASE IF NOT EXISTS Bedflix;

USE Bedflix;

CREATE TABLE IF NOT EXISTS ROLES(
	id_role INT PRIMARY KEY AUTO_INCREMENT NOT NULL, 
	libelle_role VARCHAR(25) NOT NULL UNIQUE
) Engine=InnoDB;

CREATE TABLE IF NOT EXISTS UTILISATEURS(
	id_utilisateur INT PRIMARY KEY AUTO_INCREMENT NOT NULL, 
	nom_utilisateur VARCHAR(25) NOT NULL,
	prenom_utilisateur VARCHAR(25) NOT NULL, 
	email_utilisateur VARCHAR(100) NOT NULL,
	pseudo_utilisateur VARCHAR(25) NOT NULL,
	mot_de_passe_utilisateur VARCHAR(60) NOT NULL,
	photo_profil_utilisateur VARCHAR(100) NOT NULL,
    id_role INT NOT NULL, 
	FOREIGN KEY(id_role) REFERENCES roles(id_role)
) Engine=InnoDB;

CREATE TABLE IF NOT EXISTS FILMS(
	id_film INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
	titre_film VARCHAR(50) NOT NULL,
	description_film TEXT NOT NULL,
	affiche_film VARCHAR(50) NOT NULL,
	lien_film VARCHAR(255) NOT NULL,
	duree_film DOUBLE(5, 2) NOT NULL
) Engine=InnoDB;

CREATE TABLE IF NOT EXISTS UTILISATEURS_FILMS(
	id_utilisateur INT NOT NULL, 
	id_film INT NOT NULL,
    PRIMARY KEY(id_utilisateur, id_film),
    FOREIGN KEY(id_utilisateur) REFERENCES UTILISATEURS(id_utilisateur),
    FOREIGN KEY(id_film) REFERENCES FILMS(id_film) 
) Engine=InnoDB;

CREATE TABLE IF NOT EXISTS CATEGORIES(
	id_categorie INT PRIMARY KEY AUTO_INCREMENT NOT NULL, 
	libelle_categorie VARCHAR(50) NOT NULL
) Engine=InnoDB;

CREATE TABLE IF NOT EXISTS FILMS_CATEGORIES(
	id_film INT NOT NULL,
	id_categorie INT NOT NULL,
    PRIMARY KEY(id_film, id_categorie), 
    FOREIGN KEY(id_film) REFERENCES FILMS(id_film), 
    FOREIGN KEY(id_categorie) REFERENCES CATEGORIES(id_categorie)
) Engine=InnoDB;

CREATE TABLE IF NOT EXISTS SERIES(
	id_serie INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
	titre_serie VARCHAR(50) NOT NULL,
	description_serie TEXT NOT NULL,
	affiche_serie VARCHAR(50) NOT NULL,
	lien_serie VARCHAR(255) NOT NULL
) Engine=InnoDB;

CREATE TABLE IF NOT EXISTS UTILISATEURS_SERIES(
	id_utilisateur INT NOT NULL, 
	id_serie INT NOT NULL,
    PRIMARY KEY(id_utilisateur, id_serie),
    FOREIGN KEY(id_utilisateur) REFERENCES UTILISATEURS(id_utilisateur),
    FOREIGN KEY(id_serie) REFERENCES SERIES(id_serie) 
) Engine=InnoDB;

CREATE TABLE IF NOT EXISTS SERIES_CATEGORIES(
	id_serie INT NOT NULL,
	id_categorie INT NOT NULL,
    PRIMARY KEY(id_serie, id_categorie), 
    FOREIGN KEY(id_serie) REFERENCES SERIES(id_serie)
) Engine=InnoDB;

CREATE TABLE IF NOT EXISTS SAISONS(
	id_saison INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
	numero_saison INT NOT NULL,
	titre_saison VARCHAR(25) NOT NULL, 
	FOREIGN KEY(id_serie) REFERENCES SERIES(id_serie)
) Engine=InnoDB;

CREATE TABLE IF NOT EXISTS EPISODES(
	id_episode INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
	numero_episode INT NOT NULL,
	titre_episode VARCHAR(25) NOT NULL, 
	duree_episode DOUBLE(5, 2) NOT NULL, 
	id_saison INT NOT NULL, 
	FOREIGN KEY(id_saison) REFERENCES SAISONS(id_saison)
) Engine=InnoDB;