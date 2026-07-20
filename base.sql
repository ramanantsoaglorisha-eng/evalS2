CREATE DATABASE site_communautaire;

USE site_communautaire;

CREATE TABLE membre (
    id_membre INT AUTO_INCREMENT PRIMARY KEY, 
    nom VARCHAR(100), 
    numero_etu INT, 
    image_profil VARCHAR(255)
);

CREATE TABLE categorie (
    id_categorie INT AUTO_INCREMENT PRIMARY KEY, 
    nom_categorie VARCHAR(100)
);

CREATE TABLE produit (
    id_produit INT AUTO_INCREMENT PRIMARY KEY, 
    nom VARCHAR(100),
    id_categorie INT,
    FOREIGN KEY (id_categorie) REFERENCES categorie(id_categorie),
    prix_reference INT
);

CREATE TABLE produit_membre (
    id_produit_membre INT AUTO_INCREMENT PRIMARY KEY, 
    id_produit INT,
    FOREIGN KEY (id_produit) REFERENCES produit(id_produit), 
    id_membre INT,
    FOREIGN KEY (id_membre) REFERENCES membre(id_membre),
    prix_vente INT,
    quantite_dispo INT,
    date_dispo DATE
);

CREATE TABLE vente (
    id_vente INT AUTO_INCREMENT PRIMARY KEY, 
    date DATE,
    heure TIME,
    id_produit_membre INT,
    FOREIGN KEY (id_produit_membre) REFERENCES produit_membre(id_produit_membre), 
    quantite INT
);

INSERT INTO membre (nom, numero_etu, image_profil) VALUES 
    ("Glorisha", 4665, "img/4665.jpg"),
    ("Diamondra", 4943, "img/4665.jpg"),
    ("Herindranto", 5073, "img/5073.jpg");