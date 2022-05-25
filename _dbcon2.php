<?php
$server="localhost";
$user_name="root";
$db_name="Abhra_y";
$password="";
$conn=mysqli_connect($server,$user_name,$password,$db_name);
if ($conn) {
   // echo'DATABASE CONNECTED';
}
else {
echo 'DATABASE NOT CONNECTED';
}
?>