<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Postagens</title>
    <link rel="stylesheet" href="dash.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<body>
    <div class="dashboard-container">
        <?php include 'menu.php'; ?>
        <main>
            <section class="card-form">
                <div class="form-header">
                    <h2><i class="fa-solid fa-user-plus"></i> Nova Postagem</h2>
                    <p>Preencha os dados abaixo para registrar uma nova postagem.</p>
                </div>
                <form action="insere-postagem.php" method="POST">
                    <div class="form-group">
                        <label for="nome">Título</label>
                        <input type="text" id="nome" name="nome" placeholder="Ex: Postagem 3" required>
                    </div>
                    <div class="form-group">
                        <label for="conteudo">Conteúdo</label>
                        <textarea id="conteudo" name="conteudo" placeholder="Digite o conteúdo da postagem..." required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="categoria">Categoria</label>
                        <select id="categoria" name="categoria" required>
                            <option value="">Selecione uma categoria</option>
                            <option value="noticias">Notícias</option>
                            <option value="artigos">Artigos</option>
                            <option value="eventos">Eventos</option>
                        </select>
                    </div>
                    <div class="form-row">
                        <div class="form-group flex-1">
                            <label for="senha">Status</label>
                            <select id="senha" name="senha" required>
                                <option value="ativo">Ativo</option>
                                <option value="inativo">Inativo</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-actions">
                        <button type="submit" class="btn-save">Finalizar Cadastro<i class="fa-floppy-disk"></i></button>
                        <a href="dashboard.php" class="btn-cancel">Cancelar</a>
                    </div>
                </form>
            </section>
        </main>
    </div>
    <?php include 'footer.php'; ?>
</body>

</html>