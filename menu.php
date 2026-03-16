<?php
$usuarioLogado = "Miguel Casteletti Rosa";
?>
<nav>
    <ul>
        <li><a href="index.php">Início</a></li>
        <li><a href="projetos.php">Projetos</a></li>
        <li><a href="relatorios.php">Relatórios</a></li>
        <li><a href="configuracoes.php">Configurações</a></li>
    </ul>
    <div class="perfil-usuario">
        <img src="https://ui-avatars.com/api/?name=Miguel+Casteletti&background=008080&color=fff" alt="Avatar">
        <span><?php echo $usuarioLogado; ?></span>
    </div>
</nav>