<!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800">Platos</h1>
<!-- DataTales Begin Entrantes -->
<div class="card shadow mb-4">
    <div class="card-header py-3 d-sm-flex align-items-center justify-content-between mb-4">
        <h6 class="m-0 font-weight-bold text-primary">Entrantes</h6>
        <a href="" onclick="show_modal_product_insert(5,1,'Entrantes');" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" data-toggle="modal">
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
                        'subcategoria_id' => 5,
                        'tipo_producto_id' => 1
                    );
                    $productos=ControladorFormularios::ctrListarProductos($datos);
                    //print_r($productos);
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
                        $cade.="<td colspan=7 class='text-center'>Sin Registros</td>";
                    }                     
                    echo($cade);   
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- DataTales End Entrantes -->
<!-- DataTales Begin Arroces y Pastas -->
<div class="card shadow mb-4">
    <div class="card-header py-3 d-sm-flex align-items-center justify-content-between mb-4">
        <h6 class="m-0 font-weight-bold text-primary">Arroces y Pastas</h6>
        <a href="" onclick="show_modal_product_insert(5,2,'Arroces y Pastas');" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" data-toggle="modal">
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
                        <th style='width: 20px;'>Precio</th>
                        <th style='width: 20px;'>Acción</th>
                    </tr>
                </thead>
                <tbody>
                <?php 
                    $datos=array(
                        'subcategoria_id' => 5,
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
                                        <td>".$value['precio']."</td>
                                        <td>   
                                            <a class='nav-link' href='' onclick='show_modal_product_update(".$value['id'].",".$value['subcategoria_id'].");' data-toggle='modal'><i class='fas fa-pencil-alt'></i></a>
                                            <a class='nav-link' href='' onclick='show_modal_product_delete(".$value['id'].");' data-toggle='modal'><i class='fas fa-trash-alt'></i></a>
                                            <a class='nav-link' href='' onclick='show_modal_detils_product(".$value['id'].");' data-toggle='modal'><i class='fas fa-list-alt'></i></i></a>
                                        </td>
                                    </tr>";
                        }
                    }else{
                        $cade.="<td colspan=7 class='text-center'>Sin Registros</td>";
                    }                     
                    echo($cade);   
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- DataTales End Arroces y Pastas -->
<!-- DataTales Begin Carnes -->
<div class="card shadow mb-4">
    <div class="card-header py-3 d-sm-flex align-items-center justify-content-between mb-4">
        <h6 class="m-0 font-weight-bold text-primary">Carnes</h6>
        <a href="" onclick="show_modal_product_insert(5,3,'Carnes');" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" data-toggle="modal">
            <i class="fas fa-plus-square fa-sm text-white-50"></i> Nuevo Item
        </a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable4" width="100%" cellspacing="0">
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
                        'subcategoria_id' => 5,
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
                                        <td>".$value['precio']."</td>
                                        <td>   
                                            <a class='nav-link' href='' onclick='show_modal_product_update(".$value['id'].",".$value['subcategoria_id'].");' data-toggle='modal'><i class='fas fa-pencil-alt'></i></a>
                                            <a class='nav-link' href='' onclick='show_modal_product_delete(".$value['id'].");' data-toggle='modal'><i class='fas fa-trash-alt'></i></a>
                                            <a class='nav-link' href='' onclick='show_modal_detils_product(".$value['id'].");' data-toggle='modal'><i class='fas fa-list-alt'></i></i></a>
                                        </td>
                                    </tr>";
                        }
                    }else{
                        $cade.="<td colspan=7 class='text-center'>Sin Registros</td>";
                    }                     
                    echo($cade);   
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- DataTales End Carnes -->
<!-- DataTales Begin Pescados -->
<div class="card shadow mb-4">
    <div class="card-header py-3 d-sm-flex align-items-center justify-content-between mb-4">
        <h6 class="m-0 font-weight-bold text-primary">Pescados</h6>
        <a href="" onclick="show_modal_product_insert(5,4,'Pescados');" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" data-toggle="modal">
            <i class="fas fa-plus-square fa-sm text-white-50"></i> Nuevo Item
        </a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable4" width="100%" cellspacing="0">
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
                        'subcategoria_id' => 5,
                        'tipo_producto_id' => 4
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
                        $cade.="<td colspan=7 class='text-center'>Sin Registros</td>";
                    }                     
                    echo($cade);   
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- DataTales End Pescados -->
<!-- DataTales Begin Tapas Calientes -->
<div class="card shadow mb-4">
    <div class="card-header py-3 d-sm-flex align-items-center justify-content-between mb-4">
        <h6 class="m-0 font-weight-bold text-primary">Tapas Calientes</h6>
        <a href="" onclick="show_modal_product_insert(5,1,'Tapas Calientes');" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" data-toggle="modal">
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
                        'subcategoria_id' => 5,
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
                        $cade.="<td colspan=7 class='text-center'>Sin Registros</td>";
                    }                     
                    echo($cade);   
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- DataTales End Tapas Calientes -->
<!-- DataTales Begin Tapas Frías -->
<div class="card shadow mb-4">
    <div class="card-header py-3 d-sm-flex align-items-center justify-content-between mb-4">
        <h6 class="m-0 font-weight-bold text-primary">Tapas Frías</h6>
        <a href="" onclick="show_modal_product_insert(5,2,'Tapas Frías');" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" data-toggle="modal">
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
                        <th style='width: 20px;'>Precio</th>
                        <th style='width: 20px;'>Acción</th>
                    </tr>
                </thead>
                <tbody>
                <?php 
                    $datos=array(
                        'subcategoria_id' => 5,
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
                                        <td>".$value['precio']."</td>
                                        <td>   
                                            <a class='nav-link' href='' onclick='show_modal_product_update(".$value['id'].",".$value['subcategoria_id'].");' data-toggle='modal'><i class='fas fa-pencil-alt'></i></a>
                                            <a class='nav-link' href='' onclick='show_modal_product_delete(".$value['id'].");' data-toggle='modal'><i class='fas fa-trash-alt'></i></a>
                                            <a class='nav-link' href='' onclick='show_modal_detils_product(".$value['id'].");' data-toggle='modal'><i class='fas fa-list-alt'></i></i></a>
                                        </td>
                                    </tr>";
                        }
                    }else{
                        $cade.="<td colspan=7 class='text-center'>Sin Registros</td>";
                    }                     
                    echo($cade);   
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- DataTales End Tapas Frías -->

