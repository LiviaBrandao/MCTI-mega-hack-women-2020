<?php
session_start();
require_once("php/CreateDb.php");
require_once("php/component.php");

$database = new CreateDb("Productdb", "Producttb");

if(isset($_POST['add'] )){
	print_r($_POST['product_id']);
	if(isset($_SESSION['cart'])){

		$item_array_id = array_column($_SESSION['cart'], "product_id");
		

		if(in_array($_POST['product_id'], $item_array_id)){
			echo"<script>alert('produto, ja adicionado no carrinho')</script>";
			echo"<script>window.location = 'bolo.php'</script>";
			
		}else{
			$count = count($_SESSION['cart']);
			$item_array = array(
				'product_id' => $_POST['product_id']
			);
			$_SESSION['cart'][$count] = $item_array;

		}

	}else{
		$item_array = array(
			'product_id' => $_POST['product_id']
		);

		$_SESSION['cart'][0] = $item_array;
		print_r($_SESSION['cart']);

	}

}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" type="text/css" href="CSS/style.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="stylesheet" href="estilo mana.css">
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
						<a class="nav-link" style="margin: 25px; " href="selo.html" class="main" >Selo</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" style="margin: 25px; " href="Quem_somos.php" class="main" >Ajuda</a>
					</li>
					<li class="nav-item  dropdown">
							<a  class="nav-link"style="margin: 25px" href="#" class="main" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						<?php
						if(!empty($_SESSION['id'])){
							echo "Olá ".$_SESSION['nome'].", Bem-vindo";
							echo "<a href='sair.php' style='color: black;'>Sair</a>";
						}else{
							$_SESSION['msg'] = "<div class='alert alert-danger'>Área restrita!</div>";
							header("Location: administrativo.php");	
						}
						?>
						</a>
						</li>
					</ul>
				</div>
					</div>
			</nav>
			
	
		</header>
                <img src="img/tryber.png" class="trybe-logo">
                <div class="parte-text">
                    Empresa: Trybe
                    <p >
                       <a href="#"> Editar informações </a>
                    </p>
                      <div class="div-buttons">
                        <button id="btnMeus-pontos"    class="botaoPontos">
                          Meus Pontos
                        </button>
                        <button id="btnManas-que-apoio" class="botaoManasApoio">
                          Manas Que Eu Apoio
                        </button>
                        <button id="btnMeus-pontos"    class="botaoMeusPontos">
                           Projetos Apoiados
                        </button>
                      </div> 
                </div>

                <div class="tabContainer">
                    <div class="buttonContainer">
                        <button onclick="showPanel(0,'#472585')"> Forma Mana   </button>
                        <button onclick="showPanel(1,'#472585')"> Adota Mana   </button>
                        <button onclick="showPanel(2,'#472585')"> Investe Mana </button>
                    </div>
                    <div class="panel-container">
                        <div class="tabPanel" style="padding-top: 90px;">
                          <a>Bem-vindo Parceiro Mana!</a>
                          <br>
                          <br>
                          <p>Parceiro Mana! Temos aqui alguns modos de você ajudar a mudar o futuro das nossas 
                            Manas e ainda angariar pontos para o seu selo “Women Tech”.</p>
                          <br>
                          <p>Bora? Você pode ofertar vários cursos de capacitação tecnológica e empreendedorismo, ganhando 100 pontos por módulo!?</p>
                        </div>
                        <div class="tabPanel"></div>
                        <div class="tabPanel"></div>
                    </div>
                    
                  </div>
                
                <script src="myScript.js"></script>

	
<br><br>
<footer>
        &copy Bora, mana
            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
            <script src="https://kit.fontawesome.com/cde50c6c3d.js" crossorigin="anonymous"></script>

    </footer>
</body>
</html>


