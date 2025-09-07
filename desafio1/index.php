<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Analisando uma divisao</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
    $valor1 = $_GET['num1'] ?? 1;
    $valor2 = $_GET['num2'] ?? 1;
    ?>
    <main>
<h1>Anatomia de uma Divisao</h1>
<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="get">
<label for="num1">Numero 1</label>
<input type="number" name="num1" id="num1">
<label for="num2">Numero 2</label>
<input type="number" name="num2" id="num2">
<input type="submit" value="Dividir">
</form>
</main>

<section id="Resultado">
    <h2>Estrutura da divisao</h2>
    
    <?php 
    echo "<p>Dividendo: $valor1</p>";
    echo "<p>Divisor: $valor2</p>";
    if ($valor1 == 0 && $valor2 == 0){
        echo "Indefinido";
    }else if ($valor1 == 0 || $valor2 == 0){
        echo "Erro";
    }else{
     $sobra = $valor1 % $valor2;
     $sobra = intdiv($sobra, 1);
     
     $resultado = $valor1 / $valor2;
    if ($valor2 % $valor1 == 0) {
        echo "$valor1". "/" . "$valor2" . "=" . "$resultado";
        echo" Sobra do calculo = $sobra";
    } else if ($valor1 % $valor2 != 0){
       echo "$valor1". "/" . "$valor2" . "=" . "$resultado"."\n";
       echo" Sobra do calculo = $sobra";
    }
}
    ?>
</section>

</body>
</html>