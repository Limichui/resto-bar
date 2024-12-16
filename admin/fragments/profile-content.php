<!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800">Cuenta de usuario</h1>

<!-- Content Row -->
<div class="row">
    <!-- Pie Chart -->
    <div class="col-xl-4 col-lg-5">
        <div class="card shadow mb-4">
            <!-- Card Header - Dropdown -->
            <div
                class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Perfil</h6>
            </div>
            <!-- Card Body -->
            <div class="card-body">
                <div class="mb-3 text-center">
                    <img class="img-profile rounded-circle"width="150" height="auto" style="margin-top:10px"
					    src="<?php echo(SERVERURL);?>admin/assets/images/avatars/<?php echo($_SESSION['imgUsu']);?>">
                </div>
                <div class="mt-4 text-center small">
                    <div><strong>Usuario: </strong><?php echo $_SESSION['usu'];?></div>
                </div>
            </div>
        </div>
    </div>
    <!-- Area Chart -->
    <div class="col-xl-8 col-lg-7">
        <div class="card shadow mb-4">
            <!-- Card Header - Dropdown -->
            <div
                class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Configuración</h6>
            </div>
            <!-- Card Body -->
            <div class="card-body" role="tabpanel">
                <nav>
                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                        <button class="nav-link active" id="nav-home-tab" data-toggle="tab" data-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Perfil</button>
                        <button class="nav-link" id="nav-profile-tab" data-toggle="tab" data-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Contraseña</button>
                    </div>
                </nav>
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                        <form id="form-data-user" method="post">                      
                            <div class="mb-3 mt-3">
                                <label for="txtUser" class="form-label">Usuario <em>(Ejemplo: nombre.apellido)</em></label>
                                <input type="text" class="form-control" id="txtUser" name="txtUser" value="<?php echo($_SESSION['usu']);?>" style="text-transform:lowercase" maxlength="49">
                                <div class="msg-invalid"></div>
                            </div>
                            <div class="mb-3">
                                <label for="txtName" class="form-label">Nombre del usuario</label>
                                <input type="text" class="form-control" id="txtName" name="txtName" value="<?php echo($_SESSION['nomUsu']);?>" style="text-transform:uppercase" maxlength="99">
                                <div class="msg-invalid"></div>
                            </div>
                            <div class="mb-3">
                                <label for="txtAddress" class="form-label">Dirección</label>
                                <input type="text" class="form-control" id="txtAddress" name="txtAddress" value="<?php echo($_SESSION['dirUsu']);?>" style="text-transform:uppercase" maxlength="249">
                            </div>
                            <div class="mb-3">
                                <label for="txtCellPhone" class="form-label">Teléfono celular</label>
                                <input type="text" class="form-control" id="txtCellPhone" name="txtCellPhone" value="<?php echo($_SESSION['celUsu']);?>" style="text-transform:uppercase" maxlength="49">
                            </div>
                            <div class="mb-3">
                                <label for="txtEmail" class="form-label">Correo Electrónico</label>
                                <input type="text" class="form-control" id="txtEmail" name="txtEmail" value="<?php echo($_SESSION['emailUsu']);?>" style="text-transform:lowercase" maxlength="99">
                                <div class="msg-invalid"></div>
                            </div>
                            <div class="mb-0">
                                <label class="form-label">Fotografía: <em>(Solo formatos jpg, jpeg o png)</em></label>
                            </div>
                            <div class="input-group mb-3">
                                <input type="file" class="custom-file-input" onchange="update_input_file(this.value)" id="filePhoto" name="filePhoto" aria-describedby="inputGroupFilePhoto" accept=".png, .jpg, .jpeg">
                                <label class="custom-file-label" for="filePhoto" id="lbFilePhoto" name="lbFilePhoto">Elije el archivo</label>
                            </div> 
                            <div class="mb-3">
                                <button class="btn btn-primary" type="submit" id="btnUpdateUserData">Registrar cambios</button>
                            </div>
                        </form>
                    </div>
                    <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                        <form id="form-password-user" method="post">
                                <div class="mb-3 mt-3">
                                    <label for="txtPassword" class="form-label">Contraseña actual</label>
                                    <input type="password" class="form-control password" id="txtPassword" name="txtPassword" placeholder="Ingrese la contraseña actual" value="" maxlength="49">
                                    <div class="msg-invalid"></div>
                                </div>
                                <div class="mb-3">
                                    <label for="txtPassword1" class="form-label">Nueva contraseña</label>
                                    <input type="password" class="form-control password" id="txtPassword1" name="txtPassword1" placeholder="Ingrese la nueva contraseña" value="" maxlength="49">
                                    <div class="msg-invalid"></div>
                                </div>
                                
                                <div class="mb-3">
                                    <label for="txtPassword2" class="form-label">Confirmación de la nueva contraseña</label>
                                    <input type="password" class="form-control password" id="txtPassword2" name="txtPassword2" placeholder="Ingrese la nueva contraseña" value="" maxlength="49">
                                    <div class="msg-invalid"></div>
                                </div>
                                <div class="mb-3">
                                    <button class="btn btn-primary" type="submit" id="btnUpdatePassword">Registrar cambios</button>
                                </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>