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