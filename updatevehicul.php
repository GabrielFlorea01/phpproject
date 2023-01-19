<?php
include 'connect.php';
$id=$_GET['updateid'];

$sql="Select * from `vehicule` where id=$id";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);

$marca=$row['marca'];
$model=$row['model'];
$gama=$row['gama'];
$operatiune=$row['operatiune'];


if(isset($_POST['submit']))
{
  $marca=$_POST['marca'];
  $model=$_POST['model'];
  $gama=$_POST['gama'];
  $oparatiune=$_POST['operatiune'];

  $sql ="update `vehicule` set id='$id', marca='$marca', model='$model', gama='$gama', operatiune='$operatiune' where id=$id";
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

  <title>CRUD</title>
</head>

<body>
  <div class="container my-5">
    <form method="post">
      <div class="form-group">
        <label>Marca</label>
        <input type="text" class="form-control" 
        placeholder="Introdu marca" 
        name="marca" autocomplete="off" value=<?php echo $marca; ?>>
      </div>
      <div class="form-group">
        <label>Model</label>
        <input type="text" class="form-control" 
        placeholder="Introdu model" 
        name="model" autocomplete="off" value=<?php echo $model; ?>>
      </div>
      <div class="form-group">
        <label>Gama</label>
        <input type="text" class="form-control" 
        placeholder="Introdu gama" 
        name="gama" autocomplete="off" value=<?php echo $gama; ?>>
      </div>
      <div class="form-group">
        <label>Operatiune</label>
        <input type="text" class="form-control" 
        placeholder="Introdu operatiune" 
        name="operatiune" autocomplete="off" value=<?php echo $operatiune; ?>>
      </div>





      <button type="submit" class="btn btn-primary" name="submit">Update</button>
    </form>
  </div>

</html>