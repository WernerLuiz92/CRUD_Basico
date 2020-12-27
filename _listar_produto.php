<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Produtos</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/8b054ccba1.js" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container" style="margin-top:40px;">
        <center>
            <div class="container" style="width: 500px; margin-top: 40px;">
                <a class="btn btn-sm btn-primary" href="index.php" role="button"><i class="fas fa-bars"></i>&nbsp;Menu</a>
                <a class="btn btn-sm btn-primary" href="_cadastro_produto.php" role="button"><i
                        class="fas fa-pencil-alt"></i>&nbsp;Cadastro</a>
                <a class="btn btn-sm btn-primary active" href="#" role="button" aria-pressed="true"><i
                        class="fas fa-list"></i>&nbsp;Listar Produtos</a>
            </div>
            <div style="margin-top: 20px;"></div>
        </center>
        <h3 style="margin-top: 20px;">Lista de Produtos</h3>
        <br />
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Cód.</th>
                    <th scope="col">Descrição</th>
                    <th scope="col">Categoria</th>
                    <th scope="col">Quantidade</th>
                    <th scope="col">Fornecedor</th>
                    <th scope="col">Ação</th>
                </tr>
            </thead>
            <?php
                        include '_conexao.php';
                        $sql = "SELECT * FROM `produto`";
                        $busca = mysqli_query($conexao,$sql);

                        while ($array = mysqli_fetch_array($busca)) {
                            $id_prod = $array['id_prod'];
                            $cod_prod = $array['cod_prod'];
                            $desc_prod = $array['desc_prod'];
                            $cat_prod = $array['cat_prod'];
                            $qtd_prod = $array['qtd_prod'];
                            $forn_prod = $array['forn_prod'];
                    ?>
            <tr>
                <td><?php echo $cod_prod ?></td>
                <td><?php echo $desc_prod ?></td>
                <td><?php echo $cat_prod ?></td>
                <td><?php echo $qtd_prod ?></td>
                <td><?php echo $forn_prod ?></td>
                <td>
                    <a class="btn btn-sm btn-outline-warning" href="_editar_produto.php?id=<?php echo $id_prod ?>"
                        role="button"><i class="far fa-edit"></i>&nbsp;Editar</a>
                    <a class="btn btn-sm btn-outline-danger"
                        href="_confirma_exclusao_produto.php?id=<?php echo $id_prod ?>" role="button"><i
                            class="far fa-trash-alt"></i>&nbsp;Excluir</a>
                </td>
                <?php
                        }
                    ?>
            </tr>
        </table>
    </div>



    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"
        integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous">
    </script>
</body>

</html>