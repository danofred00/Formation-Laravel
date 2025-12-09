/**
 * APPLICATION MÉTÉO
 * Cette application permet de récupérer et afficher les données météorologiques
 * d'une ville en utilisant l'API WeatherAPI.
 */

// Tableau contenant les noms des jours de la semaine en français
const JOURS = ['Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi', 'Dimanche']

// Sélection des éléments HTML pour afficher le jour et la date
const day = document.getElementById('day')
const date = document.getElementById('date')

/**
 * Fonction pour mettre à jour l'affichage de la température
 * @param {number} value - La température en degrés Celsius
 */
function setTemperature(value) {
    // Sélection de l'élément HTML qui affichera la température
    const temperature = document.querySelector('#temperature')
    // Mise à jour du contenu texte avec la valeur de température
    temperature.textContent = value
}

/**
 * Fonction pour mettre à jour l'affichage de la localisation
 * @param {string} city - Le nom de la ville
 * @param {string} country - Le nom du pays
 */
function setLocation(city, country)
{
    // Sélection des éléments HTML pour la ville et le pays
    const cityElement = document.querySelector('.city')
    const countryElement = document.querySelector('.country')
    
    // Mise à jour du contenu texte avec les valeurs récupérées
    cityElement.textContent = city
    countryElement.textContent = country
}

/**
 * Fonction pour appeler l'API météo et récupérer les données
 * @param {string} city - Le nom de la ville recherchée
 * @param {string} apiKey - La clé d'API pour s'authentifier auprès de WeatherAPI
 */
function callAPI(city, apiKey)
{
    // URL de base de l'API WeatherAPI (endpoint current weather)
    const url = 'https://api.weatherapi.com/v1/current.json'
    
    // Création d'un objet URLSearchParams pour construire les paramètres de requête
    const searchParams = new URLSearchParams()
    searchParams.append('q', city)      // Ajoute le paramètre de recherche (ville)
    searchParams.append('key', apiKey)  // Ajoute la clé d'API
    
    // Effectue une requête HTTP GET vers l'API
    fetch(url + '?' + searchParams.toString(), {
        method: 'GET',
    })
    .then(res => res.json()) // Conversion de la réponse en objet JSON
    .then(response => {
        // Extraction de la température en Celsius depuis la réponse de l'API
        const temperature = response.current.temp_c
        
        // Extraction du nom de la ville et du pays depuis la réponse
        const city = response.location.name
        const country = response.location.country

        // Mise à jour de l'interface utilisateur avec les données récupérées
        setTemperature(temperature)
        setLocation(city, country)
    })
    .catch(error => {
        // Gestion des erreurs : affichage d'un message si la ville n'est pas trouvée
        alert("La ville n'a pas ete trouvee. Veuillez verifier le nom de la ville et reessayer.")
    })
}

/**
 * Fonction pour gérer la soumission du formulaire
 * @param {Event} event - L'événement de soumission du formulaire
 */
function handleFormSubmit(event) {
    // Empêche le comportement par défaut du formulaire (rechargement de la page)
    event.preventDefault()

    // Récupération du formulaire via l'événement
    const form = event.target

    // Utilisation de l'API FormData pour extraire facilement les données du formulaire
    const formData = new FormData(form)

    // Récupération des valeurs des champs du formulaire
    const city = formData.get('q')      // Valeur du champ "q" (nom de la ville)
    const apiKey = formData.get('key')  // Valeur du champ "key" (clé API)

    // Appel de la fonction callAPI avec les valeurs récupérées
    callAPI(city, apiKey)
}

/**
 * Fonction principale qui s'exécute au chargement de la page
 * Initialise l'affichage de la date et du jour actuel
 */
function main() {
    // Création d'un objet Date représentant la date et l'heure actuelles
    const currentDate = new Date()
    
    // Récupération du jour de la semaine (getDay() retourne 0-6, où 0 = Dimanche)
    // On soustrait 1 car notre tableau JOURS commence par Lundi
    const currentDay = JOURS[currentDate.getDay() - 1]

    // Mise à jour de l'affichage du jour actuel
    day.textContent = currentDay
    
    // Mise à jour de l'affichage de la date au format français (ex: 15 janvier 2024)
    date.textContent = currentDate.toLocaleDateString('fr-FR', {
        year: 'numeric',  // Affiche l'année en chiffres (ex: 2024)
        month: 'long',    // Affiche le mois en toutes lettres (ex: janvier)
        day: '2-digit'    // Affiche le jour sur 2 chiffres (ex: 01, 15)
    })
}

// Exécution de la fonction principale au chargement du script
main()