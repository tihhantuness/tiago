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
                   <center><h4><p> FORMULARIO DE CADASTRO </h4><br><br>
             <h3><form name ="myForm2" onsubmit=" return validateForm()" method="post" action="cadastrar.php">
				 <p>Nome:<br>
 				 <input type="text" id="nome" name="nome" size="35" placeholder = "Nome:"><br><br>
                 Sexo:<br>
                 <input type="radio" name="sexo" value="M" checked>Masculino<br>
                 <input type="radio" name="sexo" value="F">Feminino<br><br>  
                 Username:<br>
                 <input type="text" id="user" name="username" size="35" placeholder = "Username:"><br><br>
				 Senha:<br>
				 <input type="password" id="senha" name="senha" size="20" placeholder="********"><br><br>
                 CPF:<br>
                 <input type="text" id="cpf" name="cpf"
                 size="11" placeholder="CPF:"><br><br>
                 Endereço:<br>
                 <input type="text" id="endereço" name="endereco" size="45" placeholder="Endereço:"><br><br>
                 Bairro:<br>
                 <input type="text" id="bairro" name="bairro" size="20" placeholder="Bairro:"><br><br>
                 Numero:<br>
                 <input type="text" id="numero" name="numero" size="5" placeholder="Numero:"><br><br>
                 Cidade:<br>
                 <input type="tex" id="cidade" name="cidade"
                 size="45" placeholder="Cidade:"><br><br>
                 Estado:<br>
                 <select name="estado">
                    <option value="SP">São Paulo</option>    
                    <option value="RJ">Rio de Janeiro</option>    
                    <option value="BA">Bahia</option>    
                    <option value="MG">Minas Gerais</option>
                 </select><br><br>
				 Email:<br>
				 <input type="text" id="email" name="email" size="35" placeholder = "E-mail:"><br><br>
                 <input type="checkbox" name="news" value="Sim">Desejo receber Newslatter!<br><br>
                 <input type="submit" name="submit" id="submit" value="Cadastrar">
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
