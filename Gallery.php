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
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css">
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

    <div class="about" id="gal-pic">
        <h1> Gallery </h1>
    </div>
    
    <section class="container">
        <div class="gal-border">
            <h2>Memorable Moments</h2>
            <hr>
        </div>
        <div class="gal-horizontal">
        <?php
        include('admin/database/dbconfig.php');
        $query = "SELECT * FROM gallery";
        $query_run = mysqli_query($connection, $query);

        if(mysqli_num_rows($query_run) > 0)
        {
        foreach($query_run as $row)
        {
            
            ?>
           <div class="gal-vertical">
               <a href="admin/upload/<?php echo $row['gal_image']; ?>" class="img">
               <img src="admin/upload/<?php echo $row['gal_image']; ?>" width="250px" height="250px" > </a>
               <h6><?php echo $row['date']; ?></h6>
               <h6><?php echo $row['img_description']; ?></h6>
           </div>
           <?php

}
}
else
{
    echo "No records found";
}


?>
     
</div>
            
   </section>

  




    <style>

        .gal-horizontal{
            display: grid;
            grid-template-columns: repeat(3, minmax(14rem,1fr));
            grid-gap: 30px;
  /*background-color: #2196F3;*/
  padding: 10px;
  margin:5px;
  

        }

        .gal-vertical{
            /*background-color: rgba(255, 255, 255, 0.8);*/
  /*border: 1px solid rgba(0, 0, 0, 0.8);*/
  padding: 20px 0;
  font-size: 30px;
  text-align: center;
  transition: 0.5s;
  overflow-wrap:break-word;
        overflow:hidden;

        }

        gal-vertical img{
      transition:0.4s;
      transform: translate(30px, 2px);
        }

        .gal-vertical .img:hover img{
    transform: scale(1.4) rotate(15deg);
  }
         section p{
          font: 5px;
          font-weight: 400;
          color:#43291f;
          padding-top:10px;
          transform: translate(50px, 2px);
          word-wrap: break-word;
      }

      section h6{
          /*font-size: 1em;*/
          font-weight: 400;
          color: #432519;
          padding-top: 10px;
          font:10px;
          /*transform: translate(50px, 2px);*/
          word-wrap: break-word;
      }

      #gal-pic{
        background: url(Images/gal.jpg);
        background-repeat: no-repeat;
        background-position: center;
          background-size: cover;
      }

      .gal-border{
          height: 100px;
          width:100%;
      }

      .gal-border h2{
        padding-top: 40px;
        padding-left: 40px;
        color:#606c38;
        font-size: 36px;
        font-weight: 400;
      }

      .gal-border hr{
        width: 40%;
          transform:translate(30px, 2px);
      }

     
  @media screen and (max-width: 600px){
      .gal-border hr{
          transform: translate(100px, 2px);
      }
  }


    </style>
        
        


        

        <section class="footer" id="none">
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

            $(".gal-horizontal").magnificPopup({
                delegate:'a',
                type: 'image',
                gallery:{
                    enabled:true
                }
            });
        </script>
        </body>
</html>