var semaforo = true;


function adicionarUsuario(nombre, correo, contrasena) {
	if(semaforo) {
		semaforo = false;
		$.ajax({
			method: "POST",
			url: base_url + "index.php/usuarios/adicionar",
			context: document.body,
			data: { 
				nombre: nombre,
				correo: correo,
				contrasena: contrasena
			},
			success: function(result){
				console.log(result.status)
				if(result.estado == 'EXITO')
				{
					$("#outputErrores").html("Usuario registrado con identicador " + result.id_usuario);
				}
				else
				{
        			$("#outputErrores").html(result.msg);
				}
        		semaforo = true;
    		}
    	});
	}
}


$(document).ready(function(){
	$("#btnRegistrar").click(function(){
		adicionarUsuario($("#inputNombre").val(), $("#inputCorreo").val(), $("#inputContrasena").val());
	});
});