document.addEventListener('DOMContentLoaded', function () {

    const btnReiniciar = document.getElementById('reiniciar');
    const canvas = document.getElementById('jogo');
    const ctx = canvas.getContext('2d');
    let fimJogo = document.getElementById('fim');
    var tiles = [];
    const tamanhoCampo = 350;
    const nTilesx = 7;
    const nTilesy = 7;
    const nBombs = 10;
    let gameover = false;

    class Tile {
        constructor(i, j) {
            this.i = i;
            this.j = j;
            this.isBomb = false;
            this.isOpen = false;
            this.bombAround = 0;
            this.marked = false;
            this.openedAround = false;
        }
    }

    function generateTile() {
        for (let i = 0; i < nTilesx; i++) {
            for (let j = 0; j < nTilesy; j++) {
                let tile = new Tile(i, j);
                tiles.push(tile);
            }
        }
    }

    function generateBombs() {
        for (let i = 0; i < nBombs; i++) {
            let random = Math.floor(Math.random() * tiles.filter(t => !t.isBomb).length);
            tiles.filter(t => !t.isBomb)[random].isBomb = true;
        }
    }

    function generateNBombs() {
        tiles.map(t => {
            const nBombs = calculateNBombsAround(t);
            t.bombAround = nBombs;
        });
    }

    function calculateNBombsAround(tile) {
        let bombCounter = 0;
        for (let i = tile.i - 1; i <= tile.i + 1; i++) {
            for (let j = tile.j - 1; j <= tile.j + 1; j++) {
                if (i !== tile.i || j !== tile.j) {
                    if (getTile(i, j)?.isBomb) {
                        bombCounter += 1;
                    }
                }
            }
        }
        return bombCounter;
    }

    function getTile(i, j) {
        return tiles.find(t => t.i === i && t.j === j);
    }

    generateTile();

    function draw() {
        ctx.clearRect(0, 0, tamanhoCampo, tamanhoCampo);
        tiles.map(t => {
            drawTile(t);
        });
    }

    function drawTile(tile) {
        let x = (tile.i * (tamanhoCampo / nTilesx)) + 1;
        let y = (tile.j * (tamanhoCampo / nTilesy)) + 1;
        if (tile.isOpen) {
            if (tile.isBomb) {
                ctx.fillStyle = "#ff0000";
                ctx.fillRect(x, y, tamanhoCampo / nTilesx - 2, tamanhoCampo / nTilesy - 2);
            } else {
                ctx.fillStyle = "#999999";
                ctx.fillRect(x, y, tamanhoCampo / nTilesx - 2, tamanhoCampo / nTilesy - 2);
                if (tile.bombAround) {
                    ctx.font = "20px Arial";
                    ctx.textAlign = "center";
                    ctx.fillStyle = "red";
                    ctx.fillText(tile.bombAround, x + (tamanhoCampo / nTilesx) / 2, y + (tamanhoCampo / nTilesy) / 2 + 8);
                }
            }
        } else {
            if (tile.marked) {
                ctx.fillStyle = "#0000ff";
            } else {
                ctx.fillStyle = "#aaaaaa";
            }
            ctx.fillRect(x, y, tamanhoCampo / nTilesx - 2, tamanhoCampo / nTilesy - 2);
        }
    }

    function openTile(tile) {
        tile.isOpen = true;
        if (gameover) return;
        if (tile.isBomb) {
            revealBombs();
            draw();
            gameover = true;
            fimJogo.textContent = 'Você encontrou uma bomba! Fim de jogo!';
            return;
        }
        if (!tile.openedAround && tile.bombAround == 0) {
            openAround(tile);
        }
        checkVictory();
    }

    function revealBombs() {
        tiles.forEach(tile => {
            if (tile.isBomb) {
                tile.isOpen = true;
            }
        });
    }

    function openAround(tile) {
        tile.openedAround = true;
        for (let i = tile.i - 1; i <= tile.i + 1; i++) {
            for (let j = tile.j - 1; j <= tile.j + 1; j++) {
                if (i !== tile.i || j !== tile.j) {
                    const currentTile = getTile(i, j);
                    if (currentTile && !currentTile?.isBomb) {
                        openTile(currentTile);
                    }
                }
            }
        }
    }

    generateBombs();
    generateNBombs();
    draw();

    canvas.addEventListener('click', e => {
        if (gameover) return;
        const rect = canvas.getBoundingClientRect();
        const mouseX = e.clientX - rect.left;
        const mouseY = e.clientY - rect.top;

        const i = Math.floor((mouseX / tamanhoCampo) * nTilesx);
        const j = Math.floor((mouseY / tamanhoCampo) * nTilesy);

        let tile = getTile(i, j);
        openTile(tile);
        draw();
    });

    canvas.addEventListener("contextmenu", e => {
        if (gameover) return;
        e.preventDefault();
        const rect = canvas.getBoundingClientRect();
        const mouseX = e.clientX - rect.left;
        const mouseY = e.clientY - rect.top;

        const i = Math.floor((mouseX / tamanhoCampo) * nTilesx);
        const j = Math.floor((mouseY / tamanhoCampo) * nTilesy);

        let tile = getTile(i, j);
        tile.marked = !tile.marked;
        draw();
    });

    btnReiniciar.addEventListener('click', restart);

    function restart() {
        fimJogo.textContent = '';
        tiles = [];
        gameover = false;
        generateTile();
        generateBombs();
        generateNBombs();
        draw();
    }

    function checkVictory() {
        const nonBombTiles = tiles.filter(tile => !tile.isBomb);
        const allNonBombTilesOpened = nonBombTiles.every(tile => tile.isOpen);
        if (allNonBombTilesOpened) {
            gameover = true;
            fimJogo.textContent = 'Parabéns! Você venceu!';
        }
    }

});