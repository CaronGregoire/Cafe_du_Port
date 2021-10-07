<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Réservation</title>
    <link href="styles.css" rel="stylesheet">
    <link rel="shortcut icon" href="logo.png">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
</head>
<body>
    <?php
        require 'header.php' 
    ?>

    <section class="contact-title">
        <h1 class="titleh2">Réservation</h1>
    </section>

<div class="container-reservation">
    
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




<div class="container-reservation-form">
        <form action="resevationvalide.php" method="post">
         <h2>Vous souhaitez réserver?</h2>
          <p>Veuillez remplir le formulaire ci-dessous :</p>
            <div>
                <label for="name">Nom:</label>
                <input id="name" name="user_name" placeholder="Votre nom" type="text" required autofocus>
            </div>
            <div>
                <label for="firstName">Prénom:</label>
                <input id="firstName"  name="user_firstName" placeholder="Votre Prénom" type="text" required>
            </div>
            <div>
                <label for="phone">Téléphone:</label>
                <input id="phone" name="user_phone" placeholder="Votre numéro de téléphone" type="tel" required>
            </div>
            <div>
                <label for="mail">Votre adresse e-mail:</label>
                <input id="mail" name="user_mail" placeholder="Votre adresse e-mail" type="email" required>
            </div>
            <div>
                <label for="dateReservation">Date de votre réservation:</label>
                <input id="dateReservation" name="user_dateReservation" type="date" value = required></input>
            </div>
            <div>
                <input type="radio" name="user_timesReservation" value="12h00" id="12h00" /> <label for="12h00">12h00</label><br />
                <input type="radio" name="user_timesReservation" value="13h00" id="13h00" /> <label for="13h00">13h00</label><br />
                <input type="radio" name="user_timesReservation" value="19h00" id="19h00" /> <label for="19h00">19h00</label><br />
                <input type="radio" name="user_timesReservation" value="20h30" id="20h30" /> <label for="20h30">20h30</label>
            </div>
            <div>
            <label></label>
            <button name="submit" type="submit" id="reservation-submit">Envoyer</button>
            </div>
        </form>
      </div>

</div>

    <?php 
        require 'footer.php';
    ?>

<script src="script.js"></script>

</body>
</html>