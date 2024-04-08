<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="images/logosemfundo.png" type="image/x-icon">

    <!--Link Font-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Stalinist+One&display=swap" rel="stylesheet">
    <!--Fim Link Font-->

    <!--Link JQuery-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!--Fim Link JQuery-->

    <!--Link Bootstrap-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <!--Fim Link Bootstrap-->

    <!--Link CSS-->  
    <link rel="stylesheet" href="styles/adivinha.css">   
    <link rel="stylesheet" href="styles/estilogeral.css">
    <!--Fim Link CSS-->

    <!-- link js -->
    <script src="js/adivinha.js"></script>
    <!-- fim link js -->


    <title>Adivinhação - OnGames</title>
</head>
<body>

    <?php include 'header.php'; ?>
    <script src="styles_header/header.js"></script>
    <link rel="stylesheet" href="styles_header/header.css">


    <main>

        <div class="container-main-inicio">
            <div class="container-main-inicio-desfoque">
                <div class="interface">
                    <div class="sumir" id="sumir">
                        <div class="flex">
                            <div class="txt-regras">
                                <h1>Adivinhação</h1>
                                <p>Um número aleatório entre 0 a 100 será gerado automaticamente pela máquina, o seu objetivo é acertar esse número, conforme for digitado aparecera se é maior, menor, ou igual, caso seja igual você ganhara o jogo!!
                                </p>
                                <p>A dificuldade irá influenciar na quantidade de tentativas que você tem!!</p>
                            </div>
                        </div>
                        <div class="btn-play-game">
                            <Button id="play">Play</Button>
                            <div class="dificuldade">
                                <label for="dificuldade">Selecione a Dificulade: </label>
                                <select name="dificult" id="dificuldade">
                                    <option value="facil">Fácil</option>
                                    <option value="medio">Médio</option>
                                    <option value="dificil">Difícil</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    
                    <div class="container-jogo-aparecer" id="aparecer">
                        <div class="flex-jogo">
                            <div class="painel-mostrar-game">
                                <div class="meio">
                                    <div class="txt-jogadas">
                                        <h1 id="jogadas"></h1>
                                        <h3 id="contador"></h3>
                                    </div>
                                </div>
                            </div>
                            <div class="digitar-jogadas">
                                <input type="text" id="palpites" placeholder="Digite um número entre 0 e 100!">
                            </div>
                            <div class="botoes-jogadas">
                                <button id="btn-jogar">Palpite</button>
                                <button id="gerar">Reiniciar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>

    <?php include 'footer.php'; ?>
    <link rel="stylesheet" href="styles_header/footer.css">

    
</body>
</html>