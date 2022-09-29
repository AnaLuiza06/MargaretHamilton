<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8"/>
		<title>Sigmund Freud</title>
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		<link rel="icon" href="../imagens/tim1.jpg" type="image/x-icon"/>
		<link href="https://fonts.googleapis.com/css?family=Baloo+Chettan+2|Gloria+Hallelujah&display=swap" rel="stylesheet">
		
		<link rel="stylesheet" type="text/css" href="../css/style-index.css">

	</head>
	<body>
		
        <?php
            include ("../php/conexao.php");

            $consulta = mysqli_query($cn, "SELECT * from cadastro");
            $exibe = mysqli_fetch_all($consulta, MYSQLI_ASSOC);
        ?>
		<header>
            <h2>Freud</h2>
            <nav>
                <ul class="links">
                    <li><a href="#">Biografia</a></li>
                    <li><a href="#">Principais Ideias</a></li>
                    <li><a href="#">Obras</a></li>
                </ul>
            </nav>
            <div>
                <button type="button" class="btn btn-warning"><a href="../php/sair.php">Sair</a></button>
            </div>
        </header>

        <main>            
            <div class="container-tabela">
                <h2>Usuários Cadastrados</h2>
                <table class="container">
                    <thead>
                        <tr class="row">
                            <th class="col-2">ID</th>
                            <th class="col-3">Nome</th>
                            <th class="col-4">Email</th>
                            <th class="col-2">ADM</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                        if(count($exibe) < 1){
                    ?>
                        <h3>Sem Usuários Cadastrados</h3>
                    <?php
                        } else{
                            for($i = 0; $i < count($exibe); $i++){

                    ?>
                            <tr class="row">
                                <td class="col-2"><?php echo$exibe[$i]['id'];?></td>
                                <td class="col-3"><?php echo$exibe[$i]['nome'];?></td>
                                <td class="col-4"><?php echo$exibe[$i]['email'];?></td>
                                <td class="col-2"><?php echo$exibe[$i]['status'];?></td>
                                <td class="col-1">
                                    <button type="button" class="btn btn-danger"><a href="../php/deletar.php?id=<?php echo$exibe[$i]['id'];?>">X</a></button>
                                </td>
                            </tr>
                    <?php
                            }
                        }
                    ?>
                    </tbody>
                </table>
            </div>
        </main>
	</body>
</html>