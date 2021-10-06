<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Carte et menus</title>
    <link href="styles.css" rel="stylesheet">
    <link rel="shortcut icon" href="logo.png">

</head>
<body>

<?php
        require 'header.php';
        require 'menuData.php';
    ?>
    
  <div class="pic-ctn">
    <img src="assets_menus/plat1.jpg" alt="beef" class="pic"  >
    <img src="assets_menus/plat2.jpg" alt="shirp" class="pic" >
    <img src="assets_menus/plat3.jpg" alt="chicken" class="pic" >
    <img src="assets_menus/plat4.jpg" alt="chocolate" class="pic" >
    <img src="assets_menus/plat5.jpg" alt="eclairFraise" class="pic" >
    <img src="assets_menus/plat6.jpg" alt="creme" class="pic" >
    <img src="assets_menus/plat7.jpg" alt="champagne" class="pic" >
  </div>

<div class="pic-mobile">
    <img src="assets_menus/chicken3.png" alt="chicken" class="pic" >
</div>

  <div class="menu">
<h1 class="titleh2">Menus</h1>



  </div>

  <div class="container">
    <div class="menu">

        <?php foreach ($menus as $menuType => $meals): ?>
            <h2 class="menu-group-heading">
                <?= $menuType ?>
            </h2>
            <?php foreach ($meals as $key => $mealDetails): ?>
                <div class="menu-item">
                    <img class="menu-item-image" src="assets_menus/<?= $mealDetails['img'] ?>" alt="<?= $mealDetails['name'] ?>">

                    <div class="menu-item-text">
                        <h3 class="menu-item-heading">
                            <span class="menu-item-name"><?= $mealDetails['name'] ?></span>
                            <span class="menu-item-price"><?= $mealDetails['price'] ?> €</span>

                        </h3>
                        <p class="menu-item-description">
                            <?= $mealDetails['description'] ?>
                        </p>
                    </div>
                </div>
            <?php endforeach ?>
        <?php endforeach; ?>
    </div>
  </div>

    </div>
  </div>

  <?php 
        require 'footer.php';
    ?>
<script src = "script.js"></script>
<script src = "scriptMenus.js"></script>
</body>
</html>