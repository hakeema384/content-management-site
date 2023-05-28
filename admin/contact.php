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
                Messages from users
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
            $query = "SELECT * FROM message";
            $query_run = mysqli_query($connection, $query);

            if(mysqli_num_rows($query_run)>0)
            {
               
                ?>
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Topic</th>
                <th>Message</th>
                <th>DELETE</th>
    </tr>
    </thead>
    <tbody>
    <?php
         while($row = mysqli_fetch_assoc($query_run))
         {
             ?>
    <tr>
            <td><?php echo $row['msg_id'] ?></td>
            <td><?php echo $row['name'] ?></td>
            <td><?php echo $row['email'] ?></td>
            <td><?php echo $row['topic'] ?></td>
            <td><?php echo $row['subject'] ?></td>
            <td>
                <form action="code.php" method="POST">
                    <input type="hidden" name="delete_msgid" value="<?php echo $row['msg_id']; ?>">
                <button type="submit" name="delete_msgbtn" class="btn btn-danger"> DELETE </button>
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



<?php 
include('include/scripts.php');
include('include/footer.php');
?>     