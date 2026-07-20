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
    ("Vanilla", 4655, "img/4655.jpg"),
    ("Raitra", 4947, "img/4947.jpg"),
    ("Noary", 4705, "img/4705.jpg");

INSERT INTO membre (nom, numero_etu) VALUES 
    ("Nady", 5055),
    ("Lili", 3999),
    ("Nelson", 3990),
    ("Zachary", 4900);

INSERT INTO categorie (nom_categorie) VALUES 
    ("plat"), 1
    ("boisson"), 2
    ("snack"), 3
    ("dessert"); 4

INSERT INTO produit (nom, id_categorie, prix_reference) VALUES 
    ("bolognaise", 1, 8000),
    ("tagliatelle", 1, 10000),
    ("carbonara", 1, 8000),
    ("saucisee fumée + tsaramaso", 1, 5000),
    ("akoho gasy rony", 1, 6000),

    ("coca", 2, 3000),
    ("jus garana", 2, 1000),
    ("jus papaye", 2, 1000),
    ("latte glacé", 2, 3000),
    ("ice tea", 2, 5000),

    ("chips", 3, 2500),
    ("brochette", 3, 300),
    ("pakopako", 3, 300),
    ("poulet", 3, 500),
    ("biscuit", 3, 500),

    ("glace", 4, 2000),
    ("salade de fruit", 4, 3000),
    ("creme renversée", 4, 2000),
    ("yaourt", 4, 2000),
    ("gauffre", 4, 2000);

INSERT INTO produit_membre (id_produit, id_membre, prix_vente, date_dispo) VALUES 
    (1, 10, 8000, '2026-07-20'),
    (3, 3, 8000, '2026-07-20'),
    (5, 4, 8000, '2026-07-20'),
    (9, 8, 8000, '2026-07-20'),
    (2, 6, 8000, '2026-07-20'),
    (4, 7, 8000, '2026-07-20'),
    (5, 6, 8000, '2026-07-20'),
    (10, 1, 8000, '2026-07-20'),
    (9, 2, 8000, '2026-07-20'),
    (3, 3, 8000, '2026-07-20'),
    (1, 10, 8000, '2026-07-20'),
    (3, 3, 8000, '2026-07-20'),
    (5, 4, 8000, '2026-07-20'),
    (9, 8, 8000, '2026-07-20'),
    (2, 6, 8000, '2026-07-20'),
    (4, 7, 8000, '2026-07-20'),
    (5, 6, 8000, '2026-07-20'),
    (10, 1, 8000, '2026-07-20'),
    (9, 2, 8000, '2026-07-20'),
    (3, 3, 8000, '2026-07-20')
;
UPDATE produit_membre
SET quantite_dispo = 10
WHERE prix_vente = 8000;

select m.nom as nom_membre, p.nom as nom_produit, p.prix_reference as prix from membre m join produit_membre pm on pm.id_membre=m.id_membre join produit p on p.id_produit=pm.id_produit;

ALTER TABLE vente MODIFY date DATE DEFAULT CURRENT_DATE;
ALTER TABLE vente MODIFY heure TIME DEFAULT CURRENT_TIMESTAMP;

