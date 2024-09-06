<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>Redirection</title>
</head>
<body>
    <?php
    // Vérifier si la soumission a été un succès
    if (isset($_GET['success']) && $_GET['success'] === 'true') {
        echo '<script>
            Swal.fire({
                icon: "success",
                title: "Succès",
                text: "Les données ont été enregistrées avec succès."
            }).then(function() {
                window.location = "../index.php"; // Page de confirmation
            });
        </script>';
    } else {
        echo '<script>
            Swal.fire({
                icon: "error",
                title: "Erreur",
                text: "Une erreur s\'est produite lors de l\'enregistrement des données."
            });
        </script>';
    }
    ?>
</body>
</html>
