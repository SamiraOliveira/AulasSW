<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $nome = "Samira";
    ?>
    <h1>Hello</h1>
    <p>Anderson como presidente</p>
    <h2>
        <?php
            echo 'Olá'. $nome;
        ?>
        <?php
            echo "Olá $nome";
        ?>
    </h2>
</body>
</html>
