const password = document.querySelector("#txtPassword");
const password1 = document.querySelector("#txtPassword1");
const password2 = document.querySelector("#txtPassword2");

const submitUpdatePassword = document.getElementById('btnUpdatePassword');
submitUpdatePassword.addEventListener('click', (e)=>{
  e.preventDefault();
  /*....Validación...*/
  let flat1 = true;
  let flat2 = true;
  let flat3 = true;
  let validate = true;
  flat1 = validar_vacios(password, "Proporcione la contraseña actual.");
  flat2 = validar_vacios(password1, "La nueva contraseña no puede estár vacía.");
  flat3 = validar_vacios(password2, "La confirmación de la nueva contraseña no puede estár vacía.");
  if((flat1==true)&&(flat2==true)&&(flat3==true)){
    flat2 = validar_longitud(password1, "La nueva contraseña debe tener un mínimo de 6 caracteres.");
    flat3 = validar_longitud(password2, "La confirmación de la nueva contraseña debe tener un mínimo de 6 caracteres.");
    if((flat2==true)&&(flat3==true)){
      flat3 = validar_igualdad(password1, password2, "La confirmación de la nueva contraseña no es igual que la nueva contraseña.");
      if(flat3==false){
        validate = false;
      }
    }else{
      validate = false;
    }
  }else{
    validate = false;
  }
  /*....Fin Validación...*/
  if(validate == false){
    return false;
  }else{
    let datos = new FormData($("#form-password-user")[0]);
    $.ajax({
        url:"ajax/update-password.ajax.php",
        method:"post",
        data:datos,
        cache:false,
        contentType:false,
        processData:false,
        dataType:"json",
        success:function(response){
            if(response.flat==true){
              $('#updateProductModal').modal('hide');
              $('#messageModalTitle').html("Confirmación");
              $('#messageModalBody').html("<p class='text-center'><i class='fas fa-check-circle fa-lg text-success'></i></p>"+response.msg);
              $('#messageModal').modal('show');
              if (window.history.replaceState){
                  window.history.replaceState(null,null,window.location.href);
              }
              setTimeout(function() {
                  window.location = "./?accion=profile"
              }, 2000);
            }else if(response.op==0){
              password.style.border = '1px solid #E74A3B';
              $(password).next("div").html(response.msg);
            }else{
              $('#updateProductModal').modal('hide');
              $('#messageModalTitle').html("Mensaje");
              $('#messageModalBody').html("<p class='text-center'><i class='fas fa-times-circle fa-lg text-danger'></i></p>"+response.msg);
              $('#messageModal').modal('show');
              if (window.history.replaceState){
                  window.history.replaceState(null,null,window.location.href);
              }
            }
        }
    }); //Fin ajax
  }
});

function validar_vacios(input, msg){
  let aux=input.value.trim().length;
  if(aux==0){
    input.style.border = '1px solid #E74A3B';
    $(input).next("div").html(msg);
    return false;
  }else{
    input.style.border = '1px solid #D1D3E2';
    $(input).next("div").html('');
    return true;
  }
}
function validar_longitud(input, msg){
  let aux=input.value.trim().length;
  if(aux < 6){
    input.style.border = '1px solid #E74A3B';
    $(input).next("div").html(msg);
    return false;
  }else{
    input.style.border = '1px solid #D1D3E2';
    $(input).next("div").html('');
    return true;
  }
}
function validar_igualdad(input1, input2, msg){
  if(input1.value.trim() != input2.value.trim()){
    input2.style.border = '1px solid #E74A3B';
    $(input2).next("div").html(msg);
    return false;
  }else{
    input2.style.border = '1px solid #D1D3E2';
    $(input2).next("div").html('');
    return true;
  }
}
function validar_email(input, msg){
  emailRegex = /^[-\w.%+]{1,64}@(?:[a-z0-9-]{1,63}\.){1,125}[a-z]{2,63}$/i;
  if(emailRegex.test(input.value.trim())){
    input.style.border = '1px solid #D1D3E2';
    $(input).next("div").html('');
    return true;
  }else{
    input.style.border = '1px solid #E74A3B';
    $(input).next("div").html(msg);
    return false;
  }
}
function validar_usuario(input, msg){
  userRegex = /^[A-ZÑ]+[.][A-Z0-9Ñ]+$/i; //[letras].[letra|nuemros]
  if(userRegex.test(input.value.trim())){
    input.style.border = '1px solid #D1D3E2';
    $(input).next("div").html('');
    return true;
  }else{
    input.style.border = '1px solid #E74A3B';
    $(input).next("div").html(msg);
    return false;
  }
}

