// Archivo JScript
	function Calcular()
	{
		
		vprecio = document.getElementById("precio").value;
		vprecio = Math.round( vprecio * 100 ) / 100;
		vpeso = document.getElementById("peso").value;
		vtipo = document.getElementById("lb_kg").value;
		if(vtipo == "2" ) vpeso = vpeso * 2.20462;
		vpeso = Math.round( vpeso * 100 ) / 100;
		if ( vprecio > 0 )
		{
			$("#valorflete").addClass("valor_calculo_res");
			$("#gastos").addClass("valor_calculo_res");
			$("#preciototal").addClass("valor_calculo_res");
			$("#abono").addClass("valor_calculo_res");
			
			vvalorflete = ( 3.20 * vpeso );
			vvalorflete = Math.round( vvalorflete * 100 ) / 100;
			vgastos = vprecio * 0.12;
			vgastos = Math.round( vgastos * 100 ) / 100;
			vpreciototal = vprecio + vvalorflete + vgastos;
			vabono = vpreciototal * 0.50;
			vabono = Math.round( vabono * 100 ) / 100;
			document.getElementById("valorflete").innerHTML = Redondear( vvalorflete, 2 ); 
			document.getElementById("gastos").innerHTML = Redondear( vgastos, 2 ); 
			document.getElementById("preciototal").innerHTML  = Redondear( vpreciototal, 2 ); 
			document.getElementById("abono").innerHTML  = Redondear( vabono, 2 ); 
		 }
		else
			alert("Introduzca el precio del articulo y el peso.");
	 }
	

	function Redondear( numero, decimales ) 
	{
		var decs;
		var result = Math.round( numero * Math.pow( 10, decimales ) ) / Math.pow( 10, decimales );
		var newString = result.toString();
		if( newString.lastIndexOf(".") == -1 && numero > 0 )
		{
			decs = 0;
			newString += ".";
		 }
		else
			decs = ( newString.substring( newString.lastIndexOf(".") + 1 ) ).length;
		for(var i = 0; i < decimales - decs; i++ ) newString += "0";
		return newString; 
	 }

	function fieldNumber(objeto,NUM_ENTEROS,NUM_DECIMALES) 
	{ 
		var valorCampo; 
		var evento_key = window.event.keyCode; 
		var strParteEntera= ""; 
		var strParteDecimal= ""; 
		var numPosPunto = 0;
		if(NUM_DECIMALES == null) NUM_DECIMALES = 0;  
		if(NUM_ENTEROS == null)   NUM_ENTEROS = 0;
		switch (evento_key) { 
			case 13:
			case 48: 
			case 49: 
			case 50: 
			case 51: 
			case 52: 
			case 53: 
			case 54: 
			case 55: 
			case 56: 
			case 57:
					break;
			case 46: 
					if(NUM_DECIMALES == 0)
					{
						window.event.keyCode = 0; 
						return false; 
					 } 
					break; 
			default: 
					window.event.keyCode = 0; 
					return false; 
		 } 
		valorCampo = objeto.value;
		if(valorCampo.indexOf(".") !=-1) 
			strParteEntera = valorCampo.substr(0,(valorCampo.indexOf("."))); 
		else
			strParteEntera = valorCampo; 
		strParteDecimal = valorCampo.substr(strParteEntera.length + 1, valorCampo.length)
		  
		if(evento_key!=13)
		{     
			if(strParteEntera.length > (NUM_ENTEROS - 1) && NUM_ENTEROS !=0 && evento_key != 46 && valorCampo.indexOf(".")==-1)
			{ 
				window.event.keyCode = 0; 
				return false; 
			 }
			if (evento_key == 46 && valorCampo.indexOf(".") != -1) 
			{ 
				window.event.keyCode = 0; 
				return false; 
			 } 
			if ((numPosPunto = valorCampo.indexOf(".")) != -1) 
			{ 
				if (strParteDecimal.length > (NUM_DECIMALES - 1)) 
				{ 
					window.event.keyCode = 0; 
					return false; 
				 } 
			 }
		 }
		return true; 
	 }