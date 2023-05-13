<!doctype html>
<html lang="pt-BR">
  <head>
  	<title>Park Wheel</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/style.css">
  <style>
    .mouse-over:hover {
      background-color: rgba(59, 57, 57, 0.164)!important;
    }

    .select {
      background-color: #20759c;
      border: #20809c;
      border-radius: 7px;
    }

    .select:hover {
      background-color: #20799c;
    }
  </style>
  </head>
  <body>
	<div class="wrapper d-flex align-items-stretch" style="background-color: #f2f1f0;">
		<nav id="sidebar" class="active" style="background-color: #08546c; border: #08546c;">
			<h1><a href="index.php" class="logo">PW</a></h1>
        <ul class="list-group list-group-flush components mb-5">
          <li class="active select">
            <a href="inicio.php"><span class="fa fa-bar-chart"></span> Dashboard</a>
          </li>
          <li class="active mouse-over">
              <a href="usuario.php"><span class="fa fa-user"></span> Usuário</a>
          </li>
          <li class="active mouse-over">
            <a href="#"><span class="fa fa-cogs"></span> Serviços</a>
          </li>
          <li class="active mouse-over">
            <a href="contato.php"><span class="fa fa-paper-plane"></span> Contato</a>
          </li>
        </ul>

    	</nav>
        <!-- conteudo -->
      <div id="content">
        <nav class="navbar navbar-expand-lg navbar-light bg-light" style="margin: 0;">
          <div class="container-fluid">
            <button type="button" id="sidebarCollapse" class="btn">
              <i class="fa fa-bars"></i>
              <span class="sr-only"></span>
            </button>
            <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" style="background-color: #08546c; color:#08546c; border: #08546c;">
                <i class="fa fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- https://github.com/fajarnurwahid/admin-site/blob/master/index.html -->
            </div>
          </div>
        </nav>
        <div class="mb-4 class p-4 md-5">
        <h2><b>Dash</b>board</h2>

        </div>
      </div>
    </div>
    <!-- <footer style="">
    <nav class="navbar navbar-expand-lg navbar-light bg-light" style="margin: 0;">
          <div class="container-fluid">
            <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" style="background-color: #08546c; color:#08546c; border: #08546c;">
                <i class="fa fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="nav navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Início</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Sobre</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Portfolio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contato</a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
    </footer> -->
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>