<?php

// contador
// receber o valor do formulario 
$numero = $_POST ['numero'];
$x = 1;

while ($x <=10) {
$resultado = $numero * $x;
echo " $numero" . " X " . "$x " . "= " . "$resultado ";
echo "<br>";
$x++;
}



?>