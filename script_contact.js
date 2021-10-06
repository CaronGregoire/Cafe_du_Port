
document
    .getElementById("contact-submit")
    .addEventListener("click", function(event) {
        event.preventDefault();
        const username = document.getElementById('name').value;
        const useremail = document.getElementById('email').value;
        const message = "Merci " + username +  " de nous avoir contacté. Nous vous répondrons dans les plus brefs délais à l'adresse indiquée : " + useremail + ".\n A très bientôt !\n L'équipe du Café du Port.";
        alert(message);
    });