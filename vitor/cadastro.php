<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>BANANINHA | CADASTRO</title>
    </head>
    <body class="p-3 mb-2 bg-secondary text-white" style="margin: 30px">
        <center><h1 >BANANINHA</h1></center>
        <hr/>
        </br>
        <center>
            <form action="cadnome.php" method="post">
                <label class="form-floating mb-3">NOME</label>
                <input type="text" class="form-control" name="nome" placeholder="Insira um nome" required>
                <br>
                <label class="form-floating mb-3">IDADE</label>
                <input type="number" class="form-control" name="idade" placeholder="Insira a idade" required>
                <br>
                <button type="submit" class="btn btn-outline-info">INSERIR</button>
            </form>
        </center>
    </body>
</html>