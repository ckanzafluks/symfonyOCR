symfonyOCR
==========

A Symfony project created on February 22, 2018, 9:30 am.

Lancer notre serveur :
php bin/console server:run

Installeur d'assets :
php bin/console assets:install

Générer un bundle :
php bin/console generate:bundle

Installer le générateur de bundle :
composer require sensio/generator-bundle

Créer une base de données
php bin/console doctrine:database:create

vider le cache
php bin/console cache:clear --no-warmup 

Charger les autoload
composer dump-autoload

Créer une bdd depuis le fichier de config yaml
php bin/console doctrine:database:create

Générer les entités :
php bin/console doctrine:generate:entity

Générer les entités en prenant en compte les nouveaux attributs dans la classe
php bin/console doctrine:generate:entities

Générer les tables via un dump
php bin/console doctrine:schema:update --dump-sql

Forcer une MAJ
php bin/console doctrine:schema:update --force


















