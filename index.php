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
            <div class="home">
                <div class="shadow">
                    <nav class="navbar">
                        <div class="lg">
                            <p>Bachmanity Store</p>
                        </div>
                        <nav class="nav">
                            <a href="#">Categories</a>
                            <a href="#">All Product</a>
                            <a href="#">Report</a>
                            <a href="#">FAQ</a>

                        </nav>
                    </nav>
                    <div class="page_title">
                        <p class="top_title">We sell the most expensive Devices in the world</p>
                    </div>
                    <img alt="RM WATCH" id="main_photo" src="IMG/rm.png" />
                    <div class="para">
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolores, possimus quae eaque
                            perspiciatis, quod accusamus minima ad suscipit et explicabo laudantium? Explicabo ullam
                            illum praesentium, architecto doloremque molestiae corporis iure.</p>
                    </div>
                    <div class="cent">
                        <button class="seemorebtn">See More</button>
                    </div>
                </div>
            </div>
            <div class="home_container">
                <div class="categories">
                    <div class="centt">
                        <p id="lg">Popular Categories</p>
                    </div>
                </div>

                <div class="product">
                    <?php
                    if ($conn){
                        $Name = array();
                        $Link = array();
                        $Price = array();
                        $sql = "SELECT name, price, link FROM products";
                        $res = mysqli_query($conn, $sql);
                        while ($row = $res -> fetch_assoc()){
                            array_push($Name, $row['name']);  //STRING
                            array_push($Link,$row['link']); //STRING
                            array_push($Price, $row['price']); //FLOAT
                        }
                        $Length = sizeof($Name);
                        //Printing !
                        $stop = 0;
                        while ($stop <6){
                            echo "
                            <div class='card'>
                                <img src='admin/dashboard/".$Link[$Length-1]."' />
                                <p class='product_title'>".$Name[$Length-1]."</p>
                                <p class='product_price'>".$Price[$Length-1]." $</p>
                                <button class='add_cart'>Add to <i class='fa fa-shopping-cart' aria-hidden='true'></i></button>
                                <button class='buy_btn'>Buy <i class='fa fa-credit-card-alt' aria-hidden='true'></i></button>
                            </div>
                            ";
                            //Increasing STOP !
                            $stop ++;
                            //Decreasing Length
                            $Length--;
                            //Space bruh !
                            if ($stop == 3){
                                echo "<br id='break' />";
                            }
                        }
                    }
                    
                ?>
                    <form action="allprod.php" method="POST">
                        <button class="atp">All The Products</button>
                    </form>
                </div>
            </div>
            <div class="contact">
                <p class="contact_title">Contact Us</p>
                <form action="contact.php" method="POST">
                    <input type="text" name="Fname" placeholder="First Name" id="fname" />
                    <input type="text" name="Lname" placeholder="Last Name" id="lname" />
                    <input type="number" name="Pnumber" placeholder="Phone Number" />
                    <input type="email" name="Email" placeholder="E@mail" />
                    <input type="text" name="Sub" placeholder="Subject" />
                    <textarea placeholder="Your Message" name="Message"></textarea>
                    <button class="send_btn"><i class="fa fa-paper-plane" aria-hidden="true"></i> Send</button>
                </form>
            </div>
            <div class="map">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5368.576419522664!2d10.23709873689509!3d36.862238473763256!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMzbCsDUxJzQxLjIiTiAxMMKwMTQnMjUuMyJF!5e0!3m2!1sen!2stn!4v1615937163516!5m2!1sen!2stn"
                    width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
            <footer>
                <div class="damn">
                    <div class="ft" id="scl">
                        <i class="fa fa-globe" aria-hidden="true"></i>
                        <br />
                        <b id="ftlogo">Bachmanity Store</b>
                        <br /><br />
                    </div>
                    <div class="ft" id="support">
                        <b id="sutitle">Support</b>
                        <br />
                    </div>
                    <div class="ft" id="links">
                        <b id="sutitle">Links</b>
                        <br />
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
                    &copy; <a style="color:#fff;" target="_blank" href="https://instagram.com/onlymachiavelli">Alaa
                        Barka</a></b>
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