<?php 

//$doce = array("Chocolate", "Gibi", "Bala");
//echo $doce[1];
//var_dump($doce);
//echo "<br/>";
//echo "<br/>";
$game = array("Gta", "Gta RP", "Gta Sa Andreas");
echo $game[1] . " e " . $game[2]; 
echo "<br/>";  
echo "<br/>";
$date = new DateTime();
var_dump($date);
$name = "Marcus";
$idade = 21;
$valor = 229.60;
$aprovado = false;
echo "<br/>";
echo $name;
echo "<br/>";
echo $idade;
echo "<br/>";
echo $valor;
echo "<br/>";
echo $aprovado;
unset($name);
if (isset($name)) {
 echo $name;
}

$arquivo = fopen("exemplo-01.php", "r");
echo $arquivo;
var_dump($arquivo);

$nulo = NULL;
echo $nulo;
var_dump($nulo);

exit;
$nick = "@AZTRO";
$idade = 20; 
$saque = 2.500;
$block = false;
var_dump($nick);
echo "<br/>";
var_dump($idade);
echo "<br/>";
var_dump($saque);
echo "<br/>";
var_dump($block);

?>