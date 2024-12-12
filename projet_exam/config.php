<?php
    function connect_db() {
        $connexion = mysqli_connect("localhost", "root", "");
        if(!$connexion) {
            echo "Echec de la connexion au serveur";
            exit;
        }
        $selction_db = mysqli_select_db($connexion, "ugb_data_base");
        if(!$selction_db) {
            echo "Echec de la selection de la base de données";
            exit;
        }
        return $connexion;
    }
?>