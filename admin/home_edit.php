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
               Edit Home Page
            </h6>
        </div>
        <div class="card-body">

        <?php
         $connection= mysqli_connect("localhost","root","","adminpanel");
        if(isset($_POST['edit_homebtn']))
        {
            $id = $_POST['edit_homeid'];
            $query = "SELECT * FROM home WHERE home_id='$id'";
            $query_run = mysqli_query($connection, $query);

            foreach($query_run as $row)
            {
                ?>

<form action="code.php" method="POST" enctype="multipart/form-data">
           <input type="hidden" name="edit_homeid" value="<?php echo $row['home_id']; ?>">

        <div class="form-group">
            <label>Sub-heading </label>
            <input type="text" name="new_subheading" value="<?php echo $row['subheading']; ?>" class="form-control" placeholder="Enter subtitle">
        </div>
        <div class="form-group">
            <label>Second heading </label>
            <input type="email" name="new_heading"  value="<?php echo $row['secondheading']; ?>"class="form-control" placeholder="Enter second heading">
        </div>
        <div class="form-group">
            <label>Paragraph</label>
            <textarea type="text" name="new_para" value="<?php echo $row['paragraph']; ?>"class="form-control" placeholder="Enter paragraph"></textarea>
        </div>
        <div class="form-group">
            <label>Image</label>
            <input type="file" name="first_image" value="<?php echo $row['image']; ?>"class="form-control" placeholder="Enter paragraph">
        </div>

        <a href="home-public.php" class="btn btn-danger"> CANCEL </a>
        <button type="submit" name="home_updatebtn" class="btn btn-primary"> Update </button>

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