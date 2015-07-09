<?php

include("functions.php");

?>

<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<title><?=$title;?></title>
		<link href='image/logo.png' rel='icon' type='image/x-icon'/>
		<link rel="stylesheet" href="./css/style.css" type="text/css" media="screen"/>
	</head>
	<body align="center" bgcolor="#cccccc">
		<a href="main.php">
			<div id="toolbar" align="center">
				<img src="image/logo2.png" class="logoIfam" />
				<img src="image/logo3.png" class="logoCurupira" />
			</div>
		</a>
		<hr />
		<table border="1" align="center" id="boxMaster">
			<tr><th colspan="6">Painel de Controle</th></tr>
			<tr>
				<td>
					<div class="boxOption">
						<center>
							<img src="image/cadastrar-deficientes.png" />
							<hr>
							<table>
								<tr><td><a href="cadastrar_deficiente.php">Cadastrar</a></td></tr>
								<tr><td><a href="consultar_deficientes.php">Consultar</a></td></tr>
							</table>
						</center>
					</div>
				</td>
				<td>
					<div class="boxOption">
						<center>
							<img src="image/cadastrar-tipos-deficiencia.png" />
							<hr>
							<table>
								<tr><td><a href="cadastrar_tipos_deficiencia.php">Cadastrar Tipos</a></td></tr>
								<tr><td><a href="consultar_tipos_deficiencias.php">Consultar Tipos</a></td></tr>
							</table>
						</center>
					</div>
				</td>
				<td>
					<div class="boxOption">
						<center>
							<img src="image/cadastrar-detalhes-deficiencia.png" />
							<hr>
							<table>
								<tr><td><a href="cadastrar_detalhes_deficiencia.php">Cadastrar Detalhes</a></td></tr>
								<tr><td><a href="consultar_detalhes_deficiencias.php">Consultar Detalhes</a></td></tr>
							</table>
						</center>
					</div>
				</td>
				<td>
					<div class="boxOption">
						<center>
							<img src="image/motivos-deficiencia.png" />
							<hr>
							<table>
								<tr><td><a href="cadastrar_motivo_deficiencia.php">Cadastrar Motivos</a></td></tr>
								<tr><td><a href="Consultar_motivos_deficiencia.php">Consultar Motivos</a></td></tr>
							</table>
						</center>
					</div>
				</td>
				<td>
					<div class="boxOption">
						<center>
							<img src="image/pesquisas.png" />
							<hr>
							<table>
								<tr><td><a href="pesquisas.php">Pesquisas</a></td></tr>
								<tr><td><a href="pesquisas.php">Pesquisas</a></td></tr>
							</table>
						</center>
					</div>
				</td>
			</tr>
		</table>
	<br>
	<?php include "foot.php";?>
	</body>
</html>
