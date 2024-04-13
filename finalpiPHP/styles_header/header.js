document.addEventListener('DOMContentLoaded', function(){
    window.addEventListener('scroll', function() {
        var header = document.querySelector('header');
        if (window.scrollY > 0) {
            header.classList.add('scroll');
        } else {
            header.classList.remove('scroll');
        }
    });

    // Seleciona todos os links do menu
    const menuLinks = document.querySelectorAll('.menu-desktop .menu ul li a');


    const btnMenu = document.querySelector('.btn-menu');
    const menuDesktop = document.querySelector('.menu-desktop');

    btnMenu.addEventListener('click', function () {
        menuDesktop.classList.toggle('menu-aberto');
    });
});
