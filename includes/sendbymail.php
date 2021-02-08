<?php
if (isset($_POST['submit-mail'])) {

    $email_to = "programming.regina@gmail.com";
    $email_subject = "Contacto desde página web";
    $email_from = $_POST['email'];

    $email_message = "Detalles del formulario de contacto:<br><br>";
    $email_message .= "Nombre: " . $_POST['name'] . "<br>";
    $email_message .= "E-mail: " . $_POST['email'] . "<br>";
    $email_message .= "Comentarios: " . $_POST['msg'] . "<br><br>";
    $headers = 'From: ' . $email_from . "\r\n" .
        "Content-type: text/html; charset=utf-8" .
        'Reply-To: ' . $email_from . "\r\n" .
        'X-Mailer: PHP/' . phpversion();
    @mail($email_to, $email_subject, $email_message, $headers);
    #header("Location: index.php#gracias");
    echo "<script>location.href='index.php#gracias'</script>"; 
}
?>