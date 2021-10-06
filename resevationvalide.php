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

<section>
    <h1>Réservation</h1>
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




    <div class="container-form">
        <?php

        if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
            die('methode non autorisée!!');
        }

        $user_name = cleanInput($_POST['user_name']);
        $user_firstName = cleanInput($_POST['user_firstName']);
        $user_mail = cleanInput($_POST['user_mail']);
        $user_phone = cleanInput($_POST['user_phone']);
        $user_dateReservation = cleanInput($_POST['user_dateReservation']);
        $user_timesReservation = cleanInput($_POST['user_timesReservation']);


        if ((empty($user_name)) ||
            (empty($user_firstName)) ||
            (empty($user_mail))||
            (empty($user_phone)) ||
            (empty($user_dateReservation))||
            (empty($user_timesReservation)) ||
            !filter_var($user_mail, FILTER_VALIDATE_EMAIL)) {
            echo 'Il manque des informations ou le format des données n\'est pas bon';
        } else {
            echo 'Merci ' . $user_firstName . ' ' . $user_name . ', votre réservation a bien été prise en compte pour le ' . $user_dateReservation . ' a ' . $user_timesReservation . '.';
        }

        function cleanInput(string $value): string
        {
            $value = trim($value);
            $value = htmlspecialchars($value);
            return $value;
        }
        ?>


    </div>

</div>




<?php
require 'footer.php';
?>

<script src="script.js"></script>

</body>
</html>