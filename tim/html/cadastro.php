<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8"/>
		<title>Sigmund Freud</title>
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous"/>
		<link rel="icon" href="../imagens/tim1.jpg" type="image/x-icon"/>
		<link href="https://fonts.googleapis.com/css?family=Baloo+Chettan+2|Gloria+Hallelujah&display=swap" rel="stylesheet">
		
		<link rel="stylesheet" type="text/css" href="../css/style-index.css">
	</head>
	<body>

		<?php
			$status = $_GET['status'];
		?>
		<div class="container-login">
			<form class="form-login" action="../php/cadastro.php" method="post">
				<h2><span>Cadastro</span></h2>
                <div>
					<label>Nome</label>
					<input type="text" name="nome">
				</div>
				<div>
					<label>Email</label>
					<input type="email" name="email">
				</div>
				<div>
					<label>Senha</label>
					<input type="password" name="senha">
				</div>
                <div class="esconde-input">
					<label>Status</label>
					<input type="text" name="status" value="<?php echo $status;?>">
				</div>
				<div class="btn-form">
					<button type="submit">Enviar</button>
				</div>
			</form>
		</div>
	</body>
</html>