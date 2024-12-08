function afficheOptionChoisi() {
    var optionChoisi = document.querySelector('input[name="UFR"]:checked');
    if (optionChoisi) {
        alert("Vous avez choisi: " + optionChoisi.value);
    } else {
        alert("Aucune option n'est choisi");
    }
}