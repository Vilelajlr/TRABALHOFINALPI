<?php

    $bd_servidor = "localhost";
    $bd_usuario = "vilelafinalpi";
    $bd_senha = "vilelajonathan";
    $bd_banco = "formulario";


 
    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];
    $email = $_POST['email'];
    $celular = $_POST['celular'];
    $motivo = $_POST['duvidas'];
    $text = $_POST['mensagem'];

    
    $sql = <<<SQL
    INSERT INTO contato (nome, sobrenome, email, celular, motivo,textarea)
    VALUES ('$nome', '$sobrenome', '$email', '$celular', '$motivo', '$text')
    SQL;

    $conexao = "mysql: host=$bd_servidor; dbname=$bd_banco";

    $opcoes = [PDO::ATTR_EMULATE_PREPARES => FALSE,
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                ];


            $assunto = "Novo contato recebido";
            $mensagem = "Nome: $nome\n";
            $mensagem .= "Sobrenome: $sobrenome\n";
            $mensagem .= "Email: $email\n";
            $mensagem .= "Celular: $celular\n";
            $mensagem .= "Mensagem: $text\n";
            
                $destinatario = "joseleandro2807@gmail.com"; // Substitua pelo seu endereço de e-mail
            

            
    
    
    try {
        
        $pdo = new PDO($conexao, $bd_usuario, $bd_senha, $opcoes);
        $pdo->exec($sql);
        echo  "<h1>Conexão estabelecida com sucesso!</h1>";
    }catch (PDOException $erro) {
        echo "<h1>Erro: " . $erro->getMessage() . "</h1>";
    }

    
    


?>