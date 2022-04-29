<?php
session_start();
include_once 'conf.php';
$pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
print_r($pdo->query("SELECT * FROM Bienvenue")->fetchAll());
?>
<!DOCTYPE html>
<html lang="fr">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Herogu test</title>
</head>

<body>
	<h1>
		<?php echo "Hello World!"; ?>
	</h1>

	<a href="./page.php">Page</a>
</body>

</html>
