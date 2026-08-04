<?php
error_reporting(1);
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "portfolio";

$conn = mysqli_connect($servername,$username,$password,$dbname);
if($conn)
{
   echo "connection ok";
}
else
{
    echo "connection failed" .mysqli_connect_error();
}

?>