<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Sesion</title>
<?php require_once("links.php"); ?>
	</head>
	<body>
		<?php require_once("header.php"); ?>
		<div class="wrapper">
			
			<div id="info">
				<article>
					<div id="texto">
						<h3 class="centrado">Usuarios autorizados</h3>
						<p><form action="" method="post" accept-charset="utf-8">
							<label for="login">Usuario: </label>
							<input type="text" name="login" id="login" placeholder="Nombre de Usuario">

							<label for="pasword">Clave: </label>
							<input type="pasword" name="pasword" id="pasword" placeholder="Clave del Usuario">

							<input type="submit" value="Ingresar">
							
						</form></p>
					</div>
				</article>
			</div>
		</div>
		<?php require_once("footer.php"); ?>
	</body>
</html>