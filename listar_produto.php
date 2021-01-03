<?php include '_session.php'; ?>
<!-- Code -->
<?php

    include '_conexao.php';

?>
<!-- Code End -->

<!-- Head -->
<?php
    include 'head.php';
    $page = 5;
    include 'navbar.php'; 
?>
<!-- Head End -->

<!-- Body -->
<div>
    <div class="container" style="margin-top:40px;">
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
                $sql = "SELECT id_prod, cod_prod, desc_prod, categoria.nome_cat, qtd_prod, fornecedor.nome_forn FROM produto, categoria, fornecedor WHERE produto.id_cat_prod = categoria.id_cat AND produto.id_forn_prod = fornecedor.id_forn ORDER BY cod_prod";
                $busca = mysqli_query($conexao,$sql);

                while ($array = mysqli_fetch_array($busca)) {
                    $id_prod = $array['id_prod'];
                    $cod_prod = $array['cod_prod'];
                    $desc_prod = $array['desc_prod'];
                    $nome_cat = $array['nome_cat'];
                    $qtd_prod = $array['qtd_prod'];
                    $nome_forn = $array['nome_forn'];
            ?>
            <tr>
                <td><?php echo $cod_prod ?></td>
                <td><?php echo $desc_prod ?></td>
                <td><?php echo $nome_cat ?></td>
                <td><?php echo $qtd_prod ?></td>
                <td><?php echo $nome_forn ?></td>
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