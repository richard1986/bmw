<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>bmw</title>
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
			<div id="modelos">
				<form action="#">


					<select name="anio" id="anio">
						<?php if ($anios): ?>

							<?php foreach ($anios as $row ): ?>

						<option value="<?=$row->anio_auto?>"><?=$row->anio_auto?></option>
							
							<?php endforeach; ?>
						<?php endif; ?>
					</select>
					<button>Buscar</button>
				</form>
			</div>
			<div id="content">
				<?php if ($autos): ?>

							<?php foreach ($autos as $row ): ?>
				<article>
					<div id="imagen"><img src="<?=base_url()?><?=$row->foto_auto?>" alt=""></div>
					<div id="texto">
						<h3><?=$row->modelo_auto?> (<?=$row->anio_auto?>)</h3>
						<p><?=substr($row->descripcion_auto, 0, 300)?>...</p>
					</div>
				</article>
					
				<?php endforeach; ?>
				<?php endif; ?>

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