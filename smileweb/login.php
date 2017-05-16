<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>
        Smile Web
    </title>
    <meta charset="utf-8">
    <meta name = "viewport" content="width=device-width, initial-scale=1.0">
	<link rel="icon" type="image/png" href="img/logo/logo.png"/>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/menu.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
</head>
<body>
    <header>
        <!--logo menu-->
        <img class = "logo" src="img/logo/logo.png"/>
		
		<h1>SMILE WEB</h1>
		
		<!--menu-->
         <a href="index.php" class="home">Home</a>
		
		<!--menu-->
         <a href="login.php" class="login">Login</a>
		
        <!--menu-->
         <a href="cadastro.php" class="cadastro">Cadastrar</a>
		 
		 <!--menu-->
         <a href="faleconosco.php" class="fale">Fale Conosco</a>
		

    </header>
    <main>
        <section>
            <center><div class="centerLogin">
            <form method="post" name="frmLogin">
                <div class="logoLogin">
                    <img src="img/logologin.png" alt="LogSystem" title="logSystem"/>
                </div>

                <div class="emailLogin formularioLogin">
                    <img src="img/user.png" alt="E-mail" />
                    <input type="text" name="txtEmail" placeholder="email@dominio.com" autocomplete="off" />
                </div>

                <div class="senhaLogin formularioLogin">
                    <img src="img/pass.png" alt="Senha" />
                    <input type="password" name="txtPassword" placeholder="************" autocomplete="off" />
                </div>

                <input type="submit" name="btnSubmit" value="Login" class="btnSubmitLogin" />

                <a href="cadastro.php">Cadastrar-se</a> |  <a href="recuperarSenha.php">Recuperar Senha</a>
            </form>
                </div></center>
        </section>
        <br>
        <br>
    </main>
    <footer class="footer img">
        <h2>Todos os direitos reservados:<br>Site desenvolvido pela empresa: Smile Web</h2>
    </footer>
    <script type= "text/javascript" src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
     <script type = "text/javascript" src="js/parallax.js"></script>
    <script type="text/javascript" src="js/script.js"></script>
</body>
</html>
