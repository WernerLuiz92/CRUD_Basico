<!-- Code -->
<?php

    include '_conexao.php';

    $sql = "SELECT MAX(cod_prod) as cod_prod FROM produto";
    $consulta = mysqli_query($conexao, $sql);

    $array = mysqli_fetch_array($consulta);

    $cod_prod = $array['cod_prod'];

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
                <input type="number" class="form-control" name="cod_prod" value="<?php echo $cod_prod + 1; ?>" required>
            </div>
            <div class="form-group">
                <label>Descrição</label>
                <input type="text" class="form-control" name="desc_prod" placeholder="Insira o nome do produto"
                    autocomplete="off" required>
            </div>
            <div class="form-group">
                <label>Categoria</label>
                <select class="form-control" name="cat_prod">
                    <option>Periféricos</option>
                    <option>Hardware</option>
                    <option>Software</option>
                    <option>Smartphones</option>
                    <option>Gadgets</option>
                </select>
            </div>
            <div class="form-group">
                <label>Quantidade</label>
                <input type="number" class="form-control" name="qtd_prod" placeholder="Insira a quantidade" required>
            </div>
            <div class="form-group">
                <label>Fornecedor</label>
                <select class="form-control" name="forn_prod">
                    <option>Pauta</option>
                    <option>Braile</option>
                    <option>Aldo</option>
                    <option>Solid</option>
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