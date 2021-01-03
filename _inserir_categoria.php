<?php include '_session.php'; ?>
<!-- Code -->
<?php

    include '_conexao.php';

    $cod_cat = $_POST['cod_cat'];
    $nome_cat = $_POST['nome_cat'];
    $desc_cat = $_POST['desc_cat'];

    $sql = "INSERT INTO categoria (cod_cat, nome_cat, desc_cat) VALUES ($cod_cat,'$nome_cat','$desc_cat')";

    $inserir = mysqli_query($conexao, $sql);

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
    <center>
        <div class="container" style="width: 500px; margin-top: 40px;">
            <h4 style="margin-top: 20px;">Categoria cadastrada com sucesso!</h4>
            <a class="btn btn-sm btn-primary" href="cadastro_categoria.php" role="button"><i
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