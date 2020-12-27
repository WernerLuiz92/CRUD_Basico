<!-- Code -->
<?php

    include '_session.php';
    include '_conexao.php';

    $id = $_POST['id_forn'];

    $sql = "DELETE FROM fornecedor WHERE id_forn = $id";

    $excluir = mysqli_query($conexao, $sql);

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
    <center>
        <div class="container" style="width: 500px; margin-top: 40px;">
            <h4 style="margin-top: 20px;">Fornecedor excluído com sucesso!</h4>
            <a class="btn btn-sm btn-primary" href="listar_fornecedor.php" role="button"><i
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