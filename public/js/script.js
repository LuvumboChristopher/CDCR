const menu = document.querySelector(".nav-responsive-container");
const ham = document.querySelector(".menu-burger");
const xIcon = document.querySelector(".xIcon");
const menuIcon = document.querySelector(".open");

ham.addEventListener("click", toggleMenu)

function toggleMenu() {
    if (menu.classList.contains("showMenu")) {
        menu.classList.remove("showMenu");
        xIcon.style.display = "none";
        menuIcon.style.display = "block";
    } else {
        menu.classList.add("showMenu");
        xIcon.style.display = "block";
        menuIcon.style.display = "none";
    }
}
