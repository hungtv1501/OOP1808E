<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Tong 2 so</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<?php
		$total = $_GET['total'] ?? '';
	?>
	<form action="server/total.php" method="POST">
		<label for="number-a">Number a: </label>
		<input type="number" name="number-a" id="number-a">
		<br>
		<label for="number-b">Number b: </label>
		<input type="number" name="number-b" id="number-b">
		<br>
		<button type="submit" name="btnTotal">Tong</button>
		<?php if($total != ''): ?>
			<p>Tong la <?=$total?></p>
		<?php endif; ?>
	</form>
</body>
</html>