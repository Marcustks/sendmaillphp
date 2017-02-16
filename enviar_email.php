<?php

$nome=$_POST['id_nome'];
$assunto=$_POST['id_assunto'];
$mensagem=$_POST['id_mensagem'];

mail("marcusoliveirapc@gmail.com", $assunto, $nome . ':' . $mensagem);

header("location:https://developer404.000webhostapp.com/contact.html");


?>