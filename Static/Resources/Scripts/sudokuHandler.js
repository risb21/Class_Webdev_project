const cells = document.getElementsByClassName('cell');
let sTable = document.getElementById("grid");
let endTime = Date.now() + (1000*60*60);
let duration = endTime;
let yesbtn = document.getElementsByName("Yes")[0];

let startTime = Date.now();

var sBoard, sPuzzle;
sPuzzleArr = Array();
sBoardArr = Array();

var boards;
function Handle(diff="", override = false) {
    if (!(sessionStorage.getItem("board")) || override) {
        console.log("hi");
        var xhttp = new XMLHttpRequest();
        
        xhttp.onload = function() {
            boards = this.responseText;
            boards = eval(boards);
            sessionStorage.setItem("board", boards[0]);
            sessionStorage.setItem("puzzle", boards[1]);
            document.getElementById("difficulties").submit();
        }
        xhttp.open("GET", "requestHandler.php?diff="+diff, true);
        xhttp.send();
    }

    if (sessionStorage.getItem("board")) {
        sBoard = sessionStorage.getItem("board");
        sPuzzle = sessionStorage.getItem("puzzle");
        for (var i = 0; i < 9; i++) {
            var temp1 = Array();
            var temp2 = Array();
            for (var j = 0; j < 9; j++) {
                temp1[j] = Number(sPuzzle[(i*9+j)*2]);
                temp2[j] = Number(sBoard[(i*9+j)*2]);
            }
            sPuzzleArr.push(temp1);
            sBoardArr.push(temp2);
        }
        for (var i = 0; i < 9; i++) {
            for (var j = 0; j < 9; j++) {
                if (sPuzzleArr[i][j]) {
                    cells.item(i*9+j).value = sPuzzleArr[i][j];
                    cells.item(i*9+j).classList.add("fixed");
                } else {
                    cells.item(i*9+j).value = null;
                }
            }
        }
        sTable.classList.remove("blurred");
        startTime = Date.now();
    }
}

Handle(50);
let currentState = [];

function isFilled() {
    currentState = [];
    let temp = [];
    for (let i = 0; i < 9; i++) {
        temp = []
        for (let j = 0; j < 9; j++) {
            temp.push(Number(cells[i*9+j].value));
        }
        currentState.push(temp);
    }
    if (String(currentState) == String(sBoardArr)) {
        endTime = Date.now();
        clearInterval(timerInterval);
        let duration = endTime - startTime;
        let timestr = "";
        timestr += String(Math.floor((duration / (60*1000)) % (60))).padStart(2, "0") + ":";
        timestr += String(Math.floor((duration / (1000) % 60))).padStart(2, "0") + ":";
        timestr += String(Math.floor((duration / 10) % 100)).padStart(2, "0");
        console.log(timestr);
        document.getElementById("logtime").style.display = null;
        document.getElementById("logtime").style.background = "rgba(0, 0, 0, 0.2)";
        document.body.click();
    }
}