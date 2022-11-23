<?php
include "funcoes/db_ops.php";
$sql="SELECT * FROM convidados";
$resultado=$conecta->query($sql);
print_r($resultado);


?>


<html>
	<head>
		<title>OPS, NOIVEI!!! - HOME</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		
		<script src="js/jquery.min.js"></script>
		<script src="js/jquery.dropotron.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-layers.min.js"></script>
		<script src="js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-desktop.css" />
		</noscript>
	</head>
	<body class="homepage">
			<div id="header-wrapper" class="wrapper">
				<div id="header">
					
						<div id="logo">
							<h1>OPS, NOIVEI!!!</h1>
							<ap>Faça sua lista de convidados de uma maneira prática!!</ap>
						</div>
						
						<nav id="nav">
							<ul>
								<li>
                                    <a href="telas/cadastro_convidado.php">Cadastrar Convidados</a>

										</li>
										<li><a href="funcoes/logout.php">Sair</a></li>
									</ul>
								</li>
							</ul>
						</nav>

				</div>
			</div>
		
		<!-- Intro -->
			<div id="intro-wrapper" class="wrapper style1">
				<div class="title">Lista</div>
				<section id="intro" class="container">
					<div class="title">Lista de Convidados</div>
				<div id="main" class="container">

                    <body>
                    <section class="ftco-section">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-md-6 text-center mb-5">
                                </div>
                            </div>
                            <div class="row">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">NOME</th>
                                        <th scope="col">CPF</th>
                                        <th scope="col">...</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    while ($user_data = mysqli_fetch_assoc($resultado)) {
                                        echo "<tr>";
                                        echo "<td>" . $user_data['ID'] . "</td>";
                                        echo "<td>" . $user_data['nome_completo'] . "</td>";
                                        echo "<td>" . $user_data['cpf'] . "</td>";
                                        echo "<td>
                                                <a class='btn btn-sn btn-primary' href='atualizar_convidados.php?$user_data[ID]'> 
                                                <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-pencil-square' viewBox='0 0 16 16'>
                                                <path d='M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z'/>
                                                <path fill-rule='evenodd' d='M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z'/>
                                            </svg>
                                       </a>;
                                       
                                       <a class='btn btn-sn btn-danger'href='funcoes/Deletar.php?$user_data[ID]'> 
                                       <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-trash-fill' viewBox='0 0 16 16'>
  <path d='M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 
  0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z'/>
</svg>
</a>
                                                </td>";
                                        echo "</tr>";
                                    }
                                    ?>
                                    </tbody>
                                </table>
                    </section>
                        <ul class="actions">
						<li><a href="" class="button style3 big">Editar Lista</a></li>
					</ul>
				</section>
			</div>
		

		
			<div id="footer-wrapper" class="wrapper">
				<div class="title">Informaçãoes</div>
				<div id="footer" class="container">
					
					<hr />
					<div class="row 150%">
						<div class="6u">

						</div>
						<div class="6u">
						
							<!-- Contact -->
								<section class="feature-list small">
									<div class="row">
										
										<div class="6u">
											<section>
												<h3 class="icon fa-comment">Social</h3>
												<p>
													<a href="#">@Weddinglist</a><br />
												</p>
											</section>
										</div>
									</div>
									<div class="row">
										<div class="6u">
											<section>
												<h3 class="icon fa-envelope">Email</h3>
												<p>
													<a href="#">Weddinglist@gmail.com</a>
												</p>
											</section>
										</div>
									</div>
								</section>
								
						</div>
					</div>

				</div>
    </body>
</html>