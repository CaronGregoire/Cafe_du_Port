<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Le café du Port - Bordeaux</title>
    <link href="styles.css" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
</head>

<body>

<?php require("header.php"); ?>

<!-- PAGE CONTACT -->

    <p class="contact">
        <h2 class='subtitle'>Contact et accès</h2>
    </p>

    
<div class="container-box">
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

  <div class="maps">
    <iframe src="https://www.google.com/maps/embed?pb=!1m19!1m8!1m3!1d22631.945535720064!2d-0.56224!3d44.842072!3m2!1i1024!2i768!4f13.1!4m8!3e0!4m0!4m5!1s0xd5526320ac42e31%3A0x414cca4ece802d4a!2sLe%20Caf%C3%A9%20du%20Port%2C%201%20Quai%20Deschamps%2C%2033100%20Bordeaux!3m2!1d44.8381823!2d-0.5585285999999999!5e0!3m2!1sfr!2sfr!4v1632949797362!5m2!1sfr!2sfr" width="50%" height="auto" loading="lazy"></iframe>
  </div>
</div>

<!-- FORMULAIRE DE CONTACT -->
    <div class="container-form">  
        <form id="contact" method="post">
          <h3>Vous souhaitez nous contacter ?</h3>
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
            <textarea placeholder="Ecrivez votre message" required></textarea>
          </label>
          <label>
            <button name="submit" type="submit" id="contact-submit">Envoyer</button>
          </label>
        </form>
      </div>

<!--  POP-UP - POST VALIDATION FORMULAIRE-->
<div class="box">
	<a class="button" href="#contact-submit"></a>
</div>

<div id="popup1" class="overlay">
	<div class="popup">
		<h2>Nous avons bien reçu votre message.</h2>
		<a class="close" href="javascript:’top.close();’">&times;</a>
		<div class="content">
      <p>
Merci de nous avoir contacté. Nous vous répondrons dans les plus brefs délais.<br>
A très vite ! <br><br>
L'équipe du Café du Port.</p>
		</div>
	</div>
</div>


</body>
</html>