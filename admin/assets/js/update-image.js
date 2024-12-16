const submitButtonUpdateImage = document.getElementById('image_update_button_submit');
const submitButtonDeleteImage = document.getElementById('image_delete_button_submit');
const newImagenUpdate = document.querySelector('#newImagenUpdate');

//Modificar Imagen...........................................
submitButtonUpdateImage.addEventListener('click', (e)=>{
  e.preventDefault();
  $('#imagenOption').val('update');
  let datos = new FormData($("#image_update_form")[0]);
  
  $.ajax({
      url:"ajax/update-image.ajax.php",
      method:"post",
      data:datos,
      cache:false,
      contentType:false,
      processData:false,
      dataType:"json",
      success:function(response){
          if(response.flat=='true'){
            $('#deleteProductModal').modal('hide');
            $('#messageModalTitle').html("Confirmación");
            $('#messageModalBody').html("<div style='text-align: center;'><img class='img-profile rounded-square' style='width: 50px; margin-bottom: 10px;' src='assets/images/icons/ok.png'><br/>La imagen fué modificada.</div>");
            $('#messageModal').modal('show');
            if (window.history.replaceState){
                window.history.replaceState(null,null,window.location.href);
            }
            setTimeout(function() {
                window.location = "./?accion="+document.querySelector("#page").value.trim();
            }, 2000);
          }else{
            $('#deleteProductModal').modal('hide');
            $('#messageModalTitle').html("Mensaje");
            $('#messageModalBody').html("<div style='text-align: center;'><img class='img-profile rounded-square' style='width: 50px; margin-bottom: 10px;' src='assets/images/icons/error.png'><br/>Ocurrió un error, vuelva a intentarlo.</div>");
            $('#messageModal').modal('show');
            if (window.history.replaceState){
                window.history.replaceState(null,null,window.location.href);
            }
            setTimeout(function() {
              window.location = "./?accion="+document.querySelector("#page").value.trim();
            }, 2000);
          }
      }
  }); //Fin ajax
});
//Eliminar Imagen...........................................
submitButtonDeleteImage.addEventListener('click', (e)=>{
  e.preventDefault();
  $('#imagenOption').val('delete');
    let datos = new FormData($("#image_update_form")[0]);
    $.ajax({
        url:"ajax/update-image.ajax.php",
        method:"post",
        data:datos,
        cache:false,
        contentType:false,
        processData:false,
        dataType:"json",
        success:function(response){
            if(response.flat=='true'){
              $('#deleteProductModal').modal('hide');
              $('#messageModalTitle').html("Confirmación");
              $('#messageModalBody').html("<div style='text-align: center;'><img class='img-profile rounded-square' style='width: 50px; margin-bottom: 10px;' src='assets/images/icons/ok.png'><br/>La imagen fué eliminada.</div>");
              $('#messageModal').modal('show');
              if (window.history.replaceState){
                  window.history.replaceState(null,null,window.location.href);
              }
              setTimeout(function() {
                  window.location = "./?accion="+document.querySelector("#page").value.trim();
              }, 2000);
            }else{
              $('#deleteProductModal').modal('hide');
              $('#messageModalTitle').html("Mensaje");
              $('#messageModalBody').html("<div style='text-align: center;'><img class='img-profile rounded-square' style='width: 50px; margin-bottom: 10px;' src='assets/images/icons/error.png'><br/>Ocurrió un error, vuelva a intentarlo.</div>");
              $('#messageModal').modal('show');
              if (window.history.replaceState){
                  window.history.replaceState(null,null,window.location.href);
              }
              setTimeout(function() {
                window.location = "./?accion="+document.querySelector("#page").value.trim();
              }, 2000);
            }
        }
    }); //Fin ajax

});

//Habilitar/Deshabilitar boton de imagen
newImagenUpdate.addEventListener('change', (e)=>{
  e.preventDefault();
  if(newImagenUpdate.value!=''){
    document.getElementById('image_update_button_submit').disabled = false;
  }else{
    document.getElementById('image_update_button_submit').disabled = true;
  }
});
