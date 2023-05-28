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
               Edit Gallery
            </h6>
        </div>
        <div class="card-body">

        <?php
         $connection= mysqli_connect("localhost","root","","adminpanel");
        if(isset($_POST['edit_galbtn']))
        {
            $id = $_POST['edit_galid'];
            $query = "SELECT * FROM gallery WHERE gallery_id='$id'";
            $query_run = mysqli_query($connection, $query);

            foreach($query_run as $row)
            {
                ?>

<form action="code.php" method="POST" enctype="multipart/form-data">
           <input type="hidden" name="edit_galid" value="<?php echo $row['gallery_id']; ?>">

        <div class="form-group">
            <label>Date </label>
            <input type="text" name="new_date" value="<?php echo $row['date']; ?>" class="form-control" placeholder="Enter date">
        </div>
        <div class="form-group">
            <label>Image description</label>
            <textarea type="text" name="new_description" value="<?php echo $row['img_description']; ?>"class="form-control" placeholder="Enter description"></textarea>
        </div>
        <div class="form-group">
            <label>Image</label>
            <input type="file" name="third_image" value="<?php echo $row['gal_image']; ?>"class="form-control" placeholder="Enter image">
        </div>

        <a href="gallery.php" class="btn btn-danger"> CANCEL </a>
        <button type="submit" name="gal_updatebtn" class="btn btn-primary"> Update </button>

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