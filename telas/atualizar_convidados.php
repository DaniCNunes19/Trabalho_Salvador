<?php

if (!empty($_GET['ID'])) {
    include "funcoes/db_ops.php";

    $id = $_GET['ID'];

    $sql = "SELECT * FROM convidados WHERE id='{$id}'";

    $resultado = $conecta->query($sql);

    if ($resultado->num_rows > 0) {

        while ($user_data = mysqli_fetch_assoc($resultado)) {
            $id=$user_data['ID'];
            $nome_completo=$user_data['nome_completo'];
            $cpf=$user_data['cpf'];
        }
    } else {
        header('Location:../index.php');
    }
}
?>
<html>
<head>
    <title>OPS, NOIVEI!!! - ATUALIZAR</title>
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
            <ap></ap>
        </div>

        <nav id="nav">
            <ul>
                <li class="current"><a href="index.php">HOME</a></li>
                <li>
                    <a href="cadastro_convidado.php">Cadastrar Convidados</a>

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
        <div class="title">ATUALIZAR CONVIDADO</div>
        <div id="main" class="container">

            <body>
            <section class="ftco-section">

                    <div class="row justify-content-center">
                        <div class="col-md-6 text-center mb-5">
                            <h2 class="heading-section">Faça as modificações necessárias.</h2>
                        </div>
                    </div>
                                    </thead>
                                    <tbody>
                                    <form action="funcoes/atualizar.php" method="post">
                                                <h3 class="mb-4"></h3>
                                                <div id="form-message-warning" class="mb-4"></div>
                                                <div id="form-message-success" class="mb-4">
                                                </div>
                                                <form action="funcoes/atualizar.php" method="POST" id="atualizar" name="atualizar" class="signin-form">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <input type="text" name="nome_completo" id="nome_completo"
                                                                       class="form-control" value="<?php $nome_completo['nome_completo']?>"
                                                                       placeholder="Nome Completo">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <input type="text" name="cpf" id="cpf" class="form-control" value="<?php $cpf['cpf'] ?>"
                                                                       placeholder="CPF" size="11">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <input type="hidden" name="id" id="atualizar" value="<?php echo $id?>" class="btn btn-primary">
                                                                <input type="submit" name="atualizar" id="atualizar" value="Atualizar" class="btn btn-primary">
                                                                <div class="submitting"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                    </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
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
                                    <a href="#">@OPS,NOIVEI!</a><br />
                                </p>
                            </section>
                        </div>
                    </div>
                    <div class="row">
                        <div class="6u">
                            <section>
                                <h3 class="icon fa-envelope">Email</h3>
                                <p>
                                    <a href="#">ops_noivei@gmail.com</a>
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