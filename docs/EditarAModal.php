<?php
date_default_timezone_set("America/El_Salvador");
?>
<script language="javascript" type="text/javascript">
        var x = 0;
        var code = "";
        function generarcodigo(){
            // obteniendo el formulario
            var f = document.forms['datos'];
            // obteniendo los datos de nombres
            var nombre = f.elements['rnombres'].value.substr(0,1).toUpperCase();
            // obteniendo los datos de paterno
            var apellido = f.elements['rapellidos'].value.substr(0,1).toUpperCase();
            // obteniendo el object del usuario
            var carn = f.elements['rcarnet'];
            
            // variable que almacenara mi codigo
            var newcode = "";
            if(x===0){
                // generas un nuevo codigo
                code = "001";
            }else{
                // variable que obtendra la longitud del incremento
                var digitos = (x+1).toString().length;
                // variable que solo tomara los ceros
                var soloceros = code.substr(0,code.length - digitos);
                // guardando nuestra variable
                code = soloceros + (x+1).toString();
            }
            // generando el codigo
            newcode = nombre + apellido + code;
            // asignando el codigo a nuestro input
            carn.value = newcode;
            x++;
        }
    </script>

    <script type="text/javascript">
        $(document).ready(function() {
            $('.img-delete').click(function(){
                var parent = $(this).parent().attr('id');
                var service = $(this).parent().attr('data');
                var dataString = 'id=' + service;

                $.ajax({
                    type: "POST",
                    url: "../docs/del_file.php",
                    data: dataString,
                    success: function(){
                        location.reload('../docs/AgregarAModal.php');
                    }
                });
            });

        });
    </script>

