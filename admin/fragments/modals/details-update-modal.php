<div class="modal fade" id="detailsProductModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="titleDetailsProductModal"></h5>
                <form id="details_product_form" method="post">
                    <div>
                        <input type="hidden" class="form-control form-control-user" id="detailsItemId" name="detailsItemId">
                    </div>
                    <div class="text-right">
                        <button class="btn btn-primary" type="button" onclick="show_modal_detalle_item_insert();"><i class="fas fa-plus-square fa-sm text-white-50"></i> Nuevo Registro</button>
                    </div>
                </form>
            </div>
            <div class="modal-body" id="bodyDetailsProductModal">
                <div class="row">
                    <div class="col-12">
                        <div class="p-1">
                            <form id="details_product_form" method="post">
                                <div>
                                    <input type="hidden" class="form-control form-control-user" id="detailsItemId" name="detailsItemId">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div id="table-details-item" class="card-body">
                        
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-success" type="button" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>