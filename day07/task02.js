const boiteClick = document.querySelector("footer div");
let nomUtilisateur = ""
let nomDonne = false;
boiteClick.addEventListener("click", () => {
    while (nomDonne === false) {
        nomUtilisateur = prompt("What's your name?");
        if (nomUtilisateur !== "") {
            nomDonne = true;
        }
    }
    let resultat = confirm("Are you sure that " + nomUtilisateur + " is your name?")
    if (resultat) {
        alert("Hello " + nomUtilisateur + "!");
        boiteClick.textContent = nomUtilisateur;
    }
});