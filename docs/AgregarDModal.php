<?php
$fecha_min = date("Y-m-d");
$fecha_min = date("Y-m-d", strtotime($fecha_min . "- 80 year"));
$fecha_max = date("Y-m-d");
$fecha_max = date("Y-m-d", strtotime($fecha_max . "- 18 year"));
?>

    <script>
        function soloLetras(e) {
            key = e.keyCode || e.which;
            tecla = String.fromCharCode(key).toLowerCase();
            letras = " áéíóúabcdefghijklmnñopqrstuvwxyz";
            especiales = [8, 37, 39, 46];

            tecla_especial = false
            for (var i in especiales) {
                if (key == especiales[i]) {
                    tecla_especial = true;
                    break;
                }
            }

            if (letras.indexOf(tecla) == -1 && !tecla_especial)
                return false;
        }

        function limpia() {
            var val = document.getElementById("miInput").value;
            var tam = val.length;
            for (i = 0; i < tam; i++) {
                if (!isNaN(val[i]))
                    document.getElementById("miInput").value = '';
            }
        }
    </script>
 
<script type="text/javascript" src="../js/deptoD.js"></script>

    <!--Agregar nuevo docente Modal -->
    <div class="modal fade" id="exampleModalD" tabindex="-2" role="dialog" data-backdrop="static" data-keyboard="false" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header bg-blue">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close" title="Cerrar">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="demo-masked-input">
                        <div class="row clearfix">
                            <form name="datos" id="datos" action="../docs/AgregarDocente.php" method="post">
                                <!--1-->
                                <fieldset>
                                    <legend>Datos Personales</legend>
                                    <div class="row form-group col-md-10">

                                        <div class="col-md-4">
                                            <b>Nombres *</b>
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <img src="../images/iconos/person.svg">
                                                </span>
                                                <input type="String" name="nombresd" autocomplete="off" onkeypress="return soloLetras(event)" onblur="limpia()" value="<?= (isset($_POST['nombresd'])) ? $_POST['nombresd'] : ""; ?>" required autofocus>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <b>Apellidos *</b>
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <img src="../images/iconos/person.svg">
                                                </span>
                                                <input type="String" name="apellidosd" autocomplete="off" onkeypress="return soloLetras(event)" onblur="limpia()" value="<?= (isset($_POST['apellidosd'])) ? $_POST['apellidosd'] : ""; ?>" required autofocus>
                                            </div>
                                        </div>

                                        <div class="col-md-3">
                                            <b>Fecha de nacimiento *</b>
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <img src="../images/iconos/date_range.svg">
                                                </span>
                                                <div class="form-control input-sm">
                                                    <input type="date" name="fechanac" autocomplete="off" value="<?= (isset($_POST['fechanac'])) ? $_POST['fechanac'] : ""; ?>">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <b>Genero</b>
                                        <br>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <img src="../images/iconos/group-24px.svg">
                                            </span>
                                            <input type="radio" name="genero" id="masc" class="with-gap radio-col-blue" value="Masculino" checked>
                                            <label for="masc">Masculino</label>

                                            <input type="radio" name="genero" id="fem" class="with-gap radio-col-blue" value="Femenino">
                                            <label for="fem" class="m-l-20">Femenino</label>
                                        </div>
                                    </div>

                                    <div class="row form-group col-md-10">
                                        <div class="col-md-4">
                                            <b>Especialidad *</b>
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <img src="../images/iconos/group-24px.svg">
                                                </span>
                                                <input type="String" onkeypress="return soloLetras(event)" onblur="limpia()" name="esp" autocomplete="off" value="<?= (isset($_POST['esp'])) ? $_POST['esp'] : ""; ?>" required autofocus>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <b>Nacionalidad *</b>
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <img src="../images/iconos/03.svg">
                                                </span>
                                                <input type="String" onkeypress="return soloLetras(event)" onblur="limpia()" name="nacion" autocomplete="off" value="<?= (isset($_POST['nacion'])) ? $_POST['nacion'] : ""; ?>" required autofocus>
                                            </div>
                                        </div>

                                        <div class="col-sm-3">
                                            <b>Depto. en que Habita *</b>
                                            <div class="input-group">
                                                <select id="departx" name="departx" class="form-control show-tick" style="width: 100%;">
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row form-group col-md-10">
                                        <div class="col-md-3">
                                            <b>Municipio</b>
                                            <div class="input-group">
                                                <select id="mun" name="mun" class="form-control show-tick" style="width: 100%;">
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <b>Telefono *</b>
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <img src="../images/iconos/phone.svg">
                                                </span>
                                                <input type="String" class="phone-number" placeholder="Ex: 0000-0000" name="tel" autocomplete="off" value="<?= (isset($_POST['tel'])) ? $_POST['tel'] : ""; ?>" required autofocus>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <b>Correo *</b>
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <img src="../images/iconos/email.svg">
                                                </span>
                                                <input type="String" class="email" name="correo" placeholder='ejemplo@ejemplo.com' autocomplete="off" value="<?= (isset($_POST['correo'])) ? $_POST['correo'] : ""; ?>" required autofocus>
                                            </div>
                                        </div>
                                </fieldset>

                                <fieldset>
                                    <div class="col-md-10">
                                        <b>Dirección *</b>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <img src="../images/iconos/03.svg">
                                            </span>
                                            <textarea type="String" name="dir" cols="90" rows="5" style="resize: both;" autocomplete="off" value="<?= (isset($_POST['dir'])) ? $_POST['dir'] : ""; ?>" required autofocus></textarea>
                                        </div>
                                    </div>
                                </fieldset>
                        </div>
                    </div>
                </div>
                <hr class="sidebar-divider d-none d-md-block">
                <div class="modal-footer">
                    <span>Los campos marcados con * son campos obligatorios</span>
                    <button type="submit" name="agregar" class="btn btn-primary waves-effect"><img src="../images/iconos/save.svg">Guardar</button>
                    <button type="reset" name="cancelar" class="btn btn-secondary"><img src="../images/iconos/cancel.svg">Cancelar</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal"><img src="../images/iconos/close.svg">Cerrar</button>
                </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        function validarNro(e) {
            var key;
            if (window.event) // IE
            {
                key = e.keyCode;
            } else if (e.which) // Netscape/Firefox/Opera
            {
                key = e.which;
            }

            if (key < 48 || key > 57) {
                if (key == 46 || key == 8) // Detectar . (punto) y backspace (retroceso)
                {
                    return true;
                } else {
                    return false;
                }
            }
            return true;
        }
       
        function FormatDateField(xField) {
            var theText = xField.value;
            theText = theText.replace(/\//gi, "");
            if (!(theText.length == 8 || theText.length == 8)) {
                alert("Fecha inv�lida, debe ser en formato DD/MM/AAAA");
                xField.focus();
                return false;
            }
            theText = theText.substring(0, 2) + "/" + theText.substring(2, 4) + "/" + theText.substring(4, 8);
            xField.value = theText;
        }
    </script>

    <!-- Bootstrap Colorpicker Js -->
    <script src="../plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.js"></script>

    <!-- Dropzone Plugin Js -->
    <script src="../plugins/dropzone/dropzone.js"></script>

    <!-- Input Mask Plugin Js -->
    <script src="../plugins/jquery-inputmask/jquery.inputmask.bundle.js"></script>

    <!-- include alertify.css -->
    <link rel="stylesheet" href="../alertas/build/css/alertify.css">

    <!-- include boostrap theme  -->
    <link rel="stylesheet" href="../alertas/build/css/themes/bootstrap.css">

    <!-- include alertify script -->
    <script src="../alertas/build/alertify.js"></script>

    <script type="text/javascript">
        //override defaults
        alertify.defaults.transition = "slide";
        alertify.defaults.theme.ok = "btn btn-primary";
        alertify.defaults.theme.cancel = "btn btn-secondary";
        alertify.defaults.theme.input = "form-control";
    </script>
<script src="../js/pages/forms/advanced-form-elements.js"></script>