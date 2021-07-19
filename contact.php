<?php
    $server = "localhost";
    $username = "root";
    $password = "";
    $conn = new mysqli($server, $username, $password, "bachmanity"); 
    if ($conn){
        $send = "INSERT INTO CONTACT (name, lname, phone, email, sub, message) VALUES ('".$_POST['Fname']."', '".$_POST['Lname']."', '".$_POST['Pnumber']."', '".$_POST['Email']."', '".$_POST['Sub']."', '".$_POST['Message']."') ";
        if ($conn->query($send)){
            header("Location:sent.html");
        
        }
        else{
            die ("Error Sending");
        }
    }   
    else{
        die ("error connecting to DB");
    }
?>