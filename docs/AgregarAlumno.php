<script language="javascript">
    function alertaExito() {
        alertify.success("<h1>Exito</h1>" + "<p>Se guardo exitosamente</p>" + "<img src='../images/bien.png'>").set({
            transition: 'flipx'
        });
    }

    function alertaError() {
        alertify.error("<h1>Error</h1>" + "<p>No se puedo guardar exitosamente</p>" + "<img src='../images/error.png'>").dismissOthers();


    }

    function r() {
        header('location: ../docs/alumnos.php');
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
    $carnetx = $_POST['carnetx'];
    $nombresx = $_POST['nombresx'];
    $apellidosx = $_POST['apellidosx'];
    $nacionalidadx = $_POST['nacionalidadx'];
    $deptonacx = $_POST['deptonacx'];
    $munnacx = $_POST['munnacx'];
    $direccionx = $_POST['direccionx'];
    $emailx = $_POST['emailx'];
    $generox = $_POST['generox'];
    $fnacimientox = $_POST['fnacimientox'];
    $telefonox = $_POST['telefonox'];
    $lugarnacimientox = $_POST['lugarnacimientox'];
    $estadoa = 1;
    $estadocivilx = $_POST['estadocivilx'];
    $tipocallex = $_POST['tipocallex'];
    $zonax = $_POST['zonax'];
    $mediotransx = $_POST['mediotransx'];
    $distanciax = $_POST['distanciax'];
    $factorriesgox = $_POST['factorriesgox'];
    $trabajax = $_POST['trabajax'];
    $dependenciaecox = $_POST['dependenciaecox'];
    $tarjetavacunasx = $_POST['tarjetavacunasx'];
    $esquemavacunasx = $_POST['esquemavacunasx'];
    $enfdisx = $_POST['enfdisx'];
    $premedx = $_POST['premedx'];

    $nombrespx = $_POST['nombrespx'];
    $apellidospx = $_POST['apellidospx'];
    $nacionalidadpx = $_POST['nacionalidadpx'];
    $deptonacpx = $_POST['deptonacpx'];
    $lugarnacimientopx = $_POST['lugarnacimientopx'];
    $generopx = $_POST['generopx'];
    $estadofamiliarpx = $_POST['estadofamiliarpx'];
    $graestpx = $_POST['graestpx'];
    $profpx = $_POST['profpx'];
    $direccionpx = $_POST['direccionpx'];
    $telefonopx = $_POST['telefonopx'];
    $emailpx = $_POST['emailpx'];
    $lugartrapx = $_POST['lugartrapx'];
    $fnacimientopx = $_POST['fnacimientopx'];
    $duipx = $_POST['duipx'];
    $nitpx = $_POST['nitpx'];
    $zonapx = $_POST['zonapx'];

    $duimx = $_POST['duimx'];
    $nitmx = $_POST['nitmx'];
    $nombresmx = $_POST['nombresmx'];
    $apellidosmx = $_POST['apellidosmx'];
    $fnacimientomx = $_POST['fnacimientomx'];
    $nacionalidadmx = $_POST['nacionalidadmx'];
    $lugarnacimientomx = $_POST['lugarnacimientomx'];
    $deptonacmx = $_POST['deptonacmx'];
    $zonamx = $_POST['zonamx'];
    $generomx = $_POST['generomx'];
    $estadofamiliarmx = $_POST['estadofamiliarmx'];
    $graestmx = $_POST['graestmx'];
    $profmx = $_POST['profmx'];
    $direccionmx = $_POST['direccionmx'];
    $telefonomx = $_POST['telefonomx'];
    $emailmx = $_POST['emailmx'];
    $lugartramx = $_POST['lugartramx'];

    //Ingreso
    $fechaingresox = $_POST['fechaingresox'];
    $codinfrax = $_POST['codinfrax'];
    $ciclox = $_POST['ciclox'];
    $anioelectivox = $_POST['anioelectivox'];
    $gradox = $_POST['gradox'];
    $seccionx = $_POST['seccionx'];
    $turnox = $_POST['turnox'];

    $duirx = $_POST['duirx'];
    $nitrx = $_POST['nitrx'];
    $nombresrx = $_POST['nombresrx'];
    $apellidosrx = $_POST['apellidosrx'];
    $telefonorx = $_POST['telefonorx'];
    $direccionrx = $_POST['direccionrx'];

    pg_query('BEGIN');

    $result = pg_query($conexion, "INSERT INTO alumnos(nombrea, apellidoa, nacionalidada, deptonaca, munnaca, 
    direcciona, email, generoa, fnacimientoa, telefonoa, lugarnacimientoa, estadoa, 
    estadocivila, tipocallea, zonaa, mediotransa, distanciaa, factorriesgoa, trabajaa, dependenciaecoa, tarjetavacunasa,
    esquemavacunasa, enfdisa, premeda, nombresp, apellidosp, nacionalidadp, deptonacp, lugarnacimientop, generop, 
    estadofamiliarp, graestp, profp, direccionp, telefonop, emailp, lugartrap, fnacimientop, duip, nitp, zonap, 
    duim, nitm, nombresm, apellidosm, fnacimientom, nacionalidadm, lugarnacimientom, deptonacm, zonam, generom, 
    estadofamiliarm, graestm, profm, direccionm, telefonom, emailm, lugartram, carnet)
            values (trim('$nombresx'), '$apellidosx', '$nacionalidadx', '$deptonacx', '$munnacx', '$direccionx'
            ,'$emailx', '$generox', '$fnacimientox', '$telefonox', '$lugarnacimientox', '$estadoa', '$estadocivilx'
            ,'$tipocallex', '$zonax', '$mediotransx', '$distanciax'
            ,'$factorriesgox', '$trabajax', '$dependenciaecox', '$tarjetavacunasx', '$esquemavacunasx', '$enfdisx'
            ,'$premedx', '$nombrespx', '$apellidospx', '$nacionalidadpx', '$deptonacpx', '$lugarnacimientopx'
            ,'$generopx', '$estadofamiliarpx', '$graestpx', '$profpx', '$direccionpx', '$telefonopx', '$emailpx'
            ,'$lugartrapx', '$fnacimientopx', '$duipx', '$nitpx', '$zonapx', '$duimx', '$nitmx', '$nombresmx'
            ,'$apellidosmx', '$fnacimientomx', '$nacionalidadmx', '$lugarnacimientomx', '$deptonacmx', '$zonamx'
            ,'$generomx', '$estadofamiliarmx', '$graestmx', '$profmx', '$direccionmx', '$telefonomx', '$emailmx'
            ,'$lugartramx','$carnetx')");

    //ingresar registros
    $f = pg_query($conexion, "SELECT idalum from alumnos where carnet='$carnetx'");

    while ($fila = pg_fetch_array($f)) {
        $ida = $fila[0];
    }


    $result2 = pg_query($conexion, "INSERT INTO inscripcion(fechaingreso, codinfra, ciclo, anioelectivo
    , grado, seccion, turno, duir, nitr, nombresr, apellidosr, telefonor, direccionr ,idalum) 
            values('$fechaingresox','$codinfrax','$ciclox', '$anioelectivox', '$gradox', '$seccionx'
            ,'$turnox', '$duirx', '$nitrx', '$nombresrx', '$apellidosrx', '$telefonorx', '$direccionrx','$ida')");

//fin de ingresar registro
//Ingresar imagen

if (isset($_FILES["fotox"]) && $_FILES["fotox"]["name"][0]) {
    

    if($_FILES["fotox"]["type"]=="image/jpeg" || $_FILES["fotox"]["type"]=="image/pjpeg" || $_FILES["fotox"]["type"]=="image/gif" || $_FILES["fotox"]["type"]=="image/png")
    {

        $ruta = '../images/foto_estudiantes/' . $carnetx . '/';
        $archivo = $ruta . $_FILES["fotox"]["name"];

        if (!file_exists($ruta)) {
            mkdir($ruta);
        }
        if (!file_exists($archivo)) {
            $resultado = @move_uploaded_file($_FILES["fotox"]["tmp_name"], $archivo);

            if($resultado){
                
            }else{
                echo "Error al guardar la Foto";
            }
        }else{
            echo "El archivo ya existe";
        }

    } else {
        echo "Tipo de archivo no permitido";
    }
    
} else {
    echo "Error al cargar el archivo";
}
//fin de insertar foto
    if (!$result) {
        pg_query('rollback');
        echo 'alertaError();';
        echo "<script language='javascript'>";
        echo "setTimeout ('r()', 1500);";
        echo '</script>';
    } else {
        pg_query('commit');
        echo "<script language='javascript'>";
        echo 'alertaExito();';
        echo '</script>';
        echo "<script language='javascript'>";
        echo "setTimeout ('r()', 1500);";
        echo '</script>';
    }
}
?>