<script src="../js/pages/forms/advanced-form-elements.js"></script>
<!--Modifiar Alumno Modal -->
<div class="modal fade" id="ModalEdi_<?php echo $rid; ?>" tabindex="-1" role="dialog" data-backdrop="static" aria-labelledby="exampleModalLabel" aria-hidden="true"> 
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
                    <form role="form" action="../docs/EditarAlumno.php?rid=<?php echo $rid; ?>" method="post" enctype="multipart/form-data" class="form-group">
                        <!--1-->
                        <fieldset>
                            <legend>Datos del Alumno</legend>
                            <div class="row form-group col-md-12">                            
                        
                                <p>
                                    <div class="col-md-4">
                                        <b>Nombres *</b>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <img src="../images/iconos/person.svg">
                                            </span>
                                            <input type="String" name="rnombres" onkeypress="return soloLetras(event)" autocomplete="off" value="<?php echo $fila[1]; ?>" required autofocus>
                                        </div>
                                    </div>
                                </p>

                                <p>
                                    <div class="col-md-4">
                                        <b>Apellidos *</b>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <img src="../images/iconos/person.svg">
                                            </span>
                                            <input type="String" name="rapellidos" onkeypress="return soloLetras(event)" autocomplete="off" value="<?php echo $fila[2]; ?>" required autofocus>

                                        </div>
                                    </div>
                                </p>
                                <p>
                                    <div class="col-md-3">
                                        <b>Fecha de Nacimiento</b>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <img src="../images/iconos/date_range.svg">
                                            </span>
                                            <label> <input type="date" name="rfnacimiento" onchange="FormatDateField(this) " value="<?php echo $fila[9]; ?>" required autofocus></label></td>

                                        </div>
                                    </div>
                                </p>

                                <p>
                                    <div class="col-md-4">
                                        <b>Nacionalidad</b>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <img src="../images/iconos/01.svg">
                                            </span>
                                            <input type="String" name="rnacionalidad" onkeypress="return soloLetras(event)" autocomplete="off" value="<?php echo $fila[3]; ?>" required autofocus>
                                        </div>
                                    </div>
                                </p>

                                <p>
                                    <div class="col-md-4">
                                        <b>Lugar de Nacimiento</b>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <img src="../images/iconos/03.svg">
                                            </span>
                                            <input type="String" name="rlugarnacimiento" onkeypress="return soloLetras(event)" autocomplete="off" value="<?php echo $fila[11]; ?>" required autofocus>
                                        </div>
                                    </div>
                                </p>

                                <p>
                                    <div class="col-md-4">
                                        <b>Genero</b>
                                        <br>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <img src="../images/iconos/group-24px.svg">
                                            </span>
                                            <input type="radio" name="generoed" id="masca" class="with-gap radio-col-blue" value="Masculino" <?php
                                              $rgena = $fila[8];
                                             if ($rgena == "Masculino") {
                                                  echo "checked";
                                                    }
                                                    ?>>
                                            <label for="masca">Masculino</label>

                                            <input type="radio" name="generoed" id="femea" class="with-gap radio-col-blue" value="Femenino" <?php
                                              $rgena= $fila[8];
                                             if ($rgena == "Femenino") {
                                                   echo "checked";
                                                    }
                                                    ?>>
                                            <label for="femea">Femenino</label>
                                        </div>
                                </p>
                            </div>
                        </fieldset>

                                <fieldset>                    
                                <div class="row form-group col-md-12">
                                <p>
                                    <div class="col-sm-3 selectContainer">
                                        <b>Estado Civil</b>
                                        <div class="input-group">
                                            <select id="restadocivil" name="restadocivil" class="form-control show-tick" style="width: 100%;">
                                                <option value="<?php echo $fila[13]; ?>"><?php echo $fila[13]; ?></option>
                                                <option value="Soltero">Soltero</option>
                                                <option value="Casado">Casado</option>
                                                <option value="Divorciado">Divorciado</option>
                                                <option value="Acompañado">Acompañado</option>
                                            </select>
                                        </div>
                                    </div>
                                </p>
                            </div>

                            <input name="rcarnet" id="rcarnet" style="visibility:hidden" value="<?php echo $carnet=$fila[59]; ?>">

                        </fieldset>

                        <!----------Datos de Contanto del Alumno---------->

                        <fieldset>
                            <legend>Datos de Contanto del Alumno</legend>
                            <div class="row form-group col-md-12">

                                <p>
                                    <div class="col-sm-3 selectContainer">
                                        <b>Dep. de Nacimiento</b>
                                        <div class="input-group">
                                            <select id="rdeptonac" name="rdeptonac" class="form-control show-tick" style="width: 100%;">
                                                <option value="<?php echo $fila[4]; ?>"><?php echo $fila[4]; ?></option>
                                                <option value="Ahuachapán">Ahuachapán</option>
                                                <option value="Cabañas">Cabañas</option>
                                                <option value="Chalatenango">Chalatenango</option>
                                                <option value="Cuscatlán">Cuscatlán</option>
                                                <option value="La Libertad">La Libertad</option>
                                                <option value="La Paz">La Paz</option>
                                                <option value="La Unión">La Unión</option>
                                                <option value="Morazán">Morazán</option>
                                                <option value="San Miguel">San Miguel</option>
                                                <option value="San Salvador">San Salvador</option>
                                                <option value="San Vicente">San Vicente</option>
                                                <option value="Santa Ana">Santa Ana</option>
                                                <option value="Sonsonate">Sonsonate</option>
                                                <option value="Usulután">Usulután</option>
                                            </select>
                                        </div>
                                    </div>
                                </p>

                                <p>
                                    <div class="col-md-3">
                                        <b>Zona</b>
                                        <br>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <img src="../images/iconos/03.svg">
                                            </span>
                                            <input type="radio" name="rzona" id="rz1" class="with-gap radio-col-blue" value="Urbana" <?php
                                                $rzon = $fila[15];
                                              if ($rzon == "Urbana") {
                                                 echo "checked";
                                                       }
                                                       ?>>
                                            <label for="rz1">Urbana</label>

                                            <input type="radio" name="rzona" id="rz2" class="with-gap radio-col-blue" value="Rural" <?php
                                                $rzon = $fila[15];
                                              if ($rzon == "Rural") {
                                                 echo "checked";
                                                    }
                                                    ?>>
                                            <label for="rz2">Rural</label>
                                        </div>
                                    </div>
                                </p>

                                <p>
                                    <div class="col-md-3">
                                        <b>Municipio</b>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <img src="../images/iconos/03.svg">
                                            </span>
                                            <input type="String" name="rmunnac" onkeypress="return soloLetras(event)" autocomplete="off" value="<?php echo $fila[5]; ?>" required autofocus>
                                        </div>
                                    </div>
                                </p>
                                
                                <div class="col-md-4">
                                    <b>Direccion</b>
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <img src="../images/iconos/group-24px.svg">
                                        </span>
                                        <input type="String" name="rdireccion" autocomplete="off" value="<?php echo $fila[6]; ?>" required autofocus>
                                    </div>
                                </div>

                                <p>
                                    <div class="col-sm-3 selectContainer">
                                        <b>Tipo de Calle</b>
                                        <div class="input-group">
                                            <select id="rtipocalle" name="rtipocalle" class="form-control show-tick" style="width: 100%;">
                                                <option value="<?php echo $fila[14]; ?>"><?php echo $fila[14]; ?></option>
                                                <option value="0">Seleccione...</option>
                                                <option value="Carretera">Carretera</option>
                                                <option value="Empedrada">Empedrada</option>
                                                <option value="Sendero">Sendero</option>
                                                <option value="Polvosa">Polvosa</option>
                                            </select>
                                        </div>
                                    </div>
                                </p>
                            </div>
                        </fieldset>

                                <fieldset>                    
                    <div class="row form-group col-md-12">

                                <div class="col-md-4">
                                    <b>Telefono</b>
                                    <div class="input-group">
                                    <span class="input-group-addon">
                                        <img src="../images/iconos/phone.svg">
                                    </span>
                                    <input type="String" class="phone-number" name="rtelefono" placeholder="0000-0000" pattern="[0-9]{4}[-][0-9]{4}" autocomplete="off" value="<?php echo $fila[10]; ?>" required autofocus>
                                </div>
                            </div>


                            <div class="col-md-3">
                                <b>Email</b>
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <img src="../images/iconos/email.svg">
                                    </span>
                                    <input type="String" class="email" name="remail" autocomplete="off" value="<?php echo $fila[7]; ?>" required autofocus>
                                </div>
                            </div>

                </div>
                </fieldset>
                <!----------Otros Datos---------->
                <fieldset>
                    
                    <div class="row form-group col-md-10">

                        <p>
                            <div class="col-sm-3 selectContainer">
                                <b>Medio de Transporte</b>
                                <div class="input-group">
                                    <select id="rmediotrans" name="rmediotrans" class="form-control show-tick" style="width: 100%;">
                                        <option value="<?php echo $fila[16]; ?>"><?php echo $fila[16]; ?></option>
                                        <option value="0">Seleccione...</option>
                                        <option value="A Pie">A Pie</option>
                                        <option value="Autobus">Autobus</option>
                                        <option value="Automóvil">Automovil</option>
                                        <option value="Otros">Otros</option>
                                    </select>
                                </div>
                            </div>
                        </p>

                        <div class="col-md-4">
                            <b>Distancia al C.E</b>
                            <div class="input-group">                                
                                <input type="String" name="rdistancia" autocomplete="off" value="<?php echo $fila[17]; ?>" required autofocus>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <b>Factor riesgo</b>
                            <div class="input-group">                               
                                <input type="String" name="rfactorriesgo" onkeypress="return soloLetras(event)" autocomplete="off" value="<?php echo $fila[18]; ?>" required autofocus>
                            </div>
                        </div>

                        <p>
                            <div class="col-md-3">
                                <b>Trabaja</b>
                                <br>
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <img src="../images/iconos/group-24px.svg">
                                    </span>
                                    <input type="radio" name="rtrabaja" id="rtra1" class="with-gap radio-col-blue" value="Si" <?php
                                        $rtra = $fila[19];
                                       if ($rtra == "Si") {
                                          echo "checked";
                                                }
                                          ?>>
                                    <label for="rtra1">Si</label>

                                    <input type="radio" name="rtrabaja" id="rtra2" class="with-gap radio-col-blue" value="No" <?php
                                       $rtra = $fila[19];
                                      if ($rtra == "No") {
                                         echo "checked";
                                                }
                                            ?>>
                                    <label for="rtra2" class="m-l-20">No</label>
                                </div>
                            </div>
                        </p>


                        <p>
                            <div class="col-sm-3 selectContainer">
                                <b>Dependencia Económica</b>
                                <div class="input-group">
                                    <select id="rdependenciaeco" name="rdependenciaeco" class="form-control show-tick" style="width: 100%;">
                                        <option value="<?php echo $fila[20]; ?>"><?php echo $fila[20]; ?></option>
                                        <option value="0">Seleccione...</option>
                                        <option value="Padre">Padre</option>
                                        <option value="Madre">Madre</option>
                                        <option value="Padre y Madre">Padre y Madre</option>
                                        <option value="Hermanos">Hermanos</option>
                                        <option value="Otros">Otros</option>
                                    </select>
                                </div>
                            </div>
                        </p>
                    </div>
                </fieldset>
                <!----------Datos de Salud---------->
                <fieldset>
                    <legend>Datos Salud</legend>
                    <div class="row form-group col-md-10">

                        <p>
                            <div class="col-md-2">
                                <b>Presenta Tarjeta de Vacunas</b>
                                <br>
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <img src="../images/iconos/group-24px.svg">
                                    </span>
                                    <input type="radio" name="rtarjetavacunas" id="rtva1" class="with-gap radio-col-blue" value="Si" <?php
                                       $rtrv = $fila[21];
                                        if ($rtrv == "Si") {
                                           echo "checked";
                                                }
                                              ?>>
                                    <label for="rtva1">Si</label>

                                    <input type="radio" name="rtarjetavacunas" id="rtva2" class="with-gap radio-col-blue" value="No" <?php
                                       $rtrv = $fila[21];
                                       if ($rtrv == "No") {
                                         echo "checked";
                                              }
                                              ?>>
                                    <label for="rtva2">No</label>
                                </div>
                            </div>
                        </p>

                        <p>
                            <div class="col-md-2">
                                <b>Esquema de Vacunas Completo</b>
                                <br>
                                <div class="input-group">
                                    <span class="input-group-addon">
                                        <img src="../images/iconos/group-24px.svg">
                                    </span>
                                    <input type="radio" name="resquemavacunas" id="rev1" class="with-gap radio-col-blue" value="Si" <?php
                                            $rtraev = $fila[22];
                                        if ($rtraev == "Si") {
                                            echo "checked";
                                                  }
                                                  ?>>
                                    <label for="rev1">Si</label>

                                    <input type="radio" name="resquemavacunas" id="rev2" class="with-gap radio-col-blue" value="No" <?php
                                        $rtraev = $fila[22];
                                        if ($rtraev == "No") {
                                         echo "checked";
                                              }
                                            ?>>
                                    <label for="rev2">No</label>
                                </div>
                            </div>
                        </p>

                        <p>
                        <div class="col-md-4">
                            <b>Discapacidad o Enfermedad</b>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <img src="../images/iconos/group-24px.svg">
                                </span>
                                <input type="String" name="renfdis" onkeypress="return soloLetras(event)" autocomplete="off" value="<?php echo $fila[23]; ?>" required autofocus>
                            </div>
                        </div>
                        </P>
                        <p>
                        <div class="col-md-3">
                            <b>Tiene alguna Prescripción Médica</b>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <img src="../images/iconos/group-24px.svg">
                                </span>
                                <input type="String" name="rpremed" onkeypress="return soloLetras(event)" autocomplete="off" value="<?php echo $fila[24]; ?>" required autofocus>
                            </div>
                        </div>
                    </div>
                </p>
                </fieldset>
                <!----------Datos del Padre de Familia---------->
                <fieldset>
                    <legend>Datos del Padre de Familia</legend>
                    <div class="row form-group col-md-12">

                        <div class="col-md-4">
                            <b>N° DUI</b>
                            <div class="input-group">                                
                                <input type="String" class="dui-number" name="rduip" placeholder="0000000-0" 
                                 autocomplete="off" value="<?php echo $fila[39]; ?>" required autofocus>
                            </div>
                        </div>

                        <div class="col-md-5">
                            <b>N° NIT</b>
                            <div class="input-group">                                
                                <input type="String" class="nit-number" name="rnitp"
                                placeholder="0000-000000-000-0"
                                autocomplete="off" value="<?php echo $fila[40]; ?>" required autofocus>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <b>Nombres</b>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <img src="../images/iconos/person.svg">
                                </span>
                                <input type="String" name="rnombresp" onkeypress="return soloLetras(event)" autocomplete="off" value="<?php echo $fila[25]; ?>" onchange="soloLetras() " required autofocus>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <b>Apellidos</b>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <img src="../images/iconos/person.svg">
                                </span>
                                <input type="String" name="rapellidosp" onkeypress="return soloLetras(event)" autocomplete="off" value="<?php echo $fila[26]; ?>" required autofocus>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <b>Fecha de Nacimiento</b>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <img src="../images/iconos/date_range.svg">
                                </span>                                
                                    <label> <input type="date" min="1990-01-01" name="rfnacimientop" value="<?php echo $fila[38]; ?>" onchange="FormatDateField(this) " required autofocus> </label></td>
                                
                            </div>
                        </div>

                    </div>
                </fieldset>

                <fieldset>                    
                <div class="row form-group col-md-12">

                <div class="col-md-4">
                    <b>Nacionalidad </b>
                    <div class="input-group">                        
                        <input type="String" name="rnacionalidadp" autocomplete="off" value="<?php echo $fila[27]; ?>" required autofocus>
                    </div>
                </div>

                <div class="col-md-4">
                    <b>Lugar de Nacimiento</b>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <img src="../images/iconos/03.svg">
                        </span>
                        <input type="String" name="rlugarnacimientop" autocomplete="off" value="<?php echo $fila[29]; ?>" required autofocus>
                    </div>
                </div>

                <p>
                    <div class="col-sm-3 selectContainer">
                        <b>Depto. de Nacimiento</b>
                        <div class="input-group">
                            <select id="rdeptonacp" name="rdeptonacp" class="form-control show-tick" style="width: 100%;">
                                <option value="<?php echo $fila[28]; ?>"><?php echo $fila[28]; ?></option>
                                <option value="0">Seleccione...</option>
                                <option value="Ahuachapán">Ahuachapán</option>
                                <option value="Cabañas">Cabañas</option>
                                <option value="Chalatenango">Chalatenango</option>
                                <option value="Cuscatlán">Cuscatlán</option>
                                <option value="La Libertad">La Libertad</option>
                                <option value="La Paz">La Paz</option>
                                <option value="La Unión">La Unión</option>
                                <option value="Morazán">Morazán</option>
                                <option value="San Miguel">San Miguel</option>
                                <option value="San Salvador">San Salvador</option>
                                <option value="San Vicente">San Vicente</option>
                                <option value="Santa Ana">Santa Ana</option>
                                <option value="Sonsonate">Sonsonate</option>
                                <option value="Usulután">Usulután</option>
                            </select>
                        </div>
                    </div>
                </p>

                <p>
                    <div class="col-md-3">
                        <b>Zona</b>
                        <br>
                        <div class="input-group">
                            <span class="input-group-addon">
                                <img src="../images/iconos/03.svg">
                            </span>
                            <input type="radio" name="rzonap" id="rzp1" class="with-gap radio-col-blue" value="Urbana" <?php
                              $rzonp = $fila[41];
                             if ($rzonp == "Urbana") {
                                echo "checked";
                                     }
                                    ?>>
                            <label for="rzp1">Urbana</label>

                            <input type="radio" name="rzonap" id="rzp2" class="with-gap radio-col-blue" value="Rural" <?php
                              $rzonp = $fila[41];
                               if ($rzonp == "Rural") {
                                    echo "checked";
                                        }
                                    ?>>
                            <label for="rzp2">Rural</label>
                        </div>
                    </div>
                </p>

                <p>
                    <div class="col-md-4">
                        <b>Genero</b>
                        <br>
                        <div class="input-group">
                            <span class="input-group-addon">
                                <img src="../images/iconos/group-24px.svg">
                            </span>
                            <input type="radio" name="rgenerop" id="rgp1" class="with-gap radio-col-blue" value="Masculino" <?php
                                $rgenp = $fila[30];
                             if ($rgenp == "Masculino") {
                                 echo "checked";
                                      }
                                      ?>>
                            <label for="rgp1">Masculino</label>

                            <input type="radio" name="rgenerop" id="rgp2" class="with-gap radio-col-blue" value="Femenino" <?php
                               $rgenp = $fila[30];
                             if ($rgenp == "Femenino") {
                                  echo "checked";
                                        }
                                       ?>>
                            <label for="rgp2">Femenino</label>
                        </div>
                    </div>
                </p>

                <p>
                    <div class="col-sm-3 selectContainer">
                        <b>Estado Familiar</b>
                        <div class="input-group">
                            <select id="restadofamiliarp" name="restadofamiliarp" class="form-control show-tick" style="width: 100%;">
                                <option value="<?php echo $fila[31]; ?>"><?php echo $fila[31]; ?></option>
                                <option value="0">Seleccione...</option>
                                <option value="Soltero">Soltero</option>
                                <option value="Casado">Casado</option>
                                <option value="Divorciado">Divorciado</option>
                                <option value="Acompañado">Acompañado</option>
                            </select>
                        </div>
                    </div>
                </p>                
                </div>
                </fieldset>

                <fieldset>                    
                    <div class="row form-group col-md-12">

                    <div class="col-md-4">
                    <b>Grado de Estudio </b>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <img src="../images/iconos/01.svg">
                        </span>
                        <input type="String" name="rgraestp" autocomplete="off" value="<?php echo $fila[32]; ?>" required autofocus>
                    </div>
                </div>

                <div class="col-md-4">
                    <b>Profesión </b>                
                    <div class="input-group">
                        <span class="input-group-addon">
                            <img src="../images/iconos/01.svg">
                        </span>
                        <input type="String" name="rprofp" autocomplete="off" value="<?php echo $fila[33]; ?>" required autofocus>
                    </div>
                </div>

                <div class="col-md-4">
                    <b>Direccion </b>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <img src="../images/iconos/01.svg">
                        </span>
                        <input type="String" name="rdireccionp" autocomplete="off" value="<?php echo $fila[34]; ?>" required autofocus>
                    </div>
                </div>

                <div class="col-md-4">
                    <b>Lugar de Trabajo </b>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <img src="../images/iconos/01.svg">
                        </span>
                        <input type="String" name="rlugartrap" autocomplete="off" value="<?php echo $fila[37]; ?>" required autofocus>
                    </div>
                </div>

                <div class="col-md-4">
                    <b>Telefono</b>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <img src="../images/iconos/phone.svg">
                        </span>
                        <input type="String" class="phone-number" name="rtelefonop" placeholder="0000-0000" pattern="([0-9]{4})[-]([0-9]{4})" autocomplete="off" value="<?php echo $fila[35]; ?>" required autofocus>
                    </div>
                </div>

                <div class="col-md-4">
                    <b>Email</b>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <img src="../images/iconos/email.svg">
                        </span>
                        <input type="String" class="email" name="remailp" autocomplete="off" value="<?php echo $fila[36]; ?>" required autofocus>
                    </div>
                </div>                
                    </div>
                </fieldset>
                <!----------Datos de la Madre de Familia---------->
                <legend>Datos de la Madre de Familia</legend>
                <fieldset>
                            <div class="row form-group col-md-12">

                            <div class="col-md-4">
                                    <b>N° DUI</b>
                                    <div class="input-group">
                                    <span class="input-group-addon">
                                            <img src="../images/iconos/group-24px.svg">
                                        </span>
                                            <input type="String" class="dui-number" name="rduim" placeholder="0000000-0" 
                                            autocomplete="off" value="<?php echo $fila[42]; ?>" required autofocus> 
                                    </div>
                                </div>

                                <div class="col-md-5">
                                    <b>N° NIT</b>
                                    <div class="input-group">
                                    <span class="input-group-addon">
                                            <img src="../images/iconos/group-24px.svg">
                                        </span>
                                            <input type="String" class="nit-number" name="rnitm" placeholder="0000-000000-000-0" 
                                            autocomplete="off" value="<?php echo $fila[43]; ?>" required autofocus> 
                                    </div>
                                </div>

                            <div class="col-md-4">
                                    <b>Nombres</b>
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <img src="../images/iconos/person.svg">
                                        </span>
                                        
                                            <input type="String"  name="rnombresm" onkeypress="return soloLetras(event)" autocomplete="off"  value="<?php echo $fila[44]; ?>" onchange="soloLetras() " required autofocus>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <b>Apellidos</b>
                                    <div class="input-group">
                                    <span class="input-group-addon">
                                            <img src="../images/iconos/person.svg">
                                        </span>
                                            <input type="String"  name="rapellidosm" onkeypress="return soloLetras(event)" autocomplete="off" value="<?php echo $fila[45]; ?>" required autofocus>
                                    </div>
                                </div>       
                                
                                <div class="col-md-3">
                                    <b>Fecha de Nacimiento</b>
                                    <div class="input-group">
                                    <span class="input-group-addon">
                                            <img src="../images/iconos/date_range.svg">
                                        </span>
                                             <label> <input  type="date" min="1990-01-01" name="rfnacimientom" value="<?php echo $fila[46]; ?>" onchange="FormatDateField(this) " required autofocus> </label></td>
                                        
                                    </div>
                                </div>
                            </div>
                </fieldset>
                            
                                <fieldset>
                            <div class="row form-group col-md-12">

                                <p>
                                    <div class="col-md-4">
                                        <b>Genero</b>
                                        <br>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <img src="../images/iconos/group-24px.svg">
                                            </span>
                                            <input type="radio" name="rgenerom" id="rmam" class="with-gap radio-col-blue" value="Masculino" <?php
                                              $rgenm = $fila[51];
                                             if ($rgenm == "Masculino") {
                                                  echo "checked";
                                                    }
                                                    ?>>
                                            <label for="rmam">Masculino</label>

                                            <input type="radio" name="rgenerom" id="rfemm" class="with-gap radio-col-blue" value="Femenino" <?php
                                              $rgenm = $fila[51];
                                             if ($rgenm == "Femenino") {
                                                   echo "checked";
                                                    }
                                                    ?>>
                                            <label for="rfemm">Femenino</label>
                                        </div>
                                    </div>
                                </p>

                                <p>
                                <div class="col-md-4">
                                    <b>Nacionalidad </b>
                                    <div class="input-group">
                                    <span class="input-group-addon">
                                            <img src="../images/iconos/01.svg">
                                        </span>
                                            <input type="String"  name="rnacionalidadm" onkeypress="return soloLetras(event)" autocomplete="off" value="<?php echo $fila[47]; ?>" required autofocus>
                                    </div>
                                </div>
                                </p>

                                <p>
                                <div class="col-md-4">
                                    <b>Lugar de Nacimiento</b>
                                    <div class="input-group">
                                    <span class="input-group-addon">
                                            <img src="../images/iconos/group-24px.svg">
                                        </span>
                                            <input type="String"  name="rlugarnacimientom" onkeypress="return soloLetras(event)" autocomplete="off" value="<?php echo $fila[48]; ?>" required autofocus>
                                    </div>
                                </div>
                                </p>

                                <p>
                                    <div class="col-sm-3 selectContainer">
                                        <b>Dep. de Nacimiento</b>
                                        <div class="input-group">
                                            <select id="rdeptonacm" name="rdeptonacm" class="form-control show-tick" style="width: 100%;">
                                                <option value="<?php echo $fila[49]; ?>"><?php echo $fila[49]; ?></option>
                                                <option value="0">Seleccione...</option>
                                                <option value="Ahuachapánm">Ahuachapán</option>
                                                <option value="Cabañasm">Cabañas</option>
                                                <option value="Chalatenangom">Chalatenango</option>
                                                <option value="Cuscatlánm">Cuscatlán</option>
                                                <option value="La Libertadm">La Libertad</option>
                                                <option value="La Pazm">La Paz</option>
                                                <option value="La Uniónm">La Unión</option>
                                                <option value="Morazánm">Morazán</option>
                                                <option value="San Miguelm">San Miguel</option>
                                                <option value="San Salvadorm">San Salvador</option>
                                                <option value="San Vicentem">San Vicente</option>
                                                <option value="Santa Anam">Santa Ana</option>
                                                <option value="Sonsonatem">Sonsonate</option>
                                                <option value="Usulutánm">Usulután</option>
                                            </select>
                                        </div>
                                    </div>
                                </p>

                                <p>
                                    <div class="col-md-3">
                                        <b>Zona</b>
                                        <br>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <img src="../images/iconos/group-24px.svg">
                                            </span>
                                            <input type="radio" name="rzonam" id="rzm1" class="with-gap radio-col-blue" value="Urbana" <?php
                                                $rzonm = $fila[50];
                                              if ($rzonm == "Urbana") {
                                                 echo "checked";
                                                       }
                                                       ?>>
                                            <label for="rzm1">Urbana</label>

                                            <input type="radio" name="rzonam" id="rzm2" class="with-gap radio-col-blue" value="Rural" <?php
                                                $rzonm = $fila[50];
                                              if ($rzonm == "Rural") {
                                                 echo "checked";
                                                    }
                                                    ?>>
                                            <label for="rzm2">Rural</label>
                                        </div>
                                    </div>
                                </p>                                            

                                <p>
                                    <div class="col-sm-3 selectContainer">
                                        <b>Estado Familiar</b>
                                        <div class="input-group">
                                            <select id="restadofamiliarm" name="restadofamiliarm" class="form-control show-tick" style="width: 100%;">
                                                <option value="<?php echo $fila[52]; ?>"><?php echo $fila[52]; ?></option>
                                                <option value="0">Seleccione...</option>
                                                <option value="Solterom">Soltero</option>
                                                <option value="Casadom">Casado</option>
                                                <option value="Divorciadom">Divorciado</option>
                                                <option value="Acompañadom">Acompañado</option>
                                            </select>
                                        </div>
                                    </div>
                                </p> 
                            </div>
                                </fieldset>

                                <fieldset>
                            <div class="row form-group col-md-12">
                                <p>
                                <div class="col-md-4">
                                    <b>Grado de Estudio </b>
                                    <div class="input-group">
                                    <span class="input-group-addon">
                                            <img src="../images/iconos/01.svg">
                                        </span>
                                            <input type="String"  name="rgraestm" autocomplete="off" value="<?php echo $fila[53]; ?>" required autofocus>
                                    </div>
                                </div>
                                </p>

                                <p>
                                <div class="col-md-4">
                                    <b>Profesión </b>
                                    <div class="input-group">
                                    <span class="input-group-addon">
                                            <img src="../images/iconos/01.svg">
                                        </span>
                                            <input type="String"  name="rprofm" onkeypress="return soloLetras(event)" autocomplete="off" value="<?php echo $fila[54]; ?>" required autofocus>
                                    </div>
                                </div>
                            </p>

                            <p>
                                <div class="col-md-4">
                                    <b>Direccion </b>
                                    <div class="input-group">
                                    <span class="input-group-addon">
                                            <img src="../images/iconos/01.svg">
                                        </span>
                                            <input type="String" name="rdireccionm" autocomplete="off" value="<?php echo $fila[55]; ?>" required autofocus>
                                    </div>
                                </div>
                            </p>

                            <p>
                                <div class="col-md-4">
                                    <b>Lugar de Trabajo </b>
                                    <div class="input-group">
                                    <span class="input-group-addon">
                                            <img src="../images/iconos/01.svg">
                                        </span>
                                            <input type="String" name="rlugartram" onkeypress="return soloLetras(event)" autocomplete="off" value="<?php echo $fila[58]; ?>" required autofocus>
                                    </div>
                                </div>
                            </p>

                            <p>
                                <div class="col-md-4">
                                    <b>Telefono</b>
                                    <div class="input-group">
                                    <span class="input-group-addon">
                                            <img src="../images/iconos/phone.svg">
                                        </span>
                                            <input type="String" class="phone-number" name="rtelefonom" placeholder="0000-0000" pattern="([0-9]{4})[-]([0-9]{4})"
                                            autocomplete="off" value="<?php echo $fila[56]; ?>" required autofocus>    
                                    </div>
                                </div>
                            </p>

                            <p>
                                <div class="col-md-3">
                                    <b>Email</b>
                                    <div class="input-group">  
                                    <span class="input-group-addon">
                                            <img src="../images/iconos/email.svg">
                                        </span>
                                            <input type="String" class="email" name="remailm" autocomplete="off" value="<?php echo $fila[57]; ?>" required autofocus>
                                    </div>
                                </div>
                            </p>
                        </div>
                    </fieldset>

                                <!--Datos de Inscripcion-->
                                <legend>Datos de Inscripción</legend>

                                <div class="row form-group col-md-12">

                                    <div class="col-md-3">
                                        <b>Fecha de Ingreso</b>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <img src="../images/iconos/date_range.svg">
                                            </span>
                                            <div class="form-control input-sm">
                                                <label> <input type="date" min="1990-01-01" name="rfechaingreso" value="<?php echo $fila[61]; ?>" required autofocus> </label></td>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <b>Codigo de Infraestructura</b>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <img src="../images/iconos/apartment-24px.svg">
                                            </span>
                                            <input type="String" name="codinfrax" placeholder="Ingresar Código de Infraestructura" autocomplete="off" value="<?php echo $fila[62]; ?>" required autofocus>
                                        </div>
                                    </div>
                                    <br>
                                    <p>
                                    <div class="col-md-4">
                                        <b>Ciclo</b>
                                        <br>
                                        <div class="input-group">                                            
                                            <input type="radio" name="rciclo" id="rc1" class="with-gap radio-col-blue" value="I CICLO" <?php
                                                $rci = $fila[63];
                                              if ($rci == "I CICLO") {
                                                 echo "checked";
                                                       }
                                                       ?>>
                                            <label for="rc1">l CICLO</label>

                                            <input type="radio" name="rciclo" id="rc2" class="with-gap radio-col-blue" value="II CICLO" <?php
                                                $rci = $fila[63];
                                              if ($rci == "II CICLO") {
                                                 echo "checked";
                                                    }
                                                    ?>>
                                            <label for="rc2">II CICLO</label>

                                            <input type="radio" name="rciclo" id="rc3" class="with-gap radio-col-blue" value="III CICLO" <?php
                                                $rci = $fila[63];
                                              if ($rci == "III CICLO") {
                                                 echo "checked";
                                                    }
                                                    ?>>
                                            <label for="rc3">III CICLO</label>
                                        </div>
                                    </div>
                                </p>                                   
                                </div>
                                <div class="row form-group col-md-12">
                                    <p>
                                        <div class="col-sm-3 selectContainer">
                                            <b>Grado</b>
                                            <div class="input-group">
                                                <select id="gradox" name="gradox" class="form-control show-tick">
                                                    <option value="<?php echo $fila[65]; ?>"><?php echo $fila[65]; ?></option>                                                    
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                    <option value="6">6</option>
                                                    <option value="7">7</option>
                                                    <option value="8">8</option>
                                                    <option value="9">9</option>
                                                </select>
                                            </div>
                                        </div>
                                    </p>

                                    <div class="col-md-3">
                                        <b>Año Lectivo</b>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <img src="../images/iconos/date_range.svg">
                                            </span>
                                            <div class="form-control input-sm">                                                
                                                <input type="date" min="1990-01-01" name="anioelectivox" value="<?php echo $fila[64]; ?>">
                                            </div>
                                        </div>
                                    </div>

                                    <p>
                                        <div class="col-sm-3 selectContainer">
                                            <b>Sección</b>
                                            <div class="input-group">
                                                <select id="seccionx" name="seccionx" class="form-control show-tick">
                                                    <option value="<?php echo $fila[66]; ?>"><?php echo $fila[66]; ?></option>                                                    
                                                    <option value="A">A</option>
                                                    <option value="B">B</option>
                                                    <option value="C">C</option>
                                                </select>
                                            </div>
                                        </div>
                                    </p>

                                    <p>
                                        <div class="col-sm-3 selectContainer">
                                            <b>Turno</b>
                                            <div class="input-group">
                                                <select id="turnox" name="turnox" class="form-control show-tick">
                                                    <option value="<?php echo $fila[67]; ?>"><?php echo $fila[67]; ?></option>
                                                    <option value="Matutino">Matutino</option>
                                                    <option value="Vespertino">Vespertino</option>
                                                </select>
                                            </div>
                                        </div>
                                    </p>

                                    <div class="row form-group col-md-12">
                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <label>Subir Foto</label>                                            
                                                <input type="file" name="rfoto" id="rfoto" class="form-control" accept="image/*">
                                                <?php
                                                    $path = "../images/foto_estudiantes/".$carnet;
                                                    if (file_exists($path)) {
                                                        $directorio = opendir($path);
                                                        while ($archivo = readdir($directorio))
                                                        {
                                                            if (!is_dir($archivo)) {
                                                                echo "<div data='".$path."/".$archivo.
                                                                "'><a href='".$path."/".$archivo."'
                                                                title='Ver Archivo Adjunto'><span
                                                                class='glyphicon
                                                                glyphicon-picture'></span></a>";
                                                                echo "$archivo <a href='#' class='img-delete'
                                                                title='Ver Archivo Adjunto' ><span
                                                                class='glyphicon glyphicon-trash'
                                                                aria-hidden='true'></span></a></div>";
                                                                echo "<img src='../images/foto_estudiantes/$carnet/$archivo'
                                                                alt='200' width='200'/>";
                                                            }
                                                        }
                                                    }
                                                ?>                                                
                                        </div>
                                    </div>
                                </div> 
                                </div>

                                <legend>Datos del Responsable</legend>

                                <div class="row form-group col-md-12">
                                    <div class="col-md-4">
                                        <b>N° DUI</b>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <img src="../images/iconos/group-24px.svg">
                                            </span>
                                            <input type="String" class="dui-number" name="duirx" placeholder="0000000-0" autocomplete="off" value="<?php echo $fila[68]; ?>" required autofocus>
                                        </div>
                                    </div>

                                    <div class="col-md-5">
                                        <b>N° NIT</b>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <img src="../images/iconos/group-24px.svg">
                                            </span>
                                            <input type="String" name="nitrx" placeholder="0000-000000-000-0" class="nit-number" autocomplete="off" value="<?php echo $fila[69]; ?>" required autofocus>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <b>Nombre del Responsable</b>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <img src="../images/iconos/person.svg">
                                            </span>
                                            <input type="String" name="nombresrx" onkeypress="return soloLetras(event)" autocomplete="off" value="<?php echo $fila[70]; ?>" required autofocus>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <b>Apellidos</b>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <img src="../images/iconos/person.svg">
                                            </span>
                                            <input type="String" name="apellidosrx" onkeypress="return soloLetras(event)" autocomplete="off" value="<?php echo $fila[71]; ?>" required autofocus>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <b>Teléfono</b>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <img src="../images/iconos/phone.svg">
                                            </span>
                                            <input type="String" class="phone-number" placeholder="Ex: 0000-0000" name="telefonorx" autocomplete="off" value="<?php echo $fila[72]; ?>" required autofocus>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <b>Direccion</b>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <img src="../images/iconos/01.svg">
                                            </span>
                                            <input type="String" name="direccionrx" autocomplete="off" value="<?php echo $fila[73]; ?>" required autofocus>
                                        </div>
                                    </div>

                                </div>

                    </div>                                
            </div>
        </div>     

            <hr class="sidebar-divider d-none d-md-block">
            <div class="modal-footer">
                <button type="submit" name="editar" class="btn btn-primary waves-effect"><img src="../images/iconos/save.svg">Guardar</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal"><img src="../images/iconos/close.svg">Cerrar</button>
            </div>
            </form>
            </div>
        </div>
    </div>
    <!--Validaciones-->
    <script>

