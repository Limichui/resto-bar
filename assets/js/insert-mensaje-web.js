const nombre = document.querySelector("#msgNombre");
const email = document.querySelector("#msgEmail");
const asunto = document.querySelector("#msgAsunto");
const mensaje = document.querySelector("#msgMensaje");

const submitButtonInsert = document.getElementById('mensaje_web_insert_button_submit');
submitButtonInsert.addEventListener('click', (e) => {
    const button = document.getElementById('mensaje_web_insert_button_submit');
    const msgError = JSON.parse(button.getAttribute('data-msg-error'));
	e.preventDefault();

	let isValid = true;

	// Limpiar mensajes de error previos
	document.querySelectorAll('.error-message').forEach(el => el.remove());

	// Validar campo "Nombre"
	if (nombre.value.trim() === '') {
		showError(nombre, msgError.nombre);
		isValid = false;
	}

	// Validar campo "Email"
    if (email.value.trim() === '') {
        showError(email, msgError.email1);
        isValid = false;
    } else if (!validateEmail(email.value.trim())) {
        showError(email, msgError.email2);
        isValid = false;
    }

 	// Validar campo "Asunto"
	if (asunto.value.trim() === '') {
		showError(asunto, msgError.asunto);
		isValid = false;
	}

	// Validar campo "Mensaje"
	if (mensaje.value.trim() === '') {
		showError(mensaje, msgError.mensaje);
		isValid = false;
	}

	// Si la validación falla, prevenir el envío del formulario
	if (!isValid) {
		return; // No continuar si hay errores
	} 

    let datos = new FormData($("#mensaje_web_insert_form")[0]);
    $.ajax({
        url: "./ajax/mensaje-web.ajax.php",
        method: "post",
        data: datos,
        cache: false,
        contentType: false,
        processData: false,
        dataType: "json",
        success: function (response) {
        if (response.flag == 'true') {
            $('#messageModalTitle').html("Confirmación");
            $('#messageModalBody').html("<div style='text-align: center;'><img class='img-profile rounded-square' style='width: 50px; margin-bottom: 10px;' src='assets/img/iconos/ok.png'><br/>"+msgError.confirmacion+"</div>");
            $('#messageModal').modal('show');
            
            if (window.history.replaceState) {
                window.history.replaceState(null, null, window.location.href);
            }
            setTimeout(function () {
                document.querySelector("#msgNombre").value = "";
                document.querySelector("#msgEmail").value = "";
                document.querySelector("#msgAsunto").value = "";
                document.querySelector("#msgMensaje").value = "";
                $('#messageModal').modal('hide');
            }, 3000);
        } else {
            $('#messageModalTitle').html("Mensaje");
            $('#messageModalBody').html("<div style='text-align: center;'><img class='img-profile rounded-square' style='width: 50px; margin-bottom: 10px;' src='assets/img/iconos/error.png'><br/>"+msgError.error+"</div>");
            $('#messageModal').modal('show');
            if (window.history.replaceState) {
                window.history.replaceState(null, null, window.location.href);
            }
            setTimeout(function () {
                document.querySelector("#msgNombre").value = "";
                document.querySelector("#msgEmail").value = "";
                document.querySelector("#msgAsunto").value = "";
                document.querySelector("#msgMensaje").value = "";
                $('#messageModal').modal('hide');
            }, 3000);
        }
        }
    }); //Fin ajax
});

function showError(input, message) {
    const error = document.createElement('div');
    error.className = 'error-message';
    error.style.color = 'red';
    error.style.fontSize = '0.9em';
    error.textContent = message;
    input.parentElement.appendChild(error);
}

function validateEmail(email) {
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return emailRegex.test(email);
}