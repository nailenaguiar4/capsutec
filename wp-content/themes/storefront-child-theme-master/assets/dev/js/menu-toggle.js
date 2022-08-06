$(document).ready(function() {


    const navToggle = document.querySelector('.nav-toggle')
    const navMenu = document.querySelector('.nav-menu')

    navToggle.addEventListener('click', () => {
        navMenu.classList.toggle('nav-menu_visible');

        // Cambiar Mensaje de lector de pantalla si el menu esta abierto o cerrado
        if (navMenu.classList.contains('nav-menu_visible')) {
            navToggle.setAttribute('aria-label', 'Cerrar Menú')
        } else {
            navToggle.setAttribute('aria-label', 'Abrir Menú')
        }
    })
})