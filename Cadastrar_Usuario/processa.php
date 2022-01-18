<?php
    session_start();
    include_once("../Banco_de_Dados/conexao.php"); // incluindo o arquivo conexao.php na pagina

    $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING); // "pegando" a string de nome no input da pagina "index.html" e filtrando para colocar na variavel $nome
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL); 

    /*echo "Nome: $nome <br><br>";
    echo "Email: $email <br><br>";
    */
    $_SESSION['retorno'] = "";

    $query_cadastrar_usuario = "INSERT INTO tabela_usuarios (nome_usuario, email_usuario, created) VALUES ('$nome', '$email', NOW())"; // query de inserir valores na tabela
    $cadastrar_usuario = mysqli_query($conn, $query_cadastrar_usuario);

    if(mysqli_insert_id($conn)){ // verificando se foi inserido um novo indice no banco, uma vez que o indice seja auto_increment
        $_SESSION['retorno'] = "Usuario cadastrado com sucesso";
        header("Location: index.php");  // redirecionando para a pagina "index.php  "
    }else{
        $_SESSION['retorno'] = "Usuario não foi cadastrado com sucesso";
        header("Location: index.php");
    }
?>
