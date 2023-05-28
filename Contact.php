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
    
    <div class="about" id="contact-pic">
        <h1> Contact us</h1>
    </div>

        <section class="location">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d198740.0854120189!2d-77.15466315910697!3d38.893938043391614!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89b7c6de5af6e45b%3A0xc2524522d4885d2a!2sWashington%2C%20DC%2C%20USA!5e0!3m2!1sen!2slk!4v1626092805265!5m2!1sen!2slk" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </section>

        <section class="contact-us">
            <div class="row">
                <div class="contact-col">
                    <div>
                    <i class="fa fa-home"></i>
                    <div class="inline">
                    <p>601 13th Street NW Suite 900 South <br>  Washington, DC 20005</p>
                    </div>
                    </div>
                    <div>
                        <i class="fa fa-phone"></i>
                        <div class="inline">
                        <p> 011-5674938 <br> Monday to Saturday</p>
                        </div>
                    </div>
                    <div>
                        <i class="fa fa-envelope-o"></i>
                        <div class="inline">
                        <p>goodbooks-publishing@info.com <br>Email your queries to us!</p>
                        </div>
                        </div>
                </div>
               
                <div class="contact-col">
                   <form action="admin/code.php" method="POST">
                       <input type="text" name="user_name" placeholder="Enter your name" required>
                       <input type="email" name="user_email" placeholder="Enter your email address" required>
                       <input type="text" name="user_topic" placeholder="Enter your subject" required>
                       <textarea rows="8" name="user_msg" placeholder="Message" required></textarea>
                       <button type="submit" name="user_btn" class="btn" id="about-btn">Send Message</button>
                   </form>
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