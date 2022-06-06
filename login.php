<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Login</title>
    <link rel="stylesheet" href="css/footer.css"/>
</head>
<body>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="author" content="Muhamad Nauval Azhar">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<meta name="description" content="This is a login page template based on Bootstrap 5">
	<title> HealthForMe</title>
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
              <a class="nav-link" href="videos.html">Videos</a>
              <a class="nav-link" href="index_3.html">Onde Buscar Ajuda</a>
              <a class="nav-link" href="index_4.html">Podcast</a>
              <a class="nav-link" href="index_5.html">Ebooks</a>
			  <a class="nav-link" href="login.php">Login</a>




            </div>
          </div>
        </div>
      </nav>
	  
<?php
    require('db.php');
    session_start();
    // Enviando e checando usuario no mysql
    if (isset($_POST['username'])) {
        $username = stripslashes($_REQUEST['username']);    // removes backslashes
        $username = mysqli_real_escape_string($con, $username);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);
        // Check se o usuario existe
        $query    = "SELECT * FROM `users` WHERE username='$username'
                     AND password='" . md5($password) . "'";
        $result = mysqli_query($con, $query) or die(mysql_error());
        $rows = mysqli_num_rows($result);
        if ($rows == 1) {
            $_SESSION['username'] = $username;
            // se usuario for valido 
            header("Location: dashboard.php");
        } else {
            echo "<div class='form'>
                  <h3>Incorrect Username/password.</h3><br/>
                  <p class='link'>Clique aqui <a href='login.php'>Login</a> Novamente.</p>
                  </div>";
        }
    } else {
?>


<!-- Inicio Login -->
<section class="h-100">
		<div class="container h-100">
			<div class="row justify-content-sm-center h-100">
				<div class="col-xxl-4 col-xl-5 col-lg-5 col-md-7 col-sm-9">
					<div class="text-center my-5">
						<img src="img/cerebro.png" alt="logo" width="100">
					</div>
					<div class="card shadow-lg">
						<div class="card-body p-5">
							<h1 class="fs-4 card-title fw-bold mb-4">Login</h1>
							<form method="POST"  name="username" class="needs-validation" novalidate="" autocomplete="off">
								<div class="mb-3">
									<label class="mb-2 text-muted" for="email">Nome de Usuario</label>

									<input  type="text" name="username" type="email" class="form-control" name="email" value="" required autofocus>
									<div class="invalid-feedback">
										Usuario invalido
									</div>
								</div>

								<div class="mb-3">
									<div class="mb-2 w-100">
										<label class="text-muted" for="password">Senha</label>
										
									</div>
									<input type="password" name="password" class="form-control"  required>
								    <div class="invalid-feedback">
								    	Senha necessaria
							    	</div>
								</div>

								<div class="d-flex align-items-center">
									<div class="form-check">
										<input type="checkbox" name="remember" id="remember" class="form-check-input">
										<label for="remember" class="form-check-label">Salvar senha</label>
									</div>
									<button type="submit" class="btn btn-primary ms-auto">
                                        <a type="submit" value="Login" name="submit" class="text-dark">Login</a>
										
									</button>
								</div>
							</form>
						</div>
						<div class="card-footer py-3 border-0">
							<div class="text-center">
								Não tem uma conta? <a href="registration.php" class="text-dark">Registre-se</a>
							</div>
						</div>
					</div>
					
				</div>
			</div>
		</div>
	</section>
	<!-- Fim do login -->
	<script src="js/login.js"></script>

	<footer>
        <h2>Participe das Nossa Redes Sociais</h2>

        <ul class="footer-ul">
            <li class="footer-li"><a href="#"><img class="icons-btn" src="img/instagram.png" alt="instagram"></a></li>
            <li class="footer-li"><a href="#"><img class="icons-btn" src="img/facebook.png" alt="facebook"></a></li>
            <li class="footer-li"><a href="#"><img class="icons-btn" src="img/whatsapp.png" alt="whatsapp"></a></li>
        </ul><br>

        <p>Created By G2- CCO2020.1 | © 2022 Todos os direitos reservados.</p>
    </footer>
<?php
    }
?>
</body>
</html>
