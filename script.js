

  const burger = document.getElementById('burger');
  const navbar = document.getElementById('navbar');
  burger.addEventListener('click', (event) => {
      navbar.classList.toggle('d-block');
      console.log(event.target);
  })
