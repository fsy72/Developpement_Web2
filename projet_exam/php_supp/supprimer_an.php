<?php
    require("../config.php");
    $connexion = connect_db();

    if (!isset($_GET['id_annee'])) {
        die("Aucun ID fourni !");
    }

    $id = $_GET['id_annee']; // Sécuriser l'ID
    
    // Effectuer la suppression
    $requete = "DELETE FROM anneeacademique WHERE id_annee = '" . $id . "'";
    $resultat = mysqli_query($connexion, $requete);

    if ($resultat) {?>
        <script>
            alert('suppression réussi.');
            window.location.href = '../part_admin.php';
        </script>
    <?php
    } else {?>
        <script>
            alert('Erreur lors de la suppression.');
            window.location.href = '../part_admin.php';
        </script>
        <?php
    }
?>
