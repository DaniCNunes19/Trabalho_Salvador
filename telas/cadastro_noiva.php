<?php
include "funcoes/db_ops.php";
?>

<html lang="pt-br">
  <head>
  	<title>cadastro</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">	
	<link rel="stylesheet" href="css/style2.css">

	</head>
	<body class="img js-fullheight" style="background-image: url(images/bg.jpg);">
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">Cadastre-se</h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-4">
					<div class="login-wrap p-0">
		      	<h3 class="mb-4 text-center"></h3>
                    <form action="funcoes/cadastroNoiva.php" method="post" id="cadastroNoiva" name="cadastroNoiva" class="signin-form">

                        <div class="form-group" class="Nome Completo">
                            <input type="text" name="nome_completo" class="form-control"  placeholder="Nome Completo" required="required">
                        </div>

                        <div class="form-group" class="Usuário">
		      			<input type="text" name="usuario" class="form-control"  placeholder="Nome de usuário" required="required">
		      		</div>
                
	            <div class="form-group" >	
	              <input id="password-field" type="password" name="senha" class="form-control" placeholder="Senha" required="required">
	              <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
				</div>

	            <div class="form-group" class="senha">
	            	<button type="submit" class="form-control btn btn-primary submit px-3">Cadastrar</button>
	            </div>
	            <div class="form-group d-md-flex">
	            	<div class="w-50">
	            </div>
	          </form>
	         

	<script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>

	</body>
</html>