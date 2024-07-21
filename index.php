
<?php
 $nome = addslashes($_POST['nome']);
 $email = addslashes($_POST['email']);
 $mensagem = addslashes($_POST['mensagem']);
 

 $para = 'pascoalzage54@gmail.com';
 $assunto = 'Jobs Online Pascoal zage';

 $corpo ='Nome :'.$nome.'\n'.'E-mail :'.$email.'\n'.'Messagem :'.$mensagem;
 $cabeca = 'From:pascoalzage54@gmail.com'.'\n'.'Reply-to:'.$email.'\n'.'X=Mailer:PHP/'.phpversion();

 
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta  http-equiv="refresh" content="10;url=index.html">
   <title>Envio de E-mail</title>
   <style>

   </style>
</head>
<body>
   <?php
 if(mail($para,$assunto,$corpo,$cabeca)){
   echo 'Enviado com sucesso!';
   
}else{

    echo 'Nao vou enviado infelizmente!';
}

 


 