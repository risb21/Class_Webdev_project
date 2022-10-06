let login = document.getElementById("login");
let overlay = document.getElementsByClassName("loginsignup")[0];
let idk = document.getElementsByClassName("popup")[0];

console.log(typeof(overlay));
console.log(overlay.style.display);


login.onclick = function () {
    if (overlay.style.display !== "none") {
        overlay.style.display = "none";
    } else {
        overlay.style.display = "flex";
    }
};

function hideOverlay() {
    console.log(idk.onclick);
    overlay.style.display = "none";
}

overlay.onclick = function () {hideOverlay};