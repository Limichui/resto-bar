<div class="modal fade" id="detialsDeleteItemModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="detialsDeleteTitleItemModal">Eliminar Registro</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body" id="detialsDeleteBodyItemModal">
                <div class="row">
                    <div class="col-12">
                        <div class="p-1">
                            <form id="details_item_delete_form" method="post">
                                <div class="form-group text-center">
                                    <input type="hidden" class="form-control form-control-user" id="detailsDeleteId" name="detailsDeleteId">
                                    <input type="hidden" class="form-control form-control-user" id="detailsDeleteProductId" name="detailsDeleteProductId">
                                    <img class='img-profile rounded-square' style='width: 50px; margin-bottom: 10px;' src='assets/images/icons/trash.png'> 
                                </div>
                                <div class="text-center">¿Está seguro de eliminar el registro?</div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <form id="details_item_delete_form" method="post">
                    <button class="btn btn-success" type="button" data-dismiss="modal">Cancelar</button>
                    <button class="btn btn-danger" type="submit" id="details_item_delete_button_submit">Eliminar</button>
                </form>
            </div>
        </div>
    </div>
</div>