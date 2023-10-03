const boiteClick = document.querySelector("footer div");
let display = "";
document.addEventListener("keydown", (event) => {
    if (event.key.match(/^[0-9a-z]+$/)) {
        display += event.key;
        boiteClick.textContent = display.substring(display.length - 42);
    }
});

