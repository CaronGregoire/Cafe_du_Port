const message = "Merci de nous avoir contacté. Nous répondrons à votre demande dans les plus brefs délais. A très bientôt ! L'équipe du Café du Port.";

document
    .getElementById("contact-submit")
    .addEventListener("click", function(event) {
        event.preventDefault();
        alert(message);
    });