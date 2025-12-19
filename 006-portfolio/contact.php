<?php
/**
 * ========================================
 * PAGE DE CONTACT - contact.php
 * ========================================
 * 
 * Cette page permet aux visiteurs de contacter le développeur.
 * Elle affiche les informations de contact et un formulaire de message.
 * 
 * STRUCTURE :
 * 1. Inclusion des constantes
 * 2. Définition des variables de page
 * 3. Affichage des informations de contact
 * 4. Formulaire de contact
 * 5. Liens vers les réseaux sociaux
 */

// ========================================
// INCLUSION DES FICHIERS NÉCESSAIRES
// ========================================

/**
 * Inclusion du fichier constants.php qui contient :
 * - Email, téléphone, adresse
 * - Liens vers les réseaux sociaux
 */
require_once __DIR__ . '/utils/constants.php';

// ========================================
// VARIABLES DE PAGE
// ========================================

/**
 * $title : Titre de la page (affiché dans l'onglet du navigateur)
 */
$title = "Contact - Daniel Leussa";

/**
 * $page : Identifiant de page utilisé pour la navigation conditionnelle
 * Dans header.php, on vérifie si $page === "contact"
 */
$page = "contact";
?>

<!DOCTYPE html>
<html lang="fr">

<?php 
/**
 * Inclusion du composant <head>
 * Contient meta, title, liens CSS/JS
 */
require __DIR__ . '/components/head.php'; 
?>
?>

<body>
    
    <?php 
    /**
     * Inclusion de la barre de navigation
     */
    require __DIR__ . '/components/header.php'; 
    ?>

    <!-- ========================================
         SECTION CONTACT PRINCIPALE
         ======================================== -->
    <section id="contact">
        <div class="container">
            <h2>Me Contacter</h2>

            <!-- ========================================
                 CARTES D'INFORMATIONS DE CONTACT
                 ======================================== -->
            <div class="contact-info">
                <!-- 
                    contact-info utilise CSS Grid (défini dans style.css)
                    Les cartes s'adaptent automatiquement à la taille de l'écran
                -->
                
                <!-- Carte 1 : Email -->
                <div class="contact-card">
                    <h3>📧 Email</h3>
                    <p>
                        <?php 
                        /**
                         * <?= ... ?> : Syntaxe courte pour <?php echo ... ?>
                         * CONTACT_EMAIL : constante définie dans constants.php
                         * 
                         * Syntaxe : <?= variable ?> affiche directement la valeur
                         */
                        echo CONTACT_EMAIL; 
                        ?>
                    </p>
                </div>
                
                <!-- Carte 2 : Téléphone -->
                <div class="contact-card">
                    <h3>📱 Téléphone</h3>
                    <p><?= CONTACT_PHONE; ?></p>
                </div>
                
                <!-- Carte 3 : Localisation -->
                <div class="contact-card">
                    <h3>📍 Localisation</h3>
                    <p><?= CONTACT_ADDRESS; ?></p>
                </div>
            </div>

            <h3 style="text-align: center; margin-bottom: 2rem;">Envoyez-moi un message</h3>

            <!-- ========================================
                 FORMULAIRE DE CONTACT
                 ======================================== -->
            <!-- 
                BALISE <form> : Crée un formulaire interactif
                
                ATTRIBUTS :
                - action="#" : URL où envoyer les données (# = page actuelle)
                - method="post" : Méthode HTTP pour envoyer les données
                
                MÉTHODES HTTP :
                - GET : données visibles dans l'URL (pour recherches, filtres)
                - POST : données cachées (pour mots de passe, formulaires sensibles)
            -->
            <form action="#" method="post">
                <!-- 
                    CHAMP TEXTE : Nom
                    - type="text" : champ de texte simple
                    - name="nom" : identifiant du champ (utilisé en PHP avec $_POST['nom'])
                    - placeholder : texte d'aide qui disparaît quand on écrit
                    - required : champ obligatoire (validation HTML5)
                -->
                <input type="text" name="nom" placeholder="Votre nom" required>
                
                <!-- 
                    CHAMP EMAIL
                    - type="email" : validation automatique du format email
                    - Le navigateur vérifie qu'il y a un @ et un domaine valide
                -->
                <input type="email" name="email" placeholder="Votre email" required>
                
                <!-- Champ Sujet -->
                <input type="text" name="sujet" placeholder="Sujet du message" required>
                
                <!-- 
                    ZONE DE TEXTE MULTILIGNE
                    <textarea> : pour des messages plus longs
                    - rows="8" : hauteur initiale de 8 lignes
                    - L'utilisateur peut agrandir la zone en tirant le coin
                -->
                <textarea name="message" placeholder="Votre message" rows="8" required></textarea>
                
                <!-- 
                    BOUTON D'ENVOI
                    - type="submit" : envoie le formulaire quand on clique
                    - déclenche l'envoi vers l'action définie dans <form>
                -->
                <button type="submit">Envoyer le message</button>
            </form>

            <!-- ========================================
                 SECTION RÉSEAUX SOCIAUX
                 ======================================== -->
            <div style="text-align: center; margin-top: 3rem;">
                <h3>Suivez-moi sur les réseaux</h3>
                
                <div class="social-links">
                    <!-- 
                        LIENS VERS RÉSEAUX SOCIAUX
                        
                        ATTRIBUTS <a> :
                        - class="logo-item" : classe CSS pour le style
                        - href="..." : URL de destination
                        - target="_blank" : ouvre dans un nouvel onglet
                        - style="..." : styles inline (à éviter en général)
                    -->
                    
                    <!-- Lien GitHub -->
                    <a class="logo-item" href="<?= CONTACT_GITHUB; ?>" target="_blank" 
                       style="margin: 0 1rem; color: #667eea; text-decoration: none;">
                        <!-- 
                            BALISE <img> : Affiche une image
                            - class="logo" : classe pour le style CSS
                            - src : chemin vers l'image
                            - alt : texte alternatif (accessibilité + SEO)
                                    affiché si l'image ne charge pas
                                    lu par les lecteurs d'écran pour malvoyants
                        -->
                        <img class="logo" src="/006-portfolio/assets/images/github_logo.png" alt="GitHub" />
                        <span>GitHub</span>
                    </a>
                    
                    <!-- Lien LinkedIn -->
                    <a class="logo-item" href="<?= CONTACT_LINKEDIN; ?>" target="_blank" 
                       style="margin: 0 1rem; color: #667eea; text-decoration: none;">
                        <img class="logo" src="/006-portfolio/assets/images/linkedin_logo.png" alt="LinkedIn" />
                        <span>LinkedIn</span>
                    </a>
                    
                    <!-- Lien Facebook -->
                    <a class="logo-item" href="<?= CONTACT_FACEBOOK; ?>" target="_blank" 
                       style="margin: 0 1rem; color: #667eea; text-decoration: none;">
                        <img class="logo" src="/006-portfolio/assets/images/facebook_logo.png" alt="Facebook" />
                        <span>Facebook</span>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <?php 
    /**
     * Inclusion du footer (pied de page)
     */
    require __DIR__ . '/components/footer.php'; 
    ?>

</body>

</html>