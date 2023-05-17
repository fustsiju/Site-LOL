<?php
	session_start();
	if($_SESSION['logado'] != "ok") header("refresh:0; URL=contato.html");
	
	include("conexao.php");
	$sql = "SELECT * FROM contato;";
	$res = mysqli_query($con, $sql);
?>

<!DOCTYPE html>
<html>
  <head>
	<link rel="icon" size="20x16" href="./img/icone.png">
    <meta charset="utf-8">
  	<meta name="author" content="Fulvio Stefanine">
    <title>League Of Legends | T.I.</title>
    <link rel="stylesheet" href="./css/style.css">
	<link rel="stylesheet" href="./css/contato.css">
  </head>
  <body>
    <header id='cabecalho'>
		<div class="header">
		<div class="header-component"><a href="https://br.leagueoflegends.com/pt/" target="_blank"><img src="https://lolstatic-a.akamaihd.net/frontpage/apps/prod/signup/pt_BR/19025e5bd85e0924c3c3c5b4c832aed92a935444/assets/pt_BR/assets/lol-logo-m.png"></a>
		<div class="menu">
			<div class="label"><a href="home.html"><span>Menu</span></div></a>
			<div class="spacer"></div>
			<div class="item"><a href="campeões.html"><span>Campeões</span></div></a>
			<div class="item"><a href="itens.html"><span>Itens</span></div></a>
			<div class="item"><a href="invocador.html"><span>Invocador</span></div></a>
			<div class="item"><a href="contato.html"><span>Contato</span></div></a>
			
		</div>
    </header>
	
	<section>
			<h1 align="center"> Login </h1>
				<table align="center">
					<tr><th>Nome</th><th>E-mail</th><th>Campeão</th><th>Rota</th><th>Tipo</th><th></th><th></th></tr>
					<?php
						while($linha = mysqli_fetch_array($res)){
							$cod = $linha['cod'];
							$nome = $linha["nome"];
							$email = $linha["email"];
							$campeao = $linha["campeao"];
							$rota = $linha["rota"];
							$tipo = $linha["tipo"];
							$lido = $linha["lido"];
							echo "	<tr><td>$nome</td><td>$email</td><td>$campeao</td><td>$rota</td><td>$tipo</td>";
							if($lido == 0) echo "<td><a href='check.php?cod=$cod'><img class='icon' src='./img/vermelho.png'/></a></td>";
							else echo "<td><img class='icon' src='./img/verde.png'/></td>";
							echo "<td><a href='apaga.php?cod=$cod'><img class='icon' src='./img/apagar.png'/></td></tr>";
						}
					?>
					</table>
		</aside>
	</section>
	
    

      <footer id='rodape'>
      <p>Fulvio Stefanine, Copyright &copy; 2019</p>
    </footer>
  </body>
</html>

