$(document).ready(function() {
    $('#contactSubmit').click(function(){
        //alert("submit: "+$('#contactName').val()+" "+$('#contactEmail').val()+" "+$('#contactMessage').val());
        $.ajax({
            // la URL para la petición
            url : 'inc/contact.php',
            // la información a enviar, (también es posible utilizar una cadena de datos)
            data : { 
                contactName : $('#contactName').val(),
                contactEmail : $('#contactEmail').val(),
                contactMessage : $('#contactMessage').val()
            },
            // especifica si será una petición POST o GET
            type : 'POST',
            // el tipo de información que se espera de respuesta
            dataType : 'json',
            // código a ejecutar si la petición es satisfactoria; la respuesta es pasada como argumento a la función
            success : function(data, textStatus, jqXHR) {
                if(data.success){
                    alert("Muchas gracias por su consulta");
                }
            },
            // código a ejecutar si la petición falla; son pasados como argumentos a la función el objeto de la petición en crudo y código de estatus de la petición
            error : function(xhr, status, error) {
                var jsonResponse = JSON.parse(xhr.responseText);
                alert(jsonResponse.message);
                //alert('Disculpe, existió un problema: '+xhr.responseText+' status: '+status);
            }
        });
    });
});