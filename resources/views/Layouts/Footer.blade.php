<footer class=" relative bg-black w-full h-screen flex flex-col justify-center items-center">
    <div class="w-full flex flex-col">
        <div class="w-full flex flex-col p-4 sm:p-0">
            <a href="mailto:contact@yolanmack.com" title="Redirection vers mon adresse email" class="flex justify-center items-center" target="_blank">
                <p class="text-2xl sm:text-3xl text-white hover:text-gray-600 hover:duration-500 duration-500 text-center">Contact@yolanmack.com</p>
            </a>
            <a href="tel:+33664568789" title="Redirection vers mon numéro de téléphone" class="flex justify-center items-center" target="_blank">
                <p class="text-2xl sm:text-3xl text-white hover:text-gray-600 hover:duration-500 duration-500 text-center"> 06 64 56 87 89</p>
            </a>
            <a href="https://maps.app.goo.gl/kZuMV7ydYMwrR2AG6" title="Redirection vers mon adresse de société" class="flex justify-center items-center" target="_blank">
                <p class="text-2xl sm:text-3xl text-white hover:text-gray-600 hover:duration-500 duration-500 text-center"> Rue nationale, Lacroix Saint Ouen - FRANCE </p>
            </a>
        </div>
        <div class="w-full flex flex-row justify-center sm:gap-4 p-4 sm:p-0">
            <a href="https://www.instagram.com/yolanmack/" title="Redirection sur mon instagram" class="col-span-1 group flex sm:justify-center items-center " target="_blank">
                <img src="{{ URL('images/socialMedia/instagram.svg') }}" alt="" class="w-10 h-auto mr-2">
            </a>
            <a href="https://twitter.com/yolanmack" title="Redirection sur mon twitter" class=" col-span-1 flex sm:justify-center items-center " target="_blank">
                <img src="{{ URL('images/socialMedia/twitterx.svg') }}" alt="" class="w-10 h-auto mr-2">
            </a>
            <a href="https://wa.me/0664568789" title="Redirection sur mon whatsapp" class=" col-span-1 flex sm:justify-center items-center " target="_blank">
                <img src="{{ URL('images/socialMedia/whatsapp.svg') }}" alt="" class="w-10 h-auto mr-2">
            </a>
        </div>
    </div>
    <div class="absolute bottom-0 w-full">
        <div class="flex justify-center items-center flex-col ">
            <div class=" flex justify-center items-center">
                <p class="w-full text-white text-center whitespace-nowrap">© 2023 Yolan Mack</p>
                <span class="px-2 text-white ">|</span>
                <p class=" w-full text-white text-center whitespace-nowrap">Tous droits réservés</p>
            </div>
            <div class=" flex justify-center items-center gap-4">
                <button id="openModal1" class="w-full text-white py-2 hover:underline whitespace-nowrap">Confidentialité</button>
                <button id="openModal2" class="w-full text-white py-2 hover:underline whitespace-nowrap">Mentions Légales</button>
            </div>
        </div>
    </div>
    <div id="myModal1" class="fixed inset-0 flex items-center justify-center z-50 hidden">
        <div class="modal-overlay absolute inset-0 bg-black opacity-50"></div>

        <div class="modal-container bg-white w-11/12 sm:w-9/12 lg:w-7/12 h-[750px] sm:h-[600px]  mx-auto rounded shadow-lg z-50 overflow-y-auto">
            <!-- Contenu de la fenêtre modale -->
            <div class="modal-content py-4 text-left px-6">
                <div class="flex justify-between items-center pb-3">
                    <h1 class="text-2xl font-bold">Politique de Confidentialité</h1>
                    <button id="closeModal1" class="modal-close p-2 -mt-2 -mr-2 hover:text-black text-3xl">&times;</button>
                </div>
                <p class="my-2">Dernière mise à jour : 01/01/2024</p>
                <h1 class="text-2xl font-medium my-2">Introduction</h1>
                <p class=" my-2">La protection de vos données personnelles est une priorité pour Yolan Mack.
                    Cette politique de confidentialité a pour but de vous informer sur la manière dont nous collectons,
                    utilisons et protégeons vos informations. En utilisant nos services, vous acceptez les pratiques
                    décrites dans cette politique.
                </p>
                <h1 class="text-3xl my-4">Informations que nous collectons</h1>
                <h1 class="text-xl font-medium my-2">Données personnelles</h1>
                <p>Lorsque vous utilisez nos services, nous pouvons collecter les types de données personnelles
                    suivants :
                </p>
                <p>- Données de communication : Les informations que vous nous envoyez via des e-mails, des formulaires
                    de contact, ou d'autres moyens de communication.
                </p>
                <h1 class="text-xl font-medium my-2">Données non personnelles</h1>
                <p>Nous pouvons également collecter des données non personnelles, telles que des données agrégées,
                    statistiques et informations démographiques.
                </p>
                <h1 class="text-xl font-medium my-2">Sécurité des données</h1>
                <p>Nous prenons des mesures de sécurité appropriées pour protéger vos données personnelles contre les
                    accès non autorisés, la divulgation, la modification ou la destruction. Cependant, aucun système
                    de sécurité n'est infaillible, et nous ne pouvons garantir la sécurité de vos données.
                </p>
                <h1 class="text-xl font-medium my-2">Vos droits</h1>
                <p>Vous avez certains droits concernant vos données personnelles, notamment le droit d'accès, de
                    rectification, de suppression, et de limitation du traitement. Pour exercer ces droits, veuillez
                    nous contacter à contact@yolanmack.com.
                </p>
                <h1 class="text-xl font-medium my-2">Modifications de la politique de confidentialité</h1>
                <p>Nous pouvons mettre à jour cette politique de confidentialité de temps à autre pour refléter les
                    changements dans nos pratiques. La date de la dernière mise à jour sera indiquée en haut de cette
                    page.
                </p>
                <h1 class="text-xl font-medium my-2">Contactez-nous</h1>
                <p>Si vous avez des questions ou des préoccupations concernant notre politique de confidentialité,
                    veuillez nous contacter à contact@yolanmack.com.
                </p>
            </div>
        </div>
    </div>
    <div id="myModal2" class="fixed inset-0 flex items-center justify-center z-50 hidden">
        <div class="modal-overlay absolute inset-0 bg-black opacity-50"></div>

        <div class="modal-container bg-white w-11/12 sm:w-9/12 lg:w-7/12 h-[750px] sm:h-[600px]  mx-auto rounded shadow-lg z-50 overflow-y-auto">
            <!-- Contenu de la fenêtre modale -->
            <div class="modal-content py-4 text-left px-6">
                <div class="flex justify-between items-center pb-3">
                    <h1 class="text-2xl font-bold">Mentions Légales</h1>
                    <button id="closeModal2" class="modal-close p-2 -mt-2 -mr-2 hover:text-black text-3xl">&times;</button>
                </div>
                <p class="my-2">Dernière mise à jour : 01/01/2024</p>
                <h1 class="text-2xl font-medium my-2">Éditeur du site</h1>
                <p class=" my-2">
                    Nom de l'entreprise : Yolan Mack<br>
                    Forme juridique : Entrepreneur individuel<br>
                    Adresse : 7 rue nationale, Lacroix Saint Ouen 60610<br>
                    Téléphone :  06 64 56 87 89<br>
                    E-mail : contact@yolanmack.fr<br>
                    SIRET : 94851531700014<br>
                </p>
                <h1 class="text-xl font-medium my-2">Responsable de la publication</h1>
                <p>
                    Directeur de la publication : Yolan Mazajczyk
                    <br>Hébergeur du site : IONOS
                </p>
                <h1 class="text-xl font-medium my-2">Propriété intellectuelle</h1>
                <p>
                    Tous droits réservés - Yolan Mack
                </p>
                <h1 class="text-xl font-medium my-2">Propriété intellectuelle</h1>
                <p>
                    Le contenu de ce site (textes, images, vidéos, etc.) est la propriété de Yolan Mack
                    et est protégé par les lois sur la propriété intellectuelle. Toute reproduction ou utilisation
                    sans autorisation préalable est interdite.
                </p>
                <h1 class="text-xl font-medium my-2">Protection des données personnelles</h1>
                <p>
                    Conformément à la loi, Yolan Mack s'engage à protéger les données personnelles collectées
                    sur ce site. Pour en savoir plus sur notre politique de confidentialité, veuillez consulter notre
                    page dédiée à la Politique de confidentialité.
                </p>
                <h1 class="text-xl font-medium my-2">Clause de non-responsabilité</h1>
                <p>
                    Yolan Mack décline toute responsabilité concernant l'exactitude, la fiabilité,
                    la pertinence ou l'exhaustivité des informations fournies sur ce site.
                    L'utilisation des informations est sous la responsabilité de l'utilisateur.
                </p>
                <h1 class="text-xl font-medium my-2">Conditions d'utilisation</h1>
                <p>
                    L'utilisation de ce site est soumise aux conditions générales d'utilisation.
                    En accédant à ce site, vous acceptez ces conditions.
                </p>
                <h1 class="text-xl font-medium my-2">Politique de confidentialité</h1>
                <p>
                    Veuillez consulter notre Politique de confidentialité pour comprendre
                    comment nous collectons, utilisons et protégeons vos données personnelles.
                </p>
                <h1 class="text-xl font-medium my-2">Cookies</h1>
                <p>
                    Ce site n'utilise que les cookies nécessaires et obligatoire au bon fonctionnement de celui-ci.
                </p>
            </div>
        </div>
    </div>

</footer>

<script name="modal1">
    // JavaScript pour ouvrir et fermer la fenêtre modale
    const openModal1 = document.getElementById("openModal1");
    const closeModal1 = document.getElementById("closeModal1");
    const modal1 = document.getElementById("myModal1");

    openModal1.addEventListener("click", () => {
        modal1.classList.remove("hidden");
    });

    closeModal1.addEventListener("click", () => {
        modal1.classList.add("hidden");
    });

    modal1.addEventListener("click", (e) => {
        if (e.target === modal1) {
            modal1.classList.add("hidden");
        }
    });
</script>

<script name="modal2">
    // JavaScript pour ouvrir et fermer la fenêtre modale
    const openModal2 = document.getElementById("openModal2");
    const closeModal2 = document.getElementById("closeModal2");
    const modal2 = document.getElementById("myModal2");

    openModal2.addEventListener("click", () => {
        modal2.classList.remove("hidden");
    });

    closeModal2.addEventListener("click", () => {
        modal2.classList.add("hidden");
    });

    modal2.addEventListener("click", (e) => {
        if (e.target === modal2) {
            modal2.classList.add("hidden");
        }
    });
</script>


