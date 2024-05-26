# Projet de Blog Personnel - README

## Contexte du Projet

Notre entreprise spécialisée dans le développement web est à la recherche d'un développeur PHP 8 talentueux pour réaliser un projet de blog personnel. Ce projet consiste à développer un système de gestion de blog personnel avec des fonctionnalités avancées :

- **Ajout d'articles** avec des images, des titres, des sous-titres et des descriptions.
- **Mode administrateur** pour gérer le contenu du blog.
- **Commentaires et likes** pour les utilisateurs enregistrés.
- **Consultation des articles** pour les visiteurs non enregistrés.

Le développement doit utiliser la programmation orientée objet en PHP 8 et PDO pour la gestion de la base de données. UML est requis pour la modélisation, incluant des diagrammes de cas d'utilisation, des diagrammes de séquence et des diagrammes de classes.

## Compétences Requises

- **Figma** pour la conception de l'interface utilisateur.
- **HTML, CSS et JavaScript BOOTSTRAP** pour la création de l'interface utilisateur et la réactivité du blog.
- **PHP 8** avec une approche orientée objet.
- **PDO** pour la gestion de la base de données.
- **UML** pour la modélisation.
- **MySQL** pour la conception et manipulation de bases de données.
- **Syntaxe SQL de base** pour les opérations CRUD (Create, Read, Update, Delete).
- **Gestion de sessions, authentification et autorisation**.
- **XAMPP** pour l'installation et la configuration de l'environnement de développement PHP et MySQL.

## User Stories

- **Administrateur** : Ajouter, modifier et supprimer des articles, gérer les commentaires et les utilisateurs enregistrés.
- **Utilisateur enregistré** : Commenter et liker les articles, consulter et modifier les informations de profil.
- **Visiteur non enregistré** : Consulter les articles publiés.



## Modalités d'Évaluation

- **Soutenance** : Durée de 30 minutes, présentation du projet et réponses aux questions du formateur en groupe.


## Critères de Performance

- **Code PHP** : Doit respecter les bonnes pratiques de la programmation orientée

objet en PHP 8.
- **Diagrammes UML** : Doivent être clairs, complets et respecter les normes de modélisation.
- **Base de données** : Conception et manipulation doivent être efficaces et optimisées pour les opérations CRUD.
- **Site web** : Doit être fonctionnel, ergonomique et répondre aux exigences des user stories.
- **Interface utilisateur** : Doit être conforme au design Figma fourni.
- **Code** : Doit être testé et débogué avant la soumission.

## Installation

### Prérequis

- **XAMPP** (ou tout autre serveur local compatible avec PHP et MySQL)
- **Git** pour cloner le dépôt GitHub
- **Navigateur web** pour tester l'application

### Étapes d'Installation

1. **Cloner le dépôt GitHub**
   ```bash
   git clone https:https://github.com/anas0-1/Personal-Blog.git
   cd votre-repo
   ```

2. **Configurer la base de données**
   - Démarrer XAMPP et activer Apache et MySQL.
   - Créer une nouvelle base de données MySQL.
   - Importer le script SQL `database.sql` fourni dans le dépôt pour créer les tables nécessaires.
   
3. **Configurer l'application**
   - Renommer le fichier `config.example.php` en `config.php`.
   - Mettre à jour les paramètres de connexion à la base de données dans `config.php`.

4. **Lancer l'application**
   - Placer le projet dans le répertoire `htdocs` de XAMPP.
   - Ouvrir un navigateur web et accéder à `http://localhost/votre-repo`.

## Fonctionnalités

### Pour les administrateurs
- **Gestion des articles** : Ajouter, modifier, supprimer des articles.
- **Gestion des commentaires** : Valider ou supprimer les commentaires.
- **Gestion des utilisateurs** : Ajouter ou supprimer des utilisateurs.

### Pour les utilisateurs enregistrés
- **Commentaires** : Commenter les articles.
- **Likes** : Liker les articles.
- **Profil** : Consulter et modifier les informations de profil.

### Pour les visiteurs non enregistrés
- **Consultation des articles** : Accéder et lire les articles publiés.

## Structure du Projet

- **/config** : Contient le fichier de configuration de la base de données.
- **/public** : Contient les fichiers accessibles publiquement (HTML, CSS, JavaScript).
- **/src** : Contient le code source PHP, organisé par fonctionnalités.
- **/sql** : Contient le script SQL pour créer la base de données.
- **/uml** : Contient les diagrammes UML.

## Contributeurs

- **Nabil Ouhmida**
- **Anass zrigui**
- **Fatima Ghalmi**

## Licence

Ce projet est sous licence MIT. Consultez le fichier `LICENSE` pour plus de détails.

---

