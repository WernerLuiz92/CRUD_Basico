<?php include '_session.php'; ?>
<!-- Code -->
<?php

    include '_conexao.php';

?>
<!-- Code End -->

<!-- Head -->
<?php
    include 'head.php';
    $page = 1;
    include 'navbar.php'; 
?>
<!-- Head End -->

<!-- Body -->
<div>
    <div class="container">
        <?php
            if (!isset($_SESSION['user'])) {
                echo "Nenhum usuário conectado.";
            }else {
                echo "O dado contido em SESSION é: ".$_SESSION['user']." <br/>";
                print_r($_SESSION);
            }
        ?>
        <h4 style="margin-top: 20px;">Acesso Rápido:</h4>
        <div class="row">
            <div class="col-sm-4" style="margin-top: 20px;">
                <div class="container" style="margin-top: 20px; float: left; margin-right: 10px;">
                    <div class="card" style="width: 18rem;">
                        <img src="imagens/produto.png" class="card-img-top"
                            alt="CRUD Básico com Bootstrap 4 , PHP e MySQL">
                        <div class="card-body">
                            <h5 class="card-title">Produtos</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4" style="margin-top: 20px;">
                <div class="container" style="margin-top: 20px; float: left; margin-right: 10px;">
                    <div class="card" style="width: 18rem;">
                        <img src="imagens/fornecedor.png" class="card-img-top"
                            alt="PHP 7 Completo - Curso do Desenvolvedor Web 2020 + Projetos">
                        <div class="card-body">
                            <h5 class="card-title">Fornecedores</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4" style="margin-top: 20px;">
                <div class="container" style="margin-top: 20px; float: left; margin-right: 10px;">
                    <div class="card" style="width: 18rem;">
                        <img src="imagens/categoria.png" class="card-img-top"
                            alt="Docker: Ferramenta essencial para Desenvolvedores">
                        <div class="card-body">
                            <h5 class="card-title">Categorias</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Body End -->

<!-- Footer -->
<?php
    include 'footer.php';
?>
<!-- Footer End -->