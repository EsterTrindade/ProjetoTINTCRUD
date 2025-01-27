<?php
    namespace PHP\Modelo\Tela;
?>

<!Doctype HTML>
<html>
<head>
    <meta charset="UTF-8">
    <title>Consultar Cliente</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
    <form method="POST">
        <label>Informe um CPF:</label>
        <input type="text" name="tCPF" class="form-control"/>
        <button type ="submit" class="btn btn-outline-warning">Consultar</button>
    </form>
</body>
</html>
