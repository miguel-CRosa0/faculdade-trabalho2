<?php

$nome = "Miguel Casteletti Rosa";
$idade = "19";
echo "Olá " . $nome . ", você tem " . $idade . " anos";

$n1 = $_GET['n1'];
$n2 = $_GET['n2'];
$m = ($n1 + $n2) / 2;
echo "<h3>Cálculo de Média</h3>";
echo "A média é: $m \n";

if ($m < 7) {
    echo "\nreprovou";
} else {
    echo "\naprovou";
}
