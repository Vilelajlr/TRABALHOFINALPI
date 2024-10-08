

<?php
$currentPage = basename($_SERVER['PHP_SELF']);

$bd_servidor = "localhost";
$bd_usuario = "vilelafinalpi";
$bd_senha = "vilelajonathan";
$bd_banco = "formulario";

// Verifica se os campos foram enviados via POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtém os dados dos campos
    $nome = $_POST['nome'];
    $mensagem = $_POST['mensagem'];

    try {
        // Conecta ao banco de dados
        $conexao = new PDO("mysql:host=$bd_servidor;dbname=$bd_banco", $bd_usuario, $bd_senha);

        // Prepara a consulta SQL usando um prepared statement
        $sql = "INSERT INTO comentarios (nome, mensagem) VALUES (:nome, :mensagem)";
        $stmt = $conexao->prepare($sql);

        $stmt->bindParam(':nome', $nome);
        $stmt->bindParam(':mensagem', $mensagem);

        $stmt->execute();

    } catch (PDOException $erro) {
        echo "<h1>Erro: " . $erro->getMessage() . "</h1>";
    }
}

?>


<?php
$currentPage = basename($_SERVER['PHP_SELF']);
?>

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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!--Fim Link JQuery-->

    <!--Link Bootstrap-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
        crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <!--Fim Link Bootstrap-->

    <!--Link CSS-->
    <link rel="stylesheet" href="styles/index.css">
    <link rel="stylesheet" href="styles_header/footer.css">
    <link rel="stylesheet" href="styles/estilogeral.css">
    <link rel="stylesheet" href="styles_header/header.css">
    <!--Fim Link CSS-->

    <title>OnGames</title>
</head>

