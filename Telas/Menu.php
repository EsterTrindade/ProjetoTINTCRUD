<?php
    namespace PHP\Modelo\Telas;
?>

<!Doctype HTML>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Menu</title>
        <link rel="stylesheet" href="../CSS/estilos.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    </head>
    <body>
        <br>
        <h1>Escolha o que deseja fazer<h1>

        <a href="cadastroFuncionario.php"><button class="btn btn-outline-primary">Cadastrar Funcionário</button></a>

        <br>
        
        <a href="cadastroCliente.php"><button class="btn btn-outline-primary">Cadastrar Cliente</button></a>

        <br>

        <a href="ConsultarCliente.php"><button class="btn btn-outline-primary">Consultar Cliente</button></a>
        
        <br>

        <a href="ConsultarFuncionario.php"><button class="btn btn-outline-primary">Consultar Funcionário</button></a>
        
        <br>

        <a href="AtualizarFuncionario.php"><button class="btn btn-outline-warning">Atualizar Funcionário</button></a>
        
        <br>

        <a href="AtualizarCliente.php"><button class="btn btn-outline-warning">Atualizar Cliente</button></a>

        <br>

        <a href="ExcluirCliente.php"><button class="btn btn-outline-danger">Excluir Cliente</button></a>

        <br>

        <a href="ExcluirFuncionario.php"><button class="btn btn-outline-danger">Excluir Funcionário</button></a>

    </body>
</htl>
