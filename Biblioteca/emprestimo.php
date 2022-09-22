
<!DOCTYPE html>
<html>
<head>
    
    <title>Emprestimo</title>
     <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
        <div align="center">
        <h3> Emprestimo</h3> <br>
    </div>
    

<form action="recibo.php" method="post">
    <div class="form-group">
          <label for="Livro">Livro</label>
            <select name="Livro" class="form-control">
                <option value="Seja Foda">Seja Foda</option>
                <option value="Percy Jackson">Percy Jackson</option>
                <option value="Novelas Nada Exemplares">Novelas Nada Exemplares</option>
                <option value="As Provacoes de Apolo ">As Provacoes de Apolo </option>
                <option value="A Garota da Capa Vermelha">A Garota da Capa Vermelha</option>
                <option value="Cidade dos Ossos">Cidade dos Ossos</option>
            </select>
            </div>

            <div class="form-group">
            <label for="Data">Data</label>
            <input type="date" name="Data" class="form-control">
            </div>
            <div class="form-group">
            <label for="Tipo">Tipo</label>
            <select name="Tipo" class="form-control">
                    <option value="A">Aluno</option>
                    <option value="P">Professor</option>
                </select><br>
            <div class="form-group">
            <label for="Nome">Nome</label>
            <input type="text" name="Nome" class="form-control">
            </div>
            <div class="row">
                <div class="col-md-2 col-xs-2">
                    <button type="submit" class="btn btn-success btn-block">Alugar</button>
                </div>
                
            </div>
    

</body>

</html>



























