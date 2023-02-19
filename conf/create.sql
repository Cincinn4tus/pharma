-- phpMyAdmin SQL Dump
-- version 4.9.3
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le :  lun. 28 mars 2022 à 18:31
-- Version du serveur :  5.7.26
-- Version de PHP :  7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+02:00";
default-time-zone='+02:00'


-- création de la table pharm_offer

CREATE TABLE pharm_offer (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    position VARCHAR(255) NOT NULL,
    entitled VARCHAR(255) NOT NULL,
    dateStart DATE NOT NULL,
    contract VARCHAR(255) NOT NULL,
    salary VARCHAR(255) NOT NULL,
    description VARCHAR(255) NOT NULL,
    user_type INT(1) NOT NULL,
    date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- supprime la colonne 'user_id' de la table 'pharm_offer'
ALTER TABLE pharm_offer DROP COLUMN user_id;

-- ajoute à la table pharm_offer la colonne 'user_id' référencée à la colonne 'id' de la table 'pharm_user' avec la syntaxe innodb
ALTER TABLE pharm_offer ADD COLUMN user_id INT(6) UNSIGNED NOT NULL;
ALTER TABLE pharm_offer ADD FOREIGN KEY (user_id) REFERENCES pharm_user(id) ON DELETE CASCADE ON UPDATE CASCADE;









-- supprimer la table pharm_offer
DROP TABLE pharm_offer;



-- create table pharmemploi_user in phpmyadmin

CREATE TABLE DBXPHARMA.pharmemploi_user (
    id INT(11) NOT NULL AUTO_INCREMENT,
    user_avatar VARCHAR(320) DEFAULT '/assets/img/default_avatar.png',
    user_type INT(1) NOT NULL,
    email VARCHAR(320) NOT NULL,
    firstname VARCHAR(45) DEFAULT NULL,
    lastname VARCHAR(100) DEFAULT NULL,
    pwd VARCHAR(255) NOT NULL,
    birthday DATE NOT NULL,
    pseudo VARCHAR(60) NOT NULL,
    status TINYINT(4) NOT NULL DEFAULT '0',
    token CHAR(40) DEFAULT NULL,
    PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- add zip code and countryin pharmaemploi_user table with null default value
ALTER TABLE pharmemploi_user ADD COLUMN zip_code VARCHAR(10) DEFAULT NULL;
ALTER TABLE pharmemploi_user ADD COLUMN country CHAR(2) DEFAULT NULL;

-- renomme la table 'pharmemploi_candidate' en 'pharm_offer'
RENAME TABLE pharmemploi_offer TO pharm_offer;

-- rajoute une colonne 'user_type' dans la table 'pharm_offer' étant une clé étrangère de la table 'pharm_user' de la colonne 'user_type'
ALTER TABLE pharm_offer ADD COLUMN user_type INT(1) NOT NULL;
ALTER TABLE pharm_offer ADD FOREIGN KEY (user_type) REFERENCES pharm_user(user_type);

-- crée la table 'pharm_offer' avec les données du formulaire de création d'offre d'emploi de la page 'forms/addOffer.php'
CREATE TABLE pharm_offer (
    id INT(11) NOT NULL AUTO_INCREMENT,
    user_type INT(1) NOT NULL,
    location_title VARCHAR(320) NOT NULL,
    location_description TEXT NOT NULL,
    location_image VARCHAR(320) NOT NULL,
    PRIMARY KEY (id),
    FOREIGN KEY (user_type) REFERENCES pharm_user(user_type)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


-- supprimer la colonne 'user_type' de la table 'pharm_offer'
ALTER TABLE pharm_offer DROP COLUMN user_type;


--
-- Base de données :  `projetweb1A1`
--

-- --------------------------------------------------------

--
-- Structure de la table `iw_user`
--

CREATE TABLE `pharmemploi_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT (1),
  `user_avatar` varchar(320) DEFAULT ('/assets/img/default_avatar.png'),
  `user_role`int(1) NOT NULL,
  `email` varchar(320) NOT NULL,
  `firstname` varchar(45) DEFAULT NULL,
  `lastname` varchar(100) DEFAULT NULL,
  `pwd` varchar(255) NOT NULL,
  `country` char(2) NOT NULL,
  `birthday` date NOT NULL,
  `pseudo` varchar(60) NOT NULL,
  `token` char(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



CREATE TABLE `pharmemploi_proposal` (
    `id` int(11),
    `user` int(11),
    `location_title` VARCHAR(320) NOT NULL,
    `location_description` TEXT NOT NULL,
    `location_image` VARCHAR(320) NOT NULL
    );

CREATE TABLE `pharmemploi_user` (
  `id` int(11) NOT NULL,
  `user_avatar` varchar(320) DEFAULT ('/assets/img/default_avatar.png'),
  `user_role`int(1) NOT NULL,
  `email` varchar(320) NOT NULL,
  `firstname` varchar(45) DEFAULT NULL,
  `lastname` varchar(100) DEFAULT NULL,
  `pwd` varchar(255) NOT NULL,
  `country` char(2) NOT NULL,
  `birthday` date NOT NULL,
  `pseudo` varchar(60) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '0',
  `token` char(40) DEFAULT NULL
) ENGINE=MariaDB DEFAULT CHARSET=utf8;


--
-- Déchargement des données de la table `baudrien_user`
--

INSERT INTO `pharmemploi_user` (`id`, `type` `email`, `firstname`, `lastname`, `pwd`, `country`, `birthday`, `pseudo`, `status`, `date_inserted`, `date_updated`, `token`) VALUES
(1, 1, 'aligoumane@protonmail.com', 'Ali', 'Goumane', '$2y$10$oHnAf2HYOm8/kceE2PWQouUNNLZOaGykpddqJGZSeqrOFb93TqBKm', 'fr', '1986-11-29', 'Prof', 0, '2022-03-28 16:17:52', '2022-03-28 16:17:56', 'c6c6191be3b8868ac6ce1706a97e6afc70b19769');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `baudrien_user`
--
ALTER TABLE `pharmemploi_user`
  ADD type INT(1) NOT NULL;

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `baudrien_user`
--
ALTER TABLE `pharmemploi_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;


  
CREATE TABLE `pharmemploi_user` (
  `id` int(11) NOT NULL,
  `user_avatar` varchar(320) DEFAULT ('/assets/img/default_avatar.png'),
  `user_role`int(1) NOT NULL,
  `email` varchar(320) NOT NULL,
  `firstname` varchar(45) DEFAULT NULL,
  `lastname` varchar(100) DEFAULT NULL,
  `pwd` varchar(255) NOT NULL,
  `country` char(2) NOT NULL,
  `birthday` date NOT NULL,
  `pseudo` varchar(60) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '0',
  `token` char(40) DEFAULT NULL
)