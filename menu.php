<?php
$usuarioLogado = "Miguel Casteletti Rosa";
?>
<nav>
    <ul>
        <li><a href="dashboard.php">Início</a></li>
        <li><a href="categorias.php">Categorias</a></li>
        <li><a href="postagens.php">Postagens</a></li>
        <li><a href="usuarios.php">Usuários</a></li>
    </ul>
    <div class="perfil-usuario">
        <img src="https://ui-avatars.com/api/?name=Miguel+Casteletti&background=008080&color=fff" alt="Avatar">
        <span><?php echo $usuarioLogado; ?></span>
    </div>
</nav>