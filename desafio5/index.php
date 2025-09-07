<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Calculando a sua idade</title>

</head>
<body>

<?php 

date_default_timezone_set("America/Sao_Paulo");
$Ano = date("Y");

$nasciment = $_GET['nascimento'] ?? 0;
$ano_hoje = $_GET['Anu'] ?? 0;


?>

<main>
<h1>Calculando a sua idade</h1>
<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="get">
<label for="nascimento">Em que ano Voce nasceu?</label>
<input type="number" name="nascimento" id="nascimento">
<label for="ano">Quer saber a sua idade em que ano? atualmente estamos em <?php echo $Ano; ?></label>
<input type="number" name="Anu" id="Anu">
<input type="submit" value="Qual sera minha idade?">
</form>
    </main>
    <section>
    <?php 
    $Idade = $ano_hoje - $nasciment;
    if ($Idade < 0) {
        echo "<p>Ainda não nasceu!</p>";
    } else {
        echo "<p>Sua idade em $ano_hoje será $Idade anos.</p>";
    }
    ?>
    </section>

</body>
</html>