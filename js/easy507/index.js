$(function(){

	// var usuario = $('#txtuser').val();    	
        $.ajax({
            type: "GET",
            url: "../easy507index/php/armar_azafata.php",
            dataType: "jsonp",
            
            error: function(){
                   alert("error petición ajax");
            },
            beforeSend: function(){
              $('#azafatas').html('<img src="../easy507index/img/loader.gif"/> verificando');
            },
            success: function( respuesta ){
            	var contador = 0;
            	var contador2 = 1;
            	var resta = 0;
            	var cantidad = 3;
            	var modal;
            $('#azafatas').html('');  
                   for (i = 0; i < respuesta.length; i++)
		            {
		            	modal ='<div id="detalleazafata'+respuesta[i].id+'" class="modal-azafata hide fade" tabindex="-1" role="dialog" aria-labelledby="signInModalLabel" aria-hidden="true"><div class="modal-header-azafata"><button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button><h3 id="signInModalLabel">Nuestras Azafatas</h3></div><div class="modal-body-azafata"><ul><img class="modal-img" src="../easy507index/img/azafatas/'+respuesta[i].foto+'" alt="thumbnail" /><li>Nombre:  '+respuesta[i].nombre+' </li><li>Edad: '+respuesta[i].edad+' </li> <li>Descripcion: '+respuesta[i].descrpcion+' </li></ul></div><div class="modal-footer"><button class="btn" data-dismiss="modal" aria-hidden="true">Salir</button></div></div>'
		            	$('body').append(modal);
		            	
		            	contador = contador +1;	
		            	if(contador<=3) {
		            		var escritura = '<div class="separator"></div><div class="slide-item media"><a class="pull-left media-thumbnail" href="#detalleazafata'+respuesta[i].id+'" data-toggle="modal" ><img class="media-object" src="../easy507index/img/azafatas/'+respuesta[i].foto+'" alt="thumbnail" /></a><div class="media-body"><h4 class="media-heading"><a href="#" class="salvador" >'+respuesta[i].nombre+'</a></h4><p>'+respuesta[i].descrpcion+'</p> </div></div>';		            		
		            			$('#azafatas1').append(escritura);
		            			//console.log(escritura);		            				            			            
		            	}
		            	else{
		            		resta = contador -cantidad;
		            				            			            
		            		var escritura = '<div class="separator"></div><div class="slide-item media"><a class="pull-left media-thumbnail" href="#detalleazafata'+respuesta[i].id+'" data-toggle="modal"><img class="media-object" src="../easy507index/img/azafatas/'+respuesta[i].foto+'" alt="thumbnail" /></a><div class="media-body"><h4 class="media-heading"><a href="#">'+respuesta[i].nombre+'</a></h4><p>'+respuesta[i].descrpcion+'</p> </div></div>';
		            		if(contador2==0){
		            			$('#azafatas1').append(escritura);

		            		}
		            		if(contador2==1){
		            			$('#azafatas2').append(escritura);
		            		}
		            		if(contador2==2){
		            			$('#azafatas3').append(escritura);
		            		}
		            		if(contador2==3){
		            			$('#azafatas4').append(escritura);
		            		}
		            		if(resta >=3 ){
		            			cantidad = cantidad + 3;
		            			contador2 = contador2 +1;
		            		}
		            	}
		            		          
		            }            
               
              
            }
        });

$(".media-object").on('click', function(){
console.log("alerta");
});

});