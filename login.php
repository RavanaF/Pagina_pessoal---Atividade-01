<!DOCTYPE>
<hmtl>
	<head>
		<title> Página pessoal - Ravana </title>
		<meta-charset="utf-8">
		  <!-- Links Bootstrap, Jquery, JS -->
		  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
          <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
          <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
          <!-- Icone -->
          <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
   
        	 <style>
        	 @import url('https://fonts.googleapis.com/css2?family=Titan+One&display=swap');
        	 
              /* Imagens responsivas (banner, imagens)*/
              .carousel-inner img {
                width: 100%;
                height: 100%;
              }
               .fakeimg {
                height: 200px;
                width: 300px;
                background: #aaa;
              }
              .title{
              font-family: 'Titan One', cursive;
              }
          </style>
	</head>
	
	<body>        
        <div class="jumbotron text-center" style="margin-bottom:0">
          <!-- Carrossel -->
          <div id="demo" class="carousel slide" data-ride="carousel">
        
          <!-- Indicadores -->
          <ul class="carousel-indicators">
            <li data-target="#demo" data-slide-to="0" class="active"></li>
            <li data-target="#demo" data-slide-to="1"></li>
            <li data-target="#demo" data-slide-to="2"></li>
          </ul>
        
          <!-- Slideshow -->
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="img/RAVANA FRANÇA.png" alt="banner">
            </div>
            <div class="carousel-item">
              <img src="img/banner.png" alt="Chicago">
            </div>
            <div class="carousel-item">
              <img src="img/banner2.png" alt="New York">
            </div>
          </div>
        
          <!-- Controles esquerda e direita -->
          <a class="carousel-control-prev" href="#demo" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
          </a>
          <a class="carousel-control-next" href="#demo" data-slide="next">
            <span class="carousel-control-next-icon"></span>
          </a>
        
        </div>
        </div>
        
        <!-- Menu -->
        <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
          <a class="navbar-brand" href="index.php">Home</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="academico.php">Vida acadêmica</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="login.php">Login</a>
              </li>
        
            </ul>
          </div>  
        </nav>
        
        <!-- Login -->
        <div class="container" >
          <h2 class="title text-center">Login <i class="fas fa-heart"></i></h2>
          <p></p>
          <form method="POST" action="status.php" class="was-validated">
            <div class="form-group">
              <label for="uname">Usuário:</label>
              <input type="text" class="form-control" placeholder="Digite seu nome de usuário" name="uname" required>
              <div class="valid-feedback">Válido!</div>
              <div class="invalid-feedback">Por favor, preencha este campo.</div>
            </div>
            <div class="form-group">
              <label for="pwd">Senha:</label>
              <input type="password" class="form-control"  placeholder="Digite sua senha" name="pswd" required>
              <div class="valid-feedback">Válido!</div>
              <div class="invalid-feedback">Por favor, preencha este campo.</div>
            </div>
            <div class="form-group form-check">
             <label class="form-check-label">
              <input class="form-check-input" type="checkbox"> Sou um humano.
            </label>
            </div>
         
            <button type="submit" class="btn btn-dark btn-block" >Entrar</button>
          </form>
          <div class="progress">
        <div class="progress-bar progress-bar-striped progress-bar-animated bg-dark" style="width:100%"></div>
      </div>
      <p></p>
        </div>
        
        </div>
        
        <!-- Rodapé -->
        <div class="jumbotron text-center bg-dark text-white" style="margin-bottom:0">
            <p>  
            <a href="https://www.instagram.com/ravannafranca/"  target="_blank">
            <img src="img/instagram.png" alt="banner" height="30px" width="30px"> </a>
            <a href="https://www.facebook.com/ravanna.franca/" target="_blank">
            <img src="img/facebook.png" alt="banner" height="30px" width="30px"></a>
            </p>
            <a href="https://www.flaticon.com/free-icons/logo"  target="_blank" title="logo icons" class="text-white"> 
             <p> Logo icons created by Freepik - Flaticon </p> </a>
            <p>© Ravana França</p>
            <p>2022</p>
        </div>	
	</body>
</hmtl>