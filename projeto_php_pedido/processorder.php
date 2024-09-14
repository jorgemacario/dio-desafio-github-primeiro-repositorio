<html>
<head>
	<title>Bob Auto Peças - Resultado do Pedido</title>
</head>
<body>
	<h1>Bob Auto Peças</h1>
	<h2>Resultado do Pedido</h2>

	<?php
		echo "<p>Pedido processado em: ";
		echo date("H:i, jS F");
		echo "<br>";

		echo "<p>Seu pedido conforme solicitado:";
		echo "<br>";

		$tireqty = ($_POST['tireqty']);
		$oilqty = ($_POST['oilqty']);
		$sparkqty = ($_POST['sparkqty']);
		echo "<br>";
		echo $tireqty." pneus<br>";
		echo $oilqty." potes de óleo<br>";
		echo $sparkqty." Velas de ignição<br>";

	?>
</body>
</html>