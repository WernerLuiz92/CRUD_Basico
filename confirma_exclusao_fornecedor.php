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
    $page = 7;
    include 'navbar.php'; 
?>
<!-- Head End -->

<!-- Body -->
<div>
    <div class="container" id="tamanhoContainer" style="margin-top: 40px; width: 500px;">
        <center>
            <h4>Tem certeza que deseja excluir este fornecedor?</h4>
        </center>
        <form action="_excluir_fornecedor.php" method="post" style="margin-top: 20px;">
        <?php

            $sql1 = "SELECT * FROM fornecedor WHERE id_forn = $id";
            $consulta1 = mysqli_query($conexao, $sql1);

            while ($array1 = mysqli_fetch_array($consulta1)) {
                $id_forn = $array1['id_forn'];
                $cod_forn = $array1['cod_forn'];
                $razsoc_forn = $array1['razsoc_forn'];
                $cnpj_forn = $array1['cnpj_forn'];
                $nome_forn = $array1['nome_forn'];
                $cidade_forn = $array1['cidade_forn'];
                $tel_forn = $array1['tel_forn'];
                $email_forn = $array1['email_forn'];

        ?>
            <div class="form-group">
                <label>Cód. Fornecedor</label>
                <input type="number" class="form-control" name="cod_forn" value="<?php echo $cod_forn ?>" disabled>
                <input type="number" class="form-control" name="id_forn" value="<?php echo $id_forn ?>"
                    style=" display: none;">
            </div>
            <div class="form-group">
                <label>Razão Social</label>
                <input type="text" class="form-control" name="razsoc_forn" value="<?php echo $razsoc_forn ?>" disabled>
            </div>
            <div class="form-group">
                <label>CNPJ</label>
                <input type="text" class="form-control" name="cnpj_forn" value="<?php echo $cnpj_forn ?>" disabled>
            </div>
            <div class="form-group">
                <label>Nome fantasia</label>
                <input type="text" class="form-control" name="nome_forn" value="<?php echo $nome_forn ?>" disabled>
            </div>
            <div class="form-group">
                <label>Cidade</label>
                <input type="text" class="form-control" name="cidade_forn" value="<?php echo $cidade_forn ?>" disabled>
            </div>
            <div class="form-group">
                <label>Telefone de Contato</label>
                <input type="text" class="form-control" name="tel_forn" value="<?php echo $tel_forn ?>" disabled>
            </div>
            <div class="form-group">
                <label>E-mail</label>
                <input type="email" class="form-control" name="email_forn" value="<?php echo $email_forn ?>" disabled>
            </div>            
            <div class="botoes" style="margin-bottom: 20px; text-align: right; width: 49%; float: right;">
                <a class="btn btn-sm btn-primary" href="listar_fornecedor.php" role="button"><i
                        class="fas fa-long-arrow-alt-left"></i>&nbsp;Voltar</a>
                <button type="submit" class="btn btn-success btn-sm"><i
                        class="fas fa-check"></i>&nbsp;Confirmar</button>
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