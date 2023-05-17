<?php
	$con = mysqli_connect("localhost", "root", "") or die ("Não foi possível conectar ao banco de dados.");
	mysqli_select_db($con, "fulvio") or die ("Não fpo possível encontrar o banco de dados.");
?>