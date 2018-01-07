/**
 * Created by Eleazar on 11/5/2017.
 */
jQuery(document).on('submit','#formulario',function(event){
    //alert("hola");
    event.preventDefault();
    jQuery.ajax({
        url:"js.php",
        type:'POST',
        dataType: 'json',
        data:$(this).serialize(),
        beforeSend:function() {
            //$('.botonlg').val('Validando...');
            var usuario = document.getElementById("usuario").value;
            var clave = document.getElementById("clave").value;
            //var filter=/^[A-Za-z\_\-\.\s\xF1\xD1]+$/;

            if(usuario==="" ||clave===""){
                alert("No deje casillas en Blanco");
                return false;
            }else {
                $("#formulario")[0].reset();
            }
        }
    })
        .done(function(respuesta){
            console.log(respuesta);
            if(!respuesta.error){
                alert("Buen trabajo, Pero aun no se configura el acceso");
                location.href ="principal.html";
            }else {
                alert("Usuario o clave invalidas!");
                return false;
            }
        })
        .fail(function(resp){
            console.log(resp.responseText);
        })
        .always(function(){
            console.log("complete");
        })
});

