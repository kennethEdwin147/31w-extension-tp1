(function () {

    console.log('ui');

    // Création dynamique d'une galerie.

    let elGalerie = document.querySelector('.galerie'); // Récuperation de galerie créé dans l'éditeur gutemberg 
    let elGalerie__img = elGalerie.querySelectorAll('.galerie figure img'); // Récuperation des images de la galerie gutemberg


    for (let i = 0; i < elGalerie__img.length; i++) {
        elGalerie__img[i].addEventListener('mousedown', function () {  //Image clické ? : on accède récupère son 'scr';
            let src = elGalerie__img[i].getAttribute('src');

            console.log(src);
        });
    }

})();