<?php  	
/*
  Verificar se existe um email enviado via POST
*/
	if(isset($_POST["email"])){
    	$email = $_POST["email"];
    	$senha = md5($_POST["senha"]);
    	$perfil = $_POST["perfil"];
    }
	$conexao = mysqli_connect("localhost","root","","tim");
	$sql = "SELECT * FROM CADASTRO WHERE EMAIL='$email' AND SENHA='$senha'";

//Executar a instrução no banco
  	$selecionado = mysqli_query($conexao, $sql);
    
//Verifica se selecionou 1 cliente
  	if(mysqli_num_rows($selecionado)==1){
//Transforma o selecionado em vetor
  		$vetor = mysqli_fetch_row($selecionado);
      
      	$perfilBanco = $vetor[5];
  		if ($perfilBanco == 1)
  			header("Location:../html/index.html");
    	else
  			header("Location:../html/admin.html");
    	//$vetorSelecionado = mysqli_fetch_row($selecionado);
  	}
  	else{
  		 echo '<p>Usuário não encontrado</p>';
  		 echo '<p><a href="../login.html">Voltar</a></p>';
  	}


?>