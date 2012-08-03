<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>bmw</title>
<?php require_once("links.php"); ?>
	</head>
	<body>
		<?php require_once("header.php"); ?>
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
						<h3><a href="<?=base_url()?>welcome/details/<?=$row->id_auto?>"><?=$row->modelo_auto?> (<?=$row->anio_auto?>)</a></h3>
						<p><?=substr($row->descripcion_auto, 0, 300)?>...</p>
					</div>
				</article>
					
				<?php endforeach; ?>
				<?php endif; ?>

			</div>
		</div>
		<?php require_once("footer.php"); ?>
	</body>
</html>