// Récupérer les éléments boutonUnMute, boutonMute et la vidéo
const buttonUnMute = document.querySelector('.buttonUnMute');
const buttonMute = document.querySelector('.buttonMute');
const video = document.querySelector('video');

// Cacher le bouton de mute au chargement de la page
buttonMute.style.display = 'none';

// Écouter le clic sur le boutonUnMute
buttonUnMute.addEventListener('click', function () {
    // Activer le son de la vidéo
    video.muted = false;

    // Cacher le boutonUnMute
    buttonUnMute.style.display = 'none';

    // Afficher le boutonMute
    buttonMute.style.display = 'flex';
});

// Écouter le clic sur le boutonMute
buttonMute.addEventListener('click', function () {
    // Couper le son de la vidéo
    video.muted = true;

    // Cacher le boutonMute
    buttonMute.style.display = 'none';

    // Afficher le boutonUnMute
    buttonUnMute.style.display = 'flex';
});
