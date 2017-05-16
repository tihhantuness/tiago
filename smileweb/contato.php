<?

$nome=$_POST['nome'];

$email=$_POST['email'];

$titulo=$_POST['titulo'];

$texto=$_POST['texto'];


$Destinatario="E-MAIL DE DESTINO";


$Titulo="$titulo";


$mensagem1="

Uma mensagem vinda do site !

Algum vistante mandou essa mensagem pelo site.

Nome: $nome

Email: $email

Titulo: $titulo

Mensagem: $texto";


mail("$Destinatario","$Titulo", "$mensagem1","From:$email");

echo "<script type='text/javascript'>window.alert('MENSAGEM PARA O USUARIO DE MENSAGEM ENVIADA');</script>";


echo '<meta HTTP-EQUIV="Refresh" CONTENT="1; URL=index.php">';

?>

