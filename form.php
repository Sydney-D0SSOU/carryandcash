<?php include 'controller/manage_rate.php'; ?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carry & Ca$h - Vendre Crédit</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="./css/form.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        let currentSlide = 0;

        function showSlide(index) {
            const slides = document.getElementsByClassName('slide');
            for (let i = 0; i < slides.length; i++) {
                slides[i].style.display = 'none';
            }
            slides[index].style.display = 'block';
            currentSlide = index;
        }

        function nextSlide() {
            showSlide(currentSlide + 1);
        }

        function prevSlide() {
            showSlide(currentSlide - 1);
        }
        function calculateCash() {
            var montant = document.getElementById('montant').value;
            var cash = montant-(montant * <?php echo ($rate); ?>);
            document.getElementById('cash').value = cash.toFixed(2);
        }
    </script>
</head>
<body onload="showSlide(0)">
    <div class="container d-flex flex-column justify-content-center align-items-center vh-100">
        <img src="./picture/1.png" alt="Carry & Ca$h Logo" class="logo">

        <!-- Formulaire -->
        <form action="./controller/submit_form.php" method="POST">
            <!-- Slide 1: Montant -->
            <div class="slide">
                <h3>Combien de crédits voulez-vous nous vendre ?</h3>
                <div class="form-group mt-4">
                    <label for="montant" class="form-label">Montant à vendre</label>
                    <input type="number" id="montant" name="montant" class="form-control mt-2" placeholder="Montant à vendre" oninput="calculateCash()" required>
                </div>
                <div class="form-group mt-3">
                    <label for="cash" class="form-label">Cash possible</label>
                    <input type="text" id="cash" name="cash_possible" class="form-control mt-2" placeholder="0" readonly>
                </div>
                <button type="button" class="arrow-btn mt-4" onclick="nextSlide()">
                    <i class="fas fa-arrow-right"></i>
                </button>
            </div>

            <!-- Slide 2: Choix du réseau -->
            <div class="slide">
                <h3>Choisissez votre réseau</h3>
                <div class="form-group mt-4">
                    <label for="network" class="form-label">Réseau</label>
                    <select id="network" name="network" class="form-control">
                        <option value="celtis">Celtis</option>
                        <option value="moov">Moov</option>
                        <option value="mtn">MTN</option>
                    </select>
                </div>
                <button type="button" class="arrow-btn mt-4 mr-2" onclick="prevSlide()">
                    <i class="fas fa-arrow-left"></i>
                </button>
                <button type="button" class="arrow-btn mt-4 ml-2" onclick="nextSlide()">
                    <i class="fas fa-arrow-right"></i>
                </button>
            </div>

            <!-- Slide 3: Entrer son numéro personnel -->
            <div class="slide">
                <h3>Entrez votre numéro personnel</h3>
                <div class="form-group mt-4">
                    <label for="personalNumber" class="form-label">Numéro personnel</label>
                    <input type="tel" id="personalNumber" name="personal_number" class="form-control mt-2" placeholder="Votre numéro" required>
                </div>
                <button type="button" class="arrow-btn mt-4 mr-2" onclick="prevSlide()">
                    <i class="fas fa-arrow-left"></i>
                </button>
                <button type="button" class="arrow-btn mt-4 ml-2" onclick="nextSlide()">
                    <i class="fas fa-arrow-right"></i>
                </button>
            </div>
            <!-- Slide 4: Instructions et ID de la transaction -->
            <div class="slide">
                <h3>Envoyez le crédit</h3>
                <p class="mt-4">Veuillez taper un de ces codes pour nous envoyer le crédit :</p>
                <p class="mt-2"><strong>*102*Montant*Numéro*Code#</strong></p>
                <div class="form-group mt-4">
                    <label for="transactionId" class="form-label">ID de la transaction</label>
                    <input type="text" id="transactionId" name="transaction_id" class="form-control mt-2" placeholder="ID de la transaction" required>
                </div>
                <button type="button" class="arrow-btn mt-4 mr-2" onclick="prevSlide()">
                    <i class="fas fa-arrow-left"></i>
                </button>
                <button type="button" class="arrow-btn mt-4 ml-2" onclick="nextSlide()">
                    <i class="fas fa-arrow-right"></i>
                </button>
            </div>.
             <!-- Slide 5: Choix du réseau de reception -->
             <div class="slide">
                <h3>Choisissez votre réseau</h3>
                <div class="form-group mt-4">
                    <label for="network" class="form-label">Réseau</label>
                    <select id="network" name="reception_network" class="form-control">
                        <option value="celtis">Celtis</option>
                        <option value="moov">Moov</option>
                        <option value="mtn">MTN</option>
                    </select>
                </div>
                <button type="button" class="arrow-btn mt-4 mr-2" onclick="prevSlide()">
                    <i class="fas fa-arrow-left"></i>
                </button>
                <button type="button" class="arrow-btn mt-4 ml-2" onclick="nextSlide()">
                    <i class="fas fa-arrow-right"></i>
                </button>
            </div>
            <!-- Slide 6: Informations de réception -->
            <div class="slide">
                <h3>Informations de réception</h3>
                <div class="form-group mt-4">
                    <label for="receptionNumber" class="form-label">Numéro de réception</label>
                    <input type="tel" id="receptionNumber" name="reception_number" class="form-control mt-2" placeholder="Numéro de réception" required>
                </div>
                <div class="form-group mt-3">
                    <label for="simHolder" class="form-label">Titulaire de la SIM</label>
                    <input type="text" id="simHolder" name="sim_holder" class="form-control mt-2" placeholder="Nom du titulaire" required>
                </div>
                <button type="button" class="arrow-btn mt-4 mr-2" onclick="prevSlide()">
                    <i class="fas fa-arrow-left"></i>
                </button>
                <button class="btn btn-success mt-4" type="submit">Terminer</button>
            </div>


            
        </form>
    </div>
</body>
</html>
