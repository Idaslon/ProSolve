<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="css/cadastro.css">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Cadastro</title>
  </head>
  <body>
    <section class="material-half-bg">
      <div class="cover"></div>
    </section>
    <section class="login-content">
      <div class="logo">
        <h1>ProSolve</h1>
      </div>
      <div class="login-box cadastro-box">
        <form class="login-form" action="{{ route('cadastro.load') }}" method="POST" >
          @csrf
          <h3 class="login-head"><i class="fa fa-lg fa-fw fa-user"></i>CADASTRO</h3>
          <div class="form-group">
            <label class="control-label">Nome</label>
            <input class="form-control" id="nome" name="nome" type="text" placeholder="Nome" autofocus>
          </div>
            <div class="form-group">
            <label class="control-label">Email</label>
            <input class="form-control" id="email" name="email" type="text" placeholder="Email" autofocus>
          </div>
          <div class="form-group">
            <label class="control-label">Senha</label>
            <input class="form-control" id="senha" name="senha" type="password" placeholder="Senha">
          </div>
          <div class="form-group">
            <label class="control-label">Data de Nascimento</label>
            <input class="form-control" id="data" name="data" type="date" placeholder="Data">
          </div>
            <div class="form-group">
            <label class="control-label">Telefone</label>
            <input class="form-control" id="tefelone" name="telefone" type="text" placeholder="Telefone">
          </div>
           <div class="form-group btn-container">
            <button class="btn btn-primary btn-block"><i class="fa fa-sign-in fa-lg fa-fw"></i>Criar</button>
          </div>
          <div class="form-group">
            <div class="utility">
              <div class="animated-checkbox">
          </div>
          <div class="form-group mt-3">
            <p class="semibold-text mb-0"><a href="{{ url('/login') }}"><i class="fa fa-angle-left fa-fw"></i> Voltar para o login</a></p>
          </div>
        </form>
      </div>
    </section>
    <!-- Essential javascripts for application to work-->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <!-- The javascript plugin to display page loading on top-->
    <script src="js/plugins/pace.min.js"></script>
  </body>
</html>
