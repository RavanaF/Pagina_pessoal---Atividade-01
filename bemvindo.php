<!DOCTYPE>
<hmtl>
	<head>
		<title> Página pessoal - Ravana </title>
		<meta-charset="utf-8">
		<!-- Links Bootstrap, Jquery, JS -->
		  <meta name="viewport" content="width=device-width, initial-scale=1">
		  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
          <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
          <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
             
          <style>
        	 @import url('https://fonts.googleapis.com/css2?family=Titan+One&display=swap;family=Moulpali&display=swap');
        	
              .title{
              font-family: 'Titan One', cursive;
              }
              .modal-body{
              font-family: 'Moulpali', cursive;
              }
          </style>
          </head>
	
    	<body>
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
            <!-- </div> -->
            
            <!-- Informações -->
            <div class="container" align="center">
                <div class="alert alert-success alert-dismissible">
                  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                  <strong>Sucesso!</strong> Seja bem-vindo!
                </div>
                 
                 </br>
            	 <h2 class="title bg-dark text-white">Contato</h2>            
                      <table class="table table-dark table-striped table-bordered">
                        <thead>
                          <tr>
                            <th>Nome</th>
                            <th>Sobrenome</th>
                            <th>Celular</th>
                            <th>E-mail institucional</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>Ravana</td>
                            <td>Pereira de França</td>
                            <td>(11) 97391-4949</td>
                            <td>ravana.p@aluno.ifsp.edu.br</td>
                          </tr>
                        </tbody>
                      </table><br>
 
                     <!-- Butão para abri Modal -->
                      <button type="button" class="btn btn-dark btn-block" data-toggle="modal" data-target="#myModal">
                        Clique aqui
                      </button>
                    
                      <!-- Modal -->
                      <div class="modal fade" id="myModal">
                        <div class="modal-dialog">
                          <div class="modal-content">
                          
                            <!-- Modal Header -->
                            <div class="modal-header bg-warning">
                              <h4 class="modal-title text-white">Explicação</h4>
                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>
                            
                            <!-- Modal body -->
                            <div class="modal-body">
                              Abaixo você encontrará o meu blog no padlet (ferramenta online que permite a criação de um mural virtual, dinâmico e interativo para registrar, guardar e partilhar conteúdos multimídia). Eu construí ele no ano passado (2021) para
                              um trabalho integrado com as disciplinas de Inglês e Projeto Integrado em Tecnologia da Informação. O trabalho tinha o objetivo de nos preparar para uma entrevista e nos conhecer. No blog encontramos um vídeo que eu falo sobre mim em inglês, e outros blocos com as informações escritasem inglês e português.
                            </div>
                            
                            <!-- Modal footer -->
                            <div class="modal-footer">
                              <button type="button" class="btn btn-warning text-white" data-dismiss="modal">Fechar</button>
                            </div>
                            
                          </div>
                        </div>
                      </div>
                     
         
                        <div class="padlet-embed" style="border:1px solid rgba(0,0,0,0.1);border-radius:2px;box-sizing:border-box;overflow:hidden;position:relative;width:100%;background:#F4F4F4"><p style="padding:0;margin:0"><iframe src="https://padlet.com/embed/3if9nvbuszyrikwj" frameborder="0" allow="camera;microphone;geolocation" style="width:100%;height:608px;display:block;padding:0;margin:0"></iframe></p>
                      	<div style="padding:8px;text-align:right;margin:0;"><a href="https://padlet.com?ref=embed" style="padding:0;margin:0;border:none;display:block;line-height:1;height:16px" target="_blank"><img src="https://padlet.net/embeds/made_with_padlet.png" width="86" height="16" style="padding:0;margin:0;background:none;border:none;display:inline;box-shadow:none" alt="Criado com o Padlet"></a>
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
                <a href="https://www.flaticon.com/free-icons/logo"  target="_blank" title="logo icons" class="text-white">
                	<p> Logo icons created by Freepik - Flaticon </p>
                </a>
                <p>© Ravana França</p>
                <p>2022</p>
            </div>

</body>
</hmtl>