<?php
$conn =mysqli_connect('localhost','root','');
if(!$conn)
{
die("Connection Failed");
}
//echo"Connected successfully";
mysqli_select_db($conn,'dbexp');
?>
