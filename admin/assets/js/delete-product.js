const productoIdDelete = document.querySelector("#productoIdDelete");
const submitButtonDelete = document.getElementById('product_delete_button_submit');
submitButtonDelete.addEventListener('click', (e)=>{
  e.preventDefault();
  if(productoIdDelete.value.trim().length == 0){
    $('#deleteProductModal').modal('hide');
    $('#messageModalTitle').html("Mensaje");
    $('#messageModalBody').html("Ocurrió un error, vuelva a intentarlo");
    $('#messageModal').modal('show');
    if(window.history.replaceState){
        window.history.replaceState(null,null,window.location.href);
    }
    setTimeout(function() {
      window.location = "./?accion="+document.querySelector("#page").value.trim();
    }, 2000);
  }else{
    let datos = new FormData($("#product_delete_form")[0]);
    $.ajax({
        url:"ajax/delete-product.ajax.php",
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
              $('#messageModalBody').html("<div style='text-align: center;'><img class='img-profile rounded-square' style='width: 50px; margin-bottom: 10px;' src='assets/images/icons/ok.png'><br/>Registro fué eliminado.</div>");
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
  }
});
