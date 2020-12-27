<!-- Code -->
<?php

    include '_session.php';
    include '_conexao.php';

    $sql = "SELECT MAX(cod_cat) as cod_cat FROM categoria";
    $consulta = mysqli_query($conexao, $sql);

    $array = mysqli_fetch_array($consulta);

    $cod_cat = $array['cod_cat'];

?>
<!-- Code End -->

<!-- Head -->
<?php
    include 'head.php';
    $page = 3;
    include 'navbar.php'; 
?>
<!-- Head End -->

<!-- Body -->
<div>
    <div class="container" id="tamanhoContainer" style="margin-top: 40px; width: 500px;">
        <div style="margin-top: 20px;"></div>
        <h4>Cadastro de Categorias</h4>
        <form action="_inserir_categoria.php" method="post" style="margin-top: 20px;">
            <div class="form-group">
                <label>Cód.</label>
                <input type="number" class="form-control" name="cod_cat" value="<?php echo $cod_cat + 1; ?>" required>
            </div>
            <div class="form-group">
                <label>Nome</label>
                <input type="text" class="form-control" name="nome_cat" placeholder="Insira o nome da categoria"
                    autocomplete="off" required>
            </div>
            <div class="form-group">
                <label>Descrição</label>
                <textarea type="text" class="form-control" name="desc_cat" placeholder="Uma breve descrição" required rows="3"></textarea>
            </div>
            <div class="botoes" style="text-align: right; width: 49%; float: right;">
                <a class="btn btn-danger btn-sm" href="cadastro_categoria.php" role="button"><i
                        class="fas fa-eraser"></i>&nbsp;Limpar</a>
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