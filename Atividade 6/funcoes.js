function validacao(valor, campo, grupo, alerta) {
        


        if($(valor).val() == "0"){
             $(alerta).show();
             $(grupo).addClass("has-error");
             $(campo).focus();
             return false;
           }

             $(grupo).removeClass("has-error");
             $(alerta).hide();
             return true;
 }
 
$(document).ready(function(){
  console.log("Documento carregado");
 		$("input[name='cadastrar']").click(function(){
      validarSelect("select#cidade option:checked","input[name='cidade']","#divCity", "#alertaCity");
		});
});