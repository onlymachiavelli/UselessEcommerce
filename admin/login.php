<?php
session_start();
$server = "localhost";
$username = "root";
$password = "";
$conn = new mysqli($server, $username, $password, "bachmanity");
if ($conn){
    $sql = "SELECT * FROM user WHERE username = '".$_POST['user']."' AND password = '".$_POST['pass']."'";   
    $result = mysqli_query($conn, $sql); 
    if (mysqli_num_rows($result)>0){
        $_SESSION['user'] = "username";
        $_SESSION['pass'] = "password";
        header('Location: dashboard/dashboard.php');
    }
    else{
        header('Location: wrong.html');
    }
}


else{
    die ("DB PROBLEM");
}
?>