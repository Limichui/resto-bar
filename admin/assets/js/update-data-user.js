const user = document.querySelector("#txtUser");
const nameUser = document.querySelector("#txtName");
const address = document.querySelector("#txtAddress");
const celPhone = document.querySelector("#txtCellPhone");
const email = document.querySelector("#txtEmail");

const submitUpdateUserData = document.getElementById('btnUpdateUserData');
submitUpdateUserData.addEventListener('click', (e)=>{
  e.preventDefault();
  /*....Validación...*/
  let flat1 = true;
  let flat2 = true;
  let flat3 = true;
  let validate = true;
  
  flat1 = validar_vacios(user, "Proporcione el usuario.");
  flat2 = validar_vacios(nameUser, "Proporcione el nombre de usuario.");
  if((flat1==true)&&(flat2==true)){
    flat1 = validar_longitud(user, "El usuario debe tener un mínimo de 6 caracteres.");
    flat2 = validar_longitud(nameUser, "El nombre de usuario debe tener un mínimo de 6 caracteres.");
    if((flat1!=true)||(flat2!=true)){
        validate = false;
    }
  }else{
    validate = false;
  }
  if(email.value.trim().length > 0){
    flat3 = validar_email(email, "El formato del correo electrónico es incorrecto.");
    if(flat3==false){
      validate = false;
    }
  }
  if(user.value.trim().length > 0){
    flat3 = validar_usuario(user, "El formato del usuario es incorrecto. Ejemplo: nombre.apellido o nombre.apellido01");
    if(flat3==false){
      validate = false;
    }
  }
  /*....Fin Validación...*/
  if(validate == false){
    return false;
  }else{
    let datos = new FormData($("#form-data-user")[0]);
    $.ajax({
          url:"ajax/update-data-user.ajax.php",
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
                user.style.border = '1px solid #E74A3B';
                $(user).next("div").html(response.msg);
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


