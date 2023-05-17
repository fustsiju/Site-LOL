<?php
	include ("conexao.php");
	
	$nome = $_POST['nome'];
	$email = $_POST['email'];
	$campeao = $_POST['campeao'];
	$rota = $_POST['rota'];
	$tipo = $_POST['tipo'];
	
	$sql = "INSERT INTO contato VALUES (default, '$nome', '$email', '$campeao', '$rota', '$tipo', '');";
	
	mysqli_query($con, $sql);
	header("refresh:0; URL=contato.html");
?>	