let boiteClick = document.querySelector("footer div");
let compteur = 0;
boiteClick.addEventListener("click", () => {
    compteur += 1;
    boiteClick.textContent = compteur;
});
