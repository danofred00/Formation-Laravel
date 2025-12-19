<?php 
/**
 * ========================================
 * PAGE D'ACCUEIL - index.php
 * ========================================
 * 
 * C'est la page principale du portfolio.
 * Elle présente le développeur, ses compétences, projets et informations de contact.
 * 
 * STRUCTURE :
 * 1. Inclusion des constantes
 * 2. Définition des variables de page
 * 3. Structure HTML avec sections
 */

// ========================================
// INCLUSION DES CONSTANTES
// ========================================

/**
 * require_once : Inclut un fichier PHP
 * 
 * DIFF\u00c9RENCE entre require et include :
 * - require : Erreur fatale si le fichier n'existe pas (arrêt du script)
 * - include : Simple avertissement si le fichier n'existe pas (continue)
 * 
 * Le "_once" garantit qu'on n'inclut le fichier qu'une seule fois,
 * même si require_once est appelé plusieurs fois.
 * 
 * __DIR__ : Constante magique PHP qui contient le chemin du répertoire actuel
 * Cela permet d'avoir un chemin absolu fiable, peu importe d'où on exécute le script
 */
require_once __DIR__ . '/utils/constants.php';

// ========================================
// VARIABLES DE PAGE
// ========================================

/**
 * $title : Titre de la page affiché dans l'onglet du navigateur
 * Cette variable est utilisée dans components/head.php
 */
$title = "Daniel Leussa - Développeur Full Stack";

/**
 * $page : Identifiant de la page actuelle
 * Utilisé dans header.php pour la navigation conditionnelle
 */
$page = "index";
?>

<!DOCTYPE html>
<!-- 
    DOCTYPE : Déclaration du type de document HTML5
    Indique au navigateur comment interpréter le code
-->
<html lang="fr">
<!-- 
    lang="fr" : Indique que le contenu est en français
    Utile pour les lecteurs d'écran et les moteurs de recherche
-->

<?php 
/**
 * INCLUSION DU COMPOSANT HEAD
 * 
 * require : Inclut le fichier head.php
 * Ce fichier contient toutes les balises <head> (meta, title, css, js)
 * 
 * AVANTAGE : On ne répète pas le code, on le réutilise
 */
require __DIR__ . '/components/head.php'; 
?>
?> 

<body>
    <!-- 
        BALISE <body> : Contient tout le contenu visible de la page
    -->
    
    <?php 
    /**
     * INCLUSION DU COMPOSANT HEADER
     * Barre de navigation en haut de page
     */
    require __DIR__ . '/components/header.php'; 
    ?>

    <!-- ========================================
         SECTION HERO - Bannière d'accueil
         ======================================== -->
    <!-- 
        Section hero : Grande bannière en haut de page avec message d'accroche
        id="hero" : Identifiant unique pour le CSS et la navigation
    -->
    <section id="hero">
        <div class="hero-content">
            <!-- 
                <h2> : Titre de niveau 2 (hiérarchie : h1 > h2 > h3...)
                Le h1 est dans le header (nom du site), donc on utilise h2 ici
            -->
            <h2>Développeur Full Stack</h2>
            <p>Passionné par la création d'applications web modernes et performantes</p>
        </div>
    </section>

    <!-- ========================================
         SECTION À PROPOS
         ======================================== -->
    <section id="about">
        <div class="container">
            <!-- 
                La classe "container" centre le contenu et limite sa largeur
                Définie dans style.css : max-width: 1200px
            -->
            <h2>À propos de moi</h2>
            <p>Je suis Daniel Leussa, développeur Full Stack avec une expertise en développement web.
                Je crée des solutions digitales innovantes en utilisant des technologies modernes comme
                Laravel, PHP, JavaScript, et bien d'autres.</p>
        </div>
    </section>

    <!-- ========================================
         SECTION COMPÉTENCES
         ======================================== -->
    <section id="skills">
        <div class="container">
            <h2>Mes Compétences</h2>
            
            <!-- 
                GRID DE COMPÉTENCES
                La classe "skills-grid" utilise CSS Grid pour afficher les cartes
                en colonnes qui s'adaptent automatiquement à la taille de l'écran
            -->
            <div class="skills-grid">
                <!-- Carte 1 : Front-End -->
                <div class="skill-card">
                    <h3>Front-End</h3>
                    <ul>
                        <!-- 
                            <ul> : Liste non ordonnée (unordered list)
                            <li> : Élément de liste (list item)
                        -->
                        <li>HTML5 & CSS3</li>
                        <li>JavaScript</li>
                        <li>React</li>
                        <li>Vue.js</li>
                    </ul>
                </div>
                
                <!-- Carte 2 : Back-End -->
                <div class="skill-card">
                    <h3>Back-End</h3>
                    <ul>
                        <li>PHP</li>
                        <li>Laravel</li>
                        <li>Node.js</li>
                        <li>MySQL</li>
                    </ul>
                </div>
                
                <!-- Carte 3 : Outils -->
                <div class="skill-card">
                    <h3>Outils</h3>
                    <ul>
                        <li>Git & GitHub</li>
                        <li>Docker</li>
                        <li>VS Code</li>
                        <li>Postman</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- ========================================
         SECTION PROJETS
         ======================================== -->
        <div class="container">
            <h2>Mes Projets</h2>
            
            <!-- 
                GRID DE PROJETS
                Similaire à skills-grid, adapte automatiquement le nombre de colonnes
            -->
            <div class="projects-grid">
                <!-- Projet 1 -->
                <div class="project-card">
                    <h3>Application E-commerce</h3>
                    <p>Une plateforme de vente en ligne développée avec Laravel et Vue.js</p>
                </div>
                
                <!-- Projet 2 -->
                <div class="project-card">
                    <h3>Blog Personnel</h3>
                    <p>Un système de blog avec gestion de contenu et commentaires</p>
                </div>
                
                <!-- Projet 3 -->
                <div class="project-card">
                    <h3>API REST</h3>
                    <p>Une API complète pour la gestion de données avec Laravel</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ========================================
         SECTION CONTACT (Aperçu)
         ======================================== -->
    <section id="contact">
        <div class="container">
            <h2>Me Contacter</h2>
            
            <p style="text-align: center; margin-bottom: 2rem;">
                <!-- 
                    STYLES INLINE : style="..."
                    Applique des styles CSS directement sur l'élément
                    À utiliser avec parcimonie, préférer les classes CSS
                -->
                Vous avez un projet en tête ? N'hésitez pas à me contacter !
            </p>
            
            <div style="text-align: center;">
                <!-- 
                    LIEN VERS PAGE CONTACT
                    <a> : balise de lien (anchor)
                    href : destination du lien
                -->
                <a href="/006-portfolio/contact.php">
                    <!-- 
                        BOUTON
                        type="button" : indique que ce n'est pas un bouton de formulaire
                        Ce bouton est dans un <a>, donc cliquable comme un lien
                    -->
                    <button type="button">Aller à la page de contact</button>
                </a>
            </div>
        </div>
    </section>

    <?php 
    /**
     * INCLUSION DU COMPOSANT FOOTER
     * Pied de page avec copyright et année automatique
     */
    require __DIR__ . '/components/footer.php'; 
    ?>

</body>
</html>