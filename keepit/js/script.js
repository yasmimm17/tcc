function closemodal() {
    let modal = document.querySelector(".modal__container");
    modal.style.visibility = "hidden";
    modal.style.opacity = "0";
}

function openmodal() {
    let modal = document.querySelector(".modal__container");
    modal.style.visibility = "visible";
    modal.style.opacity = "1";
}