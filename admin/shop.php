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
                Shop page
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#shopmodal">
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
            $query = "SELECT * FROM shop";
            $query_run = mysqli_query($connection, $query);

            if(mysqli_num_rows($query_run)>0)
            {
               
                ?>

        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
            <tr>
                <th>ID</th>
                <th>Book Name</th>
                <th>Description</th>
                <th>Price</th>
                <th>link</th>
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
            <td><?php echo $row['shop_id'] ?></td>
            <td><?php echo $row['book_name'] ?></td>
            <td><?php echo $row['book_desc'] ?></td>
            <td><?php echo $row['book_price'] ?></td>
            <td><?php echo $row['link'] ?></td>
            <td><?php echo '<img src="upload/'.$row['book_img'].'" width="100px;" height="100px;" alt="image">' ?></td>
            <td>
                <form action="shop_edit.php" method="POST">
                    <input type="hidden" name="edit_shopid" value= "<?php echo $row['shop_id']; ?>">
                <button type="submit" name="edit_shopbtn" class="btn btn-success">EDIT</button>
                </form>
            </td>
            <td>
                <form action="code.php" method="POST">
                    <input type="hidden" name="delete_shopid" value="<?php echo $row['shop_id']; ?>">
                <button type="submit" name="delete_shopbtn" class="btn btn-danger"> DELETE </button>
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

<div class="modal fade" id="shopmodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add News Page details</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="code.php" method="POST" enctype="multipart/form-data">
      <div class="modal-body">
        <div class="form-group">
            <label>Book Name</label>
            <input type="text" name="bookname" class="form-control" placeholder="Enter Book Name" required>
        </div>
        <div class="form-group">
            <label>Description </label>
            <textarea type="text" name="description" class="form-control" placeholder="Enter description" required></textarea>
        </div>
        <div class="form-group">
            <label>Price</label>
            <input type="number" name="price" class="form-control" placeholder="Enter Price" step="any" required>
        </div>
        <div class="form-group">
            <label>Link</label>
            <input type="text" name="link" class="form-control" placeholder="Enter link" required>
        </div>
        <div class="form-group">
            <label>Image </label>
            <input type="file" name="fourth_image" class="form-control" required>
        </div>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" name="save_shop" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>






<?php 
include('include/scripts.php');
include('include/footer.php');
?>    