<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
	<title>CRUD simples com MongoDB</title>
</head>

<body>
	<div class="container mt-3">
		<div class="card">
			<div class="card-header">
				Formulário de inserção/edição
			</div>
			<div class="card-body col-md-3">
				<?php echo form_open('user/store') ?>
				<div class="form-group">
					<label for="username">Username:</label>
					<input type="text" autofocus name="username" id="username" class="form-control" value="<?php echo isset($user['username']) ? $user['username'] : '' ?>">
				</div>
				<div class="form-group">
					<label for="email">Email:</label>
					<input type="email" name="email" id="email" class="form-control" value="<?php echo isset($user['email']) ? $user['email'] : '' ?>">
				</div>
				<div class="form-group">
					<label for="name">Name: </label>
					<input type="text" name="name" id="name" class="form-control" value="<?php echo isset($user['name']) ? $user['name'] : '' ?>">
				</div>
				<input type="hidden" name="id" id="id" value="<?php echo isset($user['_id']) ? $user['_id'] : '' ?>">
				<button class="btn btn-primary">Salvar</button>
				<?php echo form_close() ?>
			</div>
		</div>
	</div>
</body>

</html>