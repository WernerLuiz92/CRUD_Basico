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
<!DOCTYPE html>
<html lang="pt_BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/8b054ccba1.js" crossorigin="anonymous"></script>
    <title>Cadastro de Produtos</title>
</head>

<body>
<center>
    <div class="container" style="width: 500px; margin-top: 40px;">
        <h4>Produto alterado com sucesso!</h4>
    </div>
    <div style="padding-top: 20px">
        <a href="_listar_produto.php" role="button" class="btn btn-sm btn-primary">Voltar</a>
    </div>
</center>
</body>

</html>