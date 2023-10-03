let div = document.querySelector("footer div");
let button1 = div.children[0];
let button2 = div.children[1];
let currentFontSize = 16;
let body = document.querySelector("body");
let selecter = document.querySelector("footer div select")

button1.addEventListener("click", () => {
    currentFontSize += 1;
    body.style.fontSize = currentFontSize + "px";
});
button2.addEventListener("click", () => {
    currentFontSize -= 1;
    body.style.fontSize = currentFontSize + "px";
})

selecter.addEventListener("change", (event) => {
    let couleurChoisi = event.target.value;
    body.style.backgroundColor = couleurChoisi;
});