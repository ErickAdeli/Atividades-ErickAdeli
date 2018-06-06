<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Lista de Exames</title>
</head>
<body>

	<table border="1">

		<tr>
			<th>Nome</th>
			<th>email</th>
			<th>Tipo</th>					

		</tr>


		<?php foreach( $lista as $linha): ?>
		<tr>
			<td> <?= $linha['name']?></td>
			<td> <?= $linha['email']?></td>
			<td> <?= $linha['tipo']?></td>

		</tr>
		<?php endforeach ?>

	</table>

</body>
</html>