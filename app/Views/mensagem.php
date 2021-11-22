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
				Atenção!
			</div>
			<div class="card-body ">
				<div class="alert alert-success">
					<?php echo $mensagem; ?>
				</div>
				<p><?php echo anchor(base_url(), 'Página Inicial') ?></p>
			</div>
		</div>
	</div>
</body>

</html>