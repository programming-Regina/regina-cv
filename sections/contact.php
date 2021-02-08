<?php 
    $fecha = date("d/m/Y");
    $hora = date("H:i:s");
    $nom = $_REQUEST['name'];
    $mail = $_REQUEST['email'];
    $msg = $_REQUEST['msg'];
    $contactos = fopen("contactos.txt", "a");    
    fwrite($contactos, "Fecha: ".$fecha." - ".$hora."\nNombre: ".$nom."\nEmail: ".$mail."\nMensaje:".$msg."\n\n");    
    fclose($contactos);
?>