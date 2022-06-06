<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Registration</title>
    <link rel="stylesheet" href="style.css"/>

</head>
<body>
<?php
    require('db.php');
    // Inserindo valores no banco de dados.
    if (isset($_REQUEST['username'])) {

        $username = stripslashes($_REQUEST['username']);
        $username = mysqli_real_escape_string($con, $username);
        $email    = stripslashes($_REQUEST['email']);
        $email    = mysqli_real_escape_string($con, $email);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);
        $create_datetime = date("Y-m-d H:i:s");
        $query    = "INSERT into `users` (username, password, email, create_datetime)
                     VALUES ('$username', '" . md5($password) . "', '$email', '$create_datetime')";
        $result   = mysqli_query($con, $query);
        if ($result) {
            echo "<div class='form'>
                  <h3>Cadastrado Com sucesso.</h3><br/>
                  <p class='link'>Clique aqui para <a href='login.php'>Login</a></p>
                  </div>";
        } else {
            echo "<div class='form'>
                  <h3>Ocorreu um erro.</h3><br/>
                  <p class='link'>Clique aqui para <a href='registration.php'>registration</a> again.</p>
                  </div>";
        }
    } else {
?>
<!--Formulario pra login -->
    <form class="form" action="" method="post">
        <h1 class="login-title">Cadastre-se</h1>
        <input type="text" class="login-input" name="username" placeholder="Nome de usuario" required />
        <input type="text" class="login-input" name="email" placeholder="Email " required>
        <input type="password" class="login-input" name="password" placeholder="Senha" required>
        <input type="submit" name="submit" value="Casdastrar" class="login-button">
        <p class="link">Ja tem uma? <a href="login.php">Login</a></p>
    </form>
<?php
    }
?>

</body>
</html>
