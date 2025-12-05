**Income & Expenses Tracker
**
Gestion simple des finances personnelles – PHP & MySQL

**Description du projet
**
Ce projet consiste à construire une plateforme simple permettant aux utilisateurs de gérer leurs revenus, leurs dépenses, et d’obtenir une vue claire sur leur budget global.

Il s’agit d’un exercice destiné à pratiquer PHP (procédural), MySQL, la gestion des formulaires et les opérations CRUD.

**Objectifs pédagogiques
**
Manipuler PHP pour afficher, ajouter, modifier et supprimer des données.

Utiliser PDO pour se connecter à une base MySQL.

Apprendre à structurer un mini-projet web.

Comprendre la gestion des formulaires avec validation.

Mettre en place un tableau de bord regroupant des statistiques financières simples.

**Contexte**

Une startup locale souhaite une première version d’un outil de gestion financière personnelle.
Elle veut une solution simple, fonctionnelle, rapide à utiliser, basée uniquement sur PHP & MySQL.

Vous devez développer un tableau de bord financier permettant la gestion :

des revenus (incomes)

des dépenses (expenses)

d’un résumé général : total revenus, total dépenses, solde, données du mois en cours

**Fonctionnalités
****Base de données – SQL**

Vous devez créer un fichier database.sql contenant :

✔️ Création de la base de données
✔️ Table incomes

id (PRIMARY KEY)

amount (DECIMAL)

description (TEXT)

date (DATE)

created_at (TIMESTAMP)

✔️ Table expenses

id (PRIMARY KEY)

amount (DECIMAL)

description (TEXT)

date (DATE)

created_at (TIMESTAMP)

✔️ Contraintes

Types adaptés (DECIMAL, DATE…)

NOT NULL

DEFAULT CURRENT_TIMESTAMP

**CRUD – Incomes (Revenus)
**✔️ Afficher la liste des revenus

Un tableau HTML montrant : amount, description, date, actions.

✔️ Ajouter un revenu

Formulaire + validation + INSERT INTO incomes ...

✔️ Modifier un revenu

Formulaire pré-rempli + UPDATE incomes ...

✔️ Supprimer un revenu

Lien ou bouton + confirmation + DELETE FROM incomes WHERE id=...

✔️ Validation (obligatoire)

amount numérique et positif

date valide

description non vide

**CRUD – Expenses (Dépenses)
**
Les mêmes fonctionnalités que les revenus :

**Affichage dans un tableau
**
Ajout

Modification

Suppression

Validation des données

Dashboard

Un tableau de bord affichant :

✔️ Total des revenus
✔️ Total des dépenses
✔️ Solde = revenus – dépenses
✔️ Revenus et dépenses du mois en cours
✔️ Graphique simple
