<?php /*
error_reporting(0);
ini_set(“display_errors”, 0);	*/
?>

<?php /*
	$gmtDate = gmdate("D, d M Y H:i:s"); 
	header("Expires: {$gmtDate} GMT"); 
	header("Last-Modified: {$gmtDate} GMT"); 
	header("Cache-Control: no-cache, must-revalidate"); 
	header("Pragma: no-cache");
	header("Content-Type: text/html; charset=utf-8",true);
	ini_set('default_charset', 'UTF-8'); */
?>

<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Avaliador de conhecimento bruto</title>
	
	<!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
		
	<script type="text/javascript" src="js/bibliotecaAjax.js"></script>
	<script type="text/javascript" src="js/avaliador.js"></script>
	<script src="js/bootstrap.min.js"></script>

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">
	
	<noscript>Desculpe, mas seu navegador não suporta <b>JavaScript</b>, ou ele pode estar desabilitado! Sua experiência com esse sistema ficará seriamente afetada!</noscript>

	
</head>
<body>

<?php
	include('class/conecta.php');
	
	$query = mysqli_query($con,"SELECT * FROM traducao ORDER BY rand()");
	$query1 = mysqli_query($con,"SELECT * FROM traducao");
	$query2 = mysqli_query($con,"SELECT * FROM traducao ORDER BY rand()");
	
?>

<table width="100%">
<tr>
	<td>
		<a href="cadastro.php">Cadastro</a>
	</td>
	<td class="text-right">
		<a href="mostra_tudo.php">Mostra tudo cadastrado</a>
	</td>
</tr>
</table>


