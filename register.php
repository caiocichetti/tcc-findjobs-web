<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cadastrar</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <link href="css/register.css" rel="stylesheet">
  <link href="css/topo.css" rel="stylesheet">
  <link rel="shortcut icon" href="img/LogoBranca32.png" />
</head>

<body>

  <!-- Navigation Bar -->

  <header>
    <nav class="navbar navbar-expand-lg navbar-light bg-info sticky-top">
      <div class="container-fluid">
        <a class="navbar-brand mr-auto" href="index.php"><img src="img/LogoAzul.png"></a>
        <button class="navbar-toggler" type="button" style="border:none;" data-toggle="collapse" data-target="#navbarResponsive">
          <spam class="navbar-toggler-icon"></spam>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto text-center">
            <li class="nav-item active">
              <a class="nav-link text-white" href="index.php">Home</a>
            </li>
              <a class="nav-link text-white" href="login.php">Entrar</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>

  <!-- End Navigation Bar -->

  <div class="container">
    <h1 class="display-4 mt-4">Criar sua conta</h1>
    <hr>
    <h6 class="text-muted">Preencha todos os campos corretamente</h6>

    <form class="mt-3" action="register_process.php" method="POST" enctype='multipart/form-data'>
      <h6>Dados pessoais</h6>
      <div class="form-row">
        <div class="form-group col-md-6">
          <input class="form-control" name="nome" type="text" id="name" placeholder="Seu Nome" onkeypress="return ApenasLetras(event,this);" required="required">
        </div>
        <div class="form-group col-md-6">
          <input class="form-control"  name="nascimento" type="date" id="born" required="required">
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          <input class="form-control" name="cpf" type="text" id="cpf" placeholder="000.000.000-00" onkeypress="$(this).mask('000.000.000-00');" required="required">
        </div>
        <div class="form-group col-md-6">
          <input class="form-control" name="profissao" type="text" id="prof" placeholder="Profissão" onkeypress="return ApenasLetras(event,this);" required="required">
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          <input class="form-control" name="email" type="email" id="email" placeholder="seuemail@email.com" required="required">
        </div>
        <div class="form-group col-md-6">
          <input class="form-control" name="telefone" type="text" id="nbr" placeholder="(00)00000-0000" required="required" maxlength="13" onkeypress="$(this).mask('(00) 00000-0009')">
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          <input class="form-control" name="senha" type="password" id="pass" placeholder="Sua Senha" required="required">
          <small class="text-muted">Mínimo: 8 caracteres</small>
        </div>
        <!-- <div class="form-group col-md-6">
          <input class="form-control" type="password" id="pass" placeholder="Confirm Your Password" required="required">
          <small class="text-muted">Mininal lenght: 8 characters</small>
        </div> -->
      </div>
      <hr>
      <div class="form-group">
        <label for="exp">Selecione sua experiência</label>
        <select class="form-control" name="exp" id="exp">
          <option value="Sem experiência">Sem experiência</option>
          <option value="Iniciante">Iniciante</option>
          <option value="Intermediario">Intermediário</option>
          <option value="Experiente">Experiente</option>
        </select>
      </div>
      <div class="form-group">
        <label for="image">Selecione a imagem do seu perfil</label>
        <input class="form-control" name="imagem" type="file" id="image">
        <small class="text-muted">Tamanho máximo: 3MB</small>
      </div>
      <div class="form-group">
        <label class="active">
          <input type="checkbox" autocomplete="off" required="required"> Eu li e aceito os <span class="text-info" style="text-decoration: underline; cursor: pointer;"><a data-toggle="modal" data-target="#myModal">Termos de uso</a></span>
        </label>
      </div>
      <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
          <div class="modal-content col-12">
            <div class="modal-header">
              <h4 class="modal-title" id="myModalLabel">Termos de Uso FindJobs</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla viverra, orci aliquam hendrerit malesuada, odio magna ultricies felis, quis laoreet lectus dolor et sem. Morbi suscipit, eros non eleifend varius, velit magna ullamcorper lorem, nec mollis lacus ipsum non orci. Integer ut blandit massa, sed fermentum ipsum. Maecenas sit amet justo id ligula ullamcorper dignissim. Proin sed sollicitudin est. Morbi feugiat et nisi ut iaculis. Donec id ipsum finibus, tincidunt velit non, tincidunt quam. Nullam et nisl ut nisi interdum malesuada eget in odio. Sed fermentum, arcu eu cursus egestas, quam risus mattis tortor, dictum egestas tellus lorem vitae nulla. Sed auctor cursus finibus. Curabitur tincidunt fringilla mauris, ac laoreet ex tincidunt sit amet. Duis mollis nec mi sit amet eleifend. Sed eu purus augue. Aliquam at mi facilisis sapien blandit luctus ac in est. Mauris non risus sem.</p>

              <p>Fusce ut nibh rutrum, interdum enim ac, pulvinar odio. Nunc id est interdum, sodales sem ut, accumsan tortor. Mauris id eleifend nibh, venenatis egestas magna. Ut convallis volutpat ligula, sit amet lacinia nisl lobortis id. Nunc sollicitudin diam tellus, ac maximus ligula vehicula dictum. Nam et tincidunt sem. Vivamus faucibus sem eget urna vulputate dignissim. Duis metus lacus, pretium vitae nulla ullamcorper, lacinia fringilla leo. Pellentesque vitae magna facilisis libero scelerisque lacinia dictum id massa. Integer a eros mi. In quis sem turpis. Quisque vel dolor in lacus tristique vehicula.</p>

              <p>Mauris congue justo tempus erat finibus, quis vestibulum urna aliquet. Phasellus porttitor, enim vitae ullamcorper ultrices, nibh magna hendrerit dui, sed sodales mi tellus sed sem. Nam justo dolor, porta sed ante ac, ullamcorper iaculis justo. Donec in nulla sapien. Morbi quis placerat orci, sed dictum orci. Aenean efficitur lectus in magna blandit suscipit. Phasellus nisi eros, accumsan et aliquet sed, tristique at nulla. Suspendisse viverra odio ultricies augue lobortis vulputate. Proin a lacus vitae dui porttitor ultrices. Vestibulum sed venenatis eros. Maecenas porta hendrerit magna nec cursus. Phasellus vulputate euismod molestie. Fusce varius, libero vel luctus pellentesque, ligula nulla consequat ex, a consectetur purus enim sit amet massa. Proin enim neque, laoreet nec tellus ut, iaculis ultricies nisl.</p>

              <p>Duis interdum egestas nisi. Maecenas non pharetra arcu. Suspendisse vulputate eget eros vitae sodales. Aenean libero risus, accumsan ut vulputate tristique, accumsan quis magna. Mauris non egestas diam. Maecenas fringilla elit nisl, vel eleifend massa blandit vitae. Cras placerat justo imperdiet justo consequat, quis condimentum erat ornare. Integer porta urna ullamcorper velit tempor, ultricies vestibulum felis pulvinar. Fusce nec nisl a dolor feugiat bibendum non sed velit. Praesent ullamcorper ac orci vitae luctus. Curabitur mattis, purus vel dapibus finibus, lorem nibh tristique sapien, quis fermentum enim est sit amet tellus. Donec quis aliquet nisi. Etiam egestas metus at nunc eleifend ultrices. Integer eget finibus neque, ut ultrices ligula. Vivamus malesuada sem quis sapien mollis, ac dapibus elit commodo. Vivamus placerat massa a eros posuere, et sodales libero pulvinar.</p>
            </div>
          </div>
        </div>
      </div>

      <button type="submit" class="btn btn-info mb-3">Registrar</button>
    </form>
  </div>

  <!---Se mal sucedido--->
  <?php
      if (isset($_SESSION['campos_vazios'])) {
        echo '<div class="alert alert-danger fixed-top m-3 " style="transition: .1s ">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <h4 class="alert-heading">Erro!</h4>
        Preencha todos os campos.</div>';
      }
      unset($_SESSION['campos_vazios']);
  ?>

  <?php
      if (isset($_SESSION['mal_sucedido'])) {
        echo '<div class="alert alert-danger fixed-top m-3 " style="transition: .1s ">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <h4 class="alert-heading">Erro!</h4>
        Não foi possível criar sua conta.</div>';
      }
      unset($_SESSION['mal_sucedido']);
  ?>

  <?php
      if (isset($_SESSION['cpf_existente'])) {
        echo '<div class="alert alert-danger fixed-top m-3 " style="transition: .1s ">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <h4 class="alert-heading">Erro!</h4>
        Já existe uma conta que utiliza esse CPF.</div>';
      }
      unset($_SESSION['cpf_existente']);
  ?>


  <button onclick="backToTop()" id="btnTop"><i class="fas fa-arrow-up"></i></button>

  <script type="text/JavaScript" src="js/topo.js"></script>
  <script type="text/JavaScript" src="js/bootstrap.bundle.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
  <!--JQUERY-->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>

  <script src="js/validacoes.js"></script>
</body>

</html>
