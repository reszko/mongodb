<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
	<title>CRUD simples com MongoDB</title>
	<script>
		function confirma() {
			if (!confirm("Confirma a exclusão do registro?")) {
				return false;
			}
			return true;
		}
	</script>
</head>

<body>
	<div class="container mt-3">
		<div class="card">
			<div class="card-header">
				CRUD simples com MongoDB
			</div>
			<div class="card-body">
				<p><?php echo anchor('user/create', 'Novo Cliente', ['class' => 'btn btn-success']) ?></p>
				<p><?php echo count($total); ?> Clientes</p>
				<table class="table">
					<thead>
						<tr>
							<th>ID</th>
							<th>Name</th>
							<th>Email</th>
							<th>Username</th>
							<th>Ações</th>
						</tr>
					</thead>
					<tbody>
						<?php if (count($total) > 0) : ?>
							<?php foreach ($users as $user) :  ?>
								<tr>
									<td><?php echo $user['_id'] ?></td>
									<td><?php echo $user['name'] ?></td>
									<td><?php echo $user['email'] ?></td>
									<td><?php echo $user['username'] ?></td>
									<td><?php echo anchor("user/edit/{$user['_id']}", 'Editar') ?> - <?php echo anchor("user/delete/{$user['_id']}", 'Excluir', ['onclick' => 'return confirma()']) ?></ td>
								</tr>
							<?php endforeach; ?>
						<?php else : ?>
							<tr>
								<td class="text-center" colspan="5">Nenhum usuário cadastrado</td>
							</tr>
						<?php endif; ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</body>

</html>