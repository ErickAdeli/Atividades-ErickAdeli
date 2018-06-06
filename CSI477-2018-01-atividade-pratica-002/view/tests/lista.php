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
			<th>Id de Usuário</th>
			<th>Data</th>
			<th>Id de Procedimento</th>			

		</tr>


		<?php foreach( $lista as $linha): ?>
		<tr>
			<td> <?= $linha['id']?></td>
			<td> <?= $linha['user_id']?></td>
			<td> <?= $linha['date']?></td>
			<td> <?= $linha['procedure_id']?></td>
		</tr>
		<?php endforeach ?>

	</table>

</body>
</html>