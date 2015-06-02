<?php
session_start();//inicia a sessao no navegador do usuário
//isset = verificar se uma var ou uma sessao foi criada pelo php
if (!isset($_SESSION['nome']))
{
  echo "<script>alert('Você tem que está logado!');location='index.php';</script>";
  exit;
}
if ($acao == 'logout')
{
  session_destroy();
  echo "<script>alert('Obrigado!');location='index.php';</script>";
}
?>
