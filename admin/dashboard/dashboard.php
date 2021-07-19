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
    <title>Admin Dashboard</title>
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
                <a class="selected" href="dashboard.php" >Home</a>
                <a href="products.php">Products</a>
                <a href="messages.php">Messages</a>
                <a href="settings.php">Edit</a>
            </nav>
            <div class="logout">
                <a href="getOut.php">LogOut</a>
            </div>
        </nav>
    </header>

    <main class="home autoFull">
        <p class="title">Home : BlocNote</p>
        <div class="notes_container">
            

            <?php
                $sql = "SELECT note, title FROM note";
                $res = mysqli_query($conn, $sql);
                $i = 0;
                 while ($row = mysqli_fetch_assoc($res)){
                     $i++;
                     echo"
                        <div class='note' >
                        <p class='note_title' id='title".$i."' >
                            ".$row["title"]."
                        </p>
                        <pre class='nt' id='note".$i."'>".$row["note"]."</pre>
                        <button onclick='UpdateNote(`note".$i."`,`title".$i."`)' class='edit_btn_' >
                            <i class='fa fa-pencil-square-o' aria-hidden='true'></i> Edit
                        </button>
                        </div>
                     ";
                 }
            ?>
        </div> 
    </main>

    <button class="add_note" onclick="AddNote()" >
        <i class="fa fa-book" aria-hidden="true"></i>
    </button>

    <main class="addnoteROOT" >

        <button class="closebtn" onclick="Close('addnoteROOT')" >
            <i class="fa fa-times-circle" aria-hidden="true"></i>
        </button>
        <div class="add" > 
            <p class="add_title">Add Note</p>
            <form class="create" action="addnote.php"  method="POST"  >
                <input type="text" name="notetitle" placeholder="Note Title" />
                
                <textarea placeholder="Note Itself" name="note" ></textarea>
                <button class="subbtn" ><i class="fa fa-floppy-o" aria-hidden="true"></i> Save</button>
            </form>

            <form class="update"  action="addnote.php"  method="POST"  >
                <input type="text" name="notetitle" placeholder="Note Title" />
                
                <textarea placeholder="Note Itself" name="note" ></textarea>
                <button class="subbtn" ><i class="fa fa-floppy-o" aria-hidden="true"></i> Save</button>
            </form>
        </div> 

    </main>
    <script src="app.js"></script>
</body>

</html>