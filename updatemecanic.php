<?php
include 'connect.php';
$id=$_GET['updateid'];

$sql="Select * from `mecanici` where id=$id";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);

$nume=$row['nume'];
$adresa=$row['adresa'];
$telefon=$row['telefon'];
$specializare=$row['specializare'];


if(isset($_POST['submit']))
{
  $nume=$_POST['nume'];
  $adresa=$_POST['adresa'];
  $telefon=$_POST['telefon'];
  $specializare=$_POST['specializare'];

  $sql ="update `mecanici` set id='$id', nume='$nume', adresa='$adresa', telefon='$telefon', specializare='$specializare' where id=$id";
  $result=mysqli_query($con,$sql);
  if($result){
    
    header('location:mecanici.php');
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
        <label>Nume</label>
        <input type="text" class="form-control" 
        placeholder="Introdu nume" 
        name="nume" autocomplete="off" value=<?php echo $nume; ?>>
      </div>
      <div class="form-group">
        <label>Adresa</label>
        <input type="text" class="form-control" 
        placeholder="Introdu adresa" 
        name="adresa" autocomplete="off" value=<?php echo $adresa; ?>>
      </div>
      <div class="form-group">
        <label>Telefon</label>
        <input type="text" class="form-control" 
        placeholder="Introdu telefon" 
        name="telefon" autocomplete="off" value=<?php echo $telefon; ?>>
      </div>
      <div class="form-group">
        <label>Specializare</label>
        <input type="text" class="form-control" 
        placeholder="Introdu specializare" 
        name="specializare" autocomplete="off" value=<?php echo $specializare; ?>>
      </div>





      <button type="submit" class="btn btn-primary" name="submit">Update</button>
    </form>
  </div>

</html>