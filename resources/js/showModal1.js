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
