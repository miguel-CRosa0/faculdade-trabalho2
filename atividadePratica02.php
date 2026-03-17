<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade Pratica 02 php</title>
    <style>
        .badge {
            padding: 4px 8px;
            border-radius: 4px;
            font-weight: bold;
        }

        .ativo {
            background-color: #28a745;
            color: white;
        }

        .inativo {
            background-color: #dc3545;
            color: white;
        }
    </style>
</head>

<body>

    <?php

    $nivelAcesso = 2;

    if ($nivelAcesso == 2) {
        echo "<span class='badge ativo'>Administrador</span>";
    } else {
        echo "<span class='badge inativo'>Usuário Comum</span>";
    }

    ?>


</body>

</html>