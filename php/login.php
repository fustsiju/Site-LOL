<?php
	session_start();
	include "conexao.php";
	$user = $_POST['user'];
	$pass = $_POST['pass'];
	$sql = "select * from login;";
	$res = mysqli_query($con, $sql);
	$_SESSION['logado'] = "";
	while($l = mysqli_fetch_array($res)){
		$userl = $l['user'];
		$passl = $l['pass'];
		if($userl == $user && $passl == $pass){
			$_SESSION['logado'] = "ok";
			header("refresh:0; URL=lista.php");
		}else{
			header("refresh:0; URL=contato.html");
		}
	}
?>