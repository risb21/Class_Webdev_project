let login = document.getElementById("login");
let signup = document.getElementById("signup");
let overlay = document.getElementsByClassName("loginsignup")[0];
let popup = document.getElementsByClassName("popup")[0];

let toSign = document.getElementById("toSign");
let toForm = document.getElementById("toLog");
let signForm = document.getElementsByClassName("signupForm")[0];
let logForm = document.getElementsByClassName("loginForm")[0];
let formDiv = document.getElementsByClassName("form-div")[0];


let newPrev = null;

// Highlights box, row, col and value in cell
function highlight( e ) {
    if (newPrev) { unfocus(newPrev); }
    var cellNo = Number(e.id.slice(-2));
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
        if (ex.value == cells[cellNo].value && cells[cellNo].value) {
            ex.style.filter = "opacity(70%)";
        }
        if (cellNoEach == row * 9 + col) {
            ex.style.filter = "opacity(70%)";
        }
    });
    focussedInd = cellNo;
}

function unfocus( e ) {
    var cellNo = Number(e.id.slice(-2));
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
        if (ex.value == cells[cellNo].value) {
            ex.style = null;
        }
    });
    focussedInd = -1;
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

function toLogout() {
    document.getElementById("logout").submit();
    return false;
}

toSign.onclick = () => {
    tosign();
}

toLog.onclick = () => {
    tolog();
}

const cells = document.getElementsByClassName('cell');
// Array.from(cells).forEach( (e) => {
//         e.addEventListener("focusin", highlight(e));
//         e.addEventListener("focusout", unfocus(e));
// });
// const cells = document.getElementsByClassName('cell');

// Sets cursor to the end, consistent input
Array.from(cells).forEach( (e) => {
    e.addEventListener("click", () => {
        let end = e.value.length;
        e.setSelectionRange(end, end);
        e.focus();
    })
});

Array.from(cells).forEach( (e) => {
    e.addEventListener("focusin", (event) => {
        highlight(e);
        prevFocus = document.activeElement;
        console.log(prevFocus);
        // console.log(event.relatedTarget)
    });
});

Array.from(cells).forEach( (e) => {
    e.addEventListener("focusout", (event) => {
        unfocus(e);
        
        // prevFocus = event.relatedTarget;
        // console.log(prevFocus);
    });
});

Array.from(cells).forEach( (e) => {
    e.addEventListener("input", () => {
        if (e.value.length > 1) {
            if (/[1-9]/.test(e.value[1])) {
                if (e.value[1] == e.value[0]) {
                    e.value = e.value[0];
                    unfocus(e);
                    e.value = null;
                    highlight(e);
                } else {
                    let temp = e.value;
                    e.value = temp[0];
                    unfocus(e);
                    e.value = temp[1];
                    highlight(e);
                }
            } else {
                e.value = e.value[0];
            }
        } else {
            if (!(/[1-9]/.test(e.value))) {
                e.value = null;
            }
            highlight(e);
        }
    })
})

// Array.from(cells).forEach( (e) => {
//     e.addEventListener("focusout", (event => {
//         event.stopPropagation();
//         prevFocus = document.activeElement;
//     }))
// });

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

let numpad = document.getElementsByClassName("num");
let sentinel = true;
let prevFocus = null;
let sent2 = true;
let prev = false;

Array.from(numpad).forEach((e) => {
    e.onclick = () => {
        sent2 = false;
        console.log("hi");
    }
    e.addEventListener("click", () => {
        // sent2 = false;

        console.log(e.target);
        // if (sentinel || prev) {
            console.log(newPrev);
            var cellNo = Number(e.id.slice(-2));
            if (cellNo <= 0) {
                cellNo *= -1;
            }
            // unfocus(prevFocus);
            if (prevFocus.value == e.innerHTML) {
                unfocus(prevFocus)
                prevFocus.value = null;
            } else {
                unfocus(prevFocus);
                prevFocus.value = e.innerHTML;
                // console.log("HI");
            }
            var cellNo = Number(e.id.slice(-2));
            if (cellNo <= 0) {
                cellNo *= -1;
            }
            highlight(prevFocus);
            newPrev = prevFocus;
            prev = true;
        // }
    });
});

document.body.addEventListener("click", () => {
    if (sent2) {
        sentinel = false;
        prev = false;
    } else {
        sentinel = true;
        prev = true;
    }
});