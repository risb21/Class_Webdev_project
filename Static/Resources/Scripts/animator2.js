document.body.addEventListener("click", (e) => {
    if (e.target.classList.contains("num") || e.target.classList.contains("cell")) {
        if (e.target.classList.contains("cell")) {
            prevActiveElement ? unfocus(prevActiveElement) : null;
            highlight(e.target);
            e.target.focus();
            prevActiveElement = e.target;
        }
    } else {
        if (prevActiveElement) {
            unfocus(prevActiveElement);
        }
    }
    prevActiveElement = document.activeElement;
})

let timerArea = document.getElementById("timer");

function timerUpdate() {
    let duration = Date.now() - startTime;
    let timestr = "";
    timestr += String(Math.floor((duration / (60*1000)) % (60))).padStart(2, "0") + ":";
    timestr += String(Math.floor((duration / (1000) % 60))).padStart(2, "0") + ":";
    timestr += String(Math.floor((duration / 10) % 100)).padStart(2, "0");
    timerArea.innerText = timestr;
}

setInterval(timerUpdate, 10);