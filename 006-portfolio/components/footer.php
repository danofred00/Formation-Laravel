<?php 
/**
 * ========================================
 * COMPOSANT FOOTER - Pied de page
 * ========================================
 * 
 * Ce composant contient le pied de page du site avec le copyright.
 * Il est inclus en bas de chaque page.
 * 
 * FONCTIONNALITÉS :
 * - Affichage automatique de l'année en cours
 * - Message de copyright
 */

/**
 * FONCTION date() - Obtenir la date/heure actuelle
 * 
 * Syntaxe : date("format")
 * "Y" : Année sur 4 chiffres (2025, 2026, etc.)
 * 
 * Autres formats utiles :
 * - "d" : jour du mois (01 à 31)
 * - "m" : mois (01 à 12)
 * - "H" : heure (00 à 23)
 * - "i" : minutes (00 à 59)
 * - "d/m/Y" : date complète (19/12/2025)
 * 
 * L'année est stockée dans une variable pour être affichée dans le footer
 */
$currentYear = date("Y");
?>

<footer>
    <p>
        <!-- 
            SYMBOLE COPYRIGHT : &copy; est une entité HTML qui affiche ©
            
            ENTITÉS HTML courantes :
            - &copy; : ©
            - &reg; : ®
            - &trade; : ™
            - &euro; : €
            - &nbsp; : espace insécable
        -->
        &copy; <?php echo $currentYear; ?>  Daniel Leussa - Tous droits réservés
    </p>
</footer>