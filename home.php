<?php
session_start();
if (!isset($_SESSION['loggedin'])) {
	header('Location: index.html');
	exit;
}

?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Home Page</title>
		
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
	</head>
	<body class="loggedin">
		
			<div>
				<h1>Gabix Service</h1>
				<a href="home.php"><i class="fas fa-home"></i>Home</a>
				<a href="mecanici.php"></i>Mecanici</a>
				<a href="operatiuni.php"></i>Operatiuni</a>
				<a href="vehicule.php"></i>Vehicule</a>
				<a href="piese.php"></i>Piese</a>
				<a href="profil.php"><i class="fas fa-user-circle"></i>Profil</a>
				<a href="logout.php"><i class="fas fa-sign-out-alt"></i>Logout</a>
			</div>
		</nav>
		<div class="content">
			<p>Bine ai venit, <?=$_SESSION['name']?>!</p>
		</div>
	</body>
</html>