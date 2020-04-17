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
	
	
	$infinitivo = utf8_decode($_POST['infinitivo']);
	
	$passado = utf8_decode($_POST['passado']);
	
	$participio = utf8_decode($_POST['participio']);
	
	$traducao = utf8_decode($_POST['traducao_verbo']);
	
	$categoria = "Verbo";


	$sql = "INSERT INTO tempo_verbal(infinitivo,passado,participio,traducao,categoria) VALUES ('$infinitivo','$passado','$participio','$traducao','$categoria')";
	mysqli_query($con,$sql) or die( ("<font style=Arial color=red><h1>Houve um erro na gravação dos dados</h1></font>"));
	
?>