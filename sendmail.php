<?php
date_default_timezone_set('America/Chicago');

if (sizeof($_POST)) {
    $Name = $_POST['name'];
    $Email = $_POST['email'];
    $Phone = $_POST['phone'];
    $Message = $_POST['message'];
    $Date = date('m/d/Y');
    $Time = date('g:i a e');
    $Timestring = date('g:i a');

    $emailstring = "\n Name: " . $Name . "\n Email: " . $Email . "\n Phone: " . $Phone . "\n Message: " . $Message . "\n\n Sent " . $Date . "  " . $Time;
    mail("nathanfrancy@gmail.com", "Contact Form", $emailstring, $headers) or mysql_error();
    //header("Location: contact.php?message=1");
}

function sanitize($s) {
    $string = $s;
    $string = stripslashes($string);
    
    return $string;
}