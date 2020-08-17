<?php

	session_start();
	
?>

<!DOCTYPE HTML>
<html lang = "pl">
<head>
	<meta charset = "utf_8"/>
	<meta http-equiv = "X-UA-Compatibile" content = "IE=edge, chrome = 1"/>
	<title>Zapisz się do naszego Newslettera</title>
	<meta name = "keywords" content = "php, kurs, połączennie, MySQL">
	
	<link rel="stylesheet" href="main.css">
	
	
</head>

<body>
	<div class = "container">
	
		<header>
			<h1>Newsletter</h1>
		</header>
		
		<main>
			<article>
				<form method = "post" action = "save.php">
					<label>Podaj adres e-mail
						<input type="email" name="email" <?= (isset($_SESSION['given_email'])) ? 'value =" ' .$_SESSION['given_email'] . '"'
						: ' ' ?> >
					</label>
					<input type = "submit" value= "Zapisz się!">
					<?php
					if (isset($_SESSION['given_email']))
					{
						echo '<p>To nie jest poprawny adres</p>';
						unset($_SESSION['given_email']);
						
					}					
					
					?>
					
				</form>	
			</article>
		</main>
		
	</div>
</body>
</html>