let canvas = document.querySelector("footer div canvas");

let audio = new Audio("https://raw.githubusercontent.com/rafaelreis-hotmart/Audio-Sample-files/master/sample.mp3")
let footer = document.querySelector("footer");
let div = footer.children[1];
let pause = div.children[0];
let arret = div.children[1];
let mute = div.children[2];

const contexte = canvas.getContext("2d");

if(canvas && canvas.getContext) {
    contexte.beginPath();
    contexte.moveTo(6, 6);
    contexte.lineTo(14, 10);
    contexte.lineTo(6, 14);
    contexte.fill();
}
contexte.lineWidth = 1;

contexte.fillStyle = "#ffffff";
contexte.fill();

canvas.addEventListener("click", () => {
    audio.play();
});
pause.addEventListener("click", () => {
    audio.pause();
});
arret.addEventListener("click", () => {
    audio.pause();
    audio.currentTime = 0;
});
mute.addEventListener("click", () => {
    audio.muted = !audio.muted;
});
