// Liste des divs
const divs = document.querySelectorAll('.parcours');
let currentIndex = 0;

// Fonction pour afficher la div courante
function showCurrentDiv() {
    // Cacher toutes les divs
    divs.forEach(div => div.style.display = 'none');

    // Afficher la div courante
    divs[currentIndex].style.display = 'flex';

    // Passer à la div suivante
    currentIndex = (currentIndex + 1) % divs.length;
}

// Lancer le cycle d'affichage
setInterval(showCurrentDiv, 4000);

// Afficher la première div au démarrage
showCurrentDiv();

// Fonction précédent - suivant
function showCurrentDivPrec() {
    divs.forEach(div => div.style.display = 'none');
    divs[currentIndex].style.display = 'flex';
    if (currentIndex === 0) {
        currentIndex = divs.length - 1;
    } else {
        currentIndex-- ;
    }
}
function showCurrentDivSuiv() {
    showCurrentDiv();
}