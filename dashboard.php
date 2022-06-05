<?php
//include auth_session.php file on all user panel pages
include("auth_session.php");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Dashboard - Client area</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
	<style>
        .navbar{
            background-color: #7cb27d;

        }
    </style>
</head>

<body>

<!-- Inicio Login -->

      
	<nav class="navbar navbar-expand-sm  navbar-dark">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>         
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
              <a class="nav-link active" aria-current="page" href="Index.Html">Home</a>
              <a class="nav-link" href="index_2.html">Videos</a>
              <a class="nav-link" href="index_3.html">Onde Buscar Ajuda</a>
              <a class="nav-link" href="index_4.html">Podcast</a>
              <a class="nav-link" href="logout.php">Logout</a>


            </div>
          </div>
        </div>
    </nav>
</head>
<body>
    <div class="">
        <p>Hey, <?php echo $_SESSION['username']; ?>!</p>
        <p>Você está logado.</p>       

    </div>
    <body>
        <!-- Click on Modal Button -->
        <button type="button" class="btn btn-primary mx-auto d-block mt-5" data-bs-toggle="modal" data-bs-target="#modalForm">
            Contribua com o site
        </button>

        <!-- Modal -->
        <div class="modal fade" id="modalForm" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Sugira novos conteudos</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="mb-3">
                                <label class="form-label">Assunto</label>
                                <input type="text" class="form-control"   placeholder="Assunto" />
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Link/Informações</label>
                                <input type="link" class="form-control" placeholder="Conteudo" />
                            </div>
                           
                            <div class="modal-footer d-block">
                                <p class="float-start">Not yet account <a href="#">Duvidas</a></p>
                                <button type="submit" class="btn btn-warning float-end">Enviar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bootstrap JS -->
        <script src="https://www.markuptag.com/bootstrap/5/js/bootstrap.bundle.min.js"></script>
</body>
</html>
