<?php  	

	include ("./conexao.php");
	// Puxando Dados
	$email = $_POST['email'];
	$senha = $_POST['senha'];
	$status = $_POST['status'];

	$consulta = mysqli_query($cn, "SELECT * FROM `cadastro` WHERE `email` = '$email' and `senha` = '$senha' and `status` = '$status'");
	$exibe = mysqli_fetch_all($consulta, MYSQLI_ASSOC);

    if(count($exibe) > 0){
		if($status == 0){
			// echo "<script>window.location='../html/cadastro.php?existe=true'</script>";
			echo "<script>window.location='../html/index-user.php'</script>";
			session_start();
		}
		else if($status == 1){
			// echo "<script>window.location='../html/cadastro.php?existe=true'</script>";
			echo "<script>window.location='../html/index_adm.php'</script>";
			session_start();
		}
    }
    else{
      echo "<script>window.location='../html/login-erro.php?erro=true'</script>";
    } 


?>