-- supprimer la table pharmemploi_user (elle n'est plus utilisée)

DROP TABLE IF EXISTS pharm_user;




-- créer la table pharm_user avec les champs id, avatar, role, email, phone, zip_code, city, firstname, lastname, pwd, birthday, pseudo, status, token

CREATE table pharm_user (
id int(11) NOT NULL AUTO_INCREMENT,
avatar varchar(320) DEFAULT ('/assets/img/default_avatar.png'),
role int(1) NOT NULL,
email varchar(320) NOT NULL,
phone varchar(45) DEFAULT NULL,
zip_code int(5) DEFAULT NULL,
city varchar(100) DEFAULT NULL,
firstname varchar(45) DEFAULT NULL,
lastname varchar(100) DEFAULT NULL,
pwd varchar(255) NOT NULL,
birthday date NOT NULL,
pseudo varchar(60) NOT NULL,
status tinyint(4) NOT NULL DEFAULT '0',
token char(40) DEFAULT NULL,
PRIMARY KEY (id),
gender int(1)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- renomme la colonne avatar en user_avatar

ALTER TABLE pharm_user CHANGE role user_type INT(1);








-- créer la table des offres avec les champs id, user, title, description, type, date, status (user = clé étrangère vers pharm_user id)

CREATE table pharm_offer (
id int(11) NOT NULL AUTO_INCREMENT,
user int(11) NOT NULL,
title varchar(320) NOT NULL,
description text NOT NULL,
type varchar(45) NOT NULL,
date date NOT NULL,
status tinyint(4) NOT NULL DEFAULT '0',
PRIMARY KEY (id),
FOREIGN KEY (user) REFERENCES pharm_user(id)
) ENGINE=MariaDB DEFAULT CHARSET=utf8;

-- ajoute la colonne cv à la table pharm_user

ALTER TABLE pharm_user ADD COLUMN cv varchar(320) DEFAULT NULL;



