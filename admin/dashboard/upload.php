<?php
    session_start();
    if (!isset($_SESSION['user']) && !isset($_SESSION['pass'])){
        header('Location: ../../admin/'); }
    $server = "localhost";
    $username = "root";
    $password = "";
    $conn = new mysqli($server, $username, $password, "bachmanity"); 
    if ($conn){
        
        $target_dir = "uploads/";
        $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

            move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);

            $send = "INSERT INTO products (name, price, link, decription) VALUES ('".$_POST['name']."', ".$_POST['price'].", '".$target_file."', '".$_POST['desc']."')";

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
