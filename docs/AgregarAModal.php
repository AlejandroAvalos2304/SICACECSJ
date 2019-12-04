<?php date_default_timezone_set("America/El_Salvador");                                                    
?>
<script language="javascript" type="text/javascript">

    function generarcodigo() {
        // obteniendo el formulario
        var f = document.forms['datos'];
        // obteniendo los datos de nombres
        var nombre = f.elements['nombresx'].value.substr(0, 1).toUpperCase();
        // obteniendo los datos de apellidos
        var apellido = f.elements['apellidosx'].value.substr(0, 1).toUpperCase();
        // obteniendo el datos de la fecha de nacimiento
        var fech = f.elements['fnacimientox'].value.substr(2, 2).toUpperCase();
        // obtniendo el dato de la fecha de ingreso
        var fechin = f.elements['fechaingresox'].value.substr(5, 2).toUpperCase();
        // obtenemos un numero randon
        <?php $num = rand(0,9);?>

        var carnet = f.elements['carnetx'];

        // generando el codigo
        newcode = nombre + apellido + fech + fechin + "<?php echo $num; ?>";
        // asignando el codigo a nuestro input
        carnet.value = newcode;
    }
</script>


<script>
    ///Para llenar los datos del responsable
function prueba(){
    var opcion = document.getElementById("resx").value;
    var dui = document.getElementById("duirx");
    var nit = document.getElementById("nitrx");
    var nombre = document.getElementById("nombresrx");
    var apellido = document.getElementById("apellidosrx");
    var telefono = document.getElementById("telefonorx");
    var direccion = document.getElementById("direccionrx");

    
    if (opcion == 'Padre') {
        dui.value = document.getElementById("duipx").value;
        nit.value = document.getElementById("nitpx").value;
        nombre.value = document.getElementById("nombrespx").value;
        apellido.value = document.getElementById("apellidospx").value;
        telefono.value = document.getElementById("telefonopx").value;
        direccion.value = document.getElementById("direccionpx").value;
        
    } else if (opcion == 'Madre') {
        dui.value = document.getElementById("duimx").value;
        nit.value = document.getElementById("nitmx").value;
        nombre.value = document.getElementById("nombresmx").value;
        apellido.value = document.getElementById("apellidosmx").value;
        telefono.value = document.getElementById("telefonomx").value;
        direccion.value = document.getElementById("direccionmx").value;
    } else if (opcion == 'Otro') {
         dui = document.getElementById("duirx").value="";
         nit = document.getElementById("nitrx").value="";
         nombre = document.getElementById("nombresrx").value="";
         apellido = document.getElementById("apellidosrx").value="";
         telefono = document.getElementById("telefonorx").value="";
         direccion = document.getElementById("direccionrx").value="";
    }
}
    </script>

<script type="text/javascript" src="../js/deptoA.js"></script>

