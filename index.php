<?php

include("functions.php");

if ($acao == 'autenticar')
{
	$sql    = pg_query("select * from usuarios where usu_login = '$login' and usu_senha = '$senha'");
	$vetor  = pg_fetch_array($sql);
	$linhas = pg_num_rows($sql);

	if ($linhas == 1)
	{
		session_start();
		$login = $vetor['usu_login'];
		$usuario = $vetor['usu_id'];
		$funcionario= $vetor['funcionarios_func_id'];
		$adefa   = array($login,$idusuario, $funcionario);
		$_SESSION['adefa'] = $adefa;
		echo "<script>location='main.php';</script>";
	}
	else
	{
		echo "<script>alert('Login ou Senha Inválidos');</script>";
		echo "<script>location='index.php';</script>";
	}
}
?>
<html>
	<head>
		<title><?=$title;?></title>
		 <link rel="stylesheet" href="./css/style.css" type="text/css" media="screen">
	</head>
	<body onload="document.form1.login.focus();" align="center" bgcolor="#cccccc">
		<form name="form1" method="post" action="?acao=autenticar">
		<div align="center">
			<H1><div class="topo1" style="height:40px; width: 800px" >SISTEMA ADEFA</div></H1>
		</div>
		<br><br>
		<div align="center">
			<div class="login" style="height:auto; width: 800px">
			<br>
			<table border=0>
				<tr>
					<td width="200" align="center">
						<table width="150" align="center" border="0" >
							<tr><td align="center"><b>SEJA BEM-VINDO<hr></b><br></td></tr>
							<tr><td><b>Usu&aacute;rio</b></td></tr>
							<tr><td><input type="text" name="login" id="login"></td></tr>
							<tr><td><b>Senha</b></td></tr>
							<tr><td><input type="password" name="senha" id="senha"></td></tr>
							<tr><td colspan="2" ALIGN="RIGHT"><input type="submit" class="button_e" name="bt" value="ENTRAR"></td></tr>
						</table>
					</td>
					<td width="80" align="center"><img src="image/linha.png"></td>
					<td align="center"><img src="image/logo.png"></td>
				</tr>
			</table>
			<br>
			</div>
		</div>
		<br>
		<?php include "foot.php";?>
		</form>
	</body>
</html>
