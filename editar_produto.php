<?php include '_session.php'; ?>
<!-- Code -->
<?php

    include '_conexao.php';

    $id = $_GET['id'];

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
    <div class="container" id="tamanhoContainer" style="margin-top: 40px; width: 500px;">
        <center>
            <h4>Alteração de Cadastro</h4>
        </center>
        <form action="_salvar_alteracao_produto.php" method="post" style="margin-top: 15px;">
            <?php

            $sql1 = "SELECT * FROM `produto` WHERE id_prod = $id";
            $consulta1 = mysqli_query($conexao, $sql1);

            while ($array = mysqli_fetch_array($consulta1)) {
                $id_prod = $array['id_prod'];
                $cod_prod = $array['cod_prod'];
                $desc_prod = $array['desc_prod'];
                $id_cat_prod = $array['id_cat_prod'];
                $qtd_prod = $array['qtd_prod'];
                $id_forn_prod = $array['id_forn_prod']

        ?>
            <div class="form-group">
                <label>Cód. Produto</label>
                <input type="number" class="form-control" name="cod_prod" value="<?php echo $cod_prod ?>" disabled>
                <input type="number" class="form-control" name="id_prod" value="<?php echo $id_prod ?>"
                    style=" display: none;">
            </div>
            <div class="form-group">
                <label>Descrição</label>
                <input type="text" class="form-control" name="desc_prod" value="<?php echo $desc_prod ?>">
            </div>
            <div class="form-group">
                <label>Categoria</label>
                <select class="form-control" name="id_cat_prod">

                    <?php
                        $sql2 = "SELECT * FROM categoria ORDER BY cod_cat";
                        $consulta2 = mysqli_query($conexao, $sql2);

                        while ($array2 = mysqli_fetch_array($consulta2)) {

                            $id_cat = $array2['id_cat'];
                            $cod_cat = $array2['cod_cat'];
                            $nome_cat = $array2['nome_cat'];
                            $desc_cat = $array2['desc_cat'];
                        

                        ?>
                    <option <?php if ($id_cat_prod == $id_cat){echo 'selected ';} ?> value="<?php echo $id_cat ?>"
                        title="<?php echo $desc_cat ?>"><?php echo "$cod_cat - $nome_cat" ?></option>
                    <?php
                        }
                    ?>

                </select>
            </div>
            <div class="form-group">
                <label>Quantidade</label>
                <input type="number" class="form-control" name="qtd_prod" value="<?php echo $qtd_prod ?>">
            </div>
            <div class="form-group">
                <label>Fornecedor</label>
                <select class="form-control" name="id_forn_prod">

                    <?php
                        $sql3 = "SELECT * FROM fornecedor ORDER BY nome_forn ASC";
                        $consulta3 = mysqli_query($conexao, $sql3);

                        while ($array3 = mysqli_fetch_array($consulta3)) {

                            $id_forn = $array3['id_forn'];
                            $cod_forn = $array3['cod_forn'];
                            $razsoc_forn = $array3['razsoc_forn'];
                            $nome_forn = $array3['nome_forn'];
                        

                        ?>
                    <option <?php if ($id_forn_prod == $id_forn){echo 'selected ';} ?> value="<?php echo $id_forn ?>"
                        title="<?php echo $nome_forn ?>"><?php echo "$cod_forn - $razsoc_forn" ?></option>
                    <?php
                        }
                    ?>

                </select>
            </div>
            <div class="botoes" style="text-align: right;">
                <a class="btn btn-sm btn-primary" href="listar_produto.php" role="button"><i
                        class="fas fa-long-arrow-alt-left"></i>&nbsp;Voltar</a>
                <button type="submit" class="btn btn-success btn-sm"><i
                        class="fas fa-check"></i>&nbsp;Atualizar</button>
            </div>
            <?php   } ?>
        </form>
    </div>
</div>
<!-- Body End -->

<!-- Footer -->
<?php
    include 'footer.php';
?>
<!-- Footer End -->