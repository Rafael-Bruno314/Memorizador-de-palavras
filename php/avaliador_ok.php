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
	
	
	$resposta = utf8_decode($_GET['resposta']);
	
	$palavra = utf8_decode($_GET['ingles']);
	
	$sql = mysqli_query($con,"SELECT * FROM traducao");
	$numRegistros =  $sql->num_rows;
	
	$acerto = 0;
	
	if($numRegistros != 0)
	{
		while ($query = $sql -> fetch_object())
		{
			if($query -> palavra == $palavra && $query -> traducao == $resposta)
			{
				$acerto = 1;
			}
		}
	}
	
	echo $acerto;
	