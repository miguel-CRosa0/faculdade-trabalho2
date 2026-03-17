<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuário Inserido</title>
    <link rel="stylesheet" href="dash.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<body>
    <div class="dashboard-container">
        <?php include 'menu.php'; ?>
        <main>
            <section class="container-cards">
                <article>
                    <h2>Dados Recebidos</h2>
                    <p>Dados enviados pelo formulário:</p>
                    <br>
                    <?php
                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        $nome = $_POST['nome'];
                        $email = $_POST['email'];
                        $senha = $_POST['senha'];
                        $nivel = $_POST['nivel'];
                        $ano = $_POST['ano'];

                        echo "<div style='background-color: #f8f9fa; padding: 15px; border-radius: 8px;'>";
                        echo "<p><strong>Nome:</strong> " . $nome . "</p>";
                        echo "<p><strong>E-mail:</strong> " . $email . "</p>";
                        echo "<p><strong>Senha:</strong> " . $senha . "</p>";
                    } else {
                        echo "<p>Nenhum dado recebido.</p>";
                    }
                    ?>
                    <br>
                    <a href="cad-usuarios.php" class="btn">Voltar ao Formulário</a>
                </article>
            </section>
        </main>
    </div>
    <?php include 'footer.php'; ?>
</body>

</html>