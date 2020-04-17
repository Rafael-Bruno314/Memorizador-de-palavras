function Send(resposta, ingles){
	//document.getElementById('theForm').onsubmit = enviaDados('php/avaliador_ok.php');
	//var ingles = document.getElementById("ingles").value;
	//alert(ingles);
	var url='php/avaliador_ok.php?resposta='+resposta+'&ingles='+ingles;
	
		requisicaoHTTP("GET",url,true);
	document.getElementById("resposta").style.display = "none"
}

function Send2(resposta){
	
	//alert(resposta);

	var infinitivo = document.getElementById("infinitivo").value;
	
	//alert(infinitivo);

	var url='php/avaliador_verbo_ok.php?resposta='+resposta+'&infinitivo='+infinitivo;
	
		requisicaoHTTP("GET",url,true);
	document.getElementById("resposta").style.display = "none"
}

function trataDados(){
	var info = ajax.responseText;  // obter a resposta como string
	
	//alert(info);
	
	if(info == 0)
	{
		//alert ("Tente de novo");
		var x = document.getElementById("Banana");
		var y = x.getElementsByTagName("select");
		var i;
		for(i=0;i < y.length;i++)
		{
			y[i].style.border = '1px solid red';
		}
		
		document.getElementById("flexao").style.border = '1px solid red';
		
	}else if (info == 1)
	{
		var x = document.getElementById("Banana");
		var y = x.getElementsByTagName("select");
		var i;
		for(i=0;i < y.length;i++)
		{
			y[i].style.border = '1px solid green';
		}

		document.getElementById("flexao").style.border = '1px solid green';
		window.location.reload();
	}
	
	//var div = document.getElementById("saida");
	//div.innerHTML = info;
}

function Mostra_resposta()
{	
	var x = document.getElementById("Banana");
	var y = x.getElementsByTagName("label");
	var i;
	for(i=0;i < y.length-1;i++)
	{
		y[i].style.display = "block";
	}
}

function Mostra_resposta_verbo()
{
	document.getElementById("resposta_verbo").style.display = "block"
}