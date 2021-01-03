<nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="index.php"><img src="imagens/logo_site_werner.png" alt="Logo" class="rounded" style="width: 50px; height: 50px;"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item <?php if ($page == 1){echo 'active';} ?>">
                <a class="nav-link" href="index.php">Menu Inicial <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle <?php if ($page == 2 || $page == 3 || $page == 4){echo 'active';} ?>"
                    href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false">
                    Cadastros
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item <?php if ($page == 2){echo 'active';} ?>"
                        href="cadastro_produto.php">Produtos</a>
                    <a class="dropdown-item <?php if ($page == 3){echo 'active';} ?>"
                        href="cadastro_categoria.php">Categorias</a>
                    <!--<div class="dropdown-divider"></div>-->
                    <a class="dropdown-item <?php if ($page == 4){echo 'active';} ?>"
                        href="cadastro_fornecedor.php">Fornecedores</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle <?php if ($page == 5 || $page == 6 || $page == 7){echo 'active';} ?>"
                    href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false">
                    Listar Cadastros
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item <?php if ($page == 5){echo 'active';} ?>"
                        href="listar_produto.php">Produtos</a>
                    <a class="dropdown-item <?php if ($page == 6){echo 'active';} ?>"
                        href="listar_categoria.php">Categorias</a>
                    <!--<div class="dropdown-divider"></div>-->
                    <a class="dropdown-item <?php if ($page == 7){echo 'active';} ?>"
                        href="listar_fornecedor.php">Fornecedores</a>
                </div>
            </li>
            <li class="nav-item <?php if ($page == 8){echo 'active';} ?>">
                <a class="nav-link" href="aboutme.php">Sobre
                    mim!</a>
            </li>
        </ul>
<?php 
    if (isset($_SESSION['user'])) {
?>
        <form class="form-inline" action="_logout.php" method="post" style="position: absolute; right: 10px;">
            <div class="input-group" style="margin-left: 5px; width: 150px;">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="user"><i class="fas fa-user-alt"></i></span>
                </div>
                <input type="text" class="form-control" name="user" placeholder="Usuário" aria-label="Username"
                    aria-describedby="user" value="<?php echo $_SESSION['user']; ?>" disabled>
            </div>
            <button class="btn btn-sm btn-outline-secondary" type="submit" style="margin-left: 5px;">Sair</button>
        </form>
<?php
    } else {
?>
        <form class="form-inline" action="_login.php" method="post" style="position: absolute; right: 10px;">
            <div class="input-group" style="width: 150px;">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="user"><i class="fas fa-user-alt"></i></span>
                </div>
                <input type="text" class="form-control" name="user" placeholder="Usuário" aria-label="Username"
                    aria-describedby="user" required>
            </div>
            <div class="input-group" style="margin-left: 5px; width: 150px;">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="pass"><i class="fas fa-unlock-alt"></i></span>
                </div>
                <input type="password" class="form-control" name="pass" placeholder="Senha" aria-label="Username"
                    aria-describedby="pass" required>
            </div>
            <button class="btn btn-sm btn-outline-secondary" type="submit" style="margin-left: 5px;">Login</button>
        </form>
<?php
    }
?>
    </div>
</nav>