<?php
$con=new mysqli('localhost','root','','service');

if(!$con){
    die(mysqli_error($con));
}

?>