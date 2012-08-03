<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Sesion</title>
		<link rel="stylesheet" type="text/css" href="<?=base_url()?>css/default.css">
		<!--[if gte IE 9]>
  <style type="text/css">
    .gradient {
       filter: none;
    }
  </style>
<![endif]-->
	</head>
	<body>
		<header>
			<div class="wrapper">
				<div id="logo"><img src="<?=base_url()?>img/bmw-logo.png"  alt=""></div>
				<?php require_once("menu.php"); ?>	
			</div>
		</header>
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
		<footer>
			<div class="wrapper">
			<div id="logo"><img src="<?=base_url()?>img/bmw-logo.png"  alt=""></div>
			<p>Desarrollado por: Richard J Paredes O, Ricardo Azuaje, Nestor Moreno y Miguel Montilla</p>
			</div>
		</footer>
	</body>
</html>