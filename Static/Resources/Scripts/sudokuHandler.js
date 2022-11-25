var boards;
var xhttp = new XMLHttpRequest();
xhttp.onload = function() {
    boards = this.responseText;
    boards = eval(boards);
    console.log(boards);
    for (var i = 0; i < 9; i++) {
        for (var j = 0; j < 9; j++) {
            Array.from(cells)[i*9 + j].value = boards[1][i][j] ? boards[1][i][j] : null; 
        }
    }
}
xhttp.open("GET", "requestHandler.php", true);
xhttp.send();