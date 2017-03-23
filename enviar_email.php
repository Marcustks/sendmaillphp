<?php

$nome=$_POST['id_nome'];
$assunto=$_POST['id_assunto'];
$mensagem=$_POST['id_mensagem'];

mail("exemplo@bol.com.br", $assunto, $nome . ':' . $mensagem);

header("location:sua pagina de contato . exemplo https://developer4044040.000webhostapp.com/contact.html");


?>
