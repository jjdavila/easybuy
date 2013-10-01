$(function(){
	 // $('#miCampo1').validCampoFranz(' abcdefghijklmnñopqrstuvwxyzáéiou');

 $('#precio').validCampoFranz('0123456789.');
 $('#txtedad').validCampoFranz('0123456789.'); 
 $('#txtedad').on('blur', function(){
	var edad = document.getElementById("txtedad").value;
	if(edad > 50 || edad < 18){
		alert("la edad que esta introduciendo no es correcta para el sistema; favor validar!");
		$('#txtedad').val("");
	}

 });
});