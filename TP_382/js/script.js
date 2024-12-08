var par1 = document.getElementById('parag1');
var par2 = document.getElementById('parag2');
var par3 = document.getElementById('parag3');

var valeur = document.getElementById('paragraphe');
// valeur.addEventListener('change', function() {
//     var v = this.value;
//     if(v=="0") {
//         par1.style.display = "none";
//         par2.style.display = "none";
//         par3.style.display = "none";
//     }
//     else{
//         if(v=="1") {
//             par1.style.display = "block";
//             par2.style.display = "none";
//             par3.style.display = "none";
//         }
//         else{
//             if(v=="2") {
//                 par1.style.display = "none";
//                 par2.style.display = "block";
//                 par3.style.display = "none";
//             }
//             else if(v=="3") {
//                 par1.style.display = "none";
//                 par2.style.display = "none";
//                 par3.style.display = "block";
//             }
//         }
//     }
// });

function affiche() {
    var v = valeur.value;
    if(v=="0") {
        par1.style.display = "none";
        par2.style.display = "none";
        par3.style.display = "none";
    }
    else{
        if(v=="1") {
            par1.style.display = "block";
            par2.style.display = "none";
            par3.style.display = "none";
        }
        else{
            if(v=="2") {
                par1.style.display = "none";
                par2.style.display = "block";
                par3.style.display = "none";
            }
            else if(v=="3") {
                par1.style.display = "none";
                par2.style.display = "none";
                par3.style.display = "block";
            }
        }
    }
}