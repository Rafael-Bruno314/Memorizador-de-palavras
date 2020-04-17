<?php	/*
error_reporting(0);
ini_set(“display_errors”, 0);	*/
?>

<?php

	include('../class/conecta.php');
	$gmtDate = gmdate("D, d M Y H:i:s"); 
	header("Expires: {$gmtDate} GMT"); 
	header("Last-Modified: {$gmtDate} GMT"); 
	header("Cache-Control: no-cache, must-revalidate"); 
	header("Pragma: no-cache");
	header("Content-Type: text/html; charset=utf-8",true);
	
	
	$palavra = utf8_decode($_POST['palavra']);
	
	$traducao = utf8_decode($_POST['traducao']);
	
	$categoria = utf8_decode($_POST['categoria']);

	$sql = "INSERT INTO traducao(palavra,traducao,categoria) VALUES ('$palavra','$traducao','$categoria')";
	mysqli_query($con,$sql) or die( ("<font style=Arial color=red><h1>Houve um erro na gravação dos dados</h1></font>"));
	
?>