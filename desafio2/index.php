<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Salario Minimo</title>
</head>
<body>
<?php 
$Salar = $_GET['salario'] ??  0;
$minimo = 1518;
?>
    <main>
        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="get">
        <h1>Informe o seu salario</h1>
        <h10>Considere o salario minimo de R$1.518 Reais</h10>
        <label for="valor">Salario</label>
        <input type="number" name="salario" id="valor" value="inicio" step="0.0001">
        <input type="submit" value="Calcular">
        </form>
    </main>
</body>
<section>

<h2>Resultado final</h2>
<?php
$salmin = $Salar / $minimo;
$valorsalarios =  intdiv($salmin, 1);
$sobra = $Salar % $minimo;
echo "<p>Quem recebe um salario de $Salar reais tem $valorsalarios salarios minimos</p>";
echo "<p> + R$$sobra reais</p>";
?>
</section>
</html>