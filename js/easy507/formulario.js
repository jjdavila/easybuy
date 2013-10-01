$(function(){
	document.crear.btnenviar.disabled = true;
	var capitan=0;

	$('#txtpass2').on('blur', function(){
		var pss1 = document.getElementById("txtpass").value;
        var pss2 = document.getElementById("txtpass2").value;
		
		if (pss1 != pss2) {
		   $(this).css("border-color","red");
		   $('#contenido').toggle('explode',1500);
		   capitan=0;
		} else {
			$(this).css("border-color","green");
			$("#txtpass").css("border-color","green");
			$("#contenido").css("display", "none");
			capitan=1;
		    //document.contact.btnenviar.disabled = false;
		}
	});
	$('#txtpass').on('blur', function(){
		var pss1 = document.getElementById("txtpass").value;
        var pss2 = document.getElementById("txtpass2").value;
		
		if (pss1 != pss2) {
		   $(this).css("border-color","red");
		   $('#contenido').toggle('explode',1500);
		   capitan=0;
		} else {
			$(this).css("border-color","green");
			$("#contenido").css("display", "none");
			capitan=1;
		    //document.contact.btnenviar.disabled = false;
		}
	});

	$('#txtemail').on('blur', function(){
		var correo = document.getElementById("txtemail").value;
		 expr = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
		    if ( !expr.test(correo) )
		    {	
		    	 $(this).css("border-color","red");
		         $('#contenido1').toggle('explode',1500);	    	
		         capitan=0;
		    }
		    else { 
		    	   $(this).css("border-color","green");
				   $("#contenido1").css("display", "none");
			       capitan=1;
				  }
});
	$('#txtnombre').on('focus', function(){
		if(capitan == 1){
			document.crear.btnenviar.disabled = false;
		}
		else{
			document.crear.btnenviar.disabled = true;
		}
	});

	$('#txtuser').on('blur', function(){
		
    if($('#txtuser').val()!= ""){
    	
    	var usuario = $('#txtuser').val();    	
        $.ajax({
            type: "GET",
            url: "../easy507index/php/validar_usuario.php",
            dataType: "html",
            data: "nick= " + usuario,
            error: function(){
                   alert("error petición ajax");
            },
            beforeSend: function(){
              $('#msgUsuario').html('<img src="../easy507index/img/loader.gif"/> verificando');
            },
            success: function( respuesta ){              
                $('#msgUsuario').html("Estado:  "+ respuesta);
              
            }
        });
    }
});
});