function validarNro(e) {
var key;
if(window.event) // IE
	{
	key = e.keyCode;
	}
else if(e.which) // Netscape/Firefox/Opera
	{
	key = e.which;
	}

if (key < 48 || key > 57)
    {
    if(key == 46 || key == 8) // Detectar . (punto) y backspace (retroceso)
        { return true; }
    else 
        { return false; }
    }
return true;
}

// Validar nombre
if (!preg_match("/^[a-zA-Z'-]+$/",$nombresx)) {
    array_push($errors, "El nombre contiene caracteres inválidos.");
} else if (strlen($firstname) > 18) {
    array_push($errors, "El nombre solo puede contener hasta 18 caracteres.");
} else if (strlen($firstname) < 3) {
    array_push($errors, "El nombre debe tener al menos 3 caracteres.");
}


// Validar apellidos
if (!preg_match("/^[a-zA-Z'-]+$/",$apellidosx)) {
    array_push($errors, "Los apellidos contienen caracteres inválidos.");
} else if (strlen($lastname) > 36) {
    array_push($errors, "Los apellidos solo pueden contener hasta 36 caracteres.");
} else if (strlen($lastname) < 3) {
    array_push($errors, "Los apellidos debe tener al menos 3 caracteres.");
}

</script>

        <script>
function soloLetras(e) {
    key = e.keyCode || e.which;
    tecla = String.fromCharCode(key).toLowerCase();
    letras = " áéíóúabcdefghijklmnñopqrstuvwxyz";
    especiales = [8, 37, 39, 46];

    tecla_especial = false
    for(var i in especiales) {
        if(key == especiales[i]) {
            tecla_especial = true;
            break;
        }
    }

    if(letras.indexOf(tecla) == -1 && !tecla_especial)
        return false;
    
}
</script>
</div>