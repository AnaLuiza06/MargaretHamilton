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
		
		<div class="container-login">
		<?php
			$erro = $_GET['erro'];

			if($erro == "true"){
				?>
					<div class="msg-erro" style="display: block;">
						<p>Email e/ou Senha Invalidos</p>
					</div>
				<?php
			}else{
				?>
					<div class="msg-erro" style="display: none;">
						<p>Email e/ou Senha Invalidos</p>
					</div>
				<?php
			}
		?>
			<form class="form-login" action="../php/verifica.php" method="post">
				<h2><span>Login</span></h2>
				<div>
					<label>Email</label>
					<input type="email" name="email">
				</div>
				<div>
					<label>Senha</label>
					<input type="password" name="senha">
				</div>
				<div>
					<select size="1" name="status">
	            		<option value="0">Visitante</option>
	            		<option value="1">Administrador</option>
	          		</select>
				</div>
				<div class="btn-form">
					<button>Enviar</button>
				</div>
			</form>
		</div>
	</body>
</html>