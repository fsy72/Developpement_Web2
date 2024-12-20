// Fonction générique pour gérer l'affichage des contenus et l'activation des menus
function switchContent(menuId, contentId) {
    // Masquer tous les contenus principaux
    const contents = document.querySelectorAll('.main-container, #admin-peda, #admin_cons, #admin-content, #aide-content');
    contents.forEach(content => {
        content.style.display = 'none';
    });

    // Désactiver tous les éléments du menu
    const menuItems = document.querySelectorAll('.sidebar ul li');
    menuItems.forEach(item => {
        item.classList.remove('active');
    });

    // Afficher le contenu correspondant et activer l'élément du menu
    document.getElementById(contentId).style.display = 'flex'; 
    document.getElementById(menuId).classList.add('active');
}

// Ajouter des événements pour chaque menu et carte
document.getElementById('menu-accueil').addEventListener('click', function () {
    const cards = document.querySelectorAll('.main-container .card');
    cards.forEach(card => {
        card.style.display = 'block'; 
    });

    const contents = document.querySelectorAll('#admin-peda, #admin_cons, #admin-content, #aide-content');
    contents.forEach(content => {
        content.style.display = 'none';
    });

    const menuItems = document.querySelectorAll('.sidebar ul li');
    menuItems.forEach(item => {
        item.classList.remove('active');
    });
    document.getElementById('menu-accueil').classList.add('active');
});

document.getElementById('menu-inscription-admin').addEventListener('click', function () {
    switchContent('menu-inscription-admin', 'admin-content');
});

document.getElementById('menu-inscription-peda').addEventListener('click', function () {
    switchContent('menu-inscription-peda', 'admin-peda');
});

document.getElementById('menu-consultation-notes').addEventListener('click', function () {
    switchContent('menu-consultation-notes', 'admin_cons');
});

document.getElementById('menu-aide').addEventListener('click', function () {
    switchContent('menu-aide', 'aide-content');
});

document.getElementById('inscription-peda').addEventListener('click', function () {
    switchContent('menu-inscription-peda', 'admin-peda');
});
