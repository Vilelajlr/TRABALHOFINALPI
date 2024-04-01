
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
    
        // Função para adicionar/remover a classe 'active' dependendo da posição da página
        function highlightCurrentLink() {
            const scrollPosition = window.scrollY;
            
            menuLinks.forEach(link => {
                const sectionId = link.getAttribute('href');
                const section = document.querySelector(sectionId);
                
                if (section.offsetTop <= scrollPosition && section.offsetTop + section.offsetHeight > scrollPosition) {
                    menuLinks.forEach(item => {
                        item.classList.remove('active');
                    });
                    link.classList.add('active');
                } else {
                    link.classList.remove('active');
                }
            });
        }

        
            const btnMenu = document.querySelector('.btn-menu');
            const menuDesktop = document.querySelector('.menu-desktop');
        
            btnMenu.addEventListener('click', function () {
                menuDesktop.classList.toggle('menu-aberto');
            });
        
        


    
        // Adiciona um listener de evento de rolagem
        window.addEventListener('scroll', highlightCurrentLink);
        highlightCurrentLink();
    });
    

    




