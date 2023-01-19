<?php
 include 'connect.php';
 if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];

    $sql="delete from `mecanici` where id=$id";
    $result=mysqli_query($con,$sql);
    if($result){
        header('location:mecanici.php');
    }else{
        die(mysqli_error($con));
    }
 }

?>