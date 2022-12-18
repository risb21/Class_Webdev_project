let login = document.getElementById("login");
let signup = document.getElementById("signup");
let overlay = document.getElementsByClassName("loginsignup")[0];
let popup = document.getElementsByClassName("popup")[0];

let toSign = document.getElementById("toSign");
let toForm = document.getElementById("toLog");
let signForm = document.getElementsByClassName("signupForm")[0];
let logForm = document.getElementsByClassName("loginForm")[0];
let formDiv = document.getElementsByClassName("form-div")[0];
let diff = 0.5;

sTable.boxShadow = "20px black";

// Highlights box, row, col and value in cell
function highlight( e ) {
    if (prevActiveElement) { unfocus(prevActiveElement); }
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
            ex.style.filter = "brightness(92%)";
        }
        if (ex.value == cells[cellNo].value && cells[cellNo].value) {
            ex.style.filter = "brightness(83%)";
        }
        if (cellNoEach == row * 9 + col) {
            ex.style.filter = "brightness(83%)";
        }
    });
}

function unfocus(e) {
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
            ex.style.filter = null;
        }
        if (ex.value == cells[cellNo].value) {
            ex.style.filter = null;
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

if (login) {
    login.onclick = () => {
        tolog();
        if (overlay.style.display !== "none") {
            overlay.style.display = "none";
        } else {
            overlay.style.display = "flex";
        }
    };
}

if (signup) {
    signup.onclick = () => {
        tosign();
        if (overlay.style.display !== "none") {
            overlay.style.display = "none";
        } else {
            overlay.style.display = "flex";
        }
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

// const cells = document.getElementsByClassName('cell');

// Sets cursor to the end, consistent input
Array.from(cells).forEach( (e) => {
    e.addEventListener("click", () => {
        let end = e.value.length;
        e.setSelectionRange(end, end);
        e.focus();
    })
});

function errorHandle(e) {
    let index = e.id.slice(-2)
    if (index <= 0) {
        index *= -1;
    }
    if (e.value.length > 1) {
        if (/[1-9]/.test(e.value[1])) {
            if (e.value[1] == e.value[0]) {
                if (e.classList.contains("fixed")) {
                    e.value = e.value[0];
                } else {
                    e.value = e.value[0];
                    unfocus(e);
                    e.value = null;
                    highlight(e);
                    e.style.background = null;
                }
            } else {
                if (e.classList.contains("fixed")) {
                    e.value = e.value[0];
                } else {
                    let temp = e.value;
                    e.value = temp[0];
                    unfocus(e);
                    e.value = temp[1];
                    highlight(e);
                    if (Number(e.value) == sBoardArr[Math.floor(index/9)][index%9]) {
                        e.style.color = null;
                    } else {
                        e.style.color = "#EE3333";
                    }
                }                 
            }
        } else {
            e.value = e.value[0];
        }
    } else {
        if (!(/[1-9]/.test(e.value))) {
            e.value = null;
        } else {
            if (Number(e.value) == sBoardArr[Math.floor(index/9)][index%9]) {
                e.style.color = null;
            } else {
                e.style.color = "#EE3333";
            }
        }
        highlight(e);
    }
}

/* Listens to inputs to cells, handles highlighting for 
each cell, and will also handle mistakes counter. */
Array.from(cells).forEach( (e) => {
    e.addEventListener("input", () => {
        let index = e.id.slice(-2)
        if (index <= 0) {
            index *= -1;
        }
        if (e.value.length > 1) {
            if (/[1-9]/.test(e.value[1])) {
                if (e.value[1] == e.value[0]) {
                    if (e.classList.contains("fixed")) {
                        e.value = e.value[0];
                    } else {
                        e.value = e.value[0];
                        unfocus(e);
                        e.value = null;
                        highlight(e);
                        e.style.background = null;
                    }
                } else {
                    if (e.classList.contains("fixed")) {
                        e.value = e.value[0];
                    } else {
                        let temp = e.value;
                        e.value = temp[0];
                        unfocus(e);
                        e.value = temp[1];
                        highlight(e);
                        if (Number(e.value) == sBoardArr[Math.floor(index/9)][index%9]) {
                            e.style.color = null;
                        } else {
                            e.style.color = "#EE3333";
                        }
                    }                 
                }
            } else {
                e.value = e.value[0];
            }
        } else {
            if (!(/[1-9]/.test(e.value))) {
                e.value = null;
            } else {
                if (Number(e.value) == sBoardArr[Math.floor(index/9)][index%9]) {
                    e.style.color = null;
                } else {
                    e.style.color = "#EE3333";
                }
            }
            highlight(e);
        }
        isFilled();
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

let diffculties = Array.from(document.getElementsByName("diff"));

function diffClickHandle(e) {
    if (localStorage.getItem("board")) {
        localStorage.removeItem("board");
        localStorage.removeItem("puzzle");
    }
    switch (e.value) {
        case "Easy":
            diff = 33;
            break;
        case "Medium":
            diff = 50;
            break;
        case "Hard":
            diff = 80;
            break;
        default:
            diff = 66;
            break;
    }
    document.getElementById("difficult").value = e.value;
    Handle(diff, true);
}

diffculties.forEach((e) => {
    e.addEventListener("click", () => {
        sTable.classList.add("blurred");
        console.log(sTable.classList);
        diffClickHandle(e);
    });
})

document.body.onkeydown = (event) => {
    if (event.key === "Escape") {
        hideOverlay();
    }
}

let numpad = document.getElementsByClassName("num");
let prevActiveElement = null;

Array.from(numpad).forEach((e) => {
    e.addEventListener("click", () => {
        if (!prevActiveElement.classList.contains("fixed")) {
            if (prevActiveElement.classList.contains("cell")) {
                var cellNo = Number(e.id.slice(-2));
                if (cellNo <= 0) {
                    cellNo *= -1;
                }
                if (prevActiveElement.value == e.innerHTML) {
                    unfocus(prevActiveElement);
                    prevActiveElement.value = null;
                    
                } else {
                    unfocus(prevActiveElement);
                    prevActiveElement.value = e.innerHTML;
                    let index = prevActiveElement.id.slice(-2);
                    if (index <= 0) {
                        index *= -1;
                    }
                    if (Number(prevActiveElement.value) == sBoardArr[Math.floor(index/9)][index%9]) {
                        prevActiveElement.style.color = null;
                    } else {
                        prevActiveElement.style.color = "#EE3333";
                    }
                }
                var cellNo = Number(e.id.slice(-2));
                if (cellNo <= 0) {
                    cellNo *= -1;
                }
            }
            isFilled();
        }
    });
});