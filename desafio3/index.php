<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="style.css">
    <title>Raizes</title>
</head>
<body>
<?php 
$numero = $_GET['n1'] ?? 1;
$raiz = sqrt($numero);
$raizcubica = pow($numero, 1/3);
?>

<main>
<h1>Informe um numero</h1>
<form action="<?php echo $_SERVER['PHP_SELF']?>" method="get">
    <label for="Numero">Numero</label>
    <input type="number" name="n1" id="n1">
    <input type="submit" value="Calcular Raizes">
   </form>
</main>
<select id="Resultado">
    <h2>Resultado final</h2>
    <?php
    // Exibe um ponto e o resultado
    echo "<option>Raiz: $raiz</option>";
    echo "<option>Raiz cúbica: $raizcubica</option>";
    ?>
</select>
</body>
</html>