<!-- Code -->
<?php

    include '_session.php';
    include '_conexao.php';

    $id_forn = $_POST['id_forn'];
    $razsoc_forn = $_POST['razsoc_forn'];
    $cnpj_forn = $_POST['cnpj_forn'];
    $nome_forn = $_POST['nome_forn'];
    $cidade_forn = $_POST['cidade_forn'];
    $tel_forn = $_POST['tel_forn'];
    $email_forn = $_POST['email_forn'];

    $sql = "UPDATE fornecedor SET razsoc_forn = '$razsoc_forn', cnpj_forn = '$cnpj_forn', nome_forn = '$nome_forn', cidade_forn = '$cidade_forn', tel_forn = '$tel_forn', email_forn = '$email_forn' WHERE id_forn = $id_forn";

    $atualizar = mysqli_query($conexao, $sql);

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
            <h4 style="margin-top: 20px;">Fornecedor alterado com sucesso!</h4>
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