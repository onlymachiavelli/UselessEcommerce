<?php
session_start();
if (!isset($_SESSION['user']) && !isset($_SESSION['pass'])){
    header('Location: ../../admin/'); 
}
$servername = "localhost";
$username = "root";
$password = "";
$conn = new mysqli($servername, $username, $password, "bachmanity");


$sql = "select * from user where password = '".$_POST['pass']."'";
    $res = mysqli_query($conn, $sql);

    $d = mysqli_num_rows($res);

    if ($d >0){
        $b = "UPDATE user SET username ='".$_POST['nuser']."' WHERE id=1";
        if(mysqli_query($conn, $b)){
            header('Location: changed.html');
        } else {
            header('Location: errorchanging.html');
        }
    }
?>