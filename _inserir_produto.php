<?php include '_session.php'; ?>
<!-- Code -->
<?php

    include '_conexao.php';
    include '_conexao.php';

    $cod_prod = $_POST['cod_prod'];
    $desc_prod = $_POST['desc_prod'];
    $id_cat_prod = $_POST['id_cat_prod'];
    $qtd_prod = $_POST['qtd_prod'];
    $id_forn_prod = $_POST['id_forn_prod'];

    $sql = "INSERT INTO `produto`(`cod_prod`, `desc_prod`, `id_cat_prod`, `qtd_prod`, `id_forn_prod`) VALUES ($cod_prod, '$desc_prod', $id_cat_prod, $qtd_prod, $id_forn_prod)";

    $inserir = mysqli_query($conexao, $sql);

?>
<!-- Code End -->

<!-- Head -->
<?php
    include 'head.php';
    $page = 2;
    include 'navbar.php'; 
?>
<!-- Head End -->

<!-- Body -->
<div>
    <center>
        <div class="container" style="width: 500px; margin-top: 40px;">
            <h4 style="margin-top: 20px;">Produto cadastrado com sucesso!</h4>
            <a class="btn btn-sm btn-primary" href="cadastro_produto.php" role="button"><i
                    class="fas fa-long-arrow-alt-left"></i>&nbsp;Voltar</a>
        </div>
    </center>
</div>
<!-- Body End -->

<!-- Footer -->
<?php
    include 'footer.php';
?>
<!-- Footer End -->