</script>
<?php
$fecha_min = date("Y-m-d");
$fecha_min = date("Y-m-d", strtotime($fecha_min . "- 30 year"));
$fecha_max = date("Y-m-d");
$fecha_max = date("Y-m-d", strtotime($fecha_max . "- 5 year"));
?>
<script src="../js/pages/forms/advanced-form-elements.js"></script>
<!--Agregar nuevo Alumno Modal -->
<div class="modal fade" id="AgregarModal" tabindex="-2" role="dialog" data-backdrop="static" data-keyboard="false" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                        <form name="datos" id="datos" role="form" action="../docs/AgregarAlumno.php" enctype="multipart/form-data" method="post" class="form-group">
                            <!----------Datos del Alumno---------->                            
                                <legend>Datos del Alumno</legend>
                                <div class="row form-group col-md-12">                 

                                <p>
                                    <div class="col-md-4">
                                        <b>Nombres*</b>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <img src="../images/iconos/person.svg">
                                            </span>

                                            <input type="String" id="nombresx" name="nombresx" onkeypress="return soloLetras(event)" autocomplete="off" value="<?= (isset($_POST['nombresx'])) ? $_POST['nombresx'] : ''; ?>" required autofocus>
                                        </div>
                                    </div>
                                </p>

                                <p>
                                    <div class="col-md-4">
                                        <b>Apellidos*</b>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <img src="../images/iconos/person.svg">
                                            </span>
                                            <input type="String" id="apellidosx" name="apellidosx" onkeypress="return soloLetras(event)" autocomplete="off" value="<?= (isset($_POST['apellidosx'])) ? $_POST['apellidosx'] : ''; ?>" required autofocus>
                                        </div>
                                    </div>
                                </p>

                                <div class="row form-group col-md-12">
                                <p>
                                    <div class="col-md-3">
                                        <b>Fecha de Nacimiento*</b>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <img src="../images/iconos/date_range.svg">
                                            </span>
                                            <div class="form-control input-sm">
                                                 <input type="date" min="1990-01-01" id="fnacimientox" name="fnacimientox" value="<?= (isset($_POST['fnacimientox'])) ? $_POST['fnacimientox'] : ''; ?>" required autofocus>
                                            </div>
                                        </div>
                                    </div>
                                </p>

                                    <div class="col-md-4">
                                        <b>Nacionalidad*</b>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <img src="../images/iconos/01.svg">
                                            </span>
                                            <input type="String" id="nacionalidadx" name="nacionalidadx" onkeypress="return soloLetras(event)" autocomplete="off" value="<?= (isset($_POST['nacionalidadx'])) ? $_POST['nacionalidadx'] : ''; ?>" required autofocus>
                                        </div>
                                    </div>
                                
                                    <div class="col-md-4">
                                        <b>Lugar de Nacimiento*</b>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <img src="../images/iconos/03.svg">
                                            </span>
                                            <input type="String" id="lugarnacimientox" name="lugarnacimientox" onkeypress="return soloLetras(event)" autocomplete="off" value="<?= (isset($_POST['lugarnacimientox'])) ? $_POST['lugarnacimientox'] : ''; ?>" required autofocus>
                                        </div>
                                    </div>
                                </div>

                                    <p>
                                        <div class="col-md-4">
                                            <b>Género</b>
                                            <br>
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <img src="../images/iconos/group-24px.svg">
                                                </span>
                                                <input type="radio" required name="generox" id="r1" class="with-gap radio-col-blue" value="Masculino" checked><label for="r1">Masculino</label>
                                                <input type="radio" required name="generox" id="r2" class="with-gap radio-col-blue" value="Femenino"><label for="r2">Femenino</label>
                                            </div>
                                        </div>
                                    </p>

                                    <p>
                                        <div class="col-sm-3 selectContainer">
                                            <b>Estado Civil</b>
                                            <div class="input-group">
                                                <select id="estadocivilx" name="estadocivilx" class="form-control show-tick">
                                                    <option value="0">Seleccione...</option>
                                                    <option value="Soltero">Soltero</option>
                                                    <option value="Casado">Casado</option>
                                                    <option value="Divorciado">Divorciado</option>
                                                    <option value="Acompañado">Acompañado</option>
                                                </select>

                                            </div>
                                        </div>
                                    </p>
                                    <input name="carnetx" style="visibility:hidden" value="<?= (isset($_POST['carnetx'])) ? $_POST['carnetx'] : ''; ?>">

                                </div>

                                <!----------Datos de Contanto del Alumno---------->


                                <legend>Datos de Contanto del Alumno</legend>
                                <div class="row form-group col-md-12">

                                    <p>
                                        <div class="col-sm-3 selectContainer">
                                            <b>Depto. en que Habita*</b>
                                            <div class="input-group">
                                                <select id="deptonacx" name="deptonacx" class="form-control show-tick" required>                                                    
                                                </select>
                                            </div>
                                        </div>
                                    </p>                                    

                                    <div class="col-md-4">
                                        <b>Municipio</b>
                                        <div class="input-group">
                                        <select id="munnacx" name="munnacx" class="form-control show-tick" style="width: 100%;">
                                                </select>
                                            </div>
                                </div>

                                <p>
                                        <div class="col-md-3">
                                            <b>Zona</b>
                                            <br>
                                            <div class="input-group">

                                                <input type="radio" required name="zonax" id="z1" class="with-gap radio-col-blue" value="Urbana" checked><label for="z1">Urbana</label>
                                                <input type="radio" required name="zonax" id="z2" class="with-gap radio-col-blue" value="Rural"><label for="z2">Rural</label>
                                            </div>
                                        </div>
                                    </p>

                                    <div class="col-md-10">
                                        <b>Direccion</b>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <img src="../images/iconos/group-24px.svg">
                                            </span>
                                            <textarea type="String" cols="90" rows="5" style="resize: both;" id="direccionx" name="direccionx" autocomplete="off" value="<?= (isset($_POST['direccionx'])) ? $_POST['direccionx'] : ''; ?>" required autofocus></textarea>
                                        </div>
                                    </div>
                                </div> 
                                    <div class="row form-group col-md-12">
                                    <p>
                                        <div class="col-sm-3">
                                            <b>Tipo de Calle</b>
                                            <div class="input-group">
                                                <select id="tipocallex" name="tipocallex" onkeypress="return soloLetras(event)" class="form-control show-tick">
                                                    <option value="No definido">Seleccione...</option>
                                                    <option value="Carretera">Carretera</option>
                                                    <option value="Empedrada">Empedrada</option>
                                                    <option value="Sendero">Sendero</option>
                                                    <option value="Polvosa">Polvosa</option>
                                                </select>
                                            </div>
                                        </div>
                                    </p>
                                

                                    
                                    <div class="col-md-4">
                                        <b>Telefono</b>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <img src="../images/iconos/phone.svg">
                                            </span>
                                            <input type="String" class="phone-number" placeholder="Ex: 0000-0000" id="telefonox" name="telefonox" autocomplete="off" value="<?= (isset($_POST['telefonox'])) ? $_POST['telefonox'] : ''; ?>" required autofocus>
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <b>Email</b>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <img src="../images/iconos/email.svg">
                                            </span>
                                            <input type="String" class="email" id="emailx" name="emailx" placeholder='ejemplo@ejemplo.com' autocomplete="off" value="<?= (isset($_POST['emailx'])) ? $_POST['emailx'] : ''; ?>" required autofocus>
                                        </div>
                                    </div>
                                </div>

                                <!----------Otros Datos---------->

                                <div class="row form-group col-md-12">


                                    <p>
                                        <div class="col-sm-3 selectContainer">
                                            <b>Medio de Transporte</b>
                                            <div class="input-group">
                                                <select id="mediotransx" name="mediotransx" class="form-control show-tick">
                                                    <option value="0">Seleccione...</option>
                                                    <option value="A Pie">A Pie</option>
                                                    <option value="Autobus">Autobus</option>
                                                    <option value="Automóvil">Automovil</option>
                                                    <option value="Otros">Otros</option>
                                                </select>
                                            </div>
                                        </div>
                                    </p>

                                    <div class="col-md-3">
                                        <b>Distancia al C.E</b>
                                        <div class="input-group">
                                            <input type="String" id="distanciax" name="distanciax" autocomplete="off" value="<?= (isset($_POST['distanciax'])) ? $_POST['distanciax'] : ''; ?>" required autofocus>
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <b>Factor riesgo</b>
                                        <div class="input-group">

                                            <input type="String" id="factorriesgox" name="factorriesgox" onkeypress="return soloLetras(event)" autocomplete="off" value="<?= (isset($_POST['factorriesgox'])) ? $_POST['factorriesgox'] : ''; ?>" required autofocus>
                                        </div>
                                    </div>
                                </div>

                                    <div class="row form-group col-md-12">
                                    <p>
                                        <div class="col-md-3">
                                            <b>Trabaja</b>
                                            <br>
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <img src="../images/iconos/group-24px.svg">
                                                </span>
                                                <input type="radio" required name="trabajax" id="tra1" class="with-gap radio-col-blue" value="Si" checked><label for="tra1">Si</label>
                                                <input type="radio" required name="trabajax" id="tra2" class="with-gap radio-col-blue" value="No"><label for="tra2">No</label>
                                            </div>
                                        </div>
                                    </p>

                                    <p>
                                        <div class="col-sm-3 selectContainer">
                                            <b>Dependencia Económica</b>
                                            <div class="input-group">
                                                <select id="dependenciaecox" name="dependenciaecox" class="form-control show-tick">
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


                                <!----------Datos de Salud---------->

                                <legend>Datos Salud</legend>
                                <div class="row form-group col-md-12">

                                    <p>
                                        <div class="col-md-3">
                                            <b>Presenta Tarjeta de Vacunas</b>
                                            <br>
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <img src="../images/iconos/group-24px.svg">
                                                </span>
                                                <input type="radio" required name="tarjetavacunasx" id="tva1" class="with-gap radio-col-blue" value="Si" checked><label for="tva1">Si</label>
                                                <input type="radio" required name="tarjetavacunasx" id="tva2" class="with-gap radio-col-blue" value="No"><label for="tva2">No</label>
                                            </div>
                                        </div>
                                    </p>

                                    <p>
                                        <div class="col-md-3">
                                            <b>Esquema de Vacunas Completo</b>
                                            <br>
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <img src="../images/iconos/group-24px.svg">
                                                </span>
                                                <input type="radio" required name="esquemavacunasx" id="ev1" class="with-gap radio-col-blue" value="Si" checked><label for="ev1">Si</label>
                                                <input type="radio" required name="esquemavacunasx" id="ev2" class="with-gap radio-col-blue" value="No"><label for="ev2">No</label>
                                            </div>
                                        </div>
                                    </p>
                                </div>

                                <div class="row form-group col-md-12">
                                    <div class="col-md-4">
                                        <b>Discapacidad o Enfermedad</b>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <img src="../images/iconos/group-24px.svg">
                                            </span>
                                            <input type="String" id="enfdisx" name="enfdisx" onkeypress="return soloLetras(event)" autocomplete="off" value="<?= (isset($_POST['enfdisx'])) ? $_POST['enfdisx'] : ''; ?>" required autofocus>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <b>Tiene Alguna Prescripción Médica</b>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <img src="../images/iconos/group-24px.svg">
                                            </span>
                                            <input type="String" id="premedx" name="premedx" onkeypress="return soloLetras(event)" autocomplete="off" value="<?= (isset($_POST['premedx'])) ? $_POST['premedx'] : ''; ?>" required autofocus>
                                        </div>
                                    </div>
                                </div>


                                <!----------Datos del Padre de Familia---------->

                                <legend>Datos del Padre de Familia</legend>
                                <div class="row form-group col-md-12">

                                    <div class="col-md-4">
                                        <b>N° DUI</b>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <img src="../images/iconos/group-24px.svg">
                                            </span>
                                            <input type="String" class="dui-number" id="duipx" name="duipx" placeholder="0000000-0" autocomplete="off" value="<?= (isset($_POST['duipx'])) ? $_POST['duipx'] : ''; ?>" required autofocus>
                                        </div>
                                    </div>

                                    <div class="col-md-5">
                                        <b>N° NIT</b>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <img src="../images/iconos/group-24px.svg">
                                            </span>
                                            <input type="String" id="nitpx" name="nitpx" placeholder="0000-000000-000-0" class="nit-number" autocomplete="off" value="<?= (isset($_POST['nitpx'])) ? $_POST['nitpx'] : ''; ?>" required autofocus>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <b>Nombres</b>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <img src="../images/iconos/person.svg">
                                            </span>

                                            <input type="String" id="nombrespx" name="nombrespx" onkeypress="return soloLetras(event)" autocomplete="off" value="<?= (isset($_POST['nombrespx'])) ? $_POST['nombrespx'] : ''; ?>" onchange="soloLetras() " required autofocus>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <b>Apellidos</b>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <img src="../images/iconos/person.svg">
                                            </span>
                                            <input type="String" id="apellidospx" name="apellidospx" onkeypress="return soloLetras(event)" autocomplete="off" value="<?= (isset($_POST['apellidospx'])) ? $_POST['apellidospx'] : ''; ?>" required autofocus>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <b>Fecha de Nacimiento</b>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <img src="../images/iconos/date_range.svg">
                                            </span>
                                            <div class="form-control input-sm">
                                                <label> <input type="date" min="1990-01-01" id="fnacimientopx" name="fnacimientopx" value="<?= (isset($_POST['fnacimientopx'])) ? $_POST['fnacimientopx'] : ''; ?>" onchange="FormatDateField(this) " required autofocus> </label></td>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                    <div class="row form-group col-md-12">
                                    <div class="col-md-4">
                                        <b>Nacionalidad </b>
                                        <div class="input-group">
                                        <span class="input-group-addon">
                                                <img src="../images/iconos/03.svg">
                                            </span>
                                            <input type="String" id="nacionalidadpx" name="nacionalidadpx" onkeypress="return soloLetras(event)" autocomplete="off" value="<?= (isset($_POST['nacionalidadpx'])) ? $_POST['nacionalidadpx'] : ''; ?>" required autofocus>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <b>Lugar de Nacimiento</b>
                                        <div class="input-group">
                                        <span class="input-group-addon">
                                                <img src="../images/iconos/03.svg">
                                            </span>
                                            <input type="String" id="lugarnacimientopx" name="lugarnacimientopx" onkeypress="return soloLetras(event)" autocomplete="off" value="<?= (isset($_POST['lugarnacimientopx'])) ? $_POST['lugarnacimientopx'] : ''; ?>" required autofocus>
                                        </div>
                                    </div>

                                    <p>
                                        <div class="col-sm-3 selectContainer">
                                            <b>Depto. de Nacimiento</b>
                                            <div class="input-group">
                                                <select id="deptonacpx" name="deptonacpx" class="form-control show-tick">                                                
                                                </select>
                                            </div>
                                        </div>
                                    </p>
                                </div>

                                <div class="row form-group col-md-12">
                                    <p>
                                        <div class="col-md-3">
                                            <b>Zona</b>
                                            <br>
                                            <div class="input-group">
                                                <input type="radio" required name="zonapx" id="zp1" class="with-gap radio-col-blue" value="Urbana" checked><label for="zp1">Urbana</label>
                                                <input type="radio" required name="zonapx" id="zp2" class="with-gap radio-col-blue" value="Rural"><label for="zp2">Rural</label>
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
                                                <input type="radio" required name="generopx" id="gp1" class="with-gap radio-col-blue" value="Masculino" checked><label for="gp1">Masculino</label>
                                                <input type="radio" required name="generopx" id="gp2" class="with-gap radio-col-blue" value="Femenino"><label for="gp2">Femenino</label>
                                            </div>
                                        </div>
                                    </p>

                                    <p>
                                        <div class="col-sm-3 selectContainer">
                                            <b>Estado Familiar</b>
                                            <div class="input-group">
                                                <select id="estadofamiliarpx" name="estadofamiliarpx" class="form-control show-tick">
                                                    <option value="0">Seleccione...</option>
                                                    <option value="Solterop">Soltero</option>
                                                    <option value="Casadop">Casado</option>
                                                    <option value="Divorciadop">Divorciado</option>
                                                    <option value="Acompañadop">Acompañado</option>
                                                </select>
                                            </div>
                                        </div>
                                    </p>
                                </div>

                                <div class="row form-group col-md-12">
                                    <div class="col-md-4">
                                        <b>Grado de Estudio </b>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <img src="../images/iconos/school-24px.svg">
                                            </span>
                                            <input type="String" id="graestpx" name="graestpx" autocomplete="off" value="<?= (isset($_POST['graestpx'])) ? $_POST['graestpx'] : ''; ?>" required autofocus>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <b>Profesión </b>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <img src="../images/iconos/01.svg">
                                            </span>
                                            <input type="String" id="profpx" name="profpx" onkeypress="return soloLetras(event)" autocomplete="off" value="<?= (isset($_POST['profpx'])) ? $_POST['profpx'] : ''; ?>" required autofocus>
                                        </div>
                                    </div>
                                </div>

                                    <div class="row form-group col-md-12">
                                    <div class="col-md-4">
                                        <b>Direccion </b>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <img src="../images/iconos/01.svg">
                                            </span>
                                            <textarea type="String" cols="90" rows="5" style="resize: both;" id="direccionpx" name="direccionpx" autocomplete="off" value="<?= (isset($_POST['direccionpx'])) ? $_POST['direccionpx'] : ''; ?>" required autofocus></textarea>
                                        </div>
                                    </div>
                                    </div>

                                    <div class="row form-group col-md-12">
                                    <div class="col-md-4">
                                        <b>Lugar de Trabajo </b>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <img src="../images/iconos/work-24px.svg">
                                            </span>
                                            <input type="String" id="lugartrapx" name="lugartrapx" onkeypress="return soloLetras(event)" autocomplete="off" value="<?= (isset($_POST['lugartrapx'])) ? $_POST['lugartrapx'] : ''; ?>" required autofocus>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <b>Telefono</b>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <img src="../images/iconos/phone.svg">
                                            </span>
                                            <input type="String" class="phone-number" id="telefonopx" name="telefonopx" placeholder="0000-0000" autocomplete="off" value="<?= (isset($_POST['telefonopx'])) ? $_POST['telefonopx'] : ''; ?>" required autofocus>
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <b>Email</b>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <img src="../images/iconos/email.svg">
                                            </span>
                                            <input type="String" class="email" id="emailpx" name="emailpx" placeholder='ejemplo@ejemplo.com' autocomplete="off" value="<?= (isset($_POST['emailpx'])) ? $_POST['emailpx'] : ''; ?>" required autofocus>
                                        </div>
                                    </div>

                                </div>


                                <!----------Datos de la Madre de Familia---------->

                                <legend>Datos de la Madre de Familia</legend>

                                <div class="row form-group col-md-12">
                                    <div class="col-md-4">
                                        <b>N° DUI</b>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <img src="../images/iconos/group-24px.svg">
                                            </span>
                                            <input type="String" class="dui-number" id="duimx" name="duimx" placeholder="0000000-0" autocomplete="off" value="<?= (isset($_POST['duimx'])) ? $_POST['duimx'] : ''; ?>" required autofocus>
                                        </div>
                                    </div>

                                    <div class="col-md-5">
                                        <b>N° NIT</b>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <img src="../images/iconos/group-24px.svg">
                                            </span>
                                            <input type="String" class="nit-number" id="nitmx" name="nitmx" placeholder="0000-000000-000-0" autocomplete="off" value="<?= (isset($_POST['nitmx'])) ? $_POST['nitmx'] : ''; ?>" required autofocus>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <b>Nombres</b>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <img src="../images/iconos/person.svg">
                                            </span>

                                            <input type="String" id="nombresmx" name="nombresmx" onkeypress="return soloLetras(event)" autocomplete="off" value="<?= (isset($_POST['nombresmx'])) ? $_POST['nombresmx'] : ''; ?>" onchange="soloLetras() " required autofocus>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <b>Apellidos</b>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <img src="../images/iconos/person.svg">
                                            </span>
                                            <input type="String" id="apellidosmx" name="apellidosmx" onkeypress="return soloLetras(event)" autocomplete="off" value="<?= (isset($_POST['apellidosmx'])) ? $_POST['apellidosmx'] : ''; ?>" required autofocus>
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <b>Fecha de Nacimiento</b>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <img src="../images/iconos/date_range.svg">
                                            </span>
                                            <div class="form-control input-sm">
                                                <label> <input type="date" min="1990-01-01" id="fnacimientomx" name="fnacimientomx" value="<?= (isset($_POST['fnacimientomx'])) ? $_POST['fnacimientomx'] : ''; ?>" onchange="FormatDateField(this) " required autofocus> </label></td>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row form-group col-md-12">
                                    <div class="col-md-4">
                                        <b>Nacionalidad </b>
                                        <div class="input-group">
                                        <span class="input-group-addon">
                                                <img src="../images/iconos/03.svg">
                                            </span>
                                            <input type="String" id="nacionalidadmx" name="nacionalidadmx" onkeypress="return soloLetras(event)" autocomplete="off" value="<?= (isset($_POST['nacionalidadmx'])) ? $_POST['nacionalidadmx'] : ''; ?>" required autofocus>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <b>Lugar de Nacimiento</b>
                                        <div class="input-group">
                                        <span class="input-group-addon">
                                                <img src="../images/iconos/03.svg">
                                            </span>
                                            <input type="String" id="lugarnacimientomx" name="lugarnacimientomx" onkeypress="return soloLetras(event)" autocomplete="off" value="<?= (isset($_POST['lugarnacimientomx'])) ? $_POST['lugarnacimientomx'] : ''; ?>" required autofocus>
                                        </div>
                                    </div>

                                    <p>
                                        <div class="col-sm-3 selectContainer">
                                            <b>Depto. de Nacimiento</b>
                                            <div class="input-group">
                                                <select id="deptonacmx" name="deptonacmx" class="form-control show-tick">                                                
                                                </select>
                                            </div>
                                        </div>
                                    </p>
                                </div>

                                <div class="row form-group col-md-12">
                                    <p>
                                        <div class="col-md-3">
                                            <b>Zona</b>
                                            <br>
                                            <div class="input-group">
                                                <input type="radio" required name="zonamx" id="zm1" class="with-gap radio-col-blue" value="Urbana" checked><label for="zm1">Urbana</label>
                                                <input type="radio" required name="zonamx" id="zm2" class="with-gap radio-col-blue" value="Rural"><label for="zm2">Rural</label>
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
                                                <input type="radio" required name="generomx" id="gm1" class="with-gap radio-col-blue" value="Masculino" checked><label for="gm1">Masculino</label>
                                                <input type="radio" required name="generomx" id="gm2" class="with-gap radio-col-blue" value="Femenino"><label for="gm2">Femenino</label>
                                            </div>
                                        </div>
                                    </p>

                                    <p>
                                        <div class="col-sm-3 selectContainer">
                                            <b>Estado Familiar</b>
                                            <div class="input-group">
                                                <select id="estadofamiliarmx" name="estadofamiliarmx" class="form-control show-tick">
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

                                <div class="row form-group col-md-12">
                                    <div class="col-md-4">
                                        <b>Grado de Estudio </b>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <img src="../images/iconos/school-24px.svg">
                                            </span>
                                            <input type="String" id="graestmx" name="graestmx" autocomplete="off" value="<?= (isset($_POST['graestmx'])) ? $_POST['graestmx'] : ''; ?>" required autofocus>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <b>Profesión </b>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <img src="../images/iconos/01.svg">
                                            </span>
                                            <input type="String" id="profmx" name="profmx" onkeypress="return soloLetras(event)" autocomplete="off" value="<?= (isset($_POST['profmx'])) ? $_POST['profmx'] : ''; ?>" required autofocus>
                                        </div>
                                    </div>
                                </div>

                                <div class="row form-group col-md-12">
                                    <div class="col-md-4">
                                        <b>Direccion </b>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <img src="../images/iconos/01.svg">
                                            </span>
                                            <textarea type="String" cols="90" rows="5" style="resize: both;" id="direccionmx" name="direccionmx" autocomplete="off" value="<?= (isset($_POST['direccionmx'])) ? $_POST['direccionmx'] : ''; ?>" required autofocus></textarea>
                                        </div>
                                    </div>
                                </div>

                                <div class="row form-group col-md-12">
                                    <div class="col-md-4">
                                        <b>Lugar de Trabajo </b>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <img src="../images/iconos/work-24px.svg">
                                            </span>
                                            <input type="String" id="lugartramx" name="lugartramx" onkeypress="return soloLetras(event)" autocomplete="off" value="<?= (isset($_POST['lugartramx'])) ? $_POST['lugartramx'] : ''; ?>" required autofocus>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <b>Telefono</b>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <img src="../images/iconos/phone.svg">
                                            </span>
                                            <input type="String" class="phone-number" id="telefonomx" name="telefonomx" placeholder='0000-0000' autocomplete="off" value="<?= (isset($_POST['telefonomx'])) ? $_POST['telefonomx'] : ''; ?>" required autofocus>
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <b>Email</b>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <img src="../images/iconos/email.svg">
                                            </span>
                                            <input type="String" class="email" id="emailmx" name="emailmx" placeholder='ejemplo@ejemplo.com' autocomplete="off" value="<?= (isset($_POST['emailmx'])) ? $_POST['emailmx'] : ''; ?>" required autofocus>
                                        </div>
                                    </div>
                                </div>

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
                                                <label> <input type="date" min="1990-01-01" id="fechaingresox" name="fechaingresox" value="<?= (isset($_POST['fechaingresox'])) ? $_POST['fechaingresox'] : ''; ?>" onchange="FormatDateField(this) " required autofocus> </label></td>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <b>Codigo de Infraestructura</b>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <img src="../images/iconos/apartment-24px.svg">
                                            </span>
                                            <input type="String" id="codinfrax" name="codinfrax" placeholder="Ingresar Código de Infraestructura" autocomplete="off" value="<?= (isset($_POST['codinfrax'])) ? $_POST['codinfrax'] : ''; ?>" required autofocus>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="form-group">
                                        <label>Ciclo</label>
                                        <input type="radio" name="ciclox" id="c1" class="with-gap radio-col-blue" value="I CICLO" checked>
                                        <label for="c1">I Ciclo</label>

                                        <input type="radio" name="ciclox" id="c2" class="with-gap radio-col-blue" value="II CICLO">
                                        <label for="c2">II Ciclo</label>

                                        <input type="radio" name="ciclox" id="c3" class="with-gap radio-col-blue" value="III CICLO">
                                        <label for="c3">III Ciclo</label>
                                    </div>
                                </div>

                                <div class="row form-group col-md-12">
                                    <p>
                                        <div class="col-sm-3 selectContainer">
                                            <b>Grado</b>
                                            <div class="input-group">
                                                <select id="gradox" name="gradox" class="form-control show-tick">
                                                    <option value="0">Seleccione...</option>
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
                                                <?php $fecha = strftime("%Y-%m-%d", time()); ?>
                                                <input type="date" min="1990-01-01" id="anioelectivox" name="anioelectivox" value="<?php echo $fecha; ?>">
                                            </div>
                                        </div>
                                    </div>

                                    <p>
                                        <div class="col-sm-3 selectContainer">
                                            <b>Sección</b>
                                            <div class="input-group">
                                                <select id="seccionx" name="seccionx" class="form-control show-tick">
                                                    <option value="0">Seleccione...</option>
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
                                                    <option value="0">Seleccione...</option>
                                                    <option value="Matutino">Matutino</option>
                                                    <option value="Vespertino">Vespertino</option>
                                                </select>
                                            </div>
                                        </div>
                                    </p>
                                </div>
                                
                                <div class="row form-group col-md-12">
                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <label>Subir Foto</label>                                            
                                                <input type="file" name="fotox" id="fotox" class="form-control" accept="image/*">                                                
                                        </div>
                                    </div>
                                </div>                                   
                                

                                <legend>Datos del Responsable</legend>

                                    <p>
                                        <div class="col-sm-3 selectContainer">
                                            <b>Responsable</b>
                                            <div class="input-group">
                                                <select id="resx" name="resx" class="form-control show-tick" onchange= "javascript:prueba()">
                                                    <option value="0">Seleccione...</option>
                                                    <option value="Padre">Padre</option>
                                                    <option value="Madre">Madre</option>
                                                    <option value="Otro">Otro</option>
                                                </select>
                                            </div>
                                        </div>
                                    </p>

                                <div class="row form-group col-md-12">
                                    <div class="col-md-4">
                                        <b>N° DUI</b>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <img src="../images/iconos/group-24px.svg">
                                            </span>
                                            <input type="String" class="dui-number" name="duirx" id="duirx" placeholder="0000000-0" autocomplete="off" value="<?= (isset($_POST['duirx'])) ? $_POST['duirx'] : ''; ?>" required autofocus>
                                        </div>
                                    </div>

                                    <div class="col-md-5">
                                        <b>N° NIT</b>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <img src="../images/iconos/group-24px.svg">
                                            </span>
                                            <input type="String" id="nitrx" name="nitrx" placeholder="0000-000000-000-0" class="nit-number" autocomplete="off" value="<?= (isset($_POST['nitrx'])) ? $_POST['nitrx'] : ''; ?>" required autofocus>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <b>Nombres</b>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <img src="../images/iconos/person.svg">
                                            </span>
                                            <input type="String" id="nombresrx" name="nombresrx" onkeypress="return soloLetras(event)" autocomplete="off" value="<?= (isset($_POST['nombresrx'])) ? $_POST['nombresrx'] : ''; ?>" required autofocus>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <b>Apellidos</b>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <img src="../images/iconos/person.svg">
                                            </span>
                                            <input type="String" id="apellidosrx" name="apellidosrx" onkeypress="return soloLetras(event)" autocomplete="off" value="<?= (isset($_POST['apellidosrx'])) ? $_POST['apellidosrx'] : ''; ?>" required autofocus>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <b>Teléfono</b>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <img src="../images/iconos/phone.svg">
                                            </span>
                                            <input type="String" class="phone-number" placeholder="Ex: 0000-0000" id="telefonorx" name="telefonorx" autocomplete="off" value="<?= (isset($_POST['telefonorx'])) ? $_POST['telefonorx'] : ''; ?>" required autofocus>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <b>Direccion</b>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <img src="../images/iconos/01.svg">
                                            </span>
                                            <textarea type="String" cols="90" rows="5" style="resize: both;" id="direccionrx" name="direccionrx" autocomplete="off" value="<?= (isset($_POST['direccionrx'])) ? $_POST['direccionrx'] : ''; ?>" required autofocus></textarea>
                                        </div>
                                    </div>

                                </div>
                    </div>

                </div>
            </div>
            <hr class="sidebar-divider d-none d-md-block">
            <div class="modal-footer">
                <button type="submit" name="agregar" onclick="generarcodigo();" class="btn btn-primary waves-effect"><img src="../images/iconos/save.svg">Guardar</button>
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

    // Validar nombre
    if (!preg_match("/^[a-zA-Z'-]+$/", $nombresx)) {
        array_push($errors, "El nombre contiene caracteres inválidos.");
    } else if (strlen($firstname) > 18) {
        array_push($errors, "El nombre solo puede contener hasta 18 caracteres.");
    } else if (strlen($firstname) < 3) {
        array_push($errors, "El nombre debe tener al menos 3 caracteres.");
    }


    // Validar apellidos
    if (!preg_match("/^[a-zA-Z'-]+$/", $apellidosx)) {
        array_push($errors, "Los apellidos contienen caracteres inválidos.");
    } else if (strlen($lastname) > 36) {
        array_push($errors, "Los apellidos solo pueden contener hasta 36 caracteres.");
    } else if (strlen($lastname) < 3) {
        array_push($errors, "Los apellidos debe tener al menos 3 caracteres.");
    }

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
</script>