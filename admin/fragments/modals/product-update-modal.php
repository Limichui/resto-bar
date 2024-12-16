<div class="modal fade" id="updateProductModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="updateTitleProductModal">Modificar Registro</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body" id="updateBodyProductModal">
                <div class="row">
                    <div class="col-12">
                        <div class="p-1">
                            <form id="product_update_form" method="post">
                                <div>
                                    <input type="hidden" class="form-control form-control-user" id="idSubCategoriaUpdate" name="idSubCategoriaUpdate">
                                </div>
                                <div>
                                    <input type="hidden" class="form-control form-control-user" id="productoIdUpdate" name="productoIdUpdate">
                                </div>
                                <div class="form-group">
                                    <label for="productoEspUpdate">Item en Español</label>
                                    <input type="text" class="form-control form-control-user" id="productoEspUpdate" name="productoEspUpdate">
                                </div>
                                <div class="form-group">
                                    <label for="productoEngUpdate">Item en Ingles</label>
                                    <input type="text" class="form-control form-control-user" id="productoEngUpdate" name="productoEngUpdate">
                                </div>
                                <div class="form-group">
                                    <label for="productoFraUpdate">Item en Frances</label>
                                    <input type="text" class="form-control form-control-user" id="productoFraUpdate" name="productoFraUpdate">
                                </div>
                                <div class="form-group">
                                    <label for="productoCatUpdate">Item en Catalán</label>
                                    <input type="text" class="form-control form-control-user" id="productoCatUpdate" name="productoCatUpdate">
                                </div>
                                <div id="capa-precio-update" class="form-group">
                                    <label for="precioUpdate">Precio</label>
                                    <input type="number" class="form-control form-control-user" id="precioUpdate" name="precioUpdate">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <form id="product_update_form" method="post">
                    <button class="btn btn-success" type="button" data-dismiss="modal">Cancelar</button>
                    <button class="btn btn-primary" type="submit" id="product_update_button_submit">Modificar</button>
                </form>
            </div>
        </div>
    </div>
</div>