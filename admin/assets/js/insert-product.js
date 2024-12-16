const productoEspInsert = document.querySelector("#productoEspInsert");
const productoEngInsert = document.querySelector("#productoEngInsert");
const productoFraInsert = document.querySelector("#productoFraInsert");
const productoCatInsert = document.querySelector("#productoCatInsert");
const precioInsert = document.querySelector("#precioInsert");
const idSubCategoriaInsert = document.querySelector("#idSubCategoriaInsert");

const submitButtonInsert = document.getElementById('product_insert_button_submit');
submitButtonInsert.addEventListener('click', (e)=>{
  e.preventDefault();
  let bandera = true;
  if(((idSubCategoriaInsert.value == 2)||(idSubCategoriaInsert.value == 3))&&((productoEspInsert.value.trim().length == 0)||(productoEngInsert.value.trim().length == 0)||(productoFraInsert.value.trim().length == 0)||(productoCatInsert.value.trim().length == 0))){
      $('#messageModalBody').html("<div style='text-align: center;'><img class='img-profile rounded-square' style='width: 50px; margin-bottom: 10px;' src='assets/images/icons/error.png'><br/>Las casillas de los <strong>Items en: Español, Ingles, Frances, Catalán</strong> no pueden estar vacías.</div>");
      $('#messageModal').modal('show');
      setTimeout(function() {
        $('#messageModal').modal('hide');
      }, 3000);
      bandera = false;
  }else if(((idSubCategoriaInsert.value != 2)&&(idSubCategoriaInsert.value != 3))&&((productoEspInsert.value.trim().length == 0)||(productoEngInsert.value.trim().length == 0)||(productoFraInsert.value.trim().length == 0)||(productoCatInsert.value.trim().length == 0)||(precioInsert.value.trim().length == 0))){
    $('#messageModalBody').html("<div style='text-align: center;'><img class='img-profile rounded-square' style='width: 50px; margin-bottom: 10px;' src='assets/images/icons/error.png'><br/>Las casillas de los <strong>Items en: Español, Ingles, Frances, Catalán</strong> y <strong>Precio</strong> no pueden estar vacías.</div>");
    $('#messageModal').modal('show');
    setTimeout(function() {
      $('#messageModal').modal('hide');
    }, 3000);
    bandera = false;
  }
  if(bandera == true){
    let datos = new FormData($("#product_insert_form")[0]);
    $.ajax({
        url:"ajax/insert-product.ajax.php",
        method:"post",
        data:datos,
        cache:false,
        contentType:false,
        processData:false,
        dataType:"json",
        success:function(response){
            if(response.flat=='true'){
              $('#insertProductModal').modal('hide');
              $('#messageModalTitle').html("Confirmación");
              $('#messageModalBody').html("<div style='text-align: center;'><img class='img-profile rounded-square' style='width: 50px; margin-bottom: 10px;' src='assets/images/icons/ok.png'><br/>Registro completado.</div>");
              $('#messageModal').modal('show');
              if (window.history.replaceState){
                  window.history.replaceState(null,null,window.location.href);
              }
              setTimeout(function() {
                  window.location = "./?accion="+document.querySelector("#page").value.trim();
              }, 2000);
            }else{
              $('#insertProductModal').modal('hide');
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
