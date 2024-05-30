<?php
    include "connection.php";

    $fullName=$_POST['txt_fullName'];
    $email=$_POST['txt_email'];
    $message=$_POST['txt_message'];
    if(empty($fullName) || empty($email) || empty($message))
        header("location:contact.php?flag=1");
        // echo "reache ";
    
        else{
        
        $sql=" INSERT INTO info (db_fullName,db_email,db_message) VALUES ('$fullName','$email','$message')";

        mysqli_query($con,$sql) ;

        header("location:contact.php?flag=2");
    }
?>