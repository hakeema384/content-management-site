<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width = device-width, initial-scale = 1.0">
    <title>Suzanne Collins Books</title>
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
            <ul class="navigation" id="nav">
                <li><a href="home.php">Home</a></li>
                <li><a href="News.php">News</a></li>
                <li><a href="Gallery.php">Gallery</a></li>
                <li><a href="Shop.php">Shop</a></li>
                <li><a href="Contact.php">Contact us</a></li>
                
                </ul>
            </nav>
    </header>
    
    <div class="about" id="news-pic">
        <h1> News</h1>
    </div>

    <div class="news-border"></div>

    <?php
        include('admin/database/dbconfig.php');
        $query = "SELECT * FROM news";
        $query_run = mysqli_query($connection, $query);

        if(mysqli_num_rows($query_run) > 0)
        {
        foreach($query_run as $row)
        {
            
            ?>

    <div class="clearfix">
    
        <h1> <?php echo $row['mainheading']; ?></h1>
        <img class="img2" src="admin/upload/<?php echo $row['news_image']; ?>" width="30%" height="auto" >
          <p>
          <?php echo $row['newspara']; ?>
          </p>
          <a href="#" class="btn" id="about-btn">Continue reading</a>
         
        </div>
        <?php

}
}
else
{
    echo "No records found";
}


?>
     





        <style>
            .news-border{
                padding:20px;
                margin:10px;
            }
            .clearfix {
  border: 2px solid burlywood;
  padding: 30px;
  overflow: auto;
  margin: 15px;
}

.img2 {
  float: right;
}


    @media screen and (max-width: 600px){
        .img2{
            width:100%;
            height:auto;
        }
    }

    #news-pic{
        background: url(Images/news.jpg);
        background-repeat: no-repeat;
        background-position: center;
          background-size: cover;
    }

     </style>

    

            

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