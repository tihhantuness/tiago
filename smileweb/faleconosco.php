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
	<script language="javascript">
			function validateForm() {
					valido = true
				   nome = document.forms["myForm"]["nome"];
				   if (nome.value == null || nome.value == ""){
							alert("Nome deve ser preenchido");
							nome.style.borderColor = "red";
							valido = false
					}
					email = document.forms["myForm"]["email"];
				   if (email.value == null || email.value == ""){
							alert("E-mail deve ser preenchido");
							email.style.borderColor = "red";
							valido = false
					}
					titulo = document.forms["myForm"]["titulo"];
				   if (titulo.value == null || titulo.value == ""){
							alert("Assunto deve ser preenchido");
							titulo.style.borderColor = "red";
							valido = false
					}
					texto = document.forms["myForm"]["texto"];
				   if (texto.value == null || texto.value == ""){
							alert("Menssagem deve ser preenchida");
							texto.style.borderColor = "red";
							valido = false
					}else{
					alert("Mensagem Enviada com sucesso");
					}
					return valido
			}
		</script>
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
       <!-- <nav>
            <div class="menu">
                <i class="material-icons">&#xE5C3;</i>
            </div>
            <div class="nav-itens">
                <a href="#jogos" class="tooltip" data-tooltip="Games">
                <i class="material-icons">&#xE338;</i>
                    <label class="text_tooltip"></label>
                </a>
                
                <a href="#botao" class="tooltip" data-tooltip="Animes e Séries">
                <i class="material-icons">&#xE333;</i>
                    <label class="text_tooltip"></label>
                </a>

                <a href="#tooltips" class="tooltip" data-tooltip="Livros">
                <i class="material-icons">&#xE02F;</i>
                    <label class="text_tooltip"></label>
                </a>
        
                <a href="#parallax" class="tooltip" data-tooltip="Músicas">
                <i class="material-icons">&#xE030;</i>
                    <label class="text_tooltip"></label>
               </a>  
            </div>
        </nav> -->
        <section>
                <div id = "topo" class = "section_info">
                    <div class = "row container">
                    <center><h1>Contato:</h1><br><br>
			         <h3><form name ="myForm" onsubmit=" return validateForm()" method="post" action="contato.php">
                        <p>Nome:<br>
                        <input type="text" id="nome" name="nome" size="35" placeholder = "Digite seu nome aqui:"><br><br>
                        Email:<br>
				        <input type="text" id="email" name="email" size="35" placeholder = "Digite seu E-mail aqui:"><br><br>
                        Assunto:<br>
				        <input type="text" id="titulo" name="titulo" size="35" placeholder = "Digite o assunto aqui:"><br><br>
 				        Mensagem:</p>
                        <textarea name="texto" id="texto" cols="60" rows="10" placeholder = "Digite sua mensagem aqui:"></textarea><br><br>
                        <input type="submit" name="submit" id="submit" value="Enviar">
                        <input type="reset" name="resetar" id="resetar" value="Limpar">
   			   </form></h3></center>
                    </div>
                    </div>
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
