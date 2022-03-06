<!DOCTYPE>
<hmtl>
	<head>
		<title> Página pessoal - Ravana </title>
		<meta-charset="utf-8">
		<!-- Links Bootstrap, Jquery, JS -->
		  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
		  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
          <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
          <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
        	 
        	 <style>
        	@import url('https://fonts.googleapis.com/css2?family=Courier+Prime:ital,wght@1,700&display=swap;1,400&family=Titan+One&display=swap;&family=Arvo');
        	 
              /* Imagens responsivas (banner, imagens)*/
              .carousel-inner img {
                width: 100%;
                height: 100%;
              }
               .fakeimg {
                height: 200px;
                background: #fff;
              }
              .title{
              font-family: 'Titan One', cursive;
              
              }
              .card{
              font-family: 'Courier Prime', monospace;
              }
              .texto{
              font-family: 'Arvo', serif;
              }
          </style>
	</head>
	
	<body>
	<!-- Menu -->
        <div class="jumbotron text-center" style="margin-bottom:0">
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
        
        <!-- Conteúdo -->
        <div class="container" style="margin-top:30px">
          <div class="row">
            <div class="col-sm-4">
            
            <!-- Card -->
              <div class="card">
                  <div class="fakeimg"> <img src="img/euu.png" class="fakeimg" width="100%"></div>
                     <div class="card-body bg-dark text-white">
                        <p>• Ravana Pereira de França</p>
                        <p>• Ilhéus - BA</p>
                        <p>• 20/11/2003</p>
                     </div>
              </div>  
                  <button type="button" class="btn btn-outline-dark btn-block" data-toggle="collapse" data-target="#demo">Clique</button>
                  <div id="demo" class="collapse">
                    Para entrar na área de login use "ravana" para usuário e "1234567890" para a senha.
                  </div>
                  <p></p>
                  <h3 class="title">Links</h3>
                  <ul class="nav nav-pills flex-column title">
                    <li class="nav-item">
                      <a class="nav-link bg-dark active" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link text-dark" href="academico.php">Vida acadêmico</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link text-dark" href="login.php">Login</a>
                    </li>
                  </ul>
            </div>
            <!-- Informações -->
            <div class="col-sm-8">
              <h2 class="title">Conheça um pouco sobre mim!</h2> 
              <div class="fakeimg"><img src="img/fami.png" class="fakeimg"></div>
              <p class="texto"> Meu nome é Ravana Pereira de França, nasci no dia 20 de novembro de 2003 em Ilhéus-BA. Sou filha de Lucilene Bispo Pereira e Fernandes Ribeiro de França, meu pai faleceu
                  no dia 6 de setembro de 2021. Quando eu tinha alguns meses de vida minha família se mudou para Una, um pequeno município localizado no sul da Bahia, bem próximo da minha cidade natal.
                  Quando eu tinha 11 anos de idade, meus pais já eram divorciados há algum tempo, minha mãe decidiu vir para Guarulhos-SP, pois tinha esperança de encontrar um trabalho melhor, além de que ela já tinha mandado meu irmão
                  passar um tempo na casa dos meus tios que moravam aqui. </p>
              
              <h2 class="title">Hobbies e gostos</h2>
              <div class="fakeimg"><img src="img/petss.png" class="fakeimg"></div>
              <p class="texto">Sou apaixonada pela natureza, tenho quatro filhos pets: Leão, Malu, Panda e Tony (dois cachorros e dois gatos). Gosto muito de música, dança e teatro. Desde 2019 não como carne e aderi o vegetarianismo. Meus animes preferidos são Jujutsu Kaisen e Kimetsu no yaiba.
                 Prefiro dias ensolarados (mas não aqueles que o sol está de rachar), pois é bem melhor de sair, principalmente quem precisa pegar ônibus (por exemplo o 251 que lota demais e nos dias chuvosos é um terror). Quero ajudar o máximo de animais, plantas e pessoas que eu puder, tenho muita vontade de participar de ONGs.
                 Amo escrever, principalmente quando estou muito triste. Pretendo fazer uma graduação em biologia, pois tenho muito interesse e gosto de aprender sobre a natureza.</p>
            </div>
          </div>
        </div>
        
        <!-- Rodapé -->
        <div  id="footer" class="jumbotron text-center text-white bg-dark" style="margin-bottom:0">
            <p>  
                <a href="https://www.instagram.com/ravannafranca/" target="_blank">
                	<img src="img/instagram.png" alt="banner" height="30px" width="30px"> 
                </a>
                <a href="https://www.facebook.com/ravanna.franca/" target="_blank">
                	<img src="img/facebook.png" alt="banner" height="30px" width="30px">
                </a>
            </p>
            <a href="https://www.flaticon.com/free-icons/logo" target="_blank" title="logo icons" class="text-white"> 
            	<p> Logo icons created by Freepik - Flaticon </p> 
            </a>
            <p>© Ravana França</p>
            <p>2022</p>
        </div>
	</body>
</hmtl>