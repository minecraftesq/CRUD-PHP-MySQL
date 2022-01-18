<?php
    session_start(); // iniciando a sessao
?>
<!DOCTYPE html>
<html lang="pt-br"> 
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Cadastrar Usuario </title>
</head>
<body>   
    <script language="javascript">
        var mensagem = "<?php print $_SESSION['retorno']; ?>";
    </script>

    <?php
        if(isset($_SESSION['retorno'])){
    ?>      
    <script language="javascript">
        var mensagem = "<?php print $_SESSION['retorno']; ?>";
        alert(mensagem);
    </script>
    <?php
    unset($_SESSION['retorno']); 
        }
    ?>

    
    <h1>Cadastrar Usuário</h1>
        <form method="post" action="processa.php">
            <label>Nome:</label>
            <input type="text" name="nome" placeholder="Digite seu nome "><br><br>
            <label>Email:</label>
            <input type="email" name="email" placeholder="Digite seu email"><br><br>
            <input type="submit" value="Cadastrar">
        </form>
</body>
</html>