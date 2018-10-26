
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title><?=$titulo;?></title>

  <link rel="icon" href="<?=site_url()?>resources/site/images/explologo.png"  type="image/png">

  <!-- Bootstrap core CSS -->
  <link href="<?=site_url()?>resources/depoimentos/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="<?=site_url()?>resources/depoimentos/css/round-about.css" rel="stylesheet">
  <link href="<?=site_url()?>resources/depoimentos/estilos.css" rel="stylesheet">


</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark  fixed-top azul">
    <div class="container azul">
      <a class="navbar-brand" href="#">Explo Expo 2018</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse azul" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="<?=site_url()?>">Página Inicial
              <span class="sr-only">(current)</span>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="container">

    <?php 
    require $view.".php";
    ?>
  </div>

  
  <!-- Footer -->
  <footer class="py-5 azul">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Todos os direitos reservados <a href="http://geminiweb.com.br">Gemini Web Floripa</a></p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="<?=site_url()?>resources/depoimentos/vendor/jquery/jquery.min.js"></script>
  <script src="<?=site_url()?>resources/depoimentos/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
