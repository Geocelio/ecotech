<?php
ini_set("SMTP", "localhost");
$nome=$_POST['nome'];
$ddd=$_POST['ddd'];
$fone=$_POST['fone'];
$email=$_POST['email'];
$assunto=$_POST['assunto'];
$mensagem=$_POST['mensagem'];



/*$dpto="geoceliomota@hotmail.com";*/
$dpto="zsena@bol.com.br";
$Titulo="barro.com.br";
$Destinatario="$dpto";
$mensagem1="
Nome: $nome
Contato/WhatsAppp: $ddd $fone
Email: $email
Assunto: $assunto
Mensagem:
$mensagem";
  mail("$Destinatario","$Titulo","$mensagem1","From:$email");
?>

<?php

 echo "<script type='text/javascript'> location.href='index.php' </script>"; 

 ?>