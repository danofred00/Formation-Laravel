<?php
/**
 * ========================================
 * COMPOSANT HEAD - Entête HTML
 * ========================================
 * 
 * Ce fichier est un COMPOSANT réutilisable qui contient la balise <head> du HTML.
 * Il est inclus dans toutes les pages via require pour éviter la duplication de code.
 * 
 * PRINCIPE DRY (Don't Repeat Yourself) :
 * Au lieu de copier-coller ce code sur chaque page,
 * on l'écrit une seule fois et on l'inclut partout où c'est nécessaire.
 */
?>
<head>
    <!-- ===== ENCODAGE DES CARACTÈRES ===== -->
    <!-- 
        UTF-8 : Format universel qui gère tous les caractères (accents, emojis, etc.)
        Sans cette balise, les accents pourraient s'afficher incorrectement
    -->
    <meta charset="UTF-8">
    
    <!-- ===== RESPONSIVE DESIGN ===== -->
    <!-- 
        Cette balise rend le site responsive (adaptable aux mobiles/tablettes)
        viewport = zone d'affichage visible
        width=device-width : la largeur s'adapte à l'appareil
        initial-scale=1.0 : zoom initial à 100%
    -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- ===== TITRE DE LA PAGE ===== -->
    <title>
        <?php 
        /**
         * OPÉRATEUR TERNAIRE : condition ? valeur_si_vrai : valeur_si_faux
         * 
         * isset($title) : vérifie si la variable $title existe et n'est pas null
         * Si $title existe : on affiche sa valeur
         * Sinon : on affiche "Portfolio" par défaut
         * 
         * Exemple : Si dans index.php on définit $title = "Accueil",
         * alors <title>Accueil</title> sera généré
         */
        echo isset($title) ? $title : "Portfolio"; 
        ?>
    </title>
    
    <!-- ===== FEUILLE DE STYLES CSS ===== -->
    <!-- 
        Lien vers le fichier CSS qui contient tous les styles visuels du site
        /006-portfolio/ = chemin absolu depuis la racine du serveur web
    -->
    <link rel="stylesheet" href="/006-portfolio/assets/style.css">
    
    <!-- ===== FICHIER JAVASCRIPT ===== -->
    <!-- 
        Lien vers le fichier JS pour les interactions dynamiques
        Actuellement vide mais prêt pour de futures fonctionnalités
    -->
    <script src="/006-portfolio/assets/script.js"></script>
</head>