<?php include 'controller/manage_rate.php'; ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier le Taux de Réduction</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<?php include('nav.php'); ?>

    <div class="container mt-5">
        <h1>Gestion du Taux de Réduction</h1>
        <p>Le taux de réduction actuel est : <strong><?php echo htmlspecialchars($rate * 100); ?>%</strong></p>

        <?php if (isset($success_message)): ?>
            <div class="alert alert-success"><?php echo htmlspecialchars($success_message); ?></div>
        <?php endif; ?>

        <form action="controller/manage_rate.php" method="POST">
            <div class="form-group">
                <label for="rate">Nouveau taux de réduction (en pourcentage)</label>
                <input type="number" id="rate" name="rate" class="form-control" step="0.01" min="15" max="35" value="<?php echo htmlspecialchars($rate * 100); ?>" required>
            </div>
            <button type="submit" class="btn btn-primary">Modifier</button>
        </form>
    </div>
</body>
</html>
