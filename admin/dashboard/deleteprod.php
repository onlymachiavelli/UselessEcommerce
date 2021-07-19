<?php
    session_start();
    if (!isset($_SESSION['user']) && !isset($_SESSION['pass'])){
        header('Location: ../../admin/'); }
    $server = "localhost";
    $username = "root";
    $password = "";
    $conn = new mysqli($server, $username, $password, "bachmanity"); 
    if ($conn){
        //OUR CODE
        $sql = "DELETE FROM products WHERE ID = ".$_POST["id"];

        if (mysqli_query($conn,$sql)){
            print("<b style='color:#ff0000;'>Done <a href='products.php'>Go Back</a></b>");
        }
        else{
            print(mysqli_error($conn));
        }
    }
    else{
        die("error connecting to DB");
    }
?>