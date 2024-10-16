<?php
// Inclure le fichier de connexion à la base de données
include 'connexion.php'; // Assurez-vous que le chemin est correct

// Vérifier si un statut est spécifié dans l'URL
$statut = isset($_GET['statut']) ? $_GET['statut'] : null;

try {
    // Préparer la requête SQL pour récupérer les données en fonction du statut
    if ($statut) {
        $sql = "SELECT montant, cash_possible, network, personal_number, reception_network, reception_number, sim_holder, transaction_id, statut FROM ventes_credits WHERE statut = :statut";
        $stmt = $bdd->prepare($sql);
        $stmt->bindParam(':statut', $statut);
    } else {
        $sql = "SELECT montant, cash_possible, network, personal_number, reception_network, reception_number, sim_holder, transaction_id, statut FROM ventes_credits";
        $stmt = $bdd->prepare($sql);
    }

    // Exécuter la requête et récupérer les résultats
    $stmt->execute();
    $ventes = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
} catch (PDOException $e) {
    // En cas d'erreur, afficher un message d'erreur
    $error = $e->getMessage();
}
?>
