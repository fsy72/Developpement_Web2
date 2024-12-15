<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portail</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/style_resp.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
</head>
<body>
    <header>
        <!-- <img src="https://portail.ugbnumerique.sn/assets/images/pse/entete_pse_10@2x.png" alt=""> -->
        <img src="../images/entete.png" alt="">
    </header>
    <section class="sect_1">
        <button id="precedent" onclick="showCurrentDivPrec()">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 50">
                <polyline points="70,10 30,25 70,40"/>
            </svg>
        </button>
        <div class="parcours" id="active_mail">
            <div><img src="../images/activation_mail.jpg" alt=""></div>
            <div>
                <h1>Activation de l'adresse email institutionnell</h1>
                <h3>En quelques clics, activez vous-même votre email UGB!</h3>
                <p>
                    Activez vous-même l'adresse email institutionnelle (...@ugb.edu.sn) 
                    figurant sur votre carte étudiant. L'activation de l'email institutionnel 
                    est indispensable pour accéder aux différents services mais aussi pour 
                    vous connecter au Wifi.
                </p>
                <div class="read_more"><button type="button">Lire la suite</button></div>
            </div>
        </div>
        <div class="parcours" id="ins_admin">
            <div><img src="../images/Inscription_admin.png" alt=""></div>
            <div>
                <h1>Préinscription administrative</h1>
                <h3>Fini les va-et-vient et les longues files d'attente pour vous inscrire. Faites votre préinscription en ligne!</h3>
                <p>
                    « Déclenchez » votre inscription administrative et mettez à jour 
                    certaines de vos informations personnelles sans vous déplacer. 
                    Désormais, plusieurs étapes de l'inscription administrative peuvent 
                    être effectuées en ligne.
                </p>
                <div class="read_more"><button type="button">Lire la suite</button></div>
            </div>
        </div>
        <div class="parcours" id="ins_peda">
            <div><img src="../images/Inscription_péda.png" alt=""></div>
            <div>
                <h1>Inscription pédagogique en ligne</h1>
                <h3>Faites votre inscription pédagogique sans faire la queue ni vous déplacer!</h3>
                <p>
                    En ligne et en toute quiétude, faites votre choix d'Unités 
                    d'Enseignement et éventuellement de parcours.
                </p>
                <div class="read_more"><button type="button">Lire la suite</button></div>
            </div>
        </div>
        <div class="parcours" id="consul_edt">
            <div><img src="../images/consultation_edt.png" alt=""></div>
            <div>
                <h1>Consultation des Emplois du temps</h1>
                <h3>Recevez et téléchargez en temps réel votre emplois du temps</h3>
                <p>
                    Les enseignements programmés sont visibles dans votre espace privé 
                    si vous êtes inscrit pédagogiquement à l'Unité d'enseignement.
                </p>
                <div class="read_more"><button type="button">Lire la suite</button></div>
            </div>
        </div>
        <div class="parcours" id="consul_note">
            <div><img src="../images/consultation_note.png" alt=""></div>
            <div>
                <h1>Consultation des notes</h1>
                <h3>En toute confidentialité, consultez vos différentes notes et faites vos réclamations!</h3>
                <p>
                    Vos notes seront visibles dans votre espace privé dès leur publication. 
                    Aussi, vous pourrez , au besoin, faire une réclamation.
                </p>
                <div class="read_more"><button type="button">Lire la suite</button></div>
            </div>
        </div>
        <button id="suivant" onclick="showCurrentDivSuiv()">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 50">
                <polyline points="30,10 70,25 30,40"/>
            </svg>                  
        </button>
    </section>
    <section class="sect_2">
        <div>
            <div class="btn_resp">
                <button type="button" class="connecter" onclick="window.location.href='form_connection.html'">
                    <i class="fa fa-sign-in-alt"></i>
                    Se connecter
                </button>
                <div class="lien">
                    <div class="first"><a href="#">Guide d'utilisation</a></div>
                    <div class="second">
                        <a href="#">
                            <i class="fas fa-headset"></i>
                            Support
                        </a>
                    </div>
                </div>
            </div>
            <div class="gauche">
                <div class="header">
                    <i class="fa fa-newspaper"></i>
                    Informations
                </div>
                <section class="info">
                    <?php
                        require("../config.php");
                        $connexion = connect_db();
                        $requete = "SELECT * FROM information";
                        $resultat = mysqli_query($connexion, $requete);
                        if($champ = mysqli_fetch_array($resultat)) {
                    ?>
                    <table>
                        <?php do {?>
                        <tr>
                            <td rowspan="2"><img src="<?php echo $champ['image'];?>" alt=""></td>
                            <td  class="titre"><?php echo $champ['titre'];?>
                        </tr>
                        <tr>
                            <td class="contenu">
                                <?php echo $champ['contenu'];?>
                                <div class="read_more"><button type="button">Lire la suite</button></div>
                            </td>
                        </tr>
                    <?php }while ($champ = mysqli_fetch_array($resultat));?>
                    </table>
                    <?php } else { ?>
                    <div>
                        <div class="pub_info">Aucune information publiée</div>
                    </div>
                    <?php }?>
                </section>
            </div>
            <div class="droite">
                <div class="btn">
                    <h4>
                        <i class="fa fa-graduation-cap"></i>
                        Espace privé
                    </h4>
                    <p class="lamp">
                        <i class="fa fa-lightbulb"></i>
                        Veuillez vous connecter pour accéder à votre espace privé.
                    </p>
                    <button type="button" class="connecter" onclick="window.location.href='form_connection.html'">
                        <i class="fa fa-sign-in-alt"></i>
                        Se connecter
                    </button>
                </div>
                <div>
                    <h4>
                        <i class="fa fa-hand-holding"></i>
                        Guides
                    </h4>
                    <p>
                        Pour tout savoir sur l'utilisation de ce portail, veuillez télécharger:
                    </p>
                    <a href="">
                        <i class="fa fa-file-pdf"></i>
                        Guide utilisateur
                    </a>
                    <p>Ou consulter</p>
                    <a href="">
                        <i class="fa fa-globe"></i>
                        Documentation
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section class="container_vd">
        <div>
            <iframe id="bloc_video" src="https://www.youtube.com/embed/xZhfQyfUOLQ" class="shadow-lg">
                #document (https://www.youtube.com/embed/xZhfQyfUOLQ)
            </iframe>
        </div>
    </section>
    <div id="support">
        <img id="img_s" type="button" src="../images/support.png" alt="" >
    </div>
    <footer>
        <div>
            <p>
                <i class="fa fa-facebook"></i>
                Copyright &copy;
                <strong>CCOS</strong>
                | 2024
            </p>
        </div>
    </footer>
    <div id="dialog">
        <div class="container">
            <div class="content">
                <h4>
                    <i class="fa fa-mail-bulk"></i>
                    Contact support 
                </h4>
                <p>
                    Vous pouvez aussi envoyer un e-mail à :
                </p>
                <span>
                    <i class="fa fa-at"></i> 
                    <strong>support-ccos@ugb.edu.sn</strong>
                </span>
                <img src="../images/img_support.jpg" alt="" >
            </div>
        </div>
    </div>
    <script src="../js/script.js"></script>
</body>
</html>