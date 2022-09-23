  <?php

    include ("./conexao.php");
    // Puxando Dados
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $status = $_POST['status'];

    $consulta = mysqli_query($cn, "SELECT * FROM `cadastro` WHERE `email` = '$email'");
	  $exibe = mysqli_fetch_all($consulta, MYSQLI_ASSOC);

    print_r($exibe);
    if(count($exibe) > 0){
      echo "<script>window.location='../html/cadastro.php?existe=true'</script>";
    }
    else{
      $sql = "INSERT INTO `cadastro`(`nome`, `email`, `senha`, `status`) VALUES ('$nome', '$email', '$senha', '$status')";
		  // print_r($sql);
		  $incluir = mysqli_query($cn, $sql);
    }  	    
  ?>







