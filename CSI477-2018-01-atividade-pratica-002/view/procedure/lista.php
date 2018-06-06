<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Lista de Exames</title>
</head>
<body>

	<table border="1">

		<tr>
			<th>Id</th>
			<th>Nome</th>
			<th>Preço</th>			

		</tr>


		<?php foreach( $lista as $linha): ?>
		<tr>
			<td> <?= $linha['id']?></td>
			<td> <?= $linha['name']?></td>
			<td> <?= $linha['price']?></td>
		</tr>
		<?php endforeach ?>

	</table>

</body>
</html>