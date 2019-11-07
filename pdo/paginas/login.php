

<html>
  <head>
    <meta charset="utf-8" />
    <title>Controle de Doação de Brindes</title>  

    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

  </head>

  <body>

    <nav class="navbar navbar-dark bg-success">
      <a class="navbar-brand" href="#">
        Doação de Brinde
      </a>
    </nav>

    <div class="container">    
      <div class="row">

        <div class="mx-auto my-auto p-3">
          <div class="card">
            <div class="card-header bg-success text-light">
              Login
            </div>
            <div class="card-body">
              <form action="../pdo/Forms/todososforms.php" method="POST">
                <div class="form-group">
                  <input name="usuario" type="text" class="form-control" placeholder="Usuário">
                </div>
                <div class="form-group">
                  <input name="senha" type="password" class="form-control" placeholder="Senha">
                </div>
                <button class="btn btn-lg btn-success btn-block" name="acao" value="login" type="submit">Entrar</button>
              </form>
            </div>
          </div>
        </div>
    </div>
  </body>
</html>