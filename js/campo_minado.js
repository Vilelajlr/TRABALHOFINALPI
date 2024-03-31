const canvas = document.getElementById('jogo');
const ctx = canvas.getContext('2d');

var tiles = [];
const nTilesx = 10;
const nTilesy = 10;
const nBombs = 20;

class Tile {
    constructor(i, j){
        this.i = i;
        this.j = j;
        this.isBomb = false;
        this.isOpen = false;
        this.bombAround = 0;
        this.marked = false;
        this.openedAround = false;
    }
}

function generateTile(){
    for(let i = 0; i < nTilesx; i++){
        for(let j = 0; j < nTilesy; j++){
           let tile = new Tile(i, j);
            tiles.push(tile);
        }
    }
}

function generateBombs(){
    for(let i = 0; i < nBombs; i++){
        let random = Math.floor(Math.random() * tiles.filter(t => !t.isBomb).length);
        tiles.filter(t => !t.isBomb)[random].isBomb = true;
    }
}

function generateNBombs(){
    tiles.map(t => {
        const nBombs = calculateNBombsAround(t);
        t.bombAround = nBombs;
    });
}

function calculateNBombsAround(tile){
    let bombCounter = 0;
    for(let i = tile.i - 1; i <= tile.i + 1; i++){
        for(let j = tile.j - 1; j <= tile.j + 1; j++){
            if(i != tile.i || j != tile.j){
                if(getTile(i , j)?.isBomb){
                    bombCounter += 1;
                }
            }
        }
    }

    return bombCounter;
}

function getTile(i, j) {
    return tiles.find(t => t.i == i && t.j == j);
}

generateTile();

function draw(){
    ctx.clearRect(0, 0, 511, 511);
    tiles.map(t => {
        drawTile(t);
       
    });
}

function drawTile(tile){
    let x = (tile.i * 51) + 1;
    let y = (tile.j * 51) + 1;
    if(tile.isOpen){
        if(tile.isBomb){
            ctx.fillStyle = "#ff0000";
            ctx.fillRect(x, y, 50, 50);
        } else {
        ctx.fillStyle = "#999999";
        ctx.fillRect(x, y, 50, 50);
        if(tile.bombAround){
            ctx.font = "30px Arial";
            ctx.textAlign = "center";
            ctx.fillStyle = "red";
            ctx.fillText(tile.bombAround, x + 25, y + 38);
        }
        }
    } else {
        if(tile.marked){
            ctx.fillStyle = "#0000ff";
        }else{
            ctx.fillStyle = "#aaaaaa";
        }
        ctx.fillRect(x, y, 50, 50);
    }
}

function openTile(tile){
    tile.isOpen = true;
    if(!tile.openedAround && tile.bombAround == 0){
        openAround(tile);
    }
}

function openAround(tile){
    tile.openedAround = true;
    for(let i = tile.i - 1; i <= tile.i + 1; i++){
        for(let j = tile.j - 1; j <= tile.j + 1; j++){
            if(i != tile.i || j != tile.j){
                const currentTile = getTile(i, j);
                if(currentTile && !currentTile?.isBomb){
                    openTile(currentTile);
                }
            }   
        }
    }
}

generateBombs();
generateNBombs();
draw();

document.addEventListener('click', e => {
    const rect = canvas.getBoundingClientRect();
    const mouseX = e.clientX - rect.left;
    const mouseY = e.clientY - rect.top;
    
    const i = Math.floor((mouseX / 511) *10);
    const j = Math.floor((mouseY / 511) *10);

    let tile = getTile(i, j);
    openTile(tile);
    draw();
    
});


document.addEventListener("contextmenu", e => {
    e.preventDefault();
    const rect = canvas.getBoundingClientRect();
    const mouseX = e.clientX - rect.left;
    const mouseY = e.clientY - rect.top;
    
    const i = Math.floor((mouseX / 511) *10);
    const j = Math.floor((mouseY / 511) *10);

    let tile = getTile(i, j);
    tile.marked = !tile.marked;
    draw();
});