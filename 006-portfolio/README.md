# 📚 Portfolio - Projet d'Apprentissage PHP & Web

## 📋 Table des matières

1. [Description du projet](#-description-du-projet)
2. [Structure du projet](#-structure-du-projet)
3. [Notions et Concepts mis en œuvre](#-notions-et-concepts-mis-en-œuvre)
4. [Guide d'installation](#-guide-dinstallation)
5. [Personnalisation](#-personnalisation)
6. [Ressources d'apprentissage](#-ressources-dapprentissage)

---

## 🎯 Description du projet

Ce projet est un **site portfolio personnel** développé pour apprendre les bases du développement web. Il met en pratique les fondamentaux de **PHP**, **HTML**, **CSS** et l'architecture de projet web.

### Objectifs pédagogiques

- Comprendre la structure d'un projet web
- Apprendre les bases de PHP
- Maîtriser les composants réutilisables
- Pratiquer le CSS moderne (Flexbox, Grid)
- Découvrir le responsive design

---

## 📁 Structure du projet

```
006-portfolio/
│
├── index.php              # Page d'accueil
├── contact.php            # Page de contact
├── README.md              # Documentation du projet
│
├── assets/                # Ressources (CSS, JS, images)
│   ├── style.css         # Feuille de styles
│   ├── script.js         # Scripts JavaScript
│   └── images/           # Images du site
│
├── components/            # Composants réutilisables
│   ├── head.php          # Balise <head> HTML
│   ├── header.php        # En-tête et navigation
│   └── footer.php        # Pied de page
│
└── utils/                 # Utilitaires
    └── constants.php     # Constantes du site
```

---

## 🧠 Notions et Concepts mis en œuvre

### 1. PHP - Langage côté serveur

#### 1.1 Syntaxe de base

**Balises PHP**

```php
<?php
    // Code PHP ici
?>
```

**Affichage de contenu**

```php
<?php echo "Bonjour"; ?>
<?= "Bonjour" ?>  // Syntaxe courte (équivalent)
```

#### 1.2 Variables

Les variables en PHP commencent par le symbole `$` :

```php
$title = "Mon Portfolio";      // String (chaîne de caractères)
$age = 25;                     // Integer (nombre entier)
$prix = 19.99;                 // Float (nombre décimal)
$estActif = true;              // Boolean (vrai/faux)
```

**Points clés :**

- Sensibles à la casse : `$nom` ≠ `$Nom`
- Pas besoin de déclarer le type
- Le type est déterminé automatiquement

#### 1.3 Constantes

Les constantes sont des valeurs qui ne changent jamais :

```php
define("SITE_NAME", "Mon Portfolio");
define("EMAIL", "contact@email.com");
```

**Avantages :**

- ✅ Valeurs centralisées
- ✅ Protection contre les modifications accidentelles
- ✅ Convention : noms en MAJUSCULES
- ✅ Accessibles partout sans le symbole `$`

**Fichier : `utils/constants.php`**

#### 1.4 Inclusion de fichiers

Permet de réutiliser du code dans plusieurs pages :

```php
require 'fichier.php';        // Erreur fatale si fichier absent
require_once 'fichier.php';   // Inclut une seule fois

include 'fichier.php';        // Avertissement si fichier absent
include_once 'fichier.php';   // Inclut une seule fois
```

**Usage dans le projet :**

```php
require_once __DIR__ . '/utils/constants.php';
require __DIR__ . '/components/header.php';
```

**`__DIR__`** : Constante magique qui contient le chemin du répertoire actuel

#### 1.5 Structures conditionnelles

```php
if ($page === "contact") {
    echo "Page de contact";
} else {
    echo "Autre page";
}
```

**Opérateurs de comparaison :**

- `==` : égalité de valeur
- `===` : égalité stricte (valeur ET type)
- `!=` : différence
- `!==` : différence stricte
- `<`, `>`, `<=`, `>=` : comparaisons

**Exemple dans le projet :**

```php
// Dans header.php
if($page === "contact") {
    echo '<li><a href="/006-portfolio/index.php#">Accueil</a></li>';
}
```

#### 1.6 Fonctions PHP utiles

**`isset()`** : Vérifie si une variable existe et n'est pas null

```php
if (isset($title)) {
    echo $title;
}
```

**`date()`** : Obtient la date/heure actuelle

```php
$annee = date("Y");           // 2025
$date = date("d/m/Y");        // 19/12/2025
$heure = date("H:i");         // 14:30
```

**`echo`** : Affiche du contenu

```php
echo "Bonjour";
echo $variable;
echo CONSTANTE;
```

---

### 2. HTML - Structure du contenu

#### 2.1 Structure de base

```html
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Titre de la page</title>
</head>
<body>
    <!-- Contenu ici -->
</body>
</html>
```

#### 2.2 Balises sémantiques

Les balises sémantiques donnent du sens au contenu :

| Balise | Signification | Usage |
|--------|---------------|-------|
| `<header>` | En-tête | Navigation principale |
| `<nav>` | Navigation | Menus de navigation |
| `<section>` | Section | Groupes de contenu thématique |
| `<footer>` | Pied de page | Informations de fin |
| `<h1>` à `<h6>` | Titres | Hiérarchie des titres |
| `<p>` | Paragraphe | Blocs de texte |
| `<a>` | Lien | Liens hypertextes |

**Avantages :**

- ✅ Meilleur référencement (SEO)
- ✅ Accessibilité pour les lecteurs d'écran
- ✅ Code plus lisible

#### 2.3 Attributs HTML importants

**`id`** : Identifiant unique

```html
<section id="about">...</section>
```

Usage : Ancres de navigation, styles CSS spécifiques

**`class`** : Classe CSS (réutilisable)

```html
<div class="container">...</div>
```

Usage : Appliquer des styles à plusieurs éléments

**`href`** : Destination d'un lien

```html
<a href="/contact.php">Contact</a>
<a href="#about">À propos</a>  <!-- Ancre -->
```

**`target`** : Comportement d'ouverture

```html
<a href="https://google.com" target="_blank">Google</a>
```

`_blank` : Ouvre dans un nouvel onglet

**`alt`** : Texte alternatif pour les images

```html
<img src="photo.jpg" alt="Description de l'image">
```

Essentiel pour l'accessibilité et le SEO

#### 2.4 Formulaires

Structure d'un formulaire :

```html
<form action="traitement.php" method="post">
    <input type="text" name="nom" placeholder="Votre nom" required>
    <input type="email" name="email" placeholder="Votre email" required>
    <textarea name="message" rows="5"></textarea>
    <button type="submit">Envoyer</button>
</form>
```

**Types d'input :**

- `text` : Texte simple
- `email` : Email (validation automatique)
- `password` : Mot de passe (masqué)
- `number` : Nombres
- `tel` : Téléphone
- `date` : Date
- `checkbox` : Case à cocher
- `radio` : Bouton radio

**Méthodes HTTP :**

- `GET` : Données visibles dans l'URL (recherche, filtres)
- `POST` : Données cachées (formulaires sensibles)

---

### 3. CSS - Mise en forme visuelle

#### 3.1 Sélecteurs CSS

**Sélecteur d'élément**

```css
body { color: #333; }
h1 { font-size: 2rem; }
```

**Sélecteur de classe** (réutilisable)

```css
.container { max-width: 1200px; }
.skill-card { padding: 2rem; }
```

Usage HTML : `<div class="container">`

**Sélecteur d'ID** (unique)

```css
#hero { background: blue; }
#about { padding: 60px; }
```

Usage HTML : `<section id="hero">`

**Sélecteur universel**

```css
* { margin: 0; padding: 0; }
```

**Sélecteurs combinés**

```css
nav a { color: white; }          /* a dans nav */
.skill-card h3 { color: blue; }  /* h3 dans .skill-card */
```

**Pseudo-classes**

```css
a:hover { color: red; }          /* Au survol */
li:first-child { ... }           /* Premier élément */
li:last-child { ... }            /* Dernier élément */
section:nth-child(even) { ... }  /* Éléments pairs */
```

#### 3.2 Box Model (Modèle de boîte)

Chaque élément HTML est une boîte :

```
┌─────────────────────────────────┐
│         MARGIN (externe)        │
│  ┌───────────────────────────┐  │
│  │    BORDER (bordure)       │  │
│  │  ┌─────────────────────┐  │  │
│  │  │  PADDING (interne)  │  │  │
│  │  │  ┌───────────────┐  │  │  │
│  │  │  │   CONTENT     │  │  │  │
│  │  │  └───────────────┘  │  │  │
│  │  └─────────────────────┘  │  │
│  └───────────────────────────┘  │
└─────────────────────────────────┘
```

```css
.element {
    width: 300px;           /* Largeur du contenu */
    height: 200px;          /* Hauteur du contenu */
    padding: 20px;          /* Marge intérieure */
    border: 1px solid #000; /* Bordure */
    margin: 10px;           /* Marge extérieure */
}
```

**`box-sizing: border-box`** :

- Inclut padding et border dans la largeur
- Simplifie les calculs
- Recommandé pour tous les projets modernes

#### 3.3 Unités de mesure

| Unité | Type | Description | Exemple |
|-------|------|-------------|---------|
| `px` | Absolue | Pixels | `font-size: 16px;` |
| `%` | Relative | Pourcentage du parent | `width: 50%;` |
| `em` | Relative | Relatif à la taille de police du parent | `padding: 1.5em;` |
| `rem` | Relative | Relatif à la taille de police racine | `margin: 2rem;` |
| `vh` | Viewport | 1vh = 1% de la hauteur de l'écran | `height: 100vh;` |
| `vw` | Viewport | 1vw = 1% de la largeur de l'écran | `width: 50vw;` |

**Recommandations :**

- Police : `rem` (adaptatif)
- Espacement : `rem` ou `px`
- Largeurs de conteneurs : `px` ou `%`
- Responsive : `vw`, `vh`, `%`

#### 3.4 Couleurs

**Formats de couleurs :**

```css
/* Hexadécimal */
color: #333333;      /* Gris foncé */
color: #667eea;      /* Violet */

/* RGB (Rouge, Vert, Bleu) */
color: rgb(51, 51, 51);

/* RGBA (avec transparence) */
background: rgba(0, 0, 0, 0.5);  /* Noir à 50% */

/* Noms de couleurs */
color: white;
color: black;
```

#### 3.5 Flexbox - Mise en page flexible

Flexbox permet d'aligner facilement des éléments en ligne ou en colonne.

**Activation :**

```css
.container {
    display: flex;
}
```

**Propriétés du conteneur (parent) :**

```css
.container {
    display: flex;
    
    /* Direction */
    flex-direction: row;        /* Horizontal (défaut) */
    flex-direction: column;     /* Vertical */
    
    /* Alignement horizontal (axe principal) */
    justify-content: flex-start;    /* À gauche */
    justify-content: center;        /* Centré */
    justify-content: flex-end;      /* À droite */
    justify-content: space-between; /* Espace entre */
    justify-content: space-around;  /* Espace autour */
    
    /* Alignement vertical (axe secondaire) */
    align-items: flex-start;    /* En haut */
    align-items: center;        /* Centré */
    align-items: flex-end;      /* En bas */
    align-items: stretch;       /* Étiré */
    
    /* Espacement entre éléments */
    gap: 1rem;
}
```

**Exemple du projet :**

```css
nav {
    display: flex;
    justify-content: space-between;  /* Logo à gauche, menu à droite */
    align-items: center;             /* Alignés verticalement */
}
```

#### 3.6 CSS Grid - Grilles bidimensionnelles

Grid permet de créer des mises en page complexes en lignes ET colonnes.

**Activation :**

```css
.container {
    display: grid;
}
```

**Définition des colonnes :**

```css
.grid {
    display: grid;
    
    /* 3 colonnes égales */
    grid-template-columns: 1fr 1fr 1fr;
    
    /* Colonnes fixes */
    grid-template-columns: 200px 300px 200px;
    
    /* Colonnes responsives */
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    
    /* Espacement */
    gap: 2rem;              /* Espace entre les éléments */
}
```

**`repeat(auto-fit, minmax(250px, 1fr))` expliqué :**

- `repeat()` : Répète un motif
- `auto-fit` : Crée autant de colonnes que possible
- `minmax(250px, 1fr)` : Minimum 250px, maximum 1 fraction
- **Résultat** : Grid responsive qui s'adapte automatiquement

**Exemple du projet :**

```css
.skills-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 2rem;
}
```

Sur grand écran → 3-4 colonnes  
Sur petit écran → 1 colonne

#### 3.7 Responsive Design

Le responsive design adapte le site à toutes les tailles d'écran.

**Media Queries :**

```css
/* Styles de base (desktop) */
h1 { font-size: 3rem; }

/* Styles pour écrans ≤ 768px (tablettes/mobiles) */
@media (max-width: 768px) {
    h1 { font-size: 2rem; }
}
```

**Breakpoints courants :**

- `480px` : Petits mobiles
- `768px` : Tablettes
- `1024px` : Petits ordinateurs
- `1200px` : Desktop

**Meta viewport (obligatoire) :**

```html
<meta name="viewport" content="width=device-width, initial-scale=1.0">
```

#### 3.8 Transitions et animations

**Transitions** : Animer le changement d'une propriété

```css
.button {
    background: blue;
    transition: background 0.3s;  /* Propriété, durée */
}

.button:hover {
    background: red;  /* Change progressivement sur 0.3s */
}
```

**Transformations :**

```css
/* Déplacement */
transform: translateX(20px);      /* Horizontal */
transform: translateY(-10px);     /* Vertical */

/* Rotation */
transform: rotate(45deg);

/* Zoom */
transform: scale(1.2);            /* 120% */

/* Inclinaison */
transform: skew(10deg);
```

**Exemple du projet :**

```css
.project-card {
    transition: transform 0.3s;
}

.project-card:hover {
    transform: translateY(-5px);  /* Monte de 5px au survol */
}
```

#### 3.9 Propriétés CSS essentielles

**Texte :**

```css
color: #333;                    /* Couleur du texte */
font-size: 16px;                /* Taille de police */
font-family: Arial, sans-serif; /* Police de caractères */
font-weight: bold;              /* Épaisseur (normal, bold, 700) */
text-align: center;             /* Alignement (left, center, right) */
text-decoration: none;          /* Supprime le soulignement */
line-height: 1.6;               /* Hauteur de ligne (espacement) */
```

**Arrière-plan :**

```css
background-color: #f4f4f4;      /* Couleur unie */
background: linear-gradient(135deg, #667eea, #764ba2);  /* Dégradé */
```

**Bordures :**

```css
border: 1px solid #ddd;         /* Épaisseur, style, couleur */
border-radius: 10px;            /* Coins arrondis */
```

**Ombres :**

```css
/* Ombre de boîte */
box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
/* offset-x  offset-y  blur  spread  color */

/* Ombre de texte */
text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
```

**Affichage :**

```css
display: block;      /* Prend toute la largeur */
display: inline;     /* En ligne avec le texte */
display: none;       /* Caché */
display: flex;       /* Flexbox */
display: grid;       /* Grid */
```

**Position :**

```css
position: static;    /* Normal (défaut) */
position: relative;  /* Relatif à sa position normale */
position: absolute;  /* Relatif au parent positionné */
position: fixed;     /* Fixé dans la fenêtre */
position: sticky;    /* Normal puis fixe lors du scroll */
```

---

### 4. Architecture - Composants réutilisables

#### 4.1 Principe DRY (Don't Repeat Yourself)

**Problème :**

```php
<!-- index.php -->
<head>
    <meta charset="UTF-8">
    <title>Accueil</title>
    <!-- ... -->
</head>

<!-- contact.php -->
<head>
    <meta charset="UTF-8">
    <title>Contact</title>
    <!-- ... même code répété -->
</head>
```

❌ Code dupliqué → Difficile à maintenir

**Solution : Composants**

```php
<!-- components/head.php -->
<head>
    <meta charset="UTF-8">
    <title><?= isset($title) ? $title : "Portfolio" ?></title>
    <!-- ... -->
</head>

<!-- index.php -->
<?php $title = "Accueil"; ?>
<?php require 'components/head.php'; ?>

<!-- contact.php -->
<?php $title = "Contact"; ?>
<?php require 'components/head.php'; ?>
```

✅ Code écrit une fois, réutilisé partout

#### 4.2 Avantages des composants

1. **Maintenabilité** : Un changement = un seul endroit
2. **Cohérence** : Même structure partout
3. **Productivité** : Développement plus rapide
4. **Lisibilité** : Code mieux organisé

#### 4.3 Composants du projet

| Composant | Fichier | Rôle |
|-----------|---------|------|
| Head | `components/head.php` | Balises `<head>` (meta, title, CSS, JS) |
| Header | `components/header.php` | Barre de navigation |
| Footer | `components/footer.php` | Pied de page avec copyright |

#### 4.4 Variables et constantes centralisées

**Fichier `utils/constants.php` :**

```php
define("SITE_NAME", "Mon Portfolio");
define("CONTACT_EMAIL", "contact@email.com");
```

**Avantages :**

- ✅ Toutes les infos au même endroit
- ✅ Facile à modifier
- ✅ Évite les erreurs de saisie

---

### 5. Bonnes pratiques

#### 5.1 Conventions de nommage

**PHP :**

```php
$maVariable = "valeur";          // camelCase pour variables
define("MA_CONSTANTE", "val");   // UPPERCASE pour constantes
function maFonction() { }        // camelCase pour fonctions
```

**CSS :**

```css
.mon-element { }                 /* kebab-case pour classes */
#mon-identifiant { }             /* kebab-case pour IDs */
```

**Fichiers :**

```
index.php           // Minuscules
style.css           // Minuscules
MonComposant.php    // PascalCase (optionnel pour composants)
```

#### 5.2 Commentaires

**HTML :**

```html
<!-- Ceci est un commentaire -->
```

**PHP :**

```php
// Commentaire sur une ligne

/*
 * Commentaire
 * sur plusieurs lignes
 */

/**
 * Documentation PHPDoc
 * @param string $nom
 * @return void
 */
```

**CSS :**

```css
/* Commentaire CSS */

/**
 * Commentaire bloc
 * sur plusieurs lignes
 */
```

#### 5.3 Indentation et lisibilité

✅ **Bon :**

```php
<div class="container">
    <h1>Titre</h1>
    <p>Paragraphe</p>
</div>
```

❌ **Mauvais :**

```php
<div class="container">
<h1>Titre</h1>
<p>Paragraphe</p></div>
```

**Règles :**

- Utiliser 4 espaces ou 1 tabulation
- Un niveau d'indentation = un niveau de hiérarchie
- Espaces autour des opérateurs : `$a = $b + $c;`

#### 5.4 Sécurité de base

**Échappement HTML :**

```php
// ❌ Dangereux (vulnérable aux injections)
echo $_GET['nom'];

// ✅ Sécurisé
echo htmlspecialchars($_GET['nom'], ENT_QUOTES, 'UTF-8');
```

**Validation de formulaires :**

```php
// Vérifier qu'un champ existe et n'est pas vide
if (isset($_POST['email']) && !empty($_POST['email'])) {
    $email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
    if ($email) {
        // Email valide
    }
}
```

---

## 🚀 Guide d'installation

### Prérequis

- **Serveur web local** :
  - [XAMPP](https://www.apachefriends.org/) (Windows, Mac, Linux)
  - [WAMP](https://www.wampserver.com/) (Windows)
  - [MAMP](https://www.mamp.info/) (Mac)
  - [Laragon](https://laragon.org/) (Windows)

### Installation

1. **Télécharger le projet**

   ```
   Placer le dossier 006-portfolio dans :
   - XAMPP : C:\xampp\htdocs\
   - WAMP : C:\wamp64\www\
   - MAMP : /Applications/MAMP/htdocs/
   ```

2. **Démarrer le serveur**
   - Lancer XAMPP/WAMP/MAMP
   - Démarrer Apache

3. **Accéder au site**

   ```
   http://localhost/006-portfolio/index.php
   ```

---

## 🎨 Personnalisation

### 1. Modifier vos informations personnelles

**Fichier : `utils/constants.php`**

```php
define("SITE_NAME", "Votre Nom");
define("CONTACT_EMAIL", "votre.email@gmail.com");
define("CONTACT_PHONE", "+237 6XX XXX XXX");
define("CONTACT_ADDRESS", "Votre Ville, Pays");
define("CONTACT_GITHUB", "https://github.com/votre-username");
define("CONTACT_LINKEDIN", "https://linkedin.com/in/votre-profil");
define("CONTACT_FACEBOOK", "https://facebook.com/votre-profil");
```

### 2. Modifier les couleurs

**Fichier : `assets/style.css`**

```css
/* Couleur principale (violet) */
/* Remplacer #667eea par votre couleur */

/* Couleur secondaire (violet foncé) */
/* Remplacer #764ba2 par votre couleur */

/* Couleur du header */
/* Remplacer #2c3e50 par votre couleur */
```

**Outils de couleurs :**

- [Coolors.co](https://coolors.co/) : Générateur de palettes
- [Adobe Color](https://color.adobe.com/) : Roue chromatique

### 3. Ajouter vos projets

**Fichier : `index.php`, section `#projects`**

```html
<div class="project-card">
    <h3>Nom du projet</h3>
    <p>Description du projet</p>
</div>
```

### 4. Personnaliser les compétences

**Fichier : `index.php`, section `#skills`**

```html
<div class="skill-card">
    <h3>Catégorie</h3>
    <ul>
        <li>Compétence 1</li>
        <li>Compétence 2</li>
    </ul>
</div>
```

---

## 📚 Ressources d'apprentissage

### Documentation officielle

- **PHP** : [php.net](https://www.php.net/manual/fr/)
- **HTML** : [MDN Web Docs - HTML](https://developer.mozilla.org/fr/docs/Web/HTML)
- **CSS** : [MDN Web Docs - CSS](https://developer.mozilla.org/fr/docs/Web/CSS)

### Tutoriels recommandés

**PHP :**

- [Cours PHP - Pierre Giraud](https://www.pierre-giraud.com/php-mysql-apprendre-coder-cours/)
- [PHP.net - Tutorial](https://www.php.net/manual/fr/tutorial.php)

**HTML/CSS :**

- [OpenClassrooms - HTML5 et CSS3](https://openclassrooms.com/fr/courses/1603881-apprenez-a-creer-votre-site-web-avec-html5-et-css3)
- [CSS Tricks](https://css-tricks.com/) (en anglais)

**Flexbox :**

- [Flexbox Froggy](https://flexboxfroggy.com/#fr) (Jeu interactif)
- [Guide complet Flexbox](https://css-tricks.com/snippets/css/a-guide-to-flexbox/)

**CSS Grid :**

- [Grid Garden](https://cssgridgarden.com/#fr) (Jeu interactif)
- [Guide complet Grid](https://css-tricks.com/snippets/css/complete-guide-grid/)

### Outils de développement

- **Éditeurs de code** :
  - [Visual Studio Code](https://code.visualstudio.com/) (recommandé)
  - [Sublime Text](https://www.sublimetext.com/)
  - [PhpStorm](https://www.jetbrains.com/phpstorm/)

- **Navigateurs pour développeurs** :
  - Chrome DevTools (F12)
  - Firefox Developer Tools (F12)

- **Validation de code** :
  - [Validateur HTML W3C](https://validator.w3.org/)
  - [Validateur CSS W3C](https://jigsaw.w3.org/css-validator/)

### Communautés et aide

- [Stack Overflow](https://stackoverflow.com/) (questions/réponses)
- [MDN Web Docs](https://developer.mozilla.org/) (documentation)
- [Dev.to](https://dev.to/) (articles et tutoriels)

---

## 🎓 Exercices pratiques

### Niveau débutant

1. ✏️ Modifier les couleurs du site
2. ✏️ Changer le texte de la section "À propos"
3. ✏️ Ajouter un nouveau projet dans la section projets
4. ✏️ Modifier vos informations de contact

### Niveau intermédiaire

1. 🔨 Ajouter une nouvelle section (Formations, Expériences)
2. 🔨 Créer un nouveau composant (sidebar.php)
3. 🔨 Ajouter des icônes Font Awesome
4. 🔨 Implémenter un thème sombre/clair

### Niveau avancé

1. 🚀 Ajouter un traitement de formulaire en PHP
2. 🚀 Implémenter une base de données pour les projets
3. 🚀 Créer un système de blog
4. 🚀 Ajouter un panneau d'administration

---

## ✅ Checklist d'apprentissage

### PHP

- [ ] Je comprends la syntaxe PHP de base
- [ ] Je sais créer et utiliser des variables
- [ ] Je sais définir et utiliser des constantes
- [ ] Je comprends `require` et `include`
- [ ] Je maîtrise les conditions (`if`, `else`)
- [ ] Je sais utiliser les fonctions PHP (`date()`, `isset()`, `echo`)

### HTML

- [ ] Je connais la structure HTML de base
- [ ] Je comprends les balises sémantiques
- [ ] Je sais créer des liens et des ancres
- [ ] Je sais créer un formulaire
- [ ] Je comprends les attributs (`id`, `class`, `href`, etc.)

### CSS

- [ ] Je comprends les sélecteurs CSS
- [ ] Je maîtrise le Box Model
- [ ] Je connais les différentes unités (px, rem, %)
- [ ] Je sais utiliser Flexbox
- [ ] Je sais utiliser CSS Grid
- [ ] Je comprends les media queries (responsive)
- [ ] Je sais créer des transitions et animations

### Architecture

- [ ] Je comprends le principe DRY
- [ ] Je sais créer des composants réutilisables
- [ ] Je sais organiser un projet web
- [ ] Je comprends la séparation des responsabilités

---

## 📝 Notes importantes

### Chemins de fichiers

**Chemin absolu** (depuis la racine du serveur) :

```html
<link href="/006-portfolio/assets/style.css">
```

**Chemin relatif** (depuis le fichier actuel) :

```html
<link href="assets/style.css">
<link href="../assets/style.css">  <!-- Dossier parent -->
```

**En PHP avec `__DIR__`** :

```php
require __DIR__ . '/components/header.php';
```

### Encodage des caractères

Toujours utiliser UTF-8 pour supporter les accents :

```html
<meta charset="UTF-8">
```

```php
<?php
header('Content-Type: text/html; charset=utf-8');
?>
```

---

## 🐛 Résolution de problèmes courants

### Le site ne s'affiche pas

1. ✅ Vérifier que le serveur Apache est démarré
2. ✅ Vérifier l'URL : `http://localhost/006-portfolio/index.php`
3. ✅ Vérifier que le dossier est dans `htdocs` (ou équivalent)

### Les styles CSS ne s'appliquent pas

1. ✅ Vérifier le chemin dans `<link>` du fichier head.php
2. ✅ Vider le cache du navigateur (Ctrl+F5)
3. ✅ Vérifier la console du navigateur (F12)

### Erreur "Cannot modify header information"

- ❌ Il y a du contenu avant `<?php`
- ✅ Supprimer les espaces/sauts de ligne avant `<?php`

### Les accents s'affichent mal

- ✅ Vérifier `<meta charset="UTF-8">` dans le head
- ✅ Enregistrer les fichiers en UTF-8 (paramètre de l'éditeur)

---

## 📄 Licence

Ce projet est à usage éducatif. Vous êtes libre de le modifier et de l'utiliser pour votre apprentissage.

---

## 🤝 Contributions

Ce projet est destiné à l'apprentissage. N'hésitez pas à :

- Poser des questions
- Suggérer des améliorations
- Partager vos versions personnalisées

---

## 📧 Contact

Pour toute question sur ce projet pédagogique, contactez votre formateur.

---

**Bon apprentissage ! 🎓💻**
