<?php

include '_conexao.php';

$id = $_POST['id_prod'];
//$cod_prod = $_POST['cod_prod']; Não vai ser alterado, por isso não precisa ser puxado.
$desc_prod = $_POST['desc_prod'];
$cat_prod = $_POST['cat_prod'];
$qtd_prod = $_POST['qtd_prod'];
$forn_prod = $_POST['forn_prod'];

$sql = "UPDATE produto SET desc_prod = '$desc_prod', cat_prod = '$cat_prod', qtd_prod = $qtd_prod, forn_prod = '$forn_prod' WHERE id_prod = $id";

$atualizar = mysqli_query($conexao, $sql);

?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
    integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<script src="https://kit.fontawesome.com/8b054ccba1.js" crossorigin="anonymous"></script>
<center>
    <div class="container" style="width: 500px; margin-top: 40px;">
        <a class="btn btn-sm btn-primary" href="index.php" role="button"><i class="fas fa-bars"></i>&nbsp;Menu</a>
        <a class="btn btn-sm btn-primary" href="_cadastro_produto.php" role="button"><i
                class="fas fa-pencil-alt"></i>&nbsp;Cadastro</a>
        <a class="btn btn-sm btn-primary" href="_listar_produto.php" role="button"><i
                class="fas fa-list"></i>&nbsp;Listar Produtos</a>
        <h4 style="margin-top: 20px;">Produto alterado com sucesso!</h4>
        <a class="btn btn-sm btn-primary" href="_listar_produto.php" role="button"><i
                class="fas fa-long-arrow-alt-left"></i>&nbsp;Voltar</a>
    </div>
</center>