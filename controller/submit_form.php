<?php
// Inclure le fichier de connexion à la base de données
include 'connexion.php';

// Vérifier si le formulaire a été soumis
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Récupérer les valeurs du formulaire
    $montant = $_POST['montant'];
    $cash_possible = $_POST['cash_possible'];
    $network = $_POST['network'];
    $personal_number = $_POST['personal_number'];
    $transaction_id = $_POST['transaction_id'];
    $reception_network = $_POST['reception_network']; // Nouveau champ
    $reception_number = $_POST['reception_number'];
    $sim_holder = $_POST['sim_holder'];

    // Préparer la requête SQL pour insérer les données
    $sql = "INSERT INTO ventes_credits (montant, cash_possible, network, personal_number, transaction_id, reception_network, reception_number, sim_holder) 
            VALUES (:montant, :cash_possible, :network, :personal_number, :transaction_id, :reception_network, :reception_number, :sim_holder)";

    // Préparer la déclaration PDO
    $stmt = $bdd->prepare($sql);

    // Lier les paramètres
    $stmt->bindParam(':montant', $montant);
    $stmt->bindParam(':cash_possible', $cash_possible);
    $stmt->bindParam(':network', $network);
    $stmt->bindParam(':personal_number', $personal_number);
    $stmt->bindParam(':transaction_id', $transaction_id);
    $stmt->bindParam(':reception_network', $reception_network); // Nouveau paramètre lié
    $stmt->bindParam(':reception_number', $reception_number);
    $stmt->bindParam(':sim_holder', $sim_holder);

    // Exécuter la déclaration et vérifier si l'insertion est réussie
    if ($stmt->execute()) {
        // Rediriger vers redirect.php avec succès
        header('Location: redirect.php?success=true');
        exit();
    } else {
        // Rediriger avec une erreur
        header('Location: redirect.php?success=false');
        exit();
    }
}
?>
