<?php 

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Vous êtes connecté</title>
</head>
<body>
	<h1>Bonjour <?php echo($_SESSION['username'])?></h1>
	<p>Vous êtes connecté ✅</p>
</body>
</html>
