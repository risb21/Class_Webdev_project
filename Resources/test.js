let login = document.getElementById("login");
let overlay = document.getElementsByClassName("loginsignup")[0];
let popup = document.getElementsByClassName("popup")[0];

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
    console.log(popup.onclick);
    overlay.style.display = "none";
}

let what = true;
popup.onclick = function() { what = false; }

overlay.onclick = function () {
    if (what) {
        overlay.style.display = "none";
    } else {
        what = true;
    }
};

let toSign = document.getElementById("toSign");
let toForm = document.getElementById("toLog");
let signForm = document.getElementsByClassName("signupForm")[0];
let logForm = document.getElementsByClassName("loginForm")[0];
let formDiv = document.getElementsByClassName("form-div")[0];

toSign.onclick = function () {
    signForm.style.visibility = "visible";
    signForm.style.height = "100%";
    logForm.style.visibility = "hidden";
    logForm.style.height = "0%";
    formDiv.style.margin = " 0 0 0 60%";
}
toLog.onclick = function () {
    signForm.style.visibility = "hidden";
    signForm.style.height = "0%";
    logForm.style.visibility = "visible";
    logForm.style.height = "100%";
    formDiv.style.margin = "0 0 0 0%";
}