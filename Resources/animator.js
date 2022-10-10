let login = document.getElementById("login");
let signup = document.getElementById("signup");
let overlay = document.getElementsByClassName("loginsignup")[0];
let popup = document.getElementsByClassName("popup")[0];

console.log(typeof(overlay));
console.log(overlay.style.display);

let toSign = document.getElementById("toSign");
let toForm = document.getElementById("toLog");
let signForm = document.getElementsByClassName("signupForm")[0];
let logForm = document.getElementsByClassName("loginForm")[0];
let formDiv = document.getElementsByClassName("form-div")[0];

function tosign() {
    signForm.style.visibility = "visible";
    signForm.style.height = "100%";
    signForm.style.opacity = "100%";
    logForm.style.visibility = "hidden";
    logForm.style.height = "0%";
    logForm.style.opacity = "0%";
    logForm.style.padding = "0 0 0 0";
    formDiv.style.margin = " 0 0 0 55%";
}

function tolog() {
    signForm.style.visibility = "hidden";
    signForm.style.height = "0%";
    signForm.style.opacity = "0%";
    logForm.style.visibility = "visible";
    logForm.style.height = "100%";
    logForm.style.opacity = "100%";
    logForm.style.padding = "1.5em 0 0 1.5em";
    formDiv.style.margin = "0 0 0 0%";
}

login.onclick = function () {
    tolog();
    if (overlay.style.display !== "none") {
        overlay.style.display = "none";
    } else {
        overlay.style.display = "flex";
    }
};

signup.onclick = function () {
    tosign();
    if (overlay.style.display !== "none") {
        overlay.style.display = "none";
    } else {
        overlay.style.display = "flex";
    }
}

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

toSign.onclick = function () {
    tosign();
}

toLog.onclick = function () {
    tolog();
}

eyeBtn1 = document.getElementsByClassName("eye")[0];
pw1 = document.getElementById("password-log");

eyeBtn1.onclick = function () {
    if (pw1.type == "text") {
        pw1.type = "password";
    } else {
        pw1.type = "text";
    }
}