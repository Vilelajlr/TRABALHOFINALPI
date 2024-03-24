
    
    function imgSlider(anything){
        const jogoDaVelha = document.querySelector('#jogaDaVelha');
        const campoMinado = document.querySelector('.campoMinado');
        const adivinhacao = document.querySelector('.adivinhacao');
              
        const slider = document.querySelector('.jogos');
        slider.style.transition = 'all 1s ease-in-out';
        slider.src = anything;
     
        if(anything == 'images/img2.png'){
            adivinhacao.style.display = 'none';
            jogoDaVelha.style.display = 'none';
            campoMinado.style.display = 'block';
    
            
        } else if(anything == 'images/img3.png'){
            jogoDaVelha.style.display = 'none';
            campoMinado.style.display = 'none';
            adivinhacao.style.display = 'block';
    
           
        } else {
            campoMinado.style.display = 'none';
            adivinhacao.style.display = 'none';
            jogoDaVelha.style.display = 'block';
        }
    }
 


     

 
