<!DOCTYPE html>
<html lang="en">
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

            echo "Olá $_SESSION[nome], seja bem vindo ao sistema!";
        }
    ?>
</body>
</html>
