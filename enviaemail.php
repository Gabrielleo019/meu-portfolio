<?php

    $nome = addcslashes($_POST['nome']);
    $email = addcslashes($_POST['email']);
    $celular = addcslashes($_POST['celular']);

    $destino = "gabrielcadeira306@gmail.com";
    $assunto = "Formulário - Portfólio";

    $corpo = "Nome: ".$nome."\n"."E-mail: ".$email."\n"."Celular: ".$celular;

    $cabeca = "From: gabrielcadeira306@gmail.com"."\n"."Reply-to".$email."\n"."X=Mailer:PHP/".phpversion();

    if(mail($destino,$assunto,$corpo,$cabeca)){
        echo("E-mail enviado com sucesso!");
    } else{
        echo("Houve um erro ao enviar o email!");
    }

?>