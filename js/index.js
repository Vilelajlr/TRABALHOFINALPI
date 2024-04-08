function imgSlider(anything) {
    const jogoDaVelha = document.querySelector('#jogaDaVelha');
    const campoMinado = document.querySelector('.campoMinado');
    const adivinhacao = document.querySelector('.adivinhacao');

    const slider = document.querySelector('.jogos');
    slider.style.transition = 'all 1s ease-in-out';
    slider.src = anything;

    if (anything == 'images/img2.png') {
        adivinhacao.style.display = 'none';
        jogoDaVelha.style.display = 'none';
        campoMinado.style.display = 'block';


    } else if (anything == 'images/img3.png') {
        jogoDaVelha.style.display = 'none';
        campoMinado.style.display = 'none';
        adivinhacao.style.display = 'block';


    } else {
        campoMinado.style.display = 'none';
        adivinhacao.style.display = 'none';
        jogoDaVelha.style.display = 'block';
    }
}



const comentarios = document.querySelectorAll('.required');
    const form = document.querySelector('.form');
    const spansRequired = document.querySelectorAll('.span-required');
    const btnValidar = document.querySelector('.btn');

    comentarios[0].addEventListener('input', validarNome);
    comentarios[1].addEventListener('input', validarMensagem);

    function setError(index){
        spansRequired[index].style.display = 'block';
        campos[index].style.border = '1px solid red';
        campos[index].style.backgroundColor = 'rgba(255, 0, 0, 0.2)';
        campos[index].style.color = 'red';
    }

    function setValidate(index){
        spansRequired[index].style.display = 'none';
        campos[index].style.border = '1px solid green';
        campos[index].style.backgroundColor = 'rgba(0, 255, 0, 0.2)';
        campos[index].style.color = 'green';
    }

    function validarNome(){
        if(comentarios[0].value.length < 3){
            setError(0);
        }else{
            setValidate(0);
        }

    }

    function validarMensagem(){
        if(comentarios[1].value.length < 3){
            setError(1);
        }else{
            setValidate(1);
        }
    }

    btnValidar.addEventListener('click', function(e){
        console.log('teste');
        e.preventDefault();
        validarNome();
        validarMensagem();
    });
