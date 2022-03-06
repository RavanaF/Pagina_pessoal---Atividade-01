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
        	 
        	 <style>
        	 @import url('https://fonts.googleapis.com/css2?family=Courier+Prime:ital,wght@1,700&display=swap;1,400&family=Titan+One&display=swap;&family=Arvo');
        	 
              /* Imagens responsivas (banner, imagens) */
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
      
      <!-- Carrossel -->
        <div class="jumbotron text-center" style="margin-bottom:0">
               <div id="demo" class="carousel slide" data-ride="carousel">
        
                  <!-- Indicators -->
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
        
       <div class="container" style="margin-top:30px">
          <div class="row">
         
            <div class="col-sm-4">
              <h2 class="card bg-dark text-white" align="center">Aluna</h2>
            <!-- Card -->
            <div class="card bg-dark">
              <div class="fakeimg"> <img src="img/euu.png" class="fakeimg" width="100%"></div>
                <div class="card-body text-white">
                <p>• Ravana Pereira de França</p>
                <p>• 4° Informática</p>
                <p>• Turma B</p>
                <p>• GU3005895</p>
                <p>• 2019 - 2022</p></div>
              </div>
              <p></p>
                 <h3 class="title">Links</h3>
                  <ul class="nav nav-pills flex-column title">
                    <li class="nav-item">
                      <a class="nav-link text-dark" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link bg-dark active" href="academico.php">Vida acadêmico</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link text-dark" href="login.php">Login</a>
                    </li>
                  </ul>
           </div>
            
           
           <!-- Informações -->
            <div class="col-sm-8">
              <h2 class="title">Histórico escolar</h2>
              <div class="fakeimg"><img src="img/escola.png" class="fakeimg" width="100%" ></div>
              <p class="texto"> Estudei do 1° ao 4° ano (2010-2013) na Escola Municipal Anísio Teixeira em Una-BA. Em 2014 vim morar em São Paulo e estudei na Escola Estadual Pastor Jõao Nunes. Em 2019 fiz meu 7° ano na Escola Estadual Professor Licínio Carpinelli. 
                  E concluí o ensino fundamental fazendo o 8° e 9° ano na Escola Estadual Francisco Milton de Andrade.</p>
              
              <h2 class="title">IFSP - Campus Guarulhos</h2>
              <div class="fakeimg"><img src="img/campus.png" class="fakeimg" width="100%" ></div>
              <p class="texto">Em 2019 entrei no IFSP - Campus Guarulhos, atualmente estou no 4° ano (último) do Ensino Técnico em Informática para Internet Integrado ao Ensino Médio.
              Conheci o IF pelo meu professor de Ciências do 8° e 9° ano. Inicialmente em pensava em cursar Edificações, tanto que me inscrevi para fazer o Ensino Médio integrado ao Técnico de Edificações na ETEC. Quando me inscrevi para o IF escolhi Informática
              pois tinha mais afinidade do que Mecatrônica. Já participei de diversos grupos/clubes do IF: Leitura, dança, teatro, economia, IFlashmob... Participei de um projeto de pesquisa das Oficinas 4.0, que tinha o objetivo desenvolver 
              um sistema de pesagem inteligente, por eixo, em veículos de transporte de carga rodoviários. Atualmente sou gremista, exerço o cargo de 2° Oficial Tesoureira e faço parte da comissão organizadora da EXATECCA. </p>
              <p class="texto">Vivo uma relação de amor e ódio com o curso, aprendi bastante. É uma área um pouco difícil e inovadora. Atualmente penso em cursar Ciência da Computação ou Engenharia da Computação. Sonho alto com USP e UNICAMP, até porque sonhar não custa nada, mas pesquiso sempre outras faculdades para me inscrever e cursar o que quero.</p>
            </div>
          </div>
        </div>
        
        <!-- Rodapé -->
        <div class="jumbotron text-center bg-dark text-white" style="margin-bottom:0">
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