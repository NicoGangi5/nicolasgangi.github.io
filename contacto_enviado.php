<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

    
    <title>Nicolás Gangi</title>

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>


<?php
    $name = strip_tags(htmlspecialchars($_POST['name']));
    $email = strip_tags(htmlspecialchars($_POST['email']));
    $phone = strip_tags(htmlspecialchars($_POST['phone']));
    $mensaje = strip_tags(htmlspecialchars($_POST['message']));
    
    // Create the email and send the message
    $to = 'nicogangi@gmail.com'; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
    $email_subject = "Consulta para Nico: $name";
    $email_body = "Recibiste un nuevo mensaje de Nicolas Gangi.\n\n"." Nombre: $name\n\nEmail: $email\n\nCelular: $phone\n\nMensaje: $mensaje\n\n";
    $headers = "From: nicogangi@gmail.com\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
    $headers .= "Reply-To: $email"; 
    $wasSent = mail($to,$email_subject,$email_body);
?>

<body>
	
    <div>
        <script> 
            swal({
                title: "¡Su mensaje ha sido enviado!",
                text: "Sera redireccionado a la página",
                type: "success",
                timer: 5000,
                showConfirmButton: false
            })

            setTimeout(function () {
                    window.location.href = "index.html"; //will redirect to your blog page (an ex: blog.html)
                }, 5000)
                </script>

            <?php
                header( "refresh:5;url=/index.html" );
            ?>
    </div>


    <!-- jQuery -->
    <script type="text/javascript" src="main.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.3.5/jquery.fancybox.min.js"></script>

</body>
	
            

</body>

</html>
