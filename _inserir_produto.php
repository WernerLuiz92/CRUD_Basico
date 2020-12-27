<?php
include '_conexao.php';

    $codprod = $_POST['cod_prod'];
    $descprod = $_POST['desc_prod'];
    $catprod = $_POST['cat_prod'];
    $qtdprod = $_POST['qtd_prod'];
    $fornprod = $_POST['forn_prod'];

    $sql = "INSERT INTO `produto`(`cod_prod`, `desc_prod`, `cat_prod`, `qtd_prod`, `forn_prod`) VALUES ($cod_prod,'$desc_prod','$cat_prod',$qtd_prod,'$forn_prod')";

    $inserir = mysqli_query($conexao, $sql);
?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
    integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<center>
    <div class="container" style="width: 500px; margin-top: 40px;">
        <h4>Produto cadastrado com sucesso!</h4>
    </div>
    <div style="padding-top: 20px">
        <a href="index.php" role="button" class="btn btn-sm btn-primary">Voltar</a>
    </div>
</center>