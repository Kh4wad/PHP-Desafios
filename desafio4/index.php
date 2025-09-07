<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="style.css">\
    <title>Medias Aritmeticas</title>
</head>
<body>

<?php 
$N1 = $_GET['N1'] ?? 1;
$N2 = $_GET['N2'] ?? 1;
$Peso1 = $_GET['Peso1'] ?? 1;
$Peso2 = $_GET['Peso2'] ?? 1;
?>

<main>
<h1>Médias Aritméticas</h1>
<form action="<?php echo $_SERVER['PHP_SELF']?>" method="get">
    <label for="N1">Primeira nota</label>
    <input type="number" name="N1" id="N1" step="0.1">

    <label for="Peso1">Peso1</label>
    <input type="number" name="Peso1" id="Peso1">

    <label for="N2">Segunda nota</label>
    <input type="number" name="N2" id="N2" step="0.1">

    <label for="Peso2">Peso2</label>
    <input type="number" name="Peso2" id="Peso2">

    <input type="submit" value="Calcular Médias">
</form>
</main>

<section id="Resultado">
<h1>Analisando Média</h1>
<?php 
$simples = ($N1 + $N2) / 2;
$ponderada = (($N1 * $Peso1) + ($N2 * $Peso2)) / ($Peso1 + $Peso2);
$ponderada_ajustada = number_format($ponderada, 2, ',', '.');
echo "Analisando os valores $N1 e $N2:<br>";
echo "A <strong>Média Aritmética Simples</strong> é: $simples<br>";
echo "A <strong>Média Aritmética Ponderada</strong> de Peso1: $Peso1 e Peso2: $Peso2 é: $ponderada_ajustada<br>";
?>
</section>



</body>
</html>