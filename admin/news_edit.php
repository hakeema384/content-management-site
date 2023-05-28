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
               Edit News Page
            </h6>
        </div>
        <div class="card-body">

        <?php
         $connection= mysqli_connect("localhost","root","","adminpanel");
        if(isset($_POST['edit_newsbtn']))
        {
            $id = $_POST['edit_newsid'];
            $query = "SELECT * FROM news WHERE news_id='$id'";
            $query_run = mysqli_query($connection, $query);

            foreach($query_run as $row)
            {
                ?>

<form action="code.php" method="POST" enctype="multipart/form-data">
           <input type="hidden" name="edit_newsid" value="<?php echo $row['news_id']; ?>">

        <div class="form-group">
            <label>Main heading </label>
            <input type="text" name="new_mainheading" value="<?php echo $row['mainheading']; ?>" class="form-control" placeholder="Enter main heading">
        </div>
        <div class="form-group">
            <label>Paragraph</label>
            <textarea type="text" name="new_newspara" value="<?php echo $row['newspara']; ?>"class="form-control" placeholder="Enter paragraph"></textarea>
        </div>
        <div class="form-group">
            <label>Image</label>
            <input type="file" name="second_image" value="<?php echo $row['news_image']; ?>"class="form-control" placeholder="Enter image">
        </div>

        <a href="news.php" class="btn btn-danger"> CANCEL </a>
        <button type="submit" name="news_updatebtn" class="btn btn-primary"> Update </button>

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