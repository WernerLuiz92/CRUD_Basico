<?php include '_session.php'; ?>
<!-- Code -->
<?php

    include '_conexao.php';

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
    <div class="container" style="margin-top:40px;">
        <h3 style="margin-top: 20px;">Lista de Fornecedores</h3>
        <br />
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Cód.</th>
                    <th scope="col">Razão Social</th>
                    <th scope="col">CNPJ</th>
                    <th scope="col">Nome Fantasia</th>
                    <th scope="col">Cidade</th>
                    <th scope="col">Telefone</th>
                    <th scope="col">E-mail</th>
                    <th scope="col">Ação</th>
                </tr>
            </thead>
            <?php
                $sql = "SELECT * FROM fornecedor";
                $busca = mysqli_query($conexao,$sql);

                while ($array = mysqli_fetch_array($busca)) {
                    $id_forn = $array['id_forn'];
                    $cod_forn = $array['cod_forn'];
                    $razsoc_forn = $array['razsoc_forn'];
                    $cnpj_forn = $array['cnpj_forn'];
                    $nome_forn = $array['nome_forn'];
                    $cidade_forn = $array['cidade_forn'];
                    $tel_forn = $array['tel_forn'];
                    $email_forn = $array['email_forn'];

            ?>
            <tr>
                <td><?php echo $cod_forn ?></td>
                <td><?php echo $razsoc_forn ?></td>
                <td><?php echo $cnpj_forn ?></td>
                <td><?php echo $nome_forn ?></td>
                <td><?php echo $cidade_forn ?></td>
                <td><?php echo $tel_forn ?></td>
                <td><?php echo $email_forn ?></td>
                <td>
                    <a class="btn btn-sm btn-outline-warning" href="editar_fornecedor.php?id=<?php echo $id_forn ?>"
                        role="button"><i class="far fa-edit"></i>&nbsp;Editar</a>
                    <a class="btn btn-sm btn-outline-danger"
                        href="confirma_exclusao_fornecedor.php?id=<?php echo $id_forn ?>" role="button"><i
                            class="far fa-trash-alt"></i>&nbsp;Excluir</a>
                </td>
            <?php
                }
            ?>
            </tr>
        </table>
    </div>
</div>
<!-- Body End -->

<!-- Footer -->
<?php
    include 'footer.php';
?>
<!-- Footer End -->