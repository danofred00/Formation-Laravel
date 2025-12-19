<?php
/**
 * ========================================
 * COMPOSANT HEADER - En-tête et Navigation
 * ========================================
 * 
 * Ce composant contient la barre de navigation du site.
 * Il est affiché en haut de chaque page et permet la navigation entre les sections.
 * 
 * VARIABLES ATTENDUES :
 * - $page : variable qui indique la page actuelle ("index" ou "contact")
 * 
 * CONSTANTES UTILISÉES :
 * - SITE_NAME : définie dans utils/constants.php
 */
?>
<header>
    <!-- ===== BARRE DE NAVIGATION ===== -->
    <nav>
        <!-- 
            Affichage du nom du site
            On utilise la constante SITE_NAME définie dans constants.php
            echo : affiche le contenu de la constante
        -->
        <h1><?php echo SITE_NAME; ?></h1>
        
        <!-- ===== MENU DE NAVIGATION ===== -->
        <ul>
            <?php  
            /**
             * NAVIGATION CONDITIONNELLE
             * 
             * On affiche le lien "Accueil" UNIQUEMENT sur la page contact
             * 
             * OPÉRATEUR DE COMPARAISON STRICTE (===) :
             * - Compare la valeur ET le type
             * - Plus sûr que == qui compare uniquement la valeur
             * 
             * LOGIQUE :
             * Si on est sur la page contact ($page === "contact"),
             * on affiche un lien pour retourner à l'accueil
             */
            if($page === "contact" ) {
                echo '<li><a href="/006-portfolio/index.php#">Accueil</a></li>';
            }
            ?>
            
            <!-- 
                ANCRES DE NAVIGATION (liens avec #)
                Le # suivi d'un ID permet de naviguer vers une section spécifique
                Exemple : #about scroll automatiquement vers <section id="about">
            -->
            <li><a href="/006-portfolio/index.php#about">À propos</a></li>
            <li><a href="/006-portfolio/index.php#skills">Compétences</a></li>
            <li><a href="/006-portfolio/index.php#projects">Projets</a></li>
            
            <!-- Lien vers la page de contact (page séparée) -->
            <li><a href="/006-portfolio/contact.php">Contact</a></li>
        </ul>
    </nav>
</header>