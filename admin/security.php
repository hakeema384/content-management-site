<?php
include('database/dbconfig.php');

if($dbconfig)
{
    // echo "Database Connected";
}
else
{
    header("location: database/dbconfig.php");
}



?>
