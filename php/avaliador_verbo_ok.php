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
	
	
	$resposta = ($_GET['resposta']);
	
	$infinitivo = ($_GET['infinitivo']);
	
	//echo $resposta."<br>";
	//echo $infinitivo."<br>";
	
	$sql = mysqli_query($con,"SELECT * FROM tempo_verbal");
	$numRegistros =  $sql->num_rows;
	
	$acerto = 0;
	
	if($numRegistros != 0)
	{
		while ($query = $sql -> fetch_object())
		{
			/*echo utf8_encode($query -> infinitivo)."<br>";
			echo utf8_decode($query -> traducao)."<br>";
			echo $query -> participio."<br>";
			echo $query -> passado."<br><br>";*/
			
			if( (utf8_encode($query -> infinitivo) == $infinitivo && utf8_encode($query -> traducao) == $resposta) || (utf8_encode($query -> infinitivo) == $infinitivo && utf8_encode($query -> participio) == $resposta) || (utf8_encode($query -> infinitivo) == $infinitivo && utf8_encode($query -> passado) == $resposta) )
			{
				$acerto = 1;
			}
		}
	}
	
	
	echo $acerto;
	