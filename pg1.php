<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        //var_dump($_POST);
        if (isset($_POST['nome'])) {
            session_start();
            $_SESSION['nome'] = $_POST['nome'];

            echo "Olá $_SESSION[nome], seja bem vindo ao sistema de cálculo de média!";
        }
    ?>
    <form action="processa.php" method="POST">
    <p> Você deseja realizar o cálculo de:
        <input type="radio" value = "s" name="juros"/>Juros Simples 
        <input type="radio" value = "c" name="juros"/>Juros Compostos
    </p>
    <input type="submit"/>
    </form>
</body>
</html>
