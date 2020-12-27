<?php include '_session.php'; ?>
<!-- Code -->
<?php

    include '_conexao.php';

    $id = $_POST['id_cat'];
    $nome_cat = $_POST['nome_cat'];
    $desc_cat = $_POST['desc_cat'];

    $sql = "UPDATE categoria SET nome_cat = '$nome_cat', desc_cat = '$desc_cat' WHERE id_cat = $id";

    $atualizar = mysqli_query($conexao, $sql);

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
    <center>
        <div class="container" style="width: 500px; margin-top: 40px;">
            <h4 style="margin-top: 20px;">Categoria alterada com sucesso!</h4>
            <a class="btn btn-sm btn-primary" href="listar_categoria.php" role="button"><i
                    class="fas fa-long-arrow-alt-left"></i>&nbsp;Voltar</a>
        </div>
    </center>
</div>
<!-- Body End -->

<!-- Footer -->
<?php
    include 'footer.php';
?>
<!-- Footer End -->