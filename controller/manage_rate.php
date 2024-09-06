<?php
// Inclusion du fichier de connexion
include 'connexion.php';

// Récupération du taux de réduction
try {
    $stmt = $bdd->query("SELECT rate FROM reduction_rates LIMIT 1");
    $rate = $stmt->fetchColumn();
} catch (PDOException $e) {
    die("Échec de la récupération du taux de réduction : " . $e->getMessage());
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $new_rate = $_POST['rate'] ?? '';

    // Validation des données
    if (empty($new_rate) || !is_numeric($new_rate) || $new_rate <= 0 || $new_rate > 100) {
        die("Veuillez entrer un taux valide (entre 0 et 100).");
    }

    // Mise à jour du taux de réduction
    try {
        $stmt = $bdd->prepare("UPDATE reduction_rates SET rate = :rate WHERE id = 1");
        $stmt->execute([':rate' => $new_rate / 100]); // Convertir en taux décimal
        $rate = $new_rate / 100; // Convertir en taux décimal
        $success_message = "Le taux de réduction a été mis à jour avec succès.";
        header('Location: ../taux.php');
    } catch (PDOException $e) {
        die("Échec de la mise à jour du taux de réduction : " . $e->getMessage());
    }
}
?>

