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
    <title>Admin | Settings</title>
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
                <a href="messages.php">Messages</a>
                <a class="selected" href="settings.php">Edit</a>
            </nav>
            <div class="logout">
                <a href="getOut.php">LogOut</a>
            </div>
        </nav>
    </header>

    <main class="edit autoFull">
        <button onclick="Edit(true)" class="cbtn">Edit Username</button>
        <button onclick="Edit(false)" class="cbtn" >Edit Password</button>
        <section class="user">
            <div class="frm" >
                <form method="POST" action="edituser.php">
                    <div class="inp">
                        <label>
                            <i class="fa fa-user-circle-o" aria-hidden="true"></i>
                        </label>
                        <input autocomplete="OFF" type="text" name="nuser" placeholder="New Username"  />
                    </div>
                    <div class="inp">
                        <label>
                            <i class="fa fa-lock" aria-hidden="true"></i>
                        </label>
                        <input autocomplete="OFF" type="password" name="pass" placeholder="Password"  />
                    </div>
                    <button type="submit" class="sub_btn" >Change</button>
                </form>
            </div>
        </section>

        <section class="pass">
            <div class="frm" >
                <form method="POST" action="editpass.php">
                    <div class="inp">
                        <label>
                        <i class="fa fa-unlock" aria-hidden="true"></i>
                        </label>
                        <input autocomplete="OFF" type="password" name="opass" placeholder="Old Password"  />
                    </div>
                    <div class="inp">
                        <label>
                            <i class="fa fa-lock" aria-hidden="true"></i>
                        </label>
                        <input autocomplete="OFF" type="password" name="npass" placeholder="New Password"  />
                    </div>
                    <button type="submit" class="sub_btn" >Change</button>
                </form>
            </div>
        </section>
    </main>




    <script src="app.js"></script>
</body>

</html>