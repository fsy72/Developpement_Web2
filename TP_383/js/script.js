let elementSelect = document.getElementById("paragraphe");

let par1 = document.querySelector("#parag1");
let par2 = document.querySelector("#parag2");
let par3 = document.querySelector("#parag3");

function affiche() {
    let valeur = elementSelect.value;
    if(valeur==0){
        par1.style.display = "none";
        par2.style.display = "none";
        par3.style.display = "none";
    } else {
        if(valeur==1) {
            par1.style.display = "block";
            par2.style.display = "none";
            par3.style.display = "none";
        } else {
            if(valeur==2) {
                par1.style.display = "none";
                par2.style.display = "block";
                par3.style.display = "none";
            } else {
                par1.style.display = "none";
                par2.style.display = "none";
                par3.style.display = "block";
            }
        }
    }
};


// elementSelect.addEventListener('change', function() {
//     let valeur = elementSelect.value;
//     if(valeur=="1") {
//         par1.style.display = "block";
//         par2.style.display = "none";
//         par3.style.display = "none";
//     } else if(valeur=="2") {
//         par1.style.display = "none";
//         par2.style.display = "block";
//         par3.style.display = "none";
//     } else {
//         par1.style.display = "none";
//         par2.style.display = "none";
//         par3.style.display = "block";
//     }
// });