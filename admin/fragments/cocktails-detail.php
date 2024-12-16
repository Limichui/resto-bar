<!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800">Cóckteles</h1>
<!-- DataTales Begin Cócteles -->
<div class="card shadow mb-4">
    <div class="card-header py-3 d-sm-flex align-items-center justify-content-between mb-4">
        <h6 class="m-0 font-weight-bold text-primary">Food & Drinks</h6>
        <a href="" onclick="show_modal_product_insert(7,1,'Food & Drinks');" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" data-toggle="modal">
            <i class="fas fa-plus-square fa-sm text-white-50"></i> Nuevo Item
        </a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable1" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th style='width: 20px;'>Imagen</th>
                        <th>Item en Español</th>
                        <th>Item en Ingles</th>
                        <th>Item en Frances</th>
                        <th>Item en Catalán</th>
                        <th style='width: 20px;'>Precio</th>
                        <th style='width: 20px;'>Acción</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    $datos=array(
                        'subcategoria_id' => 7,
                        'tipo_producto_id' => 1
                    );
                    $productos=ControladorFormularios::ctrListarProductos($datos);
                    $cade="";
                    if($productos){
			            foreach($productos as $key => $value){
                            if($value['imagen']!=''){
                                $image="<a class='nav-link' href='' onclick='show_modal_product_image(".$value['id'].");' data-toggle='modal' >
                                        <img class='img-profile rounded-square' style='width: 50px;' src='../assets/img/productos/".$value['imagen']."'>
                                        </a>";
                            }else{
                                $image="<a class='nav-link' href='' onclick='show_modal_product_image(".$value['id'].");' data-toggle='modal' >
                                        <img class='img-profile rounded-square' style='width: 50px;' src='../assets/img/productos/image-default.png'>
                                        </a>";
                            }
                            $cade.="<tr>
                                        <td style='padding-left:0px; padding-right:0px; margin-right:0px'>".$image."</td>
                                        <td>".$value['producto_esp']."</td>
                                        <td>".$value['producto_eng']."</td>
                                        <td>".$value['producto_fra']."</td>
                                        <td>".$value['producto_cat']."</td>
                                        <td>".$value['precio']."</td>
                                        <td>   
                                            <a class='nav-link' href='' onclick='show_modal_product_update(".$value['id'].",".$value['subcategoria_id'].");' data-toggle='modal'><i class='fas fa-pencil-alt'></i></a>
                                            <a class='nav-link' href='' onclick='show_modal_product_delete(".$value['id'].");' data-toggle='modal'><i class='fas fa-trash-alt'></i></a>
                                            <a class='nav-link' href='' onclick='show_modal_detils_product(".$value['id'].");' data-toggle='modal'><i class='fas fa-list-alt'></i></i></a>
                                        </td>
                                    </tr>";
                        }
                    }else{
                        $cade.="<td colspan=4 class='text-center'>Sin Registros</td>";
                    }                     
                    echo($cade);   
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- DataTables End Cócteles -->
