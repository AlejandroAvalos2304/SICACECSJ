<script language="javascript">
    function alertaExito() {
        alertify.success("<h1>Exito</h1>" + "<p>Se guardo exitosamente</p>" + "<img src='../images/bien.png'>").set({
            transition: 'flipx'
        });
    }

    function alertaError() {
        alertify.error("<h1>Error</h1>" + "<p>No se puedo guardar con exito</p>" + "<img src='../images/error.png'>").dismissOthers();


    }

    function r() {
        header('location: ../docs/docente.php');
    }
</script>

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

<?php
include_once('../config/conexion.php');

if (isset($_POST['agregar'])) {
    $nombresD = $_POST['nombresd'];
    $apellidosD = $_POST['apellidosd'];
    $fechanac = $_POST['fechanac'];
    $genero = $_POST['genero'];
    $esp  = $_POST['esp'];
    $nacionalidad = $_POST['nacion'];
    $depto = $_POST['departx'];
    $mun = $_POST['mun'];
    $direccion = $_POST['dir'];
    $correo = $_POST['correo'];
    $telefono = $_POST['tel'];
    $estado = 1;
    pg_query("BEGIN");

    $result = pg_query($conexion, "INSERT INTO docente(nombresd, apellidosd , fechanac, generod, especialidad, nacionalidad, depdocente, municipiodocente, telefono, correo, direccion, estado) 
    values (trim('$nombresD'), '$apellidosD' , '$fechanac', '$genero', '$esp', '$nacionalidad', '$depto', '$mun', '$telefono', '$correo','$direccion','$estado')");

    if (!$result) {
        pg_query("rollback");
        echo "alertaError();";
        echo "<script language='javascript'>";
        echo "setTimeout ('r()', 1500);";
        echo "</script>";
    } else {
        pg_query("commit");
        echo "<script language='javascript'>";
        echo "alertaExito()";
        echo "</script>";
        echo "<script language='javascript'>";
        echo "setTimeout ('r()', 2000);";
        echo "</script>";
    }
}
?>