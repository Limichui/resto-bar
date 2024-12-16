<div class="modal fade" id="detialsInsertItemModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="detialsInsertTitleItemModal">Nuevo Registro</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body" id="detialsInsertBodyItemModal">
                <div class="row">
                    <div class="col-12">
                        <div class="p-1">
                            <form id="details_item_insert_form" method="post">
                                <div>
                                    <input type="hidden" class="form-control form-control-user" id="detailsProductIdInsert" name="detailsProductIdInsert">
                                </div>
                                <?php
                                $tipoDetalle=ControladorFormularios::ctrListarTipoDetalle();
                                $cade="<option value='0' selected>--Seleccionar--</option>";
                                foreach($tipoDetalle as $key => $value){
                                    $cade.="<option value='".$value['id']."'>".$value['tipo_detalle_esp']."</option>";
                                }
                                ?>
                                <div class="form-group">
                                    <label for="tipoDetailsInsert">Tipo de Detalle</label>
                                    <select class="form-control" id="tipoDetailsInsert" name="tipoDetailsInsert">
                                    <?php
                                    echo($cade);
                                    ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="detailsItemEspInsert">Detalle en Español</label>
                                    <input type="text" class="form-control form-control-user" id="detailsItemEspInsert" name="detailsItemEspInsert">
                                </div>
                                <div class="form-group">
                                    <label for="detailsItemEngInsert">Detalle en Ingles</label>
                                    <input type="text" class="form-control form-control-user" id="detailsItemEngInsert" name="detailsItemEngInsert">
                                </div>
                                <div class="form-group">
                                    <label for="detailsItemFraInsert">Detalle en Frances</label>
                                    <input type="text" class="form-control form-control-user" id="detailsItemFraInsert" name="detailsItemFraInsert">
                                </div>
                                <div class="form-group">
                                    <label for="detailsItemCatInsert">Detalle en Catalán</label>
                                    <input type="text" class="form-control form-control-user" id="detailsItemCatInsert" name="detailsItemCatInsert">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <form id="details_item_insert_form" method="post">
                    <button class="btn btn-success" type="button" data-dismiss="modal">Cancelar</button>
                    <button class="btn btn-primary" type="submit" id="details_item_insert_button_submit">Registrar</button>
                </form>
            </div>
        </div>
    </div>
</div>