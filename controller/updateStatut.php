<?php
// Inclure le fichier de connexion à la base de données
include 'connexion.php';

if (isset($_POST['id']) && isset($_POST['statut'])) {
    $id = $_POST['id'];
    $statut = $_POST['statut'];

    // Préparer la requête SQL pour mettre à jour le statut
    $sql = "UPDATE ventes_credits SET statut = ? WHERE transaction_id = ?";
    
    // Utiliser une connexion PDO
    try {
        $stmt = $bdd->prepare($sql);
        $stmt->bindParam(1, $statut, PDO::PARAM_STR);
        $stmt->bindParam(2, $id, PDO::PARAM_INT);

        if ($stmt->execute()) {
            echo "Statut mis à jour avec succès.";
        } else {
            echo "Erreur lors de la mise à jour du statut.";
        }
    } catch (PDOException $e) {
        echo "Erreur : " . $e->getMessage();
    }

    // Fermer la connexion
    $bdd = null;
} else {
    echo "Paramètres manquants.";
}
?>
