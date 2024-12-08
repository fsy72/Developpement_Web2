var tab = [];
do{
    var prenom = prompt("Donner votre prenom: ");
    if(prenom!=null && prenom!=" ")
        tab.push(prenom + " ");
    else
        break;
}while(1);
if(tab.length != 0)
    // for(var i=0; i<tab.length; i++) {
    //     document.write(tab[i]);
    // }
    
    // tab.forEach(valeur => {
    //     document.write(valeur + " ");
    // });
    document.write(tab.join(" "));
else
    alert("Tableau vide !!!");