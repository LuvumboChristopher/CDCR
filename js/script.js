const menu = document.querySelector(".nav-responsive-container");
const ham = document.querySelector(".menu-burger");
const xIcon = document.querySelector(".xIcon");
const menuIcon = document.querySelector(".open");
const links = document.querySelectorAll('.nav-link')

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

links.forEach(link => {
<<<<<<< HEAD
    if(link.href === window.location.href){
=======
    if(link.href === window.location.href.concat('.html')){
>>>>>>> bd4fcb739fa1189ea5e585843de09304a5763a93
      link.setAttribute('aria-current', 'page')
    }
})
