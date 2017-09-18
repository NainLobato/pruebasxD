<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>QR Codes</title>
</head>
<body>
	<div>
		<h3>Código QR desde texto</h3>
		<?php echo QrCode::size(200)->generate('Nain Heriberto Lobato García');; ?>

		
	</div>
	<div>
		<h3>Código QR desde texto con símbolos especiales</h3>
		<?php echo QrCode::encoding('UTF-8')->generate('Transfórmame en un QrCode con símbolos especiales ♠♥!!');; ?>

	</div>
	<div>
		<h3>Código QR desde texto a una imagen png</h3>
		<img src="data:image/png;base64, <?php echo base64_encode(QrCode::format('png')->size(200)->generate('Transfórmame en un QrCode!')); ?> ">
	</div>
	<div>
		<h3>Código QR para enviar correo y geolocalización</h3>
		<?php echo QrCode::email('foo@bar.com', 'This is the subject.', 'This is the message body.');; ?>

		<?php echo QrCode::geo(37.822214, -122.481769);; ?>

	</div>
	<footer>
		<div class="visible-print text-center">
    		
    		<p>Escanéame para volver a la página principal.</p>
		</div>
	</footer>
</body>
</html>