<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Footer</title>
    @vite('resources/css/footer.css')
</head>
<body>
<footer class=" relative bg-black w-full h-screen flex flex-col justify-center items-center">
    <div class="h-60 flex justify-center items-center">
        <a href="/" class="group">
            <h1 class="text-white uppercase text-6xl sm:text-8xl hover:text-gray-600 hover:duration-500 duration-500">Yolan mack</h1>
        </a>
    </div>
    <div class="w-full flex flex-col">
        <div class="w-full flex flex-col p-4 sm:p-0">
            <a href="mailto:contact@yolanmack.com" class="flex sm:justify-center items-center" target="_blank">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="white" class="w-4 h-4 mr-2">
                    <path stroke-linecap="round" d="M16.5 12a4.5 4.5 0 11-9 0 4.5 4.5 0 019 0zm0 0c0 1.657 1.007 3 2.25 3S21 13.657 21 12a9 9 0 10-2.636 6.364M16.5 12V8.25" />
                </svg>
                <p class="text-white hover:text-gray-600 hover:duration-500 duration-500">Contact@yolanmack.com</p>
            </a>
            <a href="tel:+33664568789" class="flex sm:justify-center items-center" target="_blank">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="white" class="w-4 h-4 mr-2">
                    <path fill-rule="evenodd" d="M1.5 4.5a3 3 0 013-3h1.372c.86 0 1.61.586 1.819 1.42l1.105 4.423a1.875 1.875 0 01-.694 1.955l-1.293.97c-.135.101-.164.249-.126.352a11.285 11.285 0 006.697 6.697c.103.038.25.009.352-.126l.97-1.293a1.875 1.875 0 011.955-.694l4.423 1.105c.834.209 1.42.959 1.42 1.82V19.5a3 3 0 01-3 3h-2.25C8.552 22.5 1.5 15.448 1.5 6.75V4.5z" clip-rule="evenodd" />
                </svg>
                <p class="text-white hover:text-gray-600 hover:duration-500 duration-500"> 06 64 56 87 89</p>
            </a>
            <a href="https://maps.app.goo.gl/kZuMV7ydYMwrR2AG6" class="flex sm:justify-center items-center" target="_blank">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="white" class="w-4 h-4 mr-2">
                    <path fill-rule="evenodd" d="M11.54 22.351l.07.04.028.016a.76.76 0 00.723 0l.028-.015.071-.041a16.975 16.975 0 001.144-.742 19.58 19.58 0 002.683-2.282c1.944-1.99 3.963-4.98 3.963-8.827a8.25 8.25 0 00-16.5 0c0 3.846 2.02 6.837 3.963 8.827a19.58 19.58 0 002.682 2.282 16.975 16.975 0 001.145.742zM12 13.5a3 3 0 100-6 3 3 0 000 6z" clip-rule="evenodd" />
                </svg>
                <p class="text-white hover:text-gray-600 hover:duration-500 duration-500"> Rue nationale, Lacroix Saint Ouen - FRANCE </p>
            </a>
        </div>
        <div class="w-full flex flex-col sm:flex-row sm:justify-center sm:gap-4 p-4 sm:p-0">
            <a href="https://www.instagram.com/yolanmack/" class="col-span-1 group flex sm:justify-center items-center " target="_blank">
                <img src="{{ URL('images/socialNetwork/instagram.png') }}" alt="" class="w-5 h-5 mr-2">
                <p class="text-white hover:text-gray-600 hover:duration-500 duration-500">Instagram</p>
            </a>
            <a href="https://twitter.com/yolanmack" class=" col-span-1 flex sm:justify-center items-center " target="_blank">
                <img src="{{ URL('images/socialNetwork/twitterx.png') }}" alt="" class="w-5 h-5 mr-2">
                <p class="text-white hover:text-gray-600 hover:duration-500 duration-500">Twitter</p>
            </a>
            <a href="https://www.youtube.com/@yolanmack" class=" col-span-1 flex sm:justify-center items-center " target="_blank">
                <img src="{{ URL('images/socialNetwork/youtube.png') }}" alt="" class="w-5 h-5 mr-2">
                <p class="text-white hover:text-gray-600 hover:duration-500 duration-500">Youtube</p>
            </a>
            <a href="https://wa.me/0664568789" class=" col-span-1 flex sm:justify-center items-center " target="_blank">
                <img src="{{ URL('images/socialNetwork/whatsapp.png') }}" alt="" class="w-5 h-5 mr-2">
                <p class="text-white hover:text-gray-600 hover:duration-500 duration-500">Whatsapp</p>
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
                <button id="openModal1" class="w-full text-white py-2 hover:underline whitespace-nowrap">Politique de Confidentialité</button>
                <button id="openModal2" class="w-full text-white py-2 hover:underline whitespace-nowrap">Mentions légales</button>
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
                <p class="my-2">Dernière mise à jour : 12/10/2023</p>
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
                    <h1 class="text-2xl font-bold">Ceci est un test de la deuxieme modal</h1>
                    <button id="closeModal2" class="modal-close p-2 -mt-2 -mr-2 hover:text-black">&times;</button>
                </div>
                <p class="my-2">Dernière mise à jour : 12/10/2023</p>
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
</body>
</html>
