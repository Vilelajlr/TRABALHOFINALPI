<<<<<<< HEAD
document.addEventListener('DOMContentLoaded', function () {
=======
document.addEventListener('DOMContentLoaded', function() {
>>>>>>> 8e1e48b4df86963fea936e7873c33ad116378961
    let numero = Math.floor(Math.random() * 100) + 1;
    const botaoPalpite = document.querySelector('#btn-jogar');
    const botaoReiniciar = document.querySelector('#gerar');
    const contadorH3 = document.getElementById('contador');
    const resultado = document.getElementById('jogadas');
<<<<<<< HEAD
    let contador = 0;
    let ultimo = -1;
=======
    const selecioneDificuldade = document.getElementById('dificuldade').value;
    let contador = 0;
    let ultimaJogada = 0;
    let numerosTentados = []; 
>>>>>>> 8e1e48b4df86963fea936e7873c33ad116378961

    resultado.textContent = 'Para iniciar digite um número e clique em palpites';
    const play = document.getElementById('play');

<<<<<<< HEAD
    play.addEventListener('click', function () {
=======
    play.addEventListener('click', function() {
>>>>>>> 8e1e48b4df86963fea936e7873c33ad116378961
        let sumir = document.getElementById('sumir');
        sumir.style.display = 'none';
        let aparecer = document.getElementById('aparecer');
        aparecer.style.display = 'flex';

    });

    botaoPalpite.addEventListener('click', verificarAcerto);
    botaoReiniciar.addEventListener('click', reiniciar);
<<<<<<< HEAD

   function verificarPalpite(inputPalpite, selecioneDificuldade) {
        if (inputPalpite == numero && contador > 0 && contador <= getLimiteJogadas(selecioneDificuldade)) {
            resultado.textContent = 'Parabéns você acertou o número! ' + numero;
            botaoPalpite.disabled = true;
        }   else if (inputPalpite < numero && contador > 0 && contador <= getLimiteJogadas(selecioneDificuldade)) {
            resultado.textContent = 'O número é maior que ' + inputPalpite;
        }   else if (inputPalpite > numero && contador > 0 && contador <= getLimiteJogadas(selecioneDificuldade)) {
            resultado.textContent = 'O número é menor que ' + inputPalpite;
        }   else if (contador == 0) {
            contadorZero();
        } 
    }

    function getLimiteJogadas(dificuldade) {
        switch (dificuldade) {
            case 'facil':
                return 15;
            case 'medio':
                return 10;
            case 'dificil':
                return 5;
            default:
                return 0;
        }
    }

    function verificarAcerto() {
        const inputPalpite = document.getElementById('palpites').value;
        const selecioneDificuldade = document.getElementById('dificuldade').value;

=======

    function verificarPalpite(inputPalpite, selecioneDificuldade) {
        if (inputPalpite == numero && contador > 0 && contador <= getLimiteJogadas(selecioneDificuldade)) {
            resultado.textContent = 'Parabéns você acertou o número! ' + numero;
            botaoPalpite.disabled = true;
        } else if (inputPalpite < numero && contador > 0 && contador <= getLimiteJogadas(selecioneDificuldade)) {
            resultado.textContent = 'O número é maior que ' + inputPalpite;
        } else if (inputPalpite > numero && contador > 0 && contador <= getLimiteJogadas(selecioneDificuldade)) {
            resultado.textContent = 'O número é menor que ' + inputPalpite;
        } else if (contador == 0) {
            contadorZero();
        }
    }

    function getLimiteJogadas(dificuldade) {
        switch (dificuldade) {
            case 'facil':
                return 15;
            case 'medio':
                return 10;
            case 'dificil':
                return 5;
            default:
                return 0;
        }
    }

    function verificarAcerto() {
        const inputPalpite = parseInt(document.getElementById('palpites').value);
>>>>>>> 8e1e48b4df86963fea936e7873c33ad116378961

        if (contador == 0) {
            contador = getLimiteJogadas(selecioneDificuldade);
            contadorH3.textContent = 'Jogadas Restantes: ' + contador;
        }

<<<<<<< HEAD
        if (inputPalpite == ultimo){
            resultado.textContent = 'Número repetido, tente outro!';
            return;
        }else{
            ultimo = inputPalpite;
            contador--;
            contadorH3.textContent = 'Jogadas Restantes: ' + contador;
    
=======
        if (numerosTentados.includes(inputPalpite)) {
            resultado.textContent = 'Você já tentou esse número';
            return;
        } else {
            numerosTentados.push(inputPalpite);

            ultimaJogada = inputPalpite;
            contador--;
            contadorH3.textContent = 'Jogadas Restantes: ' + contador;
>>>>>>> 8e1e48b4df86963fea936e7873c33ad116378961
            verificarPalpite(inputPalpite, selecioneDificuldade);
        }
    }

    function contadorZero() {
        resultado.textContent = 'Suas tentativas acabaram, o número era ' + numero;
        contadorH3.textContent = 'Clique em Reiniciar para recomeçar';
        document.getElementById('palpites').value = '';
        botaoPalpite.disabled = true;
    }

    function reiniciar() {
        numero = Math.floor(Math.random() * 100) + 1;
        contador = 0;
        contadorH3.textContent = 'Contador de Jogadas: ' + contador;
        resultado.textContent = 'Para iniciar digite um número e clique em palpites';
        document.getElementById('palpites').value = '';
        botaoPalpite.disabled = false;
<<<<<<< HEAD

    }
});
=======
        numerosTentados = []; 
    }
});
>>>>>>> 8e1e48b4df86963fea936e7873c33ad116378961
