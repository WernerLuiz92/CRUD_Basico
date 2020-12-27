<?php include '_session.php'; ?>
<!-- Code -->
<?php

    include '_conexao.php';

?>
<!-- Code End -->

<!-- Head -->
<?php
    include 'head.php';
    $page = 6;
    include 'navbar.php'; 
?>
<!-- Head End -->

<!-- Body -->
<div>
    <div class="container" style="margin-top:40px;">
        <h3 style="margin-top: 20px;">Lista de Categorias</h3>
        <br />
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Cód.</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Descrição</th>
                    <th scope="col">Ação</th>
                </tr>
            </thead>
            <?php
                $sql = "SELECT * FROM `categoria`";
                $busca = mysqli_query($conexao,$sql);

                while ($array = mysqli_fetch_array($busca)) {
                    $id_cat = $array['id_cat'];
                    $cod_cat = $array['cod_cat'];
                    $nome_cat = $array['nome_cat'];
                    $desc_cat = $array['desc_cat'];
            ?>
            <tr>
                <td><?php echo $cod_cat ?></td>
                <td><?php echo $nome_cat ?></td>
                <td><?php echo $desc_cat ?></td>
                <td>
                    <a class="btn btn-sm btn-outline-warning" href="editar_categoria.php?id=<?php echo $id_cat ?>"
                        role="button"><i class="far fa-edit"></i>&nbsp;Editar</a>
                    <a class="btn btn-sm btn-outline-danger"
                        href="confirma_exclusao_categoria.php?id=<?php echo $id_cat ?>" role="button"><i
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