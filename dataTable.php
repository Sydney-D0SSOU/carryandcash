<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des Ventes</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div>
            <?php include 'nav.php'; ?>
            </div>
    <div class="container mt-4">
        <h1 class="mb-4">Liste des Ventes</h1>

        <?php
        // Inclure le fichier de listVente
        include './controller/listVente.php';

        // Vérifier si une erreur s'est produite
        if (isset($error)): ?>
            <div class="alert alert-danger">
                <?= htmlspecialchars($error) ?>
            </div>
        <?php else: ?>
           
            <!-- Tableau des ventes en cours -->
            <h2 class="mt-4">Ventes en Cours</h2>
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>Montant</th>
                        <th>Cash Possible</th>
                        <th>Network</th>
                        <th>Numéro Personnel</th>
                        <th>Réseau de Réception</th>
                        <th>Numéro Réception</th>
                        <th>Détenteur de SIM</th>
                        <th>ID de Transaction</th>
                        <th>Statut</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($ventes as $vente): ?>
                        <?php if ($vente['statut'] === 'En cours'): ?>
                            <tr>
                                <td><?= htmlspecialchars($vente['montant']) ?></td>
                                <td><?= htmlspecialchars($vente['cash_possible']) ?></td>
                                <td><?= htmlspecialchars($vente['network']) ?></td>
                                <td><?= htmlspecialchars($vente['personal_number']) ?></td>
                                <td><?= htmlspecialchars($vente['reception_network']) ?></td>
                                <td><?= htmlspecialchars($vente['reception_number']) ?></td>
                                <td><?= htmlspecialchars($vente['sim_holder']) ?></td>
                                <td><?= htmlspecialchars($vente['transaction_id']) ?></td>
                                <td><?= htmlspecialchars($vente['statut']) ?></td>
                                <td>
                                    <button class="btn btn-primary btn-effectuer" data-id="<?= htmlspecialchars($vente['transaction_id']) ?>">Effectuer</button>
                                </td>
                            </tr>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </tbody>
            </table>

            <!-- Tableau des ventes vendues -->
            <h2 class="mt-4">Ventes Vendues</h2>
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>Montant</th>
                        <th>Cash Possible</th>
                        <th>Network</th>
                        <th>Numéro Personnel</th>
                        <th>Réseau de Réception</th>
                        <th>Numéro Réception</th>
                        <th>Détenteur de SIM</th>
                        <th>ID de Transaction</th>
                        <th>Statut</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($ventes as $vente): ?>
                        <?php if ($vente['statut'] === 'vendu'): ?>
                            <tr>
                                <td><?= htmlspecialchars($vente['montant']) ?></td>
                                <td><?= htmlspecialchars($vente['cash_possible']) ?></td>
                                <td><?= htmlspecialchars($vente['network']) ?></td>
                                <td><?= htmlspecialchars($vente['personal_number']) ?></td>
                                <td><?= htmlspecialchars($vente['reception_network']) ?></td>
                                <td><?= htmlspecialchars($vente['reception_number']) ?></td>
                                <td><?= htmlspecialchars($vente['sim_holder']) ?></td>
                                <td><?= htmlspecialchars($vente['transaction_id']) ?></td>
                                <td><?= htmlspecialchars($vente['statut']) ?></td>
                            </tr>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </tbody>
            </table>
        <?php endif; ?>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        $(document).on('click', '.btn-effectuer', function() {
            var transactionId = $(this).data('id');

            // Appel AJAX pour mettre à jour le statut
            $.ajax({
                url: './controller/updateStatut.php',
                type: 'POST',
                data: {
                    id: transactionId,
                    statut: 'vendu'
                },
                success: function(response) {
                    alert(response);
                    location.reload(); // Rafraîchir la page pour voir les changements
                },
                error: function() {
                    alert('Erreur lors de la mise à jour du statut.');
                }
            });
        });
    </script>
</body>
</html>
