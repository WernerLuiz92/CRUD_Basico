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
    $page = 6;
    include 'navbar.php'; 
?>
<!-- Head End -->

<!-- Body -->
<div>
    <div class="container" id="tamanhoContainer" style="margin-top: 40px; width: 500px;">
        <center>
            <h4>Tem certeza que deseja excluir esta categoria?</h4>
        </center>
        <form action="_excluir_categoria.php" method="post" style="margin-top: 20px;">
        <?php

            $sql = "SELECT * FROM `categoria` WHERE id_cat = $id";
            $consulta = mysqli_query($conexao, $sql);

            while ($array = mysqli_fetch_array($consulta)) {
                $id_cat = $array['id_cat'];
                $cod_cat = $array['cod_cat'];
                $nome_cat = $array['nome_cat'];
                $desc_cat = $array['desc_cat']

        ?>
            <div class="form-group">
                <label>Cód.</label>
                <input type="number" class="form-control" name="cod_cat" value="<?php echo $cod_cat; ?>" disabled>
                <input type="number" class="form-control" name="id_cat" value="<?php echo $id_cat; ?>"
                    style=" display: none;">
            </div>
            <div class="form-group">
                <label>Nome</label>
                <input type="text" class="form-control" name="nome_cat" value="<?php echo $nome_cat; ?>" disabled>
            </div>
            <div class="form-group">
                <label>Descrição</label>
                <textarea type="text" class="form-control" name="desc_cat" rows="3" disabled><?php echo $desc_cat; ?></textarea>
            </div>
            <div class="botoes" style="text-align: right;">
                <button type="submit" class="btn btn-success btn-sm"><i
                        class="fas fa-check"></i>&nbsp;Confirmar</button>
                <a class="btn btn-sm btn-primary" href="listar_categoria.php" role="button"><i
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