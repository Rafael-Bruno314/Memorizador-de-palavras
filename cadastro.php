<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Word Register</title>
	
	<!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
		
	<script type="text/javascript" src="js/bibliotecaAjax.js"></script>
	<script type="text/javascript" src="js/cadastro.js"></script>
	<script src="js/bootstrap.min.js"></script>

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">
	
	<noscript>Desculpe, mas seu navegador não suporta <b>JavaScript</b>, ou ele pode estar desabilitado! Sua experiência com esse sistema ficará seriamente afetada!</noscript>

	
</head>
<body>

<table width="100%">
<tr>
	<td>
		<a href="avaliador.php">Challenge</a>
	</td>
	<td class="text-right">
		<a href="mostra_tudo.php">Mostra tudo cadastrado</a>
	</td>
</tr>
</table>

<div class="container">
<div class="col-xs-8 selectContainer">
<h1>Word Register</h1>

	<form id="theForm" method="post" name="theForm" action="javascript:void%200" enctype="multipart/form-data">

	<div class="panel panel-primary">
	<div class="panel-body">
		
		<label>Palavra em Inglês</label>
		<input type="text" class="form-control" id="palavra" name="palavra">
		<br>
		
		<label>Tradução</label>
		<input type="text" class="form-control" id="traducao" name="traducao" Placeholder="Tradução">
		<br>
		
		<label>Categoria</label>
		<select id="categoria" class="form-control" name="categoria">
			<option value="">Categoria:</option>
			<option value="Phrasal verbs">Phrasal verbs</option>
			<option value="Preposition">Preposition</option>
			<option value="Adverb">Adverb</option>
			<option value="Conjuctions and Connectors">Conjuctions and Connectors</option>
			<option value="False cognate words">False cognate words</option>
		</select>
		
		<hr>
		
		<div class=text-center>
			<input type="submit" class="btn btn-success"  name="insert" id="insert" onClick="Insert()" value="Cadastrar">
		</div>
	</div>
	</div>
	</form>
	
	<!-- ############################################################ -->
	

	<form id="theForm2" method="post" name="theForm2" action="javascript:void%200" enctype="multipart/form-data">

	<div class="panel panel-primary">
	<div class="panel-body">
	
		
		<label>Verbo no Infinitivo</label>
		<input type="text" class="form-control" id="infinitivo" name="infinitivo" value="To ">
		<br>
		
		<label>Verbo no Passado</label>
		<input type="text" class="form-control" id="passado" name="passado">
		<br>
		
		<label>Verbo no Particípio</label>
		<input type="text" class="form-control" id="participio" name="participio">
		<br>
		
		<label>Tradução</label>
		<input type="text" class="form-control" id="traducao_verbo" name="traducao_verbo">
		<br>
		<hr>
		
		
		<div class=text-center>
			<input type="submit" class="btn btn-success"  name="insert_verb" id="insert_verb" onClick="Insert_verb()" value="Cadastrar">
		</div>
		
	</div>
	</div>
	</form>
	
</div>
	<div id="saida">	</div>
	
</div> 

</body>
</html>