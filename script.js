const Open = document.getElementById("burger");
const Close = document.getElementById("fermer");
const SideMenu = document.getElementById("sidemenu");

if (Open) {
    Open.addEventListener("click", () => {
        SideMenu.classList.remove("invisible")
    })
}

// Fermer le menu
if (Close) {
    Close.addEventListener("click", () => {
        SideMenu.classList.add("invisible")
    })
}

// Modals d'Amine
var modal = document.getElementById("modal-joueur1");
var btn = document.getElementById("player1");
var close = document.getElementsByClassName("close")[0];

btn.onclick = function () {
    modal.style.display = "block";
}

close.onclick = function () {
    modal.style.display = "none";
}

window.onclick = function (event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}