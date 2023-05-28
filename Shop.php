
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
            <ul class="navigation" id="nav" >
                <li><a href="home.php">Home</a></li>
                <li><a href="News.php">News</a></li>
                <li><a href="Gallery.php">Gallery</a></li>
                <li><a href="Shop.php">Shop</a></li>
                <li><a href="Contact.php">Contact us</a></li>
                
                </ul>
            </nav>
    </header>
    
    <div class="about" id="shop-pic">
        <h1> Shop </h1>
    </div>

   <section>
       <h2>All her books</h2>
       <hr>
       <div class="horizontal">
       <?php
       include('admin/database/dbconfig.php');
        $query = "SELECT * FROM shop";
        $query_run = mysqli_query($connection, $query);

        if(mysqli_num_rows($query_run) > 0)
        {
            foreach($query_run as $row)
        { 
            
            ?>
           
           <div class="vertical">
               
            <img src="admin/upload/<?php echo $row['book_img']; ?>" width="250px" height="250px" >
               <h4><?php echo $row['book_name']; ?></h4>
               <h6><?php echo $row['book_desc']; ?></h6>
               <h3><?php echo $row['book_price']; ?></h3>
               <a href="<?php echo $row['link']; ?>" class="btn" id="about-btn">Buy now</a>
               
           </div>
       
           <?php
}
}
else
{
    echo "No records found";
}
?>
    
</section>
 
  <style>
      section h2{
        padding-top: 40px;
        padding-left: 40px;
        color:#606c38;
        font-size: 36px;
        font-weight: 400;
      }

      section hr{
          width: 40%;
          transform:translate(30px, 2px);
          
      }

      /*section p{
          font: 20px;
          font-weight: 400;
          color:#43291f;
          padding-top:10px;
      }

      section h4,h3{
          font-size: 2em;
          font-weight: 400;
          color: #432519;
          padding-top: 10px;
          font:30px;
      }*/

      .vertical h6{
          font-size: 15px;
          color:#43291f;
        
      }

     

  @media screen and (max-width: 600px){
      section hr{
          transform:translate(140px, 10px);
      }
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