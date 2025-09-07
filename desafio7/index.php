<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Caixa Eletrônico</title>
</head>

<?php 
$Cem = 100;
$Cinquenta = 50;
$Cinco = 5;
$Dez = 10;
$valor = $_GET['valor1'] ?? 0;
?>


<body>
    <h1>Caixa Eletrônico</h1>
    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="get">
<label for="valor">Qual valor voce deseja sacar? (R$)</label>
<input type="number" name="valor1" id="valor1">
<h4><strong>Notas disponiveis R$100, R$50, R$10, R$5</strong></h4>
<input type="submit" value="Sacar">
    </form>

<section>
    
<?php 
$dinheiro = $valor;
$cinquet = 0;
$cinco1 = 0;
$dez1 = 0;
$cem1 = 0;
if($valor >= 100){
    $cem1 = intdiv($valor, $Cem);
    $valor = $valor % $Cem;
}if($valor >= 50){
    $cinquet = intdiv($valor, $Cinquenta);
    $valor = $valor % $Cinquenta;
}if($valor >= 10){
    $dez1 = intdiv($valor, $Dez);
    $valor = $valor % $Dez;
}if($valor >= 5){
    $cinco1 = intdiv($valor, $Cinco);
    $valor = $valor % $Cinco;
}

echo "<h1>Saque de R$ $dinheiro realizado</h1>";
echo "$cem1 notas de R$100,";
echo "<br>$cinquet notas de R$50,";
echo "<br>$dez1 notas de R$10,";
echo "<br>$cinco1 notas de R$5.";

?>
</section>

</body>
</html>