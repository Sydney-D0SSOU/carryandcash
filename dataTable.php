<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau des Ventes</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- DataTables CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
</head>

<body>
    <!-- En-tête avec menu -->
  
<?php include('nav.php'); ?>

    <div class="container mt-4">
        <h1 class="mb-4">Liste des Ventes</h1>

        <!-- Tableau des ventes -->
        <table id="ventesTable" class="table table-striped table-bordered">
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
                <!-- Les lignes seront insérées ici par DataTables -->
            </tbody>
        </table>

        <h1 class="mt-4 mb-4">Ventes Traitées</h1>

        <!-- Tableau des ventes traitées -->
        <table id="traitesTable" class="table table-striped table-bordered">
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
                <!-- Les lignes seront insérées ici par DataTables -->
            </tbody>
        </table>
    </div>

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <!-- DataTables JS -->
    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script>
       $(document).ready(function() {
    // Initialiser la table des ventes en cours
    var ventesTable = $('#ventesTable').DataTable({
        "ajax": {
            "url": "controller/listVente.php?statut=en cours", // Filtrer les ventes en cours
            "dataSrc": ""
        },
        "columns": [
            { "data": "montant" },
            { "data": "cash_possible" },
            { "data": "network" },
            { "data": "personal_number" },
            { "data": "reception_network" },
            { "data": "reception_number" },
            { "data": "sim_holder" },
            { "data": "transaction_id" },
            { "data": "statut" },
            {
                "data": null,
                "defaultContent": '<button class="btn btn-primary btn-effectuer">Effectuer</button>',
                "orderable": false
            }
        ]
    });

    // Initialiser la table des ventes traitées
    var traitesTable = $('#traitesTable').DataTable({
        "ajax": {
            "url": "controller/listVente.php?statut=traité", // Filtrer les ventes traitées
            "dataSrc": ""
        },
        "columns": [
            { "data": "montant" },
            { "data": "cash_possible" },
            { "data": "network" },
            { "data": "personal_number" },
            { "data": "reception_network" },
            { "data": "reception_number" },
            { "data": "sim_holder" },
            { "data": "transaction_id" },
            { "data": "statut" }
        ]
    });

    // Ajouter un événement de clic pour les boutons "Effectuer"
    $('#ventesTable tbody').on('click', '.btn-effectuer', function() {
        var row = $(this).closest('tr');
        var data = ventesTable.row(row).data();
        var transactionId = data.transaction_id;

        // Appeler le serveur pour mettre à jour le statut
        $.ajax({
            url: 'controller/updateStatut.php',
            type: 'POST',
            data: {
                id: transactionId,
                statut: 'traité'
            },
            success: function(response) {
                // Rafraîchir les deux tableaux
                ventesTable.ajax.reload();
                traitesTable.ajax.reload();
            },
            error: function() {
                alert('Erreur lors de la mise à jour du statut.');
            }
        });
    });
});

    </script>
</body>

</html>