<div id="Banana" class="container">
<div class="col-xs-8 selectContainer">
<h1>Avaliador de conhecimento bruto</h1>

	<!-- #################################### -->

	<form id="Form0_Phrasal-verb" method="post" name="Form0_phrasal-verb" action="javascript:void%200" enctype="multipart/form-data">
		
	<?php
		$phrasal = mysqli_query($con,"SELECT * FROM traducao WHERE categoria = 'Phrasal verbs' ORDER BY rand()");
		$phrasal1 = mysqli_query($con,"SELECT * FROM traducao WHERE categoria = 'Phrasal verbs'");
		$phrasal2 = mysqli_query($con,"SELECT * FROM traducao WHERE categoria = 'Phrasal verbs' ORDER BY rand()");
	?>
		
	<div class="panel panel-primary">
	<div class="panel-body">
		

		<h3 id="categoria">
			<?php
				$search = mysqli_fetch_array($phrasal);
				echo utf8_encode($search['categoria']);
			?>
		</h3>
		<br>
			
		<input type="text" class="form-control" readonly id="ingles" name="ingles" value="<?php echo utf8_encode($search['palavra']);?>">
		&nbsp&nbsp&nbsp
		
		<select id="traducao" class="form-control" name="traducao" onChange="Send(this.value,'<?php echo utf8_encode($search['palavra']);?>')">
			<option value="">Resposta:</option>
			<?php
			while($trad = mysqli_fetch_array($phrasal1))
			{
				if(utf8_encode($trad['traducao']) == utf8_encode($search['traducao']))
				{
					$valor_verdadeiro = utf8_encode($trad['traducao']);
				}
			}
			
			$cont = rand(0,5);$i = 0;
			?>
			<?php while($trad1 = mysqli_fetch_array($phrasal2)) {
				
				if($i == $cont)
				{ ?>
					<option value="<?php echo $valor_verdadeiro ?>"><?php echo $valor_verdadeiro ?></option>
		  <?php $i++;
				} 
			
				if($i >= 5)
				{
					break;
				}
				$i++;	?>
			<option value="<?php echo utf8_encode($trad1['traducao']) ?>"><?php echo utf8_encode($trad1['traducao'])?></option>
		<?php	}?>

		</select>
		
		&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
		<hr>
		
		<div class=text-right>
			<input type="button" class="btn btn-success"  name="answer" id="answer" onClick="Mostra_resposta()" value="Answer">
		</div>
		<br>
		
		<label id="resposta" style="display:none;">
			<?php
				echo utf8_encode($search['traducao']);
			?>
		</label>
				
	</div>
	</div>
	</form>
	
	<!-- ############################################################ -->
	
	<form id="Form1_Preposition" method="post" name="Form1_preposition" action="javascript:void%200" enctype="multipart/form-data">
	
	<?php
		$preposition = mysqli_query($con,"SELECT * FROM traducao WHERE categoria = 'Preposition' ORDER BY rand()");
		$preposition1 = mysqli_query($con,"SELECT * FROM traducao WHERE categoria = 'Preposition'");
		$preposition2 = mysqli_query($con,"SELECT * FROM traducao WHERE categoria = 'Preposition' ORDER BY rand()");
	?>
	
	<div class="panel panel-primary">
	<div class="panel-body">
	
		<h3 id="categoria">
			<?php
				$search1 = mysqli_fetch_array($preposition);
				echo utf8_encode($search1['categoria']);
			?>
		</h3>
		<br>
			
		<input type="text" class="form-control" readonly id="ingles" value="<?php echo utf8_encode($search1['palavra']);?>">
		&nbsp&nbsp&nbsp
		
		<select id="traducao" class="form-control" name="traducao" onChange="Send(this.value,'<?php echo utf8_encode($search1['palavra']);?>')">
			<option value="">Resposta:</option>
			<?php
			while($trad = mysqli_fetch_array($preposition1))
			{
				if(utf8_encode($trad['traducao']) == utf8_encode($search1['traducao']))
				{
					$valor_verdadeiro = utf8_encode($trad['traducao']);
				}
			}
			
			$cont = rand(0,5);$i = 0;
			?>
			<?php while($trad1 = mysqli_fetch_array($preposition2)) {
				
				if($i == $cont)
				{ ?>
					<option value="<?php echo $valor_verdadeiro ?>"><?php echo $valor_verdadeiro ?></option>
		  <?php $i++;
				} 
			
				if($i >= 5)
				{
					break;
				}
				$i++;	?>
			<option value="<?php echo utf8_encode($trad1['traducao']) ?>"><?php echo utf8_encode($trad1['traducao'])?></option>
		<?php	}?>

		</select>
		
		&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
		<hr>
		
		<div class=text-right>
			<input type="button" class="btn btn-success"  name="answer" id="answer" onClick="Mostra_resposta()" value="Answer">
		</div>
		<br>
		
		<label id="resposta" style="display:none;">
			<?php
				echo utf8_encode($search1['traducao']);
			?>
		</label>
				
	</div>
	</div>
	</form>
	
	<!-- ############################################################ -->
	
	<form id="Form2_Adverb" method="post" name="Form2_adverb" action="javascript:void%200" enctype="multipart/form-data">
	
	<?php
		$adverb = mysqli_query($con,"SELECT * FROM traducao WHERE categoria = 'Adverb' ORDER BY rand()");
		$adverb1 = mysqli_query($con,"SELECT * FROM traducao WHERE categoria = 'Adverb'");
		$adverb2 = mysqli_query($con,"SELECT * FROM traducao WHERE categoria = 'Adverb' ORDER BY rand()");
	?>
	
	<div class="panel panel-primary">
	<div class="panel-body">
		
		<h3 id="categoria">
			<?php
				$search2 = mysqli_fetch_array($adverb);
				echo utf8_encode($search2['categoria']);
			?>
		</h3>
		<br>
			
		<input type="text" class="form-control" readonly id="ingles" value="<?php echo utf8_encode($search2['palavra']);?>">
		&nbsp&nbsp&nbsp
		
		<select id="traducao" class="form-control" name="traducao" onChange="Send(this.value,'<?php echo utf8_encode($search2['palavra']);?>')">
			<option value="">Resposta:</option>
			<?php
			while($trad = mysqli_fetch_array($adverb1))
			{
				if(utf8_encode($trad['traducao']) == utf8_encode($search2['traducao']))
				{
					$valor_verdadeiro = utf8_encode($trad['traducao']);
				}
			}
			
			$cont = rand(0,5);$i = 0;
			?>
			<?php while($trad1 = mysqli_fetch_array($adverb2)) {
				
				if($i == $cont)
				{ ?>
					<option value="<?php echo $valor_verdadeiro ?>"><?php echo $valor_verdadeiro ?></option>
		  <?php $i++;
				} 
			
				if($i >= 5)
				{
					break;
				}
				$i++;	?>
			<option value="<?php echo utf8_encode($trad1['traducao']) ?>"><?php echo utf8_encode($trad1['traducao'])?></option>
		<?php	}?>

		</select>
		
		&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
		<hr>
		
		<div class=text-right>
			<input type="button" class="btn btn-success"  name="answer" id="answer" onClick="Mostra_resposta()" value="Answer">
		</div>
		<br>
		
		<label id="resposta" style="display:none;">
			<?php
				echo utf8_encode($search2['traducao']);
			?>
		</label>
				
	</div>
	</div>
	</form>
	
	<!-- ############################################################ -->
	
	<form id="Form3_Conjuctions-and-Connectors" method="post" name="Form3_Conjuctions-and-Connectors" action="javascript:void%200" enctype="multipart/form-data">
	
	<?php
		$conjuction = mysqli_query($con,"SELECT * FROM traducao WHERE categoria = 'Conjuctions and Connectors' ORDER BY rand()");
		$conjuction1 = mysqli_query($con,"SELECT * FROM traducao WHERE categoria = 'Conjuctions and Connectors'");
		$conjuction2 = mysqli_query($con,"SELECT * FROM traducao WHERE categoria = 'Conjuctions and Connectors' ORDER BY rand()");
	?>
	
	<div class="panel panel-primary">
	<div class="panel-body">
	
		<h3 id="categoria">
			<?php
				$search3 = mysqli_fetch_array($conjuction);
				echo utf8_encode($search3['categoria']);
			?>
		</h3>
		<br>
			
		<input type="text" class="form-control" readonly id="ingles" value="<?php echo utf8_encode($search3['palavra']);?>">
		&nbsp&nbsp&nbsp
		
		<select id="traducao" class="form-control" name="traducao" onChange="Send(this.value,'<?php echo utf8_encode($search3['palavra']);?>')">
			<option value="">Resposta:</option>
			<?php
			while($trad = mysqli_fetch_array($conjuction1))
			{
				if(utf8_encode($trad['traducao']) == utf8_encode($search3['traducao']))
				{
					$valor_verdadeiro = utf8_encode($trad['traducao']);
				}
			}
			
			$cont = rand(0,5);$i = 0;
			?>
			<?php while($trad1 = mysqli_fetch_array($conjuction2)) {
				
				if($i == $cont)
				{ ?>
					<option value="<?php echo $valor_verdadeiro ?>"><?php echo $valor_verdadeiro ?></option>
		  <?php $i++;
				} 
			
				if($i >= 5)
				{
					break;
				}
				$i++;	?>
			<option value="<?php echo utf8_encode($trad1['traducao']) ?>"><?php echo utf8_encode($trad1['traducao'])?></option>
		<?php	}?>

		</select>
		
		&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
		<hr>
		
		<div class=text-right>
			<input type="button" class="btn btn-success"  name="answer" id="answer" onClick="Mostra_resposta()" value="Answer">
		</div>
		<br>
		
		<label id="resposta" style="display:none;">
			<?php
				echo utf8_encode($search3['traducao']);
			?>
		</label>
				
	</div>
	</div>
	</form>
	
	<!-- ############################################################ -->
	
	<form id="Form4_False-cognate-words" method="post" name="Form4_False-cognate-words" action="javascript:void%200" enctype="multipart/form-data">
	
	<?php
		$false = mysqli_query($con,"SELECT * FROM traducao WHERE categoria = 'False cognate words' ORDER BY rand()");
		$false1 = mysqli_query($con,"SELECT * FROM traducao WHERE categoria = 'False cognate words'");
		$false2 = mysqli_query($con,"SELECT * FROM traducao WHERE categoria = 'False cognate words' ORDER BY rand()");
	?>
	
	<div class="panel panel-primary">
	<div class="panel-body">
		
		<h3 id="categoria">
			<?php
				$search4 = mysqli_fetch_array($false);
				echo utf8_encode($search4['categoria']);
			?>
		</h3>
		<br>
			
		<input type="text" class="form-control" readonly id="ingles" value="<?php echo utf8_encode($search4['palavra']);?>">
		&nbsp&nbsp&nbsp
		
		<select id="traducao" class="form-control" name="traducao" onChange="Send(this.value,'<?php echo utf8_encode($search4['palavra']);?>')">
			<option value="">Resposta:</option>
			<?php
			while($trad = mysqli_fetch_array($false1))
			{
				if(utf8_encode($trad['traducao']) == utf8_encode($search4['traducao']))
				{
					$valor_verdadeiro = utf8_encode($trad['traducao']);
				}
			}
			
			$cont = rand(0,5);$i = 0;
			?>
			<?php while($trad1 = mysqli_fetch_array($false2)) {
				
				if($i == $cont)
				{ ?>
					<option value="<?php echo $valor_verdadeiro ?>"><?php echo $valor_verdadeiro ?></option>
		  <?php $i++;
				} 
			
				if($i >= 5)
				{
					break;
				}
				$i++;	?>
			<option value="<?php echo utf8_encode($trad1['traducao']) ?>"><?php echo utf8_encode($trad1['traducao'])?></option>
		<?php	}?>

		</select>
		
		&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
		<hr>
		
		<div class=text-right>
			<input type="button" class="btn btn-success"  name="answer" id="answer" onClick="Mostra_resposta()" value="Answer">
		</div>
		<br>
		
		<label id="resposta" style="display:none;">
			<?php
				echo utf8_encode($search4['traducao']);
			?>
		</label>
				
	</div>
	</div>
	</form>
	
	<!-- ############################################################ -->
	
	<form id="theForm2" method="post" name="theForm2" action="javascript:void%200" enctype="multipart/form-data">
	
	<?php
		$busca = mysqli_query($con,"SELECT * FROM tempo_verbal ORDER BY rand()");
		$busca1 = mysqli_query($con,"SELECT * FROM tempo_verbal");
		$busca2 = mysqli_query($con,"SELECT * FROM tempo_verbal ORDER BY rand()");
	?>
	
	<div class="panel panel-primary">
	<div class="panel-body">
		
		<!--<input type="button" class="btn btn-advice" name="start" id="start" OnClick="<?php #include('class/start.php');?>" value="Start">
		<br><br> 
		
		<!--<input type="button" class="btn btn-advice" name="send" id="send" OnClick="Send()" value="Send">-->
		
		<?php 
			$choice = rand(0,2); 
			$search = mysqli_fetch_array($busca);
		?>
		
		
		<h3 id="categoria">
			<?php
				
				if($choice == 0)
				{
					echo "Past";
				}else if($choice == 1)
				{
					echo "Past Participle";
				}else
				{
					echo "Tradução";
				}
			?>
		</h3>
		<br>
			
		<input type="text" readonly class="form-control" id="infinitivo" value="<?php echo utf8_encode($search['infinitivo']);?>">
		&nbsp&nbsp&nbsp
		
		<select id="flexao" class="form-control" name="flexao" onChange="Send2(this.value)">
			<option value="">Resposta:</option>
			
			
			<?php 
				
			if($choice == 0)
			{
				while($flex = mysqli_fetch_array($busca1)) {
					
					if(utf8_encode($flex['passado']) == utf8_encode($search['passado']))
					{
						$valor_verdadeiro = utf8_encode($flex['passado']);
					}
					
				}
				$cont = rand(0,5);$i = 0;
					
				while($flex1 = mysqli_fetch_array($busca2)) {
					
					if($i == $cont)
					{
						?>
							<option value="<?php echo $valor_verdadeiro ?>"><?php echo $valor_verdadeiro ?></option>
						<?php
						$i++;
					}
					if($i >= 5)
					{
						break;
					}
					$i++;	 ?>
					
					<option value="<?php echo utf8_encode($flex1['passado']) ?>"><?php echo utf8_encode($flex1['passado'])?></option>
				<?php
					#echo "<option value={$flex1['passado']}>{$flex1['passado']}</option>";
				}			
			}
			
			if($choice == 1)
			{
				while($flex = mysqli_fetch_array($busca1)) {
					
					if(utf8_encode($flex['participio']) == utf8_encode($search['participio']))
					{
						$valor_verdadeiro = utf8_encode($flex['participio']);
					}
					
				}
				$cont = rand(0,5);$i = 0;
					
				while($flex1 = mysqli_fetch_array($busca2)) {
					
					if($i == $cont)
					{
						?>
							<option value="<?php echo $valor_verdadeiro ?>"><?php echo $valor_verdadeiro ?></option>
						<?php
						$i++;
					}
					if($i >= 5)
					{
						break;
					}
					$i++;	 ?>
					
					<option value="<?php echo utf8_encode($flex1['participio']) ?>"><?php echo utf8_encode($flex1['participio'])?></option>
				<?php 
					
					#echo "<option value={$flex1['participio']}>{$flex1['participio']}</option>";
				}			
			}
			
			if($choice == 2)
			{
				while($flex = mysqli_fetch_array($busca1)) {
					
					if(utf8_encode($flex['traducao']) == utf8_encode($search['traducao']))
					{
						$valor_verdadeiro = utf8_encode($flex['traducao']);
					}
					
				}
				$cont = rand(0,5);$i = 0;
					
				while($flex1 = mysqli_fetch_array($busca2)) {
					
					if($i == $cont)
					{
						?>
							<option value="<?php echo $valor_verdadeiro ?>"><?php echo $valor_verdadeiro ?></option>
						<?php
						$i++;
					}
					if($i >= 5)
					{
						break;
					}
					$i++;	 ?>
					
					<option value="<?php echo utf8_encode($flex1['traducao']) ?>"><?php echo utf8_encode($flex1['traducao'])?></option>
				<?php 
					
					#echo "<option value={$flex1['traducao']}>{$flex1['traducao']}</option>";
				}		
			}
			
			?>
		</select>
		
		<?php #echo $choice; ?>
		
		&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
		<hr>
		<div class=text-right>
			<input type="button" class="btn btn-success" name="answer_verb" id="answer_verb" onClick="Mostra_resposta_verbo()" value="Answer">
		</div>
		<br>
		
		<label id="resposta_verbo" style="display:none;">
			<?php
				
				if($choice == 0)
					{
						echo utf8_encode($search['passado']);
					}
					if($choice == 1)
					{
						echo utf8_encode($search['participio']);	
					}
					if($choice == 2)
					{
						echo utf8_encode($search['traducao']);
					}
			?>
		</label>
				
	</div>
	</div>
	</form>
</div>
	<div id="saida">	</div>
</div>

</body>
</html>