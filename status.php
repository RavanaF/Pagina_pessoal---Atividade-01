<!DOCTYPE>
<hmtl>
	<head>
		<title> Página pessoal - Ravana </title>
		<meta-charset="utf-8">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
		<style>
          @import url('https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap');
          
          .text{
            font-family: 'Press Start 2P', cursive;
          }
        </style>
    </head>
	
    <body>
        <?php 
        $user = $_POST['uname'];
        $pass = $_POST['pswd'];
       
        if (($user == 'ravana')&&($pass == '1234567890')){
            include('bemvindo.php');
        }else{
            echo ' <div class="alert alert-danger" align="center">
            <strong>Erro!</strong> Usuário ou senha inválido(s)! 
            <p><a href="login.php" class="alert-link">Volte para a página de login.</a></p>
            </div>';
        }
        
        ?>
     </body>
</hmtl>

            	