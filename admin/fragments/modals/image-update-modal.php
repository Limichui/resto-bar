<div class="modal fade" id="updateImageModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="updateTitleImageModal">Imagen del Item</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body" id="updateBodyImageModal">
                <div class="row">
                    <div class="col-12">
                        <div class="p-1">
                            <form id="image_update_form" method="post">
                                <div>
                                    <input type="hidden" class="form-control form-control-user" id="imagenIdUpdate" name="imagenIdUpdate">
                                </div>
                                <div>
                                    <input type="hidden" class="form-control form-control-user" id="imagenOption" name="imagenOption">
                                </div>
                                <div class="form-group text-center">
                                    <img id='currentImage' name='currentImage' class='img-profile rounded-square' style='width: 250px;' src=''>
                                </div>
                                <div class="form-group">
                                    <label for="newImagenUpdate">Nueva Imagen</label>
                                    <input type="file" class="form-control-file" id="newImagenUpdate" name="newImagenUpdate">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <form id="image_update_form" method="post">
                    <button class="btn btn-success" type="button" data-dismiss="modal">Cancelar</button>
                    <button class="btn btn-primary" type="submit" id="image_update_button_submit" disabled>Modificar</button>
                    <button class="btn btn-danger" type="submit" id="image_delete_button_submit">Eliminar</button>
                </form>
            </div>
        </div>
    </div>
</div>