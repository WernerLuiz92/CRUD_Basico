<?php include '_session.php'; ?>
<!-- Code -->
<?php

    include '_conexao.php';
    include '_conexao.php';

    $user = $_POST['user'];
    $pass = $_POST['pass'];

    $_SESSION['user'] = $user;

?>
<!-- Code End -->

<!-- Head -->
<?php
    include 'head.php';
    $page = 1;
    include 'navbar.php'; 
?>
<!-- Head End -->

<!-- Body -->
<div>
    <center>
        <div class="container" style="width: 500px; margin-top: 40px;">
            <h4 style="margin-top: 20px;">Login efetuado com sucesso!</h4>
            <a style="margin-top: 20px;" class="btn btn-sm btn-primary" href="index.php" role="button"><i class="fas fa-long-arrow-alt-left"></i>&nbsp;Voltar</a>
        </div>
    </center>
</div>
<!-- Body End -->

<!-- Footer -->
<?php
    include 'footer.php';
?>
<!-- Footer End -->