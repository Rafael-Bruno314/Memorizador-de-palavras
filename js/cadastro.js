function Insert(){
		
	var palavra = document.getElementById("palavra").value;
	var traducao = document.getElementById("traducao").value;
	var categoria = document.getElementById("categoria").value;

	if(palavra != "" && traducao != "" && categoria != "")
	{
		document.getElementById('theForm').onsubmit = enviaDados('php/cadastro_ok.php',0);
		document.getElementById('theForm').reset();	
	}else{
		alert("Esses campos não podem ficar vazios!");
	}

}


function Insert_verb(){
		
	var infinitivo = document.getElementById("infinitivo").value;
	var passado = document.getElementById("passado").value;
	var participio = document.getElementById("participio").value;
	var traducao = document.getElementById("traducao_verbo").value;
	

	if(infinitivo != "To " && passado != "" && participio != "" && traducao != "")
	{
		document.getElementById('theForm2').onsubmit = enviaDados('php/cadastro_verbo_ok.php',1);
		document.getElementById('theForm2').reset();
	}else{
		alert("Esses campos não podem ficar vazios!");
	}
}


function trataDados(){
	var info = ajax.responseText;  // obter a resposta como string
	
	//var div = document.getElementById("saida");
	//alert("Cadastrado com sucesso!");
	//div.innerHTML=info;
}