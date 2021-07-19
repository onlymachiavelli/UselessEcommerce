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
    <title>Admin | Products</title>
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
                <a class="selected"  href="products.php">Products</a>
                <a href="messages.php">Messages</a>
                <a href="settings.php">Edit</a>
            </nav>
            <div class="logout">
                <a href="getOut.php">LogOut</a>
            </div>
        </nav>
    </header>
    <main class="products autoFull">
        <?php
            $sql = "SELECT ID, name, price, link, decription FROM products";
            $res = mysqli_query($conn, $sql);
             while ($row = mysqli_fetch_assoc($res)){
                 echo"
                    <div class='prod' >
                    <p class='p_title' >
                        ".$row["name"]." : <b class='price' >".$row["price"]." $</b>
                    </p>
                    <img  src='".$row["link"]."'  />
                        <pre class='desc'>".$row["decription"]."</pre>
                    
                    <form action='deleteprod.php' method='POST'>
                        <button class='delete_btn' type='submit' >
                            <i class='fa fa-trash-o' aria-hidden='true'></i> Delete
                        </button>
                        <input type='hidden' value='".$row['ID']."' name='id'/></form>
                    </div>
                 ";
             }
        ?>
    </main>


    <button class="add_prod" onclick="AddPRD()" title="Add Product" >
        <i class="fa fa-plus-circle" aria-hidden="true"></i>
    </button>

    <main class="add_prodROOT" >
        <button class="closebtn" onclick="Close('add_prodROOT')" >
            <i class="fa fa-times-circle" aria-hidden="true"></i>
        </button> 
        <div class="Container" >
            <p class="ptitle" >Add Product</p>
            <form action="upload.php" method="POST" enctype="multipart/form-data" >
                <input type="text" name="name" placeholder="Prouct Title" />
                <input type="number" name="price" placeholder="Product Price (USD $)" />
                <button type="button" onclick="Fl()" class="liiiit"  >
                    <i class="fa fa-plus" aria-hidden="true"></i>
                </button>
                <div style="width:px;height:1px;overflow:hidden;" >
                    <input type="file" name="fileToUpload" id="upbtn"  />
                </div>
                <textarea name="desc" placeholder="Product Description"></textarea>
                <button type="submit" class="sb" >
                    <i class="fa fa-floppy-o" aria-hidden="true"></i> Save
                </button>
            </form>
        </div>
    </main>
    
    <script src="app.js"></script>
</body>

</html>