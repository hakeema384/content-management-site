<?php 
session_start();
include('include/header.php');
include('include/navbar.php');
include('include/topbar.php');
?>

<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">
               Edit Shop Page
            </h6>
        </div>
        <div class="card-body">

        <?php
         $connection= mysqli_connect("localhost","root","","adminpanel");
        if(isset($_POST['edit_shopbtn']))
        {
            $id = $_POST['edit_shopid'];
            $query = "SELECT * FROM shop WHERE shop_id='$id'";
            $query_run = mysqli_query($connection, $query);

            foreach($query_run as $row)
            {
                ?>

<form action="code.php" method="POST" enctype="multipart/form-data">
           <input type="hidden" name="edit_shopid" value="<?php echo $row['shop_id']; ?>">

        <div class="form-group">
            <label>Book name</label>
            <input type="text" name="new_bookname" value="<?php echo $row['book_name']; ?>" class="form-control" placeholder="Enter main heading">
        </div>
        <div class="form-group">
            <label>Description</label>
            <textarea type="text" name="new_description" value="<?php echo $row['book_desc']; ?>"class="form-control" placeholder="Enter paragraph"></textarea>
        </div>
        <div class="form-group">
            <label>Price</label>
            <textarea type="text" name="new_price" value="<?php echo $row['book_price']; ?>"class="form-control" placeholder="Enter paragraph"></textarea>
        </div>
        <div class="form-group">
            <label>Link</label>
            <textarea type="text" name="new_link" value="<?php echo $row['link']; ?>"class="form-control" placeholder="Enter paragraph"></textarea>
        </div>
        <div class="form-group">
            <label>Image</label>
            <input type="file" name="fourth_image" value="<?php echo $row['book_img']; ?>"class="form-control" placeholder="Enter image">
        </div>

        <a href="shop.php" class="btn btn-danger"> CANCEL </a>
        <button type="submit" name="shop_updatebtn" class="btn btn-primary"> Update </button>

    </form> 
               
               
               <?php
            }
        }

        ?>

        

    </div>
</div>
</div>
</div>


<?php 
include('include/scripts.php');
include('include/footer.php');
?>    