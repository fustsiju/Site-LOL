<?php
	include ("conexao.php");
	$cod = $_GET['cod'];
	$sql = "DELETE FROM contato WHERE cod=$cod;";
	mysqli_query($con, $sql);
	
	header("refresh:0; URL=lista.php");
?>	