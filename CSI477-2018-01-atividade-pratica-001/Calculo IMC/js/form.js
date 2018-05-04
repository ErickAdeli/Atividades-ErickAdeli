
$(document).ready(function(){


	$("button[name='calculo']").click(function(){


		var valor1 =
		parseFloat($("input[name= valor1]").val());

		//Validar - valor1
		if(isNaN(valor1)){
			//Exibe o alerta
			$("#alertaV1").show();
			//Adiciona a classe CSS de erro
			$("#grupoV1").addClass("has-error");
			//Limpa o campo
			$("input[name='valor1']").val("");
			//Define o foco	
			$("input[name='valor1']").focus();
			return;
		}

		//VALOR1 - CORRETO
		//REMOVER A CLASSE DE ERRO;
		$("#grupoV1").removeClass("has-error");
		//Ocultar o alerta - mensagem
		$("#alertaV1").hide();

		//Validar - valor2
		var valor2 =
		parseFloat($("input[name='valor2']").val());

		//Validar - valor2
		if(isNaN(valor2)){
			//Exibe o alerta
			$("#alertaV2").show();
			//Adiciona a classe CSS de erro
			$("#grupoV2").addClass("has-error");
			//Limpa o campo
			$("input[name='valor2']").val("");
			//Define o foco	
			$("input[name='valor2']").focus();
			return;
		}

		//VALOR2 - CORRETO
		//REMOVER A CLASSE DE ERRO;
		$("#grupoV2").removeClass("has-error");
		//Ocultar o alerta - mensagem
		$("#alertaV2").hide();


		var imc = valor1 / (valor2*valor2);

		var classificacao = ""

  		if (imc < 18.5) {
    		classificacao = "Subnutrição"
  		}
  		else if (imc >= 18.6 && imc <= 24.9) {
    		classificacao = "Peso saudável"
  		}
  		else if (imc >= 25 && imc <= 29.9) {
  	 		classificacao = "Sobrepeso"
  		}
  		else if (imc >= 30 && imc <= 34.9) {
    		classificacao = "Obesidade grau 1"
  		}
  		else if (imc >= 35 && imc <= 39.9) {
    		classificacao = "Obesidade grau 2"
  		}
  		else {
    		classificacao = "Obesidade grau 3"
  		}

  		var res = "IMC: " + imc.toFixed(2) + "\t\tClassificação: " + classificacao;
  		$("input[name='resultado']").val(res);

  		var p1 = 18.6 * valor2 * valor2
  		var p2 = 24.9 * valor2 * valor2

  		var pesoIdeal= "P1: " + p1.toFixed(2) + "\t\tP2: " + p2.toFixed(2);
  		$("input[name='pesoIdeal']").val(pesoIdeal);

	});
	

});