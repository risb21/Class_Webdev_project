let login = document.getElementById("login");
let signup = document.getElementById("signup");
let overlay = document.getElementsByClassName("loginsignup")[0];
let popup = document.getElementsByClassName("popup")[0];

let toSign = document.getElementById("toSign");
let toForm = document.getElementById("toLog");
let signForm = document.getElementsByClassName("signupForm")[0];
let logForm = document.getElementsByClassName("loginForm")[0];
let formDiv = document.getElementsByClassName("form-div")[0];

var regex = /^\d/;

function onInput(e) {
    var currentVal = e.target.value;

    if (!currentVal.match(regex)) {
        console.log("The value entered was a digit");
    }
}

function highlight( e ) {
    var cellNo = Number(e.slice(-2));
    if (cellNo <= 0) {
        cellNo *= -1;
    }
    var row = Math.floor(cellNo / 9);
    var col = cellNo % 9;
    const cells = document.getElementsByClassName('cell');
    Array.from(cells).forEach(function(ex) {
        var cellNoEach;
        if ((cellNoEach = ex.id.slice(-2)) <= 0) {
            cellNoEach *= -1;
        }
        var eachRow = Math.floor(cellNoEach / 9);
        var eachCol = cellNoEach % 9;
        if (row == Math.floor(cellNoEach / 9) ||
            col == cellNoEach % 9 
            || (Math.floor(eachRow/3) == Math.floor(row/3) &&
                Math.floor(eachCol/3) == Math.floor(col/3))
            ) {
            ex.style.filter = "opacity(85%)";
        }
        if (cellNoEach == row * 9 + col) {
            ex.style.filter = "opacity(70%)";
        }
    });
}
function unfocus( e ) {
    var cellNo = Number(e.slice(-2));
    if (cellNo <= 0) {
        cellNo *= -1;
    }

    var row = Math.floor(cellNo / 9);
    var col = cellNo % 9;
    const cells = document.getElementsByClassName('cell');
    Array.from(cells).forEach((ex) => {
        var cellNoEach;
        if ((cellNoEach = ex.id.slice(-2)) <= 0) {
            cellNoEach *= -1;
        }
        var eachRow = Math.floor(cellNoEach / 9);
        var eachCol = cellNoEach % 9;
        if (row == Math.floor(cellNoEach / 9) 
        || col == cellNoEach % 9
        || (Math.floor(eachRow/3) == Math.floor(row/3) 
            && Math.floor(eachCol/3) == Math.floor(col/3))) {
            ex.style = null;
        }
    });
}

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

login.onclick = () => {
    tolog();
    if (overlay.style.display !== "none") {
        overlay.style.display = "none";
    } else {
        overlay.style.display = "flex";
    }
};

signup.onclick = () => {
    tosign();
    if (overlay.style.display !== "none") {
        overlay.style.display = "none";
    } else {
        overlay.style.display = "flex";
    }
}

function hideOverlay() {
    overlay.style.display = "none";
}

let what = true;
popup.onclick = () => { what = false; }

overlay.onclick = () => {
    if (what) {
        overlay.style.display = "none";
    } else {
        what = true;
    }
};

toSign.onclick = () => {
    tosign();
}

toLog.onclick = () => {
    tolog();
}

const cells = document.getElementsByClassName('cell');
// Array.from(cells).forEach( (e) => {
//         e.addEventListener("focusin", highlight(e.id));
//         e.addEventListener("focusout", unfocus(e.id));
// });
// const cells = document.getElementsByClassName('cell');

Array.from(cells).forEach( (e) => {
    e.addEventListener("input", () => {
        if (e.value.length > 1) {
            if (/[1-9]/.test(e.value[1])) {
                if (e.value[1] == e.value[0]) {
                    e.value = null;
                } else {
                    e.value = e.value[1];
                }
            } else {
                e.value = e.value[0];
            }
        } else {
            if (!(/[1-9]/.test(e.value))) {
                e.value = null;
            }
        }
    })
})

eyeBtn1 = document.getElementsByClassName("eye")[0];
pw1 = document.getElementById("password-log");

eyeBtn1.onclick = () => {
    if (pw1.type == "text") {
        pw1.type = "password";
    } else {
        pw1.type = "text";
    }
}

document.body.onkeydown = (event) => {
    if (event.key === "Escape") {
        hideOverlay();
    }
}