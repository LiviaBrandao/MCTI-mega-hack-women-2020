<?php
session_start();

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="stylesheet" href="estilo mana.css">
</head>
<body style="background: pink;">
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
						<a class="nav-link" style="margin: 25px; " href="Quem_somos.php" class="main" >Rede das Mana</a>
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

	</header>
            <div class="box" style="position: absolute;
            width: 300px;
            height: 300px;
            left: 180px;
            top: 134px;
            ">
            <img src="img/Mask_Group.png" alt="" style=" border-radius: 20px;">
            <p>Stephany Oliveira<br> 
            25 anos<br>
            (96) 9 8554 7887<br>
            teca123@gmail.com </p>
            <a href="#"><p style="text-align: center;">Editar informações</p></a>
            <button type="button" class="btn" style="margin: 10px; width: 300px;
            height: 60px;
            left: 180px;
            top: 628px;
            border-radius: 20px; background-color: #472585; color: white; font-size: 30px;">Meus Cursos</button><br>
            <button type="button" class="btn"  style="margin: 10px; width: 300px;
            height: 60px;
            left: 180px;
            top: 628px;
            border-radius: 20px; background-color: #472585; color: white; font-size: 30px;">Minha Rede</button><br>
            <button type="button" class="btn"  style="margin: 10px; width: 300px;
            height: 60px;
            left: 180px;
            top: 628px;
            border-radius: 20px; background-color: #472585; color: white; font-size: 30px;">Meus Projetos</button>
            </div>

           <div style="background-color: #472585; height: 744px; position: absolute;
           width: 855px; left: 505px;
top: 134px; border-radius: 20px;">
<h1 style="text-align: center; background-color: white; border-radius: 20px 20px 0 0 ;">Área da Mana </h1>
<p style="
font-size: 40px;
line-height: 60px;

color: #FFFFFF;">Olá Stephany!<br> Bem vinda à sua "Área da Mana." Aqui você pode <br>consultar cursos disponíveis, acessar nossa "Rede das<br> Manas" para conhecer mais mães empreendedoras e<br> ainda submeter seus projetos para parceiros e<br>investidores! Bora?</p>

<div style="position: absolute;
top: 602px;
margin: 0 0 0 60px;
font-family: Redressed;
font-style: normal;
font-weight: normal;
font-size: 80px;
line-height: 95x;
margin-top: -85px;
color: #FFFFFF; text-align: center;">196pts
<p style="font-size: 20px;">Faltam 804 pts para você<br> conseguir o seu selo Women Tech.</p>
</div>
<div style="position: absolute;
left: 64.1%;
right: 30.35%;
top: 59.96%;
bottom: 32.71%;
margin: 115px -50px 0 -280px;
text-align: center;
">
    <img src="img/Vector.png" alt="">
    <p style="color: white; font-size: 20px;
    line-height: 21px; margin: 10px;">Interesse na área de Veterinária</p>
</div>
<div style="position: absolute;
left: 79.58%;
right: 14.86%;
top: 59.96%;
bottom: 32.8%;
margin: 115px -100px 0 -120px; text-align: center;">
    <img src="img/Vector-1.png" alt="">
    <h3 style="color: white; font-size: 20px; text-align: center; margin: 10px 0 0 0 ;">Muito ligada a família</h3>
</div>
</div>

<footer style="margin: 900px 0 0 0;">
        &copyBora, mana
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script src="https://kit.fontawesome.com/cde50c6c3d.js" crossorigin="anonymous"></script>

</footer>
</body>
</html>


