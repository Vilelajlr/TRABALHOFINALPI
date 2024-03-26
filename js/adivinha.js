document.addEventListener('DOMContentLoaded', function() {
   let numero = Math.floor(Math.random() * 100) + 1;
   const botaoPalpite = document.querySelector('#btn-jogar');
   const botaoReiniciar = document.querySelector('#gerar');
   const contadorH3 = document.getElementById('contador');
   const resultado = document.getElementById('jogadas');
   let contador = 0;
   contadorH3.textContent = 'Contador de Jogadas: ' + contador;
   resultado.textContent = 'Para iniciar digite um número e clique em palpites';
    const play = document.getElementById('play');

    play.addEventListener('click', function(){
        let sumir = document.getElementById('sumir');
        sumir.style.display = 'none';
        let aparecer = document.getElementById('aparecer');
        aparecer.style.display = 'flex';

    });



   botaoPalpite.addEventListener('click', verificarAcerto);
   botaoReiniciar.addEventListener('click', reiniciar);
    

    function verificarAcerto(){
        contador++;
        contadorH3.textContent = 'Contador de Jogadas: ' + contador;
        const inputPalpite = document.getElementById('palpites').value;

        if(inputPalpite == numero && contador < 8){
            resultado.textContent = 'Parabéns você acertou o número!';
        }else if(inputPalpite < numero && contador < 8){
            resultado.textContent = 'O número é maior que ' + inputPalpite;
        }else if(inputPalpite > numero && contador < 8){
            resultado.textContent = 'O número é menor que ' + inputPalpite;
        }else if(contador >= 8){
            resultado.textContent = 'Suas tentativas acabaram, o número era ' + numero;
            contadorH3.textContent = 'Clique em Reiniciar para recomeçar';
        }

    }


    function reiniciar(){
        numero = Math.floor(Math.random() * 100) + 1;
        contador = 0;
        contadorH3.textContent = 'Contador de Jogadas: ' + contador;
        resultado.textContent = 'Para iniciar digite um número e clique em palpites';
        document.getElementById('palpites').value = '';
    }



});