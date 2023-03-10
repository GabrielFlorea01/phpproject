<?php
session_start();

$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'root';
$DATABASE_PASS = '';
$DATABASE_NAME = 'service';

$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
if ( mysqli_connect_errno() ) {

	exit('Failed to connect to MySQL: ' . mysqli_connect_error());
}


if ( !isset($_POST['username'], $_POST['parola']) ) {
	
	exit('Te rog adauga user si parola !');
}

if ($stmt = $con->prepare('SELECT id, parola FROM users WHERE username = ?')) 
{
	$stmt->bind_param('s', $_POST['username']);
	$stmt->execute();
	$stmt->store_result();

	

	if ($stmt->num_rows > 0) {
		$stmt->bind_result($id, $parola);
		$stmt->fetch();
		
		
		if ($_POST['parola'] === $parola) {
			session_regenerate_id();
			$_SESSION['loggedin'] = TRUE;
			$_SESSION['name'] = $_POST['username'];
			$_SESSION['id'] = $id;
			header('Location: home.php');
		} else {
			
			echo 'Parola si/sau user incorecte !';
		}
	} else {
		
		echo 'Parola si/sau user incorecte !';
	}

	$stmt->close();
}

?>