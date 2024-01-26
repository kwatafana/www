<?php
    $mailHeading = $_POST["mailHeading"];
    $coverLink = $_POST["coverLink"];
    $mailDescription = $_POST["mailDescription"];

    $to = "cy6erlion@gmail.com";
    $subject = "HTML Email";

    $message = "
        <html>
        <head>
        <title>HTML Email</title>
        </head>
        <body>
        <div style='height: 500px; width: 500px; margin: 0 auto; padding: 2%; border:thin solid #ccc'>".
        "<h1>". $mailHeading."</h1>".
        "<img alt='cover' src='". $coverLink . "' style='width: 100%'>".
        "<p>".$mailDescription."</p>".
        "</body>".
        "</html>";
                    
    // Always set content-type when sending HTML email
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

    mail($to,$subject,$message,$headers);

    echo "message sent";
?>