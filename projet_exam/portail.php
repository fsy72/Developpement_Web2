<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portail Étudiant</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="css/portail.css">
    <link rel="stylesheet" href="css/Inscription_peda.css">
    <link rel="stylesheet" href="css/Inscription_ad.css">
    <link rel="stylesheet" href="css/Consultation.css">
</head>
<body>

    <aside class="sidebar">
        <div class="logo">
            <img src="images/logoPSE.png" alt="Logo Université" >
        </div>
            <nav>
                <ul>
                    <li id="menu-accueil" class="active"><i class="fas fa-home"></i> <a href="#">Accueil</a></li>
                    <li id="menu-inscription-admin"><i class="far fa-address-card"></i> <a href="#">Inscription Administrative</a></li>
                    <li id="menu-inscription-peda"><i class="fas fa-check-circle"></i> <a href="#">Inscription Pédagogique</a></li>
                    <li id="menu-consultation-notes"><i class="fas fa-eye"></i> <a href="#">Consultation de Notes</a></li>
                    <li id="menu-informations"><i class="fas fa-info-circle"></i> <a href="#">Information</a></li>
                    <li id="menu-aide"><i class="fas fa-question-circle"></i> <a href="#">Aide</a></li>
                </ul>
            </nav>        
    </aside>

    
    <main class="content">
    
        <header class="header">
            <div style="padding-right: 10px; border-right:solid white 1px;">
                <button id="menu-toggle" class="menu-btn">
                    <i class="fas fa-bars"></i> 
                </button>
            </div>
          <h1 style="padding-left: 15px;"><i class="fas fa-graduation-cap"></i> Portail de Services aux Étudiants</h1>
          <div class="profile">
              <span id="profile-name"><i class="fas fa-user"></i> 
                <!-- Cheikh Ahmed Tidiane SOW  -->
                <?php
                    $name = $_GET['name'];
                    echo $name;
                ?>
              <i style="padding-right: 15px;" class="fas fa-caret-down"></i></span>
              <ul id="dropdown-menu" class="hidden">
                  <li style="color:#b75f21" ><i class="fas fa-sign-out-alt"></i> <a style="color:#b75f21" href="./php_form/form_connection.php">Se déconnecter</a></li>
                  <li style="color:#b75f21" ><i class="fas fa-user-cog"></i> Profil</li>
              </ul>
          </div>
      </header>
      

      <div class="main-container">
        <section class="cards">
            <div class="card blue" id="inscription-admin">
                <i class="far fa-address-card"></i>
                <h2>Inscription Administrative</h2>
            </div>
            <div class="card orange" id="inscription-peda">
                <i class="fas fa-check-circle"></i>
                <h2>Inscription Pédagogique</h2>
            </div>
            <div class="card consult_note" id="consulter_note">
                <i class="far fa-eye"></i>
                <h2>Consultation de notes</h2>
            </div>
            <div class="card aide">
                <i class="far fa-question-circle"></i>
                <h2>Aide</h2>
            </div>
        </section>
    
        <div class="info-aside-container">
            <section class="info">
                <h4><i class="far fa-newspaper"></i> Informations</h4>
                <div class="alert-info" style="text-align: center;">Aucune information renseignée par votre UFR.</div>
            </section>
            <aside class="candidatures">
                <h4><i class="far fa-folder"></i> Appel(s) à candidatures</h4>
                <p class="subtext">Liste des candidatures en ligne</p>
                <div class="alert-cand">Aucune candidature disponible.</div>
            </aside>
        </div>
    </div>
    
    <!-- affichage de Inscription administration -->
    <div id="admin-content" style="display: none;">
        <section class="Inscript_adm">
            <h4><i class="far fa-address-card"></i> Inscription Administrative</h4>
            <div  style="margin-top: 3rem;">
                <br>
                <p class="indication">Veuillez passer à la scolarité pour démarrer votre inscription :</p>
                <div class="alert alert-danger text-center">Vos informations de délibération ne sont pas encore disponibles sur cette <br> plateforme !</div>
                <div class="d-flex justify-content-center">
                    <button type="button" class="big_button mb-5 w-75 bg_mouvant">
                        <span class="text-white">
                            <i class="fa fa-sign-in-alt"></i> Consulter mon dossier
                        </span>
                    </button>
                 </div>
            </div>
        </section>
        <aside class= "step">
            <h4><i class="fa fa-hourglass-half"></i> Etapes</h4>
                <div class="etat_container">
                    <div class="etat_items">
                        <div class="d-flex">
                            <img src="images/etat_0.png" class="icone_etat">
                            <div class="text_etat">
                                <p class="titre_etat">Démarrage</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="etat_items">
                        <div class="d-flex">
                            <img src="images/etat_0.png" class="icone_etat">
                            <div class="text_etat">
                                <p class="titre_etat">Formation</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="etat_items">
                        <div class="d-flex">
                            <img src="images/etat_0.png" class="icone_etat">
                            <div class="text_etat">
                                <p class="titre_etat">Frais d'inscription</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="etat_items">
                        <div class="d-flex">
                            <img src="images/etat_0.png" class="icone_etat">
                            <div class="text_etat">
                                <p class="titre_etat">Bibliothèque</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="etat_items">
                        <div class="d-flex">
                            <img src="images/etat_0.png" class="icone_etat">
                            <div class="text_etat">
                                <p class="titre_etat">Visite Médicale</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="etat_items">
                        <div class="d-flex">
                            <img src="images/etat_0_last.png" class="icone_etat">
                            <div class="text_etat">
                                <p class="titre_etat">Carte d'étudiant</p>
                            </div>
                        </div>
                    </div>
                    
                </div>
           
        </aside>
    </div>

    <!-- affichage de Inscription pedagogique -->
    <div id="admin-peda" style="display: none;">
        <section class="Inscript_peda">
            <img src="images/Inscription_peda.png" alt="">
        </section>
    </div>

     <!-- affichage de Consultation de notes -->
    <div id="admin_cons" style="display: none;">
        <section class="Consultation">
            <img src="images/consultation_note.png" alt="">
        </section>
    </div>
        <footer class="footer">
          <p>Copyright ©<strong>CCOS</strong>| 2024</p>
        </footer>
    </main>

    <script src="js/portail.js"></script>
    <script src="js/Inscription_ad.js"></script>
    <script src="js/Inscription_peda.js"></script>
    <script src="js/Consultation.js"></script>
</body>
</html>











