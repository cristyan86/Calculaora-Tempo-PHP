<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<?php 
$total = $_REQUEST['seg'] ?? 0;
?>

<main>
    <h1>Calculora Tempo</h1>
   <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
    <label for="seg">Qual é o total em segundos?</label>
<input type="number" name="seg" id="seg" min="0" step= "1" required value="<?=$total?>">
<input type="submit" value="Calular">
   </form>
</main>

    <?php 
$sobra = $total;
//total semanas
$semana = (int) ($sobra / 604_800);
$sobra = $sobra % 86_400;
// total dias
$dia = (int) ($sobra / 86_400);
$sobra = $sobra % 86_400;
// total horas
$hora= (int) ($sobra / 3_600);
$sobra = $sobra % 3_600;
// Total minutos
$minuto = (int) ( $sobra / 60);
$sobra = $sobra % 60;
//Total segundos
$segundo = $sobra;


    ?>

<section>
<h2>Totalizando tudo</h2>
<p>Analisando o valor que vc digito, <?=$total?> segundos equivale em total de: </p>
<ul>
    <li><?=$semana?> Semanas</li>
    <li><?=$dia?> Dias</li>
    <li><?=$hora?> Horas</li>
    <li><?=$minuto?> Minutos</li>
    <li><?=$segundo?> Segundos</li>
</ul>

</section>

</body>
</html>