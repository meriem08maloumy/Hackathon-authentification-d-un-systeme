# Projet : Système d'Authentification Sécurisé en PHP

Ce projet est un système complet d'authentification développé en PHP avec MySQL. Il permet aux utilisateurs de s'enregistrer, **se connecter, **se déconnecter, tout en appliquant les **bonnes pratiques de sécurité comme le hachage des mots de passe et la protection contre les injections SQL.

## Structure des fichiers

<img src="img/Structure.png "width="600">

## Fonctionnalités

-  Inscription sécurisée des utilisateurs
-  Connexion/déconnexion avec sessions
-  Gestion des erreurs (messages en cas d'erreur)
-  Hachage des mots de passe avec password_hash()
-  Vérification sécurisée avec password_verify()
-  Protection contre l'injection SQL avec PDO et prepared statements
-  Code clair, modulaire et bien commenté

## Technologies utilisées

- PHP (>=7.4)
- MySQL
- HTML / Formulaires
- css
- Sessions PHP
- PDO (PHP Data Objects)


## Base de données (SQL)


CREATE DATABASE authentification;

USE authentification;

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL
);
 ## Comment exécuter l'application :

1. Installer XAMPP/WAMP/MAMP
pour lancer le serveur local.


2. Créer la base de données
en utilisant la requête SQL fournie ci-dessus dans phpMyAdmin.


3. Placer les fichiers PHP
dans le dossier htdocs (si vous utilisez XAMPP).


4. Accéder à l'application
via votre navigateur à l’adresse :
localhost/signup.php
pour commencer l'inscription



## Auteur

Ce projet a été réalisé par Ait khouya lahcen malak,Benrahma Oumaima ,Riame kawtar,Maloumy Meriem dans le cadre d’un devoir en PHP.