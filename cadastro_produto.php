<?php include '_session.php'; ?>
<!-- Code -->
<?php

    include '_conexao.php';

    $sql1 = "SELECT MAX(cod_prod) as cod_prod FROM produto";
    $consulta1 = mysqli_query($conexao, $sql1);

    $array1 = mysqli_fetch_array($consulta1);

    $cod_prod = $array1['cod_prod'] + 1;

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
    <div class="container" id="tamanhoContainer" style="margin-top: 35px; width: 500px;">
        <div style="margin-top: 20px;"></div>
        <h4>Cadastro de Produtos</h4>
        <form action="_inserir_produto.php" method="post" style="margin-top: 20px;">
            <div class="form-group">
                <label>Cód.</label>
                <input type="number" class="form-control" name="cod_prod" value="<?php echo $cod_prod; ?>" required>
            </div>
            <div class="form-group">
                <label>Descrição</label>
                <input type="text" class="form-control" name="desc_prod" placeholder="Insira o nome do produto"
                    autocomplete="off" required>
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
                        <option value="<?php echo $id_cat ?>" title="<?php echo $desc_cat ?>"><?php echo "$cod_cat - $nome_cat" ?></option>
                    <?php
                        }
                    ?>

                </select>
            </div>
            <div class="form-group">
                <label>Quantidade</label>
                <input type="number" class="form-control" name="qtd_prod" placeholder="Insira a quantidade" required>
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
                    <option value="<?php echo $id_forn ?>"
                        title="<?php echo $nome_forn ?>"><?php echo "$cod_forn - $razsoc_forn" ?></option>
                    <?php
                        }
                    ?>

                </select>
            </div>
            <div class="botoes" style="text-align: right; width: 49%; float: right;">
                <button type="reset" class="btn btn-danger btn-sm"><i class="fas fa-eraser"></i>&nbsp;Limpar</button>
                <button type="submit" class="btn btn-success btn-sm"><i class="fas fa-save"></i>&nbsp;Salvar</button>
            </div>
        </form>
    </div>
</div>
<!-- Body End -->

<!-- Footer -->
<?php
    include 'footer.php';
?>
<!-- Footer End -->