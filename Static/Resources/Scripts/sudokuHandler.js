var boards;
if (!(sessionStorage.getItem("board"))) {
    var xhttp = new XMLHttpRequest();
    
    xhttp.onload = function() {
        boards = this.responseText;
        boards = eval(boards);
        sessionStorage.setItem("board", boards[0]);
        sessionStorage.setItem("puzzle", boards[1]);
    }
    xhttp.open("GET", "requestHandler.php", true);
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
    sTable.style.filter = null;
}
