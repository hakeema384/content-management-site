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
                News page
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#newsmodal">
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
            $query = "SELECT * FROM news";
            $query_run = mysqli_query($connection, $query);

            if(mysqli_num_rows($query_run)>0)
            {
               
                ?>


        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
            <tr>
                <th>ID</th>
                <th>Main Heading</th>
                <th>Paragraph</th>
                <th>Image</th>
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
            <td><?php echo $row['news_id'] ?></td>
            <td><?php echo $row['mainheading'] ?></td>
            <td><?php echo $row['newspara'] ?></td>
            <td><?php echo '<img src="upload/'.$row['news_image'].'" width="100px;" height="100px;" alt="image">' ?>
        </td>
            <td>
                <form action="news_edit.php" method="POST">
                    <input type="hidden" name="edit_newsid" value= "<?php echo $row['news_id']; ?>">
                <button type="submit" name="edit_newsbtn" class="btn btn-success"> EDIT </button>
                </form>
            </td>
            <td>
                <form action="code.php" method="POST">
                    <input type="hidden" name="delete_newsid" value="<?php echo $row['news_id'] ?>">
                <button type="submit" name="delete_newsbtn" class="btn btn-danger"> DELETE </button>
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


<div class="modal fade" id="newsmodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add News Page details</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="code.php" method="POST" enctype="multipart/form-data">
      <div class="modal-body">
        <div class="form-group">
            <label>Main heading</label>
            <input type="text" name="mainheading" class="form-control" placeholder="Enter heading" required>
        </div>
        <div class="form-group">
            <label>Paragraph </label>
            <textarea type="text" name="newspara" class="form-control" placeholder="Enter paragraph" required>
            </textarea>
        </div>
        <div class="form-group">
            <label>Image </label>
            <input type="file" name="second_image" class="form-control" required>
        </div>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" name="save_news" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>




<?php 
include('include/scripts.php');
include('include/footer.php');
?>     