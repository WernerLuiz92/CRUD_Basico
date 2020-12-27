<?php

include '_conexao.php';

$id = $_GET['id'];

?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alteraração de cadastro</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/8b054ccba1.js" crossorigin="anonymous"></script>
    <style>
    #tamanhoContainer {
        width: 500px;
    }

    #botao1 {
        background-color: #5A8D2F;
        color: #FFFFFF;
    }

    #botao2 {
        background-color: #BB1D03;
        color: #FFFFFF;
    }
    </style>
</head>

<body>
    <div class="container" id="tamanhoContainer" style="margin-top: 40px;">
        <h4>Cadastro de Produtos</h4>
        <form action="_inserir_produto.php" method="post" style="margin-top: 20px;">
            <?php

            $sql = "SELECT * FROM `produto` WHERE id_prod = $id";
            $buscar = mysqli_query($conexao, $sql);

            while ($array = mysqli_fetch_array($buscar)) {
                $id_prod = $array['id_prod'];
                $cod_prod = $array['cod_prod'];
                $desc_prod = $array['desc_prod'];
                $cat_prod = $array['cat_prod'];
                $qtd_prod = $array['qtd_prod'];
                $forn_prod = $array['forn_prod']

            ?>
            <div class="form-group">
                <label>Cód. Produto</label>
                <input type="number" class="form-control" name="codprod" value="<?php echo $cod_prod ?>" disabled>
            </div>
            <!--Fim form-group -->
            <div class="form-group">
                <label>Descrição</label>
                <input type="text" class="form-control" name="descprod" value="<?php echo $desc_prod ?>">
            </div>
            <!--Fim form-group -->
            <div class="form-group">
                <label>Categoria</label>
                <select class="form-control" name="catprod" value="<?php echo $cat_prod ?>">
                    <option <?php if ($cat_prod == 'Periféricos'){echo 'selected';} ?>>Periféricos</option>
                    <option <?php if ($cat_prod == 'Hardware'){echo 'selected';} ?>>Hardware</option>
                    <option <?php if ($cat_prod == 'Software'){echo 'selected';} ?>>Software</option>
                    <option <?php if ($cat_prod == 'Smartphones'){echo 'selected';} ?>>Smartphones</option>
                    <option <?php if ($cat_prod == 'Gadgets'){echo 'selected';} ?>>Gadgets</option>
                </select>
            </div>
            <!--Fim form-group -->
            <div class="form-group">
                <label>Quantidade</label>
                <input type="number" class="form-control" name="qtdprod" value="<?php echo $qtd_prod ?>">
            </div>
            <!--Fim form-group -->
            <div class="form-group">
                <label>Fornecedor</label>
                <select class="form-control" name="fornprod" value="<?php echo $forn_prod ?>">
                    <option <?php if ($forn_prod == 'Pauta'){echo 'selected';} ?>>Pauta</option>
                    <option <?php if ($forn_prod == 'Braile'){echo 'selected';} ?>>Braile</option>
                    <option <?php if ($forn_prod == 'Aldo'){echo 'selected';} ?>>Aldo</option>
                    <option <?php if ($forn_prod == 'Solid'){echo 'selected';} ?>>Solid</option>
                </select>
            </div>
            <!--Fim form-group -->
            <div class="botoes" style="text-align: right;">
                <button type="submit" class="btn btn-success btn-sm"><i class="fas fa-check"></i>&nbsp;Atualizar</button>
                <a class="btn btn-sm btn-primary" href="_listar_produto.php" role="button"><i
                        class="fas fa-long-arrow-alt-left"></i>&nbsp;Voltar</a>
            </div>
            <!--Fim botoes -->
            <?php } ?>
        </form>
    </div>
    <!--Fim container -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"
        integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous">
    </script>
</body>

</html>