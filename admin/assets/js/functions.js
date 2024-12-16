function show_modal_product_insert(subcategoria_id, tipo_producto_id, titulo){
    $('#idSubCategoriaInsert').val(subcategoria_id);
    $('#idTipoProductoInsert').val(tipo_producto_id);
    $('#productoEspInsert').val('');
    $('#productoEngInsert').val('');
    $('#productoFraInsert').val('');
    $('#productoCatInsert').val('');
    $('#precioInsert').val('');
    $('#imagenInsert').val('');
    $('#insertProductModalTitle').html(`Nuevo Item: ${titulo}`)
    if((subcategoria_id==2)||(subcategoria_id==3)){
        $('#capa-precio').hide()
    }else{
        $('#capa-precio').show()
    }
    $('#insertProductModal').modal('show');
}
function show_modal_product_update(id,subcategoria_id){
    $('#productoIdUpdate').val(id);
    $('#idSubCategoriaUpdate').val(subcategoria_id);
    let datos = {"id": id};
    $.ajax({
        url:"ajax/filter-product-id.ajax.php",
        method:"post",
        data:datos,
        cache:false,
        dataType:"json",
        success:function(response){
            if(response.id){
                $('#productoEspUpdate').val(response.producto_esp);
                $('#productoEngUpdate').val(response.producto_eng);
                $('#productoFraUpdate').val(response.producto_fra);
                $('#productoCatUpdate').val(response.producto_cat);
                $('#precioUpdate').val(response.precio);
                if((subcategoria_id==2)||(subcategoria_id==3)){
                    $('#capa-precio-update').hide()
                }else{
                    $('#capa-precio-update').show()
                }
                $('#updateProductModal').modal('show');
            }else{
              $('#updateProductModal').modal('hide');
              $('#messageModalBody').html("Ocurrió un error, vuelva a intentarlo");
              $('#messageModal').modal('show');
            }
        }
    });
}
function show_modal_product_delete(id){
    $('#productoIdDelete').val(id);
    $('#deleteProductModal').modal('show');
}
function show_modal_product_image(id){
    let datos = {"id": id};
    $.ajax({
        url:"ajax/filter-product-id.ajax.php",
        method:"post",
        data:datos,
        cache:false,
        dataType:"json",
        success:function(response){
            if(response.id){
                $('#imagenIdUpdate').val(response.id);
                if(response.imagen!=''){
                    $('#currentImage').attr("src","../assets/img/productos/" + response.imagen);
                }else{
                    $('#currentImage').attr("src","../assets/img/productos/image-default.png");
                }
                if(response.imagen!=''){
                    document.getElementById('image_delete_button_submit').disabled = false;
                }else{
                    document.getElementById('image_delete_button_submit').disabled = true;
                }

                $('#updateImageModal').modal('show');
            }else{
              $('#updateImageModal').modal('hide');
              $('#messageModalBody').html("<div style='text-align: center;'><img class='img-profile rounded-square' style='width: 50px; margin-bottom: 10px;' src='assets/images/icons/error.png'><br/>Ocurrió un error, vuelva a intentarlo.</div>");
              $('#messageModal').modal('show');
            }
        }
    });
}
function show_modal_detils_product(id){
    let datos = {"id": id};
    $.ajax({
        url:"ajax/filter-product-id.ajax.php",
        method:"post",
        data:datos,
        cache:false,
        dataType:"json",
        success:function(response){
            if(response.id){
                $('#titleDetailsProductModal').html(`Item: ${response.producto_esp}`);
                $('#detailsItemId').val(response.id);
                $('#detailsProductIdInsert').val(response.id);
                render_details(response.id);
                $('#detailsProductModal').modal('show');
            }else{
              $('#detailsProductModal').modal('hide');
              $('#messageModalBody').html("<div style='text-align: center;'><img class='img-profile rounded-square' style='width: 50px; margin-bottom: 10px;' src='assets/images/icons/error.png'><br/>Ocurrió un error, vuelva a intentarlo.</div>");
              $('#messageModal').modal('show');
            }
        }
    });
}
function render_details(id){
    let datos = {"id": id};
    $.ajax({
        url:"ajax/filter-details-item-id.ajax.php",
        method:"post",
        data:datos,
        cache:false,
        success:function(response){
                $('#table-details-item').html(response);
                $('#detailsProductModal').modal('show');

        }
    });
}
function show_modal_detalle_item_insert(){
    $('#detialsInsertItemModal').modal('show');
}
function show_modal_detalle_item_delete(id, producto_id){
    $('#detailsDeleteId').val(id);
    $('#detailsDeleteProductId').val(producto_id);
    $('#detialsDeleteItemModal').modal('show');
}
