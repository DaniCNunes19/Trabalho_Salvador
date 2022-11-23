<?php
include "funcoes/db_ops.php";
?>

<html lang="pt-br">
  <head>
  	<title>Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	
	
	<link rel="stylesheet" href="css/style2.css">

	</head>
	<body class="img js-fullheight" style="background-image: url(images/bg.jpg);">
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">Login </h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-4">
					<div class="login-wrap p-0">
		      	
					<h3 class="mb-4 text-center"></h3>
					<form action="funcoes/Acessologin.php" method="post" id="login" name="login" class="signin-form">
		      		<div class="form-group">
		      			<input type="text" class="form-control"  placeholder="Usuário" >
		      		</div>
					
	            <div class="form-group">	
	              <input id="password-field" type="password" class="form-control" placeholder="Senha" required>
	              <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
				</div>

				<div>
					<a href="cadastro_noiva.php">Cadastre-se</a>
				</div>
	            <div class="form-group">
	            	<button type="submit" class="form-control btn btn-primary submit px-3">Entrar</button>
	            </div>
	            <div class="form-group d-md-flex">
	            	<div class="w-50"
	            </div>
	          </form>
			  
	         

	<script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>

	</body>
</html>

