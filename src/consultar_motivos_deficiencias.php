<?php
include("../src/functions.php");
$sql = pg_query("select * from motivo_deficiencia");
$i = 0;
//echo $sql; exit;

?>

<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<title><?=$title;?></title>
		<link href='../image/logo.png' rel='icon' type='image/x-icon'/>
		<link rel="stylesheet" href="../css/style.css" type="text/css" media="screen"/>
	</head>
	<body align="center" bgcolor="#cccccc">
		<a href="main.php">
			<div id="toolbar" align="center">
				<img src="../image/logo2.png" class="logoIfam" />
				<img src="../image/logo3.png" class="logoCurupira" />
			</div>
		</a>
		<hr />
		<br/>
		<table width="50%" align="center" border="1">
			<tr>
				<td align="center">CODIGO</td>
				<td align="center">DESCRICAO</td>
			</tr>
			<?php
				while ($vetor = pg_fetch_array($sql))
				{
					if ($i = 0)
					{
						$cor = "#C1CDCD";
						$i = 1;
					}
					else
					{
						$cor = "#cccccc";
						$i = 0;
					}
				?>
			<tr bgcolor = "<?=$cor;?>">
				<td><?php echo $vetor['mot_id'];?></td>
				<td><?php echo $vetor['mot_descricao'];?></td>
			</tr>
			<?php } ?>
		</table>
	</body>
</html>
