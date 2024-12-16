const submitButtonInsertDetailsItem = document.getElementById('details_item_insert_button_submit');
const submitButtonDeleteDetailsItem = document.getElementById('details_item_delete_button_submit');
const detailsDeleteId = document.querySelector("#detailsDeleteId");
const detailsProductIdInsert = document.querySelector("#detailsProductIdInsert");

const tipoDetailsInsert = document.querySelector("#tipoDetailsInsert");
const detailsItemEspInsert = document.querySelector("#detailsItemEspInsert");
const detailsItemEngInsert = document.querySelector("#detailsItemEngInsert");
const detailsItemFraInsert = document.querySelector("#detailsItemFraInsert");
const detailsItemCatInsert = document.querySelector("#detailsItemCatInsert");

//Insertar Detalle del Item...........................................
submitButtonInsertDetailsItem.addEventListener('click', (e)=>{
  e.preventDefault();
  
  let bandera = true;
  if((tipoDetailsInsert.value == 0)||(detailsItemEspInsert.value.trim().length == 0)||(detailsItemEngInsert.value.trim().length == 0)||(detailsItemFraInsert.value.trim().length == 0)||(detailsItemCatInsert.value.trim().length == 0)){
      $('#messageModalBody').html("<div style='text-align: center;'><img class='img-profile rounded-square' style='width: 50px; margin-bottom: 10px;' src='assets/images/icons/error.png'><br/>Debe seleccionar el <strong>Tipo de Detalle</strong>, y las casillas de los <strong>Items en: Español, Ingles, Frances, Catalán</strong> no pueden estar vacías.</div>");
      $('#messageModal').modal('show');
      setTimeout(function() {
        $('#messageModal').modal('hide');
      }, 3000);
      bandera = false;
  }
  if(bandera == true){
    let datos = new FormData($("#details_item_insert_form")[0]);
    $.ajax({
        url:"ajax/insert-details-product.ajax.php",
        method:"post",
        data:datos,
        cache:false,
        contentType:false,
        processData:false,
        dataType:"json",
        success:function(response){          
            if(response.id!=0){
              $('#detialsInsertItemModal').modal('hide');
              $('#messageModalTitle').html("Confirmación");
              $('#messageModalBody').html("<div style='text-align: center;'><img class='img-profile rounded-square' style='width: 50px; margin-bottom: 10px;' src='assets/images/icons/ok.png'><br/>Registro completado.</div>");
              $('#messageModal').modal('show');
              if (window.history.replaceState){
                  window.history.replaceState(null,null,window.location.href);
              }
              render_details(response.id)
              setTimeout(function() {
                $('#messageModal').modal('hide');
              }, 2000);
            }else{
              $('#detialsInsertItemModal').modal('hide');
              $('#messageModalTitle').html("Mensaje");
              $('#messageModalBody').html("<div style='text-align: center;'><img class='img-profile rounded-square' style='width: 50px; margin-bottom: 10px;' src='assets/images/icons/error.png'><br/>Ocurrió un error, vuelva a intentarlo.</div>");
              $('#messageModal').modal('show');
              if (window.history.replaceState){
                $('#messageModal').modal('hide');
              }
              render_details(response.id)
              setTimeout(function() {
                $('#messageModal').modal('hide');
              }, 2000);
            }
        }
    }); //Fin ajax
    $('#detailsItemEspInsert').val('');
    $('#detailsItemEngInsert').val('');
    $('#detailsItemFraInsert').val('');
    $('#detailsItemCatInsert').val('');
    $('#tipoDetailsInsert').val('0');
  }
});

//Eliminar Detalle del Item...........................................
submitButtonDeleteDetailsItem.addEventListener('click', (e)=>{
  e.preventDefault();
  if(detailsDeleteId.value.trim().length == 0){
    $('#detialsDeleteItemModal').modal('hide');
    $('#messageModalTitle').html("Mensaje");
    $('#messageModalBody').html("Ocurrió un error, vuelva a intentarlo");
    $('#messageModal').modal('show');
    if(window.history.replaceState){
        window.history.replaceState(null,null,window.location.href);
    }
  }else{
    let datos = new FormData($("#details_item_delete_form")[0]);
    $.ajax({
        url:"ajax/delete-details-product.ajax.php",
        method:"post",
        data:datos,
        cache:false,
        contentType:false,
        processData:false,
        dataType:"json",
        success:function(response){
            if(response.id!=0){
              $('#deleteProductModal').modal('hide');
              $('#detialsDeleteItemModal').modal('show');
              $('#messageModalTitle').html("Confirmación");
              $('#messageModalBody').html("<div style='text-align: center;'><img class='img-profile rounded-square' style='width: 50px; margin-bottom: 10px;' src='assets/images/icons/ok.png'><br/>Registro fué eliminado.</div>");
              $('#messageModal').modal('show');
              if (window.history.replaceState){
                  window.history.replaceState(null,null,window.location.href);
              }
              render_details(response.id)
              $('#detialsDeleteItemModal').modal('hide');
              setTimeout(function() {
                $('#messageModal').modal('hide');
              }, 2000);

            }else{
              $('#deleteProductModal').modal('hide');
              $('#messageModalTitle').html("Mensaje");
              $('#messageModalBody').html("<div style='text-align: center;'><img class='img-profile rounded-square' style='width: 50px; margin-bottom: 10px;' src='assets/images/icons/error.png'><br/>Ocurrió un error, vuelva a intentarlo.</div>");
              $('#messageModal').modal('show');
              if (window.history.replaceState){
                  window.history.replaceState(null,null,window.location.href);
              }
              render_details(response.id)
              setTimeout(function() {
                $('#messageModal').modal('hide');
                $('#detialsDeleteItemModal').modal('hide');
              }, 2000);
            }

        }
    }); //Fin ajax
  }
});
