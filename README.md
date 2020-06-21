# **Présentation Projet CorpScan.**

> Le but du projet CorpScan est de fournir aux entreprises un outils de mesure du stress et des risques de Burn Out en leur sein. L'idée est de pouvoir prévenir les risques et d'intervenir avant un épuisement complet afin de garder un maximum de productivité et une bonne santé corporative.

![Logo Corpscan](https://raw.githubusercontent.com/PierreDenaes/Dow_J/master/images/corpscanLogo.png)

### Réalisation de la base de donnée

>Réalisation du Mcd Mld en suivant la méthode Merise.
- [x] tache compléte.
![Image of McdMld](https://raw.githubusercontent.com/PierreDenaes/Dow_J/master/images/mcdMld.webp)
>Réalisation de la base de donnée au format Sql avec Workbench.
- [x] tache compléte.
[link to db.sql!](https://github.com/PierreDenaes/Dow_J/blob/master/includes/db.sql)

### Création des fonctionnalités register et login.

>Mise en place de la fonctionnalités register, la demande était que pour la premiére connexion, l'utilisateur s'identifie à l'aide de son mail transmis préalablement par l'entreprise et donc présent en database puis crée son mot de passe de connexion.

* sécurisation du password avec password_hash (bcrypt).
* envoi d'un mail de confirmation de compte accompagné d'un token de validation. Celui ci se génére au moment de la premiére connexion et permet la validation du compte et sa mise en service.
* mise en place d'un remember token afin de garder une session connecté tant qu'elle ne l'est pas directement par l'utilisateur. 

**Installation de PHPMailer.**

### Réalisation du menu de navigation.

>Utilisation de Bootstrap pour partir sur une architecture responsive.

liste menu:

* statistiques -> user -> entreprise -> global admin
* questions -> questionnaire Mbi -> questionnaire Weekly
* entreprise
* utilisateur
* Droits 
* Théme
* Déconnexion 

- [x] tache compléte.

### Création de la fonctionnalité reset et forgot Password

> Mise en place de la fonctionnalité reset, la fonction n'est accessible qu'une fois l'utilisateur connecté.
la fonction remplace simplement le mot de passe en fonction de l'utilisateur connecté.

- [x] tache compléte.

> Mise en place de la fonctionnalité forgot, cette fonction sert en cas d'oublie de mot de passe. L'utilisateur peut demander en cas d'oublie de mot de passe et donc l'impossibilité de se connecter, une ré-initialisation de celui-ci.
Un mail de reboot est envoyé avec un token confirmant un accés temporaire au compte par link permettant de changer le mot de passe.

- [x] tache compléte.

> Formatage du mail de confirmation et d'activation de compte au format HTML.

- [x] tache compléte.

### Création des questionnaires MBI et Weekly

* mise en place d'un systéme de réponse par curseur avec Smiley réalisé en Javascript pour le questionnaire weekly.
- [x] tache compléte.
* écriture en dur des questions au format html.
- [x] tache compléte.
* Affichage des questions depuis la base de données
- [ ] tache compléte.

### Création de la fonctionnalité AddCsV Utilisateur et Entreprise.

> ajout de nouvelles entreprises et nouveaux utilisateurs a l'aide de fichier au format Csv. Vérification du format réalisé en Js puis inscription en base de donnée et renvoie du résultat en affichage direct.

- [x] tache compléte.

### Mise en place du systéme de graphique.

> ajout de google chart.js, mise en place des garphiques utlisateurs, entreprise, global admin.

- [x] tache compléte.

### Début d'attribution des droits

> isolation des menus et des fonctionnalités suivant le level de l'utilisateur déclaré en base de données.

* level 2 -> utilisateur
* level 3 -> entreprise
* level 4 -> Admin

- [x] tache compléte.
