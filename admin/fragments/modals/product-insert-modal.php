<div class="modal fade" id="insertProductModal" tabindex="-1" role="dialog" aria-labelledby="insertProductModalTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="insertProductModalTitle">Nuevo Item</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body" id="insertProductModalBody">
                <div class="row">
                    <div class="col-12">
                        <div class="p-1">
                            <form id="product_insert_form" method="post">
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="hidden" class="form-control form-control-user" id="idSubCategoriaInsert" name="idSubCategoriaInsert">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="hidden" class="form-control form-control-user" id="idTipoProductoInsert" name="idTipoProductoInsert">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="productoEspInsert">Item en Español</label>
                                    <input type="text" class="form-control form-control-user" id="productoEspInsert" name="productoEspInsert">
                                </div>
                                <div class="form-group">
                                    <label for="productoEngInsert">Item en Ingles</label>
                                    <input type="text" class="form-control form-control-user" id="productoEngInsert" name="productoEngInsert">
                                </div>
                                <div class="form-group">
                                    <label for="productoFraInsert">Item en Frances</label>
                                    <input type="text" class="form-control form-control-user" id="productoFraInsert" name="productoFraInsert">
                                </div>
                                <div class="form-group">
                                    <label for="productoCatInsert">Item en Catalán</label>
                                    <input type="text" class="form-control form-control-user" id="productoCatInsert" name="productoCatInsert">
                                </div>
                                <div id="capa-precio" class="form-group">
                                    <label for="precioInsert">Precio</label>
                                    <input type="number" class="form-control form-control-user" id="precioInsert" name="precioInsert">
                                </div>
                                <div class="form-group">
                                    <label for="imagenInsert">Imagen</label>
                                    <input type="file" class="form-control-file" id="imagenInsert" name="imagenInsert">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <form id="product_insert_form" method="post">
                    <button class="btn btn-success" type="button" data-dismiss="modal">Cancelar</button>
                    <button class="btn btn-primary" type="submit" id="product_insert_button_submit">Registrar</button>
                </form>
            </div>
        </div>
    </div>
</div>