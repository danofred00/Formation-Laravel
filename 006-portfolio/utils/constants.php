<?php
/**
 * ========================================
 * FICHIER DE CONSTANTES
 * ========================================
 * 
 * Ce fichier centralise toutes les constantes du site web.
 * Les constantes sont des valeurs qui ne changent pas pendant l'exécution du programme.
 * 
 * AVANTAGES des constantes :
 * - Centralisation : toutes les informations importantes au même endroit
 * - Facilité de modification : on modifie une seule fois et ça se répercute partout
 * - Sécurité : les constantes ne peuvent pas être modifiées accidentellement
 * - Lisibilité : des noms explicites plutôt que des valeurs "en dur" dans le code
 * 
 * SYNTAXE : define("NOM_CONSTANTE", "valeur");
 * CONVENTION : Les noms de constantes s'écrivent EN MAJUSCULES avec des underscores (_)
 */

// ========================================
// INFORMATIONS GÉNÉRALES DU SITE
// ========================================

/**
 * Nom du site affiché dans le header/navigation
 * Cette constante est utilisée dans header.php
 */
define("SITE_NAME", "Votre Nom");

// ========================================
// INFORMATIONS DE CONTACT
// ========================================

/**
 * Adresse email de contact
 * Affichée sur la page contact.php
 */
define("CONTACT_EMAIL", "your.email@gmail.com");

/**
 * Numéro de téléphone de contact
 * Format international recommandé : +indicatif pays + numéro
 */
define("CONTACT_PHONE", "+237 6XX XXX XXX");

/**
 * Adresse physique / Localisation
 * Ville et pays où vous vous trouvez
 */
define("CONTACT_ADDRESS", "Douala, Cameroun");

// ========================================
// LIENS RÉSEAUX SOCIAUX
// ========================================

/**
 * URL du profil GitHub
 * Remplacez "votre-id" par votre vrai identifiant GitHub
 */
define("CONTACT_GITHUB", "https://github.com/votre-id");

/**
 * URL du profil LinkedIn
 * Remplacez "votre-id" par votre identifiant LinkedIn
 */
define("CONTACT_LINKEDIN", "https://linkedin.com/votre-id");

/**
 * URL du profil Facebook
 * Remplacez "votre-id" par votre identifiant Facebook
 */
define("CONTACT_FACEBOOK", "https://facebook.com/votre-id");

?>