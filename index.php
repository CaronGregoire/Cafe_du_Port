<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenue au Café du Port</title>
    <link href="styles.css" rel="stylesheet" />
    <link rel="shortcut icon" href="logo.png">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
</head>
<body>
    <?php
        require 'header.php' 
    ?>
    <section id="welcomepage">

        <h1 class="welcome" >Bienvenue au Café Du Port </h1>

      </section>
    
    <div class="content">
        
        <div >
            <h2 class="titleh2" >Présentation</h2>
                <p class="presentationtime">
                    Le Café du Port est un petit bar restaurant, ravi de vous accueillir
                    du Lundi au Dimanche, que ce soit pour déjeuner, diner ou bruncher.
                    Nous cuisinons au rythme des saisons afin de exalter vos papilles.
                    Notre terrasse au bord de la Garonne est ouverte dès l'arrivée des beaux jours.
                </p>
        </div>

        <div class="photo">
                <img src="assets/vue1.webp" class="vueTerrasseOne" alt="picturePont" />
                <img src="assets/vue2.webp" class="vueTerrasseTwo" alt="pictureGaronne" />
                <img src="assets/le-cafe-du-port.jpg" class="vueTerasseThree" alt="pictureTable" />
                <img src="assets/restaurantint.jpg" class="vueTerrasseTwo" alt="pictureinrestaurant" />
        </div>

        <div class="horaires">   
            <h2 class="titleh2">Horaires</h2>
                <p class="presentationtime">
                    Notre équipe est présente pour vous accueillir
                    du lundi au dimanche de 11h00 à 22h00.
                </p>
                <p class="presentationtime">
                    Un service de voiturier est à votre disposition.
                </p>
            <div class="photovalet">
                <img src="assets/valet.webp" alt="picturevalet" />
            </div>

        </div>    
        </div>        
    </div>
    <?php 
        require 'footer.php';
    ?>
    <script src="scriptMenus.js"></script>
    <script src="script.js"></script>
</body>
</html>