const menu = document.querySelector(".nav-responsive-container");
const ham = document.querySelector(".menu-burger");
const xIcon = document.querySelector(".xIcon");
const menuIcon = document.querySelector(".open");
const links = document.querySelectorAll('.nav__link')

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
    console.log(link.href, window.location.href);
    console.log('estoy aqui');
    if(link.href === window.location.href){
        console.log("estoy en la pagina")
      link.setAttribute('aria-current', 'page')
      console.log(link)
    }
  })