document.addEventListener('DOMContentLoaded', function() {
    let numero = Math.floor(Math.random() * 100) + 1;
    const botaoPalpite = document.querySelector('#btn-jogar');
    const botaoReiniciar = document.querySelector('#gerar');
    const contadorH3 = document.getElementById('contador');
    const resultado = document.getElementById('jogadas');
    const selecioneDificuldade = document.getElementById('dificuldade').value;
    let contador = 0;
    let ultimaJogada = 0;
    let numerosTentados = []; 

    resultado.textContent = 'Para iniciar digite um número e clique em palpites';
    const play = document.getElementById('play');

    play.addEventListener('click', function() {
        let sumir = document.getElementById('sumir');
        sumir.style.display = 'none';
        let aparecer = document.getElementById('aparecer');
        aparecer.style.display = 'flex';

    });

    botaoPalpite.addEventListener('click', verificarAcerto);
    botaoReiniciar.addEventListener('click', reiniciar);

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

        if (contador == 0) {
            contador = getLimiteJogadas(selecioneDificuldade);
            contadorH3.textContent = 'Jogadas Restantes: ' + contador;
        }

        if (numerosTentados.includes(inputPalpite)) {
            resultado.textContent = 'Você já tentou esse número';
            return;
        } else {
            numerosTentados.push(inputPalpite);

            ultimaJogada = inputPalpite;
            contador--;
            contadorH3.textContent = 'Jogadas Restantes: ' + contador;
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
        numerosTentados = []; 
    }
});
