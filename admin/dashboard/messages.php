<?php
session_start();
if (!isset($_SESSION['user']) && !isset($_SESSION['pass'])){
    header('Location: ../../admin/'); 
}
$servername = "localhost";
$username = "root";
$password = "";
$conn = new mysqli($servername, $username, $password, "bachmanity");

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="main.css" />
    <link rel="stylesheet" href="../../font-awesome/css/font-awesome.css" />
    <title>Admin | Messages</title>
</head>

<body>
    <header>
        <nav class="navbar">
            <div class="logo">
                <p>
                    <i class="fa fa-globe" aria-hidden="true"></i> Bachmanity Store
                </p>
            </div>
            <nav class="nav">
                <a href="dashboard.php" >Home</a>
                <a href="products.php">Products</a>
                <a class="selected"  href="messages.php">Messages</a>
                <a href="settings.php">Edit</a>
            </nav>
            <div class="logout">
                <a href="getOut.php">LogOut</a>
            </div>
        </nav>
    </header>
    <main class="message autoFull">
        <p class="title">Messages</p>
        <table class="msg_container">
            <tr id="t">
                <th>First Name</th>
                <th>Last Name</th>
                <th>Phone Number</th>
                <th>Email</th>
                <th>Subject</th>
                <th>Message</th>
            </tr>

            <?php
            $Arr = [];
            if ($conn){
                
                $i = -1;
                $sql = "select ID,name,lname,phone,email,sub, message from contact";
                $res = mysqli_query($conn, $sql);
                 while ($row = $res ->fetch_assoc()){
                     $i++;
                     echo"
                     <tr>
                         <th>".$row["name"]."</th>
                         <th>".$row["lname"]."</th>
                         <th>".$row["phone"]."</th>
                         <th>".$row["email"]."</th>
                         <th>".$row["sub"]."</th>
                         <th>
                             <button class='v_btn' onclick='ShowMsg($i)'>View The Message</button>
                         </th>
                     </tr>
                     ";
                     array_push($Arr,$row["message"] );
                 }
            }
            else{
                
            }
           ?>
        </table>
    </main>
    <main class="messageROOT">
        <button class="closebtn" onclick="Close('messageROOT')">
            <i class="fa fa-times-circle" aria-hidden="true"></i>
        </button>
        <div class="message_container">
            <p class="msg_title">
                Your Message :
            </p>
            <p class="txt_message">
                <!--Message PLace !-->
            </p>
        </div>
    </main>
    
    <!--NVM why I wrote this code-->
    <main class="workstation" >
        <p id="id">
            <?php
                echo $i ;
            ?>
        </p>
        <div class="">
                <?php
                    for ($in = 0;$in<=$i;$in++){
                        print(
                            "
                                <p id='m$in'>
                                    $Arr[$in]
                                </p>
                            "
                        );
                    }
                ?>
        </div>
    </main>
    <script src="app.js"></script>
</body>

</html>