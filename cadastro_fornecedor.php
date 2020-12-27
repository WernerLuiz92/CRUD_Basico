<?php include '_session.php'; ?>
<!-- Code -->
<?php

    include '_conexao.php';

    $sql1= "SELECT MAX(cod_forn) as cod_forn FROM fornecedor";
    $consulta1 = mysqli_query($conexao, $sql1);

    $array1 = mysqli_fetch_array($consulta1);

    $cod_forn = $array1['cod_forn'] + 1;

?>
<!-- Code End -->

<!-- Head -->
<?php
    include 'head.php';
    $page = 4;
    include 'navbar.php'; 
?>
<!-- Head End -->

<!-- Body -->
<div>
    <div class="container" id="tamanhoContainer" style="margin-top: 40px; width: 500px;">
        <div style="margin-top: 20px;"></div>
        <h4>Cadastro de Fornecedor</h4>
        <form action="_inserir_fornecedor.php" method="post" style="margin-top: 20px;">
            <div class="form-group">
                <label>Cód. fornecedor</label>
                <input type="number" class="form-control" name="cod_forn" value="<?php echo $cod_forn; ?>" required>
            </div>
            <div class="form-group">
                <label>Razão Social</label>
                <input type="text" class="form-control" name="razsoc_forn" placeholder="Insira a razão social"
                    autocomplete="off" required>
            </div>
            <div class="form-group">
                <label>CNPJ</label>
                <input type="text" class="form-control" name="cnpj_forn" placeholder="Insira o CNPJ. Somente numeros!" autocomplete="off" required>
            </div>
            <div class="form-group">
                <label>Nome Fantasia</label>
                <input type="text" class="form-control" name="nome_forn" placeholder="Insira o nome fantasia" autocomplete="off" required>
            </div>
            <div class="form-group">
                <label>Cidade</label>
                <input type="text" class="form-control" name="cidade_forn" placeholder="Insira a cidade" required>
            </div>
            <div class="form-group">
                <label>Telefone de Contato</label>
                <input type="text" class="form-control" name="tel_forn" placeholder="Insira o telefone de contato">
            </div>
            <div class="form-group">
                <label>E-mail</label>
                <input type="email" class="form-control" name="email_forn" placeholder="Insira o email de contato">
            </div>
            <div class="botoes" style="margin-bottom: 20px; text-align: right; width: 49%; float: right;">
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