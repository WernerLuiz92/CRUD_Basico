<!-- Code -->
<!--?php

    include '_conexao.php';

?-->
<!-- Code End -->

<!-- Head -->
<?php
    include 'head.php';
    $page = 7;
    include 'navbar.php'; 
?>
<!-- Head End -->

<!-- Body -->
<div>
    <div class="container" style="margin-top:40px;">
        <h3 style="margin-top: 20px;">Lista de Fornecedores</h3>
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
                    <a class="btn btn-sm btn-outline-warning" href="editar_produto.php?id=<?php echo $id_prod ?>"
                        role="button"><i class="far fa-edit"></i>&nbsp;Editar</a>
                    <a class="btn btn-sm btn-outline-danger"
                        href="confirma_exclusao_produto.php?id=<?php echo $id_prod ?>" role="button"><i
                            class="far fa-trash-alt"></i>&nbsp;Excluir</a>
                </td>
                <?php
                        }
            ?>
            </tr>
        </table>
    </div>
</div>
<!-- Body End -->

<!-- Footer -->
<?php
    include 'footer.php';
?>
<!-- Footer End -->