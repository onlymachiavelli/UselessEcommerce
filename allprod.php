<!DOCTYPE html>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$conn = new mysqli($servername, $username, $password,"bachmanity");
?>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale = 1" />
    <link rel="stylesheet" href="main.css" />
    <link rel="stylesheet" href="font-awesome/css/font-awesome.css" />
    <link rel="shortcut icon" href="IMG/rm.png" />
</head>

<body>

    <main class="root">
        <button class="fx" onclick="SideBar(false)">
            <i class="fa fa-arrow-right" aria-hidden="true"></i>
        </button>
        <main class="rs">
            <nav class="res_navbar">
                <div class="res_logo">
                    <p>&nbsp;&nbsp;<i class="fa fa-globe" aria-hidden="true"></i> Bachmanity Store </p>
                </div>
                <nav class="res_nav">
                    <a href="index.php" class="selected"><i class="fa fa-home" aria-hidden="true"></i></a>
                    <a href="#" onclick="Search()"><i class="fa fa-search" aria-hidden="true"></i></a>
                    <a href="#"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
                    <a href="#"><i class="fa fa-comments" aria-hidden="true"></i></a>
                    <a href="#"><i class="fa fa-info-circle" aria-hidden="true"></i></a>
                </nav>
            </nav>

        </main>
        <main class="side-bar">
            <div class="logo">
                <i class="fa fa-globe" aria-hidden="true"></i>
                <p class="logo_title">Bachmanity <br />Store</p>
            </div>
            <div class="menu">
                <a href="index.html" class="selected"><i class="fa fa-home" aria-hidden="true"></i></a>
                <a href="#" onclick="Search()"><i class="fa fa-search" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-comments" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-info-circle" aria-hidden="true"></i></a>
                <button class="left_btn" onclick="SideBar(true)">
                    <i class="fa fa-arrow-left" aria-hidden="true"></i>
                </button>
            </div>
        </main>
        <main class="screen">
            


            <div class="home_container">
            <div class="allt" >
            <p id="all">All Of Our Products</p>
    <?php
            $sq = "SELECT name, link, price FROM products";
            $result = mysqli_query($conn, $sq);
            while ($roww = $result -> fetch_assoc()){
                echo "
                    <div class='card'>
                        <img src='admin/dashboard/".$roww['link']."' />
                        <p class='product_title'>".$roww['name']."</p>
                        <p class='product_price'>".$roww['price']." $</p>
                        <button class='add_cart'>Add to <i class='fa fa-shopping-cart' aria-hidden='true'></i></button>
                        <button class='buy_btn'>Buy <i class='fa fa-credit-card-alt' aria-hidden='true'></i></button>
                    </div>
                ";
            }
        ?>           
    </div>

                


            </div>
            <footer>
            <div class="damn">
                <div class="ft" id="scl">
                    <i class="fa fa-globe" aria-hidden="true"></i>
                    <br/>
                    <b id="ftlogo">Bachmanity Store</b>
                    <br /><br/>

                    <script type="text/javascript">
                        const scl = document.getElementById("scl");
                        var p;
                        l = [
                            `<a href="#" id="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a>`,
                            `<a href="#" id="instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a>`,
                            `<a href="#" id="youtube"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>`
                        ];
                        for (p = 0; p < 3; p++) {
                            scl.innerHTML += l[p];
                        }
                    </script>
                </div>

                <div class="ft" id="support">
                    <b id="sutitle">Support</b>
                    <br />
                    <script type="text/javascript">
                        const support = document.getElementById("support");
                        var d;
                        var lis = [
                            `<a href="#">Report</a>`,
                            `<a href="#">FAQ</a>`,
                            `<a href="#">Rules</a>`,
                            `<a href="#">Help</a>`,
                            `<a href="#">About</a>`
                        ];
                        for (d = 0; d < lis.length; d++) {
                            support.innerHTML += lis[d];
                        }
                    </script>
                </div>

                <div class="ft" id="links">
                    <b id="sutitle">Links</b>
                    <br />
                    <script type="text/javascript">
                        const linki = document.getElementById("links")
                        var t;
                        var list = [
                            `<a href="index.php">Home</a>`,
                            `<a href="#">Contact Us</a>`,
                            `<a href="#">All The Products</a>`,
                            `<a href="#">About</a>`
                        ];
                        for (t = 0; t < list.length; t++) {
                            linki.innerHTML += list[t]
                        }
                    </script>
                </div>

                <div class="ft" id="news">
                    <form action="" method="POST">
                        <input type="text" placeholder="Subscribe To News Letters" />
                        <br />
                        <button type="submit">Subscribe</button>
                    </form>
                </div>


            </div>
            <b id="copy">Designed with <i style="color:#ff0000;" class="fa fa-heart" aria-hidden="true"></i> by
                &copy; <a style="color:#fff;" target="_blank" href="https://instagram.com/onlymachiavelli">Alaa Barka</a></b>
        </footer>

        </main>
        <main class="search_block">
            <button class="exit_btn" onclick="Close()">
                <i class="fa fa-times-circle-o" aria-hidden="true"></i>
            </button>
            <div class="center">
                <p class="search_title">Search a product</p>
                <form action="" method="GET">
                    <input type="text" placeholder="Search here" name="" />
                    <button type="submit">Search</button>
                </form>
            </div>
        </main>
    </main>
        
    <!--JS IMPORT-->
    <script src="jquery.js"></script>
    <script src="app.js"></script>
</body>

</html>