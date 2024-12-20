<?php
    require("../config.php");
    $connexion = connect_db();

    if (!isset($_GET['id_formation'])) {
        die("Aucun ID fourni !");
    }

    $id = $_GET['id_formation']; // Sécuriser l'ID
    
    // Effectuer la suppression
    $requete = "DELETE FROM formation WHERE id_formation = '" . $id . "'";
    $resultat = mysqli_query($connexion, $requete);

    if ($resultat) {?>
        <script>
            alert('suppression réussi.');
            window.location.href = '../part_admin.php';
        </script>
    <?php
        // header("Location: part_admin.php");
    } else {?>
        <script>
            alert('Erreur lors de la suppression.');
            window.location.href = '../part_admin.php';
        </script>
        <?php
    }
?>
