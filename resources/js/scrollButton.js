document.getElementById("scrollToSection2").addEventListener("click", function(event) {
    event.preventDefault(); // Empêche le comportement par défaut du lien
    const section2 = document.getElementById("aPropos");
    const offset = section2.offsetTop; // Position de la section2 par rapport au haut de la page
    const duration = 500; // Durée de l'animation en millisecondes

    // Fonction pour effectuer l'animation de défilement
    function smoothScroll() {
        if (window.pageYOffset < offset) {
            window.scrollBy(0, 10);
            setTimeout(smoothScroll, 10);
        }
    }

    smoothScroll();
});
