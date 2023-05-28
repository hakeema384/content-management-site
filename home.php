<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width = device-width, initial-scale = 1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <link rel = "stylesheet" href = "Home.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,500;0,600;0,700;1,100;1,500;1,600;1,700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
</head>
<body>
    <header>
        
        <nav>
            <a href="#" class="logo">GoodBooks<span>.</span></a>
            <div class="menuToggle" onclick="toggleMenu();"></div>
            <ul class="navigation" id="nav" >
                <li><a href="home.php">Home</a></li>
                <li><a href="News.php">News</a></li>
                <li><a href="Gallery.php">Gallery</a></li>
                <li><a href="Shop.php">Shop</a></li>
                <li><a href="Contact.php">Contact us</a></li>
                
                </ul>
        </nav>
            
    </header>

    
    <div class="top">
        <?php
        include('admin/database/dbconfig.php');
        $query = "SELECT * FROM home";
        $query_run = mysqli_query($connection, $query);

        if(mysqli_num_rows($query_run) > 0)
        {
        foreach($query_run as $row)
        {
            
            ?>
            
            <img src="Images/home.jpg" align="right" id="author">
            <h2> Suzanne Collins </h2>
            <hr>
            <p> <?php echo $row['subheading']; ?>  </p>
            <a href="#" class="btn">Explore her story</a>
            <?php

        }
        }
        else
        {
            echo "No records found";
        }


        ?>
        </div>

        
        <section class="book">
            <?php
            $query = "SELECT * FROM home";
            $query_run = mysqli_query($connection, $query);

            if(mysqli_num_rows($query_run) > 0)
            {
            foreach($query_run as $row)
            {
                
                ?>


            <h1><?php echo $row['secondheading']; ?></h1>
                <hr>
            <img src="admin/upload/<?php echo $row['image']; ?>">
            <p><?php echo $row['paragraph']; ?></p>  
                
                <?php
            }
        }
        else
        {
            echo "No records found";
        }
          ?>
            </section>

            <h1 class="ytvid">Watch: Suzanne Collins answers fan questions</h1>
            
            <div class="iframe-container"> 
                <iframe width="560" height="315" src="https://www.youtube.com/embed/twCq84Bm-_8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>

           

        <section class="praise">
            <h1>Praise for <em>The Hunger Games</em> trilogy</h1>
            <div class="row">
                <div class="prize-col">
                    <h3>Daily Telegraph</h3>
                    <p>“A brilliantly imagined dystopian novel about the ultimate television reality game for teens.”</p>
                </div>
                <div class="prize-col">
                    <h3>Financial Times</h3>
                    <p>“What elevates Suzanne Collins’s novel is her ability to build and sustain tension… This is a fine entry into the canon of post-apocalyptic brutality fiction.”</p>
                </div>
                <div class="prize-col">
                    <h3>Sunday Telegraph</h3>
                    <p>“Terrifying, exhilarating and unexpectedly thought-provoking.”</p>
                </div>
            </div>
        </section>

        

        <section class="footer">
            <h3>About us</h3>
            <p>GoodBooks Publishing Rights © Suzanne Collins <br> © 2021 Suzanne Collins. All rights reserved. GoodBooks Has No Place In SurvivalTM.<br> All related titles, logos, symbols and characters are trademarks of Suzanne Collins.</p>
            <div class="icons">
                <i class="fa fa-facebook"></i>
                <i class="fa fa-instagram"></i>
                <i class="fa fa-twitter"></i>
                <i class="fa fa-linkedin"></i>
            </div>
            
        </section>
        <script>
            function toggleMenu(){
                const menuToggle = document.querySelector('.menuToggle');
                const navigation = document.querySelector('.navigation');
                menuToggle.classList.toggle('active');
                navigation.classList.toggle('active');
            }
        </script>
       
        </body>
</html>