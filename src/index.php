<?php

require_once "conexion.php";
require_once "functions.php";


$getItems = getItems();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./output.css">
    <title>Teste</title>
</head>
<body>
    
    <h1 class="mx-5">Itens</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($getItems as $item){ ?>
                <tr>
                    <td><?= $item['id'] ?></td>
                    <td><?= $item['nome'] ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</body>
</html>