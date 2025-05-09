let menu = document.querySelector(".menu");
let btnMenu = document.querySelector(".btn_menu");

btnMenu.onclick = function(){
    // if(menu.style.transform == "translateY(-100%)"){
    //     menu.style.transform = "translateY(0)"
    //     document.body.style.overflow = "hidden";
    // }else {
    //     menu.style.transform = "translateY(-100%)";
    //     document.body.style.overflow = "auto";
    // }

    menu.classList.toggle("menu-open");  // Ajout d'une classe CSS pour gérer les transitions
    document.body.style.overflow = menu.classList.contains("menu-open") ? "hidden" : "auto";

}

document.addEventListener('DOMContentLoaded', function() {
    const menu = document.querySelector('.menu');
    const btnMenu = document.querySelector('.btn_menu');
    
    if (btnMenu && menu) {
        btnMenu.addEventListener('click', function() {
            menu.classList.toggle('active');
            document.body.style.overflow = menu.classList.contains('active') ? 'hidden' : 'auto';
        });
    }

    // Gestion des boutons de navigation
    const aboutButton = document.querySelector('h1 button');
    if (aboutButton) {
        aboutButton.addEventListener('click', function() {
            window.location.href = 'about.html';
        });
    }

    const contactButton = document.querySelector('.tird_section button');
    if (contactButton) {
        contactButton.addEventListener('click', function() {
            window.location.href = 'contact.html';
        });
    }

    // Gestion du bouton "Savoir en click"
    const savoirButton = document.querySelector('.header__btn_menu button');
    if (savoirButton) {
        savoirButton.addEventListener('click', function() {
            window.location.href = 'about.html';
        });
    }
});

    