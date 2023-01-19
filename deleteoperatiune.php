<?php
 include 'connect.php';
 if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];

    $sql="delete from `operatiuni` where id=$id";
    $result=mysqli_query($con,$sql);
    if($result){
        header('location:operatiuni.php');
    }else{
        die(mysqli_error($con));
    }
 }

?>