<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carry & Ca$h - Démarrage</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/styles.css">
    <style>
        .position-top-right {
            position: absolute;
            top: 0;
            right: 0;
            margin: 15px; /* Ajustez la marge si nécessaire */
        }
    </style>
</head>
<body>
    <div class="container-fluid d-flex flex-column justify-content-center align-items-center vh-100 position-relative">
        <!-- Bouton pour ouvrir le menu d'aide, positionné en haut complètement à droite -->
        <button type="button" class="btn btn-info position-top-right mr-4" data-toggle="modal" data-target="#helpModal">
            Aide
        </button>

        <img src="./picture/1.png" alt="Carry & Ca$h Logo" class="logo">
        <h1 class="mt-4 text-center">Transformez votre crédit en cash</h1>
        <div class="arrow-container">
            <a href="form.php" class="d-flex align-items-center">
                <span class="arrow-text">Suivant</span>
                <img src="./picture/next.png" alt="Suivant" class="arrow">
            </a>
        </div>
    </div>

    <!-- Modale pour l'aide -->
    <div class="modal fade" id="helpModal" tabindex="-1" role="dialog" aria-labelledby="helpModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="helpModalLabel">Menu d'aide</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <h6>À propos</h6>
                    <p>Carry & Ca$h est une plateforme qui vous permet de transformer vos crédits en argent liquide rapidement et facilement.</p>
                    <hr>
                    <h6>Aide sur cette page</h6>
                    <p>Pour commencer, cliquez sur le bouton "Suivant" pour remplir le formulaire. Si vous avez des questions, veuillez contacter notre service clientèle.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Scripts JS de Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
