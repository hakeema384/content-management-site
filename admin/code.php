<?php 
session_start();
$connection= mysqli_connect("localhost","root","","adminpanel");

if(isset($_POST['save_shop']))
{
    $name = $_POST['bookname'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $link = $_POST['link'];
    $image = $_FILES['fourth_image']['name'];

    $query = "INSERT INTO shop(book_name,book_desc,book_price,link,book_img) VALUES('$name','$description','$price','$link','$image')";
    $query_run = mysqli_query($connection,$query);

    if($query_run)
    {
        move_uploaded_file($_FILES['fourth_image']['tmp_name'],"upload/".basename($_FILES['fourth_image']['name']));
        $_SESSION['success'] = "The details were added successfully";
        header('Location: shop.php');

    }
    else
    {
        $_SESSION['status'] = "The details were not added";
        header('Location: shop.php');

    }
}


if(isset($_POST['shop_updatebtn']))
{
    $shop_id = $_POST['edit_shopid'];
    $bookname = $_POST['new_bookname'];
    $bookdesc = $_POST['new_description'];
    $bookprice = $_POST['new_price'];
    $link = $_POST['new_link'];
    $book_image = $_FILES['fourth_image']['name'];

    $query = "UPDATE shop SET book_name='$bookname', book_desc='$bookdesc', book_price='$bookprice', link='$link', book_img='$book_image' WHERE shop_id='$shop_id' ";
    $query_run = mysqli_query($connection,$query);
    if($query_run)
    {
        move_uploaded_file($_FILES['fourth_image']['tmp_name'],"upload/".basename($_FILES['fourth_image']['name']));
        $_SESSION['success'] = "The details were updated successfully";
        header('Location: shop.php');

    }
    else
    {
        $_SESSION['status'] = "The details were not updated";
        header('Location: shop.php');
    }

}


if(isset($_POST['delete_shopbtn']))
{
    $id = $_POST['delete_shopid'];
    $query = "DELETE FROM shop WHERE shop_id='$id' ";
    $query_run = mysqli_query($connection,$query);

    if($query_run)
    {
        $_SESSION['success'] = "Your data has been deleted";
        header('location: shop.php');

    }
    else
    {
        $_SESSION['status'] = "Deletion unsuccessful";
        header('location: shop.php');

    }
}



if(isset($_POST['loginbtn']))
{
    $loginemail = $_POST['email'];
    $loginpassword = $_POST['password'];
    $query = "SELECT * FROM register WHERE email='$loginemail' AND password='$loginpassword' ";
    $query_run = mysqli_query($connection,$query);

    if(mysqli_fetch_array($query_run))
    {
        $_SESSION['username'] = $loginemail;
        header('location: index.php');
    }
    else
    {
        $_SESSION['error'] = "Email or password did not match";
        header('location: login.php');
    }
}



if(isset($_POST['save_gallery']))
{
    $date = $_POST['date'];
    $description = $_POST['description'];
    $image = $_FILES['third_image']['name'];

    $query = "INSERT INTO gallery(date,img_description,gal_image) VALUES('$date','$description','$image')";
    $query_run = mysqli_query($connection,$query);

    if($query_run)
    {
        move_uploaded_file($_FILES['third_image']['tmp_name'],"upload/".basename($_FILES['third_image']['name']));
        $_SESSION['success'] = "The details were added successfully";
        header('Location: gallery.php');

    }
    else
    {
        $_SESSION['status'] = "The details were not added";
        header('Location: gallery.php');

    }
}

if(isset($_POST['gal_updatebtn']))
{
    $gal_id = $_POST['edit_galid'];
    $date = $_POST['new_date'];
    $description = $_POST['new_description'];
    $gal_image = $_FILES['third_image']['name'];

    $query = "UPDATE gallery SET date='$date', img_description='$description', gal_image='$gal_image' WHERE gallery_id='$gal_id' ";
    $query_run = mysqli_query($connection,$query);
    if($query_run)
    {
        move_uploaded_file($_FILES['third_image']['tmp_name'],"upload/".basename($_FILES['third_image']['name']));
        $_SESSION['success'] = "The details were updated successfully";
        header('Location: gallery.php');

    }
    else
    {
        $_SESSION['status'] = "The details were not updated";
        header('Location: gallery.php');
    }

}

if(isset($_POST['delete_galbtn']))
{
    $id = $_POST['delete_galid'];
    $query = "DELETE FROM gallery WHERE gallery_id='$id' ";
    $query_run = mysqli_query($connection,$query);

    if($query_run)
    {
        $_SESSION['success'] = "Your data has been deleted";
        header('location: gallery.php');

    }
    else
    {
        $_SESSION['status'] = "Deletion unsuccessful";
        header('location: gallery.php');

    }
}


if(isset($_POST['user_btn']))
{
    $name = $_POST['user_name'];
    $email = $_POST['user_email'];
    $topic = $_POST['user_topic'];
    $subject = $_POST['user_msg'];

    $query = "INSERT INTO message(name,email,topic,subject) VALUES('$name','$email','$topic','$subject')";
    $query_run = mysqli_query($connection,$query);

    if($query_run)
    {
        echo "<h3> Thank you. Your message has been submitted. </h3>";
        
    }
    else
    {
        echo "<h3> Sorry. Your message wasn't submitted. </h3>";

    }


}

if(isset($_POST['delete_msgbtn']))
{
    $id = $_POST['delete_msgid'];
    $query = "DELETE FROM message WHERE msg_id='$id' ";
    $query_run = mysqli_query($connection,$query);

    if($query_run)
    {
        $_SESSION['success'] = "The message has been deleted";
        header('location: contact.php');

    }
    else
    {
        $_SESSION['status'] = "Deletion unsuccessful";
        header('location: contact.php');

    }
}

if(isset($_POST['save_news']))
{
    $mainheading = $_POST['mainheading'];
    $newspara = $_POST['newspara'];
    $image = $_FILES['second_image']['name'];

    $query = "INSERT INTO news(mainheading,newspara,news_image) VALUES('$mainheading','$newspara','$image')";
    $query_run = mysqli_query($connection,$query);

    if($query_run)
    {
        move_uploaded_file($_FILES['second_image']['tmp_name'],"upload/".basename($_FILES['second_image']['name']));
        $_SESSION['success'] = "The details were added successfully";
        header('Location: news.php');

    }
    else
    {
        $_SESSION['status'] = "The details were not added";
        header('Location: news.php');

    }
}

if(isset($_POST['news_updatebtn']))
{
    $news_id = $_POST['edit_newsid'];
    $news_mainheading = $_POST['new_mainheading'];
    $news_para = $_POST['new_newspara'];
    $news_image = $_FILES['second_image']['name'];

    $query = "UPDATE news SET mainheading='$news_mainheading', newspara='$news_para', news_image='$news_image' WHERE news_id='$news_id' ";
    $query_run = mysqli_query($connection,$query);
    if($query_run)
    {
        move_uploaded_file($_FILES['second_image']['tmp_name'],"upload/".basename($_FILES['second_image']['name']));
        $_SESSION['success'] = "The details were updated successfully";
        header('Location: news.php');

    }
    else
    {
        $_SESSION['status'] = "The details were not updated";
        header('Location: news.php');
    }

}

if(isset($_POST['delete_newsbtn']))
{
    $id = $_POST['delete_newsid'];
    $query = "DELETE FROM news WHERE news_id='$id' ";
    $query_run = mysqli_query($connection,$query);

    if($query_run)
    {
        $_SESSION['success'] = "Your data has been deleted";
        header('location: news.php');

    }
    else
    {
        $_SESSION['status'] = "Deletion unsuccessful";
        header('location: news.php');

    }
}

if(isset($_POST['save_home']))
{
    $subheading = $_POST['subheading'];
    $secondheading = $_POST['secondheading'];
    $paragraph = $_POST['paragraph'];
    $image = $_FILES['first_image']['name'];

    $query = "INSERT INTO home(subheading,secondheading,paragraph,image) VALUES('$subheading','$secondheading','$paragraph','$image')";
    $query_run = mysqli_query($connection,$query);

    if($query_run)
    {
        move_uploaded_file($_FILES['first_image']['tmp_name'],"upload/".basename($_FILES['first_image']['name']));
        $_SESSION['success'] = "The details were added successfully";
        header('Location: home-public.php');

    }
    else
    {
        $_SESSION['status'] = "The details were not added";
        header('Location: home-public.php');

    }
}

if(isset($_POST['home_updatebtn']))
{
    $home_id = $_POST['edit_homeid'];
    $home_subheading = $_POST['new_subheading'];
    $home_heading = $_POST['new_heading'];
    $home_para = $_POST['new_para'];
    $home_image = $_FILES['first_image']['name'];

    $query = "UPDATE home SET subheading='$home_subheading', secondheading='$home_heading', paragraph='$home_para', image='$home_image' WHERE home_id='$home_id' ";
    $query_run = mysqli_query($connection,$query);
    if($query_run)
    {
        move_uploaded_file($_FILES['first_image']['tmp_name'],"upload/".basename($_FILES['first_image']['name']));
        $_SESSION['success'] = "The details were updated successfully";
        header('Location: home-public.php');

    }
    else
    {
        $_SESSION['status'] = "The details were not updated";
        header('Location: home-public.php');
    }

}

if(isset($_POST['registerbtn']))
{
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $cpassword = $_POST['confirmpassword'];

    if($password === $cpassword)
    {
        $query = "INSERT INTO register (username, email, password) VALUES('$username','$email','$password')";
        $query_run = mysqli_query($connection, $query);

        if($query_run)
        {
            $_SESSION['success'] = "Admin profile added";
            header('Location: register.php');
        }
        else
        {
            $_SESSION['status'] = "Admin profile not added";
            header('Location: register.php');
        }
    }
    else
    {
        $_SESSION['status'] = "Password and the re-entered password do not match";
        header('Location: register.php');
    }
}


if(isset($_POST['createaccbtn']))
{
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $cpassword = $_POST['confirmpassword'];

    if($password === $cpassword)
    {
        $query = "INSERT INTO register (username, email, password) VALUES('$username','$email','$password')";
        $query_run = mysqli_query($connection, $query);

        if($query_run)
        {
            $_SESSION['success'] = "Admin profile added";
            header('Location: index.php');
        }
        else
        {
            $_SESSION['error'] = "Admin profile not added";
            header('Location: createacc.php');
        }
    }
    else
    {
        $_SESSION['error'] = "Password and the re-entered password do not match";
        header('Location: createacc.php');
    }
}




if(isset($_POST['updatebtn']))
{
    $id = $_POST['edit_id'];
    $username = $_POST['new_username'];
    $email = $_POST['new_email'];
    $password = $_POST['new_password'];

    $query = "UPDATE register SET username='$username', email='$email', password='$password' WHERE id='$id'";
    $query_run = mysqli_query($connection,$query);

    if($query_run)
    {
        $_SESSION['success'] = "Update was successful";
        header('location: register.php');
    }
    else
    {
        $_SESSION['status'] = "Update was unsuccessful";
        header('location: register.php');
    }
}

if(isset($_POST['delete_btn']))
{
    $id = $_POST['delete_id'];
    $query = "DELETE FROM register WHERE id='$id' ";
    $query_run = mysqli_query($connection,$query);

    if($query_run)
    {
        $_SESSION['success'] = "Your data has been deleted";
        header('location: register.php');

    }
    else
    {
        $_SESSION['status'] = "Deletion unsuccessful";
        header('location: register.php');

    }
}


if(isset($_POST['delete_homebtn']))
{
    $id = $_POST['delete_homeid'];
    $query = "DELETE FROM home WHERE home_id='$id' ";
    $query_run = mysqli_query($connection,$query);

    if($query_run)
    {
        $_SESSION['success'] = "Your data has been deleted";
        header('location: home-public.php');

    }
    else
    {
        $_SESSION['status'] = "Deletion unsuccessful";
        header('location: home-public.php');

    }
}

?>