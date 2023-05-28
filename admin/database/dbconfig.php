<?php

$server_name = "localhost";
$user_name = "root";
$pass_word = "";
$db_name = "adminpanel";

$connection = mysqli_connect($server_name,$user_name,$pass_word);
$dbconfig = mysqli_select_db($connection,$db_name);

if($dbconfig)
{

}
else
{
    echo "Database connection failed";
}

?>