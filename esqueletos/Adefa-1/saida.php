<?php
include("verifica_sessao.php");
?>

<html>
<head><title>Sa&iacute;da</title>
</head>
<body>
<div align="center"><img src="adefa.png" width="1000" height="600" border="0"></div><br/><br/>
<div align="center"><tr><td><h2><font color="red" size="8" face="Times New Roman">VOCÊ ESTA SAINDO DO SISTEMA!!!</font></h2></td></tr></div>
</body>
</html>
<SCRIPT LANGUAGE="JavaScript" TYPE="text/javascript">
decisao = confirm("Tem certeza?");
if (decisao){
location='?acao=logout';
}
else {
location='menuprincipal.php';
}
</SCRIPT>


