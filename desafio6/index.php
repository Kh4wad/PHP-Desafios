<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Calculadora de tempo</title>
</head>
<?php
$tempo = $_GET['segundo'] ?? 0;
$semana = intdiv($tempo, 604800);
$dias = intdiv($tempo % 604800, 86400);
$horas = intdiv($tempo % 86400, 3600);
$minutos = intdiv($tempo % 3600, 60);
$segundos = $tempo % 60;
?>

<body>
    <h1>Calculadora de Tempo</h1>
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="get">
    <label for="segundo">Qual e o total de segundos?</label>
    <input type="number" name="segundo" id="segundo">
    <input type="submit" value="Calcular">
    </form>

</body>

<section>

<h2>Totalizando Tudo</h2>
<?php 
echo "<br>Analisando o valor que voce digitou $tempo segundos equivalem a:</br>";
echo "<br> $semana semanas</br>".
     "<br> $dias dias</br>".
     "<br> $horas horas</br>".
     "<br> $minutos minutos</br>".
     "<br> $segundos segundos</br>";


?>

</section>

</html>