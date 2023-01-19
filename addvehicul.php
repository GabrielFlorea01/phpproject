<?php
include 'connect.php';

if(isset($_POST['submit']))
{
    $marca=$_POST['marca'];
    $model=$_POST['model'];
    $gama=$_POST['gama'];
    $operatiune=$_POST['operatiune'];

  $sql ="insert into `vehicule`(marca, model, gama, operatiune) 
  values ('$marca','$model','$gama','$operatiune')";
  $result=mysqli_query($con,$sql);
  if($result){
  header('location:vehicule.php');
  }else{
    die(mysqli_error($con));
  }



}

?>

<!doctype html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

 
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">

  <title>Add vehicul</title>
</head>

<body>
  <div class="container my-5">
    <form method="post">
      <div class="form-group">
        <label>Marca</label>
        <input type="text" class="form-control" 
        placeholder="Introdu marca" name="marca" autocomplete="off">
      </div>
      <div class="form-group">
        <label>Model</label>
        <input type="text" class="form-control" 
        placeholder="Introdu model" 
        name="model" autocomplete="off">
      </div>
      <div class="form-group">
        <label>Gama</label>
        <input type="text" class="form-control" 
        placeholder="Introdu gama" 
        name="gama" autocomplete="off">
      </div>
      <div class="form-group">
        <label>Operatiune</label>
        <input type="text" class="form-control" 
        placeholder="Introdu operatiune" 
        name="operatiune" autocomplete="off">

      <button type="submit" 
      class="btn btn-primary" name="submit">Adauga</button>

      
      
    </form>
  </div>

</html>