<?php

    include "index.class.php";

    $calculadora = new Calculadora();
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./output.css">
    <title>Calculadora</title>


</head>
<body class='bg-purple-950 text-white flex'>
    <form action="" method="get" class='border-4 border-purple-500 rounded-2xl flex justify-center flex-col items-center gap-4 m-4 p-4'>
        <div >
            <label for="n1" >1º Número</label>
            <input type="number" name="n1" id="n1" class='border-b-2 border-purple-500  '>
        </div>
        <div>
            <label for="n2">2º Número</label>
            <input type="number" name="n2" id="n2" class='border-b-2 border-purple-500 '>
        </div>
        <div>
            <label for="operacao">Operação</label>
            <select name="operacao" id="operacao" class='border-b-2 border-purple-500  '>
                <option value="soma" class='text-black'>Soma</option>
                <option value="subtracao" class='text-black'>Subtração</option>
                <option value="multiplicacao" class='text-black'>Multiplicação</option>
                <option value="divisao" class='text-black'>Divisão</option>
            </select>
        </div>
        <div>
            <button type="submit" class='border-2 border-purple-500 rounded-md py-2 px-4'>Calcular</button>
        </div>
    </form>

</body>
</html>

<?php
 $numero1 = floatval($_GET['n1'] ?? 0);
 $numero2 = floatval($_GET['n2'] ?? 0);
$operacao = $_GET['operacao'] ?? '';

switch ($operacao){
    case 'soma':
        echo $calculadora->soma($numero1, $numero2);
        break;
    case 'subtracao':
        echo $calculadora->subtracao($numero1, $numero2);
        break;
    case 'multiplicacao':
        echo $calculadora->multiplicacao($numero1, $numero2);
        break;
    case 'divisao':
        echo $calculadora->divisao($numero1, $numero2);
        break;
    default:
        // echo "Operação inválida.";
}