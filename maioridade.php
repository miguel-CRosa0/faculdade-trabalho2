<?php
// Vou pegar a variável na url //
$nome = $_GET['nome'];
$idade = $_GET['idade'];

if ($idade >= 18) {
    echo "Você é maior de idade.";
} else {
    echo "Você é menor de idade.";
}

echo "<br>";
echo "Seu nome é: $nome, e sua idade é de: $idade anos";

// https://localhost/faculdade-trabalho2/maioridade.php?idade=19&nome=Miguel //
