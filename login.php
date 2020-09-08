<?php
session_start();

?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Cadastrar</title>
		<!---<link href="css/bootstrap.css" rel="stylesheet">--->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
		<link href="css/signin.css" rel="stylesheet">
		<link rel="stylesheet" href="estilo mana.css">
		<link rel="stylesheet" href="css/style.css">
	</head>
	<body>
	<header>
			<nav class="navbar navbar-expand-lg  navbar-light">
					<div class="container-fluid">
				<a href="#" class="navbar-brand"><img src="img/Group_13.png" style="height: 60px;"></a>
				<button class="navbar-toggler" data-toggle="collapse" data-target="#menu">
				<img src="img/logos e itens/tres riscos.png" style="height: 15px">
				</button>
		
		<!-- Links -->
				<div id="menu"class="collapse navbar-collapse">
					<ul class="navbar-nav ml-md-auto">

                  	<li class="nav-item">
                		<a class="nav-link" style="margin: 25px; "href="index.php" class="main" >Home</a>
                	</li>
					
					<li class="nav-item">
						<a class="nav-link" style="margin: 25px; " href="login.php" class="main" >Área da Mana</a>
					</li>
					
					<li class="nav-item">
						<a class="nav-link" style="margin: 25px; " href="Quem_somos.php" class="main" >Rede das Manas</a>
					</li>
                    <li class="nav-item">
						<a class="nav-link" style="margin: 25px; " href="Quem_somos.php" class="main" >Parceiros</a>
                    </li>
                    <li class="nav-item">
						<a class="nav-link" style="margin: 25px; " href="Quem_somos.php" class="main" >Selo</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" style="margin: 25px; " href="Quem_somos.php" class="main" >Ajuda</a>
					</li>
					</ul>
				</div>
					</div>
			</nav>
			
	
	</header>
	<br><br><br>
	<h1>Entrar</h1>
	<hr>

		<div class="container" >
			<div class="form-signin" style="background: #BA55D3;">
				<h2 class="text-center">Login</h2><br>
				<?php
					if(isset($_SESSION['msg'])){
						echo $_SESSION['msg'];
						unset($_SESSION['msg']);
					}
					if(isset($_SESSION['msgcad'])){
						echo $_SESSION['msgcad'];
						unset($_SESSION['msgcad']);
					}
				?>
				
				<form method="POST" action="valida.php">
					<!--<label>Usuário</label>-->
					<input type="text" name="usuario" placeholder="Digite o seu usuário" class="form-control" style="border-radius: 20px;"><br>
					
					<!--<label>Senha</label>-->
					<input type="password" name="senha" placeholder="Digite a sua senha" class="form-control" style="border-radius: 20px;"><br>
					
					<input type="submit" name="btnLogin" value="Logar" style="background-color: #FF7256; border-radius: 20px;" class="btn btn-block">
					
				 <!-- <div class="row text-center" style="margin-top: 20px;"> 
						<h4>Você ainda não possui uma conta?</h4>
						<h5><a href="cadastrar.php" style="padding: 30px;">Crie grátis</a></h5>
					</div> -->
					 
					
					
				</form>
			</div>
		</div>			
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<br><br><br><br><br><br>
		
		<footer style="margin: 10px 0 0 0;">
        &copy Bora, mana
            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
            <script src="https://kit.fontawesome.com/cde50c6c3d.js" crossorigin="anonymous"></script>

    </footer>
	</body>
</html>