<body>

    <?php include 'header.php'; ?>
    


    <main>
        <div class="container-main-topo" id="inicio">
            <div class="container-desfoque">
                <div class="interface">
                    <div class="flex">
                        <div class="textos-main">
                            <div class="textBox" id="jogaDaVelha">
                                <div class="titulo">
                                    <h1>Jogo da Velha</h1>
                                    <p>É um jogo de regras extremamente simples, que não traz grandes dificuldades para
                                        seus jogadores e é facilmente aprendido. O jogo é jogado em um tabuleiro de
                                        dimensões 3x3, onde dois jogadores disputam para completar uma linha com suas
                                        respectivas peças. O jogador que conseguir completar uma linha primeiro, vence a
                                        partida.</p>
                                    <a href="jogo_da_velha.php" class="btn">Jogar</a>
                                </div> <!--Titulo-->
                            </div> <!--TextBox-->

                            <div class="textBox campoMinado">
                                <div class="titulo">
                                    <h1>Campo Minado</h1>
                                    <p>É um jogo de tabuleiro composto por casas, onde o jogador deve descobrir onde
                                        estão as minas sem acioná-las. O jogo é jogado em um tabuleiro de dimensões
                                        10x10, onde o jogador deve clicar nas casas para descobrir onde estão as minas.
                                        O jogador que conseguir descobrir todas as minas, vence a partida.</p>
                                    <a href="campo_minado.php" class="btn">Jogar</a>
                                </div> <!--Titulo-->
                            </div> <!--TextBox-->

                            <div class="textBox adivinhacao">
                                <div class="titulo">
                                    <h1>Adivinhação</h1>
                                    <p>É um jogo de adivinhação de números, onde o jogador deve adivinhar um número
                                        aleatório gerado pelo computador. O jogador deve adivinhar o número correto em
                                        até 10 tentativas. O jogador que conseguir adivinhar o número correto, vence a
                                        partida.</p>
                                    <a href="adivinha.php" class="btn">Jogar</a>
                                </div> <!--Titulo-->
                            </div> <!--TextBox-->

                            <div class="img-box">
                                <img src="images/img1.png" alt="jogos" class="jogos">
                            </div> <!--Img-Box-->

                        </div> <!--Textos-Main-->
                        <div class="thumb">
                            <ul>
                                <li><img src="images/thumb1.png" onclick="imgSlider('images/img1.png')"></li>
                                <li><img src="images/thumb2.png" onclick="imgSlider('images/img2.png')"></li>
                                <li><img src="images/thumb3.png" onclick="imgSlider('images/img3.png')"></li>
                            </ul>
                        </div> <!--Thumb-->

                    </div> <!--Flex-->
                </div> <!--Interface-->
            </div> <!--Container-Desfoque-->
        </div><!--Container-main-topo-->

        <div class="container-main-meio" id="jogos">
            <div class="interface">
                <div class="flex">
                    <div class="txt-Jogos">
                        <h1 class="shadow" >Jogos OnGames.com</h1>
                    </div><!--fim txt-Jogos-->
                    <div class="card-jogos">
                        <div class="cards">
                            <div class="img-cards">
                                <img src="images/thumb1.png" alt="Jogo da Velha">
                            </div> <!--Img-Card-->
                            <div class="txt-card">
                                <h4>Jogo da Velha</h4>
                                <a href="jogo_da_velha.php" class="btn">Jogar Agora</a>
                            </div> <!--Txt-Card-->
                        </div> <!--Cards-->

                        <div class="cards">
                            <div class="img-cards">
                                <img src="images/thumb2.png" alt="Campo Minado">
                            </div> <!--Img-Card-->
                            <div class="txt-card">
                                <h4>Campo Minado</h4>
                                <a href="campo_minado.php" class="btn">Jogar Agora</a>
                            </div> <!--Txt-Card-->
                        </div> <!--Cards-->

                        <div class="cards">
                            <div class="img-cards">
                                <img src="images/thumb3.png" alt="Adivinhação">
                            </div> <!--Img-Card-->
                            <div class="txt-card">
                                <h4>Adivinhação</h4>
                                <a href="adivinha.php" class="btn">Jogar Agora</a>
                            </div> <!--Txt-Card-->
                        </div> <!--Cards-->
                    </div> <!--Card-Jogos-->
                </div> <!--Flex-->
            </div> <!--Interface-->
        </div> <!--Container-Main-Meio-->

        <div class="container-main-final" id="final">
            <div class="interface">
                <div class="flex">
                    <div class="txt-jogoDaVelha txt-geral">
                        <div class="txt-historia">
                            <h1 class="cor" >História Jogo da Velha</h1>
                            <p>O jogo da velha, uma das formas mais antigas de entretenimento, remonta a milhares de
                                anos. Embora suas origens exatas sejam incertas, registros sugerem sua existência desde
                                o antigo Egito, Grécia ou Roma. A versão moderna evoluiu na Europa no século XIX e
                                espalhou-se globalmente como um passatempo popular e educacional, valorizado por sua
                                simplicidade e desafios estratégicos. Hoje, o jogo da velha continua sendo apreciado
                                como uma forma de diversão simples e mentalmente estimulante em todo o mundo.</p>

                        </div> <!--Txt-Historia-->

                        <div class="txt-regras">
                            <h1>Regras Jogo da Velha</h1>
                            <p>Tabuleiro: O jogo é jogado em um tabuleiro de 3x3 quadrados.</p>
                            <p>Jogadores: O jogo é jogado por dois jogadores, geralmente representados por "X" e "O".
                            </p>
                            <p>Objetivo: O objetivo de cada jogador é colocar três de suas marcas em linha reta
                                (horizontal, vertical ou diagonal) no tabuleiro, ou seja, conquistar uma linha, coluna
                                ou diagonal completa antes do oponente.</p>
                            <p>Começando o jogo: Um jogador é escolhido aleatoriamente para começar. Geralmente, o
                                jogador que joga com "X" começa o jogo.</p>
                            <p>Turnos dos jogadores: Os jogadores alternam turnos, colocando suas marcas em um quadrado
                                vazio do tabuleiro em cada turno.</p>
                            <p>Colocando as marcas: Um jogador coloca sua marca em um quadrado vazio do tabuleiro em seu
                                turno.</p>
                            <p>Final do jogo: O jogo termina quando um dos jogadores conquista uma linha, coluna ou
                                diagonal completa, ou quando todos os quadrados do tabuleiro são preenchidos. Se todas
                                as casas forem preenchidas sem que nenhum jogador consiga completar uma linha, coluna ou
                                diagonal, o jogo é considerado um empate.</p>
                            <p>Declaração do vencedor: Se um jogador conseguir formar uma linha, coluna ou diagonal
                                completa com suas marcas, ele é declarado vencedor. Se o jogo terminar em empate, nenhum
                                jogador ganha.</p>
                            <div class="imagens">
                                <img class="img1" src="images/velha1.png" alt="Jogo da velha">
                                <img src="images/velha2.png" alt="Jogo da velha">
                                <img class="img2" src="images/velha3.png" alt="Jogo da velha">
                            </div> <!-- Imagens -->
                        </div> <!--Txt-Regras-->
                    </div> <!--Txt-JogoDaVelha-->

                    <div class="txt-campoMinado txt-geral">
                        <div class="txt-historia">
                            <h1>História do Campo Minado</h1>
                            <p>O Campo Minado começou como um jogo de tabuleiro e foi adaptado para computadores,
                                estreando no Windows 3.1 em 1992. Originalmente, servia como uma ferramenta de
                                treinamento militar para detectar minas terrestres. Desde então, tornou-se um clássico
                                dos jogos de computador, desafiando os jogadores a evitar minas usando lógica e
                                estratégia.</p>
                        </div> <!--Txt-Historia-->

                        <div class="txt-regras">
                            <h1>Regras do Campo Minado</h1>
                            <p>Objetivo: O objetivo é revelar todas as casas sem minas no tabuleiro, evitando acionar
                                qualquer mina.</p>
                            <p>Tabuleiro: O jogo é jogado em um tabuleiro retangular com casas que podem conter ou não
                                minas.</p>
                            <p>Início do Jogo: O jogador seleciona uma casa para revelar no início do jogo.</p>
                            <p>Revelando Casas: As casas reveladas mostram um número, indicando quantas minas estão nas
                                casas adjacentes.</p>
                            <p>Marcando Minas: O jogador pode marcar as casas suspeitas de conterem minas com uma
                                bandeira.</p>
                            <p>Fim do Jogo: O jogo termina quando todas as casas sem minas são reveladas. Revelar uma
                                mina encerra o jogo.</p>
                            <div class="imagens">
                                <img class="img1" src="images/campo1.png" alt="Campo Minado">
                                <img src="images/campo2.png" alt="Campo Minado">
                                <img class="img2" src="images/campo3.png" alt="Campo Minado">
                            </div> <!-- Imagens -->
                        </div> <!--Txt-Regras-->
                    </div> <!--Txt-CampoMinado-->


                    <div class="txt-adivinhacao txt-geral">
                        <div class="txt-historia">
                            <h1>História da Adivinhação</h1>
                            <p>O jogo de adivinhação é uma atividade antiga e simples, onde um jogador escolhe um número
                                e os outros tentam adivinhá-lo, recebendo dicas sobre se o palpite é maior ou menor que
                                o número escolhido. É um jogo de raciocínio e lógica que tem sido jogado por gerações em
                                várias culturas ao redor do mundo.</p>
                        </div> <!--Txt-Historia-->
                        <div class="txt-regras">
                            <h1>Regras da Adivinhação</h1>
                            <p>Objetivo: O objetivo é adivinhar um número aleatório gerado pelo computador em até 10
                                tentativas.</p>
                            <p>Início do Jogo: O jogador insere um número entre 1 e 100 para adivinhar o número gerado
                                pelo computador.</p>
                            <p>Feedback: O computador informa se o número inserido é maior, menor ou igual ao número
                                gerado.</p>
                            <p>Tentativas: O jogador tem até 10 tentativas para adivinhar o número correto.</p>
                            <p>Fim do Jogo: O jogo termina quando o jogador adivinha o número correto ou excede o limite
                                de tentativas.</p>
                            <div class="imagens">
                                <img class="img1" src="images/adivinha1.png" alt="Adivinhação">
                                <img src="images/adivinha2.png" alt="Adivinhação">
                                <img class="img2" src="images/adivinha3.png" alt="Adivinhação">
                            </div> <!-- Imagens -->
                        </div> <!--Txt-Regras-->
                    </div> <!--Txt-Adivinhacao-->

                    
                    <div class="comentarios-container" id="comentario">
                        <div class="comentarios titulo">
                            <h1 class="shadow">Deixe aqui o seu comentário!</h1>
                            <p>O seu feedback é muito importante para nos ajudar a melhorar o site cada vez mais!</p>

                            <div class="comentario-area">
                                <form class="form" id="comentarioForm" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                                    <div class="form-floating">
                                        <input required type="text" name="nome" placeholder="" class="form-control required" >
                                        <label for="nome">Nome</label>            
                                    </div>                   
                                        <div class="texto">
                                            <textarea required name="mensagem" placeholder="Deixe aqui o seu comentário... " class="textarea required"  maxlength="200"></textarea>
                                        </div>             
                                    <button type="submit" class="btn">Enviar</button>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="texto-inicial">
                        <h1 class="shadow">Comentários e Feedbacks!</h1>
                    </div>

                    <div class="comentarios-container-dados">
                        <div class="comentarios-dados">
                           
                        <?php
                            $bd_servidor = "localhost";
                            $bd_usuario = "vilelafinalpi";
                            $bd_senha = "vilelajonathan";
                            $bd_banco = "formulario";

                            $conexao = new PDO("mysql:host=$bd_servidor;dbname=$bd_banco", $bd_usuario, $bd_senha);

                            try {
                                $sql = "SELECT * FROM comentarios";
                                $consulta = $conexao->query($sql);
                                while ($linha = $consulta->fetch()) {
                                    // Exibe os dados escapados para evitar XSS
                                    echo "<div class='comentario'>";
                                    echo "<h3>" . htmlspecialchars($linha['nome']) . " :</h3>";
                                    echo "<p>" . htmlspecialchars($linha['mensagem']) . "</p>";
                                    echo "</div>";
                                }
                            } catch (PDOException $erro) {
                                echo "<h1>Erro: " . $erro->getMessage() . "</h1>";
                            }
                        ?>
                        </div>
                   
                </div> <!--Flex-->
            </div> <!--Interface-->
        </div> <!--Container-Main-Final-->

    </main>



    <?php include 'footer.php'; ?>

    <script src="styles_header/header.js"></script>

    <script>
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
    </script>

</body>

</html>