<?php
include("verifica_sessao.php");
?>

<html><head>
<title>Menu</title>
</head>
<body>
<?php
echo "Bem vindo: ".$_SESSION ['nome'][0];
?>
<div align="center"><img src="adefa.png" width="700" height="300" border="0"><br/></div>
<div align="center"><a href="deficiencia.php">ARTIGO SOBRE DEFICI&Ecirc;NCIA</a><br/><br/></div>
<div align="center"><a href="cadastro.php">CADASTRAR DEFICIENTES</a><br/><br/></div>
<div align="center"><a href="listardeficientes.php">LISTA DE DEFICIENTES</a><br/><br/></div>
<div align="center"><a href="Escolhapesquisas.php">PESQUISAS</a><br/><br/></div>
<div align="center"><a href="saida.php">SAIR DO SISTEMA</a></div>


</body>
</html>
