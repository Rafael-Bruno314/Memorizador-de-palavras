<?php	/*
error_reporting(0);
ini_set(“display_errors”, 0);	*/
?>

<?php

	include('class/conecta.php');
	$gmtDate = gmdate("D, d M Y H:i:s"); 
	header("Expires: {$gmtDate} GMT"); 
	header("Last-Modified: {$gmtDate} GMT"); 
	header("Cache-Control: no-cache, must-revalidate"); 
	header("Pragma: no-cache");
	header("Content-Type: text/html; charset=utf-8",true);

?>

<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Show All</title>
</head>

<body>

<table width="100%">
<tr>
	<td>
		<a href="avaliador.php">Challenge</a>
	</td>
	<td class="text-right">
		<a href="cadastro.php">Cadastro</a>
	</td>
</tr>
</table>

<div class="container">

<?php 

	######################################################
	
	$sql_phrasal = mysqli_query($con,"SELECT * FROM `traducao` WHERE `categoria` = 'Phrasal verbs'");
	$numRegistros =  $sql_phrasal->num_rows;
	
	$i = 1;
	echo "<h2> Phrasal Verbs </h2>";
	print '<table border="1">';
	if($numRegistros != 0)
	{

		while ($query = $sql_phrasal -> fetch_object())
		{
			echo "<tr>";
			echo "<td>";
				echo $i;
			echo "</td>";
			echo "<td>";
				echo utf8_encode($query -> palavra);
			echo "</td>";
			echo "<td>";
				echo utf8_encode($query -> traducao);
			echo "</td>";
			echo "</tr>";
			$i++;
		}
	}
	print '</table>';
	echo "<br><br><br>";
	
	######################################################
	
	######################################################
	
	$sql_preposition = mysqli_query($con,"SELECT * FROM `traducao` WHERE `categoria` = 'Preposition'");
	$numRegistros =  $sql_preposition->num_rows;
	
	$i = 1;
	echo "<h2> Preposition </h2>";
	print '<table border="1">';
	if($numRegistros != 0)
	{

		while ($query = $sql_preposition -> fetch_object())
		{
			echo "<tr>";
			echo "<td>";
				echo $i;
			echo "</td>";
			echo "<td>";
				echo utf8_encode($query -> palavra);
			echo "</td>";
			echo "<td>";
				echo utf8_encode($query -> traducao);
			echo "</td>";
			echo "</tr>";
			$i++;
		}
	}
	print '</table>';
	echo "<br><br><br>";
	
	######################################################
	
	######################################################
	
	$sql_adverb = mysqli_query($con,"SELECT * FROM `traducao` WHERE `categoria` = 'Adverb'");
	$numRegistros =  $sql_adverb->num_rows;
	
	$i = 1;
	echo "<h2> Adverb </h2>";
	print '<table border="1">';
	if($numRegistros != 0)
	{

		while ($query = $sql_adverb -> fetch_object())
		{
			echo "<tr>";
			echo "<td>";
				echo $i;
			echo "</td>";
			echo "<td>";
				echo utf8_encode($query -> palavra);
			echo "</td>";
			echo "<td>";
				echo utf8_encode($query -> traducao);
			echo "</td>";
			echo "</tr>";
			$i++;
		}
	}
	print '</table>';
	echo "<br><br><br>";
	
	######################################################
	
	######################################################
	
	$sql_conjunctions = mysqli_query($con,"SELECT * FROM `traducao` WHERE `categoria` = 'Conjuctions and Connectors'");
	$numRegistros =  $sql_conjunctions->num_rows;
	
	$i = 1;
	echo "<h2> Conjuctions and Connectors </h2>";
	print '<table border="1">';
	if($numRegistros != 0)
	{

		while ($query = $sql_conjunctions -> fetch_object())
		{
			echo "<tr>";
			echo "<td>";
				echo $i;
			echo "</td>";
			echo "<td>";
				echo utf8_encode($query -> palavra);
			echo "</td>";
			echo "<td>";
				echo utf8_encode($query -> traducao);
			echo "</td>";
			echo "</tr>";
			$i++;
		}
	}
	print '</table>';
	echo "<br><br><br>";
	
	######################################################
	
	######################################################
	
	$sql_false = mysqli_query($con,"SELECT * FROM `traducao` WHERE `categoria` = 'False cognate words'");
	$numRegistros =  $sql_false->num_rows;
	
	$i = 1;
	echo "<h2> False cognate words </h2>";
	print '<table border="1">';
	if($numRegistros != 0)
	{

		while ($query = $sql_false -> fetch_object())
		{
			echo "<tr>";
			echo "<td>";
				echo $i;
			echo "</td>";
			echo "<td>";
				echo utf8_encode($query -> palavra);
			echo "</td>";
			echo "<td>";
				echo utf8_encode($query -> traducao);
			echo "</td>";
			echo "</tr>";
			$i++;
		}
	}
	print '</table>';
	echo "<br><br><br>";
	
	######################################################
	
	######################################################
	
	$sql_verb = mysqli_query($con,"SELECT * FROM `tempo_verbal`");
	$numRegistros =  $sql_verb->num_rows;
	
	$i = 1;
	echo "<h2> Verbs </h2>";
	print '<table border="1">';
	if($numRegistros != 0)
	{

		while ($query = $sql_verb -> fetch_object())
		{
			echo "<tr>";
			echo "<td>";
				echo $i;
			echo "</td>";
			echo "<td>";
				echo utf8_encode($query -> infinitivo);
			echo "</td>";
			echo "<td>";
				echo utf8_encode($query -> passado);
			echo "</td>";
			echo "<td>";
				echo utf8_encode($query -> participio);
			echo "</td>";
			echo "<td>";
				echo utf8_encode($query -> traducao);
			echo "</td>";
			echo "</tr>";
			$i++;
		}
	}
	print '</table>';
	echo "<br><br><br>";
	
	######################################################

?>
</div>
</body>
</html>