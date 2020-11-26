<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Cadastro</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <style>
        #tamanhoContainer {
            width: 500px;
        }
    </style>
</head>
<body>
<div class="container" id="tamanhoContainer" style="margin-top: 40px;">
    <form action="cadastro" method="post">
        <div class="form-group">
            <label>Cód. Produto</label>
            <input type="number" class="form-control" placeholder="Insira o código do produto">
        </div><!--Fim form-group -->
        <div class="form-group">
            <label>Descrição</label>
            <input type="text" class="form-control" placeholder="Insira o nome do produto">
        </div><!--Fim form-group -->
        <div class="form-group">
            <label>Categoria</label>
            <select class="form-control">
                <option>Periféricos</option>
                <option>Hardware</option>
                <option>Software</option>
                <option>Smartphones</option>
                <option>Gadgets</option>
            </select>
        </div><!--Fim form-group -->
        <div class="form-group">
            <label>Quantidade</label>
            <input type="number" class="form-control" placeholder="Insira a quantidade">
        </div><!--Fim form-group -->
        <div class="form-group">
            <label>Fornecedor</label>
            <select class="form-control">
                <option>Pauta</option>
                <option>Braile</option>
                <option>Aldo</option>
                <option>Solid</option>
            </select>
        </div><!--Fim form-group -->
        <button type="submit" class="btn btn-success btn-sm">Salvar</button>
        <button type="submit" class="btn btn-danger btn-sm">Limpar</button>
    </form>
</div><!--Fim container -->

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</body>
</html>