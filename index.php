<?php


#codigo php
//comentario em linha

/*comentario
em 
bloco
*/
echo "<h1> Hello world </h1>";

$nome1 = "Fabiano Amaro";
$texto2 = "Unoesc";

echo $nome1. " estudou na " .$texto2."<br/>";

echo "$nome1 estudou na $texto2 <br>";

echo '$nome1 estudou na $texto2 <br>';

echo "{$nome1} estudou na {$texto2}";



#Tipos de variaveis
#Float
$numero1 = 34.2;

# Int
$numero2 = 123;

#Boolean
$bool = true;

#array
$lista = array("valor1", 12313, "valor3");

# > 5.4
//$lista = ["valor 1" 123123, "teste"];

echo "<h2>Convertendo</h2>";

$string = (int) "3 porquinhos";
$String2 = (int) "porquinhos 3";

echo $string . "<br>"; //3
echo $string . "<br>"; // 0


$frutas = array("maça", "banana", "pera", "uva");
?>

<ul>
<?php foreach ($frutas as $fruta) { ?>
	<li><?php echo $fruta; ?></li>
<?php} ?>
</ul>

?>