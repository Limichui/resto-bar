const productoEspUpdate = document.querySelector("#productoEspUpdate");
const productoEngUpdate = document.querySelector("#productoEngUpdate");
const productoFraUpdate = document.querySelector("#productoFraUpdate");
const productoCatUpdate = document.querySelector("#productoCatUpdate");
const precioUpdate = document.querySelector("#precioUpdate");
const idSubCategoriUpdate = document.querySelector("#idSubCategoriaUpdate");

const submitButtonUpdate = document.getElementById('product_update_button_submit');
submitButtonUpdate.addEventListener('click', (e)=>{
  e.preventDefault();
  let bandera = true;
  if(((idSubCategoriaUpdate.value == 2)||(idSubCategoriaUpdate.value == 3))&&((productoEspUpdate.value.trim().length == 0)||(productoEngUpdate.value.trim().length == 0)||(productoFraUpdate.value.trim().length == 0)||(productoCatUpdate.value.trim().length == 0))){
      $('#messageModalBody').html("<div style='text-align: center;'><img class='img-profile rounded-square' style='width: 50px; margin-bottom: 10px;' src='assets/images/icons/error.png'><br/>Las casillas de los <strong>Items en: Español, Ingles, Frances, Catalán</strong> no pueden estar vacías.</div>");
      $('#messageModal').modal('show');
      setTimeout(function() {
        $('#messageModal').modal('hide');
      }, 3000);
      bandera = false;
  }else if(((idSubCategoriaUpdate.value != 2)&&(idSubCategoriaUpdate.value != 3))&&((productoEspUpdate.value.trim().length == 0)||(productoEngUpdate.value.trim().length == 0)||(productoFraUpdate.value.trim().length == 0)||(productoCatUpdate.value.trim().length == 0)||(precioUpdate.value.trim().length == 0))){
    $('#messageModalBody').html("<div style='text-align: center;'><img class='img-profile rounded-square' style='width: 50px; margin-bottom: 10px;' src='assets/images/icons/error.png'><br/>Las casillas de los <strong>Items en: Español, Ingles, Frances, Catalán</strong> y <strong>Precio</strong> no pueden estar vacías.</div>");
    $('#messageModal').modal('show');
    setTimeout(function() {
      $('#messageModal').modal('hide');
    }, 3000);
    bandera = false;
  }
  if(bandera == true){
    let datos = new FormData($("#product_update_form")[0]);
    $.ajax({
        url:"ajax/update-product.ajax.php",
        method:"post",
        data:datos,
        cache:false,
        contentType:false,
        processData:false,
        dataType:"json",
        success:function(response){
            if(response.flat=='true'){
              $('#updateProductModal').modal('hide');
              $('#messageModalTitle').html("Confirmación");
              $('#messageModalBody').html("<div style='text-align: center;'><img class='img-profile rounded-square' style='width: 50px; margin-bottom: 10px;' src='assets/images/icons/ok.png'><br/>Registro fué modificado.</div>");
              $('#messageModal').modal('show');
              if (window.history.replaceState){
                  window.history.replaceState(null,null,window.location.href);
              }
              setTimeout(function() {
                  window.location = "./?accion="+document.querySelector("#page").value.trim();
              }, 2000);
            }else{
              $('#updateProductModal').modal('hide');
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
  }
});


