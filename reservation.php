<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Réservation</title>
    <link href="styles.css" rel="stylesheet">
</head>
<body>
    <?php
        require 'header.php' 
    ?>

        <h2 class='subtitle'>Réservation</h2>


    
  <div class="box-address">
    <p class="name-place">
        Le café du port
    </p>
      <p>
        📍 1-2 Quai Deschamps<br>
        33100 Bordeaux
      </p>
      <p>Réservations : 
          <a class="link" href="tel:+33556778118">05.56.77.81.18</a>
      </p>
      <p> Groupes : 
          <a class="link" href="tel:+330677829127">06.77.82.91.27</a>
      </p>
  </div>




<div class="container-form">  
        <form id="reservation" method="post">
          <h3>Vous souhaitez réserver?</h3>
          <h4>Veuillez remplir le formulaire ci-dessous :</h4>
          <label>
            <input placeholder="Votre nom" type="text" required autofocus>
          </label>
          <label>
            <input placeholder="Votre adresse email" type="email" required>
          </label>
          <label>
            <input placeholder="Votre numéro de téléphone" type="tel" required>
          </label>
          <label>
            <textarea placeholder="Date et Heure" type="" required></textarea>
          </label>
          <label>
            <button name="submit" type="submit" id="reservation-submit">Envoyer</button>
          </label>
        </form>
      </div>
      


    <?php 
        require 'footer.php';
    ?>

<script src="script.js"></script>

</body>
</html>