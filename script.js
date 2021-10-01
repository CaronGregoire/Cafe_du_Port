const imgC = document.querySelector('.vueTerrasseOne');

imgC.addEventListener('click', function () {
    imgC.src = "https://placedog.net/300";
    imgC.alt = "Happy cute dog"
  })

  const menu = document.getElementById('burger');
  const navbar = document.getElementById('navbar');
  burger.addEventListener('click', () => {
      navbar.classList.toggle('d-block');
  })
