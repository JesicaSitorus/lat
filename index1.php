<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Awesome CSS Responsive Navigation menus </title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>
<body>
    <header>
        <input type="checkbox" name="" id="chk1">
        <div class="logo"><h1>Web Master</h1></div>
        <div class="search-box">
            <form action="">
                <input type="text" name="search" id="srch" placeholder="Search">
                <button type="submit"><i class="fa fa-search"></i></button>
            </form>
        </div>
        <ul>
            <li><a href="index.php?modul=home">HOME</a></li>
            <li><a href="index.php?modul=product">PRODUCT</a></li>
            <li><a href="index.php?modul=blog">BLOG</a></li>
            <li><a href="index.php?modul=contact">CONTACT</a></li>
            <li>
                <a href="#"><i class="fab fa-facebook"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
            </li>
        </ul>
        <div class="menu">
            <label for="chk1">
                <i class="fa fa-bars"></i>
        </div>
    </header>
    <div id="main-content">

                <?php 
                if(isset($_GET['modul'])){
                    $pages = $_GET['modul'];
                }else{
                    $pages = "home";
                }
                if(!isset($_GET['modul']) || $pages == "home"){
                    ?>

                    <div id="content-home">
    <h1 id="">Title Home</h1><br>
    <p>Selamat datang untuk kamu,semoga betah disini  ya <br>
       saya jesica anastasya sitorus <br>
        aku suka makan bakso aku suka makan mie<br> 
        aku suka kamu aku suka semuanya loch
    </p>
</div>

            <?php
                }
            if($pages == "product"){
                ?>

            <div id="content-product">
                <h1>Title Product</h1><br>
                <p>Selamat datang untuk kamu,semoga betah disini  ya <br>
                saya jesica anastasya sitorus <br>
                    aku suka makan bakso aku suka makan mie<br> 
                    aku suka kamu aku suka semuanya loch
                </p>
            </div>

                <?php
            }
            if($pages == "blog"){
                ?>

            <div id="content-blog">
            <h1>Title Blog</h1><br>
             <p>Selamat datang untuk kamu,semoga betah disini  ya <br>
            saya jesica anastasya sitorus <br>
            aku suka makan bakso aku suka makan mie<br> 
            aku suka kamu aku suka semuanya loch
            </p>
        </div>

        <?php
            }
            if($pages == "contact"){
                ?>

            <div id="content-contact">
            <h1>Title Contact</h1><br>
             <p>Selamat datang untuk kamu,semoga betah disini  ya <br>
            saya jesica anastasya sitorus <br>
            aku suka makan bakso aku suka makan mie<br> 
            aku suka kamu aku suka semuanya loch
            </p>
        </div>

            <?php
                }
                ?>
    </div>
</body>
</html>