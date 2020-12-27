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
            <h4>Tem certeza que deseja excluir este produto?</h4>
        </center>
        <form action="_excluir_produto.php" method="post" style="margin-top: 20px;">
        <?php

            $sql = "SELECT * FROM `produto` WHERE id_prod = $id";
            $consulta = mysqli_query($conexao, $sql);

            while ($array = mysqli_fetch_array($consulta)) {
                $id_prod = $array['id_prod'];
                $cod_prod = $array['cod_prod'];
                $desc_prod = $array['desc_prod'];
                $cat_prod = $array['cat_prod'];
                $qtd_prod = $array['qtd_prod'];
                $forn_prod = $array['forn_prod']

        ?>
            <div class="form-group">
                <label>Cód. Produto</label>
                <input type="number" class="form-control" name="cod_prod" value="<?php echo $cod_prod ?>" disabled>
                <input type="number" class="form-control" name="id_prod" value="<?php echo $id_prod ?>"
                    style=" display: none;">
            </div>
            <div class="form-group">
                <label>Descrição</label>
                <input type="text" class="form-control" name="desc_prod" value="<?php echo $desc_prod ?>" disabled>
            </div>
            <div class="form-group">
                <label>Categoria</label>
                <select class="form-control" name="cat_prod" disabled>
                    <option <?php if ($cat_prod == 'Periféricos'){echo 'selected';} ?>>Periféricos</option>
                    <option <?php if ($cat_prod == 'Hardware'){echo 'selected';} ?>>Hardware</option>
                    <option <?php if ($cat_prod == 'Software'){echo 'selected';} ?>>Software</option>
                    <option <?php if ($cat_prod == 'Smartphones'){echo 'selected';} ?>>Smartphones</option>
                    <option <?php if ($cat_prod == 'Gadgets'){echo 'selected';} ?>>Gadgets</option>
                </select>
            </div>
            <div class="form-group">
                <label>Quantidade</label>
                <input type="number" class="form-control" name="qtd_prod" value="<?php echo $qtd_prod ?>" disabled>
            </div>                <div class="form-group">
                <label>Fornecedor</label>
                <select class="form-control" name="forn_prod" disabled>
                    <option <?php if ($forn_prod == 'Pauta'){echo 'selected';} ?>>Pauta</option>
                    <option <?php if ($forn_prod == 'Braile'){echo 'selected';} ?>>Braile</option>
                    <option <?php if ($forn_prod == 'Aldo'){echo 'selected';} ?>>Aldo</option>
                    <option <?php if ($forn_prod == 'Solid'){echo 'selected';} ?>>Solid</option>
                </select>
            </div>
            <div class="botoes" style="text-align: right;">
                <button type="submit" class="btn btn-success btn-sm"><i
                        class="fas fa-check"></i>&nbsp;Confirmar</button>
                <a class="btn btn-sm btn-primary" href="listar_produto.php" role="button"><i
                        class="fas fa-long-arrow-alt-left"></i>&nbsp;Voltar</a>
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