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
