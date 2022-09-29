<?php
	include ("./conexao.php");

	$id = $_GET['id'];

    $sql = "DELETE FROM `cadastro` WHERE id = '$id'";
    $deletar = mysqli_query($cn, $sql);

    echo "<script>window.location='../html/index_adm.php'</script>";?>