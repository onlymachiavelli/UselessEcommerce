<?php
    session_start();
    if (!isset($_SESSION['user']) && !isset($_SESSION['pass'])){
        header('Location: ../../admin/'); }
    $server = "localhost";
    $username = "root";
    $password = "";
    $conn = new mysqli($server, $username, $password, "bachmanity"); 
    if ($conn){
        $send = "INSERT INTO note (title, note) VALUES ('".$_POST['notetitle']."', '".$_POST['note']."') ";
        echo $send;
        if ($conn->query($send)){
            header("Location:sent.html");
        
        }
        else{
            echo mysqli_error($conn);
            die ("Error Sending");
        }
    }   

    else{
        die("error connecting to DB");
    }
?>