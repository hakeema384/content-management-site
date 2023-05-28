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
                Home page
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#homemodal">
                 ADD
                </button>
            </h6>
        </div>

        <div class="card-body">
        <?php
   
   if(isset($_SESSION['success']) && $_SESSION['success']!="")
   {
       echo '<h3 class="bg-info">'.$_SESSION['success'].'</h3>';
       unset($_SESSION['success']);
   }

   if(isset($_SESSION['status']) && $_SESSION['status']!="")
   {
       echo '<h3 class="bg-danger">'.$_SESSION['status'].'</h3>';
       unset($_SESSION['status']);
   }
?>
        <div class="table-responsive">

            <?php
            $connection = mysqli_connect("localhost","root","","adminpanel");
            $query = "SELECT * FROM home";
            $query_run = mysqli_query($connection, $query);

            if(mysqli_num_rows($query_run)>0)
            {
               
                ?>

                
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
            <tr>
                <th>ID</th>
                <th>Sub-heading</th>
                <th>Second heading</th>
                <th>Paragraph</th>
                <th>Image1</th>
                <th>EDIT</th>
                <th>DELETE</th>
    </tr>
    </thead>
    <tbody>
        <?php
         while($row = mysqli_fetch_assoc($query_run))
         {
             ?>

            <tr>
            <td><?php echo $row['home_id'] ?></td>
            <td><?php echo $row['subheading'] ?></td>
            <td><?php echo $row['secondheading'] ?></td>
            <td><?php echo $row['paragraph'] ?></td>
            <td><?php echo '<img src="upload/'.$row['image'].'" width="100px;" height="100px;" alt="image">' ?></td>
            <td>
                <form action="home_edit.php" method="POST">
                    <input type="hidden" name="edit_homeid" value= "<?php echo $row['home_id']; ?>">
                <button type="submit" name="edit_homebtn" class="btn btn-success"> EDIT </button>
                </form>
            </td>
            <td>
                <form action="code.php" method="POST">
                    <input type="hidden" name="delete_homeid" value="<?php echo $row['home_id']; ?>">
                <button type="submit" name="delete_homebtn" class="btn btn-danger"> DELETE </button>
         </form>
            </td>
            </tr>

             <?php

         }

        ?>
            </tbody>
    </table>

    <?php
            }
            else
            {
                echo "No record found";
            }

       ?>
</div>
</div>
</div>
</div>


<div class="modal fade" id="homemodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Homepage details</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="code.php" method="POST" enctype="multipart/form-data">
      <div class="modal-body">
        <div class="form-group">
            <label>Sub-heading</label>
            <input type="text" name="subheading" class="form-control" placeholder="Enter subtitle" required>
        </div>
        <div class="form-group">
            <label>Second heading </label>
            <input type="text" name="secondheading" class="form-control" placeholder="Enter second heading" required>
        </div>
        <div class="form-group">
            <label>Paragraph </label>
            <textarea type="text" name="paragraph" class="form-control" placeholder="Enter paragraph" required></textarea>
        </div>
        <div class="form-group">
            <label>Image 1 </label>
            <input type="file" name="first_image" class="form-control" required>
        </div>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" name="save_home" class="btn btn-primary">Save</button>
      </div>
      </form>
    </div>
  </div>
</div>
       

 
       
<?php 
include('include/scripts.php');
include('include/footer.php');
?>     