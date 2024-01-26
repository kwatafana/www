<?php
/*
    $customerArrivalDate = $_POST["date"];
    $customerDepartureDate= $_POST["departureDate"];
    $customerName = $_POST["name"];
    $customerPhoneNumber = $_POST["phone"];
    $customerNumberPeople = $_POST["people"];
    $customerEmail = $_POST["email"];
    $customerRoomType = $_POST["room"];

    $to = "daniel@bicon.com.na";
    $subject = "Guesthouse Room Booking";

    $message = "
        <html>
        <head>
        <title>Guesthouse Booking</title>
        </head>
        <body>
        <h1>New Customer Booking:</h1>".
        "<br><br><h3>Customer Name: ". $customerName."</h3>".
        "<br><h3>Customer Email: ". $customerEmail."</h3>".
        "<br><h3>Customer Phone Number: ".$customerPhoneNumber."</h3>".
        "<br><h3>Number of People: ".$customerNumberPeople."</h3>".
        "<br><h3>Customer Arrrival Date: ". $customerArrivalDate."</h3>".
        "<br><h3>Customer Departure Date: ". $customerDepartureDate."</h3>".
        "<br><h3>Customer Room Type: ". $customerRoomType."</h3>";
        
    
    // Always set content-type when sending HTML email
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

    mail($to,$subject,$message,$headers);

    echo "message sent";
    */
?>