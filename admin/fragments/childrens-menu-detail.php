<!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800">Menú Infantil</h1>
<!-- DataTales Begin Primeros Platos -->
<div class="card shadow mb-4">
    <div class="card-header py-3 d-sm-flex align-items-center justify-content-between mb-4">
        <h6 class="m-0 font-weight-bold text-primary">Platos Principales</h6>
        <a href="" onclick="show_modal_product_insert(3,1,'Platos Principales');" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" data-toggle="modal">
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
                        <th style='width: 20px;'>Acción</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    $datos=array(
                        'subcategoria_id' => 3,
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
                                        <td>   
                                            <a class='nav-link' href='' onclick='show_modal_product_update(".$value['id'].",".$value['subcategoria_id'].");' data-toggle='modal'><i class='fas fa-pencil-alt'></i></a>
                                            <a class='nav-link' href='' onclick='show_modal_product_delete(".$value['id'].");' data-toggle='modal'><i class='fas fa-trash-alt'></i></a>
                                            <a class='nav-link' href='' onclick='show_modal_detils_product(".$value['id'].");' data-toggle='modal'><i class='fas fa-list-alt'></i></i></a>
                                        </td>
                                    </tr>";
                        }
                    }else{
                        $cade.="<td colspan=6 class='text-center'>Sin Registros</td>";
                    }                     
                    echo($cade);   
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- DataTales End Primeros Platos -->
<!-- DataTales Begin Seguntos Platos -->
<div class="card shadow mb-4">
    <div class="card-header py-3 d-sm-flex align-items-center justify-content-between mb-4">
        <h6 class="m-0 font-weight-bold text-primary">Bebidas</h6>
        <a href="" onclick="show_modal_product_insert(3,2,'Bebidas');" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" data-toggle="modal">
            <i class="fas fa-plus-square fa-sm text-white-50"></i> Nuevo Item
        </a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered display" id="dataTable2" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th style='width: 20px;'>Imagen</th>
                        <th>Item en Español</th>
                        <th>Item en Ingles</th>
                        <th>Item en Frances</th>
                        <th>Item en Catalán</th>
                        <th style='width: 20px;'>Acción</th>
                    </tr>
                </thead>
                <tbody>
                <?php 
                    $datos=array(
                        'subcategoria_id' => 3,
                        'tipo_producto_id' => 2
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
                                        <td>   
                                            <a class='nav-link' href='' onclick='show_modal_product_update(".$value['id'].",".$value['subcategoria_id'].");' data-toggle='modal'><i class='fas fa-pencil-alt'></i></a>
                                            <a class='nav-link' href='' onclick='show_modal_product_delete(".$value['id'].");' data-toggle='modal'><i class='fas fa-trash-alt'></i></a>
                                            <a class='nav-link' href='' onclick='show_modal_detils_product(".$value['id'].");' data-toggle='modal'><i class='fas fa-list-alt'></i></i></a>
                                        </td>
                                    </tr>";
                        }
                    }else{
                        $cade.="<td colspan=6 class='text-center'>Sin Registros</td>";
                    }                     
                    echo($cade);   
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- DataTales End Segundos Platos -->
<!-- DataTales Begin Postres -->
<div class="card shadow mb-4">
    <div class="card-header py-3 d-sm-flex align-items-center justify-content-between mb-4">
        <h6 class="m-0 font-weight-bold text-primary">Postres</h6>
        <a href="" onclick="show_modal_product_insert(3,3,'Postres');" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" data-toggle="modal">
            <i class="fas fa-plus-square fa-sm text-white-50"></i> Nuevo Item
        </a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable3" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th style='width: 20px;'>Imagen</th>
                        <th>Item en Español</th>
                        <th>Item en Ingles</th>
                        <th>Item en Frances</th>
                        <th>Item en Catalán</th>
                        <th style='width: 20px;'>Acción</th>
                    </tr>
                </thead>
                <tbody>
                <?php 
                    $datos=array(
                        'subcategoria_id' => 3,
                        'tipo_producto_id' => 3
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
                                        <td>   
                                            <a class='nav-link' href='' onclick='show_modal_product_update(".$value['id'].",".$value['subcategoria_id'].");' data-toggle='modal'><i class='fas fa-pencil-alt'></i></a>
                                            <a class='nav-link' href='' onclick='show_modal_product_delete(".$value['id'].");' data-toggle='modal'><i class='fas fa-trash-alt'></i></a>
                                            <a class='nav-link' href='' onclick='show_modal_detils_product(".$value['id'].");' data-toggle='modal'><i class='fas fa-list-alt'></i></i></a>
                                        </td>
                                    </tr>";
                        }
                    }else{
                        $cade.="<td colspan=6 class='text-center'>Sin Registros</td>";
                    }                     
                    echo($cade);   
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- DataTales End Postres -->
