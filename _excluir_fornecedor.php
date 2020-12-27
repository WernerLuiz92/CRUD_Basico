<!-- Code -->
<?php

    include '_conexao.php';

    $id = $_POST['id_prod'];

    $sql = "DELETE FROM produto WHERE id_prod = $id";

    $atualizar = mysqli_query($conexao, $sql);

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
    <center>
        <div class="container" style="width: 500px; margin-top: 40px;">
            <h4 style="margin-top: 20px;">Produto excluído com sucesso!</h4>
            <a class="btn btn-sm btn-primary" href="listar_produto.php" role="button"><i
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