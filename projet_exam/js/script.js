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

// Support
const dialog = document.getElementById('dialog');
const body = document.querySelector('body');
const img = document.getElementById('img_s');
const container = document.querySelector('.container');

img.addEventListener('click', function() {
    body.style.overflow = 'hidden';
    dialog.style.display = 'flex';

    container.classList.remove("hidden"); 
    container.classList.add("visible");
});

dialog.addEventListener('click', function resp(event) {
    event.stopPropagation();

    body.style.overflowY = 'scroll';
    dialog.style.transform = 'translate';
    
    container.classList.remove("visible");
    container.classList.add("hiding");

    // Attendre la fin de l'animation avant de masquer complètement
    container.addEventListener("animationend", () => {
        if (container.classList.contains("hiding")) {
            container.classList.remove("hiding");
            dialog.style.display = 'none';
        }
    }, { once: true });

});

container.addEventListener('click', function(event) {
    event.stopPropagation();
});