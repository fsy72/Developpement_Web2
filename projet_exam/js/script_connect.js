var username = document.getElementById('username');
var password = document.getElementById('password');

var regexMail = /^[a-zA-Z0-9]+\.[a-zA-Z0-9]+@ugb\.edu\.sn$/;

function connexion() {
    const mail = document.getElementById("mail");
    const mdp = document.getElementById("mdp");
    
    var testMail = regexMail.test(username.value);
    var testSize = (password.value.length >= 8);

    if(!testMail) {
        mail.innerHTML = "! Le format n'est pas bon";
    } else {
        mail.innerHTML ="";
    }
    if(!testSize) {
        mdp.innerHTML = "! Au moins 8 caractères";
    }
    else {
        mdp.innerHTML = "";
    }
    if(testMail && testSize) {
        document.getElementById('form_login').submit();
    }
}