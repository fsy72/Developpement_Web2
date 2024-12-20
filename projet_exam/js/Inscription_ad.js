// Afficher "Inscription Administrative" et cacher la page d'accueil
document.getElementById('inscription-admin').addEventListener('click', function () {
    // Masquer le contenu principal
    document.querySelector('.main-container').style.display = 'none';
    
    // Afficher le contenu de l'inscription administrative
    document.getElementById('admin-content').style.display = 'flex';
});

// Retour à la page d'accueil
document.getElementById('menu-accueil').addEventListener('click', function () {
    // Afficher le contenu principal
    document.querySelector('.main-container').style.display = 'block';
    
    // Masquer le contenu de l'inscription administrative
    document.getElementById('admin-content').style.display = 'none';
});
