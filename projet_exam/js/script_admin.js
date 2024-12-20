var information = document.getElementById("information");
var etudiant = document.getElementById("etudiant");
var formation = document.getElementById("formation");
var niveau = document.getElementById("niveau");
var an_academique = document.getElementById("an_academique");

var info = document.getElementById("info");
var etu = document.getElementById("etu");
var form = document.getElementById("form");
var niv = document.getElementById("niv");
var an = document.getElementById("an");

information.classList.add("active");

information.addEventListener('click', function() {
    info.style.display = 'block';
    etu.style.display = 'none';
    form.style.display = 'none';
    niv.style.display = 'none';
    an.style.display = 'none';

    information.classList.add("active");
    etudiant.classList.remove("active");
    formation.classList.remove("active");
    niveau.classList.remove("active");
    an_academique.classList.remove("active");
});

etudiant.addEventListener('click', function() {
    info.style.display = 'none';
    etu.style.display = 'block';
    form.style.display = 'none';
    niv.style.display = 'none';
    an.style.display = 'none';

    information.classList.remove("active");
    etudiant.classList.add("active");
    formation.classList.remove("active");
    niveau.classList.remove("active");
    an_academique.classList.remove("active");
});

formation.addEventListener('click', function() {
    info.style.display = 'none';
    etu.style.display = 'none';
    form.style.display = 'block';
    niv.style.display = 'none';
    an.style.display = 'none';
    
    information.classList.remove("active");
    etudiant.classList.remove("active");
    formation.classList.add("active");
    niveau.classList.remove("active");
    an_academique.classList.remove("active");
});

niveau.addEventListener('click', function() {
    info.style.display = 'none';
    etu.style.display = 'none';
    form.style.display = 'none';
    niv.style.display = 'block';
    an.style.display = 'none';

    information.classList.remove("active");
    etudiant.classList.remove("active");
    formation.classList.remove("active");
    niveau.classList.add("active");
    an_academique.classList.remove("active");
});

an_academique.addEventListener('click', function() {
    info.style.display = 'none';
    etu.style.display = 'none';
    form.style.display = 'none';
    niv.style.display = 'none';
    an.style.display = 'block';

    information.classList.remove("active");
    etudiant.classList.remove("active");
    formation.classList.remove("active");
    niveau.classList.remove("active");
    an_academique.classList.add("active");
});

// SUPPRESSION INFORMATION
// function supprimer() {
//     const id_info = document.getElementById("id_info");
//     if (confirm("Êtes-vous sûr de vouloir supprimer cette information ?")) {
//         // L'utilisateur a cliqué sur "OK"
//         window.location.href = '../supprimer_info.php?id= `${id_info}`';
//     } else {
//         // L'utilisateur a cliqué sur "Annuler"
//         alert("Suppression annulée.");
//     }
    
//     // window.location.href = '../part_admin.php';
// }