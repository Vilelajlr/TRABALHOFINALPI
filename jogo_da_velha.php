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

    <link rel="stylesheet" href="styles/jogo_da_velha.css">
    <link rel="stylesheet" href="styles/estilogeral.css">
    <!--Fim Link CSS-->

    <!--Link JS-->
    <script src="js/jogo_da_velha.js"></script>
    <!--Fim Link JS-->

    <title>Jogo da Velha</title>
</head>

<body>

    <?php include 'header.php'; ?>
    <script src="styles_header/header.js"></script>
    <link rel="stylesheet" href="styles_header/header.css">

    <main>
        <div class="container-background">
            <div class="container-desfoque">
                <div class="interface">
                    <div class="jogador">
                        <div class="text">
                            <h2>Jogador 1 = X</h2>
                            <h2>Jogador 2 = O</h2>
                        </div><!-- text -->
                    </div><!-- jogador -->
                    <div class="flex">
                        <div class="vez-do-jogador">
                            <h2 class="currentPlayer"></h2>
                            <h2 id="winner"></h2>
                        </div><!-- vez-do-jogador -->
                        <div class="jogo-da-velha">
                            <div class="game">
                                <button data-i="1"></button>
                                <button data-i="2"></button>
                                <button data-i="3"></button>
                                <button data-i="4"></button>
                                <button data-i="5"></button>
                                <button data-i="6"></button>
                                <button data-i="7"></button>
                                <button data-i="8"></button>
                                <button data-i="9"></button>
                            </div><!-- game -->
                        </div><!-- jogo-da-velha -->
                        <div class="ganhou">
                            <h2 id="pontosX"></h2>
                            <h2 id="pontosO"></h2>
                            <div class="botao">
                                <button id="reiniciar">Recomeçar Jogo</button>
                            </div>
                        </div>
                    </div><!-- flex -->
                </div><!-- interface -->

            </div><!-- container-desfoque -->
        </div><!-- container-background -->
    </main>

    <?php include 'footer.php'; ?>
    <link rel="stylesheet" href="styles_header/footer.css">

</body> 
</html>