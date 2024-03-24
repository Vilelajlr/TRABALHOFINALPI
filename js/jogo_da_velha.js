
document.addEventListener('DOMContentLoaded', function() {
    const currentPlayer = document.querySelector('.currentPlayer');
    let selected;
    let player = 'X';
    let contO = 0;
    let contX = 0;
    const pontosX = document.getElementById('pontosX');
    const pontosO = document.getElementById('pontosO');
    pontosX.textContent = 'PONTOS DO JOGADOR 1: ' + contX;
    pontosO.textContent = 'PONTOS DO JOGADOR 2: ' + contO;

    let positions =[
        [1, 2, 3],
        [4, 5, 6],
        [7, 8, 9],
        [1, 4, 7],
        [2, 5, 8],
        [3, 6, 9],
        [1, 5, 9],
        [3, 5, 7],
    ];

    function init(){
        selected = [];

        if(player === 'X'){
            currentPlayer.innerHTML = 'VEZ DO JOGADOR: 1';
        }else{
            currentPlayer.innerHTML = 'VEZ DO JOGADOR: 2';
        }

        document.querySelectorAll('.game button').forEach((item) => {
            item.innerHTML = '';
            item.addEventListener('click', newMove);
        });
    }

    init();

    function newMove(e){
        const index = e.target.getAttribute('data-i');
        e.target.innerHTML = player;
        e.target.removeEventListener('click', newMove);
        selected[index] = player;

        setTimeout(() => {
            check();
        }, [100]);

        player = player === 'X' ? 'O' : 'X';

        if(player === 'X'){
            currentPlayer.innerHTML = 'VEZ DO JOGADOR: 1';
        }else{
            currentPlayer.innerHTML = 'VEZ DO JOGADOR: 2';
        }
    }

    function check(){

        let playerLastMove = player === 'X' ? 'O' : 'X';
        const jogador = document.getElementById('winner');
        const items = selected
        .map((item, i) => [item, i])
        .filter((item) => item[0] === playerLastMove)
        .map((item) => item[1]);

        for(pos of positions){
            if(pos.every((item) => items.includes(item))){
                jogador.textContent = 'Jogador ' + playerLastMove + ' venceu!!';
                if(playerLastMove === 'X'){
                    jogador.textContent = 'Jogador 1 venceu!!!';
                    contX++;
                    pontosX.textContent = 'PONTOS DO JOGADOR 1: ' + contX;
                }else{
                    jogador.textContent = 'Jogador 2 venceu!!!';
                    contO++;
                    pontosO.textContent = 'PONTOS DO JOGADOR 2: ' + contO;
                }
                init();
                return;
            }
        }

        if(selected.filter((item) => item).length === 9){
            jogador.textContent = 'DEU VELHA!!!!';
            init();
            return;
        }
    }
});