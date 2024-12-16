const user = document.querySelector("#txtUser");
const password = document.querySelector("#txtPassword");
const msg = document.querySelector("#from-message");
const button = document.getElementById("btnIngresar");

button.addEventListener('click', (e)=>{
  e.preventDefault();
  if(user.value.trim().length == 0 && password.value.trim().length == 0){
    user.style.border = '1px solid red';
    password.style.border = '1px solid red';
    msg.innerHTML = 'El usuario y el password no pueden estar vacíos';
  }else if(user.value.trim().length == 0 && password.value.trim().length != 0){
    validateEmty(user.value, user, 'El usuario no puede estar vacío.');
  }else if(user.value.trim().length != 0 && password.value.trim().length == 0){
    validateEmty(password.value, password, 'El password no puede estar vacío.');
  }else{
    let datos = new FormData($("#form-login-user")[0]);
    $.ajax({
        url:"ajax/login.ajax.php",
        method:"post",
        data:datos,
        cache:false,
        contentType:false,
        processData:false,
        dataType:"json",
        success:function(response){
            console.log(response);
            if(response.id){
                if (window.history.replaceState){
                    window.history.replaceState(null,null,window.location.href);
                }
                window.location = "./?accion=main";
            }else{
              msg.innerHTML = "Credenciales incorrectas";
            }
        }
    }); //Fin ajax
  }
});

function validateEmty(value, input, msg){
  if(value.trim().length == 0){
    showError(input, msg);
  }else{
    hideError(input);
  }
}

function showError(input, message){
  input.style.border = '1px solid red';
  msg.innerHTML = `${message}`;

}

function hideError(input){
  input.style.border = '1px solid #CCCCCC';
  msg.innerHTML = '';
}

user.addEventListener("blur", function(e){
  validateEmty(user.value, user, 'El usuario no puede estar vacío.');
})
password.addEventListener("blur", function(e){
  validateEmty(password.value, password, 'El password no puede estar vacío.');
})