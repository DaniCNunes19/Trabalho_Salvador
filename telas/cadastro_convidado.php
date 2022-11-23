<?php
include "funcoes/db_ops.php";
?>

<!doctype html>
<html lang="pt-br">
  <head>
  	<title>Cadastro Convidados</title>
    <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link rel="stylesheet" href="css/style.css">

	</head>
	<body>
	<section class="ftco-section img bg-hero" style="background-image: url(images/casal.jpg);">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">Cadastro dos Convidados</h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-lg-11">
					<div class="wrapper">
						<div class="row no-gutters justify-content-between">
							<div class="col-lg-6 d-flex align-items-stretch">
								<div class="info-wrap w-100 p-5">
									<h3 class="mb-4">IMPORTANTE!</h3>
				        	<div class="dbox w-100 d-flex align-items-start">
				        		<div class="icon d-flex align-items-center justify-content-center">
				        			<span class="fa fa-map-marker"></span>
				        		</div>
				        		<div class="text pl-4">
					            <p><span>Importância de Fazer uma lista: </span></p>
                                    <ap>A lista de convidados influencia quase todos os outros aspectos de um casamento, da cerimônia à festa. <br>
                                        É o número de pessoas que irá determinar a igreja mais adequada, o tamanho do espaço para o evento, o tipo e as quantidades do buffet,
                                        o tamanho do bolo, o número de convites</ap>
					          </div>
				          </div>

				        	<div >
				        		<div>
				        			<span> </span>
				        		</div>

				          </div>
			          </div>
							</div>
							<div class="col-lg-5">
								<div class="contact-wrap w-100 p-md-5 p-4">
									<h3 class="mb-4">Cadastrar</h3>
									<div id="form-message-warning" class="mb-4"></div> 
				      		<div id="form-message-success" class="mb-4">
				      		</div>
									<form action="funcoes/cadastroConvidados.php" method="POST" id="cadastroConvidados" name="cadastroConvidados" class="signin-form">
										<div class="row">
											<div class="col-md-12">
												<div class="form-group">
													<input type="text" class="form-control" name="nome_completo" id="nome_completo" placeholder="Nome Completo">
												</div>
											</div>
											<div class="col-md-12"> 
												<div class="form-group">
													<input type="text" class="form-control" name="cpf" id="cpf" placeholder="CPF" size="11">
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">
													<input type="submit" value="Cadastrar" class="btn btn-primary">
													<div class="submitting"></div>
												</div>
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>



	</body>
</html>

